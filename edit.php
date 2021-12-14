<?php 
    $title='Edit Record';
    require_once 'includes/header.php';
    require_once 'database/conn.php';

    $results=$crud->getSpecialties();

    if(!isset($_GET['id'])){
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");
    }else{
        $id=$_GET['id'];
        $attendee=$crud->getAttendeeDetails($id);
    
    ?>
    <h1 class="text-center">Edit Record</h1>
    <!--form method="get" action="success.php"-->
    <form method="post" action="editpost.php">
        <input type="hidden" name="id" value="<?php echo $attendee['attendee_id'] ?>">
        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" value="<?php echo $attendee['firstname'] ?>" id="firstname" name="firstname">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" value="<?php echo $attendee['lastname'] ?>" id="lastname" name="lastname">
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="text" class="form-control" value="<?php echo $attendee['dateofbirth'] ?>" id="dob" name="dob">
        </div>
        <div class="mb-3">
            <label for="specialty" class="form-label">Area of Expertise</label>
            <select class="form-select" aria-label="Default select example" id="specialty" name="specialty">
                <?php while($r=$results->fetch(PDO::FETCH_ASSOC)) { ?>
                <option value="<?php echo $r['specialty_id'] ?>" <?php if($r['specialty_id']==$attendee['specialty_id']) echo 'selected'; ?>>
                <?php echo $r['name']; ?>
            </option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="Email1" class="form-label">Email address</label>
            <input type="email" class="form-control" value="<?php echo $attendee['emailaddress'] ?>" id="Email1" name="Email1" aria-describedby="emailHelp" placeholder="someone@gmail.com">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="contact" class="form-label">Contact Number</label>
            <input type="text" class="form-control" value="<?php echo $attendee['contactnumber'] ?>" id="contact" name="contact" aria-describedby="phoneHelp" placeholder="+959783674467">
            <div id="phoneHelp" class="form-text">We'll never share your contact with anyone else.</div>
        </div>
        
        <a href="viewrecords.php" class="btn btn-default">Back To List</a>
        <button type="submit" name="submit" class="btn btn-success">Save Changes</button>
        
    </form>
    <?php } ?>
    <br><br><br><br>

    <?php require_once 'includes/footer.php' ?>

