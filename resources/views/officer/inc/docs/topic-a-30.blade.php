<!-- STR 29 -->
<form class="box-topic" id="Protocol_opic30">
        {{ csrf_field() }}
        <div class="box-topic">
            <div class="topic">
    
                <div class="heading">
                    <img class="d-block mx-auto mb-3" src="{{asset('member/img/logo_tu_cut.svg')}} " height="100" />
                    <h2 class="title text-center">
                        แบบประเมินความเสี่ยงจากการปฏิบัติงานของโครงการวิจัยที่มีการใช้สัตว์เพื่องานทางวิทยาศาสตร์
                        มหาวิทยาลัยธรรมศาสตร์</h2>
                </div>
    
                <div class="row form-group">
                    <div class="col-12">
                        <p><strong>ชื่อโครงการวิจัย : {{ $Protocol_opic01->animal_protocol_th }}</strong></p>
                        <p><strong>หัวหน้าโครงการ : </strong></p>
                        <p><strong>วันที่ทำการประเมิน : </strong></p>
                        <p><strong>ผู้ประเมิน : </strong></p>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">สิ่งคุกคามทางสุขภาพของผู้ปฎิบัติงาน</th>
                            <th scope="col" style="width:5%;">ไม่มี</th>
                            <th scope="col" style="width:5%;">มี</th>
                            <th scope="col" style="width:38%;">มาตรการควบคุมปัจจัยเสี่ยง</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class=bg-light>
                            <td colspan="5"><strong>สิ่งคุกคามทางด้านกายภาพ</strong></td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>ท่านต้องปฏิบัติงานในที่มีแสงจ้าหรือแสงน้อยเกินไปหรือไม่</td>
                            <td>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" id="rad-a31-1_1" name="ptc30_01" @if($Protocol_opic30->ptc30_01=='N') checked @endif value="N"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="rad-a31-1_1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" id="rad-a31-1_2" name="ptc30_01" @if($Protocol_opic30->ptc30_01=='Y') checked @endif value="Y"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="rad-a31-1_2"></label>
                                </div>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="2"
                                    name="ptc30_01_sub" >{{ $Protocol_opic30->ptc30_01_sub }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>ท่านใช้เครื่องมือที่มีเสียงดังหรือไม่ (≥ 85 dB)</td>
                            <td>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" id="rad-a31-2_1" name="ptc30_02" @if($Protocol_opic30->ptc30_02=='N') checked @endif value="N"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="rad-a31-2_1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" id="rad-a31-2_2" name="ptc30_02" @if($Protocol_opic30->ptc30_02=='Y') checked @endif value="Y"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="rad-a31-2_2"></label>
                                </div>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="2"
                                    name="ptc30_02_sub" >{{ $Protocol_opic30->ptc30_02_sub }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>ท่านต้องปฏิบัติงานในพื้นที่ที่มีอุณหภูมิเย็นเกินไปหรือไม่ (≤18°C)</td>
                            <td>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" id="rad-a31-3_1" name="ptc30_03" @if($Protocol_opic30->ptc30_03=='N') checked @endif value="N"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="rad-a31-3_1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" id="rad-a31-3_2" name="ptc30_03" @if($Protocol_opic30->ptc30_03=='Y') checked @endif value="Y"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="rad-a31-3_2"></label>
                                </div>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="2"
                                    name="ptc30_03_sub" >{{ $Protocol_opic30->ptc30_03_sub }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>ท่านใช้เครื่องมือที่มีความสั่นสะเทือนหรือไม่</td>
                            <td>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" id="rad-a31-4_1" name="ptc30_04" @if($Protocol_opic30->ptc30_04=='N') checked @endif value="N"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="rad-a31-4_1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" id="rad-a31-4_2" name="ptc30_04" @if($Protocol_opic30->ptc30_04=='Y') checked @endif value="Y"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="rad-a31-4_2"></label>
                                </div>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="2"
                                    name="ptc30_04_sub" >{{ $Protocol_opic30->ptc30_04_sub }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>ท่านใช้รังสีในงานวิจัยหรือไม่</td>
                            <td>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" id="rad-a31-5_1" name="ptc30_05" @if($Protocol_opic30->ptc30_05=='N') checked @endif value="N"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="rad-a31-5_1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" id="rad-a31-5_2" name="ptc30_05" @if($Protocol_opic30->ptc30_05=='Y') checked @endif value="Y"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="rad-a31-5_2"></label>
                                </div>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="2"
                                    name="ptc30_05_sub" >{{ $Protocol_opic30->ptc30_05_sub }}</textarea>
                            </td>
                        </tr>
                        <tr class=bg-light>
                            <td colspan="5"><strong>สิ่งคุกคามทางด้านเคมี</strong></td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>ท่านใช้สารเคมีในงานวิจัยหรือไม่ (กรุณาระบุชนิด ปริมาณความเข้มข้นของสารเคมี)</td>
                            <td>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" id="rad-a31-6_1" name="ptc30_06" @if($Protocol_opic30->ptc30_06=='N') checked @endif value="N"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="rad-a31-6_1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" id="rad-a31-6_2" name="ptc30_06" @if($Protocol_opic30->ptc30_06=='Y') checked @endif value="Y"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="rad-a31-6_2"></label>
                                </div>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="2"
                                    name="ptc30_06_sub" >{{ $Protocol_opic30->ptc30_06_sub }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><button type="button" class="btn btn-danger rounded-0 plus3001">+</button></td>
                            <td colspan="4">
                                <table class="table table-sm table-bordered">
                                    <tbody class="tr_protocol_3001">
                                        @foreach ($Protocol_opic30_sub01 as $key => $r)
                                        <tr id="tra3001{{$key}}">
                                                <td class="p-0"><input type="text" name="ptc30_name_01[]" value="{{ $r->ptc30_name_01 }}"  class="form-control form-control-sm border-0 rounded-0"></td>
                                                <td class="text-center p-0"> <button type="button" class="btn btn-secondary rounded-0 minus3001">-</button> </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr class=bg-light>
                            <td colspan="5"><strong>สิ่งคุกคามทางด้านความปลอดภัยในการทำงาน</strong></td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>ท่านมีโอกาสเสี่ยงที่จะโดนสัตว์กัด/ข่วนหรือไม่</td>
                            <td>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" id="rad-a31-7_1" name="ptc30_07" @if($Protocol_opic30->ptc30_07=='N') checked @endif value="N"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="rad-a31-7_1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" id="rad-a31-7_2" name="ptc30_07" @if($Protocol_opic30->ptc30_07=='Y') checked @endif value="Y"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="rad-a31-7_2"></label>
                                </div>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="2"
                                    name="ptc30_07_sub" >{{ $Protocol_opic30->ptc30_07_sub }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>ท่านใช้สารเคมีหรือวัตถุไวไฟในงานวิจัยหรือไม่</td>
                            <td>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" id="rad-a31-8_1" name="ptc30_08" @if($Protocol_opic30->ptc30_08=='N') checked @endif value="N"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="rad-a31-8_1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" id="rad-a31-8_2" name="ptc30_08" @if($Protocol_opic30->ptc30_08=='Y') checked @endif value="Y"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="rad-a31-8_2"></label>
                                </div>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="2"
                                    name="ptc30_08_sub" >{{ $Protocol_opic30->ptc30_08_sub }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>ท่านมีโอกาสเสี่ยงต่อการโดนของมีคมบาด/เข็มตำหรือไม่</td>
                            <td>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" id="rad-a31-9_1" name="ptc30_09" @if($Protocol_opic30->ptc30_09=='N') checked @endif value="N"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="rad-a31-9_1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" id="rad-a31-9_2" name="ptc30_09" @if($Protocol_opic30->ptc30_09=='Y') checked @endif value="Y"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="rad-a31-9_2"></label>
                                </div>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="2"
                                    name="ptc30_09_sub" >{{ $Protocol_opic30->ptc30_09_sub }}</textarea>
                            </td>
                        </tr>
                        <tr class=bg-light>
                            <td colspan="5"><strong>สิ่งคุกคามทางด้านชีวภาพ</strong></td>
                        </tr>
                        <tr>
                            <th scope="row">10</th>
                            <td>ท่านมีการใช้เชื้อที่ก่อโรคในมนุษย์ในงานวิจัยหรือไม่ (กรุณาระบุชนิด ปริมาณ
                                ความเข้มข้นของเชื้อ)
                            </td>
                            <td>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" id="rad-a31-10_1" name="ptc30_10" @if($Protocol_opic30->ptc30_10=='N') checked @endif value="N"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="rad-a31-10_1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" id="rad-a31-10_2" name="ptc30_10" @if($Protocol_opic30->ptc30_10=='Y') checked @endif value="Y"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="rad-a31-10_2"></label>
                                </div>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="2"
                                    name="ptc30_10_sub" >{{ $Protocol_opic30->ptc30_10_sub }}</textarea>
                            </td>
                        </tr>
                        <tr>
                                <td><button type="button" class="btn btn-danger rounded-0 plus3002">+</button></td>
                                <td colspan="4">
                                    <table class="table table-sm table-bordered">
                                        <tbody class="tr_protocol_3002">
                                            @foreach ($Protocol_opic30_sub02 as $key => $r)
                                            <tr id="tra3002{{$key}}">
                                                <td class="p-0"><input type="text" name="ptc30_name_02[]" value="{{ $r->ptc30_name_02 }}" class="form-control form-control-sm border-0 rounded-0"></td>
                                                <td class="text-center p-0"> <button type="button" class="btn btn-secondary rounded-0 minus3002">-</button> </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        <tr class=bg-light>
                            <td colspan="5"><strong>สิ่งคุกคามทางด้านการยศาสตร์</strong></td>
                        </tr>
                        <tr>
                            <th scope="row">11</th>
                            <td>ท่านยกและเคลื่อนย้ายวัตถุที่มีน้ำหนักมากหรือไม่</td>
                            <td>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" id="rad-a31-11_1" name="ptc30_11" @if($Protocol_opic30->ptc30_11=='N') checked @endif value="N"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="rad-a31-11_1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" id="rad-a31-11_2" name="ptc30_11" @if($Protocol_opic30->ptc30_11=='Y') checked @endif value="Y"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="rad-a31-11_2"></label>
                                </div>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="2"
                                    name="ptc30_11_sub" >{{ $Protocol_opic30->ptc30_11_sub }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">12</th>
                            <td>ท่านทำงานโดยชูมือเหนือศีรษะ หรือชูข้อศอกเหนือหัวไหล่แบบซ้ำๆมากกว่า 1 ครั้งต่อนาทีหรือมากกว่า
                                4
                                ชั่วโมงต่อวันหรือไม่</td>
                            <td>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" id="rad-a31-12_1" name="ptc30_12" @if($Protocol_opic30->ptc30_12=='N') checked @endif value="N"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="rad-a31-12_1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" id="rad-a31-12_2" name="ptc30_12" @if($Protocol_opic30->ptc30_12=='Y') checked @endif value="Y"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="rad-a31-12_2"></label>
                                </div>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="2"
                                    name="ptc30_12_sub" >{{ $Protocol_opic30->ptc30_12_sub }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">13</th>
                            <td>ท่านทำงานโดยการก้มคอมากกว่า 45 องศา มากกว่า 4 ชั่วโมงต่อวันหรือไม่</td>
                            <td>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" id="rad-a31-13_1" name="ptc30_13" @if($Protocol_opic30->ptc30_13=='N') checked @endif value="N"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="rad-a31-13_1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" id="rad-a31-13_2" name="ptc30_13" @if($Protocol_opic30->ptc30_13=='Y') checked @endif value="Y"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="rad-a31-13_2"></label>
                                </div>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="2"
                                    name="ptc30_13_sub" >{{ $Protocol_opic30->ptc30_13_sub }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">14</th>
                            <td>ท่านทำงานโดยโค้งงอหลังไปด้านหน้ามากกว่า 30 องศา มากกว่า 4 ชั่วโมงต่อวันหรือไม่</td>
                            <td>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" id="rad-a31-14_1" name="ptc30_14" @if($Protocol_opic30->ptc30_14=='N') checked @endif value="N"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="rad-a31-14_1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" id="rad-a31-14_2" name="ptc30_14" @if($Protocol_opic30->ptc30_14=='Y') checked @endif value="Y"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="rad-a31-14_2"></label>
                                </div>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="2"
                                    name="ptc30_14_sub" >{{ $Protocol_opic30->ptc30_14_sub }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">15</th>
                            <td>ท่านทำงานโดยนั่งแบบย่อเข่าในการทำงานมากกว่า 4 ชั่วโมงต่อวันหรือไม่</td>
                            <td>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" id="rad-a31-15_1" name="ptc30_15" @if($Protocol_opic30->ptc30_15=='N') checked @endif value="N"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="rad-a31-15_1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" id="rad-a31-15_2" name="ptc30_15" @if($Protocol_opic30->ptc30_15=='Y') checked @endif value="Y"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="rad-a31-15_2"></label>
                                </div>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="2"
                                    name="ptc30_15_sub" >{{ $Protocol_opic30->ptc30_15_sub }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">16</th>
                            <td>ท่านทำงานโดยนั่งคุกเข่าในการทำงานมากกว่า 4 ชั่วโมงต่อวันหรือไม่</td>
                            <td>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" id="rad-a31-16_1" name="ptc30_16" @if($Protocol_opic30->ptc30_16=='N') checked @endif
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="rad-a31-16_1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" id="rad-a31-16_2" name="ptc30_16" @if($Protocol_opic30->ptc30_16=='Y') checked @endif value="Y"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="rad-a31-16_2"></label>
                                </div>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="2"
                                    name="ptc30_16_sub" >{{ $Protocol_opic30->ptc30_16_sub }}</textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <input type="hidden" name="id" value="{{ $Protocol_opic11->protocol_id }}">
                @if ($Protocol_docs->protocol_status==103)
                <div class="alert alert-secondary" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4><i class="material-icons">account_circle</i> REVIEWER001</h4>
                    <hr>
                    <div class="custom-control custom-control-inline custom-radio my-2">
                        <input type="radio" id="reviewer-comment-1_1" name="reviewer-comment-1" class="custom-control-input"  checked>
                        <label class="custom-control-label" for="reviewer-comment-1_1">เหมาะสม</label>
                    </div>
                    <div class="custom-control custom-control-inline custom-radio my-2">
                        <input type="radio" id="reviewer-comment-1_2" name="reviewer-comment-1" class="custom-control-input"  checked>
                        <label class="custom-control-label" for="reviewer-comment-1_2">ไม่เหมาะสม</label>
                    </div>
                    <div class="custom-control custom-control-inline custom-radio my-2">
                        <input type="radio" id="reviewer-comment-1_3" name="reviewer-comment-1" class="custom-control-input"  checked>
                        <label class="custom-control-label" for="reviewer-comment-1_3">ไม่มีข้อมูล</label>
                    </div>
                    <div class="custom-control custom-control-inline custom-radio my-2">
                        <input type="radio" id="reviewer-comment-1_4" name="reviewer-comment-1" class="custom-control-input"  checked>
                        <label class="custom-control-label" for="reviewer-comment-1_4">ไม่เกี่ยวข้อง</label>
                    </div>
                    <textarea class="form-control form-control-sm auto-expand" rows="4" placeholder="กรุณาระบุเหตผล.." >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</textarea>
                </div>
                <div class="alert alert-secondary" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4><i class="material-icons">account_circle</i> REVIEWER002</h4>
                    <hr>
                    <div class="custom-control custom-control-inline custom-radio my-2">
                        <input type="radio" id="reviewer-comment-2_1" name="reviewer-comment-2" class="custom-control-input"  checked>
                        <label class="custom-control-label" for="reviewer-comment-2_1">เหมาะสม</label>
                    </div>
                    <div class="custom-control custom-control-inline custom-radio my-2">
                        <input type="radio" id="reviewer-comment-2_2" name="reviewer-comment-2" class="custom-control-input"  checked>
                        <label class="custom-control-label" for="reviewer-comment-2_2">ไม่เหมาะสม</label>
                    </div>
                    <div class="custom-control custom-control-inline custom-radio my-2">
                        <input type="radio" id="reviewer-comment-2_3" name="reviewer-comment-2" class="custom-control-input"  checked>
                        <label class="custom-control-label" for="reviewer-comment-2_3">ไม่มีข้อมูล</label>
                    </div>
                    <div class="custom-control custom-control-inline custom-radio my-2">
                        <input type="radio" id="reviewer-comment-2_4" name="reviewer-comment-2" class="custom-control-input"  checked>
                        <label class="custom-control-label" for="reviewer-comment-2_4">ไม่เกี่ยวข้อง</label>
                    </div>
                    <textarea class="form-control form-control-sm auto-expand" rows="4" placeholder="กรุณาระบุเหตผล.." >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</textarea>
                </div>
                <button type="button" class="btn btn-warning"><small class="material-icons">crop</small> Merge Comments</button>
                <div class="alert alert-warning my-5" role="alert">
                    <h4><i class="material-icons">question_answer</i> Comment</h4>
                    <hr>
                    <div class="custom-control custom-control-inline custom-radio my-2">
                        <input type="radio" id="merge-comment-1_1" name="merge-comment-1" class="custom-control-input">
                        <label class="custom-control-label" for="merge-comment-1_1">เหมาะสม</label>
                    </div>
                    <div class="custom-control custom-control-inline custom-radio my-2">
                        <input type="radio" id="merge-comment-1_2" name="merge-comment-1" class="custom-control-input">
                        <label class="custom-control-label" for="merge-comment-1_2">ไม่เหมาะสม</label>
                    </div>
                    <div class="custom-control custom-control-inline custom-radio my-2">
                        <input type="radio" id="merge-comment-1_3" name="merge-comment-1" class="custom-control-input">
                        <label class="custom-control-label" for="merge-comment-1_3">ไม่มีข้อมูล</label>
                    </div>
                    <div class="custom-control custom-control-inline custom-radio my-2">
                        <input type="radio" id="merge-comment-1_4" name="merge-comment-1" class="custom-control-input" checked>
                        <label class="custom-control-label" for="merge-comment-1_4">ไม่เกี่ยวข้อง</label>
                    </div>
                    <textarea class="form-control form-control-sm auto-expand" rows="4" placeholder="กรุณาระบุเหตผล.." >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</textarea>
                </div>
                @hasanyrole('secretary|reviewer')
                <button type="submit" class="btn-c material-icons topic-save">save</button>
                @endhasanyrole
                @endif
            </div>
        </div>
    </form>
    <!-- END 29 -->
    