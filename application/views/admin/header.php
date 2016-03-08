<html>
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Shell</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
      <link rel="stylesheet" href="https://rawgit.com/FragCoder/bootstrap-left-slide-menu/master/bootstrap-left-slide-menu.css">
    </head>
 <body>
    <div id="wrapper" class="">
       <div class="overlay" style="display: none;"></div>
       <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
          <ul class="nav sidebar-nav">
             <li class="sidebar-brand">
                <a href="#"> MENU </a>
             </li>
             <li>
                <a href="<?php echo base_url();?>mailbox"><i class="glyphicon glyphicon-usd"></i> Buzon</a>
             </li>
             <li>
                <a href="<?php echo base_url();?>pactivos"><i class="glyphicon glyphicon-print"></i> P.V. Activos</a>
             </li>
             <li>
                <a href="<?php echo base_url();?>metrics"><i class="glyphicon glyphicon-cloud"></i> M&eacutetricas</a>
             </li>
             <li>
                <a href="<?php echo base_url();?>fuelClient"><i class="glyphicon glyphicon-th"></i> Combustibles 1 cliente</a>
             </li>
             <li>
                <a href="#"><i class="glyphicon glyphicon-cog"></i> ...</a>
             </li>
             <li>
                <a href="<?php echo base_url();?>login/signOut"><i class="glyphicon glyphicon-log-out"></i> Log Out</a>
             </li>
          </ul>
       </nav>
       <div id="page-content-wrapper">
          <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
          <span class="hamb-top"></span>
          <span class="hamb-middle"></span>
          <span class="hamb-bottom"></span>
          </button>