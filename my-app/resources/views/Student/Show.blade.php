@extends('student.layout')

@section('content')
<title>{{ $student['name'] }} Profile</title>
    <div class="card text-canter ml6" style="width: 18rem;">
        <img src="https://thispersondoesnotexist.com/" class="card-img-top" alt="{{ $student['name'] }} Photo">
        <div class="card-body">
            <h5 class="card-title">{{ $student['name'] }} • Age {{ $student['age'] }}</h5>
            <p class="card-text">ID: {{ $student['id'] }}</p>
            <p class="card-text">{{ $student['email'] }}</p>
            <a href="#" class="btn btn-primary">Like </a>
        </div>
    </div>
@endsection

