<!-- STR 11 -->
<form class="box-topic">
    <div class="topic">

        <h2 class="title"><span>11</span>ข้อมูลเกี่ยวกับสัตว์ทดลองที่ใช้ในงานวิจัย (Animal model and species justification)</h2>
        <div class="row mb-5">
            <div class="col-12">
                <label><strong>11.1</strong> จำนวนที่ใช้ตลอดโครงการ (Total amount of animal use) (โปรดตรวจสอบให้ตรงกับระเบียบวิธีวิจัย)</label>
                <table class="table table-sm table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Common name (ชื่อสามัญ)</th>
                            <th scope="col">Scientific Name</th>
                            <th scope="col">Genetic Diversity</th>
                            <th scope="col">Strain/Stock</th>
                            <th scope="col" style="width:50px;">Age</th>
                            <th scope="col" style="width:50px;">Weight</th>
                            <th scope="col" style="width:70px;">Sex</th>
                            <th scope="col" style="width:50px;">Number</th>
                            <th scope="col" style="width:30px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td class="p-0">
                                <input type="text" list="common" name="common" class="form-control form-control-sm border-0 rounded-0" required>
                                <datalist id="common">
                                    <option value="Mouse (หนูเม้าส์)"></option>
                                    <option value="RAT (หนูแรท)"></option>
                                    <option value="HAMSTER (แฮมสเตอร์)"></option>
                                    <option value="RABBIT (กระต่าย)"></option>
                                </datalist>
                            </td>
                            <td class="p-0">
                                <input type="text" list="scientific" name="scientific" class="form-control form-control-sm border-0 rounded-0" required>
                                <datalist id="scientific">
                                    <option value="Mus musculus"></option>
                                    <option value="Rattus norvrgicus"></option>
                                    <option value="Mesocricetus auratus"></option>
                                    <option value="Oryctolagus cuniculus"></option>
                                </datalist>
                            </td>
                            <td class="p-0">
                                <input type="text" list="genetic" name="genetic" class="form-control form-control-sm border-0 rounded-0" required>
                                <datalist id="genetic">
                                    <option value="Outbred"></option>
                                    <option value="Inbred"></option>
                                    <option value="Hybrid"></option>
                                    <option value="Mutant"></option>
                                    <option value="Trangenic"></option>
                                </datalist>
                            </td>
                            <td class="p-0">
                                <input type="text" list="strain" name="strain" class="form-control form-control-sm border-0 rounded-0" required>
                                <datalist id="strain">
                                    <option value="Jcl:ICR"></option>
                                    <option value="Jcl:BDF1"></option>
                                    <option value="BALB/cAJcl"></option>
                                    <option value="C57BL/6NJcl"></option>
                                    <option value="C3H/HeNJcl"></option>
                                    <option value="BALB/cAJcl-nu(Homo)"></option>
                                    <option value="NOD/ShiJic-scidJcl"></option>
                                </datalist>
                            </td>
                            <td class="p-0"><input type="text" class="form-control form-control-sm border-0 rounded-0" required></td>
                            <td class="p-0"><input type="text" class="form-control form-control-sm border-0 rounded-0" required></td>
                            <td class="p-0">
                                <select class="form-control form-control-sm border-0 rounded-0" required>
                                    <option></option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <input type="text" class="form-control form-control-sm border-0 rounded-0" required>
                            </td>
                            <td class="text-center p-0">
                                <button type="button" class="btn btn-secondary rounded-0">-</button>
                            </td>
                        </tr>
                        <tr class="bg-light">
                            <td class="text-muted text-right"colspan="8"><small>จำนวนที่ใช้ตลอดโครงการ (Total amount of animal use) (โปรดตรวจสอบให้ตรงกับระเบียบวิธีวิจัย)</small></td>
                            <td class="text-danger"><strong>sum</strong></td>
                            <td class="text-center p-0">
                                <button type="button" class="btn btn-danger rounded-0">+</button>
                            </td>
                        </tr>
                    </tbody>
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
                    <input type="text" class="form-control form-control-sm input-date-ranges" required>
                    <div class="input-group-prepend">
                        <div class="input-group-text">Duration</div>
                    </div>
                    <input type="text" class="form-control form-control-sm" placeholder="Days" readonly>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12">
                <label><strong>11.3</strong> ทำไมจึงเลือกใช้สัตว์ทดลองชนิดและเพศดังกล่าวในการทดลองมีการศึกษามาก่อนแล้วหรือไม่ (Animal model and species justification: Provide a scientific justification for the choice of animal model(s). What physiological and morphological characteristics does this animal possess that make it the best possible model?)</label>
                <textarea class="form-control form-control-sm" rows="3" required></textarea>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12">
                <label><strong>11.4</strong> หลักเกณฑ์ในการกำหนดจำนวนสัตว์ทดลอง (Number of animals required justification: Provide an explanation of how the numbers of animals to be used in each group or total were appropriate. Number of animals used in the experiment should be based on scientific and statistical requirements to achieve objectives)</label>
                <textarea class="form-control form-control-sm" rows="3" required></textarea>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12">
                <label><strong>11.5</strong> กรณีที่จำเป็นต้องใช้สัตว์ป่าให้เหตุผลด้วยว่าทำไมจึงใช้สัตว์ทดลองหรือสัตว์อื่นแทนไม่ได้ (In case of wildlife species is used provide an explanation of how does not replace these species with laboratory animal or other animal)</label>
                <textarea class="form-control form-control-sm" rows="3" required></textarea>
            </div>
        </div>

        <button type="submit" class="btn-c material-icons topic-save">save</button>

    </div>
</form>
<!-- END 11 -->