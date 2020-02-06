<?php
/**
Template Name: Front Page
 **/
/**
 * @author Scott Taylor
 * @package One Confluence
 * @subpackage Customizations
 */
get_header();

//redo this so that variables make more sense and line up better.  Also get rid of variables not getting used.

global $post;
$topTitleOne = get_post_meta($post->ID, '_one_front_one_top', true);
$bottomTitleOne = get_post_meta($post->ID, '_one_front_one_bottom', true);
$imageOne = get_post_meta($post->ID, '_one_front_one_image', true);
$descriptionOne = get_post_meta($post->ID, '_one_front_one_wysiwyg', true);
//$urlOne = get_post_meta($post->ID, '_one_front_one_url', true);

//block Two variables
$topTitleTwo = get_post_meta($post->ID, '_one_front_two_top', true);
$bottomTitleTwo = get_post_meta($post->ID, '_one_front_two_bottom', true);
$imageTwo = get_post_meta($post->ID, '_one_front_two_image', true);
//$headerTwo = get_post_meta($post->ID, '_one_front_two_header', true);
$descriptionTwo = get_post_meta($post->ID, '_one_front_two_wysiwyg', true);

//block Three variables
$topTitleThree = get_post_meta($post->ID, '_one_front_three_top', true);
$bottomTitleThree = get_post_meta($post->ID, '_one_front_three_bottom', true);
$imageThree = get_post_meta($post->ID, '_one_front_three_image', true);
$descriptionThree = get_post_meta($post->ID, '_one_front_three_wysiwyg', true);

//block Four variables
$topTitleFour = get_post_meta($post->ID, '_one_front_four_top', true);
$bottomTitleFour = get_post_meta($post->ID, '_one_front_four_bottom', true);
$imageFour = get_post_meta($post->ID, '_one_front_four_image', true);
$descriptionFour = get_post_meta($post->ID, '_one_front_four_wysiwyg', true);

//block Five variables
$topTitleFive = get_post_meta($post->ID, '_one_front_five_top', true);
$bottomTitleFive = get_post_meta($post->ID, '_one_front_five_bottom', true);
$imageFive = get_post_meta($post->ID, '_one_front_five_image', true);
$descriptionFive = get_post_meta($post->ID, '_one_front_five_wysiwyg', true);

//block Six variables - CTA/Bookend Variables
$imageSix = get_post_meta($post->ID, '_one_front_six_image', true);
$descriptionSix = get_post_meta($post->ID, '_one_front_six_wysiwyg', true);
$ctaTitleOne = get_post_meta($post->ID, '_one_front_six_why_title', true);
$ctaTitleTwo = get_post_meta($post->ID, '_one_front_six_how_title', true);
$ctaTitleThree = get_post_meta($post->ID, '_one_front_six_when_title', true);
$why = get_post_meta($post->ID, '_one_front_six_why', true);
$how = get_post_meta($post->ID, '_one_front_six_how', true);
$when = get_post_meta($post->ID, '_one_front_six_when', true);
$ctaUrl = get_post_meta($post->ID, '_one_front_cta_url', true);

//Team Variables
$teamLayout = get_post_meta($post->ID, 'team_layout', true);
$team_id = get_post_meta($post->ID, '_one_front_team_id', true);
$dataTitleTeam = get_post_meta($post->ID, '_one_front_team_title', true);
$team_bg = get_post_meta($post->ID, '_one_front_team_background_image', true);

//What's in a Name Variables
//$whatsInaNameTitle = get_post_meta($post->ID, '_one_front_name_title', true);
$whatsInaName = get_post_meta($post->ID, '_one_front_name_copy_wysiwyg', true);
$whatsInaNamePDF = get_post_meta($post->ID, '_one_front_name_pdf', true);
$whatsInaNameImg = get_post_meta($post->ID, '_one_front_name_image', true);
$whatsInaNameOption = get_post_meta($post->ID, 'name_radio_toggle', true);
//end block variables

