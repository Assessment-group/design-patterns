@extends('layouts.app')

@section('content')
<div class="container">
    <div id="app"></div>
</div>
@endsection
@section('footer')
    <script defer type="text/javascript" src="{{ asset('js/app.js') }}"></script>
@endsection
