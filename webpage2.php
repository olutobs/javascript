<?php
//make sure dad puts it on the cloud and make 2 pages. when go to 3page say "hello,name,welcome

//echo "Hello Olutob's world";
 //remember wschools
//change what it says "please sign in"
//
$pool = "please, sign in";
$num = 19;
$name = 'Olutobs';
 //making a server
$username = "Olutobs";
$password = "oluwat";

  $username1 = $_POST['email'] ; //we have captured the input variables
  $password1 = $_POST['password'];


  //now,let us do something when someoen submites the form ao click the submit button
  
//use if function
//use isset() function
// we will use "if" to check the button has been clicked
//if():
//isset():


//if(isset($_POST['submit']));





?>




<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mywebpage</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:700" rel="stylesheet">
    <style>
        body {
         font-family: 'Dancing Script', cursive;     
            
        }
        
        
    .email{
            
     background-color: cadetblue;
     width:auto;

     margin-top:60px;
    padding: 30px;
    
            
        }
    
          
    </style>
    
</head>
<body>
<div class="container">
<h1> <?php echo $pool; ?> </h1>

 <div class="email">
 <form method="post" action="webpage2.php">
  <div class="form-group row">
    <label for="" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email"  class="form-control" id="email" placeholder="Email@email.com" name="email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
    </div>
  </div>
  <a href="webpage.html" class="btn btn-primary btn-lg " role="button" id="submit" aria-disabled="true" name="submit">Sign In</a>
  
  
</form>  





 
</body>