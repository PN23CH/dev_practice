<?php
// require_once __DIR__ . "/../lib/utilty.php";

$loginWebPageV2 = '/bof_v2.1/admin';
$logoutWebPageV2 = '/bof_v2.1/logout';

// $csrfBackof = new CSRF();
// $logManagerBackof = new LogManager($mysqli);
// $banManagerBackof = new IPBanManager($mysqli, $logManagerBackof);
// $adminLogManagerBackof = new AdminLogManager($mysqli);

$gender = [
    0 => ['name' => 'guest', 'icon' => '/bof_v2.1/public/svg/avatar_guest.svg'],
    1 => ['name' => 'ชาย', 'icon' => '/bof_v2.1/public/svg/avatar_male.svg'],
    2 => ['name' => 'หญิง', 'icon' => '/bof_v2.1/public/svg/avatar_female.svg'],
    3 => ['name' => 'ไม่ระบุเพศ', 'icon' => '/bof_v2.1/public/svg/avatar_non_binary.svg'],
];

$urgent = ["", "ทั่วไป", "ด่วน", "ด่วนมาก", "ด่วนที่สุด"];

$popupArray = [
    1 => "ป๊อปอัพกลาง",
    2 => "ป๊อปอัพขวา",
    3 => "แบนเนอร์"
];

$newsArrRev2 = [
    0 => ['originname' => "ข่าวสาร", 'name' => "ข่าวสาร", 'shortName' => "ข่าวสาร", 'on' => 0],
    1 => ['originname' => "กิจกรรม", 'name' => $newsAtvTxt, 'shortName' => $newsAtvSTxt, 'on' => $newsAtv],
    2 => ['originname' => "ข่าวประชาสัมพันธ์", 'name' => $newsPublicTxt, 'shortName' => $newsPublicStxt, 'on' => $newsPublic],
    3 => ['originname' => "ข่าวจัดซื้อจัดจ้าง", 'name' => $newsPurcTxt, 'shortName' => $newsPurcStxt, 'on' => $newsPurc],
    4 => ['originname' => "ข่าวสรรหาบุคลากร", 'name' => $newsStaffTxt, 'shortName' => $newsStaffStxt, 'on' => $newsStaff],
    5 => ['originname' => "มติ ก.อบต.จ.", 'name' => $kobTxt, 'shortName' => $kobTxt, 'on' => $kobTJ],
    6 => ['originname' => "กองทุนหลักประกันสุขภาพ", 'name' => $newsNhsoTxt, 'shortName' => $newsNhsoStxt, 'on' => $newsNhso],
    7 => ['originname' => "ราคากลาง", 'name' => $newsPriceTxt, 'shortName' => $newsPriceStxt, 'on' => $newsPrice],
    8 => ['originname' => "ผลการจัดซื้อจัดจ้าง", 'name' => $newsAnnPriceTxt, 'shortName' => $newsAnnPriceStxt, 'on' => $newsAnnPrice],
    9 => ['originname' => "รายงานสรุปผลการจัดซื้อจัดจ้าง(สขร.)", 'name' => $newsRpPurcTxt, 'shortName' => $newsRpPurcStxt, 'on' => $newsRpPurc],
    10 => ['originname' => "VDO วีดิทัศน์", 'name' => $newsVdoTxt, 'shortName' => $newsVdoSTxt, 'on' => $newsVdo],
    11 => ['originname' => "งานกิจการสภา", 'name' => $newsCclTxt, 'shortName' => $newsCclSTxt, 'on' => $newsCcl],
    12 => ['originname' => "ประกาศสอบราคา", 'name' => $newsPcmTxt, 'shortName' => $newsPcmStxt, 'on' => $newsPcm],
    13 => ['originname' => "ข่าวสารจาก สถ.อ.", 'name' => $newsStaTxt, 'shortName' => $newsStaStxt, 'on' => $newsSta]
];

