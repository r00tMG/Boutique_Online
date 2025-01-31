<?php
require_once 'auth.php';
$USERS = "db/users.csv";
$users=fopen($USERS,'r');
$error = "";
while($ligne=fgetcsv($users,null,",")){
    // var_dump($ligne);
    if(isset($ligne[2])){
        $hash = password_hash($ligne[2], PASSWORD_BCRYPT, ['cost'=>12]);
    }
//var_dump(password_verify($_POST['password'],"$hash"));
// $password = '$2y$10$6o5YbMz5K6OivQNGXTHNdujWvc0OUSMaUTG6fdpvBcm0WznXf4GaO';
    if(isset($_POST['pseudo']) && isset($_POST['password'])){
        if($_POST['pseudo']===$ligne[1] && password_verify($_POST['password'],$hash)){
            session_start();
            $_SESSION['user']=1;
            header('Location: /index.php');
            exit();
        }else if ($_POST['pseudo'] === "admin" && $_POST['password'] === "1234" ){
            session_start();
            $_SESSION['user']=1;
            header('Location: pages/admin.php');
            exit();
        }else{
            $error = "Veuillez verifier vos informations";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Page de Login</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row bg-light mt-5">
            <h1 class="mt-5 text-center">LOGIN</h1>
            <div class="  d-flex justify-content-center ">
                <form class="form-group" method="POST">
                    <?php if($error):?>
                        <div class="alert alert-danger">
                            <?=$error?>
                        </div>
                    <?php endif;?>
                  
                  <div  class=" mb-4">
                    <input type="text" name="pseudo" placeholder="pseudo"  class="form-control" />
                  </div>
                  <div  class=" mb-4">
                    <input type="password" name="password"  placeholder="password" class="form-control" />
                  </div>
                  <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                  </div>
                  <!-- Submit button -->
                  <button type="submit" class="btn btn-sm btn-primary btn-block mb-4">Sign in</button>
                  <p>Si vous n'avez pas de compte,veuillez vous <a href="/signup.php">Inscrire</a></p>

                </form>

            </div>
        </div>
    </div>
</body>
</html>
