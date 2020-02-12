<!-- STR 18 -->
<form class="box-topic" id="Protocol_opic18">
        {{ csrf_field() }}
        <div class="topic">
    
            <h2 class="title"><span>18</span>ระเบียบวิธีวิจัยที่เกี่ยวข้องกับสัตว์ทดลอง</h2>
    
            <div class="row form-group">
                <div class="col-12">
                    <h3>18.1 การออกแบบการวิจัย (Experimental Design)</h3>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-12">
                    <label>18.1.1 ระบุสถิติที่ใช้ในการออกแบบการวิจัย (Experimental Design)</label>
                <textarea class="form-control form-control-sm mb-3" name="ptc18_01" rows="3" required>{{ $Protocol_opic18->ptc18_01 }}</textarea>
                </div>
                <div class="col-12"><hr></div>
                <div class="col-12">
                    <label>18.1.2 การคำนวณตัวอย่าง (Provide an explanation of how the numbers of animals to
                    be used in each group or total were appropriate. Number of animals used in the experiment
                    should be based on scientific and statistical requirements to achieve objective)</label>
                    <textarea class="form-control form-control-sm mb-3" name="ptc18_02" rows="3" required>{{ $Protocol_opic18->ptc18_02 }}</textarea>
                </div>
                <div class="col-12"><hr></div>
                <div class="col-12">
                    <label>18.1.3 การวิเคราะห์ผล (Data analysis/statistical method: (List the statistical test(s)
                    planned or describe the strategy intended to evaluate the data))</label>
                    <textarea class="form-control form-control-sm mb-3" name="ptc18_03" rows="3" required>{{ $Protocol_opic18->ptc18_03 }}</textarea>
                </div>
                <div class="col-12"><hr></div>
                <div class="col-12">
                    <label>
                        18.1.4 การแบ่งกลุ่มการทดลอง (group of Study) แบ่งเป็นกี่กลุ่มการทดลอง กลุ่มละกี่ตัว (Number of animals per group) โดยมีรายละเอียดดังนี้ (Provide a complete description of study groups.
                    </label>
                    <table class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Group name</th>
                                <th scope="col" style="width:50px;">Male</th>
                                <th scope="col" style="width:50px;">Female</th>
                                <th scope="col" style="width:50px;">Number</th>
                                <th scope="col" style="width:30px;"></th>
                            </tr>
                        </thead>
                        <tbody class="tr_protocol_1801">
                            @foreach ($Protocol_opic18_sub01 as $key => $r)
                            <tr id="tra1801{{ $key }}">
                            <td class="p-0"><input type="text" name="ptc18_01_l1[]" value="{{ $r->ptc18_01 }}" class="form-control form-control-sm border-0 rounded-0" required></td>
                                    <td class="p-0"><input type="number" name="ptc18_02_l1[]" value="{{ $r->ptc18_02 }}" maxlength="3" class="form-control form-control-sm border-0 rounded-0" required></td>
                                    <td class="p-0"><input type="number" name="ptc18_03_l1[]" value="{{ $r->ptc18_03 }}" maxlength="3" class="form-control form-control-sm border-0 rounded-0" required></td>
                                    <td class="p-0"><input type="number" name="ptc18_04_l1[]" value="{{ $r->ptc18_04 }}" maxlength="3" class="form-control form-control-sm border-0 rounded-0" required></td>
                                    <td class="text-center p-0">
                                        <button type="button" class="btn btn-secondary rounded-0 minus1801">-</button>
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                                <tr class="bg-light">
                                        <td class="text-muted text-right" colspan="1"></td>
                                        <td class="text-danger"><strong>sum</strong></td>
                                        <td class="text-danger"><strong>sum</strong></td>
                                        <td class="text-danger"><strong>sum</strong></td>
                                        <td class="text-center p-0">
                                            <button type="button" class="btn btn-danger rounded-0 plus1801">+</button>
                                        </td>
                                    </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="col-12"><hr></div>
                <div class="col-12">
                    <label>18.1.5 การปฏิบัติกับสัตว์ตั้งแต่เริ่มต้นจนสิ้นสุดการทดลอง ระบุค่าสังเกต หรือผลที่ต้องการศึกษา
                    หากข้อมมูลมีความสับซ้อนโดปรดแนบแผนภาพเพื่ออธิบายเพิ่มเติม (Provide a complete description
                    sequential of procedures what will be done to the animals from obtain the animal 
                    to the end of study. Specify all outcomes to be measured or observed from the
                    experiment. Succinctly outline the formal scientific plan and direction for
                    experimentation. A diagram or chart may be helpful to explain complex design)</label>
                    <textarea class="form-control form-control-sm mb-3" name="ptc18_04" rows="3" required>{{ $Protocol_opic18->ptc18_04 }}</textarea>
                    <img class="d-block mx-auto mb-3" src="{{asset('file-upload/'.$Protocol_opic18->ptc18_file)}}" width="600" />
                    <input type="file" name="ptc18_file" class="form-control-file mb-3">
                </div>
                <div class="col-12"><hr></div>
            </div>
    
            <div class="row form-group">
                <div class="col-12">
                    <h3>18.2 สารหรือชีววัตถุที่นำมาใช้กับสัตว์และผลกระทบที่มีต่อสัตว์ (ระบุทั้งหมดที่ใช้ในโครงการ)
                    (Chemical/biological agent use in protocol and effect on animal)</h3>
                </div>
                <div class="col-12">
                    <table class="table table-sm table-bordered">
                        <thead>
                                <th scope="col">ประเภท<br>(Type of agent)</th>
                                <th scope="col" style="width:30%;">ชื่อสารหรือชีววัตถุ<br>(Chemical/Biological Agent)</th>
                                <th scope="col" style="width:50px;">ปริมาณ<br>(Qty)</th>
                                <th scope="col" style="width:50px;">หน่วย<br>(Unit)</th>
                                <th scope="col" style="width:30%;">เซลล์เนื้อเยื่อหรืออวัยวะที่อาจได้รับอันตราย<br>(Effect on animal)</th>
                                <th scope="col" style="width:30px;"></th>
                            </tr>
                        </thead>
                        <tbody class="tr_protocol_1802">
                            @foreach ($Protocol_opic18_sub02 as $key => $r)
                            <tr id="tra1802{{ $key }}">
                                <td class="p-0">
                                    <select class="form-control form-control-sm border-0 rounded-0" name="ptc18_01_l2[]">
                                        <option></option>
                                        <option @if($r->ptc18_01=="สารเคมี (Chemical)") selected @endif>สารเคมี (Chemical)</option>
                                        <option @if($r->ptc18_01=="สารก่อมะเร็ง (Carcinogen)") selected @endif>สารก่อมะเร็ง (Carcinogen)</option>
                                        <option @if($r->ptc18_01=="ยา (Drug)") selected @endif>ยา (Drug)</option>
                                        <option @if($r->ptc18_01=="สมุนไพร (Herbal extract)") selected @endif>สมุนไพร (Herbal extract)</option>
                                        <option @if($r->ptc18_01=="สารพิษ (Toxin)") selected @endif>สารพิษ (Toxin)</option>
                                        <option @if($r->ptc18_01=="อาหาร (Food)") selected @endif>อาหาร (Food)</option>
                                        <option @if($r->ptc18_01=="น้ำ (Water)") selected @endif>น้ำ (Water)</option>
                                        <option @if($r->ptc18_01=="เชื้อรา (Fugi)") selected @endif>เชื้อรา (Fugi)</option>
                                        <option @if($r->ptc18_01=="ไวรัส (Virus)") selected @endif>ไวรัส (Virus)</option>
                                        <option @if($r->ptc18_01=="แบคทีเรีย (Bacteria)") selected @endif>แบคทีเรีย (Bacteria)</option>
                                        <option @if($r->ptc18_01=="ปรสิต (Parasite)") selected @endif>ปรสิต (Parasite)</option>
                                        <option @if($r->ptc18_01=="วัคซีน (Vaccine)") selected @endif>วัคซีน (Vaccine)</option>
                                        <option @if($r->ptc18_01=="Freund’s adjuvant") selected @endif>Freund’s adjuvant</option>
                                        <option @if($r->ptc18_01=="อื่นๆ โปรดระบุ (Other, please specify)") selected @endif>อื่นๆ โปรดระบุ (Other, please specify)</option>
                                    </select>
                                    <input type="text" class="form-control form-control-sm border-left-0 border-bottom-0 border-right-0 rounded-0">
                                </td>
                                
                                <td class="p-0"><input type="text" name="ptc18_02_l2[]" value="{{ $r->ptc18_02 }}" class="form-control form-control-sm border-0 rounded-0"></td>
                                <td class="p-0"><input type="text" name="ptc18_03_l2[]" value="{{ $r->ptc18_03 }}" class="form-control form-control-sm border-0 rounded-0"></td>
                                <td class="p-0"><input type="text" name="ptc18_04_l2[]" value="{{ $r->ptc18_04 }}" class="form-control form-control-sm border-0 rounded-0"></td>
                                <td class="p-0"><input type="text" name="ptc18_05_l2[]" value="{{ $r->ptc18_05 }}" class="form-control form-control-sm border-0 rounded-0"></td>
                                <td class="text-center p-0">
                                    <button type="button" class="btn btn-secondary rounded-0 minus1802">-</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                                <tr class="bg-light">
                                        <td class="border-0"colspan="5"></td>
                                        <td class="text-center p-0">
                                            <button type="button" class="btn btn-danger rounded-0 plus1802">+</button>
                                        </td>
                                    </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="col-12"><hr></div>
            </div>
    
            <div class="row form-group mt-5">
                <div class="col-12">
                    <label>18.2.1 กรณีที่สารที่นำมาใช้ในโครงการ ไม่ใช่สารในระดับ Pharmaceutical grade
                    โปรดให้เหตุผลเพิ่มเติมว่าเหตุใดจึงไม่ใช้สารในระดับ Pharmacuetical grade)
                    และอธิบายวิธีการควบคุมภาพของสารที่นำมาใช้ในโครงการ พร้อมทั้งแนบเอกสารควบคุมคุณภาพ) (IACUC
                    Policy 400 : Use of Non-Pharmaceutical Grade Substances Policy
                    Provide sound scientific justification for the use of non-pharmaceutical Grade Substances</label>
                    <textarea class="form-control form-control-sm mb-3" name="ptc18_06" rows="3" required>{{ $Protocol_opic18->ptc18_06 }}</textarea>
                </div>
                <div class="col-12"><hr></div>
                <div class="col-12">
                    <label>18.2.2 การให้ยา/สารเคมี/เชื้อโรค/สารติดเชื้อ/สารรังสีหรือสิ่งแปลกปลอม ในกรณีที่เป็นพิษหรือวัตถุอันตรายแก่สัตว์ทดลอง มีโอกาสที่จะสามารถแพร่กระจายถึงคน สัตว์อื่นและสิ่งแวดล้อมได้หรือไม่ (Is the protocol involved any biohazardous agents that spread to human, animal and environment ?)</label>
                    <div class="custom-control custom-control-inline custom-radio mb-3">
                        <input type="radio" id="rad-a18-1_1" name="ptc18_07" value="N" @if($Protocol_opic18->ptc18_07=="N") checked @endif class="custom-control-input">
                        <label class="custom-control-label" for="rad-a18-1_1">ไม่ได้ (No)</label>
                    </div>
                    <div class="custom-control custom-control-inline custom-radio">
                        <input type="radio" id="rad-a18-1_2" name="ptc18_07" value="Y" @if($Protocol_opic18->ptc18_07=="Y") checked @endif class="custom-control-input">
                        <label class="custom-control-label" for="rad-a18-1_2">ได้ (ตอบคำถามข้างล่าง) (Yes, Please answer the question below)</label>
                    </div>
                </div>
                <div class="col-12"><hr></div>
                <div class="col-12">
                    <label>18.2.3 กรณีมีผลแพร่กระจาย
                    ให้ระบุรายละเอียดข้อควรระมัดระวังและวิธีการป้องกันการแพร่กระจายของสารพิษหรือเชื้อที่ทำการ
                    ศึกษาที่อาจมีต่อสัตว์ทดลองต่อผู้ดูแลสัตว์ และต่อสิ่งแวด
                    ล้อมภายในและภายนอกสถานที่เลี้ยงสัตว์ทดลอง
                    รวมถึงต้องเลี้ยงดูสัตว์เป็นกรณีพิเศษอย่างไรจึงจะไม่เกิดการแพร่กระจาย
                    พร้อมทั้งอธิบายวิธีการป้องกันรักษาความปลอดภัยของบุคลากรในการใช้สารดังกล่าว
                    (กรุณาแนบเอกสารอ้างอิงถึงระดับความอันตราย รวมทั้ง Standard Operating Procedure: SOP)
                    (Explain any safety precautions or programs designed to protect personnel from
                    biohazards and any surveillance procedures in place to monitor potential exposures.)</label>
                    <textarea class="form-control form-control-sm mb-3" name="ptc18_08" rows="3" required>{{ $Protocol_opic18->ptc18_08 }}</textarea>
                </div>
                <div class="col-12"><hr></div>
                <div class="col-12">
                    <label>18.2.4 ระบุวิธีการกำจัดสารพิษ/วัตถุอันตราย/เชื้อโรค
                    และการปฏิบัติกับซากสัตว์หรือวัสดุอุปกรณ์ในการเลี้ยงสัตว์อย่างไรเมื่อสิ้นสุดการทดลอง (Explain
                    how the waste is decontaminated and disposed.)</label>
                    <textarea class="form-control form-control-sm mb-3" name="ptc18_09" rows="3" required>{{ $Protocol_opic18->ptc18_09 }}</textarea>
                </div>
                <div class="col-12"><hr></div>
            </div>
    
            <div class="row form-group">
                <div class="col-12">
                    <h3>18.3 เทคนิคการปฏิบัติการกับสัตว์ (Animal Procedure)</h3>
                </div>
                <div class="col-12">
                    <label>18.3.1 ระบุการปฏิบัติการกับสัตว์ในโครงการ (Specify animal procedure)</label>
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a18-1_1" name="ptc18_10" value="Y" @if($Protocol_opic18->ptc18_10=="Y") checked @endif class="custom-control-input">
                        <label class="custom-control-label" for="chk-a18-1_1">การจับและควบคุมสัตว์ (Handle and restraint)</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a18-1_2" name="ptc18_11"  value="Y" @if($Protocol_opic18->ptc18_11=="Y") checked @endif class="custom-control-input">
                        <label class="custom-control-label" for="chk-a18-1_2">การเก็บตัวอย่างจากสัตว์ (Sample collection)</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a18-1_3" name="ptc18_12"  value="Y" @if($Protocol_opic18->ptc18_12=="Y") checked @endif class="custom-control-input">
                        <label class="custom-control-label" for="chk-a18-1_3">การแยกเพศ (Sexing)</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a18-1_4" name="ptc18_13"  value="Y" @if($Protocol_opic18->ptc18_13=="Y") checked @endif class="custom-control-input">
                        <label class="custom-control-label" for="chk-a18-1_4">การสลบสัตว์ (Anesthesia)</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a18-1_5" name="ptc18_14"  value="Y" @if($Protocol_opic18->ptc18_14=="Y") checked @endif class="custom-control-input">
                        <label class="custom-control-label" for="chk-a18-1_5">การทำเครื่องหมายบนตัวสัตว์ (Identification)</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a18-1_6" name="ptc18_15"  value="Y" @if($Protocol_opic18->ptc18_15=="Y") checked @endif class="custom-control-input">
                        <label class="custom-control-label" for="chk-a18-1_6">การทำให้สัตว์ตายอย่างสงบ (Euthanasia)</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a18-1_7" name="ptc18_16"  value="Y" @if($Protocol_opic18->ptc18_16=="Y") checked @endif class="custom-control-input">
                        <label class="custom-control-label" for="chk-a18-1_7">การให้สาร (Administration substance)</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a18-1_8" name="ptc18_17"  value="Y" @if($Protocol_opic18->ptc18_17=="Y") checked @endif class="custom-control-input">
                        <label class="custom-control-label" for="chk-a18-1_8">การทำการผ่าตัด (Surgery)</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a18-1_9" name="ptc18_18"  value="Y" @if($Protocol_opic18->ptc18_18=="Y") checked @endif class="custom-control-input">
                        <label class="custom-control-label" for="chk-a18-1_9">การทำการผ่าซาก (Necropsy)</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-a18-1_10" name="ptc18_19"  value="Y" @if($Protocol_opic18->ptc18_19=="Y") checked @endif class="custom-control-input">
                        <label class="custom-control-label" for="chk-a18-1_10">อื่น ๆ (ระบุ) (Other, please specify)</label>
                    </div>
                    <textarea class="form-control form-control-sm mb-3" name="ptc18_19_sub" rows="3" required>{{ $Protocol_opic18->ptc18_19_sub }}</textarea>
                </div>
                <div class="col-12"><hr></div>
            </div>
    
            <div class="row form-group">
                <div class="col-12">
                    <label>18.3.2 การให้สาร บริเวณ และปริมาณที่ใช้ในโครงการ (Is protocol involved administration of
                    drugs or substances? : Describe in detail: method(s), volume(s) administered, and
                    frequency of injection)</label>
                    <div class="custom-control custom-control-inline custom-radio">
                        <input type="radio" id="rad-a18-2_1" name="ptc18_20" value="N" @if($Protocol_opic18->ptc18_20=="N") checked @endif class="custom-control-input">
                        <label class="custom-control-label" for="rad-a18-2_1">ไม่มี (No)</label>
                    </div>
                    <div class="custom-control custom-control-inline custom-radio mb-3">
                        <input type="radio" id="rad-a18-2_2" name="ptc18_20" value="Y" @if($Protocol_opic18->ptc18_20=="Y") checked @endif class="custom-control-input">
                        <label class="custom-control-label" for="rad-a18-2_2">มี (ระบุ) (Yes, Please specify below)</label>
                    </div>
                </div>
                <div class="col-12">
                    <table class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="width:22%;">วิธีการ (method)</th>
                                <th scope="col" style="width:22%;">บริเวณ (site)</th>
                                <th scope="col" style="width:22%;">สารที่ให้ (drugs or substances)</th>
                                <th scope="col" style="width:50px;">ปริมาณ<br>(Qty)</th>
                                <th scope="col" style="width:50px;">หน่วย<br>(Unit)</th>
                                <th scope="col" style="width:50px;">ความถี่<br>(Freq)</th>
                                <th scope="col" style="width:50px;">หน่วย<br>(Unit)</th>
                                <th scope="col" style="width:30px;"></th>
                            </tr>
                        </thead>
                        <tbody class="tr_protocol_1803">
                            @foreach ($Protocol_opic18_sub03 as $key => $r)
                            <tr id="tra1803{{ $key }}">
                                <td class="p-0">
                                    <select name="ptc18_01_l3[]" class="form-control form-control-sm border-0 rounded-0">
                                        <option>-</option>
                                        <option @if($r->ptc18_01=="ให้ทางปาก (Oral)") selected @endif>ให้ทางปาก (Oral)</option>
                                        <option @if($r->ptc18_01=="ชั้นผิวหนัง (Intradermal)") selected @endif>ชั้นผิวหนัง (Intradermal)</option>
                                        <option @if($r->ptc18_01=="เข้าใต้ผิวหนัง (Subcutaneous)") selected @endif>เข้าใต้ผิวหนัง (Subcutaneous)</option>
                                        <option @if($r->ptc18_01=="เข้ากล้ามเนื้อ (Intramuscular)") selected @endif>เข้ากล้ามเนื้อ (Intramuscular)</option>
                                        <option @if($r->ptc18_01=="เข้าช่องท้อง (Intraperitoneal)") selected @endif>เข้าช่องท้อง (Intraperitoneal)</option>
                                        <option @if($r->ptc18_01=="เข้าหลอดเลือดดำ (Intravenous)") selected @endif>เข้าหลอดเลือดดำ (Intravenous)</option>
                                        <option @if($r->ptc18_01=="อื่น ๆ โปรดระบุ (Other, please specify)") selected @endif>อื่น ๆ โปรดระบุ (Other, please specify)</option>
                                    </select>
                                    <input type="text" class="form-control form-control-sm border-left-0 border-bottom-0 border-right-0 rounded-0">
                                </td>
                                <td class="p-0"><input type="text" name="ptc18_02_l3[]" value="{{ $r->ptc18_02 }}" class="form-control form-control-sm border-0 rounded-0"></td>
                                <td class="p-0"><input type="text" name="ptc18_03_l3[]" value="{{ $r->ptc18_03 }}" class="form-control form-control-sm border-0 rounded-0"></td>
                                <td class="p-0"><input type="text" name="ptc18_04_l3[]" value="{{ $r->ptc18_04 }}" class="form-control form-control-sm border-0 rounded-0"></td>
                                <td class="p-0"><input type="text" name="ptc18_05_l3[]" value="{{ $r->ptc18_05 }}" class="form-control form-control-sm border-0 rounded-0"></td>
                                <td class="p-0"><input type="text" name="ptc18_06_l3[]" value="{{ $r->ptc18_06 }}" class="form-control form-control-sm border-0 rounded-0"></td>
                                <td class="p-0"><input type="text" name="ptc18_07_l3[]" value="{{ $r->ptc18_07 }}" class="form-control form-control-sm border-0 rounded-0"></td>
                                <td class="text-center p-0">
                                    <button type="button" class="btn btn-secondary rounded-0 minus1803">-</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                                <tr class="bg-light">
                                        <td class="border-0"colspan="7"></td>
                                        <td class="text-center p-0">
                                            <button type="button" class="btn btn-danger rounded-0 plus1803">+</button>
                                        </td>
                                    </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="col-12"><hr></div>
            </div>
    
            <div class="row form-group">
                <div class="col-12">
                    <label>18.3.3 การเก็บตัวอย่างเลือดที่ใช้ในโครงการ (กรณีใช้ยาสลบให้ระบุชนิดยาสลบ) (Is protocol
                    involve Blood Collection : Describe in detail method(s), Site, Anesthesia(if needed),
                    volume(s) collected, and frequency of collection)</label>
                    <div class="custom-control custom-control-inline custom-radio">
                        <input type="radio" id="rad-a18-3_1" name="ptc18_21" value="N" @if($Protocol_opic18->ptc18_21=="N") checked @endif class="custom-control-input">
                        <label class="custom-control-label" for="rad-a18-3_1">ไม่มี (No)</label>
                    </div>
                    <div class="custom-control custom-control-inline custom-radio mb-3">
                        <input type="radio" id="rad-a18-3_2" name="ptc18_21" value="Y" @if($Protocol_opic18->ptc18_21=="Y") checked @endif class="custom-control-input">
                        <label class="custom-control-label" for="rad-a18-3_2">มี (ระบุ) (Yes, Please specify below)</label>
                    </div>
                </div>
                <div class="col-12">
                    <table class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">ประเภทการเก็บเลือด<br>(Type)</th>
                                <th scope="col">ชนิดหลอดเลือด<br>(Vessel)</th>
                                <th scope="col">ตำแหน่ง<br>(Site)</th>
                                <th scope="col">ยาสลบที่ใช้<br>(Anesthetic)</th>
                                <th scope="col" style="width:50px;">ขนาดยา<br>(Dose)</th>
                                <th scope="col" style="width:70px;">ปริมาณเลือด<br>(Qty)</th>
                                <th scope="col" style="width:50px;">หน่วย<br>(Unit)</th>
                                <th scope="col" style="width:50px;">ความถี่<br>(Freq)</th>
                                <th scope="col" style="width:50px;">หน่วย<br>(Unit)</th>
                                <th scope="col" style="width:30px;"></th>
                            </tr>
                        </thead>
                        <tbody class="tr_protocol_1804">
                        @foreach ($Protocol_opic18_sub04 as $key => $r)
                            <tr id="tra1804{{ $key }}">
                                <td class="p-0">
                                    <select name="ptc18_01_l4[]" class="form-control form-control-sm border-0 rounded-0">
                                        <option @if($r->ptc18_01=="จากหลอดเลือดดำ (Venous blood)") selected @endif>จากหลอดเลือดดำ (Venous blood)</option>
                                        <option @if($r->ptc18_01=="จากหลอดเลือดแดง (Arterial blood)") selected @endif>จากหลอดเลือดแดง (Arterial blood)</option>
                                        <option @if($r->ptc18_01=="เจาะจากหัวใจ (Cardiac puncture)") selected @endif>เจาะจากหัวใจ (Cardiac puncture)</option>
                                        <option @if($r->ptc18_01=="อื่นๆ โปรดระบุ (Other, please specify)") selected @endif>อื่นๆ โปรดระบุ (Other, please specify)</option>
                                    </select>
                                    <input type="text" class="form-control form-control-sm border-left-0 border-bottom-0 border-right-0 rounded-0">
                                </td>
                                <td class="p-0"><input type="text" name="ptc18_02_l4[]" value="{{ $r->ptc18_02 }}" class="form-control form-control-sm border-0 rounded-0"></td>
                                <td class="p-0"><input type="text" name="ptc18_03_l4[]" value="{{ $r->ptc18_03 }}" class="form-control form-control-sm border-0 rounded-0"></td>
                                <td class="p-0"><input type="text" name="ptc18_04_l4[]" value="{{ $r->ptc18_04 }}" class="form-control form-control-sm border-0 rounded-0"></td>
                                <td class="p-0"><input type="text" name="ptc18_05_l4[]" value="{{ $r->ptc18_05 }}" class="form-control form-control-sm border-0 rounded-0"></td>
                                <td class="p-0"><input type="text" name="ptc18_06_l4[]" value="{{ $r->ptc18_06 }}" class="form-control form-control-sm border-0 rounded-0"></td>
                                <td class="p-0"><input type="text" name="ptc18_07_l4[]" value="{{ $r->ptc18_07 }}" class="form-control form-control-sm border-0 rounded-0"></td>
                                <td class="p-0"><input type="text" name="ptc18_08_l4[]" value="{{ $r->ptc18_08 }}" class="form-control form-control-sm border-0 rounded-0"></td>
                                <td class="p-0"><input type="text" name="ptc18_09_l4[]" value="{{ $r->ptc18_09 }}" class="form-control form-control-sm border-0 rounded-0"></td>
                                <td class="text-center p-0">
                                    <button type="button" class="btn btn-secondary rounded-0 minus1804">-</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                                <tr class="bg-light">
                                        <td class="border-0"colspan="9"></td>
                                        <td class="text-center p-0">
                                            <button type="button" class="btn btn-danger rounded-0 plus1804">+</button>
                                        </td>
                                    </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="col-12"><hr></div>
            </div>
    
            <div class="row form-group">
                <div class="col-12">
                    <label class="d-block">18.3.4 การเก็บตัวอย่างอื่น ๆ ที่ใช้ในโครงการ (Is protocol involve other sample collection)</label>
                    <div class="custom-control custom-control-inline custom-radio">
                        <input type="radio" id="rad-a18-4_1" name="ptc18_22" value="N" @if($Protocol_opic18->ptc18_22=="N") checked @endif class="custom-control-input">
                        <label class="custom-control-label" for="rad-a18-4_1">ไม่มี (No)</label>
                    </div>
                    <div class="custom-control custom-control-inline custom-radio mb-3">
                        <input type="radio" id="rad-a18-4_2" name="ptc18_22" value="Y" @if($Protocol_opic18->ptc18_22=="Y") checked @endif class="custom-control-input">
                        <label class="custom-control-label" for="rad-a18-4_2">มี (ระบุ) (Yes, Please specify below)</label>
                    </div>
                </div>
                <div class="col-12">
                    <table class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">เงื่อนไข (Condition)</th>
                                <th scope="col">ชิ้นส่วนเนื้อเยื่อ/อวัยวะที่เก็บ/อื่นๆ<br>(Tissue/Organ/Other collection)</th>
                                <th scope="col" style="width:50px;">ปริมาณ (Qty)</th>
                                <th scope="col" style="width:50px;">หน่วย (Unit)</th>
                                <th scope="col" style="width:30px;"></th>
                            </tr>
                        </thead>
                        <tbody class="tr_protocol_1805">
                        @foreach ($Protocol_opic18_sub05 as $key => $r)
                            <tr id="tra1805{{ $key }}">
                                <td class="p-0">
                                    <select name="ptc18_01_l5[]" class="form-control form-control-sm border-0 rounded-0">
                                        <option @if($r->ptc18_01=="เก็บขณะสัตว์มีชีวิตอยู่ (collect in life animal)") selected @endif>เก็บขณะสัตว์มีชีวิตอยู่ (collect in life animal)</option>
                                        <option @if($r->ptc18_01=="เก็บหลังจากสิ้นสุดการทดลอง (Collect after Euthanasia animal)") selected @endif>เก็บหลังจากสิ้นสุดการทดลอง (Collect after Euthanasia animal)</option>
                                    </select>
                                </td>
                                <td class="p-0"><input type="text" name="ptc18_02_l5[]" value="{{ $r->ptc18_02 }}" class="form-control form-control-sm border-0 rounded-0"></td>
                                <td class="p-0"><input type="text" name="ptc18_03_l5[]" value="{{ $r->ptc18_03 }}" class="form-control form-control-sm border-0 rounded-0"></td>
                                <td class="p-0"><input type="text" name="ptc18_04_l5[]" value="{{ $r->ptc18_04 }}" class="form-control form-control-sm border-0 rounded-0"></td>
                                <td class="text-center p-0">
                                    <button type="button" class="btn btn-secondary rounded-0 minus1805">-</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                                <tr class="bg-light">
                                        <td class="border-0"colspan="4"></td>
                                        <td class="text-center p-0">
                                            <button type="button" class="btn btn-danger rounded-0 plus1805">+</button>
                                        </td>
                                    </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="col-12"><hr></div>
            </div>
    
            <div class="row form-group">
                <div class="col-12">
                    <label class="d-block">18.3.5 การเก็บตัวอย่างอุจจาระ (Is protocol involve feces collection)</label>
                    <div class="custom-control custom-control-inline custom-radio">
                        <input type="radio" id="rad-a18-5_1" name="ptc18_23" value="N" @if($Protocol_opic18->ptc18_23=="N") checked @endif class="custom-control-input">
                        <label class="custom-control-label" for="rad-a18-5_1">ไม่มี (No)</label>
                    </div>
                    <div class="custom-control custom-control-inline custom-radio mb-3">
                        <input type="radio" id="rad-a18-5_2" name="ptc18_23" value="Y" @if($Protocol_opic18->ptc18_23=="Y") checked @endif class="custom-control-input">
                        <label class="custom-control-label" for="rad-a18-5_2">มี (ระบุ) (Yes, Please specify below)</label>
                    </div>
                </div>
                <div class="col-6">ใช้วิธีการ (Method)</div>
                <div class="col-6"><input type="text" class="form-control form-control-sm mb-2" name="ptc18_24" value="{{ $Protocol_opic18->ptc18_24 }}" required></div>
                <div class="col-6">ชนิดของกรงหรือวัสดุอุปกรณ์ที่ช่วยในการเก็บตัวอย่าง (Cage or device that use in feces collection)</div>
                <div class="col-6"><input type="text" class="form-control form-control-sm" name="ptc18_24_1" value="{{ $Protocol_opic18->ptc18_24_1 }}"></div>
                <div class="col-12"><hr></div>
            </div>
    
            <div class="row form-group">
                <div class="col-12">
                    <label class="d-block">18.3.6 การเก็บตัวอย่างปัสสาวะ (Is protocol involve urine collection)</label>
                    <div class="custom-control custom-control-inline custom-radio">
                        <input type="radio" id="rad-a18-6_1" name="ptc18_25" value="N" @if($Protocol_opic18->ptc18_25=="N") checked @endif class="custom-control-input" required>
                        <label class="custom-control-label" for="rad-a18-6_1">ไม่มี (No)</label>
                    </div>
                    <div class="custom-control custom-control-inline custom-radio mb-3">
                        <input type="radio" id="rad-a18-6_2" name="ptc18_25" value="Y" @if($Protocol_opic18->ptc18_25=="Y") checked @endif class="custom-control-input" required>
                        <label class="custom-control-label" for="rad-a18-6_2">มี (ระบุ) (Yes, Please specify below)</label>
                    </div>
                </div>
                <div class="col-6">ใช้วิธีการ (Method)</div>
                <div class="col-6"><input type="text" class="form-control form-control-sm mb-2" name="ptc18_26" value="{{ $Protocol_opic18->ptc18_27 }}" required></div>
                <div class="col-6">ชนิดของกรงหรือวัสดุอุปกรณ์ที่ช่วยในการเก็บตัวอย่าง (Cage or device that use in urine collection)</div>
                <div class="col-6"><input type="text" class="form-control form-control-sm" name="ptc18_27" value="{{ $Protocol_opic18->ptc18_27 }}" required></div>
                <div class="col-12"><hr></div>
            </div>
    
            <div class="row form-group">
                <div class="col-12">
                    <label class="d-block">18.3.7 ระบุการปฏิบัติการพิเศษ และอุปกรณ์พิเศษที่ใช้ปฏิบัติกับสัตว์ รวมถึงระบุชื่อผู้รับผิดชอบการ
                    ใช้อุปกรณ์พิเศษและประสบการณ์ (ถ้ามี) (อุปกรณ์พิเศษ เช่น Ultrasound, MRI, X-Ray เป็นต้น)
                    (List of special procedure and equipment include experience of personnel involve)</label>
                </div>
                <div class="col-12">
                    <table class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">ระบุการปฏิบัติการพิเศษ (Special Procedure)</th>
                                <th scope="col">อุปกรณ์พิเศษ (Special Equipment)</th>
                                <th scope="col">ผู้รับผิดชอบ</th>
                                <th scope="col">ประสบการณ์ (Experience)</th>
                                <th scope="col" style="width:30px;"></th>
                            </tr>
                        </thead>
                        <tbody class="tr_protocol_1806">
                        @foreach ($Protocol_opic18_sub06 as $key => $r)
                        <tr id="tra1806{{ $key }}">
                                <td class="p-0"><textarea name="ptc18_01_l6[]" class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="3" required>{{ $r->ptc18_01 }}</textarea></td>
                                <td class="p-0"><textarea name="ptc18_02_l6[]" class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="3" required>{{ $r->ptc18_02 }}</textarea></td>
                                <td class="p-0"><textarea name="ptc18_03_l6[]" class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="3" required>{{ $r->ptc18_03 }}</textarea></td>
                                <td class="p-0"><textarea name="ptc18_04_l6[]" class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="3" required>{{ $r->ptc18_04 }}</textarea></td>
                                <td class="text-center p-0">
                                    <button type="button" class="btn btn-secondary rounded-0 h-100 minus1806">-</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                                <tr class="bg-light">
                                        <td class="border-0"colspan="4"></td>
                                        <td class="text-center p-0">
                                            <button type="button" class="btn btn-danger rounded-0 plus1806">+</button>
                                        </td>
                                    </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <input type="hidden" name="id" value="{{ $Protocol_opic11->protocol_id }}">
            <button type="submit" class="btn-c material-icons topic-save">save</button>
    
        </div>
    </form>
    <!-- END 18 -->