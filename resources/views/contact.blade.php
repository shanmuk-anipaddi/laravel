@extends('layouts.app')

@section('content')
    <h1>This is contact page</h1>

    @if(count($people))
    <ul>
        @foreach($people as $person)
            <li>{{$person}}</li>
        @endforeach
    </ul>
    @endif

@endsection

@section('footer')
    <!-- <script>alert('Hi !')</script> -->
@stop