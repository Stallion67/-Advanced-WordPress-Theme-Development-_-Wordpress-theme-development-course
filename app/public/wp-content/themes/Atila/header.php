<?php
/**
 * header File
 * 
 * @package Atila
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes() ?>">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Wordpress Course</title>
    
    <?php wp_head();?>
</head>
<body 
<?php body_class('test-class');?>>
   <!-- checking for backward compatability if function exist -->
    <?php 
        if(function_exists('wp_body_open')){
            wp_body_open();
        }
    ?>

    <header>Header</header>
    