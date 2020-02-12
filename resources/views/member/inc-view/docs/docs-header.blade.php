<header class="work-head">
    <ul class="head-menu">
        <li>
            <span class="head-tab font-weight-bold">
            <i class="material-icons mr-2"  onclick="location.href='{{ route('member.protocol_list.index')}}';">arrow_back</i>
                Protocol Docs.
            </span>
        </li>
    </ul>
    <ul class="doc-info">
        <li><span class="mr-4">NO : {{ $Protocol_docs->protocol_number }} Ver.{{ $Protocol_docs->number_ver }}/{{ $Protocol_docs->number_run }}</span></li>
        <li><span class="mr-4">TYPE : {{ $Protocol_docs->Protocol_typeName->name }}</span></li>
        <li><span class="mr-4">BY : {{ $Protocol_docs->usersName->name}}</span></li>
        <li><span class="mr-4">DATE : {{ DateThai($Protocol_docs->created_at) }}</span></li>
    </ul>

    
    @include ('member.inc-view.docs.state-draft')
    

</header>