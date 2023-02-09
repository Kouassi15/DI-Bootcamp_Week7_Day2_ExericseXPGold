<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><br>
   <center>
     <h1>Exercise 1 : Validate User Input</h1>
    <form action="" method="post">
     <input type="text" name="name" placeholder="Entrer le nom" required >
     <input type="email" name="email" placeholder="Entrer le email"required >
     <input type="password" name="password" required >
     <input type="submit" name="submit" value="Submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
       if (isset($_POST['submit'],$_POST["email"],$_POST["password"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (!empty($name)) {
            echo "Name est obligatoitre <br>";
          } 
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
             echo "Email est invalide <br>";
          }

          if (strlen($password)>=8) {
             echo "Password doit avoir au 8 caractère obligatoitre <br>";
          } 
          
          if (!empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($password) >= 8) {
            echo "Formulaire soumis avec succès";
          }
       }
    }
    ?>
    </center>
</body>
</html>