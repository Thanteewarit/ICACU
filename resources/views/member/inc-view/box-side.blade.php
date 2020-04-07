<div class="box-side" id="list_control">
    <div class="side-head">
        <span>Control</span>
        <button class="side-close1"><i class="material-icons">close</i></button>
    </div>
    <div class="side-body">
        <a href="{{ route('staffPdf',array("id" =>request()->route('id'))) }}" target="_blank">
        <button type="button" id="control_01" class="side-close"><i class="material-icons mr-3">print</i>Print</button>
        </a>
        <button type="button" id="control_02"><i class="material-icons mr-3">attachment</i>Attached file</button>
        <button type="button" id="control_03"><i class="material-icons mr-3">history</i>History</button>

        @if ($Protocol_docs->protocol_status==10)
        <button type="button" id="control_04"><i class="material-icons mr-3">autorenew</i>Renew</button>
        <button type="button" id="control_05"><i class="material-icons mr-3">build</i>Amendment</button>
        @endif
        @if ($Protocol_docs->protocol_status==25)
        <button type="button" id="control_05"><i class="material-icons mr-3">build</i>Amendment</button>
        @endif
        @if ($Protocol_docs->protocol_status==2)
        <button type="button" id="control_06" class="side-close" data-toggle="modal"
            data-target="#modal_delete_protocol"><i class="material-icons mr-3">delete</i>Delete</button>
        @endif
    </div>
    <div>

        <div class="box-side" id="list_attach">
            <div class="side-head">
                <span>Attached file</span>
                <button class="side-close2"><i class="material-icons">close</i></button>
            </div>
            <div class="side-body">
                @if($Protocol_docsfile)
                @foreach ($Protocol_docsfile as $key => $r)
                <a href="{{asset('file-upload/'.$r->file)}}" download="w3logo">
                    <button type="button" class="justify-content-between" id="attach_01">
                        <span class="text-truncate pr-2">{{ $r->file}}</span>
                        <i class="material-icons">cloud_download</i>
                    </button>
                </a>
                @endforeach
                @endif
            </div>
            <div class="side-foot">
                <span>Download all</span>
                <button class="side-close"><i class="material-icons">cloud_download</i></button>
            </div>

            <div>

                <div class="box-side" id="list_history">
                    <div class="side-head">
                        <span>History</span>
                        <button class="side-close3"><i class="material-icons">close</i></button>
                    </div>
                    <div class="side-body">
                        @if ($Protocol_docsHistory)
                        @foreach ($Protocol_docsHistory as $r)
                        <a href="{{ route('member.protocol.show',array('id'=>$r->id ))}}"><button type="button"
                                id="history_01"><span class="text-truncate">Protocol {{ $r->number_ver }}/{{ $r->number_run }}</span></button></a>
                        @endforeach
                        @endif
                    </div>
                    <div>
                        <form class="form-horizontal" method="POST" action="{{ route('member.protocol.Renew') }}">
                            {{ csrf_field() }}
                            <div class="box-side half" id="form_renew">
                                <div class="side-head">
                                    <span>Renew Protocol</span>
                                    <button class="side-close4"><i class="material-icons">close</i></button>
                                </div>
                                <div class="side-body p-4">

                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <h6>กรณีเป็นโครงการที่ทำต่อเนื่องโครงการเดิมที่ได้ผ่านการพิจารณาจรรยาบรรณการใช้สัตว์ทดลองแล้วโปรดระบุรหัสโครงการที่ผ่านความเห็นชอบ
                                                และอธิบายความเหมือนและความแตกต่างของโครงการนี้กับโครงการเดิมด้วย
                                                (Describe how is different of approved version and renewed version)</h6>
                                            <textarea class="form-control" name="comment" rows="10" required></textarea>
                                            <input type="hidden" name="id" value="{{ request()->id }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="side-foot p-0">
                                    <button type="submit"
                                        class="side-close font-weight-bold w-100 bg-success">SEND</button>
                                </div>
                                <div>
                        </form>
                        <form id="AmendmentProtocol" class="form-horizontal" method="POST">

                        <div class="box-side half" id="form_amendment">
                            <div class="side-head">
                                <span>Amendment Protocol</span>
                                <button type="button" class="side-close5"><i class="material-icons">close</i></button>
                            </div>
                            {{-- <form class="form-horizontal" method="POST" action="{{ route('member.protocol.Amendment') }}"> --}}
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ request()->id }}">
                                @if(empty($Protocol_amendment))
                            <div class="side-body p-4">
                                    <div class="row form-group">
                                        <h6 class="col-12">กรณีโครงการที่ผ่านการรับรองแล้วต้องการแก้ไขเพิ่มเติม
                                            (โปรดเลือกข้อที่แก้ไข) (Please check the amendment topic)</h6>
                                        <div class="col-12">
                                            <hr>
                                        </div>
                                        <div class="col-12">
                                            <div class="custom-control custom-checkbox mb-1">
                                                <input type="checkbox" id="chk-amd_1" name="amendment01" value="Y" class="custom-control-input">
                                                <label class="custom-control-label" for="chk-amd_1">ผู้วิจัยหลัก
                                                    (Principle Investigator)</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-1">
                                                <input type="checkbox" id="chk-amd_2" name="amendment02" value="Y" class="custom-control-input">
                                                <label class="custom-control-label" for="chk-amd_2">ผู้ร่วมวิจัย
                                                    (Co-Investigator)</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-1">
                                                <input type="checkbox" id="chk-amd_3" name="amendment03" value="Y" class="custom-control-input">
                                                <label class="custom-control-label" for="chk-amd_3">วัตถุประสงค์
                                                    (Objective(s))</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-1">
                                                <input type="checkbox" id="chk-amd_4" name="amendment04" value="Y" class="custom-control-input">
                                                <label class="custom-control-label" for="chk-amd_4">ขยายเวลา (Extend
                                                    animal protocol)</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-1">
                                                <input type="checkbox" id="chk-amd_5" name="amendment05" value="Y" class="custom-control-input">
                                                <label class="custom-control-label" for="chk-amd_5">ระเบียบวิธีวิจัย
                                                    (Experimental design and general procedures)</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-1 ml-4">
                                                <input type="checkbox" id="chk-amd_6" name="amendment06" value="Y" class="custom-control-input">
                                                <label class="custom-control-label" for="chk-amd_6">จำนวนสัตว์ทดลอง
                                                    (Number of animal)</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-1 ml-4">
                                                <input type="checkbox" id="chk-amd_7" name="amendment07" value="Y" class="custom-control-input">
                                                <label class="custom-control-label"
                                                    for="chk-amd_7">การเพิ่มเติมการผ่าตัด (Surgery)</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-1 ml-4">
                                                <input type="checkbox" id="chk-amd_8" name="amendment08" value="Y" class="custom-control-input">
                                                <label class="custom-control-label"
                                                    for="chk-amd_8">การเปลี่ยนแปลงการใช้ยาสลบ (Anesthesia)</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-1 ml-4">
                                                <input type="checkbox" id="chk-amd_9" name="amendment09" value="Y" class="custom-control-input">
                                                <label class="custom-control-label" for="chk-amd_9">การใช้ยาลดปวด
                                                    (Analgesia)</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-1 ml-4">
                                                <input type="checkbox" id="chk-amd_10" name="amendment10" value="Y" class="custom-control-input">
                                                <label class="custom-control-label"
                                                    for="chk-amd_10">การหยุดการทดลองกับสัตว์ก่อนสิ้นสุดการทดลอง (Humane
                                                    Endpoints)</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-1 ml-4">
                                                <input type="checkbox" id="chk-amd_11" name="amendment11" value="Y" class="custom-control-input">
                                                <label class="custom-control-label"
                                                    for="chk-amd_11">การเปลี่ยนแปลงวิธีการุณยฆาต (Euthanasia)</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-1 ml-4">
                                                <input type="checkbox" id="chk-amd_12" name="amendment12" value="Y" class="custom-control-input">
                                                <label class="custom-control-label"
                                                    for="chk-amd_12">การเปลี่ยนแปลงช่วงเวลา ความถี่
                                                    กระบวนการที่กระทำต่อสัตว์ (Animal Procedure)</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-1">
                                                <input type="checkbox" id="chk-amd_13" name="amendment13" value="Y" class="custom-control-input">
                                                <label class="custom-control-label" for="chk-amd_13">อื่นๆ (ระบุ) (Other
                                                    (s)</label>
                                            </div>
                                            <textarea class="form-control" name="amendment13_sub" rows="10"></textarea>
                                        </div>
                                    </div>
                            </div>
                            @else
                            <div class="side-body p-4">
                                    <div class="row form-group">
                                        <h6 class="col-12">กรณีโครงการที่ผ่านการรับรองแล้วต้องการแก้ไขเพิ่มเติม
                                            (โปรดเลือกข้อที่แก้ไข) (Please check the amendment topic)</h6>
                                        <div class="col-12">
                                            <hr>
                                        </div>
                                        <div class="col-12">
                                            <div class="custom-control custom-checkbox mb-1">
                                                <input type="checkbox" id="chk-amd_1" name="amendment01" value="Y"
                                                    @if($Protocol_amendment->amendment01=="Y") checked @endif
                                                class="custom-control-input">
                                                <label class="custom-control-label" for="chk-amd_1">ผู้วิจัยหลัก
                                                    (Principle Investigator)</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-1">
                                                <input type="checkbox" id="chk-amd_2" name="amendment02" value="Y"
                                                    @if($Protocol_amendment->amendment02=="Y") checked @endif
                                                class="custom-control-input">
                                                <label class="custom-control-label" for="chk-amd_2">ผู้ร่วมวิจัย
                                                    (Co-Investigator)</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-1">
                                                <input type="checkbox" id="chk-amd_3" name="amendment03" value="Y"
                                                    @if($Protocol_amendment->amendment03=="Y") checked @endif
                                                class="custom-control-input">
                                                <label class="custom-control-label" for="chk-amd_3">วัตถุประสงค์
                                                    (Objective(s))</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-1">
                                                <input type="checkbox" id="chk-amd_4" name="amendment04" value="Y"
                                                    @if($Protocol_amendment->amendment04=="Y") checked @endif
                                                class="custom-control-input">
                                                <label class="custom-control-label" for="chk-amd_4">ขยายเวลา
                                                    (Extend animal protocol)</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-1">
                                                <input type="checkbox" id="chk-amd_5" name="amendment05" value="Y"
                                                    @if($Protocol_amendment->amendment05=="Y") checked @endif
                                                class="custom-control-input">
                                                <label class="custom-control-label"
                                                    for="chk-amd_5">ระเบียบวิธีวิจัย (Experimental design and
                                                    general procedures)</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-1 ml-4">
                                                <input type="checkbox" id="chk-amd_6" name="amendment06" value="Y"
                                                    @if($Protocol_amendment->amendment06=="Y") checked @endif
                                                class="custom-control-input">
                                                <label class="custom-control-label"
                                                    for="chk-amd_6">จำนวนสัตว์ทดลอง (Number of animal)</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-1 ml-4">
                                                <input type="checkbox" id="chk-amd_7" name="amendment07" value="Y"
                                                    @if($Protocol_amendment->amendment07=="Y") checked @endif
                                                class="custom-control-input">
                                                <label class="custom-control-label"
                                                    for="chk-amd_7">การเพิ่มเติมการผ่าตัด (Surgery)</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-1 ml-4">
                                                <input type="checkbox" id="chk-amd_8" name="amendment08" value="Y"
                                                    @if($Protocol_amendment->amendment08=="Y") checked @endif
                                                class="custom-control-input">
                                                <label class="custom-control-label"
                                                    for="chk-amd_8">การเปลี่ยนแปลงการใช้ยาสลบ
                                                    (Anesthesia)</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-1 ml-4">
                                                <input type="checkbox" id="chk-amd_9" name="amendment09" value="Y"
                                                    @if($Protocol_amendment->amendment09=="Y") checked @endif
                                                class="custom-control-input">
                                                <label class="custom-control-label"
                                                    for="chk-amd_9">การใช้ยาลดปวด (Analgesia)</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-1 ml-4">
                                                <input type="checkbox" id="chk-amd_10" name="amendment10" value="Y"
                                                    @if($Protocol_amendment->amendment10=="Y") checked @endif
                                                class="custom-control-input">
                                                <label class="custom-control-label"
                                                    for="chk-amd_10">การหยุดการทดลองกับสัตว์ก่อนสิ้นสุดการทดลอง
                                                    (Humane Endpoints)</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-1 ml-4">
                                                <input type="checkbox" id="chk-amd_11" name="amendment11" value="Y"
                                                    @if($Protocol_amendment->amendment11=="Y") checked @endif
                                                class="custom-control-input">
                                                <label class="custom-control-label"
                                                    for="chk-amd_11">การเปลี่ยนแปลงวิธีการุณยฆาต
                                                    (Euthanasia)</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-1 ml-4">
                                                <input type="checkbox" id="chk-amd_12" name="amendment12" value="Y"
                                                    @if($Protocol_amendment->amendment12=="Y") checked @endif
                                                class="custom-control-input">
                                                <label class="custom-control-label"
                                                    for="chk-amd_12">การเปลี่ยนแปลงช่วงเวลา ความถี่
                                                    กระบวนการที่กระทำต่อสัตว์ (Animal Procedure)</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-1">
                                                <input type="checkbox" id="chk-amd_13" name="amendment13" value="Y"
                                                    @if($Protocol_amendment->amendment13=="Y") checked @endif
                                                class="custom-control-input">
                                                <label class="custom-control-label" for="chk-amd_13">อื่นๆ
                                                    (ระบุ) (Other (s)</label>
                                            </div>
                                            <textarea class="form-control" name="amendment13_sub"
                                                rows="10">{{$Protocol_amendment->amendment13_sub}}</textarea>
                                        </div>
                                    </div>
                                
                            </div>
                            @endif
                            <div class="side-foot p-0">
                                
                                <button type="submit" class="side-close font-weight-bold w-100 bg-success">SEND</button>
                            </div>
                            <div>
                        </form>


                                <div class="box-side half" id="form_reviewer">
                                    <div class="side-head">
                                        <span>Add Reviewer</span>
                                        <button class="side-close"><i class="material-icons">close</i></button>
                                    </div>
                                    <div class="side-body p-4">
                                        <form>
                                            <input type="text" class="form-control form-control-sm mb-1"
                                                placeholder="Search...">
                                            <table class="table table-sm">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" style="width:30px;">#</th>
                                                        <th scope="col">#</th>
                                                        <th scope="col">First</th>
                                                        <th scope="col">Last</th>
                                                        <th scope="col">Handle</th>
                                                        <th scope="col" style="width:44px;"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox"
                                                                style="top:-3px;">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="chk_rev_1">
                                                                <label class="custom-control-label"
                                                                    for="chk_rev_1"></label>
                                                            </div>
                                                        </td>
                                                        <td>1</td>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                        <td class="text-center p-0">
                                                            <span type="button"
                                                                class="btn btn-light text-danger rounded-0 px-1 m-0 float-left shadow-none material-icons">swap_horiz</span>
                                                            <span type="button"
                                                                class="btn btn-light text-danger rounded-0 px-1 m-0 float-left shadow-none material-icons">delete</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox"
                                                                style="top:-3px;">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="chk_rev_2">
                                                                <label class="custom-control-label"
                                                                    for="chk_rev_2"></label>
                                                            </div>
                                                        </td>
                                                        <td>2</td>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>@fat</td>
                                                        <td class="text-center p-0">
                                                            <span type="button"
                                                                class="btn btn-light text-danger rounded-0 px-1 m-0 float-left shadow-none material-icons">swap_horiz</span>
                                                            <span type="button"
                                                                class="btn btn-light text-danger rounded-0 px-1 m-0 float-left shadow-none material-icons">delete</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox"
                                                                style="top:-3px;">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="chk_rev_3">
                                                                <label class="custom-control-label"
                                                                    for="chk_rev_3"></label>
                                                            </div>
                                                        </td>
                                                        <td>3</td>
                                                        <td>Larry</td>
                                                        <td>the Bird</td>
                                                        <td>@twitter</td>
                                                        <td class="text-center p-0">
                                                            <span type="button"
                                                                class="btn btn-light text-danger rounded-0 px-1 m-0 float-left shadow-none material-icons">swap_horiz</span>
                                                            <span type="button"
                                                                class="btn btn-light text-danger rounded-0 px-1 m-0 float-left shadow-none material-icons">delete</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                    <div class="side-foot p-0">
                                        <button class="side-close font-weight-bold w-100">SAVE</button>
                                    </div>
                                    <div>


                                                <form id="SendBack" >
                                                    {{ csrf_field() }}
                                                    <div class="box-side half" id="form_upload">
                                                        <div class="side-head">
                                                            <span>ส่งข้อมูลกลับไปแก้ไข</span>
                                                            <button class="side-close"><i class="material-icons">close</i></button>
                                                        </div>
                                                        
                                                        <div class="side-body p-4">
                                                                <div class="row form-group">
                                                                    <div class="col-md-12">
                                                                    <h6>ข้อมูลที่ต้องแก้ไข</h6>
                                                                    <textarea class="form-control" name="comment" rows="15">{{$Protocol_docs->comment}}</textarea>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class="side-foot p-0">
                                                        <input type="hidden" name="protocol_id" value="{{request()->route('id')}}">
                                                                <button type="submit" class="side-close font-weight-bold w-100 bg-secondary side-close4">Send to User</button>
                                                        </div>
                                                    <div>
                                                </form>
