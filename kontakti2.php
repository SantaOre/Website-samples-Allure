<!DOCTYPE html>
<html>


    <?php require_once("standarts/galvene.php"); ?>

<body>

    <?php require_once("standarts/navigacija.php"); ?>

    <h2 class="pukes" style="text-align:center"> I</h2>

<br/><br/><br/>

<h1 class="paldies"> <strong>Paldies, Jūsu e-pasts nosūtīts veiksmīgi!</strong> </h1>

<div class="contact-form">
<form action="php/e_pasts.php" method="POST">
          <div class="contact-form">
            <label class="reg-labels" for="name" ></lablel><br/>
            <input class="form-control" type="text" name="name" placeholder="Jūsu vārds" required/>
          </div> 
          <div class="contact-form">
            <label class="reg-labels" for="email"></label><br/>
            <input class="form-control" type="email" name="email" placeholder="Jūsu e-pasts" required/>
          </div>  
          <div class="contact-form">
            <label class="reg-labels" for="comment"></label><br/>
            <input class="form-control" type="text" name="comment" placeholder="Jūsu ziņa" required/>
          </div>

          <input name="submit" type="submit" class="form-control submit" value="Sūtīt"/>     
            
</form>
</div>
    <?php require_once("php/e_pasts.php"); ?>

<br/><br/><br/><br/><br/><br/>


    <?php require_once("standarts/kajene.php"); ?>

</body>
</html>