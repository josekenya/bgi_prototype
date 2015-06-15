<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_auth extends CI_Controller {

	public function index()
	{
		$this->template->load('login_tmp','pages/login_v');
	}
	public function dashboard()
	{

	}
}
