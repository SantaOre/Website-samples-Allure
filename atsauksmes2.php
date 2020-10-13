<!DOCTYPE html>
<html>


    <?php require_once("standarts/galvene.php"); ?>

<body>

    <?php require_once("standarts/navigacija.php"); ?>

    <h2 class="pukes" style="text-align:center"> I</h2><br/>


<h1 class="paldies"> <strong>Komentārs pievienots veiksmīgi!</strong> </h1>

<form action="php/komentari.php" method="POST">
          <div class="contact-form">
            <label class="reg-labels" for="name" >Vārds</lablel><br/>
            <input class="form-control" type="text" name="name" placeholder="Jūsu vārds" required/>
          </div> <br/>
          <div class="contact-form">
            <label class="reg-labels" for="email">E-pasts</label><br/>
            <input class="form-control" type="email" name="email" placeholder="E-pasts" required/>
          </div>  <br/>
          <div class="contact-form">
            <label class="reg-labels" for="comment">Komentārs</label><br/>
            <input class="form-control" type="text" name="comment" placeholder="Jūsu atsauksme" required/>
          </div><br/>
                  
            <input class="btn2" name="submit" type="submit" value="Iesniegt"/>
</form>


<?php require_once("php/rez_komentari.php"); ?>

<?php require_once("php/komentari.php"); ?>

<br/><br/><br/>

<?php require_once("standarts/kajene.php"); ?>

</body>
</html>