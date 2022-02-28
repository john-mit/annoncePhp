<?php

if (isset($_POST['submit'])){
  $image = 'images/'.basename($_FILES['icone']['name']);;

 


$bdd = mysqli_connect ('localhost','root','','ddb');

mysqli_query($bdd,"SET NAMES 'UTF8'");



$titre = $_POST['titre'];
$article = mysqli_real_escape_string($bdd,$_POST['article']);
$date_article = $_POST['date_article'];
$icone = $_FILES['icone']['name'];
$type = $_FILES['icone']['type'];
$nom = $_POST['nom'];
$description = $_POST['description'];





$sql = "INSERT INTO imgannonce(titre,article,date_article,icone,type,nom,description) VALUES('".$titre."','".$article."','".$date_article."','".$icone."','".$type."','".$nom."','".$description."')";
$sqy = mysqli_query($bdd,$sql);
if ($sqy) {
  echo "<p style='color:yellow;'>","Image uploaded!","</p>";
}


 //now let's move the uploaded image into the folder: images
if (move_uploaded_file($_FILES['icone']['tmp_name'], $image)) {
       $msg = "Image uploaded successfully";
     }else{
       $msg = "There was a problem uploading image";
     }  

}


echo "<hr size=4 width=100% color=white align=center>";

?>

<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8"/>
      <link rel="stylesheet" type="text/css" href="imgAnnonce.css"/>
      <title>ANNONCES</title>
   </head>
    <body>
    <center>
    <h1 style="font-size:40px;">ANNONCES GRATUITES</h1>
	</center>
	<center>
    <a href="">Retour à la page d'acceuil</a><br/><br/>
    <a href="annonceForm.php">Retour à la page d'upload</a>
	</center>
    </br>

    <hr size=4 width=100% color=white align=center>

    <div id="content">

<?php

$bdd = mysqli_connect ('localhost', 'root', '','ddb');

mysqli_query($bdd,"SET NAMES 'UTF8'");

$sql = "SELECT titre,article,date_article,icone,type,nom,description FROM imgannonce ORDER BY id DESC";
$res = mysqli_query ($bdd, $sql);
while ($row = mysqli_fetch_array($res)) {
    echo "<div style='background-color:#FFFF00';>",
    "<p style='text-decoration:underline';>","TITRE DE L'ANNONCE","</p>",
    "<p>","Titre: ".$row['titre']."</p>",
    "<p>","Article: ".htmlspecialchars($row['article'])."</p>",
    "<p>","Date: ".$row['date_article']."</p>",
    "</div>";
    echo
    "<div id='div_img'>";
    echo 
    "<p style='text-decoration:underline';>","IMAGE","</p>",
    "<img src='images/".$row['icone']."'>",
    "<p>","Type: ".$row['type']."</p>",
    "<p>","Nom: ".$row['nom']."</p>",
    "<p>","Description: ".$row['description']."</p>";
	echo "</div>";
   
 
     echo"<hr size=4 width=100% color=blue align=center>";

   
}

?>



     </div>

  </body>
</html>