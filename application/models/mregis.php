<?php
class Mregis extends CI_Model
{
    function simpandata()
    {
    $data=$_POST;
    $KodeData=$data['id'];
    if($KodeData=="")
    {
        //simpan
        $this->db->insert('tb_login',$data);
        $this->session->set_flashdata('pesan','Data sudah disimpan');	
    }
    else
    {
        //edit	
        $update=array(
            'id'=>$KodeData
        );
        $this->db->where($update);
        $this->db->update('tb_login',$data);
        $this->session->set_flashdata('pesan','Data sudah diedit');
    }
    }
}
?>