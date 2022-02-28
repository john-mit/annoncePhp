<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8"/>
	  <link rel="icon" type="image/png" href="icon.png" />
      <link rel="stylesheet" type="text/css" href="imgAnnonce.css"/>
      <title>ANNONCE_ET_UPLOAD_FICHIER</title>
   </head>
    <body>
	
	
	<center>

    <br /><br />
    <h1>ANNONCES GRATUITES</h1>
    <a href="">Retour à la page d'acceuil</a><br /><br/>
    <a href="annonce.php">Aller à la page des annonces</a><br />
    </br>
    
    <hr size=4 width=100% color=white align=center>

    <h2>Ecrivez votre annonce et uploadez votre image</h2>

    <div id="formulaire">

    <form method="post" action="annonce.php" enctype="multipart/form-data">

     <label for="titre">Titre de l'annonce:</label><br />

     <input type="text" name="titre" value="" placeholder="Ecrivez votre titre!" id="titre"></input><br />

     <label for="article">Article :</label><br />

     <textarea name="article" placeholder="Décrivez votre article!" id="article" cols="25" rows="8"></textarea><br />

     <label for="date_article">Date :</label><br />

     <input type="date" name="date_article" value="" id="date_article"/><br />



     <div id="hr"><hr size=2px width=100% color=white align=center/></div>



     <label for="icone">Fichiers formats images uniquement(JPG, PNG ou GIF) :</label><br />
     
     <!---<input type="hidden" name="MAX_FILE_SIZE" value="512000" />--->

     <input type="file" name="icone" id="icone" /><br />

     <label for="nom">Nom de l'image :</label><br />

     <input type="text" name="nom" value="" placeholder="Ecrivez un nom!" id="titre" /><br />

     <label for="description">Description de votre image (max. 255 caractères) :</label><br />

     <textarea name="description" placeholder="Décrivez votre image!" id="description" cols="25" rows="8"></textarea><br />


     <div id="hr"><hr size=2px width=100% color=white align=center/></div>




     <input type="submit" name="submit" value="Envoyer" style="width:200px; height:50px; background-color:yellow;"/>

   </form>
   </center>

    </div>
   </body>
 </html>