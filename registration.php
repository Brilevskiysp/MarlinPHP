<?php
include 'validation.php';

session_start();
$form = new UserForm("user");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Blog</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

    <div class="container list">
        <div class="row">

            <nav class="navbar navbar-expand-lg navbar-light bg-light col-12">
                <a class="navbar-brand" href="#">BLOG</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/index.php">MainPage</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="col-md-8 offset-md-2">
                <div class="form-wrap">
                    <div class="profile"><img src="https://html5book.ru/wp-content/uploads/2016/10/profile-image.png">
                        <h1>Registration</h1>
                    </div>
                    <form method="post" action="/registration.php">
                        <div>
                            <label for="name">Name</label>
                            <input type='text' name='name' value="<?php $form->value("name"); ?>">
                            <span class='error'><?php $form->error("name"); ?></span>
                        </div>
                        <div>
                            <label for="email">E-mail</label>
                            <input type='text' name='email' value="<?php $form->value("email"); ?>">
                            <span class='error'><?php $form->error("email"); ?></span>
                        </div>
                        <button type="submit" class="btn btn-success">Send</button> 
                    </form> 
                </div>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>