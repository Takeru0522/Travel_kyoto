<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/ext-core/3.1.0/ext-core.js" defer></script> 
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/review.js') }}" defer></script> 
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<style>
    .allback{
        background-color: blanchedalmond;
    }
    .container{
        width: 1080px;
        margin:0 auto;
    }
    .bigbox{
    display:flex;
    justify-content: space-between;
    }
    .bigbox_left{
        align-content: stretch;
        width: 45%;
        flex-direction: column;
        justify-content: space-around;
        
     
    }
    .content{
        width: 100%;

    }
    
    .bigbox_center{
        
    }
    .spot_want_to{
        background-color: crimson;
        font-size: 12px;
        padding: 3px;
        color: aliceblue;
        text-align: center;
        width: 30%;
    }
    .spot_visited{
        background-color:blue;
        font-size: 12px;
        padding: 3px;
        color: aliceblue;
        text-align: center;
        width: 30%;
    }
    .bigbox_right{
        width: 45%;
        margin-top: 30px;
    }
    .rightbigbox{
        flex-direction: column
    justify-content: space-between;
    margin-bottom: 10px;

}
    
    .rightbox{
    border:solid 3px ;
    padding: 20px;
}
    .rightbox_left{
        width: 100%;
    }
    .spotname{
        font-size: 130px;
        margin-top: 0;
        margin-bottom: 0;

    }
    .imgsize{
        width:200px;
        
        padding: 50px 0;
    }
    
    .underbox{
        display:flex; 
        justify-content: space-between;
        }
    .reviewbox{
        border:solid 1px ;
        margin: 0px;
        padding: 20px;
        background-color: azure;
        width:500px;
        
    }
    .reviewspotname{
        display:flex; 
        justify-content: space-between;
        border:solid 1px ;
    }
    .username{
        
        
        width:200px;
    }
    .review{
        background-color: crimson;
        font-size: 12px;
        padding: 3px;
        color: aliceblue;
        text-align: center;
    }
    .goodbottom{
        background-color: crimson;
        font-size: 12px;
        padding: 3px;
        color: aliceblue;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .totalreview{
        display:flex; 
        flex-direction: column
        
    }
    .star{
        width: 150px;
        
    }
    .reviewtext{
        width:480px;
      
        
    }
    .reviewimg{
        width:30%;
        border:solid 1px ;
        margin: 0px;
        padding: 20px;
    }
    .review_likes{

    }
    
</style>


<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item">
                                <img height="40px" src="{{ asset(Auth::user()->picture_path) }}" >
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
