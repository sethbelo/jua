@extends('main')
    @section('content')
    <section class="content">
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <div class="block-header">
                                <div class="row">
                                    <div class="col-lg-6 col-md-8 col-sm-12">
                                        <h2>
                                            <i class="fas fa-graduation-cap"></i>
                                            Formulaire d'inscription
                                        </h2>
                                        <ul class="breadcrumb p-l-0 p-b-0 ">
                                            <li class="breadcrumb-item">Academique</li>                                                                                                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                                                    
                        </div>
                    </div>
                </div>
            </div>
            <!-- Input -->
            <div class="row">
                <!-- profil -->
                <div class="col-xl-4">
                    <div class="card p-2">
                        <div class="text-center">
                            <img class="user-photo" src="{{asset('/images/avatar/avatar20.png')}}" alt="profil">
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary">Telecharge Profils</button>
                        </div>
                    </div>
                    <div class="card p-3" style="background: #faee84;">
                        <div class="text-justify">
                            <h5>Préparez votre dossier</h5>
                            <p>
                                Vous avez trouvé le programme qui vous convient? Préparez maintenant votre dossier de candidature afin de déposer votre demande d’admission. Assurez-vous de satisfaire aux exigences d’admission et vérifiez quels sont les documents à transmettre en appui à votre dossier. 
                            </p>
                        </div>
                       
                    </div>
                </div>
                
                <div class="col-xl-8">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="header">
                                    <h2>
                                        <strong>
                                            <i class="ion ion-ios-archive"></i>
                                            Formulaire
                                        </strong>
                                        <small>
                                            Déposez votre demande d’admission avant <br>la date de cloture et commencez votre programme!
                                        </small> 
                                    </h2>                        
                                </div>
                                <div class="body">
                                
                                    <form action="">
                                    
                                        <!-- Indentite -->
                                        <div class="row clearfix mb-2">
                                            <div class="col-sm-6">
                                                <div class="form-group"> 
                                                    <label for="">Nom</label>                                   
                                                    <input type="text" class="form-control" placeholder="Nom">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group"> 
                                                    <label for="">Post-nom</label>                                   
                                                    <input type="text" class="form-control" placeholder="Votre Prénom">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="">Prénom</label>                                    
                                                    <input type="text" class="form-control" placeholder="Votre Prénom">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- genre -->
                                        <div class="row clearfix mb-2">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Lieu de naissance</label>                                    
                                                    <input type="text" class="form-control" placeholder="Lieu de naissance">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group"> 
                                                    <label for="">Date de naissance</label>                                   
                                                    <input type="text" class="form-control date" placeholder="Ex: 30/07/1991">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group"> 
                                                    <label for="">Genre</label>                                   
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Homme</option>
                                                        <option value="">Femme</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- telephone -->
                                        <div class="row clearfix mb-2">
                                            <div class="col-sm-6">
                                                <div class="form-group"> 
                                                    <label for="">No. Téléphone </label>                                   
                                                    <input type="text" class="form-control mobile-phone-number" placeholder="Ex: +00 (000) 000-00-00">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group"> 
                                                    <label for="">Addresse mail </label>                                   
                                                    <input type="text" class="form-control" placeholder="Jean@gmail.com">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Adresse -->
                                        
                                        <div class="row clearfix mb-2">
                                            <div class="col-sm-3">
                                                <div class="form-group"> 
                                                    <label for="">Pays d'origine </label>                                   
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Pays</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 ">
                                                <div class="form-group"> 
                                                    <label for="">Ville </label>                                   
                                                    <select class="form-control" name="" id="">
                                                        <option value="">kinshasa</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group"> 
                                                    <label for="">Commune</label>                                   
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Lemba</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group"> 
                                                    <label for="">Avenue</label>                                   
                                                    <input type="text" class="form-control" placeholder="Ex: Bolafa">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- parent -->
                                        <div class="row clearfix mb-2">
                                            <div class="col-sm-6">
                                                <div class="form-group"> 
                                                    <label for="">Nom du père</label>                                   
                                                    <input type="text" class="form-control" placeholder="Ex: Jean paul">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group"> 
                                                    <label for="">Nom de la mère</label>                                   
                                                    <input type="text" class="form-control" placeholder="Ex: Trina belo">
                                                </div>
                                            </div>
                                        
                                        </div>
                                    
                                        <!-- faculte -->
                                        <div class="row clearfix mb-2">
                                            <div class="col-sm-6">
                                                <div class="form-group"> 
                                                    <label for="">Faculte </label>                                   
                                                    <select class="form-control" name="" id="">
                                                        <option value="">CULTURE, ART, COMMUNICATION ET MULTIMEDIAS </option>
                                                        <option value="">GENIE CIVIL ET CONSTRUCTIONS ECOLOGIQUES </option>
                                                        <option value="">PETROLE, GAZ ET ENERGIES RENOUVELABLES e</option>
                                                        <option value="">SCIENCE D'ECOLOGIE </option>
                                                        <option value="">SCIENCES D'ECONOMIE ET DE MANAGEMENT </option>
                                                        <option value="">SCIENCES D'INNOVATION SOCIALE & ASSOCIEES </option>
                                                        <option value="">AGRICOLE</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group"> 
                                                    <label for="">Année  </label>                                   
                                                    <select class="form-control" name="etude" class="form-control" required="">
                                                        <option>Choisir</option>                                                        
                                                        
                                                        <option value="D3">D3</option>
                                                        <option value="D4">D4</option>
                                                        <option value="D5">D5</option>
                                                        <option selected="" value="D6">D6 (Diplôme d'état)</option>
                                                        <!-- <option selected value="Diplome d'état">Diplome d'état</option> -->
                                                        
                                                        <option value="G0">G0</option>
                                                        <option value="G1">G1</option>
                                                        <option value="G2">G2</option>
                                                        <option value="G3">G3</option>
                                                        
                                                        <option value="L1">L1</option>
                                                        <option value="L2">L2</option>
                                                        <option value="Doc1">Doc1</option>
                                                        <option value="Doc2">Doc2</option>
                                                        <option value="Doc3">Doc3</option>                                                            
                                                        <option value="Certificat">Certificat</option>
                                                        <option value="Formation">Formation</option>
                                                    </select>
                                                </div>
                                            </div>
                                        
                                            
                                        </div>
                                        <!-- faculte -->
                                        
                                        <div class="row clearfix mb-2">
                                            <div class="col-sm-6">
                                                <div class="form-group"> 
                                                    <label for="">Niveau d'études </label>                                   
                                                    <select name="etude" class="form-control" required="">
                                                        <option>Choisir</option>                                                        
                                                        
                                                        <option value="D3">D3</option>
                                                        <option value="D4">D4</option>
                                                        <option value="D5">D5</option>
                                                        <option selected="" value="D6">D6 (Diplôme d'état)</option>
                                                        <!-- <option selected value="Diplome d'état">Diplome d'état</option> -->
                                                        
                                                        <option value="G0">G0</option>
                                                        <option value="G1">G1</option>
                                                        <option value="G2">G2</option>
                                                        <option value="G3">G3</option>
                                                        
                                                        <option value="L1">L1</option>
                                                        <option value="L2">L2</option>
                                                        <option value="Doc1">Doc1</option>
                                                        <option value="Doc2">Doc2</option>
                                                        <option value="Doc3">Doc3</option>                                                            
                                                        <option value="Certificat">Certificat</option>
                                                        <option value="Formation">Formation</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group"> 
                                                    <label for="">Pourcentage</label>                                   
                                                    <input type="number" class="form-control text-center" value="1" data-rule="quantity">
                                                </div>
                                            </div>
                                        
                                            
                                        </div>
                                        
                                        <div>
                                            <button type="button" class="btn btn-raised btn-primary waves-effect">
                                                <i class="ti-save"></i>
                                                Enregistrer
                                            </button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Input --> 
           
        </div>
    </section>
    
    @endsection