//Footer Variables
$footerPhone = '';
$footerEmail = '';
$footer_logo = '';
$address_line1 = '';
$address_line2 = '';
//Social Media Icons
// Title block Variables
// left container
$titleBlockOne = '';
$titleBlockTwo = '';
$titleBlockThree = '';
//middle container
$middleContainerTopTitle = '';
$middleContainerBottomTitle = '';
// right container - logo container
$titleBlockLogo = '';

if (function_exists('one_get_option')) {
    //Footer Info
    $footerPhone = one_get_option('phone_text');
    $footerEmail = one_get_option('foot_email');
    $footer_logo = one_get_option('logo2');
    $address_line1 = one_get_option('address_line1');
    $address_line2 = one_get_option('address_line2');
    //Social Media
    $instagram = one_get_option('one_instagram_url');
    $facebook = one_get_option('one_facebook_url');
    $twitter = one_get_option('one_twitter_url');
    $gplus = one_get_option('one_gplus_url');
    $pinterest = one_get_option('one_instagram_url');
    $linkedin = one_get_option('one_linkedin_url');
    $wildcardIcon = one_get_option('one_wildcard_icon');
    $wildcardUrl = one_get_option('one_wildcard_url');
    //Title Block Left Container
    $titleBlockOne = one_get_option('one_titleblock_one');
    $titleBlockTwo = one_get_option('one_titleblock_two');
    $titleBlockThree = one_get_option('one_titleblock_three');
    //Title Block Middle Container
    $middleContainerTopTitle = one_get_option('one_middleTitleblock_top');
    $middleContainerBottomTitle = one_get_option('one_middleTitleblock_bottom');
    //Title block Right Container - logo
    $titleBlockLogo = one_get_option('title-Block-logo');
}
?>

<div id="main-container" class="container-fluid">

    <section id="the-bean" class="row" data-title="<?= $topTitleOne; ?>">
            <div class="col-xs-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-center" style="padding:0;">
            <h1><?= $topTitleOne; ?></h1>
                <img style="width:80%;" class="img-responsive" id="floorplan" src="<?= $imageOne; ?>">
            </div>
    </section>

    <section id="why" class="row" data-title="<?= $topTitleTwo; ?>" data-target="why">
        <div class="col-sm-7 col-md-8 col-md-push-1 col-lg-6 col-lg-push-2 clearfix">
            <img src="<?= $imageTwo; ?>" class="img-responsive" style="width:90%;">
        </div>
        <div class="col-sm-5 col-md-4 col-md-pull-1 col-lg-2 col-lg-push-2 text-overlay-right">
            <div class="featured-content copy"><h1><?= $topTitleTwo; ?></h1><h2><?= $bottomTitleTwo; ?></h2><?= wpautop($descriptionTwo); ?></div>
        </div>
    </section>

     <section id="memories" class="row" data-title="<?= $topTitleThree; ?>" style="margin-top:60px;">
        <div class="col-xs-12 col-md-10 col-md-push-2 col-lg-8 col-lg-push 2 clearfix">
            <div class="copy">
                <h2><?= $topTitleThree; ?></h2>
                <?php gravity_form(1, true, true, false, '', true, 12); ?>
            </div>
        </div>

    </section>

    <section id="love" class="row" data-title="<?= $topTitleFour; ?>">
        <div class="col-sm-8 col-sm-push-1 col-md-8 col-md-push-2 col-lg-6 col-lg-push-3 clearfix apples">
            <img src="<?= $imageFour; ?>" class="img-responsive" style="width:86%;margin-left:80px;">
        </div>
        <div class="col-sm-4 col-md-3 col-lg-2 col-lg-push-2 text-overlay-right">
            <div class="featured-content copy"><h2><?= $topTitleFour; ?></h2><?= $descriptionFour; ?></div>
        </div>
    </section>

    <?php
    get_template_part('templates/team-fluid');
   ?>

    
</div>
<?php get_footer(); ?>