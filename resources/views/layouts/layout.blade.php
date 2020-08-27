<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{secure_asset('/assets/css/style.css')}} ">

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
            width: 45%;
            
         
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
        }
        .rightbigbox{
            flex-direction: column
        justify-content: space-between;
        margin-bottom: 10px;

    }
        
        .rightbox{
        border:solid 1px ;
        padding: 20px;
    }
        .rightbox_left{
            width: 100%;
        }
        .spotname{
            font-size: 50px;
        }
        .imgsize{
            width:200px;
            height:100px;
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
            
            margin: 0px;
            padding: 20px;
        }
        
    </style>

</head>


<body>
    @yield('content')
</body>
</html>