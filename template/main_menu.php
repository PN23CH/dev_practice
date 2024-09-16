<link href="../style/main_menu.css" rel="stylesheet" type="text/css" />
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
                <?php $currentId = isset($_GET['id']) ? $_GET['id'] : null;
                if ($org == "stj") {
                    foreach ($govStjArrRev2 as $key => $value) {
                        if ($value['on'] == 1) {
                ?>
                            <a href="/dev_practice/src/manage_news.php?id=<?php echo $key; ?>" class="block px-4 py-2 outline-none text-base <?php echo ($currentId == $key) ? 'active' : ''; ?>"><?php echo $govStjArrRev2[$key]['name']; ?></a>
                        <?php
                        }
                    }
                }
                foreach ($newsArrRev2 as $key => $value) {
                    if ($value['on'] == 1) {
                        ?>

                        <a href="/dev_practice/src/manage_news.php?id=<?php echo $key; ?>" class="block px-4 py-2 outline-none text-base <?php echo ($currentId == $key) ? 'active' : ''; ?>"><?php echo $newsArrRev2[$key]['name']; ?></a>
                    <?php
                    }
                }

                $etcNews = array(0, 1, 10, 15, 11);
                foreach ($etcNews as $key) {
                    if ($hEtcArrRev2[$key]['on'] == 1) {
                    ?>

                        <a href="<?php echo $hEtcArrRev2[$key]['link']; ?>" class="block px-4 py-2 outline-none text-base <?php echo ($currentId == $key) ? 'active' : ''; ?>"><?php echo $hEtcArrRev2[$key]['name']; ?></a>
                <?php
                    }
                }
                ?>
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
                        <a href="/bof_v2.1/news/manage-project?id=<?php echo $key; ?>" class="block px-4 py-2 outline-none text-base"><?php echo $projArrRev2[$key]['name']; ?></a>
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
    document.querySelectorAll('.submenu a').forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();

            // Remove 'active' class from all submenu links
            document.querySelectorAll('.submenu a').forEach(link => {
                link.classList.remove('active');
            });

            // Add 'active' class to the clicked submenu link
            this.classList.add('active');

            // Find the parent menu item and ensure it's open
            const menuItem = this.closest('.menu-item.menu-2');

            // Close all other menus
            document.querySelectorAll('.menu-item.menu-2').forEach(item => {
                item.classList.remove('open');
            });

            // Add 'open' class to the parent menu item of the clicked submenu link
            if (menuItem) {
                menuItem.classList.add('open');
            }

            // Navigate to the clicked link
            window.location.href = this.href;
        });
    });

    // Check URL on load to set the appropriate menu item open
    document.addEventListener('DOMContentLoaded', () => {
        const currentId = new URLSearchParams(window.location.search).get('id');
        if (currentId) {
            document.querySelectorAll('.submenu a').forEach(link => {
                if (link.href.includes(`id=${currentId}`)) {
                    link.classList.add('active');
                    const menuItem = link.closest('.menu-item.menu-2');
                    if (menuItem) {
                        menuItem.classList.add('open');
                    }
                }
            });
        }
    });


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