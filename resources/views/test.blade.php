<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laravel 5</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>

    <body>
        {{--
        <pre>
        	{{ print_r($data) }}
        	{{ $data['name'] }} {{ $data['surname'] }} {{ $data['email'] }}
        	<br /><br />
        <pre>
        	{{ print_r($item) }}
        	{{ $item['item1'] }} {{ $item['item2'] }}
        --}}
        
        {{ $user->name }}
        <br /><br />
        {{ $data['name'] }}
        <br /><br />
        
        @if($mods)
    		<ul>
    			@foreach($mods as $item)
        			<li>{{ $item->name.' : '.$item->surname }}</li>
    			@endforeach
    		</ul>
		@endif

    </body>
</html>
