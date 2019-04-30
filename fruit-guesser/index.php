<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php 
            //controller
            $fruits = array('Bananas', 'Peaches', 'Apples', 'Bricks');
            $active_fruit = $fruits[rand(0,count($fruits) - 1)];
            $guess = '';
            $message = '';
            $active_image = 'box';
            if (isset($_POST['guess'])){
                $guess = $_POST['guess'];
                if ($guess == $active_fruit) {
                    $message = 'DAMN STRAIGHT BRUTHA';
                    $active_image = $active_fruit;
                } else {
                    $message = 'Nah dawg, you wrong';
                    $active_image = 'box';
                }    
            }
            ?>
            <ul>
                <li>
                    <?= $fruits[0] ?>
                </li>
                <li>
                    <?= $fruits[1] ?>
                </li>
                <li>
                    <?= $fruits[2] ?>
                </li>
                <li>
                    <?= $fruits[3] ?>
                </li>
            </ul>
            <form action="index.php" method="post">
                Guess the fruit:<br>
                <input type="text" name="guess">
                <input type="submit" value="Submit">
            </form> 
            <p> <?= $message ?> </p>

            <div class="box"><img src="assets/<?= $active_image?>.jpg"></div>

        </body>
</html>
