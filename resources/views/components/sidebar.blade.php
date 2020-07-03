<div>
	<h2>{{$title}}</h2>
   hello from side bar component
   		<ul>
            @foreach($list as $item)
            <li>{{ $item }}</li>
            @endforeach
        </ul>
</div>