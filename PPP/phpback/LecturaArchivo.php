<?php
    class LecturaArchivo{
        private $file;
        public function __construct(string $file){
        $this->file = $file;
        }
        public function lecturaDeDatos(){
            if(($archivo = fopen($this->file,"r")) ==!false){
                
                echo "<table>";
                while(($datos = fgetcsv($archivo, 1000, ";"))==!false){ //lectura del archivo, cantidad de caracteres por linea y el limitador
                    echo "<br>";
                    foreach($datos as $key => $dato){
                        echo "<td> $dato <td>";
                    }
                }
                fclose($archivo);
                echo "</table>";
            }else{
                echo "No se pudo abrir el archivo";
            }
        }
    }
?>

<?php
    $dato = new LecturaArchivo("../data/csv/data.csv");
    $dato->lecturaDeDatos();
    $adminserialice = serialize($dato);
?>