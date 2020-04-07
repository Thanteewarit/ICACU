@extends('member.master')
@section('title','IACUC Dashboard')
@section('css')
@endsection

@section('content')

<body class="main">
    <aside class="sidebar">
    @include('member.sidebar')
    </aside>
    <div class="workspace  bg-redTU">
        <div class="d-flex justify-content-between align-items-center px-4">
            <h5 class="m-0">Dashboard</h5>
        <a href="{{ route('member.register.Profile')}}" ><button class="btn-c material-icons">person</button></a>
        </div>
        <div class="px-4"><img src="{{asset('member/img/logoTitle.png')}}" class="mw-100 d-none d-md-block" style="max-width: 50%!important;"><img src="{{asset('member/img/logoTitle-mobile.png')}}" class="mw-100 d-block d-md-none"></div>
        <br></hr><br>
        <div class="px-4">
            <div class="row">
                @foreach($Protocol_docs as $key => $r)
                <div class="col-sm-3">
                    <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $r->Protocol_opic01->animal_protocol_th }}</h5>
                        <p class="card-text">{{ $r->Protocol_opic01->project_proposal_th }}</p>
                        <a href="{{ route('member.protocol_list.index')}}"  class="btn btn-danger" title="{{ $r->Job_statusName->title  }}">{{ $r->Job_statusName->name  }}</a>
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