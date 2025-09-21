<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            padding: 0 20rem;
            @media (max-width: 1200px) {
                padding: 0 10rem;
                
            };
            @media (max-width: 900px){
                padding: 0 4rem;
            };
        };
        
    </style>
</head>
<body style="background: rgb(37,37,37)">
    @include('header')
    @include('mainpart')
</body>
</html>