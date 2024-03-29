<?php 

class Image {

	protected $image;
	protected $width;
	protected $height;
	protected $mimetype;

	public function __construct($filename) {
		# Read the image file to a binary buffer
		$fp  = fopen($filename, 'rb') or die("Image '$filename' not found!");
		$buf = '';
		while(!feof($fp))
		    $buf .= fgets($fp, 4096);

		/*
		Create image and asign it to the image property
		$this is a built in variable that points to the current object. 
		It's used to access properties and methods of the current class.
		*/
		$this->image = imagecreatefromstring($buf);

		# Extract image information storing in the class attributes
		$info           = getimagesize($filename);
		$this->width    = $info[0];
		$this->height   = $info[1];
		$this->mimetype = $info['mime'];
	}

	public function display () {
	  header("Content-type: {$this->mimetype}");
	  switch($this->mimetype) {
	      case 'image/jpeg': imagejpeg($this->image); break;
	      case 'image/png': imagepng($this->image); break;
	      case 'image/gif': imagegif($this->image); break;
	  }
 }

	public function resize ($width, $height) {
		$thumb = imagecreatetruecolor($width, $height);
		imagecopyresampled($thumb, $this->image, 0, 0, 0, 0, $width, $height, $this->width, $this->height);
		$this->image = $thumb;
 }

} #eoc (end of class)

?>