<?php
$action = (isset($_GET['action'])) ? $_GET['action'] : NULL;
?>
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
</head>
<style>
    body {
        font-family: "Sarabun", sans-serif;
    }
</style>

<body>
    <div class="w-full box-border mx-auto">
        <div class="bg-sky-200 h-16">NAVBAR</div>
        <div class="flex justify-between items-center w-full">
            <div class="flex min-w-[200px] w-[350px] max-w-[400px] h-screen bg-pink-200 hidden">SIDEMENU</div>
            <div class="flex flex-col w-full h-screen px-10 py-8 gap-y-5">
                <div class="text-2xl font-semiblod">ระบบ จัดการภาพสไลด์</div>
                <div class="w-full bg-sky-100 rounded-2xl drop-shadow-lg p-5">
                    <div class="text-xl">ข้อมูลภาพสไลด์</div>
                    <hr class="h-2 border-gray-300 my-1">
                    <div class="text-sm">รูปปัจจุบัน</div>
                    <div class="flex flex-col items-center justify-center w-full bg-rose-200">
                        <div>IMAGE</div>
                    </div>
                    <div>CHOOSE FILE</div>
                    <div>LIKE INPUT</div>
                    <div>SUBMIT</div>
                </div>
            </div>
        </div>
        <div class="bg-rose-200">FOOTER</div>
        <!-- MODAL CONFIRM -->
        <!-- <div modal-confirm-delete class="modal hidden fixed top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-50">
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
        </div> -->
    </div>
</body>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // ดึงพารามิเตอร์จาก URL
        const urlParams = new URLSearchParams(window.location.search);
        const itemId = urlParams.get('id');
        console.log(itemId);

        // ตรวจสอบว่ามีการส่ง id และ sequent มาหรือไม่
        if (itemId) {
            console.log(`ID: ${itemId}`);

            // เรียก API เพื่อดึงข้อมูล
            fetchItemData(itemId);
        } else {
            console.error('Missing id or sequent in the URL');
            // แสดงข้อความหรือหน้าจอแสดงข้อผิดพลาด
            document.body.innerHTML = '<div class="text-red-500 text-center">Error: Missing id or sequent in the URL</div>';
        }
    });

    // ฟังก์ชันสำหรับเรียก API โดยใช้ itemId และ itemSequent
    function fetchItemData(itemId) {
        // ส่งข้อมูลไปยัง API
        const formData = new FormData();
        formData.append('id', itemId);
        formData.append('action', 'getItem'); // ส่ง action ไปเพื่อบอกว่าต้องการข้อมูลของ item

        fetch('../api/slide_api_item.php', {
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
                console.log(result);
                // ตรวจสอบว่าข้อมูลที่ได้จาก API ถูกต้องหรือไม่
                // if (result.status === 'success') {
                //     const item = result.item; // ดึงข้อมูล item ออกมา
                //     console.log('Item Data:', item);
                //     // แสดงข้อมูลที่ได้จาก API บนหน้าเว็บ
                //     displayItemData(item);
                // } else {
                //     console.error('Error fetching item data:', result.message);
                //     document.body.innerHTML = '<div class="text-red-500 text-center">Error fetching item data: ' + result.message + '</div>';
                // }
            })
            .catch(error => {
                console.error('There was an error fetching the data:', error);
                document.body.innerHTML = '<div class="text-red-500 text-center">Error fetching item data</div>';
            });

    }

    //TODO ทำโครงรับของที่ยิงมาจาก API ให้ขึ้นถูกต้อง และ ทำปุ่ม Submit

</script>

</html>