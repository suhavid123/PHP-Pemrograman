<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class City extends CI_Controller {

	public function __construct()
    {	
        parent::__construct();
        $this->load->model('Mcity');
    }


	public function index()
	{
		$data['city'] = $this->Mcity->get_data_city();
		$this->view->load_template('city/index',$data);
	}
    
    public function create()
    {
        $this->view->load_template("city/create");
    }

    public function citys()
    {


        $this->form_validation->set_rules('name', 'Nama', 'required');
         $this->form_validation->set_rules('province_id', 'Province_id', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->create();
        }
        $result = $this->Mcity->insert_entry($_POST['name'],$_POST['province_id']);
        if ($result) {
            redirect('/City', 'refresh');
        }
    }


    public function edit($id)
    {
        $data['city'] = $this->Mcity->get_data_city($id);
        $this->view->load_template("city/edit",$data);
    }

    public function update()
    {
        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('province_id', 'Province_id', 'required');

        if ($this->form_validation->run() === FALSE) {
            //redirect(site_url(uri_string()), 'refresh');
        } else {
            $this->Mcity->update_entry($_POST['id'], $_POST['name'], $_POST['province_id']);
            redirect('/City', 'refresh');
        }
    }

    public function delete($id)
    {
        $this->Mcity->delete_entry($id);
        redirect('/City', 'refresh');
    }


}
