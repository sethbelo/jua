@extends('app')
@section('content')
    <!--====== Header End ======-->
    <section class="page-header">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-8">
            <div class="title-block">
                <h1>Inscription</h1>
            </div>
            </div>
        </div>
        </div>
    </section>
    <!-- formulaire justify-content-center -->
    <section class="about-3 ">
        <div class="container">
            <div class="row">
                <!-- profils -->
                <div class="col-md-4 mt-40 mb-40">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center"> 
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <button class="btn btn-radius btn-secondary btn-sm">votre profils</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between  flex-wrap">
                                <span class="text-secondary">
                                    Avez-vous déjà soumis une demande d’admission à l’Université Jua?
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- formulaire -->
                <div class="col-md-8 mt-40 mb-40">
                    <div class="card">
                        <div class="card-header">{{ __('Formulaire d\'inscription') }}</div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="row">
                                    <!-- nom -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name" class="col-form-label text-md-right">{{ __('Nom') }}</label>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Entre votre nom" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- Post -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="post" class=" col-form-label text-md-right">{{ __('Postnom') }}</label>
                                            <input id="post" type="text" class="form-control @error('post') is-invalid @enderror" placeholder="Entre votre Postnom" name="post" value="{{ old('post') }}" required autocomplete="post">
                                            @error('post')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- prenom -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="prenom" class="col-form-label text-md-right">{{ __('Prenom') }}</label>
                                            <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" placeholder="entre votre prenom" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom">
                                            @error('prenom')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- naissance -->
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="naissance" class="col-form-label text-md-right">{{ __('Date naissance') }}</label>
                                            <input id="naissance" type="date" class="form-control @error('naissance') is-invalid @enderror" placeholder="entre votre age" name="naissance" value="{{ old('naissance') }}" required autocomplete="naissance" >
                                            @error('naissance')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- genre -->
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="genre" class="col-form-label text-md-right">{{ __('Genre') }}</label>
                                            <select id="genre" name="genre" type="text" class="form-control @error('genre') is-invalid @enderror" >
                                                <option value="masculin">Homme</option>
                                                <option value="féminin">Femme</option>
                                            </select>
                                            @error('genre')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <hr>
                                    <!-- Adresse  -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="adresse" class="col-form-label text-md-right">{{ __('Commune') }}</label>
                                            <input id="adresse" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="lemba" name="adresse" value="{{ old('adresse') }}" required autocomplete="adresse" >
                                            @error('adresse')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="adresse" class="col-form-label text-md-right">{{ __('Avenue') }}</label>
                                            <input id="adresse" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Bolafa " name="adresse" value="{{ old('adresse') }}" required autocomplete="adresse" >
                                            @error('adresse')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="adresse" class="col-form-label text-md-right">{{ __('Numero') }}</label>
                                            <input id="adresse" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="N° " name="adresse" value="{{ old('adresse') }}" required autocomplete="adresse" >
                                            @error('adresse')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- Telephote -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="telephone" class="col-form-label text-md-right">{{ __('Telephone') }}</label>
                                            <input id="telephone" type="tel" class="form-control @error('name') is-invalid @enderror" placeholder="+243 82 523 425" name="telephone" value="{{ old('name') }}" required autocomplete="telephone" >
                                            @error('telephone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- Email -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email" class=" col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label for="password" class="col-form-label text-md-right">{{ __('Mot de passe') }}</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __(' Entre un Mot de passe') }}" name="password" required autocomplete="new-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm mot de passe') }}</label>
                                            <input id="password-confirm" type="password" class="form-control" placeholder="{{ __('Confirme votre mot de passe') }}" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                </div>
                                
                                

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary btn-lg">
                                            {{ __('Créer un compte') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
