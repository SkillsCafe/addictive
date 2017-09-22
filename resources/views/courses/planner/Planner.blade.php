
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        <!-- Styles -->
        
        <script src="{{ url('/') }}/js/myfunctions.js" type="text/javascript"></script>
        <script src="{{ url('/') }}/js/init.js" type="text/javascript"></script>
        
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
                <div class="top-right links">
                    @auth
<!--                <a href="javascript:window.open('pages/dashboard.html','_blank', 'fullscreen=yes,location=no,toolbar=no,scrollbars=yes,resizable=yes');" class="btn btn-success btn-lg launch-btn">Course content</a>-->
                    <div class="container-fluid">
                    <div class="vertical-space3"></div>
					<div class="row">
				<div class="col-lg-10 col-md-push-1">
				
					<div class="launch-banner" align="center"><img src="{{ url('/') }}/images/launch-website.png" class="img-responsive"  alt=""/></div>
				</div>
			</div>

            
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
					<div class="text-center">
						<p></p>
						<a href="javascript:window.open('/planner/dashboard','_blank', 'fullscreen=yes,location=no,toolbar=no,scrollbars=yes,resizable=yes');" class="btn btn-success btn-lg launch-btn">Launch</a>
                                                <a href="/coursecompleted/{{request()->route('id')}}" class="btn btn-success btn-lg launch-btn" onclick="return handleclose();">Complete</a>
					</div>
                                    
				</div>
				
			</div>
		
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

    
    <!-- Custom Theme JavaScript -->
    <script src="{{ url('/') }}/js/sb-admin-2.js"></script>
    
        
    </body>
</html>
