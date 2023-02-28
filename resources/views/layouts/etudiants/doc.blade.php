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
                                        <h2>Documents</h2>
                                        <ul class="breadcrumb p-l-0 p-b-0 ">
                                            <li class="breadcrumb-item">Dossiers</li>                                                                                                                            
                                            <li class="breadcrumb-item active">Academique</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-8 col-sm-12">
                                        
                                    </div> 
                                </div>
                            </div>                    
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="row clearfix">
                <div class="card">
                    <div class="body">
                        <div class="row">
                            <div class="col-xl-6">
                                <div id="frmFileUpload" class="dropzone dz-clickable">
                                    <div class="dz-message">
                                        <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                        <h4>Drop files here or click to upload.</h4>
                                        <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="body">
                                 <p>
                                    Préparez maintenant votre dossier de candidature afin de déposer votre demande d’admission. 
                                 </p>
                                <div class="row">
                                    <div class="col-md-4 radio">
                                        <input type="radio" name="radio" id="radio1" value="option1">
                                        <label for="radio1">
                                            Attestation
                                        </label>
                                    </div>
                                    <div class="col-md-4 radio">
                                        <input type="radio" name="radio" id="radio2" value="option">
                                        <label for="radio2">
                                            Diplôme
                                        </label>
                                    </div>
                                    <div class="col-md-4 radio">
                                        <input type="radio" name="radio" id="radio3" value="option">
                                        <label for="radio3">
                                             Dossier médical
                                        </label>
                                    </div>
                                    <div class="col-md-4 radio">
                                        <input type="radio" name="radio" id="radio4" value="option">
                                        <label for="radio4">
                                            Relevé de note
                                        </label>
                                    </div>
                                    <div class="col-md-4 radio">
                                        <input type="radio" name="radio" id="radio5" value="option">
                                        <label for="radio5">
                                            Certificat
                                        </label>
                                    </div>
                                    <div class="col-md-4 radio">
                                        <input type="radio" name="radio" id="radio6" value="option">
                                        <label for="radio6">
                                                TFC
                                        </label>
                                    </div>

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
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 268.317px;" aria-label="Position: activate to sort column ascending">Document</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 119.633px;" aria-label="Office: activate to sort column ascending">Emission</th>


                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 83.5167px;" aria-label="Salary: activate to sort column ascending">Action</th>
                                                </tr>
                                            </thead>
                                           
                                            <tbody>            
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">#</td>
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