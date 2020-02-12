@extends('member.master')
@section('title','Create New Protocol')
@section('css')

@endsection

@section('content')

<body class="main">
    <aside class="sidebar">
    @include('member.sidebar')
    </aside>
    <div class="workspace justify-content-center">        
        <div class="row align-items-center">
            <div class="col-10 col-md-8 mx-auto text-center">
                <h3 class="text-danger font-weight-bold">Create New Protocol</h3>
                <h1 class="site-title mb-5">
                    <span class="line mr-3"></span>
                <span>Please chose your protocol category. </span>
                    <span class="line ml-3"></span>
                </h1>
            </div>
            <div class="col-10 col-md-8 mx-auto text-center">
                <div class="row">
                    <div class="col-6 col-lg-3">
                        <a href="{{ url('/My/protocol-create/1') }}"> 
                            <img src="{{asset('member/img/ic/ic_type_a.svg')}} " height="150"/>
                        </a>
                    </div>
                    <div class="col-6 col-lg-3">
                        <a href="{{ url('member/docs/2') }}">
                            <img src="{{asset('member/img/ic/ic_type_b.svg')}} "/>
                        </a>
                    </div>
                    <div class="col-6 col-lg-3">
                        <a href="{{ url('member/docs/3') }}">
                            <img src="{{asset('member/img/ic/ic_type_c.svg')}} "/>
                        </a>
                    </div>
                    <div class="col-6 col-lg-3">
                        <a href="{{ url('member/docs/4') }}">
                            <img src="{{asset('member/img/ic/ic_type_d.svg')}} "/>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
@endsection

@section('scripts')
@endsection