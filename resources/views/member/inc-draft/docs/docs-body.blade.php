<div class="work-pane">

    <div class="work-btn">
        <a href="{{ route('member.protocol_draft.delect',array('id'=>request()->id))}}"><button type="button" class="btn-c material-icons switch-1" title="delete">delete</button></a>
        <button class="btn-c material-icons" id="side_upload" title="Upload File">cloud_upload</button>
        <button class="btn-c material-icons" data-toggle="modal" data-target="#exampleModalScrollable"  id="sendDraft" title="Send">send</button>
        
    </div>
    <div class="work-con tab-content" id="nav-tabContent">
        <div id="con_prc" aria-labelledby="tab_prc" role="tabpanel" class="h-100 tab-pane fade show active">
            @include ('member.inc-draft.docs.docs-protocol')
            
        </div>
    </div>

</div>