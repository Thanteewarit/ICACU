<!-- STR 11 -->
<form class="box-topic" id="Protocol_opic11">
    {{ csrf_field() }}
<div class="topic">
    @if($Protocol_docs->protocol_status==3)
    @include ('officer.inc.modal.modal-protocol-include')
    @endif
    <h2 class="title"><span>11</span>ข้อมูลเกี่ยวกับสัตว์ทดลองที่ใช้ในงานวิจัย (Animal model and species justification)</h2>
    <div class="row mb-5">
        <div class="col-12">
            <label><strong>11.1</strong> จำนวนที่ใช้ตลอดโครงการ (Total amount of animal use) (โปรดตรวจสอบให้ตรงกับระเบียบวิธีวิจัย)</label>
            <table class="table table-sm table-bordered">
                <thead>
                    <tr>
                        {{-- <th scope="col">#</th> --}}
                        <th scope="col">Common name (ชื่อสามัญ)</th>
                        <th scope="col">Genetic Diversity</th>
                        <th scope="col">Strain/Stock</th>
                        <th scope="col" style="width:50px;">Age</th>
                        <th scope="col" style="width:50px;">Weight</th>
                        <th scope="col" style="width:70px;">Sex</th>
                        <th scope="col" style="width:50px;">Number</th>
                        <th scope="col" style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody class="tr_protocol_11">
                    @foreach ($Protocol_opic11_sub as $r1)
                    <tr>
                            <td class="p-0">
                            <input type="text" list="common" name="Common_name[]" value="{{$r1->Common_name}}" class="form-control form-control-sm border-0 rounded-0" >
                                <datalist id="common">
                                    @foreach ($Animal_common_name as $r)
                                    <option value="{{$r->common_name_en }}">{{$r->common_name_en }}</option>
                                    @endforeach
                                </datalist>
                            </td>
                            <td class="p-0">
                            <input type="text" list="genetic" name="Genus_Species[]" value="{{ $r1->Genus_Species }}" class="form-control form-control-sm border-0 rounded-0" >
                                <datalist id="genetic">
                                    @foreach ($Animal_common_name as $r)
                                    <option value="{{$r->genetic_diversty }}">{{ $r->genetic_diversty }}</option>
                                    @endforeach
                                </datalist>
                            </td>
                            <td class="p-0">
                            <input type="text" list="strain" name="Strain_Stock[]" value="{{ $r1->Strain_Stock }}" class="form-control form-control-sm border-0 rounded-0" >
                                <datalist id="strain">
                                        @foreach ($Animal_stock as $r)
                                        <option value="{{$r->name }}" >{{ $r->name }}</option>
                                        @endforeach
                                </datalist>
                            </td>
                        <td class="p-0"><input type="number" class="form-control form-control-sm border-0 rounded-0" name="Age[]" value="{{ $r1->Age }}" ></td>
                            <td class="p-0"><input type="number" class="form-control form-control-sm border-0 rounded-0" name="Weight[]" value="{{ $r1->Weight }}" ></td>
                            <td class="p-0">
                                <select class="form-control form-control-sm border-0 rounded-0" name="Sex[]" >
                                    <option>กรุณาเลือก</option>
                                    <option @if($r1->Sex=='Male') selected @endif>Male</option>
                                    <option @if($r1->Sex=='Female') selected @endif>Female</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <input type="number" name="Number[]" class="form-control form-control-sm border-0 rounded-0 Number11" value="{{ $r1->Number }}" >
                            </td>
                            <td class="text-center p-0">
                                <button type="button" class="btn btn-secondary rounded-0 del11">-</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                        <tr class="bg-light">
                                <td class="text-muted text-right"colspan="6"><small>จำนวนที่ใช้ตลอดโครงการ (Total amount of animal use) (โปรดตรวจสอบให้ตรงกับระเบียบวิธีวิจัย)</small></td>
                                <td class="text-danger"><strong>sum</strong>:<strong id="sum11"></strong></td>
                                <td class="text-center p-0">
                                    <button type="button" class="btn btn-danger rounded-0 plus11">+</button>
                                </td>
                            </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-12">
            <label><strong>11.2</strong> ระยะเวลาที่ใช้สัตว์ทดลองตั้งแต่วันที่ (Anticipated animal use Period)</label>
            <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                    <div class="input-group-text">Period</div>
                </div>
            <input type="text" class="form-control form-control-sm input-date-ranges" name="Period" value="{{ $Protocol_opic11->Period }}" >
                <div class="input-group-prepend">
                    <div class="input-group-text">Duration</div>
                </div>
                <input type="text" class="form-control form-control-sm" placeholder="Days" name="Duration" value="{{ $Protocol_opic11->Duration }}">
            </div>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-12">
            <label><strong>11.3</strong> ทำไมจึงเลือกใช้สัตว์ทดลองชนิดและเพศดังกล่าวในการทดลองมีการศึกษามาก่อนแล้วหรือไม่ (Animal model and species justification: Provide a scientific justification for the choice of animal model(s). What physiological and morphological characteristics does this animal possess that make it the best possible model?)</label>
            <textarea class="form-control form-control-sm" rows="3" name="AnimalModel" >{{ $Protocol_opic11->AnimalModel }}</textarea>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-12">
            <label><strong>11.4</strong> หลักเกณฑ์ในการกำหนดจำนวนสัตว์ทดลอง (Number of animals required justification: Provide an explanation of how the numbers of animals to be used in each group or total were appropriate. Number of animals used in the experiment should be based on scientific and statistical requirements to achieve objectives)</label>
            <textarea class="form-control form-control-sm" rows="3" name="animalsRequired" >{{ $Protocol_opic11->animalsRequired }}</textarea>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-12">
            <label><strong>11.5</strong> กรณีที่จำเป็นต้องใช้สัตว์ป่าให้เหตุผลด้วยว่าทำไมจึงใช้สัตว์ทดลองหรือสัตว์อื่นแทนไม่ได้ (In case of wildlife species is used provide an explanation of how does not replace these species with laboratory animal or other animal)</label>
            <textarea class="form-control form-control-sm" rows="3" name="caseWildlife" >{{ $Protocol_opic11->caseWildlife }}</textarea>
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
                    @if(auth()->user()->hasRole('reviewer') && $r->protocol_number==11) 
                        @if(auth()->user()->id == $r->reviewer_id)
                            <div class="alert alert-secondary" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4><i class="material-icons">account_circle</i> REVIEWER </h4>
                                <hr>
                                <div class="custom-control custom-control-inline custom-radio my-2">
                                    <input type="radio" id="reviewer-comment-11_1" name="protocol_status" value="เหมาะสม" @if($r->protocol_status == "เหมาะสม") checked @endif class="custom-control-input" @role('secretary') disabled @endrole >
                                    <label class="custom-control-label" for="reviewer-comment-11_1">เหมาะสม</label>
                                </div>
                                <div class="custom-control custom-control-inline custom-radio my-2">
                                    <input type="radio" id="reviewer-comment-11_2" name="protocol_status" value="ไม่เหมาะสม" @if($r->protocol_status == "ไม่เหมาะสม") checked @endif  class="custom-control-input" @role('secretary') disabled @endrole  >
                                    <label class="custom-control-label" for="reviewer-comment-11_2">ไม่เหมาะสม</label>
                                </div>
                                <div class="custom-control custom-control-inline custom-radio my-2">
                                    <input type="radio" id="reviewer-comment-11_3" name="protocol_status" value="ไม่มีข้อมูล" @if($r->protocol_status == "ไม่มีข้อมูล") checked @endif class="custom-control-input" @role('secretary') disabled @endrole  >
                                    <label class="custom-control-label" for="reviewer-comment-11_3">ไม่มีข้อมูล</label>
                                </div>
                                <div class="custom-control custom-control-inline custom-radio my-2">
                                    <input type="radio" id="reviewer-comment-11_4" name="protocol_status" value="ไม่เกี่ยวข้อง" @if($r->protocol_status == "ไม่เกี่ยวข้อง") checked @endif class="custom-control-input" @role('secretary') disabled @endrole  >
                                    <label class="custom-control-label" for="reviewer-comment-11_4">ไม่เกี่ยวข้อง</label>
                                </div>
                            <textarea class="form-control form-control-sm auto-expand" rows="4" name="comment11[]" placeholder="กรุณาระบุเหตผล.." @role('secretary') readonly @endrole>{{ $r->comment }}</textarea>
                            </div>
                        @endif
                    @endif
                @endforeach

                @foreach ($Protocol_reviewer_opic as $key => $r)
                {{-- ถ้ารูเท่ากับรีวิว เเละ protocol_number เท่ากับ 1  --}}
                @if(auth()->user()->hasRole('secretary') && $r->protocol_number==11) 
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
                                <label class="custom-control-label" for="reviewer-comment-11_4">ไม่เกี่ยวข้อง</label>
                            </div>
                        <textarea class="form-control form-control-sm auto-expand" rows="4" name="comment11[]" placeholder="กรุณาระบุเหตผล.." @role('secretary') readonly @endrole>{{ $r->comment }}</textarea>
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
                                <input type="radio" id="reviewer-comment-11_1" name="protocol_status" value="เหมาะสม" class="custom-control-input" @role('secretary') disabled @endrole checked>
                                <label class="custom-control-label" for="reviewer-comment-11_1">เหมาะสม</label>
                            </div>
                            <div class="custom-control custom-control-inline custom-radio my-2">
                                <input type="radio" id="reviewer-comment-11_2" name="protocol_status" value="ไม่เหมาะสม" class="custom-control-input" @role('secretary') disabled @endrole  checked>
                                <label class="custom-control-label" for="reviewer-comment-11_2">ไม่เหมาะสม</label>
                            </div>
                            <div class="custom-control custom-control-inline custom-radio my-2">
                                <input type="radio" id="reviewer-comment-11_3" name="protocol_status" value="ไม่มีข้อมูล" class="custom-control-input" @role('secretary') disabled @endrole  checked>
                                <label class="custom-control-label" for="reviewer-comment-11_3">ไม่มีข้อมูล</label>
                            </div>
                            <div class="custom-control custom-control-inline custom-radio my-2">
                                <input type="radio" id="reviewer-comment-11_4" name="protocol_status" value="ไม่เกี่ยวข้อง" class="custom-control-input" @role('secretary') disabled @endrole  checked>
                                <label class="custom-control-label" for="reviewer-comment-11_4">ไม่เกี่ยวข้อง</label>
                            </div>
                        <textarea class="form-control form-control-sm auto-expand" rows="4" name="comment" placeholder="กรุณาระบุเหตผล.." @role('secretary') readonly @endrole></textarea>
                        </div>
                @endrole
            @endif
        @endhasanyrole
        @hasanyrole('president|secretary')
        @role('secretary')
        <button type="button" class="btn btn-warning Merge" value="11"><small class="material-icons">crop</small> Merge Comments</button>
        @if($Protocol_docs->protocol_v2==0)
       
        <div class="alert alert-warning my-5" role="alert">
            <h4><i class="material-icons">question_answer</i> Comment</h4>
            <hr>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-11_1" name="protocol_status01" value="เหมาะสม" class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-11_1">เหมาะสม</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-11_2" name="protocol_status01" value="ไม่เหมาะสม" class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-11_2">ไม่เหมาะสม</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-11_3" name="protocol_status01" value="ไม่มีข้อมูล" class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-11_3">ไม่มีข้อมูล</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-11_4" name="protocol_status01" value="ไม่เกี่ยวข้อง" class="custom-control-input" checked>
                <label class="custom-control-label" for="merge-comment-1-11_4">ไม่เกี่ยวข้อง</label>
            </div>
        <textarea class="form-control form-control-sm auto-expand" id="Merge11" rows="4" name="merge_comment01"></textarea>
        </div>
        @endif
        @endrole
        @hasanyrole('president|secretary')
        @if($Protocol_docs->protocol_v2=="1")
        @foreach ($Protocol_secretary_opic as $key => $r)
        @if($r->protocol_number == 11)
        <div class="alert alert-warning my-5" role="alert">
            <h4><i class="material-icons">question_answer</i> Comment</h4>
            <hr>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-11_1" name="protocol_status01" value="เหมาะสม" @if($r->protocol_status=="เหมาะสม") checked @endif class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-11_1">เหมาะสม</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-11_2" name="protocol_status01" value="ไม่เหมาะสม" @if($r->protocol_status=="ไม่เหมาะสม") checked @endif class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-11_2">ไม่เหมาะสม</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-11_3" name="protocol_status01" value="ไม่มีข้อมูล" @if($r->protocol_status=="ไม่มีข้อมูล") checked @endif class="custom-control-input">
                <label class="custom-control-label" for="merge-comment-1-11_3">ไม่มีข้อมูล</label>
            </div>
            <div class="custom-control custom-control-inline custom-radio my-2">
                <input type="radio" id="merge-comment-1-11_4" name="protocol_status01" value="ไม่เกี่ยวข้อง" @if($r->protocol_status=="ไม่เกี่ยวข้อง") checked @endif class="custom-control-input" >
                <label class="custom-control-label" for="merge-comment-1-11_4">ไม่เกี่ยวข้อง</label>
            </div>
        <textarea class="form-control form-control-sm auto-expand" id="Merge11" rows="4" name="merge_comment01">{{ $r->comment }}</textarea>
        </div>
        @endif
        @endforeach
        @endif
        @endhasanyrole
        @endhasanyrole
        <input type="hidden" name="protocol_id" value="{{ request()->id }}">
        <input type="hidden" name="protocol_number" value="11">
        @hasanyrole('secretary|reviewer')
                <p class="topic-save2">กรุณากด Safe ทุกครั้งหลังมีการแก้ไขข้อมูล</p>
        <button type="submit" class="btn-c material-icons topic-save">save</button>
        @endhasanyrole
    @endif

</div>
</form>
<!-- END 11 -->