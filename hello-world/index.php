
    <?php 
    require_once 'partials/header.php';
    //controller
    $full_name = '';
    $email = '';
    if (isset($_POST['fullname'])){
        $full_name = $_POST['fullname'];
        $email = $_POST['email'];
    }
    ?>

    <!-- view -->
    <form action="index.php" method="post">
        Full name:<br>
        <input type="text" name="fullname" value="<?= $full_name ?>">
        <br>
            Email:<br>
        <input type="email" name="email" value="<?= $email ?>">
        <br><br>
        <input type="submit" value="Submit">
    </form> 

    <?php
        var_dump($_POST);

        ?>
        <h1>Hi <?= $full_name ?>, your email is: <?= $email ?></h1>
    <?php 
        require_once 'partials/footer.php';