$projArrRev2 = [
    0 => ['originname' => 0, 'name' => 0, 'on' => 0],
    1 => ['originname' => "ข้อบัญญัติ / เทศบัญญัติ", 'name' => $hasPjObtTxt, 'on' => $hasPjObt],
    2 => ['originname' => "รายงานผลการปฏิบัติงานประจำปี", 'name' => $hasAnnRpTxt, 'on' => $hasAnnRp],
    3 => ['originname' => "ข้อมูลสถิติ", 'name' => $hasStjSttTxt, 'on' => $hasStjStt],
    4 => ['originname' => "ข่าวภูมิภาค", 'name' => $hasRgnTxt, 'on' => $hasRgn],
    5 => ['originname' => "รายงานการประชุมพนักงาน", 'name' => $reportMtTxt, 'on' => $reportMt],
    6 => ['originname' => "ควบคุมภายใน", 'name' => $hasCtTxt, 'on' => $hasCt],
    7 => ['originname' => "แผนพัฒนาท้องถิ่น", 'name' => $hasDvlTxt, 'on' => $hasDvl],
    8 => ['originname' => "แผนการดำเนินงาน", 'name' => $hasAnualTxt, 'on' => $hasAnual],
    9 => ['originname' => "รายงานผลการกำกับติดตาม", 'name' => $hasRsOprTxt, 'on' => $hasRsOpr],
    10 => ['originname' => "มุม KM ความรู้วิชาการ", 'name' => $hasStjKmTxt, 'on' => $hasStjKm],
    11 => ['originname' => "ระเบียบ/กฏหมาย", 'name' => $hasRlsTxt, 'on' => $hasRls],
    12 => ['originname' => "ศูนย์ข้อมูลข่าวสาร", 'name' => $hasIctTxt, 'on' => $hasIct],
    13 => ['originname' => "ศูนย์ข้อมูลท้องถิ่น", 'name' => $hasLncTxt, 'on' => $hasLnc],
    14 => ['originname' => "แผนการจัดหาพัสดุ", 'name' => $hasPurcTxt, 'on' => $hasPurc],
    15 => ['originname' => "แผนอัตรากำลัง", 'name' => $hasPlStaffTxt, 'on' => $hasPlStaff],
    16 => ['originname' => "ผลการจัดซื้อ/จัดจ้าง", 'name' => $hasResPurcTxt, 'on' => $hasResPurc],
    17 => ['originname' => "ประกาศ", 'name' => $hasNoticeTxt, 'on' => $hasNotice],
    18 => ['originname' => "คำสั่ง", 'name' => $hasCmdTxt, 'on' => $hasCmd],
    19 => ['originname' => "หนังสือส่ง", 'name' => $hasSdDocTxt, 'on' => $hasSdDoc],
    20 => ['originname' => "หนังสือราชการ", 'name' => $hasOffLetTxt, 'on' => $hasOffLet],
    21 => ['originname' => "งานป้องกันและบรรเทาสาธารณภัย", 'name' => $hasPvtTxt, 'on' => $hasPvt],
    22 => ['originname' => "แผนป้องกันปราบปรามการทุจริต", 'name' => $hasCrptTxt, 'on' => $hasCrpt],
    23 => ['originname' => "วารสาร/จดหมายข่าว", 'name' => $hasMgzTxt, 'on' => $hasMgz],
    24 => ['originname' => "การจัดการองค์ความรู้ KM", 'name' => $hasKmTxt, 'on' => $hasKm],
    25 => ['originname' => "ที่พัก", 'name' => $hasPlcTxt, 'on' => $hasPlc],
    26 => ['originname' => "รายงานผลการปฏิบัติราชการ", 'name' => $hasPfmTxt, 'on' => $hasPfm],
    27 => ['originname' => "แผนอัตรากำลังพนักงานจ้าง", 'name' => $hasEpyTxt, 'on' => $hasEpy],
    28 => ['originname' => "การบริหารและพัฒนาทรัพยากรบุคคล", 'name' => $hasHrTxt, 'on' => $hasHr],
    29 => ['originname' => "รายงานทางการเงิน", 'name' => $hasFnrTxt, 'on' => $hasFnr],
    30 => ['originname' => "ศูนย์จัดการเรื่องร้องเรียน", 'name' => $hasPttTxt, 'on' => $hasPtt],
    31 => ['originname' => "คู่มือการปฏิบัติงาน", 'name' => $hasPfm2Txt, 'on' => $hasPfm2],
    32 => ['originname' => "เทศบัญญัติงบประมาณรายจ่าย", 'name' => $hasPjexTxt, 'on' => $hasPjex],
    33 => ['originname' => "แผนอื่นๆ", 'name' => $hasOthTxt, 'on' => $hasOth],
    34 => ['originname' => "งบแสดงรายรับ-รายจ่าย", 'name' => $hasIncTxt, 'on' => $hasInc],
    35 => ['originname' => "สรุปผลการจัดซื้อจัดจ้างหรือการจัดหาพัสดุรายเดือน สขร.1", 'name' => $haSks1Txt, 'on' => $haSks1],
    36 => ['originname' => "รายงานผลการจัดซื้อจัดจ้างหรือการจัดหาพัสดุรายปี สขร.", 'name' => $haSksTxt, 'on' => $haSks],
    37 => ['originname' => "รายงานการประชุมผู้บริหาร", 'name' => $hasCeoTxt, 'on' => $hasCeo],
    38 => ['originname' => "รายงานการประชุมสภา", 'name' => $hasCcmTxt, 'on' => $hasCcm],
    39 => ['originname' => "รายงานอื่นๆ", 'name' => $hasOtrTxt, 'on' => $hasOtr],
    40 => ['originname' => "สถิติ", 'name' => $hasSttTxt, 'on' => $hasStt],
    41 => ['originname' => "คำถามที่พบบ่อย", 'name' => $hasFaqTxt, 'on' => $hasFaq],
    42 => ['originname' => "ข้อมูลข่าวสารเพื่อสร้างการรับรู้สู่ชุมชน", 'name' => $hasIfcTxt, 'on' => $hasIfc],
    43 => ['originname' => "ศูนย์ช่วยเหลือประชาชน", 'name' => $hasHlpTxt, 'on' => $hasHlp],
    44 => ['originname' => "กฎหมายที่เกี่ยวข้อง", 'name' => $hasLawTxt, 'on' => $hasLaw],
    45 => ['originname' => "อำนาจหน้าที่", 'name' => $hasAttTxt, 'on' => $hasAtt],
    46 => ['originname' => "คู่มือหรือมาตรฐานการให้บริการ", 'name' => $hasSevTxt, 'on' => $hasSev],
    47 => ['originname' => "การดำเนินการเพื่อป้องกันการทุจริต", 'name' => $hasAtcTxt, 'on' => $hasAtc],
    48 => ['originname' => "การส่งเสริมความโปร่งใสและป้องกันการทุจริตภายในหน่วยงาน", 'name' => $hasAdtTxt, 'on' => $hasAdt],
    49 => ['originname' => "โครงการอนุรักษ์พันธุกรรมพืช อันเนื่องมาจากพระราชดำริ สมเด็จพระเทพรัตนราชสุดาฯ สยามบรมราชกุมารี", 'name' => $hasPltTxt, 'on' => $hasPlt],
    50 => ['originname' => "การดำเนินการตามนโยบายการบริหารทรัพยากรบุคคล", 'name' => $hasPj50Txt, 'on' => $hasPj50],
    51 => ['originname' => "หลักเกณฑ์การบริหารและพัฒนาทรัพยากรบุคคล", 'name' => $hasPj51Txt, 'on' => $hasPj51],
    52 => ['originname' => "รายงานผลการบริหารและพัฒนาทรัพยากรบุคคลประจำปี", 'name' => $hasPj52Txt, 'on' => $hasPj52],
    53 => ['originname' => "รายงานผลตรวจสอบภายใน", 'name' => $hasPj53Txt, 'on' => $hasPj53],
    54 => ['originname' => "แผนตรวจสอบภายใน", 'name' => $hasPj54Txt, 'on' => $hasPj54],
    55 => ['originname' => "ประมวลจริยธรรมสำหรับเจ้าหน้าที่ของรัฐ", 'name' => $hasPj55Txt, 'on' => $hasPj55],
    56 => ['originname' => "รายงานการบริหารจัดการความเสี่ยง", 'name' => $hasPj56Txt, 'on' => $hasPj56],
    57 => ['originname' => "นโยบายการบริหารจัดการความเสี่ยง", 'name' => $hasPj57Txt, 'on' => $hasPj57],
    58 => ['originname' => "รายงานการโอนเงินงบประมาณ", 'name' => $hasPj58Txt, 'on' => $hasPj58],
    59 => ['originname' => "ฐานข้อมูลเปิดภาครัฐ", 'name' => $hasPj59Txt, 'on' => $hasPj59]
];

