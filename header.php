<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title(''); ?></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
 <link rel="icon"
      type="image/png"
      href="/wp-content/uploads/2015/07/occavatina-favicon.png">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65092904-1', 'auto');
  ga('send', 'pageview');

</script>


<?php wp_head(); ?>

</head>

<body>
<div class='navbar navbar-inverse navbar-fixed-top'>

  <div class='container'>
    <a href='/' class='navbar-brand'><img src="/wp-content/uploads/2015/07/occavatina-logo-small-white.png" width='30' style='display:inline;'>OC Cavatina</a>

    <ul class='nav nav-pills navbar-nav navbar-left'>
      <li class='dropdown'><a href='/about-us/' data-target='#' class='dropdown-toggle' data-toggle='dropdown'>About<span class='caret'></span></a>
        <ul class='dropdown-menu'>
          <li><a href='/about-us/matthew-fang/'>Matthew Fang</a></li>
          <li><a href='/about-us/aaron-tam/'>Aaron Tam</a></li>
          <li><a href='/about-us/remy-converse/'>Remy Converse</a></li>
          <li><a href='/about-us/marc-wong/'>Marc Wong</a></li>
          <li class='divider'></li>
          <li><a href='/about-us/'>OC Cavatina</a></li>
        </ul></li>
      <li><a href='/news/'>News</a></li>
      <li><a href='/gallery/'>Gallery</a></li>
      <li><a href='/contact/'>Contact</a></li>
    </ul>

  </div>
</div>
