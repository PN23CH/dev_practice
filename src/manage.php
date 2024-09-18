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
    <title>News - slide - manage</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <!-- <link href="../style/main_menu.css" rel="stylesheet" type="text/css" /> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.0/Sortable.min.js"></script>
</head>
<style>
    body {
        font-family: "Sarabun", sans-serif;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        overflow: hidden;
        min-width: 28rem;
        margin-top: 1.25rem;
    }

    thead {
        background-color: #99F6E4;
        text-align: center;
        vertical-align: middle;
        border-top-left-radius: 1.5rem;
        border-top-right-radius: 1.5rem;
        box-shadow: inset 0px 1px 0px #e5e7eb, inset 1px 0px 0px #e5e7eb,
            inset 0px -1px 0px #e5e7eb, inset -1px 0px 0px #e5e7eb;
    }

    thead th:first-child {
        border-top-left-radius: 1.5rem;
    }

    thead th:last-child {
        border-top-right-radius: 1.5rem;
    }

    thead th {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
    }

    td {
        text-align: center;
        vertical-align: middle;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
    }

    .icon-edit {
        background: url("../public/svg/icon-edit.svg");
        width: 1.5rem;
        height: 1.5rem;
        margin-left: auto;
        margin-right: auto;
    }

    .modal {
        position: fixed;
        z-index: 50;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .modal-content {
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        width: 50%;
        text-align: center;
    }

    .dragging {
        background-color: #FED7AA;
    }

    .dragged {
        background-color: #FED7AA;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type="number"] {
        width: 2.5rem;
        padding-left: 0.5rem;
        padding-right: 0.5rem;
        background-color: #D6D3D1;
    }

    input[type="number"]:focus {
        border-radius: 0.3rem;
        outline: none;
    }

    button[data-highlight-page],
    button[data-prev-butt],
    button[data-next-butt] {
        border-radius: 0.5rem;
        border: 0.15rem solid #A7A7A7;
        background-color: #FFFFFF;
        padding-left: 0.6rem;
        padding-right: 0.6rem;
        padding-top: 0.1rem;
        padding-bottom: 0.1rem;
    }

    button[data-highlight-page="highlight"] {
        background-color: #D9FDFD;
        border: 0.15rem solid #18B9AC;
    }
</style>

<body>
    <div class="w-full box-border mx-auto">
        <div class="bg-sky-200 h-16">NAVBAR</div>
        <div class="flex justify-between items-center w-full">
            <?php require_once __DIR__ . "/../template/main_menu.php"; ?>
            <div class="flex flex-col w-full h-screen px-10 py-8 gap-y-5">
                <div class="text-2xl font-semiblod">ระบบ จัดการภาพสไลด์</div>
                <div class="flex justify-end">
                    <button toggle-right-sidebar="rightSidebarButton" type="button" class="flex relative justify-self-end xl:hidden right-0 items-center p-2 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                        <span class="sr-only">Open sidebar</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
                        </svg>
                    </button>
                </div>
                <div class="flex justify-end items-center bg-yellow-50 gap-x-5 p-3">
                    <button type="button" class="bg-teal-500 hover:bg-teal-400 rounded-lg p-2" refresh-slide>
                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_2489_15023)">
                                <path d="M3.48242 7C4.60742 4.375 7.23242 2.5 10.2324 2.5C13.9824 2.5 16.9824 5.25 17.6074 8.75H20.1074C19.4824 3.875 15.3574 0 10.2324 0C6.48242 0 3.23242 2 1.60742 5.125L0.232422 3.75V8.75H5.23242L3.48242 7Z" fill="white" />
                                <path d="M20.2324 11.25H15.1074L16.9824 13C15.8574 15.625 13.2324 17.5 10.1074 17.5C6.48242 17.5 3.35742 14.75 2.73242 11.25H0.232422C0.857422 16.125 5.10742 20 10.1074 20C13.8574 20 17.1074 17.875 18.8574 14.875L20.2324 16.25V11.25Z" fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_2489_15023">
                                    <rect width="20" height="20" fill="white" transform="translate(0.232422)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </button>
                    <button type="button" class="bg-blue-400 hover:bg-blue-300 rounded-lg p-2" save-slide>
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.6989 4.07582L13.5159 0.79918C13.1743 0.447548 12.711 0.250003 12.228 0.25H2.05385C1.04789 0.25 0.232422 1.08945 0.232422 2.125V15.875C0.232422 16.9105 1.04789 17.75 2.05385 17.75H15.411C16.417 17.75 17.2324 16.9105 17.2324 15.875V5.40164C17.2324 4.90436 17.0405 4.42745 16.6989 4.07582ZM8.73242 15.25C7.39117 15.25 6.30385 14.1307 6.30385 12.75C6.30385 11.3693 7.39117 10.25 8.73242 10.25C10.0737 10.25 11.161 11.3693 11.161 12.75C11.161 14.1307 10.0737 15.25 8.73242 15.25ZM12.3753 3.35469V7.28125C12.3753 7.54012 12.1714 7.75 11.9199 7.75H3.11635C2.86488 7.75 2.66099 7.54012 2.66099 7.28125V3.21875C2.66099 2.95988 2.86488 2.75 3.11635 2.75H11.7879C11.9087 2.75 12.0245 2.79937 12.1098 2.8873L12.2419 3.02324C12.2842 3.06676 12.3177 3.11843 12.3406 3.1753C12.3635 3.23218 12.3753 3.29313 12.3753 3.35469Z" fill="white" />
                        </svg>
                    </button>
                    <div>
                        <input type="checkbox" name="select-all" select-all>
                        <label for="select-all">SELECT ALL</label>
                    </div>
                    <button type="button" class="bg-rose-700 hover:bg-rose-500 rounded-lg p-2 invisible" delete-slide>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg>
                    </button>
                </div>
                <table data-practice="practice" class="w-full">
                    <thead>
                        <tr>
                            <th class="w-24 min-w-20">No.</th>
                            <th class="w-24 min-w-20">ID</th>
                            <th class="w-56 min-w-24">FILENAME</th>
                            <th class="min-w-24 max-w-1/2">LINK</th>
                            <th class="w-40 min-w-32 max-w-1/2">DATE ADD</th>
                            <th class="w-24 min-w-20">EDIT</th>
                            <th class="w-24 min-w-20">DELETE</th>
                        </tr>
                    </thead>
                    <tbody data-table-slide></tbody>
                    <tfoot data-loading>
                        <tr>
                            <td colspan="7" id="loading-status">Load</td>
                        </tr>
                    </tfoot>
                </table>
                <div class="flex justify-between items-center">
                    <div>ADD</div>
                    <div pagination></div>
                </div>
            </div>
            <!-- <?php //require_once __DIR__ . "/../template/menu_manual.php"; 
                    ?> -->
        </div>
        <div class="bg-rose-200">FOOTER</div>
        <!-- MODAL CONFIRM -->
        <div modal-confirm-delete class="modal hidden fixed top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-50">
            <div class="modal-content flex flex-col items-center justify-center bg-white p-6 rounded-xl shadow-lg gap-y-5">
                <div>
                    <svg width="105" height="113" viewBox="0 0 105 113" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="52.9043" cy="98.5" rx="51" ry="14.5" fill="#E2E2E2" />
                        <g opacity="0.2" filter="url(#filter0_f_1732_6064)">
                            <path d="M97.9043 97.5C97.9043 103.299 78.4287 108 54.4043 108C30.3799 108 10.9043 103.299 10.9043 97.5C10.9043 91.701 30.3799 87 54.4043 87C78.4287 87 97.9043 91.701 97.9043 97.5Z" fill="#333333" />
                        </g>
                        <path d="M73.5359 101H31.2727C22.7855 101 15.9043 94.7786 15.9043 87.1053V35H88.9043V87.1053C88.9043 94.7786 82.0231 101 73.5359 101Z" fill="url(#paint0_linear_1732_6064)" />
                        <path d="M48.459 38.8398H56.3807V83.5688C56.3807 85.4698 54.6082 87.0095 52.4198 87.0095C50.2315 87.0095 48.459 85.4698 48.459 83.5688V38.8398Z" fill="#A6A6A6" />
                        <path d="M68.2627 38.8398H76.1844V83.5688C76.1844 85.4698 74.4119 87.0095 72.2235 87.0095C70.0352 87.0095 68.2627 85.4698 68.2627 83.5688V38.8398Z" fill="#A6A6A6" />
                        <path d="M28.6543 38.8418H36.576V83.5707C36.576 85.4717 34.8035 87.0114 32.6151 87.0114C30.4268 87.0114 28.6543 85.4717 28.6543 83.5707V38.8418Z" fill="#A6A6A6" />
                        <path d="M71.5807 21.61C69.9413 21.6984 68.5521 20.6156 68.4754 19.1932L68.0585 11.4629C67.9308 9.09399 65.1651 7.31182 61.8943 7.48822L42.1188 8.55468C38.8479 8.73107 36.29 10.8003 36.4178 13.1692L36.8346 20.8996C36.9113 22.3219 35.6467 23.5479 34.0073 23.6363C32.3679 23.7247 30.9787 22.6419 30.902 21.2195L30.4851 13.4892C30.2042 8.28066 35.2972 3.75403 41.8409 3.40114L61.6163 2.33467C68.16 1.98178 73.7103 5.93444 73.9911 11.143L74.408 18.8733C74.4847 20.2957 73.2201 21.5216 71.5807 21.61Z" fill="url(#paint1_linear_1732_6064)" />
                        <path d="M90.9718 31.7799L15.825 35.8325C12.5482 36.0092 9.76506 33.7917 9.60798 30.879L9.41839 27.3633C9.10423 21.5379 14.1613 16.53 20.7149 16.1765L83.9964 12.7638C90.55 12.4104 96.1163 16.8455 96.4305 22.6709L96.6201 26.1865C96.7771 29.0992 94.2486 31.6032 90.9718 31.7799Z" fill="url(#paint2_linear_1732_6064)" />
                        <defs>
                            <filter id="filter0_f_1732_6064" x="7.9043" y="84" width="93" height="27" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                <feGaussianBlur stdDeviation="1.5" result="effect1_foregroundBlur_1732_6064" />
                            </filter>
                            <linearGradient id="paint0_linear_1732_6064" x1="52.4043" y1="44.5578" x2="52.4043" y2="110.558" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#B7B6B9" />
                                <stop offset="0.63" stop-color="#C8C8C8" />
                            </linearGradient>
                            <linearGradient id="paint1_linear_1732_6064" x1="51.8829" y1="5.72878" x2="52.9483" y2="25.484" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#B7B6B9" />
                                <stop offset="0.63" stop-color="#C8C8C8" />
                            </linearGradient>
                            <linearGradient id="paint2_linear_1732_6064" x1="52.5067" y1="17.2703" x2="53.5494" y2="36.6064" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#B7B6B9" />
                                <stop offset="0.63" stop-color="#C8C8C8" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div delete-message class="text-xl font-semibold text-black"></div>
                <div class="text-lg font-semibold text-red-700">หมายเหตุ ข้อมูลที่ถูกลบไปแล้วไม่สามารถกู้คืนได้</div>
                <div class="modal-buttons flex justify-end">
                    <button modal-confirm-button class="bg-sky-500 text-white px-4 py-2 mr-2 rounded">ยืนยัน</button>
                    <button modal-cencel-button class="bg-gray-500 text-white px-4 py-2 mr-2 rounded">ยกเลิก</button>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const selectAllcheckbox = document.querySelector('[select-all]');
        const tableBody = document.querySelector('[data-table-slide]');
        const buttonDelete = document.querySelector("button[delete-slide]");

        // let itemsPerPage
        let maxrow = 5;
        let currentPage = 1;

        function getData(page, maxrow) {
            tableBody.innerHTML = '';

            document.getElementById('loading-status').innerHTML = `<div class="flex justify-center items-center w-full">
                    <div class="flex flex-row gap-2">
                        <div class="w-2 h-2 rounded-full bg-slate-700 animate-bounce"></div>
                        <div class="w-2 h-2 rounded-full bg-slate-700 animate-bounce [animation-delay:-.3s]"></div>
                        <div class="w-2 h-2 rounded-full bg-slate-700 animate-bounce [animation-delay:-.5s]"></div>
                    </div>
                </div>`;
            const tfoot = document.querySelector('tfoot[data-loading]');
            tfoot.style.display = ''; // แสดง tfoot

            setTimeout(() => {
                const formData = new FormData();
                formData.append("action", "getdata");
                formData.append('page', page);
                formData.append('maxrow', maxrow);
                formData.append("type", "slide");

                fetch('../api/slide_api.php', {
                        method: 'POST',
                        'credentials': 'include', // policy 
                        body: formData,
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })

                    .then(result => {
                        const items = result.data.info; // จำนวนและ opject ที่อยู่ใน API ทั้งหมด
                        const totalitems = result.data.total; //จำนวนของข้อมูลใน API

                        console.log("Fetch");

                        if (items.length > 0) {
                            displaySlideData(items, tableBody, page, maxrow);
                            tfoot.style.display = 'none'; // ซ่อน tfoot เมื่อมีข้อมูล
                            console.log("Have DATA");
                        } else {
                            // ถ้าไม่มีข้อมูล
                            document.getElementById('loading-status').textContent = "No data found";
                            console.log("NOT FOUND DATA");
                        }

                        // ถ้ามีข้อมูล Pagination
                        if (totalitems) {
                            displayPagination(totalitems, maxrow, page); // อัพเดท pagination หลังจาก fetch ข้อมูลใหม่
                        }
                    })
                    .catch(error => {
                        console.error('There was a problem with the fetch operation:', error);
                        document.getElementById('loading-status').textContent = "Error loading data";
                    });
            }, 700);
        }

        const action = "edit";

        if (action == "edit") {
            getData(currentPage, maxrow);
        }

        function displaySlideData(items, table, page, maxrow) {

            tableBody.innerHTML = '';

            const startIndex = (page - 1) * maxrow;
            const endIndex = startIndex + maxrow;

            const infoArray = items.slice(startIndex, endIndex);
            for (let key in infoArray) {
                const item = infoArray[key];
                const row = document.createElement('tr');
                row.dataset.itemId = item.id;
                row.dataset.itemSq = item.sequent;

                if (key % 2 == 1) {
                    row.classList.add('bg-slate-100');
                }

                const numCell = document.createElement('td');
                numCell.textContent = parseInt(key) + 1;

                row.appendChild(numCell);

                const idCell = document.createElement('td');
                idCell.innerHTML = `<div>${item.id} : ${item.sequent}</div>`;

                row.appendChild(idCell);

                const filenameCell = document.createElement('td');
                filenameCell.textContent = item.filename ? item.filename : '';
                row.appendChild(filenameCell);

                const linkCell = document.createElement('td');
                linkCell.textContent = item.link ? item.link : 'No link';
                row.appendChild(linkCell);

                const dateCell = document.createElement('td');
                dateCell.textContent = item.dateAdd;
                row.appendChild(dateCell);

                const editCell = document.createElement('td');
                const button = document.createElement('button');
                const iconDiv = document.createElement('div');
                iconDiv.classList.add('icon-edit');
                button.appendChild(iconDiv);

                button.addEventListener('click', () => {
                    window.location.href = `items.php?id=${item.id}`;
                });
                editCell.appendChild(button);
                row.appendChild(editCell);

                const selectCell = document.createElement('td');
                const checkbox = document.createElement('input');
                checkbox.setAttribute("data-delete-id", item.id) // เลือกไอเทมของ data และระบุไปใน checkbox

                checkbox.type = 'checkbox';
                checkbox.classList.add('slide-checkbox');

                selectCell.appendChild(checkbox);
                row.appendChild(selectCell);

                tableBody.appendChild(row);

            }
        }

        function displayPagination(total, maxrow, currentPage) {
            const totalPages = Math.ceil(total / maxrow);
            const paginationDiv = document.querySelector('[pagination]');
            paginationDiv.innerHTML = '';
            paginationDiv.className = "flex gap-x-2";

            // Prev Button
            if (currentPage > 1) {
                const prevButton = document.createElement('button');
                prevButton.setAttribute('data-prev-butt', '')
                prevButton.textContent = '<';
                prevButton.addEventListener('click', () => {
                    currentPage--;
                    // TODO Fetch DATA ทุกครั้งเมื่อมีการกดปุ่ม (โดยใช้ formData)
                    getData(currentPage, maxrow);
                    // displayPagination(total, maxrow, currentPage);
                });
                paginationDiv.appendChild(prevButton);
            }

            // Page Number Buttons
            if (totalPages <= 5) {
                // แสดงหมายเลขหน้าทั้งหมดหากมี 5 หน้าหรือน้อยกว่า
                for (let i = 1; i <= totalPages; i++) {
                    const pageButton = createPageLink(i, currentPage);
                    paginationDiv.appendChild(pageButton);
                }
            } else {
                // Handle เมื่อมีมากกว่า 5 หน้า
                if (currentPage === 1) {
                    // แสดง 3 หน้าแรก, "..." และหน้าสุดท้าย
                    for (let i = 1; i <= 3; i++) {
                        paginationDiv.appendChild(createPageLink(i, currentPage));
                    }
                    paginationDiv.appendChild(createDotMorePage());
                    paginationDiv.appendChild(createPageLink(totalPages, currentPage));
                } else if (currentPage <= 3) {
                    // แสดงหน้า 1, หน้าปัจจุบัน, 3, "..." และหน้าสุดท้าย
                    paginationDiv.appendChild(createPageLink(1, currentPage));
                    for (let i = 2; i <= 3; i++) {
                        paginationDiv.appendChild(createPageLink(i, currentPage));
                    }
                    paginationDiv.appendChild(createDotMorePage());
                    paginationDiv.appendChild(createPageLink(totalPages, currentPage));
                } else if (currentPage > 3 && currentPage < totalPages - 2) {
                    // แสดงหน้า 1, "..." , หน้าปัจจุบัน, "..." และหน้าสุดท้าย
                    paginationDiv.appendChild(createPageLink(1, currentPage));
                    paginationDiv.appendChild(createDotMorePage());
                    paginationDiv.appendChild(createPageLink(currentPage, currentPage));
                    paginationDiv.appendChild(createDotMorePage());
                    paginationDiv.appendChild(createPageLink(totalPages, currentPage));
                } else if (currentPage >= totalPages - 2) {
                    // แสดงหน้า 1, "..." , หน้าสุดท้ายสองสามหน้า
                    paginationDiv.appendChild(createPageLink(1, currentPage));
                    paginationDiv.appendChild(createDotMorePage());
                    for (let i = totalPages - 2; i <= totalPages; i++) {
                        paginationDiv.appendChild(createPageLink(i, currentPage));
                    }
                }
            }

            // Next Button
            if (currentPage < totalPages) {
                const nextButton = document.createElement('button');
                nextButton.setAttribute('data-next-butt', '')
                nextButton.textContent = '>';
                nextButton.addEventListener('click', () => {
                    currentPage++;
                    getData(currentPage, maxrow);
                    // displayPagination(total, maxrow, currentPage);
                });
                paginationDiv.appendChild(nextButton);
            }

            function createPageLink(pageNumber, currentPage) {
                const link = document.createElement('button');
                link.setAttribute('data-highlight-page', '');
                link.textContent = pageNumber;
                if (pageNumber === currentPage) {
                    link.setAttribute('data-highlight-page', 'highlight');
                }
                link.addEventListener('click', () => {
                    currentPage = pageNumber;
                    getData(currentPage, maxrow);
                    // displayPagination(total, maxrow, currentPage);
                });
                return link;
            }

            function createDotMorePage() {
                const dots = document.createElement("div");
                dots.textContent = "...";
                dots.style.cursor = "pointer";
                dots.addEventListener("click", () => {
                    const pagenavi = document.createElement("input");
                    pagenavi.type = "number";
                    pagenavi.min = 1;
                    pagenavi.max = totalPages;
                    pagenavi.value = currentPage;
                    pagenavi.addEventListener("keydown", (event) => {
                        if (event.key === "Enter") {
                            const pageNumber = parseInt(pagenavi.value, 10);
                            if (pageNumber >= 1 && pageNumber <= totalPages) {
                                currentPage = pageNumber;
                                getData(currentPage, maxrow);
                                // displayPagination(total, maxrow, currentPage);
                            } else {
                                pagenavi.value = '';
                            }
                        }
                    });
                    dots.replaceWith(pagenavi);
                    pagenavi.focus();
                });
                return dots;

            }
        }

        let lastDraggedRow = null;
        const draggedRows = new Set();

        const sortable = new Sortable(tableBody, {
            animation: 150,
            onStart: function(evt) {
                evt.item.classList.add('dragging'); // ใส่สีระหว่างที่ถูก Dragging
            },
            onEnd: function(evt) {
                const rows = tableBody.querySelectorAll('tr');

                lastDraggedRow = evt.item; // เก็บแถวที่ถูก Dragging ล่าสุด
                draggedRows.add(lastDraggedRow);
                lastDraggedRow.classList.remove('dragging');

                rows.forEach((row, index) => {
                    const numCell = row.querySelector('td');
                    numCell.textContent = index + 1;

                    row.classList.remove('bg-slate-100');

                    if (index % 2 == 1) {
                        row.classList.add('bg-slate-100');
                    }

                    if (draggedRows.has(row)) {
                        row.classList.add('dragged');
                        row.classList.remove('bg-slate-100');
                    }
                })
            }
        })

        function sendToServer(ids, sqs) {
            const formData = new FormData();
            formData.append("action", "update-sequent");
            formData.append("ids", JSON.stringify(ids));
            formData.append("sequent", JSON.stringify(sqs));
            formData.append("type", "slide");

            fetch('../api/slide_api.php', {
                    method: 'POST',
                    'credentials': 'include', // policy 
                    body: formData,
                })
                .then(response => response.json())
                .then(result => {
                    console.log('Update result:', result);
                })
                .catch(error => {
                    console.error('Error updating sequent:', error);
                });
        }

        function handleSelectAll() {
            const checkboxes = tableBody.querySelectorAll('.slide-checkbox');
            checkboxes.forEach(checkbox => {
                checkbox.checked = selectAllcheckbox.checked;
            });
        }

        function handleCheckboxClick() {
            const checkboxes = tableBody.querySelectorAll('.slide-checkbox');
            const allChecked = Array.from(checkboxes).every(checkbox => checkbox.checked);
            selectAllcheckbox.checked = allChecked;
        }

        selectAllcheckbox.addEventListener('change', () => {
            handleSelectAll();
            toggleButtonDelete();
        });

        tableBody.addEventListener('change', (event) => {
            if (event.target.classList.contains('slide-checkbox')) {
                handleCheckboxClick();
                toggleButtonDelete();
            }
        });

        function toggleButtonDelete() {
            const checkboxes = tableBody.querySelectorAll('.slide-checkbox');
            const button = document.querySelector("button[delete-slide]");

            const anyChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);

            if (anyChecked) {
                button.classList.remove('invisible');
            } else {
                button.classList.add('invisible');
            }
        }

        const deleteModal = document.querySelector('div[modal-confirm-delete]');
        const deleteMessage = document.querySelector('div[delete-message]');
        const cancelButton = document.querySelector('button[modal-cencel-button]');
        const confirmButton = document.querySelector('button[modal-confirm-button]');

        function openConfirmModal(idsToDelete) {
            const itemCount = idsToDelete.length;
            deleteMessage.textContent = `คุณต้องการลบข้อมูล ${itemCount} รายการหรือไม่?`;
            deleteModal.classList.remove('hidden');
        }

        function closeConfirmModal() {
            deleteModal.classList.add('hidden');
        }

        buttonDelete.addEventListener('click', () => {
            const checkboxes = tableBody.querySelectorAll('.slide-checkbox:checked');
            const idsToDelete = Array.from(checkboxes).map(checkbox => checkbox.getAttribute('data-delete-id'));

            console.log("idsToDelete",
                idsToDelete);

            if (idsToDelete.length > 0) {
                openConfirmModal(idsToDelete);
                // const confirmDelete = window.confirm('Are you sure you want to delete the selected items?');
                confirmButton.addEventListener('click', () => {
                    deleteItems(idsToDelete);
                    closeConfirmModal();
                });
                cancelButton.addEventListener('click', closeConfirmModal);

            } else {
                console.log('No items selected for deletion.');
            }

        })

        function deleteItems(ids) {

            const formData = new FormData();

            formData.append("action", "delete");
            formData.append("ids", JSON.stringify(ids));
            formData.append("type", "slide");

            fetch('../api/slide_api.php', {
                    method: 'POST',
                    'credentials': 'include', // policy
                    body: formData,
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(result => {
                    console.log('Server response:', result);

                    if (result) {
                        console.log('Items deleted successfully:', ids);
                        ids.forEach(id => {
                            const checkbox = tableBody.querySelector(`.slide-checkbox[data-delete-id="${id}"]`);
                            if (checkbox) { // ตรวจสอบว่า checkbox ยังคงอยู่ใน DOM
                                const row = checkbox.closest('tr');
                                if (row) {
                                    row.remove();
                                }
                            }
                        });
                        toggleButtonDelete();
                        getData(currentPage, maxrow);
                    } else {
                        console.error('Failed to delete items:', result.message);
                    }


                })
                .catch(error => console.error('There was a problem with the delete operation:', error));
        }

        document.querySelector('[save-slide]').addEventListener('click', () => {

            let saveUpdateId = [];
            let saveUpdateSq = [];
            const rows = tableBody.querySelectorAll('tr');
            rows.forEach((row) => {
                saveUpdateId.push(row.dataset.itemId); // เก็บเฉพาะ id
                saveUpdateSq.push(row.dataset.itemSq); // เก็บเฉพาะ sequent
            });

            console.log("IDs:", saveUpdateId);
            console.log("Sequents:", saveUpdateSq);

            if (saveUpdateId.length > 0) {
                sendToServer(saveUpdateId, saveUpdateSq); // ส่ง ids และ sequent ไปยังฟังก์ชัน
            } else {
                console.log('No data to update');
            }
        });

        document.querySelector('[refresh-slide]').addEventListener('click', () => {
            getData(currentPage, maxrow);
        });

        const saveSlideButton = document.querySelector('button[save-slide]');
        saveSlideButton.addEventListener('click', () => {
            // ส่งคำขอไปยัง API
            fetch('../api/slide_api_sortable.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'CSRF-Token': 'csrf'
                    },
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(result => {
                    if (result.result && result.message === 'success') {
                        console.log('Message from API:', result.message);
                    } else {
                        console.log('API responded with:', result.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });

        // TODO ทำ Edit Page - ยิง API ไป ไฟล์ใหม่


    })
</script>

</html>