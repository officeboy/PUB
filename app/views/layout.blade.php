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
            <div class="navbar-header">
                <a href="{{ action('CustomersController@index') }}" class="navbar-brand">Customers</a>
                <form action="{{ action('CustomersController@Search') }}" method="post" class="navbar-form navbar-left" role="search"> 
                    <input type="text" class="form-control" placeholder="Search">
                    <button type="Submit" class="btn btn-default"> Search</button>
                </form>
            </div>
        </nav>
        @yield('content')
    </div>
</body>
</html>