$hEtcArrRev2 = [
    0 => ['originname' => "ประกาศจากระบบ e-GP", 'name' => $newsEgpTxt, 'on' => $newsEgp, 'link' => '/bof_v2.1/manage-egp', 'permit' => 'egp'],
    1 => ['originname' => "ระบบจัดการ Head Line", 'name' => $HeadlineTxt, 'on' => $Headline, 'link' => '/bof_v2.1/manage-headline', 'permit' => 'hl1'],
    2 => ['originname' => "ข้อมูลบุคลากร", 'name' => $hasStaffTxt, 'on' => $hasStaff, 'link' => 'manage-staff?dptId=1', 'permit' => 'st1'],
    3 => ['originname' => "แหล่งท่องเที่ยว / สถานที่สำคัญ", 'name' => $hasTravelTxt, 'on' => $hasTravel, 'link' => '/bof_v2.1/manage-travel', 'permit' => 'tv1'],
    4 => ['originname' => "สินค้า OTOP", 'name' => $hasOtopTxt, 'on' => $hasOtop, 'link' => '/bof_v2.1/manage-otop', 'permit' => 'ot1'],
    5 => ['originname' => "คู่มือประชาชน", 'name' => $hasSvgTxt, 'on' => $hasSvg, 'link' => '/bof_v2.1/manage-service-g', 'permit' => 'svg'],
    6 => ['originname' => "poll", 'name' => $hasPollTxt, 'on' => $hasPool, 'link' => '/bof_v2.1/manage-poll', 'permit' => 'po1'],
    7 => ['originname' => "webboard เรื่องทั่วไป", 'name' => $hasWbTxt, 'on' => $hasWb, 'link' => '/bof_v2.1/manage-webboard?id=1', 'permit' => 'wb1'],
    8 => ['originname' => "จัดการผลสำรวจความพึงพอใจ", 'name' => $hasSrvTxt, 'on' => $hasSrv, 'link' => '/bof_v2.1/manage-survey', 'permit' => 'srv1'],
    9 => ['originname' => "ประมวลผลการสำรวจความพึงพอใจ", 'name' => $hasSrv2Txt, 'on' => $hasSrv2, 'link' => '/bof_v2.1/select', 'permit' => 'srv2'],
    10 => ['originname' => "จัดการภาพสไลด์", 'name' => $hasSldTxt, 'on' => $hasSld, 'link' => '/bof_v2.1/manage-slide', 'permit' => 's1'],
    11 => ['originname' => "ปฏิทินกิจกรรม", 'name' => $hasCldTxt, 'on' => $hasCld, 'link' => '/bof_v2.1/manage-calendar', 'permit' => 'c1'],
    12 => ['originname' => "PDPA", 'name' => $hasPdpaTxt, 'on' => $hasPdpa, 'link' => '/bof_v2.1/manage-policy', 'permit' => 'p1'],
    13 => ['originname' => "ตรวจประเมิน ITA LPA", 'name' => $hasItaLpaTxt, 'on' => $hasItaLpa, 'link' => '/bof_v2.1/manage-performance?hd=1', 'permit' => 'chk1'],
    14 => ['originname' => "โครงสร้างส่วนราชการ", 'name' => $hasOrgchartTxt, 'on' => $hasOrgchart, 'link' => '/bof_v2.1/manage-orgchart', 'permit' => 'o1'],
    15 => ['originname' => "จัดการ Pop Up/Banner", 'name' => $hasPopupTxt, 'on' => $hasPopup, 'link' => '/bof_v2.1/manage-popup', 'permit' => 'pb'],
    16 => ['originname' => "ข้อมูลหน่วยงาน", 'name' => $hasInfoTxt, 'on' => $hasInfo, 'link' => '/bof_v2.1/manage-info', 'permit' => 'ct']
];

