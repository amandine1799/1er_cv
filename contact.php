<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="contact.css"/>
    <title>Contact</title>
  </head>
  <body>
    <form method="post" action="form.php">
      <p>
        <label for="nom">Nom</label><input type="text" name="nom" id="nom" /><br/>
      </p>
      <p>
        <input type="email">Email</label><imput type="text" name="email" id="email" /><br/>
      </p>
      <p>
           <label for="sujet">Sujet</label><input type="text" name="sujet" id="sujet" /><br/>
       </p>
       <textarea name="contenu" id="contenu" rows="15" cols="50"></textarea><br/>
       <input type="submit" value="Envoyer" />
     </body>
   </form>
</html>
