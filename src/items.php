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
                <form data-form="main">
                    <div class="w-full bg-sky-100 rounded-2xl drop-shadow-lg p-5">
                        <div class="text-xl">ข้อมูลภาพสไลด์</div>
                        <hr class="h-2 border-gray-300 my-1">
                        <div class="text-sm">รูปปัจจุบัน</div>
                        <div class="flex flex-col items-center justify-center w-full bg-rose-200">
                            <div data-image-slide>IMAGE</div>
                        </div>
                        <div data-date-time></div>
                        <input type="file" data-file-choose />
                        <button type="button" data-delete-item>DELETE</button>
                        <div>LINK</div>
                        <input type="text" data-link placeholder="Enter link here" />
                        <button type="button" data-button-submit>SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="bg-rose-200">FOOTER</div>
    </div>
</body>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const submitButton = document.querySelector('[data-button-submit]');
        const fileInput = document.querySelector('[data-file-choose]');
        const deleteButton = document.querySelector('[data-delete-item]');
        const linkInput = document.querySelector('[data-link]');
        let isFileDeleted = false;

        // เมื่อกดปุ่ม Delete จะตั้งค่าว่าไฟล์ถูกลบแล้ว
        deleteButton.addEventListener('click', () => {
            isFileDeleted = true;
            alert("File will be deleted");
        });

        submitButton.addEventListener('click', () => {
            const urlParams = new URLSearchParams(window.location.search);
            const itemId = urlParams.get('id');
            const fileName = urlParams.get('filename');
            const linkSlide = urlParams.get('link');

            // เตรียมข้อมูลสำหรับส่งไปเซิร์ฟเวอร์
            const formData = new FormData();
            formData.append('id', itemId);
            formData.append('filename', fileName);
            formData.append('link', linkSlide);
            formData.append('action', 'updateItem');

            // ถ้ามีไฟล์ที่เลือกใหม่
            if (fileInput.files.length > 0) {
                // ดึงชื่อไฟล์ (filename)
                const filename = fileInput.files[0].name;
                formData.append('file', fileInput.files[0]); // อัปโหลดไฟล์ใหม่
                formData.append('filename', filename); // ส่งชื่อไฟล์ใหม่ไปยังเซิร์ฟเวอร์
            }

            // ถ้าแก้ไขลิงก์
            const linkValue = linkInput.value.trim();
            if (linkValue !== '') {
                formData.append('link', linkValue); // ส่งลิงก์ที่ถูกแก้ไขไปยังเซิร์ฟเวอร์
            }

            // ถ้าลบไฟล์
            if (isFileDeleted) {
                formData.append('deleteFile', true); // ส่งคำสั่งลบไฟล์ไปยังเซิร์ฟเวอร์
            }

            // ส่งข้อมูลไปยังเซิร์ฟเวอร์
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
                    console.log('Success:', result);
                    alert("Data successfully updated!");
                })
                .catch(error => {
                    console.error('There was an error updating the data:', error);
                    alert("Error updating data");
                });
        });

        // ดึงพารามิเตอร์จาก URL
        // const urlParams = new URLSearchParams(window.location.search);
        // const itemId = urlParams.get('id');
        // console.log(itemId);

        // // ตรวจสอบว่ามีการส่ง id และ sequent มาหรือไม่
        // if (itemId) {
        //     console.log(`ID: ${itemId}`);
        //     fetchItemData(itemId);
        // } else {
        //     console.error('Missing id or sequent in the URL');
        //     document.body.innerHTML = '<div class="text-red-500 text-center">Error: Missing id or sequent in the URL</div>';
        // }
    });

    // ฟังก์ชันสำหรับเรียก API โดยใช้ itemId และ itemSequent
    function fetchItemData(itemId) {
        // ส่งข้อมูลไปยัง API
        const formData = new FormData();
        formData.append('id', itemId);
        formData.append('filename', fileName);
        formData.append('link', link);
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
                if (result && result.result === true) {
                    const item = result.data.info[0]; // ดึงข้อมูลของ item
                    console.log(item);

                    // แสดง .filename และ .dateAdd ใน HTML
                    displayItemData(item);
                } else {
                    console.error('Error fetching item data:', result.message);
                    document.body.innerHTML = '<div class="text-red-500 text-center">Error fetching item data</div>';
                }

            })
            .catch(error => {
                console.error('There was an error fetching the data:', error);
                document.body.innerHTML = '<div class="text-red-500 text-center">Error fetching item data</div>';
            });
    }

    function displayItemData(item) {
        const imageSlideDiv = document.querySelector('[data-image-slide]');
        const dateTimeDiv = document.querySelector('[data-date-time]');

        if (imageSlideDiv && item.filename) {
            imageSlideDiv.innerHTML = `<img src="../path_to_images/${item.filename}" alt="Slide Image" />`;
        }

        if (dateTimeDiv && item.dateAdd) {
            dateTimeDiv.textContent = `Date Added: ${item.dateAdd}`;
        }
    }

    //TODO ทำโครงรับของที่ยิงมาจาก API ให้ขึ้นถูกต้อง และ ทำปุ่ม Submit
</script>

</html>