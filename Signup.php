<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>signup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top navbar-dark nav-color">
    <a style="color: dodgerblue" class="navbar-brand text-color logo" href="#">TOYSHOP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item nv-bt">
                <i class="far fa-address-card icon"></i>
                <a class="nav-link icon div_hover" href="" style="color: dodgerblue">About Us</a>
            </li>
            <li class="nav-item nv-bt">
                <i class="fas fa-phone icon"></i>
                <a class="nav-link icon div_hover" href="contact.php" style="color: dodgerblue">Contact</a>
            </li>
            <li class="nav-item nv-bt">
                <i class="far fa-question-circle icon"></i>
                <a class="nav-link icon div_hover" href="faq.html" style="color:dodgerblue"">FAQ</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item nv-bt">
                <i class="fas fa-sign-in-alt icon"></i>
                <a class="nav-link icon div_hover" href="login.php" style="color: dodgerblue">Login</a>
            </li>

        </ul>
    </div>
</nav>

<div class="animated fadeInLeft container-fluid">
    <div class="row">
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('images/log.jpg')">
        <div class="col-7" align="center" style="margin-top: 50px">
            <form class="form-group log-cnt">
                <br>
                <br>
                <br>
                <br>
                <div>
                    <h4 style="color: white" class="logo">Sign Up</h4>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-6"><input type="text" class="form-control" name="first_name" placeholder="First Name" required pattern="([a-z]|[A-Z])+"></div>
                        <div class="col-6"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required pattern="([a-z]|[A-Z])+"></div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email" required pattern=".+@gmail.com" >
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" style="background-color: dodgerblue">Register Now</button>
                </div>

                <div>Already have an account? <a href="login.php" style="color: dodgerblue">Login</a> </div>

            </form>
        </div>
            </div>
        </div>
    </div>
</div>

    <div class="col-12" >
<footer  class="modal-footer justify-content-center col-12">
    <div>
        <i class="fas fa-hat-wizard">Powered by H@S@N</i>
    </div>
    <div class="blockquote-footer">
        Copyright ©2019
    </div>
</footer>
        </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>