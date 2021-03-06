<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistem Informasi Asrama | SCB</title>
        <meta name="description" content="IPB University">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="{{asset('sites/images/favicon.png')}}">
        <link rel="shortcut icon" href="{{asset('sites/images/favicon.png')}}">
        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/navbar-static/">

    <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js.map">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Custom styles for this template -->
        <link href="navbar-top.css" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('sites/assets/css/home.css')}}">
        
    </head>
    <body>
        @include('landings.layouts.components.navbar')
        <div class="content">
            <div class="kotakgaya">
                <div class="isi">
                    <h1>Sistem Informasi Asrama</h1>
                    <p>Silahkan Login untuk masuk ke dalam sistem.</p>
                </div>
            </div>

           @yield('content')
           @include('landings.layouts.components.footer')
    
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    </body>
</html>