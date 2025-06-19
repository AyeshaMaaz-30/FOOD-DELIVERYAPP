@extends('layouts.app')

@section('content')
<div class="text-center py-10">
    <h1 class="text-3xl font-bold mb-6">Welcome to Dashboard</h1>

    <a href="{{ url('/') }}" class="bg-orange-500 text-white px-6 py-2 rounded hover:bg-orange-600 transition">
        Go to Welcome Page
    </a>
</div>
@endsection
