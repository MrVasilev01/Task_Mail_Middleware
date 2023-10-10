@extends('layouts\mail')

@section('content')
<div style="width: 100%">
    <h1>{{$mailData['title']}}</h1>
    <div>{{$mailData['content']}}</div>
</div>
@endsection
