<?php
/**
 * Header section for our theme
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body style="background-color:#F8F4E9;">    

        <!-- <nav class="navbar navbar-default navbar-fixed-top" role="navigation">

            <div class="container-fluid">

                <div class="container" style="margin:0 10px;width:100%;">
                
                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">

                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>

                        </button> -->

                        <!-- <?php

                            $integral_logo = get_theme_mod('integral_logo');

                            if(isset($integral_logo) && $integral_logo != ""):

                                echo '<h1 class="site-title"><a href="'.esc_url( home_url( '/' ) ).'" class="navbar-brand">';

                                    echo '<img class="img-responsive" src="'.$integral_logo.'" alt="'.get_bloginfo('title').'">';

                                echo '</a></h1>';

                            else:

                                echo '<h1 class="site-title"><a href="'.esc_url( home_url( '/' ) ).'" title="'.get_bloginfo('title').'" class="navbar-brand" style="padding:0;margin-top:10px;">';

                                    //echo ''.get_bloginfo('title').'';
                                    echo '<img src="http://localhost:8080/new/wp-content/uploads/2016/10/logo.png" style="width:180px;height:65px;" />';
                                echo '</a></h1>';

                            endif;

                        ?> -->
                         <!-- <div style="width:1000px;margin-left:50px">
                         <img src="http://localhost:8080/conceptkitchen/wp-content/uploads/2016/10/logo.png" style="width:250px;height:90px;" />
                         <?php get_search_form(); ?>
                         </div> -->
                         <div style="width:930px;margin:0 auto;padding-top:20px;text-align:center;z-index:999;position:relative;">
                             <div style="width:20%;height:60px;float:right;" >
                                 <img class='img-responsive' src="http://localhost:8080/conceptkitchen/wp-content/uploads/2016/10/logo.png"/>
                             </div>
                             
                             <div style="width:747px;height:60px;background-color:#e3532b;">
                             <ul style="list-style:none;display:inline;float:left;">
                                 <li style="float:left;margin-top:10px;"><?php get_search_form(); ?></li>
                                 <li style="float:left;margin-left:20px;">
                                     <p style="margin-bottom:0px;margin-top:10px;color:white;">ENGLISH</p>
                                     <a href="#" style="margin-bottom:0px;color:white;font-weight:bold;">CHINESE</a>
                                 </li>
                             </ul>
                             </div>
                         </div>
                   <!--  </div> 

                    <?php
                        wp_nav_menu( array(
                            'menu'              => 'primary',
                            'theme_location'    => 'primary',
                            'depth'             => 3,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse',
                            'container_id'      => 'navbar-ex-collapse',
                            'menu_class'        => 'nav navbar-nav navbar-left',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker())
                        );
                    ?>

               </div>

            </div>

        </nav> -->