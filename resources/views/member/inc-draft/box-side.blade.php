<div class="box-side" id="list_control">
    <div class="side-head">
        <span>Control</span>
        <button class="side-close1"><i class="material-icons">close</i></button>
    </div>
    <div class="side-body">
        {{-- <button type="button" id="control_01" class="side-close"><i class="material-icons mr-3">print</i>Print</button> --}}
        <button type="button" id="control_02"><i class="material-icons mr-3">attachment</i>Attached file</button>
        {{-- <button type="button" id="control_03"><i class="material-icons mr-3">history</i>History</button> --}}
        {{-- <button type="button" id="control_04"><i class="material-icons mr-3">autorenew</i>Renew</button> --}}
        {{-- <button type="button" id="control_05"><i class="material-icons mr-3">build</i>Amendment</button> --}}

    <a href="{{ route('member.protocol_draft.delect',array('id'=>request()->id))}}"><button type="button" id="control_06" class="side-close" data-toggle="modal" data-target="#modal_delete_protocol"><i class="material-icons mr-3">delete</i>Delete</button></a>
    </div>
<div>

<div class="box-side" id="list_attach">
    <div class="side-head">
        <span>Attached file 5</span>
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
        <button type="button" id="history_01"><span class="text-truncate">Protocol V.1</span></button>
        <button type="button" id="history_02"><span class="text-truncate">Protocol V.2</span></button>
        <button type="button" id="history_03"><span class="text-truncate">Protocol V.3</span></button>
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
                    <h6>กรณีเป็นโครงการที่ทำต่อเนื่องโครงการเดิมที่ได้ผ่านการพิจารณาจรรยาบรรณการใช้สัตว์ทดลองแล้วโปรดระบุรหัสโครงการที่ผ่านความเห็นชอบ และอธิบายความเหมือนและความแตกต่างของโครงการนี้กับโครงการเดิมด้วย (Describe how is different of approved version and renewed version)</h6>
                    <textarea class="form-control" rows="10"></textarea>
                </div>
            </div>
        </form>
    </div>
    <div class="side-foot p-0">
        <button type="submit" class="side-close font-weight-bold w-50 bg-secondary">SAVE</button>
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
                <h6 class="col-12">กรณีโครงการที่ผ่านการรับรองแล้วต้องการแก้ไขเพิ่มเติม (โปรดเลือกข้อที่แก้ไข) (Please check the amendment topic)</h6>
                <div class="col-12"><hr></div>
                <div class="col-12">
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-amd_1" class="custom-control-input">
                        <label class="custom-control-label" for="chk-amd_1">ผู้วิจัยหลัก (Principle Investigator)</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-amd_2" class="custom-control-input">
                        <label class="custom-control-label" for="chk-amd_2">ผู้ร่วมวิจัย (Co-Investigator)</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-amd_3" class="custom-control-input">
                        <label class="custom-control-label" for="chk-amd_3">วัตถุประสงค์ (Objective(s))</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-amd_4" class="custom-control-input">
                        <label class="custom-control-label" for="chk-amd_4">ขยายเวลา (Extend animal protocol)</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-amd_5" class="custom-control-input">
                        <label class="custom-control-label" for="chk-amd_5">ระเบียบวิธีวิจัย (Experimental design and general procedures)</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1 ml-4">
                        <input type="checkbox" id="chk-amd_6" class="custom-control-input">
                        <label class="custom-control-label" for="chk-amd_6">จำนวนสัตว์ทดลอง (Number of animal)</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1 ml-4">
                        <input type="checkbox" id="chk-amd_7" class="custom-control-input">
                        <label class="custom-control-label" for="chk-amd_7">การเพิ่มเติมการผ่าตัด (Surgery)</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1 ml-4">
                        <input type="checkbox" id="chk-amd_8" class="custom-control-input">
                        <label class="custom-control-label" for="chk-amd_8">การเปลี่ยนแปลงการใช้ยาสลบ (Anesthesia)</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1 ml-4">
                        <input type="checkbox" id="chk-amd_9" class="custom-control-input">
                        <label class="custom-control-label" for="chk-amd_9">การใช้ยาลดปวด (Analgesia)</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1 ml-4">
                        <input type="checkbox" id="chk-amd_10" class="custom-control-input">
                        <label class="custom-control-label" for="chk-amd_10">การหยุดการทดลองกับสัตว์ก่อนสิ้นสุดการทดลอง (Humane Endpoints)</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1 ml-4">
                        <input type="checkbox" id="chk-amd_11" class="custom-control-input">
                        <label class="custom-control-label" for="chk-amd_11">การเปลี่ยนแปลงวิธีการุณยฆาต (Euthanasia)</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1 ml-4">
                        <input type="checkbox" id="chk-amd_12" class="custom-control-input">
                        <label class="custom-control-label" for="chk-amd_12">การเปลี่ยนแปลงช่วงเวลา ความถี่ กระบวนการที่กระทำต่อสัตว์ (Animal Procedure)</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-1">
                        <input type="checkbox" id="chk-amd_13" class="custom-control-input">
                        <label class="custom-control-label" for="chk-amd_13">อื่นๆ (ระบุ) (Other (s)</label>
                    </div>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
            </div>
        </form>
    </div>
    <div class="side-foot p-0">
        <button type="submit" class="side-close font-weight-bold w-50 bg-secondary">SAVE</button>
        <button type="submit" class="side-close font-weight-bold w-50 bg-success">SEND</button>
    </div>
<div>

<div class="box-side half" id="form_reviewer">
    <div class="side-head">
        <span>ส่งข้อมูลกลับไปแก้ไข</span>
        <button class="side-close"><i class="material-icons">close</i></button>
    </div>
    <div class="side-body p-4">
        <form>
            <textarea class="form-control" name="comment" rows="20">{{$Protocol_docs->comment}}</textarea>
                            </div>
        </form>
    </div>
<div>

    <form id="filer_input" class="d-flex justify-content-center align-items-center h-100 form_upload" enctype='multipart/form-data'  >
        {{ csrf_field() }}
        <div class="box-side half" id="form_upload">
            <div class="side-head">
                <span>Upload file</span>
                <button class="side-close"><i class="material-icons">close</i></button>
            </div>
            <div class="side-body p-4">
                
                    <div class="text-center text-muted">
                    </div>
                    <div class="card-block">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">แนบไฟล์</label>
                            <div class="col-sm-10">
                            <input type="file" class="filer_input" name="files[]" data-id="01" id="filer_input01" multiple="multiple">
                            </div>
                            <input type="hidden" name="id" value="{{ request()->id }}">
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">*****</label>
                        </div>
                        @if($Protocol_docsfile)
                            @foreach ($Protocol_docsfile as $key => $r)
                            <div class="form-group row">
                            <label class="col-sm-2 col-form-label">ไฟล์แนบที่ : {{ $key+1 }}</label>
                                <div class="col-sm-8">
                                    <a href="{{asset('file-upload/'.$r->file)}}">{{ $r->file }}</a>
                                </div>
                                <div class="col-sm-2">
                                <a href="{{ route('member.protocol.delectFile',array("file"=>$r->id))}}">[ ลบ ]</a>
                                </div>
                            </div>
                            @endforeach
                        @endif
                    </div>        
            </div>
            <div class="side-foot p-0">
                <button class="side-close font-weight-bold w-100">UPLOAD</button>
            </div>
        <div>
        </form>

        <form id="SendBack" >
            {{ csrf_field() }}
            <div class="box-side half" id="side_upload52">
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