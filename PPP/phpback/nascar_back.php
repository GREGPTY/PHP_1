<?php
class nascar_back{
    private $HabilidadDelPiloto;
    private $PosicionInicial;
    private $CaballosDeFuerza;

    /*public function __construct($HabilidadDelPiloto, $PosicionInicial, $CaballosDeFuerza){
        $this->HabilidadDelPiloto = $HabilidadDelPiloto;
        $this->PosicionInicial = $PosicionInicial;
        $this->CaballosDeFuerza = $CaballosDeFuerza;
    }*/
    public function construct($HabilidadDelPiloto, $PosicionInicial, $CaballosDeFuerza){
        $this->HabilidadDelPiloto = $HabilidadDelPiloto;
        $this->PosicionInicial = $PosicionInicial;
        $this->CaballosDeFuerza = $CaballosDeFuerza;
    }
    /*function setHabDePiloto($HabilidadDelPiloto){
        $this->HabilidadDelPiloto=$HabilidadDelPiloto;
    }
    function setPosicionInicial($PosicionInicial){
        $this->PosicionInicial = $PosicionInicial;
    }
    function setCaballosDeFuerza($CaballosDeFuerza){
       $this->CaballosDeFuerza = $CaballosDeFuerza;
    }*/
    function getHabDePiloto(){
        return $this->HabilidadDelPiloto;
    }
    function getPosicionInicial(){
        return $this->PosicionInicial;
    }
    function getCaballosDeFuerza(){
       return $this->CaballosDeFuerza;
    }
    public function AgregarPosicion() {
        $pia = 10; $pos_prueba=18;
        $pip= (($this->CaballosDeFuerza/400)*(($this->HabilidadDelPiloto/10)/($pos_prueba/18))/18*100);
         if($pip>=$pia){
            $de = "Es bienvenido";
         }else{
            do{ $pos_prueba -=1;               
                $pip= (($this->CaballosDeFuerza/400)*(($this->HabilidadDelPiloto/10)/($pos_prueba/18))/18*100);
            }while($pip<$pia);
            $de = "<br> Para alcanzar un porcentaje (%) 
                    satisfactorio minimo,
                    Requiere como minimo
                    salir en la posicion N: ".$pos_prueba;
            }             
        
        return $de;
    }
    public function PorcentajeAceptable() {
        $pa = (($this->CaballosDeFuerza/400)*(($this->HabilidadDelPiloto/10)/($this->PosicionInicial/18))/18*100);
        return '<br>El porcentaje estimado para el corredor intrucido es de: '.$pa .'%';
    }

}
?>