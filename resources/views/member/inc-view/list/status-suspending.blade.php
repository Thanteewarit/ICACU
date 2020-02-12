<table id="list_sp" class="listed table table-hover table-sm mt-0 display nowrap w-100">
    <thead>
        <tr>
            <th></th>
            <th>Protocol No.</th>
            <th>Type</th>
            <th>Protocol Title</th>
            <th>Submitted</th>
            <th>Status</th>
            <th width="30" class="text-center"><i class="material-icons md-16">notifications_none</i></th>
        </tr>
    </thead>
    <tbody>
        @for($i=0; $i<60; $i++)
        <tr>
            <td></td>
            <td>ICACU-A-000001</td>
            <td>ICACU-A</td>
            <td>Lorem Ipsum is simply dummy text of the printing...</td>
            <td>31/05/62</td>
            <td>Submitted</td>
            <td class="text-center"><a href="{{ route('member.protocol_list_view.index')}}"><i class="material-icons md-16 md-noti active">lock</i></a></td>
        </tr>
        @endfor
        
    </tbody>
</table>