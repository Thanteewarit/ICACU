<div class="work-pane">

    <div class="work-btn">
        <a href="{{ route('member.protocol_draft.delect',array('id'=>request()->id))}}"><button type="button" class="btn-c material-icons switch-1" style="color: red;" title="ลบข้อมูลทิ้ง ไม่สามารถกู้คืนได้">delete</button></a>
        <button class="btn-c material-icons" id="side_upload" title="Upload File">cloud_upload</button>
        @if($Protocol_docs->protocol_edit)
        <button class="btn-c material-icons" id="side_reviewer" style="color: #f57200;" title="แจ้งส่งกลับมาแก้ไข">email</button>
        @endif
        <button class="btn-c material-icons" data-toggle="modal" style="color: #00af17;" data-target="#exampleModalScrollable"  id="sendDraft" title="ส่งตวจสอบ">send</button>
        
    </div>
    <div class="work-con tab-content" id="nav-tabContent">
        <div id="con_prc" aria-labelledby="tab_prc" role="tabpanel" class="h-100 tab-pane fade show active">
            @include ('member.inc-draft.docs.docs-protocol')
            
        </div>
    </div>

</div>