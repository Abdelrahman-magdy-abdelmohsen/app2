@extends('layouts.index')
    @section('content')
    <h1> create page </h1>

<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@if($errors->any())
<div>
@foreach($errors->all() as $error))
    <li> {{$error}}</li>

@endforeach
</div>
@endif
<form method="post" action={{route('example.store')}}>
    @csrf
    <input type="text" name="name">
    <input type="submit" value="test" name="">
</form>
</body>
</html>
    @endsection
