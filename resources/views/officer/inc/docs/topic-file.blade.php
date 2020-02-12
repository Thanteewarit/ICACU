<!-- STR 20 -->
<form class="box-topic" id="Protocol_opic20">
        {{ csrf_field() }}
        <div class="topic">
    
            <h2 class="title"><span>31</span> แสดงไฟล์แนบทั้งหมด</h2>

            <div class="row form-group">
                <div class="col-12">
                    @if($Protocol_docsfile)
                        @foreach ($Protocol_docsfile as $key => $r)
                        <div class="custom-control custom-control-inline custom-radio mb-3">
                           <strong>File {{ $key+1 }} &nbsp; :</strong>&nbsp; &nbsp;<a href="{{asset('file-upload/'.$r->file)}}" download="w3logo">ดูข้อมูลไฟล์</a>
                        </div>
                        <br>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </form>
    <!-- END 20 -->