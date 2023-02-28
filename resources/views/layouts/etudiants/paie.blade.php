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
                                        <h2>Mes Paiement</h2>
                                        <ul class="breadcrumb p-l-0 p-b-0 ">                                                                                                                            
                                            <li class="breadcrumb-item active">paiement à l'université</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                                        <button class="btn btn-primary float-right hidden-xs m-l-10">Nouveau</button>
                                    </div>
                                </div>
                            </div>
                                                    
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
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
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 268.317px;" aria-label="Position: activate to sort column ascending">motif de paiement</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 119.633px;" aria-label="Office: activate to sort column ascending">Montant</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 119.633px;" aria-label="Office: activate to sort column ascending">Numero</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 119.633px;" aria-label="Office: activate to sort column ascending">Banque</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 119.633px;" aria-label="Office: activate to sort column ascending">verification</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 83.5167px;" aria-label="Salary: activate to sort column ascending">Action</th>
                                                </tr>
                                            </thead>
                                           
                                            <tbody>            
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">#</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>Tokyo</td>
                                                    <td>Tokyo</td>
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