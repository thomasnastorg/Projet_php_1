<?php 
include 'header.php';
?>

<body>
<div class="container">

<h1></h1>
       <div class="jumbotron">
            <h1>Web VP</h1>
            <p>Bienvenue sur www.webvp.com</p>
          </div>

<div class="row">
  <div class="col-md-3">
	
  </div>


  <div class="col-md-9">
  <form action="new.php" method="post">

  <div class="form-group">
    <label for="nom">nom</label>
    <input type="text" class="form-control" id="nom" name="nom" placeholder="nom">
  </div>

  <div class="form-group">
    <label for="Prenom">Prenom</label>
    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="prenom">
  </div>

  <div class="form-group">
    <label for="Email">Email</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="email">
  </div>

  <div class="form-group">
    <label for="login">Login</label>
    <input type="text" class="form-control" id="login" name="login" placeholder="Login">
  </div>

  <div class="form-group">
    <label for="passwd">Mot de passe</label>
    <input type="password" class="form-control" id="passwd" name="passwd" placeholder="Mot de passe">
  </div>

  <div class="form-group">
    <label for="Departement">Departement</label>
    <input type="text" class="form-control" id="departement" name="departement" placeholder="departement">
  </div>

  <div class="form-group">
    <label for="ville">ville</label>
    <input type="text" class="form-control" id="ville" name="ville" placeholder="ville">
  </div>

  <div class="form-group">
    <label for="tel">tel</label>
    <input type="text" class="form-control" id="tel" name="tel" placeholder="tel">
  </div>


  <button type="submit" name="save" class="btn btn-default">crée</button>

</form>