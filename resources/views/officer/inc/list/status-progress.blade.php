<table id="list_rn" class="listed table table-hover table-sm mt-0 display nowrap w-100">
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
        @foreach($Protocol_docsProgress as $key=> $r)
        <tr>
                <td></td>
                <td>{{ $r->protocol_number }}</td>
                <td>{{ $r->Protocol_typeName->name }}</td>
                <td>{{ $r->Protocol_opic01->animal_protocol_th }}</td>
                <td>{{ DateThai($r->created_at) }}</td>
                <td>{{ $r->Job_statusName->name }}</td>
                <td class="text-center"><a href="{{ route('officer.protocol_view.index',array('id'=>$r->id, 'type' => 'Progress'))}}"><i class="material-icons md-16 md-noti active">rate_review</i></a></td>
            </tr>
        @endforeach
    </tbody>
</table>