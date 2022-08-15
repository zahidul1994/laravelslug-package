<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Information -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
   <meta name="robots" content="noindex, nofollow">
 <title>Laravel Slug{{ config('app.name') ? ' - ' . config('app.name') : '' }}</title>
<!-- Style sheets-->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
   
</head>
<body>
    @if (!empty($slug))
      <h2>Your Slug  :  {{$slug}} </h2>        
    @endif
<form method="post" action="{{ route('makesulg')}}">
{{-- <form method="post" action="{{ route('makesulg')}}"> --}}
    @csrf
    <input type="text" required name="slug" value="{{@$value}}"> <button type="submit">Make Slug</button>
</form>


</body>
</html>
