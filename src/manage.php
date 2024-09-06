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
</style>

<body>
    <div class="w-full box-border mx-auto">
        <div class="bg-sky-200 h-16">NAVBAR</div>
        <div class="flex justify-between items-center w-full">
            <div class="flex min-w-[200px] w-[350px] max-w-[400px] h-screen bg-pink-200 hidden">SIDEMENU</div>
            <div class="flex flex-col w-full h-screen px-10 py-8 gap-y-5">
                <div class="text-2xl font-semiblod">ระบบ จัดการภาพสไลด์</div>
                <div class="flex justify-end items-center bg-yellow-50 gap-x-5 p-3">
                    <div>REFRESH</div>
                    <div>SAVE</div>
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
                            <th>ID</th>
                            <th>FILENAME</th>
                            <th>LINK</th>
                            <th>DATE ADD</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </tr>
                    </thead>
                    <tbody data-table-slide></tbody>
                    <tfoot>
                        <tr>
                            <td>FOOTER TABLE</td>
                        </tr>
                    </tfoot>
                </table>
                <div class="flex justify-between items-center bg-slate-300">
                    <div>ADD</div>
                    <div>PAGINATION</div>
                </div>
            </div>
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

        function getData() {
            fetch('../api/slide_api.php')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(result => {
                    displaySlideData(result.data.info, tableBody);
                })
                .catch(error => console.error('There was a problem with the fetch operation:', error));
        }

        const action = "edit";

        if (action == "edit") {
            getData();
        }

        function displaySlideData(data, table) {

            const infoArray = data;

            for (let key in infoArray) {
                const item = infoArray[key];
                const row = document.createElement('tr');

                const idCell = document.createElement('td');
                idCell.dataset.itemId = item.id; // dataset ของ id ไปเก็บของโค้ดด้านล่าง
                console.log(idCell.dataset.itemId);

                idCell.innerHTML = `<div>My : ${item.id}</div>`;
                
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
                    window.location.href = '/';
                });
                editCell.appendChild(button);
                row.appendChild(editCell);

                const selectCell = document.createElement('td');
                const checkbox = document.createElement('input');
                checkbox.setAttribute("data-delete-id", item.id) // เลือกไอเทมของ data และระบุไปใน checkbox
                // console.log(checkbox.getAttribute("data-delete-id"));

                checkbox.type = 'checkbox';
                checkbox.classList.add('slide-checkbox');

                selectCell.appendChild(checkbox);
                row.appendChild(selectCell);

                tableBody.appendChild(row);

            }

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
            //TODO
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

            formData.append("action" , "delete");
            formData.append("ids" , JSON.stringify(ids));
            formData.append("type" , "slide");

            console.log('Sending dataList:', dataList);

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
                            const row = checkbox.closest('tr');
                            row.remove();
                        });
                        toggleButtonDelete();
                    } else {
                        console.error('Failed to delete items:', result.message);
                    }

                    
                })
                .catch(error => console.error('There was a problem with the delete operation:', error));
        }

        //TODO Sortable - id / sequent => API  จับ data 2 ชุด id กับ sequent เมื่อสลับ sequent เปลี่ยน id เหมือนเดิม
        // handle ปุ่ม refresh (ยกเลิกการ sort) กับ save (ยิง api ว่า sequent เปลี่ยน) 
        // fetch api ที่ ไฟล์ _sortable โดยถ้าสำเร็จจะใช้ "message": "success",



    })
</script>

</html>