@extends('layouts.master')

@section('content')
<div class="container">
    {{ sayHello() }}

    <div>
        {{ $checks }}
    </div>
</div>
@endsection
