<?php 
    $title='Register';
    require_once 'includes/header.php';
    require_once 'database/conn.php';

    if(isset($_POST['submit'])){
        $fname=$_POST['firstname'];
        $lname=$_POST['lastname'];
        $dob=$_POST['dob'];
        $email=$_POST['Email1'];
        $contact=$_POST['contact'];
        $specialty=$_POST['specialty'];
        $isSuccess=$crud->insert($fname,$lname,$dob,$email,$contact,$specialty);

        if($isSuccess)
        {
            include 'includes/successmessage.php';
        }else{
            include 'includes/errormessage.php';
        }
    }

    ?>

    
    <!--div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php //echo $_GET['firstname'].' '.$_GET['lastname']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php //echo $_GET['specialty']; ?></h6>
            <p class="card-text">Date of birth: <?php //echo $_GET['dob']; ?></p>
            <p class="card-text">Email Address: <?php //echo $_GET['Email1']; ?></p>
            <p class="card-text">Contact Number: <?php //echo $_GET['contact']; ?></p>
            
        </div>
    </div>-->
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $_POST['firstname'].' '.$_POST['lastname']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $_POST['specialty']; ?></h6>
            <p class="card-text">Date of birth: <?php echo $_POST['dob']; ?></p>
            <p class="card-text">Email Address: <?php echo $_POST['Email1']; ?></p>
            <p class="card-text">Contact Number: <?php echo $_POST['contact']; ?></p>
            
        </div>
    </div>
    <?php
    //echo $_GET['firstname'];
    //echo $_GET['lastname'];
    //echo $_GET['dob'];
    //echo $_GET['specialty'];
    //echo $_GET['Email1'];
    //echo $_GET['contact'];
    ?>
    <br><br><br><br>

<?php require_once 'includes/footer.php' ?>