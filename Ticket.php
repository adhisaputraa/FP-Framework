<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    // Halaman Utama
    public function index() {
        $this->load->view('home_view'); // Menampilkan halaman home
    }

    // Halaman Pemesanan Tiket
    public function ticket() {
        $this->load->view('ticket_view'); // Menampilkan halaman ticket
    }

    // Konfirmasi Pemesanan Tiket
    public function ticket_confirm() {
        // Menangkap data dari form pemesanan
        $data['name'] = $this->input->post('name');
        $data['transport_type'] = $this->input->post('transport_type');
        $data['departure'] = $this->input->post('departure');
        $data['destination'] = $this->input->post('destination');
        $data['date'] = $this->input->post('date');
        $data['passengers'] = $this->input->post('passengers');

        // Menampilkan halaman konfirmasi
        $this->load->view('ticket_view', $data);
    }

    // Halaman Daftar Harga
    public function pricing() {
        $this->load->view('pricing_view'); // Menampilkan halaman pricing
    }

    // Halaman Tentang Kami
    public function about() {
        $this->load->view('about_view'); // Menampilkan halaman about
    }

    // Halaman Kontak
    public function contact() {
        $this->load->view('contact_view'); // Menampilkan halaman contact
    }
}
