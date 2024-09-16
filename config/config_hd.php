<?php // For All Web
$loginWebPage = '/admin';
$mailOrigin = (isset($mailOrigin)) ? $mailOrigin : array("m" => "sales@naxsolution.co.th", "p" => 'Kkv28loVe9$y%rtM');
$localSt = "https://www.localthai.org/";
$localStStorageFile = "https://fa2.naxapi.com/localthai.org/";
$maxfileWsize = 16;

// login
$login_timeout = 60 * 15;
$MAX_ALLOW_TOTP_FAIL = 5;

// search
$searchTimeout = 60 * 15;
$maxAllowSearch = 10;

// post
$postTimeout = 60 * 24;
$maxAllowPost = 10;

$itaOldActive = (isset($itaOldActive)) ? $itaOldActive : 1;

// staff for upload
$staffW_upload = 360;
$staffH_upload = 480;

// orgchart
$orgChartW_upload = 940;
$orgChartH_upload = 5200;

$kobTJ = ($kobt == 1 || $ktsb == 1) ? 1 : 0;
$kobtTxt = (isset($kobtTxt)) ? $kobtTxt : "ระบบจัดการ มติ ก.อบต.จ.";
$ktsbTxt = (isset($ktsbTxt)) ? $ktsbTxt : "ระบบจัดการ มติ ก.ท.จ.";
$kobTxt = ($kobt == 1) ? $kobtTxt : $ktsbTxt;

if (!isset($newsAtvTxt)) $newsAtvTxt = ($org == "stj") ?  "กิจกรรม สถ.จ." : "ข่าวกิจกรรม";
if (!isset($newsAtvSTxt)) $newsAtvSTxt = "ข่าวกิจกรรม";
if (!isset($newsPublicTxt)) $newsPublicTxt = "ข่าวประชาสัมพันธ์";
if (!isset($newsPublicStxt)) $newsPublicStxt = "ข่าวประชาสัมพันธ์";
if (!isset($newsPurcTxt)) $newsPurcTxt = "ข่าวจัดซื้อจัดจ้าง";
if (!isset($newsPurcStxt)) $newsPurcStxt = "ข่าวจัดซื้อจัดจ้าง";
if (!isset($newsStaffTxt)) $newsStaffTxt = "ข่าวสรรหาบุคลากร";
if (!isset($newsStaffStxt)) $newsStaffStxt = "ข่าวสรรหาบุคลากร";
if (!isset($newsNhsoTxt)) $newsNhsoTxt = "กองทุนหลักประกันสุขภาพ";
if (!isset($newsNhsoStxt)) $newsNhsoStxt = "หลักประกันสุขภาพ";
if (!isset($newsPriceTxt)) $newsPriceTxt = "ราคากลาง";
if (!isset($newsPriceStxt)) $newsPriceStxt = "ราคากลาง";
if (!isset($newsAnnPriceTxt)) $newsAnnPriceTxt = "ประกาศผลจัดซื้อจัดจ้าง";
if (!isset($newsAnnPriceStxt)) $newsAnnPriceStxt = "ประกาศผลจัดซื้อจัดจ้าง";
if (!isset($newsRpPurcTxt)) $newsRpPurcTxt = "รายงานสรุปผลการจัดซื้อจัดจ้าง(สขร.)";
if (!isset($newsRpPurcStxt)) $newsRpPurcStxt = "สขร.";
if (!isset($newsVdoTxt)) $newsVdoTxt = "VDO วีดิทัศน์";
if (!isset($newsVdoSTxt)) $newsVdoSTxt = "VDO วีดิทัศน์";
if (!isset($newsCclTxt)) $newsCclTxt = "กิจการสภา";
if (!isset($newsCclSTxt)) $newsCclSTxt = "กิจการสภา";
if (!isset($newsPcmTxt)) $newsPcmTxt = "ประกาศสอบราคา";
if (!isset($newsPcmStxt)) $newsPcmStxt = "ประกาศสอบราคา";
if (!isset($newsStaTxt)) $newsStaTxt = "หนังสือราชการ สถ.อ.";
if (!isset($newsStaStxt)) $newsStaStxt = "หนังสือราชการ สถ.อ.";
if (!isset($newsEgpTxt)) $newsEgpTxt = "ประกาศจากระบบ e-GP";
if (!isset($HeadlineTxt)) $HeadlineTxt = "ระบบจัดการ Head Line";