$govStjArrRev2 = [
    0 => ['name' => 0, 'on' => 0],
    1 => ['name' => $hasGovdocTxt, 'on' => $hasGovdoc],
    2 => ['name' => $hasGovStjTxt, 'on' => $hasGovStj],
    3 => ['name' => $hasGovKtjTxt, 'on' => $hasGovKtj],
    4 => ['name' => $hasGovKobtTxt, 'on' => $hasGovKobt]
];

$egpAnounceTypeArr = [
    0 => ['prm' => 0, 'name' => 'รวมทุกหมวด'],
    1 => ['prm' => 'P0', 'name' => 'สอบราคา'],
    2 => ['prm' => 15, 'name' => 'e-market'],
    3 => ['prm' => 'B0', 'name' => 'e-Bidding'],
    4 => ['prm' => 'D0', 'name' => 'คัดเลือก'],
    5 => ['prm' => 'W0', 'name' => 'เฉพาะเจาะจง'],
    6 => ['prm' => 'D1', 'name' => 'จ้างที่ปรึกษาโดยวิธีประกาศเชิญชวนทั่วไป'],
    7 => ['prm' => 'W1', 'name' => 'จ้างที่ปรึกษาโดยวิธีคัดเลือก'],
    8 => ['prm' => 'D2', 'name' => 'จ้างที่ปรึกษาโดยวิธีเฉพาะเจาะจง'],
    9 => ['prm' => 'W2', 'name' => 'จ้างออกแบบหรือควบคุมงานก่อสร้างโดยวิธีประกาศเชิญชวนทั่วไป']
];

