<?php
    wp_head();
    ?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="custom theme from Code95">
</head> 


<body>
    <header class="header text-center">
	    <nav class="navbar navbar-expand-lg navbar-dark bg-dark position-fixed">
            <div class="container-fluid">
                <button class="navbar-toggler me-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                    <?php
                        wp_nav_menu(
                            array(
                                'menu' => 'primary menu',
                                'container' => '',
                                'theme_location' => 'primary',
                                'items_wrap' => '<ul id="" class="navbar-nav text-sm-center p-0">%3$s</ul>'
                            )
                        );
                    ?>
                </div>
            </div>
        </nav>
    </header>

    <div class="content d-flex flex-column">