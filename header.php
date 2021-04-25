<?php 
    //Header Page    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=#, initial-scale=1.0">
    <title>Document</title>

    <?php wp_head(); ?>

</head>
<body <?php body_class() ;?>>

<header>
   <nav class="class">
        <div class="brand">
            <img class="logo" src = '<?php bloginfo('template_directory'); ?>/images/logo-25.png' alt = 'Picture' />
        </div>
        <ul class="navbar">
            <li class="nav__item"><a href="#" class="nav__link">Home</a></li>
            <li class="nav__item"><a href="#" class="nav__link">About</a></li>
            <li class="nav__item"><a href="#" class="nav__link">Service</a></li>
            <li class="nav__item"><a href="#" class="nav__link">Contact</a></li>
        </ul>
   </nav> 
</header>