$egpMethodArr = [
    0 => ['prm' => 0, 'name' => 'รวมทุกหมวด'],
    1 => ['prm' => '02', 'name' => 'สอบราคา'],
    2 => ['prm' => 15, 'name' => 'e-market'],
    3 => ['prm' => 16, 'name' => 'e-Bidding'],
    4 => ['prm' => 18, 'name' => 'คัดเลือก'],
    5 => ['prm' => 19, 'name' => 'เฉพาะเจาะจง'],
    6 => ['prm' => 20, 'name' => 'จ้างที่ปรึกษาโดยวิธีประกาศเชิญชวนทั่วไป'],
    7 => ['prm' => 21, 'name' => 'จ้างที่ปรึกษาโดยวิธีคัดเลือก'],
    8 => ['prm' => 22, 'name' => 'จ้างที่ปรึกษาโดยวิธีเฉพาะเจาะจง'],
    9 => ['prm' => 23, 'name' => 'จ้างออกแบบหรือควบคุมงานก่อสร้างโดยวิธีประกาศเชิญชวนทั่วไป'],
    10 => ['prm' => 24, 'name' => 'จ้างออกแบบหรือควบคุมงานก่อสร้างโดยวิธีคัดเลือก'],
    11 => ['prm' => 25, 'name' => 'จ้างออกแบบหรือควบคุมงานก่อสร้างโดยวิธีเฉพาะเจาะจง'],
    12 => ['prm' => 26, 'name' => 'จ้างออกแบบหรือควบคุมงานก่อสร้างโดยวิธีประกวดแบบ']
];

$performanceArray = [
    1 => [
        'text' => 'ITA',
        'details' => [
            2019 => ['typeId' => 1, 'file' => 'ita_Conf_2019.php'],
            2020 => ['typeId' => 4, 'file' => 'ita_Conf_2020.php'],
            2021 => ['typeId' => 6, 'file' => 'ita_Conf_2021.php'],
            2022 => ['typeId' => 8, 'file' => 'ita_Conf_2022.php'],
            2023 => ['typeId' => 10, 'file' => 'ita_Conf_2023.php'],
            2024 => ['typeId' => 12, 'file' => 'ita_Conf_2024.php']
        ]
    ],
    2 => [
        'text' => 'LPA',
        'details' => [
            2018 => ['typeId' => 2, 'file' => 'lpa_Conf_2018.php'],
            2019 => ['typeId' => 3, 'file' => 'lpa_Conf_2019.php'],
            2020 => ['typeId' => 5, 'file' => 'lpa_Conf_2020.php'],
            2021 => ['typeId' => 7, 'file' => 'lpa_Conf_2021.php'],
            2022 => ['typeId' => 9, 'file' => 'lpa_Conf_2022.php'],
            2023 => ['typeId' => 11, 'file' => 'lpa_Conf_2023.php'],
            2024 => ['typeId' => 13, 'file' => 'lpa_Conf_2024.php']
        ]
    ],
];

