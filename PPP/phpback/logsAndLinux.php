<?php

class logAcumulatorControl{
    /*unserialize
    desearilizar datos que estan en una sola linea
    $linea = 'a:1:{s:5:"clave";s:5:"valor"};a:1:{s:3:"num";i:12345;};';
    $serializaciones = explode(';', $linea);
    foreach ($serializaciones as $serializado) {
    if (!empty($serializado)) {
        $data = unserialize($serializado);
        print_r($data);
    }
}
    */
    private $mainArray,$subArray,$tempArray;
    private $tempArrayCounter;
    private $data;
    
    public function __construct($data){
        $this->data = $data;
        //$this->loadMainArray();
        
    }
    private function loadMainArray() {
        $filePath = "./archivos_creados/mainArray.txt";
        if (file_exists($filePath)) {
            $serializedData = file_get_contents($filePath);
            $data = unserialize($serializedData);
            var_dump($data);
            if (is_array($data)) {
                $this->mainArray = $data;
                echo "Datos cargados correctamente.\n";
            } else {
                echo "El contenido del archivo no es un array válido.\n";
            }
        } else {
            echo "El archivo no existe. Se inicializará un array vacío.\n";
            $this->mainArray = [];
        }
    }
    private $arrayTempSize = 9;

    function resetArray(){
        $this->mainArray = array();
        $this->subArray = array();
        $this->tempArray = array();
        $this->tempArrayCounter = 0;
        file_put_contents("./archivos_creados/mainArray.txt", $this->mainArray);
        file_put_contents("./archivos_creados/counter.txt",$this->arrayTempSize);
        array_push($this->mainArray,$this->tempArray);
        echo 'Array Deleted';
    }

    function addData() {
        //$this->tempArrayCounter = intval(file_get_contents("./archivos_creados/counter.txt"));
        //puedo aplicar pilas que me lleve el control de la palabra
        //cuando la pila se vacia que empiece a buscar ; y sea lo unico que no introduzca a la cadena
        //concatenas la palabra y eso solo es un espacio y que cuando sea ; despues de la pila vacia el salto de posicion del array
        //asi te aseguras de haber leido un elemento y pueden haber 1000
        $this->tempArrayCounter = 0;
        echo "$this->tempArrayCounter\n";
        $serializaciones = explode(';', $this->data);
        $serializaciones = array_filter($serializaciones,function($valor){return !empty($valor);});//elimina el ultimo elemento de la linea si este se encuentra vacio
        $countOfSerial = count($serializaciones);
        $serialControl = 0;
        while($serialControl < $countOfSerial){
            $tempSerializado = $serializaciones[$serialControl];
            print_r($tempSerializado);
            if(!empty($tempSerializado)){
                $dataSerialTemp = unserialize($tempSerializado);
                //$this->mainArray = verifyData();
                if (is_null($this->tempArray)) {
                    $this->tempArray = [];  // Asegura que tempArray es un array
                }                
                if ($this->tempArrayCounter < $this->arrayTempSize) {
                    if (null == $this->mainArray) {
                        $this->mainArray = [];
                        $this->subArray = [];
                        $this->tempArray = [];
                        $this->tempArrayCounter = 1;
                        //file_put_contents("./archivos_creados/counter.txt",$this->arrayTempSize);

                    }
                    //array_pop($this->tempArray); // Note: This line might give an error if $this->tempArray is empty
                    $this->tempArray[] = $dataSerialTemp;        
                    //$this->subArray[] = $this->tempArray;
                    $this->arrayTempSize+=1;
                    //file_put_contents("./archivos_creados/counter.txt",$this->arrayTempSize);
                    
                } else {
                    //array_pop($this->mainArray); // Note: This line might give an error if $this->mainArray is empty
                    $this->tempArray[] = $dataSerialTemp;
                    $this->subArray[] = $this->tempArray;
                    $this->tempArray = [];
                    $this->mainArray[] = $this->subArray;
                    $this->arrayTempSize=0;
                    //file_put_contents("./archivos_creados/counter.txt",$this->arrayTempSize);
                } $serialControl += 1;
            }
        }
        print_r($this->mainArray);
    //$serializedData = serialize($this->mainArray);
    //file_put_contents("./archivos_creados/mainArray.txt", $serializedData);
    //echo "Array guardado en './archivos_creados/mainArray.txt'\n";
}
    function seeData(){
        if(!empty($this->mainArray)){print_r($this->mainArray);}
        else{echo "List Empty";}
    }
    function saveData() {
        $dataToSave = serialize($this->mainArray);
        file_put_contents('../datosparaprovar/path_to_your_file.txt', $dataToSave);
    }
    function loadData() {
        $dataFromFile = file_get_contents('../datosparaprovar/path_to_your_file.txt');
        $this->mainArray = unserialize($dataFromFile);
    }

}

class linuxCommands{
    private $archivo;
    private $mainFile;
    function __construct($archivo) {
        $this->archivo = $archivo;
        $this->mainFile = "copy grupoprueba.txt";
    }
    //CP, MV, RM, truncate Limpiar el arcvhio leido
    function copyFileLinux(){ //cp
            $command = "$this->mainFile $this->archivo";
            print($command);
        shell_exec($command);
    }
    function moveFileLinux(){ //mv
        //exec("mv $this->archivo datosparaprovar",$output,$result);
        exec("move $this->archivo datosparaprovar",$output,$result);//Windows
    }
    function removeFileLinux(){//rm
        //exec("cd datosparaprovar && rm $this->archivo",$output,$result);//Linux
        exec("cd datosparaprovar && del $this->archivo",$output,$result);//Windows
    }

    function deleteData(){        
        //exec("cd datosparaprovar && truncate -s 0 $this->archivo",$output,$result);//Linux
        exec("cd datosparaprovar && type nul > $this->archivo", $output, $result);//Windows
        echo "$result";
    }
 }

?>  

<?    
    //$log = "../data/txt/data.2024-05-15H-49-28.txt";
    //$log = unserialize(file("./archivos_creados/dataserializada.txt"));
    $log = 'a:1:{s:5:"clave";s:5:"valor"};a:1:{s:3:"num";i:12345;}';
    $hola = new logAcumulatorControl($log);
    $hola->addData();
    $hola->seeData();
    //$hola->resetArray();
    /*$log = ['a' => 2, 'b' => 3];
    $hola = new logAcumulatorControl($log);
    $hola->addData();
    $hola->seeData();*/
/*
    $log = ['a' => 2, 'b' => 3];
    $hola = new logAcumulatorControl($log);
    $hola->resetArray();
    $hola->addData();
    $hola->seeData();
*/
    //$time = "hola".date('Y-m-d-H-m-s').".txt";
    //$time = "hola2024-05-16-15-05-30.txt";
    //$linux = new linuxCommands($time);
    //$linux->copyFileLinux();
    //$linux->moveFileLinux();
    //$linux->removeFileLinux();
    //$linux -> deleteData();
?>