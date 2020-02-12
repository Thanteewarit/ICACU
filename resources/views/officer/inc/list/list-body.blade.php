<div class="work-pane group-ptc tab-content">

    <div id="group_pend" aria-labelledby="tab_pend" role="tabpanel" class="tab-pane fade show active">
        <div class="work-tab text-center">
            <nav class="nav nav-tabs" id="nav-tab" role="tablist">
                <a id="tab_sm" href="#con_sm" aria-controls="con_sm" class="nav-item nav-link active" data-toggle="tab" role="tab" aria-selected="true">Submited</a>
                <a id="tab_rv" href="#con_rv" aria-controls="con_rv" class="nav-item nav-link" data-toggle="tab" role="tab" aria-selected="false">Review</a>
            </nav>
        </div>
        <div class="work-con tab-content" id="nav-tabContent">
            <div id="con_sm" aria-labelledby="tab_sm" role="tabpanel" class="tab-pane fade show active">
                @include ('officer.inc.list.status-submitted')
            </div>
            <div id="con_rv" aria-labelledby="tab_rv" role="tabpanel" class="tab-pane fade">
                @include ('officer.inc.list.status-review')
            </div>
        </div>
    </div>

    <div id="group_acti" aria-labelledby="tab_acti" role="tabpanel" class="tab-pane fade">
        <div class="work-tab text-center">
            <nav class="nav nav-tabs" id="nav-tab" role="tablist">
                <a id="tab_ap" href="#con_ap" aria-controls="con_ap" class="nav-item nav-link active" data-toggle="tab" role="tab" aria-selected="true">Approved</a>
                {{-- <a id="tab_rn" href="#con_rn" aria-controls="con_rn" class="nav-item nav-link" data-toggle="tab" role="tab" aria-selected="false">Renew</a>
                <a id="tab_am" href="#con_am" aria-controls="con_am" class="nav-item nav-link" data-toggle="tab" role="tab" aria-selected="false">Amendment</a> --}}
            </nav>
        </div>
        <div class="work-con tab-content" id="nav-tabContent">
            <div id="con_ap" aria-labelledby="tab_ap" role="tabpanel" class="tab-pane fade show active">
                @include ('officer.inc.list.status-approved')
            </div>
            {{-- <div id="con_rn" aria-labelledby="tab_rn" role="tabpanel" class="tab-pane fade">
                @include ('officer.inc.list.status-renew')
            </div>
            <div id="con_am" aria-labelledby="tab_am" role="tabpanel" class="tab-pane fade">
                @include ('officer.inc.list.status-amendment')
            </div> --}}
        </div>
    </div>

    <div id="group_term" aria-labelledby="tab_term" role="tabpanel" class="tab-pane fade">
        <div class="work-tab text-center">
            <nav class="nav nav-tabs" id="nav-tab" role="tablist">
                <a id="tab_fn" href="#con_fn" aria-controls="con_fn" class="nav-item nav-link active" data-toggle="tab" role="tab" aria-selected="true">Finish</a>
                {{-- <a id="tab_sp" href="#con_sp" aria-controls="con_sp" class="nav-item nav-link" data-toggle="tab" role="tab" aria-selected="false">Suspending</a>
                <a id="tab_wd" href="#con_wd" aria-controls="con_wd" class="nav-item nav-link" data-toggle="tab" role="tab" aria-selected="false">Withdrawal</a> --}}
                <a id="tab_rj" href="#con_rj" aria-controls="con_rj" class="nav-item nav-link" data-toggle="tab" role="tab" aria-selected="false">Rejected</a>
            </nav>
        </div>
        <div class="work-con tab-content" id="nav-tabContent">
            <div id="con_fn" aria-labelledby="tab_fn" role="tabpanel" class="tab-pane fade show active">
                @include ('officer.inc.list.status-finish')       
            </div>
            {{-- <div id="con_sp" aria-labelledby="tab_sp" role="tabpanel" class="tab-pane fade">
                    @include ('officer.inc.list.status-suspending')     
            </div>
            <div id="con_wd" aria-labelledby="tab_wd" role="tabpanel" class="tab-pane fade">
                    @include ('officer.inc.list.status-withdrawal') 
            </div> --}}
            <div id="con_rj" aria-labelledby="tab_rj" role="tabpanel" class="tab-pane fade">
                    @include ('officer.inc.list.status-rejected')    
            </div>
        </div>
    </div>

</div>