if (!isset($hasPjObtTxt)) $hasPjObtTxt = "ข้อบัญญัติ";
if (!isset($hasAnnRpTxt)) $hasAnnRpTxt = "รายงานผลการปฏิบัติงานประจำปี";
if (!isset($hasStjStt)) $hasStjStt = 0;
if (!isset($hasStjSttTxt)) $hasStjSttTxt = "ข้อมูลสถิติ";
if (!isset($hasRgn)) $hasRgn = 0;
if (!isset($hasRgnTxt)) $hasRgnTxt = "ข่าวภูมิภาค";
if (!isset($reportMtTxt)) $reportMtTxt = "รายงานการประชุมพนักงาน";
if (!isset($hasCtTxt)) $hasCtTxt = "ควบคุมภายใน";
if (!isset($hasDvlTxt)) $hasDvlTxt = "แผนพัฒนาท้องถิ่น";
if (!isset($hasAnualTxt)) $hasAnualTxt = "แผนการดำเนินงาน";
if (!isset($hasRsOprTxt)) $hasRsOprTxt = "รายงานผลการกำกับติดตาม";
if (!isset($hasStjKm)) $hasStjKm = 0;
if (!isset($hasStjKmTxt)) $hasStjKmTxt = "มุมKM ความรู้วิชาการ";
if (!isset($hasRls)) $hasRls = 0;
if (!isset($hasRlsTxt)) $hasRlsTxt = "ระเบียบ/กฏหมาย";
$hasIct = (isset($hasIct)) ? $hasIct : 0;
$hasIctTxt = (isset($hasIctTxt)) ? $hasIctTxt : "ศูนย์ข้อมูลข่าวสาร";
if (!isset($hasLnc)) $hasLnc = 0;
if (!isset($hasLncTxt)) $hasLncTxt = "ศูนย์ข้อมูลท้องถิ่น";
if (!isset($hasPurcTxt)) $hasPurcTxt = "แผนการจัดหาพัสดุ";
if (!isset($hasPlStaffTxt)) $hasPlStaffTxt = "แผนอัตรากำลัง";
if (!isset($hasNoticeTxt)) $hasNoticeTxt = "ผลการจัดซื้อ/จัดจ้าง";
if (!isset($hasResPurcTxt)) $hasResPurcTxt = "ประกาศ";
if (!isset($hasCmdTxt)) $hasCmdTxt = "คำสั่ง";
if (!isset($hasSdDocTxt)) $hasSdDocTxt = "หนังสือส่ง";
if (!isset($hasOffLetTxt)) $hasOffLetTxt = "หนังสือราชการ";
if (!isset($hasPvtTxt)) $hasPvtTxt = "งานป้องกันและบรรเทาสาธารณภัย";
if (!isset($hasCrptTxt)) $hasCrptTxt = "แผนป้องกันปราบปรามการทุจริต";
if (!isset($hasMgzTxt)) $hasMgzTxt = "วารสาร/จดหมายข่าว";
if (!isset($hasKmTxt)) $hasKmTxt = "การจัดการองค์ความรู้ KM";
if (!isset($hasPlcTxt)) $hasPlcTxt = "ที่พัก";
if (!isset($hasPfmTxt)) $hasPfmTxt = "รายงานผลการปฏิบัติราชการ";
if (!isset($hasEpyTxt)) $hasEpyTxt = "แผนอัตรากำลังพนักงานจ้าง";
if (!isset($hasHrTxt)) $hasHrTxt = "นโยบายการบริหารทรัพยากรบุคคล";
if (!isset($hasFnrTxt)) $hasFnrTxt = "รายงานทางการเงิน";
if (!isset($hasPttTxt)) $hasPttTxt = "ศูนย์จัดการเรื่องร้องเรียน";
if (!isset($hasPfm2Txt)) $hasPfm2Txt = "คู่มือการปฏิบัติงาน";
if (!isset($hasPjexTxt)) $hasPjexTxt = "ข้อบัญญัติงบประมาณรายจ่าย";
if (!isset($hasOthTxt)) $hasOthTxt = "แผนอื่นๆ";
if (!isset($hasIncTxt)) $hasIncTxt = "งบแสดงรายรับ-รายจ่าย";
if (!isset($haSks1Txt)) $haSks1Txt = "สรุปผลการจัดซื้อจัดจ้างหรือการจัดหาพัสดุรายเดือน (สขร.1)";
if (!isset($haSksTxt)) $haSksTxt = "รายงานผลการจัดซื้อจัดจ้างหรือการจัดหาพัสดุรายปี (สขร.)";
if (!isset($hasCeoTxt)) $hasCeoTxt = "รายงานการประชุมผู้บริหาร";
if (!isset($hasCcmTxt)) $hasCcmTxt = "รายงานการประชุมสภา";
if (!isset($hasOtrTxt)) $hasOtrTxt = "รายงานอื่นๆ";
$hasStt = (isset($hasStt)) ? $hasStt : 0;
$hasSttTxt = (isset($hasSttTxt)) ? $hasSttTxt : "สถิติ";
if (!isset($hasFaqTxt)) $hasFaqTxt = "คำถามที่พบบ่อย";
if (!isset($hasIfc)) $hasIfc = 0;
if (!isset($hasIfcTxt)) $hasIfcTxt = "ข้อมูลข่าวสารเพื่อสร้างการรับรู้สู่ชุมชน";
$hasHlp = (isset($hasHlp)) ? $hasHlp : 0;
$hasHlpTxt = (isset($hasHlpTxt)) ? $hasHlpTxt : "ศูนย์ช่วยเหลือประชาชน";
$hasLaw = (isset($hasLaw)) ? $hasLaw : 0;
$hasLawTxt = (isset($hasLawTxt)) ? $hasLawTxt : "กฎหมายที่เกี่ยวข้อง";
$hasAtt = (isset($hasAtt)) ? $hasAtt : 0;
$hasAttTxt = (isset($hasAttTxt)) ? $hasAttTxt : "อำนาจหน้าที่";
$hasSev = (isset($hasSev)) ? $hasSev : 0;
$hasSevTxt = (isset($hasSevTxt)) ? $hasSevTxt : "คู่มือหรือมาตรฐานการให้บริการ";
$hasAtc = (isset($hasAtc)) ? $hasAtc : 0;
$hasAtcTxt = (isset($hasAtcTxt)) ? $hasAtcTxt : "การดำเนินการเพื่อป้องกันการทุจริต";
$hasAdt = (isset($hasAdt)) ? $hasAdt : 0;
$hasAdtTxt = (isset($hasAdtTxt)) ? $hasAdtTxt : "การส่งเสริมความโปร่งใสและป้องกันการทุจริตภายในหน่วยงาน";
$hasPlt = (isset($hasPlt)) ? $hasPlt : 0;
$hasPltTxt = (isset($hasPltTxt)) ? $hasPltTxt : "โครงการอนุรักษ์พันธุกรรมพืช อันเนื่องมาจากพระราชดำริ สมเด็จพระเทพรัตนราชสุดาฯ สยามบรมราชกุมารี";

