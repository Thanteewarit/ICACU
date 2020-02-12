<div class="work-pane">

    <div class="work-btn">
        <button class="btn-c material-icons" id="side_reviewer" title="Add Reviewer">group_add</button>
        <button class="btn-c material-icons" id="side_upload" title="Upload File">cloud_upload</button>
        <button class="btn-c material-icons" data-toggle="modal" data-target="#exampleModalScrollable" title="Send">send</button>
        <button type="button" class="btn-c material-icons switch-1" title="Control">more_vert</button>
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
            <?php include 'docs-protocol.php';?>
        </div>
        <div id="con_prg" aria-labelledby="tab_prg" role="tabpanel" class="h-100 tab-pane fade">
            <?php include 'docs-progress.php';?>
        </div>
        <div id="con_tmn" aria-labelledby="tab_tmn" role="tabpanel" class="h-100 tab-pane fade">
            <?php include 'docs-termination.php';?>
        </div>
    </div>

</div>