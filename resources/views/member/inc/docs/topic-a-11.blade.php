<!-- STR 11 -->
<form class="box-topic" id="Protocol_opic11">
        {{ csrf_field() }}
    <div class="topic">

        <h2 class="title"><span>11</span>ข้อมูลเกี่ยวกับสัตว์ทดลองที่ใช้ในงานวิจัย (Animal model and species justification)</h2>
        <div class="row mb-5">
            <div class="col-12">
                <label><strong>11.1</strong> จำนวนที่ใช้ตลอดโครงการ (Total amount of animal use) (โปรดตรวจสอบให้ตรงกับระเบียบวิธีวิจัย)</label>
                <table class="table table-sm table-bordered">
                    <thead>
                        <tr>
                            {{-- <th scope="col">#</th> --}}
                            <th scope="col">Common name (ชื่อสามัญ)</th>
                            <th scope="col">Genetic Diversity</th>
                            <th scope="col">Strain/Stock</th>
                            <th scope="col" style="width:50px;">Age</th>
                            <th scope="col" style="width:50px;">Weight</th>
                            <th scope="col" style="width:70px;">Sex</th>
                            <th scope="col" style="width:50px;">Number</th>
                            <th scope="col" style="width:30px;"></th>
                        </tr>
                    </thead>
                    <tbody class="tr_protocol_11">
                        <tr>
                            {{-- <th scope="row">1</th> --}}
                            <td class="p-0">
                                <input type="text" list="common" name="Common_name[]" class="form-control form-control-sm border-0 rounded-0" required>
                                <datalist id="common">
                                    @foreach ($Animal_common_name as $r)
                                    <option value="{{$r->common_name_en }}">{{$r->common_name_en }}</option>
                                    @endforeach
                                </datalist>
                            </td>
                            <td class="p-0">
                                <input type="text" list="genetic" name="Genus_Species[]" class="form-control form-control-sm border-0 rounded-0" required>
                                <datalist id="genetic">
                                    @foreach ($Animal_common_name as $r)
                                    <option value="{{$r->genetic_diversty }}">{{ $r->genetic_diversty }}</option>
                                    @endforeach
                                </datalist>
                            </td>
                            <td class="p-0">
                                <input type="text" list="strain" name="Strain_Stock[]" class="form-control form-control-sm border-0 rounded-0" required>
                                <datalist id="strain">
                                        @foreach ($Animal_stock as $r)
                                        <option value="{{$r->name }}">{{ $r->name }}</option>
                                        @endforeach
                                </datalist>
                            </td>
                            <td class="p-0"><input type="number" class="form-control form-control-sm border-0 rounded-0" name="Age[]" required></td>
                            <td class="p-0"><input type="number" class="form-control form-control-sm border-0 rounded-0" name="Weight[]" required></td>
                            <td class="p-0">
                                <select class="form-control form-control-sm border-0 rounded-0" name="Sex[]" required>
                                    <option>กรุณาเลือก</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <input type="number" name="Number[]" class="form-control form-control-sm border-0 rounded-0 Number11" required>
                            </td>
                            <td class="text-center p-0">
                                <button type="button" class="btn btn-secondary rounded-0 del11">-</button>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                            <tr class="bg-light">
                                    <td class="text-muted text-right"colspan="6"><small>จำนวนที่ใช้ตลอดโครงการ (Total amount of animal use) (โปรดตรวจสอบให้ตรงกับระเบียบวิธีวิจัย)</small></td>
                                    <td class="text-danger"><strong>sum</strong>:<strong id="sum11"></strong></td>
                                    <td class="text-center p-0">
                                        <button type="button" class="btn btn-danger rounded-0 plus11">+</button>
                                    </td>
                                </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12">
                <label><strong>11.2</strong> ระยะเวลาที่ใช้สัตว์ทดลองตั้งแต่วันที่ (Anticipated animal use Period)</label>
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Period</div>
                    </div>
                    <input type="text" class="form-control form-control-sm input-date-ranges" name="Period" required>
                    <div class="input-group-prepend">
                        <div class="input-group-text">Duration</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" placeholder="Days" name="Duration" value=" " required>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12">
                <label><strong>11.3</strong> ทำไมจึงเลือกใช้สัตว์ทดลองชนิดและเพศดังกล่าวในการทดลองมีการศึกษามาก่อนแล้วหรือไม่ (Animal model and species justification: Provide a scientific justification for the choice of animal model(s). What physiological and morphological characteristics does this animal possess that make it the best possible model?)</label>
                <textarea class="form-control form-control-sm" rows="3" name="AnimalModel" required></textarea>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12">
                <label><strong>11.4</strong> หลักเกณฑ์ในการกำหนดจำนวนสัตว์ทดลอง (Number of animals required justification: Provide an explanation of how the numbers of animals to be used in each group or total were appropriate. Number of animals used in the experiment should be based on scientific and statistical requirements to achieve objectives)</label>
                <textarea class="form-control form-control-sm" rows="3" name="animalsRequired" required></textarea>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12">
                <label><strong>11.5</strong> กรณีที่จำเป็นต้องใช้สัตว์ป่าให้เหตุผลด้วยว่าทำไมจึงใช้สัตว์ทดลองหรือสัตว์อื่นแทนไม่ได้ (In case of wildlife species is used provide an explanation of how does not replace these species with laboratory animal or other animal)</label>
                <textarea class="form-control form-control-sm" rows="3" name="caseWildlife" required></textarea>
            </div>
        </div>

        <button type="submit" class="btn-c material-icons topic-save">save</button>

    </div>
</form>
<!-- END 11 -->