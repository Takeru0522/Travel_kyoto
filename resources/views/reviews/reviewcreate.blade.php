<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="/css/main.css"> --}}
    <link rel="stylesheet" href="/css/app.css">
    <title>新規投稿画面</title>
</head>
<body>
    <section class="container m-5">
        <div class="row justify-content-center">
            <div class="col-8">
                @if($errors->any())
   <ul>
       @foreach($errors->all() as $message)
            <li class="alert alert-danger">{{ $message }}</li>
       @endforeach
   </ul>
@endif
                <form action="{{ route('review.create') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">タイトル</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}"/>
                    </div>
                    <div class="form-group">
                        <label for="body">口コミ内容</label>
                        <textarea class="form-control" name="content" id="content">{{ old('content') }}</textarea>
                    </div>
                    <div class="form-group">
                        {{-- <label for="star">星</label>
                        <div v-for="star in [5,4,3,2,1]">
                            <input v-model="reviewParams.stars" type="star" :value="star">
                            <v-star :value="star">{{ old('star') }}</v-star>
                        </div> --}}
                    {{-- </div> <input type="star" class="form-control" name="star" id="star" value="{{ old('star') }}"/> --}}
                    <p><span class="star5_rating" data-rate="4"></span>
                    </p>
                    <p>
                        <span class="star5_rating" data-rate="2.5"></span>
                    </p>
                    <p><span class="star5_rating" data-rate="5"></span> 星5</p>
                    <p><span class="star5_rating" data-rate="4.5"></span> 星4.5</p>
                    <p><span class="star5_rating" data-rate="4"></span> 星4</p>
                    <p><span class="star5_rating" data-rate="3.5"></span> 星3.5</p>
                    <p><span class="star5_rating" data-rate="3"></span> 星3</p>
                    <p><span class="star5_rating" data-rate="2.5"></span> 星2.5</p>
                    <p><span class="star5_rating" data-rate="2"></span> 星2</p>
                    <p><span class="star5_rating" data-rate="1.5"></span> 星1.5</p>
                    <p><span class="star5_rating" data-rate="1"></span> 星1</p>
                    <p><span class="star5_rating" data-rate="0.5"></span> 星0.5</p>
                    <p><span class="star5_rating" data-rate="0"></span> 星0</p>
                    </div>
                    <div class="form-group">
                        <label for="img">画像</label>
                        <input type="text" class="form-control" name="img" id="img" value="{{ old('img') }}"/>
                    </div>


                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">作成</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>