<!-- STR 04 -->
<form class="box-topic" id="Protocol_opic04">
    {{ csrf_field() }}
<div class="topic">
    @if($Protocol_docs->protocol_status==3)
    @include ('officer.inc.modal.modal-protocol-include')
    @endif
    <h2 class="title"><span>04</span>ลักษณะของงานที่ใช้สัตว์ (Discipline)</h2>
    
    <div class="row">
        <div class="col-12">
            <div class="custom-control custom-checkbox mb-1">
                <input type="checkbox" id="chk-a4-1_1" class="custom-control-input" name="topic4_1" @if($Protocol_opic04->topic4_1==1) checked @endif value="1">
                <label class="custom-control-label" for="chk-a4-1_1"><strong>4.1 งานวิจัย (Research)</strong></label>
            </div>
        </div>
        <div class="col-12">
            <div class="custom-control custom-checkbox custom-control-inline mb-1 ml-4">
                <input type="checkbox" id="chk-a4-1_2" class="custom-control-input" name="topic4_1_n1" @if($Protocol_opic04->topic4_1_n1==1) checked @endif value="1">
                <label class="custom-control-label" for="chk-a4-1_2"><strong>งานวิจัยทั่วไป (General reseach)</strong></label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline mb-1 ml-4">
                <input type="checkbox" id="chk-a4-1_3" class="custom-control-input" name="topic4_1_n2" @if($Protocol_opic04->topic4_1_n2==1) checked @endif value="1">
                <label class="custom-control-label" for="chk-a4-1_3"><strong>งานวิจัยนักศึกษาปริญญาตรี/โท/เอก (Thesis)</strong></label>
            </div>
        </div>
    </div>

    <div class="row form-group pl-4">
        <div class="col-md-12">
            <hr>
            <div class="custom-control custom-checkbox mb-1">
                <input type="checkbox" id="chk-a4-1_4" class="custom-control-input" name="topic4_1_1" @if($Protocol_opic04->topic4_1_1==1) checked @endif value="1">
                <label class="custom-control-label" for="chk-a4-1_4"><strong>4.1.1 งานวิจัยพื้นฐานทางด้านสาขา (Basic research)</strong></label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row pl-4">
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a4-1_5" class="custom-control-input" name="topic4_1_1n1" @if($Protocol_opic04->topic4_1_1n1==1) checked @endif value="1">
                        <label class="custom-control-label" for="chk-a4-1_5">การจับและควบคุมสัตว์ (Handle and restraint)</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a4-1_6" class="custom-control-input" name="topic4_1_1n2" @if($Protocol_opic04->topic4_1_1n2==1) checked @endif value="1">
                        <label class="custom-control-label" for="chk-a4-1_6">การเก็บตัวอย่างจากสัตว์ (Sample collection)</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a4-1_7" class="custom-control-input" name="topic4_1_1n3" @if($Protocol_opic04->topic4_1_1n3==1) checked @endif value="1">
                        <label class="custom-control-label" for="chk-a4-1_7">การแยกเพศ (Sexing)</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a4-1_8" class="custom-control-input" name="topic4_1_1n4" @if($Protocol_opic04->topic4_1_1n4==1) checked @endif value="1">
                        <label class="custom-control-label" for="chk-a4-1_8">การสลบสัตว์ (Anesthesia)</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a4-1_9" class="custom-control-input" name="topic4_1_1n5" @if($Protocol_opic04->topic4_1_1n5==1) checked @endif value="1">
                        <label class="custom-control-label" for="chk-a4-1_9">การทำเครื่องหมายบนตัวสัตว์ (Identification)</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a4-1_10" class="custom-control-input" name="topic4_1_1n6" @if($Protocol_opic04->topic4_1_1n6==1) checked @endif value="1">
                        <label class="custom-control-label" for="chk-a4-1_10">การทำให้สัตว์ตายอย่างสงบ (Euthanasia)</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a4-1_11" class="custom-control-input" name="topic4_1_1n7" @if($Protocol_opic04->topic4_1_1n7==1) checked @endif value="1">
                        <label class="custom-control-label" for="chk-a4-1_11">การให้สาร (Administration substance)</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a4-1_12" class="custom-control-input" name="topic4_1_1n8" @if($Protocol_opic04->topic4_1_1n8==1) checked @endif value="1">
                        <label class="custom-control-label" for="chk-a4-1_12">การทำการผ่าตัด (Surgery)</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a4-1_13" class="custom-control-input" name="topic4_1_1n9" @if($Protocol_opic04->topic4_1_1n9==1) checked @endif value="1">
                        <label class="custom-control-label" for="chk-a4-1_13">การทำการผ่าซาก (Necropsy)</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a4-1_14" class="custom-control-input" name="topic4_1_1n10" @if($Protocol_opic04->topic4_1_1n10==1) checked @endif value="1">
                        <label class="custom-control-label" for="chk-a4-1_14">อื่น ๆ (ระบุ) (Other, please specify)</label>
                    </div>
                    <input type="text" class="form-control form-control-sm" name="topic4_1_1n11" value="{{ $Protocol_opic04->topic4_1_1n11 }}" >
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <hr>
            <div class="custom-control custom-checkbox mb-1">
                <input type="checkbox" id="chk-a4-1_15" name="topic4_1_2" @if($Protocol_opic04->topic4_1_2==1) checked @endif value="1" class="custom-control-input">
                <label class="custom-control-label" for="chk-a4-1_15"><strong>4.1.2 งานวิจัยประยุกต์ (Applied research) (ระบุด้านสาขา)</strong></label>
            </div>
        </div>
    </div>

    <hr>
    <div class="row form-group">
        <div class="col-12">
            <div class="custom-control custom-checkbox mb-1">
                <input type="checkbox" id="chk-a4-2_1" name="topic4_2" @if($Protocol_opic04->topic4_2==1) checked @endif value="1" class="custom-control-input">
                <label class="custom-control-label" for="chk-a4-2_1"><strong>4.2 งานทดสอบ (Testing and / or monitoring)</strong></label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row pl-4">
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a4-2_2" name="topic4_2n1" @if($Protocol_opic04->topic4_2n1==1) checked @endif value="1" class="custom-control-input">
                        <label class="custom-control-label" for="chk-a4-2_2">อาหาร (Food)</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a4-2_3" name="topic4_2n2" @if($Protocol_opic04->topic4_2n2==1) checked @endif value="1" class="custom-control-input">
                        <label class="custom-control-label" for="chk-a4-2_3">สมุนไพร (Herbal medicine)</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a4-2_4" name="topic4_2n3" @if($Protocol_opic04->topic4_2n3==1) checked @endif value="1" class="custom-control-input">
                        <label class="custom-control-label" for="chk-a4-2_4">ยา (Drugs)</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a4-2_5" name="topic4_2n4" @if($Protocol_opic04->topic4_2n4==1) checked @endif value="1" class="custom-control-input">
                        <label class="custom-control-label" for="chk-a4-2_5">สารพิษ (Toxic substance)</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a4-2_6" name="topic4_2n5" @if($Protocol_opic04->topic4_2n5==1) checked @endif value="1" class="custom-control-input">
                        <label class="custom-control-label" for="chk-a4-2_6">น้ำ (Water)</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a4-2_7" name="topic4_2n6" @if($Protocol_opic04->topic4_2n6==1) checked @endif value="1" class="custom-control-input">
                        <label class="custom-control-label" for="chk-a4-2_7">วัคซีน (Vaccine)</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a4-2_8" name="topic4_2n7" @if($Protocol_opic04->topic4_2n7==1) checked @endif value="1" class="custom-control-input">
                        <label class="custom-control-label" for="chk-a4-2_8">เครื่องสำอาง (Cosmetic)</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a4-2_9" name="topic4_2n8" @if($Protocol_opic04->topic4_2n8==1) checked @endif value="1" class="custom-control-input">
                        <label class="custom-control-label" for="chk-a4-2_9">วินิจฉัยโรค (Diagnosis)</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a4-2_10" name="topic4_2n9" @if($Protocol_opic04->topic4_2n9==1) checked @endif value="1" class="custom-control-input">
                        <label class="custom-control-label" for="chk-a4-2_10">อื่นๆ(ระบุ)</label>
                    </div>
                    <input type="text" class="form-control form-control-sm" name="topic4_2n10" value="{{ $Protocol_opic04->topic4_2n10 }}" >
                </div>
            </div>
        </div>
    </div>


    <hr>
    <div class="row form-group">
        <div class="col-12">
            <div class="custom-control custom-checkbox mb-1">
                <input type="checkbox" id="chk-a4-3_1" class="custom-control-input" name="topic4_3" @if($Protocol_opic04->topic4_3==1) checked @endif value="1">
                <label class="custom-control-label" for="chk-a4-3_1"><strong>4.3 งานผลิตชีววัตถุ (Biological Products)</strong></label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row pl-4">
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a4-3_2" class="custom-control-input" name="topic4_3n1" @if($Protocol_opic04->topic4_3n1==1) checked @endif value="1">
                        <label class="custom-control-label" for="chk-a4-3_2">วัคซีน (Vaccine)</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a4-3_3" class="custom-control-input" name="topic4_3n2" @if($Protocol_opic04->topic4_3n2==1) checked @endif value="1">
                        <label class="custom-control-label" for="chk-a4-3_3">เอ็นไซม์(Enzymes)</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a4-3_4" class="custom-control-input" name="topic4_3n3" @if($Protocol_opic04->topic4_3n3==1) checked @endif value="1">
                        <label class="custom-control-label" for="chk-a4-3_4">แอนติบอดี (Antibodies)</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a4-3_5" class="custom-control-input" name="topic4_3n4" @if($Protocol_opic04->topic4_3n4==1) checked @endif value="1">
                        <label class="custom-control-label" for="chk-a4-3_5">คอมพลีเมนท์(Complement)</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a4-3_6" class="custom-control-input" name="topic4_3n5" @if($Protocol_opic04->topic4_3n5==1) checked @endif value="1">
                        <label class="custom-control-label" for="chk-a4-3_6">อื่นๆ(ระบุ)</label>
                    </div>
                    <input type="text" class="form-control form-control-sm" name="topic4_3n6" value="{{ $Protocol_opic04->topic4_3n6 }}"  >
                </div>
            </div>
        </div>
    </div>
    <hr>

    <div class="row form-group">
        <div class="col-12">
            <div class="custom-control custom-checkbox mb-1">
                <input type="checkbox" id="chk-a4-4_1" class="custom-control-input" name="topic4_4" @if($Protocol_opic04->topic4_4==1) checked @endif value="1">
                <label class="custom-control-label" for="chk-a4-4_1"><strong>4.4 งานการเรียนการสอน ระบุวิชา (รหัสวิชา) / Subject (Code #)</strong></label>
            </div>
            <input type="text" class="form-control form-control-sm" name="topic4_4n1" value="{{ $Protocol_opic04->topic4_4n1 }}" >
        </div>
    </div>
    <hr>

    <div class="row form-group">
        <div class="col-12">
            <div class="custom-control custom-checkbox mb-1">
                <input type="checkbox" id="chk-a4-5_1" class="custom-control-input" name="topic4_5" @if($Protocol_opic04->topic4_5==1) checked @endif value="1">
                <label class="custom-control-label" for="chk-a4-5_1"><strong>4.5 งานบริการวิชาการ (ระบุ)</strong></label>
            </div>
            <input type="text" class="form-control form-control-sm" name="topic4_5n1" value="{{ $Protocol_opic04->topic4_5n1 }}" >
        </div>
    </div>

    <input type="hidden" name="id" value="{{ $Protocol_opic03->protocol_id }}">
    @if ($Protocol_docs->protocol_status==6 || $Protocol_docs->protocol_status==7 || $Protocol_docs->protocol_status==8)
        {{-- ถ้าเป็น เลขา หรือ รีวิวให้เเสดง --}}
        @hasanyrole('committee|secretary|reviewer')
            {{-- ถ้าเกิดมีการส่งค่ารีวิว ส่งมาให้แสดง --}}
            @if($Protocol_reviewer_opic_count!=0)
                {{-- วนลูป เเสดงข้อมูล --}}
                @foreach ($Protocol_reviewer_opic as $key => $r)
                    {{-- ถ้ารูเท่ากับรีวิว เเละ protocol_number เท่ากับ 1  --}}
                    @if(auth()->user()->hasRole('reviewer') && $r->protocol_number==4) 
                        @if(auth()->user()->id == $r->reviewer_id)
                            <div class="alert alert-secondary" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4><i class="material-icons">account_circle</i> REVIEWER </h4>
                                <hr>
                                <div class="custom-control custom-control-inline custom-radio my-2">
                                    <input type="radio" id="reviewer-comment-4_1" name="protocol_status" value="เหมาะสม" @if($r->protocol_status == "เหมาะสม") checked @endif class="custom-control-input" @role('secretary') disabled @endrole >
                                    <label class="custom-control-label" for="reviewer-comment-4_1">เหมาะสม</label>
                                </div>
                                <div class="custom-control custom-control-inline custom-radio my-2">
                                    <input type="radio" id="reviewer-comment-4_2" name="protocol_status" value="ไม่เหมาะสม" @if($r->protocol_status == "ไม่เหมาะสม") checked @endif  class="custom-control-input" @role('secretary') disabled @endrole  >
                                    <label class="custom-control-label" for="reviewer-comment-4_2">ไม่เหมาะสม</label>
                                </div>
                                <div class="custom-control custom-control-inline custom-radio my-2">
                                    <input type="radio" id="reviewer-comment-4_3" name="protocol_status" value="ไม่มีข้อมูล" @if($r->protocol_status == "ไม่มีข้อมูล") checked @endif class="custom-control-input" @role('secretary') disabled @endrole  >
                                    <label class="custom-control-label" for="reviewer-comment-4_3">ไม่มีข้อมูล</label>
                                </div>
                                <div class="custom-control custom-control-inline custom-radio my-2">
                                    <input type="radio" id="reviewer-comment-4_4" name="protocol_status" value="ไม่เกี่ยวข้อง" @if($r->protocol_status == "ไม่เกี่ยวข้อง") checked @endif class="custom-control-input" @role('secretary') disabled @endrole  >
                                    <label class="custom-control-label" for="reviewer-comment-4_4">ไม่เกี่ยวข้อง</label>
                                </div>
                            <textarea class="form-control form-control-sm auto-expand" rows="4" name="comment" placeholder="กรุณาระบุเหตผล.." @role('secretary') readonly @endrole>{{ $r->comment }}</textarea>
                            </div>
                        @endif
                    @endif
                @endforeach

                @foreach ($Protocol_reviewer_opic as $key => $r)
                {{-- ถ้ารูเท่ากับรีวิว เเละ protocol_number เท่ากับ 1  --}}
                @if(auth()->user()->hasRole('secretary') && $r->protocol_number==4) 
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
                                <label class="custom-control-label" for="reviewer-comment-4_4">ไม่เกี่ยวข้อง</label>
                            </div>
                        <textarea class="form-control form-control-sm auto-expand" rows="4" name="comment04[]" placeholder="กรุณาระบุเหตผล.." @role('secretary') readonly @endrole>{{ $r->comment }}</textarea>
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
                                <input type="radio" id="reviewer-comment-4_1" name="protocol_status" value="เหมาะสม" class="custom-control-input" @role('secretary') disabled @endrole checked>
                                <label class="custom-control-label" for="reviewer-comment-4_1">เหมาะสม</label>
                            </div>
                            <div class="custom-control custom-control-inline custom-radio my-2">
                                <input type="radio" id="reviewer-comment-4_2" name="protocol_status" value="ไม่เหมาะสม" class="custom-control-input" @role('secretary') disabled @endrole  checked>
                                <label class="custom-control-label" for="reviewer-comment-4_2">ไม่เหมาะสม</label>
                            </div>
                            <div class="custom-control custom-control-inline custom-radio my-2">
                                <input type="radio" id="reviewer-comment-4_3" name="protocol_status" value="ไม่มีข้อมูล" class="custom-control-input" @role('secretary') disabled @endrole  checked>
                                <label class="custom-control-label" for="reviewer-comment-4_3">ไม่มีข้อมูล</label>
                            </div>
                            <div class="custom-control custom-control-inline custom-radio my-2">
                                <input type="radio" id="reviewer-comment-4_4" name="protocol_status" value="ไม่เกี่ยวข้อง" class="custom-control-input" @role('secretary') disabled @endrole  checked>
                                <label class="custom-control-label" for="reviewer-comment-4_4">ไม่เกี่ยวข้อง</label>
                            </div>
                        <textarea class="form-control form-control-sm auto-expand" rows="4" name="comment" placeholder="กรุณาระบุเหตผล.." @role('secretary') readonly @endrole></textarea>
                        </div>
                @endrole
            @endif
        @endhasanyrole
        @hasanyrole('president|secretary')
        @role('secretary')
        <button type="button" class="btn btn-warning Merge" value="04"><small class="material-icons">crop</small> Merge Comments</button>
        @if($Protocol_docs->protocol_v2==0)
        
        <div class="alert alert-warning my-5" role="alert">
            <h4><i class="material-icons">question_answer</i> Comment</h4>
            <hr>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-04_1" name="protocol_status01" value="เหมาะสม" class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-04_1">เหมาะสม</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-04_2" name="protocol_status01" value="ไม่เหมาะสม" class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-04_2">ไม่เหมาะสม</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-04_3" name="protocol_status01" value="ไม่มีข้อมูล" class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-04_3">ไม่มีข้อมูล</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-04_4" name="protocol_status01" value="ไม่เกี่ยวข้อง" class="custom-control-input" checked>
                <label class="custom-control-label" for="merge-comment-1-04_4">ไม่เกี่ยวข้อง</label>
            </div>
        <textarea class="form-control form-control-sm auto-expand" id="Merge04" rows="4" name="merge_comment01"></textarea>
        </div>
        @endif
        @endrole
        @hasanyrole('president|secretary')
        @if($Protocol_docs->protocol_v2=="1")
        @foreach ($Protocol_secretary_opic as $key => $r)
        @if($r->protocol_number == 4)
        <div class="alert alert-warning my-5" role="alert">
            <h4><i class="material-icons">question_answer</i> Comment</h4>
            <hr>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-04_1" name="protocol_status01" value="เหมาะสม" @if($r->protocol_status=="เหมาะสม") checked @endif class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-04_1">เหมาะสม</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-04_2" name="protocol_status01" value="ไม่เหมาะสม" @if($r->protocol_status=="ไม่เหมาะสม") checked @endif class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-04_2">ไม่เหมาะสม</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-04_3" name="protocol_status01" value="ไม่มีข้อมูล" @if($r->protocol_status=="ไม่มีข้อมูล") checked @endif class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-04_3">ไม่มีข้อมูล</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-04_4" name="protocol_status01" value="ไม่เกี่ยวข้อง" @if($r->protocol_status=="ไม่เกี่ยวข้อง") checked @endif class="custom-control-input" >
                <label class="custom-control-label" for="merge-comment-1-04_4">ไม่เกี่ยวข้อง</label>
            </div>
        <textarea class="form-control form-control-sm auto-expand" id="Merge04" rows="4" name="merge_comment01">{{ $r->comment }}</textarea>
        </div>
        @endif
        @endforeach
        @endif
        @endhasanyrole
        @endhasanyrole
        <input type="hidden" name="protocol_id" value="{{ request()->id }}">
        <input type="hidden" name="protocol_number" value="4">
        @hasanyrole('secretary|reviewer')
                <p class="topic-save2">กรุณากด Safe ทุกครั้งหลังมีการแก้ไขข้อมูล</p>
        <button type="submit" class="btn-c material-icons topic-save">save</button>
        @endhasanyrole
    @endif

</div>
</form>
<!-- END 04 -->