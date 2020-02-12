<!-- STR 13 -->
<form class="box-topic" id="Protocol_opic13">
        {{ csrf_field() }}
        <div class="topic">
    
            <h2 class="title"><span>13</span>การขนส่งมายังห้องปฏิบัติการและการเตรียมสัตว์ (Transportation from source/vendor and acclimatization or quarantine)</h2>
            <div class="row form-group">
                <div class="col-12">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a13-1_0" class="custom-control-input" name="ptc13_01" @if($Protocol_opic13->ptc13_01=='Y') checked @endif value="Y">
                        <label class="custom-control-label" for="chk-a13-1_0"><strong>13.1</strong> ใช้การขนส่งที่จัดไว้ให้โดย ศูนย์สัตว์ทดลองแห่งชาติ</label>
                    </div>
                    <div class="pl-4">
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a13-1_1" class="custom-control-input" name="ptc13_02" @if($Protocol_opic13->ptc13_02=='Y') checked @endif value="Y">
                            <label class="custom-control-label" for="chk-a13-1_1">มีการควบคุมอุณหภูมิ (Temperature control)</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a13-1_2" class="custom-control-input" name="ptc13_03" @if($Protocol_opic13->ptc13_03=='Y') checked @endif value="Y">
                            <label class="custom-control-label" for="chk-a13-1_2">มีการระบายอากาศเพียงพอ (Appropriate Ventilation)</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a13-1_3" class="custom-control-input"  name="ptc13_04" @if($Protocol_opic13->ptc13_04=='Y') checked @endif value="Y">
                            <label class="custom-control-label" for="chk-a13-1_3">มีการป้องกันการติดเชื้อ (Prevent known/unknown infection)<label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a13-1_4" class="custom-control-input"  name="ptc13_05" @if($Protocol_opic13->ptc13_05=='Y') checked @endif value="Y">
                            <label class="custom-control-label" for="chk-a13-1_4">ภาชนะบรรจุสัตว์มั่นคงแข็งแรง (ระบุชนิดของภาชนะ) (Specify type of secure animal containment)<label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a13-1_5" class="custom-control-input"  name="ptc13_06" @if($Protocol_opic13->ptc13_06=='Y') checked @endif value="Y">
                            <label class="custom-control-label" for="chk-a13-1_5">มีพื้นที่เพียงพอ (ระบุขนาดของพื้นที่) (Specify floor area of animal containment<label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a13-1_6" class="custom-control-input" name="ptc13_07" @if($Protocol_opic13->ptc13_07=='Y') checked @endif value="Y">
                            <label class="custom-control-label" for="chk-a13-1_6">ถึงจุดหมายปลายทางภายใน 1 วัน (arrived in 1 day)<label>
                        </div>
                    </div>
                </div>
                <div class="col-12"><hr></div>
            </div>
    
            <div class="row form-group">
                <div class="col-12">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a13-2_0" class="custom-control-input" name="ptc13_08" @if($Protocol_opic13->ptc13_08=='Y') checked @endif value="Y">
                        <label class="custom-control-label" for="chk-a13-2_0"><strong>13.2</strong> ใช้การขนส่งที่จัดไว้ให้โดย บริษัท โนมูระ สยามอินเตอร์เนชั่นแนล</label>
                    </div>
                    <div class="pl-4">
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a13-2_1" class="custom-control-input" name="ptc13_09" @if($Protocol_opic13->ptc13_09=='Y') checked @endif value="Y">
                            <label class="custom-control-label" for="chk-a13-2_1">มีการควบคุมอุณหภูมิ (Temperature control)</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a13-2_2" class="custom-control-input" name="ptc13_10" @if($Protocol_opic13->ptc13_10=='Y') checked @endif value="Y">
                            <label class="custom-control-label" for="chk-a13-2_2">มีการระบายอากาศเพียงพอ (Appropriate Ventilation)</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a13-2_3" class="custom-control-input" name="ptc13_11" @if($Protocol_opic13->ptc13_11=='Y') checked @endif value="Y">
                            <label class="custom-control-label" for="chk-a13-2_3">มีการป้องกันการติดเชื้อ (Prevent known/unknown infection)<label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a13-2_4" class="custom-control-input" name="ptc13_12" @if($Protocol_opic13->ptc13_12=='Y') checked @endif value="Y">
                            <label class="custom-control-label" for="chk-a13-2_4">ภาชนะบรรจุสัตว์มั่นคงแข็งแรง (ระบุชนิดของภาชนะ) (Specify type of secure animal containment)<label>
                        </div>
                        <input type="text" class="form-control form-control-sm mb-3" name="ptc13_12_sub" value="{{ $Protocol_opic13->ptc13_12_sub }}" >
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a13-2_5" class="custom-control-input" name="ptc13_13" @if($Protocol_opic13->ptc13_13=='Y') checked @endif value="Y">
                            <label class="custom-control-label" for="chk-a13-2_5">มีพื้นที่เพียงพอ (ระบุขนาดของพื้นที่) (Specify floor area of animal containment<label>
                        </div>
                        <input type="text" class="form-control form-control-sm mb-3" name="ptc13_13_sub" value="{{ $Protocol_opic13->ptc13_13_sub }}" >
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a13-2_6" class="custom-control-input" name="ptc13_14" @if($Protocol_opic13->ptc13_14=='Y') checked @endif value="Y">
                            <label class="custom-control-label" for="chk-a13-2_6">ถึงจุดหมายปลายทางภายใน 1 วัน (arrived in 1 day)<label>
                        </div>
                    </div>
                </div>
                <div class="col-12"><hr></div>
            </div>
    
            <div class="row form-group">
                <div class="col-12">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a13-3_0" class="custom-control-input" name="ptc13_15" @if($Protocol_opic13->ptc13_15=='Y') checked @endif value="Y">
                        <label class="custom-control-label" for="chk-a13-3_0"><strong>13.3</strong> อื่นๆ โปรดระบุ</label>
                    </div>
                    <div class="pl-4">
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a13-3_1" class="custom-control-input" name="ptc13_16" @if($Protocol_opic13->ptc13_16=='Y') checked @endif value="Y">
                            <label class="custom-control-label" for="chk-a13-3_1">มีการควบคุมอุณหภูมิ (Temperature control)</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a13-3_2" class="custom-control-input" name="ptc13_17" @if($Protocol_opic13->ptc13_17=='Y') checked @endif value="Y">
                            <label class="custom-control-label" for="chk-a13-3_2">มีการระบายอากาศเพียงพอ (Appropriate Ventilation)</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a13-3_3" class="custom-control-input" name="ptc13_18" @if($Protocol_opic13->ptc13_18=='Y') checked @endif value="Y">
                            <label class="custom-control-label" for="chk-a13-3_3">มีการป้องกันการติดเชื้อ (Prevent known/unknown infection)<label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a13-3_4" class="custom-control-input" name="ptc13_19" @if($Protocol_opic13->ptc13_19=='Y') checked @endif value="Y">
                            <label class="custom-control-label" for="chk-a13-3_4">ภาชนะบรรจุสัตว์มั่นคงแข็งแรง (ระบุชนิดของภาชนะ) (Specify type of secure animal containment)<label>
                        </div>
                        <input type="text" class="form-control form-control-sm mb-3" name="ptc13_19_sub" value="{{ $Protocol_opic13->ptc13_19_sub }}">
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a13-3_5" class="custom-control-input" name="ptc13_20" @if($Protocol_opic13->ptc13_20=='Y') checked @endif value="Y">
                            <label class="custom-control-label" for="chk-a13-3_5">มีพื้นที่เพียงพอ (ระบุขนาดของพื้นที่) (Specify floor area of animal containment<label>
                        </div>
                    <input type="text" class="form-control form-control-sm mb-3" name="ptc13_20_sub" value="{{ $Protocol_opic13->ptc13_20_sub }}">
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a13-3_6" class="custom-control-input" name="ptc13_21" @if($Protocol_opic13->ptc13_21=='Y') checked @endif value="Y">
                            <label class="custom-control-label" for="chk-a13-3_6">ถึงจุดหมายปลายทางภายใน 1 วัน (arrived in 1 day)<label>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="id" value="{{ $Protocol_opic11->protocol_id }}">
            <button type="submit" class="btn-c material-icons topic-save">save</button>
    
        </div>
    </form>
    <!-- END 13 -->