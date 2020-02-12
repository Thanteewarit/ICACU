<form class="box-topic" id="Protocol_opic03" >
    {{ csrf_field() }}
    <div class="topic">

        <h2 class="title"><span>03</span>สัตวแพทย์ประจำหน่วย/สัตวแพทย์ประจำโครงการ (Veterinarian)</h2>
        
        <div class="row form-group">
            <h3 class="col-12">ชื่อ-นามสกุล (Name-Surname)</h3>
            <div class="col-12 col-lg-6 lang-group mb-2">
                <div class="lang-group mb-2">
                    <small>TH</small>
                    <input type="text" class="form-control form-control-sm" name="Name_th" value="{{ $Protocol_opic03->Name_th}}" required>
                </div>
            </div>
            <div class="col-12 col-lg-6 lang-group mb-2">
                <div class="lang-group mb-2">
                    <small>TH</small>
                    <input type="text" class="form-control form-control-sm" name="Surname_th" value="{{ $Protocol_opic03->Surname_th}}" required>
                </div>
            </div>
            <div class="col-12 col-lg-6 lang-group mb-2">
                <div class="lang-group mb-2">
                    <small>EN</small>
                    <input type="text" class="form-control form-control-sm" name="Name_en" value="{{ $Protocol_opic03->Name_en}}" required>
                </div>
            </div>
            <div class="col-12 col-lg-6 lang-group mb-2">
                <div class="lang-group mb-2">
                    <small>EN</small>
                    <input type="text" class="form-control form-control-sm" name="Surname_en" value="{{ $Protocol_opic03->Surname_en}}" required>
                </div>
            </div>
        </div>
        <div class="row form-group">
            <label class="col-12">ตำแหน่ง Align academic/other position</label>
            <div class="col-12 col-lg-6">
                <div class="lang-group mb-2">
                    <small>TH</small>
                    <input type="text" class="form-control form-control-sm" name="position_th" value="{{ $Protocol_opic03->position_th}}" required>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="lang-group mb-2">
                    <small>EN</small>
                    <input type="text" class="form-control form-control-sm" name="position_en" value="{{ $Protocol_opic03->position_en}}" required>
                </div>
            </div>
        </div>
        <div class="row form-group">
            <label class="col-12">สถานที่ติดต่อ (Contact address)</label>
            <div class="col-lg-6">
                <div class="lang-group mb-2">
                    <small>TH</small>
                    <textarea class="form-control form-control-sm auto-expand" rows="2" name="address_th" required>{{ $Protocol_opic03->address_th}}</textarea>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="lang-group mb-2">
                    <small>EN</small>
                    <textarea class="form-control form-control-sm auto-expand" rows="2" name="address_en" required>{{ $Protocol_opic03->address_en}}</textarea>
                </div>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-lg-4">
                <label>โทรศัพท์ (Tel.)</label>
                <input type="text" class="form-control form-control-sm" name="Tel" value="{{ $Protocol_opic03->Tel}}" required>
            </div>
            <div class="col-lg-4">
                <label>โทรสาร (Fax.)</label>
                <input type="text" class="form-control form-control-sm" name="Fax" value="{{ $Protocol_opic03->Fax}}" required>
            </div>
            <div class="col-lg-4">
                <label>E-mail</label>
                <input type="email" class="form-control form-control-sm" name="email" value="{{ $Protocol_opic03->email}}" required>
            </div>
        </div>
        <input type="hidden" name="id" value="{{ $Protocol_opic03->protocol_id }}">
        <button type="submit" class="btn-c material-icons topic-save">save</button>

    </div>
</form>
<!-- END 03 -->