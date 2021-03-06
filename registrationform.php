
<!DOCTYPE html>
<head>
  <title>Sign In</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

 </head>
 <body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Adventurous Trip Advisor</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tours.php">Tours</a>
      </li>
          <li class="nav-item">
        <a class="nav-link" href="signin.php">Sign In</a>
      </li>
   <li class="nav-item active">
        <a class="nav-link" href="registrationform.php">Registration<span class="sr-only">(current)</span></a>
      </li>
     <li class="nav-item active">
        <a class="nav-link" href="contactusform.php">Contact Us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="my-5" class="py-5">
    <h2 class="text-center">Register your Account</h2>
  </div>
   <div class="container">
 <form id="sign in-form" method="post" role="form">  
    <div class="form-group">
      <label for="Firstname">Firstname</label>
      <input type="text" name="firstname" placeholder="Firstname" class="form-control" data-error="username is required.">
         <div class="help-block with-errors"></div>    
    </div>
     <div class="form-group">
      <label for="Lastname">Lastname</label>
      <input type="text" name="lastname" placeholder="Lastname" class="form-control" data-error="username is required.">
         <div class="help-block with-errors"></div>    
    </div>
     <div class="form-group">
      <label for="email">Email</label>
      <input type="text" name="email" placeholder="Email" class="form-control" data-error="username is required.">
         <div class="help-block with-errors"></div>    
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" name="password" placeholder="Password" class="form-control" data-error="username is required.">
    </div>

</style>
 <form method="POST" action="index.php" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
    <div>
      <label>Upload your avatar</label>
      <input type="file" name="image">
    </div>

    <div>
  
      <button type="submit" class="smallbtn btn-success"  name="upload">Upload File</button>
 

<br />


<div class="text-center">
<div class="col-md-12">
 <input type="submit" name="ok" class="btn btn-primary btn-send" value="submit">
  </div>
    </div>

    <p>
<div class="text-center">
   Already a member? <a href="registrationform.php">Sign In</a>
    </p>
  </form>
</div>
</div>

                </div>

            </div>

        </div>
        <br />

        <br />
        <br />
      
       

<footer>
  <p class="p-2 my-5 bg-dark text-white text-center">© 2020 Adventurous Trip Advisor LLC All rights reserved.</p>
</footer>



        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="validator.js"></script>
        <script src="contact.js"></script>
    </body>
</html>


<?php 
            if(isset($_POST['ok'])){
                include_once 'function3.php';
                $obj=new Contact();
                $res=$obj->register($_POST);
                if($res==true){
                    echo "<script>alert('Error')</script>";
                }else{
                    echo "<script>alert('Submitted Successfully!!')</script>";
                }
            }
            ?>
