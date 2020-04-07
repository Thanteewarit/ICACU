<!DOCTYPE html>
<html>
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
<head>
    <title>IACUC Login</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('member/css/bootstrap.min.css')}} ">
    <link rel="stylesheet" href="{{asset('member/css/styles.css')}} " />
</head>

<body>

    <main class="login">
        <form class="md-float-material" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
        <img class="img-fluid mb-2" src="{{asset('member/img/logo_tu_320.svg')}}" />
        <h1 class="site-title">
            <span class="line mr-3"></span>
            <span>IACUC SYSTEM</span>
            <span class="line ml-3"></span>
        </h1>
            <input type="text" name="email" placeholder="Username" required />
            <input type="password" name="password" placeholder="Password" required />
            <button type="submit" class="btn btn-block btn-danger py-2 mb-4 mt-3" >LOGIN</button>
        </form>
        <div class="row w-100">
            <button class="btn col-5 mr-auto btn-warning" onclick="location.href='{{ route('member.register.index')}}';">Registeration</button>
            <button class="btn col-5 ml-auto btn-secondary" onclick="location.href='{{ route('member.register.forgetpass')}}';">Forget
                Password</button>
        </div>
    </main>

    <!-- Site JS -->
    <script src="{{asset('memberjs/bootstrap.min.js')}} "></script>
    <script src="{{asset('memberjs/jquery-3.3.1.min.js')}} "></script>
    <script src="{{asset('memberjs/popper.min.js')}} "></script>
    <script src="{{asset('memberjs/script.js')}} "></script>
    
    <script src="{{asset('files/myScript/sweetalert.min.js')}}"></script>
    <!-- Site JS -->

</body>


</html>
