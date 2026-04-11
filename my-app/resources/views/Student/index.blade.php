<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT MANAGEMENT SYSTEM</title>
</head>
<body>

</body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STUDENT MANAGEMENT SYSTEM</title>

     {{-- if link is not working then use this {cdn.jsdelivr.net => unpkg.com} --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
  <body>

    <header>
                @include('Student.Header')
    </header>

    <div class="text-center"><button type="button" class="btn btn-success" >Add New</button></div>

    <div class="container mt-5 ">
        <table class="table table-hover table-striped">
  <thead class="table-dark text-center">
    <tr>
        {{-- Header --}}
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Email</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <tr>
        {{-- Body --}}
        {{-- @dd($students) --}}
        @foreach ($students as $student)
      <th scope="row">{{ $student['id'] }}</th>
      <td>{{ $student['name'] }}</td>
      <td>{{ $student['age'] }}</td>
      <td>{{ $student['email'] }}</td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-warning">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
            <button type="button" class="btn btn-success">View</button>
        </div>
      </td>

    </tr>
    @endforeach

    {{-- Footer --}}

  </tbody>
</table>
    </div>

</body>
</html>

