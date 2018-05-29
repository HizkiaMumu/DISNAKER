<?php
class Mslider extends CI_Model{
      
    function getAll(){
        $slider = $this->db->query("SELECT * FROM banner");
        return $slider;
    }

    function baru($file){
         //$sekarang=date('Y-m-d H:i:s');
         $admin  = $this->session->userdata['USERNAME'];
         $data=array('JUDUL'            =>  $this->input->post('judul'),
                     'NAMAFILE'         =>  $file,
                     'ADMIN'            =>  $admin,
                     'LASTUPDATE'       =>  waktu());
          $this->db->insert("banner",$data);
    }
    
    function delete($id){
        $slider = $this->db->query("DELETE FROM banner WHERE IDFILE='$id'");
        return $slider;
    }

    function getOne($id){
        $slider = $this->db->query("SELECT * FROM banner WHERE IDFILE='$id'");
        return $slider;
    }

     function update_slider($file){
         if($file ==''){
            $data=array('JUDUL'            =>  $this->input->post('judul'),
                        'NAMAFILE'         =>  $file,
                        'ADMIN'            =>  $admin,
                        'LASTUPDATE'       =>  waktu());
         }else{
            $data=array('JUDUL'            =>  $this->input->post('judul'),
                        'NAMAFILE'         =>  $file,
                        'ADMIN'            =>  $admin,
                        'LASTUPDATE'       =>  waktu());
        }
        $this->db->where('IDFILE',$this->input->post('id'));
        $this->db->update('banner',$data);
    }
}