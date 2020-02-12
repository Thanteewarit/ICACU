<div class="box-side" id="list_control">
    <div class="side-head">
        <span>Control</span>
        <button class="side-close1"><i class="material-icons">close</i></button>
    </div>
    <div class="side-body">
        {{-- <button type="button" id="control_01" class="side-close"><i class="material-icons mr-3">print</i>Print</button> --}}
        <button type="button" id="control_02"><i class="material-icons mr-3">attachment</i>Attached file</button>
        <button type="button" id="control_03"><i class="material-icons mr-3">history</i>History</button>
        {{-- <button type="button" id="control_04"><i class="material-icons mr-3">autorenew</i>Renew</button> --}}
        {{-- <button type="button" id="control_05"><i class="material-icons mr-3">build</i>Amendment</button> --}}
        {{-- <button type="button" id="control_06" class="side-close" data-toggle="modal" data-target="#modal_delete_protocol"><i class="material-icons mr-3">delete</i>Delete</button> --}}
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
                        id="history_01"><span class="text-truncate">Protocol V.{{ $r->number_ver }}/{{ $r->number_run }}</span></button></a>
                        @endforeach
                        @endif
                    </div>
                    <div>

                        <div class="box-side half" id="form_renew">
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
                                            <textarea class="form-control" rows="10"></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="side-foot p-0">
                                <button type="submit"
                                    class="side-close font-weight-bold w-50 bg-secondary">SAVE</button>
                                <button type="submit" class="side-close font-weight-bold w-50 bg-success">SEND</button>
                            </div>
                            <div>

                                <div class="box-side half" id="form_amendment">
                                    <div class="side-head">
                                        <span>Amendment Protocol</span>
                                        <button class="side-close5"><i class="material-icons">close</i></button>
                                    </div>
                                    <div class="side-body p-4">
                                        <form>
                                            <div class="row form-group">
                                                <h6 class="col-12">กรณีโครงการที่ผ่านการรับรองแล้วต้องการแก้ไขเพิ่มเติม
                                                    (โปรดเลือกข้อที่แก้ไข) (Please check the amendment topic)</h6>
                                                <div class="col-12">
                                                    <hr>
                                                </div>
                                                <div class="col-12">
                                                    <div class="custom-control custom-checkbox mb-1">
                                                        <input type="checkbox" id="chk-amd_1"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label" for="chk-amd_1">ผู้วิจัยหลัก
                                                            (Principle Investigator)</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox mb-1">
                                                        <input type="checkbox" id="chk-amd_2"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label" for="chk-amd_2">ผู้ร่วมวิจัย
                                                            (Co-Investigator)</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox mb-1">
                                                        <input type="checkbox" id="chk-amd_3"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label" for="chk-amd_3">วัตถุประสงค์
                                                            (Objective(s))</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox mb-1">
                                                        <input type="checkbox" id="chk-amd_4"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label" for="chk-amd_4">ขยายเวลา
                                                            (Extend animal protocol)</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox mb-1">
                                                        <input type="checkbox" id="chk-amd_5"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label"
                                                            for="chk-amd_5">ระเบียบวิธีวิจัย (Experimental design and
                                                            general procedures)</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox mb-1 ml-4">
                                                        <input type="checkbox" id="chk-amd_6"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label"
                                                            for="chk-amd_6">จำนวนสัตว์ทดลอง (Number of animal)</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox mb-1 ml-4">
                                                        <input type="checkbox" id="chk-amd_7"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label"
                                                            for="chk-amd_7">การเพิ่มเติมการผ่าตัด (Surgery)</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox mb-1 ml-4">
                                                        <input type="checkbox" id="chk-amd_8"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label"
                                                            for="chk-amd_8">การเปลี่ยนแปลงการใช้ยาสลบ
                                                            (Anesthesia)</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox mb-1 ml-4">
                                                        <input type="checkbox" id="chk-amd_9"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label"
                                                            for="chk-amd_9">การใช้ยาลดปวด (Analgesia)</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox mb-1 ml-4">
                                                        <input type="checkbox" id="chk-amd_10"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label"
                                                            for="chk-amd_10">การหยุดการทดลองกับสัตว์ก่อนสิ้นสุดการทดลอง
                                                            (Humane Endpoints)</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox mb-1 ml-4">
                                                        <input type="checkbox" id="chk-amd_11"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label"
                                                            for="chk-amd_11">การเปลี่ยนแปลงวิธีการุณยฆาต
                                                            (Euthanasia)</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox mb-1 ml-4">
                                                        <input type="checkbox" id="chk-amd_12"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label"
                                                            for="chk-amd_12">การเปลี่ยนแปลงช่วงเวลา ความถี่
                                                            กระบวนการที่กระทำต่อสัตว์ (Animal Procedure)</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox mb-1">
                                                        <input type="checkbox" id="chk-amd_13"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label" for="chk-amd_13">อื่นๆ
                                                            (ระบุ) (Other (s)</label>
                                                    </div>
                                                    <textarea class="form-control" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="side-foot p-0">
                                        <button type="submit"
                                            class="side-close font-weight-bold w-50 bg-secondary">SAVE</button>
                                        <button type="submit"
                                            class="side-close font-weight-bold w-50 bg-success">SEND</button>
                                    </div>
                                    <div>

                                        <form class="form-horizontal" method="POST"
                                            action="{{ route('officer.president.create') }}">
                                            {{ csrf_field() }}
                                            <div class="box-side half" id="form_reviewer">
                                                <div class="side-head">
                                                    <span>Add Reviewer 5</span>
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
                                                                class="btn btn-light text-danger rounded-0 px-1 m-0 float-left shadow-none material-icons minus" data-tr="{{ $key+1 }}" data-id="{{ $r->id }}">delete</span>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>

                                                </div>
                                                <div class="side-foot p-0">
                                                    <button type="submit"
                                                        class="side-close font-weight-bold w-100">SAVE</button>
                                                </div>
                                                <div>
                                        </form>

                                        <div class="box-side half" id="form_upload">
                                            <div class="side-head">
                                                <span>Upload file</span>
                                                <button class="side-close"><i class="material-icons">close</i></button>
                                            </div>
                                            <div class="side-body p-4">
                                                <form class="d-flex justify-content-center align-items-center h-100">
                                                    <div class="text-center text-muted">
                                                        <h4 class="material-icons display-3">insert_drive_file</h4>
                                                        <h6 class="my-3">Drop file here..</h6>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="side-foot p-0">
                                                <button class="side-close font-weight-bold w-100">UPLOAD</button>
                                            </div>
                                            <div>
