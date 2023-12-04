<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche l'entête (Header) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
	


<title>
	<?php bloginfo('name'); // Affiche le nom du blog ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // si nous sommes sur la page d'accueil, affichez la description à partir des paramètres du site - sinon, affichez le titre du post ou de la page. ?>
</title>
<?php 
	// Tous les .css et .js sont chargés dans le fichier functions.php
?>

<?php wp_head(); 
/* Cette fonction permet à WordPress et aux extensions d'instancier des fichier CSS et js dans le <head>
	 Supprimer cette fonction briserait vos extensions et diverses fonctionnalités WordPress. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>
</head>

<body 
	<?php body_class(); 
	/* Applique une classe contextuel sur le body
		 ex: sur la page d'accueil vous aurez la classe "home"
		 sur un article, "single postid-{ID}"
		 etc. */
	?>
>
<header>
        <div class="banniere">
            <div class="banniere__lienPromis">
                <p>Projet étudiant créé par Les belettes basé sur<a href="https://promis.qc.ca/fr/"> le site Promis
                        .</a></p>
                <div class="quitter"><img src="../media/x.png" alt="bouton x"></div>
            </div>
        </div>
        <section class="barreNav">
            <nav class="navbar navbar-dark navbar-expand-lg">
                <div class="container">
                    <!-- Hamburger button -->
                    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Affichage/masquage de la navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Navigation -->
                    <a class="navbar__logo navbar-brand" href="index.html"><img src="media/icone/logo_orange.png" alt=""></a>
                    <div id="mainNav" class="collapse navbar-collapse">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="hub_services.html" class="nav-link">Nos services</a>
                            </li>
                            <!--élément du menu-->
                            <li class="nav-item">
                                <a href="hub_nouvelle.html" class="nav-link">Nouvelles</a>
                            </li>
                            <li class="nav-item">
                                <a href="equipe.html" class="nav-link">Équipe</a>
                            </li>
                            <li class="nav-item">
                                <a href="A_Propos.html" class="nav-link">À propos</a>
                            </li>
                            <li class="nav-item">
                                <a href="histoire.html" class="nav-link">Notre histoire</a>
                            </li>
                            <li class="nav-item">
                                <a href="faq.html" class="nav-link">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <button class="bouton-don">  <a href="#" >Don</a></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>

    </header>
<main><!-- Débute le contenu principal de notre site -->
