<?php

    		if(isset($_POST['nom']) AND isset($_POST['mail']) AND isset($_POST['sujet'])){
      			if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message'])){
         			$nom=htmlspecialchars($_POST['nom']);
         			$mail=htmlspecialchars($_POST['mail']);
                    $sujet=htmlspecialchars($_POST['sujet']);
         			$message=htmlspecialchars($_POST['message']);
        			// Le message
        			$message = $_POST['message'];
					$nom = $_POST['nom'];
                    $sujet = $_POST['sujet'];
        			// Envoi du mail
        			mail('thibault.goffi13@gmail.com',$sujet,$mail,$nom);
					echo '<h1>Votre message à bien été envoyé ! </h1>';
    			}	
    		}
		?>