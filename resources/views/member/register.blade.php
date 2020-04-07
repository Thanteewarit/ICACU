<!DOCTYPE html>
<html>
<head>
  <title>IACUC Registeration</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('member/css/bootstrap.min.css')}} ">
  <link rel="stylesheet" href="{{asset('member/css/styles.css')}} "/>
</head>
<body>

    <main class="container">
        <div class="row">
            <div class="col-12 col-lg-8 mx-auto">
            <form method="POST" action="{{ route('member.register.create')}}">
                    {{ csrf_field() }}
                    <h3 class="text-danger text-center font-weight-bold mt-5">CREATE NEW ACCOUNT</h3>
                    <h1 class="site-title">
                        <span class="line mr-3"></span>
                        <span>IACUC SYSTEM</span>
                        <span class="line ml-3"></span>
                    </h1>

                    <div class="container border py-3">
                        <div class="row form-group">
                            <h6 class="col-12">ชื่อ-นามสกุล (Name-Surname)</h6>
                            <div class="col-lg-6">
                                <div class="lang-group mb-2">
                                    <small>TH</small>
                                    <input type="text" class="form-control form-control-sm" name="firstNameEn" placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="lang-group mb-2">
                                    <small>TH</small>
                                    <input type="text" class="form-control form-control-sm" name="lastNameEn" placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="lang-group">
                                    <small>EN</small>
                                    <input type="text" class="form-control form-control-sm" name="firstNameTh" placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="lang-group">
                                    <small>EN</small>
                                    <input type="text" class="form-control form-control-sm" name="lastNameTh" placeholder="Last Name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                                <label class="col-12">สังกัด</label>
                                <div class="col-lg-6">
                                    <select class="form-control form-control-sm mb-2 " onchange="affiliation_typeGet(this.value)" >
                                        <option value="">กรุณาเลือก</option>
                                        @foreach($Affiliation_type AS $key => $r)
                                        <option value="{{$r->id}}">{{$r->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-6 L10" style="display:none;">
                                        <select class="form-control form-control-sm mb-2 affiliation_type_id"  name="affiliation_type_id">
                                            <option value="">กรุณาเลือก</option>
                                            
                                        </select>
                                    </div>
                            </div>
                        <div class="row form-group">
                            <label class="col-12">สถานภาพ</label>
                            <div class="col-lg-6">
                                <select class="form-control form-control-sm mb-2" id="statusUser" name="statusUser" required>
                                    <option value="">กรุณาเลือก</option>
                                    @foreach($StatusUser AS $key => $r)
                                    <option value="{{$r->id}}">{{$r->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" id="statusUserer" name="statusUserer" class="form-control form-control-sm mb-2">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-12">ตําแหน่งทางวิชาการ (Align academic)</label>
                            <div class="col-lg-6">
                                <div class="lang-group mb-2">
                                    <small>TH</small>
                                    <input type="text" class="form-control form-control-sm" name="alignAcademicTh" placeholder="Text here..." >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="lang-group mb-2">
                                    <small>EN</small>
                                    <input type="text" class="form-control form-control-sm" name="alignAcademicEn" placeholder="Text here..." >
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-12">ตําแหน่งอื่นๆ (Other position)</label>
                            <div class="col-lg-6">
                                <div class="lang-group mb-2">
                                    <small>TH</small>
                                    <input type="text" class="form-control form-control-sm" name="otherPositionTh" value="" placeholder="Text here...">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="lang-group mb-2">
                                    <small>EN</small>
                                    <input type="text" class="form-control form-control-sm" name="otherPositionEn" value="" placeholder="Text here...">
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-12">สถานที่ติดต่อ (Contact address)</label>
                            <div class="col-lg-6">
                                <div class="lang-group mb-2">
                                    <small>TH</small>
                                    <textarea class="form-control form-control-sm" rows="3" name="contactAddressTh" value="" placeholder="Text here..."></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="lang-group mb-2">
                                    <small>EN</small>
                                    <textarea class="form-control form-control-sm" rows="3" name="contactAddressEn" value="" placeholder="Text here..."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-4">
                                <label>โทรศัพท์ (Tel.)</label>
                                <input type="text" class="form-control form-control-sm" name="tell" value="" required>
                            </div>
                            <div class="col-lg-4">
                                <label>โทรสาร (Fax.)</label>
                                <input type="text" class="form-control form-control-sm" name="fax" value="-">
                            </div>
                            <div class="col-lg-4">
                                <label>E-mail</label>
                                <input type="email" class="form-control form-control-sm" name="email" id="email" onchange="checkEmail()" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label>Password</label>
                                <input type="password" class="form-control form-control-sm" name="password" id="password1" placeholder="Password" autocomplete="new-password"  required>
                            </div>
                            <div class="col-lg-6">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control form-control-sm" name="password" id="password2" placeholder="Password" onchange="check_password()"  autocomplete="new-password" required>
                            </div>
                        </div>
                        <br>
                        <div class="row form-group">
                                <button type="submit" class="btn btn-danger py-2 mb-5 mx-auto d-block">CREATE ACCOUNT</button>
                            </div>
                    </div>
                

                </form>
            </div>
        </div>
    </main>

</body>
<script>
    function check_password() {
        checkStatusUser();
        var pass1 = $("#password1").val();
        var pass2 = $("#password2").val();
        if (pass1 != pass2) {
            document.getElementById("password2").focus();
            $("#password2").val("");
            $("#password1").val("");
            swal({
                title: "!! อุต่ะ",
                text: "! Password ทั้ง 2 ช่องไม่ตรงกัน กรุณาใส่ให้ถูกต้องต้อง",
                icon: "warning",
                button: "ตกลง",
            }).then((value) => {
                $('#password1').focus();

            });
        }
    }

    function checkEmail() {
        checkStatusUser();
        var email = $("#email").val();
        $.ajax({
            url: "{{ route('checkEmail') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                'email': email
            },
            type: "POST",
            dataType: "JSON",
            async: false,
            success: function(jd) {
                if (jd != '0') {
                    swal({
                        title: "!! อุต่ะ",
                        text: "! Email นี้ มีผู้ใช้เเล้ว",
                        icon: "warning",
                        button: "ตกลง",
                    });
                    $("#email").val("");
                }
            }
        });
    }

    function checkStatusUser() {
        var statusUser = $("#statusUser").val();

        if (statusUser == 6 && $("#statusUserer").val()=="") {
            swal({
                title: "!! แจ้งเตือน",
                text: "! กรุณาใส่ตำแหน่งอื่นๆด้วยครับ",
                icon: "warning",
                button: "ตกลง",
            }).then((value) => {
                    $('#statusUserer').focus();
                    
            });
        }
    }
    function affiliation_typeGet(id) {
        $.ajax({
            url: "",
            data: {
                "_token": "{{ csrf_token() }}",
                'id': id
            },
            type: "POST",
            async: false,
            success: function (data) {
                var obj = jQuery.parseJSON(data);
                
                    var opt = '<option value="" selected="selected">---Please select---</option>';
                    $.each(obj.Affiliation, function(key, val) 
                    {
                        opt += "<option value='" + val.id + "'>" + val.name + "</option>";
                    });
                    $(".affiliation_type_id").html(opt);
                    
                // if(id===1){
                //     $('.L10').show();
                //     $('.L09').hide();
                // }else if(id===2){
                //     $('.L09').show();
                //     $('.L10').hide();
                // }
                
            }
        });
    }
</script>
</html>