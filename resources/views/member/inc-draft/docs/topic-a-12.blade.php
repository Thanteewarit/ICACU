<!-- STR 12 -->
<form class="box-topic" id="Protocol_opic12">
        {{ csrf_field() }}
    <div class="topic">

        <h2 class="title"><span>12</span>แหล่งผลิตสัตว์ (Animal Resources)</h2>
        <div class="row form-group">
            <div class="col-12">
                <label><strong>12.1</strong> แหล่งที่มาของสัตว์ (Source/Vendor)</label>
                <div class="pl-4">
                    <div class="custom-control custom-checkbox mb-1">
                    <input type="checkbox" id="chk-a12-1_1" class="custom-control-input" name="ptc12_01" @if($Protocol_opic12->ptc12_01=='Y') checked @endif value="Y">
                        <label class="custom-control-label" for="chk-a12-1_1">เพาะขยายพันธุ์ขึ้นใช้เองในหน่วยงาน คณะหรือสถาบัน ระบุที่มา (In house breeding, please specify)</label>
                    </div>
                    <input type="text" class="form-control form-control-sm mb-3" name="ptc12_01_sub"  value="{{ $Protocol_opic12->ptc12_01_sub }}"  >
                </div>
                <div class="pl-4">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a12-1_2" class="custom-control-input" name="ptc12_02" @if($Protocol_opic12->ptc12_02=='Y') checked @endif value="Y">
                        <label class="custom-control-label" for="chk-a12-1_2">สั่งซื้อจากแหล่งเพาะขยายพันธุ์ต่างประเทศ ระบุที่มา (Imported, please specify</label>
                    </div>
                    <input type="text" class="form-control form-control-sm mb-3" name="ptc12_02_sub" value="{{ $Protocol_opic12->ptc12_02_sub }}" >
                </div>
                <div class="pl-4">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a12-1_3" class="custom-control-input" name="ptc12_03" @if($Protocol_opic12->ptc12_03=='Y') checked @endif value="Y">
                        <label class="custom-control-label" for="chk-a12-1_3">สั่งซื้อจากแหล่งเพาะขยายพันธุ์อื่นๆภายในประเทศ ระบุที่มา (within country, please specify</label>
                    </div>
                    <div class="pl-4">
                        <div class="custom-control custom-control-inline custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a12-1_4" class="custom-control-input" name="ptc12_03_sub_01" @if($Protocol_opic12->ptc12_03_sub_01=='Y') checked @endif value="Y">
                            <label class="custom-control-label" for="chk-a12-1_4">ศูนย์สัตว์ทดลองแห่งชาติ</label>
                        </div>
                        <div class="custom-control custom-control-inline custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a12-1_5" class="custom-control-input" name="ptc12_03_sub_02" @if($Protocol_opic12->ptc12_03_sub_02=='Y') checked @endif value="Y">
                            <label class="custom-control-label" for="chk-a12-1_5">บริษัท โนมูระ สยามอินเตอร์เนชั่นแนล</label>
                        </div>
                        <div class="custom-control custom-control-inline custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a12-1_6" class="custom-control-input" name="ptc12_03_sub_03" @if($Protocol_opic12->ptc12_03_sub_03=='Y') checked @endif value="Y">
                            <label class="custom-control-label" for="chk-a12-1_6">อื่นๆ โปรดระบุ<label>
                        </div>
                        <input type="text" class="form-control form-control-sm mb-3" name="ptc12_03_sub_04" value="{{ $Protocol_opic12->ptc12_03_sub_04 }}"  >
                    </div>
                </div>
                <div class="pl-4">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a12-1_7" class="custom-control-input" name="ptc12_04" @if($Protocol_opic12->ptc12_04=='Y') checked @endif value="Y">
                        <label class="custom-control-label" for="chk-a12-1_7">อื่นๆ ระบุ (Other, please specify)</label>
                    </div>
                    <input type="text" class="form-control form-control-sm mb-3" name="ptc12_03_sub" value="{{ $Protocol_opic12->ptc12_06_03_sub }}"  >
                </div>
                <hr>
            </div>
        </div>

        <div class="row form-group">
            <div class="col-12">
                <label><strong>12.2</strong> คุณภาพของสัตว์จากแหล่งผลิต (Quality of Source/Vendor)</label>
                <div class="pl-4">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a12-2_1" class="custom-control-input" name="ptc12_05_01" @if($Protocol_opic12->ptc12_05_01=='Y') checked @endif value="Y">
                        <label class="custom-control-label" for="chk-a12-2_1">มีหลักฐานแสดงสืบสายพันธุ์ และความคงที่ทางพันธุกรรมของสายพันธุ์ที่ต้องการตรวจสอบ (Have a genetic monitoring system)</label>
                    </div>
                </div>
                <div class="pl-4">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a12-2_2" class="custom-control-input" name="ptc12_05_02" @if($Protocol_opic12->ptc12_05_02=='Y') checked @endif value="Y">
                        <label class="custom-control-label" for="chk-a12-2_2">มีหลักฐานตรวจสอบได้ว่าเป็นสัตว์เลี้ยงด้วยระบบอนามัยเข้ม (Strict hygienic conventional system)</label>
                    </div>
                </div>
                <div class="pl-4">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a12-2_3" class="custom-control-input" name="ptc12_05_03" @if($Protocol_opic12->ptc12_05_03=='Y') checked @endif value="Y">
                        <label class="custom-control-label" for="chk-a12-2_3">มีหลักฐานตรวจสอบได้ว่าเป็นสัตว์เลี้ยงด้วยระบบปลอดเชื้อจำเพาะ (SPF System)</label>
                    </div>
                </div>
                <div class="pl-4">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a12-2_4" class="custom-control-input" name="ptc12_05_04" @if($Protocol_opic12->ptc12_05_04=='Y') checked @endif value="Y">
                        <label class="custom-control-label" for="chk-a12-2_4">มีหลักฐานตรวจสอบได้ว่าเป็นสัตว์เลี้ยงด้วยระบบปลอดเชื้อสมบูรณ์ (Germ Free system)</label>
                    </div>
                </div>
                <div class="pl-4">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a12-2_5" class="custom-control-input" name="ptc12_05_05" @if($Protocol_opic12->ptc12_05_05=='Y') checked @endif value="Y">
                        <label class="custom-control-label" for="chk-a12-2_5">ไม่มีหลักฐาน หรือเอกสารรับรอง (no any document that certified genetic and health monitoring)</label>
                    </div>
                </div>
                <div class="pl-4">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a12-2_6" class="custom-control-input" name="ptc12_05_06" @if($Protocol_opic12->ptc12_05_06=='Y') checked @endif value="Y">
                        <label class="custom-control-label" for="chk-a12-2_6">อื่น ๆ (ระบุ) (Other, please specify)</label>
                    </div>
                    <input type="text" class="form-control form-control-sm mb-3" name="ptc12_05_06_sub" value="{{ $Protocol_opic12->ptc12_06_03_sub }}"  >
                </div>
                <hr>
            </div>
        </div>

        <div class="row form-group">
            <div class="col-12">
                <label><strong>12.3</strong> ศักยภาพของแหล่งผลิต (Potential supply of Source/Vendor)</label>
                <div class="pl-4">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a12-3_1" class="custom-control-input" name="ptc12_06_01" @if($Protocol_opic12->ptc12_06_01=='Y') checked @endif value="Y">
                        <label class="custom-control-label" for="chk-a12-3_1">มีวิธีเพาะขยายพันธุ์ที่แสดงว่าสามารถเพาะขยายพันธุ์สายพันธุ์สัตว์ที่ต้องการได้ทุกรูปแบบของเพศ อายุ น้ำหนัก และจำนวนตามที่ต้องการ (Provide Stock/strain, sex, age, weigh and number)</label>
                    </div>
                </div>
                <div class="pl-4">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a12-3_2" class="custom-control-input" name="ptc12_06_02" @if($Protocol_opic12->ptc12_06_02=='Y') checked @endif value="Y">
                        <label class="custom-control-label" for="chk-a12-3_2">สามารถจัดบริการส่งโดยใช้มาตรฐานการขนส่งสัตว์สากล (Provide international standard for animal transportation)</label>
                    </div>
                </div>
                <div class="pl-4">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a12-3_3" class="custom-control-input" name="ptc12_06_03" @if($Protocol_opic12->ptc12_06_03=='Y') checked @endif value="Y">
                        <label class="custom-control-label" for="chk-a12-3_3">อื่น ๆ (ระบุ) (Other, please specify)</label>
                    </div>
                <input type="text" class="form-control form-control-sm mb-3" name="ptc12_06_03_sub" value="{{ $Protocol_opic12->ptc12_06_03_sub }}"  >
                </div>
            </div>
        </div>

        <input type="hidden" name="id" value="{{ $Protocol_opic11->protocol_id }}">
        <button type="submit" class="btn-c material-icons topic-save">save</button>

    </div>
</form>
<!-- END 12 -->