<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{

	
	public function index()
	{
		$this->template->load('template','page/home');
	}
}
