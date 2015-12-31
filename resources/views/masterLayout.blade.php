<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <style type="text/css">
        body { padding-top: 50px; }
        .btn-group {
            display: flex;
        }
    </style>
    <title>View</title>
</head>
<body>
    <div class="myContainer">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href={{url('users')}}>
                        <img alt="Brand" src="http://placehold.it/150x30">
                    </a>
                </div>
                @if (Auth::guest())
                    <p class="navbar-text navbar-right" style="margin-right: -5px;"><a href={{url('register/')}} class="navbar-link">Register</a></p>
                @else
                    <p class="navbar-text navbar-right" style="margin-right: -5px;"><a href={{url('logout/')}} class="navbar-link">Logout</a></p>
                    <p class="navbar-text navbar-right" style="margin-right: -5px;">Signed in as <a href={{url('users/'.Auth::user()->id.'/edit')}} class="navbar-link">
                        @if(Auth::user()->isAdmin() == true)
                            {{Auth::user()->firstname}} - Admin
                        @else
                            {{Auth::user()->firstname}}
                        @endif
                    </a></p>
                @endif
            </div>
        </nav>
        @yield('content')
    </div>
    @yield('extend-footer')
</body>
</html>