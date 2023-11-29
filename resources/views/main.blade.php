@extends('layouts.app')

<!-- TAB Title -->
@section('title', "QuizMainPage")

<!-- Content -->
@section('content')

<!-- Title -->
<div>
    <h1 class="text-white text-center m-5">Quiz App</h1>
</div>

<!-- Quiz Group -->
<ul class="quiz-list-group ">
    @foreach ($quizzes as $quiz)
        <li class="list-group-item @if($quiz['status'] == 'active') text-success @endif list-unstyled ">
            {{ $quiz['name'] }}
            <span class=""> Status: {{ $quiz['status'] }} </span>
            <img src="{{ $quiz['image'] }}" alt="image" class="img-fluid img-thumbnail rounded w-25" />
        </li>
    @endforeach
</ul>

{{-- Subscribe Content --}}
<footer class="m-4">
    <div class="mt-2">
        <h2 class="text-white bg-dark">Subscribe to Us</h2>
        <form action="{{ route('subscribe') }}" method="POST">
            @csrf
            <div>
                <label for="email">Email:</label>
                <input type="Email" name="email" , id="email" , class="form-control" , required />
            </div>
            <button type="submit" class="btn btn-primary mt-2">Subscribe</button>
        </form>
    </div>
</footer>

@endsection

