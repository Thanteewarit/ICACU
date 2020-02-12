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
                                <h5 class="m-b-10">Manage Committee</h5>
                                <ul class="breadcrumb-title b-t-default p-t-10">
                                    <li class="breadcrumb-item">
                                        <a href="index.html"> <i class="fa fa-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Manage Committee</a>
                                    </li>
                                </ul>
                                <div class="text-right">
                                    @can('manage')<button type="button" class="btn btn-info waves-effect md-trigger"
                                        onclick="clearText()" data-modal="modal-2">Add Committee</button>@endcan

                                </div>
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
                                            <th>email</th>
                                            <th>Tell</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($Committees AS $key => $r)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$r->name}}</td>
                                            <td>{{$r->email}}</td>
                                            <td>{{$r->tel}}</td>
                                            @can('edit')<td><button type="button" class="btn btn-primary mobtn"
                                                    onclick="edit({{$r->id}})">Edit</button></td>@endcan
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>name</th>
                                            <th>email</th>
                                            <th>Tell</th>
                                            <th>Edit</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-2" id="modal-2">
            <div class="md-content">
                <h3>Add Committee</h3>
                <div class="contents">
                    <form class="form-horizontal" method="POST" action="{{ route('admin.committee.create') }}">
                        {{ csrf_field() }}
                        <div class="card-block">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-normal text" name="name"
                                        autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">E-mail</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control form-control-normal text" name="email"
                                        autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tell</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control form-control-normal text" name="tel"
                                        autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary mobtn">Save</button>
                            <button type="button" class="btn btn-secondary mobtn m2" onclick="clearText()"
                                data-dismiss="modal">Close</button>

                        </div>
                </form>
            </div>
        </div>
        <div class="modal md-effect-2 fade" id="editRegister" style="width: 90%;">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header pt-2 pb-2 btnh_primary">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Animal model</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body contents">
                        <div class="card-block">
                            <form class="form-horizontal" method="POST" action="{{ route('admin.committee.edit') }}">
                                {{ csrf_field() }}
                                <div class="card-block">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control form-control-normal text name" name="name"
                                                autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">E-mail</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control form-control-normal text email"
                                                name="email" autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tell</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control form-control-normal text tel"
                                                name="tel" autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-block">
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
                        </div>


                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary mobtn">Save</button>
                            <button type="button" class="btn btn-secondary mobtn" onclick="clearText()"
                                data-dismiss="modal">Close</button>
                            <input type="hidden" class="text id " name="id" values=" " required>
                        </div>
                    </div>
                    </form>
                </div>

            </div>
        </div>


    </div>
    <div class="md-overlay"></div>
</div>

<!-- Page body end -->
</div>

</div>

@endsection

@section('scripts')
<script>
    function clearText() {

        $("#modal-2").modal("hide");
        $(".text").val("");
    }

    function edit(id) {
        clearText();
        $("#editRegister").modal("show");
        $.ajax({
            url: "{{ route('admin.committee.show') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                'id': id
            },
            type: "POST",
            async: false,
            success: function (data) {
                var obj = jQuery.parseJSON(data);
                $(".name").val(obj.Committees.name);
                $(".id").val(obj.Committees.id);
                $(".email").val(obj.Committees.email);
                $(".tel").val(obj.Committees.tel);
                $(".status").val(obj.Committees.status);
            }
        });
    }

</script>
@endsection
