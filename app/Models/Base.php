<?php
namespace App\Models;

    class Base {
        protected $nombreTrabajo;
        protected $descripcionTrabajo;
        protected  $meses;
    
        public function __construct ($nombreT, $descripcionT, $mesesT){
            if($nombreT==Null){
                $this->nombreTrabajo="No se guardo valor del nombre de la experiencia";
            }else{
                $this->nombreTrabajo=$nombreT;
            }
            $this->descripcionTrabajo=$descripcionT;
            $this->meses=$mesesT;
        } 
    
        public function mostrarNombre(){
            return $this->nombreTrabajo;
        }
    
    
        public function mostrarDescripcion(){
            return $this->descripcionTrabajo;
        }
    
        public function mostrarMeses(){
            return $this->meses;
        }
        public function tiempo (){
            $years= floor($this->meses/12);
            $mesesRes= ($this->meses%12);
            if($mesesRes==0){
                if($years==1){
                    return "El tiempo de experiencia es: $years Año.";
                }else{
                    return "El tiempo de experiencia es: $years Años.";
                } 
            }
            if($years==0){
                if($mesesRes==1){
                    return "El tiempo de experiencia es: $mesesRes Mes.";
                }
                else{
                    return "El tiempo de experiencia es: $mesesRes Meses.";
                }  
            }if($mesesRes!=0 && $years!=0){
                if($mesesRes==1 && $years==1){
                    return "El tiempo de experiencia es: $years año y $mesesRes Mes";
                }
                if($years==1){
                    return "El tiempo de experiencia es: $years año y $mesesRes Meses";
                }
                if($mesesRes==1){
                    return "El tiempo de experiencia es: $years años y $mesesRes Mes";
                }
                if($years!=1 && $mesesRes!=1){
                    return "El tiempo de experiencia es: $years años y $mesesRes Meses";
                }
            }        
        }  
    }

?>