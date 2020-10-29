<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Google_map extends CI_Controller
{

    //Halaman Utama Dashboard
    public function index()
    {
        $data = array(
            'title'             => 'nama_web',
            'sub_title'         => 'Wedding Organizer',
            'halaman'           => 'frontend/home/v_google_map',
        );
        $this->load->view('frontend/layout/v_wrapper', $data);
    }
}
