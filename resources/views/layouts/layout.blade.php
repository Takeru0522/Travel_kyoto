<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{secure_asset('/assets/css/style.css')}} ">

    <style>
        .container{
            width: 1080px;
            margin:0 auto;
        }
        .bigbox{
        display:flex;
        justify-content: space-between;
}
        .bigbox_left{
            width: 30%;
            padding: 10px;
            
        }
        .bigbox_right{
            width: 45%;
        }
        .rightbigbox{
        display:flex;  
        justify-content: space-between;
        margin-bottom: 10px;
    }
        
        .rightbox{
        border:solid 1px ;
        padding: 20px;
    }
        .rightbox_left{
            width: 40%;
        }
        .spotname{
            font-size: 50px;
        }
        .imgsize{
            border:solid 2px ;
            padding: 100px;
        }
        .rightmap{
        border:solid 1px ;
        margin: 0px;
        padding: 20px; 
        width: 40%;
        }
        .underbox{
            display:flex; 
            justify-content: space-between;
            }
        .reviewbox{
            border:solid 1px ;
        margin: 0px;
        padding: 20px;
        }
        .reviewspotname{
            display:flex; 
            justify-content: space-between;
            border:solid 1px ;
        }
        .username{
            display:flex; 
            justify-content: space-between;
            border:solid 1px ;
        }
        .totalreview{
            display:flex; 
            justify-content: space-between;
            
        }
        .reviewtext{
            width: 50%;
            border:solid 1px ;
            padding: 20px;
            height:200px
        }
        .reviewimg{
            width:30%;
            border:solid 1px ;
            margin: 0px;
            padding: 20px;
        }
        
    </style>

</head>


<body>
    @yield('content')
</body>
</html>