@extends('admin.master')
@section('title','หน้าแรก')
@section('css')
@endsection

@section('mainBody')
<div class="main-body">
    <div class="page-wrapper">

        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="page-header">
                            <div class="card-block">
                                <h5 class="m-b-10">Manage userstatus</h5>
                                <ul class="breadcrumb-title b-t-default p-t-10">
                                    <li class="breadcrumb-item">
                                        <a href="index.html"> <i class="fa fa-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Manage user</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Manage userstatus</a>
                                    </li>



                                </ul>
                            </div>
                        </div>

                        <div class="card-block">
                            <h4 class="sub-title"></h4>
                            <div class="dt-responsive table-responsive">
                                <table id="excel-bg" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>name</th>
                                            <th>Status</th>
                                            @can('edit')<th>Edit</th>@endcan
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($StatusUser AS $key => $r)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$r->name}}</td>
                                            <td><span class="pcoded-badge label label-{{$r->ststusName->action}}">{{$r->ststusName->name}}</span></td>
                                            @can('edit')<td><button type="button" class="btn btn-primary mobtn"
                                                    onclick="editRegister({{$r->id}})">Edit</button></td>@endcan
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>name</th>
                                            <th>Status</th>
                                            @can('edit')<th>Edit</th>@endcan
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="modal md-effect-2 fade" id="editRegister" style="width: 90%;">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header pt-2 pb-2 btnh_primary">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body contents">
                                        <div class="card-block">

                                            <form class="form-horizontal" method="POST"
                                                action="{{ route('anima.get.userstatusEdit') }}">
                                                {{ csrf_field() }}
                                                <div class="card-block">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Name</label>
                                                        <div class="col-sm-9">
                                                            <input type="text"
                                                                class="form-control form-control-normal text name"
                                                                name="name" autocomplete="off" required>
                                                            @if ($errors->has('name'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Status</label>
                                                        <div class="col-sm-9">
                                                        <select name="status" class="form-control status" required>
                                                                <option value="">กรุณาเลือก</option>
                                                                @foreach($Status AS $key => $r)
                                                                <option value="{{$r->status}}">{{$r->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary mobtn">Save</button>
                                                    <input type="hidden" class="id" name="id">
                                                    <button type="button" class="btn btn-secondary mobtn"
                                                        onclick="clearText()" data-dismiss="modal">Close</button>
                                                        <input type="hidden" class="text id "name="id" values=" " required>
                                                </div>
                                            </form>

                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="md-overlay"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page body end -->
    </div>
</div>
@endsection

@section('scripts')
<script>
function clearText() {
    $(".text").val("");
}

function editRegister(id) {
    clearText();
    $("#editRegister").modal("show");
    $.ajax({
        url: "{{ route('anima.get.userstatus') }}",
        data: {
            "_token": "{{ csrf_token() }}",
            'id': id
        },
        type: "POST",
        async: false,
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            $(".name").val(obj.StatusUser.name);
            $(".status").val(obj.StatusUser.status);
            $(".id").val(obj.StatusUser.id);
        }
    });
}
</script>
@endsection