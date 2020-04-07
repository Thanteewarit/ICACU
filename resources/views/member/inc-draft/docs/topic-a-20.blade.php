<!-- STR 20 -->
<form class="box-topic" id="Protocol_opic20">
        {{ csrf_field() }}
        <div class="topic">
    
            <h2 class="title"><span>20</span> การบรรเทาความเครียดและความเจ็บปวดของสัตว์ (Pain &amp; Distress Alleviation)</h2>
    
            <div class="row form-group">
                <label class="col-12"><strong>20.1</strong> ระบุเกณฑ์การจำแนกระดับความเจ็บปวดและความทุกข์ทรมานในสัตว์ทดลอง (USDA pain and distress categories) สัตว์ทดลองที่ใช้ในงานวิจัยจัดอยู่ในกลุ่มใดต่อไปนี้</label>
                <div class="col-12">
                    <div class="custom-control custom-control-inline custom-radio mb-3">
                        <input type="radio" id="rad-a20-1_1" name="ptc20_01" value="B"   @if($Protocol_opic20->ptc20_01=='B') checked @endif class="custom-control-input">
                        <label class="custom-control-label" for="rad-a20-1_1"><strong>กลุ่ม B :</strong> สัตว์ทดลองถูกนำมาเพาะขยายพันธุ์ ปรับสภาพ เลี้ยงเพื่อใช้ในงานการเรียนการสอน งานทดสอบ งานทดลอง งานวิจัยหรืองานศัลยศาสตร์ แต่ยังไม่นำไปใช้ในวัตถุประสงค์เหล่านั้น มีการสังเกตสัตว์ทดลองในสภาพความเป็นอยู่ธรรมชาติ (USDA category B : Breeding or Holding Colony Protocols)</label>
                    </div>
                    <div class="custom-control custom-control-inline custom-radio mb-3">
                        <input type="radio" id="rad-a20-1_2" name="ptc20_01" value="C"  @if($Protocol_opic20->ptc20_01=='C') checked @endif  class="custom-control-input">
                        <label class="custom-control-label" for="rad-a20-1_2"><strong>กลุ่ม C :</strong> สัตว์ทดลองถูกนำไปใช้ในงานวิจัยที่ไม่ก่อให้เกิดความเจ็บปวดทุกข์ทรมาน เกิดความเจ็บปวดทุกข์ทรมานขึ้นเพียงชั่วขณะหรือเกิดความเจ็บปวดทุกข์ทรมานขึ้นเพียงเล็กน้อย โดยไม่จำเป็นต้องให้ยาลดปวด ((USDA category C : No more than momentary or slight pain or distress and no use of pain-relieving drugs, or no pain or distress. For example: euthanatized for tissues; just observed under normal conditions; positive reward projects; routine procedures; injections; and blood sampling.)</label>
                    </div>
                    <div class="custom-control custom-control-inline custom-radio mb-3">
                        <input type="radio" id="rad-a20-1_3" name="ptc20_01" value="D"  @if($Protocol_opic20->ptc20_01=='D') checked @endif   class="custom-control-input">
                        <label class="custom-control-label" for="rad-a20-1_3"><strong>กลุ่ม D :</strong> สัตว์ทดลองถูกนำไปใช้ในงานวิจัยที่ก่อให้เกิดความเจ็บปวด ความทุกข์ทรมานมาก จำเป็นต้องให้ยาสลบ ยาระงับปวดหรือยากล่อมประสาท (USDA category D : Pain or distress appropriately relieved with anesthetics, analgesics and/or tranquilizer drugs or other methods for relieving pain or distress )</label>
                    </div>
                    <div class="custom-control custom-control-inline custom-radio mb-3">
                        <input type="radio" id="rad-a20-1_4" name="ptc20_01" value="E"  @if($Protocol_opic20->ptc20_01=='E') checked @endif  class="custom-control-input">
                        <label class="custom-control-label" for="rad-a20-1_4"><strong>กลุ่ม E :</strong> สัตว์ทดลองถูกนำไปใช้ในงานวิจัยที่ก่อให้เกิดความเจ็บปวด ความทุกข์ทรมาน โดยไม่สามารถให้ยาสลบ ยาระงับปวด หรือยากล่อมประสาท ทั้งนี้ต้องมีเหตุผลทางวิทยาศาสตร์รองรับและได้รับความเห็นชอบจากคณะอนุกรรมการจรรยาบรรณการวิจัยในสัตว์ (USDA category E : Pain or distress or potential pain or distress that is <strong><u>not</u></strong> relieved with anesthetics, analgesics and/or tranquilizer drugs or other methods for relieving pain or distress.)</label>
                    </div>
                </div>
            </div>
    
            <div class="row form-group">
                <div class="col-12">
                    <label><strong>20.2</strong> ระบุวิธีการที่จะบรรเทาความเครียดและความเจ็บปวด
                    กรณีที่จำเป็นต้องทำให้สัตว์เจ็บปวดแต่ไม่มีการบรรเทาความเจ็บปวดให้แก่สัตว์
                    โปรดชี้แจงเหตุผลให้ชัดเจน (If this is not relieving pain or distress please indicate
                    this and justify)</label>
                    <textarea class="form-control form-control-sm" name="ptc20_02" rows="6" >{{ $Protocol_opic20->ptc20_02 }}</textarea>
                </div>
            </div>
    
            <input type="hidden" name="id" value="{{ $Protocol_opic11->protocol_id }}">
            <p class="topic-save2">กรุณากด Save ทุกครั้งหลังมีการแก้ไขข้อมูล</p>
            <button type="submit" class="btn-c material-icons topic-save">save</button>
    
        </div>
    </form>
    <!-- END 20 -->