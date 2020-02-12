<!-- STR 28 -->
<form class="box-topic" id="Protocol_opic28">
        {{ csrf_field() }}
        <div class="topic">
    
            <h2 class="title"><span>28</span>อุปกรณ์เพื่อป้องกันอันตรายกับผู้ปฏิบัติงาน การป้องกันการแพร่กระจายของสารพิษ/เชื้อโรค</h2>
            <div class="row form-group">
                <div class="col-12 mb-4">
                    <label><strong>28.1</strong> ระบุอุปกรณ์เพื่อป้องกันอันตรายต่อผู้ปฏิบัติงาน (List safety equipment and personnel protective equipment requirements.)</label>
                    <textarea class="form-control form-control-sm" name="ptc28_01" rows="3" required>{{ $Protocol_opic28->ptc28_01 }}</textarea>
                </div>
                <div class="col-12 mb-4">
                    <label><strong>28.2</strong> ระบุอุปกรณ์เพื่อป้องกันการแพร่กระจายของสารพิษ/เชื้อโรค (List safety equipment to prevent spread of hazardous agent)</label>
                    <textarea class="form-control form-control-sm" name="ptc28_02" rows="3" required>{{ $Protocol_opic28->ptc28_02 }}</textarea>
                </div>
                <div class="col-12 mb-4">
                    <label><strong>28.3</strong> ระบุอุปกรณ์เพื่อป้องกันอันตรายจากการปฏิบัติงานกับสัตว์ (List safety equipment to prevent danger from animal procedure)</label>
                    <textarea class="form-control form-control-sm" name="ptc28_03" rows="3" required>{{ $Protocol_opic28->ptc28_03 }}</textarea>
                </div>
            </div>
            <input type="hidden" name="id" value="{{ $Protocol_opic11->protocol_id }}">
            <button type="submit" class="btn-c material-icons topic-save">save</button>
    
        </div>
    </form>
    <!-- END 28 -->