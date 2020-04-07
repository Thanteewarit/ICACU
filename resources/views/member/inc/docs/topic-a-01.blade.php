<!-- STR 01 -->
<form class="box-topic" id="Protocol_opic01" >
        {{ csrf_field() }}
    <div class="topic">

        <div class="heading">
            <img class="d-block mx-auto mb-3" src="{{asset('member/img/logo_tu_cut.svg')}}" height="100" />
            <h1>แบบฟอร์มการขอรับการพิจารณาจรรยาบรรณการใช้สัตว์ทดลอง<br>(ANIMAL CARE AND USE PROTOCOL)</h1>
            <p>(เพื่อคณะอนุกรรมการจรรยาบรรณและติดตามโครงการเลี้ยงและใช้สัตว์เพื่องานทางวิทยาศาสตร์ มธ. พิจารณา)</p>
        </div>

        <h2 class="title"><span>01</span>ชื่อโครงการ (Protocol Title)</h2>

        <div class="row form-group">
            <h3 class="col-12">ชื่อโครงการที่ขอใช้สัตว์ (Animal Protocol Title)</h3>
            <div class="col-12">
                <div class="lang-group mb-2">
                    <small>TH</small>
                    <input type="text" class="form-control form-control-sm" name="animal_protocol_th" autocomplete="off"  required>
                </div>
            </div>
            <div class="col-12">
                <div class="lang-group mb-2">
                    <small>EN</small>
                    <input type="text" class="form-control form-control-sm" name="animal_protocol_en" autocomplete="off"  required>
                </div>
            </div>
        </div>

        <div class="row form-group">
            <h3 class="col-12">ชื่อโครงการหลัก (Project/Proposal Title) (ถ้ามี)</h3>
            <div class="col-md-12">
                <div class="lang-group mb-2">
                    <small>TH</small>
                    <input type="text" class="form-control form-control-sm"  name="project_proposal_th" autocomplete="off"  required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="lang-group mb-2">
                    <small>EN</small>
                    <input type="text" class="form-control form-control-sm" name="project_proposal_en" autocomplete="off"  required>
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
        <p class="topic-save2">กรุณากด Save ทุกครั้งหลังมีการแก้ไขข้อมูล</p>
        <button type="submit" class="btn-c material-icons topic-save">save</button>

    </div>
</form>
<!-- END 01 -->