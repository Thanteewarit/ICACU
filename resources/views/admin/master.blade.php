<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    @include('admin.inc_header')
    @yield('css')
    <style>
    .contents {
        max-height: 600px;
        width: 100%;
        overflow-y: scroll;
    }

    body,
    html {
        font-family: 'Roboto', 'Prompt', sans-serif;
        padding: 0px !important;
        color: #666;

    }
    </style>
</head>
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
@elseif(Session::has('no'))
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

@endif

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            @include('admin.inc_nav')
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper"></div>
                @include('admin.inc_menu')
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        @yield('mainBody')
                        <!-- Main-body end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @include('admin.inc_footer')
    @yield('scripts')
</body>
<script type="text/javascript">
$(document).ready(function() {
    $('.pcoded-header').attr('header-theme', 'theme4');
    $('.pcoded-navbar').attr('active-item-theme', 'theme8');
});
</script>

</html>