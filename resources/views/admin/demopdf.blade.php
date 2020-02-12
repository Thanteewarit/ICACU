@php  
$checkYes   = "http://ttw-uat.me/picture/checkYes.png";
$checkNo    = "http://ttw-uat.me/picture/checkNo.png";
@endphp
<style type="text/css">
  .tg  {border-collapse:collapse;border-spacing:0;}
  .tg td{font-family:Arial, "thaisarabun";font-size:16px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
  .tg th{font-family:Arial, "thaisarabun";font-size:16px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
  .tg .tg-zv4m{border-color:#ffffff;text-align:left;vertical-align:top}
  .tg .tg-8jgo{border-color:#ffffff;text-align:center;vertical-align:top}
  .tg .tg-czno{font-size:16px;border-color:#ffffff;text-align:left;vertical-align:top}
  .tg .tg-b8y7{font-size:20px;border-color:#ffffff;text-align:center;vertical-align:top}
  .tg .tg-b420{font-size:18px;border-color:#ffffff;text-align:center;vertical-align:top}
  .tg .tg-e5wj{font-size:20px;border-color:#ffffff;text-align:left;vertical-align:top}
  </style>
  <table class="tg" style="undefined;table-layout: fixed; width: 946px">
  <colgroup>
  <col style="width: 508px">
  <col style="width: 438px">
  </colgroup>
    <tr>
      <th class="tg-8jgo" colspan="3"><img src="http://o.ots.co.th/iacucsnex/logo_tu_cut.png" width="100"></th>
    </tr>
    <tr>
      <td class="tg-b420" colspan="3"><span style="font-weight:bold">แบบฟอร์มการขอรับการพิจารณาจรรยาบรรณการใช้สัตว์ทดลอง</span></td>
    </tr>
    <tr>
      <td class="tg-b8y7" colspan="3"><span style="font-weight:bold">(ANIMAL CARE AND USE PROTOCOL)</span></td>
    </tr>
    <tr>
      <td class="tg-8jgo" colspan="3"><span style="font-weight:bold">(เพื่อคณะอนุกรรมการจรรยาบรรณและติดตามโครงการเลี้ยงและใช้สัตว์เพื่องานทางวิทยาศาสตร์ มธ. พิจารณา)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">01 : ชื่อโครงการ (Protocol Title)</span></td>
    </tr>
    <tr>
      <td class="tg-zv4m" colspan="3"><span style="font-weight:bold">ชื่อโครงการที่ขอใช้สัตว์ (Animal Protocol Title)</span></td>
    </tr>
    <tr>
      <td class="tg-zv4m">TH : {{ $Protocol_opic01->animal_protocol_th }}</td>
      <td class="tg-zv4m">EN : {{ $Protocol_opic01->animal_protocol_en }}</td>
    </tr>
    <tr>
      <td class="tg-zv4m" colspan="3"><span style="font-weight:bold">ชื่อโครงการหลัก (Project/Proposal Title) (ถ้ามี)</span></td>
    </tr>
    <tr>
      <td class="tg-zv4m">TH : {{ $Protocol_opic01->project_proposal_th }}</td>
      <td class="tg-zv4m">EN : {{ $Protocol_opic01->project_proposal_en }}</td>
    </tr>
    @if($Protocol_opic02)
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">02 รายชื่อหัวหน้าโครงการและผู้ร่วมโครงการ (List of Principal Investigator and Co-Investigators)</span></td>
    </tr>
    @foreach ($Protocol_opic02 as $r)
    <tr>
      <td class="tg-czno" colspan="3"><span style="font-weight:bold">2.1 ชื่อ-นามสกุล (Name-Surname)</span></td>
    </tr>
    <tr>
      <td class="tg-zv4m">TH : {{ $r->Name_th }}&nbsp; &nbsp;{{ $r->Surname_th }}</td>
      <td class="tg-zv4m">EN : {{ $r->Name_en }}&nbsp; &nbsp;{{ $r->Surname_en }}</td>
    </tr>
    <tr>
      <td class="tg-czno" colspan="1"><span style="font-weight:bold">สถานภาพ</span></td>
      <td class="tg-czno" colspan="2">{{ $r->ststusName->name }}</td>
    </tr>
    <tr>
      <td class="tg-czno" colspan="3"><span style="font-weight:bold">ตําแหน่งทางวิชาการ (Align academic)</span></td>
    </tr>
    <tr>
      <td class="tg-zv4m">TH : {{ $r->opic02_Align_th }}</td>
      <td class="tg-zv4m">EN : {{ $r->opic02_Align_en }}</td>
    </tr>
    <tr>
      <td class="tg-czno"><span style="font-weight:bold">ตําแหน่งอื่นๆ (Other position)</span></td>
      <td class="tg-zv4m"></td>
    </tr>
    <tr>
      <td class="tg-zv4m">TH : {{ $r->opic02_Other_position_th }}</td>
      <td class="tg-zv4m">EN : {{ $r->opic02_Other_position_en }}</td>
    </tr>
    <tr>
      <td class="tg-czno"><span style="font-weight:bold">สถานที่ติดต่อ (Contact address)</span></td>
      <td class="tg-zv4m"></td>
    </tr>
    <tr>
      <td class="tg-zv4m">TH : {{ $r->opic02_Contact_address_th }}</td>
      <td class="tg-zv4m">EN : {{ $r->opic02_Contact_address_en }}</td>
    </tr>
    <tr>
      <td class="tg-zv4m">โทรศัพท์ (Tel.) : {{ $r->opic02_Tel }}</td>
      <td class="tg-zv4m">โทรสาร (Fax.) : {{ $r->opic02_Fax }}</td>
      <td class="tg-zv4m">E-mail : {{ $r->opic02_email }}</td>
    </tr>
    <tr>
      <td class="tg-czno" colspan="3"><span style="font-weight:bold">หน้าที่รับผิดชอบ : </span> {{ $r->Protocol_opic2StatusName->name }}</td>
    </tr>
    <hr>
    @endforeach
    @endif

    @if($Protocol_opic03)
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">03 สัตวแพทย์ประจำหน่วย/สัตวแพทย์ประจำโครงการ (Veterinarian)</span></td>
    </tr>
    <tr>
      <td class="tg-zv4m" colspan="3"><span style="font-weight:bold">ชื่อ-นามสกุล (Name-Surname)</span></td>
    </tr>
    <tr>
      <td class="tg-zv4m">{{ $Protocol_opic03->Name_th }} &nbsp; &nbsp;{{ $Protocol_opic03->Surname_th }}</td>
      <td class="tg-zv4m">{{ $Protocol_opic03->Name_en }} &nbsp; &nbsp;{{ $Protocol_opic03->Surname_en }}</td>
    </tr>
    <tr>
      <td class="tg-zv4m" colspan="3"><span style="font-weight:bold">ตำแหน่ง Align academic/other position</span></td>
    </tr>
    <tr>
      <td class="tg-zv4m">{{ $Protocol_opic03->position_th }} &nbsp; &nbsp;{{ $Protocol_opic03->position_en }}</td>
    </tr>
    <tr>
      <td class="tg-zv4m" colspan="3"><span style="font-weight:bold">สถานที่ติดต่อ (Contact address)</span></td>
    </tr>
    <tr>
      <td class="tg-zv4m">TH : {{ $Protocol_opic03->address_th }}</td>
      <td class="tg-zv4m">EN : {{ $Protocol_opic03->address_en }}</td>
    </tr>
    <tr>
      <td class="tg-zv4m">โทรศัพท์ (Tel.) : {{ $Protocol_opic03->Tel }}</td>
      <td class="tg-zv4m">โทรสาร (Fax.) : {{ $Protocol_opic03->Fax }}</td>
      <td class="tg-zv4m">E-mail : {{ $Protocol_opic03->email }}</td>
    </tr>
    @endif
    @if($Protocol_opic04)
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">04 ลักษณะของงานที่ใช้สัตว์ (Discipline)</span></td>
    </tr>
    <tr>
      <td class="tg-zv4m">@if($Protocol_opic04->topic4_1 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif 4.1 งานวิจัย (Research)</td>
      <td class="tg-zv4m"></td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic04->topic4_1_n1 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif   งานวิจัยทั่วไป (General reseach)</td>
      <td class="tg-zv4m"> @if($Protocol_opic04->topic4_1_n2 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif   งานวิจัยนักศึกษาปริญญาตรี/โท/เอก (Thesis)</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"></td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic04->topic4_1_1 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif   4.1.1 งานวิจัยพื้นฐานทางด้านสาขา (Basic research)</td>
      <td class="tg-zv4m"></td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic04->topic4_1_1n1 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  การจับและควบคุมสัตว์ (Handle and restraint)</td>
      <td class="tg-zv4m"> @if($Protocol_opic04->topic4_1_1n2 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  การเก็บตัวอย่างจากสัตว์ (Sample collection)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic04->topic4_1_1n3 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  การแยกเพศ (Sexing)</td>
      <td class="tg-zv4m"> @if($Protocol_opic04->topic4_1_1n4 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  การสลบสัตว์ (Anesthesia)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic04->topic4_1_1n5 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  การทำเครื่องหมายบนตัวสัตว์ (Identification)</td>
      <td class="tg-zv4m"> @if($Protocol_opic04->topic4_1_1n6 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  การทำให้สัตว์ตายอย่างสงบ (Euthanasia)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic04->topic4_1_1n7 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  การให้สาร (Administration substance)</td>
      <td class="tg-zv4m"> @if($Protocol_opic04->topic4_1_1n8 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  การทำการผ่าตัด (Surgery)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic04->topic4_1_1n9 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  การทำการผ่าซาก (Necropsy)</td>
      <td class="tg-zv4m"> @if($Protocol_opic04->topic4_1_1n10 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  อื่น ๆ (ระบุ) (Other, please specify)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"></td>
      <td class="tg-zv4m"> &nbsp; &nbsp;  &nbsp; &nbsp; {{ $Protocol_opic04->topic4_1_1n11 }}</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic04->topic4_1_2 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif   4.1.2 งานวิจัยประยุกต์ (Applied research) (ระบุด้านสาขา)</td>
      <td class="tg-zv4m"></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"></td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic04->topic4_2 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif   4.2 งานทดสอบ (Testing and / or monitoring)</td>
      <td class="tg-zv4m"></td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic04->topic4_2n1 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  อาหาร (Food)</td>
      <td class="tg-zv4m"> @if($Protocol_opic04->topic4_2n2 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  สมุนไพร (Herbal medicine)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic04->topic4_2n3 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  ยา (Drugs)</td>
      <td class="tg-zv4m"> @if($Protocol_opic04->topic4_2n4 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  สารพิษ (Toxic substance)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic04->topic4_2n5 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  น้ำ (Water)</td>
      <td class="tg-zv4m"> @if($Protocol_opic04->topic4_2n6 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  วัคซีน (Vaccine)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic04->topic4_2n7 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  เครื่องสำอาง (Cosmetic)</td>
      <td class="tg-zv4m"> @if($Protocol_opic04->topic4_2n8 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  วินิจฉัยโรค (Diagnosis)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic04->topic4_2n9 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  อื่นๆ(ระบุ)</td>
      <td class="tg-zv4m"> &nbsp; &nbsp;  &nbsp; &nbsp; {{ $Protocol_opic04->topic4_2n10 }}</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic04->topic4_3 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif   4.3 งานผลิตชีววัตถุ (Biological Products)</td>
      <td class="tg-zv4m"></td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic04->topic4_3n1 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  วัคซีน (Vaccine)</td>
      <td class="tg-zv4m"> @if($Protocol_opic04->topic4_3n2 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  เอ็นไซม์(Enzymes)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic04->topic4_3n3 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  แอนติบอดี (Antibodies)</td>
      <td class="tg-zv4m"> @if($Protocol_opic04->topic4_3n4 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  คอมพลีเมนท์(Complement)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic04->topic4_3n5 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  อื่นๆ(ระบุ)</td>
      <td class="tg-zv4m"> &nbsp; &nbsp;  &nbsp; &nbsp; {{$Protocol_opic04->topic4_3n6}}</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic04->topic4_4 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  4.4 งานการเรียนการสอน ระบุวิชา (รหัสวิชา) / Subject (Code #)</td>
      <td class="tg-zv4m">&nbsp; &nbsp;  &nbsp; &nbsp; {{ $Protocol_opic04->topic4_4n1 }}</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic04->topic4_5 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  4.5 งานบริการวิชาการ (ระบุ)</td>
      <td class="tg-zv4m">&nbsp; &nbsp;  &nbsp; &nbsp; {{ $Protocol_opic04->topic4_5n1 }}</td>
    </tr>
    @endif
    <tr>
      <td class="tg-e5wj" colspan="3"><hr></td>
    </tr>
    @if($Protocol_opic05)
    
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">05 แหล่งทุนวิจัย/งบประมาณ (Funding Source/Budget)</span></td>
    </tr>
  </table>
  <table class="tg" style="undefined;table-layout: fixed; width: 946px; border=3px solid #000; " >
    <colgroup>
      <col style="width: 400px">
      <col style="width: 300px">
      <col style="width: 300px">
      </colgroup>
      <thead>
      <tr>
        <th class="tg-oe15">ระบุแหล่งทุน (Funding Source(s))</th>
        <th class="tg-oe15">ระยะเวลาที่รับทุน (Funding period)</th>
        <th class="tg-oe15">จำนวนเงิน (Budget)</td>
      </tr> 
    </thead> 
    @foreach ($Protocol_opic05 as $r)
    <tr>
      <td class="tg-oe15">{{ $r->BudgetName->name }}</td>
      <td class="tg-oe15">{{ $r->FundingPeriod }}</td>
      <td class="tg-oe15">{{ $r->Budget }}</td>
    </tr>
    @endforeach    
</table>
@endif
<hr>
@if($Protocol_opic06)
<table class="tg" style="undefined;table-layout: fixed; width: 946px">
  <colgroup>
  <col style="width: 508px">
  <col style="width: 438px">
  </colgroup>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">06 บทคัดย่อโครงการที่เสนอขอใช้สัตว์ (Executive Summary with Non-technical Term)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">นำเสนอภาพรวมโครงการโดยสรุปในภาษาที่เข้าใจง่ายโดยคนทั่วไป เพื่อให้ทราบถึงหลักการและเหตุผลความจำเป็นในการใช้สัตว์ วิธีการและประโยชน์ที่ได้รับ</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic06->Executive }}</td>
    </tr>
    @endif
    <hr>

    @if($Protocol_opic07)
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">07 บทนำ และหลักการ (Background & Rationale)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic07->Background }}</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">7.1 การทบทวนวรรณกรรมเพื่อป้องกันการทำซ้ำ (Literature Search for Duplication: This search must be performed to prevent unnecessary duplication of previous experiments.)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">7.1.1 ฐานข้อมูลการทบทวนวรรณกรรม (Literature source(s) searched (database name):</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic07->Literature }}</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">7.1.2 วันที่สืบค้นล่าสุด (ไม่เกิน 6 เดือนก่อนถึงวันประชุมคณะอนุกรรมการจรรยาบรรณและติดตามโครงการเลี้ยงและใช้สัตว์ มธ.) (Last date of search: Perform the search no earlier than 6 months prior to Sub-IACUC TU meeting)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic07->Lastdate }}</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">7.1.3 ช่วงปีของข้อมูลที่สืบค้น (Period of information searched (from year to the current year.)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic07->Period_start }} - {{ $Protocol_opic07->Period_end }}</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">7.1.4 คำสำคัญที่ใช้ในการสืบค้น (Keywords used in search)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic07->Keywords }}</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">7.1.5 อธิบายผลการสืบค้นโดยสรุป มีการทำซ้ำหรือไม่ กรณีมีการทำซ้ำโปรดระบุเหตุผลความจำเป็น (Results of search: Provide a narrative description of the results of the literature search. Are there any duplication found? Provide justification if this study has to repeat previous studies.)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic07->Results }}</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">7.2 เอกสารอ้างอิง (List of reference)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic07->reference }}</td>
    </tr>
    @endif
    <hr>

    @if($Protocol_opic08)
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">08 วัตถุประสงค์ของโครงการ (Objective)</span></td>
    </tr>
  </table>
  <table class="tg" style="undefined;table-layout: fixed; width: 946px; border=3px solid #000; " >
    <colgroup>
      <col style="width: 400px">
      <col style="width: 300px">
      <col style="width: 300px">
      </colgroup>
      <thead>
      <tr>
        <th class="tg-oe15">#</th>
        <th class="tg-oe15">วัตถุประสงค์ของโครงการ (Objective)</th>
      </tr>  
    </thead>
    @foreach ($Protocol_opic08 as $key => $r)
    <tr>
      <td class="tg-oe15">{{ $key+1 }}</td>
      <td class="tg-oe15">{{ $r->Objective }}</td>
    </tr> 
    @endforeach     
</table>
@endif
<hr>

@if($Protocol_opic09)
<table class="tg" style="undefined;table-layout: fixed; width: 946px">
  <colgroup>
  <col style="width: 550px">
  <col style="width: 450px">
  </colgroup>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">09 เหตุผลที่ต้องใช้สัตว์ (Justification)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">9.1 มีวิธีการอื่นที่อาจนำมาใช้แทนสัตว์ได้หรือไม่ ให้เหตุผลด้วยว่าทำไมจึงไม่ใช้วิธีการอื่นดังกล่าวมาใช้แทนสัตว์ (Replacement)
        ทดสอบการสร้าง PTC
        </span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic09->Replacement01 }}</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">9.2 หากมีเหตุผลความจำเป็นที่จะต้องใช้สัตว์ทดลองและไม่สามารถใช้วิธีการอื่นทดแทน ท่านมี วิธีการหรือแนวทางปฏิบัติในการลดจำนวนสัตว์ทดลองให้น้อยที่สุดอย่างไร (Reduction)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic09->Replacement02 }}</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">9.3 ท่านมีวิธีในการปฏิบัติกับสัตว์ทดลองอย่างไร เพื่อให้สัตว์เจ็บปวดน้อยที่สุด (Refinement)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic09->Replacement03 }}</td>
    </tr>
    @endif
    <hr>

    @if($Protocol_opic10)
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">10 ประโยชน์ต่อมนุษย์หรือสัตว์และผลประโยชน์ทางวิชาการที่คาดว่าจะได้รับ (anticipated outcome)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">10.1 สรุปผลประโยชน์ต่อมนุษย์</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic10->anticipated01 }}</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">10.2 สรุปผลประโยชน์ต่อความก้าวหน้าทางวิชาการ</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic10->anticipated02 }}</td>
    </tr>
    @endif
    <hr>
    @if($Protocol_opic11)
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">11 ข้อมูลเกี่ยวกับสัตว์ทดลองที่ใช้ในงานวิจัย (Animal model and species justification)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">11.1 จำนวนที่ใช้ตลอดโครงการ (Total amount of animal use) (โปรดตรวจสอบให้ตรงกับระเบียบวิธีวิจัย)</span></td>
    </tr>
  </table>
  <table class="tg" style="undefined;table-layout: fixed; width: 946px; border=3px solid #000; " >
    <colgroup>
      <col style="width: 400px">
      <col style="width: 300px">
      <col style="width: 300px">
      </colgroup>
      <thead>
      <tr>
        <th class="tg-oe15">#</th>
        <th class="tg-oe15">Common name (ชื่อสามัญ)</th>
        <th class="tg-oe15">Genetic Diversity</th>
        <th class="tg-oe15">Strain/Stock</th>
        <th class="tg-oe15">Age</th>
        <th class="tg-oe15">Weight</th>
        <th class="tg-oe15">Sex</th>
        <th class="tg-oe15">Number</th>
      </tr>  
    </thead>
      @if($Protocol_opic11_sub)
        @foreach ($Protocol_opic11_sub as $key => $r)
          <tr>
            <td class="tg-oe15">{{ $key+1 }}</td>
            <td class="tg-oe15">{{ $r->Common_name }}</td>
            <td class="tg-oe15">{{ $r->Genus_Species }}</td>
            <td class="tg-oe15">{{ $r->Strain_Stock }}</td>
            <td class="tg-oe15">{{ $r->Age }}</td>
            <td class="tg-oe15">{{ $r->Weight }}</td>
            <td class="tg-oe15">{{ $r->Sex }}</td>
            <td class="tg-oe15">{{ $r->Number }}</td>
          </tr>  
        @endforeach
      @endif   
</table>
<table class="tg" style="undefined;table-layout: fixed; width: 946px">
  <colgroup>
  <col style="width: 508px">
  <col style="width: 438px">
  </colgroup>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">11.2 ระยะเวลาที่ใช้สัตว์ทดลองตั้งแต่วันที่ (Anticipated animal use Period)</span></td>
    </tr>
    <tr>
    <td class="tg-e5wj" colspan="1">Period : {{ $Protocol_opic11->Period }}</td>
      <td class="tg-e5wj" colspan="1">Duration : {{ $Protocol_opic11->Duration }}</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">11.3 ทำไมจึงเลือกใช้สัตว์ทดลองชนิดและเพศดังกล่าวในการทดลองมีการศึกษามาก่อนแล้วหรือไม่ (Animal model and species justification: Provide a scientific justification for the choice of animal model(s). What physiological and morphological characteristics does this animal possess that make it the best possible model?)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic11->AnimalModel }}</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">11.4 หลักเกณฑ์ในการกำหนดจำนวนสัตว์ทดลอง (Number of animals required justification: Provide an explanation of how the numbers of animals to be used in each group or total were appropriate. Number of animals used in the experiment should be based on scientific and statistical requirements to achieve objectives)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic11->animalsRequired }}</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">11.5 กรณีที่จำเป็นต้องใช้สัตว์ป่าให้เหตุผลด้วยว่าทำไมจึงใช้สัตว์ทดลองหรือสัตว์อื่นแทนไม่ได้ (In case of wildlife species is used provide an explanation of how does not replace these species with laboratory animal or other animal)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic11->caseWildlife }}</td>
    </tr>
    @endif
    <hr>

    @if($Protocol_opic12)
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">12 แหล่งผลิตสัตว์ (Animal Resources)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">12.1 แหล่งที่มาของสัตว์ (Source/Vendor)</span></td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic12->ptc12_01 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif   เพาะขยายพันธุ์ขึ้นใช้เองในหน่วยงาน คณะหรือสถาบัน ระบุที่มา (In house breeding, please specify)</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic12->ptc12_01_sub }}</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic12->ptc12_02 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif   สั่งซื้อจากแหล่งเพาะขยายพันธุ์ต่างประเทศ ระบุที่มา (Imported, please specify</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic12->ptc12_02_sub }}</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic12->ptc12_03 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  สั่งซื้อจากแหล่งเพาะขยายพันธุ์อื่นๆภายในประเทศ ระบุที่มา (within country, please specify</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"> @if($Protocol_opic12->ptc12_03_sub_01 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  <span style="font-weight:bold">ศูนย์สัตว์ทดลองแห่งชาติ
      </span>&nbsp; &nbsp; &nbsp; &nbsp;  @if($Protocol_opic12->ptc12_03_sub_02 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  <span style="font-weight:bold">บริษัท โนมูระ สยามอินเตอร์เนชั่นแนล
      </span></td>

    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"> @if($Protocol_opic12->ptc12_03_sub_03 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  <span style="font-weight:bold">อื่นๆ โปรดระบุ : {{ $Protocol_opic12->ptc12_03_sub_04 }}</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"> @if($Protocol_opic12->ptc12_04 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  <span style="font-weight:bold">อื่นๆ ระบุ (Other, please specify) : {{ $Protocol_opic12->ptc12_03_sub }}</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">12.2 คุณภาพของสัตว์จากแหล่งผลิต (Quality of Source/Vendor)</span></td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic12->ptc12_05_01 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  มีหลักฐานแสดงสืบสายพันธุ์ และความคงที่ทางพันธุกรรมของสายพันธุ์ที่ต้องการตรวจสอบ (Have a genetic monitoring system)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic12->ptc12_05_02 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  มีหลักฐานตรวจสอบได้ว่าเป็นสัตว์เลี้ยงด้วยระบบอนามัยเข้ม (Strict hygienic conventional system)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic12->ptc12_05_03	 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  มีหลักฐานตรวจสอบได้ว่าเป็นสัตว์เลี้ยงด้วยระบบปลอดเชื้อจำเพาะ (SPF System)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic12->ptc12_05_04 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  มีหลักฐานตรวจสอบได้ว่าเป็นสัตว์เลี้ยงด้วยระบบปลอดเชื้อสมบูรณ์ (Germ Free system)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic12->ptc12_05_05 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  ไม่มีหลักฐาน หรือเอกสารรับรอง (no any document that certified genetic and health monitoring)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic12->ptc12_05_06 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  อื่น ๆ (ระบุ) (Other, please specify) : {{ $Protocol_opic12->ptc12_05_06_sub}}</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">12.3 ศักยภาพของแหล่งผลิต (Potential supply of Source/Vendor)</span></td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic12->ptc12_06_01 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  มีวิธีเพาะขยายพันธุ์ที่แสดงว่าสามารถเพาะขยายพันธุ์สายพันธุ์สัตว์ที่ต้องการได้ทุกรูปแบบของเพศ อายุ น้ำหนัก และจำนวนตามที่ต้องการ (Provide Stock/strain, sex, age, weigh and number)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic12->ptc12_06_02 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  สามารถจัดบริการส่งโดยใช้มาตรฐานการขนส่งสัตว์สากล (Provide international standard for animal transportation)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic12->ptc12_06_03 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  อื่น ๆ (ระบุ) (Other, please specify) : {{ $Protocol_opic12->ptc12_06_03_sub }}</td>
    </tr>
    @endif
    <hr>

    @if($Protocol_opic13)
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">13 การขนส่งมายังห้องปฏิบัติการและการเตรียมสัตว์ (Transportation from source/vendor and acclimatization or quarantine)</span></td>
    </tr>
    <tr>
      <td class="tg-zv4m"><span style="font-weight:bold">13.1 ใช้การขนส่งที่จัดไว้ให้โดย ศูนย์สัตว์ทดลองแห่งชาติ</span></td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic13->ptc13_02 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  มีการควบคุมอุณหภูมิ (Temperature control)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic13->ptc13_03 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  มีการระบายอากาศเพียงพอ (Appropriate Ventilation)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic13->ptc13_04 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  มีการป้องกันการติดเชื้อ (Prevent known/unknown infection)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic13->ptc13_05 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  ภาชนะบรรจุสัตว์มั่นคงแข็งแรง (ระบุชนิดของภาชนะ) (Specify type of secure animal containment)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic13->ptc13_06 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  มีพื้นที่เพียงพอ (ระบุขนาดของพื้นที่) (Specify floor area of animal containment</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic13->ptc13_07 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  ถึงจุดหมายปลายทางภายใน 1 วัน (arrived in 1 day)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"><span style="font-weight:bold">13.2 ใช้การขนส่งที่จัดไว้ให้โดย บริษัท โนมูระ สยามอินเตอร์เนชั่นแนล</span></td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic13->ptc13_09 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  มีการควบคุมอุณหภูมิ (Temperature control)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic13->ptc13_10 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  มีการระบายอากาศเพียงพอ (Appropriate Ventilation)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic13->ptc13_11 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  มีการป้องกันการติดเชื้อ (Prevent known/unknown infection)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic13->ptc13_12 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  ภาชนะบรรจุสัตว์มั่นคงแข็งแรง (ระบุชนิดของภาชนะ) (Specify type of secure animal containment)</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic13->ptc13_12_sub }}</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic13->ptc13_13 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  มีพื้นที่เพียงพอ (ระบุขนาดของพื้นที่) (Specify floor area of animal containment</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic13->ptc13_13_sub }}</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic13->ptc13_14 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  ถึงจุดหมายปลายทางภายใน 1 วัน (arrived in 1 day)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"><span style="font-weight:bold">13.3 อื่นๆ โปรดระบุ</span></td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic13->ptc13_16 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  มีการควบคุมอุณหภูมิ (Temperature control)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic13->ptc13_17 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  มีการระบายอากาศเพียงพอ (Appropriate Ventilation)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic13->ptc13_18 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  มีการป้องกันการติดเชื้อ (Prevent known/unknown infection)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic13->ptc13_19 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  ภาชนะบรรจุสัตว์มั่นคงแข็งแรง (ระบุชนิดของภาชนะ) (Specify type of secure animal containment)</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic13->ptc13_19_sub }}</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic13->ptc13_20 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  มีพื้นที่เพียงพอ (ระบุขนาดของพื้นที่) (Specify floor area of animal containment</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic13->ptc13_20_sub }}</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic13->ptc13_21 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  ถึงจุดหมายปลายทางภายใน 1 วัน (arrived in 1 day)</td>
    </tr>
    @endif
    <hr>
    @if($Protocol_opic14)
    <tr>
      <td class="tg-zv4m"><span style="font-weight:bold">14 การพักสัตว์และกักกันสัตว์ (Acclimatization and Quarantine)</span></td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic14->ptc14_01 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  พักสัตว์เป็นระยะเวลา (Acclimatization period) วัน (day)</td>
    </tr>
    <tr>
    <td class="tg-e5wj" colspan="3">{{ $Protocol_opic14->ptc14_01_sub }}</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic14->ptc14_02 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  กักกันสัตว์เป็นระยะเวลา (Quarantine period) วัน (day)</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic14->ptc14_02_sub }}</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic14->ptc14_03 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  ถ่ายพยาธิ (Deworm)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic14->ptc14_04 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  ฉีดวัคซีน (Vaccination)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic14->ptc14_05 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  อื่นๆ (ระบุ) (Other, please specify) : {{ $Protocol_opic14->ptc14_05_sub }}</td>
    </tr>
    @endif
    <hr>

    @if($Protocol_opic15)
    <tr>
      <td class="tg-zv4m"><span style="font-weight:bold">15 สถานที่เลี้ยงและใช้สัตว์ทดลอง (Animal and study facilities)</span></td>
    </tr>
    <tr>
    <td class="tg-zv4m"><span style="font-weight:bold">15.1 สถานที่เลี้ยงสัตว์ทดลอง (Animal housing) {{$Protocol_opic15->ptc15_01}}</span></td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic15->ptc15_01 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  ศูนย์สัตว์ทดลอง สำนักงานวิทยาศาสตร์และเทคโนโลยีชั้นสูง มหาวิทยาลัยธรรมศาสตร์ (Laboratory Animal Center, Office of Advanced Science and Technology, Thammmasat university) (ท่านยินดีจะปฏิบัติตามเกณฑ์ และระเบียบที่ศูนย์ สัตว์ทดลอง มธ. กำหนดไว้ทุกประการ)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic15->ptc15_02 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  หน่วยงานอื่นๆ โปรดระบุ (Other, please specify)</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic15->ptc15_02_sub }}</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">(ท่านได้ตรวจสอบเป็นที่ชัดเจนว่าหน่วยงานที่ท่านจะนำสัตว์ไปให้เลี้ยงมีความพร้อมและสามารถจัดการได้ตามความต้องการที่ท่านระบุไว้ทุกประการ)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"><span style="font-weight:bold">15.2 สถานที่ใช้สัตว์ทดลอง/ห้องปฏิบัติการ (Study location)</span></td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic15->ptc15_03 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  ศูนย์สัตว์ทดลอง สำนักงานวิทยาศาสตร์และเทคโนโลยีชั้นสูง มหาวิทยาลัยธรรมศาสตร์ (Laboratory Animal Center, Office of Advanced Science and Technology, Thammmasat university) (ท่านยินดีจะปฏิบัติตามเกณฑ์ และระเบียบที่ศูนย์ สัตว์ทดลอง มธ. กำหนดไว้ทุกประการ)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic15->ptc15_04 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  หน่วยงานอื่นๆ โปรดระบุ (Other, please specify) : {{ $Protocol_opic15->ptc15_04_sub }}</td>
    </tr>
    @endif
    <hr>

    @if($Protocol_opic16)
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">16 สภาพแวดล้อมของการเลี้ยงสัตว์ (Husbandry)</span></td>
    </tr>
  </table>
  <table class="tg" style="undefined;table-layout: fixed; width: 946px; border=3px solid #000; " >
    <colgroup>
      <col style="width: 50px">
      <col style="width: 250px">
      <col style="width: 350px">
      <col style="width: 350px">
      </colgroup>
      <thead>
      <tr>
        <th class="tg-oe15">#</th>
        <th class="tg-oe15">Program</th>
        <th class="tg-oe15">LACTU Standard</th>
        <th class="tg-oe15">Other Please specified</th>
      </tr>
    </thead>
      <tr>
        <td class="tg-oe15">1</td>
        <td class="tg-oe15">มาตรฐานการเลี้ยง (Housing system)</td>
        <td class="tg-oe15"> @if($Protocol_opic16->ptc16_01 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  Strict hygienic conventional</td>
        <td class="tg-oe15"> @if($Protocol_opic16->ptc16_02 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  อื่น ๆ (Other, please specify) <br> {{ $Protocol_opic16->ptc16_02_sub }}</td>
      </tr>
      <tr>
        <td class="tg-oe15">2</td>
        <td class="tg-oe15">สภาพแวดล้อมของห้อง (Environment requirement)</td>
        <td class="tg-oe15"> @if($Protocol_opic16->ptc16_03 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  อุณหภูมิ (Temperature) 22 + 1 ℃ <br>
           @if($Protocol_opic16->ptc16_04 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  ความชื้นสัมพัทธ์ (Relative humidity) 30-70 % <br>
           @if($Protocol_opic16->ptc16_05 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  แสงสว่าง (Light) 130-325 Lux <br>
           @if($Protocol_opic16->ptc16_06 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  อัตราส่วนแสงสว่างกลางวันกับกลางคืน (Light cycle) Day 12ชั่วโมง (Hours) night 12 ชั่วโมง (Hours) <br>
        </td>
        <td class="tg-oe15"> @if($Protocol_opic16->ptc16_07 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  อุณหภูมิ (Temperature) {{ $Protocol_opic16->ptc16_07_sub }} C <br>
           @if($Protocol_opic16->ptc16_08 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  ความชื้นสัมพัทธ์ (Relative humidity) {{ $Protocol_opic16->ptc16_08_sub }} % <br>
           @if($Protocol_opic16->ptc16_09 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  แสงสว่าง (Light) {{ $Protocol_opic16->ptc16_09_sub }} Lux<br>
           @if($Protocol_opic16->ptc16_10 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  อัตราส่วนแสงสว่างกลางวันกับกลางคืน (Light cycle) Day 12ชั่วโมง (Hours) night 12 ชั่วโมง (Hours)</td>
      </tr>
      <tr>
        <td class="tg-oe15">3</td>
        <td class="tg-oe15">กรง / คอกสัตว์ / พื้นที่เลี้ยงสัตว์ (Caging)</td>
        <td class="tg-oe15"> @if($Protocol_opic16->ptc16_11 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  Strict hygienic conventional <br>
           @if($Protocol_opic16->ptc16_12 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  Static cage for Rat <br>
           @if($Protocol_opic16->ptc16_13 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  Static cage for Hamster <br>
           @if($Protocol_opic16->ptc16_14 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  Cage for Rabbit <br>
           @if($Protocol_opic16->ptc16_15 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  IVC cage <br>
           @if($Protocol_opic16->ptc16_16 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  Metabolic cage for rat โปรดระบุระยะเวลาและความถี่ <br>
          Period {{ $Protocol_opic16->ptc16_17 }} <br>
          Frequency {{ $Protocol_opic16->ptc16_18 }} </td>
        <td class="tg-oe15"> @if($Protocol_opic16->ptc16_19 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  อื่น ๆ (Other, please specify) <br>
          {{ $Protocol_opic16->ptc16_19_sub }}</td>
      </tr>
      <tr>
        <td class="tg-oe15">4</td>
        <td class="tg-oe15">จำนวนสัตว์ที่เลี้ยง (Number of animal(s) per cage)</td>
        <td class="tg-oe15">{{ $Protocol_opic16->ptc16_20 }} ตัวต่อกรง / ตัวต่อคอก</td>
        <td class="tg-oe15">{{ $Protocol_opic16->ptc16_21 }} ตัวต่อกรง / ตัวต่อคอก</td>
      </tr>
      <tr>
        <td class="tg-oe15">5</td>
        <td class="tg-oe15">ชนิดของอาหาร (Type of food)</td>
        <td class="tg-oe15"> @if($Protocol_opic16->ptc16_22 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  CP 082 For mouse, hamster and rat <br>
           @if($Protocol_opic16->ptc16_23 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  CP 082 Autoclaved for immunocompromised animals<br>
           @if($Protocol_opic16->ptc16_24 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  CP For rabbit<br>
           @if($Protocol_opic16->ptc16_25 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  หญ้า for rabbit <br>
        </td>
        <td class="tg-oe15"> @if($Protocol_opic16->ptc16_26 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  อื่น ๆ (Other, please specify)<br> {{ $Protocol_opic16->ptc16_26_sub }}</td>
      </tr>
      <tr>
        <td class="tg-oe15">6</td>
        <td class="tg-oe15">การให้อาหาร (Feeding schedule)</td>
        <td class="tg-oe15"> @if($Protocol_opic16->ptc16_27 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  ให้อาหารในอัตราปกติมีกินตลอดเวลา (Ad libitum)</td>
        <td class="tg-oe15"> @if($Protocol_opic16->ptc16_28 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  มีกำหนดเวลาและปริมาณอาหาร (Food restriction)* โปรดระบุ <br> {{ $Protocol_opic16->ptc16_28_sub }}</td>
      </tr>
      <tr>
        <td class="tg-oe15">7</td>
        <td class="tg-oe15">ชนิดของน้ำ</td>
        <td class="tg-oe15"> @if($Protocol_opic16->ptc16_29 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  RO water and autoclaved</td>
        <td class="tg-oe15"> @if($Protocol_opic16->ptc16_30 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  อื่นๆ (ระบุ) (Other, please specify) <br> {{ $Protocol_opic16->ptc16_30_sub }}</td>
      </tr>
      <tr>
        <td class="tg-oe15">8</td>
        <td class="tg-oe15">การให้น้ำ (Provision of water)</td>
        <td class="tg-oe15"> @if($Protocol_opic16->ptc16_31 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  ให้น้ำในอัตราปกติมีกินตลอดเวลา (Routine feeding (Ad libitum))</td>
        <td class="tg-oe15"> @if($Protocol_opic16->ptc16_32 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  มีกำหนดเวลาและปริมาณน้ำ (Water restriction) โปรดระบุ <br>
          {{ $Protocol_opic16->ptc16_32_sub }} <br>
         @if($Protocol_opic16->ptc16_32 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  อื่นๆ (ระบุ) (Other, please specify) <br>
         {{ $Protocol_opic16->ptc16_33_sub }} 
      </td>
      </tr>
      <tr>
        <td class="tg-oe15">9</td>
        <td class="tg-oe15">	วิธีการให้น้ำ (Watering methods)</td>
        <td class="tg-oe15"> @if($Protocol_opic16->ptc16_34 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  โดยบรรจุน้ำในขวดมีจุกและหลอด (bottle)</td>
        <td class="tg-oe15"> @if($Protocol_opic16->ptc16_35 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  อื่น ๆ (Other, please specify) <br> {{ $Protocol_opic16->ptc16_35_sub }}</td>
      </tr>
      <tr>
        <td class="tg-oe15">10</td>
        <td class="tg-oe15">วัสดุรองนอน (Bedding)</td>
        <td class="tg-oe15"> @if($Protocol_opic16->ptc16_36 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  ซังข้าวโพดบดปลอดเชื้อ (Autoclaved corncob)</td>
        <td class="tg-oe15"> @if($Protocol_opic16->ptc16_37 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  อื่น ๆ (Other, please specify) <br> {{ $Protocol_opic16->ptc16_37_sub }}</td>
      </tr>
      <tr>
        <td class="tg-oe15">11</td>
        <td class="tg-oe15">การเปลี่ยนวัสดุรองนอน (Schedule of bedding changing)</td>
        <td class="tg-oe15"> @if($Protocol_opic16->ptc16_38_ == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  กรงเปิด ทุกสัปดาห์ (weekly) <br>
           @if($Protocol_opic16->ptc16_38 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  กรง IVC ทุก 2 สัปดาห์ (every 2 weeks)</td>
        <td class="tg-oe15"> @if($Protocol_opic16->ptc16_39 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  อื่น ๆ (Other, please specify) <br>{{ $Protocol_opic16->ptc16_39_sub }}</td>
      </tr>
</table>
@endif
<hr>

@if($Protocol_opic17)
<table class="tg" style="undefined;table-layout: fixed; width: 946px">
  <colgroup>
  <col style="width: 400px">
  <col style="width: 600px">
  </colgroup>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">17 ระยะเวลาดำเนินการโครงการ (Proposal Period)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="1"><span style="font-weight:bold">17.1 ตามแบบเสนอโครงการ (Proposal Period)</span></td>
    <td class="tg-e5wj" colspan="1">{{ $Protocol_opic17->ptc17_01 }} </td>
    </tr>
    <hr>
    <tr>
      <td class="tg-e5wj" colspan="1"><span style="font-weight:bold">17.2 ตามที่ดำเนินการจริง (หากไม่ตรงกับวันที่ระบุไว้ใน Proposal)</span></td>
      <td class="tg-e5wj" colspan="1">{{ $Protocol_opic17->ptc17_02 }}  </td>
    </tr>
  @endif
<hr>

@if($Protocol_opic18)
<tr>
  <td class="tg-e5wj" colspan="3"><hr></td>
</tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">18 ระเบียบวิธีวิจัยที่เกี่ยวข้องกับสัตว์ทดลอง</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">18.1 การออกแบบการวิจัย (Experimental Design)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic18->ptc18_01 }}</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">18.1.2 การคำนวณตัวอย่าง (Provide an explanation of how the numbers of animals to be used in each group or total were appropriate. Number of animals used in the experiment should be based on scientific and statistical requirements to achieve objective)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic18->ptc18_02 }}</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">18.1.3 การวิเคราะห์ผล (Data analysis/statistical method: (List the statistical test(s) planned or describe the strategy intended to evaluate the data))</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic18->ptc18_03 }}</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">18.1.4 การแบ่งกลุ่มการทดลอง (group of Study) แบ่งเป็นกี่กลุ่มการทดลอง กลุ่มละกี่ตัว (Number of animals per group) โดยมีรายละเอียดดังนี้ (Provide a complete description of study groups.</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic18->ptc18_04 }}</td>
    </tr>
  </table>
  <table class="tg" style="undefined;table-layout: fixed; width: 946px; border=3px solid #000; " >
    <colgroup>
      <col style="width: 250px">
      <col style="width: 250px">
      <col style="width: 250px">
      <col style="width: 250px">
      </colgroup>
      <thead>
      <tr>
        <th class="tg-oe15">Group name</th>
        <th class="tg-oe15">Male</th>
        <th class="tg-oe15">Female</th>
        <th class="tg-oe15">Number</th>
      </tr> 
    </thead>
    @if($Protocol_opic18_sub01) 
      @foreach ($Protocol_opic18_sub01 as $r)
      <tr>
        <td class="tg-oe15">{{ $r->ptc18_01 }}</td>
        <td class="tg-oe15">{{ $r->ptc18_02 }}</td>
        <td class="tg-oe15">{{ $r->ptc18_03 }}</td>
        <td class="tg-oe15">{{ $r->ptc18_04 }}</td>
      </tr> 
      @endforeach
    @endif       
</table>
<table class="tg" style="undefined;table-layout: fixed; width: 946px">
  <colgroup>
  <col style="width: 400px">
  <col style="width: 600px">
  </colgroup>
    <tr>
      <td class="tg-e5wj" colspan="1"><span style="font-weight:bold">18.1.5 การปฏิบัติกับสัตว์ตั้งแต่เริ่มต้นจนสิ้นสุดการทดลอง ระบุค่าสังเกต หรือผลที่ต้องการศึกษา หากข้อมมูลมีความสับซ้อนโดปรดแนบแผนภาพเพื่ออธิบายเพิ่มเติม (Provide a complete description sequential of procedures what will be done to the animals from obtain the animal to the end of study. Specify all outcomes to be measured or observed from the experiment. Succinctly outline the formal scientific plan and direction for experimentation. A diagram or chart may be helpful to explain complex design)</span></td>
      <td class="tg-e5wj" colspan="1">{{ $Protocol_opic18->ptc18_05 }} </td>
    </tr>
    <tr> 
      {{-- <td class="tg-e5wj" colspan="3"><img class="d-block mx-auto mb-3" src="{{asset('file-upload/cc.jpj')}}" width="500" /></td> --}}
      <td class="tg-e5wj" colspan="3"><img class="d-block mx-auto mb-3" src="{{ $checkYes }}" width="500" /></td>
    </tr>
    
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">18.2 สารหรือชีววัตถุที่นำมาใช้กับสัตว์และผลกระทบที่มีต่อสัตว์ (ระบุทั้งหมดที่ใช้ในโครงการ) (Chemical/biological agent use in protocol and effect on animal)</span></td>
    </tr>
  </table>
  <table class="tg" style="undefined;table-layout: fixed; width: 946px; border=3px solid #000; " >
    <colgroup>
      <col style="width: 100px">
      <col style="width: 350px">
      <col style="width: 100px">
      <col style="width: 300px">
      <col style="width: 100px">
      </colgroup>
      <thead>
      <tr>
        <th class="tg-oe15">ประเภท (Type of agent)</th>
        <th class="tg-oe15">ชื่อสารหรือชีววัตถุ (Chemical/Biological Agent)</th>
        <th class="tg-oe15">ปริมาณ (Qty)</th>
        <th class="tg-oe15">หน่วย(Unit)</th>
        <th class="tg-oe15">เซลล์เนื้อเยื่อหรืออวัยวะที่อาจได้รับอันตราย (Effect on animal)</th>
      </tr> 
      </thead> 
      @if($Protocol_opic18_sub02) 
      @foreach ($Protocol_opic18_sub02 as $r)
      <tr>
        <td class="tg-oe15">{{ $r->ptc18_01 }}</td>
        <td class="tg-oe15">{{ $r->ptc18_02 }}</td>
        <td class="tg-oe15">{{ $r->ptc18_03 }}</td>
        <td class="tg-oe15">{{ $r->ptc18_04 }}</td>
        <td class="tg-oe15">{{ $r->ptc18_05 }}</td>
      </tr> 
      @endforeach
    @endif     
</table>
<table class="tg" style="undefined;table-layout: fixed; width: 946px">
  <colgroup>
  <col style="width: 400px">
  <col style="width: 600px">
  </colgroup>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">18.2.1 กรณีที่สารที่นำมาใช้ในโครงการ ไม่ใช่สารในระดับ Pharmaceutical grade โปรดให้เหตุผลเพิ่มเติมว่าเหตุใดจึงไม่ใช้สารในระดับ Pharmacuetical grade) และอธิบายวิธีการควบคุมภาพของสารที่นำมาใช้ในโครงการ พร้อมทั้งแนบเอกสารควบคุมคุณภาพ) (IACUC Policy 400 : Use of Non-Pharmaceutical Grade Substances Policy Provide sound scientific justification for the use of non-pharmaceutical Grade Substances</span></td>
    </tr>    
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic18->ptc18_06 }} </td>
    </tr>  
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">18.2.2 การให้ยา/สารเคมี/เชื้อโรค/สารติดเชื้อ/สารรังสีหรือสิ่งแปลกปลอม ในกรณีที่เป็นพิษหรือวัตถุอันตรายแก่สัตว์ทดลอง มีโอกาสที่จะสามารถแพร่กระจายถึงคน สัตว์อื่นและสิ่งแวดล้อมได้หรือไม่ (Is the protocol involved any biohazardous agents that spread to human, animal and environment ?)</span></td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic18->ptc18_07 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  ไม่ได้ (No)  @if($Protocol_opic18->ptc18_07 != '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  ได้ (ตอบคำถามข้างล่าง) (Yes, Please answer the question below)</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">18.2.3 กรณีมีผลแพร่กระจาย ให้ระบุรายละเอียดข้อควรระมัดระวังและวิธีการป้องกันการแพร่กระจายของสารพิษหรือเชื้อที่ทำการ ศึกษาที่อาจมีต่อสัตว์ทดลองต่อผู้ดูแลสัตว์ และต่อสิ่งแวด ล้อมภายในและภายนอกสถานที่เลี้ยงสัตว์ทดลอง รวมถึงต้องเลี้ยงดูสัตว์เป็นกรณีพิเศษอย่างไรจึงจะไม่เกิดการแพร่กระจาย พร้อมทั้งอธิบายวิธีการป้องกันรักษาความปลอดภัยของบุคลากรในการใช้สารดังกล่าว (กรุณาแนบเอกสารอ้างอิงถึงระดับความอันตราย รวมทั้ง Standard Operating Procedure: SOP) (Explain any safety precautions or programs designed to protect personnel from biohazards and any surveillance procedures in place to monitor potential exposures.)</span></td>
    </tr>    
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic18->ptc18_08 }} </td>
    </tr>  
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">18.2.4 ระบุวิธีการกำจัดสารพิษ/วัตถุอันตราย/เชื้อโรค และการปฏิบัติกับซากสัตว์หรือวัสดุอุปกรณ์ในการเลี้ยงสัตว์อย่างไรเมื่อสิ้นสุดการทดลอง (Explain how the waste is decontaminated and disposed.)</span></td>
    </tr>    
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic18->ptc18_09 }} </td>
    </tr>  
    <tr>
      <td class="tg-zv4m"><span style="font-weight:bold">18.3 เทคนิคการปฏิบัติการกับสัตว์ (Animal Procedure)</span></td>
    </tr>
    <tr>
      <td class="tg-zv4m"><span style="font-weight:bold">18.3.1 ระบุการปฏิบัติการกับสัตว์ในโครงการ (Specify animal procedure)</span></td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic18->ptc18_10 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  การจับและควบคุมสัตว์ (Handle and restraint)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic18->ptc18_11 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  การเก็บตัวอย่างจากสัตว์ (Sample collection)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic18->ptc18_12 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  การแยกเพศ (Sexing)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic18->ptc18_13 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  การสลบสัตว์ (Anesthesia)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic18->ptc18_14 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  การทำเครื่องหมายบนตัวสัตว์ (Identification)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic18->ptc18_15 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  การทำให้สัตว์ตายอย่างสงบ (Euthanasia)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic18->ptc18_16 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  การให้สาร (Administration substance)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic18->ptc18_17 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  การทำการผ่าตัด (Surgery)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic18->ptc18_18 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  การทำการผ่าซาก (Necropsy)</td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic18->ptc18_19 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  อื่น ๆ (ระบุ) (Other, please specify)</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic18->ptc18_19_sub }} </td>
    </tr> 
    <tr>
      <td class="tg-zv4m"><span style="font-weight:bold">18.3.2 การให้สาร บริเวณ และปริมาณที่ใช้ในโครงการ (Is protocol involved administration of drugs or substances? : Describe in detail: method(s), volume(s) administered, and frequency of injection)</span></td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic18->ptc18_20 != '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  ไม่มี (No)  @if($Protocol_opic18->ptc18_20 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  มี (ระบุ) (Yes, Please specify below)</td>
    </tr>
  </table>
  <table class="tg" style="undefined;table-layout: fixed; width: 946px; border=3px solid #000; " >
    <colgroup>
      <col style="width: 200px">
      <col style="width: 200px">
      <col style="width: 200px">
      <col style="width: 70px">
      <col style="width: 70px">
      <col style="width: 70px">
      <col style="width: 70px">
      </colgroup>
      <thead>
      <tr>
        <th class="tg-oe15">วิธีการ (method)</th>
        <th class="tg-oe15">บริเวณ (site)</th>
        <th class="tg-oe15">สารที่ให้ (drugs or substances)</th>
        <th class="tg-oe15">ปริมาณ(Qty)</th>
        <th class="tg-oe15">หน่วย(Unit)</th>
        <th class="tg-oe15">ความถี่(Freq)</th>
        <th class="tg-oe15">หน่วย(Unit)</th>
      </tr> 
      </thead> 
      @if($Protocol_opic18_sub03) 
      @foreach ($Protocol_opic18_sub03 as $r)
      <tr>
        <td class="tg-oe15">{{ $r->ptc18_01 }}</td>
        <td class="tg-oe15">{{ $r->ptc18_02 }}</td>
        <td class="tg-oe15">{{ $r->ptc18_03 }}</td>
        <td class="tg-oe15">{{ $r->ptc18_04 }}</td>
        <td class="tg-oe15">{{ $r->ptc18_05 }}</td>
        <td class="tg-oe15">{{ $r->ptc18_06 }}</td>
        <td class="tg-oe15">{{ $r->ptc18_07 }}</td>
      </tr> 
      @endforeach
    @endif           
</table>
<table class="tg" style="undefined;table-layout: fixed; width: 946px">
  <colgroup>
  <col style="width: 400px">
  <col style="width: 600px">
  </colgroup>
    <tr>
      <td class="tg-zv4m"><span style="font-weight:bold">18.3.3 การเก็บตัวอย่างเลือดที่ใช้ในโครงการ (กรณีใช้ยาสลบให้ระบุชนิดยาสลบ) (Is protocol involve Blood Collection : Describe in detail method(s), Site, Anesthesia(if needed), volume(s) collected, and frequency of collection)</span></td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic18->ptc18_20 != '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  ไม่มี (No)  @if($Protocol_opic18->ptc18_20 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  มี (ระบุ) (Yes, Please specify below)</td>
    </tr>
  </table>
  <table class="tg" style="undefined;table-layout: fixed; width: 946px; border=3px solid #000; " >
    <colgroup>
      <col style="width: 150px">
      <col style="width: 150px">
      <col style="width: 150px">
      <col style="width: 150px">
      <col style="width: 70px">
      <col style="width: 70px">
      <col style="width: 70px">
      <col style="width: 70px">
      <col style="width: 70px">
      </colgroup>
      <thead>
      <tr>
        <th class="tg-oe15">ประเภทการเก็บเลือด (Type)</th>
        <th class="tg-oe15">ชนิดหลอดเลือด (Vessel)</th>
        <th class="tg-oe15">ตำแหน่ง (Site)</th>
        <th class="tg-oe15">ยาสลบที่ใช้ (Anesthetic)</th>
        <th class="tg-oe15">ขนาดยา (Dose)</th>
        <th class="tg-oe15">ปริมาณเลือด (Qty)</th>
        <th class="tg-oe15">หน่วย (Unit)</th>
        <th class="tg-oe15">ความถี่ (Freq)</th>
        <th class="tg-oe15">หน่วย (Unit)</th>
      </tr> 
      </thead> 
      @if($Protocol_opic18_sub04) 
      @foreach ($Protocol_opic18_sub04 as $r)
      <tr>
        <td class="tg-oe15">{{ $r->ptc18_01 }}</td>
        <td class="tg-oe15">{{ $r->ptc18_02 }}</td>
        <td class="tg-oe15">{{ $r->ptc18_03 }}</td>
        <td class="tg-oe15">{{ $r->ptc18_04 }}</td>
        <td class="tg-oe15">{{ $r->ptc18_05 }}</td>
        <td class="tg-oe15">{{ $r->ptc18_06 }}</td>
        <td class="tg-oe15">{{ $r->ptc18_07 }}</td>
        <td class="tg-oe15">{{ $r->ptc18_08 }}</td>
        <td class="tg-oe15">{{ $r->ptc18_09 }}</td>
        <td class="tg-oe15">{{ $r->ptc18_10 }}</td>
      </tr> 
      @endforeach
    @endif              
</table>
<table class="tg" style="undefined;table-layout: fixed; width: 946px">
  <colgroup>
  <col style="width: 400px">
  <col style="width: 600px">
  </colgroup>
    <tr>
      <td class="tg-zv4m"><span style="font-weight:bold">18.3.4 การเก็บตัวอย่างอื่น ๆ ที่ใช้ในโครงการ (Is protocol involve other sample collection)</span></td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic18->ptc18_21 != '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  ไม่มี (No)  @if($Protocol_opic18->ptc18_21 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  มี (ระบุ) (Yes, Please specify below)</td>
    </tr>
  </table>
  <table class="tg" style="undefined;table-layout: fixed; width: 946px; border=3px solid #000; " >
    <colgroup>
      <col style="width: 250px">
      <col style="width: 250px">
      <col style="width: 250px">
      <col style="width: 250px">
      </colgroup>
      <thead>
      <tr>
        <th class="tg-oe15">เงื่อนไข (Condition)</th>
        <th class="tg-oe15">ชิ้นส่วนเนื้อเยื่อ/อวัยวะที่เก็บ/อื่นๆ (Tissue/Organ/Other collection)</th>
        <th class="tg-oe15">ปริมาณ (Qty)</th>
        <th class="tg-oe15">หน่วย (Unit)</th>
      </tr> 
      </thead> 
      @if($Protocol_opic18_sub05) 
      @foreach ($Protocol_opic18_sub05 as $r)
      <tr>
        <td class="tg-oe15">{{ $r->ptc18_01 }}</td>
        <td class="tg-oe15">{{ $r->ptc18_02 }}</td>
        <td class="tg-oe15">{{ $r->ptc18_03 }}</td>
        <td class="tg-oe15">{{ $r->ptc18_04 }}</td>
      </tr> 
      @endforeach
    @endif      
</table>
<table class="tg" style="undefined;table-layout: fixed; width: 946px">
  <colgroup>
  <col style="width: 400px">
  <col style="width: 600px">
  </colgroup>
    <tr>
      <td class="tg-zv4m"><span style="font-weight:bold">18.3.5 การเก็บตัวอย่างอุจจาระ (Is protocol involve feces collection)</span></td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic18->ptc18_22 != '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  ไม่มี (No)  @if($Protocol_opic18->ptc18_22 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  มี (ระบุ) (Yes, Please specify below)</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="1"><span style="font-weight:bold">ใช้วิธีการ (Method)</span></td>
      <td class="tg-e5wj" colspan="1">{{ $Protocol_opic18->ptc18_24 }} </td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="1"><span style="font-weight:bold">ชนิดของกรงหรือวัสดุอุปกรณ์ที่ช่วยในการเก็บตัวอย่าง (Cage or device that use in feces collection)</span></td>
      <td class="tg-e5wj" colspan="1">{{ $Protocol_opic18->ptc18_24_1 }} </td>
    </tr>
    <tr>
      <td class="tg-zv4m"><span style="font-weight:bold">18.3.6 การเก็บตัวอย่างปัสสาวะ (Is protocol involve urine collection)</span></td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic18->ptc18_25 != '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  ไม่มี (No)  @if($Protocol_opic18->ptc18_25 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  มี (ระบุ) (Yes, Please specify below)</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="1"><span style="font-weight:bold">ใช้วิธีการ (Method)</span></td>
      <td class="tg-e5wj" colspan="1">{{ $Protocol_opic18->ptc18_26 }} </td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="1"><span style="font-weight:bold">ชนิดของกรงหรือวัสดุอุปกรณ์ที่ช่วยในการเก็บตัวอย่าง (Cage or device that use in urine collection)</span></td>
      <td class="tg-e5wj" colspan="1">{{ $Protocol_opic18->ptc18_27 }} </td>
    </tr>
    <tr>
      <td class="tg-zv4m"><span style="font-weight:bold">18.3.7 ระบุการปฏิบัติการพิเศษ และอุปกรณ์พิเศษที่ใช้ปฏิบัติกับสัตว์ รวมถึงระบุชื่อผู้รับผิดชอบการ ใช้อุปกรณ์พิเศษและประสบการณ์ (ถ้ามี) (อุปกรณ์พิเศษ เช่น Ultrasound, MRI, X-Ray เป็นต้น) (List of special procedure and equipment include experience of personnel involve)</span></td>
    </tr>
  </table>
  <table class="tg" style="undefined;table-layout: fixed; width: 946px; border=3px solid #000; " >
    <colgroup>
      <col style="width: 250px">
      <col style="width: 250px">
      <col style="width: 250px">
      <col style="width: 250px">
      </colgroup>
      <thead>
      <tr>
        <th class="tg-oe15">ระบุการปฏิบัติการพิเศษ (Special Procedure)</th>
        <th class="tg-oe15">อุปกรณ์พิเศษ (Special Equipment)</th>
        <th class="tg-oe15">ผู้รับผิดชอบ</th>
        <th class="tg-oe15">ประสบการณ์ (Experience)</th>
      </tr> 
      </thead> 
      @if($Protocol_opic18_sub06) 
      @foreach ($Protocol_opic18_sub06 as $r)
      <tr>
        <td class="tg-oe15">{{ $r->ptc18_01 }}</td>
        <td class="tg-oe15">{{ $r->ptc18_02 }}</td>
        <td class="tg-oe15">{{ $r->ptc18_03 }}</td>
        <td class="tg-oe15">{{ $r->ptc18_04 }}</td>
      </tr> 
      @endforeach
    @endif        
</table>
@endif
<hr>

<table class="tg" style="undefined;table-layout: fixed; width: 946px">
  <colgroup>
  <col style="width: 400px">
  <col style="width: 600px">
  </colgroup>
  @if($Protocol_opic19)
    <tr>
      <td class="tg-zv4m"><span style="font-weight:bold">19 การผ่าตัด การปฏิบัติก่อน-หลังการผ่าตัด โดยเทคนิคปลอดเชื้อ (Surgery)</span></td>
    </tr>
    <tr>
      <td class="tg-zv4m"> @if($Protocol_opic19->ptc19_01 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  ไม่มี (No)  @if($Protocol_opic19->ptc19_01 != '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  มี (ระบุ) (Yes, Please specify below)</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="1"><span style="font-weight:bold">19.1 ระบุลักษณะของการผ่าตัด (Surgery procedure is)</span></td>
    </tr>
    <tr>
      <td class="tg-zv4m">19.1.1 @if($Protocol_opic19->ptc19_02 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  Minor Surgery  @if($Protocol_opic19->ptc19_03 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  Major Surgery</td>
    </tr>
    <tr>
      <td class="tg-zv4m">19.1.2 @if($Protocol_opic19->ptc19_04 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  Survival Surgery  @if($Protocol_opic19->ptc19_05 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  Non Survival Surgery</td>
    </tr>
    <tr>
      <td class="tg-zv4m">19.1.3 @if($Protocol_opic19->ptc19_06 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  Single Surgery  @if($Protocol_opic19->ptc19_07 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  Multiple Surgery</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">19.2 ระบุขั้นตอนและรายละเอียดเกี่ยวกับการผ่าตัด เช่นการสลบสัตว์, การผ่าตัด, การดูแลก่อนและหลังการผ่าตัด เป็นต้น หากซับซ้อนโปรดเขียน Flow chart ประกอบด้วย (*** ในกรณีที่มีการผ่าตัดต้องบอกเทคนิคปลอดเชื้อ จุดที่ผ่าตัด วิธีผ่าตัด เย็บแผล หากมี) พร้อมระบุชื่อผู้รับผิดชอบการผ่าตัดและประสบการณ์ (Surgical Procedure: Describe in detail any surgical procedures planned and/or add a reference, aseptic technique, incision site, surgery technique, suture pattern. A diagram or chart may be helpful to explain surgery. Pre-and Post-operative provisions: Detail the provisions for both pre-and post- operative care, including provisions for post-surgical observations. Surgeon/Qualification: Indicate who will perform the surgery, and his/her qualifications, training, or experience in the proposed procedure.)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic19->ptc19_08 }} </td>
    </tr>
    @endif
    <hr>

    @if($Protocol_opic20)
    <tr>
      <td class="tg-e5wj"><span style="font-weight:bold">20 การบรรเทาความเครียดและความเจ็บปวดของสัตว์ (Pain & Distress Alleviation)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj"><span style="font-weight:bold">20.1 ระบุเกณฑ์การจำแนกระดับความเจ็บปวดและความทุกข์ทรมานในสัตว์ทดลอง (USDA pain and distress categories) สัตว์ทดลองที่ใช้ในงานวิจัยจัดอยู่ในกลุ่มใดต่อไปนี้</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj">&nbsp; &nbsp; @if($Protocol_opic20->ptc20_01 == 'B') <img src="{{ $checkYes }}"> @else <img src="{{ $checkNo }}"> @endif  <span style="font-weight:bold">กลุ่ม B :</span> สัตว์ทดลองถูกนำมาเพาะขยายพันธุ์ ปรับสภาพ เลี้ยงเพื่อใช้ในงานการเรียนการสอน งานทดสอบ งานทดลอง งานวิจัยหรืองานศัลยศาสตร์ แต่ยังไม่นำไปใช้ในวัตถุประสงค์เหล่านั้น มีการสังเกตสัตว์ทดลองในสภาพความเป็นอยู่ธรรมชาติ (USDA category B : Breeding or Holding Colony Protocols)</td>
    </tr>
    <tr>
      <td class="tg-e5wj">&nbsp; &nbsp; @if($Protocol_opic20->ptc20_01 == 'C') <img src="{{ $checkYes }}"> @else <img src="{{ $checkNo }}"> @endif  <span style="font-weight:bold">กลุ่ม C :</span> สัตว์ทดลองถูกนำไปใช้ในงานวิจัยที่ไม่ก่อให้เกิดความเจ็บปวดทุกข์ทรมาน เกิดความเจ็บปวดทุกข์ทรมานขึ้นเพียงชั่วขณะหรือเกิดความเจ็บปวดทุกข์ทรมานขึ้นเพียงเล็กน้อย โดยไม่จำเป็นต้องให้ยาลดปวด ((USDA category C : No more than momentary or slight pain or distress and no use of pain-relieving drugs, or no pain or distress. For example: euthanatized for tissues; just observed under normal conditions; positive reward projects; routine procedures; injections; and blood sampling.)</td>
    </tr>
    <tr>
      <td class="tg-e5wj">&nbsp; &nbsp; @if($Protocol_opic20->ptc20_01 == 'D') <img src="{{ $checkYes }}"> @else <img src="{{ $checkNo }}"> @endif  <span style="font-weight:bold">กลุ่ม D :</span> สัตว์ทดลองถูกนำไปใช้ในงานวิจัยที่ก่อให้เกิดความเจ็บปวด ความทุกข์ทรมานมาก จำเป็นต้องให้ยาสลบ ยาระงับปวดหรือยากล่อมประสาท (USDA category D : Pain or distress appropriately relieved with anesthetics, analgesics and/or tranquilizer drugs or other methods for relieving pain or distress )</td>
    </tr>
    <tr>
      <td class="tg-e5wj">&nbsp; &nbsp; @if($Protocol_opic20->ptc20_01 == 'E') <img src="{{ $checkYes }}"> @else <img src="{{ $checkNo }}"> @endif  <span style="font-weight:bold">กลุ่ม E :</span> สัตว์ทดลองถูกนำไปใช้ในงานวิจัยที่ก่อให้เกิดความเจ็บปวด ความทุกข์ทรมาน โดยไม่สามารถให้ยาสลบ ยาระงับปวด หรือยากล่อมประสาท ทั้งนี้ต้องมีเหตุผลทางวิทยาศาสตร์รองรับและได้รับความเห็นชอบจากคณะอนุกรรมการจรรยาบรรณการวิจัยในสัตว์ (USDA category E : Pain or distress or potential pain or distress that is not relieved with anesthetics, analgesics and/or tranquilizer drugs or other methods for relieving pain or distress.)</td>
    </tr>
    <tr>
      <td class="tg-e5wj"><span style="font-weight:bold">20.2 ระบุวิธีการที่จะบรรเทาความเครียดและความเจ็บปวด กรณีที่จำเป็นต้องทำให้สัตว์เจ็บปวดแต่ไม่มีการบรรเทาความเจ็บปวดให้แก่สัตว์ โปรดชี้แจงเหตุผลให้ชัดเจน (If this is not relieving pain or distress please indicate this and justify)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic20->ptc20_02 }} </td>
    </tr>
    @endif
    <hr>

    @if($Protocol_opic21)
    <tr>
      <td class="tg-e5wj"><span style="font-weight:bold">21.1 ระบุชนิด ชื่อทางการค้า คุณสมบัติ ขนาดที่ใช้ วิถีการให้ยา ระยะเวลาคงฤทธิ์ของยา (Agent, Trade name, properties, dose in mg/kg or % concentration for inhalants, route of administration, duration of action)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic21->ptc21_01 }} </td>
    </tr>
    <tr>
      <td class="tg-e5wj"><span style="font-weight:bold">21.2 ระบุวิธีการตรวจสอบว่าสัตว์อยู่ในระดับการสลบที่เหมาะสม (What criteria will be used to assess level of anesthesia?)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic21->ptc21_02 }} </td>
    </tr>
    <tr>
      <td class="tg-e5wj"><span style="font-weight:bold">21.3 ระบุกรณีที่ใช้ยาสลบต่อเนื่องจากการผ่าตัดเพื่อทำให้สัตว์ตายอย่างสงบ (Explain continuous anesthesia for purpose of euthanasia)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic21->ptc21_03 }} </td>
    </tr>
    @endif
    <hr>

    @if($Protocol_opic22)
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">22 การนำสัตว์ไปใช้นอกสถานที่ (ถ้ามี) (Is this project intended to conduct the animal experiment in other building? (This is allowed for conducting experiment (s) only not for housing. In addition, the holding period must be less than 12 hours.) If needed)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj"> @if($Protocol_opic22->ptc22_01 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  Minor Surgery  @if($Protocol_opic22->ptc22_01 != '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  Major Surgery</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">22.1 ระบุเหตุผลความจำเป็นที่ต้องนำสัตว์ไปใช้นอกสถานที่ (Why the experiment to be conduct in other building)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic22->ptc22_02 }} </td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">22.2 ระบุสถานที่ที่จะนำสัตว์ไปใช้ (Where the experiment is expected to be conducted? Please provide the building name and room number.)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic22->ptc22_03 }} </td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">22.3 ระยะเวลาที่จะนำสัตว์ไปใช้ (Estimated total time period that live animals will be kept in the laboratory is…hours)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic22->ptc22_04 }} hours</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">22.4 วิธีการเคลื่อนย้ายสัตว์ออกจากสถานที่เลี้ยง (How to transport animal)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic22->ptc22_05 }} </td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">22.5 วิธีการจัดการกับสัตว์หลังสิ้นสุดการใช้ (How will the animal sample or carcass be disposed?)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic22->ptc22_06 }} </td>
    </tr>
    @endif
    <hr>

    @if($Protocol_opic23)
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">23 จุดยุติการทดลอง (Experimental Endpoint) (IACUC Policy 600 : Experimental and Humane Endpoints Policy)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">23.1 จุดสิ้นสุดการทดลองตามแผนการศึกษา (Terminal point of study that occurs when the scientific aims and objectives have been reached.)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic23->ptc23_01 }} </td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">23.2 ระบุเกณฑ์การพิจารณาจุดยุติก่อนสิ้นสุดการทดลอง (Early Endpoint)* (*ถ้ามีข้อมูลอ้างอิง) (Please indicate early endpoint criteria)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic23->ptc23_02 }} </td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">23.3 ระบุเกณฑ์การพิจารณาจุดสิ้นสุดการทดลองเพื่อทำให้สัตว์ตายอย่างสงบในระหว่างการทดลองโดยไม่ต้องรอให้สัตว์ตายเอง (Humane Endpoint) ตัวอย่างเช่น สัตว์อยู่ในสภาพทรุดโทรม น้ำหนักลด ส่งเสียงร้องด้วยความเจ็บปวด และไม่สามารถเคลื่อนไหวได้เอง (Please indicate humane endpoint criteria)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic23->ptc23_03 }} </td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">23.4 ระบุเหตุผลความจำเป็นที่จะใช้การตายเป็นจุดสิ้นสุดการทดลอง (Death as an Endpoint is used give a scientific justification)* (*ถ้ามีความจำเป็นในการใช้การตายในการสิ้นสุดการทดลอง)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic23->ptc23_04 }} </td>
    </tr>
    @endif
    <hr>

    @if($Protocol_opic24)
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">24 การดำเนินการกับสัตว์ที่ยังมีชีวิตหลังการสิ้นสุดโครงการ (disposition of animals after completion of activity)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj">&nbsp; &nbsp; @if($Protocol_opic24->ptc24_01 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  <span style="font-weight:bold">ทำให้สัตว์ตายอย่างสงบ (Euthanasia)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj">&nbsp; &nbsp; @if($Protocol_opic24->ptc24_02 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  <span style="font-weight:bold">นำสัตว์ไปใช้ในโครงการอื่น (Transfer to another research project)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic24->ptc24_03 }} </td>
    </tr>
    <tr>
      <td class="tg-e5wj">&nbsp; &nbsp; @if($Protocol_opic24->ptc24_04 == '') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  <span style="font-weight:bold">อื่นๆ (ระบุวิธีการพร้อมเหตุผล) (Other, please specify method and why)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic24->ptc24_05 }}  </td>
    </tr>
    @endif
    <hr>

    @if($Protocol_opic25)
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">25 การทำให้สัตว์ตายอย่างสงบ (Euthanasia)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj"> @if($Protocol_opic25->ptc25_01 == 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  ไม่มี (No)  @if($Protocol_opic25->ptc25_01 != 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  มี (ระบุ) (Yes, please specify)</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">25.1 ระบุวิธีการ อุปกรณ์ สถานที่ และเหตุผล ที่ทำให้สัตว์ตายอย่างสงบตามมาตรฐานที่เป็นที่ยอมรับพร้อมหลักฐานอ้างอิง (Method, equipment, location, Why euthanasia under standard method)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{$Protocol_opic25->ptc25_02}} </td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">25.2 ระบุวิธีการการตรวจสอบการตายของสัตว์ (Method for ensure animal death)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{$Protocol_opic25->ptc25_03}} </td>
    </tr>
    @endif
    <hr>

    @if($Protocol_opic26)
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">26 การผ่าซาก (Necropsy) (ถ้ามี)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj"> @if($Protocol_opic26->ptc26_01 == 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  ไม่มี (No)  @if($Protocol_opic26->ptc26_01 != 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  มี (ระบุ) (Yes, please specify)</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">ระบุวิธีการ อุปกรณ์ สถานที่ และการป้องกันการแพร่กระจายของเชื้อโรคในการผ่าซากสัตว์ (Method, instrument, location and equipment to prevent spread of hazardous agent)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic26->ptc26_02 }} </td>
    </tr>
    @endif
    <hr>

    @if($Protocol_opic27)
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">27 การกำจัดซากและของเสีย (Carcass and Waste Disposal)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj"> @if($Protocol_opic27->ptc27_01 != 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  ไม่มี (No)  @if($Protocol_opic27->ptc27_01 == 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  มี (ระบุ) (Yes, please specify)</td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">ระบุวิธีการเก็บ กำจัด และทำลายซากสัตว์ ชิ้นเนื้อและวัสดุที่ใช้แล้ว เพื่อป้องกันการแพร่กระจายของเชื้อโรค สารพิษ มลพิษ สู่สิ่งแวดล้อม (Please describe method used to dispose animal tissue and carcasses.)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{$Protocol_opic27->ptc27_02}} </td>
    </tr>
    @endif
    <hr>

    @if($Protocol_opic28)
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">28 อุปกรณ์เพื่อป้องกันอันตรายกับผู้ปฏิบัติงาน การป้องกันการแพร่กระจายของสารพิษ/เชื้อโรค</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">28.1 ระบุอุปกรณ์เพื่อป้องกันอันตรายต่อผู้ปฏิบัติงาน (List safety equipment and personnel protective equipment requirements.)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic28->ptc28_01 }} </td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">28.2 ระบุอุปกรณ์เพื่อป้องกันการแพร่กระจายของสารพิษ/เชื้อโรค (List safety equipment to prevent spread of hazardous agent)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic28->ptc28_02 }} </td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">28.3 ระบุอุปกรณ์เพื่อป้องกันอันตรายจากการปฏิบัติงานกับสัตว์ (List safety equipment to prevent danger from animal procedure)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3">{{ $Protocol_opic28->ptc28_03 }} </td>
    </tr>
    @endif
    <hr>

    <tr>
      <td class="tg-b420" colspan="3"><span style="font-weight:bold">คำรับรอง (Statement of profession)</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">ข้าพเจ้าขอรับรองว่าจะปฏิบัติต่อสัตว์ตรงตามวิธีการที่ได้เสนอไว้ในโครงการ ไม่ปล่อยปละละเลย ดูแลให้น้ำและอาหารในปริมาณที่เพียงพอกับความต้องการ เข้มงวดกวดขันในการป้องกันการติดเชื้อและการแพร่กระจายของเชื้อตามมาตรฐานการปฏิบัติงานที่ได้กำหนดไว้ และขอรับรองว่าจะใช้สัตว์ให้มีประสิทธิภาพสูงสุด โดยตระหนักถึงคุณค่าของชีวิตและศีลธรรมตามหลักศาสนา ตลอดจนยินดีให้คณะกรรมการกำกับดูแลการเลี้ยงและใช้สัตว์ คณะอนุกรรมการจรรยาบรรณและติดตามโครงการเลี้ยงและใช้สัตว์เพื่องานทางวิทยาศาสตร์ ตรวจสอบได้</span></td>
    </tr>
    <tr>
      <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">As Principal investigator on this protocol, I acknowledge the inherent moral, ethical and administrative obligations associated with the performance of this animal use protocol, and I assure that all individuals associated with this project will demonstrate a concern for the health, comfort, welfare, and well-being of the research animals. Additionally, I pledge to conduct this study in the responsibility for implementing animal use alternatives where feasible, and conducting humane and lawful research. I consent to auditing and monitoring by TUACUC and Sub-IACUC</span></td>
    </tr>
  </table>
<pagebreak>
  @if($Protocol_opic30)
  <table class="tg" style="undefined;table-layout: fixed; width: 946px">
    <colgroup>
    <col style="width: 508px">
    <col style="width: 438px">
    </colgroup>
      <tr>
        <th class="tg-8jgo" colspan="3"><img src="http://o.ots.co.th/iacucsnex/logo_tu_cut.png" width="100"></th>
      </tr>
      <tr>
        <td class="tg-b420" colspan="3"><span style="font-weight:bold">แบบประเมินความเสี่ยงจากการปฏิบัติงานของโครงการวิจัยที่มีการใช้สัตว์เพื่องานทางวิทยาศาสตร์ มหาวิทยาลัยธรรมศาสตร์</span></td>
      </tr>
      
      <tr>
        <td class="tg-e5wj" colspan="3"><span style="font-weight:bold">ชื่อโครงการวิจัย : {{ $Protocol_opic01->animal_protocol_th }}</span></td>
      </tr>
      <tr>
      <td class="tg-zv4m" colspan="3"><span style="font-weight:bold">หัวหน้าโครงการ : {{ $Protocol_opic02_30->Name_th }}&nbsp; &nbsp;{{ $Protocol_opic02_30->Surname_th }}</span></td>
      </tr>
      <tr>
        <td class="tg-zv4m" colspan="3"><span style="font-weight:bold">วันที่ทำการประเมิน : {{ DateThai($Protocol_docs->updated_at) }}</span></td>
      </tr>
      <tr>
        <td class="tg-zv4m" colspan="3"><span style="font-weight:bold">ผู้ประเมิน</span></td>
      </tr>
    </table>
    <table class="tg" style="undefined;table-layout: fixed; width: 946px; border=3px solid #000; " >
      <colgroup>
        <col style="width: 50px">
        <col style="width: 400px">
        <col style="width: 50px">
        <col style="width: 50px">
        <col style="width: 400px">
        </colgroup>
        <thead>
        <tr>
          <th class="tg-oe15">#</th>
          <th class="tg-oe15">สิ่งคุกคามทางสุขภาพของผู้ปฎิบัติงาน	</th>
          <th class="tg-oe15">ไม่มี</th>
          <th class="tg-oe15">มี</th>
          <th class="tg-oe15">มาตรการควบคุมปัจจัยเสี่ยง</th>
        </tr>   
      </thead>
      <tr>
        <td class="tg-oe15" colspan="5">สิ่งคุกคามทางด้านกายภาพ</td>
      </tr> 
        <tr>
          <td class="tg-oe15">1</td>
          <td class="tg-oe15">ท่านต้องปฏิบัติงานในที่มีแสงจ้าหรือแสงน้อยเกินไปหรือไม่</td>
          <td class="tg-oe15"> @if($Protocol_opic30->ptc30_01 == 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  </td>
          <td class="tg-oe15"> @if($Protocol_opic30->ptc30_01 != 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  </td>
          <td class="tg-oe15">{{ $Protocol_opic30->ptc30_01_sub }}</td>
        </tr>  
        <tr>
          <td class="tg-oe15">2</td>
          <td class="tg-oe15">ท่านใช้เครื่องมือที่มีเสียงดังหรือไม่ (≥ 85 dB)</td>
          <td class="tg-oe15"> @if($Protocol_opic30->ptc30_02 == 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  </td>
          <td class="tg-oe15"> @if($Protocol_opic30->ptc30_02 != 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  </td>
          <td class="tg-oe15">{{ $Protocol_opic30->ptc30_02_sub }}</td>
        </tr>
        <tr>
          <td class="tg-oe15">3</td>
          <td class="tg-oe15">ท่านต้องปฏิบัติงานในพื้นที่ที่มีอุณหภูมิเย็นเกินไปหรือไม่ (≤18°C)</td>
          <td class="tg-oe15"> @if($Protocol_opic30->ptc30_03 == 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  </td>
          <td class="tg-oe15"> @if($Protocol_opic30->ptc30_03 != 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  </td>
          <td class="tg-oe15">{{ $Protocol_opic30->ptc30_03_sub }}</td>
        </tr>
        <tr>
          <td class="tg-oe15">4</td>
          <td class="tg-oe15">ท่านใช้เครื่องมือที่มีความสั่นสะเทือนหรือไม่</td>
          <td class="tg-oe15"> @if($Protocol_opic30->ptc30_04 == 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  </td>
          <td class="tg-oe15"> @if($Protocol_opic30->ptc30_04 != 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  </td>
          <td class="tg-oe15">{{ $Protocol_opic30->ptc30_04_sub }}</td>
        </tr>
        <tr>
          <td class="tg-oe15">5</td>
          <td class="tg-oe15">ท่านใช้รังสีในงานวิจัยหรือไม่</td>
          <td class="tg-oe15"> @if($Protocol_opic30->ptc30_05 == 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  </td>
          <td class="tg-oe15"> @if($Protocol_opic30->ptc30_05 != 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  </td>
          <td class="tg-oe15">{{ $Protocol_opic30->ptc30_05_sub }}</td>
        </tr>   
        <tr>
          <td class="tg-oe15" colspan="5">สิ่งคุกคามทางด้านเคมี</td>
        </tr>
        <tr>
          <td class="tg-oe15">6</td>
          <td class="tg-oe15">ท่านใช้สารเคมีในงานวิจัยหรือไม่ (กรุณาระบุชนิด ปริมาณความเข้มข้นของสารเคมี)</td>
          <td class="tg-oe15"> @if($Protocol_opic30->ptc30_06 == 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  </td>
          <td class="tg-oe15"> @if($Protocol_opic30->ptc30_06 != 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  </td>
          <td class="tg-oe15">{{ $Protocol_opic30->ptc30_06_sub }}</td>
        </tr> 
        @if($Protocol_opic30_sub01)
          @foreach ($Protocol_opic30_sub01 as $r)
          <tr>
            <td class="tg-oe15"></td>
            <td class="tg-oe15" colspan="4">{{ $r->ptc30_name_01 }}</td>
          </tr>
          @endforeach
        @endif
        <tr>
          <td class="tg-oe15" colspan="5">สิ่งคุกคามทางด้านความปลอดภัยในการทำงาน</td>
        </tr>
        <tr>
          <td class="tg-oe15">7</td>
          <td class="tg-oe15">ท่านมีโอกาสเสี่ยงที่จะโดนสัตว์กัด/ข่วนหรือไม่	</td>
          <td class="tg-oe15"> @if($Protocol_opic30->ptc30_07 == 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  </td>
          <td class="tg-oe15"> @if($Protocol_opic30->ptc30_07 != 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  </td>
          <td class="tg-oe15">{{ $Protocol_opic30->ptc30_07_sub }}</td>
        </tr>
        <tr>
          <td class="tg-oe15">8</td>
          <td class="tg-oe15">ท่านใช้สารเคมีหรือวัตถุไวไฟในงานวิจัยหรือไม่</td>
          <td class="tg-oe15"> @if($Protocol_opic30->ptc30_08 == 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  </td>
          <td class="tg-oe15"> @if($Protocol_opic30->ptc30_08 != 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  </td>
          <td class="tg-oe15">{{ $Protocol_opic30->ptc30_08_sub }}</td>
        </tr>
        <tr>
          <td class="tg-oe15">9</td>
          <td class="tg-oe15">ท่านมีโอกาสเสี่ยงต่อการโดนของมีคมบาด/เข็มตำหรือไม่</td>
          <td class="tg-oe15"> @if($Protocol_opic30->ptc30_09 == 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  </td>
          <td class="tg-oe15"> @if($Protocol_opic30->ptc30_09 != 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  </td>
          <td class="tg-oe15">{{ $Protocol_opic30->ptc30_09_sub }}</td>
        </tr>
        <tr>
          <td class="tg-oe15" colspan="5">สิ่งคุกคามทางด้านชีวภาพ</td>
        </tr>
      <tr>
        <td class="tg-oe15">10</td>
        <td class="tg-oe15">ท่านมีการใช้เชื้อที่ก่อโรคในมนุษย์ในงานวิจัยหรือไม่ (กรุณาระบุชนิด ปริมาณ ความเข้มข้นของเชื้อ)</td>
        <td class="tg-oe15"> @if($Protocol_opic30->ptc30_10 == 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  </td>
        <td class="tg-oe15"> @if($Protocol_opic30->ptc30_10 != 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  </td>
        <td class="tg-oe15">{{ $Protocol_opic30->ptc30_10_sub }}</td>
      </tr>
      @if($Protocol_opic30_sub02)
        @foreach ($Protocol_opic30_sub02 as $r)
        <tr>
          <td class="tg-oe15"></td>
          <td class="tg-oe15" colspan="4">{{ $r->ptc30_name_02 }}</td>
        </tr>
        @endforeach
      @endif
      <tr>
        <td class="tg-oe15" colspan="5">สิ่งคุกคามทางด้านการยศาสตร์</td>
      </tr>
      <tr>
        <td class="tg-oe15">11</td>
        <td class="tg-oe15">ท่านยกและเคลื่อนย้ายวัตถุที่มีน้ำหนักมากหรือไม่	</td>
        <td class="tg-oe15"> @if($Protocol_opic30->ptc30_11 == 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  </td>
        <td class="tg-oe15"> @if($Protocol_opic30->ptc30_11 != 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  </td>
        <td class="tg-oe15">{{ $Protocol_opic30->ptc30_11_sub }}</td>
      </tr>
      <tr>
        <td class="tg-oe15">12</td>
        <td class="tg-oe15">ท่านทำงานโดยชูมือเหนือศีรษะ หรือชูข้อศอกเหนือหัวไหล่แบบซ้ำๆมากกว่า 1 ครั้งต่อนาทีหรือมากกว่า 4 ชั่วโมงต่อวันหรือไม่</td>
        <td class="tg-oe15"> @if($Protocol_opic30->ptc30_12 == 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  </td>
        <td class="tg-oe15"> @if($Protocol_opic30->ptc30_12 != 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  </td>
        <td class="tg-oe15">{{ $Protocol_opic30->ptc30_12_sub }}</td>
      </tr>
      <tr>
        <td class="tg-oe15">13</td>
        <td class="tg-oe15">ท่านทำงานโดยการก้มคอมากกว่า 45 องศา มากกว่า 4 ชั่วโมงต่อวันหรือไม่</td>
        <td class="tg-oe15"> @if($Protocol_opic30->ptc30_13 == 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  </td>
        <td class="tg-oe15"> @if($Protocol_opic30->ptc30_13 != 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  </td>
        <td class="tg-oe15">{{ $Protocol_opic30->ptc30_13_sub }}</td>
      </tr>
      <tr>
        <td class="tg-oe15">14</td>
        <td class="tg-oe15">ท่านทำงานโดยโค้งงอหลังไปด้านหน้ามากกว่า 30 องศา มากกว่า 4 ชั่วโมงต่อวันหรือไม่</td>
        <td class="tg-oe15"> @if($Protocol_opic30->ptc30_14 == 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  </td>
        <td class="tg-oe15"> @if($Protocol_opic30->ptc30_14 != 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  </td>
        <td class="tg-oe15">{{ $Protocol_opic30->ptc30_14_sub }}</td>
      </tr>
      <tr>
        <td class="tg-oe15">15</td>
        <td class="tg-oe15">ท่านทำงานโดยนั่งแบบย่อเข่าในการทำงานมากกว่า 4 ชั่วโมงต่อวันหรือไม่</td>
        <td class="tg-oe15"> @if($Protocol_opic30->ptc30_15 == 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  </td>
        <td class="tg-oe15"> @if($Protocol_opic30->ptc30_15 != 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  </td>
        <td class="tg-oe15">{{ $Protocol_opic30->ptc30_15_sub }}</td>
      </tr>
      <tr>
        <td class="tg-oe15">16</td>
        <td class="tg-oe15">ท่านทำงานโดยนั่งคุกเข่าในการทำงานมากกว่า 4 ชั่วโมงต่อวันหรือไม่</td>
        <td class="tg-oe15"> @if($Protocol_opic30->ptc30_16 == 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  </td>
        <td class="tg-oe15"> @if($Protocol_opic30->ptc30_16 != 'N') <img src="{{ $checkNo }}"> @else <img src="{{ $checkYes }}"> @endif  </td>
        <td class="tg-oe15">{{ $Protocol_opic30->ptc30_16_sub }}</td>
      </tr>
  </table>
  @endif
  
</pagebreak>
