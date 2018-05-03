<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Quicken_Loans_Arena_Transformation
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="icon" href="<?php echo get_field("site_favicon", "option") ?>" type="image/gif" sizes="16x16">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- main div ends in footer.php -->
    <div class="container-fluid">
        <!-- side bar navigation starts from here -->
        <div class="mobile-header">
            <div>
                <div class="burger-menu"></div>
                <div class="mobile-logo-text">
                    <?php echo get_field("mobile_menu_logo_text", "option") ?>
                </div> 
            </div>
            <div class="clearfix"></div>
            <div class="row mobile-nav-menu">
                <div class="col-md-12">
                    <?php
                    wp_nav_menu( array(
                            'theme_location' => 'mobile_menu',
                            'menu_id'        => 'mobile-menu',
                            'menu_class'     => 'mobile-menu',
                        ) );
                    ?>
                </div>
            </div>
            <div class="mobile-menus-social-icons">
                <?php if(get_field("enable_or_disable_button_in_side_header", "option")){ ?>
                    <a href="<?php echo get_field("link_of_header_button", "option") ?>" class="btn btn-secondary" type="button"><?php echo get_field("header_button_text", "option") ?></a>
                <?php } ?>
                <ul>
                    <?php if(!empty(get_field("header_facebook_icon_link", "option"))){ ?>
                    <li class="list-item list-inline-item">
                        <a href="<?php echo get_field("header_facebook_icon_link", "option") ?>"><i class="fa fa-facebook-f"></i></a>
                    </li>
                    <?php } if(!empty(get_field("header_instagram_icon_link", "option"))){ ?>
                    <li class="list-item list-inline-item">
                        <a href="<?php echo get_field("header_instagram_icon_link", "option") ?>"><i class="fa fa-instagram"></i></a>
                    </li>
                    <?php } if(!empty(get_field("header_twiter_icon_link", "option"))){?>
                    <li class="list-item list-inline-item">
                        <a href="<?php echo get_field("header_twiter_icon_link", "option") ?>"><i class="fa fa-twitter"></i></a>
                    </li>
                	<?php } ?>
                </ul>
            </div>
        </div>
        <div id="side-header" class="clearfix fusion-mobile-menu-design-modern fusion-sticky-logo-1 fusion-mobile-logo-1 fusion-sticky-menu- fusion-side-header-sticky">
            <?php if(!empty(get_field("header_logo", "option"))){ ?>
                <div class="row">
                    <div class="col-md-12 logo-side" style="
                         max-width: 60%;
                         margin-left:  50px;padding: 15px;">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><img style="max-width: 100%;" alt="The Q Transformation" src="<?php echo get_field("header_logo", "option") ?>" /></a>
                    </div>
                </div>
            <?php } ?>
            <div class="row row-custom">
                <div class="col-md-12">
                    <?php 
                        wp_nav_menu( array(
                            'theme_location' => 'primary_menu',
                            'menu_id'        => 'primary-menu',
                            'menu_class'     => 'menu-side',
                        ) );
                    ?>
                </div>
            </div>
            <?php if(get_field("enable_or_disable_button_in_side_header", "option")){ ?>
            <div class="row">
                <div class="col-md-12" style="margin-top: 40px; padding-left: 65px;">
                    <a href="<?php echo get_field("link_of_header_button", "option") ?>" class="btn btn-secondary" type="button"><?php echo get_field("header_button_text", "option") ?></a>
                </div>
            </div>
            <?php } ?>
            <div class="row">
                <div class="col-md-12 social-icons">
                    <ul>
                        <?php if(!empty(get_field("header_facebook_icon_link", "option"))){ ?>
                        <li class="list-item list-inline-item">
                            <a href="<?php echo get_field("header_facebook_icon_link", "option") ?>"><i class="fa fa-facebook-f"></i></a>
                        </li>
                        <?php } if(!empty(get_field("header_instagram_icon_link", "option"))){ ?>
                        <li class="list-item list-inline-item">
                            <a href="<?php echo get_field("header_instagram_icon_link", "option") ?>"><i class="fa fa-instagram"></i></a>
                        </li>
                        <?php } if(!empty(get_field("header_twiter_icon_link", "option"))){?>
                        <li class="list-item list-inline-item">
                            <a href="<?php echo get_field("header_twiter_icon_link", "option") ?>"><i class="fa fa-twitter"></i></a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="row copyright-div">
                <div class="col-md-12">
                    <h6 style="font-size: 0.5rem;" class="copyright">
                        <?php echo get_field("copy_right_text", "option") ?>
                    </h6>
                </div>
            </div>
        </div>
        <!-- side navigation ends here -->

        <!-- page content divs start from here -->
        <div class="page-content-wrapper">
            <div class="col-md-12">
        <!-- ===========Ends in footer.php============= -->

