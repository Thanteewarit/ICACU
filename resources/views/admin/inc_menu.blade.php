<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu active pcoded-trigger">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                    <span class="pcoded-mtext">จัดการผู้ใช้งาน</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="{{route('admin.home.index')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">ผู้ใช้งานทั้งหมด</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{route('admin.approve.show')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">ผู้ใช้งานรอการ อนุมัติ</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{route('admin.userstatus.index')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">สถานภาพ ผู้ใช้งาน</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    
                </ul>
            </li>
            <li class="pcoded-hasmenu active pcoded-trigger">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-linux"></i><b>D</b></span>
                    <span class="pcoded-mtext">Manage animal</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="{{route('admin.animal_type.index')}}">
                            <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>
                            <span class="pcoded-mtext">Animal Type</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{route('admin.animalcommon')}}">
                            <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>
                            <span class="pcoded-mtext">Animal Common</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                            <a href="{{route('admin.animalStock')}}">
                                <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>
                                <span class="pcoded-mtext">Animal Stock / Strain</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>

                </ul>
                
            </li>
            <li class="pcoded-hasmenu active pcoded-trigger">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-linux"></i><b>D</b></span>
                    <span class="pcoded-mtext">จัดการทั่วไป</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="{{route('admin.affiliationType')}}">
                            <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>
                            <span class="pcoded-mtext">ประเภทสังกัด</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{route('admin.affiliation')}}">
                            <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>
                            <span class="pcoded-mtext">เพิ่มสังกัด</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    {{-- <li class="">
                        <a href="{{route('admin.committee.index')}}">
                            <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>
                            <span class="pcoded-mtext">เพิ่มรายชื่อ รีวิว</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li> --}}
                </ul>
                
            </li>
        </ul>
    </div>
</nav>