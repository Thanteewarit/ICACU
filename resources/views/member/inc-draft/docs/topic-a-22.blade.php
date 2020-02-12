<!-- STR 22 -->
<form class="box-topic" id="Protocol_opic22">
        {{ csrf_field() }}
        <div class="topic">
    
            <h2 class="title"><span>22</span>การนำสัตว์ไปใช้นอกสถานที่ (ถ้ามี) (Is this project intended to conduct the animal experiment in other building? (This is allowed for conducting experiment (s) only not for housing. In addition, the holding period must be less than 12 hours.) If needed)</h2>
            <div class="row form-group">
                <div class="col-12">
                    <div class="custom-control custom-control-inline custom-radio mb-1">
                        <input type="radio" id="rad-a22-1_1" name="ptc22_01" value="N" @if($Protocol_opic22->ptc22_01=='N') checked @endif class="custom-control-input">
                        <label class="custom-control-label" for="rad-a22-1_1">ไม่มี (No)</label>
                    </div>
                    <div class="custom-control custom-control-inline custom-radio mb-1">
                        <input type="radio" id="rad-a22-1_2" name="ptc22_01" value="Y" @if($Protocol_opic22->ptc22_01=='Y') checked @endif  class="custom-control-input">
                        <label class="custom-control-label" for="rad-a22-1_2">มี (ระบุ) (Yes, please specify)</label>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-12 mb-4">
                    <label><strong>22.1</strong> ระบุเหตุผลความจำเป็นที่ต้องนำสัตว์ไปใช้นอกสถานที่ (Why the experiment to be conduct in other building)</label>
                <textarea class="form-control form-control-sm" name="ptc22_02" rows="3" required>{{ $Protocol_opic22->ptc22_02 }}</textarea>
                </div>
                <div class="col-12 mb-4">
                    <label><strong>22.2</strong> ระบุสถานที่ที่จะนำสัตว์ไปใช้ (Where the experiment is expected to be conducted? Please provide the building name and room number.)</label>
                    <textarea class="form-control form-control-sm" name="ptc22_03"  rows="3" required>{{ $Protocol_opic22->ptc22_03 }}</textarea>
                </div>
                <div class="col-12 mb-4">
                    <label><strong>22.3</strong> ระยะเวลาที่จะนำสัตว์ไปใช้ (Estimated total time period that live animals will be kept in the laboratory is…hours)</label>
                    <div class="input-group input-group-sm" style="width: 120px;">
                        <input type="number" class="form-control form-control-sm" name="ptc22_04" value="{{ $Protocol_opic22->ptc22_04 }}"  required>
                        <div class="input-group-prepend">
                            <div class="input-group-text">hours</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-4">
                    <label><strong>22.4</strong> วิธีการเคลื่อนย้ายสัตว์ออกจากสถานที่เลี้ยง (How to transport animal)</label>
                    <textarea class="form-control form-control-sm" rows="3" name="ptc22_05"  required>{{ $Protocol_opic22->ptc22_05 }}</textarea>
                </div>
                <div class="col-12 mb-4">
                    <label><strong>22.5</strong> วิธีการจัดการกับสัตว์หลังสิ้นสุดการใช้ (How will the animal sample or carcass be disposed?)</label>
                    <textarea class="form-control form-control-sm" rows="3" name="ptc22_06"  required>{{ $Protocol_opic22->ptc22_06 }}</textarea>
                </div>
            </div>
            <input type="hidden" name="id" value="{{ $Protocol_opic11->protocol_id }}">
            <button type="submit" class="btn-c material-icons topic-save">save</button>
    
        </div>
    </form>
    <!-- END 22 -->