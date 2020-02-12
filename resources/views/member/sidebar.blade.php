<nav class="mainmenu">
    <ul>
        <li>
            <!-- <button class="expmenu"><img src="./img/logo_tu_cut.svg" /></button> -->
            <button class="material-icons expmenu">dehaze</button> 
        </li>
        <li><button class="material-icons" onclick="location.href='{{ url('My/dashboard') }}';" title="Dashboard">pie_chart</button></li>
        <li><button class="material-icons" onclick="location.href='{{ url('My/create') }}';" title="Create New">create</button></li>
        <li><button class="material-icons" onclick="location.href='{{ url('My/protocol-list') }}';" title="Protocol">work</button></li>
        <li><button class="material-icons" onclick="location.href='{{ url('My/protocol-draft') }}';" title="Draft">insert_drive_file</button></li>
        <!-- <li><button class="material-icons" onclick="location.href='protocol-trash.php';">delete_sweep</button></li> -->
    </ul>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <button>
            <img height="18" src="{{asset('member/img/ic/ic_logout.svg')}} " />
        </button>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</nav>