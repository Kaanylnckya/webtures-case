<!DOCTYPE html>
<html lang="en">
<head>
    <title>Photos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Unsplash API Photos</h2>
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Photo ID</th>
            <th>Description</th>
            <th>Color</th>
            <th>Photo</th>
            <th>Likes</th>
        </tr>
        </thead>
        <tbody>
        @foreach($photos as $photo)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $photo->photoId }}</td>
                <td>{{ $photo->description ?? '-' }}</td>
                <td>{{ $photo->color }}</td>
                <td>
                    <a href="{{ $photo->url }}"
                       target="_blank">
                        <img src="{{ $photo->url }}" width="100px" height="100px"/>
                    </a>
                </td>
                <td>{{ $photo->likes }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