if (!isset($hasPj50)) $hasPj50 = ($org == "stj") ? 0 : 1;
$hasPj50Txt = (isset($hasPj50Txt)) ? $hasPj50Txt : "การดำเนินการตามนโยบายการบริหารทรัพยากรบุคคล";
if (!isset($hasPj51)) $hasPj51 = ($org == "stj") ? 0 : 1;
$hasPj51Txt = (isset($hasPj51Txt)) ? $hasPj51Txt : "หลักเกณฑ์การบริหารและพัฒนาทรัพยากรบุคคล";
if (!isset($hasPj52)) $hasPj52 = ($org == "stj") ? 0 : 1;
$hasPj52Txt = (isset($hasPj52Txt)) ? $hasPj52Txt : "รายงานผลการบริหารและพัฒนาทรัพยากรบุคคลประจำปี";
if (!isset($hasPj53)) $hasPj53 = ($org == "stj") ? 0 : 1;
$hasPj53Txt = (isset($hasPj53Txt)) ? $hasPj53Txt : "รายงานผลตรวจสอบภายใน";
if (!isset($hasPj54)) $hasPj54 = ($org == "stj") ? 0 : 1;
$hasPj54Txt = (isset($hasPj54Txt)) ? $hasPj54Txt : "แผนตรวจสอบภายใน";
if (!isset($hasPj55)) $hasPj55 = ($org == "stj") ? 0 : 1;
$hasPj55Txt = (isset($hasPj55Txt)) ? $hasPj55Txt : "ประมวลจริยธรรมสำหรับเจ้าหน้าที่ของรัฐ";
if (!isset($hasPj56)) $hasPj56 = ($org == "stj") ? 0 : 1;
$hasPj56Txt = (isset($hasPj56Txt)) ? $hasPj56Txt : "รายงานการบริหารจัดการความเสี่ยง";
if (!isset($hasPj57)) $hasPj57 = ($org == "stj") ? 0 : 1;
$hasPj57Txt = (isset($hasPj57Txt)) ? $hasPj57Txt : "นโยบายการบริหารจัดการความเสี่ยง";
if (!isset($hasPj58)) $hasPj58 = ($org == "stj") ? 0 : 1;
$hasPj58Txt = (isset($hasPj58Txt)) ? $hasPj58Txt : "รายงานการโอนเงินงบประมาณ";
if (!isset($hasPj59)) $hasPj59 = ($org == "stj") ? 0 : 1;
$hasPj59Txt = (isset($hasPj59Txt)) ? $hasPj59Txt : "ฐานข้อมูลเปิดภาครัฐ";

