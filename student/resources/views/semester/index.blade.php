<table>
    <thead>
        <th>#</th>
        <th>Name</th>
</thead>

<tbody>
    @foreach($semesters as $semester)
    <tr>
        <td>{{ $semester->id }}</td>
        <td> {{ $semester->semester_name }} </td>
</tr>
    @endforeach
</tbody>

</table>