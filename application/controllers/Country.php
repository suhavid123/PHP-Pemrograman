<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Country extends CI_Controller {

	public function __construct()
    {	
        parent::__construct();
        $this->load->model('Mprovince');
    }


	public function index()
	{
		$data['province'] = $this->Mprovince->get_data_province();
		$this->view->load_template('province/index',$data);
	}
    
    public function create()
    {
        $this->view->load_template("province/create");
    }

    public function provinces()
    {


        $this->form_validation->set_rules('name', 'Nama', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->create();
        }
        $result = $this->Mprovince->insert_entry($_POST['name']);
        if ($result) {
            redirect('/Country', 'refresh');
        }
    }


    public function edit($id)
    {
        $data['province'] = $this->Mprovince->get_data_province($id);
        $this->view->load_template("province/edit",$data);
    }

    public function update()
    {
        $this->form_validation->set_rules('name', 'Nama', 'required');

        if ($this->form_validation->run() === FALSE) {
            //redirect(site_url(uri_string()), 'refresh');
        } else {
            $this->Mprovince->update_entry($_POST['id'], $_POST['name']);
            redirect('/Country', 'refresh');
        }
    }

    public function delete($id)
    {
        $this->Mprovince->delete_entry($id);
        redirect('/Country', 'refresh');
    }


}
