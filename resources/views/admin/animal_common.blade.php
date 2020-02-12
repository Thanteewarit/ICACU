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
                                <h5 class="m-b-10">Manage animal</h5>
                                <ul class="breadcrumb-title b-t-default p-t-10">
                                    <li class="breadcrumb-item">
                                        <a href="index.html"> <i class="fa fa-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Manage animal</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Animal model</a>
                                    </li>
                                </ul>
                                <div class="text-right">
                                    @can('manage')<button type="button" class="btn btn-info waves-effect md-trigger"
                                        onclick="clearText()" data-modal="modal-2">Add animals</button>@endcan
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
                                            <th>Type</th>
                                            <th>Common name</th>
                                            <th>ชื่อสามัญ (ไทย)</th>
                                            <th>Scientific Name</th>
                                            <th>Genetic Diversty</th>
                                            <th>Status</th>
                                            @can('edit')<th>Edit</th>@endcan
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($Animal_common_name AS $key => $r)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$r->animalTypeName->Name}}</td>
                                            <td>{{$r->common_name_en}}</td>
                                            <td>{{$r->common_name_th}}</td>
                                            <td>{{$r->scientific_name}}</td>
                                            <td>{{$r->genetic_diversty}}</td>


                                            <td><span
                                                    class="pcoded-badge label label-{{$r->ststusName->action}}">{{$r->ststusName->name}}</span>
                                            </td>
                                            @can('edit')<td><button type="button" class="btn btn-primary mobtn"
                                                    onclick="editRegister({{$r->id}})">Edit</button></td>@endcan
                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <div class="md-modal md-effect-2" id="modal-2">
                            <div class="md-content">
                                <h3>Add Animal model</h3>
                                <div class="contents">
                                    <form class="form-horizontal" method="POST"
                                        action="{{ route('admin.animalcommon.add') }}">
                                        {{ csrf_field() }}
                                        <div class="card-block">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Animal type</label>
                                                <div class="col-sm-9">
                                                    <select name="animals_type" class="form-control" required>
                                                        <option value="">กรุณาเลือก</option>
                                                        @foreach($Animals_type AS $key => $r)
                                                        <option value="{{$r->id}}">{{$r->Name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Common name</label>
                                                <div class="col-sm-9">
                                                    <input type="text"
                                                        class="form-control form-control-normal text common_name_en"
                                                        name="common_name_en" autocomplete="off" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">ชื่อสามัญ (ไทย) </label>
                                                <div class="col-sm-9">
                                                    <input type="text"
                                                        class="form-control form-control-normal text common_name_th"
                                                        name="common_name_th" autocomplete="off" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Scientific Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text"
                                                        class="form-control form-control-normal text scientific_name"
                                                        name="scientific_name" values=" " required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Genetic Diversty</label>
                                                <div class="col-sm-9">
                                                    <input type="text"
                                                        class="form-control form-control-normal text genetic_diversty"
                                                        name="genetic_diversty" values=" " required>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">status</label>
                                                <div class="col-sm-9">
                                                    <select name="animal_type" class="form-control" required>
                                                        <option value="">กรุณาเลือก</option>
                                                        @foreach($Status AS $key => $r)
                                                        <option value="{{$r->id}}">{{$r->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary mobtn">Save</button>
                                            <button type="button" class="btn btn-secondary mobtn" onclick="clearText()"
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
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Animal model</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body contents">
                                        <div class="card-block">
                                            <form class="form-horizontal" method="POST"
                                                action="{{ route('admin.animalcommon.edit') }}">
                                                {{ csrf_field() }}
                                                <div class="card-block">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Animal type</label>
                                                        <div class="col-sm-9">
                                                            <select name="animals_type" class="form-control animals_type" required>
                                                                <option value="">กรุณาเลือก</option>
                                                                @foreach($Animals_type AS $key => $r)
                                                                <option value="{{$r->id}}">{{$r->Name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Common name</label>
                                                        <div class="col-sm-9">
                                                            <input type="text"
                                                                class="form-control form-control-normal text common_name_en"
                                                                name="common_name_en" autocomplete="off" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">ชื่อสามัญ (ไทย) </label>
                                                        <div class="col-sm-9">
                                                            <input type="text"
                                                                class="form-control form-control-normal text common_name_th"
                                                                name="common_name_th" autocomplete="off" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Scientific Name</label>
                                                        <div class="col-sm-9">
                                                            <input type="text"
                                                                class="form-control form-control-normal text scientific_name"
                                                                name="scientific_name" values=" " required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Genetic Diversty</label>
                                                        <div class="col-sm-9">
                                                            <input type="text"
                                                                class="form-control form-control-normal text genetic_diversty"
                                                                name="genetic_diversty" values=" " required>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">status</label>
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
                                                    <button type="button" class="btn btn-secondary mobtn"
                                                        onclick="clearText()" data-dismiss="modal">Close</button>
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
            url: "{{ route('animalShow') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                'id': id
            },
            type: "POST",
            async: false,
            success: function (data) {
                var obj = jQuery.parseJSON(data);
                $(".animals_type").val(obj.Animal_common_name.animals_type);
                $(".common_name_en").val(obj.Animal_common_name.common_name_en);
                $(".common_name_th").val(obj.Animal_common_name.common_name_th);
                $(".scientific_name").val(obj.Animal_common_name.scientific_name);
                $(".genetic_diversty").val(obj.Animal_common_name.genetic_diversty);
                $(".status").val(obj.Animal_common_name.status);
                $(".id").val(obj.Animal_common_name.id);
            }
        });
    }

</script>
@endsection
