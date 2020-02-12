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
                                <h5 class="m-b-10">System to add users</h5>
                                <ul class="breadcrumb-title b-t-default p-t-10">
                                    <li class="breadcrumb-item">
                                        <a href="index.html"> <i class="fa fa-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Manage users</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">System approve users</a>
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
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Last update</th>
                                            @can('edit')<th>Edit</th>@endcan
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($user AS $key => $r)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$r->name}}</td>
                                            <td>{{$r->email}}</td>
                                            <td><span class="pcoded-badge label label-{{$r->ststusName->action}}">{{$r->ststusName->name}}</span></td>
                                            <td>{{$r->updated_at}}</td>
                                            @can('edit')<td><button type="button" class="btn btn-primary mobtn"
                                                    onclick="editRegister({{$r->id}})">Edit</button></td>@endcan
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Last update</th>
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
                                                action="{{ route('admin.approveed') }}">
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
                                                        <label class="col-sm-3 col-form-label">Email</label>
                                                        <div class="col-sm-9">
                                                            <input type="text"
                                                                class="form-control form-control-normal text email"
                                                                name="email" id="email" onchange=" checkEmail()"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Position</label>
                                                        <div class="col-sm-9">
                                                            <select name="position" class="form-control position"
                                                                required>
                                                                <option value="">กรุณาเลือก</option>
                                                                @foreach($role AS $key => $r)
                                                                <option value="{{$r->id}}">{{$r->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">สิทธิ์ การจัดการ</label>
                                                        <div class="col-sm-9">
                                                            <div class="checkbox-zoom zoom-success">
                                                                <label>
                                                                    <input type="checkbox" class="permission"
                                                                        id="permission_id1" name="permission_id[]"
                                                                        value="1">
                                                                    <span class="cr">
                                                                        <i
                                                                            class="cr-icon icofont icofont-ui-check txt-success"></i>
                                                                    </span>
                                                                    <span>manageuser</span>
                                                                </label>
                                                            </div>
                                                            <div class="checkbox-zoom zoom-success">
                                                                <label>
                                                                    <input type="checkbox" class="permission"
                                                                        id="permission_id2" name="permission_id[]"
                                                                        value="2">
                                                                    <span class="cr">
                                                                        <i
                                                                            class="cr-icon icofont icofont-ui-check txt-success"></i>
                                                                    </span>
                                                                    <span>read</span>
                                                                </label>
                                                            </div>
                                                            <div class="checkbox-zoom zoom-success">
                                                                <label>
                                                                    <input type="checkbox" class="permission"
                                                                        id="permission_id3" name="permission_id[]"
                                                                        value="3">
                                                                    <span class="cr">
                                                                        <i
                                                                            class="cr-icon icofont icofont-ui-check txt-success"></i>
                                                                    </span>
                                                                    <span>write</span>
                                                                </label>
                                                            </div>
                                                            <div class="checkbox-zoom zoom-success">
                                                                <label>
                                                                    <input type="checkbox" class="permission"
                                                                        id="permission_id4" name="permission_id[]"
                                                                        value="4">
                                                                    <span class="cr">
                                                                        <i
                                                                            class="cr-icon icofont icofont-ui-check txt-success"></i>
                                                                    </span>
                                                                    <span>edit</span>
                                                                </label>
                                                            </div>
                                                            <div class="checkbox-zoom zoom-success">
                                                                <label>
                                                                    <input type="checkbox" class="permission"
                                                                        id="permission_id5" name="permission_id[]"
                                                                        value="5">
                                                                    <span class="cr">
                                                                        <i
                                                                            class="cr-icon icofont icofont-ui-check txt-success"></i>
                                                                    </span>
                                                                    <span>delete</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary mobtn">Save</button>
                                                    <input type="hidden" class="id" name="id">
                                                    <button type="button" class="btn btn-secondary mobtn"
                                                        onclick="clearText()" data-dismiss="modal">Close</button>
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
    document.getElementById("permission_id1").checked = false;
    document.getElementById("permission_id2").checked = false;
    document.getElementById("permission_id3").checked = false;
    document.getElementById("permission_id4").checked = false;
    document.getElementById("permission_id5").checked = false;
}

function editRegister(id) {
    clearText();
    $("#editRegister").modal("show");
    $.ajax({
        url: "{{ route('admin.home.get') }}",
        data: {
            "_token": "{{ csrf_token() }}",
            'id': id
        },
        type: "POST",
        async: false,
        success: function(data) {
            var obj = jQuery.parseJSON(data);
            $(".email").val(obj.userall.email);
            $(".name").val(obj.userall.name);
            $(".id").val(obj.userall.id);
            $(".position").val(obj.HasRoles.role_id);

            $.each(obj.HasPermissions, function(key, val) {

                if (val.permission_id === 1) {
                    document.getElementById("permission_id1").checked = true;
                }
                if (val.permission_id === 2) {
                    document.getElementById("permission_id2").checked = true;
                }
                if (val.permission_id === 3) {
                    document.getElementById("permission_id3").checked = true;
                }
                if (val.permission_id === 4) {
                    document.getElementById("permission_id4").checked = true;
                }
                if (val.permission_id === 5) {
                    document.getElementById("permission_id5").checked = true;
                }
            });


        }
    });
}
</script>
@endsection