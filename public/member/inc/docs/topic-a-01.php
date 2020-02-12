<!-- STR 01 -->
<form class="box-topic">
    <div class="topic">

        <div class="heading">
            <img class="d-block mx-auto mb-3" src="img/logo_tu_cut.svg" height="100" />
            <h1>แบบฟอร์มการขอรับการพิจารณาจรรยาบรรณการใช้สัตว์ทดลอง<br>(ANIMAL CARE AND USE PROTOCOL)</h1>
            <p>(เพื่อคณะอนุกรรมการจรรยาบรรณและติดตามโครงการเลี้ยงและใช้สัตว์เพื่องานทางวิทยาศาสตร์ มธ. พิจารณา)</p>
        </div>

        <div class="alert alert-warning mb-5" role="alert">
            <h4><i class="material-icons">sms</i> Revise Remark</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga ad tempore quis quia rerum, excepturi optio non aspernatur natus iste quasi temporibus, impedit magnam earum velit eveniet a expedita esse?</p>
            <hr>
            <a href="#" class="badge badge-pill badge-warning" data-toggle="modal" data-target="#modal_delete_protocol">11</a>
            <a href="#" class="badge badge-pill badge-warning" data-toggle="modal" data-target="#modal_conclude_consider">12</a>
            <a href="#" class="badge badge-pill badge-warning" data-toggle="modal" data-target="#modal_conclude_amendment">13</a>
            <a href="#" class="badge badge-pill badge-warning" data-toggle="modal" data-target="#modal_conclude_renew">14</a>
            <a href="#" class="badge badge-pill badge-warning" data-toggle="modal" data-target="#modal_conclude_progress">15</a>
            <a href="#" class="badge badge-pill badge-warning" data-toggle="modal" data-target="#modal_conclude_termination">16</a>
            <a href="#" class="badge badge-pill badge-warning" data-toggle="modal" data-target="#modal_protocol_info">17</a>
        </div>

        <h2 class="title"><span>01</span>ชื่อโครงการ (Protocol Title)</h2>

        <div class="row form-group">
            <h3 class="col-12">ชื่อโครงการที่ขอใช้สัตว์ (Animal Protocol Title)</h3>
            <div class="col-12">
                <div class="lang-group mb-2">
                    <small>TH</small>
                    <input type="text" class="form-control form-control-sm" placeholder="Text here..." required>
                </div>
            </div>
            <div class="col-12">
                <div class="lang-group mb-2">
                    <small>EN</small>
                    <input type="text" class="form-control form-control-sm" placeholder="Text here..." required>
                </div>
            </div>
        </div>

        <div class="row form-group">
            <h3 class="col-12">ชื่อโครงการหลัก (Project/Proposal Title) (ถ้ามี)</h3>
            <div class="col-md-12">
                <div class="lang-group mb-2">
                    <small>TH</small>
                    <input type="text" class="form-control form-control-sm" placeholder="Text here..." required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="lang-group mb-2">
                    <small>EN</small>
                    <input type="text" class="form-control form-control-sm" placeholder="Text here..." required>
                </div>
            </div>
        </div>


        <div class="row form-group d-none">
            <h3 class="col-12">กรณีที่เป็นโครงการที่ผ่านการรับรองแล้วต้องการขอต่ออายุโครงการ</h3>
            <div class="col-md-12">
                <p>หากเป็นโครงการที่ทำต่อเนื่องโครงการเดิมที่ได้ผ่านการพิจารณาจรรยาบรรณการใช้สัตว์ทดลองแล้วโปรดระบุรหัสโครงการที่ผ่านความเห็นชอบ และอธิบายความเหมือนและความแตกต่างของโครงการนี้กับโครงการเดิมด้วย (Describe how is different of approved version and renewed version)</p>
                <textarea class="form-control" rows="3"></textarea>
            </div>
        </div>


        <div class="alert alert-secondary" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4><i class="material-icons">account_circle</i> REVIEWER001</h4>
            <hr>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="reviewer-comment-1_1" name="reviewer-comment-1" class="custom-control-input" required checked>
                <label class="custom-control-label" for="reviewer-comment-1_1">เหมาะสม</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="reviewer-comment-1_2" name="reviewer-comment-1" class="custom-control-input" required checked>
                <label class="custom-control-label" for="reviewer-comment-1_2">ไม่เหมาะสม</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="reviewer-comment-1_3" name="reviewer-comment-1" class="custom-control-input" required checked>
                <label class="custom-control-label" for="reviewer-comment-1_3">ไม่มีข้อมูล</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="reviewer-comment-1_4" name="reviewer-comment-1" class="custom-control-input" required checked>
                <label class="custom-control-label" for="reviewer-comment-1_4">ไม่เกี่ยวข้อง</label>
            </div>
            <textarea class="form-control form-control-sm auto-expand" rows="4" placeholder="กรุณาระบุเหตผล.." required>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</textarea>
        </div>
        <div class="alert alert-secondary" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4><i class="material-icons">account_circle</i> REVIEWER002</h4>
            <hr>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="reviewer-comment-2_1" name="reviewer-comment-2" class="custom-control-input" required checked>
                <label class="custom-control-label" for="reviewer-comment-2_1">เหมาะสม</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="reviewer-comment-2_2" name="reviewer-comment-2" class="custom-control-input" required checked>
                <label class="custom-control-label" for="reviewer-comment-2_2">ไม่เหมาะสม</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="reviewer-comment-2_3" name="reviewer-comment-2" class="custom-control-input" required checked>
                <label class="custom-control-label" for="reviewer-comment-2_3">ไม่มีข้อมูล</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="reviewer-comment-2_4" name="reviewer-comment-2" class="custom-control-input" required checked>
                <label class="custom-control-label" for="reviewer-comment-2_4">ไม่เกี่ยวข้อง</label>
            </div>
            <textarea class="form-control form-control-sm auto-expand" rows="4" placeholder="กรุณาระบุเหตผล.." required>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</textarea>
        </div>
        <button type="button" class="btn btn-warning"><small class="material-icons">crop</small> Merge Comments</button>

        <div class="alert alert-warning my-5" role="alert">
            <h4><i class="material-icons">question_answer</i> Comment</h4>
            <hr>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1_1" name="merge-comment-1" class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1_1">เหมาะสม</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1_2" name="merge-comment-1" class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1_2">ไม่เหมาะสม</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1_3" name="merge-comment-1" class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1_3">ไม่มีข้อมูล</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1_4" name="merge-comment-1" class="custom-control-input" checked>
                <label class="custom-control-label" for="merge-comment-1_4">ไม่เกี่ยวข้อง</label>
            </div>
            <textarea class="form-control form-control-sm auto-expand" rows="4" placeholder="กรุณาระบุเหตผล.." required>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</textarea>
        </div>

        <button type="submit" class="btn-c material-icons topic-save">save</button>

    </div>
</form>
<!-- END 01 -->