<!DOCTYPE html>
<?php session_start(); include 'database_connect.php'; ?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Peter Garafalo Productions</title>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" type="image/ico" href="graphics/favicon.ico"/>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="include/jquery.js"></script>
    
    <!-- For WOW Slider -->
    <link rel="stylesheet" type="text/css" href="wow_engine/style.css" />
    <script type="text/javascript" src="wow_engine/jquery.js"></script>
</head>

<body>
    
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
        }
        (document, 'script', 'facebook-jssdk'));
    </script>
    
    <header>
        <section id="networking">
            <a href="https://www.facebook.com/PeterGProductions" target="_blank"><img class="networkingIcons" alt="Facebook" src="graphics/networking/facebook.png"/></a>
            <a href="https://twitter.com/PeterGPictures" target="_blank"><img class="networkingIcons" alt="Twitter" src="graphics/networking/twitter.png"/></a>
            <a href="http://www.imdb.com/name/nm4705577/" target="_blank"><img class="networkingIcons" alt="IMDB" src="graphics/networking/imdb.png"/></a>
            <a href="https://www.youtube.com/user/PeterGProductions" target="_blank"><img class="networkingIcons" alt="Youtube" src="graphics/networking/youtube.png"/></a>
            <a href="http://www.linkedin.com/pub/peter-garafalo/38/633/485" target="_blank"><img class="networkingIcons" alt="LinkedIn" src="graphics/networking/linkedin.png"/></a>
        </section>
        <nav id="topnav"> 
            <span id="reel"><a href="reel">REEL</a></span>
            <span id="about"><a href="about">ABOUT</a></span>
            <span id="video"><a href="video">VIDEO</a></span>
            <span id="photo"><a href="photo">PHOTO</a></span>
            <span id="resume"><a href="resume">RESUME</a></span>
            <span id="contact"><a href="contact">CONTACT</a></span>
        </nav>
        <figure id="logo">
            <a href="/garafalo">
                <img id="animatedlogo" src="graphics/logo.gif" alt="Home" title="Home">
                <img id="staticlogo" src="graphics/logo.png" alt="Home" title="Home">
            </a>
        </figure>
    </header>
    <main>