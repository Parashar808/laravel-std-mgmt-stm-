@extends('welcome')
@section('main_content')
<table>
    <thead>
        <th>#</th>
        <th>Name</th>
</thead>

<tbody>
    <table style='border:1px solid black;'>
    @foreach($semesters as $semester)

    <tr >
        <td style='border:1px solid black;'>{{ $semester->id }}</td>
        <td style='border:1px solid black;'> {{ $semester->semester_name }} </td>
</tr>
    @endforeach
</tbody>
</table>
@endsection