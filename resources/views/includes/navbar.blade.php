<nav class="top_navbar">
    <div class="container">
        <div class="row clearfix">
            <div class="col-12">
                <div class="navbar-logo">
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" href="#">
                        <span class="m-l-10">Jua Universite</span>
                    </a>
                </div>
                <ul class="nav navbar-nav">
                   
                    <li class="dropdown notifications">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="ion ion-md-card "></i> 
                            <span class="label-count">5</span>
                        </a>
                    </li>
                    <li class="dropdown task hidden-sm">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="ion ion-md-clipboard"></i>
                        <span class="label-count">5</span>
                        </a>
                    </li>
                    <li class="dropdown app_menu hidden-sm">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="ion ion-md-paper"></i>
                        </a>
                    </li>                
                    <!-- Deconnexion -->
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="js-right-sidebar">
                           <i class="dripicons-power "></i> 
                           Deconnexion 
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>        
    </div>
</nav>
<!-- Main Left sidebar menu  -->
<aside id="leftsidebar" class="sidebar h_menu">
    <div class="container">
        <div class="row clearfix">
            <div class="col-12">
                <div class="menu">
                    <ul class="list">
                        <li class="header">MAIN</li>
                        <li class="active open">
                            <a href="{{url('home')}}" class="menu-toggle waves-effect waves-block">
                                <i class="icon-basket-loaded"></i><span>Academie</span>
                            </a>
                           
                        </li>
                        <li class="">
                            <a href="{{url('training')}}" class="menu-toggle waves-effect waves-block">
                                <i class="ion ion-ios-arrow-forward"></i><span>Fomation</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="javascript:void(0);" class="toggled waves-effect waves-block">
                                <i class="on ion-ios-arrow-forward "></i><span>Etudiant</span>
                            </a>
                            <ul class="ml-menu">
                                <li class="">
                                    <a href="{{url('adhession')}}" class=" waves-effect waves-block ">Inscription</a>
                                </li>
                                <li class=""><a href="{{url('programmes')}}" class=" waves-effect waves-block">Programme</a></li>

                            </ul>
                        </li>
                        
                 
                        <li class="#">
                            <a href="{{url('document')}}" class="menu-toggle waves-effect waves-block">
                                <i class="icon-layers"></i><span>Documments</span>
                            </a>
                          
                        </li>
                        <li class="">
                            <a href="{{url('resultats')}}" class="menu-toggle waves-effect waves-block">
                                <i class="ion ion-ios-arrow-forward"></i><span>Résultats</span>
                            </a>
                        </li>
                        
                        <li class="">
                            <a href="{{url('bibliotheque')}}" class="menu-toggle waves-effect waves-block">
                                <i class="icon-doc"></i><span>Bibliotheque</span>
                            </a>
                        
                        </li>
                                               
                        <li class="">
                            <a href="{{url('paiement')}}" class="menu-toggle waves-effect waves-block">
                                <i class="icon-bar-chart"></i><span>Paiement</span>
                            </a>
                           
                        </li>
                                       
                    </ul>
                </div>
            </div>
        </div>
    </div>
</aside>
