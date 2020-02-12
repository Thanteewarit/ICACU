<!-- STR 08 -->
<form class="box-topic" id="Protocol_opic08">
        {{ csrf_field() }}
    <div class="topic">

        <h2 class="title"><span>08</span>วัตถุประสงค์ของโครงการ (Objective)</h2>

        <table class="table table-sm table-bordered">
            <thead>
                <tr>
                    <th scope="col">วัตถุประสงค์ของโครงการ (Objective)</th>
                    <th scope="col" style="width:30px;"></th>
                </tr>
            </thead>
            <tbody class="tr_protocol_08">
                @foreach ($Protocol_opic08 as $r)
                <tr>
                <td class="p-0"><textarea class="form-control form-control-sm border-0 rounded-0 auto-expand"  name="Objective[]" rows="1"  required>{{ $r->Objective  }}</textarea></td>
                    <td class="text-center p-0">
                        <button type="button" class="btn btn-secondary rounded-0 h-100 minus08">-</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                    <tr class="bg-light">
                            <td class="border-0"colspan="1"></td>
                            <td class="text-center p-0">
                                <button type="button" class="btn btn-danger rounded-0 plus08">+</button>
                            </td>
                        </tr>
            </tfoot>
        </table>

        <input type="hidden" name="id" value="{{ $Protocol_opic07->protocol_id }}">
        <button type="submit" class="btn-c material-icons topic-save">save</button>

    </div>
</form>
<!-- END 08 -->