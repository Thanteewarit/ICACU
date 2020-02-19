<header class="work-head">
    <ul class="head-menu nav nav-tabs" id="nav-group" role="tablist">
        <li><span class="head-tab font-weight-bold">Protocol</span></li>
        <!-- <li><a id="tab_pend" href="#group_pend" aria-controls="group_pend" class="head-tab nav-item nav-link active" data-toggle="tab" role="tab" aria-selected="true">Pending</a></li> -->
        <!-- <li><a id="tab_acti" href="#group_acti" aria-controls="group_acti" class="head-tab nav-item nav-link" data-toggle="tab" role="tab" aria-selected="false">Active</a></li> -->
        <!-- <li><a id="tab_term" href="#group_term" aria-controls="group_term" class="head-tab nav-item nav-link" data-toggle="tab" role="tab" aria-selected="false">Terminate</a></li> -->
        <li>
            <a id="tab_pend" href="#group_pend" aria-controls="group_pend" class="head-tab nav-item nav-link px-1 active" data-toggle="tab" role="tab" aria-selected="true">
                <span class="material-icons md-16 mx-2" title="Pending">hourglass_empty</span>
                <span class="d-none d-md-block">Pending</span>
            </a>
        </li>
        <li>
            <a id="tab_acti" href="#group_acti" aria-controls="group_acti" class="head-tab nav-item nav-link px-1" data-toggle="tab" role="tab" aria-selected="false">
                <span class="material-icons md-16 mx-2" title="Active">timer</span>
                <span class="d-none d-md-block">Active</span>
            </a>
        </li>
        <li>
            <a id="tab_acti" href="#group_progess" aria-controls="group_progess" class="head-tab nav-item nav-link px-1" data-toggle="tab" role="tab" aria-selected="false">
                <span class="material-icons md-16 mx-2" title="Active">timer</span>
                <span class="d-none d-md-block">PROGRESS</span>
            </a>
        </li>
        <li>
            <a id="tab_term" href="#group_term" aria-controls="group_term" class="head-tab nav-item nav-link px-1" data-toggle="tab" role="tab" aria-selected="false">
                <span class="material-icons md-16 mx-2" title="Terminate">timer_off</span>
                <span class="d-none d-md-block">Terminate</span>
            </a>
        </li>
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
                <h6 class="dropdown-header">Researcher001</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Profile Setting</a>
                <a class="dropdown-item" href="#" onclick="location.href='login.php';">Signout</a>
            </div>
        </li>
    </ul>
</header>