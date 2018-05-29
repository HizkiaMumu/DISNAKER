<?php
    function selamat(){
        date_default_timezone_set("Asia/makassar");
        $jam = date("H:i:s");
        if($jam <='05:00:00'){
            echo "Selamat dini hari";
        }elseif($jam >='05:00:01' AND $jam <='11:00:00'){
            echo "Selamat Pagi";
        }elseif($jam >='11:00:01' AND $jam <='15:00:00'){
            echo "Selamat Siang";
        }elseif($jam >='15:00:01' AND $jam <='18:00:00'){
            echo "Selamat Sore";
        }elseif($jam >='18:00:01'){
            echo "Selamat Malam";
        }else{
            
        }
    }

    function tgl_indo($tgl){
        return substr($tgl, 8, 2).' '.getbln(substr($tgl, 5,2)).' '.substr($tgl, 0, 4);
   }
    
    
    function getbln($bln){
        switch ($bln) 
        {
            
            case 1:
                return "Januari";
            break;
        
            case 2:
                return "Februari";
            break;
        
            case 3:
                return "Maret";
            break;
        
            case 4:
                return "April";
            break;
        
            case 5:
                return "Mei";
            break;
        
            case 6:
                return "Juni";
            break;
        
            case 7:
                return "Juli";
            break;
        
            case 8:
                return "Agustus";
            break;
        
            case 9:
                return "September";
            break;
        
             case 10:
                return "Oktober";
            break;
        
            case 11:
                return "November";
            break;
        
            case 12:
                return "Desember";
            break;
        }
        
    }