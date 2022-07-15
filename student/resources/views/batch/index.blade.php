<table>
    <thead>
        <th>#</th>
        <th>Name</th>
</thead>

<tbody>
    @foreach($batches as $batch)
    <tr>
        <td>{{ $batch->id }}</td>
        <td> {{ $batch->batch_name }} </td>
</tr>
    @endforeach
</tbody>

</table>