<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mi app @yield('title')</title>
</head>
<body>
    
@section('name')
    este es el mensaje desde el layout
@endsection
<div class="container">
@yield('content')
</div>
</body>
</html>