<div class="modal fade" id="modal_conclude_amendment" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="material-icons">sms</i> มติที่ประชุมการพิจารณาการขอแก้ไขโครงการ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-12">
                            <div class="custom-control custom-radio my-2">
                                <input type="radio" id="conclude-amendment_1" name="conclude-amendment" class="custom-control-input" required>
                                <label class="custom-control-label" for="conclude-amendment_1">รับรองโดยไม่มีการแก้ไข</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="custom-control custom-radio my-2">
                                <input type="radio" id="conclude-amendment_2" name="conclude-amendment" class="custom-control-input" required checked>
                                <label class="custom-control-label" for="conclude-amendment_2">แก้ไข / ส่งใหม่</label>
                            </div>
                            <textarea class="form-control form-control-sm auto-expand" rows="6" placeholder="กรุณาระบุเหตผล.." required>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</textarea>
                        </div>
                        <div class="col-12">
                            <div class="custom-control custom-radio my-2">
                                <input type="radio" id="conclude-amendment_3" name="conclude-amendment" class="custom-control-input" required>
                                <label class="custom-control-label" for="conclude-amendment_3">ไม่รับรอง</label>
                            </div>
                        </div>
                    </div>
                
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                <button type="submit" class="btn btn-success">SEND</button>
            </div>
        </div>
    </div>
</div>