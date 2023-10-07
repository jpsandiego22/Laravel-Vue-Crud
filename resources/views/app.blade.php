<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>User Management</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
            </div>
        </nav>
        <div class="container-fluid mt-5" id="login">

            <login/>
           
        </div>
        <div class="container-fluid mt-5" id="modalc">
            <modalc/>

           
        </div>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>