<!-- STR 15 -->
<form class="box-topic" id="Protocol_opic15">
        {{ csrf_field() }}
    <div class="topic">

        <h2 class="title"><span>15</span> สถานที่เลี้ยงและใช้สัตว์ทดลอง (Animal and study facilities)</h2>
        
        <div class="row form-group">
            <div class="col-12">
                <h3>15.1 สถานที่เลี้ยงสัตว์ทดลอง (Animal housing)</h3>
                <div class="custom-control custom-checkbox mb-1">
                    <input type="checkbox" id="chk-a15-1_1" class="custom-control-input" name="ptc15_01" @if($Protocol_opic15->ptc15_01=='Y') checked @endif value="Y">
                    <label class="custom-control-label" for="chk-a15-1_1">ศูนย์สัตว์ทดลอง สำนักงานวิทยาศาสตร์และเทคโนโลยีชั้นสูง มหาวิทยาลัยธรรมศาสตร์ (Laboratory Animal Center, Office of Advanced Science and Technology, Thammmasat university) (ท่านยินดีจะปฏิบัติตามเกณฑ์ และระเบียบที่ศูนย์ สัตว์ทดลอง มธ. กำหนดไว้ทุกประการ)</label>
                </div>
                <div class="custom-control custom-checkbox mb-1">
                    <input type="checkbox" id="chk-a15-1_2" class="custom-control-input" name="ptc15_02" @if($Protocol_opic15->ptc15_02=='Y') checked @endif value="Y">
                    <label class="custom-control-label" for="chk-a15-1_2">หน่วยงานอื่นๆ โปรดระบุ (Other, please specify)</label>
                </div>
            <input type="text" class="form-control form-control-sm" name="ptc15_02_sub" value="{{ $Protocol_opic15->ptc15_02_sub }}">
                <small class="form-text text-muted">(ท่านได้ตรวจสอบเป็นที่ชัดเจนว่าหน่วยงานที่ท่านจะนำสัตว์ไปให้เลี้ยงมีความพร้อมและสามารถจัดการได้ตามความต้องการที่ท่านระบุไว้ทุกประการ)</small>
            </div>
        </div>

        <div class="row form-group">
            <div class="col-12">
                <h3>15.2 สถานที่ใช้สัตว์ทดลอง/ห้องปฏิบัติการ (Study location)</h3>
                <div class="custom-control custom-checkbox mb-1">
                    <input type="checkbox" id="chk-a15-2_1" class="custom-control-input" name="ptc15_03" @if($Protocol_opic15->ptc15_03=='Y') checked @endif value="Y">
                    <label class="custom-control-label" for="chk-a15-2_1">ศูนย์สัตว์ทดลอง สำนักงานวิทยาศาสตร์และเทคโนโลยีชั้นสูง มหาวิทยาลัยธรรมศาสตร์ (Laboratory Animal Center, Office of Advanced Science and Technology, Thammmasat university) (ท่านยินดีจะปฏิบัติตามเกณฑ์ และระเบียบที่ศูนย์ สัตว์ทดลอง มธ. กำหนดไว้ทุกประการ)</label>
                </div>
                <div class="custom-control custom-checkbox mb-1">
                    <input type="checkbox" id="chk-a15-2_2" class="custom-control-input" name="ptc15_04" @if($Protocol_opic15->ptc15_04=='Y') checked @endif value="Y">
                    <label class="custom-control-label" for="chk-a15-2_2">หน่วยงานอื่นๆ โปรดระบุ (Other, please specify)</label>
                </div>
                <input type="text" class="form-control form-control-sm mb-3" name="ptc15_04_sub" value="{{ $Protocol_opic15->ptc15_04_sub }}">
            </div>
        </div>
        <input type="hidden" name="id" value="{{ $Protocol_opic11->protocol_id }}">
        <button type="submit" class="btn-c material-icons topic-save">save</button>

    </div>
</form>
<!-- END 15 -->