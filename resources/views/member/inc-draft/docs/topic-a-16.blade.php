<!-- STR 16 -->
<form class="box-topic" id="Protocol_opic16">
        {{ csrf_field() }}
        <div class="topic">
    
            <h2 class="title"><span>16</span> สภาพแวดล้อมของการเลี้ยงสัตว์ (Husbandry)</h2>
    
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" style="width:18%;">Program</th>
                        <th scope="col" style="width:38%;">LACTU Standard</th>
                        <th scope="col" style="width:38%;">Other Please specified</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>มาตรฐานการเลี้ยง (Housing system)</td>
                        <td>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a16-1_1" name="ptc16_01" @if($Protocol_opic16->ptc16_01=='Y') checked @endif value="Y" class="custom-control-input">
                                <label class="custom-control-label" for="chk-a16-1_1">Strict hygienic conventional</label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a16-1_2" name="ptc16_02" @if($Protocol_opic16->ptc16_02=='Y') checked @endif value="Y"  class="custom-control-input">
                                <label class="custom-control-label" for="chk-a16-1_2">อื่น ๆ (Other, please specify)</label>
                            </div>
                        <input type="text" name="ptc16_02_sub" value="{{ $Protocol_opic16->ptc16_02_sub }}" class="form-control form-control-sm" >
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>สภาพแวดล้อมของห้อง (Environment requirement)</td>
                        <td>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a16-2_1" name="ptc16_03" @if($Protocol_opic16->ptc16_03=='Y') checked @endif value="Y"  class="custom-control-input">
                                <label class="custom-control-label" for="chk-a16-2_1">อุณหภูมิ (Temperature) 22 <u>+</u> 1  &#8451;</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a16-2_2" name="ptc16_04" @if($Protocol_opic16->ptc16_04=='Y') checked @endif value="Y"  class="custom-control-input">
                                <label class="custom-control-label" for="chk-a16-2_2">ความชื้นสัมพัทธ์ (Relative humidity) 30-70 %</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a16-2_3" name="ptc16_05" @if($Protocol_opic16->ptc16_05=='Y') checked @endif value="Y"  class="custom-control-input">
                                <label class="custom-control-label" for="chk-a16-2_3">แสงสว่าง (Light) 130-325 Lux</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a16-2_4" name="ptc16_06" @if($Protocol_opic16->ptc16_06=='Y') checked @endif value="Y"  class="custom-control-input">
                                <label class="custom-control-label" for="chk-a16-2_4">อัตราส่วนแสงสว่างกลางวันกับกลางคืน (Light cycle) Day 12ชั่วโมง (Hours) night 12 ชั่วโมง (Hours)</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-row">
                                <div class="col">
                                    <div class="custom-control custom-checkbox mb-1">
                                        <input type="checkbox" id="chk-a16-2_5" name="ptc16_07" @if($Protocol_opic16->ptc16_07=='Y') checked @endif value="Y"  class="custom-control-input">
                                        <label class="custom-control-label" for="chk-a16-2_5">อุณหภูมิ (Temperature)</label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <input type="text" name="ptc16_07_sub" value="{{ $Protocol_opic16->ptc16_07_sub }}" class="form-control form-control-sm mb-1" >
                                </div>
                                <div class="col-1">
                                    &#8451;
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" id="chk-a16-2_6" name="ptc16_08"  @if($Protocol_opic16->ptc16_08=='Y') checked @endif value="Y" class="custom-control-input">
                                        <label class="custom-control-label" for="chk-a16-2_6">ความชื้นสัมพัทธ์ (Relative humidity)</label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <input type="text" name="ptc16_08_sub" value="{{ $Protocol_opic16->ptc16_08_sub }}" class="form-control form-control-sm mb-1" >
                                </div>
                                <div class="col-1">
                                    %
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" id="chk-a16-2_7" @if($Protocol_opic16->ptc16_09=='Y') checked @endif value="Y"  name="ptc16_09" class="custom-control-input">
                                        <label class="custom-control-label" for="chk-a16-2_7">แสงสว่าง (Light)</label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <input type="text" class="form-control form-control-sm mb-1" name="ptc16_09_sub" value="{{ $Protocol_opic16->ptc16_09_sub }}" >
                                </div>
                                <div class="col-1">
                                    Lux
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a16-2_8" name="ptc16_10" @if($Protocol_opic16->ptc16_10=='Y') checked @endif value="Y"  class="custom-control-input">
                                <label class="custom-control-label" for="chk-a16-2_8">อัตราส่วนแสงสว่างกลางวันกับกลางคืน (Light cycle) Day 12ชั่วโมง (Hours) night 12 ชั่วโมง (Hours)</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>กรง / คอกสัตว์ / พื้นที่เลี้ยงสัตว์ (Caging)</td>
                        <td>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a16-3_1" name="ptc16_11" @if($Protocol_opic16->ptc16_11=='Y') checked @endif value="Y"  class="custom-control-input">
                                <label class="custom-control-label" for="chk-a16-3_1">Strict hygienic conventional</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a16-3_2" name="ptc16_12" @if($Protocol_opic16->ptc16_12=='Y') checked @endif value="Y"  class="custom-control-input">
                                <label class="custom-control-label" for="chk-a16-3_2">Static cage for Rat</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a16-3_3" name="ptc16_13" @if($Protocol_opic16->ptc16_13=='Y') checked @endif value="Y"  class="custom-control-input">
                                <label class="custom-control-label" for="chk-a16-3_3">Static cage for Hamster</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a16-3_4" name="ptc16_14"  @if($Protocol_opic16->ptc16_14=='Y') checked @endif value="Y"  class="custom-control-input">
                                <label class="custom-control-label" for="chk-a16-3_4">Cage for Rabbit</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a16-3_5" name="ptc16_15" @if($Protocol_opic16->ptc16_15=='Y') checked @endif value="Y"  class="custom-control-input">
                                <label class="custom-control-label" for="chk-a16-3_5">IVC cage</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a16-3_6" name="ptc16_16" @if($Protocol_opic16->ptc16_16=='Y') checked @endif value="Y"  class="custom-control-input">
                                <label class="custom-control-label" for="chk-a16-3_6">Metabolic cage for rat โปรดระบุระยะเวลาและความถี่</label>
                            </div>
                            <div class="form-row">
                                <label class="col-4"><span class="pl-4">Period</span></label>
                                <div class="col">
                                    <input type="text" class="form-control form-control-sm mb-1" value="{{ $Protocol_opic16->ptc16_17 }}" name="ptc16_17" >
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-4"><span class="pl-4">Frequency</span></label>
                                <div class="col">
                                    <input type="text" class="form-control form-control-sm mb-1" value="{{ $Protocol_opic16->ptc16_18 }}" name="ptc16_18" >
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a16-3_7" class="custom-control-input" @if($Protocol_opic16->ptc16_19=='Y') checked @endif value="Y"  name="ptc16_19">
                                <label class="custom-control-label" for="chk-a16-3_7">อื่น ๆ (Other, please specify)</label>
                            </div>
                            <input type="text" class="form-control form-control-sm" name="ptc16_19_sub" value="{{ $Protocol_opic16->ptc16_19_sub }}" >
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>จำนวนสัตว์ที่เลี้ยง (Number of animal(s) per cage)</td>
                        <td>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" class="form-control form-control-sm mb-1" name="ptc16_20" @if($Protocol_opic16->ptc16_20=='Y') checked @endif value="Y"  >
                                </div>
                                <label class="col-8">ตัวต่อกรง / ตัวต่อคอก</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" class="form-control form-control-sm mb-1" name="ptc16_21" @if($Protocol_opic16->ptc16_21=='Y') checked @endif value="Y"  >
                                </div>
                                <label class="col-8">ตัวต่อกรง / ตัวต่อคอก</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>ชนิดของอาหาร (Type of food)</td>
                        <td>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a16-5_1" name="ptc16_22" @if($Protocol_opic16->ptc16_22=='Y') checked @endif value="Y" class="custom-control-input">
                                <label class="custom-control-label" for="chk-a16-5_1">CP 082 For mouse, hamster and rat</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a16-5_2" name="ptc16_23" @if($Protocol_opic16->ptc16_23=='Y') checked @endif value="Y" class="custom-control-input">
                                <label class="custom-control-label" for="chk-a16-5_2">CP 082 Autoclaved for immunocompromised animals</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a16-5_3" name="ptc16_24" @if($Protocol_opic16->ptc16_24=='Y') checked @endif value="Y" class="custom-control-input">
                                <label class="custom-control-label" for="chk-a16-5_3">CP For rabbit</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a16-5_4" name="ptc16_25" @if($Protocol_opic16->ptc16_25=='Y') checked @endif value="Y" class="custom-control-input">
                                <label class="custom-control-label" for="chk-a16-5_4">หญ้า for rabbit</label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a16-5_5" name="ptc16_26" @if($Protocol_opic16->ptc16_26=='Y') checked @endif value="Y" class="custom-control-input">
                                <label class="custom-control-label" for="chk-a16-5_5">อื่น ๆ (Other, please specify)</label>
                            </div>
                        <input type="text" class="form-control form-control-sm" name="ptc16_26_sub"  value="{{ $Protocol_opic16->ptc16_26_sub }}"  >
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>การให้อาหาร (Feeding schedule)</td>
                        <td>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a16-6_1" name="ptc16_27" @if($Protocol_opic16->ptc16_27=='Y') checked @endif value="Y"  class="custom-control-input">
                                <label class="custom-control-label" for="chk-a16-6_1">ให้อาหารในอัตราปกติมีกินตลอดเวลา (Ad libitum)</label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a16-6_2" name="ptc16_28" @if($Protocol_opic16->ptc16_28=='Y') checked @endif value="Y"  class="custom-control-input">
                                <label class="custom-control-label" for="chk-a16-6_2">มีกำหนดเวลาและปริมาณอาหาร (Food restriction)* โปรดระบุ</label>
                            </div>
                            <input type="text" class="form-control form-control-sm" name="ptc16_28_sub" value="{{ $Protocol_opic16->ptc16_28_sub }}" >
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>ชนิดของน้ำ</td>
                        <td>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a16-7_1" name="ptc16_29" @if($Protocol_opic16->ptc16_29=='Y') checked @endif value="Y"  class="custom-control-input">
                                <label class="custom-control-label" for="chk-a16-7_1">RO water and autoclaved</label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a16-7_2" name="ptc16_30" @if($Protocol_opic16->ptc16_30=='Y') checked @endif value="Y"  class="custom-control-input">
                                <label class="custom-control-label" for="chk-a16-7_2">อื่นๆ (ระบุ) (Other, please specify)</label>
                            </div>
                            <input type="text" class="form-control form-control-sm" name="ptc16_30_sub" value="{{ $Protocol_opic16->ptc16_30_sub }}"  >
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>การให้น้ำ (Provision of water)</td>
                        <td>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a16-8_1" name="ptc16_31" @if($Protocol_opic16->ptc16_31=='Y') checked @endif value="Y" class="custom-control-input">
                                <label class="custom-control-label" for="chk-a16-8_1">ให้น้ำในอัตราปกติมีกินตลอดเวลา (Routine feeding (Ad libitum))</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox mb-1">
                                        <input type="checkbox" id="chk-a16-8_2" name="ptc16_32" @if($Protocol_opic16->ptc16_32=='Y') checked @endif value="Y" class="custom-control-input">
                                        <label class="custom-control-label" for="chk-a16-8_2">มีกำหนดเวลาและปริมาณน้ำ (Water restriction) โปรดระบุ</label>
                                    </div>
                                    <input type="text" class="form-control form-control-sm mb-3" name="ptc16_32_sub" value="{{ $Protocol_opic16->ptc16_32_sub }}" >
                                </div>
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox mb-1">
                                        <input type="checkbox" id="chk-a16-8_3" name="ptc16_33" @if($Protocol_opic16->ptc16_33=='Y') checked @endif value="Y" class="custom-control-input">
                                        <label class="custom-control-label" for="chk-a16-8_3">อื่นๆ (ระบุ) (Other, please specify)</label>
                                    </div>
                                    <input type="text" class="form-control form-control-sm" name="ptc16_33_sub" value="{{ $Protocol_opic16->ptc16_33_sub }}" >
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>วิธีการให้น้ำ (Watering methods)</td>
                        <td>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a16-9_1" name="ptc16_34" @if($Protocol_opic16->ptc16_34=='Y') checked @endif value="Y" class="custom-control-input">
                                <label class="custom-control-label" for="chk-a16-9_1">โดยบรรจุน้ำในขวดมีจุกและหลอด (bottle)</label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a16-9_2" name="ptc16_35" @if($Protocol_opic16->ptc16_35=='Y') checked @endif value="Y" class="custom-control-input">
                                <label class="custom-control-label" for="chk-a16-9_2">อื่น ๆ (Other, please specify)</label>
                            </div>
                            <input type="text" class="form-control form-control-sm" name="ptc16_35_sub" value="{{ $Protocol_opic16->ptc16_02_sub }}" >
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>วัสดุรองนอน (Bedding)</td>
                        <td>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a16-10_1" name="ptc16_36" @if($Protocol_opic16->ptc16_36=='Y') checked @endif value="Y" class="custom-control-input">
                                <label class="custom-control-label" for="chk-a16-10_1">ซังข้าวโพดบดปลอดเชื้อ (Autoclaved corncob)</label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a16-10_2" name="ptc16_37" @if($Protocol_opic16->ptc16_37=='Y') checked @endif value="Y" class="custom-control-input">
                                <label class="custom-control-label" for="chk-a16-10_2">อื่น ๆ (Other, please specify)</label>
                            </div>
                            <input type="text" class="form-control form-control-sm" name="ptc16_37_sub" value="{{ $Protocol_opic16->ptc16_37_sub }}" >
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">11</th>
                        <td>การเปลี่ยนวัสดุรองนอน (Schedule of bedding changing)</td>
                        <td>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a16-11_1" name="ptc16_38_" @if($Protocol_opic16->ptc16_38_=='Y') checked @endif value="Y" class="custom-control-input">
                                <label class="custom-control-label" for="chk-a16-11_1">กรงเปิด ทุกสัปดาห์ (weekly)</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a16-11_2" name="ptc16_38" @if($Protocol_opic16->ptc16_38=='Y') checked @endif value="Y" class="custom-control-input">
                                <label class="custom-control-label" for="chk-a16-11_2">กรง IVC ทุก 2 สัปดาห์ (every 2 weeks)</label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" id="chk-a16-11_3" name="ptc16_39" @if($Protocol_opic16->ptc16_39=='Y') checked @endif value="Y" class="custom-control-input">
                                <label class="custom-control-label" for="chk-a16-11_3">อื่น ๆ (Other, please specify)</label>
                            </div>
                            <input type="text" class="form-control form-control-sm" name="ptc16_39_sub" value="{{ $Protocol_opic16->ptc16_39_sub }}" >
                        </td>
                    </tr>
                </tbody>
            </table>
            <input type="hidden" name="id" value="{{ $Protocol_opic11->protocol_id }}">
            <button type="submit" class="btn-c material-icons topic-save">save</button>
    
        </div>
    </form>
    <!-- END 16 -->