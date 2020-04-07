<!-- STR 26 -->
<form class="box-topic" id="Protocol_opic26">
    {{ csrf_field() }}
    <div class="topic">

        <h2 class="title"><span>26</span>การผ่าซาก (Necropsy) (ถ้ามี)</h2>
        <div class="row form-group">
            <div class="col-12">
                <div class="custom-control custom-control-inline custom-radio mb-1">
                    <input type="radio" id="rad-a26-1_1" name="ptc26_01" value="N" checked class="custom-control-input">
                    <label class="custom-control-label" for="rad-a26-1_1">ไม่มี (No)</label>
                </div>
                <div class="custom-control custom-control-inline custom-radio mb-1">
                    <input type="radio" id="rad-a26-1_2" name="ptc26_01" value="Y" class="custom-control-input">
                    <label class="custom-control-label" for="rad-a26-1_2">มี (ระบุ) (Yes, please specify)</label>
                </div>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-12">
                <label>ระบุวิธีการ อุปกรณ์ สถานที่ และการป้องกันการแพร่กระจายของเชื้อโรคในการผ่าซากสัตว์ (Method, instrument, location and equipment to prevent spread of hazardous agent)</label>
                <textarea class="form-control form-control-sm" name="ptc26_02" rows="6"></textarea>
            </div>
        </div>
        <p class="topic-save2">กรุณากด Save ทุกครั้งหลังมีการแก้ไขข้อมูล</p>
        <button type="submit" class="btn-c material-icons topic-save">save</button>

    </div>
</form>
<!-- END 26 -->