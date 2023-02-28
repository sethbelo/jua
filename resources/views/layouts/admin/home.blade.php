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
                                        <div class="col-lg-3 col-md-8 col-sm-12">
                                            <div>
                                                <img src="images/logo/logo.png" width="150px" alt="">
                                            </div>
                                            
                                        </div>
                                        <div class="col-lg-9 col-md-4 col-sm-12 text-right">
                                            
                                            <ul class="breadcrumb p-l-0 p-b-0 float-right">
                                                <li class="breadcrumb-item">
                                                    Dashboard
                                                    <span>etu</span>
                                                </li>
                                                <!-- <li class="breadcrumb-item active">Index</li> -->
                                            </ul>
                                        
                                        </div>
                                    </div>
                                </div>
                                                        
                            </div>
                        </div>
                    </div>
                </div>
                <!-- statitique -->
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card info-box-2">
                            <div class="body">
                                <div class="icon">
                                    <div class="chart chart-pie">
                                        <img src="{{asset('/images/trophe/1.png')}}"  width="50" height="50" alt="trophe">
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="text">PARTICIPANT</div>
                                    <div class="number">
                                        <span class="number count-to " data-from="0" data-to="98" data-speed="2000" data-fresh-interval="700">00</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card info-box-2">
                            <div class="body">
                                <div class="icon">
                                    <div class="chart chart-bar">
                                        <img src="{{asset('/images/trophe/1.png')}}"  width="50" height="50" alt="trophe">
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="text">FORMATIONS</div>
                                    <div class="number count-to" data-from="0" data-to="457512" data-speed="2000" data-fresh-interval="700">00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card info-box-2">
                            <div class="body">
                                <div class="icon">
                                    <span class="chart chart-line">
                                        <img src="{{asset('/images/trophe/1.png')}}"  width="50" height="50" alt="trophe">
                                    </span>
                                </div>
                                <div class="content">
                                    <div class="text">COURS</div>                            
                                    <div class="number"><span class="number count-to" data-from="0" data-to="125543" data-speed="2000" data-fresh-interval="700">00</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card info-box-2">
                            <div class="body">
                                <div class="icon">
                                    <div class="chart chart-bar">
                                        <img src="{{asset('/images/trophe/1.png')}}"  width="50" height="50" alt="trophe">
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="text">CONCOURS</div>
                                    <div class="number"><span class="number count-to" data-from="0" data-to="1063" data-speed="2000" data-fresh-interval="700">00</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>        


                <div class="row clearfix">
                    <div class="col-xl-8 col-lg-7 col-md-12">
                        <div class="card overflowhidden active-bg daily-sale">
                            <div class="body">
                                <h5 class="m-b-0">Formation quotidiennes</h5>
                                <p>Consultez chaque colonne pour plus de détails</p>
                            </div>
                            <div class="sparkline pullUp" data-type="bar" data-width="97%" data-height="117px" data-bar-width="8" data-bar-spacing="15" data-bar-color="#ffffff"><canvas style="display: inline-block; width: 767px; height: 117px; vertical-align: top;" width="767" height="117"></canvas></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-12">
                        <div class="card">
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-hover m-b-0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h6 class="margin-0">Frais</h6>
                                                    <span>Academique</span>
                                                </td>
                                                <td class="text-right">
                                                    <h4 class="margin-0 text-success">130 $</h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6 class="margin-0">Participation</h6>
                                                    <span>Formation</span>
                                                </td>
                                                <td class="text-right">
                                                    <h4 class="margin-0 text-info">30 $</h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6 class="margin-0">Bibliotheque</h6>
                                                    <span>Abonnement</span>
                                                </td>
                                                <td class="text-right">
                                                    <h4 class="margin-0 text-danger">10 $</h4>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="card user-account">
                            <div class="header">
                                <h2><strong>User</strong> Accounts</h2>
                                <ul class="header-dropdown">
                                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="dripicons-print"></i> </a>
                                        <ul class="dropdown-menu dropdown-menu-right float-right">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else</a></li>
                                        </ul>
                                    </li>
                                    <li class="remove">
                                        <a role="button" class="boxs-close"><i class="dripicons-cross"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table m-b-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Formation</th>
                                                <th>Code</th>
                                                <th>Diplôme</th>
                                                <th>Annonce</th>
                                                <th>Date</th>

                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width: 25px;">1</td>
                                                <td><a href="#">Fomation de debutant</a></td>
                                                <td>#5WB10</td>
                                                <td>Certification</td>
                                                <td class="hidden-xs">interne</td>
                                                <td class="hidden-xs">20-02-2023</td>
                                                <td><span class="badge badge-success">Approved</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-md-12 col-lg-12">
                        <div class="card active-bf">
                            <div class="body">
                                <p class="copyright m-b-0 text-white">Copyright 2023 © All Rights Reserved. Belocorp</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection