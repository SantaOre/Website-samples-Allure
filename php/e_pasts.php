<?php
        
    if (isset($_POST['submit']) && $_POST['submit'] == "Sūtīt"){
       
      if (isset($_POST['name'])) {
            $name = $_POST['name'];
        }
      if (isset($_POST['email'])) {
            $email = $_POST['email'];
        }
      if (isset($_POST['comment'])) {
            $comment = $_POST['comment'];
        }

        if (empty($name) || empty($email) || empty($comment)){
          header("Location: http://".$_SERVER['HTTP_HOST']."/1_lapa");
    }else {

      header("Location: http://".$_SERVER['HTTP_HOST']."/1_lapa/kontakti2.php");
    }
}

$servername = "localhost";
$username = "root";
$pass = "";
$database = "vestules";

$conn = new mysqli($servername, $username, $pass, $database);


if ($conn->connect_error){
    die ("Nesanāca!" . $conn->connect_error);
} 
// else {
//     echo "Ir ok";
// }


$sql = $conn->prepare("INSERT INTO `vestules` (`name`, `email`, `comment`) VALUES (?, ?, ?)");
$sql->bind_param("sss", $name, $email, $comment);
$sql->execute();
$sql->close();


$conn->close();


?>
