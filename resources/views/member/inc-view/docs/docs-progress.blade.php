<div class="docs-box">
    <form class="box-topic" id="Protocol_opic_progress" >
        {{ csrf_field() }}
        <div class="topic">

            <div class="heading">
                <img class="d-block mx-auto mb-3" src="{{asset('member/img/logo_tu_cut.svg')}} " height="100" />
                <h1>Thammasat University Animal Care and Use Committee<br>Semi-Annual Progress Report Form </h1>
            </div>

            <div class="row form-group">
                <div class="col-12">Protocol Number : {{ $Protocol_docs->protocol_number }} Ver.{{ $Protocol_docs->number_ver }}/{{ $Protocol_docs->number_run }}</div>
                <div class="col-12">Principal Investigator : {{ $Protocol_opic01->animal_protocol_th }}</div>
                <div class="col-12">Protocol Title : {{ $Protocol_opic01->project_proposal_en }}</div>
            </div>

            <div class="row form-group">
                <div class="col-12">
                    <div class="custom-control custom-control-inline custom-radio">
                        <input type="radio" id="rad-prg-1_1" name="progress_type" value="A" class="custom-control-input">
                        <label class="custom-control-label" for="rad-prg-1_1"><strong>กลุ่ม A :</strong> Proposal was not funded and/or research will not begin. Please close project files. (Complete and submit Animal Protocol Termination Form; IACUC-TU-FM-10).</label>
                    </div>
                    {{-- <div class="pl-4">
                        <label>Anticipated end date of research project:</label>
                        <textarea class="form-control form-control-sm" name="progress01_A"  rows="6" ></textarea>
                    </div> --}}
                </div>
            </div>

            <div class="row form-group">
                <div class="col-12">
                    <div class="custom-control custom-control-inline custom-radio">
                        <input type="radio" id="rad-prg-1_2" name="progress_type" value="B" class="custom-control-input">
                        <label class="custom-control-label" for="rad-prg-1_2"><strong>กลุ่ม B :</strong> Funding and/or start of research are pending. Please keep project active. (Complete and submit this form).</label>
                    </div>
                    {{-- <div class="pl-4">
                        <label>Funding source:</label>
                        <textarea class="form-control form-control-sm" name="progress01_B" rows="6" ></textarea>
                    </div> --}}
                </div>
            </div>

            <div class="row form-group">
                <div class="col-12">
                    <div class="custom-control custom-control-inline custom-radio">
                        <input type="radio" id="rad-prg-1_3" name="progress_type" value="C" class="custom-control-input">
                        <label class="custom-control-label" for="rad-prg-1_3"><strong>กลุ่ม C :</strong> Research will not continue beyond the anniversary date. (Complete and submit this form.  If research has ended, Complete and submit Animal Protocol Termination For; IACUC-TU-FM-10).</label>
                    </div>
                    {{-- <div class="pl-4">
                        <label>Location(s) of animal housing:</label>
                        <textarea class="form-control form-control-sm" name="progress01_C" rows="6" ></textarea>
                    </div> --}}
                </div>
            </div>

            <div class="row form-group">
                <div class="col-12">
                    <div class="custom-control custom-control-inline custom-radio">
                        <input type="radio" id="rad-prg-1_4" name="progress_type" value="D" class="custom-control-input">
                        <label class="custom-control-label" for="rad-prg-1_4"><strong>กลุ่ม D :</strong> Research will continue beyond the anniversary date. (Complete and submit this form).</label>
                    </div>
                    {{-- <div class="pl-4">
                        <label>Location of animal experiments and procedures:</label>
                        <textarea class="form-control form-control-sm" name="progress01_D" rows="6" ></textarea>
                    </div> --}}
                </div>
            </div>

            <div class="row form-group my-5">
                <div class="col-12">
                    <h3>Animal Usage</h3>
                    <table class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Common name (ชื่อสามัญ)</th>
                                <th scope="col">Genetic Diversity</th>
                                <th scope="col">Strain/Stock</th>
                                <th scope="col" style="width:50px;">Approved</th>
                                <th scope="col" style="width:50px;">Used</th>
                                <th scope="col" style="width:50px;">Balance</th>
                            </tr>
                        </thead>
                        <tbody class="tr_protocol_11">
                            @foreach ($Protocol_opic11_sub as $r1)
                            <tr>
                                    <td class="p-0">
                                    <input type="text" list="common" name="progress01_sub[]" value="{{$r1->Common_name}}" class="form-control form-control-sm border-0 rounded-0" required>
                                        <datalist id="common">
                                            @foreach ($Animal_common_name as $r)
                                            <option value="{{$r->common_name_en }}">{{$r->common_name_en }}</option>
                                            @endforeach
                                        </datalist>
                                    </td>
                                    <td class="p-0">
                                    <input type="text" list="genetic" name="progress02_sub[]" value="{{ $r1->Genus_Species }}" class="form-control form-control-sm border-0 rounded-0" required>
                                        <datalist id="genetic">
                                            @foreach ($Animal_common_name as $r)
                                            <option value="{{$r->genetic_diversty }}">{{ $r->genetic_diversty }}</option>
                                            @endforeach
                                        </datalist>
                                    </td>
                                    <td class="p-0">
                                    <input type="text" list="strain" name="progress03_sub[]" value="{{ $r1->Strain_Stock }}" class="form-control form-control-sm border-0 rounded-0" required>
                                        <datalist id="strain">
                                                @foreach ($Animal_stock as $r)
                                                <option value="{{$r->name }}" >{{ $r->name }}</option>
                                                @endforeach
                                        </datalist>
                                    </td>
                                <td class="p-0"><input type="number" class="form-control form-control-sm border-0 rounded-0" name="progress04_sub[]" value="{{ $r1->Number }}" required></td>
                                    
                                    <td class="p-0">
                                        <input type="number" name="progress05_sub[]" class="form-control form-control-sm border-0 rounded-0"  required>
                                    </td>
                                    <td class="text-center p-0">
                                        <input type="number" name="progress06_sub[]" class="form-control form-control-sm border-0 rounded-0"  required>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="row form-group">
                <div class="col-12">
                    <label><strong>Summarize experiments conducted on animals during this period and a brief summary of findings. Do not simply restate methodology. List any amendments approved in this period.</strong></label>
                    <textarea class="form-control form-control-sm mb-4" name="progress02" rows="6" required></textarea>
                </div>
            </div>

            <div class="row form-group">
                <label class="col-12"><strong>Have any adverse effects or unanticipated problems been observed while conducting this study.</strong></label>                
                <div class="col-12"> 
                    <div class="custom-control custom-control-inline custom-radio">
                        <input type="radio" id="rad-prg-2_1" name="progress03" value="N" class="custom-control-input" checked>
                        <label class="custom-control-label" for="rad-prg-2_1"><strong>No</strong></label>
                    </div>
                    <div class="custom-control custom-control-inline custom-radio">
                        <input type="radio" id="rad-prg-2_2" name="progress03" value="Y" class="custom-control-input">
                        <label class="custom-control-label" for="rad-prg-2_2"><strong>Yes (must be explained)</strong></label>
                    </div>
                    <textarea class="form-control form-control-sm mb-4" name="progress04" rows="6" ></textarea>
                </div>
                <input name="id" type="hidden" value="{{ request()->id }}">
            </div>
            <button type="submit" class="btn-c material-icons topic-save">save</button>
        </div>
    </form>
</div>