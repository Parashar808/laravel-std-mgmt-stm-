<form method = "POST" action = "{{ route('semester.store') }} ">
@csrf

<input type="text" name="semester_name">
<button type="submit"> Save </button>
</form> 