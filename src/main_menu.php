<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <title>News - slide - manage</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.0/Sortable.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</head>

<style>
    .bg-menu {
        background-color: #EAF9FF;
    }

    .submenu {
        max-height: 0;
        overflow: hidden;
        position: relative;
        border: 2px solid transparent;
        padding-left: 20px;
        /* เพิ่มการขยับซับเมนู */
    }

    .menu-item.open .submenu {
        max-height: 1000px;
    }

    .menu-item.open>button,
    .menu-item>button:hover {
        color: white;
    }

    .submenu a {
        position: relative;
    }

    .submenu a::before {
        content: '';
        position: absolute;
        left: -10px;
        top: 50%;
        transform: translateY(-50%);
        width: 4px;
        height: 100%;
        background-color: #ccc;
        /* สีพื้นฐานของเส้น */
    }

    .menu-item.open .submenu a:hover {
        background-color: #FFFFFF;
        border-radius: 20px;
    }

    .menu-item.open .submenu a:hover::before {
        border-radius: 20px;
    }

    /* Menu Admin */
    .menu-item.menu-1>button:hover,
    .menu-item.menu-1.open>button {
        background-color: #18B9AC;
    }

    .menu-item.menu-1 .submenu a:hover::before {
        background-color: #18B9AC;
    }

    .menu-item.menu-1>button::before {
        background-color: #18B9AC;
    }

    /* Menu หนังสือราชการ และระบบข่าว */
    .menu-item.menu-2>button:hover,
    .menu-item.menu-2.open>button {
        background-color: #F7931A;
    }

    .menu-item.menu-2 .submenu a:hover::before {
        background-color: #F7931A;
    }

    .menu-item.menu-2>button::before {
        background-color: #F7931A;
    }

    /* Menu แผน / ข้อบัญญัติ */
    .menu-item.menu-3>button:hover,
    .menu-item.menu-3.open>button {
        background-color: #FA4778;
    }

    .menu-item.menu-3 .submenu a:hover::before {
        background-color: #FA4778;
    }

    .menu-item.menu-3>button::before {
        background-color: #FA4778;
    }

    /* Menu รายงาน / สถิติ */
    .menu-item.menu-4>button:hover,
    .menu-item.menu-4.open>button {
        background-color: #56ACFB;
    }

    .menu-item.menu-4 .submenu a:hover::before {
        background-color: #56ACFB;
    }

    .menu-item.menu-4>button::before {
        background-color: #56ACFB;
    }

    /* Menu ข้อมูลหน่วยงาน */
    .menu-item.menu-5>button:hover,
    .menu-item.menu-5.open>button {
        background-color: #7459D9;
    }

    .menu-item.menu-5 .submenu a:hover::before {
        background-color: #7459D9;
    }

    .menu-item.menu-5>button::before {
        background-color: #7459D9;
    }

    /* Menu ระบบจัดการ Nax */
    .menu-item.menu-6>button:hover,
    .menu-item.menu-6.open>button {
        background-color: #D72727;
    }

    .menu-item.menu-6 .submenu a:hover::before {
        background-color: #D72727;
    }

    .menu-item.menu-6>button::before {
        background-color: #D72727;
    }


    /* เพิ่มเส้นหน้าเมนูหลัก */
    .menu-item>button::before {
        content: '';
        position: absolute;
        left: -10px;
        top: 50%;
        transform: translateY(-50%);
        width: 0;
        height: 100%;
        background-color: transparent;
        transition: width 0.3s, background-color 0.3s, left 0.3s;
        border-radius: 0 5px 5px 0;
    }

    .menu-item>button:hover::before,
    .menu-item.open>button::before {
        width: 6px;
        left: -14px;
        /* เพิ่มระยะห่างจากเมนู */
    }

    /* จัด SVG ให้แนวเดียวกับข้อความ */
    .menu-item>button {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    svg {
        transition: fill 0.3s ease;
    }

    .arrow-icon {
        transition: transform 0.3s ease;
    }

    .menu-item.open .arrow-icon {
        transform: rotate(180deg);
    }

    .menu-item>button .menu-icon {
        border-radius: 100%;
    }

    .menu-item>button:hover .menu-icon,
    .menu-item.open>button .menu-icon {
        background-color: white;
    }
</style>

<div id="logo-sidebar" aria-label="Sidebar" class="fixed min-w-72 max-w-80 h-[80%] left-0 inset-0 lg:block lg:h-[calc(100vh-4rem)] top-24 lg:sticky z-40 transition-transform -translate-x-full lg:translate-x-0 bg-cyan-100 rounded-3xl py-5">
    <div class="relative h-full overflow-y-auto px-3 pb-8 pt-2">
        <div class="menu-item menu-1 relative">
            <button class="flex items-center justify-between relative w-full group px-4 py-2 rounded-3xl hover:bg-cyan-500 outline-none" onclick="toggleMenu(this)">
                <div class="flex items-center">
                    <img class="menu-icon size-9 mr-2 p-1 group-hover:bg-white group-hover:rounded-full" data-icon="icon-menu1" src="../public/svg/iconmn_admin.svg" />
                    <span class="ml-2 text-lg">Admin</span>
                </div>
                <svg class="arrow-icon w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div class="submenu w-full">
                <a href="/bof_v2.1/web-info" class="block px-4 py-2 outline-none text-base">รายละเอียดการใช้งานเว็ปไซต์</a>
                <a href="/bof_v2.1/news-info" class="block px-4 py-2 outline-none text-base">รายละเอียดการลงข่าว</a>
                <a href="help.php" class="block px-4 py-2 outline-none text-base">คู่มือการใช้งาน</a>
                <a href="/bof_v2.1/mail-to-nax" class="block px-4 py-2 outline-none text-base">ส่งข้อความถึง Nax Solution</a>
                <a href="/bof_v2.1/map-nax" class="block px-4 py-2 outline-none text-base">แผนที่ บริษัท Nax Solution</a>
            </div>
        </div>
        <div class="menu-item menu-2 relative mt-2">
            <button class="flex items-center justify-between relative w-full px-4 py-2 rounded-3xl hover:bg-cyan-500 outline-none" onclick="toggleMenu(this)">
                <div class="flex items-center">
                    <img class="menu-icon size-9 mr-2 p-1 group-hover:bg-white group-hover:rounded-full" data-icon="icon-menu1" src="../public/svg/iconmn_book.svg" />
                    <span class="ml-2 text-lg text-left leading-5">หนังสือราชการ และระบบข่าว</span>
                </div>
                <svg class="arrow-icon w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div class="submenu w-full">
                <a href="/bof_v2.1/manage-govdoc?id=1" class="block px-4 py-2 outline-none text-base">subkey1</a>
                <a href="/bof_v2.1/manage-news?id=2" class="block px-4 py-2 outline-none text-base">subkey2</a>
                <a href="/bof_v2.1/manage-news?id=3" class="block px-4 py-2 outline-none text-base">subkey3</a>
                <a href="/bof_v2.1/manage-news?id=4" class="block px-4 py-2 outline-none text-base">subkey4</a>
            </div>
        </div>
        <div class="menu-item menu-3 relative mt-2">
            <button class="flex items-center justify-between relative w-full px-4 py-2 rounded-3xl hover:bg-cyan-500 outline-none" onclick="toggleMenu(this)">
                <div class="flex items-center">
                    <img class="menu-icon size-9 mr-2 p-1 group-hover:bg-white group-hover:rounded-full" data-icon="icon-menu1" src="../public/svg/iconmn_graph.svg" />
                    <span class="ml-2 text-lg">แผน / ข้อบัญญัติ</span>
                </div>
                <svg class="arrow-icon w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div class="submenu w-full">
                <?php
                $pjPlan = array(1, 7, 8, 14, 15, 17, 18, 19, 20, 21, 22, 24, 27, 32, 33, 44, 45, 54, 57);
                foreach ($pjPlan as $key) {
                    if ($projArrRev2[$key]['on'] == 1) {
                ?>
                        <a href="/bof_v2.1/manage-project?id=<?php echo $key; ?>" class="block px-4 py-2 outline-none text-base"><?php echo $projArrRev2[$key]['name']; ?></a>
                    <?php
                    }
                }
                $etcData3 = array(12);
                foreach ($etcData3 as $key) {
                    if ($hEtcArrRev2[$key]['on'] == 1) {
                    ?>
                        <a href="<?php echo $hEtcArrRev2[$key]['link']; ?>" class="block px-4 py-2 outline-none text-base"><?php echo $hEtcArrRev2[$key]['name']; ?></a>
                <?php
                    }
                }
                ?>
            </div>
        </div>
        <div class="menu-item menu-4 relative mt-2">
            <button class="flex items-center justify-between relative w-full px-4 py-2 rounded-3xl hover:bg-cyan-500 outline-none" onclick="toggleMenu(this)">
                <div class="flex items-center">
                    <img class="menu-icon size-9 mr-2 p-1 group-hover:bg-white group-hover:rounded-full" data-icon="icon-menu1" src="../public/svg/iconmn_report.svg" />
                    <span class="ml-2 text-lg">รายงาน / สถิติ</span>
                </div>
                <svg class="arrow-icon w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div class="submenu w-full">
                <?php
                $pjReport = array(2, 5, 9, 16, 23, 26, 29, 34, 35, 36, 37, 38, 39, 40, 47, 48, 52, 53, 56, 58);
                foreach ($pjReport as $key) {
                    if ($projArrRev2[$key]['on'] == 1) {
                ?>
                        <a href="/bof_v2.1/manage-project?id=<?php echo $key; ?>" class="block px-4 py-2 outline-none text-base"><?php echo $projArrRev2[$key]['name']; ?></a>
                <?php
                    }
                }
                ?>
            </div>
        </div>
        <div class="menu-item menu-5 relative mt-2">
            <button class="flex items-center justify-between relative w-full px-4 py-2 rounded-3xl hover:bg-cyan-500 outline-none" onclick="toggleMenu(this)">
                <div class="flex items-center">
                    <img class="menu-icon size-9 mr-2 p-1 group-hover:bg-white group-hover:rounded-full" data-icon="icon-menu1" src="../public/svg/iconmn_frame.svg" />
                    <span class="ml-2 text-lg">ข้อมูลหน่วยงาน</span>
                </div>
                <svg class="arrow-icon w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div class="submenu w-full">
                <?php
                $etcData1 = array(16, 6, 7, 8, 9);
                foreach ($etcData1 as $key) {
                    if ($hEtcArrRev2[$key]['on'] == 1) {
                ?>
                        <a href="<?php echo $hEtcArrRev2[$key]['link']; ?>" class="block px-4 py-2 outline-none text-base"><?php echo $hEtcArrRev2[$key]['name']; ?></a>
                    <?php
                    }
                }

                if ($org == "stj") { ?>
                    <a href="manage_webboard.php?id=2" class="block px-4 py-2 outline-none text-base">webboard ถาม-ตอบ มติ ก.จังหวัด</a>
                <?php } ?>

                <a href="/bof_v2.1/manage-performance?hd=1" class="block px-4 py-2 outline-none text-base">ตรวจประเมิน ITA</a>
                <a href="/bof_v2.1/manage-performance?hd=2" class="block px-4 py-2 outline-none text-base">ตรวจประเมิน LPA</a>

                <?php
                $pjData1 = array(6, 25, 28, 50, 51, 55);
                foreach ($pjData1 as $key) {
                    if ($projArrRev2[$key]['on'] == 1) {
                ?>
                        <a href="/bof_v2.1/manage-project?id=<?php echo $key; ?>" class="block px-4 py-2 outline-none text-base"><?php echo $projArrRev2[$key]['name']; ?></a>
                    <?php
                    }
                }

                $etcData2 = array(14, 2, 3, 4, 5);
                foreach ($etcData2 as $key) {
                    if ($hEtcArrRev2[$key]['on'] == 1) {
                    ?>
                        <a href="<?php echo $hEtcArrRev2[$key]['link']; ?>" class="block px-4 py-2 outline-none text-base"><?php echo $hEtcArrRev2[$key]['name']; ?></a>
                    <?php
                    }
                }

                $pjData2 = array(12, 30, 31, 41, 43, 46, 49, 59);
                foreach ($pjData2 as $key) {
                    if ($projArrRev2[$key]['on'] == 1) {
                    ?>
                        <a href="/bof_v2.1/manage-project?id=<?php echo $key; ?>" class="block px-4 py-2 outline-none text-base"><?php echo $projArrRev2[$key]['name']; ?></a>
                <?php
                    }
                }
                ?>
            </div>
        </div>
        <div class="menu-item menu-6 relative mt-2">
            <button class="flex items-center justify-between relative w-full px-4 py-2 rounded-3xl hover:bg-cyan-500 outline-none" onclick="toggleMenu(this)">
                <div class="flex items-center">
                    <img class="menu-icon size-9 mr-2 p-1 group-hover:bg-white group-hover:rounded-full" data-icon="icon-menu1" src="../public/svg/iconmn_nax.svg" />
                    <span class="ml-2 text-lg">ระบบจัดการ Nax</span>
                </div>
                <svg class="arrow-icon w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div class="submenu w-full">
                <?php if ($_SESSION["naxPmt"] == "naxAll" || $_SESSION["naxPmt"] == "naxLy1" || $_SESSION["naxPmt"] == "naxLy2") {
                    // naxAll
                    if ($_SESSION["naxPmt"] == "naxAll") {
                        foreach ($menuNaxArray['nxAll'] as $value) { ?>
                            <a href="<?php echo $value['link']; ?>" class="block px-4 py-2 outline-none text-base">ระบบจัดการ <?php echo $value['name']; ?></a>
                        <?php
                        }
                    }
                    // naxLy1
                    if ($_SESSION["naxPmt"] == "naxLy1") {
                        foreach ($menuNaxArray['nxLy1'] as $value) {
                        ?>
                            <a href="<?php echo $value['link']; ?>" class="block px-4 py-2 outline-none text-base">ระบบจัดการ <?php echo $value['name']; ?></a>
                        <?php
                        }
                    }
                    // naxLy2
                    if ($_SESSION["naxPmt"] == "naxLy2") {
                        foreach ($menuNaxArray['nxLy2'] as $value) {
                        ?>
                            <a href="<?php echo $value['link']; ?>" class="block px-4 py-2 outline-none text-base">ระบบจัดการ <?php echo $value['name']; ?></a>
                        <?php
                        }
                    }
                    // base
                    foreach ($menuNaxArray['base'] as $value) {
                        ?>
                        <a href="<?php echo $value['link']; ?>" class="block px-4 py-2 outline-none text-base">ระบบย้าย <?php echo $value['name']; ?></a>
                        <?php
                    }
                    // stj-nax
                    if ($stj_NAX_do != 1) {
                        foreach ($menuNaxArray['stj'] as $value) {
                        ?>
                            <a href="<?php echo $value['link']; ?>" class="block px-4 py-2 outline-none text-base">ระบบจัดการ <?php echo $value['name']; ?></a>
                        <?php
                        }
                        ?>
                <?php
                    }
                } ?>

            </div>
        </div>
    </div>
</div>

<script>
    function toggleMenu(element) {
        const menuItem = element.parentElement;
        const isOpen = menuItem.classList.contains('open');

        // Close all other menus
        document.querySelectorAll('.menu-item').forEach(item => {
            item.classList.remove('open');
        });

        // Toggle current menu
        if (!isOpen) {
            menuItem.classList.add('open');
        }
    }
</script>