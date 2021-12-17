<?php
    include 'includes/session.php';
?>

<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="css/site.css"/>

        <title>Attendence-<?php echo $title ?></title>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">IT Conference</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" href="viewrecords.php">View Attendees</a>
                    
                </div>
                
                </div>
                <div class="navbar-nav justify-content-end">
                <?php 
                    if(!isset($_SESSION['userid'])){
                ?>
                    <a class="nav-link" aria-current="page" href="login.php">Login</a>
                    <?php } else { ?>
                    <a class="nav-link" aria-current="page" href="#"><span>Hello <?php echo $_SESSION['username'] ?></span></a>
                    <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
                    <?php } ?>
                </div>
            </div>
            
        </nav>
        <div class="container">
        
<br/>