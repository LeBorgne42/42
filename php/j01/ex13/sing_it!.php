#!/usr/bin/php
<?php
if($argv[1] == "mais pourquoi cette demo ?")
	echo "Tout simplement pour qu'en feuilletant le sujet
on ne s'apercoive pas de la nature de l'exo\n";
if($argv[1] == "mais pourquoi cette chanson ?")
	echo "Parce que Kwame a des enfants\n";
if($argv[1] == "vraiment ?")
{
	if(fopen("trololo.php", "x") == FALSE)
	{
		echo "Oui il a vraiment des enfants\n";
		unlink("trololo.php");
	}
	else
		echo "Nan c'est parce que c'est le premier avril\n";
}
?>