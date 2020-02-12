<!-- STR 19 -->
<form class="box-topic" id="Protocol_opic19">
    {{ csrf_field() }}
    <div class="topic">

        <h2 class="title"><span>19</span>การผ่าตัด การปฏิบัติก่อน-หลังการผ่าตัด โดยเทคนิคปลอดเชื้อ (Surgery)</h2>
        
        <div class="row form-group">
            <div class="col-12">
                <div class="custom-control custom-control-inline custom-radio mb-1">
                    <input type="radio" id="rad-a19-1_1" name="ptc19_01" value="N" class="custom-control-input">
                    <label class="custom-control-label" for="rad-a19-1_1">ไม่มี (No)</label>
                </div>
                <div class="custom-control custom-control-inline custom-radio mb-1">
                    <input type="radio" id="rad-a19-1_2" name="ptc19_01" value="Y" class="custom-control-input">
                    <label class="custom-control-label" for="rad-a19-1_2">มี (ระบุ) (Yes, please specify)</label>
                </div>
            </div>
        </div>

        <div class="row form-group">
            <div class="col-12">
                <div class="row">
                    <label class="col-12"><strong>19.1</strong> ระบุลักษณะของการผ่าตัด (Surgery procedure is)</label>
                    <div class="col-1">19.1.1</div>
                    <div class="col-md-3">
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a19-1_1" name="ptc19_02" value="Y" class="custom-control-input">
                            <label class="custom-control-label" for="chk-a19-1_1">Minor Surgery</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a19-1_2" name="ptc19_03" value="Y" class="custom-control-input">
                            <label class="custom-control-label" for="chk-a19-1_2">Major Surgery</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">19.1.2</div>
                    <div class="col-md-3">
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a19-1_3" name="ptc19_04" value="Y" class="custom-control-input">
                            <label class="custom-control-label" for="chk-a19-1_3">Survival Surgery</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a19-1_4" name="ptc19_05" value="Y" class="custom-control-input">
                            <label class="custom-control-label" for="chk-a19-1_4">Non Survival Surgery</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">19.1.3</div>
                    <div class="col-md-3">
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a19-1_5" name="ptc19_06" value="Y" class="custom-control-input">
                            <label class="custom-control-label" for="chk-a19-1_5">Single Surgery</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a19-1_6" name="ptc19_07" value="Y" class="custom-control-input">
                            <label class="custom-control-label" for="chk-a19-1_6">Multiple Surgery</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row form-group">
            <div class="col-12">
                <p><strong>19.2</strong>
                ระบุขั้นตอนและรายละเอียดเกี่ยวกับการผ่าตัด เช่นการสลบสัตว์, การผ่าตัด,
                การดูแลก่อนและหลังการผ่าตัด เป็นต้น หากซับซ้อนโปรดเขียน Flow chart ประกอบด้วย (***
                ในกรณีที่มีการผ่าตัดต้องบอกเทคนิคปลอดเชื้อ จุดที่ผ่าตัด วิธีผ่าตัด เย็บแผล หากมี)
                พร้อมระบุชื่อผู้รับผิดชอบการผ่าตัดและประสบการณ์ (<strong>Surgical Procedure:</strong> Describe in detail any
                surgical procedures planned and/or add a reference, aseptic technique, incision site,
                surgery technique, suture pattern. A diagram or chart may be helpful to explain surgery.
                <strong>Pre-and Post-operative provisions:</strong> Detail the provisions for both pre-and post-
                operative care, including provisions for post-surgical observations.
                <strong>Surgeon/Qualification:</strong> Indicate who will perform the surgery, and his/her qualifications,
                training, or experience in the proposed procedure.)</p>
                <textarea class="form-control form-control-sm" rows="6" name="ptc19_08"></textarea>
            </div>
        </div>

        <button type="submit" class="btn-c material-icons topic-save">save</button>

    </div>
</form>
<!-- END 19 -->