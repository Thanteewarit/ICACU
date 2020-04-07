<!-- STR 05 -->
<form class="box-topic" id="Protocol_opic05">
        {{ csrf_field() }}
    <div class="topic">
        <h2 class="title"><span>05</span>แหล่งทุนวิจัย/งบประมาณ (Funding Source/Budget)</h2>

        <table class="table table-sm table-bordered">
            <thead>
                <tr>
                    <th scope="col">ระบุแหล่งทุน (Funding Source(s))</th>
                    <th scope="col">ระยะเวลาที่รับทุน (Funding period)</th>
                    <th scope="col" class="text-right" style="width:120px;">จำนวนเงิน (Budget)</th>
                    <th scope="col" style="width:30px;"></th>
                </tr>
            </thead>
            <tbody class="tr_protocol_05"> 
                <tr>
                    <td class="p-0">
                        <select class="form-control form-control-sm border-0 rounded-0" name="FundingSource[]" required>
                            <option value="">please select</option>
                            @foreach ($Budget as $r)
                            <option value="{{$r->id}}">{{$r->name}}</option>
                            @endforeach
                        </select>
                    </td>
                    <td class="p-0"><input type="text" class="form-control form-control-sm border-0 rounded-0 input-date-ranges" name="FundingPeriod[]" required></td>
                    <td class="p-0"><input type="number" class="form-control form-control-sm border-0 rounded-0 text-right" name="Budget[]" required></td>
                    <td class="text-center p-0">
                        <button type="button" class="btn btn-secondary rounded-0 minus">-</button>
                    </td>
                </tr>
                
            </tbody>
            <tfoot>
                    <tr class="bg-light">
                            <td class="text-right"colspan="2"><strong>sum</strong></td>
                            <td class="text-danger text-right"><strong id="sum"></strong></td>
                            <td class="text-center p-0">
                                <button type="button" class="btn btn-danger rounded-0 plus">+</button>
                            </td>
                        </tr>
            </tfoot>
        </table>
        <p class="topic-save2">กรุณากด Save ทุกครั้งหลังมีการแก้ไขข้อมูล</p>
        <button type="submit" class="btn-c material-icons topic-save">save</button>

    </div>
</form>
<!-- END 05 -->