<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('main');
	}

	public function test()
	{
		 header( "Content-type: text/xml");
 
		 echo "<?xml version='1.0' encoding='UTF-8'?>
		 <rss version='2.0'>
		 <channel>
		 <title>| RSS</title>
		 <link>/</link>
		 <description>Cloud RSS</description>
		 <language>en-us</language>";

		 echo "<item>
		   <title>Title</title>
		   <link>Link</link>
		   <description>description</description>
		   </item>";
		 echo "</channel></rss>";

	}


}
