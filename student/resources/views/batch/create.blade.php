<form method = "POST" action = "{{ route('batch.store') }} ">
@csrf

<input type="text" name="batch_name">
<button type="submit"> Save </button>
</form> 