@extends('officer.master')
@section('title','Create New Protocol')
@section('css')
<link rel="stylesheet" href="http://ppn.ttwdata.com/files/new/jquery-ui.1.10.1.min.css" type="text/css" />
<link rel="stylesheet" href="http://ppn.ttwdata.com/files/new/style.css" type="text/css" />
@endsection
<link rel="stylesheet" href="{{asset('member/css/swiper.min.css')}}" />
@section('content')

<body class="main">
    <aside class="sidebar">
    @include('officer.sidebar')
    </aside>
    <div class="workspace">
        @include ('officer.inc.docs.docs-header')
        @include ('officer.inc.docs.docs-body')


        @include ('officer.inc.modal.modal-delete-protocol')
        @include ('officer.inc.modal.modal-conclude-consider')
        @include ('officer.inc.modal.modal-conclude-amendment')
        @include ('officer.inc.modal.modal-conclude-renew')
        @include ('officer.inc.modal.modal-conclude-progress')
        @include ('officer.inc.modal.modal-conclude-termination')
        @include ('officer.inc.modal.modal-protocol-info')
        @include ('officer.inc.modal.modal-replay')

        @include ('officer.inc.box-side')
    </div>
</body>
@endsection

@section('scripts')
<script  src="{{asset('files/assets/pages/chart/echarts/js/echarts-all.js')}}" ></script>
<script type="text/javascript" src="http://ppn.ttwdata.com/files/new/jquery-ui.1.12.1.min.js"></script>
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

    //$('.pi_student, .pi_other, .lab_animal_exp').hide();
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
    // $(document).on('keypress', ".reviewerSearch", function(e) {
    //     console.log($(this).val());
    // }); 
    
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
            sumValue += i+1;
            sumValue += ".";
            sumValue += v.value;
            sumValue += "\n";
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
        url: "{{route('officer.reviewer.create')}}",
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
        url: "{{route('officer.reviewer.create')}}",
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
        url: "{{route('officer.reviewer.create')}}",
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
        url: "{{route('officer.reviewer.create')}}",
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
        url: "{{route('officer.reviewer.create')}}",
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
        url: "{{route('officer.reviewer.create')}}",
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
        url: "{{route('officer.reviewer.create')}}",
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
        url: "{{route('officer.reviewer.create')}}",
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
        url: "{{route('officer.reviewer.create')}}",
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
        url: "{{route('officer.reviewer.create')}}",
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
        url: "{{route('officer.reviewer.create')}}",
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
        url: "{{route('officer.reviewer.create')}}",
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
        url: "{{route('officer.reviewer.create')}}",
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
        url: "{{route('officer.reviewer.create')}}",
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
        url: "{{route('officer.reviewer.create')}}",
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
        url: "{{route('officer.reviewer.create')}}",
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
        url: "{{route('officer.reviewer.create')}}",
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
        url: "{{route('officer.reviewer.create')}}",
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
        url: "{{route('officer.reviewer.create')}}",
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
        url: "{{route('officer.reviewer.create')}}",
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
        url: "{{route('officer.reviewer.create')}}",
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
        url: "{{route('officer.reviewer.create')}}",
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
        url: "{{route('officer.reviewer.create')}}",
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
        url: "{{route('officer.reviewer.create')}}",
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
        url: "{{route('officer.reviewer.create')}}",
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
        url: "{{route('officer.reviewer.create')}}",
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
        url: "{{route('officer.reviewer.create')}}",
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
        url: "{{route('officer.reviewer.create')}}",
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
        url: "{{route('officer.reviewer.create')}}",
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
        url: "{{route('officer.reviewer.create')}}",
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
$('#AmendmentProtocol').on('submit', function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "{{route('officer.protocol_view.rewnewFale')}}",
        data: formData,
        type: "POST",
        async: false,
        contentType: false,
        processData: false,
        success: function (data) {
            swal({
                title: "ทำรายการสำเร็จ",
                text: "",
                icon: "success",
                button: "ยืนยัน",
            })
            .then((value) => {
            window.location="{{route('officer.protocol_list.index')}}";
            });

        }

    });

});
$(".reviewerSearch").autocomplete({
    minLength: 0,

    source: function(request, response) {
        $.ajax({  
            url: "{{route('officer.president.reviewer')}}",
            data: {
                id: request.term,
                "_token": "{{ csrf_token() }}",
                //factor: $("#kpi_type_id").val(),
            },
            type: "get",
            dataType: "json",
            success: function(data) {
                response(data);
            },
        });
    },
    select: function(event, ui) {
        var td = '<tr class="del'+ui.item.id+'">';
        td += '<td>';
        td += '<div class="custom-control custom-checkbox" style="top:-3px;">';
        td += '<input type="checkbox" class="custom-control-input" name="users_id[]" id="chk_rev_1" value="'+ui.item.id+'" checked> ';
        td += '<input type="hidden" name="protocol_id" value="{{ request()->id }}">';
        td += '<label class="custom-control-label" for="chk_rev_1"></label>';
        td += '</div>';
        td += '</td>';
        td += '<td>'+ui.item.name+'</td>';
        td += '<td>'+ui.item.email+'</td>';
        td += '<td class="text-center p-0">';
        td += '<span type="button" class="btn btn-light text-danger rounded-0 px-1 m-0 float-left shadow-none material-icons minus" data-tr="'+ui.item.id+'">delete</span>';
        td += '</td>';
        td += '</tr>';
        $(".reviewerAppen").append(td);
        setTimeout(function(){ $("#reviewerSearch").val(''); }, 500);
        
    }

});

