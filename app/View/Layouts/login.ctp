
<?php
    $cakeDescription = __d('cake_dev', 'Sistema: Login');
    $cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
<?php $cakeDescription = __d('cake_dev', 'CRUD'); ?>    
    <title>
        <?php echo $cakeDescription ?>:
        <?php echo $this->fetch('title'); ?>
    </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <?php
    echo $this->Html->meta('icon');

    echo $this->Html->css('cake.generic');
    echo $this->Html->css('bootstrap');
    echo $this->Html->css('bootstrap-theme');

    echo $this->fetch('meta');
    ?>

    <?php
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>

  </head>
    <body class="skin-blue"> 
    

    <section class="content">


    <?php 
        echo $this->fetch('content'); 
        echo $this->Html->script('bootstrap');
    ?>


    </section>