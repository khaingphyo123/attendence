    <?php 
    $title='Index';
    require_once 'includes/header.php';
    require_once 'database/conn.php';

    $results=$crud->getSpecialties();
    ?>
    <h1 class="text-center">Registration</h1>
    <!--form method="get" action="success.php"-->
    <form method="post" action="success.php">
        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input required type="text" class="form-control" id="firstname" name="firstname">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input required type="text" class="form-control" id="lastname" name="lastname">
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="text" class="form-control" id="dob" name="dob">
        </div>
        <div class="mb-3">
            <label for="specialty" class="form-label">Area of Expertise</label>
            <select class="form-select" aria-label="Default select example" id="specialty" name="specialty">
                <?php while($r=$results->fetch(PDO::FETCH_ASSOC)) { ?>
                <option value="<?php echo $r['specialty_id'] ?>"><?php echo $r['name']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="Email1" class="form-label">Email address</label>
            <input required type="email" class="form-control" id="Email1" name="Email1" aria-describedby="emailHelp" placeholder="someone@gmail.com">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="contact" class="form-label">Contact Number</label>
            <input required type="text" class="form-control" id="contact" name="contact" aria-describedby="phoneHelp" placeholder="+959783674467">
            <div id="phoneHelp" class="form-text">We'll never share your contact with anyone else.</div>
        </div>
        <div class="d-grid gap-2">
        <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
        </div>
    </form>
    <br><br><br><br>

    <?php require_once 'includes/footer.php' ?>

