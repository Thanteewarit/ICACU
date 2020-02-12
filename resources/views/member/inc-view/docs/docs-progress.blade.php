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
                        <input type="radio" id="rad-prg-1_1" name="rad-prg-1" class="custom-control-input">
                        <label class="custom-control-label" for="rad-prg-1_1"><strong>กลุ่ม A :</strong> Proposal was not funded and/or research will not begin. Please close project files. (Complete and submit Animal Protocol Termination Form; IACUC-TU-FM-10).</label>
                    </div>
                    <div class="pl-4">
                        <label>Anticipated end date of research project:</label>
                        <textarea class="form-control form-control-sm" rows="6" required></textarea>
                    </div>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-12">
                    <div class="custom-control custom-control-inline custom-radio">
                        <input type="radio" id="rad-prg-1_2" name="rad-prg-1" class="custom-control-input">
                        <label class="custom-control-label" for="rad-prg-1_2"><strong>กลุ่ม B :</strong> Funding and/or start of research are pending. Please keep project active. (Complete and submit this form).</label>
                    </div>
                    <div class="pl-4">
                        <label>Funding source:</label>
                        <textarea class="form-control form-control-sm" rows="6" required></textarea>
                    </div>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-12">
                    <div class="custom-control custom-control-inline custom-radio">
                        <input type="radio" id="rad-prg-1_3" name="rad-prg-1" class="custom-control-input">
                        <label class="custom-control-label" for="rad-prg-1_3"><strong>กลุ่ม C :</strong> Research will not continue beyond the anniversary date. (Complete and submit this form.  If research has ended, Complete and submit Animal Protocol Termination For; IACUC-TU-FM-10).</label>
                    </div>
                    <div class="pl-4">
                        <label>Location(s) of animal housing:</label>
                        <textarea class="form-control form-control-sm" rows="6" required></textarea>
                    </div>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-12">
                    <div class="custom-control custom-control-inline custom-radio">
                        <input type="radio" id="rad-prg-1_4" name="rad-prg-1" class="custom-control-input">
                        <label class="custom-control-label" for="rad-prg-1_4"><strong>กลุ่ม D :</strong> Research will continue beyond the anniversary date. (Complete and submit this form).</label>
                    </div>
                    <div class="pl-4">
                        <label>Location of animal experiments and procedures:</label>
                        <textarea class="form-control form-control-sm" rows="6" required></textarea>
                    </div>
                </div>
            </div>

            <div class="row form-group my-5">
                <div class="col-12">
                    <h3>Animal Usage</h3>
                    <table class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Common name (ชื่อสามัญ)</th>
                                <th scope="col">Scientific Name</th>
                                <th scope="col">Genetic Diversity</th>
                                <th scope="col">Strain/Stock</th>
                                <th scope="col" style="width:50px;">Approved</th>
                                <th scope="col" style="width:50px;">Used</th>
                                <th scope="col" style="width:50px;">Balance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="p-0"><input type="text" class="form-control form-control-sm border-0 rounded-0" required></td>
                                <td></td>
                            </tr>
                            <tr class="bg-light">
                                <td colspan="5"></td>
                                <td class="text-danger p-2"><strong>Sum</strong></td>
                                <td class="text-danger p-2"><strong>Sum</strong></td>
                                <td class="text-danger p-2"><strong>Sum</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="row form-group">
                <div class="col-12">
                    <label><strong>Summarize experiments conducted on animals during this period and a brief summary of findings. Do not simply restate methodology. List any amendments approved in this period.</strong></label>
                    <textarea class="form-control form-control-sm mb-4" rows="6" required></textarea>
                </div>
            </div>

            <div class="row form-group">
                <label class="col-12"><strong>Have any adverse effects or unanticipated problems been observed while conducting this study.</strong></label>                
                <div class="col-12"> 
                    <div class="custom-control custom-control-inline custom-radio">
                        <input type="radio" id="rad-prg-2_1" name="rad-prg-2" class="custom-control-input">
                        <label class="custom-control-label" for="rad-prg-2_1"><strong>No</strong></label>
                    </div>
                    <div class="custom-control custom-control-inline custom-radio">
                        <input type="radio" id="rad-prg-2_2" name="rad-prg-2" class="custom-control-input">
                        <label class="custom-control-label" for="rad-prg-2_2"><strong>Yes (must be explained)</strong></label>
                    </div>
                    <textarea class="form-control form-control-sm mb-4" rows="6" required></textarea>
                </div>
            </div>
            
        </div>
    </form>
</div>