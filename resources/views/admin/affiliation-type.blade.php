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
                                <h5 class="m-b-10">ประเภทสังกัด</h5>
                                <ul class="breadcrumb-title b-t-default p-t-10">
                                    <li class="breadcrumb-item">
                                        <a href="index.html"> <i class="fa fa-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">ประเภทสังกัด</a>
                                    </li>
                                </ul>
                                <div class="text-right">
                                    @can('manage')<button type="button" class="btn btn-info waves-effect md-trigger"
                                        onclick="clearText()" data-modal="modal-2">เพิ่มประเภทสังกัด</button>@endcan

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
                                            <th>Common Name</th>
                                            <th>Type</th>
                                            @can('edit')<th>Edit</th>@endcan
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($Affiliation_type AS $key => $r)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$r->name}}</td>
                                            <td>{{$r->ststusName->name}}</td>
                                            {{-- <td><span
                                                    class="pcoded-badge label label-{{$r->ststusName->action}}">{{$r->ststusName->name}}</span>
                                            </td> --}}
                                            @can('edit')<td><button type="button" class="btn btn-primary mobtn"
                                                    onclick="editRegister({{$r->id}})">Edit</button></td>@endcan
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Common Name</th>
                                            <th>Type</th>
                                            @can('edit')<th>Edit</th>@endcan
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
                <h3>เพิ่มประเภทสังกัด</h3>
                <div class="contents">
                    <form class="form-horizontal" method="POST" action="{{ route('admin.affiliationTypeAdd') }}">
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
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary mobtn">Save</button>
                            <button type="button" class="btn btn-secondary mobtn m2" onclick="clearText()"
                                data-dismiss="modal">Close</button>

                        </div>
                </div>
                </form>
            </div>
        </div>
        <div class="modal md-effect-2 fade" id="editRegister" style="width: 90%;">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header pt-2 pb-2 btnh_primary">
                        <h5 class="modal-title" id="exampleModalLabel">เพิ่มประเภทสังกัด</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body contents">
                        <div class="card-block">
                            <form class="form-horizontal" method="POST" action="{{ route('admin.affiliationTypeEdit') }}">
                                {{ csrf_field() }}
                                <div class="card-block">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control form-control-normal text name"
                                                name="name" autocomplete="off" required>
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

    function editRegister(id) {
        clearText();
        $("#editRegister").modal("show");
        $.ajax({
            url: "{{ route('admin.affiliationTypeGet') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                'id': id
            },
            type: "POST",
            async: false,
            success: function (data) {
                var obj = jQuery.parseJSON(data);
                $(".name").val(obj.Affiliation_type.name);
                $(".id").val(obj.Affiliation_type.id);
                $(".status").val(obj.Affiliation_type.status);
            }
        });
    }

</script>
@endsection
