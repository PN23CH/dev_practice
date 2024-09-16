<?php $ip = $_SERVER['REMOTE_ADDR'];
// naxsolution.com, iamnax.com, localthai.org, localthai2.org, 724smile.com, cpmlocal.org, pitloklocal.org, taklocal.org, uthailocal.go.th, chainatlocal.go.th
$siteKey = "6LfQbBEUAAAAACsaTSwOx2zpCrYcg4tzB7iJ1ugo";
$secretKey = "6LfQbBEUAAAAAATe-JDB1Y1ogDj3LaMYxOm9a6bp";

// recaptcha enterprise
// demo
$recaptEn_projectId = "nax-web";
$recaptEn_apiKey = "AIzaSyC8HjjsvpW4oUbij2IkNOV1YmdJOuAkDe0";
$recaptEn_recaptchaKey = "6LfHbXYmAAAAABTKO-YmVraiOlTGwhxtNoWS6VwM";

$svrDb="db_sample";
$svrUsr="root";
$svrPas="Nax60000";
$svrUsr2="root";
$svrPas2="Nax60000";
// $webName="www.sawantok.go.th";
$webName="localhost";
$clientId=10;

/*$svrDb="kjubkainax";
$svrUsr="kjubkai8855";
$svrPas="NaxNaNan5$88$9$8";
$svrUsr2="kjubkai9955";
$svrPas2="NaNanNax5$88$9$9";
$webName="www.kjubkai.com";
$clientId=10;*/

$obtName="อบต.ในคลองบางปลากด";
$obtFullName="องค์การบริหารส่วนตำบลในคลองบางปลากด";
$aumper="เมืองพระนครศรีอยุธยา";
$province="พระนครศรีอยุธยา";

$stj_NAX_do = 0;
$stjWeb="www.uthailocal.go.th";

$hasHeadStaff = 1;	//มี หัวหน้าส่วนราชการ

$org="obt";		//อบต.
//$org="tsb";		//ทต.
//$org="stj";		//สถ.จ.

$pack="silver";
//$pack="bronze";
//$pack="save";

// Data Web
$typeObt = 1; // 1 = อบต., 2 = ทต., 3 = ทม.
$nameEng = "Kjubkai Subdistrict Administrative Organization";

$lk_googleEarth = "https://bit.ly/3utf10f";

$adress = "380/8 ม.10 ต.นครสวรรค์ตก";
$zipCode = "00000";
$telNo = "000-000-0000";
$FaxNo = "000-000-0000";

$nameNayok = "นายกกกกกกก กกกกกกกก";
$telNayok = "000-000-0000";
$namePalad = "ปลัดดดดดดดด ดดดดดดดดด";
$telPalad = "000-000-0000";

$mailOrigin = array("m" => "sales@naxsolution.co.th", "p" => 'Kkv28loVe9$y%rtM');
$mainEmail = "sales@naxsolution.com";
$etcEmail = ""; // , bbbbb@gmail.com
$linkFacebook = "#";
$pageFacebook = "#";

$typeObtArr = array( 'txtObtS' => array(0, "อบต.", "ทต.", "ทม."),
								'txtObtL' => array(0, "องค์การบริหารส่วนตำบล", "เทศบาลตำบล", "เทศบาลเมือง"),
								'txtNayokS' => array(0, "นายก อบต.", "นายก ทต.", "นายก ทม."),
								'txtNayokL' => array(0, "นายกองค์การบริหารส่วนตำบล", "นายกเทศมนตรีตำบล", "นายกเทศมนตรีเมือง"),
								'txtPaladL' => array(0, "ปลัดองค์การบริหารส่วนตำบล", "ปลัดเทศบาลตำบล", "ปลัดเทศบาลเมือง"),
);
$nameT = ($typeObt == 1) ? mb_substr($obtName, 4) : mb_substr($obtName, 3);
$pttH = 2490;
// End Data Web

