@extends('member.master')
@section('title','IACUC Protocol List')
@section('css')
@endsection

@section('content')

<body class="main">
    <aside class="sidebar">
    @include('member.sidebar')
    </aside>
    <div class="workspace">
            @include ('member.inc.list.list-header')
            @include ('member.inc.list.list-body')
    </div>
</body>
@endsection

@section('scripts')
@endsection