<!DOCTYPE HTML>
<html lang="en-us">
    <head>
    <meta charset="utf-8">
    <title>RenterCafe</title>
    
    <?php require_once(dirname(__FILE__) . "../../config.php"); ?>
        
    <!------------------------- META DATA ------------------------------->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <!------------------------- MAIN CSS -------------------------------->
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT;?>/style.css" />
        
    <!------------------------- NORMALIZE ------------------------------->
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT;?>/css/normalize.css">
    
    <!------------------------- CSS LIBRARIES --------------------------->
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT;?>/bootstrap/css/bootstrap.css" />
    
    <!------------------------- JQUERY LIBRARIES ------------------------>
    <script src="<?php echo ROOT;?>/js/1.9.1/jquery.min.js"></script>
        
    <!------------------------- JAVASCRIPTS ----------------------------->
    <script src="<?php echo ROOT;?>/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo ROOT;?>/bootstrap/js/bootstrap.min.js"></script>
        
    <script>
        $('#edit-form').on('shown.bs.modal', function () {
          $('#myInput').focus()
        })
    </script>
    </head>
        <body>