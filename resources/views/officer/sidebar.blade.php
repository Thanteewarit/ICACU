<nav class="mainmenu">
    <ul>
        <li>
            <!-- <button class="expmenu"><img src="./img/logo_tu_cut.svg" /></button> -->
            <button class="material-icons expmenu">dehaze</button>
        </li>
        <li><button class="material-icons" onclick="location.href='{{ route('officer.dashboard.index') }}';"
                title="Dashboard">pie_chart</button></li>
        <li><button class="material-icons" onclick="location.href='{{ route('officer.protocol_list.index') }}';"
                title="Protocol">work</button></li>
        <!-- <li><button class="material-icons" onclick="location.href='protocol-trash.php';">delete_sweep</button></li> -->
    </ul>
    {{-- <button class="d-none d-xl-block" onclick="location.href='login.php';" title="Logout">
        <img height="18" src="{{asset('member/img/ic/ic_logout.svg')}}" />
    </button> --}}
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <button>
            <img height="18" src="{{asset('member/img/ic/ic_logout.svg')}} " />
        </button>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</nav>
