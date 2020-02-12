<!-- STR 02 -->
<form class="box-topic" id="Protocol_opic02" >
    {{ csrf_field() }}
    <div class="topic">
        
        <h2 class="title"><span>02</span>รายชื่อหัวหน้าโครงการและผู้ร่วมโครงการ (List of Principal Investigator and Co-Investigators)</h2>

        <div class="container border py-3">
            <div class="row form-group">
                <h3 class="col-12">2.1 ชื่อ-นามสกุล (Name-Surname)</h3>
                <div class="col-lg-6">
                    <div class="lang-group mb-2">
                        <small>TH</small>
                        <input type="text" class="form-control form-control-sm" placeholder="ชื่อ" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="lang-group mb-2">
                        <small>TH</small>
                        <input type="text" class="form-control form-control-sm" placeholder="นามสกุล" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="lang-group mb-2">
                        <small>EN</small>
                        <input type="text" class="form-control form-control-sm" placeholder="Name" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="lang-group mb-2">
                        <small>EN</small>
                        <input type="text" class="form-control form-control-sm" placeholder="Surname" required>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <label class="col-12">สถานภาพ</label>
                <div class="col-lg-6">
                    <select id="pi_item" class="form-control form-control-sm mb-2" required>
                        <option></option>
                        <option value="pi_1">อาจารย์ (Lecturer)</option>
                        <option value="pi_2">เจ้าเหน้าที่ของคณะ (Academic staff)</option>
                        <option value="pi_3">นักศึกษา (Student) ตรี (Bachelor degree)</option>
                        <option value="pi_4">นักศึกษา (Student) โท (Master degree)</option>
                        <option value="pi_5">นักศึกษา (Student) เอก (Doctoral degree)</option>
                        <option value="pi_6">อื่นๆ โปรดระบุ (Other Please describe)</option>
                    </select>
                </div>
                <div class="col-lg-6">
                    <input id="pi_other" type="text" class="form-control form-control-sm mb-2" required>
                </div>
            </div>
            <div class="row form-group">
                <label class="col-12">ตําแหน่งทางวิชาการ (Align academic)</label>
                <div class="col-lg-6">
                    <div class="lang-group mb-2">
                        <small>TH</small>
                        <input type="text" class="form-control form-control-sm" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="lang-group mb-2">
                        <small>EN</small>
                        <input type="text" class="form-control form-control-sm" required>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <label class="col-12">ตําแหน่งอื่นๆ (Other position)</label>
                <div class="col-lg-6">
                    <div class="lang-group mb-2">
                        <small>TH</small>
                        <input type="text" class="form-control form-control-sm" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="lang-group mb-2">
                        <small>EN</small>
                        <input type="text" class="form-control form-control-sm" required>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <label class="col-12">สถานที่ติดต่อ (Contact address)</label>
                <div class="col-lg-6">
                    <div class="lang-group mb-2">
                        <small>TH</small>
                        <textarea class="form-control form-control-sm auto-expand" rows="1" required></textarea>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="lang-group mb-2">
                        <small>EN</small>
                        <textarea class="form-control form-control-sm auto-expand" rows="1" required></textarea>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-4">
                    <label>โทรศัพท์ (Tel.)</label>
                    <input type="text" class="form-control form-control-sm" required>
                </div>
                <div class="col-lg-4">
                    <label>โทรสาร (Fax.)</label>
                    <input type="text" class="form-control form-control-sm" required>
                </div>
                <div class="col-lg-4">
                    <label>E-mail</label>
                    <input type="email" class="form-control form-control-sm" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-12">
                    <hr>
                    <h3>หน้าที่รับผิดชอบ</h3>
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a2-1_1" class="custom-control-input">
                        <label class="custom-control-label" for="chk-a2-1_1">หัวหน้าโครงการที่ขอใช้สัตว์ (Name of Principal Investigator, PI)</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a2-1_2" class="custom-control-input">
                        <label class="custom-control-label" for="chk-a2-1_2">สัตวแพทย์ประจำหน่วย/สัตวแพทย์ประจำโครงการ (Veterinarian)</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a2-1_3" class="custom-control-input">
                        <label class="custom-control-label" for="chk-a2-1_3">ผู้ประสานงานโครงการและผู้รับผิดชอบกรณีเกิดเหตุฉุกเฉิน (Project coordinator/Contact Person in Case of Emergency)</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="chk-a2-1_4" class="custom-control-input">
                        <label class="custom-control-label" for="chk-a2-1_4">ผู้รับผิดชอบปฏิบัติงานกับสัตว์ (List all individuals who will be working with the animals on this project)</label>
                    </div>
                </div>
            </div>
            <div class="px-4" id="lab_animal_exp">
                <div class="row">
                    <div class="col-12">
                        <hr>
                        <h6>ประสบการณ์เกี่ยวกับการปฏิบัติงานด้านสัตว์ทดลอง (Qualifications of Personnel)</h6>
                        <hr>
                    </div>
                    <div class="col-12">
                        <label>ใบอนุญาตใช้สัตว์เพื่องานทางวิทยาศาสตร์) / ใบอนุญาติผลิตสัตว์ (แนบเอกสาร)</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" multiple required>
                    </div>
                    <div class="col-12"><hr></div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Recently date of animal ethical training</label>
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                                <div class="input-group-text material-icons">date_range</div>
                            </div>
                            <input type="text" class="form-control form-control-sm input-date-single" required>
                        </div>
                    </div>
                    <div class="col-12"><hr></div>
                </div>
                <div class="row">
                    <label class="col-12">หัตถการที่รับผิดชอบ</label>
                    <div class="col-lg-6">
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a2-2_1" class="custom-control-input">
                            <label class="custom-control-label" for="chk-a2-2_1">การจับและควบคุมสัตว์ (Handle and restraint)</label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a2-2_2" class="custom-control-input">
                            <label class="custom-control-label" for="chk-a2-2_2">การเก็บตัวอย่างจากสัตว์ (Sample collection)</label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a2-2_3" class="custom-control-input">
                            <label class="custom-control-label" for="chk-a2-2_3">การแยกเพศ (Sexing)</label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a2-2_4" class="custom-control-input">
                            <label class="custom-control-label" for="chk-a2-2_4">การสลบสัตว์ (Anesthesia)</label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a2-2_5" class="custom-control-input">
                            <label class="custom-control-label" for="chk-a2-2_5">การทำเครื่องหมายบนตัวสัตว์ (Identification)</label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a2-2_6" class="custom-control-input">
                            <label class="custom-control-label" for="chk-a2-2_6">การทำให้สัตว์ตายอย่างสงบ (Euthanasia)</label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a2-2_7" class="custom-control-input">
                            <label class="custom-control-label" for="chk-a2-2_7">การให้สาร (Administration substance)</label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a2-2_8" class="custom-control-input">
                            <label class="custom-control-label" for="chk-a2-2_8">การทำการผ่าตัด (Surgery)</label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a2-2_9" class="custom-control-input">
                            <label class="custom-control-label" for="chk-a2-2_9">การทำการผ่าซาก (Necropsy)</label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a2-2_10" class="custom-control-input">
                            <label class="custom-control-label" for="chk-a2-2_10">อื่น ๆ (ระบุ) (Other, please specify)</label>
                        </div>
                        <input type="text" class="form-control form-control-sm" required>
                    </div>
                    <div class="col-12"><hr></div>
                </div>
                <div class="row">
                    <label class="col-12">ระบุว่าท่านมีประสบการณ์การทำเทคนิคต่างๆ กับสัตว์ที่ใช้ในโครงการมากน้อยอย่างไร? กรณีที่ยังไม่มีประสบการณ์กำลังจะเข้ารับการอบรม (หัวข้อ/วันที่/จัดโดย) (List experience of all individuals who will be working with the animals on this project. Include all investigators, students, post-doctoral researchers, research associates and laboratory assistants who will actually work with the animals. If personnel do not have experience, state how they will be trained.)</label>
                    <div class="col-12">
                        <textarea class="form-control form-control-sm" rows="4" required></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="container p-0">
            <div class="row">
                <div class="col">
                    <hr class="mt-5 mb-3">
                    <button class="btn-c material-icons bg-danger text-light d-block mx-auto">add</button>
                    <hr class="mt-3 mb-5">
                </div>
            </div>
        </div>

        <div class="container border bg-light py-3" id="pi_student">
            <div class="row">
                <h6 class="col-12 mb-3">ชื่ออาจารย์ที่ปรึกษาวิทยานิพนธ์ (Advisor)<br><small>(กรณีนักศึกษาเป็นหัวหน้าโครงการ (In case of principle investigator is student))</small></h6>
                <div class="col-lg-6">
                    <div class="lang-group mb-2">
                        <small>TH</small>
                        <input type="text" class="form-control form-control-sm" placeholder="ชื่อ" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="lang-group mb-2">
                        <small>TH</small>
                        <input type="text" class="form-control form-control-sm" placeholder="นามสกุล" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="lang-group mb-2">
                        <small>EN</small>
                        <input type="text" class="form-control form-control-sm" placeholder="Name" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="lang-group mb-2">
                        <small>EN</small>
                        <input type="text" class="form-control form-control-sm" placeholder="Surname" required>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <label class="col-12">ตําแหน่ง (Align academic/other position)</label>
                <div class="col-lg-6">
                    <div class="lang-group mb-2">
                        <small>TH</small>
                        <input type="text" class="form-control form-control-sm" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="lang-group mb-2">
                        <small>EN</small>
                        <input type="text" class="form-control form-control-sm" required>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <label class="col-12">สถานที่ติดต่อ (Contact address)</label>
                <div class="col-lg-6">
                    <div class="lang-group mb-2">
                        <small>TH</small>
                        <textarea class="form-control form-control-sm auto-expand" rows="1" required></textarea>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="lang-group mb-2">
                        <small>EN</small>
                        <textarea class="form-control form-control-sm auto-expand" rows="1" required></textarea>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-4">
                    <label>โทรศัพท์ (Tel.)</label>
                    <input type="text" class="form-control form-control-sm" required>
                </div>
                <div class="col-lg-4">
                    <label>โทรสาร (Fax.)</label>
                    <input type="text" class="form-control form-control-sm" required>
                </div>
                <div class="col-lg-4">
                    <label>E-mail</label>
                    <input type="email" class="form-control form-control-sm" required>
                </div>
            </div>
        </div>

        @if ($Protocol_docs->protocol_status==6 || $Protocol_docs->protocol_status==7 || $Protocol_docs->protocol_status==8)
        {{-- ถ้าเป็น เลขา หรือ รีวิวให้เเสดง --}}
        @hasanyrole('committee|secretary|reviewer')
            {{-- ถ้าเกิดมีการส่งค่ารีวิว ส่งมาให้แสดง --}}
            @if($Protocol_reviewer_opic_count!=0)
                {{-- วนลูป เเสดงข้อมูล --}}
                @foreach ($Protocol_reviewer_opic as $key => $r)
                    {{-- ถ้ารูเท่ากับรีวิว เเละ protocol_number เท่ากับ 1  --}}
                    @if(auth()->user()->hasRole('reviewer') && $r->protocol_number==2) 
                        @if(auth()->user()->id == $r->reviewer_id)
                            <div class="alert alert-secondary" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4><i class="material-icons">account_circle</i> REVIEWER </h4>
                                <hr>
                                <div class="custom-control custom-control-inline custom-radio my-2">
                                    <input type="radio" id="reviewer-comment-1_1" name="protocol_status" value="เหมาะสม" @if($r->protocol_status == "เหมาะสม") checked @endif class="custom-control-input" @role('secretary') disabled @endrole >
                                    <label class="custom-control-label" for="reviewer-comment-1_1">เหมาะสม</label>
                                </div>
                                <div class="custom-control custom-control-inline custom-radio my-2">
                                    <input type="radio" id="reviewer-comment-1_2" name="protocol_status" value="ไม่เหมาะสม" @if($r->protocol_status == "ไม่เหมาะสม") checked @endif  class="custom-control-input" @role('secretary') disabled @endrole  >
                                    <label class="custom-control-label" for="reviewer-comment-1_2">ไม่เหมาะสม</label>
                                </div>
                                <div class="custom-control custom-control-inline custom-radio my-2">
                                    <input type="radio" id="reviewer-comment-1_3" name="protocol_status" value="ไม่มีข้อมูล" @if($r->protocol_status == "ไม่มีข้อมูล") checked @endif class="custom-control-input" @role('secretary') disabled @endrole  >
                                    <label class="custom-control-label" for="reviewer-comment-1_3">ไม่มีข้อมูล</label>
                                </div>
                                <div class="custom-control custom-control-inline custom-radio my-2">
                                    <input type="radio" id="reviewer-comment-1_4" name="protocol_status" value="ไม่เกี่ยวข้อง" @if($r->protocol_status == "ไม่เกี่ยวข้อง") checked @endif class="custom-control-input" @role('secretary') disabled @endrole  >
                                    <label class="custom-control-label" for="reviewer-comment-1_4">ไม่เกี่ยวข้อง</label>
                                </div>
                            <textarea class="form-control form-control-sm auto-expand" rows="4" name="comment" placeholder="กรุณาระบุเหตผล.." @role('secretary') readonly @endrole>{{ $r->comment }}</textarea>
                            </div>
                        @endif
                    @endif
                @endforeach

                @foreach ($Protocol_reviewer_opic as $key => $r)
                {{-- ถ้ารูเท่ากับรีวิว เเละ protocol_number เท่ากับ 1  --}}
                @if(auth()->user()->hasRole('secretary') && $r->protocol_number==2) 
                        <div class="alert alert-secondary" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4><i class="material-icons">account_circle</i> REVIEWER : {{ $r->usersName->name }}</h4>
                            <hr>
                            <div class="custom-control custom-control-inline custom-radio my-2">
                                <input type="radio" id="reviewer-comment{{ $key }}-1_1" name="protocol_status{{ $key }}" value="เหมาะสม"   @if($r->protocol_status == "เหมาะสม") checked @endif class="custom-control-input" @role('secretary') disabled @endrole>
                                <label class="custom-control-label" for="reviewer-comment{{ $key }}-1_1">เหมาะสม</label>
                            </div>
                            <div class="custom-control custom-control-inline custom-radio my-2">
                                <input type="radio" id="reviewer-comment{{ $key }}-1_2" name="protocol_status{{ $key }}" value="ไม่เหมาะสม" @if($r->protocol_status == "ไม่เหมาะสม") checked @endif  class="custom-control-input" @role('secretary') disabled @endrole >
                                <label class="custom-control-label" for="reviewer-comment{{ $key }}-1_2">ไม่เหมาะสม</label>
                            </div>
                            <div class="custom-control custom-control-inline custom-radio my-2">
                                <input type="radio" id="reviewer-comment{{ $key }}-1_3" name="protocol_status{{ $key }}" value="ไม่มีข้อมูล"   @if($r->protocol_status == "ไม่มีข้อมูล") checked @endif class="custom-control-input" @role('secretary') disabled @endrole >
                                <label class="custom-control-label" for="reviewer-comment{{ $key }}-1_3">ไม่มีข้อมูล</label>
                            </div>
                            <div class="custom-control custom-control-inline custom-radio my-2">
                                <input type="radio" id="reviewer-comment{{ $key }}-1_4" name="protocol_status{{ $key }}" value="ไม่เกี่ยวข้อง" @if($r->protocol_status == "ไม่เกี่ยวข้อง") checked @endif class="custom-control-input" @role('secretary') disabled @endrole>
                                <label class="custom-control-label" for="reviewer-comment-1_4">ไม่เกี่ยวข้อง</label>
                            </div>
                        <textarea class="form-control form-control-sm auto-expand" rows="4" name="comment02[]" placeholder="กรุณาระบุเหตผล.." @role('secretary') readonly @endrole>{{ $r->comment }}</textarea>
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
                                <input type="radio" id="reviewer-comment-1_1" name="protocol_status" value="เหมาะสม" class="custom-control-input" @role('secretary') disabled @endrole checked>
                                <label class="custom-control-label" for="reviewer-comment-1_1">เหมาะสม</label>
                            </div>
                            <div class="custom-control custom-control-inline custom-radio my-2">
                                <input type="radio" id="reviewer-comment-1_2" name="protocol_status" value="ไม่เหมาะสม" class="custom-control-input" @role('secretary') disabled @endrole  checked>
                                <label class="custom-control-label" for="reviewer-comment-1_2">ไม่เหมาะสม</label>
                            </div>
                            <div class="custom-control custom-control-inline custom-radio my-2">
                                <input type="radio" id="reviewer-comment-1_3" name="protocol_status" value="ไม่มีข้อมูล" class="custom-control-input" @role('secretary') disabled @endrole  checked>
                                <label class="custom-control-label" for="reviewer-comment-1_3">ไม่มีข้อมูล</label>
                            </div>
                            <div class="custom-control custom-control-inline custom-radio my-2">
                                <input type="radio" id="reviewer-comment-1_4" name="protocol_status" value="ไม่เกี่ยวข้อง" class="custom-control-input" @role('secretary') disabled @endrole  checked>
                                <label class="custom-control-label" for="reviewer-comment-1_4">ไม่เกี่ยวข้อง</label>
                            </div>
                        <textarea class="form-control form-control-sm auto-expand" rows="4" name="comment" placeholder="กรุณาระบุเหตผล.." @role('secretary') readonly @endrole></textarea>
                        </div>
                @endrole
            @endif
        @endhasanyrole
        @hasanyrole('president|secretary')
        @role('secretary')
        <button type="button" class="btn btn-warning Merge" value="02"><small class="material-icons">crop</small> Merge Comments</button>
        <div class="alert alert-warning my-5" role="alert">
            <h4><i class="material-icons">question_answer</i> Comment</h4>
            <hr>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-02_1" name="protocol_status01" value="เหมาะสม" class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-02_1">เหมาะสม</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-02_2" name="protocol_status01" value="ไม่เหมาะสม" class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-02_2">ไม่เหมาะสม</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-02_3" name="protocol_status01" value="ไม่มีข้อมูล" class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-02_3">ไม่มีข้อมูล</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-02_4" name="protocol_status01" value="ไม่เกี่ยวข้อง" class="custom-control-input" checked>
                <label class="custom-control-label" for="merge-comment-1-02_4">ไม่เกี่ยวข้อง</label>
            </div>
        <textarea class="form-control form-control-sm auto-expand" id="Merge02" rows="4" name="merge_comment01"></textarea>
        </div>
        @endrole
        @role('president')
        @foreach ($Protocol_secretary_opic as $key => $r)
        @if($r->protocol_number == 2)
        <div class="alert alert-warning my-5" role="alert">
            <h4><i class="material-icons">question_answer</i> Comment</h4>
            <hr>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-02_1" name="protocol_status01" value="เหมาะสม" @if($r->protocol_status=="เหมาะสม") checked @endif class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-02_1">เหมาะสม</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-02_2" name="protocol_status01" value="ไม่เหมาะสม" @if($r->protocol_status=="ไม่เหมาะสม") checked @endif class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-02_2">ไม่เหมาะสม</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-02_3" name="protocol_status01" value="ไม่มีข้อมูล" @if($r->protocol_status=="ไม่มีข้อมูล") checked @endif class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-02_3">ไม่มีข้อมูล</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-02_4" name="protocol_status01" value="ไม่เกี่ยวข้อง" @if($r->protocol_status=="ไม่เกี่ยวข้อง") checked @endif class="custom-control-input" >
                <label class="custom-control-label" for="merge-comment-1-02_4">ไม่เกี่ยวข้อง</label>
            </div>
        <textarea class="form-control form-control-sm auto-expand" id="Merge02" rows="4" name="merge_comment01">{{ $r->comment }}</textarea>
        </div>
        @endif
        @endforeach
        @endrole
        @endhasanyrole
        <input type="hidden" name="protocol_id" value="{{ request()->id }}">
        <input type="hidden" name="protocol_number" value="2">
        @hasanyrole('secretary|reviewer')
        <button type="submit" class="btn-c material-icons topic-save">save</button>
        @endhasanyrole
        @endif

    </div>
</form>
<!-- END 02 -->