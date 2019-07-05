<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends API_Controller {

	public function index()
	{
		$this->load->database();
		$members = $this->db->get('members');
		$this->json([
			'message' => 'successful.',
			'members' => $members->result()
		]);

	}
}
