<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Thor Instruments &middot; <?php echo $this->_display['pageTitle']; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Le styles -->
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/font-awesome.min.css">
<style>

    /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

body {
    padding-bottom: 40px;
    color: #5a5a5a;
}



    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Special class on .container surrounding .navbar, used for positioning it into place. */
.navbar-wrapper {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    z-index: 10;
    margin-top: 20px;
    margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
}
.navbar-wrapper .navbar {

}

    /* Remove border and change up box shadow for more contrast */
.navbar .navbar-inner {
    border: 0;
    -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
    -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
    box-shadow: 0 2px 10px rgba(0,0,0,.25);
}

    /* Downsize the brand/project name a bit */
.navbar .brand {
    padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
    font-size: 16px;
    font-weight: bold;
    text-shadow: 0 -1px 0 rgba(0,0,0,.5);
}

    /* Navbar links: increase padding for taller navbar */
.navbar .nav > li > a {
    padding: 15px 20px;
}

    /* Offset the responsive button for proper vertical alignment */
.navbar .btn-navbar {
    margin-top: 10px;
}



    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Carousel base class */
.carousel {
    margin-bottom: 60px;
    width: 1200px;
    margin: auto;
}

.carousel .container {
    position: relative;
    z-index: 9;
}

.carousel-control {
    height: 80px;
    margin-top: 0;
    font-size: 120px;
    text-shadow: 0 1px 1px rgba(0,0,0,.4);
    background-color: transparent;
    border: 0;
}

.carousel .item {
    height: 500px;
}
.carousel img {
    position: absolute;
    top: 0;
    left: 0;
    height: 500px;
    min-width: 100%;
}

.carousel-caption {
    background-image: url("../img/trans.png");
    -webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    border-radius: 6px;
    position: static;
    max-width: 550px;
    padding: 20px;
    margin-top: 200px;
    margin-left: 50px;
}
.carousel-caption h1,
.carousel-caption .lead {
    margin: 0;
    line-height: 1.25;
    color: #fff;
    text-shadow: 0 1px 1px rgba(0,0,0,.4);
}
.carousel-caption .btn {
    margin-top: 10px;
}



    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
.marketing .span4 {
    text-align: center;
}
.marketing h2 {
    font-weight: normal;
}
.marketing .span4 p {
    margin-left: 10px;
    margin-right: 10px;
}


    /* Featurettes
    ------------------------- */

.featurette-divider {
    margin: 80px 0; /* Space out the Bootstrap <hr> more */
}
.featurette {
    padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
    overflow: hidden; /* Vertically center images part 2: clear their floats. */
}
.featurette-image {
    margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
}

    /* Give some space on the sides of the floated elements so text doesn't run right into it. */
.featurette-image.pull-left {
    margin-right: 40px;
}
.featurette-image.pull-right {
    margin-left: 40px;
}

    /* Thin out the marketing headings */
.featurette-heading {
    font-size: 50px;
    font-weight: 300;
    line-height: 1;
    letter-spacing: -1px;
}



    /* RESPONSIVE CSS
    -------------------------------------------------- */

@media (max-width: 979px) {

    .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
    }
    .navbar-inner {
        border-radius: 0;
        margin: -20px 0;
    }

    .carousel .item {
        height: 500px;
    }
    .carousel img {
        width: auto;
        height: 500px;
    }

    .featurette {
        height: auto;
        padding: 0;
    }
    .featurette-image.pull-left,
    .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 40%;
        margin: 0 auto 20px;
    }
}


@media (max-width: 767px) {

    .navbar-inner {
        margin: -20px;
    }

    .carousel {
        margin-left: -20px;
        margin-right: -20px;
    }
    .carousel .container {

    }
    .carousel .item {
        height: 300px;
    }
    .carousel img {
        height: 300px;
    }
    .carousel-caption {
        width: 65%;
        padding: 0 70px;
        margin-top: 100px;
    }
    .carousel-caption h1 {
        font-size: 30px;
    }
    .carousel-caption .lead,
    .carousel-caption .btn {
        font-size: 18px;
    }

    .marketing .span4 + .span4 {
        margin-top: 40px;
    }

    .featurette-heading {
        font-size: 30px;
    }
    .featurette .lead {
        font-size: 18px;
        line-height: 1.5;
    }

}
</style>

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="../assets/ico/favicon.png">
</head>

<body>



<!-- NAVBAR
================================================== -->
<div class="navbar-wrapper">
    <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
    <div class="container">

        <div class="navbar navbar-inverse">
            <div class="navbar-inner">
                <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="<?php echo $this->_display['websiteURL']; ?>">Thor Instruments</a>
                <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li<?php echo ($this->_navigation == 'Index' ? ' class="active"' : ''); ?>><a href="<?php echo $this->_display['websiteURL']; ?>/index"><i class="icon-home"></i> Home</a></li>
                        <li<?php echo ($this->_navigation == 'About' ? ' class="active"' : ''); ?>><a href="<?php echo $this->_display['websiteURL']; ?>/about"><i class="icon-quote-left"></i> About</a></li>
                        <li<?php echo ($this->_navigation == 'Contact' ? ' class="active"' : ''); ?>><a href="<?php echo $this->_display['websiteURL']; ?>/contact"><i class="icon-envelope"></i> Contact</a></li>
                        <li<?php echo ($this->_navigation == 'Instruments' ? ' class="active"' : ''); ?>><a href="<?php echo $this->_display['websiteURL']; ?>/instruments"><i class="icon-shopping-cart"></i> Instruments</a></li>
                        <li><a href="<?php echo $this->_display['websiteURL']; ?>/blog"><i class="icon-calendar"></i> Blog</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

    </div> <!-- /.container -->
</div><!-- /.navbar-wrapper -->

<div class="container well well-small" style="padding: 30px;">
    <i class="icon-shopping-cart pull-left" style="margin: 0px; margin-right: 30px; font-size: 136px;"></i>
    <h4 style="margin-top: 0px;">Request a Quote <small>Get your very own Thor Instrument!</small></h4>
    Interested in purchasing your personal Thor Instrument?  Get started by filling out our form with as many details as you want and can think of so we can get back to you as soon as possible with pricing and a time-line for when your instrument can be available!<br/>
    <a href="<?php echo $this->_display['websiteURL']; ?>/quote" class="btn" style="margin-top: 10px;">Get a Quote Now</a>
</div>