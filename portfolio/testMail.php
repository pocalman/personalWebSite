<!DOCTYPE html>
<html class="no-js" lang="fr">


<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "pasc.levesque@gmail.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $message = $_REQUEST['message'];
  
  //send email
  mail($admin_email,"$subject", $message, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>

<form role="form" aria-label="Me joindre"  method="post" id="monForm">
        <ul class="flex-outer">
          <li>
            <label for="prenom">Nom</label>
            <input type="text" id="nom" name="name" placeholder="obligatoire">
            <span class="erreur" id="ErreurNom"></span>
          </li>
          <li>
            <label for="email">Courriel</label>
            <input type="email" name="email" id="courriel" placeholder="obligatoire">
          </li>
          <li>
            <label for="subject">Subject</label>
            <textarea rows="6" name="subject" id="texte" placeholder="Entrez votre message"></textarea>
          </li>
          <li>
            <label for="message">Message</label>
            <textarea rows="6" name="comment" id="texte" placeholder="Entrez votre message"></textarea>
          </li>
          <li>
            <button type="submit" a="" href="#" aria-label="Envoyer le formulaire" role="button">Soumettre <i class="fas fa-arrow-circle-right"></i></button>
          </li>
        </ul>
        </form>
  
<?php
  }
?>

</body>



</html>