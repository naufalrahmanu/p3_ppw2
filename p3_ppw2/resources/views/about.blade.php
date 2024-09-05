<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <title>Document</title>
</head>
<header>
    @include('layout.navbar')
</header>
<body>
@section('title', 'About Us')
@section('content')
    <h1>About Us</h1>
    <p>This is a simple Laravel application.</p>
    <p>Welcome, {{ $name }}!</p>
    <p><?= $name; ?></p>
    <p><?= $email;?></p>
    <script src="script.js"></script>
    @extends('layout.main')
@endsection
</body>
</html>