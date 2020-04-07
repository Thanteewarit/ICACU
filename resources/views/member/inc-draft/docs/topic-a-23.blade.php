<!-- STR 23 -->
<form class="box-topic" id="Protocol_opic23">
        {{ csrf_field() }}
        <div class="topic">
    
            <h2 class="title"><span>23</span>จุดยุติการทดลอง (Experimental Endpoint) (IACUC Policy 600 : Experimental and Humane Endpoints Policy)</h2>
            <div class="row form-group">
                <div class="col-12 mb-4">
                    <label><strong>23.1</strong> จุดสิ้นสุดการทดลองตามแผนการศึกษา (Terminal point of study that occurs when the scientific aims and objectives have been reached.)</label>
                    <textarea class="form-control form-control-sm" name="ptc23_01" rows="3" >{{ $Protocol_opic23->ptc23_01 }}</textarea>
                </div>
                <div class="col-12 mb-4">
                    <label><strong>23.2</strong> ระบุเกณฑ์การพิจารณาจุดยุติก่อนสิ้นสุดการทดลอง (Early Endpoint)* (*ถ้ามีข้อมูลอ้างอิง) (Please indicate early endpoint criteria)</label>
                    <textarea class="form-control form-control-sm" name="ptc23_02" rows="3" >{{ $Protocol_opic23->ptc23_02 }}</textarea>
                </div>
                <div class="col-12 mb-4">
                    <label><strong>23.3</strong> ระบุเกณฑ์การพิจารณาจุดสิ้นสุดการทดลองเพื่อทำให้สัตว์ตายอย่างสงบในระหว่างการทดลองโดยไม่ต้องรอให้สัตว์ตายเอง (Humane Endpoint) ตัวอย่างเช่น สัตว์อยู่ในสภาพทรุดโทรม น้ำหนักลด ส่งเสียงร้องด้วยความเจ็บปวด และไม่สามารถเคลื่อนไหวได้เอง (Please indicate humane endpoint criteria)</label>
                    <textarea class="form-control form-control-sm" name="ptc23_03" rows="3" >{{ $Protocol_opic23->ptc23_03 }}</textarea>
                </div>
                <div class="col-12 mb-4">
                    <label><strong>23.4</strong> ระบุเหตุผลความจำเป็นที่จะใช้การตายเป็นจุดสิ้นสุดการทดลอง (Death as an Endpoint is used give a scientific justification)* (*ถ้ามีความจำเป็นในการใช้การตายในการสิ้นสุดการทดลอง)</label>
                    <textarea class="form-control form-control-sm" name="ptc23_04" rows="3" >{{ $Protocol_opic23->ptc23_04 }}</textarea>
                </div>
            </div>
            <input type="hidden" name="id" value="{{ $Protocol_opic11->protocol_id }}">
            <p class="topic-save2">กรุณากด Save ทุกครั้งหลังมีการแก้ไขข้อมูล</p>
            <button type="submit" class="btn-c material-icons topic-save">save</button>
    
        </div>
    </form>
    <!-- END 23 -->