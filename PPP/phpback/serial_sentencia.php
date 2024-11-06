<?php
    class serial{
            private $log,$logSerializado,$logDeserelizado;
            public function __construct($log){
                $this->log = $log;
            }
            function logSerializacion(){
                $this->logSerializado = serialize($this->log);
                print_r("".$this->logSerializado."");
            }
            function logDeserelizacion(){
                $this->logDeserelizado = unserialize($this->logSerializado);
                print_r($this->logDeserelizado);
            }
            function getLog(){
                return $this->log;
            }   
            function guardarJson(){
                file_put_contents('../data/json/creada/datos'.date("Y-m-d\H-i-s").'.json',json_encode($this->logSerializado));
            }
        }

    class sentenciaLinux{
        private $Comandos;
        private $archivo;
        function __construct($Comandos){
            $this->Comandos = fopen($Comandos,"r");
            $this->archivo = $Comandos;
        }
        function comandos_linux(){    
                //shell_exec(); //Shell funciona para leer las lineas de los comandos
                $contador = 1;
                while(!feof($this->Comandos)){
                try{
                    exec(fgets($this->Comandos),$output,$result); //nos permite tener de una vez la ejecucion, la salida de es ejecucion y el resultado (si se hizo o no)
                    if(!$result){
                        echo "Linea $contador completada";
                    }else{
                        echo "Error. El comando de la linea $contador no ha podido completarse";}
                    $contador +=1;
                }catch(Exception $e){
                    echo "Se ha encontrado un error en la linea de comando".$e;
                } 
                }                
               fclose($this->archivo);      
        }
    }   

?>

<?
    //$PruebaPHP = new serial($log);

    $sentenciaVal = '../comandoslinux/comandos.txt';
    $PruebaLinux = new sentenciaLinux($sentenciaVal);
    $PruebaLinux->comandos_linux();
    $ser = new serial('../data/json/test_serdes.json');
    $ser->logSerializacion();
    $ser->logDeserelizacion();
?>