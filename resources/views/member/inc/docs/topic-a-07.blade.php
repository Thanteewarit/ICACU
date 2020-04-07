<!-- STR 07 -->
<form class="box-topic" id="Protocol_opic07">
        {{ csrf_field() }}
    <div class="topic">

        <h2 class="title"><span>07</span>บทนำ และหลักการ (Background &amp; Rationale)</h2>
        <div class="row form-group">
            <div class="col-12">
                <textarea class="form-control form-control-sm mb-3" name="Background" rows="8" >-</textarea>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-12">
                <h3>7.1 การทบทวนวรรณกรรมเพื่อป้องกันการทำซ้ำ (Literature Search for Duplication: This
                search must be performed to prevent unnecessary duplication of previous
                experiments.)</h3>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-12">
                <label>7.1.1 ฐานข้อมูลการทบทวนวรรณกรรม (Literature source(s) searched (database name):</label>
                <input type="text" name="Literature" class="form-control form-control-sm mb-3" >
            </div>
            <div class="col-12">
                <label>7.1.2 วันที่สืบค้นล่าสุด (ไม่เกิน 6
                เดือนก่อนถึงวันประชุมคณะอนุกรรมการจรรยาบรรณและติดตามโครงการเลี้ยงและใช้สัตว์ มธ.)
                (Last date of search: Perform the search no earlier than 6 months prior to Sub-IACUC
                TU meeting)</label>
                <input type="text" class="form-control form-control-sm mb-3 input-date-single" name="Lastdate" >
            </div>
            <div class="col-12">
                <label>7.1.3 ช่วงปีของข้อมูลที่สืบค้น (Period of information searched (from year to the current year.)</label>
                <div class="input-group input-group-sm mb-3 w-25">
                    <input type="number" class="form-control form-control-sm " name="Period_start" placeholder="YYYY" >
                    <div class="input-group-prepend">
                        <div class="input-group-text">-</div>
                    </div>
                    <input type="number" class="form-control form-control-sm" name="Period_end" placeholder="YYYY" >
                </div>
            </div>
            <div class="col-12">
                <label>7.1.4 คำสำคัญที่ใช้ในการสืบค้น (Keywords used in search)</label>
                <input type="text" class="form-control form-control-sm mb-3" name="Keywords" >
            </div>
            <div class="col-12">
                <label>7.1.5 อธิบายผลการสืบค้นโดยสรุป มีการทำซ้ำหรือไม่ กรณีมีการทำซ้ำโปรดระบุเหตุผลความจำเป็น (Results of search: Provide a narrative description of the results of the literature
                search. Are there any duplication found? Provide justification if this study has to
                repeat previous studies.)</label>
                <input type="text" class="form-control form-control-sm mb-3" name="Results" >
            </div>
        </div>

        <div class="row form-group">
            <div class="col-12">
                <h3>7.2 เอกสารอ้างอิง (List of reference)</h3>
                <textarea class="form-control form-control-sm" rows="8" name="reference" ></textarea>
            </div>
        </div>
        <p class="topic-save2">กรุณากด Save ทุกครั้งหลังมีการแก้ไขข้อมูล</p>
        <button type="submit" class="btn-c material-icons topic-save">save</button>

    </div>
</form>
<!-- END 07 -->