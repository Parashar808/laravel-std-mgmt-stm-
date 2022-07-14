<form method = "POST" action = "{{ route('faculty.store') }} ">
@csrf

<input type="text" name="faculty_name">
<button type="submit"> Save </button>
</form> 