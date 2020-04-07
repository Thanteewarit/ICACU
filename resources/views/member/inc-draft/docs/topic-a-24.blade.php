<!-- STR 24 -->
<form class="box-topic" id="Protocol_opic24">
        {{ csrf_field() }}
        <div class="topic">
    
            <h2 class="title"><span>24</span>การดำเนินการกับสัตว์ที่ยังมีชีวิตหลังการสิ้นสุดโครงการ (disposition of animals after completion of activity)</h2>
            
            <div class="row form-group">
                <div class="col-12">
                    <div class="custom-control custom-radio mb-1">
                        <input type="radio" id="rad-a24-1_1" name="ptc24_01" value="Y" @if($Protocol_opic24->ptc24_01=='Y') checked @endif class="custom-control-input">
                        <label class="custom-control-label" for="rad-a24-1_1">ทำให้สัตว์ตายอย่างสงบ (Euthanasia)</label>
                    </div>
                    <div class="custom-control custom-radio mb-1">
                        <input type="radio" id="rad-a24-1_2" name="ptc24_02"  value="Y" @if($Protocol_opic24->ptc24_02=='Y') checked @endif class="custom-control-input">
                        <label class="custom-control-label" for="rad-a24-1_2">นำสัตว์ไปใช้ในโครงการอื่น (Transfer to another research project)</label>
                    </div>
                <textarea class="form-control form-control-sm ml-4 mb-4" name="ptc24_03" rows="3" >{{ $Protocol_opic24->ptc24_03 }}</textarea>
                    <div class="custom-control custom-radio mb-1">
                        <input type="radio" id="rad-a24-1_3" name="ptc24_04" value="Y" @if($Protocol_opic24->ptc24_04=='Y') checked @endif class="custom-control-input">
                        <label class="custom-control-label" for="rad-a24-1_3">อื่นๆ (ระบุวิธีการพร้อมเหตุผล) (Other, please specify method and why)</label>
                    </div>
                    <textarea class="form-control form-control-sm ml-4 mb-4" name="ptc24_05" rows="3" >{{ $Protocol_opic24->ptc24_05 }}</textarea>
                </div>
            </div>
            <input type="hidden" name="id" value="{{ $Protocol_opic11->protocol_id }}">
            <p class="topic-save2">กรุณากด Save ทุกครั้งหลังมีการแก้ไขข้อมูล</p>
            <button type="submit" class="btn-c material-icons topic-save">save</button>
    
        </div>
    </form>
    <!-- END 24 -->