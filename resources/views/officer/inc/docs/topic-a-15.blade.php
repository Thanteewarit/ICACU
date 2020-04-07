<!-- STR 15 -->
<form class="box-topic" id="Protocol_opic15">
        {{ csrf_field() }}
    <div class="topic">
        @if($Protocol_docs->protocol_status==3)
        @include ('officer.inc.modal.modal-protocol-include')
        @endif
        <h2 class="title"><span>15</span> สถานที่เลี้ยงและใช้สัตว์ทดลอง (Animal and study facilities)</h2>
        
        <div class="row form-group">
            <div class="col-12">
                <h3>15.1 สถานที่เลี้ยงสัตว์ทดลอง (Animal housing)</h3>
                <div class="custom-control custom-checkbox mb-1">
                    <input type="checkbox" id="chk-a15-1_1" class="custom-control-input" name="ptc15_01" @if($Protocol_opic15->ptc15_01=='Y') checked @endif value="Y">
                    <label class="custom-control-label" for="chk-a15-1_1">ศูนย์สัตว์ทดลอง สำนักงานวิทยาศาสตร์และเทคโนโลยีชั้นสูง มหาวิทยาลัยธรรมศาสตร์ (Laboratory Animal Center, Office of Advanced Science and Technology, Thammmasat university) (ท่านยินดีจะปฏิบัติตามเกณฑ์ และระเบียบที่ศูนย์ สัตว์ทดลอง มธ. กำหนดไว้ทุกประการ)</label>
                </div>
                <div class="custom-control custom-checkbox mb-1">
                    <input type="checkbox" id="chk-a15-1_2" class="custom-control-input" name="ptc15_02" @if($Protocol_opic15->ptc15_02=='Y') checked @endif value="Y">
                    <label class="custom-control-label" for="chk-a15-1_2">หน่วยงานอื่นๆ โปรดระบุ (Other, please specify)</label>
                </div>
            <input type="text" class="form-control form-control-sm" name="ptc15_02_sub" value="{{ $Protocol_opic15->ptc15_02_sub }}">
                <small class="form-text text-muted">(ท่านได้ตรวจสอบเป็นที่ชัดเจนว่าหน่วยงานที่ท่านจะนำสัตว์ไปให้เลี้ยงมีความพร้อมและสามารถจัดการได้ตามความต้องการที่ท่านระบุไว้ทุกประการ)</small>
            </div>
        </div>

        <div class="row form-group">
            <div class="col-12">
                <h3>15.2 สถานที่ใช้สัตว์ทดลอง/ห้องปฏิบัติการ (Study location)</h3>
                <div class="custom-control custom-checkbox mb-1">
                    <input type="checkbox" id="chk-a15-2_1" class="custom-control-input" name="ptc15_03" @if($Protocol_opic15->ptc15_03=='Y') checked @endif value="Y">
                    <label class="custom-control-label" for="chk-a15-2_1">ศูนย์สัตว์ทดลอง สำนักงานวิทยาศาสตร์และเทคโนโลยีชั้นสูง มหาวิทยาลัยธรรมศาสตร์ (Laboratory Animal Center, Office of Advanced Science and Technology, Thammmasat university) (ท่านยินดีจะปฏิบัติตามเกณฑ์ และระเบียบที่ศูนย์ สัตว์ทดลอง มธ. กำหนดไว้ทุกประการ)</label>
                </div>
                <div class="custom-control custom-checkbox mb-1">
                    <input type="checkbox" id="chk-a15-2_2" class="custom-control-input" name="ptc15_04" @if($Protocol_opic15->ptc15_04=='Y') checked @endif value="Y">
                    <label class="custom-control-label" for="chk-a15-2_2">หน่วยงานอื่นๆ โปรดระบุ (Other, please specify)</label>
                </div>
                <input type="text" class="form-control form-control-sm mb-3" name="ptc15_04_sub" value="{{ $Protocol_opic15->ptc15_04_sub }}">
            </div>
        </div>
        <input type="hidden" name="id" value="{{ $Protocol_opic11->protocol_id }}">
        @if ($Protocol_docs->protocol_status==6 || $Protocol_docs->protocol_status==7 || $Protocol_docs->protocol_status==8)
         {{-- ถ้าเป็น เลขา หรือ รีวิวให้เเสดง --}}
         @hasanyrole('committee|secretary|reviewer')
         {{-- ถ้าเกิดมีการส่งค่ารีวิว ส่งมาให้แสดง --}}
         @if($Protocol_reviewer_opic_count!=0)
             {{-- วนลูป เเสดงข้อมูล --}}
             @foreach ($Protocol_reviewer_opic as $key => $r)
                 {{-- ถ้ารูเท่ากับรีวิว เเละ protocol_number เท่ากับ 1  --}}
                 @if(auth()->user()->hasRole('reviewer') && $r->protocol_number==15) 
                     @if(auth()->user()->id == $r->reviewer_id)
                         <div class="alert alert-secondary" role="alert">
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                             </button>
                             <h4><i class="material-icons">account_circle</i> REVIEWER </h4>
                             <hr>
                             <div class="custom-control custom-control-inline custom-radio my-2">
                                 <input type="radio" id="reviewer-comment-15_1" name="protocol_status" value="เหมาะสม" @if($r->protocol_status == "เหมาะสม") checked @endif class="custom-control-input" @role('secretary') disabled @endrole >
                                 <label class="custom-control-label" for="reviewer-comment-15_1">เหมาะสม</label>
                             </div>
                             <div class="custom-control custom-control-inline custom-radio my-2">
                                 <input type="radio" id="reviewer-comment-15_2" name="protocol_status" value="ไม่เหมาะสม" @if($r->protocol_status == "ไม่เหมาะสม") checked @endif  class="custom-control-input" @role('secretary') disabled @endrole  >
                                 <label class="custom-control-label" for="reviewer-comment-15_2">ไม่เหมาะสม</label>
                             </div>
                             <div class="custom-control custom-control-inline custom-radio my-2">
                                 <input type="radio" id="reviewer-comment-15_3" name="protocol_status" value="ไม่มีข้อมูล" @if($r->protocol_status == "ไม่มีข้อมูล") checked @endif class="custom-control-input" @role('secretary') disabled @endrole  >
                                 <label class="custom-control-label" for="reviewer-comment-15_3">ไม่มีข้อมูล</label>
                             </div>
                             <div class="custom-control custom-control-inline custom-radio my-2">
                                 <input type="radio" id="reviewer-comment-15_4" name="protocol_status" value="ไม่เกี่ยวข้อง" @if($r->protocol_status == "ไม่เกี่ยวข้อง") checked @endif class="custom-control-input" @role('secretary') disabled @endrole  >
                                 <label class="custom-control-label" for="reviewer-comment-15_4">ไม่เกี่ยวข้อง</label>
                             </div>
                         <textarea class="form-control form-control-sm auto-expand" rows="4" name="comment" placeholder="กรุณาระบุเหตผล.." @role('secretary') readonly @endrole>{{ $r->comment }}</textarea>
                         </div>
                     @endif
                 @endif
             @endforeach

             @foreach ($Protocol_reviewer_opic as $key => $r)
             {{-- ถ้ารูเท่ากับรีวิว เเละ protocol_number เท่ากับ 1  --}}
             @if(auth()->user()->hasRole('secretary') && $r->protocol_number==15) 
                     <div class="alert alert-secondary" role="alert">
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                         <h4><i class="material-icons">account_circle</i> REVIEWER : {{ $r->usersName->name }}</h4>
                         <hr>
                         <div class="custom-control custom-control-inline custom-radio my-2">
                             <input type="radio" id="reviewer-comment{{ $key }}-3_1" name="protocol_status{{ $key }}" value="เหมาะสม"   @if($r->protocol_status == "เหมาะสม") checked @endif class="custom-control-input" @role('secretary') disabled @endrole>
                             <label class="custom-control-label" for="reviewer-comment{{ $key }}-3_1">เหมาะสม</label>
                         </div>
                         <div class="custom-control custom-control-inline custom-radio my-2">
                             <input type="radio" id="reviewer-comment{{ $key }}-3_2" name="protocol_status{{ $key }}" value="ไม่เหมาะสม" @if($r->protocol_status == "ไม่เหมาะสม") checked @endif  class="custom-control-input" @role('secretary') disabled @endrole >
                             <label class="custom-control-label" for="reviewer-comment{{ $key }}-3_2">ไม่เหมาะสม</label>
                         </div>
                         <div class="custom-control custom-control-inline custom-radio my-2">
                             <input type="radio" id="reviewer-comment{{ $key }}-3_3" name="protocol_status{{ $key }}" value="ไม่มีข้อมูล"   @if($r->protocol_status == "ไม่มีข้อมูล") checked @endif class="custom-control-input" @role('secretary') disabled @endrole >
                             <label class="custom-control-label" for="reviewer-comment{{ $key }}-3_3">ไม่มีข้อมูล</label>
                         </div>
                         <div class="custom-control custom-control-inline custom-radio my-2">
                             <input type="radio" id="reviewer-comment{{ $key }}-3_4" name="protocol_status{{ $key }}" value="ไม่เกี่ยวข้อง" @if($r->protocol_status == "ไม่เกี่ยวข้อง") checked @endif class="custom-control-input" @role('secretary') disabled @endrole>
                             <label class="custom-control-label" for="reviewer-comment-15_4">ไม่เกี่ยวข้อง</label>
                         </div>
                     <textarea class="form-control form-control-sm auto-expand" rows="4" name="comment15[]" placeholder="กรุณาระบุเหตผล.." @role('secretary') readonly @endrole>{{ $r->comment }}</textarea>
                     </div>
             @endif
         @endforeach
         @else
             @role('reviewer')
                     <div class="alert alert-secondary" role="alert">
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                         <h4><i class="material-icons">account_circle</i> REVIEWER</h4>
                         <hr>
                         <div class="custom-control custom-control-inline custom-radio my-2">
                             <input type="radio" id="reviewer-comment-15_1" name="protocol_status" value="เหมาะสม" class="custom-control-input" @role('secretary') disabled @endrole checked>
                             <label class="custom-control-label" for="reviewer-comment-15_1">เหมาะสม</label>
                         </div>
                         <div class="custom-control custom-control-inline custom-radio my-2">
                             <input type="radio" id="reviewer-comment-15_2" name="protocol_status" value="ไม่เหมาะสม" class="custom-control-input" @role('secretary') disabled @endrole  checked>
                             <label class="custom-control-label" for="reviewer-comment-15_2">ไม่เหมาะสม</label>
                         </div>
                         <div class="custom-control custom-control-inline custom-radio my-2">
                             <input type="radio" id="reviewer-comment-15_3" name="protocol_status" value="ไม่มีข้อมูล" class="custom-control-input" @role('secretary') disabled @endrole  checked>
                             <label class="custom-control-label" for="reviewer-comment-15_3">ไม่มีข้อมูล</label>
                         </div>
                         <div class="custom-control custom-control-inline custom-radio my-2">
                             <input type="radio" id="reviewer-comment-15_4" name="protocol_status" value="ไม่เกี่ยวข้อง" class="custom-control-input" @role('secretary') disabled @endrole  checked>
                             <label class="custom-control-label" for="reviewer-comment-15_4">ไม่เกี่ยวข้อง</label>
                         </div>
                     <textarea class="form-control form-control-sm auto-expand" rows="4" name="comment" placeholder="กรุณาระบุเหตผล.." @role('secretary') readonly @endrole></textarea>
                     </div>
             @endrole
         @endif
     @endhasanyrole
     @hasanyrole('president|secretary')
     @role('secretary')
     <button type="button" class="btn btn-warning Merge" value="15"><small class="material-icons">crop</small> Merge Comments</button>
     @if($Protocol_docs->protocol_v2==0)
     
     <div class="alert alert-warning my-5" role="alert">
         <h4><i class="material-icons">question_answer</i> Comment</h4>
         <hr>
         <div class="custom-control custom-control-inline custom-radio my-2">
             <input type="radio" id="merge-comment-1-15_1" name="protocol_status01" value="เหมาะสม" class="custom-control-input">
             <label class="custom-control-label" for="merge-comment-1-15_1">เหมาะสม</label>
         </div>
         <div class="custom-control custom-control-inline custom-radio my-2">
             <input type="radio" id="merge-comment-1-15_2" name="protocol_status01" value="ไม่เหมาะสม" class="custom-control-input">
             <label class="custom-control-label" for="merge-comment-1-15_2">ไม่เหมาะสม</label>
         </div>
         <div class="custom-control custom-control-inline custom-radio my-2">
             <input type="radio" id="merge-comment-1-15_3" name="protocol_status01" value="ไม่มีข้อมูล" class="custom-control-input">
             <label class="custom-control-label" for="merge-comment-1-15_3">ไม่มีข้อมูล</label>
         </div>
         <div class="custom-control custom-control-inline custom-radio my-2">
             <input type="radio" id="merge-comment-1-15_4" name="protocol_status01" value="ไม่เกี่ยวข้อง" class="custom-control-input" checked>
             <label class="custom-control-label" for="merge-comment-1-15_4">ไม่เกี่ยวข้อง</label>
         </div>
     <textarea class="form-control form-control-sm auto-expand" id="Merge15" rows="4" name="merge_comment01"></textarea>
     </div>
     @endif
     @endrole
     @hasanyrole('president|secretary')
     @if($Protocol_docs->protocol_v2=="1")
     @foreach ($Protocol_secretary_opic as $key => $r)
     @if($r->protocol_number == 15)
     <div class="alert alert-warning my-5" role="alert">
         <h4><i class="material-icons">question_answer</i> Comment</h4>
         <hr>
         <div class="custom-control custom-control-inline custom-radio my-2">
             <input type="radio" id="merge-comment-1-15_1" name="protocol_status01" value="เหมาะสม" @if($r->protocol_status=="เหมาะสม") checked @endif class="custom-control-input">
             <label class="custom-control-label" for="merge-comment-1-15_1">เหมาะสม</label>
         </div>
         <div class="custom-control custom-control-inline custom-radio my-2">
             <input type="radio" id="merge-comment-1-15_2" name="protocol_status01" value="ไม่เหมาะสม" @if($r->protocol_status=="ไม่เหมาะสม") checked @endif class="custom-control-input">
             <label class="custom-control-label" for="merge-comment-1-15_2">ไม่เหมาะสม</label>
         </div>
         <div class="custom-control custom-control-inline custom-radio my-2">
             <input type="radio" id="merge-comment-1-15_3" name="protocol_status01" value="ไม่มีข้อมูล" @if($r->protocol_status=="ไม่มีข้อมูล") checked @endif class="custom-control-input">
             <label class="custom-control-label" for="merge-comment-1-15_3">ไม่มีข้อมูล</label>
         </div>
         <div class="custom-control custom-control-inline custom-radio my-2">
             <input type="radio" id="merge-comment-1-15_4" name="protocol_status01" value="ไม่เกี่ยวข้อง" @if($r->protocol_status=="ไม่เกี่ยวข้อง") checked @endif class="custom-control-input" >
             <label class="custom-control-label" for="merge-comment-1-15_4">ไม่เกี่ยวข้อง</label>
         </div>
     <textarea class="form-control form-control-sm auto-expand" id="Merge15" rows="4" name="merge_comment01">{{ $r->comment }}</textarea>
     </div>
     @endif
     @endforeach
     @endif
     @endhasanyrole
     @endhasanyrole
        <input type="hidden" name="protocol_id" value="{{ request()->id }}">
        <input type="hidden" name="protocol_number" value="15">
        @hasanyrole('secretary|reviewer')
                <p class="topic-save2">กรุณากด Safe ทุกครั้งหลังมีการแก้ไขข้อมูล</p>
        <button type="submit" class="btn-c material-icons topic-save">save</button>
        @endhasanyrole
        @endif

    </div>
</form>
<!-- END 15 -->