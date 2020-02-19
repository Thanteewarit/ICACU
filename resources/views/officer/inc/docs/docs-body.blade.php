<div class="work-pane">

    <div class="work-btn">
        @if ($Protocol_docs->protocol_status!=3)
            @role('president')
            <button class="btn-c material-icons" id="side_reviewer" title="Add Reviewer">group_add</button>
            {{-- <button class="btn-c material-icons" id="side_upload" title="Upload File">cloud_upload</button> --}}
            @endrole
        @endif
        @if ($Protocol_docs->protocol_status!=12)
            <a href="{{ route('officer.protocol_view.replyEdit',array('id'=>request()->id))}}"><button class="btn-c material-icons" data-toggle="modal" data-target="#exampleModalScrollable" title="ข้อมูล ไม่ครบ ส่งกลับไปแก้ไข">reply</button></a>
        @endif

        @if ($Protocol_docs->protocol_status==11)
            <a href="{{ route('officer.protocol_view.rewnew',array('id'=>request()->id))}}"><button class="btn-c material-icons" data-toggle="modal" data-target="#exampleModalScrollable" title="Approve Rewnew">add_circle</button></a>
        @else
            @if ($Protocol_docs->protocol_status!=12)
                <a href="{{ route('officer.protocol_view.update',array('id'=>request()->id))}}"><button class="btn-c material-icons" data-toggle="modal" data-target="#exampleModalScrollable" title="ข้อมูล ถูกต้องครบถ้วน">send</button></a>
            @endif
        @endif
        @hasanyrole('president|secretary|reviewer')
        <button type="button" class="btn-c material-icons switch-1" title="Control">more_vert</button>
        @endhasanyrole
    </div>

    <div class="work-tab">
        <nav class="nav nav-tabs" id="nav-tab" role="tablist">
            <a id="tab_prc" href="#con_prc" aria-controls="con_prc" class="nav-item nav-link <?php if(empty($_GET['type'])){ echo "active"; }?>" data-toggle="tab" role="tab" aria-selected="<?php if(empty($_GET['type'])){ echo "true"; }?>">
                <span class="d-block d-md-none">PTC</span>
                <span class="d-none d-md-block">Protocol</span>
            </a>
            <?php if(!empty($_GET['type'])) { ?>
            <a id="tab_prg" href="#con_prg" aria-controls="con_prg" class="nav-item nav-link <?php if($_GET['type']=="Progress"){ echo "active"; }?>" data-toggle="tab" role="tab" aria-selected="<?php if($_GET['type']=="Progress"){ echo "true"; }else{ echo "false";}?>" >
                <span class="d-block d-md-none">PRG</span>
                <span class="d-none d-md-block">Progress</span>
            </a>
            <a id="tab_tmn" href="#con_tmn" aria-controls="con_tmn" class="nav-item nav-link <?php if($_GET['type']=="Termination"){ echo "active"; }?>" data-toggle="tab" role="tab" aria-selected="<?php if($_GET['type']=="Termination"){ echo "true"; }else{ echo "false";}?>">
                <span class="d-block d-md-none">TMN</span>
                <span class="d-none d-md-block">Termination</span>
            </a>
        <?php }else{ ?>
            <a id="tab_prg" href="#con_prg" aria-controls="con_prg" class="nav-item nav-link" data-toggle="tab" role="tab" aria-selected="false" >
                <span class="d-block d-md-none">PRG</span>
                <span class="d-none d-md-block">Progress</span>
            </a>
            <a id="tab_tmn" href="#con_tmn" aria-controls="con_tmn" class="nav-item nav-link" data-toggle="tab" role="tab" aria-selected="false">
                <span class="d-block d-md-none">TMN</span>
                <span class="d-none d-md-block">Termination</span>
            </a>
        <?php } ?>
        </nav>
    </div>

    <div class="work-con tab-content" id="nav-tabContent">
        <div id="con_prc" aria-labelledby="tab_prc" role="tabpanel" class="h-100 tab-pane fade <?php if(empty($_GET['type'])){ echo "show active"; }?>">
            @include ('officer.inc.docs.docs-protocol')
            
        </div>
        <?php if(!empty($_GET['type'])) { ?>
        <div id="con_prg" aria-labelledby="tab_prg" role="tabpanel" class="h-100 tab-pane fade <?php if($_GET['type']=="Progress"){ echo "show active"; }?>">
            @include ('officer.inc.docs.docs-progress')
        </div>
        <div id="con_tmn" aria-labelledby="tab_tmn" role="tabpanel" class="h-100 tab-pane fade <?php if($_GET['type']=="Termination"){ echo "show active"; }?>">
            @include ('officer.inc.docs.docs-termination')
        </div>
        <?php }else{ ?>
            <div id="con_prg" aria-labelledby="tab_prg" role="tabpanel" class="h-100 tab-pane fade">
                @include ('officer.inc.docs.docs-progress')
            </div>
            <div id="con_tmn" aria-labelledby="tab_tmn" role="tabpanel" class="h-100 tab-pane fade">
                @include ('officer.inc.docs.docs-termination')
            </div>
        <?php }?>
    </div>

</div>