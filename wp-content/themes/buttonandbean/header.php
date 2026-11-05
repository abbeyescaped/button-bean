<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Button & Bean</title>
    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/assets/css/fonts.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/assets/css/responsive.css">
</head>

<body>
    <div class="primary-navigation">
    <div class="primary-navigation-left">
        <a href="<?= get_site_url();?>"><img src="<?= get_template_directory_uri();?>/assets/img/bb-logo.png" alt="Button and Bean logo, an illustrated face of a women with coffee beans on her cheeks"></a>
    </div>
    <div class="primary-navigation-right">
        <nav>
            <ul class="nav-bar">
                <li><a href="story">About B&B</a></li>
                <li><a href="coffee">Our Coffee</a></li>
                <li><a href="find-us">Find Us</a></li>
            </ul>
        </nav>
        <a class="radial-button" href="contact-us">
            <p>Connect with us!</p>
        </a>
    </div>
    </div>