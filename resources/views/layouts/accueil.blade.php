@extends('app')
    @section('content') 
        <!-- Banner Section Start  -->
        <section class="banner-style-4 banner-padding">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12 col-xl-6 col-lg-6">
                        <div class="banner-content ">
                            <h1>JUA Université holistique, Offre une éducation stratégique </h1>
                            <p class="mb-40"> 
                                Nos programmes vous apportent l'expertise et l'expérience nécessaires pour vous épanouir dans 
                                les secteurs du divertissement et de la gestion.
                            </p>

                            <div class="btn-container">
                                <a href="{{url('register')}}" class="btn btn-main rounded">Inscription</a>
                                <a href="#" class="btn btn-white rounded ms-2">Commencer </a>
                            </div>
                        </div>
                    </div>
                    <!-- image creation belocorp -->
                    <div class="col-md-12 col-xl-6 col-lg-6">
                        <div class="banner-img-round mt-5 mt-lg-0 ps-5">
                            <img src="images/bg/banner_01.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div> <!-- / .row -->
            </div>
            <!-- / .container -->
        </section>
        <!-- Counter Section start -->
        <section class="counter-section4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12 counter-inner">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="counter-item mb-5 mb-lg-0">
                                    <div class="count">
                                        <span class="counter h2">2000</span><span>+</span>
                                    </div>
                                    <p>Étudiantes</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="counter-item mb-5 mb-lg-0">
                                    <div class="count">
                                        <span class="counter h2">1200</span>
                                    </div>
                                    <p>Formations</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter-item mb-5 mb-lg-0">
                                    <div class="count">
                                        <span class="counter h2">2256</span>
                                    </div>
                                    <p>Diplôme</p>     
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="counter-item">
                                    <div class="count">
                                        <span class="counter h2">100</span><span>%</span>
                                    </div>
                                    <p>Satisfaction</p>     
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </div>
        </section>
        <!-- Bienvenue & presentation  -->
        <section class="work-process course-category-3 section-padding">
            <div class="container">
               
                <div class="row">
                    <div class="col-xl-7 pe-xl-5 col-lg-12">
                        <div class="section-heading mb-10">
                            <h2 class="font-lg">Bienvenue Chez Jua universite</h2>
                        </div>
                        <p class="text-align">
                            Université Holistique, avec système des crédits heures, certification international sur le curriculum de Gaia et les Standards du Réseau Mondial des Eco villages, Jua,
                            c’est aussi des jumelages avec des universités holistiques et des sciences d’écologie de l’Afrique du Monde.
                            Nous donnons à nos étudiants les moyens d’être les champions du développement durable dans différentes sphères de la vie. Nous offrons un 
                            lieu où les nouvelles idées rencontrent un terrain fertile pour la recherche et l’innovation.
                            <br/>
                            L’éducation à l’Université d’Héliopolis combine l’enseignement universitaire, la recherche scientifique et la pratique avec un programme de base
                             humaniste unique pour développer des esprits curieux et créatifs qui peuvent réfléchir et agir pour façonner un avenir meilleur pour nous tous.
                        </p>
                    </div>

                    <div class="col-xl-5">
                        <div class=" mt-3 mt-xl-0">
                            <div class="video-content">
                                <img src="{{asset('/images/bg/intro.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Notre université -->
        <section class="course-wrapper section-padding ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="section-heading mb-70 text-center">
                            <h2 class="font-lg">Notre université</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-lg-center">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="course-grid bg-shadow tooltip-style">
                            <div class="course-header">
                                <div class="course-thumb">
                                    <img src="images/event/img_06.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
            
                            <div class="course-content">
                                

                                <h3 class="course-title mb-20"> <a href="#">une autre façon d'entreprendre </a> </h3>

                            </div>
            
                            <!-- <div class="course-hover-content">
                               
                                <h3 class="course-title mb-20 mt-30"> <a href="#">Data Competitive Strategy law &amp; Organization </a> </h3>
                               
                                <p class="mb-20">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero, culpa. At voluptatem autem ipsam deleniti</p>
                                <a href="#" class="btn btn-grey btn-sm rounded">Adhérer maintenant <i class="fal fa-angle-right"></i></a>
                            </div> -->
                        </div>
                    </div>
                    <!-- COURSE END -->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="course-grid bg-shadow tooltip-style">
                            <div class="course-header">
                                <div class="course-thumb">
                                    <img src="{{asset('/images/event/img_05.jpg')}}" alt="" class="img-fluid">
                                </div>
                            </div>
            
                            <div class="course-content">
                                

                                <h3 class="course-title mb-20"> <a href="#">Exposition des etudiants jua </a> </h3>

                             
                            </div>
            
                            <!-- <div class="course-hover-content">
                               
                                <h3 class="course-title mb-20 mt-30"> <a href="#">Data Competitive Strategy law &amp; Organization </a> </h3>
                                
                                <p class="mb-20">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero, culpa. At voluptatem autem ipsam deleniti</p>
                                <a href="#" class="btn btn-grey btn-sm rounded"> <i class="fal fa-angle-right"></i></a>
                            </div> -->
                        </div>
                    </div>
                    <!-- COURSE END -->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="course-grid bg-shadow tooltip-style">
                            <div class="course-header">
                                <div class="course-thumb">
                                    <img src="images/event/img_02.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
            
                            <div class="course-content">
                                <h3 class="course-title mb-20"> <a href="#">Gloire et d’excellence </a> </h3>
                            </div>
            
                            <!-- <div class="course-hover-content">
                               
                                <h3 class="course-title mb-20 mt-30"> 
                                    <a href="#">Data Competitive Strategy law &amp; Organization </a> 
                                </h3>
                             
                                <p class="mb-20">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero, culpa. At voluptatem autem ipsam deleniti</p>
                                <a href="#" class="btn btn-grey btn-sm rounded">Adhérer maintenant <i class="fal fa-angle-right"></i></a>
                            </div> -->
                        </div>
                    </div>
                    <!-- COURSE END -->
                </div>
            </div>
        </section>
        <!-- Nos faculte -->
        <section class="course-category-3 section-padding">
            <div class="container">
                <div class="row mb-70 justify-content-center">
                    <div class="col-xl-8">
                        <div class="section-heading text-center">
                            <h2 class="font-lg">NOS FACULTÉS</h2>
                            <p>
                                Jua Université offre une formation académique d’un standard international aux 
                                niveaux de la Licence, de Master et Doctorat cycle (LMD) dans 7 branches.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-sm-6 mb-4">
                        <div class="single-course-category style-3 bg-1">
                            <div class="course-cat-icon">
                                <img src="images/icon/005.png" alt="" class="img-fluid">
                            </div>
                            <div class="course-cat-content">
                                <h4 class="course-cat-title">
                                    <a href="#">Sciences d’Innovations Sociales et Associées </a>
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-sm-6 mb-4">
                        <div class="single-course-category style-3 bg-2">
                            <div class="course-cat-icon">
                                <img src="images/icon/010.png" alt="icon-faculte" class="img-fluid">
                            </div>
                            <div class="course-cat-content">
                                <h4 class="course-cat-title">
                                    <a href="#">Ingénierie, Génie Civile et Constructions Écologiques</a>
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-sm-6 mb-4">
                        <div class="single-course-category style-3 bg-3">
                            <div class="course-cat-icon">
                                <img src="images/icon/01.png" alt="" class="img-fluid">
                            </div>
                            <div class="course-cat-content">
                                <h4 class="course-cat-title">
                                    <a href="#">Sciences d’Économie et de managements</a>
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl col-lg-4 col-sm-6 mb-4">
                        <div class="single-course-category style-3 bg-4">
                            <div class="course-cat-icon">
                                <img src="images/icon/02.png" alt="" class="img-fluid">
                            </div>
                            <div class="course-cat-content">
                                <h4 class="course-cat-title">
                                    <a href="#">Cultures, Arts, Communication et Multimédias</a>
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl col-lg-4 col-sm-6 mb-4">
                        <div class="single-course-category style-3 bg-5">
                            <div class="course-cat-icon">
                                <img src="images/icon/07.png" alt="" class="img-fluid">
                            </div>
                            <div class="course-cat-content">
                                <h4 class="course-cat-title">
                                    <a href="#">Pétrole, Gaz et Energies renouvelables</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-xl col-lg-4 col-sm-6 mb-4">
                        <div class="single-course-category style-3 bg-5">
                            <div class="course-cat-icon">
                                <img src="images/icon/11.png" alt="" class="img-fluid">
                            </div>
                            <div class="course-cat-content">
                                <h4 class="course-cat-title">
                                    <a href="#">Sciences, Techniques et Technologies Agricoles </a>
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl col-lg-4 col-sm-6 mb-4">
                        <div class="single-course-category style-3 bg-5">
                            <div class="course-cat-icon">
                                <img src="images/icon/05.png" alt="" class="img-fluid">
                            </div>
                            <div class="course-cat-content">
                                <h4 class="course-cat-title">
                                    <a href="#">Faculté des Sciences d’Écologie</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Work Process Section Start  -->
        <section class="work-process process22 section-padding">
            <div class="container">
              
                <div class="row align-items-center">
                    <!-- maps jua univeriste -->
                    <div class="col-xl-5">
                        <div class="mt-3 mt-xl-0">
                            <div id="chartdiv" style="height: 500px; overflow: hidden; text-align: left;"></div>
                        </div>
                    </div>
                    <!-- Mission & Vacations -->
                    <div class="col-xl-7 pe-xl-5 col-lg-12">
                        <div class="section-heading mb-40 " >
                            <h3 class="font-lg" style="color: #fff;">Commencez votre voyage</h3>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6">
                                <div class="step-item ">
                                    <div class="step-number bg-1">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </div>
                                    <div class="step-text">
                                        <h5 style="color: #fff">Mission</h5>
                                        <p style="color: #fff">
                                            Offrir à ses étudiants les moyens d'être les acteurs clés, les plus compétitifs dans les différents aspects du développement durable. 
                                            Etre un lieu d’émergence des nouvelles idées pour la poursuite de la recherche et de l'enseignement
                                        </p>
                                    </div>
                                </div>
                            </div>
                
                            <div class="col-xl-12 col-lg-6 col-md-6">
                                <div class="step-item">
                                    <div class="step-number bg-2">
                                        <i class="fa fa-rocket" aria-hidden="true"></i>
                                    </div>
                                    <div class="step-text">
                                        <h5 style="color: #fff">Notre Vision</h5>
                                        <p style="color: #fff">
                                            Etre une Université de référence qui contribue aux défis de développement holistique de la RDC et de l’Afrique. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                
                        </div>
                    </div>

                  
                </div>
            </div>
        </section>
        <!-- Partenaire -->
        <section class="features-3 section-padding-top ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="section-heading mb-50 text-center">
                            <h2 class="font-lg">Nos Partenaires académiques</h2>
                        </div>
                    </div>
                </div>

                <div class="row ">

                   
                    <div class="col-lg-3 col-md-6 col-xl-3 col-sm-6 mb-20">
                        <div class="feature-item feature-style-top hover-shadow rounded border-0">
                                <img src="{{asset('/images/part/1.png')}}" class="img-fluid" alt="partenaire" sizes="" srcset="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xl-3 col-sm-6 mb-20">
                        <div class="feature-item feature-style-top hover-shadow rounded border-0">
                                <img src="{{asset('/images/part/4.png')}}" class="img-fluid" alt="partenaire" sizes="" srcset="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xl-3 col-sm-6 mb-20">
                        <div class="feature-item feature-style-top hover-shadow rounded border-0">
                                <img src="{{asset('/images/part/3.png')}}" class="img-fluid" alt="partenaire" sizes="" srcset="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xl-3 col-sm-6 mb-20">
                        <div class="feature-item feature-style-top hover-shadow rounded border-0">
                                <img src="{{asset('/images/part/4.png')}}" class="img-fluid" alt="partenaire" sizes="" srcset="">
                        </div>
                    </div>
                    
                    
                   
                </div>
            </div>
        </section>
        
        <!-- CTA Sidebar start  -->
        <!-- <section class="cta-5 mb--120 bg-gray">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="cta-inner4">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-xl-4 col-lg-5">
                                <div class="cta-img mb-4 mb-lg-0">
                                    <img src="images/bg/formation.jpg" alt="formation" class="img-fluid">
                                </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="cta-content ps-lg-4">
                                        <h6 class="mb-20">
                                            Jua Université présente également une gamme des formations des spécialisation hors cycle académique dans plusieurs Domain professionnel. 
                                        </h6>
                                        <a href="#" class="btn btn-main rounded"> Adhérer maintenant</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    @stop