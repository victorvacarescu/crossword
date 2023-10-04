<!DOCTYPE html>
<html>
	<body>
		<h1>Crossword</h1>

		@foreach ($data as $key => $value)
			"{{ $key }}": "{{ $value }}"
		@endforeach

	</body>
</html>