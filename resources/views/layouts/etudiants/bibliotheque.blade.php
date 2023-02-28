@extends('main')
    @section('content')
    <section class="content">
        <div class="container">
            <!-- header page -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <div class="block-header">
                                <div class="row">
                                    <div class="col-lg-6 col-md-8 col-sm-12">
                                        <h2>Bibliothèques Universitaires</h2>
                                        <ul class="breadcrumb p-l-0 p-b-0 ">
                                            <li class="breadcrumb-item">Livres spécialisés et manuels en ligne </li>                                                                                                                            
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                                        <button class="btn btn-primary  float-right hidden-xs m-l-10">Mes ouvrages</button>
                                    </div>
                                </div>
                            </div>
                                                    
                        </div>
                    </div>
                </div>
            </div>
            <!-- ouvrages -->
            <div class="row clearfix text-center">
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="card">
                            <div class="body">
                                <div style="display:inline;width:70px;height:70px;"><canvas width="70" height="70"></canvas><input type="text" class="knob" value="22" data-width="70" data-height="70" data-thickness="0.1" data-fgcolor="#49c5b6" style="width: 39px; height: 23px; position: absolute; vertical-align: middle; margin-top: 23px; margin-left: -54px; border: 0px none; background: none; font: bold 14px Arial; text-align: center; color: rgb(73, 197, 182); padding: 0px; appearance: none;"></div>
                                <h6>Ouvrages</h6>
                                <span>Consulter</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="card">
                            <div class="body">
                                <div style="display:inline;width:70px;height:70px;"><canvas width="70" height="70"></canvas><input type="text" class="knob" value="78" data-width="70" data-height="70" data-thickness="0.1" data-fgcolor="#2196f3" style="width: 39px; height: 23px; position: absolute; vertical-align: middle; margin-top: 23px; margin-left: -54px; border: 0px none; background: none; font: bold 14px Arial; text-align: center; color: rgb(33, 150, 243); padding: 0px; appearance: none;"></div>
                                <h6>Cours</h6>
                                <span>Consulter</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="card">
                            <div class="body">
                                <div style="display:inline;width:70px;height:70px;"><canvas width="70" height="70"></canvas><input type="text" class="knob" value="66" data-width="70" data-height="70" data-thickness="0.1" data-fgcolor="#f44336" style="width: 39px; height: 23px; position: absolute; vertical-align: middle; margin-top: 23px; margin-left: -54px; border: 0px none; background: none; font: bold 14px Arial; text-align: center; color: rgb(244, 67, 54); padding: 0px; appearance: none;"></div>
                                <h6>Magazines</h6>
                                <span>Consulter</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="card">
                            <div class="body">
                                <div style="display:inline;width:70px;height:70px;"><canvas width="70" height="70"></canvas><input type="text" class="knob" value="50" data-width="70" data-height="70" data-thickness="0.1" data-fgcolor="#4caf50" style="width: 39px; height: 23px; position: absolute; vertical-align: middle; margin-top: 23px; margin-left: -54px; border: 0px none; background: none; font: bold 14px Arial; text-align: center; color: rgb(76, 175, 80); padding: 0px; appearance: none;"></div>
                                <h6>TFC</h6>
                                <span>Consulter</span>
                            </div>
                        </div>
                    </div>
                </div>
             <!-- content page -->
             <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">  
                        <div class="body">
                            <div class="table-responsive">          
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 164.967px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">#</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 268.317px;" aria-label="Position: activate to sort column ascending">Ouvreages</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 268.317px;" aria-label="Position: activate to sort column ascending">Edition</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 119.633px;" aria-label="Office: activate to sort column ascending">Auteur</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 119.633px;" aria-label="Office: activate to sort column ascending">Categorie</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 119.633px;" aria-label="Office: activate to sort column ascending">Action</th>
                                                </tr>
                                            </thead>
                                           
                                            <tbody>            
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">#</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <button type="button" class="btn btn-secondary btn-sm">
                                                                <i class="fas fa-eye "></i>
                                                            </button>
                                                            <button type="button" class="btn btn-success btn-sm"><i class="fas fa-print "></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content fin -->
           
        </div>
    </section>
    @endsection