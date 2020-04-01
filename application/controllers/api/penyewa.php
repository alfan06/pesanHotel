<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH .'libraries/Format.php';

class penyewa extends REST_Controller
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
        $this->load->model('penyewa_model','penyewa');
    }

    public function index_get()
    {
        $id = $this->get('id_penyewa');

        if ($id === NULL) {
            $penyewa = $this->penyewa->getAllPenyewa();
        }else{
            $penyewa = $this->penyewa->getPenyewaById($id);
        }

        if($penyewa) {
            $this->response([
                'status' => true,
                'data' => $penyewa
            ], REST_Controller::HTTP_OK);
        }else {
             $this->response([
                'status' => false,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete() {
        $id = $this->delete('id_penyewa');

        if($id === null) {
            $this->response([
                'status' => false,
                'message' => 'provide an id!'
            ], REST_Controller::HTTP_BAD_REQUEST);

        }else{
            $this->penyewa->hapusDataPenyewa($id);
                //ok
            $this->set_response([
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
            'nama_penyewa' => $this->post('nama_penyewa'),
            'no_hp' => $this->post('no_hp'),
            'jenis_kelamin' => $this->post('jenis_kelamin')
        ];

        $this->penyewa->tambahDataPenyewa($data);
        $this->set_response($data, REST_Controller::HTTP_CREATED);
    }

    public function index_put()
    {
        $id = $this->put('id_penyewa');

        $data = [
            'nama_penyewa' => $this->put('nama_penyewa'),
            'no_hp' => $this->put('no_hp'),
            'jenis_kelamin' => $this->put('jenis_kelamin')
        ];

        $this->kamar->ubahDataPenyewa($data, $id);
        $this->set_response($data, REST_Controller::HTTP_CREATED);
        
    }
}