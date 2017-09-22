<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
          <!-- Styles -->
        
        <script src="{{ url('/') }}/js/loaddata.js" type="text/javascript"></script>
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
                                <h1 class="page-header">Dashboard: Week <script>document.write(day);</script></h1>
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
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                        Dealer Information 
                                        </h4>
                                    </div>

                                    <!-- /.panel-heading -->
                                    <div class="panel-body">
                                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Name of Dealer</th>
                                                    <th>Category</th>
                                                    <th>Criticality</th>
                                                    <th>Potential</th>
                                                    <th>Earned</th>

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
                                <!-- /.panel -->
                            </div>
                            <!-- /.col-lg-12 -->
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
    });
    </script>
    </body>
</html>
