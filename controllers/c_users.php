<?php
class users_controller extends base_controller {

    public function __construct() {
        parent::__construct();
    } 

    public function index() {
        
        # If not logged in
        if(!$this->user){
            Router::redirect('/users/login');
        # If logged in
        } else {
            Router::redirect('/posts/users');
        }
    }

    public function login($error = NULL) {
        
        # If logged in, redirect to home
        if ($this->user) {
            Router::redirect('/');
        }

        # Set up the view
        $this->template->content = View::instance('v_index_index');
        $this->template->title = 'Log in';

        # Pass error to the view
        $this->template->content->error = $error;

        # Display the view
        echo $this->template;
    }

    public function p_login() {

        # Sanitize input
        $_POST = DB::instance(DB_NAME)->sanitize($_POST);

        # Hash submitted password so we can compare it against one in db
        $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);

        # Search db for this email and password
        # Retrieve token if it's available
        $q = 
            "SELECT token
            FROM users
            WHERE email = '".$_POST['email']."'
            AND password = '".$_POST['password']."'";

        $token = DB::instance(DB_NAME)->select_field($q);

        # If token found, login!
        if ($token) {

            # Set cookie
            setcookie('token', $token, strtotime('+1 year'), '/');

            # Send to home view
            Router::redirect('/');

        # If no token found, failed
        } else {

            # search db for existing email
            $q = 
            "SELECT email
            FROM users
            WHERE email = '".$_POST['email']."'";
            
            $email = DB::instance(DB_NAME)->select_field($q);

            # if no email exists, send error
            if (!$email) {
                Router::redirect("/users/login/error1");
            
            # if email exists, check password
            } else {
            
                $q = 
                "SELECT password
                FROM users
                WHERE email = '".$_POST['email']."'";

                $password = DB::instance(DB_NAME)->select_field($q);
            
                # compare passwords
                if ($_POST['password'] != $password)

                 Router::redirect("/users/login/error2");
            
            }

        }

    }

    public function logout() {

        # If not logged in
        if(!$this->user){
            Router::redirect('/users/login');
        }

        # Generate a new token so old token cannot work anymore for security reasons
        $new_token = sha1(TOKEN_SALT.$this->user->email.Utils::generate_random_string());

        # Make array to insert into db
        $data = Array('token' => $new_token);

        # Insert new token into db
        DB::instance(DB_NAME)->update('users', $data, 'WHERE user_id =' . $this->user->user_id);
    
        # Remove old token by setting expiration to time in past
        setcookie('token', '', strtotime('-1 year'), '/');

        # Redirect to homepage
        Router::redirect('/');

    }

    // public function profile($user_name = NULL) {

    //     # If user not logged in
    //     if (!$this->user) {
    //         Router::redirect('/users/login');
    //     }

    //     ## Set up the View
    //     # Set user's profile View as content in base View class
    //     $this->template->content = View::instance('v_users_profile');

    //     # Set title of base View class
    //     $this->template->title = "Profile of ".$this->user->first_name;

    //     # Pass header links
    //     // $client_files_head = Array(
    //     //     '/css/profile.css'
    //     //     );

    //     # Convert paths in array to link/script tag and add to document head
    //     //$this->template->client_files_head = Utils::load_client_files($client_files_head);

    //     # Pass body links
    //     // $client_files_body = Array(
    //     //     '/js/profile.js'
    //     //     );

    //     # Convert paths in array to link/script tag and add to document head
    //     //$this->template->client_files_body = Utils::load_client_files($client_files_body);

    //     # Pass the data to the View
    //     $this->template->content->user_name = $user_name;

    //     # Display the View
    //     echo $this->template;

    // }

    // signup method to display information
    public function signup($error = NULL) {

        # If logged in, redirect to home
        if ($this->user) {
            Router::redirect('/');
        }

        # Set up the view
        $this->template->content = View::instance('v_users_signup');
        $this->template->title = "Sign up";

        # Pass error to the View
        if ($error == 'error1') {
            $error = '<h4>All fields must be filled out.</h4>';
        } elseif ($error == 'error2') {
            $error = '<h4>User already exists.<br>Please <a href="/users/login">Login</a></h4>';
        } elseif ($error == 'error3') {
            $error = '<h4>Password must be 8 characters or more.</h4>';
        }

        $this->template->content->error = $error;

        # Render the view
        echo $this->template;

    }

    // signup method to process information
    public function p_signup() {        

        # Error checking
        # Check for blank fields
        if (($_POST['first_name'] == '') || ($_POST['last_name'] == '') || ($_POST['email'] == '') || ($_POST['password'] == '')) {

            # Return to signup page with error
            Router::redirect('/users/signup/error1');
        }

        # Check for existing email
        # Search db for this email
        $q = 
            "SELECT email
            FROM users
            WHERE email = '".$_POST['email']."'";

        $email = DB::instance(DB_NAME)->select_field($q);

        if ($_POST['email'] == $email) {
            Router::redirect('/users/signup/error2');
        }

        # Check password length > 8
        if (strlen($_POST['password']) < 8) {

            # Return to signup page with error
            Router::redirect('/users/signup/error3');
        }            


        # Add time created to user signup
        $_POST['created'] = Time::now();
        $_POST['modified'] = Time::now();

        # Encrypt password
        $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);

        # Make token
        $_POST['token'] = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string());

        # Insert this user into the database
        $user_id = DB::instance(DB_NAME)->insert('users', $_POST);

        # Auto Login 
            
            # Set cookie
            setcookie('token', $_POST['token'], strtotime('+1 year'), '/');

            # Send to home view
            Router::redirect('/posts/index');
    }

} # end of the class