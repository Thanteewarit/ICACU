<div class="work-pane">

    <div class="work-btn">
        @if ($Protocol_docs->protocol_status!=3)
            @role('president')
            <button class="btn-c material-icons" id="side_reviewer" title="Add Reviewer">group_add</button>
            <button class="btn-c material-icons" id="side_upload" title="Upload File">cloud_upload</button>
            @endrole
        @endif
        @if ($Protocol_docs->protocol_status==2 || $Protocol_docs->protocol_status==15)
        {{-- <a href="{{ route('officer.protocol_view.reply',array('id'=>request()->id))}}"><button class="btn-c material-icons" data-toggle="modal" data-target="#exampleModalScrollable" title="reply">reply</button></a> --}}
        <a href="{{ route('officer.protocol_view.update',array('id'=>request()->id))}}"><button class="btn-c material-icons" data-toggle="modal" data-target="#exampleModalScrollable" title="ส่งข้อมูล">send</button></a>
        @endif
        
        
        @hasanyrole('president|member')
            <button type="button" class="btn-c material-icons switch-1" title="Control">more_vert</button>
        @endrole
    </div>

    <div class="work-tab">
        <nav class="nav nav-tabs" id="nav-tab" role="tablist">
            <a id="tab_prc" href="#con_prc" aria-controls="con_prc" class="nav-item nav-link active" data-toggle="tab" role="tab" aria-selected="true">
                <span class="d-block d-md-none">PTC</span>
                <span class="d-none d-md-block">Protocol</span>
            </a>
            <a id="tab_prg" href="#con_prg" aria-controls="con_prg" class="nav-item nav-link" data-toggle="tab" role="tab" aria-selected="false">
                <span class="d-block d-md-none">PRG</span>
                <span class="d-none d-md-block">Progress</span>
            </a>
            <a id="tab_tmn" href="#con_tmn" aria-controls="con_tmn" class="nav-item nav-link" data-toggle="tab" role="tab" aria-selected="false">
                <span class="d-block d-md-none">TMN</span>
                <span class="d-none d-md-block">Termination</span>
            </a>
        </nav>
    </div>

    <div class="work-con tab-content" id="nav-tabContent">
        <div id="con_prc" aria-labelledby="tab_prc" role="tabpanel" class="h-100 tab-pane fade show active">
            @include ('member.inc-view.docs.docs-protocol')
            
        </div>
        <div id="con_prg" aria-labelledby="tab_prg" role="tabpanel" class="h-100 tab-pane fade">
            @include ('member.inc-view.docs.docs-progress')
        </div>
        <div id="con_tmn" aria-labelledby="tab_tmn" role="tabpanel" class="h-100 tab-pane fade">
            @include ('member.inc-view.docs.docs-termination')
        </div>
    </div>

</div>