<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    
    <title>Document</title>
</head>
<body>
    <h1>MOVIES</h1>
    @foreach($allMovies  as $movie)
  <h3>{{$movie['title']}}</h3>  
   <img src="{{$movie['cover']}}" width="300" height="200"/>
   <hr>
    <div>Tipologia di Film: {{$movie['tipologia']}}</div>
   
   <div>Prezzo: {{$movie['price']}}</div> 
    @endforeach
</body>
</html>