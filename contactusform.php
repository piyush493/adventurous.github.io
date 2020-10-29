<!DOCTYPE html>
<head>
  <title>Contact Us</title>
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
     <li class="nav-item">
        <a class="nav-link" href="registrationform.php">Registration</a>
      </li>
     <li class="nav-item active">
        <a class="nav-link" href="contactusform.php">Contact Us<span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
 <div class="container">

            <div class="row">

                <div class="col-lg-12 col-lg-offset-2">

  <div class="my-5" class="py-5">

                    <h1 class="text-center">Contact Us</h1>

                    <p class="lead">Adventurous Trip advisor is one of the best webpage to send you to the most beautiful places around Mauritius Our Paradise Island.Please feel free to contact us about any issues.</p>


                    <form id="contact-form" method="post" role="form">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Firstname</label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Lastname</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname" required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Phone</label>
                                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Message</label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Please Enter Your Message" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" name="ok" class="btn btn-primary btn-send" value="Send message">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                   
                                </div>
                            </div>
                        </div>

                    </form>
            <?php 
            if(isset($_POST['ok'])){
                include_once 'function.php';
                $obj=new Contact();
                $res=$obj->contact_us($_POST);
                if($res==true){
                    echo "<script>alert('Error.Thank you')</script>";
                }else{
                    echo "<script>alert('Submitted sucessfully!!')</script>";
                }
            }
            ?>


                </div>

            </div>

        </div>

  <footer>
  <p class="p-2 my-5 bg-dark text-white text-center">© 2020 Adventurous Trip Advisor LLC All rights reserved.</p>
</footer>


        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="validator.js"></script>
        <script src="contact.js"></script>
    </body>
</html>
