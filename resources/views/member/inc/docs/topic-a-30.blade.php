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

            {{-- <div class="row form-group">
                <div class="col-12">
                    <p><strong>ชื่อโครงการวิจัย : </strong></p>
                    <p><strong>หัวหน้าโครงการ : </strong></p>
                    <p><strong>วันที่ทำการประเมิน : </strong></p>
                    <p><strong>ผู้ประเมิน : </strong></p>
                </div>
            </div> --}}
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
                                <input type="radio" id="rad-a31-1_1" name="ptc30_01" value="N"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="rad-a31-1_1"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" id="rad-a31-1_2" name="ptc30_01" value="Y"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="rad-a31-1_2"></label>
                            </div>
                        </td>
                        <td class="p-0">
                            <textarea class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="2"
                                name="ptc30_01_sub" ></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>ท่านใช้เครื่องมือที่มีเสียงดังหรือไม่ (≥ 85 dB)</td>
                        <td>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" id="rad-a31-2_1" name="ptc30_02" value="N"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="rad-a31-2_1"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" id="rad-a31-2_2" name="ptc30_02" value="Y"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="rad-a31-2_2"></label>
                            </div>
                        </td>
                        <td class="p-0">
                            <textarea class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="2"
                                name="ptc30_02_sub" ></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>ท่านต้องปฏิบัติงานในพื้นที่ที่มีอุณหภูมิเย็นเกินไปหรือไม่ (≤18°C)</td>
                        <td>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" id="rad-a31-3_1" name="ptc30_03" value="N"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="rad-a31-3_1"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" id="rad-a31-3_2" name="ptc30_03" value="Y"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="rad-a31-3_2"></label>
                            </div>
                        </td>
                        <td class="p-0">
                            <textarea class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="2"
                                name="ptc30_03_sub" ></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>ท่านใช้เครื่องมือที่มีความสั่นสะเทือนหรือไม่</td>
                        <td>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" id="rad-a31-4_1" name="ptc30_04" value="N"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="rad-a31-4_1"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" id="rad-a31-4_2" name="ptc30_04" value="Y"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="rad-a31-4_2"></label>
                            </div>
                        </td>
                        <td class="p-0">
                            <textarea class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="2"
                                name="ptc30_04_sub" ></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>ท่านใช้รังสีในงานวิจัยหรือไม่</td>
                        <td>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" id="rad-a31-5_1" name="ptc30_05" value="N"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="rad-a31-5_1"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" id="rad-a31-5_2" name="ptc30_05" value="Y"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="rad-a31-5_2"></label>
                            </div>
                        </td>
                        <td class="p-0">
                            <textarea class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="2"
                                name="ptc30_05_sub" ></textarea>
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
                                <input type="radio" id="rad-a31-6_1" name="ptc30_06" value="N"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="rad-a31-6_1"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" id="rad-a31-6_2" name="ptc30_06" value="Y"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="rad-a31-6_2"></label>
                            </div>
                        </td>
                        <td class="p-0">
                            <textarea class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="2"
                                name="ptc30_06_sub" ></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td><button type="button" class="btn btn-danger rounded-0 plus3001">+</button></td>
                        <td colspan="4">
                            <table class="table table-sm table-bordered">
                                <tbody class="tr_protocol_3001">
                                    <tr id="tra3001">
                                        <td class="p-0"><input type="text" name="ptc30_name_01[]"  class="form-control form-control-sm border-0 rounded-0"></td>
                                        <td class="text-center p-0"> <button type="button" class="btn btn-secondary rounded-0 minus3001">-</button> </td>
                                    </tr>
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
                                <input type="radio" id="rad-a31-7_1" name="ptc30_07" value="N"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="rad-a31-7_1"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" id="rad-a31-7_2" name="ptc30_07" value="Y"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="rad-a31-7_2"></label>
                            </div>
                        </td>
                        <td class="p-0">
                            <textarea class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="2"
                                name="ptc30_07_sub" ></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>ท่านใช้สารเคมีหรือวัตถุไวไฟในงานวิจัยหรือไม่</td>
                        <td>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" id="rad-a31-8_1" name="ptc30_08" value="N"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="rad-a31-8_1"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" id="rad-a31-8_2" name="ptc30_08" value="Y"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="rad-a31-8_2"></label>
                            </div>
                        </td>
                        <td class="p-0">
                            <textarea class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="2"
                                name="ptc30_08_sub" ></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>ท่านมีโอกาสเสี่ยงต่อการโดนของมีคมบาด/เข็มตำหรือไม่</td>
                        <td>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" id="rad-a31-9_1" name="ptc30_09" value="N"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="rad-a31-9_1"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" id="rad-a31-9_2" name="ptc30_09" value="Y"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="rad-a31-9_2"></label>
                            </div>
                        </td>
                        <td class="p-0">
                            <textarea class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="2"
                                name="ptc30_09_sub" ></textarea>
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
                                <input type="radio" id="rad-a31-10_1" name="ptc30_10" value="N"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="rad-a31-10_1"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" id="rad-a31-10_2" name="ptc30_10" value="Y"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="rad-a31-10_2"></label>
                            </div>
                        </td>
                        <td class="p-0">
                            <textarea class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="2"
                                name="ptc30_10_sub" ></textarea>
                        </td>
                    </tr>
                    <tr>
                            <td><button type="button" class="btn btn-danger rounded-0 plus3002">+</button></td>
                            <td colspan="4">
                                <table class="table table-sm table-bordered">
                                    <tbody class="tr_protocol_3002">
                                        <tr id="tra3002">
                                            <td class="p-0"><input type="text" name="ptc30_name_02[]" class="form-control form-control-sm border-0 rounded-0"></td>
                                            <td class="text-center p-0"> <button type="button" class="btn btn-secondary rounded-0 minus3002">-</button> </td>
                                        </tr>
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
                                <input type="radio" id="rad-a31-11_1" name="ptc30_11" value="N"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="rad-a31-11_1"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" id="rad-a31-11_2" name="ptc30_11" value="Y"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="rad-a31-11_2"></label>
                            </div>
                        </td>
                        <td class="p-0">
                            <textarea class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="2"
                                name="ptc30_11_sub" ></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">12</th>
                        <td>ท่านทำงานโดยชูมือเหนือศีรษะ หรือชูข้อศอกเหนือหัวไหล่แบบซ้ำๆมากกว่า 1 ครั้งต่อนาทีหรือมากกว่า
                            4
                            ชั่วโมงต่อวันหรือไม่</td>
                        <td>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" id="rad-a31-12_1" name="ptc30_12" value="N"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="rad-a31-12_1"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" id="rad-a31-12_2" name="ptc30_12" value="Y"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="rad-a31-12_2"></label>
                            </div>
                        </td>
                        <td class="p-0">
                            <textarea class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="2"
                                name="ptc30_12_sub" ></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">13</th>
                        <td>ท่านทำงานโดยการก้มคอมากกว่า 45 องศา มากกว่า 4 ชั่วโมงต่อวันหรือไม่</td>
                        <td>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" id="rad-a31-13_1" name="ptc30_13" value="N"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="rad-a31-13_1"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" id="rad-a31-13_2" name="ptc30_13" value="Y"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="rad-a31-13_2"></label>
                            </div>
                        </td>
                        <td class="p-0">
                            <textarea class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="2"
                                name="ptc30_13_sub" ></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">14</th>
                        <td>ท่านทำงานโดยโค้งงอหลังไปด้านหน้ามากกว่า 30 องศา มากกว่า 4 ชั่วโมงต่อวันหรือไม่</td>
                        <td>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" id="rad-a31-14_1" name="ptc30_14" value="N"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="rad-a31-14_1"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" id="rad-a31-14_2" name="ptc30_14" value="Y"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="rad-a31-14_2"></label>
                            </div>
                        </td>
                        <td class="p-0">
                            <textarea class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="2"
                                name="ptc30_14_sub" ></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">15</th>
                        <td>ท่านทำงานโดยนั่งแบบย่อเข่าในการทำงานมากกว่า 4 ชั่วโมงต่อวันหรือไม่</td>
                        <td>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" id="rad-a31-15_1" name="ptc30_15" value="N"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="rad-a31-15_1"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" id="rad-a31-15_2" name="ptc30_15" value="Y"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="rad-a31-15_2"></label>
                            </div>
                        </td>
                        <td class="p-0">
                            <textarea class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="2"
                                name="ptc30_15_sub" ></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">16</th>
                        <td>ท่านทำงานโดยนั่งคุกเข่าในการทำงานมากกว่า 4 ชั่วโมงต่อวันหรือไม่</td>
                        <td>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" id="rad-a31-16_1" name="ptc30_16" value="N"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="rad-a31-16_1"></label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" id="rad-a31-16_2" name="ptc30_16" value="Y"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="rad-a31-16_2"></label>
                            </div>
                        </td>
                        <td class="p-0">
                            <textarea class="form-control form-control-sm border-0 rounded-0 txt-auto-h" rows="2"
                                name="ptc30_16_sub" ></textarea>
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="topic-save2">กรุณากด Save ทุกครั้งหลังมีการแก้ไขข้อมูล</p>
            <button type="submit" class="btn-c material-icons topic-save">save</button>
        </div>
    </div>
</form>
<!-- END 29 -->