if (!isset($newsEgpTxt)) $newsEgpTxt = "ประกาศจากระบบ e-GP";
if (!isset($HeadlineTxt)) $HeadlineTxt = "ระบบจัดการ Head Line";
$hasSld = (isset($hasSld)) ? $hasSld : 0;
$hasSldTxt = (isset($hasSldTxt)) ? $hasSldTxt : "จัดการภาพสไลด์";
$hasCld = (isset($hasCld)) ? $hasCld : 0;
$hasPopup = (isset($hasPopup)) ? $hasPopup : 1;
$hasPopupTxt = (isset($hasPopupTxt)) ? $hasPopupTxt : "จัดการ Pop Up/Banner";
$hasCldTxt = (isset($hasCldTxt)) ? $hasCldTxt : "ปฏิทินกิจกรรม";

if (!isset($hasStaffTxt)) $hasStaffTxt = "ข้อมูลบุคลากร";
if (!isset($hasTravelTxt)) $hasTravelTxt = "แหล่งท่องเที่ยว / สถานที่สำคัญ";
if (!isset($hasOtopTxt)) $hasOtopTxt = "สินค้า OTOP";
if (!isset($hasSvgTxt)) $hasSvgTxt = "คู่มือประชาชน";
if (!isset($hasPollTxt)) $hasPollTxt = "poll";
if (!isset($hasWbTxt)) $hasWbTxt = "webboard เรื่องทั่วไป";
if (!isset($hasSrvTxt)) $hasSrvTxt = "จัดการผลสำรวจความพึงพอใจ";
if (!isset($hasWbTxt)) $hasWbTxt = "webboard เรื่องทั่วไป";
$hasSrv2 = (isset($hasSrv2)) ? $hasSrv2 : 0;
$hasSrv2Txt = (isset($hasSrv2Txt)) ? $hasSrv2Txt : "ประมวลผลการสำรวจความพึงพอใจ";
$hasPdpa = (isset($hasPdpa)) ? $hasPdpa : 1;
$hasPdpaTxt = (isset($hasPdpaTxt)) ? $hasPdpaTxt : "PDPA";
$hasItaLpa = (isset($hasItaLpa)) ? $hasItaLpa : 1;
$hasItaLpaTxt = (isset($hasItaLpaTxt)) ? $hasItaLpaTxt : "ตรวจประเมิน ITA LPA";
$hasOrgchart = (isset($hasOrgchart)) ? $hasOrgchart : 1;
$hasOrgchartTxt = (isset($hasOrgchartTxt)) ? $hasOrgchartTxt : "โครงสร้างส่วนราชการ";
$hasInfo = (isset($hasInfo)) ? $hasInfo : 1;
$hasInfoTxt = (isset($hasInfoTxt)) ? $hasInfoTxt : "ข้อมูลหน่วยงาน";

