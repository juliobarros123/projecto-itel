
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <title>formularios com bootstrap</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                @yield('templatesUsers') 
            <div>

                <div class="col-12">
                    @yield('createUsers')
                </div>

                <div>
                    @yield('showUsers')
                </div>

        </div>
    </div>
    
   
    <script src="{{url('assets/bootstrap/js/main.js')}}"></script>
</body>
</html>