@extends('officer.master')
@section('title','IACUC Dashboard')
@section('css')
@endsection

@section('content')

<body class="main">
    <aside class="sidebar">
    @include('officer.sidebar')
    </aside>
    <div class="workspace">
        <div class="d-flex justify-content-between align-items-center px-4">
            <h5 class="m-0">Dashboard</h5>
            <button class="btn-c material-icons">person</button>
        </div>
        <div class="px-4">
            <div class="row">
                @foreach($Protocol_docs as $key => $r)
                <div class="col-sm-3">
                    <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $r->Protocol_opic01->animal_protocol_th }}</h5>
                        <p class="card-text">{{ $r->Protocol_opic01->project_proposal_th }}</p>
                        <a href="{{ route('officer.protocol_list.index')}}"  class="btn btn-danger">Go somewhere</a>
                    </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
@endsection

@section('scripts')
@endsection