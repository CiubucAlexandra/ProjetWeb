<html>
	<head>
		<title>Ecole de danse</title>
		<link rel = "stylesheet" href ="https://bootswatch.com/4/journal/bootstrap.min.css">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href = "/">WEB</a>
        </div>
        <div id="navbar">
          <ul class="nav navbar-nav">
            <li><a  class="nav-link"  class="nav-link" href="<?php echo base_url(); ?>presentation">Presentation</a></li>
            <li><a  class="nav-link" href="<?php echo base_url(); ?>programmes">Programmes</a></li>
            <li><a  class="nav-link" href="<?php echo base_url(); ?>groupes">Groupes</a></li>
            <li><a  class="nav-link" href="<?php echo base_url(); ?>inscription">Inscription</a></li>
            <li><a class="nav-link" href="<?php echo base_url(); ?>login">Login</a></li>
            <?php if(isset($_COOKIE['utilisateur'])):?>
            <li><a class="nav-link" href="<?php echo base_url(); ?>user_controller/logout">Logout</a>
            <?php endif;?>
          </ul>
        </div>
      </div>
	</nav>
  <div id="container">
            <?php if(isset($_COOKIE['groupeExist'])):?>
            <p>Il existe un groupe avec l'ensignant que tu veux suprimee</p>
            <?php endif;?>