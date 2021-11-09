<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WPU Blog | About</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Halaman About</h1>
    <h3> @php
        echo $name;
    @endphp </h3>
    <p>@php
        echo $email
    @endphp</p>
    <img  src="img/@php echo $image;@endphp" alt="M Tafli Tahas" style="width: 10vw">
</body>
</html>