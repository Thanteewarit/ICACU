@if($Protocol_secretary_opicCount!=0)
<div class="alert alert-warning mb-5" role="alert">
    <h4><i class="material-icons">sms</i> Revise Remark</h4>
    <p>กรุณาแก้ไข ข้อมูลทุกข้อเหล่านี้ ให้ถูกต้อง และครบถ้วน </p>
    <hr>
    @foreach ($Protocol_secretary_opicV1 as $r)
    <a href="#" class="badge badge-pill badge-warning consider" data-toggle="modal" data-id="{{ $r->protocol_number }}" data-target="#modal_conclude_consider">{{ $r->protocol_number }}</a>
    @endforeach
    {{-- <a href="#" class="badge badge-pill badge-warning" data-toggle="modal" data-target="#modal_delete_protocol">11</a>
    
    <a href="#" class="badge badge-pill badge-warning" data-toggle="modal" data-target="#modal_conclude_amendment">13</a>
    <a href="#" class="badge badge-pill badge-warning" data-toggle="modal" data-target="#modal_conclude_renew">14</a>
    <a href="#" class="badge badge-pill badge-warning" data-toggle="modal" data-target="#modal_conclude_progress">15</a>
    <a href="#" class="badge badge-pill badge-warning" data-toggle="modal" data-target="#modal_conclude_termination">16</a> --}}
</div>
@endif