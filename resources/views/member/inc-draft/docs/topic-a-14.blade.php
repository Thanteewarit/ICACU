<!-- STR 14 -->
<form class="box-topic" id="Protocol_opic14">
        {{ csrf_field() }}
    <div class="topic">

        <h2 class="title"><span>14</span> การพักสัตว์และกักกันสัตว์ (Acclimatization and Quarantine)</h2>
        <div class="row form-group">
            <div class="col-md-6">
                <div class="custom-control custom-checkbox mb-1">
                    <input type="checkbox" id="chk-a14-1_1" class="custom-control-input" name="ptc14_01" @if($Protocol_opic14->ptc14_01=='Y') checked @endif value="Y">
                    <label class="custom-control-label" for="chk-a14-1_1">พักสัตว์เป็นระยะเวลา (Acclimatization period) วัน (day)</label>
                </div>
                <input type="text" class="form-control form-control-sm mb-3" name="ptc14_01_sub" value="{{ $Protocol_opic14->ptc14_01_sub }}">
                <div class="custom-control custom-checkbox mb-1">
                    <input type="checkbox" id="chk-a14-1_2" class="custom-control-input" name="ptc14_02" @if($Protocol_opic14->ptc14_02=='Y') checked @endif value="Y">
                    <label class="custom-control-label" for="chk-a14-1_2">กักกันสัตว์เป็นระยะเวลา (Quarantine period) วัน (day)</label>
                </div>
                <input type="text" class="form-control form-control-sm mb-3" name="ptc14_02_sub" value="{{ $Protocol_opic14->ptc14_02_sub }}">
                <div class="custom-control custom-checkbox mb-1">
                    <input type="checkbox" id="chk-a14-1_3" class="custom-control-input" name="ptc14_03" @if($Protocol_opic14->ptc14_03=='Y') checked @endif value="Y">
                    <label class="custom-control-label" for="chk-a14-1_3">ถ่ายพยาธิ (Deworm)</label>
                </div>
                <div class="custom-control custom-checkbox mb-1">
                    <input type="checkbox" id="chk-a14-1_4" class="custom-control-input" name="ptc14_04" @if($Protocol_opic14->ptc14_04=='Y') checked @endif value="Y">
                    <label class="custom-control-label" for="chk-a14-1_4">ฉีดวัคซีน (Vaccination)</label>
                </div>
                <div class="custom-control custom-checkbox mb-1">
                    <input type="checkbox" id="chk-a14-1_5" class="custom-control-input" name="ptc14_05" @if($Protocol_opic14->ptc14_05=='Y') checked @endif value="Y">
                    <label class="custom-control-label" for="chk-a14-1_5">อื่นๆ (ระบุ) (Other, please specify)</label>
                </div>
            <input type="text" class="form-control form-control-sm mb-3" name="ptc14_05_sub" value="{{ $Protocol_opic14->ptc14_05_sub }}" >
            </div>
        </div>
        <input type="hidden" name="id" value="{{ $Protocol_opic11->protocol_id }}">
        <button type="submit" class="btn-c material-icons topic-save">save</button>

    </div>
</form>
<!-- END 14 -->