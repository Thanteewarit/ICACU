<!-- STR 05 -->
<form class="box-topic">
    <div class="topic">
        <h2 class="title"><span>05</span>แหล่งทุนวิจัย/งบประมาณ (Funding Source/Budget)</h2>

        <table class="table table-sm table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ระบุแหล่งทุน (Funding Source(s))</th>
                    <th scope="col">ระยะเวลาที่รับทุน (Funding period)</th>
                    <th scope="col" class="text-right" style="width:120px;">จำนวนเงิน (Budget)</th>
                    <th scope="col" style="width:30px;"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td class="p-0">
                        <select class="form-control form-control-sm border-0 rounded-0" required>
                            <option></option>
                            <option>ได้รับทุนแล้ว (Has been approved)</option>
                            <option>กำลังยื่นขอ (Is going to be submitted/has been submitted)</option>
                            <option>ทุนส่วนตัว (Personal grant)</option>
                        </select>
                    </td>
                    <td class="p-0"><input type="text" class="form-control form-control-sm border-0 rounded-0 input-date-ranges" required></td>
                    <td class="p-0"><input type="text" class="form-control form-control-sm border-0 rounded-0 text-right" required></td>
                    <td class="text-center p-0">
                        <button type="button" class="btn btn-secondary rounded-0">-</button>
                    </td>
                </tr>
                <tr class="bg-light">
                    <td class="text-right"colspan="3"></td>
                    <td class="text-danger text-right"><strong>sum</strong></td>
                    <td class="text-center p-0">
                        <button type="button" class="btn btn-danger rounded-0">+</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <button type="submit" class="btn-c material-icons topic-save">save</button>

    </div>
</form>
<!-- END 05 -->