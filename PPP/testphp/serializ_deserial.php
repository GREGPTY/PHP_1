<?php  
class  serial_deserial{
  private $DataSerializada, $DataDeserializada,$data;
  private $positionOfMainArray,$positionOfSubArray, $mainArray =[], $subArray=[],$tempArray;

// Serialize the above data
    public function __construct(string $data){        
        //$this->data =file_get_contents($data);
        //$this->data = fopen($data,"r");
        $this->DataDeserializada = $data;
    }
    function resetPositionOfArray(){ //we can reset the position of this array and reset de array
        $this->positionOfMainArray=0;
        $this->positionOfSubArray= 0;
    }
    function serializar(){
    $this->DataSerializada = serialize($this->data);
    print_r($this->DataSerializada);
        file_put_contents('../data/txt/data'.date("Y-m-d\H-i-s").'.txt', $this->DataSerializada);
    }
    function guardarJson(){
        file_put_contents('../data/json/creada/datos'.date("Y-m-d\H-i-s").'.json',json_encode($this->DataSerializada));
    }
    function deserializar(){   
    //$this->DataDeserializada = unserialize($this->DataSerializada);
    try{
    /*while(!feof($this->data)){
    $this->DataDeserializada = unserialize(fgets($this->data));
    print_r($this->DataDeserializada);
    file_put_contents('../data/txt/datadest1'.date("Y-m-d\H-i").'.txt', '');
    $file = fopen('../data/txt/datadest1'.date("Y-m-d\H-i").'.txt', "w");
    //file_put_contents('../data/txt/datadeserializada'.date("Y-m-d\H-i-s").'.txt', $this->DataDeserializada);
        foreach($this->DataDeserializada as $final){
            fwrite($file, $final.PHP_EOL);
        }
    }*/
    while (!feof($this->data)) {
        $line = fgets($this->data); // reed data file.
        if ($line) {
            $dataDeserializada = unserialize($line); // try of unserialize the list.
            if ($dataDeserializada) {
                print_r($dataDeserializada); // Print for debug.
                $file = fopen('../data/txt/datadest1'.date("Y-m-d\H-i").'.txt', "a"); // Abrir el archivo para añadir datos.
                if (is_array($dataDeserializada)) {
                    // Si los datos deserializados son un array, recorrer y escribir cada elemento.
                    foreach ($dataDeserializada as $final) {
                        fwrite($file, print_r($final, true) . PHP_EOL); // Escribir cada elemento como texto.
                    }
                } else {
                    // Si los datos no son un array, escribir directamente.
                    fwrite($file, print_r($dataDeserializada, true) . PHP_EOL);
                }
                fclose($file); // Cerrar el archivo después de escribir.
            }
        }
    }
    }catch(Exception $e){
        echo $e->getMessage();
    }}
    function deserealizar_dos(){
    $itemss = 10; //define size of object array [[itemss],[itemss]]
    $archivo = './datosparaprovar/dataserializada.txt';
    $handle = fopen($archivo, "r");

    if ($handle) {
        $grupos = [];
        $tempGrupo = [];
        $objeto = [];        

        while (($line = fgets($handle)) !== false) {
            $temporal = unserialize($line);
            var_dump($temporal);
            $line = trim($line);
            if (strpos($temporal, 'Array') !== false && !empty($objeto)) {
                $tempGrupo[] = $objeto;
                $objeto = [];
                if (count($tempGrupo) === $itemss) {
                    $grupos[] = $tempGrupo;
                    $tempGrupo = [];
                }
            } else {
                if (preg_match('/^\[(.*?)\] => (.*)$/', $line, $matches)) {
                    $key = $matches[1];
                    $value = $matches[2];
                    $objeto[$key] = $value;
                }
            }
        }

        if (!empty($objeto)) {
            $tempGrupo[] = $objeto;
        }

        if (!empty($tempGrupo)) {
            $grupos[] = $tempGrupo;
        }

        fclose($handle);

        $archivoSalida = '../data/txt/grupos_' . date("Y-m-d\H-i-s") . '.txt';
        $outputHandle = fopen($archivoSalida, 'w');
        foreach ($grupos as $grupo) {
            foreach ($grupo as $objeto) {
                fwrite($outputHandle, print_r($objeto, true));
                fwrite($outputHandle, "\n");
            }
            fwrite($outputHandle, "-----\n");
        }
        fclose($outputHandle);

        echo "Datos guardados en '$archivoSalida'";

    } else {
        echo "No se pudo abrir el archivo.";
    }
    }

    function unserializerNine(){
            $itemss = 9; //define size of object array [[itemss],[itemss]]
            //$archivo = '../data/txt/datadest1' . date("Y-m-d\H-i") . '.txt';
            //$handle = fopen($archivo, "r");

        $this->mainArray = array_push($this->subArray);                
    }

}
 class linuxCommands{
    private $archivo;
    private $mainFile;
    function __construct(string $archivo) {
        $this->archivo = $archivo;
        $this->mainFile = "copy grupoprueba.txt";
    }
    //CP, MV, RM, Limpiar el arcvhio leido
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
    $log = "../datosparaprobar/dataserializad.txt";
    $hola = new serial_deserial($log);
    //$hola->serializar();
    //$hola->deserializar();
    $hola->deserealizar_dos();
    //$hola->guardarJson();
    //$time = "hola".date('Y-m-d-H-m-s').".txt";
    //$time = "hola2024-05-16-15-05-30.txt";
    //$linux = new linuxCommands($time);
    //$linux->copyFileLinux();
    //$linux->moveFileLinux();
    //$linux->removeFileLinux();
    //$linux -> deleteData();
?>