<div class="docs-box">
    <form class="box-topic">
        <div class="topic">

            <div class="heading">
                <img class="d-block mx-auto mb-3" src="{{asset('member/img/logo_tu_cut.svg')}}" height="100" />
                <h1>Thammasat University Animal Care and Use Committee Protocol Termination Request Form </h1>
            </div>

            <div class="row form-group">
                <div class="col-12">Protocol Number : {{ $Protocol_docs->protocol_number }} Ver.{{ $Protocol_docs->number_ver }}/{{ $Protocol_docs->number_run }}</div>
                <div class="col-12">Principal Investigator : {{ $Protocol_opic01->animal_protocol_th }}</div>
                <div class="col-12">Protocol Title : {{ $Protocol_opic01->project_proposal_en }}</div>
            </div>

            <div class="row form-group">
                <div class="col-12">
                    <div class="custom-control custom-control-inline custom-radio">
                        <input type="radio" id="rad-tmn-1_1" name="termination01" class="custom-control-input">
                        <label class="custom-control-label" for="rad-tmn-1_1">Completed (no further activities with animal will be conducted)</label>
                    </div>
                    {{-- <div class="pl-4">
                        <label>Location(s) of animal housing:</label>
                        <textarea class="form-control form-control-sm" name="termination02_A" rows="6" required></textarea>
                    </div> --}}
                </div>
            </div>

            <div class="row form-group">
                <div class="col-12">
                    <div class="custom-control custom-control-inline custom-radio">
                        <input type="radio" id="rad-tmn-1_2" name="termination01" class="custom-control-input">
                        <label class="custom-control-label" for="rad-tmn-1_2">Project was initiated but will not be completed   Reason</label>
                    </div>
                    {{-- <div class="pl-4">
                        <label>Location of animal experiments and procedures:</label>
                        <textarea class="form-control form-control-sm" name="termination02_B" rows="6" required></textarea>
                    </div> --}}
                </div>
            </div>

            <div class="row form-group">
                <div class="col-12">
                    <div class="custom-control custom-control-inline custom-radio">
                        <input type="radio" id="rad-tmn-1_3" name="termination01" class="custom-control-input">
                        <label class="custom-control-label" for="rad-tmn-1_3">Project was never initiated (no animal were used in this research)</label>
                    </div>
                    {{-- <div class="pl-4">
                        <label>Euthanasia/disposal of animals after completion of activity:</label>
                        <textarea class="form-control form-control-sm" name="termination02_C" rows="6" required></textarea>
                    </div> --}}
                </div>
            </div>

            <div class="row form-group">
                <div class="col-12">
                    <div class="custom-control custom-control-inline custom-radio">
                        <input type="radio" id="rad-tmn-1_4" name="termination01" class="custom-control-input">
                        <label class="custom-control-label" for="rad-tmn-1_4">Other. Explain: </label>
                    </div>
                    {{-- <div class="pl-4">
                        <label>Disposal of Animal tissue and carcasses:</label>
                        <textarea class="form-control form-control-sm" name="termination02_D" rows="6" required></textarea>
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
                    <label><strong>Provide a brief summary of any findings, results or other relevant information.</strong></label>
                    <textarea class="form-control form-control-sm mb-4" name="termination03" rows="6" required></textarea>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-12">
                    <label><strong>Please list, as complete citations, all presentations and publications resulting from this work.</strong></label>
                    <textarea class="form-control form-control-sm mb-4" name="termination04" rows="6" required></textarea>
                </div>
            </div>
            
        </div>
    </form>
</div>