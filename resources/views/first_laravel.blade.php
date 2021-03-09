<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>First Laravel</title>

        <!-- Styles -->
        <style>
          *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
          }
          .container{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
          }
          .container h1{
            font-size: 150px;
            color: #FF2D20;
          }
          .container h2{
            font-size: 50px;
            color: lightgrey;
          }
        </style>
    </head>
    <body>
      <div class="container">
        <h1>Laravel</h1>
        <h2>Benvenuto {{$nome}} {{$cognome}}</h2>
      </div>
    </body>
</html>
