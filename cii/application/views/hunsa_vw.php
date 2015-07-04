<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <center>
     <?php echo validation_errors(); ?>
          <form action="<?php echo base_url('index.php/hunsaregister/validate') ?>" method="post" enctype="multipart/form-data" >
            <h1>****** Register Hunsa.coom ******</h1>
            <label for="username">ชื่อสมาชิก  <font color="red"><b>*</b></font></label>
                  <input id="username" name="username" type="text"/><h1/></h1>

            <label for="passone">รหัสผ่าน  <font color="red"><b>*</b></font></label>
                  <input id="passone" name="passone" type="password"/><h1></h1>

            <label for="passtwo">ยืนยันรหัสผ่าน  <font color="red"><b>*</b></font></label>
                  <input id="passtwo" name="passtwo" type="password"/><h1></h1>

            <label for="email">E-mail  <font color="red"><b>*</b></font></label>
                  <input id="email" name="email" type="email"/><h1></h1>

            <label for="firstname"/>ชื่อ
                  <input id="firstname" name="firstname" type="text"/><h1></h1>

            <label for="lastname"/>นามสกุล
                  <input id="lastNnme" name="lastname" type="text"/><h1></h1>

            <label for="nickname"/>ชื่อเล่น
                  <input id="nickname" name="nickname" type="text"/><h1></h1>

            <label for="idcard"/>หมายเลขบัตรประชาชน
                  <input id="idcard" name="idcard" type="text"/><h1></h1>

      			<label for="sex"/>เพศ
									<div class="controlset-pad">
									<input name="sex" id="man" value="1" type="radio"  /> <label for="man">ชาย</label><br />
									<input name="sex" id="woman" value="2" type="radio" /> <label for="woman">หญิง</label><br />
									</div><h1></h1>

            <label for="birthday"/>วันเกิด
            <select id="birthday" name="day">
											<option value="0">Day</option>
  										<option value="1" >&nbsp;1&nbsp;</option>
  										<option value="2" >&nbsp;2&nbsp;</option>
  										<option value="3" >&nbsp;3&nbsp;</option>
  										<option value="4" >&nbsp;4&nbsp;</option>
  										<option value="5" >&nbsp;5&nbsp;</option>
  										<option value="6" >&nbsp;6&nbsp;</option>
  										<option value="7" >&nbsp;7&nbsp;</option>
  										<option value="8" >&nbsp;8&nbsp;</option>
  										<option value="9" >&nbsp;9&nbsp;</option>
  										<option value="10" >&nbsp;10&nbsp;</option>
  										<option value="11" >&nbsp;11&nbsp;</option>
  										<option value="12" >&nbsp;12&nbsp;</option>
  										<option value="13" >&nbsp;13&nbsp;</option>
  										<option value="14" >&nbsp;14&nbsp;</option>
  										<option value="15" >&nbsp;15&nbsp;</option>
  										<option value="16" >&nbsp;16&nbsp;</option>
  										<option value="17" >&nbsp;17&nbsp;</option>
  										<option value="18" >&nbsp;18&nbsp;</option>
  										<option value="19" >&nbsp;19&nbsp;</option>
  										<option value="20" >&nbsp;20&nbsp;</option>
  										<option value="21" >&nbsp;21&nbsp;</option>
  										<option value="22" >&nbsp;22&nbsp;</option>
  										<option value="23" >&nbsp;23&nbsp;</option>
  										<option value="24" >&nbsp;24&nbsp;</option>
  										<option value="25" >&nbsp;25&nbsp;</option>
  										<option value="26" >&nbsp;26&nbsp;</option>
  										<option value="27" >&nbsp;27&nbsp;</option>
  										<option value="28" >&nbsp;28&nbsp;</option>
  										<option value="29" >&nbsp;29&nbsp;</option>
  										<option value="30" >&nbsp;30&nbsp;</option>
  										<option value="31" >&nbsp;31&nbsp;</option>
  									</select>

                    <select id="birthday" name="month">
                    <option value="0">Month</option>
    									<option value="1" >มกราคม</option>
    									<option value="2" >กุมภาพันธ์</option>
    									<option value="3" >มีนาคม</option>
    									<option value="4" >เมษายน</option>
    									<option value="5" >พฤษภาคม</option>
    									<option value="6" >มิถุนายน</option>
    									<option value="7" >กรกฎาคม</option>
    									<option value="8" >สิงหาคม</option>
    									<option value="9" >กันยายน</option>
    									<option value="10" >ตุลาคม</option>
    									<option value="11" >พฤศจิกายน</option>
    									<option value="12" >ธันวาคม</option>
    								</select>

                    <select id="birthday" name="year">
                      <option value="0">Year</option>
  										<option value="2015" >2558</option>
  										<option value="2014" >2557</option>
  										<option value="2013" >2556</option>
  										<option value="2012" >2555</option>
  										<option value="2011" >2554</option>
  										<option value="2010" >2553</option>
  										<option value="2009" >2552</option>
  										<option value="2008" >2551</option>
  										<option value="2007" >2550</option>
  										<option value="2006" >2549</option>
  										<option value="2005" >2548</option>
  										<option value="2004" >2547</option>
  										<option value="2003" >2546</option>
  										<option value="2002" >2545</option>
  										<option value="2001" >2544</option>
  										<option value="2000" >2543</option>
  										<option value="1999" >2542</option>
  										<option value="1998" >2541</option>
  										<option value="1997" >2540</option>
  										<option value="1996" >2539</option>
  										<option value="1995" >2538</option>
  										<option value="1994" >2537</option>
  										<option value="1993" >2536</option>
  										<option value="1992" >2535</option>
  										<option value="1991" >2534</option>
  										<option value="1990" >2533</option>
  										<option value="1989" >2532</option>
  										<option value="1988" >2531</option>
  										<option value="1987" >2530</option>
  							   </select><h1></h1>


            <label for="address"/>ที่อยู่
                  <input id="address" name="address" size="30" type="text"/><h1></h1>

            <label for="town"/>ตำบล / แขวง
                  <input id="town" name="town" size="30" type="text"/><h1></h1>

            <label for="city"/>อำเภอ / เขต
                  <input id="city" name="city" size="30" type="text"/><h1></h1>

            <label for="provin"/>จังหวัด
            <select name="provin" id="provin" tabindex="19">
              <option value="0">---- กรุณาเลือกจังหวัด ----</option>
                    <option value=1 >&nbsp;กระบี่  </option>
                    <option value=2 >&nbsp;กรุงเทพมหานคร  </option>
                    <option value=3 >&nbsp;กาญจนบุรี  </option>
                    <option value=4 >&nbsp;กาฬสินธุ์  </option>
                    <option value=5 >&nbsp;กำแพงเพชร  </option>
                    <option value=6 >&nbsp;ขอนแก่น  </option>
                    <option value=7 >&nbsp;จันทบุรี  </option>
                    <option value=8 >&nbsp;ฉะเชิงเทรา  </option>
                    <option value=9 >&nbsp;ชลบุรี  </option>
                    <option value=10 >&nbsp;ชัยนาท  </option>
                    <option value=11 >&nbsp;ชัยภูมิ  </option>
                    <option value=12 >&nbsp;ชุมพร  </option>
                    <option value=13 >&nbsp;เชียงราย  </option>
                    <option value=14 >&nbsp;เชียงใหม่  </option>
                    <option value=15 >&nbsp;ตรัง  </option>
                    <option value=16 >&nbsp;ตราด  </option>
                    <option value=17 >&nbsp;ตาก  </option>
                    <option value=18 >&nbsp;นครนายก  </option>
                    <option value=19 >&nbsp;นครปฐม  </option>
                    <option value=20 >&nbsp;นครพนม  </option>
                    <option value=21 >&nbsp;นครราชสีมา  </option>
                    <option value=22 >&nbsp;นครศรีธรรมราช  </option>
                    <option value=23 >&nbsp;นครสวรรค์  </option>
                    <option value=24 >&nbsp;นนทบุรี  </option>
                    <option value=25 >&nbsp;นราธิวาส  </option>
                    <option value=26 >&nbsp;น่าน  </option>
                    <option value=27 >&nbsp;บุรีรัมย์  </option>
                    <option value=28 >&nbsp;ปทุมธานี  </option>
                    <option value=29 >&nbsp;ประจวบคีรีขันธ์  </option>
                    <option value=30 >&nbsp;ปราจีนบุรี  </option>
                    <option value=31 >&nbsp;ปัตตานี  </option>
                    <option value=32 >&nbsp;พระนครศรีอยุธยา  </option>
                    <option value=33 >&nbsp;พะเยา  </option>
                    <option value=34 >&nbsp;พังงา  </option>
                    <option value=35 >&nbsp;พัทลุง  </option>
                    <option value=36 >&nbsp;พิจิตร  </option>
                    <option value=37 >&nbsp;พิษณุโลก  </option>
                    <option value=38 >&nbsp;เพชรบุรี  </option>
                    <option value=39 >&nbsp;เพชรบูรณ์  </option>
                    <option value=40 >&nbsp;แพร่  </option>
                    <option value=41 >&nbsp;ภูเก็ต  </option>
                    <option value=42 >&nbsp;มหาสารคาม  </option>
                    <option value=43 >&nbsp;มุกดาหาร  </option>
                    <option value=44 >&nbsp;แม่ฮ่องสอน  </option>
                    <option value=45 >&nbsp;ยโสธร  </option>
                    <option value=46 >&nbsp;ยะลา  </option>
                    <option value=47 >&nbsp;ร้อยเอ็ด  </option>
                    <option value=48 >&nbsp;ระนอง  </option>
                    <option value=49 >&nbsp;ระยอง  </option>
                    <option value=50 >&nbsp;ราชบุรี  </option>
                    <option value=51 >&nbsp;ลพบุรี  </option>
                    <option value=52 >&nbsp;ลำปาง  </option>
                    <option value=53 >&nbsp;ลำพูน  </option>
                    <option value=54 >&nbsp;เลย  </option>
                    <option value=55 >&nbsp;ศรีษะเกษ  </option>
                    <option value=56 >&nbsp;สกลนคร  </option>
                    <option value=57 >&nbsp;สงขลา  </option>
                    <option value=58 >&nbsp;สตูล  </option>
                    <option value=59 >&nbsp;สมุทรปราการ  </option>
                    <option value=60 >&nbsp;สมุทรสงคราม  </option>
                    <option value=61 >&nbsp;สมุทรสาคร  </option>
                    <option value=62 >&nbsp;สระแก้ว  </option>
                    <option value=63 >&nbsp;สระบุรี  </option>
                    <option value=64 >&nbsp;สิงห์บุรี  </option>
                    <option value=65 >&nbsp;สุโขทัย  </option>
                    <option value=66 >&nbsp;สุพรรณบุรี  </option>
                    <option value=67 >&nbsp;สุราษฎร์ธานี  </option>
                    <option value=68 >&nbsp;สุรินทร์  </option>
                    <option value=69 >&nbsp;หนองคาย  </option>
                    <option value=70 >&nbsp;หนองบัวลำภู  </option>
                    <option value=71 >&nbsp;อ่างทอง  </option>
                    <option value=72 >&nbsp;อำนาจเจริญ  </option>
                    <option value=73 >&nbsp;อุดรธานี  </option>
                    <option value=74 >&nbsp;อุตรดิตถ์  </option>
                    <option value=75 >&nbsp;อุทัยธานี  </option>
                    <option value=76 >&nbsp;อุบลราชธานี  </option>
                    <option value=77 >&nbsp;บึงกาฬ</option>
                                </select><h1></h1>

            <label for="postcode"/>รหัสไปรษณีย์
                  <input id="postcode" name="postcode" type="text"/><h1></h1>

            <label for="telephone"/>หมายเลขโทรศัพท์
                  <input id="telephone" name="telephone" type="text"/><h1></h1>

            <label for="phone"/>โทรศัพท์มือถือ
                  <input id="phone" name="phone" type="text"/><h1></h1>

    	             <button type="submit">สมัครสมาชิก</button>

          </form>
    </center>
  </body>
</html>
