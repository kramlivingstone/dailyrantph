
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title></title>

    <!-- Bootstrap core CSS -->
   <link rel="stylesheet" type="text/css" href="<?php echo nl2br(e(asset('css/bootstrap.min.css'))); ?>">

   <!-- Google Fonts -->

  <link href="https://fonts.googleapis.com/css?family=Heebo:900|Questrial" rel="stylesheet">
  
    <!-- Custom styles for this template -->
    <link href="<?php echo nl2br(e(asset('css/style.css'))); ?>" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="<?php echo nl2br(e(asset('css/font-awesome.min.css'))); ?>">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
 
  
  <?php echo $__env->make("layouts.nav", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <div class="container">
    <div class="row">

        <?php echo $__env->yieldContent("content"); ?>

    </div>
  </div>
  <?php echo $__env->make("layouts.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  </body>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo nl2br(e(asset('js/jquery.min.js'))); ?>"></script>
    <script src="<?php echo nl2br(e(asset('js/bootstrap.min.js'))); ?>"></script>
    <script src="<?php echo nl2br(e(asset('js/autoResize.js'))); ?>"></script>

    <script src="<?php echo nl2br(e(asset('js/script.js'))); ?>"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript">
      $('textarea').autoResize();
    </script>
  </body>
</html>
