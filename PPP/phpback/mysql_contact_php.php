
<?php
        
    class Mysql_contact_php{
        private $name;
        private $email;
        private $message;

        function set_name($name){
            $this->name = $name;
        }
        function set_email($email){
            $this->email = $email;
        }
        function set_message($message){
            $this->message = $message;
        }
        function get_name(){
            return $this->name;
        }
        function get_email(){
            return $this->email;
        }
        function get_message(){
            return $this->message;
        }
        /*if(isset($_POST['register'])){
            $name = $_POST['name'];
            $email= $_POST['email'];
            $message= $_POST['message'];
            }
        $insertData = "INSERT INTO date VALUES('','$name','$email','$message', NOW())";
        $ejeInsert= mysqli_query($connection, $insertData);*/
    

    }
    
    
?>