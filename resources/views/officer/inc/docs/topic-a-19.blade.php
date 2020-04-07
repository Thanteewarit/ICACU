<!-- STR 19 -->
<form class="box-topic" id="Protocol_opic19">
        {{ csrf_field() }}
        <div class="topic">
            @if($Protocol_docs->protocol_status==3)
        @include ('officer.inc.modal.modal-protocol-include')
        @endif
            <h2 class="title"><span>19</span>การผ่าตัด การปฏิบัติก่อน-หลังการผ่าตัด โดยเทคนิคปลอดเชื้อ (Surgery)</h2>
            
            <div class="row form-group">
                <div class="col-12">
                    <div class="custom-control custom-control-inline custom-radio mb-1">
                        <input type="radio" id="rad-a19-1_1" name="ptc19_01"  @if($Protocol_opic19->ptc19_01=='N') checked @endif value="N" class="custom-control-input">
                        <label class="custom-control-label" for="rad-a19-1_1">ไม่มี (No)</label>
                    </div>
                    <div class="custom-control custom-control-inline custom-radio mb-1">
                        <input type="radio" id="rad-a19-1_2" name="ptc19_01" @if($Protocol_opic19->ptc19_01=='Y') checked @endif value="Y" class="custom-control-input">
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
                                <input type="checkbox" id="chk-a19-1_1" name="ptc19_02"  @if($Protocol_opic19->ptc19_02=='Y') checked @endif value="Y" class="custom-control-input">
                                <label class="custom-control-label" for="chk-a19-1_1">Minor Surgery</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a19-1_2" name="ptc19_03"  @if($Protocol_opic19->ptc19_03=='Y') checked @endif value="Y" class="custom-control-input">
                                <label class="custom-control-label" for="chk-a19-1_2">Major Surgery</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">19.1.2</div>
                        <div class="col-md-3">
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a19-1_3" name="ptc19_04"  @if($Protocol_opic19->ptc19_04=='Y') checked @endif value="Y" class="custom-control-input">
                                <label class="custom-control-label" for="chk-a19-1_3">Survival Surgery</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a19-1_4" name="ptc19_05"  @if($Protocol_opic19->ptc19_05=='Y') checked @endif value="Y" class="custom-control-input">
                                <label class="custom-control-label" for="chk-a19-1_4">Non Survival Surgery</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">19.1.3</div>
                        <div class="col-md-3">
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a19-1_5" name="ptc19_06"  @if($Protocol_opic19->ptc19_06=='Y') checked @endif value="Y" class="custom-control-input">
                                <label class="custom-control-label" for="chk-a19-1_5">Single Surgery</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a19-1_6" name="ptc19_07"  @if($Protocol_opic19->ptc19_07=='Y') checked @endif value="Y" class="custom-control-input">
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
                    <textarea class="form-control form-control-sm" rows="6" name="ptc19_08" >{{ $Protocol_opic19->ptc19_08 }}</textarea>
                </div>
            </div>
            <input type="hidden" name="id" value="{{ $Protocol_opic11->protocol_id }}">
            @if ($Protocol_docs->protocol_status==6 || $Protocol_docs->protocol_status==7)
             {{-- ถ้าเป็น เลขา หรือ รีวิวให้เเสดง --}}
             @hasanyrole('committee|secretary|reviewer')
             {{-- ถ้าเกิดมีการส่งค่ารีวิว ส่งมาให้แสดง --}}
             @if($Protocol_reviewer_opic_count!=0)
                 {{-- วนลูป เเสดงข้อมูล --}}
                 @foreach ($Protocol_reviewer_opic as $key => $r)
                     {{-- ถ้ารูเท่ากับรีวิว เเละ protocol_number เท่ากับ 1  --}}
                     @if(auth()->user()->hasRole('reviewer') && $r->protocol_number==19) 
                         @if(auth()->user()->id == $r->reviewer_id)
                             <div class="alert alert-secondary" role="alert">
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                 </button>
                                 <h4><i class="material-icons">account_circle</i> REVIEWER </h4>
                                 <hr>
                                 <div class="custom-control custom-control-inline custom-radio my-2">
                                     <input type="radio" id="reviewer-comment-19_1" name="protocol_status" value="เหมาะสม" @if($r->protocol_status == "เหมาะสม") checked @endif class="custom-control-input" @role('secretary') disabled @endrole >
                                     <label class="custom-control-label" for="reviewer-comment-19_1">เหมาะสม</label>
                                 </div>
                                 <div class="custom-control custom-control-inline custom-radio my-2">
                                     <input type="radio" id="reviewer-comment-19_2" name="protocol_status" value="ไม่เหมาะสม" @if($r->protocol_status == "ไม่เหมาะสม") checked @endif  class="custom-control-input" @role('secretary') disabled @endrole  >
                                     <label class="custom-control-label" for="reviewer-comment-19_2">ไม่เหมาะสม</label>
                                 </div>
                                 <div class="custom-control custom-control-inline custom-radio my-2">
                                     <input type="radio" id="reviewer-comment-19_3" name="protocol_status" value="ไม่มีข้อมูล" @if($r->protocol_status == "ไม่มีข้อมูล") checked @endif class="custom-control-input" @role('secretary') disabled @endrole  >
                                     <label class="custom-control-label" for="reviewer-comment-19_3">ไม่มีข้อมูล</label>
                                 </div>
                                 <div class="custom-control custom-control-inline custom-radio my-2">
                                     <input type="radio" id="reviewer-comment-19_4" name="protocol_status" value="ไม่เกี่ยวข้อง" @if($r->protocol_status == "ไม่เกี่ยวข้อง") checked @endif class="custom-control-input" @role('secretary') disabled @endrole  >
                                     <label class="custom-control-label" for="reviewer-comment-19_4">ไม่เกี่ยวข้อง</label>
                                 </div>
                             <textarea class="form-control form-control-sm auto-expand" rows="4" name="comment" placeholder="กรุณาระบุเหตผล.." @role('secretary') readonly @endrole>{{ $r->comment }}</textarea>
                             </div>
                         @endif
                     @endif
                 @endforeach
 
                 @foreach ($Protocol_reviewer_opic as $key => $r)
                 {{-- ถ้ารูเท่ากับรีวิว เเละ protocol_number เท่ากับ 1  --}}
                 @if(auth()->user()->hasRole('secretary') && $r->protocol_number==19) 
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
                                 <label class="custom-control-label" for="reviewer-comment-19_4">ไม่เกี่ยวข้อง</label>
                             </div>
                         <textarea class="form-control form-control-sm auto-expand" rows="4" name="comment19[]" placeholder="กรุณาระบุเหตผล.." @role('secretary') readonly @endrole>{{ $r->comment }}</textarea>
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
                                 <input type="radio" id="reviewer-comment-19_1" name="protocol_status" value="เหมาะสม" class="custom-control-input" @role('secretary') disabled @endrole checked>
                                 <label class="custom-control-label" for="reviewer-comment-19_1">เหมาะสม</label>
                             </div>
                             <div class="custom-control custom-control-inline custom-radio my-2">
                                 <input type="radio" id="reviewer-comment-19_2" name="protocol_status" value="ไม่เหมาะสม" class="custom-control-input" @role('secretary') disabled @endrole  checked>
                                 <label class="custom-control-label" for="reviewer-comment-19_2">ไม่เหมาะสม</label>
                             </div>
                             <div class="custom-control custom-control-inline custom-radio my-2">
                                 <input type="radio" id="reviewer-comment-19_3" name="protocol_status" value="ไม่มีข้อมูล" class="custom-control-input" @role('secretary') disabled @endrole  checked>
                                 <label class="custom-control-label" for="reviewer-comment-19_3">ไม่มีข้อมูล</label>
                             </div>
                             <div class="custom-control custom-control-inline custom-radio my-2">
                                 <input type="radio" id="reviewer-comment-19_4" name="protocol_status" value="ไม่เกี่ยวข้อง" class="custom-control-input" @role('secretary') disabled @endrole  checked>
                                 <label class="custom-control-label" for="reviewer-comment-19_4">ไม่เกี่ยวข้อง</label>
                             </div>
                         <textarea class="form-control form-control-sm auto-expand" rows="4" name="comment" placeholder="กรุณาระบุเหตผล.." @role('secretary') readonly @endrole></textarea>
                         </div>
                 @endrole
             @endif
         @endhasanyrole
         @hasanyrole('president|secretary')
         @role('secretary')
         <button type="button" class="btn btn-warning Merge" value="19"><small class="material-icons">crop</small> Merge Comments</button>
         @if($Protocol_docs->protocol_v2==0)
         
         <div class="alert alert-warning my-5" role="alert">
             <h4><i class="material-icons">question_answer</i> Comment</h4>
             <hr>
             <div class="custom-control custom-control-inline custom-radio my-2">
                 <input type="radio" id="merge-comment-1-19_1" name="protocol_status01" value="เหมาะสม" class="custom-control-input">
                 <label class="custom-control-label" for="merge-comment-1-19_1">เหมาะสม</label>
             </div>
             <div class="custom-control custom-control-inline custom-radio my-2">
                 <input type="radio" id="merge-comment-1-19_2" name="protocol_status01" value="ไม่เหมาะสม" class="custom-control-input">
                 <label class="custom-control-label" for="merge-comment-1-19_2">ไม่เหมาะสม</label>
             </div>
             <div class="custom-control custom-control-inline custom-radio my-2">
                 <input type="radio" id="merge-comment-1-19_3" name="protocol_status01" value="ไม่มีข้อมูล" class="custom-control-input">
                 <label class="custom-control-label" for="merge-comment-1-19_3">ไม่มีข้อมูล</label>
             </div>
             <div class="custom-control custom-control-inline custom-radio my-2">
                 <input type="radio" id="merge-comment-1-19_4" name="protocol_status01" value="ไม่เกี่ยวข้อง" class="custom-control-input" checked>
                 <label class="custom-control-label" for="merge-comment-1-19_4">ไม่เกี่ยวข้อง</label>
             </div>
         <textarea class="form-control form-control-sm auto-expand" id="Merge19" rows="4" name="merge_comment01"></textarea>
         </div>
         @endif
         @endrole
         @hasanyrole('president|secretary')
         @if($Protocol_docs->protocol_v2=="1")
         @foreach ($Protocol_secretary_opic as $key => $r)
         @if($r->protocol_number == 19)
         <div class="alert alert-warning my-5" role="alert">
             <h4><i class="material-icons">question_answer</i> Comment</h4>
             <hr>
             <div class="custom-control custom-control-inline custom-radio my-2">
                 <input type="radio" id="merge-comment-1-19_1" name="protocol_status01" value="เหมาะสม" @if($r->protocol_status=="เหมาะสม") checked @endif class="custom-control-input">
                 <label class="custom-control-label" for="merge-comment-1-19_1">เหมาะสม</label>
             </div>
             <div class="custom-control custom-control-inline custom-radio my-2">
                 <input type="radio" id="merge-comment-1-19_2" name="protocol_status01" value="ไม่เหมาะสม" @if($r->protocol_status=="ไม่เหมาะสม") checked @endif class="custom-control-input">
                 <label class="custom-control-label" for="merge-comment-1-19_2">ไม่เหมาะสม</label>
             </div>
             <div class="custom-control custom-control-inline custom-radio my-2">
                 <input type="radio" id="merge-comment-1-19_3" name="protocol_status01" value="ไม่มีข้อมูล" @if($r->protocol_status=="ไม่มีข้อมูล") checked @endif class="custom-control-input">
                 <label class="custom-control-label" for="merge-comment-1-19_3">ไม่มีข้อมูล</label>
             </div>
             <div class="custom-control custom-control-inline custom-radio my-2">
                 <input type="radio" id="merge-comment-1-19_4" name="protocol_status01" value="ไม่เกี่ยวข้อง" @if($r->protocol_status=="ไม่เกี่ยวข้อง") checked @endif class="custom-control-input" >
                 <label class="custom-control-label" for="merge-comment-1-19_4">ไม่เกี่ยวข้อง</label>
             </div>
         <textarea class="form-control form-control-sm auto-expand" id="Merge19" rows="4" name="merge_comment01">{{ $r->comment }}</textarea>
         </div>
         @endif
        @endforeach
        @endif
        @endhasanyrole
        @endhasanyrole
     <input type="hidden" name="protocol_id" value="{{ request()->id }}">
     <input type="hidden" name="protocol_number" value="19">
     @hasanyrole('secretary|reviewer')
                 <p class="topic-save2">กรุณากด Safe ทุกครั้งหลังมีการแก้ไขข้อมูล</p>
        <button type="submit" class="btn-c material-icons topic-save">save</button>
         @endhasanyrole
     @endif
 
    
        </div>
    </form>
    <!-- END 19 -->