$menuNaxArray = [
    "nxAll" => [
        ['name' => 'Customer', 'link' => '/bof_v2.1/manage-customer'],
        ['name' => 'Admin', 'link' => '/bof_v2.1/manage-admin'],
        ['name' => 'ลิงค์ในจังหวัด', 'link' => '/bof_v2.1/manage-province-link'],
        ['name' => 'กลุ่มข่าว', 'link' => '/bof_v2.1/manage-header?group=nw'],
        ['name' => 'กลุ่มหนังสือราชการ', 'link' => '/bof_v2.1/manage-header?group=gov'],
        ['name' => 'กลุ่มข้อมูลต่างๆ', 'link' => '/bof_v2.1/manage-header?group=pj'],
        ['name' => 'กลุ่มเว็บบอร์ด', 'link' => '/bof_v2.1/manage-header?group=wb'],
        ['name' => 'กลุ่มงาน อบต.', 'link' => '/bof_v2.1/manage-header?group=staffobt'],
        ['name' => 'กลุ่มงาน ทต.', 'link' => '/bof_v2.1/manage-header?group=stafftsb'],
        ['name' => 'กลุ่มงาน สถจ.', 'link' => '/bof_v2.1/manage-header?group=staffstj'],
        ['name' => 'ต่ออายุ website', 'link' => '/bof_v2.1/manage-renew?type=1'],
        ['name' => 'ต่ออายุ eService', 'link' => '/bof_v2.1/manage-renew?type=2'],
        ['name' => 'เว็บบอร์ด ลูกค้าทุกราย', 'link' => '/bof_v2.1/manage-webboard-all'],
        ['name' => 'project ลูกค้าทุกราย', 'link' => '/bof_v2.1/manage-project-all']
    ],
    "nxLy1" => [
        ['name' => 'Customer', 'link' => '/bof_v2.1/manage-customer'],
        ['name' => 'Admin', 'link' => '/bof_v2.1/manage-admin'],
        ['name' => 'ลิงค์ในจังหวัด', 'link' => '/bof_v2.1/manage-province-link'],
        ['name' => 'เว็บบอร์ด ลูกค้าทุกราย', 'link' => '/bof_v2.1/manage-webboard-all'],
        ['name' => 'project ลูกค้าทุกราย', 'link' => '/bof_v2.1/manage-project-all']
    ],
    "nxLy2" => [
        ['name' => 'Customer', 'link' => '/bof_v2.1/manage-customer'],
        ['name' => 'Admin', 'link' => '/bof_v2.1/manage-admin'],
        ['name' => 'ต่ออายุ website', 'link' => '/bof_v2.1/manage-renew?type=1'],
        ['name' => 'ต่ออายุ eService', 'link' => '/bof_v2.1/manage-renew?type=2'],
        ['name' => 'เว็บบอร์ด ลูกค้าทุกราย', 'link' => '/bof_v2.1/manage-webboard-all'],
        ['name' => 'project ลูกค้าทุกราย', 'link' => '/bof_v2.1/manage-project-all']
    ],
    "base" => [
        ['name' => 'Project to News', 'link' => '/bof_v2.1/project-move-group'],
        ['name' => 'Project Hd', 'link' => '/bof_v2.1/project-move-hd'],
        ['name' => 'News to Project', 'link' => '/bof_v2.1/news-move-group'],
        ['name' => 'News Hd', 'link' => '/bof_v2.1/news-move-hd']
    ],
    "stj" => [
        ['name' => 'ข่าวสารจังหวัด', 'link' => '/bof_v2.1/manage-order-stj']
    ]
];

$headerArray = [
    'nw' => ['typekey' => 'NEWS', 'name' => 'กลุ่มข่าว'],
    'pj' => ['typekey' => 'PROJECT', 'name' => 'กลุ่มข้อมูลต่างๆ'],
    'gov' => ['typekey' => 'GOVDOC', 'name' => 'กลุ่มหนังสือราชการ'],
    'staffobt' => ['typekey' => 'STAFFOBT', 'name' => 'กลุ่มงาน อบต.'],
    'stafftsb' => ['typekey' => 'STAFFTSB', 'name' => 'กลุ่มงาน ทต.'],
    'staffstj' => ['typekey' => 'STAFFSTJ', 'name' => 'กลุ่มงาน สถ.จ.'],
    'wb' => ['typekey' => 'WEBBOARD', 'name' => 'กลุ่มเว็บบอร์ด'],
];

