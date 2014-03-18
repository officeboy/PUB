<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customers</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="{{ action('CustomersController@index') }}" class="navbar-brand">Customers</a>
                    <form action="{{ action('CustomersController@Search') }}" method="get" class="navbar-form navbar-left" role="search"> 
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
</body>
</html>