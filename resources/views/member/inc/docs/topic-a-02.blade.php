<!-- STR 02 -->
<form class="box-topic" id="Protocol_opic02">
        {{ csrf_field() }}
        <div class="topic">
            <h2 class="title"><span>02</span>รายชื่อหัวหน้าโครงการและผู้ร่วมโครงการ (List of Principal Investigator and
                Co-Investigators)</h2>
            <div class="fromin number" >
            <div class="container border py-3">
                <div class="row form-group">
                    <h3 class="col-12">2.1 ชื่อ-นามสกุล (Name-Surname)</h3>
                    <div class="col-lg-6">
                        <div class="lang-group mb-2">
                            <small>TH</small>
                        <input type="text" class="form-control form-control-sm" name="Name_th[]" autocomplete="off" value="{{ $UsersDetail->firstNameTh }}"
                                required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="lang-group mb-2">
                            <small>TH</small>
                            <input type="text" class="form-control form-control-sm" name="Surname_th[]" value="{{ $UsersDetail->firstNameEn }}" autocomplete="off"
                                required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="lang-group mb-2">
                            <small>EN</small>
                            <input type="text" class="form-control form-control-sm" name="Name_en[]" value="{{ $UsersDetail->lastNameTh }}" autocomplete="off"
                                required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="lang-group mb-2">
                            <small>EN</small>
                            <input type="text" class="form-control form-control-sm" name="Surname_en[]" value="{{ $UsersDetail->lastNameEn }}" autocomplete="off"
                                required>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                <label class="col-12">สถานภาพ</label>
                    <div class="col-lg-6">
                        <select class="form-control form-control-sm mb-2 pi_item" id="pi_item1 " name="opic02_status[]" data-id="1" required>
                            <option value="">กรุณาเลือก</option>
                            @foreach ($StatusUser as $r)
                            <option value="{{ $r->id }}" @if($r->id==$UsersDetail->statusUser ) selected @endif>{{ $r->name }}</option>
                            @endforeach
    
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <input type="text" class="form-control form-control-sm mb-2 pi_other" name="opic02_Other[]" value="{{ $UsersDetail->alignAcademicTh }}" id="pi_other1"
                            value=" ">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-12">ตําแหน่งทางวิชาการ (Align academic)</label>
                    <div class="col-lg-6">
                        <div class="lang-group mb-2">
                            <small>TH</small>
                            <input type="text" class="form-control form-control-sm" name="opic02_Align_th[]" value="{{ $UsersDetail->alignAcademicTh }}"
                                autocomplete="off" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="lang-group mb-2">
                            <small>EN</small>
                            <input type="text" class="form-control form-control-sm" name="opic02_Align_en[]" value="{{ $UsersDetail->alignAcademicEn }}"
                                autocomplete="off" required>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-12">ตําแหน่งอื่นๆ (Other position)</label>
                    <div class="col-lg-6">
                        <div class="lang-group mb-2">
                            <small>TH</small>
                            <input type="text" class="form-control form-control-sm" name="opic02_Other_position_th[]" value="{{ $UsersDetail->otherPositionTh }}"
                                autocomplete="off" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="lang-group mb-2">
                            <small>EN</small>
                            <input type="text" class="form-control form-control-sm" name="opic02_Other_position_en[]" value="{{ $UsersDetail->otherPositionEn }}"
                                autocomplete="off" required>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-12">สถานที่ติดต่อ (Contact address)</label>
                    <div class="col-lg-6">
                        <div class="lang-group mb-2">
                            <small>TH</small>
                            <textarea class="form-control form-control-sm auto-expand" rows="3"
                                name="opic02_Contact_address_th[]" autocomplete="off" required>{{ $UsersDetail->contactAddressTh }}</textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="lang-group mb-2">
                            <small>EN</small>
                            <textarea class="form-control form-control-sm auto-expand" rows="3"
                                name="opic02_Contact_address_en[]" autocomplete="off" required>{{ $UsersDetail->contactAddressEn }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-4">
                        <label>โทรศัพท์ (Tel.)</label>
                        <input type="text" class="form-control form-control-sm" name="opic02_Tel[]" value="{{ $UsersDetail->tell }}" autocomplete="off"
                            required>
                    </div>
                    <div class="col-lg-4">
                        <label>โทรสาร (Fax.)</label>
                        <input type="text" class="form-control form-control-sm" name="opic02_Fax[]" value="{{ $UsersDetail->fax }}" autocomplete="off"
                            required>
                    </div>
                    <div class="col-lg-4">
                        <label>E-mail</label>
                        <input type="email" class="form-control form-control-sm" name="opic02_email[]" value="{{ $UserAll->email }}" autocomplete="off"
                            required>
                        <input type="hidden" name="number0[]" value="1">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-12">
                        <hr>
                        <h3>หน้าที่รับผิดชอบ</h3>
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a2-1_1" class="custom-control-input" name="opic02_responsible[]" checked value="01">
                            <label class="custom-control-label" for="chk-a2-1_1">หัวหน้าโครงการที่ขอใช้สัตว์ (Name of
                                Principal Investigator, PI)</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a2-1_2" class="custom-control-input" name="opic02_responsible[]" value="02">
                            <label class="custom-control-label" for="chk-a2-1_2">สัตวแพทย์ประจำหน่วย/สัตวแพทย์ประจำโครงการ
                                (Veterinarian)</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a2-1_3" class="custom-control-input" name="opic02_responsible[]" value="03">
                            <label class="custom-control-label"
                                for="chk-a2-1_3">ผู้ประสานงานโครงการและผู้รับผิดชอบกรณีเกิดเหตุฉุกเฉิน (Project
                                coordinator/Contact Person in Case of Emergency)</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" id="chk-a2-1_4" class="custom-control-input chk-a2-1_4" data-id="1" name="opic02_responsible[]" value="04">
                            <label class="custom-control-label" for="chk-a2-1_4">ผู้รับผิดชอบปฏิบัติงานกับสัตว์ (List all
                                individuals who will be working with the animals on this project)</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" id="chk-a2-1_5" class="custom-control-input" name="opic02_responsible[]" value="05">
                            <label class="custom-control-label"
                                for="chk-a2-1_5">อื่น ๆ</label>
                        </div>
                    </div>
                </div>
                <div class="px-4 lab_animal_exp" id="lab_animal_exp1" >
                    <div class="row">
                        <div class="col-12">
                            <hr>
                            <h6>ประสบการณ์เกี่ยวกับการปฏิบัติงานด้านสัตว์ทดลอง (Qualifications of Personnel)</h6>
                            <hr>
                        </div>
                        <div class="col-12">
                            <label>ใบอนุญาตใช้สัตว์เพื่องานทางวิทยาศาสตร์) / ใบอนุญาติผลิตสัตว์ (แนบเอกสาร)</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="protocol_file02[]">
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Recently date of animal ethical training</label>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <div class="input-group-text material-icons">date_range</div>
                                </div>
                                <input type="text" class="form-control form-control-sm input-date-single" name="protocol_01_02[]">
                            </div>
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-12">หัตถการที่รับผิดชอบ</label>
                        <div class="col-lg-6">
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a2-2_1" name="protocol_02_02[]" value="Y" class="custom-control-input">
                                <label class="custom-control-label" for="chk-a2-2_1">การจับและควบคุมสัตว์ (Handle and
                                    restraint)</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a2-2_2" name="protocol_03_02[]" value="Y" class="custom-control-input">
                                <label class="custom-control-label" for="chk-a2-2_2">การเก็บตัวอย่างจากสัตว์ (Sample
                                    collection)</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a2-2_3" name="protocol_04_02[]" value="Y" class="custom-control-input">
                                <label class="custom-control-label" for="chk-a2-2_3">การแยกเพศ (Sexing)</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a2-2_4" name="protocol_05_02[]" value="Y" class="custom-control-input">
                                <label class="custom-control-label" for="chk-a2-2_4">การสลบสัตว์ (Anesthesia)</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a2-2_5" name="protocol_06_02[]" value="Y" class="custom-control-input">
                                <label class="custom-control-label" for="chk-a2-2_5">การทำเครื่องหมายบนตัวสัตว์
                                    (Identification)</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a2-2_6" name="protocol_07_02[]" value="Y" class="custom-control-input">
                                <label class="custom-control-label" for="chk-a2-2_6">การทำให้สัตว์ตายอย่างสงบ
                                    (Euthanasia)</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a2-2_7" name="protocol_08_02[]" value="Y" class="custom-control-input">
                                <label class="custom-control-label" for="chk-a2-2_7">การให้สาร (Administration
                                    substance)</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a2-2_8" name="protocol_09_02[]" value="Y" class="custom-control-input">
                                <label class="custom-control-label" for="chk-a2-2_8">การทำการผ่าตัด (Surgery)</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a2-2_9" name="protocol_10_02[]" value="Y" class="custom-control-input">
                                <label class="custom-control-label" for="chk-a2-2_9">การทำการผ่าซาก (Necropsy)</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a2-2_10" name="protocol_11_02[]" value="Y" class="custom-control-input">
                                <label class="custom-control-label" for="chk-a2-2_10">อื่น ๆ (ระบุ) (Other, please
                                    specify)</label>
                            </div>
                            <input type="text" class="form-control form-control-sm" name="protocol_12_02[]" autocomplete="off">
                            <input type="hidden" name="number01_02[]" value="1">
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-12">ระบุว่าท่านมีประสบการณ์การทำเทคนิคต่างๆ กับสัตว์ที่ใช้ในโครงการมากน้อยอย่างไร?
                            กรณีที่ยังไม่มีประสบการณ์กำลังจะเข้ารับการอบรม (หัวข้อ/วันที่/จัดโดย) (List experience of all
                            individuals who will be working with the animals on this project. Include all investigators,
                            students, post-doctoral researchers, research associates and laboratory assistants who will
                            actually work with the animals. If personnel do not have experience, state how they will be
                            trained.)</label>
                        <div class="col-12">
                            <textarea class="form-control form-control-sm" rows="4" name="protocol_13_02[]"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div><br></div>
            <div class="container border bg-light py-3 pi_student" id="pi_student1">
                <div class="row">
                    <h6 class="col-12 mb-3">ชื่ออาจารย์ที่ปรึกษาวิทยานิพนธ์
                        (Advisor)<br><small>(กรณีนักศึกษาเป็นหัวหน้าโครงการ (In case of principle investigator is
                            student))</small></h6>
                    <div class="col-lg-6">
                        <div class="lang-group mb-2">
                            <small>TH</small>
                            <input type="text" class="form-control form-control-sm" name="name_th01[]" placeholder="ชื่อ">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="lang-group mb-2">
                            <small>TH</small>
                            <input type="text" class="form-control form-control-sm" name="lastname_th01[]" placeholder="นามสกุล">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="lang-group mb-2">
                            <small>EN</small>
                            <input type="text" class="form-control form-control-sm" name="name_en01[]" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="lang-group mb-2">
                            <small>EN</small>
                            <input type="text" class="form-control form-control-sm" name="lastname_en01[]" placeholder="Surname">
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-12">ตําแหน่ง (Align academic/other position)</label>
                    <div class="col-lg-6">
                        <div class="lang-group mb-2">
                            <small>TH</small>
                            <input type="text" class="form-control form-control-sm" name="position_th01[]" >
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="lang-group mb-2">
                            <small>EN</small>
                            <input type="text" class="form-control form-control-sm" name="position_en01[]" >
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-12">สถานที่ติดต่อ (Contact address)</label>
                    <div class="col-lg-6">
                        <div class="lang-group mb-2">
                            <small>TH</small>
                            <textarea class="form-control form-control-sm auto-expand" rows="2" name="address_th01[]"
                                ></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="lang-group mb-2">
                            <small>EN</small>
                            <textarea class="form-control form-control-sm auto-expand" rows="2" name="address_en01[]"
                                ></textarea>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-4">
                        <label>โทรศัพท์ (Tel.)</label>
                        <input type="text" class="form-control form-control-sm" name="Tel01[]" >
                    </div>
                    <div class="col-lg-4">
                        <label>โทรสาร (Fax.)</label>
                        <input type="text" class="form-control form-control-sm" name="Fax01[]" >
                    </div>
                    <div class="col-lg-4">
                        <label>E-mail</label>
                        <input type="email" class="form-control form-control-sm" name="email01[]" >
                        <input type="hidden" name="number01[]" value="1">
                    </div>
                </div>
            </div>
            </div>
            <div><br><br></div>
            <div class="fromin2"></div>
    
            <div class="container p-0">
                <div class="row">
                    <div class="col">
                        <hr class="mt-5 mb-3">
                        <button class="btn-c material-icons bg-danger text-light d-block mx-auto plusclone">add</button>
                        <hr class="mt-3 mb-5">
                    </div>
                </div>
            </div>
    
    
            <p class="topic-save2">กรุณากด Save ทุกครั้งหลังมีการแก้ไขข้อมูล</p>
            <button type="submit" class="btn-c material-icons topic-save">save</button>
    
        </div>
    </form>
    <!-- END 02 -->
    