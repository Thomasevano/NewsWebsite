<?php 
    try
    {
        $bdd = new PDO("mysql:host=localhost;dbname=test","root","");
    }
    catch(Exception $e)
    {
        die("erreur de connexion");
    }
		
	if($_GET['lastid']){
		$query = "SELECT * FROM commentaires WHERE id<".$_GET['lastid']." ORDER BY id DESC LIMIT 0,10";
		$requete = $bdd->query($query);
		
		while($donnee = $requete->fetch())
		{
			echo "<div class='item' id='".$donnee['id']."'><h2>Le commentaire : ".$donnee['id']."</h2><br />".$donnee['commentaire']."</div>";
		}
	}
?>