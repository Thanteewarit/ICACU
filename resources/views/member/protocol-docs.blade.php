@extends('member.master')
@section('title','Create New Protocol')
@section('css')
@endsection
<link rel="stylesheet" href="{{asset('member/css/swiper.min.css')}}" />
@section('content')

<body class="main">
    <aside class="sidebar">
    @include('member.sidebar')
    </aside>

    <div class="workspace">
        @include ('member.inc.docs.docs-header')
        @include ('member.inc.docs.docs-body')

        @include ('member.inc.box-side')
    </div>
</body>
@endsection

@section('scripts')
<script>
        var swiper = new Swiper('.swiper-container', {
            // direction: 'vertical',
            effect: 'fade',
            touchRatio: 0,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                renderBullet: function (index, className) {
                    return '<span class="' + className + '">' + (index + 1) + '</span>';
                },
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
</script>
<script>
        $('.form_upload').on('submit', function (e) {
        e.preventDefault();
    });
        $('#filer_input').on('submit', function (e) {
        var formData = new FormData(this);
        $.ajax({
            url: "{{route('member.create.upFile.createNo')}}",
            data: formData,
            type: "POST",
            async: false,
            contentType: false,
            processData: false,
            success: function (data) {
                swal({
                    title: "ทำการเพิ่มข้อมูลเรียบร้อยแล้ว",
                    text: "",
                    icon: "success",
                    button: "ยืนยัน",
                });
            }
        });
    });
        $(".input-date-yesr").flatpickr({
            dateFormat: "Y",
            'static': true
        });
        $(".input-date-ranges").flatpickr({
            mode: "range",
            dateFormat: "d-m-Y",
            'static': true
        });
        $(".input-date-single").flatpickr({
            dateFormat: "d-m-Y",
            'static': true
        });

        $('.pi_student, .pi_other, .lab_animal_exp').hide();
        $(document).on('change', ".pi_item", function(e) {
            var id = $(this).attr('data-id');
            if ($(this).val() == 3 || $(this).val() == 4 || $(this).val() == 5) {
                $('#pi_student'+id).show();
                $('#pi_other'+id).hide();
            } else if ($(this).val() == 6) {
                $('#pi_student'+id).hide();
                $('#pi_other'+id).show();
            } else {
                $('#pi_student'+id).hide();
                $('#pi_other'+id).hide();
            }
        });
    
        $(document).on('click', ".chk-a2-1_4", function(e) {
            var id = $(this).attr('data-id');
            if ($(this).is(":checked")) {
                $("#lab_animal_exp"+id).show();
            } else {
                $("#lab_animal_exp"+id).hide();
            }
        }); 
    </script>
    <script type="text/javascript">
        $(window).on('load',function(){
            $('#modal_protocol_info').modal('show');
        });
    </script>
    <script type="text/javascript">
    
    $('#Protocol_opic01').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: "{{route('member.create.updateProtocol_opic01')}}",
            data: formData,
            type: "POST",
            async: false,
            contentType: false,
            processData: false,
            success: function (data) {
                swal({
                    title: "ทำการเพิ่มข้อมูลเรียบร้อยแล้ว",
                    text: "",
                    icon: "success",
                    button: "ยืนยัน",
                });

            }

        });

    });

    var num = 1;
    $(document).ready(function () {
        // $(".plusclone").click(function (e) {
            $(document).on('click', ".plusclone", function(e) {
            e.preventDefault();
            num++;
            var fromin = '';
            fromin += '<div class="container border py-3">';
            fromin += '<div class="row form-group">';
            fromin += '<h3 class="col-12">2.1 ชื่อ-นามสกุล (Name-Surname)</h3>';
            fromin += '<div class="col-lg-6">';
            fromin += '<div class="lang-group mb-2">';
            fromin += '<small>TH</small>';
            fromin += '<input type="text" class="form-control form-control-sm" name="Name_th[]" autocomplete="off" required>';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '<div class="col-lg-6">';
            fromin += '<div class="lang-group mb-2">';
            fromin += '<small>TH</small>';
            fromin += '<input type="text" class="form-control form-control-sm" name="Surname_th[]" autocomplete="off" required>';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '<div class="col-lg-6">';
            fromin += '<div class="lang-group mb-2">';
            fromin += '<small>EN</small>';
            fromin += '<input type="text" class="form-control form-control-sm" name="Name_en[]" autocomplete="off" required>';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '<div class="col-lg-6">';
            fromin += '<div class="lang-group mb-2">';
            fromin += '<small>EN</small>';
            fromin += '<input type="text" class="form-control form-control-sm" name="Surname_en[]" autocomplete="off" required>';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '<div class="row form-group">';
            fromin += '<label class="col-12">สถานภาพ</label>';
            fromin += '<div class="col-lg-6">';
            fromin += '<select class="form-control form-control-sm mb-2 pi_item" id="pi_item'+num+'" data-id="'+num+'" name="opic02_status[]" required>';
            fromin += '<option value="">กรุณาเลือก</option>';
            fromin += '@foreach ($StatusUser as $r)';
            fromin += '<option value="{{ $r->id }}">{{ $r->name }}</option>';
            fromin += '@endforeach';
            fromin += '</select>';
            fromin += '</div>';
            fromin += '<div class="col-lg-6">';
            fromin += '<input type="text" class="form-control form-control-sm mb-2 " name="opic02_Other[]" id="pi_other'+num+'" value=" ">';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '<div class="row form-group">';
            fromin += '<label class="col-12">ตําแหน่งทางวิชาการ (Align academic)</label>';
            fromin += '<div class="col-lg-6">';
            fromin += '<div class="lang-group mb-2">';
            fromin += '<small>TH</small>';
            fromin += '<input type="text" class="form-control form-control-sm" name="opic02_Align_th[]" autocomplete="off" required>';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '<div class="col-lg-6">';
            fromin += '<div class="lang-group mb-2">';
            fromin += '<small>EN</small>';
            fromin += '<input type="text" class="form-control form-control-sm" name="opic02_Align_en[]" autocomplete="off" required>';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '<div class="row form-group">';
            fromin += '<label class="col-12">ตําแหน่งอื่นๆ (Other position)</label>';
            fromin += '<div class="col-lg-6">';
            fromin += '<div class="lang-group mb-2">';
            fromin += '<small>TH</small>';
            fromin += '<input type="text" class="form-control form-control-sm" name="opic02_Other_position_th[]" autocomplete="off" required>';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '<div class="col-lg-6">';
            fromin += '<div class="lang-group mb-2">';
            fromin += '<small>EN</small>';
            fromin += '<input type="text" class="form-control form-control-sm" name="opic02_Other_position_en[]" autocomplete="off" required>';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '<div class="row form-group">';
            fromin += '<label class="col-12">สถานที่ติดต่อ (Contact address)</label>';
            fromin += '<div class="col-lg-6">';
            fromin += '<div class="lang-group mb-2">';
            fromin += '<small>TH</small>';
            fromin += '<textarea class="form-control form-control-sm auto-expand" rows="3" name="opic02_Contact_address_th[]" autocomplete="off" required></textarea>';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '<div class="col-lg-6">';
            fromin += '<div class="lang-group mb-2">';
            fromin += '<small>EN</small>';
            fromin += '<textarea class="form-control form-control-sm auto-expand" rows="3" name="opic02_Contact_address_en[]" autocomplete="off" required></textarea>';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '<div class="row form-group">';
            fromin += '<div class="col-lg-4">';
            fromin += '<label>โทรศัพท์ (Tel.)</label>';
            fromin += '<input type="text" class="form-control form-control-sm" name="opic02_Tel[]" autocomplete="off" required>';
            fromin += '</div>';
            fromin += '<div class="col-lg-4">';
            fromin += '<label>โทรสาร (Fax.)</label>';
            fromin += '<input type="text" class="form-control form-control-sm" name="opic02_Fax[]" autocomplete="off" required>';
            fromin += '</div>';
            fromin += '<div class="col-lg-4">';
            fromin += '<label>E-mail</label>';
            fromin += '<input type="email" class="form-control form-control-sm" name="opic02_email[]" autocomplete="off" required><input type="hidden" name="number0[]" value="'+num+'">';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '<div class="row form-group">';
            fromin += '<div class="col-12">';
            fromin += '<hr>';
            fromin += '<h3>หน้าที่รับผิดชอบ</h3>';
            fromin += '<div class="custom-control custom-checkbox mb-1">';
            fromin += '<input type="checkbox" id="'+num+'chk-a2-1_1" class="custom-control-input" name="opic02_responsible[]" value="01">';
            fromin += '<label class="custom-control-label" for="'+num+'chk-a2-1_1">หัวหน้าโครงการที่ขอใช้สัตว์ (Name of Principal Investigator, PI)</label>';
            fromin += '</div>';
            fromin += '<div class="custom-control custom-checkbox mb-1">';
            fromin += '<input type="checkbox" id="'+num+'chk-a2-1_2" class="custom-control-input" name="opic02_responsible[]" value="02">';
            fromin += '<label class="custom-control-label" for="'+num+'chk-a2-1_2">สัตวแพทย์ประจำหน่วย/สัตวแพทย์ประจำโครงการ (Veterinarian)</label>';
            fromin += '</div>';
            fromin += '<div class="custom-control custom-checkbox mb-1">';
            fromin += '<input type="checkbox" id="'+num+'chk-a2-1_3" class="custom-control-input" name="opic02_responsible[]" value="03">';
            fromin += '<label class="custom-control-label" for="'+num+'chk-a2-1_3">ผู้ประสานงานโครงการและผู้รับผิดชอบกรณีเกิดเหตุฉุกเฉิน (Project coordinator/Contact Person in Case of Emergency)</label>';
            fromin += '</div>';
            fromin += '<div class="custom-control custom-checkbox">';
            fromin += '<input type="checkbox" id="chk-a2-1_4'+num+'" class="custom-control-input chk-a2-1_4" data-id="'+num+'" name="opic02_responsible[]" value="04">';
            fromin += '<label class="custom-control-label" for="chk-a2-1_4'+num+'">ผู้รับผิดชอบปฏิบัติงานกับสัตว์ (List all individuals who will be working with the animals on this project)</label>';
            fromin += '</div>';
            fromin += '<div class="custom-control custom-checkbox">';
            fromin += '<input type="checkbox" id="chk-a2-1_5'+num+'" class="custom-control-input chk-a2-1_4" data-id="'+num+'" name="opic02_responsible[]" value="05"> ';
            fromin += '<label class="custom-control-label" for="chk-a2-1_5'+num+'">อื่น ๆ</label>';
            fromin += '</div>';
            fromin += '</div>'
            fromin += '</div>';
            fromin += '<div class="px-4" id="lab_animal_exp'+num+'" style="display:none;">';
            fromin += '<div class="row">';
            fromin += '<div class="col-12">';
            fromin += '<hr>';
            fromin += '<h6>ประสบการณ์เกี่ยวกับการปฏิบัติงานด้านสัตว์ทดลอง (Qualifications of Personnel)</h6>';
            fromin += '<hr>';
            fromin += '</div>';
            fromin += '<div class="col-12">';
            fromin += '<label>ใบอนุญาตใช้สัตว์เพื่องานทางวิทยาศาสตร์) / ใบอนุญาติผลิตสัตว์ (แนบเอกสาร)</label>';
            fromin += '<input type="file" class="form-control-file" id="exampleFormControlFile1" name="protocol_file02[]" >';
            fromin += '</div>';
            fromin += '<div class="col-12">';
            fromin += '<hr>';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '<div class="row">';
            fromin += '<div class="col-md-6">';
            fromin += '<label>Recently date of animal ethical training</label>';
            fromin += '<div class="input-group input-group-sm">';
            fromin += '<div class="input-group-prepend">';
            fromin += '<div class="input-group-text material-icons">date_range</div>';
            fromin += '</div>';
            fromin += '<input type="text" class="form-control form-control-sm input-date-single"  name="protocol_01_02[]" >';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '<div class="col-12">';
            fromin += '<hr>';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '<div class="row">';
            fromin += '<label class="col-12">หัตถการที่รับผิดชอบ</label>';
            fromin += '<div class="col-lg-6">';
            fromin += '<div class="custom-control custom-checkbox mb-1">';
            fromin += '<input type="checkbox" id="'+num+'chk-a2-2_1" name="protocol_02_02[]" value="Y" class="custom-control-input">';
            fromin += '<label class="custom-control-label" for="'+num+'chk-a2-2_1">การจับและควบคุมสัตว์ (Handle and restraint)</label>';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '<div class="col-lg-6">';
            fromin += '<div class="custom-control custom-checkbox mb-1">';
            fromin += '<input type="checkbox" id="'+num+'chk-a2-2_2" name="protocol_03_02[]" value="Y" class="custom-control-input">';
            fromin += '<label class="custom-control-label" for="'+num+'chk-a2-2_2">การเก็บตัวอย่างจากสัตว์ (Sample collection)</label>';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '<div class="col-lg-6">';
            fromin += '<div class="custom-control custom-checkbox mb-1">';
            fromin += '<input type="checkbox" id="'+num+'chk-a2-2_3" name="protocol_04_02[]" value="Y" class="custom-control-input">';
            fromin += '<label class="custom-control-label" for="'+num+'chk-a2-2_3">การแยกเพศ (Sexing)</label>';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '<div class="col-lg-6">';
            fromin += '<div class="custom-control custom-checkbox mb-1">';
            fromin += '<input type="checkbox" id="'+num+'chk-a2-2_4" name="protocol_05_02[]" value="Y" class="custom-control-input">';
            fromin += '<label class="custom-control-label" for="'+num+'chk-a2-2_4">การสลบสัตว์ (Anesthesia)</label>';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '<div class="col-lg-6">';
            fromin += '<div class="custom-control custom-checkbox mb-1">';
            fromin += '<input type="checkbox" id="'+num+'chk-a2-2_5" name="protocol_06_02[]" value="Y" class="custom-control-input">';
            fromin += '<label class="custom-control-label" for="'+num+'chk-a2-2_5">การทำเครื่องหมายบนตัวสัตว์ (Identification)</label>';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '<div class="col-lg-6">';
            fromin += '<div class="custom-control custom-checkbox mb-1">';
            fromin += '<input type="checkbox" id="'+num+'chk-a2-2_6" name="protocol_07_02[]" value="Y" class="custom-control-input">';
            fromin += '<label class="custom-control-label" for="'+num+'chk-a2-2_6">การทำให้สัตว์ตายอย่างสงบ (Euthanasia)</label>';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '<div class="col-lg-6">';
            fromin += '<div class="custom-control custom-checkbox mb-1">';
            fromin += '<input type="checkbox" id="'+num+'chk-a2-2_7" name="protocol_08_02[]" value="Y" class="custom-control-input">';
            fromin += '<label class="custom-control-label" for="'+num+'chk-a2-2_7">การให้สาร (Administration substance)</label>'; 
            fromin += '</div>'; 
            fromin += '</div>';
            fromin += '<div class="col-lg-6">';
            fromin += '<div class="custom-control custom-checkbox mb-1">';
            fromin += '<input type="checkbox" id="'+num+'chk-a2-2_8" name="protocol_09_02[]" value="Y" class="custom-control-input">';
            fromin += '<label class="custom-control-label" for="'+num+'chk-a2-2_8">การทำการผ่าตัด (Surgery)</label>';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '<div class="col-lg-6">';
            fromin += '<div class="custom-control custom-checkbox mb-1">';
            fromin += '<input type="checkbox" id="'+num+'chk-a2-2_9" name="protocol_10_02[]" value="Y" class="custom-control-input">';
            fromin += '<label class="custom-control-label" for="'+num+'chk-a2-2_9">การทำการผ่าซาก (Necropsy)</label>';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '<div class="col-lg-6">';
            fromin += '<div class="custom-control custom-checkbox mb-1">';
            fromin += '<input type="checkbox" id="'+num+'chk-a2-2_10" name="protocol_11_02[]" value="Y" class="custom-control-input">';
            fromin += '<label class="custom-control-label" for="'+num+'chk-a2-2_10">อื่น ๆ (ระบุ) (Other, please specify)</label>';
            fromin += '</div>';
            fromin += '<input type="text" class="form-control form-control-sm" name="protocol_12_02[]" autocomplete="off"><input type="hidden" name="number0'+num+'_02[]" value="1">';
            fromin += '</div>';
            fromin += '<div class="col-12">';
            fromin += '<hr>';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '<div class="row">';
            fromin += '<label class="col-12">ระบุว่าท่านมีประสบการณ์การทำเทคนิคต่างๆ กับสัตว์ที่ใช้ในโครงการมากน้อยอย่างไร? กรณีที่ยังไม่มีประสบการณ์กำลังจะเข้ารับการอบรม (หัวข้อ/วันที่/จัดโดย) (List experience of all individuals who will be working with the animals on this project. Include all investigators, students, post-doctoral researchers, research associates and laboratory assistants who will actually work with the animals. If personnel do not have experience, state how they will be trained.)</label>';
            fromin += '<div class="col-12">';
            fromin += '<textarea class="form-control form-control-sm" rows="4" name="protocol_13_02[]" ></textarea>';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '<div><br></div>';
            fromin += '<div class="container border bg-light py-3 " id="pi_student'+num+'" style="display:none;">';
            fromin += '<div class="row">';
            fromin += '<h6 class="col-12 mb-3">ชื่ออาจารย์ที่ปรึกษาวิทยานิพนธ์ (Advisor)<br><small>(กรณีนักศึกษาเป็นหัวหน้าโครงการ (In case of principle investigator is student))</small></h6>';
            fromin += '<div class="col-lg-6">';
            fromin += '<div class="lang-group mb-2">';
            fromin += '<small>TH</small>';
            fromin += '<input type="text" class="form-control form-control-sm" name="name_th01[]" placeholder="ชื่อ" >';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '<div class="col-lg-6">';
            fromin += '<div class="lang-group mb-2">';
            fromin += '<small>TH</small>';
            fromin += '<input type="text" class="form-control form-control-sm" name="lastname_th01[]" placeholder="นามสกุล" >';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '<div class="col-lg-6">';
            fromin += '<div class="lang-group mb-2">';
            fromin += '<small>EN</small>';
            fromin += '<input type="text" class="form-control form-control-sm" name="name_en01[]" placeholder="Name" >';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '<div class="col-lg-6">';
            fromin += '<div class="lang-group mb-2">';
            fromin += '<small>EN</small>';
            fromin += '<input type="text" class="form-control form-control-sm" name="lastname_en01[]" placeholder="Surname" >';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '<div class="row form-group">';
            fromin += '<label class="col-12">ตําแหน่ง (Align academic/other position)</label>';
            fromin += '<div class="col-lg-6">';
            fromin += '<div class="lang-group mb-2">';
            fromin += '<small>TH</small>';
            fromin += '<input type="text" class="form-control form-control-sm" name="position_th01[]" >';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '<div class="col-lg-6">';
            fromin += '<div class="lang-group mb-2">';
            fromin += '<small>EN</small>';
            fromin += '<input type="text" class="form-control form-control-sm" name="position_en01[]" >';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '<div class="row form-group">';
            fromin += '<label class="col-12">สถานที่ติดต่อ (Contact address)</label>';
            fromin += '<div class="col-lg-6">';
            fromin += '<div class="lang-group mb-2">';
            fromin += '<small>TH</small>';
            fromin += '<textarea class="form-control form-control-sm auto-expand" rows="2" name="address_th01[]" equired></textarea>';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '<div class="col-lg-6">';
            fromin += '<div class="lang-group mb-2">';
            fromin += '<small>EN</small>';
            fromin += '<textarea class="form-control form-control-sm auto-expand" rows="2" name="address_en01[]" equired></textarea>';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '<div class="row form-group">';
            fromin += '<div class="col-lg-4">';
            fromin += '<label>โทรศัพท์ (Tel.)</label>';
            fromin += '<input type="text" class="form-control form-control-sm" name="Tel01[]" >';
            fromin += '</div>';
            fromin += '<div class="col-lg-4">';
            fromin += '<label>โทรสาร (Fax.)</label>';
            fromin += '<input type="text" class="form-control form-control-sm" name="Fax01[]" >';
            fromin += '</div>';
            fromin += '<div class="col-lg-4">';
            fromin += '<label>E-mail</label>';
            fromin += '<input type="email" class="form-control form-control-sm" name="email01[]" ><input type="hidden" name="number01[]" value="'+num+'">';
            fromin += '</div>';
            fromin += '</div>';
            fromin += '</div>'; 
            $('.fromin2').append(fromin);
            
        });
    });

    $('#Protocol_opic02').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({

            url: "{{route('member.create.updateProtocol_opic02')}}",
            data: formData,
            type: "POST",
            async: false,
            contentType: false,
            processData: false,
            success: function (data) {
                swal({
                    title: "ทำการเพิ่มข้อมูลเรียบร้อยแล้ว",
                    text: "",
                    icon: "success",
                    button: "ยืนยัน",
                });

            }

        });

    });

    $('#Protocol_opic03').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({

            url: "{{route('member.create.updateProtocol_opic03')}}",
            data: formData,
            type: "POST",
            async: false,
            contentType: false,
            processData: false,
            success: function (data) {
                swal({
                    title: "ทำการเพิ่มข้อมูลเรียบร้อยแล้ว",
                    text: "",
                    icon: "success",
                    button: "ยืนยัน",
                });

            }

        });   

    });

    $('#Protocol_opic04').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({

            url: "{{route('member.create.updateProtocol_opic04')}}",
            data: formData,
            type: "POST",
            async: false,
            contentType: false,
            processData: false,
            success: function (data) {
                swal({
                    title: "ทำการเพิ่มข้อมูลเรียบร้อยแล้ว",
                    text: "",
                    icon: "success",
                    button: "ยืนยัน",
                });

            }

        });

    });
    var num = 1;
    $(document).ready(function () {
        $(".plus").click(function () {

            var tr = '';
            tr += '<tr data-tr="' + num + '" class="del' + num + '"> ';
            tr += '<td class="p-0">';
            tr +=
                '<select class="form-control form-control-sm border-0 rounded-0" name="FundingSource[]" required>';
            tr += '<option value="">please select</option>';
            tr += '@foreach ($Budget as $r)';
            tr += '<option value="{{$r->id}}">{{$r->name}}</option>';
            tr += '@endforeach';
            tr += '</select>';
            tr += '</td>';
            tr += '<td class="p-0"><input type="text" class="form-control form-control-sm border-0 rounded-0 input-date-ranges" name="FundingPeriod[]" required></td>';
            tr += '<td class="p-0"><input type="number" name="Budget[]" class="form-control form-control-sm border-0 rounded-0 text-right budget" required></td>';
            tr += '<td class="text-center p-0"><button type="button" class="btn btn-secondary rounded-0 minus">-</button></td>';
            tr += '</tr>';
            $(".tr_protocol_05").append(tr);
            num++;

            $(".input-date-ranges").flatpickr({
            mode: "range",
            dateFormat: "d-m-Y",
            'static': true
        });
        $(".input-date-single").flatpickr({
            dateFormat: "d-m-Y",
            'static': true
        });
        });
    });
    
    $(document).on('click', ".minus", function () {
        var tr = $(this).parent().parent().attr('data-tr');
        $(".del" + tr).remove();
    });

    $(document).on('change', ".budget", function () {
        var sumValue = 0;
        $.each($('input[name="Budget[]"]'), function(i, v) {
        if (parseInt(v.value) >= 0) sumValue += parseInt(v.value)
        })
        $("#sum").empty().append(sumValue);
    });

    $('#Protocol_opic05').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({

            url: "{{route('member.create.updateProtocol_opic05')}}",
            data: formData,
            type: "POST",
            async: false,
            contentType: false,
            processData: false,
            success: function (data) {
                swal({
                    title: "ทำการเพิ่มข้อมูลเรียบร้อยแล้ว",
                    text: "",
                    icon: "success",
                    button: "ยืนยัน",
                });

            }

        });

    });

    $('#Protocol_opic06').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({

            url: "{{route('member.create.updateProtocol_opic06')}}",
            data: formData,
            type: "POST",
            async: false,
            contentType: false,
            processData: false,
            success: function (data) {
                swal({
                    title: "ทำการเพิ่มข้อมูลเรียบร้อยแล้ว",
                    text: "",
                    icon: "success",
                    button: "ยืนยัน",
                });

            }

        });

    });
    $('#Protocol_opic07').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({

            url: "{{route('member.create.updateProtocol_opic07')}}",
            data: formData,
            type: "POST",
            async: false,
            contentType: false,
            processData: false,
            success: function (data) {
                swal({
                    title: "ทำการเพิ่มข้อมูลเรียบร้อยแล้ว",
                    text: "",
                    icon: "success",
                    button: "ยืนยัน",
                });

            }

        });

    });
    var num = 2;
    $(document).ready(function () {
        $(".plus08").click(function () {

            var tr = '';
            tr += '<tr data-tr="' + num + '" class="del08' + num + '"> ';
            tr += '<td class="p-0"><textarea class="form-control form-control-sm border-0 rounded-0 auto-expand" name="Objective[]" rows="1" required></textarea></td>';
            tr += '<td class="text-center p-0"><button type="button" class="btn btn-secondary rounded-0 h-100 minus08">-</button></td>';
            tr += '</tr>';
            $(".tr_protocol_08").append(tr);
            num++;

        });
    });
    $(document).on('click', ".minus08", function () {
        var tr = $(this).parent().parent().attr('data-tr');
        $(".del08" + tr).remove();

    });
    $('#Protocol_opic08').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({

            url: "{{route('member.create.updateProtocol_opic08')}}",
            data: formData,
            type: "POST",
            async: false,
            contentType: false,
            processData: false,
            success: function (data) {
                swal({
                    title: "ทำการเพิ่มข้อมูลเรียบร้อยแล้ว",
                    text: "",
                    icon: "success",
                    button: "ยืนยัน",
                });

            }

        });

    });
    $('#Protocol_opic09').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({

            url: "{{route('member.create.updateProtocol_opic09')}}",
            data: formData,
            type: "POST",
            async: false,
            contentType: false,
            processData: false,
            success: function (data) {
                swal({
                    title: "ทำการเพิ่มข้อมูลเรียบร้อยแล้ว",
                    text: "",
                    icon: "success",
                    button: "ยืนยัน",
                });

            }

        });

    });
    $('#Protocol_opic10').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({

            url: "{{route('member.create.updateProtocol_opic10')}}",
            data: formData,
            type: "POST",
            async: false,
            contentType: false,
            processData: false,
            success: function (data) {
                swal({
                    title: "ทำการเพิ่มข้อมูลเรียบร้อยแล้ว",
                    text: "",
                    icon: "success",
                    button: "ยืนยัน",
                });

            }

        });

    });

    var num = 2;
    $(document).ready(function () {
        $(".plus11").click(function () { 
            var tr = '';
            tr += '<tr data-tr="' + num + '" class="del11' + num + '"> ';
            tr += '<td class="p-0">';
            tr += '<input type="text" list="common" name="Common_name[]" class="form-control form-control-sm border-0 rounded-0" required>';
            tr += '<datalist id="common">';
            tr += '@foreach ($Animal_common_name as $r) <option value="{{$r->common_name_en }}">{{ $r->common_name_en }}</option>@endforeach';
            tr += '</datalist>';
            tr += '</td>';
            tr += '<td class="p-0">';
            tr += '<input type="text" list="genetic"  name="Genus_Species[]" class="form-control form-control-sm border-0 rounded-0" required>';
            tr += '<datalist id="genetic">';
            tr += '@foreach ($Animal_common_name as $r) <option value="{{$r->genetic_diversty }}">{{ $r->genetic_diversty }}</option>@endforeach';
            tr += '</datalist>';
            tr += '</td>';
            tr += '<td class="p-0">';
            tr += '<input type="text" list="strain" name="Strain_Stock[]" class="form-control form-control-sm border-0 rounded-0" required>';
            tr += '<datalist id="strain">';
            tr += '@foreach ($Animal_stock as $r) <option value="{{$r->name }}">{{ $r->name }}</option>@endforeach';
            tr += '</datalist>';
            tr += '</td>';
            tr += '<td class="p-0"><input type="text" class="form-control form-control-sm border-0 rounded-0" name="Age[]" required></td>';
            tr += '<td class="p-0"><input type="text" class="form-control form-control-sm border-0 rounded-0" name="Weight[]" required></td>';
            tr += '<td class="p-0">';
            tr += '<select class="form-control form-control-sm border-0 rounded-0" name="Sex[]" required>';
            tr += '<option>กรุณาเลือก</option>';
            tr += '<option>Male</option>';
            tr += '<option>Female</option>';
            tr += '</select>';
            tr += '</td>';
            tr += '<td class="p-0"><input type="text" class="form-control form-control-sm border-0 rounded-0 Number11" name="Number[]" required></td>';
            tr += '<td class="text-center p-0"><button type="button" class="btn btn-secondary rounded-0 minus11">-</button></td>';
            tr += '</tr>';
            $(".tr_protocol_11").append(tr);
            num++;

        });
    });   
    $(document).on('click', ".minus11", function () {
        var tr = $(this).parent().parent().attr('data-tr');
        $(".del11" + tr).remove();

    }); 
    
    $(document).on('change', ".Number11", function () {
        var sumValue = 0;
        $.each($('input[name="Number[]"]'), function(i, v) {
        if (parseInt(v.value) >= 0) sumValue += parseInt(v.value)
        })
        $("#sum11").empty().append(sumValue);
    })

    $('#Protocol_opic11').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({

            url: "{{route('member.create.updateProtocol_opic11')}}",
            data: formData,
            type: "POST",
            async: false,
            contentType: false,
            processData: false,
            success: function (data) {
                swal({
                    title: "ทำการเพิ่มข้อมูลเรียบร้อยแล้ว",
                    text: "",
                    icon: "success",
                    button: "ยืนยัน",
                });

            }

        });

    });
    $('#Protocol_opic12').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({

            url: "{{route('member.create.updateProtocol_opic12')}}",
            data: formData,
            type: "POST",
            async: false,
            contentType: false,
            processData: false,
            success: function (data) {
                swal({
                    title: "ทำการเพิ่มข้อมูลเรียบร้อยแล้ว",
                    text: "",
                    icon: "success",
                    button: "ยืนยัน",
                });

            }

        });

    });
    $('#Protocol_opic13').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({

            url: "{{route('member.create.updateProtocol_opic13')}}",
            data: formData,
            type: "POST",
            async: false,
            contentType: false,
            processData: false,
            success: function (data) {
                swal({
                    title: "ทำการเพิ่มข้อมูลเรียบร้อยแล้ว",
                    text: "",
                    icon: "success",
                    button: "ยืนยัน",
                });

            }

        });

    });
    $('#Protocol_opic14').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({

            url: "{{route('member.create.updateProtocol_opic14')}}",
            data: formData,
            type: "POST",
            async: false,
            contentType: false,
            processData: false,
            success: function (data) {
                swal({
                    title: "ทำการเพิ่มข้อมูลเรียบร้อยแล้ว",
                    text: "",
                    icon: "success",
                    button: "ยืนยัน",
                });

            }

        });

    });
    $('#Protocol_opic15').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({

            url: "{{route('member.create.updateProtocol_opic15')}}",
            data: formData,
            type: "POST",
            async: false,
            contentType: false,
            processData: false,
            success: function (data) {
                swal({
                    title: "ทำการเพิ่มข้อมูลเรียบร้อยแล้ว",
                    text: "",
                    icon: "success",
                    button: "ยืนยัน",
                });

            }

        });

    });
    $('#Protocol_opic16').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({

            url: "{{route('member.create.updateProtocol_opic16')}}",
            data: formData,
            type: "POST",
            async: false,
            contentType: false,
            processData: false,
            success: function (data) {
                swal({
                    title: "ทำการเพิ่มข้อมูลเรียบร้อยแล้ว",
                    text: "",
                    icon: "success",
                    button: "ยืนยัน",
                });

            }

        });

    });
    $('#Protocol_opic17').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({

            url: "{{route('member.create.updateProtocol_opic17')}}",
            data: formData,
            type: "POST",
            async: false,
            contentType: false,
            processData: false,
            success: function (data) {
                swal({
                    title: "ทำการเพิ่มข้อมูลเรียบร้อยแล้ว",
                    text: "",
                    icon: "success",
                    button: "ยืนยัน",
                });

            }

        });

    });
    //18
    var num = 2;
    $(document).ready(function () {
        $(".plus1801").click(function () { 
            $( "#tra1801" ).clone().appendTo( ".tr_protocol_1801" ).attr('id','tra'+(num++));
        });
    });  
    $(document).on('click', ".minus1801", function () {
        var tr = $(this).parent().parent().attr('id');
        if(tr!="tra1801"){
            $("#" + tr).remove();
        }
    }); 

    var num = 2;
    $(document).ready(function () {
        $(".plus1802").click(function () { 
            $( "#tra1802" ).clone().appendTo( ".tr_protocol_1802" ).attr('id','tra'+(num++));
        });
    });  
    $(document).on('click', ".minus1802", function () {
        var tr = $(this).parent().parent().attr('id');
        if(tr!="tra1802"){
            $("#" + tr).remove();
        }
    }); 

    var num = 2;
    $(document).ready(function () {
        $(".plus1803").click(function () { 
            $( "#tra1803" ).clone().appendTo( ".tr_protocol_1803" ).attr('id','tra'+(num++));
        });
    });  
    $(document).on('click', ".minus1803", function () {
        var tr = $(this).parent().parent().attr('id');
        if(tr!="tra1803"){
            $("#" + tr).remove();
        }
    }); 
    var num = 2;
    $(document).ready(function () {
        $(".plus1804").click(function () { 
            $( "#tra1804" ).clone().appendTo( ".tr_protocol_1804" ).attr('id','tra'+(num++));
        });
    });  
    $(document).on('click', ".minus1804", function () {
        var tr = $(this).parent().parent().attr('id');
        if(tr!="tra1804"){
            $("#" + tr).remove();
        }
    }); 

    var num = 2;
    $(document).ready(function () {
        $(".plus1805").click(function () { 
            $( "#tra1805" ).clone().appendTo( ".tr_protocol_1805" ).attr('id','tra'+(num++));
        });
    });  
    $(document).on('click', ".minus1805", function () {
        var tr = $(this).parent().parent().attr('id');
        if(tr!="tra1805"){
            $("#" + tr).remove();
        }
    }); 

    var num = 2;
    $(document).ready(function () {
        $(".plus1806").click(function () { 
            $( "#tra1806" ).clone().appendTo( ".tr_protocol_1806" ).attr('id','tra'+(num++));
        });
    });  
    $(document).on('click', ".minus1806", function () {
        var tr = $(this).parent().parent().attr('id');
        if(tr!="tra1806"){
            $("#" + tr).remove();
        }
    }); 
    $('#Protocol_opic18').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({

            url: "{{route('member.create.updateProtocol_opic18')}}",
            data: formData,
            type: "POST",
            async: false,
            contentType: false,
            processData: false,
            success: function (data) {
                swal({
                    title: "ทำการเพิ่มข้อมูลเรียบร้อยแล้ว",
                    text: "",
                    icon: "success",
                    button: "ยืนยัน",
                });

            }

        });

    });

    $('#Protocol_opic19').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({

            url: "{{route('member.create.updateProtocol_opic19')}}",
            data: formData,
            type: "POST",
            async: false,
            contentType: false,
            processData: false,
            success: function (data) {
                swal({
                    title: "ทำการเพิ่มข้อมูลเรียบร้อยแล้ว",
                    text: "",
                    icon: "success",
                    button: "ยืนยัน",
                });

            }

        });

    });

    $('#Protocol_opic20').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({

            url: "{{route('member.create.updateProtocol_opic20')}}",
            data: formData,
            type: "POST",
            async: false,
            contentType: false,
            processData: false,
            success: function (data) {
                swal({
                    title: "ทำการเพิ่มข้อมูลเรียบร้อยแล้ว",
                    text: "",
                    icon: "success",
                    button: "ยืนยัน",
                });

            }

        });

    });


    $('#Protocol_opic21').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({

            url: "{{route('member.create.updateProtocol_opic21')}}",
            data: formData,
            type: "POST",
            async: false,
            contentType: false,
            processData: false,
            success: function (data) {
                swal({
                    title: "ทำการเพิ่มข้อมูลเรียบร้อยแล้ว",
                    text: "",
                    icon: "success",
                    button: "ยืนยัน",
                });

            }

        });

    });

    $('#Protocol_opic22').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({

            url: "{{route('member.create.updateProtocol_opic22')}}",
            data: formData,
            type: "POST",
            async: false,
            contentType: false,
            processData: false,
            success: function (data) {
                swal({
                    title: "ทำการเพิ่มข้อมูลเรียบร้อยแล้ว",
                    text: "",
                    icon: "success",
                    button: "ยืนยัน",
                });

            }

        });

    });

    $('#Protocol_opic23').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({

            url: "{{route('member.create.updateProtocol_opic23')}}",
            data: formData,
            type: "POST",
            async: false,
            contentType: false,
            processData: false,
            success: function (data) {
                swal({
                    title: "ทำการเพิ่มข้อมูลเรียบร้อยแล้ว",
                    text: "",
                    icon: "success",
                    button: "ยืนยัน",
                });

            }

        });

    });

    $('#Protocol_opic24').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({

            url: "{{route('member.create.updateProtocol_opic24')}}",
            data: formData,
            type: "POST",
            async: false,
            contentType: false,
            processData: false,
            success: function (data) {
                swal({
                    title: "ทำการเพิ่มข้อมูลเรียบร้อยแล้ว",
                    text: "",
                    icon: "success",
                    button: "ยืนยัน",
                });

            }

        });

    });

    $('#Protocol_opic25').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({

            url: "{{route('member.create.updateProtocol_opic25')}}",
            data: formData,
            type: "POST",
            async: false,
            contentType: false,
            processData: false,
            success: function (data) {
                swal({
                    title: "ทำการเพิ่มข้อมูลเรียบร้อยแล้ว",
                    text: "",
                    icon: "success",
                    button: "ยืนยัน",
                });

            }

        });

    });

    $('#Protocol_opic26').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({

            url: "{{route('member.create.updateProtocol_opic26')}}",
            data: formData,
            type: "POST",
            async: false,
            contentType: false,
            processData: false,
            success: function (data) {
                swal({
                    title: "ทำการเพิ่มข้อมูลเรียบร้อยแล้ว",
                    text: "",
                    icon: "success",
                    button: "ยืนยัน",
                });

            }

        });

    });

    $('#Protocol_opic27').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({

            url: "{{route('member.create.updateProtocol_opic27')}}",
            data: formData,
            type: "POST",
            async: false,
            contentType: false,
            processData: false,
            success: function (data) {
                swal({
                    title: "ทำการเพิ่มข้อมูลเรียบร้อยแล้ว",
                    text: "",
                    icon: "success",
                    button: "ยืนยัน",
                });

            }

        });

    });

    $('#Protocol_opic28').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({

            url: "{{route('member.create.updateProtocol_opic28')}}",
            data: formData,
            type: "POST",
            async: false,
            contentType: false,
            processData: false,
            success: function (data) {
                swal({
                    title: "ทำการเพิ่มข้อมูลเรียบร้อยแล้ว",
                    text: "",
                    icon: "success",
                    button: "ยืนยัน",
                });

            }

        });

    });

    $('#Protocol_opic30').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({

            url: "{{route('member.create.updateProtocol_opic30')}}",
            data: formData,
            type: "POST",
            async: false,
            contentType: false,
            processData: false,
            success: function (data) {
                swal({
                    title: "ทำการเพิ่มข้อมูลเรียบร้อยแล้ว",
                    text: "",
                    icon: "success",
                    button: "ยืนยัน",
                });

            }

        });

    });

    var num = 2;
    $(document).ready(function () {
        $(".plus3001").click(function () { 
            $( "#tra3001" ).clone().appendTo( ".tr_protocol_3001" ).attr('id','tra'+(num++));
        });
    });  
    $(document).on('click', ".minus3001", function () {
        var tr = $(this).parent().parent().attr('id');
        if(tr!="tra3001"){
            $("#" + tr).remove();
        }
    }); 

    var num = 2;
    $(document).ready(function () {
        $(".plus3002").click(function () { 
            $( "#tra3002" ).clone().appendTo( ".tr_protocol_3002" ).attr('id','tra'+(num++));
        });
    });  
    $(document).on('click', ".minus3002", function () {
        var tr = $(this).parent().parent().attr('id');
        if(tr!="tra3002"){
            $("#" + tr).remove();
        }
    }); 
    
</script>
    
@endsection