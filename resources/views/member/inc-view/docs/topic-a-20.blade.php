<!-- STR 20 -->
<form class="box-topic" id="Protocol_opic20">
        {{ csrf_field() }}
        <div class="topic">
            @if($Protocol_docs->protocol_status==15) @include ('member.inc-view.modal.modal-protocol-include') @endif
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
                    <textarea class="form-control form-control-sm" name="ptc20_02" rows="6" required>{{ $Protocol_opic20->ptc20_02 }}</textarea>
                </div>
            </div>
    
            <input type="hidden" name="id" value="{{ $Protocol_opic11->protocol_id }}">
            @if ($Protocol_docs->protocol_status==6 || $Protocol_docs->protocol_status==7 || $Protocol_docs->protocol_status==8 || $Protocol_docs->protocol_status==15)
            {{-- ถ้าเป็น เลขา หรือ รีวิวให้เเสดง --}}
            @hasanyrole('committee|secretary|reviewer')
            {{-- ถ้าเกิดมีการส่งค่ารีวิว ส่งมาให้แสดง --}}
            @if($Protocol_reviewer_opic_count!=0)
                {{-- วนลูป เเสดงข้อมูล --}}
                @foreach ($Protocol_reviewer_opic as $key => $r)
                    {{-- ถ้ารูเท่ากับรีวิว เเละ protocol_number เท่ากับ 1  --}}
                    @if(auth()->user()->hasRole('reviewer') && $r->protocol_number==20) 
                        @if(auth()->user()->id == $r->reviewer_id)
                            <div class="alert alert-secondary" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4><i class="material-icons">account_circle</i> REVIEWER </h4>
                                <hr>
                                <div class="custom-control custom-control-inline custom-radio my-2">
                                    <input type="radio" id="reviewer-comment-20_1" name="protocol_status" value="เหมาะสม" @if($r->protocol_status == "เหมาะสม") checked @endif class="custom-control-input" @role('secretary') disabled @endrole >
                                    <label class="custom-control-label" for="reviewer-comment-20_1">เหมาะสม</label>
                                </div>
                                <div class="custom-control custom-control-inline custom-radio my-2">
                                    <input type="radio" id="reviewer-comment-20_2" name="protocol_status" value="ไม่เหมาะสม" @if($r->protocol_status == "ไม่เหมาะสม") checked @endif  class="custom-control-input" @role('secretary') disabled @endrole  >
                                    <label class="custom-control-label" for="reviewer-comment-20_2">ไม่เหมาะสม</label>
                                </div>
                                <div class="custom-control custom-control-inline custom-radio my-2">
                                    <input type="radio" id="reviewer-comment-20_3" name="protocol_status" value="ไม่มีข้อมูล" @if($r->protocol_status == "ไม่มีข้อมูล") checked @endif class="custom-control-input" @role('secretary') disabled @endrole  >
                                    <label class="custom-control-label" for="reviewer-comment-20_3">ไม่มีข้อมูล</label>
                                </div>
                                <div class="custom-control custom-control-inline custom-radio my-2">
                                    <input type="radio" id="reviewer-comment-20_4" name="protocol_status" value="ไม่เกี่ยวข้อง" @if($r->protocol_status == "ไม่เกี่ยวข้อง") checked @endif class="custom-control-input" @role('secretary') disabled @endrole  >
                                    <label class="custom-control-label" for="reviewer-comment-20_4">ไม่เกี่ยวข้อง</label>
                                </div>
                            <textarea class="form-control form-control-sm auto-expand" rows="4" name="comment" placeholder="กรุณาระบุเหตผล.." @role('secretary') readonly @endrole>{{ $r->comment }}</textarea>
                            </div>
                        @endif
                    @endif
                @endforeach

                @foreach ($Protocol_reviewer_opic as $key => $r)
                {{-- ถ้ารูเท่ากับรีวิว เเละ protocol_number เท่ากับ 1  --}}
                @if(auth()->user()->hasRole('secretary') && $r->protocol_number==20) 
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
                                <label class="custom-control-label" for="reviewer-comment-20_4">ไม่เกี่ยวข้อง</label>
                            </div>
                        <textarea class="form-control form-control-sm auto-expand" rows="4" name="comment20[]" placeholder="กรุณาระบุเหตผล.." @role('secretary') readonly @endrole>{{ $r->comment }}</textarea>
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
                                <input type="radio" id="reviewer-comment-20_1" name="protocol_status" value="เหมาะสม" class="custom-control-input" @role('secretary') disabled @endrole checked>
                                <label class="custom-control-label" for="reviewer-comment-20_1">เหมาะสม</label>
                            </div>
                            <div class="custom-control custom-control-inline custom-radio my-2">
                                <input type="radio" id="reviewer-comment-20_2" name="protocol_status" value="ไม่เหมาะสม" class="custom-control-input" @role('secretary') disabled @endrole  checked>
                                <label class="custom-control-label" for="reviewer-comment-20_2">ไม่เหมาะสม</label>
                            </div>
                            <div class="custom-control custom-control-inline custom-radio my-2">
                                <input type="radio" id="reviewer-comment-20_3" name="protocol_status" value="ไม่มีข้อมูล" class="custom-control-input" @role('secretary') disabled @endrole  checked>
                                <label class="custom-control-label" for="reviewer-comment-20_3">ไม่มีข้อมูล</label>
                            </div>
                            <div class="custom-control custom-control-inline custom-radio my-2">
                                <input type="radio" id="reviewer-comment-20_4" name="protocol_status" value="ไม่เกี่ยวข้อง" class="custom-control-input" @role('secretary') disabled @endrole  checked>
                                <label class="custom-control-label" for="reviewer-comment-20_4">ไม่เกี่ยวข้อง</label>
                            </div>
                        <textarea class="form-control form-control-sm auto-expand" rows="4" name="comment" placeholder="กรุณาระบุเหตผล.." @role('secretary') readonly @endrole></textarea>
                        </div>
                @endrole
            @endif
        @endhasanyrole
        @hasanyrole('president|secretary')
        @role('secretary')
        <button type="button" class="btn btn-warning Merge" value="20"><small class="material-icons">crop</small> Merge Comments</button>
        <div class="alert alert-warning my-5" role="alert">
            <h4><i class="material-icons">question_answer</i> Comment</h4>
            <hr>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-20_1" name="protocol_status01" value="เหมาะสม" class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-20_1">เหมาะสม</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-20_2" name="protocol_status01" value="ไม่เหมาะสม" class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-20_2">ไม่เหมาะสม</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-20_3" name="protocol_status01" value="ไม่มีข้อมูล" class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-20_3">ไม่มีข้อมูล</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-20_4" name="protocol_status01" value="ไม่เกี่ยวข้อง" class="custom-control-input" checked>
                <label class="custom-control-label" for="merge-comment-1-20_4">ไม่เกี่ยวข้อง</label>
            </div>
        <textarea class="form-control form-control-sm auto-expand" id="Merge20" rows="4" name="merge_comment01"></textarea>
        </div>
        @endrole
        @role('president')
        @foreach ($Protocol_secretary_opic as $key => $r)
        @if($r->protocol_number == 20)
        <div class="alert alert-warning my-5" role="alert">
            <h4><i class="material-icons">question_answer</i> Comment</h4>
            <hr>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-20_1" name="protocol_status01" value="เหมาะสม" @if($r->protocol_status=="เหมาะสม") checked @endif class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-20_1">เหมาะสม</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-20_2" name="protocol_status01" value="ไม่เหมาะสม" @if($r->protocol_status=="ไม่เหมาะสม") checked @endif class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-20_2">ไม่เหมาะสม</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-20_3" name="protocol_status01" value="ไม่มีข้อมูล" @if($r->protocol_status=="ไม่มีข้อมูล") checked @endif class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-20_3">ไม่มีข้อมูล</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-20_4" name="protocol_status01" value="ไม่เกี่ยวข้อง" @if($r->protocol_status=="ไม่เกี่ยวข้อง") checked @endif class="custom-control-input" >
                <label class="custom-control-label" for="merge-comment-1-20_4">ไม่เกี่ยวข้อง</label>
            </div>
        <textarea class="form-control form-control-sm auto-expand" id="Merge20" rows="4" name="merge_comment01">{{ $r->comment }}</textarea>
        </div>
        @endif
        @endforeach
        @endrole
        @endhasanyrole
            <input type="hidden" name="protocol_id" value="{{ request()->id }}">
            <input type="hidden" name="protocol_number" value="20">
            @hasanyrole('secretary|reviewer|member')
                    @if ($Protocol_docs->protocol_status!=7)
            <p class="topic-save2">กรุณากด Save ทุกครั้งหลังมีการแก้ไขข้อมูล</p>
            <button type="submit" class="btn-c material-icons topic-save">save</button>
            @endif
        @endhasanyrole
            @endif
    
        </div>
    </form>
    <!-- END 20 -->