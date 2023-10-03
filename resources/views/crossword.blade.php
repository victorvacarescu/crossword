<!DOCTYPE html>
<html>
	<body>
		<h1>Crossword</h1>

		@foreach ($data as $item)
			Name: {{ $item->name }}<br>
			Age: {{ $item->age }}<br>
			City: {{ $item->city }}<br>
		@endforeach

	</body>
</html>