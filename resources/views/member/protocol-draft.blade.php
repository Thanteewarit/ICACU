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
            <header class="work-head">
                <ul class="head-menu">
                    <li><span class="head-tab font-weight-bold">Draft</span></li>
                </ul>
                <ul>
                    <li class="m-0">
                        <button class="btn-c material-icons ml-1" title="Search Protocol">search</button>
                    </li>
                    <li class="dropdown">
                        <button class="btn-c material-icons ml-1 dropdown-toggle" type="button" id="i_noti" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="0,8" title="Notifications">notifications</button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="i_noti">
                            <h6 class="dropdown-header">Notifications</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item d-flex justify-content-between align-items-center align-items-center" href="#">
                                <span>Revise</span>
                                <span class="badge badge-danger" style="height: 15px; min-width: 15px; border-radius: 10px;">1</span>
                            </a>
                            <a class="dropdown-item d-flex justify-content-between align-items-center" href="#">
                                <span>Review</span>
                                <span class="badge badge-danger" style="height: 15px; min-width: 15px; border-radius: 10px;">1</span>
                            </a>
                            <a class="dropdown-item d-flex justify-content-between align-items-center" href="#">
                                <span>Approved</span>
                                <span class="badge badge-danger" style="height: 15px; min-width: 15px; border-radius: 10px;">1</span>
                            </a>
                            <a class="dropdown-item d-flex justify-content-between align-items-center" href="#">
                                <span>Finish</span>
                                <span class="badge badge-danger" style="height: 15px; min-width: 15px; border-radius: 10px;">1</span>
                            </a>
                            <a class="dropdown-item d-flex justify-content-between align-items-center" href="#">
                                <span>Suspending</span>
                                <span class="badge badge-danger" style="height: 15px; min-width: 15px; border-radius: 10px;">1</span>
                            </a>
                            <a class="dropdown-item d-flex justify-content-between align-items-center" href="#">
                                <span>Withdrawal</span>
                                <span class="badge badge-danger" style="height: 15px; min-width: 15px; border-radius: 10px;">1</span>
                            </a>
                            <a class="dropdown-item d-flex justify-content-between align-items-center" href="#">
                                <span>Rejected</span>
                                <span class="badge badge-danger" style="height: 15px; min-width: 15px; border-radius: 10px;">1</span>
                            </a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <button class="btn-c material-icons ml-1 member dropdown-toggle" type="button" id="i_member" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="0,7" title="Username">
                            <span><img src="{{asset('member/img/avatar.svg')}}" /></span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="i_member">
                            <h6 class="dropdown-header">{{Auth::user()->name}}</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('member.register.Profile')}}">Profile Setting</a>
                        </div>
                    </li>
                </ul>
            </header>
            <div class="work-pane group-ptc">
                <div class="work-con">
                        @include ('member.inc-draft.list.status-draft')
                </div>
            </div>
        </div>
</body>
@endsection

@section('scripts')
@endsection