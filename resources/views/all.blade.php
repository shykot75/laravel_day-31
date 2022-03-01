@foreach($students as $student)
<h1>{{ $student['id'] }} {{ $student['name'] }} {{ $student['email'] }} {{ $student['mobile'] }}</h1>
@endforeach
