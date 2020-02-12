<!-- STR 12 -->
<form class="box-topic" id="Protocol_opic12">
        {{ csrf_field() }}
    <div class="topic">
        @if($Protocol_docs->protocol_status!=10) @include ('member.inc-view.modal.modal-protocol-include') @endif
        <h2 class="title"><span>12</span>แหล่งผลิตสัตว์ (Animal Resources)</h2>
        <div class="row form-group">
            <div class="col-12">
                <label><strong>12.1</strong> แหล่งที่มาของสัตว์ (Source/Vendor)</label>
                <div class="pl-4">
                    <div class="custom-control custom-checkbox mb-1">
                    <input type="checkbox" id="chk-a12-1_1" class="custom-control-input" name="ptc12_01" @if($Protocol_opic12->ptc12_01=='Y') checked @endif value="Y">
                        <label class="custom-control-label" for="chk-a12-1_1">เพาะขยายพันธุ์ขึ้นใช้เองในหน่วยงาน คณะหรือสถาบัน ระบุที่มา (In house breeding, please specify)</label>
                    </div>
                    <input type="text" class="form-control form-control-sm mb-3" name="ptc12_01_sub"  value="{{ $Protocol_opic12->ptc12_01_sub }}"  >
                </div>
                <div class="pl-4">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a12-1_2" class="custom-control-input" name="ptc12_02" @if($Protocol_opic12->ptc12_02=='Y') checked @endif value="Y">
                        <label class="custom-control-label" for="chk-a12-1_2">สั่งซื้อจากแหล่งเพาะขยายพันธุ์ต่างประเทศ ระบุที่มา (Imported, please specify</label>
                    </div>
                    <input type="text" class="form-control form-control-sm mb-3" name="ptc12_02_sub" value="{{ $Protocol_opic12->ptc12_02_sub }}" >
                </div>
                <div class="pl-4">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a12-1_3" class="custom-control-input" name="ptc12_03" @if($Protocol_opic12->ptc12_03=='Y') checked @endif value="Y">
                        <label class="custom-control-label" for="chk-a12-1_3">สั่งซื้อจากแหล่งเพาะขยายพันธุ์อื่นๆภายในประเทศ ระบุที่มา (within country, please specify</label>
                    </div>
                    <div class="pl-4">
                        <div class="custom-control custom-control-inline custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a12-1_4" class="custom-control-input" name="ptc12_03_sub_01" @if($Protocol_opic12->ptc12_03_sub_01=='Y') checked @endif value="Y">
                            <label class="custom-control-label" for="chk-a12-1_4">ศูนย์สัตว์ทดลองแห่งชาติ</label>
                        </div>
                        <div class="custom-control custom-control-inline custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a12-1_5" class="custom-control-input" name="ptc12_03_sub_02" @if($Protocol_opic12->ptc12_03_sub_02=='Y') checked @endif value="Y">
                            <label class="custom-control-label" for="chk-a12-1_5">บริษัท โนมูระ สยามอินเตอร์เนชั่นแนล</label>
                        </div>
                        <div class="custom-control custom-control-inline custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a12-1_6" class="custom-control-input" name="ptc12_03_sub_03" @if($Protocol_opic12->ptc12_03_sub_03=='Y') checked @endif value="Y">
                            <label class="custom-control-label" for="chk-a12-1_6">อื่นๆ โปรดระบุ<label>
                        </div>
                        <input type="text" class="form-control form-control-sm mb-3" name="ptc12_03_sub_04" value="{{ $Protocol_opic12->ptc12_03_sub_04 }}"  >
                    </div>
                </div>
                <div class="pl-4">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a12-1_7" class="custom-control-input" name="ptc12_04" @if($Protocol_opic12->ptc12_04=='Y') checked @endif value="Y">
                        <label class="custom-control-label" for="chk-a12-1_7">อื่นๆ ระบุ (Other, please specify)</label>
                    </div>
                    <input type="text" class="form-control form-control-sm mb-3" name="ptc12_03_sub" value="{{ $Protocol_opic12->ptc12_012_03_sub }}"  >
                </div>
                <hr>
            </div>
        </div>

        <div class="row form-group">
            <div class="col-12">
                <label><strong>12.2</strong> คุณภาพของสัตว์จากแหล่งผลิต (Quality of Source/Vendor)</label>
                <div class="pl-4">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a12-2_1" class="custom-control-input" name="ptc12_05_01" @if($Protocol_opic12->ptc12_05_01=='Y') checked @endif value="Y">
                        <label class="custom-control-label" for="chk-a12-2_1">มีหลักฐานแสดงสืบสายพันธุ์ และความคงที่ทางพันธุกรรมของสายพันธุ์ที่ต้องการตรวจสอบ (Have a genetic monitoring system)</label>
                    </div>
                </div>
                <div class="pl-4">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a12-2_2" class="custom-control-input" name="ptc12_05_02" @if($Protocol_opic12->ptc12_05_02=='Y') checked @endif value="Y">
                        <label class="custom-control-label" for="chk-a12-2_2">มีหลักฐานตรวจสอบได้ว่าเป็นสัตว์เลี้ยงด้วยระบบอนามัยเข้ม (Strict hygienic conventional system)</label>
                    </div>
                </div>
                <div class="pl-4">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a12-2_3" class="custom-control-input" name="ptc12_05_03" @if($Protocol_opic12->ptc12_05_03=='Y') checked @endif value="Y">
                        <label class="custom-control-label" for="chk-a12-2_3">มีหลักฐานตรวจสอบได้ว่าเป็นสัตว์เลี้ยงด้วยระบบปลอดเชื้อจำเพาะ (SPF System)</label>
                    </div>
                </div>
                <div class="pl-4">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a12-2_4" class="custom-control-input" name="ptc12_05_04" @if($Protocol_opic12->ptc12_05_04=='Y') checked @endif value="Y">
                        <label class="custom-control-label" for="chk-a12-2_4">มีหลักฐานตรวจสอบได้ว่าเป็นสัตว์เลี้ยงด้วยระบบปลอดเชื้อสมบูรณ์ (Germ Free system)</label>
                    </div>
                </div>
                <div class="pl-4">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a12-2_5" class="custom-control-input" name="ptc12_05_05" @if($Protocol_opic12->ptc12_05_05=='Y') checked @endif value="Y">
                        <label class="custom-control-label" for="chk-a12-2_5">ไม่มีหลักฐาน หรือเอกสารรับรอง (no any document that certified genetic and health monitoring)</label>
                    </div>
                </div>
                <div class="pl-4">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a12-2_6" class="custom-control-input" name="ptc12_05_06" @if($Protocol_opic12->ptc12_05_06=='Y') checked @endif value="Y">
                        <label class="custom-control-label" for="chk-a12-2_6">อื่น ๆ (ระบุ) (Other, please specify)</label>
                    </div>
                    <input type="text" class="form-control form-control-sm mb-3" name="ptc12_05_012_sub" value="{{ $Protocol_opic12->ptc12_012_03_sub }}"  >
                </div>
                <hr>
            </div>
        </div>

        <div class="row form-group">
            <div class="col-12">
                <label><strong>12.3</strong> ศักยภาพของแหล่งผลิต (Potential supply of Source/Vendor)</label>
                <div class="pl-4">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a12-3_1" class="custom-control-input" name="ptc12_012_01" @if($Protocol_opic12->ptc12_012_01=='Y') checked @endif value="Y">
                        <label class="custom-control-label" for="chk-a12-3_1">มีวิธีเพาะขยายพันธุ์ที่แสดงว่าสามารถเพาะขยายพันธุ์สายพันธุ์สัตว์ที่ต้องการได้ทุกรูปแบบของเพศ อายุ น้ำหนัก และจำนวนตามที่ต้องการ (Provide Stock/strain, sex, age, weigh and number)</label>
                    </div>
                </div>
                <div class="pl-4">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a12-3_2" class="custom-control-input" name="ptc12_012_02" @if($Protocol_opic12->ptc12_012_02=='Y') checked @endif value="Y">
                        <label class="custom-control-label" for="chk-a12-3_2">สามารถจัดบริการส่งโดยใช้มาตรฐานการขนส่งสัตว์สากล (Provide international standard for animal transportation)</label>
                    </div>
                </div>
                <div class="pl-4">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a12-3_3" class="custom-control-input" name="ptc12_012_03" @if($Protocol_opic12->ptc12_012_03=='Y') checked @endif value="Y">
                        <label class="custom-control-label" for="chk-a12-3_3">อื่น ๆ (ระบุ) (Other, please specify)</label>
                    </div>
                <input type="text" class="form-control form-control-sm mb-3" name="ptc12_012_03_sub" value="{{ $Protocol_opic12->ptc12_012_03_sub }}"  >
                </div>
            </div>
        </div>

        @if ($Protocol_docs->protocol_status==6 || $Protocol_docs->protocol_status==7 || $Protocol_docs->protocol_status==8 || $Protocol_docs->protocol_status==15)
        {{-- ถ้าเป็น เลขา หรือ รีวิวให้เเสดง --}}
        @hasanyrole('committee|secretary|reviewer')
            {{-- ถ้าเกิดมีการส่งค่ารีวิว ส่งมาให้แสดง --}}
            @if($Protocol_reviewer_opic_count!=0)
                {{-- วนลูป เเสดงข้อมูล --}}
                @foreach ($Protocol_reviewer_opic as $key => $r)
                    {{-- ถ้ารูเท่ากับรีวิว เเละ protocol_number เท่ากับ 1  --}}
                    @if(auth()->user()->hasRole('reviewer') && $r->protocol_number==12) 
                        @if(auth()->user()->id == $r->reviewer_id)
                            <div class="alert alert-secondary" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4><i class="material-icons">account_circle</i> REVIEWER </h4>
                                <hr>
                                <div class="custom-control custom-control-inline custom-radio my-2">
                                    <input type="radio" id="reviewer-comment-12_1" name="protocol_status" value="เหมาะสม" @if($r->protocol_status == "เหมาะสม") checked @endif class="custom-control-input" @role('secretary') disabled @endrole >
                                    <label class="custom-control-label" for="reviewer-comment-12_1">เหมาะสม</label>
                                </div>
                                <div class="custom-control custom-control-inline custom-radio my-2">
                                    <input type="radio" id="reviewer-comment-12_2" name="protocol_status" value="ไม่เหมาะสม" @if($r->protocol_status == "ไม่เหมาะสม") checked @endif  class="custom-control-input" @role('secretary') disabled @endrole  >
                                    <label class="custom-control-label" for="reviewer-comment-12_2">ไม่เหมาะสม</label>
                                </div>
                                <div class="custom-control custom-control-inline custom-radio my-2">
                                    <input type="radio" id="reviewer-comment-12_3" name="protocol_status" value="ไม่มีข้อมูล" @if($r->protocol_status == "ไม่มีข้อมูล") checked @endif class="custom-control-input" @role('secretary') disabled @endrole  >
                                    <label class="custom-control-label" for="reviewer-comment-12_3">ไม่มีข้อมูล</label>
                                </div>
                                <div class="custom-control custom-control-inline custom-radio my-2">
                                    <input type="radio" id="reviewer-comment-12_4" name="protocol_status" value="ไม่เกี่ยวข้อง" @if($r->protocol_status == "ไม่เกี่ยวข้อง") checked @endif class="custom-control-input" @role('secretary') disabled @endrole  >
                                    <label class="custom-control-label" for="reviewer-comment-12_4">ไม่เกี่ยวข้อง</label>
                                </div>
                            <textarea class="form-control form-control-sm auto-expand" rows="4" name="comment" placeholder="กรุณาระบุเหตผล.." @role('secretary') readonly @endrole>{{ $r->comment }}</textarea>
                            </div>
                        @endif
                    @endif
                @endforeach

                @foreach ($Protocol_reviewer_opic as $key => $r)
                {{-- ถ้ารูเท่ากับรีวิว เเละ protocol_number เท่ากับ 1  --}}
                @if(auth()->user()->hasRole('secretary') && $r->protocol_number==12) 
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
                                <label class="custom-control-label" for="reviewer-comment-12_4">ไม่เกี่ยวข้อง</label>
                            </div>
                        <textarea class="form-control form-control-sm auto-expand" rows="4" name="comment12[]" placeholder="กรุณาระบุเหตผล.." @role('secretary') readonly @endrole>{{ $r->comment }}</textarea>
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
                                <input type="radio" id="reviewer-comment-12_1" name="protocol_status" value="เหมาะสม" class="custom-control-input" @role('secretary') disabled @endrole checked>
                                <label class="custom-control-label" for="reviewer-comment-12_1">เหมาะสม</label>
                            </div>
                            <div class="custom-control custom-control-inline custom-radio my-2">
                                <input type="radio" id="reviewer-comment-12_2" name="protocol_status" value="ไม่เหมาะสม" class="custom-control-input" @role('secretary') disabled @endrole  checked>
                                <label class="custom-control-label" for="reviewer-comment-12_2">ไม่เหมาะสม</label>
                            </div>
                            <div class="custom-control custom-control-inline custom-radio my-2">
                                <input type="radio" id="reviewer-comment-12_3" name="protocol_status" value="ไม่มีข้อมูล" class="custom-control-input" @role('secretary') disabled @endrole  checked>
                                <label class="custom-control-label" for="reviewer-comment-12_3">ไม่มีข้อมูล</label>
                            </div>
                            <div class="custom-control custom-control-inline custom-radio my-2">
                                <input type="radio" id="reviewer-comment-12_4" name="protocol_status" value="ไม่เกี่ยวข้อง" class="custom-control-input" @role('secretary') disabled @endrole  checked>
                                <label class="custom-control-label" for="reviewer-comment-12_4">ไม่เกี่ยวข้อง</label>
                            </div>
                        <textarea class="form-control form-control-sm auto-expand" rows="4" name="comment" placeholder="กรุณาระบุเหตผล.." @role('secretary') readonly @endrole></textarea>
                        </div>
                @endrole
            @endif
        @endhasanyrole
        @hasanyrole('president|secretary')
        @role('secretary')
        <button type="button" class="btn btn-warning Merge" value="12"><small class="material-icons">crop</small> Merge Comments</button>
        <div class="alert alert-warning my-5" role="alert">
            <h4><i class="material-icons">question_answer</i> Comment</h4>
            <hr>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-12_1" name="protocol_status01" value="เหมาะสม" class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-12_1">เหมาะสม</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-12_2" name="protocol_status01" value="ไม่เหมาะสม" class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-12_2">ไม่เหมาะสม</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-12_3" name="protocol_status01" value="ไม่มีข้อมูล" class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-12_3">ไม่มีข้อมูล</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-12_4" name="protocol_status01" value="ไม่เกี่ยวข้อง" class="custom-control-input" checked>
                <label class="custom-control-label" for="merge-comment-1-12_4">ไม่เกี่ยวข้อง</label>
            </div>
        <textarea class="form-control form-control-sm auto-expand" id="Merge12" rows="4" name="merge_comment01"></textarea>
        </div>
        @endrole
        @role('president')
        @foreach ($Protocol_secretary_opic as $key => $r)
        @if($r->protocol_number == 12)
        <div class="alert alert-warning my-5" role="alert">
            <h4><i class="material-icons">question_answer</i> Comment</h4>
            <hr>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-12_1" name="protocol_status01" value="เหมาะสม" @if($r->protocol_status=="เหมาะสม") checked @endif class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-12_1">เหมาะสม</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-12_2" name="protocol_status01" value="ไม่เหมาะสม" @if($r->protocol_status=="ไม่เหมาะสม") checked @endif class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-12_2">ไม่เหมาะสม</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-12_3" name="protocol_status01" value="ไม่มีข้อมูล" @if($r->protocol_status=="ไม่มีข้อมูล") checked @endif class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-12_3">ไม่มีข้อมูล</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-12_4" name="protocol_status01" value="ไม่เกี่ยวข้อง" @if($r->protocol_status=="ไม่เกี่ยวข้อง") checked @endif class="custom-control-input" >
                <label class="custom-control-label" for="merge-comment-1-12_4">ไม่เกี่ยวข้อง</label>
            </div>
        <textarea class="form-control form-control-sm auto-expand" id="Merge12" rows="4" name="merge_comment01">{{ $r->comment }}</textarea>
        </div>
        @endif
        @endforeach
        @endrole
        @endhasanyrole
        <input type="hidden" name="protocol_id" value="{{ request()->id }}">
        <input type="hidden" name="protocol_number" value="12">
        @hasanyrole('secretary|reviewer|member')
        <button type="submit" class="btn-c material-icons topic-save">save</button>
        @endhasanyrole
        @endif
    </div>
</form>
<!-- END 12 -->