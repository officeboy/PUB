<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customers</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#PUB-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="{{ action('CustomersController@index') }}" class="navbar-brand">PUB</a>
                </div>
                <div class="collapse navbar-collapse" id="PUB-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ action('CustomersController@index') }}">Customers</a></li>
                        <li><a href="{{ action('AccountsController@index') }}">Accounts</a></li>
                        <li class="disabled"><a href="#">Link</a></li>
                    </ul>
                    <form action="{{ action('CustomersController@Search') }}" method="get" class="navbar-form navbar-right" role="search"> 
                        <div class="form-group">
                            <input type="text" class="form-control" name="q" placeholder="Search">
                        </div>
                        <button type="Submit" class="btn btn-default"> Search</button>
                    </form>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>