// Close/Open menu
if($pack=="silver") {
	$newsAtv = 1;			$newsAtvTxt = "ข่าวกิจกรรม";												$newsAtvSTxt = "ข่าวกิจกรรม";
	$newsPublic = 1;		$newsPublicTxt = "ข่าวประชาสัมพันธ์";									$newsPublicStxt = "ข่าวประชาสัมพันธ์";
	$newsPurc = 1;			$newsPurcTxt =  "ข่าวจัดซื้อจัดจ้าง";										$newsPurcStxt = "ข่าวจัดซื้อจัดจ้าง";
	$newsStaff = 1;			$newsStaffTxt = "ข่าวสรรหาบุคลากร";									$newsStaffStxt = "ข่าวสรรหาบุคลากร";
	$newsNhso = 1;			$newsNhsoTxt =  "กองทุนหลักประกันสุขภาพ";						$newsNhsoStxt =  "หลักประกันสุขภาพ";
	$newsPrice = 0;			$newsPriceTxt = "ราคากลาง";												$newsPriceStxt = "ราคากลาง";
	$newsAnnPrice = 1;	$newsAnnPriceTxt = "ประกาศผลจัดซื้อจัดจ้าง";						$newsAnnPriceStxt = "ผลจัดซื้อจัดจ้าง";
	$newsRpPurc = 0;		$newsRpPurcTxt = "รายงานสรุปผลการจัดซื้อจัดจ้าง(สขร.)";		$newsRpPurcStxt = "สขร.";
	$newsVdo = 1;			$newsVdoTxt = "VDO วีดิทัศน์";											$newsVdoSTxt = "VDO วีดิทัศน์";
	$newsCcl = 1;			$newsCclTxt = "กิจการสภา";												$newsCclSTxt = "กิจการสภา";
	$newsPcm = 0;			$newsPcmTxt = "ประกาศสอบราคา";										$newsPcmStxt = "ประกาศสอบราคา";
	$newsSta = 0;			$newsStaTxt = "หนังสือราชการ สถ.อ.";									$newsStaStxt = "หนังสือราชการ สถ.อ.";
	
	$newsEgp = 1;			$newsEgpTxt = "ประกาศจากระบบ e-GP";
	$Headline = 1;			$HeadlineTxt = "ระบบจัดการ Head Line";
	
	$hasPjObt = 1;			$hasPjObtTxt = "ข้อบัญญัติ";
	$hasAnnRp = 1;			$hasAnnRpTxt = "รายงานผลการปฏิบัติงานประจำปี";
	$reportMt = 1;			$reportMtTxt = "รายงานการประชุมพนักงาน";
	$hasCt = 0;				$hasCtTxt = "ควบคุมภายใน";
	$hasDvl = 1;				$hasDvlTxt = "แผนพัฒนาท้องถิ่น";
	$hasAnual = 1;			$hasAnualTxt = "แผนการดำเนินงาน";
	$hasRsOpr = 1;			$hasRsOprTxt = "รายงานผลการกำกับติดตาม";
	$hasIct = 0;				$hasIctTxt = "ศูนย์ข้อมูลข่าวสาร";
	$hasPurc = 1;			$hasPurcTxt = "แผนการจัดหาพัสดุ";
	$hasPlStaff = 1;			$hasPlStaffTxt = "แผนอัตรากำลัง";
	$hasResPurc = 0;		$hasResPurcTxt = "ผลการจัดซื้อ/จัดจ้าง";
	$hasNotice = 1;			$hasNoticeTxt = "ประกาศ";
	$hasCmd = 1;			$hasCmdTxt = "คำสั่ง";
	$hasSdDoc = 0;			$hasSdDocTxt = "หนังสือส่ง";
	$hasOffLet = 0;			$hasOffLetTxt = "หนังสือราชการ";
	$hasPvt = 0;				$hasPvtTxt = "งานป้องกันและบรรเทาสาธารณภัย";
	$hasCrpt = 1;			$hasCrptTxt = "แผนป้องกันปราบปรามการทุจริต";
	$hasMgz = 1;				$hasMgzTxt = "วารสาร/จดหมายข่าว";
	$hasKm = 1;				$hasKmTxt = "การจัดการองค์ความรู้ KM";
	$hasPlc = 0;				$hasPlcTxt = "ที่พัก";
	$hasPfm = 0;				$hasPfmTxt = "รายงานผลการปฏิบัติราชการ";
	$hasEpy = 0;				$hasEpyTxt = "แผนอัตรากำลังพนักงานจ้าง";
	$hasHr = 1;				$hasHrTxt = "นโยบายการบริหารทรัพยากรบุคคล";
	$hasFnr = 1;				$hasFnrTxt = "รายงานทางการเงิน";
	$hasPtt = 1;				$hasPttTxt = "ศูนย์จัดการเรื่องร้องเรียน";
	$hasPfm2 = 1;			$hasPfm2Txt = "คู่มือการปฏิบัติงาน";
	$hasPjex = 1;			$hasPjexTxt = "ข้อบัญญัติงบประมาณรายจ่าย";
	$hasOth = 1;				$hasOthTxt = "แผนอื่นๆ";
	$hasInc = 1;				$hasIncTxt = "งบแสดงรายรับ-รายจ่าย";
	$haSks1 = 1;				$haSks1Txt = "สรุปผลการจัดซื้อจัดจ้างหรือการจัดหาพัสดุรายเดือน (สขร.1)";
	$haSks = 1;				$haSksTxt = "รายงานผลการจัดซื้อจัดจ้างหรือการจัดหาพัสดุรายปี (สขร.)";
	$hasCeo = 1;				$hasCeoTxt = "รายงานการประชุมผู้บริหาร";
	$hasCcm = 1;			$hasCcmTxt = "รายงานการประชุมสภา";
	$hasOtr = 1;				$hasOtrTxt = "รายงานอื่นๆ";
	$hasStt = 1;				$hasSttTxt = "สถิติ";
	$hasFaq = 1;				$hasFaqTxt = "คำถามที่พบบ่อย";
	$hasHlp = 1;				$hasHlpTxt = "ศูนย์ช่วยเหลือประชาชน";
	$hasLaw = 1;				$hasLawTxt = "กฎหมายที่เกี่ยวข้อง";
	$hasAtt = 1;				$hasAttTxt = "อำนาจหน้าที่";
	$hasSev = 1;				$hasSevTxt = "คู่มือหรือมาตรฐานการให้บริการ";
	$hasAtc = 1;				$hasAtcTxt = "การดำเนินการเพื่อป้องกันการทุจริต";
	$hasAdt = 1;				$hasAdtTxt = "การส่งเสริมความโปร่งใสและป้องกันการทุจริตภายในหน่วยงาน";
	$hasPlt = 1;				$hasPltTxt = "โครงการอนุรักษ์พันธุกรรมพืช อันเนื่องมาจากพระราชดำริ สมเด็จพระเทพรัตนราชสุดาฯ สยามบรมราชกุมารี";
	$hasPj50 = 1;			$hasPj50Txt = "การดำเนินการตามนโยบายการบริหารทรัพยากรบุคคล";
	$hasPj51 = 1;			$hasPj51Txt = "หลักเกณฑ์การบริหารและพัฒนาทรัพยากรบุคคล";
	$hasPj52 = 1;			$hasPj52Txt = "รายงานผลการบริหารและพัฒนาทรัพยากรบุคคลประจำปี";
	$hasPj53 = 1;			$hasPj53Txt = "รายงานผลตรวจสอบภายใน";
	$hasPj54 = 1;			$hasPj54Txt = "แผนตรวจสอบภายใน";
	$hasPj55 = 1;			$hasPj55Txt = "ประมวลจริยธรรมสำหรับเจ้าหน้าที่ของรัฐ";
	$hasPj56 = 1;			$hasPj56Txt = "รายงานการบริหารจัดการความเสี่ยง";
	$hasPj57 = 1;			$hasPj57Txt = "นโยบายการบริหารจัดการความเสี่ยง";
	$hasPj58 = 1;			$hasPj58Txt = "รายงานการโอนเงินงบประมาณ";
	$hasPj59 = 1;			$hasPj59Txt = "ฐานข้อมูลเปิดภาครัฐ";
	
	$hasStaff = 1;			$hasStaffTxt = "ข้อมูลบุคลากร";
	$hasTravel = 1;			$hasTravelTxt = "แหล่งท่องเที่ยว / สถานที่สำคัญ";
	$hasOtop = 1;			$hasOtopTxt = "สินค้า OTOP";
	$hasSvg = 1;				$hasSvgTxt = "คู่มือประชาชน";
	$hasPool = 1;			$hasPollTxt = "poll";
	$hasWb = 1;				$hasWbTxt = "webboard เรื่องทั่วไป";
	$hasSrv = 0;				$hasSrvTxt = "จัดการผลสำรวจความพึงพอใจ";
	$hasSrv2 = 1;				$hasSrv2Txt = "ประมวลผลการสำรวจความพึงพอใจ";
	$hasSld = 1;				$hasSldTxt = "จัดการภาพสไลด์";
	$hasApl = 0;				$hasAplTxt = "จัดการเรื่องร้องเรียน";
	$hasCld = 1;				$hasCldTxt = "ปฏิทินกิจกรรม";
}
if($pack=="bronze") {
	$newsAtv = 1;			$newsAtvTxt = "ข่าวกิจกรรม";												$newsAtvSTxt = "ข่าวกิจกรรม";
	$newsPublic  = 1;		$newsPublicTxt = "ข่าวประชาสัมพันธ์";									$newsPublicStxt = "ข่าวประชาสัมพันธ์";
	$newsPurc = 1;			$newsPurcTxt =  "ข่าวจัดซื้อจัดจ้าง";										$newsPurcStxt = "ข่าวจัดซื้อจัดจ้าง";
	$newsStaff = 1;			$newsStaffTxt = "ข่าวสรรหาบุคลากร";									$newsStaffStxt = "ข่าวสรรหาบุคลากร";
	$newsNhso = 0;			$newsNhsoTxt =  "กองทุนหลักประกันสุขภาพ";						$newsNhsoStxt =  "หลักประกันสุขภาพ";
	$newsPrice = 0;			$newsPriceTxt = "ราคากลาง";												$newsPriceStxt = "ราคากลาง";
	$newsAnnPrice = 1;	$newsAnnPriceTxt = "ประกาศผลจัดซื้อจัดจ้าง";						$newsAnnPriceStxt = "ผลจัดซื้อจัดจ้าง";
	$newsRpPurc = 0;		$newsRpPurcTxt = "รายงานสรุปผลการจัดซื้อจัดจ้าง(สขร.)";		$newsRpPurcStxt = "สขร.";
	$newsVdo = 0;			$newsVdoTxt = "VDO วีดิทัศน์";											$newsVdoSTxt = "VDO วีดิทัศน์";
	$newsCcl = 1;			$newsCclTxt = "กิจการสภา";												$newsCclSTxt = "กิจการสภา";
	$newsPcm = 0;			$newsPcmTxt = "ประกาศสอบราคา";										$newsPcmStxt = "ประกาศสอบราคา";
	$newsSta = 0;			$newsStaTxt = "หนังสือราชการ สถ.อ.";									$newsStaStxt = "หนังสือราชการ สถ.อ.";
	
	$newsEgp = 1;			$newsEgpTxt = "ประกาศจากระบบ e-GP";
	$Headline = 0;			$HeadlineTxt = "ระบบจัดการ Head Line";
	
	$hasPjObt = 1;			$hasPjObtTxt = "ข้อบัญญัติ";
	$hasAnnRp = 1;			$hasAnnRpTxt = "รายงานผลการปฏิบัติงานประจำปี";
	$reportMt = 1;			$reportMtTxt = "รายงานการประชุมพนักงาน";
	$hasCt = 0;				$hasCtTxt = "ควบคุมภายใน";
	$hasDvl = 1;				$hasDvlTxt = "แผนพัฒนาท้องถิ่น";
	$hasAnual = 0;			$hasAnualTxt = "แผนการดำเนินงาน";
	$hasRsOpr = 0;			$hasRsOprTxt = "รายงานผลการกำกับติดตาม";
	$hasIct = 0;				$hasIctTxt = "ศูนย์ข้อมูลข่าวสาร";
	$hasPurc = 1;			$hasPurcTxt = "แผนการจัดหาพัสดุ";
	$hasPlStaff = 0;			$hasPlStaffTxt = "แผนอัตรากำลัง";
	$hasResPurc = 0;		$hasResPurcTxt = "ผลการจัดซื้อ/จัดจ้าง";
	$hasNotice = 1;			$hasNoticeTxt = "ประกาศ";
	$hasCmd = 0;			$hasCmdTxt = "คำสั่ง";
	$hasSdDoc = 0;			$hasSdDocTxt = "หนังสือส่ง";
	$hasOffLet = 0;			$hasOffLetTxt = "หนังสือราชการ";
	$hasPvt = 0;				$hasPvtTxt = "งานป้องกันและบรรเทาสาธารณภัย";
	$hasCrpt = 0;			$hasCrptTxt = "แผนป้องกันปราบปรามการทุจริต";
	$hasMgz = 0;				$hasMgzTxt = "วารสาร/จดหมายข่าว";
	$hasKm = 1;				$hasKmTxt = "การจัดการองค์ความรู้ KM";
	$hasPlc = 0;				$hasPlcTxt = "ที่พัก";
	$hasPfm = 0;				$hasPfmTxt = "รายงานผลการปฏิบัติราชการ";
	$hasEpy = 0;				$hasEpyTxt = "แผนอัตรากำลังพนักงานจ้าง";
	$hasHr = 0;				$hasHrTxt = "นโยบายการบริหารทรัพยากรบุคคล";
	$hasFnr = 0;				$hasFnrTxt = "รายงานทางการเงิน";
	$hasPtt = 1;				$hasPttTxt = "ศูนย์จัดการเรื่องร้องเรียน";
	$hasPfm2 = 1;			$hasPfm2Txt = "คู่มือการปฏิบัติงาน";
	$hasPjex = 1;			$hasPjexTxt = "ข้อบัญญัติงบประมาณรายจ่าย";
	$hasOth = 1;				$hasOthTxt = "แผนอื่นๆ";
	$hasInc = 1;				$hasIncTxt = "งบแสดงรายรับ-รายจ่าย";
	$haSks1 = 0;				$haSks1Txt = "สรุปผลการจัดซื้อจัดจ้างหรือการจัดหาพัสดุรายเดือน (สขร.1)";
	$haSks = 1;				$haSksTxt = "รายงานผลการจัดซื้อจัดจ้างหรือการจัดหาพัสดุรายปี (สขร.)";
	$hasCeo = 1;				$hasCeoTxt = "รายงานการประชุมผู้บริหาร";
	$hasCcm = 0;			$hasCcmTxt = "รายงานการประชุมสภา";
	$hasOtr = 1;				$hasOtrTxt = "รายงานอื่นๆ";
	$hasStt = 1;				$hasSttTxt = "สถิติ";
	$hasFaq = 1;				$hasFaqTxt = "คำถามที่พบบ่อย";
	$hasHlp = 1;				$hasHlpTxt = "ศูนย์ช่วยเหลือประชาชน";
	$hasLaw = 1;				$hasLawTxt = "กฎหมายที่เกี่ยวข้อง";
	$hasAtt = 1;				$hasAttTxt = "อำนาจหน้าที่";
	$hasSev = 1;				$hasSevTxt = "คู่มือหรือมาตรฐานการให้บริการ";
	$hasAtc = 1;				$hasAtcTxt = "การดำเนินการเพื่อป้องกันการทุจริต";
	$hasAdt = 1;				$hasAdtTxt = "การส่งเสริมความโปร่งใสและป้องกันการทุจริตภายในหน่วยงาน";
	$hasPlt = 1;				$hasPltTxt = "โครงการอนุรักษ์พันธุกรรมพืช อันเนื่องมาจากพระราชดำริ สมเด็จพระเทพรัตนราชสุดาฯ สยามบรมราชกุมารี";
	$hasPj50 = 1;			$hasPj50Txt = "การดำเนินการตามนโยบายการบริหารทรัพยากรบุคคล";
	$hasPj51 = 1;			$hasPj51Txt = "หลักเกณฑ์การบริหารและพัฒนาทรัพยากรบุคคล";
	$hasPj52 = 1;			$hasPj52Txt = "รายงานผลการบริหารและพัฒนาทรัพยากรบุคคลประจำปี";
	$hasPj53 = 1;			$hasPj53Txt = "รายงานผลตรวจสอบภายใน";
	$hasPj54 = 1;			$hasPj54Txt = "แผนตรวจสอบภายใน";
	$hasPj55 = 1;			$hasPj55Txt = "ประมวลจริยธรรมสำหรับเจ้าหน้าที่ของรัฐ";
	$hasPj56 = 1;			$hasPj56Txt = "รายงานการบริหารจัดการความเสี่ยง";
	$hasPj57 = 1;			$hasPj57Txt = "นโยบายการบริหารจัดการความเสี่ยง";
	$hasPj58 = 1;			$hasPj58Txt = "รายงานการโอนเงินงบประมาณ";
	$hasPj59 = 1;			$hasPj59Txt = "ฐานข้อมูลเปิดภาครัฐ";
	
	$hasStaff = 1;			$hasStaffTxt = "ข้อมูลบุคลากร";
	$hasTravel = 1;			$hasTravelTxt = "แหล่งท่องเที่ยว / สถานที่สำคัญ";
	$hasOtop = 1;			$hasOtopTxt = "สินค้า OTOP";
	$hasSvg = 1;				$hasSvgTxt = "คู่มือประชาชน";
	$hasPool = 1;			$hasPollTxt = "poll";
	$hasWb = 1;				$hasWbTxt = "webboard เรื่องทั่วไป";
	$hasSrv = 0;				$hasSrvTxt = "จัดการผลสำรวจความพึงพอใจ";
	$hasSld = 1;				$hasSldTxt = "จัดการภาพสไลด์";
	$hasSrv2 = 1;				$hasSrv2Txt = "ประมวลผลการสำรวจความพึงพอใจ";
	$hasApl = 0;				$hasAplTxt = "จัดการเรื่องร้องเรียน";
	$hasCld = 0;				$hasCldTxt = "ปฏิทินกิจกรรม";
}
if($pack=="save") {
	$newsAtv = 1;			$newsAtvTxt = "ข่าวกิจกรรม";												$newsAtvSTxt = "ข่าวกิจกรรม";
	$newsPublic  = 1;		$newsPublicTxt = "ข่าวประชาสัมพันธ์";									$newsPublicStxt = "ข่าวประชาสัมพันธ์";
	$newsPurc = 1;			$newsPurcTxt =  "ข่าวจัดซื้อจัดจ้าง";										$newsPurcStxt = "ข่าวจัดซื้อจัดจ้าง";
	$newsStaff = 0;			$newsStaffTxt = "ข่าวสรรหาบุคลากร";									$newsStaffStxt = "ข่าวสรรหาบุคลากร";
	$newsNhso = 0;			$newsNhsoTxt =  "กองทุนหลักประกันสุขภาพ";						$newsNhsoStxt =  "หลักประกันสุขภาพ";
	$newsPrice = 0;			$newsPriceTxt = "ราคากลาง";												$newsPriceStxt = "ราคากลาง";
	$newsAnnPrice = 1;	$newsAnnPriceTxt = "ประกาศผลจัดซื้อจัดจ้าง";						$newsAnnPriceStxt = "ผลจัดซื้อจัดจ้าง";
	$newsRpPurc = 0;		$newsRpPurcTxt = "รายงานสรุปผลการจัดซื้อจัดจ้าง(สขร.)";		$newsRpPurcStxt = "สขร.";
	$newsVdo = 0;			$newsVdoTxt = "VDO วีดิทัศน์";											$newsVdoSTxt = "VDO วีดิทัศน์";
	$newsCcl = 0;			$newsCclTxt = "กิจการสภา";												$newsCclSTxt = "กิจการสภา";
	$newsPcm = 0;			$newsPcmTxt = "ประกาศสอบราคา";										$newsPcmStxt = "ประกาศสอบราคา";
	$newsSta = 0;			$newsStaTxt = "หนังสือราชการ สถ.อ.";									$newsStaStxt = "หนังสือราชการ สถ.อ.";
	
	$newsEgp = 1;			$newsEgpTxt = "ประกาศจากระบบ e-GP";
	$Headline = 0;			$HeadlineTxt = "ระบบจัดการ Head Line";
	
	$hasPjObt = 1;			$hasPjObtTxt = "ข้อบัญญัติ";
	$hasAnnRp = 1;			$hasAnnRpTxt = "รายงานผลการปฏิบัติงานประจำปี";
	$reportMt = 0;			$reportMtTxt = "รายงานการประชุมพนักงาน";
	$hasCt = 0;				$hasCtTxt = "ควบคุมภายใน";
	$hasDvl = 1;				$hasDvlTxt = "แผนพัฒนาท้องถิ่น";
	$hasAnual = 0;			$hasAnualTxt = "แผนการดำเนินงาน";
	$hasRsOpr = 0;			$hasRsOprTxt = "รายงานผลการกำกับติดตาม";
	$hasIct = 0;				$hasIctTxt = "ศูนย์ข้อมูลข่าวสาร";
	$hasPurc = 0;			$hasPurcTxt = "แผนการจัดหาพัสดุ";
	$hasPlStaff = 0;			$hasPlStaffTxt = "แผนอัตรากำลัง";
	$hasResPurc = 0;		$hasResPurcTxt = "ผลการจัดซื้อ/จัดจ้าง";
	$hasNotice = 0;			$hasNoticeTxt = "ประกาศ";
	$hasCmd = 0;			$hasCmdTxt = "คำสั่ง";
	$hasSdDoc = 0;			$hasSdDocTxt = "หนังสือส่ง";
	$hasOffLet = 0;			$hasOffLetTxt = "หนังสือราชการ";
	$hasPvt = 0;				$hasPvtTxt = "งานป้องกันและบรรเทาสาธารณภัย";
	$hasCrpt = 0;			$hasCrptTxt = "แผนป้องกันปราบปรามการทุจริต";
	$hasMgz = 0;				$hasMgzTxt = "วารสาร/จดหมายข่าว";
	$hasKm = 1;				$hasKmTxt = "การจัดการองค์ความรู้ KM";
	$hasPlc = 0;				$hasPlcTxt = "ที่พัก";
	$hasPfm = 0;				$hasPfmTxt = "รายงานผลการปฏิบัติราชการ";
	$hasEpy = 0;				$hasEpyTxt = "แผนอัตรากำลังพนักงานจ้าง";
	$hasHr = 0;				$hasHrTxt = "นโยบายการบริหารทรัพยากรบุคคล";
	$hasFnr = 0;				$hasFnrTxt = "รายงานทางการเงิน";
	$hasPtt = 1;				$hasPttTxt = "ศูนย์จัดการเรื่องร้องเรียน";
	$hasPfm2 = 0;			$hasPfm2Txt = "คู่มือการปฏิบัติงาน";
	$hasPjex = 1;			$hasPjexTxt = "ข้อบัญญัติงบประมาณรายจ่าย";
	$hasOth = 1;				$hasOthTxt = "แผนอื่นๆ";
	$hasInc = 1;				$hasIncTxt = "งบแสดงรายรับ-รายจ่าย";
	$haSks1 = 0;				$haSks1Txt = "สรุปผลการจัดซื้อจัดจ้างหรือการจัดหาพัสดุรายเดือน (สขร.1)";
	$haSks = 1;				$haSksTxt = "รายงานผลการจัดซื้อจัดจ้างหรือการจัดหาพัสดุรายปี (สขร.)";
	$hasCeo = 0;				$hasCeoTxt = "รายงานการประชุมผู้บริหาร";
	$hasCcm = 0;			$hasCcmTxt = "รายงานการประชุมสภา";
	$hasOtr = 1;				$hasOtrTxt = "รายงานอื่นๆ";
	$hasStt = 1;				$hasSttTxt = "สถิติ";
	$hasFaq = 1;				$hasFaqTxt = "คำถามที่พบบ่อย";
	$hasHlp = 1;				$hasHlpTxt = "ศูนย์ช่วยเหลือประชาชน";
	$hasLaw = 1;				$hasLawTxt = "กฎหมายที่เกี่ยวข้อง";
	$hasAtt = 1;				$hasAttTxt = "อำนาจหน้าที่";
	$hasSev = 1;				$hasSevTxt = "คู่มือหรือมาตรฐานการให้บริการ";
	$hasAtc = 1;				$hasAtcTxt = "การดำเนินการเพื่อป้องกันการทุจริต";
	$hasAdt = 1;				$hasAdtTxt = "การส่งเสริมความโปร่งใสและป้องกันการทุจริตภายในหน่วยงาน";
	$hasPlt = 1;				$hasPltTxt = "โครงการอนุรักษ์พันธุกรรมพืช อันเนื่องมาจากพระราชดำริ สมเด็จพระเทพรัตนราชสุดาฯ สยามบรมราชกุมารี";
	$hasPj50 = 1;			$hasPj50Txt = "การดำเนินการตามนโยบายการบริหารทรัพยากรบุคคล";
	$hasPj51 = 1;			$hasPj51Txt = "หลักเกณฑ์การบริหารและพัฒนาทรัพยากรบุคคล";
	$hasPj52 = 1;			$hasPj52Txt = "รายงานผลการบริหารและพัฒนาทรัพยากรบุคคลประจำปี";
	$hasPj53 = 1;			$hasPj53Txt = "รายงานผลตรวจสอบภายใน";
	$hasPj54 = 1;			$hasPj54Txt = "แผนตรวจสอบภายใน";
	$hasPj55 = 1;			$hasPj55Txt = "ประมวลจริยธรรมสำหรับเจ้าหน้าที่ของรัฐ";
	$hasPj56 = 1;			$hasPj56Txt = "รายงานการบริหารจัดการความเสี่ยง";
	$hasPj57 = 1;			$hasPj57Txt = "นโยบายการบริหารจัดการความเสี่ยง";
	$hasPj58 = 1;			$hasPj58Txt = "รายงานการโอนเงินงบประมาณ";
	$hasPj59 = 1;			$hasPj59Txt = "ฐานข้อมูลเปิดภาครัฐ";
	
	$hasStaff = 1;			$hasStaffTxt = "ข้อมูลบุคลากร";
	$hasTravel = 1;			$hasTravelTxt = "แหล่งท่องเที่ยว / สถานที่สำคัญ";
	$hasOtop = 1;			$hasOtopTxt = "สินค้า OTOP";
	$hasSvg = 0;				$hasSvgTxt = "คู่มือประชาชน";
	$hasPool = 0;			$hasPollTxt = "poll";
	$hasWb = 1;				$hasWbTxt = "webboard เรื่องทั่วไป";
	$hasSrv = 0;				$hasSrvTxt = "จัดการผลสำรวจความพึงพอใจ";
	$hasSrv2 = 1;				$hasSrv2Txt = "ประมวลผลการสำรวจความพึงพอใจ";
	$hasSld = 1;				$hasSldTxt = "จัดการภาพสไลด์";
	$hasApl = 0;				$hasAplTxt = "จัดการเรื่องร้องเรียน";
	$hasCld = 0;				$hasCldTxt = "ปฏิทินกิจกรรม";
}
// survey front office
$surveyActive = 0;

