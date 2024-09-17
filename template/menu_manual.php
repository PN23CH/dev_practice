<link href="../style/menu_manual.css" rel="stylesheet" type="text/css" />
<div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-30"></div>
<div menu-help-right class="hidden fixed min-w-72 max-w-80 h-[80%] top-0 right-0 inset-0 lg:block lg:h-[calc(100vh-4rem)] lg:sticky z-40 transition-transform transform translate-x-full lg:translate-x-0 bg-cyan-100 rounded-3xl py-5">
    <div class="z-10">
        <div class="flex items-center justify-center bg-cyan-100 text-3xl text-center rounded-t-3xl py-5">คู่มือการใช้งาน</div>
        <div class="bg-teal-400 h-0.5"></div>
    </div>
    <div class="h-[90%] overflow-y-auto px-3 pb-8 pt-2">
        <div class="menu-item menu-1 relative" data-menu-id="1">
            <button class="flex items-center justify-between relative w-full px-4 py-2 rounded-3xl hover:bg-cyan-500 outline-none" onclick="toggleMenu(this)">
                <div class="flex items-center">
                    <img class="menu-icon size-8 mr-1 p-1 group-hover:bg-white group-hover:rounded-full" src="../public/svg/iconhelpmn_newspaper.svg" />
                    <span class="ml-2 text-lg">ระบบ ข่าวสาร</span>
                </div>
                <svg class="arrow-icon w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div class="submenu w-full">
                <a href="page2.php?start=2&mnKey=<?php echo base64_encode(base64_encode(time())); ?>" class="block px-4 py-2 outline-none text-base" data-sub-menu-id="page2">การเพิ่มข่าว</a>
                <a href="page3.php?start=3&mnKey=<?php echo base64_encode(base64_encode(time())); ?>" class="block px-4 py-2 outline-none text-base" data-sub-menu-id="page3">การเพิ่มไฟล์แนบ</a>
                <a href="page4.php?start=4&mnKey=<?php echo base64_encode(base64_encode(time())); ?>" class="block px-4 py-2 outline-none text-base" data-sub-menu-id="page4">การเพิ่ม Gallery ภาพ</a>
                <a href="page5.php?start=5&mnKey=<?php echo base64_encode(base64_encode(time())); ?>" class="block px-4 py-2 outline-none text-base" data-sub-menu-id="page5">การลบ/แก้ไข/ปักหมุด</a>
                <a href="page6.php?start=6&mnKey=<?php echo base64_encode(base64_encode(time())); ?>" class="block px-4 py-2 outline-none text-base" data-sub-menu-id="page6">ข้อจำกัดการลงข่าว</a>
            </div>
        </div>
        <div class="menu-item menu-2 relative mt-2" data-menu-id="2">
            <button class="flex items-center justify-between relative w-full px-4 py-2 rounded-3xl hover:bg-cyan-500 outline-none" onclick="toggleMenu(this)">
                <div class="flex items-center">
                    <img class="menu-icon size-8 mr-1 p-1 group-hover:bg-white group-hover:rounded-full" src="../public/svg/iconhelpmn_egp.svg" />
                    <span class="ml-2 text-lg">ระบบ การดึงข่าว e-GP</span>
                </div>
                <svg class="arrow-icon w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div class="submenu w-full">
                <a href="page7.php?start=7&mnKey=<?php echo base64_encode(base64_encode(time())); ?>" class="block px-4 py-2 outline-none text-base" data-sub-menu-id="page7">การใช้งานข่าว e-GP</a>
            </div>
        </div>
        <div class="menu-item menu-3 relative mt-2" data-menu-id="3">
            <button class="flex items-center justify-between relative w-full px-4 py-2 rounded-3xl hover:bg-cyan-500 outline-none" onclick="toggleMenu(this)">
                <div class="flex items-center">
                    <img class="menu-icon size-8 mr-1 p-1 group-hover:bg-white group-hover:rounded-full" src="../public/svg/iconhelpmn_megaphone.svg" />
                    <span class="ml-2 text-lg">ระบบ Head Line</span>
                </div>
                <svg class="arrow-icon w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div class="submenu w-full">
                <a href="page8.php?start=8&mnKey=<?php echo base64_encode(base64_encode(time())); ?>" class="block px-4 py-2 outline-none text-base" data-sub-menu-id="page8">การใช้งาน Head Line</a>
            </div>
        </div>
        <div class="menu-item menu-4 relative mt-2" data-menu-id="4">
            <button class="flex items-center justify-between relative w-full px-4 py-2 rounded-3xl hover:bg-cyan-500 outline-none" onclick="toggleMenu(this)">
                <div class="flex items-center">
                    <img class="menu-icon size-8 mr-1 p-1 group-hover:bg-white group-hover:rounded-full" src="../public/svg/iconhelpmn_image.svg" />
                    <span class="ml-2 text-lg">ระบบ ภาพสไลด์</span>
                </div>
                <svg class="arrow-icon w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div class="submenu w-full">
                <a href="page9.php?start=9&mnKey=<?php echo base64_encode(base64_encode(time())); ?>" class="block px-4 py-2 outline-none text-base" data-sub-menu-id="page9">การใช้งาน ภาพสไลด์</a>
            </div>
        </div>
        <div class="menu-item menu-5 relative mt-2" data-menu-id="5">
            <button class="flex items-center justify-between relative w-full px-4 py-2 rounded-3xl hover:bg-cyan-500 outline-none" onclick="toggleMenu(this)">
                <div class="flex items-center">
                    <img class="menu-icon size-8 mr-1 p-1 group-hover:bg-white group-hover:rounded-full" src="../public/svg/iconhelpmn_ita.svg" />
                    <span class="ml-2 text-lg">ระบบ ITA</span>
                </div>
                <svg class="arrow-icon w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div class="submenu w-full">
                <a href="page10.php?start=10&mnKey=<?php echo base64_encode(base64_encode(time())); ?>" class="block px-4 py-2 outline-none text-base" data-sub-menu-id="page10">การใช้งาน ITA</a>
            </div>
        </div>
        <div class="menu-item menu-6 relative mt-2" data-menu-id="6">
            <button class="flex items-center justify-between relative w-full px-4 py-2 rounded-3xl hover:bg-cyan-500 outline-none" onclick="toggleMenu(this)">
                <div class="flex items-center">
                    <img class="menu-icon size-8 mr-1 p-1 group-hover:bg-white group-hover:rounded-full" src="../public/svg/iconhelpmn_org.svg" />
                    <span class="ml-2 text-lg">ระบบ โครงสร้างส่วนราชการ</span>
                </div>
                <svg class="arrow-icon w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div class="submenu w-full">
                <a href="page11.php?start=11&mnKey=<?php echo base64_encode(base64_encode(time())); ?>" class="block px-4 py-2 outline-none text-base" data-sub-menu-id="page11">การเพิ่มโครงสร้างส่วนราชการ</a>
                <a href="page12.php?start=12&mnKey=<?php echo base64_encode(base64_encode(time())); ?>" class="block px-4 py-2 outline-none text-base" data-sub-menu-id="page12">การแก้ไขโครงสร้างส่วนราชการ</a>
                <a href="page13.php?start=13&mnKey=<?php echo base64_encode(base64_encode(time())); ?>" class="block px-4 py-2 outline-none text-base" data-sub-menu-id="page13">การลบโครงสร้างส่วนราชการ</a>
            </div>
        </div>
        <div class="menu-item menu-7 relative mt-2" data-menu-id="7">
            <button class="flex items-center justify-between relative w-full px-4 py-2 rounded-3xl hover:bg-cyan-500 outline-none" onclick="toggleMenu(this)">
                <div class="flex items-center">
                    <img class="menu-icon size-8 mr-1 p-1 group-hover:bg-white group-hover:rounded-full" src="../public/svg/iconhelpmn_personal.svg" />
                    <span class="ml-2 text-lg">ระบบ บุคลากร</span>
                </div>
                <svg class="arrow-icon w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div class="submenu w-full">
                <a href="page14.php?start=14&mnKey=<?php echo base64_encode(base64_encode(time())); ?>" class="block px-4 py-2 outline-none text-base" data-sub-menu-id="page14">การเพิ่มบุคลากร</a>
                <a href="page15.php?start=15&mnKey=<?php echo base64_encode(base64_encode(time())); ?>" class="block px-4 py-2 outline-none text-base" data-sub-menu-id="page15">การแก้ไข/โอนย้าย</a>
                <a href="page16.php?start=16&mnKey=<?php echo base64_encode(base64_encode(time())); ?>" class="block px-4 py-2 outline-none text-base" data-sub-menu-id="page16">การลบบุคลากร</a>
            </div>
        </div>
        <div class="menu-item menu-8 relative mt-2" data-menu-id="8">
            <button class="flex items-center justify-between relative w-full px-4 py-2 rounded-3xl hover:bg-cyan-500 outline-none" onclick="toggleMenu(this)">
                <div class="flex items-center">
                    <img class="menu-icon size-8 mr-1 p-1 group-hover:bg-white group-hover:rounded-full" src="../public/svg/iconhelpmn_helpbook.svg" />
                    <span class="ml-2 text-lg">ระบบ จัดการคู่มือประชาชน</span>
                </div>
                <svg class="arrow-icon w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div class="submenu w-full">
                <a href="page17.php?start=14&mnKey=<?php echo base64_encode(base64_encode(time())); ?>" class="block px-4 py-2 outline-none text-base" data-sub-menu-id="page17">การใช้งาน คู่มือประชาชน</a>
            </div>
        </div>
        <div class="menu-item menu-9 relative mt-2" data-menu-id="9">
            <button class="flex items-center justify-between relative w-full px-4 py-2 rounded-3xl hover:bg-cyan-500 outline-none" onclick="toggleMenu(this)">
                <div class="flex items-center">
                    <img class="menu-icon size-8 mr-1 p-1 group-hover:bg-white group-hover:rounded-full" src="../public/svg/iconhelpmn_poll.svg" />
                    <span class="ml-2 text-lg">ระบบ POLL</span>
                </div>
                <svg class="arrow-icon w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div class="submenu w-full">
                <a href="page18.php?start=18&mnKey=<?php echo base64_encode(base64_encode(time())); ?>" class="block px-4 py-2 outline-none text-base" data-sub-menu-id="page18">การเพิ่ม POLL</a>
                <a href="page19.php?start=19&mnKey=<?php echo base64_encode(base64_encode(time())); ?>" class="block px-4 py-2 outline-none text-base" data-sub-menu-id="page19">การแก้ไข POLL</a>
                <a href="page20.php?start=20&mnKey=<?php echo base64_encode(base64_encode(time())); ?>" class="block px-4 py-2 outline-none text-base" data-sub-menu-id="page20">การลบ POLL</a>
            </div>
        </div>
        <div class="menu-item menu-10 relative mt-2" data-menu-id="10">
            <button class="flex items-center justify-between relative w-full px-4 py-2 rounded-3xl hover:bg-cyan-500 outline-none" onclick="toggleMenu(this)">
                <div class="flex items-center">
                    <img class="menu-icon size-8 mr-1 p-1 group-hover:bg-white group-hover:rounded-full" src="../public/svg/iconhelpmn_webboard.svg" />
                    <span class="ml-2 text-lg">ระบบ Web Board</span>
                </div>
                <svg class="arrow-icon w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div class="submenu w-full">
                <a href="page21.php?start=21&mnKey=<?php echo base64_encode(base64_encode(time())); ?>" class="block px-4 py-2 outline-none text-base" data-sub-menu-id="page21">การจัดการกระดานสนทนา</a>
                <a href="page22.php?start=22&mnKey=<?php echo base64_encode(base64_encode(time())); ?>" class="block px-4 py-2 outline-none text-base" data-sub-menu-id="page22">การลบกระดานสนทนา</a>
                <a href="page23.php?start=23&mnKey=<?php echo base64_encode(base64_encode(time())); ?>" class="block px-4 py-2 outline-none text-base" data-sub-menu-id="page23">การปักหมุดกระดานสนทนา</a>
            </div>
        </div>
        <div class="menu-item menu-11 relative mt-2" data-menu-id="11">
            <button class="flex items-center justify-between relative w-full px-4 py-2 rounded-3xl hover:bg-cyan-500 outline-none" onclick="toggleMenu(this)">
                <div class="flex items-center">
                    <img class="menu-icon size-8 mr-1 p-1 group-hover:bg-white group-hover:rounded-full" src="../public/svg/iconhelpmn_travel.svg" />
                    <span class="ml-2 text-lg">ระบบ สถานที่สำคัญ</span>
                </div>
                <svg class="arrow-icon w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div class="submenu w-full">
                <a href="page24.php?start=24&mnKey=<?php echo base64_encode(base64_encode(time())); ?>" class="block px-4 py-2 outline-none text-base" data-sub-menu-id="page24">การเพิ่มสถานที่</a>
                <a href="page25.php?start=25&mnKey=<?php echo base64_encode(base64_encode(time())); ?>" class="block px-4 py-2 outline-none text-base" data-sub-menu-id="page25">การลบ/แก้ไข/ปักหมุด</a>
            </div>
        </div>
        <div class="menu-item menu-12 relative mt-2" data-menu-id="12">
            <button class="flex items-center justify-between relative w-full px-4 py-2 rounded-3xl hover:bg-cyan-500 outline-none" onclick="toggleMenu(this)">
                <div class="flex items-center">
                    <img class="menu-icon size-8 mr-1 p-1 group-hover:bg-white group-hover:rounded-full" src="../public/svg/iconhelpmn_otop.svg" />
                    <span class="ml-2 text-lg">ระบบ OTOP</span>
                </div>
                <svg class="arrow-icon w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div class="submenu w-full">
                <a href="page26.php?start=26&mnKey=<?php echo base64_encode(base64_encode(time())); ?>" class="block px-4 py-2 outline-none text-base" data-sub-menu-id="page26">การเพิ่ม OTOP</a>
                <a href="page27.php?start=27&mnKey=<?php echo base64_encode(base64_encode(time())); ?>" class="block px-4 py-2 outline-none text-base" data-sub-menu-id="page27">การลบ/แก้ไข/ปักหมุด</a>
            </div>
        </div>
        <div class="menu-item menu-13 relative mt-2" data-menu-id="13">
            <button class="flex items-center justify-between relative w-full px-4 py-2 rounded-3xl hover:bg-cyan-500 outline-none" onclick="toggleMenu(this)">
                <div class="flex items-center">
                    <img class="menu-icon size-8 mr-1 p-1 group-hover:bg-white group-hover:rounded-full" src="../public/svg/iconhelpmn_prepairimage.svg" />
                    <span class="ml-2 text-lg">การเตรียมภาพ</span>
                </div>
                <svg class="arrow-icon w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div class="submenu w-full">
                <a href="page28.php?start=28&mnKey=<?php echo base64_encode(base64_encode(time())); ?>" class="block px-4 py-2 outline-none text-base" data-sub-menu-id="page28">วิธีการเตรียมรูปภาพลงเว็บไซต์</a>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        function toggleRightSidebar(isForceClose = false) {
            const sidebar = document.querySelector('[menu-help-right]');
            const overlay = document.getElementById('overlay');

            console.log(isForceClose);

            if (sidebar && overlay) {
                const isOpen = !sidebar.classList.contains('translate-x-full');

                if (isOpen || isForceClose) {
                    // ปิดเมนู
                    sidebar.classList.add('translate-x-full');
                    overlay.classList.add('hidden');
                } else {
                    // เปิดเมนู
                    sidebar.classList.remove('translate-x-full');
                    overlay.classList.remove('hidden');
                }
            }
        }

        // ค้นหาปุ่ม toggle ที่อยู่ในไฟล์อื่น
        const rightSidebarButton = document.querySelector('[toggle-right-sidebar="rightSidebarButton"]');

        if (rightSidebarButton) {
            rightSidebarButton.addEventListener('click', toggleRightSidebar);
        }

        document.addEventListener('click', function(event) {
            const sidebar = document.querySelector('[menu-help-right]');
            if (sidebar && !sidebar.classList.contains('translate-x-full')) {
                const isClickInsideSidebar = sidebar.contains(event.target);
                const isClickInsideButton = rightSidebarButton.contains(event.target);

                // ถ้าคลิกนอก sidebar และปุ่ม toggle ก็ให้ปิดเมนู
                if (!isClickInsideSidebar && !isClickInsideButton) {
                    toggleRightSidebar(true);
                }
            }
        });

        // ปิดเมนูเมื่อกดปุ่ม Esc
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                toggleRightSidebar(true);
            }
        });

        clearActiveMenu(); // เคลียร์สถานะ active ทั้งหมดเมื่อโหลดหน้าใหม่
        setActiveMenu(); // จับ event สำหรับการคลิก menu-item และ submenu
        restoreActiveMenu(); // กู้คืนสถานะ active จาก localStorage เมื่อรีเฟรชหน้า
        activateMenuFromCurrentURL(); // จับ url ว่าตรงกับ url ที่อยู่ใน nemu ไหม

    });

    function activateMenuFromCurrentURL() {
        const currentURL = window.location.pathname;

        // เคลียร์สถานะ active ของซับเมนูทั้งหมดก่อน
        document.querySelectorAll('.submenu a').forEach(item => item.classList.remove('active'));

        if (currentURL) {
            const matchingSubMenu = document.querySelector(`.submenu a[href="${currentURL}"]`);
            if (matchingSubMenu) {
                // เปิดเมนูที่เกี่ยวข้อง
                const parentMenuItem = matchingSubMenu.closest('.menu-item');
                if (parentMenuItem) {
                    // เปิดเมนูที่ตรงกัน
                    parentMenuItem.classList.add('active');
                    const menuButton = parentMenuItem.querySelector('button');
                    if (menuButton && !parentMenuItem.classList.contains('open')) {
                        toggleMenu(menuButton);
                    }

                    // ทำให้ซับเมนูที่ตรงกันเป็น active
                    matchingSubMenu.classList.add('active');
                }
            }
        }

    }

    function clearActiveMenu() {
        const menuItems = document.querySelectorAll('.menu-item');
        const subMenus = document.querySelectorAll('.submenu a');

        menuItems.forEach(item => item.classList.remove('active'));
        subMenus.forEach(subItem => subItem.classList.remove('active'));
    }

    function setActiveMenu() {
        const menuItems = document.querySelectorAll('.menu-item > button');
        const subMenus = document.querySelectorAll('.submenu a');

        menuItems.forEach(menu => {
            menu.addEventListener('click', function() {
                // ล้าง active menu-item เก่า
                document.querySelectorAll('.menu-item').forEach(item => item.classList.remove('active'));

                // ใส่ active ให้ menu-item ที่ถูกคลิก
                this.parentElement.classList.add('active');


                // เก็บค่า menu-item ที่ active ไว้ใน localStorage
                localStorage.setItem('activeMenuItem', this.parentElement.dataset.menuId);
            });
        });

        subMenus.forEach(subMenu => {
            subMenu.addEventListener('click', function(e) {
                e.preventDefault();
                // ล้าง active submenu เก่า
                document.querySelectorAll('.submenu a').forEach(item => item.classList.remove('active'));

                // ใส่ active ให้ submenu ที่ถูกคลิก
                this.classList.add('active');

                // เก็บค่า submenu ที่ active ไว้ใน localStorage
                localStorage.setItem('activeSubMenu', this.dataset.subMenuId);
            });
        });
    }

    function restoreActiveMenu() {
        const activeMenuItemId = localStorage.getItem('activeMenuItem');
        const activeSubMenuId = localStorage.getItem('activeSubMenu');

        if (activeMenuItemId) {
            const activeMenuItem = document.querySelector(`.menu-item[data-menu-id="page${activeMenuItemId}"]`);
            if (activeMenuItem) {
                // Make sure the menu item is active
                activeMenuItem.classList.add('active');
                // Open the menu item if it is not already open
                const menuButton = activeMenuItem.querySelector('button');
                if (menuButton && !activeMenuItem.classList.contains('open')) {
                    toggleMenu(menuButton);
                }
            }
        }

        if (activeSubMenuId) {
            const activeSubMenu = document.querySelector(`.submenu a[data-sub-menu-id="page${activeSubMenuId}"]`);

            if (activeSubMenu) {
                activeSubMenu.classList.add('active');
                // Find the parent menu-item and ensure it is open
                const parentMenuItem = activeSubMenu.closest('.menu-item');
                if (parentMenuItem) {
                    parentMenuItem.classList.add('active');
                    // Open the parent menu if it is not already open
                    const menuButton = parentMenuItem.querySelector('button');
                    if (menuButton && !parentMenuItem.classList.contains('open')) {
                        toggleMenu(menuButton);
                    }
                }
            }
        }
    }

    function toggleMenu(element) {
        const menuItem = element.parentElement;
        const isOpen = menuItem.classList.contains('open');
        const submenu = menuItem.querySelector('.submenu');

        // Get the sidebar element
        const sideBar = document.querySelector('[menu-help-right]');
        const isInert = sideBar.hasAttribute('inert');

        // Close all other menus
        document.querySelectorAll('.menu-item').forEach(item => {
            if (item !== menuItem) { // Ensure we don't close the currently clicked menu
                item.classList.remove('open');
                const otherSubmenu = item.querySelector('.submenu');
                if (otherSubmenu) {
                    otherSubmenu.style.maxHeight = '0'; // Close other menus
                    otherSubmenu.style.overflow = 'hidden';
                }
            }
        });

        // Toggle the current menu
        if (!isOpen) {
            menuItem.classList.add('open');
            submenu.style.maxHeight = `${submenu.scrollHeight}px`; // Open the current menu
            submenu.style.overflow = 'visible';

            // IMPORTANT : Ensure sidebar is accessible
            if (isInert) {
                sideBar.removeAttribute('inert');
            }
        } else {
            menuItem.classList.remove('open');
            submenu.style.maxHeight = '0'; // Close the current menu
            submenu.style.overflow = 'hidden';
        }
    }
</script>