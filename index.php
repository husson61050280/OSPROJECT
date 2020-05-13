<!-- การเซตหน้า login เป็นหน้าหลัก -->
<?php 
    // session_start();
    // if(!isset($_SESSION['username'])) {
    //     $_SESSION['msg'] = "You must log in first";
    //     header('location: login.php');
    //  }

    // if(isset($_GET['logout'])) {
    //     session_destroy();
    //      unset($_SESSION['username']);
    //      header('location: login.php');
    //  }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="Style2.css">
    <link rel="stylesheet" href="Style3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

<div class="container-fluid" id="main">
        <h1 id="p1"><b>KMITL X COMSCI</b></h1>
        <h4 Style="margin-bottom:30px;">Web Application CovidTracker</h4>
        <button type="button" name="EnterSite" class="btn btn-light" Style="margin:20px; padding:10px;" ><a href="Covid.php">Enter Website</button>


        <!-- logged in user information -->

    <?php if(isset($_SESSION['username'])) : ?> 
        <p>Welcome <strong><?php echo $_SESSION ['username']; ?></strong></p>
        <p><a href="index.php?logout='1'"style="color:red;">Logout</a></p>
        <?php endif ?>

    </div>

</body>
</html>