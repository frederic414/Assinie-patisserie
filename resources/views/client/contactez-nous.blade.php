@extends('layouts.app1')
@section('contenu')

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta name="description"
            content=" ASSINIE Pâtisserie, la pâtisserie en ligne qui vous permet de passer toutes vos
                                                                             commande patissier gâteaux de mariage, gâteaux d'anniverssaire et gâteaux de baptème et vous les faits livrer à domicil.">
        <meta name="keywords"
            content="ASSINIE, pâtisserie,assinie pâtisserie, gâteaux d'anniverssaire, gâteaux de mariage, gâteaux de baptème,partissier">
        <title>Assinie Pâtisserie - Contact Page</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" />
        <link href="frontend/css/all.min.css" rel="stylesheet" />
        <link href="frontend/css/stylee.css" rel="stylesheet" />
    </head>

    <body>
        <div class="container">
            <div class="placeholder">
                <div class="parallax-window" data-parallax="scroll" data-image-src="frontend/images/img3front.jpg">
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
                    <h2 class="col-12 text-center tm-section-title">Nous Contacter</h2>
                    <p class="col-12 text-center">Vous devez remplir le formulaire <b>tout en laissant votre
                            contact.</b>Vous pouvez nous appeler ou nous
                        envoyer un email.</p>
                </header>

                <div class="tm-container-inner-2 tm-contact-section">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="" method="POST" class="tm-contact-form">
                                <div class="form-group">
                                    <input id="name" type="text" name="name" class="form-control" placeholder="Nom"
                                        required="" />
                                </div>

                                <div class="form-group">
                                    <input id="email" type="email" name="email" class="form-control" placeholder="Email"
                                        required="" />
                                </div>

                                <div class="form-group">
                                    <textarea id="message" rows="5" name="message" class="form-control"
                                        placeholder="Votre message" required=""></textarea>
                                </div>

                                <div class="form-group tm-d-flex">
                                    <button type="submit" class="tm-btn tm-btn-success tm-btn-right" id="mail_send">
                                        Envoyer
                                    </button>
                            </form>
                        </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="tm-address-box">
                            <h4 class="tm-info-title tm-text-success">Nos Addresses</h4>
                            <address>
                                Nous sommes situés à Karpala secteur 53 de Ouagadougou
                            </address>
                            <a href="tel:+226 54959585" class="tm-contact-link">
                                <i class="fas fa-phone tm-contact-icon"></i>+226 53 01 33 33 / 54 95 95 85
                            </a>
                            <a href="mailto:djaffarsana20@gmail.com" class="tm-contact-link">
                                <i class="fas fa-envelope tm-contact-icon"></i>djaffarsanna20@gmail.com
                            </a>
                            <div class="tm-contact-social">
                                <a href="https://fb.com/" class="tm-social-link"><i
                                        class="fab fa-facebook tm-social-icon"></i></a>
                                <a href="#" class="tm-social-link"><i class="fab fa-twitter tm-social-icon"></i></a>
                                <a href="#" class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <!-- How to change your own map point
                                                    1. Go to Google Maps
                                                    2. Click on your location point
                                                    3. Click "Share" and choose "Embed map" tab
                                                    4. Copy only URL and paste it within the src="" field below -->
        <div class="tm-container-inner-2 tm-map-section">
            <div class="row">
                <div class="col-12">
                    <div class="tm-map">
                        <iframe
                            src="https://www.google.com/maps/place/Centre+commercial+Kwame+N%E2%80%99krumah/@12.3751578,-1.5521126,17z/data=!3m1!4b1!4m5!3m4!1s0xe2e95182c727209:0xc3d957493a6bc35c!8m2!3d12.3751526!4d-1.5499239"
                            frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="tm-container-inner-2 tm-info-section">
            <div class="row">
                <!-- FAQ -->
                <div class="col-12 tm-faq">
                    <h2 class="text-center tm-section-title">FAQs</h2>
                    <p class="text-center">Cette section est dédiée aux réponses des questions fréquement posées, prenez
                        juste un temps pour lire afin d'éviter certaines questions. Merci.</p>
                    <div class="tm-accordion">
                        <button class="accordion">1. Est-ce qu'on paye en ligne?</button>
                        <div class="panel">
                            <p>Non pour l'instant vous ne pouvez pas payer en ligne, vous payez uniquement à la livraison.
                            </p>
                        </div>

                        <button class="accordion">2. Est-ce qu'on paye la livraison?</button>
                        <div class="panel">
                            <p>Oui et les frais de livraison son à 500 Fr dans la ville de Ouagadougou, Bobo-Dioulasso et
                                Koudougou.</p>
                        </div>

                        <button class="accordion">3. Est-ce qu'on peut commander plusieurs gâteaux?</button>
                        <div class="panel">
                            <p>Oui vous pouvez commander autant de gâteaux que vous voulez dans la même journée <a
                                    href="mailto:djaffarsanna20@gmail.com" class="tm-contact-link">commande</a>.</p>
                        </div>

                        <button class="accordion">4. Est-ce qu'on peut passer une commande étant dans une autre
                            ville?</button>
                        <div class="panel">
                            <p>Evidemment que oui, pour pouvez passer tout en étant dans une autre ville et cette commande
                                vous serai livrée grâce à nos compagnies de transport partenaire</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </main>
        </div>
        <script src="frontend/js/jquery.min.js"></script>
        <script src="frontend/js/parallax.min.js"></script>
        <script>
            $(document).ready(function() {
                var acc = document.getElementsByClassName("accordion");
                var i;

                for (i = 0; i < acc.length; i++) {
                    acc[i].addEventListener("click", function() {
                        this.classList.toggle("active");
                        var panel = this.nextElementSibling;
                        if (panel.style.maxHeight) {
                            panel.style.maxHeight = null;
                        } else {
                            panel.style.maxHeight = panel.scrollHeight + "px";
                        }
                    });
                }
            });
        </script>

    @endsection
