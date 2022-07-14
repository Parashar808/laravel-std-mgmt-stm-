<table>
    <thead>
        <th>#</th>
        <th>Name</th>
</thead>

<tbody>
    @foreach($faculties as $faculty)
    <tr>
        <td>{{ $faculty->id }}</td>
        <td> {{ $faculty->name }} </td>
</tr>
    @endforeach
</tbody>

</table>