// for stj
$hasGovdoc = (isset($hasGovdoc)) ? $hasGovdoc : 1;
$hasGovdocTxt = (isset($hasGovdocTxt)) ? $hasGovdocTxt : "หนังสือราชการ สถ.จ.";
$hasGovStj = (isset($hasGovStj)) ? $hasGovStj : 1;
$hasGovStjTxt = (isset($hasGovStjTxt)) ? $hasGovStjTxt : "รายงานการประชุมผู้บริหาร";
$hasGovKtj = (isset($hasGovKtj)) ? $hasGovKtj : 1;
$hasGovKtjTxt = (isset($hasGovKtjTxt)) ? $hasGovKtjTxt : "มติที่ประชุม ก.ท.จ.";
$hasGovKobt = (isset($hasGovKobt)) ? $hasGovKobt : 1;
$hasGovKobtTxt = (isset($hasGovKobtTxt)) ? $hasGovKobtTxt : "มติที่ประชุม ก.อบต.";

if (!isset($backofMenuDarkMode)) $backofMenuDarkMode = 0;
if ($backofMenuDarkMode == 0) $backofMenuTextColor = "#FFFFFF";
else $backofMenuTextColor = "#333333";

$newsArr = array('name' => array("ข่าวสาร", $newsAtvTxt, $newsPublicTxt, $newsPurcTxt, $newsStaffTxt, $kobTxt, 
								$newsNhsoTxt, $newsPriceTxt, $newsAnnPriceTxt, $newsRpPurcTxt, $newsVdoTxt,
								$newsCclTxt, $newsPcmTxt, $newsStaTxt),
				
				'shortName' => array("ข่าวสาร", $newsAtvSTxt, $newsPublicStxt, $newsPurcStxt, $newsStaffStxt, $kobTxt, 
								$newsNhsoStxt, $newsPriceStxt, $newsAnnPriceStxt, $newsRpPurcStxt, $newsVdoSTxt,
								$newsCclSTxt, $newsPcmStxt, $newsStaStxt),
				
				'nameId' => array(0, 1, 2, 3, 4, 5,
								6, 7, 8, 9, 10, 
								11, 12, 13),
				
				'on' => array(0, $newsAtv, $newsPublic, $newsPurc, $newsStaff, $kobTJ, 
								$newsNhso, $newsPrice, $newsAnnPrice, $newsRpPurc, $newsVdo, 
								$newsCcl, $newsPcm, $newsSta)
				);

						
$projArr = array('name' => array(0, $hasPjObtTxt, $hasAnnRpTxt, $hasStjSttTxt, $hasRgnTxt, $reportMtTxt,
								$hasCtTxt, $hasDvlTxt, $hasAnualTxt, $hasRsOprTxt, $hasStjKmTxt,
								$hasRlsTxt, $hasIctTxt, $hasLncTxt, $hasPurcTxt, $hasPlStaffTxt,
								$hasResPurcTxt, $hasNoticeTxt, $hasCmdTxt, $hasSdDocTxt, $hasOffLetTxt,
								$hasPvtTxt, $hasCrptTxt, $hasMgzTxt, $hasKmTxt, $hasPlcTxt,
								$hasPfmTxt, $hasEpyTxt, $hasHrTxt, $hasFnrTxt, $hasPttTxt,
								$hasPfm2Txt, $hasPjexTxt, $hasOthTxt, $hasIncTxt, $haSks1Txt,
								$haSksTxt, $hasCeoTxt, $hasCcmTxt, $hasOtrTxt, $hasSttTxt,
								$hasFaqTxt, $hasIfcTxt, $hasHlpTxt, $hasLawTxt, $hasAttTxt,
								$hasSevTxt, $hasAtcTxt, $hasAdtTxt, $hasPltTxt, $hasPj50Txt, 
								$hasPj51Txt, $hasPj52Txt, $hasPj53Txt, $hasPj54Txt, $hasPj55Txt, 
								$hasPj56Txt, $hasPj57Txt, $hasPj58Txt, $hasPj59Txt),
				
				'nameId' => array(0, 1, 2, 3, 4, 5,
								6, 7, 8, 9 ,10,
								11, 12, 13, 14, 15, 
								16, 17, 18, 19, 20,
								21, 22, 23, 24, 25,
								26, 27, 28, 29, 30,
								31, 32, 33, 34, 35,
								36, 37, 38, 39, 40,
								41, 42, 43, 44, 45,
								46, 47, 48, 49, 50,
								51, 52, 53, 54, 55,
								56, 57, 58, 59),
				
				'on' => array(0, $hasPjObt, $hasAnnRp, $hasStjStt, $hasRgn, $reportMt,
								$hasCt, $hasDvl, $hasAnual, $hasRsOpr, $hasStjKm,
								$hasRls, $hasIct, $hasLnc, $hasPurc, $hasPlStaff,
								$hasResPurc, $hasNotice, $hasCmd, $hasSdDoc, $hasOffLet,
								$hasPvt, $hasCrpt, $hasMgz, $hasKm, $hasPlc,
								$hasPfm, $hasEpy, $hasHr, $hasFnr, $hasPtt,
								$hasPfm2, $hasPjex, $hasOth, $hasInc, $haSks1,
								$haSks, $hasCeo, $hasCcm, $hasOtr, $hasStt,
								$hasFaq, $hasIfc, $hasHlp, $hasLaw, $hasAtt,
								$hasSev, $hasAtc, $hasAdt, $hasPlt, $hasPj50, 
								$hasPj51, $hasPj52, $hasPj53, $hasPj54, $hasPj55,
								$hasPj56, $hasPj57, $hasPj58, $hasPj59)
				);

