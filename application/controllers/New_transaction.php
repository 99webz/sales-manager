<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class New_transaction extends CI_Controller 
{
	
	public function index()
	{
		$data['page_title'] = 'Add New Transaction';
		$this->load->view('new_transaction',$data);
	}
}