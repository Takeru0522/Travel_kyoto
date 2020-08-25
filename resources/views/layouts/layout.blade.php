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
        .star5_rating{
    position: relative;
    z-index: 0;
    display: inline-block;
    white-space: nowrap;
    color: #CCCCCC; /* グレーカラー 自由に設定化 */
    font-size: 30px; フォントサイズ 自由に設定
}

.star5_rating:before, .star5_rating:after{
    content: '★★★★★';
}

.star5_rating:after{
    position: absolute;
    z-index: 1;
    top: 0;
    left: 0;
    overflow: hidden;
    white-space: nowrap;
    color: #ffcf32; /* イエローカラー 自由に設定化 */
}

.star5_rating[data-rate="5"]:after{ width: 100%; } /* 星5 */
.star5_rating[data-rate="4.5"]:after{ width: 90%; } /* 星4.5 */
.star5_rating[data-rate="4"]:after{ width: 80%; } /* 星4 */
.star5_rating[data-rate="3.5"]:after{ width: 70%; } /* 星3.5 */
.star5_rating[data-rate="3"]:after{ width: 60%; } /* 星3 */
.star5_rating[data-rate="2.5"]:after{ width: 50%; } /* 星2.5 */
.star5_rating[data-rate="2"]:after{ width: 40%; } /* 星2 */
.star5_rating[data-rate="1.5"]:after{ width: 30%; } /* 星1.5 */
.star5_rating[data-rate="1"]:after{ width: 20%; } /* 星1 */
.star5_rating[data-rate="0.5"]:after{ width: 10%; } /* 星0.5 */
.star5_rating[data-rate="0"]:after{ width: 0%; } /* 星0 */
    </style>

</head>


<body>
    @yield('content')
</body>
</html>