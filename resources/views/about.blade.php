<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-color: hsl(0, 0%, 100%);
            margin: 0;
            padding: 0;
            background-image: url('{{ asset('backgrounf.jpg') }}');

        }

        h1 {
            text-align: center;
            margin-top: 50px;
            color: hsl(0, 25%, 98%);
        }

        p {
            margin: 5%;   
            text-align: center;
            font-size: 18px;
            color: hsl(0, 25%, 98%);
            border: 1px solid lightskyblue;
            border-radius: 5px;
            padding : 1%
        }

        a {
            display: inline-block;
            margin: 10px;
            text-decoration: none;
            color: #333;
            font-size: 16px;
        }
        .navigation {
            display: flex;
            flex-direction: row;
            height: 100%;
            justify-content: center;
            text-align: center;
            width: 100%;
            gap: 20px;
        }

        .navigation a {
            text-decoration: none;
            color: hsl(0, 0%, 2%);
            margin: 0 15px;
            font-size: 18px;
            font-weight: bold;
            border: 1px solid lightskyblue;
            border-radius: 5px;
            padding: 10px
        }

        .navigation a:hover {
            background-image: linear-gradient(45deg, #86d8f4, #ffffff 100%);
            animation: gradientAnimation 3s linear infinite;
        }
        </style>
</head>
<body>
    <h1>About Us</h1>

    <div class="navigation">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('contact') }}">Contact</a>
        <a href="{{ route('blog') }}">Blog</a>
    </div>

    <p><strong>HALO! Nama saya Dayrren Adriel Sujaya.</strong> 
        <br>Saya berumur 18 tahun dan merupakan seorang mahasiswa aktif Universitas Ciputra Makassar dengan jurusan Informatika.</p>
</body>
</html>