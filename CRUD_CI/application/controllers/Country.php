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
        $data['province'] = $this->Mprovince->get_by_id($id);
        $this->view->load_template("province/edit",$data);
    }

    public function update()
    {
        $data = $this->input->post();
        $edit = ['name' => $data['name']];

        $result = $this->Mprovince->update($data['id'],$edit);
        if($result){
            redirect('Country');
        }
    }

    public function delete($id)
    {
        $this->Mprovince->delete_entry($id);
        redirect('/Country', 'refresh');
    }


}
