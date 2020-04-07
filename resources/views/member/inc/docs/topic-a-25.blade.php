<!-- STR 25 -->
<form class="box-topic" id="Protocol_opic25">
    {{ csrf_field() }}
    <div class="topic">

        <h2 class="title"><span>25</span>การทำให้สัตว์ตายอย่างสงบ (Euthanasia)</h2>
        <div class="row form-group">
            <div class="col-12">
                <div class="custom-control custom-control-inline custom-radio mb-1">
                    <input type="radio" id="rad-a25-1_1" name="ptc25_01" value="N" checked class="custom-control-input">
                    <label class="custom-control-label" for="rad-a25-1_1">ไม่มี (No)</label>
                </div>
                <div class="custom-control custom-control-inline custom-radio mb-1">
                    <input type="radio" id="rad-a25-1_2" name="ptc25_01" value="Y" class="custom-control-input">
                    <label class="custom-control-label" for="rad-a25-1_2">มี (ระบุ) (Yes, please specify)</label>
                </div>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-12 mb-4">
                <label><strong>25.1</strong> ระบุวิธีการ อุปกรณ์ สถานที่ และเหตุผล ที่ทำให้สัตว์ตายอย่างสงบตามมาตรฐานที่เป็นที่ยอมรับพร้อมหลักฐานอ้างอิง (Method, equipment, location, Why euthanasia under standard method)</label>
                <textarea class="form-control form-control-sm" name="ptc25_02" rows="3" ></textarea>
            </div>
            <div class="col-12 mb-4">
                <label><strong>25.2</strong> ระบุวิธีการการตรวจสอบการตายของสัตว์ (Method for ensure animal death)</label>
                <textarea class="form-control form-control-sm" name="ptc25_03" rows="3" ></textarea>
            </div>
        </div>
        <p class="topic-save2">กรุณากด Save ทุกครั้งหลังมีการแก้ไขข้อมูล</p>
        <button type="submit" class="btn-c material-icons topic-save">save</button>

    </div>
</form>
<!-- END 25 -->