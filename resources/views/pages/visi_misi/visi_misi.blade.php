@extends('layout.layout')
@section('title')
    Dashboard
@endsection

@section('content')



            <!-- page content -->
            <div class="right_col" role="main">
		<?php 
		// echo "<pre>". print_r($data,1)."</pre>"; 
		?>

                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Visi - Misi</h3>
                        </div>

                        <div class="title_right">
                            <div class="pull-right">
                                <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                                <!-- <input style="padding: 5px 16px;" type="text" placeholder="Search..." class="autocomplete-input input tooltip-button ui-autocomplete-input" data-placement="bottom" title="" name="" data-original-title="Type 'jav' to see the available tags..." autocomplete="off"> -->
                                <i class="glyph-icon icon-search"></i>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Visi - Misi  <small>Pondok Programmer</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                     <!-- start accordion -->
                                    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">                           
                                    

                                        @foreach ($data as $row)
                                        <div class="panel">
                                            <a class="panel-heading collapsed" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo{{ $row->id }}" aria-expanded="false" aria-controls="collapseTwo{{ $row->id }}">
                                                <h4 class="panel-title">{{ $row->visi }}</h4>
                                            </a>
                                            <div id="collapseTwo{{ $row->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                   <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 50%;">Misi Pondok Programmer</th>
                                                                <th style="text-align: center;">Parameter {{ $row->visi }}</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th><?php echo nl2br($row->misi);  ?>  </th>
                                                                <td><?php echo nl2br($row->param);  ?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                     

                                    </div>
                                    <!-- end of accordion -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- footer content -->
                <footer>
                    <div class="">
                        <p class="pull-right">Gentelella Alela! a Bootstrap 3 template by <a>Kimlabs</a>. |
                            <span class="lead"> <i class="fa fa-paw"></i> Gentelella Alela!</span>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->

            </div>


@endsection