@extends('outerTheme.layouts.guest') {{-- if you have a main layout --}}

@section('content')
    <div class="container py-5">
        <h1 class="text-2xl font-bold mb-4">FAQ</h1>

        <pre>{{ json_encode($faq, JSON_PRETTY_PRINT) }}</pre>
    </div>
@endsection
