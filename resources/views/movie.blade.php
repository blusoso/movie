<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Movie</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta charset='utf-8'>
    <link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  </head>
  <body id="movie">
    <div id="movie-1">
      <h1><b>MOVIE</b></h1>
      <mov-box v-on:save-list="DataList"></mov-box>
      <mov-list :movies="movies"></mov-list>
    </div>

    <script src="{{asset('js/app.js')}}"></script>

  </body>
</html>
