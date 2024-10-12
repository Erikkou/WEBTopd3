<?php
  $title = "index";

  include 'includes/class-autoload.inc.php';
  include_once('includes/header.php');
?>

<div style="text-align: center;">
    <h1>Welcome To ShareBoard</h1>
    <p>Find something cool? Share it with our community. Look at other shares as well</p>
    <a href="shares.php" class="btn btn-primary">Share Now</a>

</div>


<?php
include_once('includes/footer.php');
    //$usersObj = new UsersView();
    //echo $usersObj->showUser('Bas');
    //$usersObj2 = new UsersContr();
    //$usersObj2->createUser('Iet', 'Sanders', '1999-07-07');
?>

