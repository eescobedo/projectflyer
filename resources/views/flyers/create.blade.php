@extends ('layout')

@section('content')
    <h1>Selling Your Home?</h1>

    <hr>

    <form action="/flyers" enctype="multipart/form-data" method="post">

        @include('flyers.form')

    </form>


@stop