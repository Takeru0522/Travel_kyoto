


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>口コミ一覧表示画面</title>
</head>
<body>
    <a href="{{ route('review.create') }}" class="btn btn-primary btn-block">
        新規投稿
    </a>

    @foreach ($reviews as $review)
        <div class="m-4 p-4 border border-primary">
            <p>{{ $review->title }}</p>
            <p>{{ $review->content }}</p>
            <p>{{ $review->star}}</p>
            <p>{{ $review->img }}</p>
            <p>{{ $review->spot_id}}</p>
            <p>{{ $review->user_id }}</p>
            <p>{{ $review->created_at}}</p>
        </div>
    @endforeach
</body>
</html>