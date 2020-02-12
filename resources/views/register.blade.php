<!DOCTYPE html>
<html>
<head>
  <title>IACUC Registeration</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('member/css/bootstrap.min.css')}} ">
  <link rel="stylesheet" href="{{asset('member/css/styles.css')}} " />
</head>
<body>

    <main class="container">
        <div class="row">
            <div class="col-12 col-lg-8 mx-auto">
                <form>
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
                                    <input type="text" class="form-control form-control-sm" placeholder="ชื่อ">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="lang-group mb-2">
                                    <small>TH</small>
                                    <input type="text" class="form-control form-control-sm" placeholder="นามสกุล">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="lang-group">
                                    <small>EN</small>
                                    <input type="text" class="form-control form-control-sm" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="lang-group">
                                    <small>EN</small>
                                    <input type="text" class="form-control form-control-sm" placeholder="Last Name">
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-12">สถานภาพ</label>
                            <div class="col-lg-6">
                                <select class="form-control form-control-sm mb-2">
                                    <option></option>
                                    <option>อาจารย์ (Lecturer)</option>
                                    <option>เจ้าเหน้าที่ของคณะ (Academic staff)</option>
                                    <option>นักศึกษา (Student) ตรี (Bachelor degree)</option>
                                    <option>นักศึกษา (Student) โท (Master degree)</option>
                                    <option>นักศึกษา (Student) เอก (Doctoral degree)</option>
                                    <option>อื่นๆ โปรดระบุ (Other Please describe)</option>
                                    <option></option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control form-control-sm mb-2">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-12">ตําแหน่งทางวิชาการ (Align academic)</label>
                            <div class="col-lg-6">
                                <div class="lang-group mb-2">
                                    <small>TH</small>
                                    <input type="text" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="lang-group mb-2">
                                    <small>EN</small>
                                    <input type="text" class="form-control form-control-sm">
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-12">ตําแหน่งอื่นๆ (Other position)</label>
                            <div class="col-lg-6">
                                <div class="lang-group mb-2">
                                    <small>TH</small>
                                    <input type="text" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="lang-group mb-2">
                                    <small>EN</small>
                                    <input type="text" class="form-control form-control-sm">
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-12">สถานที่ติดต่อ (Contact address)</label>
                            <div class="col-lg-6">
                                <div class="lang-group mb-2">
                                    <small>TH</small>
                                    <textarea class="form-control form-control-sm" rows="1"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="lang-group mb-2">
                                    <small>EN</small>
                                    <textarea class="form-control form-control-sm" rows="1"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-4">
                                <label>โทรศัพท์ (Tel.)</label>
                                <input type="text" class="form-control form-control-sm">
                            </div>
                            <div class="col-lg-4">
                                <label>โทรสาร (Fax.)</label>
                                <input type="text" class="form-control form-control-sm">
                            </div>
                            <div class="col-lg-4">
                                <label>E-mail</label>
                                <input type="email" class="form-control form-control-sm">
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-danger py-2 my-5 mx-auto d-block" onclick="location.href='login.php';">CREATE ACCOUNT</button>

                </form>
            </div>
        </div>
    </main>

    <!-- Site JS -->
    <script src="{{asset('member/js/bootstrap.min.js')}} "></script>
    <script src="{{asset('member/js/jquery-3.3.1.min.js')}} "></script>
    <script src="{{asset('member/js/popper.min.js')}} "></script>
    <script src="{{asset('member/js/script.js')}} "></script>
    <!-- Site JS -->
    
</body>
</html>