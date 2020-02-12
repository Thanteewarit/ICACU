<!-- STR 10 -->
<form class="box-topic" id="Protocol_opic10">
        {{ csrf_field() }}
    <div class="topic">

        <h2 class="title"><span>10</span>ประโยชน์ต่อมนุษย์หรือสัตว์และผลประโยชน์ทางวิชาการที่คาดว่าจะได้รับ (anticipated outcome)</h2>
        
        <div class="row form-group">
            <div class="col-12">
                <label><strong>10.1</strong> สรุปผลประโยชน์ต่อมนุษย์</label>
            <textarea class="form-control form-control-sm" rows="3" name="anticipated01" required>{{ $Protocol_opic10->anticipated01 }}</textarea>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-12">
                <label><strong>10.2</strong> สรุปผลประโยชน์ต่อความก้าวหน้าทางวิชาการ</label>
                <textarea class="form-control form-control-sm" rows="3" name="anticipated02" required>{{ $Protocol_opic10->anticipated02 }}</textarea>
            </div>
        </div>

        <input type="hidden" name="id" value="{{ $Protocol_opic07->protocol_id }}">
        <button type="submit" class="btn-c material-icons topic-save">save</button>

    </div>
</form>
<!-- END 10 -->