$hEtcArr = array( 'name' => array($newsEgpTxt, $HeadlineTxt, $hasStaffTxt, $hasTravelTxt, $hasOtopTxt, $hasSvgTxt, 
								$hasPollTxt, $hasWbTxt, $hasSrvTxt, $hasSrv2Txt, $hasSldTxt, 
								$hasCldTxt, $hasPdpaTxt, $hasItaLpaTxt, $hasOrgchartTxt, $hasPopupTxt,
								$hasInfoTxt),
											
				'nameId' => array(0, 1, 2, 3, 4, 5,
								6, 7, 8, 9, 10,
								11, 12, 13, 14, 15,
								16),

				'on' => array($newsEgp, $Headline, $hasStaff, $hasTravel, $hasOtop, $hasSvg, 
								$hasPool, $hasWb, $hasSrv, $hasSrv2, $hasSld, 
								$hasCld, $hasPdpa, $hasItaLpa, $hasOrgchart, $hasPopup,
								$hasInfo),
									
				'hLnk' => array('manage_egp.php', 'manage_headline.php', 'manage_staff.php?dptId=1', 'manage_travel.php', 'manage_otop.php','manage_serviceG.php', 
								'manage_poll.php', 'manage_webboard.php?id=1', 'manage_survey.php', 'select.php', 'manage_slide.php',
								'manage_calendar.php', 'manage_policy.php', 'manage_chk_web2.php?gId=1', 'manage_orgchart.php', 'bof_v2/manage_popups.php', 'bof_v2/customer_info.php'),
									
				'permit' => array('egp', 'hl1', 'st1', 'tv1', 'ot1', 'svg', 
								'po1', 'wb1', 'srv1', 'srv2', 's1', 
								'c1', 'p1', 'chk1', 'o1', 'pb', 'ct')								
				);

$govStjArr = array('name' => array(0, $hasGovdocTxt, $hasGovStjTxt, $hasGovKtjTxt, $hasGovKobtTxt),

				'nameId' => array(0, 1, 2, 3, 4),

				'on' => array(0, $hasGovdoc, $hasGovStj, $hasGovKtj, $hasGovKobt)
);

$policyArr = array("นโยบายเว็บไซต์", "นโยบายคุ้มครองข้อมูลส่วนบุคคล", "นโยบายการรักษาความมั่นคงปลอดภัยเว็บไซต์", "นโยบายคุกกี้");

