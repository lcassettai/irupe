<html>
    <head>
    		<link rel="stylesheet" type="text/css" href="<?php echo vendor_url();?>twbs/bootstrap/dist/css/bootstrap.min.css">
          <link rel="stylesheet" type="text/css" href="<?php echo assets_url();?>css/layout.css">
        <title><?php echo $title; ?></title>           
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>      
    <div id="barra-superior">
      
    </div>
    <!-- Barra de menu -->      
      <nav class="navbar navbar-expand-lg navbar-light navbar-right">
        <a class="navbar-brand" href="#">IRUPE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url('home');?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('votacion');?>">Votacion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('candidatos');?>">Candidatos</a>
            </li>   
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('contacto');?>">Contacto</a>
            </li>         
          </ul>        
        </div>
      </nav>