$(document).on('click', ".minus", function () {
    var tr = $(this).attr('data-tr');
    var id = $(this).attr('data-id');
        $(".del" + tr).remove();
        $.ajax({  
            url: "{{route('officer.president.reviewerDel')}}",
            data: {
                id: id,
                "_token": "{{ csrf_token() }}",
                //factor: $("#kpi_type_id").val(),
            },
            type: "POST",
            dataType: "json",
            success: function(data) {
                response(data);
            },
        });
    });

    $('#SendBack').on('submit', function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "{{route('officer.SendtoUser')}}",
        data: formData,
        type: "POST",
        async: false,
        contentType: false,
        processData: false,
        success: function (data) {
            swal({
                title: "ทำรายการสำเร็จ",
                text: "",
                icon: "success",
                button: "ยืนยัน",
            })
            .then((value) => {
            window.location="{{route('officer.protocol_list.index')}}";
            });
            

        }

    });

});
$(document).on('click', ".consider", function () {
        var tr = $(this).attr('data-id');
        //alert(tr);
        $("a[data-id=" + tr + "]").attr('class', 'badge badge-pill badge-success consider');
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
                if (obj.protocol_status == "ไม่เหมาะสม") {
                    document.getElementById("rad-conclude-consider_1").checked = true;
                    document.getElementById("rad-conclude-consider_3").checked = false;
                    document.getElementById("rad-conclude-consider_2").checked = false;
                }
                if (obj.protocol_status == "ไม่เกี่ยวข้อง") {
                    document.getElementById("rad-conclude-consider_3").checked = true;
                    document.getElementById("rad-conclude-consider_2").checked = false;
                    document.getElementById("rad-conclude-consider_1").checked = false;
                }
                if (obj.protocol_status == "ไม่มีข้อมูล") {
                    document.getElementById("rad-conclude-consider_2").checked = true;
                    document.getElementById("rad-conclude-consider_3").checked = false;
                    document.getElementById("rad-conclude-consider_1").checked = false;
                }



            }
        });

    });
$('#AddReviewer5').on('submit', function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "{{route('officer.president.create')}}",
        data: formData,
        type: "POST",
        async: false,
        contentType: false,
        processData: false,
        success: function (data) {
            swal({
                title: "ทำรายการสำเร็จ",
                text: "",
                icon: "success",
                button: "ยืนยัน",
            });
            // .then((value) => {
            // window.location="{{route('officer.protocol_list.index')}}";
            // });

        }

    });

});
</script>
<script>
    $(document).ready(function () {
        var dateIn = '{{ dateDif($Protocol_opic01->created_at) }}';
        dashboardEcharts(dateIn);
        
    });
    $(window).on('resize', function () {
        dashboardEcharts();
    });
    var timeTicket2 = setInterval(function () {

        var dateIn = '{{ dateDif(substr($Protocol_docs->created_at,0,10)) }}';
        console.log(dateIn);
        dashboardEcharts(dateIn);
    }, 2000);

    function dashboardEcharts(dateIn) {
        var myChartGauge = echarts.init(document.getElementById('server-load'));

        var optionGauge = {

            tooltip: {
                formatter: "{b} : {c}%"
            },
            toolbox: {
                show: false,
                feature: {
                    mark: {
                        show: false
                    },
                    restore: {
                        show: false
                    },
                    saveAsImage: {
                        show: true
                    }
                }
            },
            series: [{
                name: 'Server Load',
                type: 'gauge',
                center: ['50%', '50%'],
                radius: ['0%', '100%'],
                axisLine: {
                    show: true,
                    lineStyle: {
                        color: [
                            [0.8, '#4680ff'],
                            [1, '#FC6180']
                        ],
                        width: 10
                    }
                },
                title: {
                    show: false,
                    offsetCenter: [0, '120%'],
                    textStyle: {
                        color: '#93BE52',
                        fontSize: 15
                    }
                },
                detail: {
                    show: true,
                    backgroundColor: 'rgba(0,0,0,0)',
                    borderWidth: 0,
                    borderColor: '#ccc',
                    width: 100,
                    height: 40,
                    offsetCenter: [0, '40%'],
                    formatter: '{value}%',
                    textStyle: {
                        color: 'auto',
                        fontSize: 20
                    }
                },

                data: [{
                    value: 50,
                    name: 'Server Load (MB)'
                }]
            }]
        };

        gauge_load_chart(optionGauge);
        var timeTicket = setInterval(function () {

            gauge_load_chart(optionGauge);
        }, 2000);


        function gauge_load_chart(optionGauge) {

            // optionGauge.series[0].data[0].value = (Math.random() * 100).toFixed(2) - 0;
            optionGauge.series[0].data[0].value = dateIn;
            myChartGauge.setOption(optionGauge, true);
        }

    }
</script>
<script>
    $('.topic-save').on('click', function (e) {
        $(this).attr('class', ' btn-c material-icons topic-save-ed');

});
</script>
@endsection