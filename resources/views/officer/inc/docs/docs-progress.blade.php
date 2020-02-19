@if($Protocol_opic_progress)
<div class="docs-box">
    <form class="box-topic">
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
                        <input type="radio" id="rad-prg-1_1" name="rad-prg-1" class="custom-control-input" @if($Protocol_opic_progress->type=="A") checked @endif >
                        <label class="custom-control-label" for="rad-prg-1_1"><strong>กลุ่ม A :</strong> Proposal was not funded and/or research will not begin. Please close project files. (Complete and submit Animal Protocol Termination Form; IACUC-TU-FM-10).</label>
                    </div>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-12">
                    <div class="custom-control custom-control-inline custom-radio">
                        <input type="radio" id="rad-prg-1_2" name="rad-prg-1" class="custom-control-input" @if($Protocol_opic_progress->type=="B") checked @endif>
                        <label class="custom-control-label" for="rad-prg-1_2"><strong>กลุ่ม B :</strong> Funding and/or start of research are pending. Please keep project active. (Complete and submit this form).</label>
                    </div>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-12">
                    <div class="custom-control custom-control-inline custom-radio">
                        <input type="radio" id="rad-prg-1_3" name="rad-prg-1" class="custom-control-input" @if($Protocol_opic_progress->type=="C") checked @endif>
                        <label class="custom-control-label" for="rad-prg-1_3"><strong>กลุ่ม C :</strong> Research will not continue beyond the anniversary date. (Complete and submit this form.  If research has ended, Complete and submit Animal Protocol Termination For; IACUC-TU-FM-10).</label>
                    </div>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-12">
                    <div class="custom-control custom-control-inline custom-radio">
                        <input type="radio" id="rad-prg-1_4" name="rad-prg-1" class="custom-control-input" @if($Protocol_opic_progress->type=="D") checked @endif>
                        <label class="custom-control-label" for="rad-prg-1_4"><strong>กลุ่ม D :</strong> Research will continue beyond the anniversary date. (Complete and submit this form).</label>
                    </div>
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
                            @foreach ($Protocol_opic_progress_sub as $r1)
                            <tr>
                                    <td class="p-0">
                                    <input type="text" list="common" name="progress01_sub[]" value="{{$r1->progress01}}" class="form-control form-control-sm border-0 rounded-0" readonly>
                                        
                                    </td>
                                    <td class="p-0">
                                    <input type="text" list="genetic" name="progress02_sub[]" value="{{ $r1->progress02 }}" class="form-control form-control-sm border-0 rounded-0" readonly>
                                    </td>
                                    <td class="p-0">
                                    <input type="text" list="strain" name="progress03_sub[]" value="{{ $r1->progress03 }}" class="form-control form-control-sm border-0 rounded-0" readonly>
                                    </td>
                                <td class="p-0"><input type="number" class="form-control form-control-sm border-0 rounded-0" name="progress04_sub[]" value="{{ $r1->progress04 }}" readonly></td>
                                    
                                    <td class="p-0">
                                        <input type="number" name="progress05_sub[]" class="form-control form-control-sm border-0 rounded-0" value="{{ $r1->progress05 }}"  readonly>
                                    </td>
                                    <td class="text-center p-0">
                                        <input type="number" name="progress06_sub[]" class="form-control form-control-sm border-0 rounded-0" value="{{ $r1->progress06}}"  readonly>
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
                <textarea class="form-control form-control-sm mb-4" rows="6" required>{{ $Protocol_opic_progress->progress02 }}</textarea>
                </div>
            </div>

            <div class="row form-group">
                <label class="col-12"><strong>Have any adverse effects or unanticipated problems been observed while conducting this study.</strong></label>                
                <div class="col-12"> 
                    <div class="custom-control custom-control-inline custom-radio">
                        <input type="radio" id="rad-prg-2_1" name="rad-prg-2" class="custom-control-input" @if($Protocol_opic_progress->progress03=="N") checked @endif>
                        <label class="custom-control-label" for="rad-prg-2_1"><strong>No</strong></label>
                    </div>
                    <div class="custom-control custom-control-inline custom-radio">
                        <input type="radio" id="rad-prg-2_2" name="rad-prg-2" class="custom-control-input" @if($Protocol_opic_progress->progress03=="Y") checked @endif>
                        <label class="custom-control-label" for="rad-prg-2_2"><strong>Yes (must be explained)</strong></label>
                    </div>
                    <textarea class="form-control form-control-sm mb-4" rows="6" required>{{ $Protocol_opic_progress->progress04 }}</textarea>
                </div>
            </div>
            
        </div>
    </form>
</div>
@endif