<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH .'libraries/Format.php';

class transaksi extends REST_Controller
{
    public function __construct()
    {
        // Construct the parent class
        parent::__construct();

        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        $this->methods['users_get']['limit'] = 500; // 500 requests per hour per user/key
        $this->methods['users_post']['limit'] = 100; // 100 requests per hour per user/key
        $this->methods['users_delete']['limit'] = 50; // 50 requests per hour per user/key
        $this->load->model('transaksi_model','transaksi');
    }

    public function index_get()
    {
        $id = $this->get('id_transaksi');

        if ($id === NULL) {
            $transaksi = $this->transaksi->getAllTransaksiUserKategori();
        }else{
            $transaksi = $this->transaksi->getAllTransaksiUserKategoriById($id);
        }

        if($transaksi) {
            $this->response([
                'status' => true,
                'data' => $transaksi
            ], REST_Controller::HTTP_OK);
        }else {
             $this->response([
                'status' => false,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete() {
        $id = $this->delete('id_transaksi');

        if($id === null) {
            $this->response([
                'status' => false,
                'message' => 'provide an id!'
            ], REST_Controller::HTTP_BAD_REQUEST);

        }else{
            $id = $this->delete('id_transaksi');
            $this->db->where('id_transaksi', $id);
            $this->db->delete('transaksi');
            $messages = array('status' => "Data berhasil dihapus");
            $this->set_response($messages, REST_Controller::HTTP_NO_CONTENT);
        }
    }

    public function index_post()
    {
        $tgl_sewa = date('yy-m-d');
        $tgl_checkout = date('yy-m-d');
        $data = [
            "id_kamar" => $this->input->post('id_kamar', true), // ini sama dengan htmlspecialchars($_POST['nama'])
            "id_penyewa" => $this->input->post('id_penyewa', true),
            "tgl_sewa" => $tgl_sewa,
            "tgl_checkout" => $tgl_checkout,
            "status" => 'Booked'
        ];
        //$id_kamare = $this->input->post('id_kamar', true);
        $this->db->insert('transaksi', $data);
        $this->set_response($data, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code
    }

    public function index_put()
    {
        $id = $this->put('id_transaksi');

        $data = [
            'tgl_checkout' => $this->put('tgl_checkout'),
            'status' => $this->put('status')
        ];

        $this->transaksi->ubahDataTransaksi($data, $id);
        $this->set_response($data, REST_Controller::HTTP_CREATED);
        
    }
}