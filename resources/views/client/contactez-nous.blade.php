@extends('layouts.app1')

@section('contenu')

    <head>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="frontend/css/about.css" rel="stylesheet" />
        <link href="frontend/css/stylee.css" rel="stylesheet" />
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    </head>

    <body>

        <div class="hero-wrap hero-bread" style="background-image: url('/frontend/images/img1front.jpg');">
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center">
                    <div class="col-md-9 ftco-animate text-center">
                        <h1 class="mb-0 bread">Contactez-nous</h1>
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

            <div class="tm-container-inner-2 tm-info-section">
                <div class="row">
                    <!-- FAQ -->
                    <div class="col-12 tm-faq">
                        <h2 class="text-center tm-section-title">FAQs</h2>
                        <p class="text-center">Cette section est dédiée aux réponses des questions fréquement posées,
                            prenez
                            juste un temps pour lire afin d'éviter certaines questions. Merci.</p>
                        <div class="tm-accordion">
                            <button class="accordion">1. Est-ce qu'on paye en ligne?</button>
                            <div class="panel">
                                <p>Non pour l'instant vous ne pouvez pas payer en ligne, vous payez uniquement à la
                                    livraison.
                                </p>
                            </div>

                            <button class="accordion">2. Est-ce qu'on paye la livraison?</button>
                            <div class="panel">
                                <p>Oui et les frais de livraison son à 500 Fr dans la ville de Ouagadougou, Bobo-Dioulasso
                                    et
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
                                <p>Evidemment que oui, pour pouvez passer tout en étant dans une autre ville et cette
                                    commande
                                    vous serai livrée grâce à nos compagnies de transport partenaire</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        </div>
    @endsection
