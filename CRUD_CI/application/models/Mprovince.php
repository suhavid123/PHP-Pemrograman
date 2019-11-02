<?php
 defined('BASEPATH') OR exit('No direct script acces allowed');

 class Mprovince extends CI_Model
 {
 	public $name;
 	public $tabel = 'province';

 	public function __construct(){
 		parent::__construct();
 	}

 	public function get_data_province(){
 		$data = $this->db->get($this->tabel);

 		return $data->result_array();
 	}

 	public function get_by_id($id){
 		$data = $this->db->get_where($this->tabel, ['id'=> $id]);

 		return $data->row();
 	}

 	 public function insert_entry($name)
    {
        //$this->name    = $name; // please read the below note
        //$this->penerbit  = $penerbit;
        //$this->pengarang     = $pengarang;
        $data = array(
            'name' => $name,
        );

        $this->db->insert('province', $data);

        return true;
    }

     public function update_entry($id)
    {
        $data = array(
            'name' => $name
        );

        $this->db->update('province', $data, array('id' => $id));
    }

    public function delete_entry($id){
        $this->db->where('id', $id)->delete('province');
        //$this->db->delete('buku');
    }


 	public function provinces($data){
 		return $this->db->insert($this->tabel,$data);
 	}

 	public function update($id,$data){
 		$this->db->where('id',$id);
 		$this->db->update($this->tabel,$data);
 	}

 	public function delete($id) {
 		$this->db->delete($this->tabel, ['id'=>$id]);
 	}
 }