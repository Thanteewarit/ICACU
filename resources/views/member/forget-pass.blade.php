@extends('member.master')
@section('title','FORGET PASSWORD')
@section('css')
@endsection

@section('content')

<body>

    <main class="login">
        <h3 class="text-danger font-weight-bold">FORGET PASSWORD</h3>
        <h1 class="site-title">
            <span class="line mr-3"></span>
            <span>IACUC SYSTEM</span>
            <span class="line ml-3"></span>
        </h1>
        <p class="w-100 font-weight-bold">Please enter the email.</p>
        <input type="email" placeholder="Your Email here..." />
        <button class="btn btn-block btn-danger py-2 mb-4 mt-3">SUBMIT</button>
        <a class="text-dark" href="{{ route('LoginOut') }}">BACK TO LOGIN</a>
    </main>

    <!-- Site JS -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/script.js"></script>
    <!-- Site JS -->
    
</body>
@endsection

@section('scripts')
@endsection