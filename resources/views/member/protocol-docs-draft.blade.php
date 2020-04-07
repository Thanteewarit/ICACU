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
        @include ('member.inc-draft.docs.docs-header')
        @include ('member.inc-draft.docs.docs-body')
        @include ('member.inc-draft.box-side')
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
        $(".input-date-ranges").flatpickr({
            mode: "range",
            dateFormat: "d-m-Y",
            'static': true
        });
        $(".input-date-single").flatpickr({
            dateFormat: "d-m-Y",
            'static': true
        });

        $(function () {
            $('#member_student').hide();
            $("#member_status").change(function () {
                if ($(this).val() == "01") {
                    $("#member_student").show();
                } else {
                    $("#member_student").hide();
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(window).on('load',function(){
            $('#modal_protocol_info').modal('show');
        });
</script>

<script>
    $('.form_upload').on('submit', function (e) {
        e.preventDefault();
    });

    $('#filer_input').on('submit', function (e) {
        var formData = new FormData(this);
        $.ajax({
            url: "{{route('member.create.upFile.create')}}",
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

    $('#Protocol_opic01').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: "{{route('member.edit.Protocol_opic01')}}",
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

    $('#Protocol_opic02').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: "{{route('member.edit.Protocol_opic02')}}",
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
            url: "{{route('member.edit.Protocol_opic03')}}",
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
            url: "{{route('member.edit.Protocol_opic04')}}",
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
            tr +='<select class="form-control form-control-sm border-0 rounded-0" name="FundingSource[]" required>';
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

    $('#Protocol_opic05').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: "{{route('member.edit.Protocol_opic05')}}",
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
            url: "{{route('member.edit.Protocol_opic06')}}",
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
            url: "{{route('member.edit.Protocol_opic07')}}",
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
            url: "{{route('member.edit.Protocol_opic08')}}",
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
            url: "{{route('member.edit.Protocol_opic09')}}",
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
            url: "{{route('member.edit.Protocol_opic10')}}",
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
            url: "{{route('member.edit.Protocol_opic11')}}",
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
            url: "{{route('member.edit.Protocol_opic12')}}",
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
            url: "{{route('member.edit.Protocol_opic13')}}",
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
            url: "{{route('member.edit.Protocol_opic14')}}",
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
            url: "{{route('member.edit.Protocol_opic15')}}",
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
            url: "{{route('member.edit.Protocol_opic16')}}",
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
            url: "{{route('member.edit.Protocol_opic17')}}",
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
            $( "#tra18010" ).clone().appendTo( ".tr_protocol_1801" ).attr('id','tra'+(num++));
        });
    });  
    $(document).on('click', ".minus1801", function () {
        var tr = $(this).parent().parent().attr('id');
        if(tr!="tra18010"){
            $("#" + tr).remove();
        }
    }); 

    var num = 2;
    $(document).ready(function () {
        $(".plus1802").click(function () { 
            $( "#tra18020" ).clone().appendTo( ".tr_protocol_1802" ).attr('id','tra'+(num++));
        });
    });  
    $(document).on('click', ".minus1802", function () {
        var tr = $(this).parent().parent().attr('id');
        if(tr!="tra18020"){
            $("#" + tr).remove();
        }
    }); 

    var num = 2;
    $(document).ready(function () {
        $(".plus1803").click(function () { 
            $( "#tra18030" ).clone().appendTo( ".tr_protocol_1803" ).attr('id','tra'+(num++));
        });
    });  
    $(document).on('click', ".minus1803", function () {
        var tr = $(this).parent().parent().attr('id');
        if(tr!="tra18030"){
            $("#" + tr).remove();
        }
    }); 
    var num = 2;
    $(document).ready(function () {
        $(".plus1804").click(function () { 
            $( "#tra18040" ).clone().appendTo( ".tr_protocol_1804" ).attr('id','tra'+(num++));
        });
    });  
    $(document).on('click', ".minus1804", function () {
        var tr = $(this).parent().parent().attr('id');
        if(tr!="tra18040"){
            $("#" + tr).remove();
        }
    }); 

    var num = 2;
    $(document).ready(function () {
        $(".plus1805").click(function () { 
            $( "#tra18050" ).clone().appendTo( ".tr_protocol_1805" ).attr('id','tra'+(num++));
        });
    });  
    $(document).on('click', ".minus1805", function () {
        var tr = $(this).parent().parent().attr('id');
        if(tr!="tra18050"){
            $("#" + tr).remove();
        }
    }); 

    var num = 2;
    $(document).ready(function () {
        $(".plus1806").click(function () { 
            $( "#tra18060" ).clone().appendTo( ".tr_protocol_1806" ).attr('id','tra'+(num++));
        });
    });  
    $(document).on('click', ".minus1806", function () {
        var tr = $(this).parent().parent().attr('id');
        if(tr!="tra18060"){
            $("#" + tr).remove();
        }
    }); 
    $('#Protocol_opic18').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: "{{route('member.edit.Protocol_opic18')}}",
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
            url: "{{route('member.edit.Protocol_opic19')}}",
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
            url: "{{route('member.edit.Protocol_opic20')}}",
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
            url: "{{route('member.edit.Protocol_opic21')}}",
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
            url: "{{route('member.edit.Protocol_opic22')}}",
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
            url: "{{route('member.edit.Protocol_opic23')}}",
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
            url: "{{route('member.edit.Protocol_opic24')}}",
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
            url: "{{route('member.edit.Protocol_opic25')}}",
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
            url: "{{route('member.edit.Protocol_opic26')}}",
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
            url: "{{route('member.edit.Protocol_opic27')}}",
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
            url: "{{route('member.edit.Protocol_opic28')}}",
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
            $( "#tra30010" ).clone().appendTo( ".tr_protocol_3001" ).attr('id','tra'+(num++));
        });
    });  
    $(document).on('click', ".minus3001", function () {
        var tr = $(this).parent().parent().attr('id');
        if(tr!="tra30010"){
            $("#" + tr).remove();
        }
    }); 

    var num = 2;
    $(document).ready(function () {
        $(".plus3002").click(function () { 
            $( "#tra30020" ).clone().appendTo( ".tr_protocol_3002" ).attr('id','tra'+(num++));
        });
    });  
    $(document).on('click', ".minus3002", function () {
        var tr = $(this).parent().parent().attr('id');
        if(tr!="tra30020"){
            $("#" + tr).remove();
        }
    }); 

    $('#Protocol_opic30').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: "{{route('member.edit.Protocol_opic30')}}",
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
    
    $('#sendDraft').on('click', function (e) {
        $.ajax({
            url : "{{route('member.protocol-draft.sendDraft')}}",
            data:{
                "_token":   "{{ csrf_token() }}",
                'id':   {{ request()->id }},
            },
            type: "POST",
            success: function (data) {
                swal({
                    title: "ทำการเพิ่มข้อมูลเรียบร้อยแล้ว",
                    text: "",
                    icon: "success",
                    button: "ยืนยัน",
                })
                .then((value) => {
                    window.location="{{route('member.protocol_list.index')}}";
                });
            }
        });
    });
    $('#SendBack').on('submit', function (e) {
    e.preventDefault();

});
    
</script>
<script>
    $('.topic-save').on('click', function (e) {
        $(this).attr('class', ' btn-c material-icons topic-save-ed');

});
</script>
@endsection