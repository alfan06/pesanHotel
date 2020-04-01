<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH .'libraries/Format.php';

class kamar extends REST_Controller
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
        $this->load->model('kamar_model','kamar');
    }

    public function index_get()
    {
        $id = $this->get('id_kamar');

        if ($id === NULL) {
            $kamar = $this->kamar->getAllKamar();
        }else{
            $kamar = $this->kamar->getKamarById($id);
        }

        if($kamar) {
            $this->response([
                'status' => true,
                'data' => $kamar
            ], REST_Controller::HTTP_OK);
        }else {
             $this->response([
                'status' => false,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete() {
        $id = $this->delete('id_kamar');

        if($id === null) {
            $this->response([
                'status' => false,
                'message' => 'provide an id!'
            ], REST_Controller::HTTP_BAD_REQUEST);

        }else{
            $this->kamar->hapusDataKamar($id);
                //ok
                $this->response([
                    'status' => true,
                    'id' => $id,
                    'message' => 'deleted.'
                ], REST_Controller::HTTP_OK);
        }
    }

    public function index_post()
    {
        // $this->some_model->update_user( ... );
        $data = [
            'nama_kamar' => $this->post('nama_kamar'),
            'jenis_kamar' => $this->post('jenis_kamar'),
            'harga' => $this->post('harga')
        ];

        $this->kamar->tambahDataKamar($data);
        $this->set_response($data, REST_Controller::HTTP_CREATED);
    }

    public function index_put()
    {
        $id = $this->put('id_kamar');

        $data = [
            'nama_kamar' => $this->put('nama_kamar'),
            'jenis_kamar' => $this->put('jenis_kamar'),
            'harga' => $this->put('harga')
        ];

        $this->kamar->ubahDataKamar($data, $id);
        $this->set_response($data, REST_Controller::HTTP_CREATED);
        
    }
}