$linkOptArrRev2 = array(
	1 => array('name' => "อ่างทอง", 'w' => 680, 'h' => 1260, 'f' => "angthong/angthong_link_opt.php"),
	2 => array('name' => "อยุธยา", 'w' => 680, 'h' => 2910, 'f' => "ayutthaya/ayutthaya_link_opt.php"),
	3 => array('name' => "บุรีรัมย์", 'w' => 680, 'h' => 3930, 'f' => "buriram/buriram_link_opt.php"),
	4 => array('name' => "ชัยนาท", 'w' => 680, 'h' => 1400, 'f' => "chainat/chainat_link_opt.php"),
	5 => array('name' => "เชียงใหม่", 'w' => 680, 'h' => 4150, 'f' => "chiangmai/chiangmai_link_opt.php"),
	6 => array('name' => "ลำพูน", 'w' => 680, 'h' => 1380, 'f' => "lamphun/lamphun_link_opt.php"),
	7 => array('name' => "ลพบุรี", 'w' => 680, 'h' => 2230, 'f' => "lopburi/lopburi_link_opt.php"),
	8 => array('name' => "น่าน", 'w' => 680, 'h' => 2220, 'f' => "nan/nan_link_opt.php"),
	9 => array('name' => "นครปฐม", 'w' => 680, 'h' => 1850, 'f' => "nakhonpathom/nakhonpathom_link_opt.php"),
	10 => array('name' => "นครสวรรค์", 'w' => 680, 'h' => 2760, 'f' => "nakhonsawan/nksawan_link_opt.php"),
	11 => array('name' => "สุพรรณบุรี", 'w' => 680, 'h' => 2140, 'f' => "suphan/suphan_link_opt.php"),
	12 => array('name' => "ตาก", 'w' => 680, 'h' => 1440, 'f' => "tak/tak_link_opt.php"),
	13 => array('name' => "อุทัยธานี", 'w' => 680, 'h' => 1400, 'f' => "uthai/uthai_link_opt.php"),
	14 => array('name' => "อุตรดิตถ์", 'w' => 680, 'h' => 1650, 'f' => "utdit/utdit_link_opt.php"),
	15 => array('name' => "ระยอง", 'w' => 680, 'h' => 1410, 'f' => "rayong/rayong_link_opt.php"),
	16 => array('name' => "หนองบัวลำภู", 'w' => 680, 'h' => 1280, 'f' => "nongbualampoo/nongbualampoo_link_opt.php"),
	17 => array('name' => "ร้อยเอ็ด", 'w' => 680, 'h' => 3650, 'f' => "roiet/roiet_link_opt.php"),
	18 => array('name' => "ยโสธร", 'w' => 680, 'h' => 1680, 'f' => "yasothon/yasothon_link_opt.php"),
	19 => array('name' => "มหาสารคาม", 'w' => 680, 'h' => 2540, 'f' => "mahasarakham/mahasarakham_link_opt.php"),
	20 => array('name' => "เลย", 'w' => 680, 'h' => 2150, 'f' => "loei/loei_link_opt.php"),
	21 => array('name' => "อุบลราชธานี", 'w' => 680, 'h' => 4420, 'f' => "ubonratchathani/ubon_link_opt.php"),
	22 => array('name' => "สระแก้ว", 'w' => 680, 'h' => 1440, 'f' => "sakaeo/sakaeo_link_opt.php"),
	23 => array('name' => "ปราจีนบุรี", 'w' => 680, 'h' => 1380, 'f' => "prachinburi/prachinburi_link_opt.php"),
	24 => array('name' => "กาญจนบุรี", 'w' => 680, 'h' => 2300, 'f' => "kanchanaburi/kanchanaburi_link_opt.php"),
	25 => array('name' => "เชียงราย", 'w' => 680, 'h' => 2890, 'f' => "chiangrai/chiangrai_link_opt.php"),
	26 => array('name' => "จันทบุรี", 'w' => 680, 'h' => 1810, 'f' => "chanthaburi/chanthaburi_link_opt.php"),
	27 => array('name' => "นครนายก", 'w' => 680, 'h' => 910, 'f' => "nakhonnayok/nakhonnayok_link_opt.php"),
	28 => array('name' => "สมุทรปราการ", 'w' => 680, 'h' => 1120, 'f' => "samutprakan/samutprakan_link_opt.php"),
	29 => array('name' => "ขอนแก่น", 'w' => 680, 'h' => 4300, 'f' => "khonkaen/khonkaen_link_opt.php"),
	30 => array('name' => "เพชรบุรี", 'w' => 680, 'h' => 1530, 'f' => "phetchaburi/phetchaburi_link_opt.php"),
	31 => array('name' => "ชลบุรี", 'w' => 680, 'h' => 2100, 'f' => "chonburi/chonburi_link_opt.php"),
	32 => array('name' => "ชัยภูมิ", 'w' => 680, 'h' => 2800, 'f' => "chaiyaphum/chaiyapum_link_opt.php"),
	33 => array('name' => "ปทุมธานี", 'w' => 680, 'h' => 1320, 'f' => "pathumthani/pathum_link_opt.php"),
	34 => array('name' => "กำแพงเพชร", 'w' => 680, 'h' => 1820, 'f' => "kamphangphet/kamphangphet_link_opt.php"),
	35 => array('name' => "ลำปาง", 'w' => 680, 'h' => 2180, 'f' => "lumpang/lumpang_link_opt.php"),
	36 => array('name' => "หนองคาย", 'w' => 680, 'h' => 1470, 'f' => "nongkhai/nongkhai_link_opt.php"),
	37 => array('name' => "นนทบุรี", 'w' => 680, 'h' => 1010, 'f' => "nonthaburi/non_link_opt.php"),
	38 => array('name' => "เพชรบูรณ์", 'w' => 680, 'h' => 2200, 'f' => "phetchabon/phetchabon_link_opt.php"),
	39 => array('name' => "พิจิตร", 'w' => 680, 'h' => 2060, 'f' => "phichit/pichit_link_opt.php"),
	40 => array('name' => "แพร่", 'w' => 680, 'h' => 1590, 'f' => "phrae/phrae_link_opt.php"),
	41 => array('name' => "พิษณุโลก", 'w' => 680, 'h' => 1850, 'f' => "pitlok/pitlok_link_opt.php"),
	42 => array('name' => "สระบุรี", 'w' => 680, 'h' => 2180, 'f' => "saraburi/saraburi_link_opt.php"),
	43 => array('name' => "สิงห์บุรี", 'w' => 680, 'h' => 1010, 'f' => "singburi/singburi_link_opt.php"),
	44 => array('name' => "ศรีสะเกษ", 'w' => 680, 'h' => 3930, 'f' => "sisaket/sisaket_link_opt.php"),
	45 => array('name' => "สุโขทัย", 'w' => 680, 'h' => 1700, 'f' => "sukhothai/sukhothai_link_opt.php"),
	46 => array('name' => "ฉะเชิงเทรา", 'w' => 680, 'h' => 2010, 'f' => "chacheongsao/chacheongsao_link_opt.php"),
	47 => array('name' => "ประจวบคีรีขันธ์", 'w' => 680, 'h' => 1320, 'f' => "prachuap khiri khan/prachuap_link_opt.php"),
	48 => array('name' => "ตราด", 'w' => 680, 'h' => 1110, 'f' => "trat/trat_link_opt.php.php"),
	49 => array('name' => "นครราชสีมา", 'w' => 680, 'h' => 5980, 'f' => "nkrachasrima/nkrachasrima_link_opt.php"),
	50 => array('name' => "ราชบุรี", 'w' => 680, 'h' => 2020, 'f' => "ratchaburi/ratchaburi_link_opt.php"),
	51 => array('name' => "สุรินทร์", 'w' => 680, 'h' => 3100, 'f' => "surin/surin_link_opt.php"),
	52 => array('name' => "นครพนม", 'w' => 680, 'h' => 2060, 'f' => "nkphanom/nkphanom_link_opt.php"),
	53 => array('name' => "สตูล", 'w' => 680, 'h' => 1050, 'f' => "satun/satun_link_opt.php"),
	54 => array('name' => "นราธิวาส", 'w' => 680, 'h' => 1940, 'f' => "narathiwat/narathiwat_link_opt.php"),
	55 => array('name' => "แม่ฮ่องสอน", 'w' => 680, 'h' => 1150, 'f' => "maehongson/maehongson_link_opt.php"),
	56 => array('name' => "ชุมพร", 'w' => 680, 'h' => 1530, 'f' => "chumphon/chumphon_link_opt.php"),
	57 => array('name' => "นครศรีธรรมราช", 'w' => 680, 'h' => 3750, 'f' => "nakhonsithammarat/nakhonsithammarat_link_opt.php"),
	58 => array('name' => "อำนาจเจริญ", 'w' => 680, 'h' => 1290, 'f' => "amnatcharoen/amnatcharoen_link_opt.php"),
	59 => array('name' => "กาฬสินธุ์", 'w' => 680, 'h' => 3040, 'f' => "kalasin/kalasin_link_opt.php"),
	60 => array('name' => "พะเยา", 'w' => 680, 'h' => 1550, 'f' => "phayao/phayao_link_opt.php"),
	61 => array('name' => "ตรัง", 'w' => 680, 'h' => 2030, 'f' => "trang/trang_link_opt.php"),
	62 => array('name' => "อุดรธานี", 'w' => 680, 'h' => 3530, 'f' => "udonthani/udonthani_link_opt.php"),
	63 => array('name' => "บึงกาฬ", 'w' => 680, 'h' => 1320, 'f' => "buengkan/buengkan_link_opt.php")
);

?>