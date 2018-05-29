<?php
class mod_berkas extends CI_Model{
      
    function getAllBerkas(){
        $berkas = $this->db->query("SELECT * FROM berkas ORDER BY IDBERKAS ASC");
        return $berkas;
    }

    function getBerkas($idpen){
        $berkas = $this->db->query("SELECT berkas.IDBERKAS, berkas.NAMABERKAS, berkas.JUMLAH, berkas.KETERANGAN, berkas_cek.STATUS FROM berkas, berkas_cek WHERE berkas.IDBERKAS = berkas_cek.IDBERKAS AND berkas_cek.IDPENDAFTAR ='$idpen' ORDER BY berkas.IDBERKAS ASC");
        return $berkas;
    }

    function kosongkancek($idpen){
        $cekberkas = $this->db->query("UPDATE berkas_cek SET STATUS ='0' WHERE IDPENDAFTAR = '$idpen'");
        return $cekberkas;
    }

    function updatecek($idpen, $cek){
        $cekberkas = $this->db->query("UPDATE berkas_cek SET STATUS ='1' WHERE IDPENDAFTAR = '$idpen' AND IDBERKAS = '$cek'");
        return $cekberkas;
    }

    function BerkasLengkap($idpen){
        $cekberkas = $this->db->query("UPDATE registrasi_beasiswa SET berkas ='1' WHERE id = '$idpen'");
        return $cekberkas;
    }

    function baru($foto){
        $data=array('NAMABERKAS'      => $this->input->post('nama'),
                    'JUMLAH'          => $this->input->post('ibu'),
                    'KETERANGAN'      => $this->input->post('alamatortu'));
        $this->db->insert("berkas",$data);
        return $NOPESERTA;
    }


    function edit($foto){
        $data=array('NAMABERKAS'      => $this->input->post('nama'),
                    'JUMLAH'          => $this->input->post('ibu'),
                    'KETERANGAN'      => $this->input->post('alamatortu'));

        $this->db->where('IDBERKAS', $id);
        $this->db->update('berkas',$data);
    }

    function getOneBerkas(){
        $idberkas = $this->input->post('idberkas');
        $satu = $this->db->query("SELECT * FROM berkas WHERE IDBERKAS='$idberkas'");
        return $satu;
    }

    function inputCekBerkas(){
        $a = $this->db->query("SELECT MAX(ID) as max_id FROM pendaftar")->row_array();
        $id_max = $a['max_id'];

        $berkas = $this->db->query("SELECT * FROM berkas ORDER BY IDBERKAS ASC");
        foreach ($berkas->result() as $data) {
          $data=array('IDPENDAFTAR'  => $id_max,
                      'IDBERKAS'     => $data->IDBERKAS,
                      'STATUS'       => '0');
          $this->db->insert("berkas_cek",$data);
        }

    }

    function delete($id){
        $delete = $this->db->query("DELETE FROM berkas WHERE IDBERKAS='$id'");
        return $delete;
    }

    
}