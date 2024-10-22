<!DOCTYPE html>
<html lang="en">
<?php
require_once __DIR__ . "/../lib/util_var.php";
require_once __DIR__ . "/../config/config_hd.php";
require_once __DIR__ . "/../config/configuration.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESPONSIVE-NAX-DEMO</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../style/custom.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.0/Sortable.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</head>

<body class="bg-sky-800 min-h-screen max-w-full">
    <div class="bg-sky-800 text-white sticky top-0 z-40 duration-500 border-b border-b-slate-500">
        <div class="flex items-center justify-between rtl:justify-end w-full p-5">
            <div class="flex justify-between items-center lg:w-1/4 font-semibold text-lg xl:text-xl">
                <a href="#">
                    <i class="main_logo"></i>
                    <p class="pl-16">เทศบาลตำบลรั้วใหญ่</p>
                </a>
            </div>
            <div class="flex lg:w-3/4">
                <button id="dropdownMenuTop" data-dropdown-toggle="dropdownDots" class="inline-flex items-center p-2 text-3xl text-slate-300 rounded-lg lg:hidden hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-slate-200">
                    &#65049;
                </button>
                <!-- Menu Top1 -->
                <nav class="hidden lg:block space-x-8 text-md xl:text-lg font-semibold z-50">
                    <a href="#" class="hover:opacity-90 hover:text-yellow-300 hover:underline hover:underline-offset-2">หน้าแรก</a>
                    <a href="#" class="hover:opacity-90 hover:text-yellow-300 hover:underline hover:underline-offset-2">ข้อมูลหน่วยงาน</a>
                    <a href="#" class="hover:opacity-90 hover:text-yellow-300 hover:underline hover:underline-offset-2">บุคลากร</a>
                    <a href="#" class="hover:opacity-90 hover:text-yellow-300 hover:underline hover:underline-offset-2">การบริหารบุคคล</a>
                    <a href="#" class="hover:opacity-90 hover:text-yellow-300 hover:underline hover:underline-offset-2">ข่าวสาร</a>
                    <a href="#" class="hover:opacity-90 hover:text-yellow-300 hover:underline hover:underline-offset-2">แผน</a>
                    <a href="#" class="hover:opacity-90 hover:text-yellow-300 hover:underline hover:underline-offset-2">รายงาน</a>
                    <a href="#" class="hover:opacity-90 hover:text-yellow-300 hover:underline hover:underline-offset-">ระเบียบ</a>
                    <a href="#" class="hover:opacity-90 hover:text-yellow-300 hover:underline hover:underline-offset-2">บริการประชาชน</a>
                </nav>
                <!-- Menu Top2 -->
                <div id="dropdownDots" class="z-10 hidden bg-gray-300 divide-y divide-gray-100 rounded-lg shadow w-44">
                    <ul class="py-2 text-lg font-semibold text-gray-700" aria-labelledby="dropdownMenuTop">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">หน้าแรก</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">ข้อมูลหน่วยงาน</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">บุคลากร</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">การบริหารบุคคล</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">ข่าวสาร</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">แผน</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">รายงาน</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">ระเบียบ</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">บริการประชาชน</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Hidden Hot News -->
    <div class="flex items-center p-4 bg-sky-800 border-b border-slate-500 lg:hidden fixed z-30">
        <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 ml-3 text-slate-300 hover:text-slate-100 rounded-lg hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-slate-700">
            <span class="sr-only">Open sidebar</span>
            &#9776;
        </button>
        <div class="ml-4 flex text-sm leading-6 whitespace-nowrap min-w-0 justify-items-center">
            <div class="px-2 py-1 ml-2 w-24 text-center text-slate-300 text-md font-semibold">Hot News &#62;</div>
            <div class="flex px-2 py-1 mx-2 w-screen text-slate-200 text-[18px]">text-gen-news</div>
        </div>
    </div>
    <section class="max-w-7xl mx-auto p-5 justify-between items-center">
        <!-- Start Side Menu -->
        <div id="default-sidebar" class="bg-sky-900 lg:bg-sky-800 fixed top-[80px] xl:top-[90px] left-[max(0px,calc(50%-45rem))] right-auto w-[19.5rem] z-40 inset-0 h-screen transition-transform -translate-x-full lg:translate-x-0" aria-label="Sidebar">
            <nav class="h-full pl-10 2xl:px-3 py-4 overflow-y-auto lg:text-sm lg:leading-7 relative">
                <ul>
                    <li class="mt-12 lg:mt-8">
                        <div class="mb-5 lg:mb-3 text-lg font-bold text-white">ข้อมูลหน่วยงาน</div>
                        <ul class="space-y-6 lg:space-y-2">
                            <li class="mt-6 lg:mt-4">
                                <div class="block text-slate-200 text-md font-semibold">ข้อมูลพื้นฐาน</div>
                                <ul class="border-l border-slate-400 pl-6 ml-2">
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">ประวัติหน่วยงาน</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">สภาพทั่วไป</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">ผลิตภัณฑ์</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">สถานที่สำคัญ</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="mt-12 lg:mt-8">
                                <div class="block text-slate-200 text-md font-semibold">เกี่ยวกับหน่วยงาน</div>
                                <ul class="border-l border-slate-400 pl-6 ml-2">
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">วิสัยทัศน์/พันธกิจ/ยุทธศาสตร์</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">คำขวัญ</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">โครงสร้างองค์กร</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">บทบาทหน้าที่</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">อำนาจหน้าที่</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">คู่มือการปฏิบัติงาน</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">คู่มือหรือมาตรฐานการให้บริการ</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">ติดต่อ</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="mt-12 lg:mt-8">
                        <div class="mb-8 lg:mb-3 text-lg font-bold text-white">บุคลากร</div>
                        <ul class="space-y-6 lg:space-y-2">
                            <li class="mt-4 lg:mt-2">
                                <ul class="border-l border-slate-400 pl-6 ml-2">
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">คณะผู้บริหาร</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">สมาชิกสภา</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">หัวหน้าส่วนราชการ</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">บุคลากร</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">ผู้นำชุมชน</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="mt-12 lg:mt-8">
                        <div class="mb-8 lg:mb-3 text-lg font-bold text-white">การบริหารบุคคล</div>
                        <ul class="space-y-6 lg:space-y-2">
                            <li class="mt-4 lg:mt-2">
                                <ul class="border-l border-slate-400 pl-6 ml-2">
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">นโยบายการบริหารทรัพยากรบุคคล</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">การดำเนินการตามนโยบายการบริหารทรัพยากรบุคคล</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">หลักเกณฑ์การบริหารและพัฒนาทรัพยากรบุคคล</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="mt-12 lg:mt-8">
                        <div class="mb-8 lg:mb-3 text-lg font-bold text-white">ข่าวสาร</div>
                        <ul class="space-y-6 lg:space-y-2">
                            <li class="mt-6 lg:mt-4">
                                <div class="block text-slate-200 text-md font-semibold">กิจกรรม</div>
                                <ul class="border-l border-slate-400 pl-6 ml-2">
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">กิจกรรม</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">กิจการสภา</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">วีดิทัศน์</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="mt-12 lg:mt-8">
                                <div class="block text-slate-200 text-md font-semibold">ข่าวสาร</div>
                                <ul class="border-l border-slate-400 pl-6 ml-2">
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">ข่าวประชาสัมพันธ์</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">ข่าวจัดซื้อจัดจ้าง</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">ประกาศผลจัดซื้อจัดจ้าง</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">ประกาศจากระบบ
                                            e-GP</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">กองทุนหลักประกันสุขภาพ</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">ข่าวสรรหาบุคลากร</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="mt-12 lg:mt-8">
                                <div class="block text-slate-200 text-md font-semibold">ข่าวสารภายนอก</div>
                                <ul class="border-l border-slate-400 pl-6 ml-2">
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">หนังสือสั่งการ
                                            สถ.</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">ข่าวสารจาก
                                            สถ.จ.</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">ข่าวสาร
                                            ในเครือข่าย</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">ประกาศจากระบบ
                                            e-GP ในเครือข่าย</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="mt-12 lg:mt-8">
                        <div class="mb-8 lg:mb-3 text-lg font-bold text-white">แผน</div>
                        <ul class="space-y-6 lg:space-y-2">
                            <li class="mt-4 lg:mt-2">
                                <ul class="border-l border-slate-400 pl-6 ml-2">
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">แผนพัฒนาท้องถิ่น</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">แผนการดำเนินงาน</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">แผนอัตรากำลัง</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">แผนจัดหาพัสดุ</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">แผนป้องกันปราบปรามทุจริต</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">แผนตรวจสอบภายใน</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">เทศบัญญัติงบประมาณรายจ่าย</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">แผนอื่นๆ</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="mt-12 lg:mt-8">
                        <div class="mb-8 lg:mb-3 text-lg font-bold text-white">รายงาน</div>
                        <ul class="space-y-6 lg:space-y-2">
                            <li class="mt-4 lg:mt-2">
                                <ul class="border-l border-slate-400 pl-6 ml-2">
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">รายงานทางการเงิน</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">งบแสดงรายรับ-รายจ่าย</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">รายงานผลการปฏิบัติงานประจำปี</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">รายงานผลการกำกับติดตาม</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">สรุปผลการจัดหาพัสดุรายเดือน
                                            (สขร.1)</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">รายงานสรุปผลการจัดซื้อจัดจ้างประจำปี(สขร.)</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">รายงานการประชุมผู้บริหาร</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">รายงานการประชุมสภา</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">รายงานการประชุมพนักงาน</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">รายงานผลการบริหารและพัฒนาทรัพยากรบุคคลประจำปี</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">รายงานผลตรวจสอบภายใน</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">รายงานอื่นๆ</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">สถิติ</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">การดำเนินการเพื่อป้องกันการทุจริต</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">การส่งเสริมความโปร่งใสและป้องกันการทุจริตภายในหน่วยงาน</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="mt-12 lg:mt-8">
                        <div class="mb-5 lg:mb-3 text-lg font-bold text-white">ระเบียบ</div>
                        <ul class="space-y-6 lg:space-y-2">
                            <li class="mt-6 lg:mt-4">
                                <div class="block text-slate-200 text-md font-semibold">ภายในหน่วยงาน</div>
                                <ul class="border-l border-slate-400 pl-6 ml-2">
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">เทศบัญญัติ</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">ประกาศ</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">คำสั่ง</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">กฎหมายที่เกี่ยวข้อง</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">การจัดการองค์ความรู้
                                            (KM)</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="mt-12 lg:mt-8">
                                <div class="block text-slate-200 text-md font-semibold">ระเบียบส่วนกลาง</div>
                                <ul class="border-l border-slate-400 pl-6 ml-2">
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">พรบ./พรก.</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">ระเบียบกระทรวงมหาดไทย</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">ระเบียบปฏิบัติอื่น</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="mt-12 lg:mt-8">
                        <div class="mb-5 lg:mb-3 text-lg font-bold text-white">บริการประชาชน</div>
                        <ul class="space-y-6 lg:space-y-2">
                            <li class="mt-6 lg:mt-4">
                                <a href="#">
                                    <div class="block text-slate-200 text-md hover:text-yellow-300 font-semibold">
                                        คู่มือประชาชน</div>
                                </a>
                                <div class="block text-slate-200 text-md font-semibold">รับเรื่องราวร้องเรียน</div>
                                <ul class="border-l border-slate-400 pl-6 ml-2">
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">ศูนย์จัดการเรื่องร้องเรียน</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">ศูนย์ช่วยเหลือประชาชน</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">ร้องเรียนทุจริต</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">ร้องเรียนร้องทุกข์</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">ช่องทางรับฟังความคิดเห็น</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block border-l pl-4 -ml-[1.55rem] border-transparent hover:border-slate-800 text-gray-300 hover:text-yellow-300 text-sm font-semibold">กระดานสนทนา</a>
                                    </li>
                                </ul>
                                <a href="#">
                                    <div class="block text-slate-200 text-md hover:text-yellow-300 font-semibold">
                                        วารสาร/จดหมายข่าว</div>
                                </a>
                                <a href="#">
                                    <div class="block text-slate-200 text-md hover:text-yellow-300 font-semibold">
                                        คำถามที่พบบ่อย</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Content -->
        <div class="block lg:pl-[19.5rem]">
            <main class="flex flex-col min-w-0 max-w-6xl mx-auto relative z-20 pt-2 xl:max-w-none">
                <!-- hotnews box -->
                <div class="hidden lg:flex mb-2">
                    <div class="ml-4 flex text-sm leading-6 whitespace-nowrap min-w-0 justify-items-center border-y border-slate-500">
                        <div class="px-2 py-1 ml-2 w-24 text-center text-slate-300 text-md font-semibold">Hot News
                            &#62;</div>
                        <div class="flex px-2 py-1 mx-2 w-screen text-sky-400 text-[18px]">text-gen-news</div>
                    </div>
                </div>
                <!-- head slide -->
                <div class="relative my-12">
                    <div class="flex bg-sky-700 h-[600px]">head slide</div>
                </div>
                <!-- welcome -->
                <div class="flex flex-col-reverse justify-center xl:flex-row p-6 items-center gap-8 my-12">
                    <div class="xl:w-1/2">
                        <div class="max-w-md text-xl font-bold text-center xl:text-2xl xl:text-left text-slate-300">
                            ยินดีต้อนรับเข้าสู่เว็บไซต์<br><span class="text-3xl">เทศบาลตำบลรั้วใหญ่</span>
                        </div>
                        <div class="max-w-md text-lg font-semibold mt-4 text-center xl:text-left text-slate-400 xl:indent-12">
                            ทต.รั้วใหญ่ ได้จัดทำเว็บไซต์ขึ้นมาเพื่อเผยแพร่
                            ข้อมูลข่าวสารของหน่วยงานและข้อมูลชุมชนให้แก่ประชาชน และ
                            ผู้สนใจ ในขณะเดียวกันก็เป็นที่รับเรื่องราวสุข-ทุกข์ของประชาชน<br>
                            <div class="xl:indent-12">นอกจากนี้ ทต.รั้วใหญ่ ยินดีรับคำแนะนำเพื่อปรับปรุง
                                ประสิทธิภาพในการบริหารงานราชการส่วนท้องถิ่นต่อไป</div>
                        </div>
                    </div>
                    <img src="https://www.ruayai.go.th/image/js/logo.png" alt="logo_welcome">
                </div>
                <!-- Call Nayok / Palad -->
                <section class="text-gray-200">
                    <div class="container px-5 py-2 mx-auto">
                        <div class="flex flex-wrap justify-center -m-4">
                            <div class="pb-10 xl:w-1/2">
                                <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                                    <i class="call_nayok flex-shrink-0 object-cover object-center sm:mb-0 mb-4"></i>
                                    <div class="flex-grow sm:pl-8">
                                        <div class="font-semibold text-[30px] text-slate-300">สายตรงนายก</div>
                                        <div class="font-semibold text-white text-[36px]">โทร.000-000-0000</div>
                                    </div>
                                </div>
                            </div>
                            <div class="pb-10 xl:w-1/2">
                                <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                                    <i class="call_nayok flex-shrink-0 object-cover object-center sm:mb-0 mb-4"></i>
                                    <div class="flex-grow sm:pl-8">
                                        <div class="font-semibold text-[30px] text-slate-300">สายตรงปลัด</div>
                                        <div class="font-semibold text-white text-[36px]">โทร.000-000-0000</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="relative my-10">
                    <div class="flex bg-sky-700 h-[500px]">pic_news_slide</div>
                </div>

                <ul class="grid grid-cols-1 xl:grid-cols-3 gap-y-10 gap-x-6 items-start">
                    <li class="relative flex flex-col sm:flex-row xl:flex-col items-start">
                        <div class="order-1 sm:ml-6 xl:ml-0">
                            <div class="block text-[40px] text-white font-semibold">กิจกรรม</div>
                            <div class="my-5 text-[18px] text-white">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Repellendus, accusantium. Quasi consectetur accusamus cum. Tenetur
                                blanditiis cupiditate voluptates incidunt eos.</div>
                            <a href="#" class="group inline-flex items-center h-9 rounded-full text-sm font-semibold whitespace-nowrap px-3 focus:outline-none focus:ring-2 bg-slate-700 text-slate-100 hover:bg-slate-200 hover:text-slate-900 focus:ring-slate-500">ดูทั้งหมด
                                <span class="overflow-visible ml-3 text-slate-300 group-hover:text-slate-400">&#62;</span>
                            </a>
                        </div>
                        <img src="https://www.ruayai.go.th/dnm_file/news/241375632_center_thumb.jpg" alt="acti1" class="mb-6 shadow-md rounded-lg bg-slate-50 w-full sm:w-[17rem] sm:mb-0 xl:mb-6 xl:w-full">
                    </li>
                    <li class="relative flex flex-col sm:flex-row xl:flex-col items-start">
                        <div class="order-1 sm:ml-6 xl:ml-0">
                            <div class="block text-[40px] text-white font-semibold">กิจการสภา</div>
                            <div class="my-5 text-[18px] text-white">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Repellendus, accusantium. Quasi consectetur accusamus cum. Tenetur
                                blanditiis cupiditate voluptates incidunt eos.</div>
                            <a href="#" class="group inline-flex items-center h-9 rounded-full text-sm font-semibold whitespace-nowrap px-3 focus:outline-none focus:ring-2 bg-slate-700 text-slate-100 hover:bg-slate-200 hover:text-slate-900 focus:ring-slate-500">ดูทั้งหมด
                                <span class="overflow-visible ml-3 text-slate-300 group-hover:text-slate-400">&#62;</span>
                            </a>
                        </div>
                        <img src="https://www.ruayai.go.th/dnm_file/news/241375632_center_thumb.jpg" alt="acti1" class="mb-6 shadow-md rounded-lg bg-slate-50 w-full sm:w-[17rem] sm:mb-0 xl:mb-6 xl:w-full">
                    </li>
                    <li class="relative flex flex-col sm:flex-row xl:flex-col items-start">
                        <div class="order-1 sm:ml-6 xl:ml-0">
                            <div class="block text-[40px] text-white font-semibold">วีดิทัศน์</div>
                            <div class="my-5 text-[18px] text-white">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Repellendus, accusantium. Quasi consectetur accusamus cum. Tenetur
                                blanditiis cupiditate voluptates incidunt eos.</div>
                            <a href="#" class="group inline-flex items-center h-9 rounded-full text-sm font-semibold whitespace-nowrap px-3 focus:outline-none focus:ring-2 bg-slate-700 text-slate-100 hover:bg-slate-200 hover:text-slate-900 focus:ring-slate-500">ดูทั้งหมด
                                <span class="overflow-visible ml-3 text-slate-300 group-hover:text-slate-400">&#62;</span>
                            </a>
                        </div>
                        <img src="https://www.ruayai.go.th/dnm_file/news/241375632_center_thumb.jpg" alt="acti1" class="mb-6 shadow-md rounded-lg bg-slate-50 w-full sm:w-[17rem] sm:mb-0 xl:mb-6 xl:w-full">
                    </li>
                </ul>
                <!-- Newsin -->
                <section class="my-16 relative">
                    <div class="relative z-10">
                        <h2 class="text-white text-[46px] tracking-tight font-semibold mb-3">ข่าวสาร</h2>
                        <div class="flex overflow-auto mb-6 -mx-4 sm:-mx-6">
                            <div class="flex-none min-w-full px-4 sm:px-6">
                                <ul class="border-b border-slate-200 space-x-6 flex whitespace-nowrap">
                                    <li>
                                        <h2>
                                            <a href="#" class="flex text-md leading-6 font-semibold pt-3 pb-2.5 border-b-2 -mb-px text-sky-300 border-current">ข่าวประชาสัมพันธ์</a>
                                        </h2>
                                    </li>
                                    <li>
                                        <h2>
                                            <a href="#" class="flex text-md leading-6 font-semibold pt-3 pb-2.5 border-b-2 -mb-px text-slate-300 border-transparent hover:border-slate-100">ข่าวสรรหาบุคลากร</a>
                                        </h2>
                                    </li>
                                    <li>
                                        <h2>
                                            <a href="#" class="flex text-md leading-6 font-semibold pt-3 pb-2.5 border-b-2 -mb-px text-slate-300 border-transparent hover:border-slate-100">ข่าวกองทุนหลักประกันสุขภาพ</a>
                                        </h2>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div id="content-wrapper" class="relative z-10 max-w-3xl mb-1">
                        <div class="text-white text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Vitae quidem maxime expedita, explicabo eos quos minima atque eaque autem repellat quas
                            velit eveniet voluptates reiciendis a praesentium harum delectus ad inventore libero
                            adipisci ducimus laudantium? Eius facere non accusantium veritatis repudiandae ullam at
                            laborum assumenda nesciunt? Ea, nisi optio, quaerat culpa vitae nam reiciendis blanditiis
                            nobis esse cupiditate aut est veniam reprehenderit doloremque dolorum, minus consequuntur
                            sequi consectetur dolorem debitis similique! Voluptatibus impedit quaerat earum. Voluptate
                            quod ducimus rerum eveniet ad atque ex. Hic in dolorem velit nesciunt ad perspiciatis
                            accusantium optio iste unde exercitationem laudantium minus, commodi quas veritatis!</div>
                        <div class="flex justify-end">
                            <a href="#" class="group inline-flex items-center h-9 rounded-full text-sm font-semibold whitespace-nowrap px-3 focus:outline-none focus:ring-2 bg-slate-700 text-slate-100 hover:bg-slate-200 hover:text-slate-900 focus:ring-slate-500">ดูทั้งหมด
                                <span class="overflow-visible ml-3 text-slate-300 group-hover:text-slate-400">&#62;</span>
                            </a>
                        </div>
                    </div>

                </section>
                <!-- News 1 / News 2 -->
                <section class="text-gray-200">
                    <div class="container px-5 py-16 mx-auto">
                        <div class="flex flex-wrap -mx-4 -my-8 justify-between">
                            <div class="py-8 px-4 lg:w-auto">
                                <div class="h-full flex items-start">
                                    <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                                        <span class="font-semibold text-[18px] text-gray-200 pb-2 mb-2 border-b-2 border-gray-400">Apr</span>
                                        <span class="font-semibold text-sm text-gray-200  leading-none">18</span>
                                    </div>
                                    <div class="flex-grow pl-6">
                                        <div class="tracking-widest text-md font-semibold text-sky-200 mb-1">ข่าวสาร
                                        </div>
                                        <div class="text-[30px] font-semibold text-gray-200 mb-3">ข่าวจัดซื้อจัดจ้าง
                                        </div>
                                        <div class="leading-relaxed mb-5 text-sm">Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit. At odio asperiores qui quos pariatur eius odit
                                            doloremque nostrum maxime nihil. Vero minus deserunt rem accusantium labore
                                            voluptate mollitia commodi? Possimus dicta asperiores neque labore est. Iste
                                            expedita placeat ipsa, et delectus, sit error natus doloribus explicabo
                                            optio inventore ut minima.</div>
                                        <a href="#" class="group inline-flex items-center h-9 rounded-full text-sm font-semibold whitespace-nowrap px-3 focus:outline-none focus:ring-2 bg-slate-700 text-slate-100 hover:bg-slate-200 hover:text-slate-900 focus:ring-slate-500">ดูทั้งหมด
                                            <span class="overflow-visible ml-3 text-slate-300 group-hover:text-slate-400">&#62;</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-8 px-4 lg:w-auto">
                                <div class="h-full flex items-start">
                                    <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                                        <span class="font-semibold text-[18px] text-gray-200 pb-2 mb-2 border-b-2 border-gray-400">Apr</span>
                                        <span class="font-semibold text-sm text-gray-200  leading-none">20</span>
                                    </div>
                                    <div class="flex-grow pl-6">
                                        <div class="tracking-widest text-md font-semibold text-sky-200 mb-1">ข่าวสาร
                                        </div>
                                        <div class="text-[30px] font-semibold text-gray-200 mb-3">ประกาศผลจัดซื้อจัดจ้าง
                                        </div>
                                        <div class="leading-relaxed mb-5 text-sm">Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit. At odio asperiores qui quos pariatur eius odit
                                            doloremque nostrum maxime nihil. Vero minus deserunt rem accusantium labore
                                            voluptate mollitia commodi? Possimus dicta asperiores neque labore est. Iste
                                            expedita placeat ipsa, et delectus, sit error natus doloribus explicabo
                                            optio inventore ut minima.</div>
                                        <a href="#" class="group inline-flex items-center h-9 rounded-full text-sm font-semibold whitespace-nowrap px-3 focus:outline-none focus:ring-2 bg-slate-700 text-slate-100 hover:bg-slate-200 hover:text-slate-900 focus:ring-slate-500">ดูทั้งหมด
                                            <span class="overflow-visible ml-3 text-slate-300 group-hover:text-slate-400">&#62;</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- NewsOut -->
                <section class="my-16 relative">
                    <div class="relative z-10">
                        <h2 class="text-white text-[46px] tracking-tight font-semibold mb-3">ข่าวสารภายนอก</h2>
                        <div class="flex overflow-auto mb-6 -mx-4 sm:-mx-6">
                            <div class="flex-none min-w-full px-4 sm:px-6">
                                <ul class="border-b border-slate-200 space-x-6 flex whitespace-nowrap">
                                    <li>
                                        <h2>
                                            <a href="#" class="flex text-md leading-6 font-semibold pt-3 pb-2.5 border-b-2 -mb-px text-sky-300 border-current">หนังสือสั่งการ
                                                สถ.</a>
                                        </h2>
                                    </li>
                                    <li>
                                        <h2>
                                            <a href="#" class="flex text-md leading-6 font-semibold pt-3 pb-2.5 border-b-2 -mb-px text-slate-300 border-transparent hover:border-slate-100">ข่าวสารจาก
                                                สถ.จ.</a>
                                        </h2>
                                    </li>
                                    <li>
                                        <h2>
                                            <a href="#" class="flex text-md leading-6 font-semibold pt-3 pb-2.5 border-b-2 -mb-px text-slate-300 border-transparent hover:border-slate-100">ข่าวสารในเครือข่าย</a>
                                        </h2>
                                    </li>
                                    <li>
                                        <h2>
                                            <a href="#" class="flex text-md leading-6 font-semibold pt-3 pb-2.5 border-b-2 -mb-px text-slate-300 border-transparent hover:border-slate-100">ประกาศจากระบบ
                                                e-GP ในเครือข่าย</a>
                                        </h2>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div id="content-wrapper" class="relative z-10 max-w-3xl mb-1">
                        <div class="text-white text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Vitae quidem maxime expedita, explicabo eos quos minima atque eaque autem repellat quas
                            velit eveniet voluptates reiciendis a praesentium harum delectus ad inventore libero
                            adipisci ducimus laudantium? Eius facere non accusantium veritatis repudiandae ullam at
                            laborum assumenda nesciunt? Ea, nisi optio, quaerat culpa vitae nam reiciendis blanditiis
                            nobis esse cupiditate aut est veniam reprehenderit doloremque dolorum, minus consequuntur
                            sequi consectetur dolorem debitis similique! Voluptatibus impedit quaerat earum. Voluptate
                            quod ducimus rerum eveniet ad atque ex. Hic in dolorem velit nesciunt ad perspiciatis
                            accusantium optio iste unde exercitationem laudantium minus, commodi quas veritatis!</div>
                        <div class="flex justify-end">
                            <a href="#" class="group inline-flex items-center h-9 rounded-full text-sm font-semibold whitespace-nowrap px-3 focus:outline-none focus:ring-2 bg-slate-700 text-slate-100 hover:bg-slate-200 hover:text-slate-900 focus:ring-slate-500">ดูทั้งหมด
                                <span class="overflow-visible ml-3 text-slate-300 group-hover:text-slate-400">&#62;</span>
                            </a>
                        </div>
                    </div>
                </section>

                <!-- e-Gp / Webboard -->
                <section class="text-gray-200">
                    <div class="container px-5 py-16 mx-auto">
                        <div class="flex flex-wrap -mx-4 -my-8 justify-between">
                            <div class="py-8 px-4 lg:w-auto">
                                <div class="h-full flex items-start">
                                    <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                                        <span class="font-semibold text-[18px] text-gray-200 pb-2 mb-2 border-b-2 border-gray-400">Apr</span>
                                        <span class="font-semibold text-sm text-gray-200  leading-none">18</span>
                                    </div>
                                    <div class="flex-grow pl-6">
                                        <div class="tracking-widest text-md font-semibold text-sky-200 mb-1">e-GP
                                        </div>
                                        <div class="text-[30px] font-semibold text-gray-200 mb-3">ประกาศจากระบบ e-GP
                                        </div>
                                        <div class="leading-relaxed mb-5 text-sm">Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit. At odio asperiores qui quos pariatur eius odit
                                            doloremque nostrum maxime nihil. Vero minus deserunt rem accusantium labore
                                            voluptate mollitia commodi? Possimus dicta asperiores neque labore est. Iste
                                            expedita placeat ipsa, et delectus, sit error natus doloribus explicabo
                                            optio inventore ut minima.</div>
                                        <a href="#" class="group inline-flex items-center h-9 rounded-full text-sm font-semibold whitespace-nowrap px-3 focus:outline-none focus:ring-2 bg-slate-700 text-slate-100 hover:bg-slate-200 hover:text-slate-900 focus:ring-slate-500">ดูทั้งหมด
                                            <span class="overflow-visible ml-3 text-slate-300 group-hover:text-slate-400">&#62;</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-8 px-4 lg:w-auto">
                                <div class="h-full flex items-start">
                                    <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                                        <span class="font-semibold text-[18px] text-gray-200 pb-2 mb-2 border-b-2 border-gray-400">Apr</span>
                                        <span class="font-semibold text-sm text-gray-200  leading-none">20</span>
                                    </div>
                                    <div class="flex-grow pl-6">
                                        <div class="tracking-widest text-md font-semibold text-sky-200 mb-1">
                                            Webboard</div>
                                        <div class="text-[30px] font-semibold text-gray-200 mb-3">กระดานสนทนา</div>
                                        <div class="leading-relaxed mb-5 text-sm">Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit. At odio asperiores qui quos pariatur eius odit
                                            doloremque nostrum maxime nihil. Vero minus deserunt rem accusantium labore
                                            voluptate mollitia commodi? Possimus dicta asperiores neque labore est. Iste
                                            expedita placeat ipsa, et delectus, sit error natus doloribus explicabo
                                            optio inventore ut minima.</div>
                                        <a href="#" class="group inline-flex items-center h-9 rounded-full text-sm font-semibold whitespace-nowrap px-3 focus:outline-none focus:ring-2 bg-slate-700 text-slate-100 hover:bg-slate-200 hover:text-slate-900 focus:ring-slate-500">ดูทั้งหมด
                                            <span class="overflow-visible ml-3 text-slate-300 group-hover:text-slate-400">&#62;</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Otop / Travel -->
                <section class="text-gray-200">
                    <div class="container px-5 py-16 mx-auto">
                        <div class="flex flex-wrap -mx-4 -mb-10 text-center">
                            <div class="sm:w-1/2 mb-10 px-4">
                                <div class="rounded-lg h-64 overflow-hidden">
                                    <img src="https://www.saiyai.go.th/dnm_file/otop/87_gall_518_Ly3T.jpg" alt="otop">
                                </div>
                                <div class="text-[30px] font-semibold text-white mt-6 mb-3">ผลิตภัณฑ์ในชุมชน</div>
                                <div class="leading-relaxed text-sm">Lorem ipsum, dolor sit amet consectetur
                                    adipisicing elit. Debitis eum dignissimos, qui magnam autem nulla saepe iure dolore
                                    animi in ad, voluptates, enim laudantium maiores ut sapiente molestiae nobis minus.
                                </div>
                                <a href="#" class="group inline-flex items-center h-9 rounded-full text-sm font-semibold whitespace-nowrap px-3 focus:outline-none focus:ring-2 bg-slate-700 text-slate-100 hover:bg-slate-200 hover:text-slate-900 focus:ring-slate-500">ดูทั้งหมด
                                    <span class="overflow-visible ml-3 text-slate-300 group-hover:text-slate-400">&#62;</span>
                                </a>
                            </div>
                            <div class="sm:w-1/2 mb-10 px-4">
                                <div class="rounded-lg h-64 overflow-hidden">
                                    <img src="https://www.saiyai.go.th/dnm_file/otop/87_gall_518_Ly3T.jpg" alt="otop">
                                </div>
                                <div class="text-[30px] font-semibold text-white mt-6 mb-3">สถานที่สำคัญในชุมชน</div>
                                <div class="leading-relaxed text-sm">Lorem ipsum, dolor sit amet consectetur
                                    adipisicing elit. Debitis eum dignissimos, qui magnam autem nulla saepe iure dolore
                                    animi in ad, voluptates, enim laudantium maiores ut sapiente molestiae nobis minus.
                                </div>
                                <a href="#" class="group inline-flex items-center h-9 rounded-full text-sm font-semibold whitespace-nowrap px-3 focus:outline-none focus:ring-2 bg-slate-700 text-slate-100 hover:bg-slate-200 hover:text-slate-900 focus:ring-slate-500">ดูทั้งหมด
                                    <span class="overflow-visible ml-3 text-slate-300 group-hover:text-slate-400">&#62;</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Service Banner -->
                <section class="text-gray-200">
                    <div class="container px-5 py-16 mx-auto">
                        <div class="flex flex-wrap justify-center items-center sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
                            <div class="p-4 w-full md:w-1/3 flex flex-col text-center items-center">
                                <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-slate-500 text-sky-200 mb-5 flex-shrink-0">
                                    <svg aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-[60px] h-[60px]">
                                        <path d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                                <div class="flex-grow">
                                    <div class="text-white text-lg font-semibold mb-3">คู่มือประชาชน</div>
                                    <div class="leading-relaxed text-[22px]">แบบฟอร์ม ระเบียบ หนังสือราชการต่างๆ</div>
                                    <a href="#" class="group inline-flex items-center h-7 rounded-full text-sm font-semibold whitespace-nowrap px-3 my-3 focus:outline-none focus:ring-2 bg-slate-700 text-slate-100 hover:bg-slate-200 hover:text-slate-900 focus:ring-slate-500">Click
                                        <span class="overflow-visible ml-3 text-slate-300 group-hover:text-slate-400">&#62;</span>
                                    </a>
                                </div>
                            </div>
                            <div class="p-4 w-full md:w-1/3 flex flex-col text-center items-center">
                                <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-slate-500 text-sky-200 mb-5 flex-shrink-0">
                                    <svg aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-[60px] h-[60px]">
                                        <path d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                                <div class="flex-grow">
                                    <div class="text-white text-lg font-semibold mb-3">คำแนะนำชำระภาษี</div>
                                    <div class="leading-relaxed text-[22px]">ภาษีป้าย ภาษีที่ดินและสิ่งปลูกสร้าง</div>
                                    <a href="#" class="group inline-flex items-center h-7 rounded-full text-sm font-semibold whitespace-nowrap px-3 my-3 focus:outline-none focus:ring-2 bg-slate-700 text-slate-100 hover:bg-slate-200 hover:text-slate-900 focus:ring-slate-500">Click
                                        <span class="overflow-visible ml-3 text-slate-300 group-hover:text-slate-400">&#62;</span>
                                    </a>
                                </div>
                            </div>
                            <div class="p-4 w-full md:w-1/3 flex flex-col text-center items-center">
                                <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-slate-500 text-sky-200 mb-5 flex-shrink-0">
                                    <svg aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-[60px] h-[60px]">
                                        <path d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                                <div class="flex-grow">
                                    <div class="text-white text-lg font-semibold mb-3">Knowledge</div>
                                    <div class="leading-relaxed text-[22px]">การจัดการองค์ความรู้ภายในองค์กร</div>
                                    <a href="#" class="group inline-flex items-center h-7 rounded-full text-sm font-semibold whitespace-nowrap px-3 my-3 focus:outline-none focus:ring-2 bg-slate-700 text-slate-100 hover:bg-slate-200 hover:text-slate-900 focus:ring-slate-500">Click
                                        <span class="overflow-visible ml-3 text-slate-300 group-hover:text-slate-400">&#62;</span>
                                    </a>
                                </div>
                            </div>
                            <div class="p-4 w-full md:w-2/5 flex flex-col text-center items-center">
                                <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-slate-500 text-sky-200 mb-5 flex-shrink-0">
                                    <svg aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-[60px] h-[60px]">
                                        <path d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                                <div class="flex-grow">
                                    <div class="text-white text-lg font-semibold mb-3">Google Earth</div>
                                    <div class="leading-relaxed text-[22px]">แผนที่ดาวเทียม</div>
                                    <a href="#" class="group inline-flex items-center h-7 rounded-full text-sm font-semibold whitespace-nowrap px-3 my-3 focus:outline-none focus:ring-2 bg-slate-700 text-slate-100 hover:bg-slate-200 hover:text-slate-900 focus:ring-slate-500">Click
                                        <span class="overflow-visible ml-3 text-slate-300 group-hover:text-slate-400">&#62;</span>
                                    </a>
                                </div>
                            </div>
                            <div class="p-4 w-full md:w-2/5 flex flex-col text-center items-center">
                                <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-slate-500 text-sky-200 mb-5 flex-shrink-0">
                                    <svg aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-[60px] h-[60px]">
                                        <path d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                                <div class="flex-grow">
                                    <div class="text-white text-lg font-semibold mb-3">แบบสอบถาม</div>
                                    <div class="leading-relaxed text-[22px]">กรอกแบบสอบถามความพึงพอใจ</div>
                                    <a href="#" class="group inline-flex items-center h-7 rounded-full text-sm font-semibold whitespace-nowrap px-3 my-3 focus:outline-none focus:ring-2 bg-slate-700 text-slate-100 hover:bg-slate-200 hover:text-slate-900 focus:ring-slate-500">Click
                                        <span class="overflow-visible ml-3 text-slate-300 group-hover:text-slate-400">&#62;</span>
                                    </a>
                                </div>
                            </div>
                            <div class="p-4 w-full md:w-2/5 flex flex-col text-center items-center">
                                <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-slate-500 text-sky-200 mb-5 flex-shrink-0">
                                    <svg aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-[60px] h-[60px]">
                                        <path d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9zm3.75 11.625a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                                <div class="flex-grow">
                                    <div class="text-white text-lg font-semibold mb-3">ประมวลผลสำรวจ</div>
                                    <div class="leading-relaxed text-[22px]">ประมวลผลสำรวจความพึงพอใจ</div>
                                    <a href="#" class="group inline-flex items-center h-7 rounded-full text-sm font-semibold whitespace-nowrap px-3 my-3 focus:outline-none focus:ring-2 bg-slate-700 text-slate-100 hover:bg-slate-200 hover:text-slate-900 focus:ring-slate-500">Click
                                        <span class="overflow-visible ml-3 text-slate-300 group-hover:text-slate-400">&#62;</span>
                                    </a>
                                </div>
                            </div>
                            <div class="p-4 w-full md:w-2/5 flex flex-col text-center items-center">
                                <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-slate-500 text-sky-200 mb-5 flex-shrink-0">
                                    <svg aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-[60px] h-[60px]">
                                        <path d="M6.75 7.5l3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0021 18V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v12a2.25 2.25 0 002.25 2.25z" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                                <div class="flex-grow">
                                    <div class="text-white text-lg font-semibold mb-3">NAX SOLUTION</div>
                                    <div class="leading-relaxed text-[22px]">เว็บไซต์เพื่อท้องถิ่นไทย</div>
                                    <a href="#" class="group inline-flex items-center h-7 rounded-full text-sm font-semibold whitespace-nowrap px-3 my-3 focus:outline-none focus:ring-2 bg-slate-700 text-slate-100 hover:bg-slate-200 hover:text-slate-900 focus:ring-slate-500">Click
                                        <span class="overflow-visible ml-3 text-slate-300 group-hover:text-slate-400">&#62;</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="text-gray-200">
                    <div class="container px-5 py-16 mx-auto">
                        <div class="flex flex-col xl:flex-row gap-5 justify-center items-center">
                            <!-- Poll Box -->
                            <div class="relative flex flex-col rounded-[20px] max-w-[300px] bg-slate-500 bg-clip-border shadow-3xl w-full !p-4 3xl:p-![18px]">
                                <div class="text-[34px] font-semibold text-salte-100 underline underline-offset-1">
                                    สำรวจความคิดเห็น</div>
                                <div class="relative flex flex-row justify-between">
                                    <div class="flex items-center">
                                        <div class="flex h-9 w-9 items-center justify-center rounded-full bg-slate-600">
                                            <svg aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                                                <path d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <div class="ml-4 text-[26px] font-semibold text-navy-700">คำถาม</div>
                                    </div>
                                </div>
                                <div class="h-full w-full">
                                    <div class="flex items-center justify-between p-2">
                                        <ul class="w-full text-[22px] font-semibold text-gray-700  rounded-lg">
                                            <li class="border-b border-gray-200 rounded-t-lg">
                                                <div class="flex items-center pl-3">
                                                    <input id="vue-checkbox" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                                                    <label for="vue-checkbox" class="w-full py-3 ml-2 text-sm font-semibold text-slate-100">ตัวเลือก
                                                        1</label>
                                                </div>
                                            </li>
                                            <li class="w-full border-b border-gray-200 rounded-t-lg">
                                                <div class="flex items-center pl-3">
                                                    <input id="vue-checkbox" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                                                    <label for="vue-checkbox" class="w-full py-3 ml-2 text-sm font-semibold text-slate-100">ตัวเลือก
                                                        2</label>
                                                </div>
                                            </li>
                                            <li class="w-full border-b border-gray-200 rounded-t-lg">
                                                <div class="flex items-center pl-3">
                                                    <input id="vue-checkbox" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                                                    <label for="vue-checkbox" class="w-full py-3 ml-2 text-sm font-semibold text-slate-100">ตัวเลือก
                                                        3</label>
                                                </div>
                                            </li>
                                            <li class="w-full border-b border-gray-200 rounded-t-lg">
                                                <div class="flex items-center pl-3">
                                                    <input id="vue-checkbox" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                                                    <label for="vue-checkbox" class="w-full py-3 ml-2 text-sm font-semibold text-slate-100">ตัวเลือก
                                                        4</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Link Dropdown Box -->
                            <div class="relative flex flex-col rounded-[20px] max-w-[300px] bg-slate-500 bg-clip-border shadow-3xl w-full !p-4 3xl:p-![18px]">
                                <div class="text-[34px] font-semibold text-salte-100 underline underline-offset-1">Link
                                    ที่น่าสนใจ</div>
                                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white bg-slate-700 hover:bg-slate-900 focus:ring-4 focus:outline-none focus:ring-sky-600 font-medium rounded-lg text-[22px] px-4 py-2.5 text-right inline-flex items-center" type="button">ลิงค์ในจังหวัด <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg></button>
                                <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                    <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">จังหวัด1</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">จังหวัด2</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">จังหวัด3</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">จังหวัด4</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Link opt Box -->
                            <div class="relative flex flex-col rounded-[20px] max-w-[300px] bg-slate-500 bg-clip-border shadow-3xl w-full !p-4 3xl:p-![18px]">
                                <div class="text-[34px] font-semibold text-salte-100 underline underline-offset-1">Link
                                    opt</div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="text-slate-400">
                    <div class="container px-5 py-16 mx-auto flex flex-wrap justify-center">
                        <div class="flex flex-wrap justify-center -m-4">
                            <div class="p-2 lg:w-1/3 md:w-full">
                                <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50 py-4 px-8 sm:flex-row flex-col">
                                    <div class="flex-grow">
                                        <div class="text-slate-200 text-md font-semibold mb-3">ลิงค์นอกแบนเนอร์ 1
                                        </div>
                                        <div class="leading-relaxed text-sm">เนื้อหาลิงค์นอกโดยย่อหรือไม่ย่อก็ได้
                                        </div>
                                        <a href="#" class="mt-3 text-sky-200 hover:text-yellow-200 inline-flex items-center">Click
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/3 md:w-full">
                                <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50 py-4 px-8 sm:flex-row flex-col">
                                    <div class="flex-grow">
                                        <div class="text-slate-200 text-md font-semibold mb-3">ลิงค์นอกแบนเนอร์ 2
                                        </div>
                                        <div class="leading-relaxed text-sm">เนื้อหาลิงค์นอกโดยย่อหรือไม่ย่อก็ได้
                                        </div>
                                        <a href="#" class="mt-3 text-sky-200 hover:text-yellow-200 inline-flex items-center">Click
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/3 md:w-full">
                                <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50 py-4 px-8 sm:flex-row flex-col">
                                    <div class="flex-grow">
                                        <div class="text-slate-200 text-md font-semibold mb-3">ลิงค์นอกแบนเนอร์ 3
                                        </div>
                                        <div class="leading-relaxed text-sm">เนื้อหาลิงค์นอกโดยย่อหรือไม่ย่อก็ได้
                                        </div>
                                        <a href="#" class="mt-3 text-sky-200 hover:text-yellow-200 inline-flex items-center">Click
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/3 md:w-full">
                                <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50 py-4 px-8 sm:flex-row flex-col">
                                    <div class="flex-grow">
                                        <div class="text-slate-200 text-md font-semibold mb-3">ลิงค์นอกแบนเนอร์ 4
                                        </div>
                                        <div class="leading-relaxed text-sm">เนื้อหาลิงค์นอกโดยย่อหรือไม่ย่อก็ได้
                                        </div>
                                        <a href="#" class="mt-3 text-sky-200 hover:text-yellow-200 inline-flex items-center">Click
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/3 md:w-full">
                                <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50 py-4 px-8 sm:flex-row flex-col">
                                    <div class="flex-grow">
                                        <div class="text-slate-200 text-md font-semibold mb-3">ลิงค์นอกแบนเนอร์ 5
                                        </div>
                                        <div class="leading-relaxed text-sm">เนื้อหาลิงค์นอกโดยย่อหรือไม่ย่อก็ได้
                                        </div>
                                        <a href="#" class="mt-3 text-sky-200 hover:text-yellow-200 inline-flex items-center">Click
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/3 md:w-full">
                                <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50 py-4 px-8 sm:flex-row flex-col">
                                    <div class="flex-grow">
                                        <div class="text-slate-200 text-md font-semibold mb-3">ลิงค์นอกแบนเนอร์ 6
                                        </div>
                                        <div class="leading-relaxed text-sm">เนื้อหาลิงค์นอกโดยย่อหรือไม่ย่อก็ได้
                                        </div>
                                        <a href="#" class="mt-3 text-sky-200 hover:text-yellow-200 inline-flex items-center">Click
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>

            <footer>
                <div class="ontainer px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
                    <div class="w-60 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
                        <a href="#" class="flex font-semibold items-center flex-col md:flex-row md:justify-start justify-center text-slate-300">
                            <i class="footer_logo md:absolute"></i>
                            <span class="ml-0 md:ml-14 text-[26px]">เทศบาลตำบลรั้วใหญ่</span>
                        </a>
                        <div class="mt-2 text-sm text-slate-400 font-semibold">อำเภอเมืองสุพรรณบุรี
                            จังหวัดสุพรรณบุรี</div>
                    </div>
                    <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
                        <div class="lg:w-1/3 md:w-1/2 w-full px-4">
                            <div class="font-semibold text-slate-300 tracking-widest text-[22px] mb-3">ติดต่อหน่วยงาน
                            </div>
                            <nav class="list-none mb-10">
                                <li>
                                    <a class="text-slate-200 text-sm">ที่อยู่ : </a>
                                </li>
                                <li>
                                    <a href="#" class="text-slate-200 text-sm hover:text-sky-400">โทรศัพท์ :
                                        000-000-000</a>
                                </li>
                                <li>
                                    <a href="#" class="text-slate-200 text-sm hover:text-sky-400">โทรสาร :
                                        000-000-000</a>
                                </li>
                                <li>
                                    <a href="#" class="text-slate-200 text-sm hover:text-sky-400">E-mail :
                                        aaaa@aaaa.go.th</a>
                                </li>
                            </nav>
                        </div>
                        <div class="lg:w-1/3 md:w-1/2 w-full px-4">
                            <div class="font-semibold text-slate-300 tracking-widest text-[22px] mb-3">เพิ่มเติม</div>
                            <nav class="list-none mb-10">
                                <li>
                                    <a class="text-slate-200 text-sm">จำนวนผู้เข้าชม xxxxxx</a>
                                </li>
                                <li>
                                    <div class="text-slate-200 text-sm">จัดทำโดย : <a href="#" class="hover:text-sky-400">Naxsolutiom.com</a></div>
                                </li>
                            </nav>
                        </div>
                        <div class="lg:w-1/3 md:w-1/2 w-full px-4">
                            <nav class="list-disc text-slate-200 mb-10">
                                <li>
                                    <a href="" class="text-slate-200 text-sm hover:text-sky-400">แผนผังเว็บไซต์</a>
                                </li>
                                <li>
                                    <a href="" class="text-slate-200 text-sm hover:text-sky-400">นโยบาย1</a>
                                </li>
                                <li>
                                    <a href="" class="text-slate-200 text-sm hover:text-sky-400">นโยบาย2</a>
                                </li>
                                <li>
                                    <a href="" class="text-slate-200 text-sm hover:text-sky-400">นโยบาย3</a>
                                </li>
                                <li>
                                    <a href="" class="text-slate-200 text-sm hover:text-sky-400">นโยบาย4</a>
                                </li>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="border-t border-sky-950">
                    <div class="container max-w-full mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row items-center">
                        <div class="text-slate-300 text-md text-center sm:text-left">สงวนลิขสิทธิ์ พ.ศ.2551
                            ตามพระราชบัญญัติลิขสิทธิ์ 2537
                            <a href="#" class="text-gray-200 ml-1" target="_blank">เทศบาลตำบลรั้วใหญ่</a>
                        </div>
                        <span class="inline-flex gap-2 sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                            <a href="#" class="text-gray-300">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-300">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                    </path>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-300">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                                </svg>
                            </a>
                        </span>
                    </div>
                </div>
            </footer>

        </div>
    </section>

    <script src="/ep1/node_modules/flowbite/dist/flowbite.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>  -->
</body>

</html>