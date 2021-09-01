@extends('layouts.app1')

@section('contenu')

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta name="description"
            content=" ASSINIE Pâtisserie, la pâtisserie en ligne qui vous permet de passer toutes vos
                                                                                                                 commande patissier gâteaux de mariage, gâteaux d'anniverssaire et gâteaux de baptème et vous les faits livrer à domicil.">
        <meta name="keywords"
            content="ASSINIE, pâtisserie,assinie pâtisserie, gâteaux d'anniverssaire, gâteaux de mariage, gâteaux de baptème,partissier">
        <title>Assinie Pâtisserie - About Page</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" />
        <link href="frontend/css/all.min.css" rel="stylesheet" />
        <link href="frontend/css/stylee.css" rel="stylesheet" />
    </head>

    <body>

        <div class="container">
            <div class="placeholder">
                <div class="parallax-window" data-parallax="scroll" data-image-src="frontend/images/img2front.jpg">
                    <div class="tm-header">
                        <div class="row tm-header-inner">
                            <div class="col-md-6 col-12">
                                <img src="backend/images/logo2.png" alt="Logo" class="tm-site-logo" />
                                <div class="tm-site-text-box">
                                    <h1 class="tm-site-title">ASSINIE Pâtisserie</h1>
                                    <h6 class="tm-site-description">la pâtisserie de référence tout près de chez vous</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <main>
                <header class="row tm-welcome-section">
                    <h2 class="col-12 text-center tm-section-title">À propos de ASSINIE Pâtisserie</h2>
                    <p class="col-21 text-center">Nous sommes une entreprise de pâtisserie, en vue de faliciter l'expérience
                        cliente, nous avons envisagés la digitalisation de nos services afin qu'ils soient accessibles à
                        tous. Avec notre plateforme vous pouvez passer toutes
                        vos commandes de gâteaux d'anniverssaires, mariages, baptêmes et plein d'autres sur mesure. Nous
                        confectionnons votre gâteau sur mésure puis nous vous livrerons à domicile en un temps record.
                        <b>ASSINIE la pâtisserie en ligne, nous prenons plaisir à vous satisfaire!! </b>
                    </p>
                </header>

                <div class="tm-container-inner tm-persons">
                    <div class="row">
                        <article class="col-lg-6">
                            <figure class="tm-person">
                                <figcaption class="tm-person-description">
                                    <h4 class="tm-person-name">Djaffar SANNA</h4>
                                    <p class="tm-person-title">Founder and CEO</p>
                                    <p class="tm-person-about">Avec l'initiative de fonder cette entreprise pour rendre un
                                        certains nombres de services. ASSINIE est plutôt fière de vous satisfaire.
                                    </p>
                                    <div>
                                        <a href="https://facebook.com/djaffar.sanna" class="tm-social-link">
                                            <i class="fab fa-facebook tm-social-icon"></i></a>
                                        <a href="https://instagram.com" class="tm-social-link"><i
                                                class="fab fa-instagram tm-social-icon"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col-lg-6">
                            <figure class="tm-person">
                                <figcaption class="tm-person-description">
                                    <h4 class="tm-person-name">Prenoms NOM</h4>
                                    <p class="tm-person-title">Executive Chef</p>
                                    <p class="tm-person-about">Nos portes sont ouvertes 24h/7 jours pour receptionner vos
                                        commandes.
                                        Merci pour la confiance que vous nous faites.
                                    </p>
                                    <div>
                                        <a href="https://facebook.com/emilie.oubda" class="tm-social-link">
                                            <i class="fab fa-facebook tm-social-icon"></i></a>
                                        <a href="https://twitter.com" class="tm-social-link"><i
                                                class="fab fa-twitter tm-social-icon"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
                <div class="tm-container-inner tm-featured-image">
                    <div class="row">
                        <div class="col-12">
                            <div class="placeholder-2">
                                <div class="parallax-window-2" data-parallax="scroll"
                                    data-image-src="frontend/images/about-05.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tm-container-inner tm-history">
                    <div class="row">
                        <div class="col-12">
                            <div class="tm-history-inner">
                                <img src="frontend/images/1Logo Assinie.png" alt="Image" class="img-fluid tm-history-img" />
                                <div class="tm-history-text">
                                    <h4 class="tm-history-title">Histoire de la pâtisserie ASSINIE</h4>
                                    <p class="tm-mb-p">ASSINIE est une entreprise de pâtisserie qui à vue le jour en
                                        juin
                                        2019. Elle est constituée
                                        d'une équipe qualifiée de jeunes étudiants diplômés dans diverses domaines. Notre
                                        objectif est d'améliorer l'expérience
                                        des clients et innover dans le domaine de la pâtisserie tout en digitalisant nos
                                        services.</p>
                                    <p>Passez tous vos commandes pâtissiers avec nous et vous serez 100% satisfaire. Pour
                                        prendre contacte avec nous, cliquez ici <a
                                            href="{{ URL::to('/contactez-nous') }}">contactez nous</a>
                                        Merci pour la confiance.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

        </div>
        <script src="frontend/js/jquery.min.js"></script>
        <script src="frontend/js/parallax.min.js"></script>
    </body>

    </html>

@endsection
