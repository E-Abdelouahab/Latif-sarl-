<?php
include_once("connection.php");
class affiche extends connexion{
    // public function afficheoffrs(){
    //     $conn = $this->Connect($id);
    //     $query = "select * from offers";
    //     $results = $conn->query($query);
    //     $result = $results->fetchAll();

    // }
    
    public function InsertEmail($email){
        $conn=$this->Connect();
        $query = "INSERT INTO `email`(`id`, `email`) VALUES (NULL,'".$email."')";
        $result = $conn->exec($query); 
        if($result){
            echo "votre message a été bien envoyer !!!!";
        }else{
            echo "votre message n'est pas envoyer";
        }
    }
}



?>