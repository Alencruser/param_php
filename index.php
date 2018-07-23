<?php
if(isset($_GET["prenom"]) && isset($_GET["nom"])){
	if(isset($_GET["age"])){
		echo "Bonjour à toi ".htmlspecialchars($_GET["nom"])." ".htmlspecialchars($_GET["prenom"])." ".htmlspecialchars($_GET["age"])." ans.";
	}else {
		echo "Bonjour à toi ".htmlspecialchars($_GET["nom"])." ".htmlspecialchars($_GET["prenom"]).". Pense à renseigner ton âge stp";
	}}
	if(isset($_GET["dateDebut"])&& isset($_GET["dateFin"])){
		echo "Date de début : ".htmlspecialchars($_GET["dateDebut"])." et la date de fin : ".htmlspecialchars($_GET["dateFin"]);
	}
	if (isset($_GET["langage"])&& isset($_GET["serveur"])){
		echo htmlspecialchars($_GET["langage"])." ".htmlspecialchars($_GET["serveur"]);
	}if (isset($_GET["semaine"])){
		echo "Semaine : ".htmlspecialchars($_GET["semaine"]);
	} if (isset($_GET["batiment"])&&isset($_GET["salle"])){
		echo "batiment : ".htmlspecialchars($_GET["batiment"])." salle : ".htmlspecialchars($_GET["salle"]);
	}
	?>