<?php 
include 'header.php';
include 'db_connect.php';

$action = (isset($_POST["act"])) ? $_POST["act"] : ""; 
$usr_id = (isset($_POST["usr_id"])) ? $_POST["usr_id"] : "";




if ($action == "S"){
  $usr_id = $_POST["usr_id"];
  
     $cmd = "delete from `utilisateur` where `usr_id` ='$usr_id';";
     echo $cmd;
    $pdo->query($cmd);
  
}


if ($action == "E"){
    $usr_id = $_POST["usr_id"];
    $sql = "select * from utilisateur where usr_id = '$usr_id';";
    $res = $pdo->query($sql);
    $line_etu = $res->fetch();

    $usr_id = $line_etu["usr_id"];
    $usr_nom = $line_etu["usr_nom"];
    $usr_prenom = $line_etu["usr_prenom"];
    $usr_email = $line_etu["usr_email"];
    $usr_login = $line_etu["usr_login"];;
    $usr_pass = $line_etu["usr_pass"];
    $usr_dep = $line_etu["usr_dep"];
    $usr_ville = $line_etu["usr_ville"];
    $usr_tel = $line_etu["usr_tel"];
   
}
if ($action == "U"){
  $usr_id = $_POST["usr_id"];
  $usr_id     = (isset($_POST["usr_id"]))? $_POST["usr_id"] : '';
  $usr_nom     = (isset($_POST["usr_nom"]))? $_POST["usr_nom"] : '';
  $usr_prenom  = (isset($_POST["usr_prenom"]))? $_POST["usr_prenom"] : '';
  $usr_email     = (isset($_POST["usr_email"]))? $_POST["usr_email"] : '';
  $usr_login = (isset($_POST["usr_login"]))? $_POST["usr_login"] : '';
  $usr_pass = (isset($_POST["usr_pass"]))? $_POST["usr_pass"] : '';
  $usr_dep = (isset($_POST["usr_dep"]))? $_POST["usr_dep"] : '';
  $usr_ville = (isset($_POST["usr_ville"]))? $_POST["usr_ville"] : '';
  $usr_tel = (isset($_POST["usr_tel"]))? $_POST["usr_tel"] : '';

  
  $sql = " UPDATE `utilisateur` SET `usr_nom`='$usr_nom',`usr_prenom`='$usr_prenom',`usr_email`='$usr_email',`usr_login`='$usr_login',`usr_pass`='$usr_pass',`usr_dep`='$usr_dep',`usr_ville`='$usr_ville',`usr_tel`='$usr_tel', WHERE `usr_id`='$usr_id'";
 echo $sql;
 echo $usr_id;
  
  $pdo->query($sql);
  
}
$req2 ="select * from utilisateur order by usr_nom";

$res = $pdo->query($req2);

$tab = $res -> fetchAll(PDO::FETCH_ASSOC);



?>

<body>
<div class="container">

<h1></h1>
       <div class="jumbotron">
            <h1>Web VP</h1>
            <p>Bienvenue sur www.webvp.com</p>
          </div>
</div>    
<div class="container-md">   
<table class='table position-relative'>
    <thead>
		<form action="edit_user.php" method="post">
		<input type="hidden" name="act" value="U"> 
    <input type="hidden" name="usr_id" value="<?php $usr_id ; ?>"> 
    <td><input type="text" name="usr_nom" value="<?php echo $usr_nom ; ?>" placeholder="nom"></td>
		<td><input type="text" name="usr_prenom" value="<?php echo $usr_prenom ; ?>" placeholder="prenom"></td>
		<td><input type="text" name="usr_email" value="<?php echo $usr_email ; ?>" placeholder="email"></td>
		<td><input type="text" name="usr_login" value="<?php echo $usr_login ; ?>"  placeholder="login"></td>
		<td><input type="text" name="usr_pass" value="<?php echo $usr_pass ; ?>"  placeholder="pass"></td>
		<td><input type="text" name="usr_dep" value="<?php echo $usr_dep ; ?>"  placeholder="departement"></td>
    <td><input type="text" name="usr_ville" value="<?php echo $usr_ville ; ?>"  placeholder="ville"></td>
    <td><input type="text" name="usr_tel" value="<?php echo $usr_tel ; ?>"  placeholder="tel"></td>
		<td><input class="btn btn-primary" type="submit" value="Update"></td>
		<td></td> 
		</form>
	</thead>
</table>
</div>
<div class="container">
<div class="row">
  <div class="col-md-3">
	
  </div>
  
  <table class='table table-striped'>
<thead>
<tr>
    <th scope='col'>id</th>
      <th scope='col'>nom</th>
      <th scope='col'>prenom</th>
      <th scope='col'>email</th>
      <th scope='col'>login</th>
      <th scope='col'>pass</th>
      <th scope='col'>dep</th>
      <th scope='col'>ville</th>
      <th scope='col'>tel</th>
      <th scope='col'>del</th>
      <th scope='col'>modif</th>
    </tr>
</thead>

<?php foreach ($tab as $row ) { ?>
	<tr>
		<td><?php echo $row["usr_id"]?></td>
		<td><?php echo $row["usr_nom"]?></td>
		<td><?php echo $row["usr_prenom"]?></td>
		<td><?php echo $row["usr_email"]?></td>
		<td><?php echo $row["usr_login"]?></td>
    <td><?php echo $row["usr_pass"]?></td>
    <td><?php echo $row["usr_dep"]?></td>
    <td><?php echo $row["usr_ville"]?></td>
    <td><?php echo $row["usr_tel"]?></td>
		<td> 
    		<form action="edit_user.php" method="post">
    			<input type="hidden" name="act" value="E"> 
    			<input type="hidden" name="usr_id" value="<?php echo $row["usr_id"]?>">
    			<input type="submit" value="E">
    		</form>
		</td> 
		<td> 
    		<form action="edit_user.php" method="post">
    			<input type="hidden" name="act" value="S"> 
    			<input type="hidden" name="usr_id" value="<?php echo $row["usr_id"]?>">
    			<input type="submit" value="x">
    		</form>
		</td>
	</tr>
	<?php } ?>

</table>

