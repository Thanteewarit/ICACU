@extends('officer.master')
@section('title','IACUC Protocol List')
@section('css')
@endsection

@section('content')

<body class="main">
    <aside class="sidebar">
    @include('officer.sidebar')
    </aside>
    <div class="workspace">
            @include ('officer.inc.list.list-header')
            @include ('officer.inc.list.list-body')
    </div>
</body>
@endsection

@section('scripts')
@endsection