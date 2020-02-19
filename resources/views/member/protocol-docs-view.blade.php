@extends('officer.master')
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
        @include ('member.inc-view.docs.docs-header')
        @include ('member.inc-view.docs.docs-body')


        @include ('member.inc-view.modal.modal-delete-protocol')
        @include ('member.inc-view.modal.modal-conclude-consider')
        @include ('member.inc-view.modal.modal-conclude-amendment')
        @include ('member.inc-view.modal.modal-conclude-renew')
        @include ('member.inc-view.modal.modal-conclude-progress')
        @include ('member.inc-view.modal.modal-conclude-termination')
        @include ('member.inc-view.modal.modal-protocol-info')

        @include ('member.inc-view.box-side')
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

    // $('.pi_student, .pi_other, .lab_animal_exp').hide();
    // $(document).on('change', ".pi_item", function(e) {
    //     var id = $(this).attr('data-id');
    //     if ($(this).val() == 3 || $(this).val() == 4 || $(this).val() == 5) {
    //         $('#pi_student'+id).show();
    //         $('#pi_other'+id).hide();
    //     } else if ($(this).val() == 6) {
    //         $('#pi_student'+id).hide();
    //         $('#pi_other'+id).show();
    //     } else {
    //         $('#pi_student'+id).hide();
    //         $('#pi_other'+id).hide();
    //     }
    // });

    $(document).on('click', ".consider", function () {
        var tr = $(this).attr('data-id');
        //alert(tr);
        $("a[data-id="+tr+"]").attr('class', 'badge badge-pill badge-success consider');
        //$(".del11" + tr).remove();
        $.ajax({
            url: "{{route('member.protocol.secretary')}}",
            data: {
                "_token": "{{ csrf_token() }}",
                'id': "{{ request()->id }}",
                'number': tr 
            },
            type: "POST",
            async: false,
            success: function (data) {
                var obj = jQuery.parseJSON(data);
                $("textarea.textareaConsider").val(obj.comment);
                if(obj.protocol_status=="ไม่เหมาะสม"){
                    document.getElementById("rad-conclude-consider_1").checked = true;
                    document.getElementById("rad-conclude-consider_3").checked = false;
                    document.getElementById("rad-conclude-consider_2").checked = false;
                }
                if(obj.protocol_status=="ไม่เกี่ยวข้อง"){
                    document.getElementById("rad-conclude-consider_3").checked = true;
                    document.getElementById("rad-conclude-consider_2").checked = false;
                    document.getElementById("rad-conclude-consider_1").checked = false;
                }
                if(obj.protocol_status=="ไม่มีข้อมูล"){
                    document.getElementById("rad-conclude-consider_2").checked = true;
                    document.getElementById("rad-conclude-consider_3").checked = false;
                    document.getElementById("rad-conclude-consider_1").checked = false;
                }
                
                
                
            }
        });

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

$(document).ready(function (e) {
    
    $(".Merge").click(function(){
        var id = this.value;
        var sumValue = '';
        $.each($('textarea[name="comment'+id+'[]"]'), function(i, v) {
            sumValue += v.value;
        })
        $("#Merge"+id).val("");
        $("#Merge"+id).val(sumValue);
     });
});
</script>
<script type="text/javascript">

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

$('#Protocol_opic29').on('submit', function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "{{route('member.edit.Protocol_opic29')}}",
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
$('#Protocol_opic_progress').on('submit', function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "{{route('member.edit.progress')}}",
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


</script>
@endsection