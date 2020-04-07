<div class="docs-box">
    <form class="box-topic">
        @if($Protocol_opic_termination)
        <div class="topic">

            <div class="heading">
                <img class="d-block mx-auto mb-3" src="{{asset('member/img/logo_tu_cut.svg')}}" height="100" />
                <h1>Thammasat University Animal Care and Use Committee Protocol Termination Request Form </h1>
            </div>

            <div class="row form-group">
                <div class="col-12">Protocol Number: </div>
                <div class="col-12">Principal Investigator: </div>
                <div class="col-12">Protocol Title: </div>
            </div>

            <div class="row form-group">
                <div class="col-12">
                    <div class="custom-control custom-control-inline custom-radio">
                        <input type="radio" id="rad-tmn-1_1" name="rad-tmn-1" class="custom-control-input" @if($Protocol_opic_termination->termination01=="1") checked @endif>
                        <label class="custom-control-label" for="rad-tmn-1_1">Completed (no further activities with animal will be conducted)</label>
                    </div>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-12">
                    <div class="custom-control custom-control-inline custom-radio">
                        <input type="radio" id="rad-tmn-1_2" name="rad-tmn-1" class="custom-control-input" @if($Protocol_opic_termination->termination01=="2") checked @endif>
                        <label class="custom-control-label" for="rad-tmn-1_2">Project was initiated but will not be completed   Reason</label>
                    </div>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-12">
                    <div class="custom-control custom-control-inline custom-radio">
                        <input type="radio" id="rad-tmn-1_3" name="rad-tmn-1" class="custom-control-input" @if($Protocol_opic_termination->termination01=="3") checked @endif>
                        <label class="custom-control-label" for="rad-tmn-1_3">Project was never initiated (no animal were used in this research)</label>
                    </div>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-12">
                    <div class="custom-control custom-control-inline custom-radio">
                        <input type="radio" id="rad-tmn-1_4" name="rad-tmn-1" class="custom-control-input" @if($Protocol_opic_termination->termination01=="4") checked @endif>
                        <label class="custom-control-label" for="rad-tmn-1_4">Other. Explain: </label>
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
                            @foreach ($Protocol_opic_termination_sub as $r1)
                            <tr>
                                    <td class="p-0">
                                    <input type="text" list="common" name="termination01_sub[]" value="{{$r1->termination01}}" class="form-control form-control-sm border-0 rounded-0" required>
                                    </td>
                                    <td class="p-0">
                                    <input type="text" list="genetic" name="termination02_sub[]" value="{{ $r1->termination02 }}" class="form-control form-control-sm border-0 rounded-0" required>
                                    </td>
                                    <td class="p-0">
                                    <input type="text" list="strain" name="termination03_sub[]" value="{{ $r1->termination03 }}" class="form-control form-control-sm border-0 rounded-0" required>
                                    </td>
                                <td class="p-0"><input type="number" class="form-control form-control-sm border-0 rounded-0" name="termination04_sub[]" value="{{ $r1->termination04 }}" required></td>
                                    
                                    <td class="p-0">
                                    <input type="number" name="termination05_sub[]" class="form-control form-control-sm border-0 rounded-0"  value="{{ $r1->termination05 }}" required>
                                    </td>
                                    <td class="text-center p-0">
                                        <input type="number" name="termination06_sub[]" class="form-control form-control-sm border-0 rounded-0" value="{{ $r1->termination06 }}"  required>
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
                <textarea class="form-control form-control-sm mb-4" rows="6" required>{{ $Protocol_opic_termination->termination03 }}</textarea>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-12">
                    <label><strong>Please list, as complete citations, all presentations and publications resulting from this work.</strong></label>
                    <textarea class="form-control form-control-sm mb-4" rows="6" required>{{ $Protocol_opic_termination->termination03 }}</textarea>
                </div>
            </div>
            
        </div>
        @endif
    </form>
</div>