<!-- STR 17 -->
<form class="box-topic" id="Protocol_opic17">
        {{ csrf_field() }}
    <div class="topic">

        <h2 class="title"><span>17</span> ระยะเวลาดำเนินการโครงการ (Proposal Period)</h2>
        
        <div class="row form-group">
            <div class="col-md-8">
                <h3>17.1 ตามแบบเสนอโครงการ (Proposal Period)</h3>
            </div>
            <div class="col-md-4">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control form-control-sm input-date-ranges" name="ptc17_01" required>
                    <div class="input-group-prepend">
                        <div class="input-group-text material-icons">date_range</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row form-group">
            <div class="col-md-8">
                <h3>17.2 ตามที่ดำเนินการจริง (หากไม่ตรงกับวันที่ระบุไว้ใน Proposal)</h3>
            </div>
            <div class="col-md-4">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control form-control-sm input-date-ranges" name="ptc17_02" required>
                    <div class="input-group-prepend">
                        <div class="input-group-text material-icons">date_range</div>
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" class="btn-c material-icons topic-save">save</button>

    </div>
</form>
<!-- END 17 -->