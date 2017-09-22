<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
          <!-- Styles -->
        
        <script src="{{ url('/') }}/js/loaddata.js" type="text/javascript"></script>
        
        <script>
        
    if (day==1){    
    var events=["A new product is getting launched today only to PC dealers.", "","A new scheme of 3% on Royale Atmos is ending tomorrow. It is applicable only to CR dealers.","","",""];
    var eventimpactPC=[2,0,0,0,0,0];
    var eventimpactEC=[0,0,0,0,0,0];
    var eventimpactCR=[0,0,2,0,0,0];
    var eventimpactCW=[0,0,0,0,0,0];
    }
    if (day==2){    
    var events=["","A new service is being launched for Ezycolour Dealers. A taxi is sanctioned for visitng the dealers.","","","A scheme of2% on AAGE for Ezycolour & above is ending today.",""];
    var eventimpactPC=[0,0,0,0,2,0];
    var eventimpactEC=[0,2,0,0,2,0];
    var eventimpactCR=[0,0,0,0,0,0];
    var eventimpactCW=[0,0,0,0,0,0];
    }

    </script>
        <script src="{{ url('/') }}/js/myfunctions.js" type="text/javascript"></script>
        

              
        <!-- Bootstrap Core CSS -->
        <link href="{{ url('/') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="{{ url('/') }}/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="{{ url('/') }}/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="{{ url('/') }}/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{ url('/') }}/css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{ url('/') }}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">



        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link href="{{ url('/') }}/css/stylesheet.css" rel="stylesheet">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
            @auth
                <div id="wrapper">

        <!-- Navigation -->
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Asian Paintsville - A Business Simulation Game</a>
            </div>


            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="/planner/dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="/planner/week"><i class="fa fa-calendar-check-o fa-fw"></i> Plan Your Week</a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Plan Week : <script>document.write(day);</script></h1></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-inr fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="score"><script>document.write(totalrevenue());</script></div>
                                    <div>Two Weeks Target: <script>document.write(revenuetarget()*2);</script></div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-smile-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><script>document.write(dissatisfactionscore() + "/5");</script></div>
                                    <div>Customer Satisfaction</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse1">Dealer Information (Previous week) <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                        </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Name of Dealer</th>
                                        <th>Category</th>
                                        <th>Criticality</th>
                                        <th>Potential(2 weeks)</th>
                                        <th>Earned(till date)</th>
                                        <th>Route</th>
                                        <th>Last Visit</th>
                                    </tr>
                                </thead>
                                <script>
                                     document.write('<tbody>');
                                     for (i=0; i<dealerarray.length; i++){
                                        //we write the dealer info in the dealer table
                                        document.write('<tr>');
                                        document.write('<td>' + dealerarray[i] + '</td>');
                                        document.write('<td>' + categoriesarray[i] + '</td>');
                                        document.write('<td>' + criticalityarray[i] + '</td>');
                                        document.write('<td>' + dailyrevenuearray[i]*12 + '</td>');
                                        document.write('<td>' + Math.round(revenueearned[i]) + '</td>');
                                        document.write('<td>' + routearray[i] + '</td>');
                                        document.write('<td>' + dealerslastvisitarray[i] + '</td>');
                                        document.write('</tr>');
                                        }
                                     document.write('</tbody>');
                                </script>
                                
                            </table>
                            
                            </div>
                        <!-- /.panel-body -->
                        </div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse2">Plan Week  <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                        </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <p></p>
                         <!-- /.row -->
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        Monday <button type="button" class="btn btn-default btn-circle " data-toggle="modal" data-target="#infoModal"><i class="fa fa-bullhorn"></i>
                                               </button>
                                    </div>
                                    <div class="panel-body">
                                        
                                    <!-- Modal mondayinfomodal -->
                                    <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">Event Alert</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <script>
                                                        if(events[0]=="") {document.write("No events today");}
                                                        else {document.write(events[0]);}
                                                    </script>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                   
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal mondayinfomodal -->
                                       
                                       <!-- Visit Type -->
                                       
                                        <div class="form-group">
                                            <label>Visit Type</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="monday" id="monRegular" value="option1" checked>Regular
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="monday" id="monExpress" value="option2">Express
                                                </label>
                                            </div>
                                            
                                        </div>
                                        
                                        <!-- Select Monday Route -->
                                        
                                        <div class="form-group" id="monRoutei">
                                            <label for="monRoute">Select Route</label>
                                            
                                            <select id="monRoute" class="form-control">
                                            
                                            <script> 
                                                 for (i=0; i<uniqueroutes.length; i++){
                                                 //we write the routes
                                                 document.write('<option>' + uniqueroutes[i] + '</option>');
                                                }
                                            </script>
                                            </select>
                                            <small>
                                            <a href="#" data-toggle="modal" data-target="#mapModal" id="modellink">
                                             Route Map</a></small>
                                            
                                            <!-- Map Modal -->
                                            <div class="modal fade" id="mapModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">                             
		                            <div class="modal-dialog">
                                   		<div class="modal-content">
                                   		<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title" id="myModalLabel">Dealers</h4>
										</div>
                                    <!-- Nav tabs -->
                                    <div class="modal-body">
										<div class="panel-body">

											<ul class="nav nav-tabs" role="tablist">
											<li role="presentation" class="active"><a href="#g1" aria-controls="g1" role="tab" data-toggle="tab">Route G1</a></li>
											
											<li role="presentation"><a href="#g2" aria-controls="g2" role="tab" data-toggle="tab">Route G2</a></li>
											
											<li role="presentation"><a href="#g3" aria-controls="g3" role="tab" data-toggle="tab">Route G3</a></li>
											
											<li role="presentation"><a href="#g4" aria-controls="g4" role="tab" data-toggle="tab">Route G4</a></li>
											
											<li role="presentation"><a href="#g5" aria-controls="g5" role="tab" data-toggle="tab">Route G5</a></li>
											
											<li role="presentation"><a href="#g6" aria-controls="g6" role="tab" data-toggle="tab">Route G6</a></li>
											
											<li role="presentation"><a href="#g7" aria-controls="g7" role="tab" data-toggle="tab">Route G7</a></li>
										</ul>

										<!-- Tab panes -->
											<div class="tab-content">
											<div role="tabpanel" class="tab-pane active" id="g1">
												
                                                                                                <img src="../dist/images/g1.jpg">
												
											</div>
											
											<div role="tabpanel" class="tab-pane" id="g2">
												<img src="../dist/images/g2.jpg">
											</div>
											
											<div role="tabpanel" class="tab-pane" id="g3">
												<img src="../dist/images/g3.jpg">
											</div>
											
											<div role="tabpanel" class="tab-pane" id="g4">
												<img src="../dist/images/g4.jpg">
											</div>
											
											<div role="tabpanel" class="tab-pane" id="g5">
												<img src="../dist/images/g5.jpg">
											</div>
											
											<div role="tabpanel" class="tab-pane" id="g6">
												<img src="../dist/images/g6.jpg">
											</div>
											
											<div role="tabpanel" class="tab-pane" id="g7">
												<img src="../dist/images/g7.jpg">
											</div>
		
										
																										</div>

										</div>
									</div>
									<div class="modal-footer">
									<!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary">Save changes</button>-->
									</div>
										</div>
	
		   </div></div>
                                            <!-- Map ModalClosed -->
                                        </div>
                                        
                                        <!-- Select Monday Dealers -->
                                        
                                        <div class="form-group" id="monDealers">
                                            <label for="disabledSelect">Select Dealers</label>
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModalMonday">Dealers</button>
                                            <p></p>
                                            
                                            <select multiple class="form-control" id="monday_expressroute">
                                            </select>
                                            
                                        </div>
                                        
                                        <!-- Modal Monday-->
                                        
                                        <div class="modal fade" id="myModalMonday" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title" id="myModalLabel">Select Dealers for Express Visit</h4>
                                                    </div>
                                                    <!-- Modal Select Dealers -->
                                                    <div class="modal-body">
                                                        <div class="panel-body">
                                                            <table width="100%" class="table table-striped table-bordered table-hover" id="oodataTables-modal">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Name of Dealer</th>
                                                                        <th>Category</th>
                                                                        <th>Criticality</th>
                                                                        <th>Route</th>
                                                                        <th>DSLV</th>
                                                                        <th>Visit</th>
                                                                    </tr>
                                                                </thead>
                                                                <script>
                                                                     document.write('<tbody>');
                                                                     for (i=0; i<dealerarray.length; i++){
                                                                        //we write the dealer info in the dealer table
                                                                        document.write('<tr>');
                                                                        document.write('<td>' + dealerarray[i] + '</td>');
                                                                        document.write('<td>' + categoriesarray[i] + '</td>');
                                                                        document.write('<td>' + criticalityarray[i] + '</td>');
                                                                        document.write('<td>' + routearray[i] + '</td>');
                                                                        document.write('<td>' + dealerslastvisitarray[i] + '</td>');
                                                                        document.write('<td><input type="checkbox" value="' + i +'"" class="data-checkbox" id="monday' + i + '" name="monday-visit"></td>');                                                
                                                                        document.write('</tr>');
                                                                        }
                                                                     document.write('</tbody>');
                                                                </script>

                                                            </table>

                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>-->
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- /.col-lg-4 -->
                            <div class="col-lg-2">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        Tuesday <button type="button" class="btn btn-default btn-circle" data-toggle="modal" data-target="#tue-infoModal"><i class="fa fa-bullhorn"></i>
                                               </button>
                                    </div>
                                    <div class="panel-body">
                                    <!-- Modal Tuesday infomodal -->
                                    <div class="modal fade" id="tue-infoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">Event Alert</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <script>
                                                        if(events[1]=="") {document.write("No events today");}
                                                        else {document.write(events[1]);}
                                                    </script>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                   
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal Tuesday infomodal -->	
        					
        					
  					<!-- Tuesday Visit Type -->
                                       
                                        <div class="form-group">
                                            <label>Visit Type</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="tuesday" id="tueRegular" value="option1" checked>Regular
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="tuesday" id="tueExpress" value="option2">Express
                                                </label>
                                            </div>
                                            
                                        </div>
                                        
                                        <!-- Select Tuesday Route -->
                                        
                                        <div class="form-group" id="tueRoutei">
                                            <label for="tueRoute">Select Route</label>
                                            
                                            <select id="tueRoute" class="form-control">
                                            
                                            <script> 
                                                 for (i=0; i<uniqueroutes.length; i++){
                                                 //we write the routes
                                                 document.write('<option>' + uniqueroutes[i] + '</option>');
                                                }
                                            </script>
                                            </select>
                                            <small><a href="#" data-toggle="modal" data-target="#mapModal" id="modellink">Route Map</a></small>
                                        </div>
                                        
                                        <!-- Select Tuesday Dealers -->
                                        
                                        <div class="form-group" id="tueDealers">
                                            <label for="disabledSelect">Select Dealers</label>
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModalTuesday">Dealers</button>
                                            <p></p>
                                            
                                            <select multiple class="form-control" id="tuesday_expressroute">
                                            </select>
                                            
                                        </div>
                                        
                                        <!-- Modal Tuesday-->
                                        
                                        <div class="modal fade" id="myModalTuesday" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                        <div class="modal-content">
                                                                <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                                                                        <h4 class="modal-title" id="myModalLabel">Select Dealers for Express Visit</h4>
                                                                </div>
                                                                <!-- Modal Select Dealers -->
                                                                <div class="modal-body">
                                                                        <div class="panel-body">
                                                                                <table width="100%" class="table table-striped table-bordered table-hover" id="oodataTables-modal">
                                                                                        <thead>
                                                                                                <tr>
                                                                                                        <th>Name of Dealer</th>
                                                                                                        <th>Category</th>
                                                                                                        <th>Criticality</th>
                                                                                                        <th>Route</th>
                                                                                                        <th>DSLV</th>
                                                                                                        <th>Visit</th>
                                                                                                </tr>
                                                                                        </thead>
                                                                                        <script>
                                                                                                 document.write('<tbody>');
                                                                                                 for (i=0; i<dealerarray.length; i++){
                                                                                                        //we write the dealer info in the dealer table
                                                                                                        document.write('<tr>');
                                                                                                        document.write('<td>' + dealerarray[i] + '</td>');
                                                                                                        document.write('<td>' + categoriesarray[i] + '</td>');
                                                                                                        document.write('<td>' + criticalityarray[i] + '</td>');
                                                                                                        document.write('<td>' + routearray[i] + '</td>');
                                                                                                        document.write('<td>' + dealerslastvisitarray[i] + '</td>');
                                                                                                        document.write('<td><input type="checkbox" value="' + i +'" class="data-checkbox" id="tuesday' + i + '"  name="tuesday-visit"></td>');                                                
                                                                                                        document.write('</tr>');
                                                                                                        }
                                                                                                 document.write('</tbody>');
                                                                                        </script>

                                                                                </table>

                                                                                </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                        <button type="button" class="btn btn-primary">Save changes</button>-->
                                                                </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                        </div>
                                       
                                        <!-- /.modal -->                                       
     
                                    </div>

                                </div>
                            </div>
                            <!-- /.col-lg-4 -->
                            <div class="col-lg-2">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        Wednesday <button type="button" class="btn btn-default btn-circle " data-toggle="modal" data-target="#wedinfoModal"><i class="fa fa-bullhorn"></i>
                                               </button>
                                    </div>
                                    <div class="panel-body">
                                        
                                    <!-- Modal Wednesday infomodal -->
                                    <div class="modal fade" id="wedinfoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">Event Alert</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <script>
                                                        if(events[2]=="") {document.write("No events today");}
                                                        else {document.write(events[2]);}
                                                    </script>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                   
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal Wednesday infomodal -->	
                                        
                                        
                                        
                                        <!-- Wednesday Visit Type -->
                                       
                                        <div class="form-group">
                                            <label>Visit Type</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="wednesday" id="wedRegular" value="option1" checked>Regular
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="wednesday" id="wedExpress" value="option2">Express
                                                </label>
                                            </div>
                                            
                                        </div>
                                        
                                        <!-- Select Wednesday Route -->
                                        
                                        <div class="form-group" id="wedRoute1">
                                            <label for="wedRoute">Select Route</label>
                                            
                                            <select id="wedRoute" class="form-control">
                                            
                                            <script> 
                                                 for (i=0; i<uniqueroutes.length; i++){
                                                 //we write the routes
                                                 document.write('<option>' + uniqueroutes[i] + '</option>');
                                                }
                                            </script>
                                            </select>
                                            <small><a href="#" data-toggle="modal" data-target="#mapModal" id="modellink">Route Map</a></small>
                                        </div>
                                        
                                        <!-- Select Wednesday Dealers -->
                                        
                                        <div class="form-group" id="wedDealers">
                                            <label for="disabledSelect">Select Dealers</label>
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModalWednesday">Dealers</button>
                                            <p></p>
                                            
                                            <select multiple class="form-control" id="wednesday_expressroute">
                                            </select>
                                            
                                        </div>
                                        
                                        <!-- Modal Wednesday-->
                                        
                                        <div class="modal fade" id="myModalWednesday" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                        <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                                                                                <h4 class="modal-title" id="myModalLabel">Select Dealers for Express Visit</h4>
                                                                        </div>
                                                                        <!-- Modal Select Dealers -->
                                                                        <div class="modal-body">
                                                                                <div class="panel-body">
                                                                                        <table width="100%" class="table table-striped table-bordered table-hover" id="oodataTables-modal">
                                                                                                <thead>
                                                                                                        <tr>
                                                                                                                <th>Name of Dealer</th>
                                                                                                                <th>Category</th>
                                                                                                                <th>Criticality</th>
                                                                                                                <th>Route</th>
                                                                                                                <th>DSLV</th>
                                                                                                                <th>Visit</th>
                                                                                                        </tr>
                                                                                                </thead>
                                                                                                <script>
                                                                                                         document.write('<tbody>');
                                                                                                         for (i=0; i<dealerarray.length; i++){
                                                                                                                //we write the dealer info in the dealer table
                                                                                                                document.write('<tr>');
                                                                                                                document.write('<td>' + dealerarray[i] + '</td>');
                                                                                                                document.write('<td>' + categoriesarray[i] + '</td>');
                                                                                                                document.write('<td>' + criticalityarray[i] + '</td>');
                                                                                                                document.write('<td>' + routearray[i] + '</td>');
                                                                                                                document.write('<td>' + dealerslastvisitarray[i] + '</td>');
                                                                                                                document.write('<td><input type="checkbox" value="' + i +'" class="data-checkbox" id="wednesday' + i + '" name="wednesday-visit"></td>');                                                
                                                                                                                document.write('</tr>');
                                                                                                                }
                                                                                                         document.write('</tbody>');
                                                                                                </script>

                                                                                        </table>

                                                                                        </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                                <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                                <button type="button" class="btn btn-primary">Save changes</button>-->
                                                                        </div>
                                                                </div>
                                                                <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                </div>
                                       
                                        <!-- /.modal --> 
                                    </div>

                                </div>
                            </div>
                            <!-- /.col-lg-4 -->
                             <div class="col-lg-2">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        Thursday <button type="button" class="btn btn-default btn-circle " data-toggle="modal" data-target="#thuinfoModal"><i class="fa fa-bullhorn"></i>
                                               </button>
                                    </div>
                                    <div class="panel-body">
                                        
                                    <!-- Modal Thursday infomodal -->
                                    <div class="modal fade" id="thuinfoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">Event Alert</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <script>
                                                        if(events[3]=="") {document.write("No events today");}
                                                        else {document.write(events[3]);}
                                                    </script>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                   
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal Thursday infomodal -->
                                        
                                        <!-- Thursday Visit Type -->
                                       
                                        <div class="form-group">
                                            <label>Visit Type</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="thursday" id="thuRegular" value="option1" checked>Regular
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="thursday" id="thuExpress" value="option2">Express
                                                </label>
                                            </div>
                                            
                                        </div>
                                        
                                        <!-- Select Thursday Route -->
                                        
                                        <div class="form-group" id="thuRoutei">
                                            <label for="thuRoute">Select Route</label>
                                            
                                            <select id="thuRoute" class="form-control">
                                            
                                            <script> 
                                                 for (i=0; i<uniqueroutes.length; i++){
                                                 //we write the routes
                                                 document.write('<option>' + uniqueroutes[i] + '</option>');
                                                }
                                            </script>
                                            </select>
                                            <small><a href="#" data-toggle="modal" data-target="#mapModal" id="modellink">Route Map</a></small>
                                        </div>
                                        
                                        <!-- Select Thursday Dealers -->
                                        
                                        <div class="form-group" id="thuDealers">
                                            <label for="disabledSelect">Select Dealers</label>
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModalThursday">Dealers</button>
                                            <p></p>
                                            
                                            <select multiple class="form-control" id="thursday_expressroute">
                                            </select>
                                            
                                        </div>
                                        
                                        <!-- Modal Thursday-->
                                        
                                        <div class="modal fade" id="myModalThursday" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                        <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                                                                                <h4 class="modal-title" id="myModalLabel">Select Dealers for Express Visit</h4>
                                                                        </div>
                                                                        <!-- Modal Select Dealers -->
                                                                        <div class="modal-body">
                                                                                <div class="panel-body">
                                                                                        <table width="100%" class="table table-striped table-bordered table-hover" id="oodataTables-modal">
                                                                                                <thead>
                                                                                                        <tr>
                                                                                                                <th>Name of Dealer</th>
                                                                                                                <th>Category</th>
                                                                                                                <th>Criticality</th>
                                                                                                                <th>Route</th>
                                                                                                                <th>DSLV</th>
                                                                                                                <th>Visit</th>
                                                                                                        </tr>
                                                                                                </thead>
                                                                                                <script>
                                                                                                         document.write('<tbody>');
                                                                                                         for (i=0; i<dealerarray.length; i++){
                                                                                                                //we write the dealer info in the dealer table
                                                                                                                document.write('<tr>');
                                                                                                                document.write('<td>' + dealerarray[i] + '</td>');
                                                                                                                document.write('<td>' + categoriesarray[i] + '</td>');
                                                                                                                document.write('<td>' + criticalityarray[i] + '</td>');
                                                                                                                document.write('<td>' + routearray[i] + '</td>');
                                                                                                                document.write('<td>' + dealerslastvisitarray[i] + '</td>');
                                                                                                                document.write('<td><input type="checkbox" value="' + i +'" class="data-checkbox" id="thursday' + i + '"  name="thursday-visit"></td>');                                                
                                                                                                                document.write('</tr>');
                                                                                                                }
                                                                                                         document.write('</tbody>');
                                                                                                </script>

                                                                                        </table>

                                                                                        </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                                <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                                <button type="button" class="btn btn-primary">Save changes</button>-->
                                                                        </div>
                                                                </div>
                                                                <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                </div>
                                       
                                        <!-- /.modal --> 
                                    </div>
 
                                </div>
                            </div>
                            
                             <div class="col-lg-2">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        Friday <button type="button" class="btn btn-default btn-circle " data-toggle="modal" data-target="#friinfoModal"><i class="fa fa-bullhorn"></i>
                                               </button>
                                    </div>
                                    <div class="panel-body">
                                    <!-- Modal Friday infomodal -->
                                    <div class="modal fade" id="friinfoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">Event Alert</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <script>
                                                        if(events[4]=="") {document.write("No events today");}
                                                        else {document.write(events[4]);}
                                                    </script>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                   
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal Friday infomodal -->
                                        
                                        
                                        <!-- Friday Visit Type -->
                                       
                                        <div class="form-group">
                                            <label>Visit Type</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="friday" id="friRegular" value="option1" checked>Regular
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="friday" id="friExpress" value="option2">Express
                                                </label>
                                            </div>
                                            
                                        </div>
                                        
                                        <!-- Select Friday Route -->
                                        
                                        <div class="form-group" id="friRoutei">
                                            <label for="friRoute">Select Route</label>
                                            
                                            <select id="friRoute" class="form-control">
                                            
                                            <script> 
                                                 for (i=0; i<uniqueroutes.length; i++){
                                                 //we write the routes
                                                 document.write('<option>' + uniqueroutes[i] + '</option>');
                                                }
                                            </script>
                                            </select>
                                            <small><a href="#" data-toggle="modal" data-target="#mapModal" id="modellink">Route Map</a></small>
                                        </div>
                                        
                                        <!-- Select Friday Dealers -->
                                        
                                        <div class="form-group" id="friDealers">
                                            <label for="disabledSelect">Select Dealers</label>
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModalFriday">Dealers</button>
                                            <p></p>
                                            
                                           <select multiple class="form-control" id="friday_expressroute">
                                            </select>
                                            
                                        </div>
                                        
                                        <!-- Modal Friday-->
                                        
                                        <div class="modal fade" id="myModalFriday" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                        <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                                                                                <h4 class="modal-title" id="myModalLabel">Select Dealers for Express Visit</h4>
                                                                        </div>
                                                                        <!-- Modal Select Dealers -->
                                                                        <div class="modal-body">
                                                                                <div class="panel-body">
                                                                                        <table width="100%" class="table table-striped table-bordered table-hover" id="oodataTables-modal">
                                                                                                <thead>
                                                                                                        <tr>
                                                                                                                <th>Name of Dealer</th>
                                                                                                                <th>Category</th>
                                                                                                                <th>Criticality</th>
                                                                                                                <th>Route</th>
                                                                                                                <th>DSLV</th>
                                                                                                                <th>Visit</th>
                                                                                                        </tr>
                                                                                                </thead>
                                                                                                <script>
                                                                                                         document.write('<tbody>');
                                                                                                         for (i=0; i<dealerarray.length; i++){
                                                                                                                //we write the dealer info in the dealer table
                                                                                                                document.write('<tr>');
                                                                                                                document.write('<td>' + dealerarray[i] + '</td>');
                                                                                                                document.write('<td>' + categoriesarray[i] + '</td>');
                                                                                                                document.write('<td>' + criticalityarray[i] + '</td>');
                                                                                                                document.write('<td>' + routearray[i] + '</td>');
                                                                                                                document.write('<td>' + dealerslastvisitarray[i] + '</td>');
                                                                                                                document.write('<td><input type="checkbox" value="' + i +'" class="data-checkbox" id="friday' + i + '"  name="friday-visit"></td>');                                                
                                                                                                                document.write('</tr>');
                                                                                                                }
                                                                                                         document.write('</tbody>');
                                                                                                </script>

                                                                                        </table>

                                                                                        </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                                <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                                <button type="button" class="btn btn-primary">Save changes</button>-->
                                                                        </div>
                                                                </div>
                                                                <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                </div>
                                       
                                        <!-- /.modal --> 
                                    </div>
                                   
                                </div>
                            </div>
                            
                             <div class="col-lg-2">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        Saturday <button type="button" class="btn btn-default btn-circle " data-toggle="modal" data-target="#satinfoModal"><i class="fa fa-bullhorn"></i>
                                               </button>
                                    </div>
                                    <div class="panel-body">
                                        
                                    <!-- Modal Saturday infomodal -->
                                    <div class="modal fade" id="satinfoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">Event Alert</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <script>
                                                        if(events[5]=="") {document.write("No events today");}
                                                        else {document.write(events[5]);}
                                                    </script>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                   
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal Saturday infomodal -->   
                                    
                                    
                                        <!-- Saturday Visit Type -->
                                       
                                        <div class="form-group">
                                            <label>Visit Type</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="saturday" id="satRegular" value="option1" checked>Regular
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="saturday" id="satExpress" value="option2">Express
                                                </label>
                                            </div>
                                            
                                        </div>
                                        
                                        <!-- Select Saturday Route -->
                                        
                                        <div class="form-group" id="satRoutei">
                                            <label for="satRoute">Select Route</label>
                                            
                                            <select id="satRoute" class="form-control">
                                            
                                            <script> 
                                                 for (i=0; i<uniqueroutes.length; i++){
                                                 //we write the routes
                                                 document.write('<option>' + uniqueroutes[i] + '</option>');
                                                }
                                            </script>
                                            </select>
                                            <small><a href="#" data-toggle="modal" data-target="#mapModal" id="modellink">Route Map</a></small>
                                        </div>
                                        
                                        <!-- Select Saturday Dealers -->
                                        
                                        <div class="form-group" id="satDealers">
                                            <label for="disabledSelect">Select Dealers</label>
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModalSaturday">Dealers</button>
                                            <p></p>
                                            
                                            <select multiple class="form-control" id="saturday_expressroute">
                                            </select>
                                            
                                        </div>
                                        
                                        <!-- Modal Saturday-->
                                        
                                        <div class="modal fade" id="myModalSaturday" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                        <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                                                                                <h4 class="modal-title" id="myModalLabel">Select Dealers for Express Visit</h4>
                                                                        </div>
                                                                        <!-- Modal Select Dealers -->
                                                                        <div class="modal-body">
                                                                                <div class="panel-body">
                                                                                        <table width="100%" class="table table-striped table-bordered table-hover" id="oodataTables-modal">
                                                                                                <thead>
                                                                                                        <tr>
                                                                                                                <th>Name of Dealer</th>
                                                                                                                <th>Category</th>
                                                                                                                <th>Criticality</th>
                                                                                                                <th>Route</th>
                                                                                                                <th>DSLV</th>
                                                                                                                <th>Visit</th>
                                                                                                        </tr>
                                                                                                </thead>
                                                                                                <script>
                                                                                                         document.write('<tbody>');
                                                                                                         for (i=0; i<dealerarray.length; i++){
                                                                                                                //we write the dealer info in the dealer table
                                                                                                                document.write('<tr>');
                                                                                                                document.write('<td>' + dealerarray[i] + '</td>');
                                                                                                                document.write('<td>' + categoriesarray[i] + '</td>');
                                                                                                                document.write('<td>' + criticalityarray[i] + '</td>');
                                                                                                                document.write('<td>' + routearray[i] + '</td>');
                                                                                                                document.write('<td>' + dealerslastvisitarray[i] + '</td>');
                                                                                                                document.write('<td><input type="checkbox" value="' + i +'" class="data-checkbox" id="saturday' + i + '"  name="saturday-visit"></td>');                                                
                                                                                                                document.write('</tr>');
                                                                                                                }
                                                                                                         document.write('</tbody>');
                                                                                                </script>

                                                                                        </table>

                                                                                        </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                                <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                                <button type="button" class="btn btn-primary">Save changes</button>-->
                                                                        </div>
                                                                </div>
                                                                <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                </div>
                                       
                                        <!-- /.modal --> 
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- /.row -->    
                            
                        </div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
                <script>
                if (day!==3){
                document.write('<div class="text-center">');
                document.write('<a href="#" class="btn btn-success" role="button" data-toggle="modal" data-target="#myModalSuccess">Submit Plan</a>');
                document.write('</div>');
                }
                
                if (day>=3){
                document.write('<div class="text-center">');
                document.write('<a href="javascript:window.close()" class="btn btn-success">Close and Complete</a>');
                document.write('</div>');
                }
                
                </script>
                  <!-- Modal success -->
                                        
                    <div class="modal fade" id="myModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                                    <h4 class="modal-title" id="myModalLabel">Are you sure you want to go ahead?</h4>
                            </div>
                            <!-- Modal Select Yes/No -->
                            <div class="modal-body">
                                    <div class="panel-body">
                                    <button type="button" id="btnYes" class="btn btn-default" data-dismiss="modal">Yes</button>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>       

                            </div>
                            </div>
                            <div class="modal-footer">
                                    
                            </div>
                            </div>
                            <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
            </div>
                
            </div>
            <!-- /.row -->
            
            
            
            
        </div>
        <!-- /#page-wrapper -->

    </div>
            @else
                    You don't seem to be logged in or your session has expired. Please login and launch the course again.
            @endauth
                </div>
            @endif

            
        </div>
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    

        <!-- Bootstrap Core JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       
    <script src="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.7.0/metisMenu.min.js"></script>
    
    <!-- DataTables JavaScript -->
    <script src="{{ url('/') }}/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('/') }}/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="{{ url('/') }}/vendor/datatables-responsive/dataTables.responsive.js"></script>

    
    <!-- Custom Theme JavaScript -->
    <script src="{{ url('/') }}/js/sb-admin-2.js"></script>
    <script>
   $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
	   
	   $('#dataTables-modal').DataTable({
            responsive: true
        });
    });
    </script>
	<script type="text/javascript" src="{{ url('/') }}/js/main.js"></script>
    </body>
</html>
