<!-- STR 13 -->
<form class="box-topic" id="Protocol_opic13">
        {{ csrf_field() }}
        <div class="topic">
            @if($Protocol_docs->protocol_status!=10) @include ('member.inc-view.modal.modal-protocol-include') @endif
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
            @if ($Protocol_docs->protocol_status==6 || $Protocol_docs->protocol_status==7 || $Protocol_docs->protocol_status==8 || $Protocol_docs->protocol_status==15)
        {{-- ถ้าเป็น เลขา หรือ รีวิวให้เเสดง --}}
        @hasanyrole('committee|secretary|reviewer')
            {{-- ถ้าเกิดมีการส่งค่ารีวิว ส่งมาให้แสดง --}}
            @if($Protocol_reviewer_opic_count!=0)
                {{-- วนลูป เเสดงข้อมูล --}}
                @foreach ($Protocol_reviewer_opic as $key => $r)
                    {{-- ถ้ารูเท่ากับรีวิว เเละ protocol_number เท่ากับ 1  --}}
                    @if(auth()->user()->hasRole('reviewer') && $r->protocol_number==13) 
                        @if(auth()->user()->id == $r->reviewer_id)
                            <div class="alert alert-secondary" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4><i class="material-icons">account_circle</i> REVIEWER </h4>
                                <hr>
                                <div class="custom-control custom-control-inline custom-radio my-2">
                                    <input type="radio" id="reviewer-comment-13_1" name="protocol_status" value="เหมาะสม" @if($r->protocol_status == "เหมาะสม") checked @endif class="custom-control-input" @role('secretary') disabled @endrole >
                                    <label class="custom-control-label" for="reviewer-comment-13_1">เหมาะสม</label>
                                </div>
                                <div class="custom-control custom-control-inline custom-radio my-2">
                                    <input type="radio" id="reviewer-comment-13_2" name="protocol_status" value="ไม่เหมาะสม" @if($r->protocol_status == "ไม่เหมาะสม") checked @endif  class="custom-control-input" @role('secretary') disabled @endrole  >
                                    <label class="custom-control-label" for="reviewer-comment-13_2">ไม่เหมาะสม</label>
                                </div>
                                <div class="custom-control custom-control-inline custom-radio my-2">
                                    <input type="radio" id="reviewer-comment-13_3" name="protocol_status" value="ไม่มีข้อมูล" @if($r->protocol_status == "ไม่มีข้อมูล") checked @endif class="custom-control-input" @role('secretary') disabled @endrole  >
                                    <label class="custom-control-label" for="reviewer-comment-13_3">ไม่มีข้อมูล</label>
                                </div>
                                <div class="custom-control custom-control-inline custom-radio my-2">
                                    <input type="radio" id="reviewer-comment-13_4" name="protocol_status" value="ไม่เกี่ยวข้อง" @if($r->protocol_status == "ไม่เกี่ยวข้อง") checked @endif class="custom-control-input" @role('secretary') disabled @endrole  >
                                    <label class="custom-control-label" for="reviewer-comment-13_4">ไม่เกี่ยวข้อง</label>
                                </div>
                            <textarea class="form-control form-control-sm auto-expand" rows="4" name="comment" placeholder="กรุณาระบุเหตผล.." @role('secretary') readonly @endrole>{{ $r->comment }}</textarea>
                            </div>
                        @endif
                    @endif
                @endforeach

                @foreach ($Protocol_reviewer_opic as $key => $r)
                {{-- ถ้ารูเท่ากับรีวิว เเละ protocol_number เท่ากับ 1  --}}
                @if(auth()->user()->hasRole('secretary') && $r->protocol_number==13) 
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
                                <label class="custom-control-label" for="reviewer-comment-13_4">ไม่เกี่ยวข้อง</label>
                            </div>
                        <textarea class="form-control form-control-sm auto-expand" rows="4" name="comment13[]" placeholder="กรุณาระบุเหตผล.." @role('secretary') readonly @endrole>{{ $r->comment }}</textarea>
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
                                <input type="radio" id="reviewer-comment-13_1" name="protocol_status" value="เหมาะสม" class="custom-control-input" @role('secretary') disabled @endrole checked>
                                <label class="custom-control-label" for="reviewer-comment-13_1">เหมาะสม</label>
                            </div>
                            <div class="custom-control custom-control-inline custom-radio my-2">
                                <input type="radio" id="reviewer-comment-13_2" name="protocol_status" value="ไม่เหมาะสม" class="custom-control-input" @role('secretary') disabled @endrole  checked>
                                <label class="custom-control-label" for="reviewer-comment-13_2">ไม่เหมาะสม</label>
                            </div>
                            <div class="custom-control custom-control-inline custom-radio my-2">
                                <input type="radio" id="reviewer-comment-13_3" name="protocol_status" value="ไม่มีข้อมูล" class="custom-control-input" @role('secretary') disabled @endrole  checked>
                                <label class="custom-control-label" for="reviewer-comment-13_3">ไม่มีข้อมูล</label>
                            </div>
                            <div class="custom-control custom-control-inline custom-radio my-2">
                                <input type="radio" id="reviewer-comment-13_4" name="protocol_status" value="ไม่เกี่ยวข้อง" class="custom-control-input" @role('secretary') disabled @endrole  checked>
                                <label class="custom-control-label" for="reviewer-comment-13_4">ไม่เกี่ยวข้อง</label>
                            </div>
                        <textarea class="form-control form-control-sm auto-expand" rows="4" name="comment" placeholder="กรุณาระบุเหตผล.." @role('secretary') readonly @endrole></textarea>
                        </div>
                @endrole
            @endif
        @endhasanyrole
        @hasanyrole('president|secretary')
        @role('secretary')
        <button type="button" class="btn btn-warning Merge" value="13"><small class="material-icons">crop</small> Merge Comments</button>
        <div class="alert alert-warning my-5" role="alert">
            <h4><i class="material-icons">question_answer</i> Comment</h4>
            <hr>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-13_1" name="protocol_status01" value="เหมาะสม" class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-13_1">เหมาะสม</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-13_2" name="protocol_status01" value="ไม่เหมาะสม" class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-13_2">ไม่เหมาะสม</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-13_3" name="protocol_status01" value="ไม่มีข้อมูล" class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-13_3">ไม่มีข้อมูล</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-13_4" name="protocol_status01" value="ไม่เกี่ยวข้อง" class="custom-control-input" checked>
                <label class="custom-control-label" for="merge-comment-1-13_4">ไม่เกี่ยวข้อง</label>
            </div>
        <textarea class="form-control form-control-sm auto-expand" id="Merge13" rows="4" name="merge_comment01"></textarea>
        </div>
        @endrole
        @role('president')
        @foreach ($Protocol_secretary_opic as $key => $r)
        @if($r->protocol_number == 13)
        <div class="alert alert-warning my-5" role="alert">
            <h4><i class="material-icons">question_answer</i> Comment</h4>
            <hr>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-13_1" name="protocol_status01" value="เหมาะสม" @if($r->protocol_status=="เหมาะสม") checked @endif class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-13_1">เหมาะสม</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-13_2" name="protocol_status01" value="ไม่เหมาะสม" @if($r->protocol_status=="ไม่เหมาะสม") checked @endif class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-13_2">ไม่เหมาะสม</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-13_3" name="protocol_status01" value="ไม่มีข้อมูล" @if($r->protocol_status=="ไม่มีข้อมูล") checked @endif class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-13_3">ไม่มีข้อมูล</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-13_4" name="protocol_status01" value="ไม่เกี่ยวข้อง" @if($r->protocol_status=="ไม่เกี่ยวข้อง") checked @endif class="custom-control-input" >
                <label class="custom-control-label" for="merge-comment-1-13_4">ไม่เกี่ยวข้อง</label>
            </div>
        <textarea class="form-control form-control-sm auto-expand" id="Merge13" rows="4" name="merge_comment01">{{ $r->comment }}</textarea>
        </div>
        @endif
        @endforeach
        @endrole
        @endhasanyrole
            <input type="hidden" name="protocol_id" value="{{ request()->id }}">
            <input type="hidden" name="protocol_number" value="13">
            @hasanyrole('secretary|reviewer|member')
        <button type="submit" class="btn-c material-icons topic-save">save</button>
        @endhasanyrole
            @endif
    
        </div>
    </form>
    <!-- END 13 -->