<div class="modal fade" id="modal_protocol_info" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="material-icons">info</i> Protocol Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>

                    <div class="row">
                        <div class="col-12">
                            <div class="d-block mx-auto my-3 text-center">
                                <div id="server-load" style="height:300px; z-index: 999999;"></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <P><strong class="mr-2">Protocol No. :</strong>{{ $Protocol_docs->protocol_number }} Ver.{{ $Protocol_docs->number_ver }}/{{ $Protocol_docs->number_run }}</p>
                            <P><strong class="mr-2">Status :</strong>{{ $Protocol_docs->Job_statusName->name }}</p>
                            <P><strong class="mr-2">Protocol Title :</strong>{{ $Protocol_opic01->animal_protocol_th }}</p>
                            <P><strong class="mr-2">Submitted Date :</strong>{{ DateThai($Protocol_opic01->updated_at) }}</p>
                            @if($Protocol_opic_progress_count>0)
                            <P><strong class="mr-2">Progress Date :</strong>{{ DateThai($Protocol_opic_progress->created_at) }}</p>
                            @else
                            <P><strong class="mr-2">Progress Date :</strong>Waiting</p>
                            @endif
                        </div>
                    </div>
                
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>