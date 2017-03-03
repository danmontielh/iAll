<?php 
session_start();
if (!$_SESSION) {
  header('location: http://localhost/iall/');
}

echo '<a class="text-center" href="close.php">Cerrar sesion</a>';

if(isset($_POST['to-do']) && trim($_POST['to-do']) != "")
{
    
    $_SESSION['list'][] = $_POST['to-do'];
}





?>

 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="logo">
     <h1 class="text-center enc">iAll</h1>
  </div>

<div class="main">
   <div class="container-fluid">
     <div class="row">
       <div class="col-md-12">
         <?php if ($_SESSION): ?>
         	<h1 class="text-ask2 text-center"><?php echo $_SESSION['nombre']. ', ¿qué te gustaría hacer en tu día?'; ?></h1>
         <?php endif ?>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" id="to-do" class="form-1 center-block block-down" name="to-do" placeholder="¿Qué quieres hacer?">


          </form>

   <ul>
    <?php if(isset($_SESSION['list']) && !empty($_SESSION['list'])): foreach($_SESSION['list'] AS $text): ?>
        <li class="lopo text-center"><?php echo $text; ?></li>
    <?php endforeach; endif; ?>
    </ul>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>



