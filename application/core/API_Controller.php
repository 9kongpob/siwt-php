<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class API_Controller extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
    }
    
    //แปลงค่าให้อยู่ในรูปแบบ JSON Format
    public function json($data, $status = 200)
    {
        $this->output
            ->set_status_header($status)
            ->set_content_type('application/json')
            ->set_output(json_encode($data));
    }    
    

}
