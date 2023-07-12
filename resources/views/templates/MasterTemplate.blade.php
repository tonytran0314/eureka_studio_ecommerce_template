<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('title') | Eureka Studio</title>
		
        @include('partials.css_files') 
    </head>
	<body>
        <div class="master_wrapper">
			@include('partials.header')
		</div> 
		
		@yield('body')

		<div class="master_wrapper">
			@include('partials.footer')     
		</div>  

        
		@include('partials.js_files')
	</body>
</html>
