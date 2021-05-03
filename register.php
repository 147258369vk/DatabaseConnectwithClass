<?php
    
    include('db.php');

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Register</title>
  </head>
  <body>
    <div class="container-fluid">

        <div class="alert alert-info mt-4">Register yourself</div>

            <div class="container">

                <form method="POST">
                    Enter name: <input type="text" name="unm" class="form-control">
                    <br><br>
                    Enter email:<input type="text" name="email" class="form-control">
                    <br><br>
                    Enter password:<input type="text" name="password" class="form-control">

                    <br><br>
                    Enter contact:<input type="text" name="contact" class="form-control">

                    <br><br>
                    <input type="submit" value="Register" name="btn" class="btn btn-danger">


                </form>

                <?php

                    if(isset($_POST['btn']))
                    {
                        $n=$_POST['unm'];
                        $e=$_POST['email'];
                        $p=md5($_POST['password']);
                        $c=$_POST['contact'];


                    $db=new connectDB();

                    $data=array("name"=>$n,"email"=>$e,"password"=>"$p","contact"=>$c);

                    // echo print_r($data);
                    $x=$db->insertData("register",$data);

                    if($x==true)
                    {
                        echo "data registered succesfully";
                    }
                    else
                    {
                        echo "Error in registering data";
                    }


                    }


                ?>



            </div>

    </div>

























    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>