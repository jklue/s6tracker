<?php 

class equipment_controller extends base_controller {

  public function __construct() {
      parent::__construct();

	      # Make sure user logged in
	      if(!$this->user) {
	       	Router::redirect('/');
      	}
  }

  public function index() {
        
      # If coming to this controller with no specified method, return home
      Router::redirect('/');
  }

	public function organization($platoon = NULL, $vehicle = NULL, $equipment = NULL) {

		# Set up the view
			$this->template->content = View::instance('v_equipment_organization');
			$this->template->title = "B Company";

		# Build the query
			$q = "SELECT
							organization_equipment_id,
							platoon,
							vehicle,
							equipment,
							sn,
							status,
							comment
						FROM organization_equipments";

		# Store all posts in array as you run the query
		$equipments = DB::instance(DB_NAME)->select_rows($q);

		// echo "<pre>";
		// print_r($equipments);
		// echo "</pre>";

		# If on platoon level, find unique platoon names
		if($platoon == NULL):
			
			# Tell the View which data to show
			$this->template->content->data = 'platoon';

			# Pass the data to the View
			$this->template->content->equipments = $equipments;

		# Else if on vehicle level, find vehicles
		elseif ($vehicle == NULL):

			# Find bumper_numbers for current platoon
			$vehicleInfo = array(); // initialize array that holds display info
			foreach($equipments as $key=>$vehicle): // cycle through all db results
				if ($platoon == $vehicle['platoon']): // if platoon value matches the platoon we are in...
					$vehicleInfo[$key]['platoon'] = $vehicle['platoon'];
					$vehicleInfo[$key]['bumper-number'] = $vehicle['vehicle']; // add vehicle number to bumper number array
					$vehicleInfo[$key]['status'] = 'g'; // set default status to green
				endif;
			endforeach;
			$vehicleInfo = array_unique($vehicleInfo, SORT_REGULAR); // remove duplicate values			

			# Check for vehicle status'
			foreach($equipments as $vehicle): // cycle through all db results
				foreach($vehicleInfo as $key=>$bumper_number):
					if (($vehicle['vehicle'] == $bumper_number['bumper-number']) && ($vehicle['status'] == 'a')): //  if any sub-equipment is amber...
						if ($vehicleInfo[$key]['status'] == 'r'): // end foreach loop so later amber doesn't replace red status
							break;
						endif;
						$vehicleInfo[$key]['status'] = 'a'; // add amber status to vehicle
					elseif (($vehicle['vehicle'] == $bumper_number['bumper-number']) && ($vehicle['status'] == 'r')): //  if any sub-equipment is red, assign status and quit loop...
						$vehicleInfo[$key]['status'] = 'r'; // add red status to vehicle
					endif;
				endforeach;
			endforeach;

			# Send vehicle status to View
			$this->template->content->vehicleInfos = $vehicleInfo;

			# Tell the View which data to show
			$this->template->content->data = 'vehicle';

		# Else if on equipment level, find equipment
		elseif ($equipment == NULL):

			# Create new array with only equipment from selected vehicle
			$equipmentInfo = array(); // initialize array that holds display info			
			foreach($equipments as $key=>$equipment): // cycle through all db results
				if ($vehicle == $equipment['vehicle']): // if platoon value matches the platoon we are in...
					$equipmentInfo[$key]['platoon'] = $equipment['platoon']; // for adding to url
					$equipmentInfo[$key]['vehicle'] = $equipment['vehicle']; // for adding to url
					$equipmentInfo[$key]['equipment'] = $equipment['equipment']; // set default status to green
					$equipmentInfo[$key]['status'] = $equipment['status']; // get current status
					$vehicleName = $equipment['vehicle']; // get vehicle name for display
				endif;
			endforeach;		

			# Send equipment status to View
			$this->template->content->equipmentInfos = $equipmentInfo;

			// echo "<hr>";
			// echo "<pre>";
			// print_r($equipmentInfo);
			// print_r($vehicleName);
			// echo "</pre>";

			# Send vehicle name to view
			$this->template->content->vehicle = $vehicleName;

			# Tell the View which data to show
			$this->template->content->data = 'equipment';

		# Else on status level
		else:

			# Create new array with only equipment from selected vehicle
			$statusInfo = array(); // initialize array that holds display info
			foreach($equipments as $key=>$status): // cycle through all db results
				if (($equipment == $status['equipment']) && ($vehicle == $status['vehicle'])): // if equipment matches passed equipment parameter and vehicle matches passed vehicle parameter
					$statusInfo[$key]['id'] = $status['organization_equipment_id']; // get row id for updating status and comment
					$statusInfo[$key]['platoon'] = $status['platoon']; // for adding to url
					$statusInfo[$key]['vehicle'] = $status['vehicle']; // for adding to url
					$statusInfo[$key]['equipment'] = $status['equipment']; // for adding to url
					$statusInfo[$key]['sn'] = $status['sn']; // get serial number
					$statusInfo[$key]['status'] = $status['status']; // get current status
					$statusInfo[$key]['comment'] = $status['comment']; // get comment
				endif;
			endforeach;			

			# Send status to View
			$this->template->content->statusInfo = $statusInfo;

			# Tell the View which data to show
			$this->template->content->data = 'status';

		endif;

		# Render the view
		echo $this->template;

	}

	public function p_changeStatus($id = NULL, $platoon = NULL, $vehicle = NULL, $equipment = NULL, $status = NULL) {

		// # Unix timestamp of creation/modification
		// $_POST['created'] = Time::now();
		// $_POST['modified'] = Time::now();

		# Prepare the data to update
		$data = Array("status" => $status);

		# Prepare the where_condition
		$where_condition = "
			WHERE organization_equipment_id=" . $id;

		# Insert data
		DB::instance(DB_NAME)->update('organization_equipments', $data, $where_condition);

		# Refresh page
		Router::redirect("/equipment/organization/$platoon/$vehicle/$equipment");

	}

	public function p_addComment($id = NULL, $platoon = NULL, $vehicle = NULL, $equipment = NULL, $status = NULL) {

		// echo "<pre>";
		// echo $_POST['comment'];
		// echo $_POST['id'];
		// echo "</pre>";

		# Prepare the data to update
		$data = Array("comment" => $_POST['comment']);

		# Prepare the where_condition
		$where_condition = "
			WHERE organization_equipment_id=" . $_POST['id'];

		# Insert data
		DB::instance(DB_NAME)->update('organization_equipments', $data, $where_condition);

		# Refresh page
		Router::redirect("/equipment/organization/".$_POST['platoon']."/".$_POST['vehicle']."/".$_POST['equipment']."/commentSuccess");
	}

	public function p_changeSN($id = NULL, $platoon = NULL, $vehicle = NULL, $equipment = NULL, $sn = NULL) {

		// echo "<pre>";
		// echo $_POST['sn'];
		// echo "<br>";
		// echo $_POST['equipment'];
		// echo "</pre>";

		# Prepare the data to update
		$data = Array("sn" => $_POST['sn']);

		# Prepare the where_condition
		$where_condition = "
			WHERE organization_equipment_id=" . $_POST['id'];

		# Insert data
		DB::instance(DB_NAME)->update('organization_equipments', $data, $where_condition);

		# Refresh page
		Router::redirect("/equipment/organization/".$_POST['platoon']."/".$_POST['vehicle']."/".$_POST['equipment']."/serialnSuccess");

	}

} # eoc 

?>