// Reference key by $linkOpt
$stjOutsideArray = array(
    1 => array('name' => "อ่างทอง", 'page' => '/getNews/newsFromDp_angthong.php', 'link' => 'http://angthong-local.go.th/public/dispatch/data/index/menu/127'),
    2 => array('name' => "อยุธยา", 'page' => '/getNews/newsFromCt_type5_ayutthaya.php', 'link' => 'http://ayutthayalocal.go.th/order_general/cate/2'),
    3 => array('name' => "บุรีรัมย์", 'page' => '/getNews/newsFromDp_buriram.php', 'link' => 'https://buriramlocal.go.th/public/dispatch/data/index/menu/127'),
    4 => array('name' => "ชัยนาท", 'page' => '/getNews/newsFrom.php', 'link' => ''),
    5 => array('name' => "เชียงใหม่", 'page' => '/getNews/newsFrom.php', 'link' => ''),
    6 => array('name' => "ลำพูน", 'page' => '/getNews/newsFrom.php', 'link' => ''),
    7 => array('name' => "ลพบุรี", 'page' => '/getNews/newsFrom.php', 'link' => ''),
    8 => array('name' => "น่าน", 'page' => '/getNews/newsFrom.php', 'link' => ''),
    9 => array('name' => "นครปฐม", 'page' => '/getNews/newsFromCt_type7_nakhonpatom.php', 'link' => 'http://www.nptlocal.go.th/index.php?options=order'),
    10 => array('name' => "นครสวรรค์", 'page' => '/getNews/newsFromCt_type2_nakhonsawan.php', 'link' => 'http://www.nw-local.go.th/order'),
    11 => array('name' => "สุพรรณบุรี", 'page' => '/getNews/newsFromDp_suphanburi.php', 'link' => 'http://suphanburilocal.go.th/public/dispatch/data/index/menu/127'),
    12 => array('name' => "ตาก", 'page' => '/getNews/newsFrom.php', 'link' => ''),
    13 => array('name' => "อุทัยธานี", 'page' => '/getNews/newsFrom.php', 'link' => ''),
    14 => array('name' => "อุตรดิตถ์", 'page' => '/getNews/newsFrom.php', 'link' => ''),
    15 => array('name' => "ระยอง", 'page' => '/getNews/newsFromCt_type9_rayong.php', 'link' => 'https://rayonglocal.go.th/order'),
    16 => array('name' => "หนองบัวลำภู", 'page' => '/getNews/newsFromDp_nongbualamphu.php', 'link' => 'http://nblplocal.go.th/public/dispatch/data/index/menu/127'),
    17 => array('name' => "ร้อยเอ็ด", 'page' => '/getNews/newsFromDp_roiet.php', 'link' => 'http://roietlocal.go.th/public/dispatch/data/index/menu/127'),
    18 => array('name' => "ยโสธร", 'page' => '/getNews/newsFrom.php', 'link' => ''),
    19 => array('name' => "มหาสารคาม", 'page' => '/getNews/newsFromCt_mahasarakham.php', 'link' => 'http://www.mklocal.go.th/order'),
    20 => array('name' => "เลย", 'page' => '/getNews/newsFromDp_loei.php', 'link' => 'https://loeilocal.go.th/public/dispatch/data/index/menu/127'),
    21 => array('name' => "อุบลราชธานี", 'page' => '/getNews/newsFromDp_ubonratchathani.php', 'link' => 'http://ubonlocal.go.th/public/dispatch/data/index/menu/127'),
    22 => array('name' => "สระแก้ว", 'page' => '/getNews/newsFrom.php', 'link' => ''),
    23 => array('name' => "ปราจีนบุรี", 'page' => '/getNews/newsFrom.php', 'link' => ''),
    24 => array('name' => "กาญจนบุรี", 'page' => '/getNews/newsFromDp_kanchanaburi.php', 'link' => 'http://kanchanaburilocal.go.th/public/dispatch/data/index/menu/131'),
    25 => array('name' => "เชียงราย", 'page' => '/getNews/newsFrom.php', 'link' => ''),
    26 => array('name' => "จันทบุรี", 'page' => '/getNews/newsFromDp_chanthaburi.php', 'link' => 'http://chanthaburilocal.go.th/public/dispatch/data/index/menu/127'),
    27 => array('name' => "นครนายก", 'page' => '/getNews/newsFrom.php', 'link' => ''),
    28 => array('name' => "สมุทรปราการ", 'page' => '/getNews/newsFromDp_samutprakan.php', 'link' => 'https://samutprakanlocal.go.th/public/dispatch/data/index/menu/127/page/1'),
    29 => array('name' => "ขอนแก่น", 'page' => '/getNews/newsFromCt_type11_Khonkan.php', 'link' => 'http://www.kklocal.go.th/order/cate/2/?page=1'),
    30 => array('name' => "เพชรบุรี", 'page' => '/getNews/newsFromDP_phetchaburi.php', 'link' => 'http://phetchaburilocal.go.th/public/dispatch/data/index/menu'),
    31 => array('name' => "ชลบุรี", 'page' => '/getNews/newsFromDp_chonburi.php', 'link' => 'http://chonburilocal.go.th/public/dispatch/data/index/menu/127'),
    32 => array('name' => "ชัยภูมิ", 'page' => '/getNews/newsFrom.php', 'link' => ''),
    33 => array('name' => "ปทุมธานี", 'page' => '/getNews/newsFromDp_pathumthani.php', 'link' => 'https://pathumlocal.go.th/public/dispatch/data/index/menu/127'),
    34 => array('name' => "กำแพงเพชร", 'page' => '/getNews/newsFromCt_type4_kppt.php', 'link' => 'http://www.kpp-local.go.th/index.php?options=order&mode=cate&id=1'),
    35 => array('name' => "ลำปาง", 'page' => '/getNews/newsFrom.php', 'link' => ''),
    36 => array('name' => "หนองคาย", 'page' => '/getNews/newsFromDp_nongkhai.php', 'link' => 'http://nongkhailocal.go.th/public'),
    37 => array('name' => "นนทบุรี", 'page' => '/getNews/newsFrom.php', 'link' => ''),
    38 => array('name' => "เพชรบูรณ์", 'page' => '/getNews/newsFromCt_type1_phetchabun.php', 'link' => 'http://www.phetchabunlocal.go.th/order'),
    39 => array('name' => "พิจิตร", 'page' => '/getNews/newsFromCt_type3_phichit.php', 'link' => 'http://www.phichitlocal.go.th/government2'),
    40 => array('name' => "แพร่", 'page' => '/getNews/newsFrom.php', 'link' => ''),
    41 => array('name' => "พิษณุโลก", 'page' => '/getNews/newsFrom.php', 'link' => ''),
    42 => array('name' => "สระบุรี", 'page' => '/getNews/newsFrom.php', 'link' => ''),
    43 => array('name' => "สิงห์บุรี", 'page' => '/getNews/newsFromCt_type12_singburi.php', 'link' => 'http://www.singburi-local.go.th/order'),
    44 => array('name' => "ศรีสะเกษ", 'page' => '/getNews/newsFrom.php', 'link' => ''),
    45 => array('name' => "สุโขทัย", 'page' => '/getNews/newsFromCt_type1_sukhothai.php', 'link' => 'http://www.sukhothailocal.go.th/order'),
    46 => array('name' => "ฉะเชิงเทรา", 'page' => '/getNews/newsFrom.php', 'link' => ''),
    47 => array('name' => "ประจวบคีรีขันธ์", 'page' => '/getNews/newsFromDp_prachuap.php', 'link' => 'https://www.prachuaplocal.go.th/public/dispatch/data/index/menu/1244'),
    48 => array('name' => "ตราด", 'page' => '/getNews/newsFromDp_trat.php', 'link' => 'https://tratlocal.go.th/public/dispatch/data/index/menu/131'),
    49 => array('name' => "นครราชสีมา", 'page' => '/getNews/newsFromDp_nakhonratchasima.php', 'link' => 'https://koratdla.go.th/public/dispatch/data/index/menu/1244'),
    50 => array('name' => "ราชบุรี", 'page' => '/getNews/newsFromDp_ratchaburi.php', 'link' => 'https://ratchaburilocal.go.th/public/dispatch/data/index/menu/127'),
    51 => array('name' => "สุรินทร์", 'page' => '/getNews/newsFromDp_surin.php', 'link' => 'https://www.surinlocal.go.th/public/dispatch/data/index/menu/127'),
    52 => array('name' => "นครพนม", 'page' => '/getNews/newsFrom.php', 'link' => ''),
    53 => array('name' => "สตูล", 'page' => '/getNews/newsFromDp_satun.php', 'link' => 'https://satunlocal.go.th/public/dispatch/data/index/menu/127'),
    54 => array('name' => "นราธิวาส", 'page' => '/getNews/newsFromDp_narathiwat.php', 'link' => 'http://narathiwatlocal.go.th/public/dispatch/data/index/menu/127'),
    55 => array('name' => "แม่ฮ่องสอน", 'page' => '/getNews/newsFrom.php', 'link' => ''),
    56 => array('name' => "ชุมพร", 'page' => '/getNews/newsFrom.php', 'link' => ''),
    57 => array('name' => "นครศรีธรรมราช", 'page' => '/getNews/newsFrom.php', 'link' => ''),
    58 => array('name' => "อำนาจเจริญ", 'page' => '/getNews/newsFromDp_amnatcharoen.php', 'link' => 'https://amnatcharoenlocal.go.th/public/dispatch/data/index/menu/240/page/1'),
    59 => array('name' => "กาฬสินธุ์", 'page' => '/getNews/newsFromDp_Kalasin.php', 'link' => 'http://kalasinlocal.go.th/public/dispatch/data/index/menu/127'),
    60 => array('name' => "พะเยา", 'page' => '/getNews/newsFrom.php', 'link' => ''),
    61 => array('name' => "ตรัง", 'page' => '/getNews/newsFrom.php', 'link' => ''),
    62 => array('name' => "อุดรธานี", 'page' => '/getNews/newsFrom.php', 'link' => ''),
    63 => array('name' => "บึงกาฬ", 'page' => '/getNews/newsFrom.php', 'link' => '')
);
