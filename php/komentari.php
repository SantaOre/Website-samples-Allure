<?php
        
    if (isset($_POST['submit']) && $_POST['submit'] == "Iesniegt"){
        // $name = $_POST['name'];
        // $email = $_POST['email'];
        // $comment = $_POST['comment'];
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

      header("Location: http://".$_SERVER['HTTP_HOST']."/1_lapa/atsauksmes2.php");
    }
}

$servername = "localhost";
$username = "root";
$pass = "";
$database = "komentari";

$conn = new mysqli($servername, $username, $pass, $database);


if ($conn->connect_error){
    die ("Nesanāca!" . $conn->connect_error);
} 
// else {
//     echo "Ir ok";
// }


$sql = $conn->prepare("INSERT INTO `komentari` (`name`, `email`, `comment`) VALUES (?, ?, ?)");
$sql->bind_param("sss", $name, $email, $comment);
$sql->execute();
$sql->close();

// $sql = "SELECT `name`, `email`, `comment` FROM komentari";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   echo "<table> <tr> <th> Vārds </th> <th> komentārs </th> </tr>";
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "<tr><td>".$row["name"]."</td><td>".$row["comment"]."</td></tr>";
//   }
//   echo "</table>";
// } else {
//   echo "0 results";
// }

$conn->close();


?>


<!-- // if ($result->num_rows > 0) {
  
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//       echo "<strong>Vārds: </strong>" . $row["name"]. " <strong>--- Komentārs: </strong>" . $row["comment"]. "<br>";
//     }
//   } else {
//     echo "0 results";
//   }
  
//   $conn->close(); -->



