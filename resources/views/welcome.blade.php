<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MAYANG ASURA</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            html, body {
                background-image: url('/image/sampul.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: 100%;
                background-position: center; 
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .card{
                position: right; 
            }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#"><b>BasicLaboratory</b></a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup" >
                <div class="navbar-nav">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth   
                                <a class="nav-item nav-link active" href="{{ url('/home') }}">Home</a>
                            @else
                                <a class="nav-item nav-link" href="{{ route('login') }}">Login</a>
                            
                                @if (Route::has('register'))
                                    <a class="nav-item nav-link" href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
 
        </div>
    </nav>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <br><br><br><br><br>
                    <h1>SELAMAT DATANG DI</h1><br>
                    <h1><b> L A B O R A T O R I U M</b></h1><br>
                    <h1></b>KOMPUTER DASAR</b></h1>
                </div>
                <div class="col">
                    <div class="card right" style="width: 18rem;" >
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Asisten</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">20</p>
                            <a href="#" class="card-link">Open</a>
                            <a href="#" class="card-link">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
            

        </div>
    </div>

        </div>
  
    </body>
</html>
