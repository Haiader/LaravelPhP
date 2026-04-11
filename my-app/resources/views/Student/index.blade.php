@extends('student.layout')

<body>
    @section('content')

    <div class="text-center"><button type="button" class="btn btn-success" >Add New</button></div>

        @if(count($students) == 0)
            <h2 class="text-center fw-bold mt-5 text-secondary">No Students Found</h2>
        @else
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
                {{-- Body --}}
                {{-- @dd($students) --}}

                @foreach ($students as $student)
                    <tr>
                        <th scope="row">{{ $student['id'] }}</th>
                        <td>{{ $student['name'] }}</td>
                        <td>{{ $student['age'] }}</td>
                        <td>{{ $student['email'] }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route("student.show", $student['id']) }}" class="btn btn-success">View</a>
                                <button type="button" class="btn btn-warning">Edit</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
            </div>
        @endif

        @endsection
    </body>

</html>

