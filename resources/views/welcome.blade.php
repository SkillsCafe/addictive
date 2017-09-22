
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <!-- Styles -->
        <!-- Custom Fonts -->
        <link href="{{ url('/') }}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Exit</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Your Courses 
                </div>
                @auth
                
                
                <div class="card-deck" >
                <div class="row">
                
                @foreach ($assignedassets as $assignedasset)   
                  <div class="card">
                    <img class="card-img-top" src="i..." alt="Card image cap">
                    <div class="card-block">
                      <h4 class="card-title">{{$assignedasset->name}}</h4>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">
                          
                          Completed <?php
                          if ($assignedasset->completed==1){echo('<i class="fa fa-check" aria-hidden="true"></i>');}else{echo('<i class="fa fa-close" aria-hidden="true"></i>');}
                          
                          
                          ?>
                          </small>
                    </div>
                    <a href="\courselaunch\{{$assignedasset->id}}" class="btn btn-success btn-lg launch-btn" target="_blank" >launchcourse</a>
                  </div>
                 @endforeach 
                 
                </div>
                        
                </div>
                @endauth
            </div>
        </div>
    </body>
</html>
