<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Shuttr - Admin</title>
	<meta name="viewport" content="width=device-width">
	{{ HTML::style('laravel/css/style.css') }}
</head>
<body>
    <ul class="navigation">
        @section('navigation')
        <li>Nav Item 1</li>
        <li>Nav Item 2</li>
        @yield_section
    </ul>
    
    @yield('content')
    
    
    <div id="footer">
        @section('footer')
        test
        @yield_section
    </div>
    
</body>
</html>
