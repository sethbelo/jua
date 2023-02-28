@extends('app')
    @section('content') 
    <section class="page-header">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-8">
            <div class="title-block">
                <h1>Entrer en contact</h1>
            </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Contact section start  -->
    <section class="contact about-3  section-padding">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-5">
                <div class="contact-info-wrapper mb-5 mb-lg-0">
                    <h3>
                        <span>Entrer en contact</span>
                    </h3>
                    <p>
                        Vous n'avez pas de compte et vous voulez déposer une demande d'admission? 
                    </p>

                        <div class="contact-item">
                            <i class="fa fa-envelope"></i>
                            <h5>support@jua-edu.org</h5>
                        </div>

                        <div class="contact-item">
                            <i class="fa fa-phone-alt"></i>
                            <h5>+243 234 345467</h5>
                        </div>

                        <div class="contact-item">
                            <i class="fa fa-map-marker"></i>
                            <h5>Avenue Mushi, 123 lingwala kinshasa RDC </h5>
                        </div>
                </div>
                </div>

                <div class="col-xl-7 col-lg-6">
                    <form class="contact__form form-row " method="post" action="mail.php" id="contactForm">
                        <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                Votre message a bien été envoyé.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" id="nom" name="nom" class="form-control" placeholder="votre nom">
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="email" id="email" class="form-control" placeholder="Adresse e-mail">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <select class="form-control" name="" id="">
                                    <option value="">Information</option>
                                    <option value="">Incription</option>
                                    <option value="">Formation continue</option>
                                    <option value="">Programmes d'études</option>
                                    <option value="">Services aux etudiants</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea id="message" name="message" cols="30" rows="6" class="form-control" placeholder="Votre message"></textarea>    
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="text-center">
                            <button class="btn btn-main w-100 rounded" type="submit">Envoyer le message</button>
                        </div>
                    </div>
                </form> 
                </div>
            </div>
        </div>
    </section>
    @stop