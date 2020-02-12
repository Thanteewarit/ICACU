<!-- STR 27 -->
<form class="box-topic" id="Protocol_opic27">
        {{ csrf_field() }}
        <div class="topic">
    
            <h2 class="title"><span>27</span>การกำจัดซากและของเสีย (Carcass and Waste Disposal)</h2>
            <div class="row form-group">
                <div class="col-12">
                    <div class="custom-control custom-control-inline custom-radio mb-1">
                        <input type="radio" id="rad-a27-1_1" name="ptc27_01" value="N" @if($Protocol_opic27->ptc27_01=='N') checked @endif class="custom-control-input">
                        <label class="custom-control-label" for="rad-a27-1_1">ไม่มี (No)</label>
                    </div>
                    <div class="custom-control custom-control-inline custom-radio mb-1">
                        <input type="radio" id="rad-a27-1_2" name="ptc27_01" value="Y" @if($Protocol_opic27->ptc27_01=='Y') checked @endif class="custom-control-input">
                        <label class="custom-control-label" for="rad-a27-1_2">มี (ระบุ) (Yes, please specify)</label>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-12">
                    <label>ระบุวิธีการเก็บ กำจัด และทำลายซากสัตว์ ชิ้นเนื้อและวัสดุที่ใช้แล้ว เพื่อป้องกันการแพร่กระจายของเชื้อโรค สารพิษ มลพิษ สู่สิ่งแวดล้อม (Please describe method used to dispose animal tissue and carcasses.)</label>
                <textarea class="form-control form-control-sm" name="ptc27_02" rows="6" required>{{ $Protocol_opic27->ptc27_02 }}</textarea>
                </div>
            </div>
            <input type="hidden" name="id" value="{{ $Protocol_opic11->protocol_id }}">
            <button type="submit" class="btn-c material-icons topic-save">save</button>
    
        </div>
    </form>
    <!-- END 27 -->