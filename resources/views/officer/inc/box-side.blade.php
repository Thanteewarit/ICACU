<div class="box-side" id="list_control">
    <div class="side-head">
        <span>Control</span>
        <button class="side-close1"><i class="material-icons">close</i></button>
    </div>
    <div class="side-body">
        {{-- <button type="button" id="control_01" class="side-close"><i class="material-icons mr-3">print</i>Print</button> --}}
        <button type="button" id="control_02"><i class="material-icons mr-3">attachment</i>Attached file</button>
        <button type="button" id="control_03"><i class="material-icons mr-3">history</i>History</button>
        @if($Protocol_docs->protocol_status==11 || $Protocol_docs->protocol_status==18)
        <button type="button" id="control_04"><i class="material-icons mr-3">autorenew</i>Renew</button>
        @endif
        <button type="button" id="control_05"><i class="material-icons mr-3">build</i>Amendment</button>
        
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
                                id="history_01"><span class="text-truncate">Protocol
                                    V.{{ $r->number_ver }}/{{ $r->number_run }}</span></button></a>
                        @endforeach
                        @endif
                    </div>
                    <div>

                        <div class="box-side half" id="form_renew">
                            @if($Protocol_docs->protocol_status==11 || $Protocol_docs->protocol_status==18)
                            <div class="side-head">
                                <span>Renew Protocol</span>
                                <button class="side-close4"><i class="material-icons">close</i></button>
                            </div>
                            <div class="side-body p-4">
                                <form>
                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <h6>กรณีเป็นโครงการที่ทำต่อเนื่องโครงการเดิมที่ได้ผ่านการพิจารณาจรรยาบรรณการใช้สัตว์ทดลองแล้วโปรดระบุรหัสโครงการที่ผ่านความเห็นชอบ
                                                และอธิบายความเหมือนและความแตกต่างของโครงการนี้กับโครงการเดิมด้วย
                                                (Describe how is different of approved version and renewed version)</h6>
                                            <textarea class="form-control" rows="10">{{ $Protocol_docs->comment }}</textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="side-foot p-0">
                                <button type="submit"
                                    class="side-close font-weight-bold w-100 bg-secondary side-close4">close</button>
                            </div>
                            @endif
                            <div>
                                <form id="AmendmentProtocol" class="form-horizontal" method="POST">
                                    {{ csrf_field() }}
                               
                                <div class="box-side half" id="form_amendment">

                                    <div class="side-head">
                                        <span>Amendment Protocol</span>
                                        <button type="button" class="side-close5"><i class="material-icons">close</i></button>
                                    </div>
                                    @if($Protocol_amendment)
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
                                                    <input type="hidden" name="id" value="{{request()->id}}">
                                            </div>
                                        </div>
                                    
                                </div>
                                    <div class="side-foot p-0">
                                        <a href="{{ route('officer.protocol_view.rewnew',array('id'=>request()->id))}}" class="side-close font-weight-bold w-50 bg-success text-center">อนุมัติ
                                        {{-- <button type="button" class="side-close font-weight-bold w-50 bg-success side-close4">close</button> --}}
                                        </a>
                                        <button type="submit" class="side-close font-weight-bold w-50 bg-warning side-close4">ส่งกลับไปแก้ไข</button>
                                            {{-- <a href="{{ route('officer.protocol_view.rewnewFale',array('id'=>request()->route('id')))}}" class="side-close font-weight-bold w-50 bg-warning text-center">ส่งกลับไปแก้ไข</a> --}}
                                            {{-- <button type="submit" class="side-close font-weight-bold w-50 bg-warning">ส่งกลับไปแก้ไข</button> --}}
                                    </div>
                                    @endif
                                    <div>
                                    </form>

                                        <form class="form-horizontal" method="POST" id="AddReviewer5">
                                            {{ csrf_field() }}
                                            <div class="box-side half" id="form_reviewer">
                                                <div class="side-head">
                                                    <span>Add Reviewer</span>
                                                    <button type="button" class="side-close"><i
                                                            class="material-icons">close</i></button>
                                                </div>
                                                <div class="side-body p-4">
                                                    <input type="text" id="reviewerSearch"
                                                        class="form-control form-control-sm mb-1 reviewerSearch"
                                                        placeholder="Search...">
                                                    <table class="table table-sm">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" style="width:30px;">#</th>
                                                                <th scope="col">Name</th>
                                                                <th scope="col">E-mail</th>
                                                                <th scope="col" style="width:44px;"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="reviewerAppen">
                                                            @foreach ($Protocol_reviewer_listP as $key=>$r)
                                                            <tr class="del{{ $key+1 }}">
                                                                <td>
                                                                    <div class="custom-control custom-checkbox"
                                                                        style="top:-3px;">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="users_id[]" id="chk_rev_1{{ $key+1 }}"
                                                                            value="{{ $r->users_id }}" checked>
                                                                        <input type="hidden" name="protocol_id"
                                                                            value="{{ request()->id }}">
                                                                        <label class="custom-control-label"
                                                                            for="chk_rev_1{{ $key+1 }}"></label>
                                                                    </div>
                                                                </td>
                                                                <td>{{ $r->reviewerName->name }}</td>
                                                                <td>{{ $r->reviewerName->email }}</td>
                                                                <td class="text-center p-0">
                                                                    <span type="button"
                                                                        class="btn btn-light text-danger rounded-0 px-1 m-0 float-left shadow-none material-icons minus"
                                                                        data-tr="{{ $key+1 }}"
                                                                        data-id="{{ $r->id }}">delete</span>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>

                                                </div>
                                                <div class="side-foot p-0">
                                                        <button type="submit" class="side-close font-weight-bold w-100 bg-success side-close4">Save</button>
                                                </div>
                                                <div>
                                        </form>
<form id="SendBack" >
    {{ csrf_field() }}
    <div class="box-side half" id="form_upload">
        <div class="side-head">
            <span>ส่งข้อมูลกลับไปแก้ไข</span>
            <button type="button" class="side-close"><i class="material-icons">close</i></button>
        </div>
        
        <div class="side-body p-4">
                <div class="row form-group">
                    <div class="col-md-12">
                    <h6>ข้อมูลที่ต้องแก้ไข</h6>
                    <textarea class="form-control" name="comment" rows="15"></textarea>
                    </div>
                </div>
        </div>
        <div class="side-foot p-0">
        <input type="hidden" name="protocol_id" value="{{request()->route('id')}}">
                <button type="submit" class="side-close font-weight-bold w-100 bg-success side-close4">Send to User</button>
        </div>
    <div>
</form>
