<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="icon" type="image/png" href="{{asset('member/img/ic/favicon.png')}} ">
<link rel="icon" type="image/png" href="{{asset('member/img/ic/favicon@2x.png')}} ">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<link rel="stylesheet" href="{{asset('member/css/material-icons.css')}}" />
<link rel="stylesheet" href="{{asset('member/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('member/datatables/css/datatables.bootstrap4.css')}}" />
<link rel="stylesheet" href="{{asset('member/datatables/css/responsive.bootstrap4.css')}}" />
<link rel="stylesheet" href="{{asset('member/css/simplebar.css')}}"/>
<link rel="stylesheet" href="{{asset('member/css/styles.css')}}" />
<link rel="stylesheet" href="{{asset('member/css/docs.css')}}" />

@yield('css')
@if(Session::has('yes'))
<script>
    setTimeout(function() {
        swal({
            title: "Success !!",
            text: "{{ Session::get('yes')}}",
            icon: "success",
            button: "OK",
        });
    }, 1000);
</script>
@elseif(Session::has('no')){
<script>
    setTimeout(function() {
        swal({
            title: "warning !!",
            text: "{{ Session::get('no')}}",
            icon: "warning",
            button: "OK",
        });
    }, 1000);
</script>
}
@endif
</head>
@yield('content')

<!-- Site JS -->
<script src="{{asset('member/js/jquery-3.3.1.min.js')}} "></script>
<script src="{{asset('member/js/simplebar.min.js')}} "></script>
<script src="{{asset('member/js/popper.min.js')}} "></script>
<script src="{{asset('member/js/bootstrap.min.js')}} "></script>
<script src="{{asset('member/js/swiper.min.js')}} "></script>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script src="{{asset('member/js/script.js')}} "></script>
<script src="{{asset('files/myScript/sweetalert.min.js')}}"></script>
<!-- <script src="datatables/datatables.min.js"></script> -->
<script src="{{asset('member/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('member/datatables/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('member/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('member/datatables/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('member/datatables/js/dataTables.scrollResize.min.js')}}"></script>


<!-- Site JS -->
@yield('scripts')

</html>
