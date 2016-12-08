<?php
/**
 * Created by PhpStorm.
 * User: taohansamu
 * Date: 08/12/2016
 * Time: 23:38
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <title>EmeraldX</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="<?php echo base_url(); ?>/css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="<?php echo base_url(); ?>/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="<?php echo base_url(); ?>/aural.css" />
</head>
<body id="www-url-cz">
<div id="main" class="box">
    <div id="header">
        <h1 id="logo"><a href="#">Emerald<strong>X</strong><span></span></a></h1>
        <hr class="noscreen" />
        <div class="noscreen noprint">
            <p><em>Quick links: <a href="#content">content</a>, <a href="#tabs">navigation</a>, <a href="#search">search</a>.</em></p>
            <hr />
        </div>
        <div id="search" class="noprint">
            <form action="#" method="get">
                <fieldset>
                    <legend>Search</legend>
                    <label><span class="noscreen">Find:</span> <span id="search-input-out">
        <input type="text" name="" id="search-input" size="30" />
        </span></label>
                    <input type="image" src="<?php echo base_url(); ?>/design/search_submit.gif" id="search-submit" value="OK" />
                </fieldset>
            </form>
        </div>
    </div>
    <div id="tabs" class="noprint">
        <h3 class="noscreen">Navigation</h3>
        <ul class="box">
            <li><a href="#">Home<span class="tab-l"></span><span class="tab-r"></span></a></li>
            <li id="active"><a href="#">Weblog<span class="tab-l"></span><span class="tab-r"></span></a></li>
            <li><a href="#">About Me<span class="tab-l"></span><span class="tab-r"></span></a></li>
            <li><a href="#">Photos<span class="tab-l"></span><span class="tab-r"></span></a></li>
            <li><a href="#">Portfolio<span class="tab-l"></span><span class="tab-r"></span></a></li>
            <li><a href="#">Contact<span class="tab-l"></span><span class="tab-r"></span></a></li>
            <li><a href="#">Links<span class="tab-l"></span><span class="tab-r"></span></a></li>
        </ul>
        <hr class="noscreen" />
    </div>
    <div id="page" class="box">
        <div id="page-in" class="box">
            <div id="strip" class="box noprint">
                <p id="rss"><strong>RSS:</strong> <a href="#">articles</a> / <a href="#">comments</a></p>
                <hr class="noscreen" />
                <p id="breadcrumbs">You are here: <a href="#">Home</a> &gt; <a href="#">Category</a> &gt; <strong>Page</strong></p>
                <hr class="noscreen" />
            </div>
            <div id="content">