// ita / lpa old version
$itaOldActive = 0;

// Text Backoffice สีดำ
$backofMenuDarkMode = 0;

// Close/Open Menu Special //
$kobt = 0;					$kobtTxt = "ระบบจัดการ มติ ก.อบต.จ.";
$ktsb = 0;					$ktsbTxt = "ระบบจัดการ มติ ก.ท.จ.";

// หมวด Hiden ข่าว
$hidNewsId = array(3, 7, 8, 9, 12);	

// หมวด neswAtvShow
$atvShow = array(1, 10, 11);	
//

$webNax="www.naxsolution.com";

$newshow = 1;
$wbshow = 1;

$today = getdate();
$trColorA="#67DAFE";
$trColorB="#C6EEFB";
$trColorC="#C6EEFB";
$trHT_A="#02BAF2";
$trHT_B="#02BAF2";
$trSHT_A="#67DAFE";
$trSHT_B="#67DAFE";
$trMouseOver="#FFA406";
$heading="67DAFE";
$heading_footer="A7A7A7";

$theMonth = array ("มกราคม"=>1, "กุมภาพันธ์"=>2, "มีนาคม"=>3, "เมษายน"=>4, "พฤษภาคม"=>5, "มิถุนายน"=>6, "กรกฎาคม"=>7, "สิงหาคม"=>8, "กันยายน"=>9, "ตุลาคม"=>10, "พฤศจิกายน"=>11, "ธันวาคม"=>12);
$theMonth_revs = array (1=>"มกราคม", 2=>"กุมภาพันธ์", 3=>"มีนาคม", 4=>"เมษายน", 5=>"พฤษภาคม", 6=>"มิถุนายน", 7=>"กรกฎาคม", 8=>"สิงหาคม", 9=>"กันยายน", 10=>"ตุลาคม", 11=>"พฤศจิกายน", 12=>"ธันวาคม");
		   
?>