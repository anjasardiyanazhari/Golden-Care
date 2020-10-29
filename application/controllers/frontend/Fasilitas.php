<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fasilitas extends CI_Controller
{

    //Halaman Utama Dashboard
    public function index()
    {
        $data = array(
            'title'             => 'nama_web',
            'sub_title'         => 'Wedding Organizer',
            'halaman'           => 'frontend/home/v_fasilitas',
        );
        $this->load->view('frontend/layout/v_wrapper', $data);
    }
    public function Paket_Rumahan()
    {
        $data = array(
            'title'             => 'nama_web',
            'sub_title'         => 'Wedding Organizer',
            'halaman'           => 'frontend/home/v_paket_rumahan',
        );
        $this->load->view('frontend/layout/v_wrapper', $data);
    }

    public function Paket_Gedung()
    {
        $data = array(
            'title'             => 'nama_web',
            'sub_title'         => 'Wedding Organizer',
            'halaman'           => 'frontend/home/v_paket_gedung',
        );
        $this->load->view('frontend/layout/v_wrapper', $data);
    }
}
