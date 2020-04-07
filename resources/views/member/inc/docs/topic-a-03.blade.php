<!-- STR 03 -->
<form class="box-topic" id="Protocol_opic03">
        {{ csrf_field() }}
    <div class="topic">

        <h2 class="title"><span>03</span>สัตวแพทย์ประจำหน่วย/สัตวแพทย์ประจำโครงการ (Veterinarian)</h2>
        
        <div class="row form-group">
            <h3 class="col-12">ชื่อ-นามสกุล (Name-Surname)</h3>
            <div class="col-12 col-lg-6 lang-group mb-2">
                <div class="lang-group mb-2">
                    <small>TH</small>
                    <input type="text" class="form-control form-control-sm" name="Name_th" autocomplete="off" required>
                </div>
            </div>
            <div class="col-12 col-lg-6 lang-group mb-2">
                <div class="lang-group mb-2">
                    <small>TH</small>
                    <input type="text" class="form-control form-control-sm" name="Surname_th" autocomplete="off" required>
                </div>
            </div>
            <div class="col-12 col-lg-6 lang-group mb-2">
                <div class="lang-group mb-2">
                    <small>EN</small>
                    <input type="text" class="form-control form-control-sm" name="Name_en" autocomplete="off" required>
                </div>
            </div>
            <div class="col-12 col-lg-6 lang-group mb-2">
                <div class="lang-group mb-2">
                    <small>EN</small>
                    <input type="text" class="form-control form-control-sm" name="Surname_en" autocomplete="off" required>
                </div>
            </div>
        </div>
        <div class="row form-group">
            <label class="col-12">ตำแหน่ง Align academic/other position</label>
            <div class="col-12 col-lg-6">
                <div class="lang-group mb-2">
                    <small>TH</small>
                    <input type="text" class="form-control form-control-sm" name="position_th" autocomplete="off" required>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="lang-group mb-2">
                    <small>EN</small>
                    <input type="text" class="form-control form-control-sm" name="position_en" autocomplete="off" required>
                </div>
            </div>
        </div>
        <div class="row form-group">
            <label class="col-12">สถานที่ติดต่อ (Contact address)</label>
            <div class="col-lg-6">
                <div class="lang-group mb-2">
                    <small>TH</small>
                    <textarea class="form-control form-control-sm auto-expand" name="address_th" rows="3" required></textarea>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="lang-group mb-2">
                    <small>EN</small>
                    <textarea class="form-control form-control-sm auto-expand" name="address_en" rows="3" required></textarea>
                </div>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-lg-4">
                <label>โทรศัพท์ (Tel.)</label>
                <input type="text" class="form-control form-control-sm" name="Tel" autocomplete="off" >
            </div>
            <div class="col-lg-4">
                <label>โทรสาร (Fax.)</label>
                <input type="text" class="form-control form-control-sm" name="Fax" autocomplete="off" >
            </div>
            <div class="col-lg-4">
                <label>E-mail</label>
                <input type="email" class="form-control form-control-sm" name="email" autocomplete="off" >
            </div>
        </div>
        <p class="topic-save2">กรุณากด Save ทุกครั้งหลังมีการแก้ไขข้อมูล</p>
        <button type="submit" class="btn-c material-icons topic-save">save</button>

    </div>
</form>
<!-- END 03 -->