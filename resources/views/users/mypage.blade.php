{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../asset/css/style.css">
    <script src="js/common.js" type="text/javascript"></script>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">  --}}
 {{-- </head>
<body>
    <div>
    <h2>マイページ</h2>
    
    
</div>
    <p>名前：{{ $users->name }}</p>

    <p>メールアドレス：{{ $users->email }}</p>
    <p>プロフィール画像：{{ $users->img}}</p>   
    <a class="btn-square" href="{{ route('users.edit', ['id' => $users->id]) }}">編集</a>
 

    

 <table border="1">
    <tr>

        <th>⭐️行きたいリスト</th>
        <th>⭐️行ったリスト</th>
    </tr>
     <tr>
        <th>{{ $visit_spots }}</th>
        <th>{{ $want_spots }}</th>
    </tr> 
</table>
</body>
</html>   --}} 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../asset/css/style.css">
    <script src="js/common.js" type="text/javascript"></script>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">  
</head>
<body>

    <div>
        <div class="heart">&#9829;</div>

        <h2>マイページ</h2>
        
        
    </div>

<div class="profile-card">
    <div class="profile-card__inner">
    <div class="profile-thumb">
        {{-- <li class="nav-item"> --}}
            <img height="40px" src="{{asset(Auth::user()->$picture_path)}}" >
            {{-- <img height="40px" src="{{$picture_path}}" > --}}
           
        {{-- </li> --}}
      
    </div>
    <div class="profile-content">
          <span class="profile-name">名前：{{ $users->name }}</span>
      <span class="profile-email">メールアドレス：  {{ $users->email }}</span>
      <a class="Button-style" href="{{ route('users.edit', ['id' => $users->id]) }}">プロフィール編集</a>
      </div>
  </div>

  <tr><h2></h2>

    <table class="table_box">
      
        <tr>
    
            <th>⭐️行きたいリスト</th>
            <th>⭐️行ったリスト</th>
        </tr>
         <tr>
            <th>{{ $visit_spots }}</th>
            <th>{{ $want_spots }}</th>
</tr> 
        
    </table>
   
</tr> 
</body>
</html>