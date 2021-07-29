<?php
namespace App\Models;


class Proyectos extends Base implements Interfaz1{

    

    public function tiempo(){
        $years= floor($this->meses/12);
        $mesesRes= ($this->meses%12);
        if($mesesRes==0){
            if($years==1){
                return "El tiempo en el proyecto fue: $years Año.";
            }else{
                return "El tiempo en el proyecto fue:: $years Años.";
            } 
        }
        if($years==0){
            if($mesesRes==1){
                return "El tiempo en el proyecto fue: $mesesRes Mes.";
            }
            else{
                return "El tiempo en el proyecto fue: $mesesRes Meses.";
            }  
        }if($mesesRes!=0 && $years!=0){
            if($mesesRes==1 && $years==1){
                return "El tiempo en el proyecto fue: $years año y $mesesRes Mes";
            }
            if($years==1){
                return "El tiempo en el proyecto fue: $years año y $mesesRes Meses";
            }
            if($mesesRes==1){
                return "El tiempo en el proyecto fue: $years años y $mesesRes Mes";
            }
            if($years!=1 && $mesesRes!=1){
                return "El tiempo en el proyecto fue: $years años y $mesesRes Meses";
            }
        }        
    }  

}


?>
