<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
    <head>
		<title></title>
        <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-toggle.min.css"); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css"); ?>">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <?php echo $menu; ?>
            </div>
        </nav>

    	<div id="contenido" class="container">
    		<?php echo $cuerpo; ?>
    	</div>

    	<script src="<?php echo base_url("assets/js/jquery-3.4.1.min.js"); ?>"></script>
        <script src="<?php echo base_url("assets/js/popper.min.js"); ?>"></script>
        <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
        <script src="<?php echo base_url("assets/js/bootstrap-toggle.min.js"); ?>"></script>
        <script src="<?php echo base_url("assets/js/bootstrap-notify.min.js"); ?>"></script> 
        <script type="text/javascript" src="<?php echo base_url("assets/js/navegacion.js"); ?>"></script>
        <?php echo $scripts; ?>
    </body>
</html>