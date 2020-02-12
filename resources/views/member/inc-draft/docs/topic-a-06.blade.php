<!-- STR 06 -->
<form class="box-topic" id="Protocol_opic06">
        {{ csrf_field() }}
    <div class="topic">

        <h2 class="title"><span>06</span>บทคัดย่อโครงการที่เสนอขอใช้สัตว์ (Executive Summary with Non-technical Term)</h2>
        <div class="row form-group">
            <div class="col-12">
                <h3>นำเสนอภาพรวมโครงการโดยสรุปในภาษาที่เข้าใจง่ายโดยคนทั่วไป เพื่อให้ทราบถึงหลักการและเหตุผลความจำเป็นในการใช้สัตว์ วิธีการและประโยชน์ที่ได้รับ</h3>
            <textarea name="Executive" class="form-control form-control-sm" rows="8" required>{{ $Protocol_opic06->Executive }}</textarea>
            </div>
        </div>

        <button type="submit" class="btn-c material-icons topic-save">save</button>

    </div>
</form>
<!-- END 06 -->