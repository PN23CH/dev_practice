<?php
$action = (isset($_GET['action'])) ? $_GET['action'] : NULL;
$currentId = (isset($_GET['id'])) ? $_GET['id'] : NULL;

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
                        <div class="flex flex-col items-center justify-center">
                            <div data-image-slide class="w-fit bg-rose-200 rounded-xl p-8">IMAGE</div>
                        </div>
                        <div data-date-time></div>
                        <input type="file" data-file-choose />
                        <button type="button" data-delete-item>DELETE</button>
                        <div class="flex justify-between">
                            <div class="flex">
                                <div class="mr-2">LINK</div>
                                <input type="text" data-link placeholder="Enter link here" />
                            </div>
                            <button type="button" data-button-submit>SUBMIT</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="bg-rose-200">FOOTER</div>
    </div>
</body>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const currentId = "<?php echo $currentId ?>";
        fetchItemData(currentId);

        const submitButton = document.querySelector('[data-button-submit]');
        const fileInput = document.querySelector('[data-file-choose]');
        const deleteButton = document.querySelector('[data-delete-item]');
        const linkInput = document.querySelector('[data-link]');
        let isFileDeleted = false;

        deleteButton.addEventListener('click', () => {
            isFileDeleted = true;
            const imageSlideDiv = document.querySelector('[data-image-slide]');
            if (imageSlideDiv) {
                imageSlideDiv.innerHTML = ''; // ลบภาพทันทีใน UI
            }
        });

        submitButton.addEventListener('click', async () => {
            const urlParams = new URLSearchParams(window.location.search);
            const itemId = urlParams.get('id');
            const linkValue = linkInput.value.trim();
            const formData = new FormData();
            let uploadedFileName = '';

            formData.append('id', itemId);
            formData.append('category', 'slide');
            formData.append('action', 'updateItem');

            try {
                // TODO #1: อัพโหลดไฟล์ใหม่ (ถ้ามี)
                if (fileInput.files.length > 0) {
                    const newFile = fileInput.files[0];
                    formData.append('file', newFile);
                    formData.append('link', linkValue);

                    const uploadResponse = await fetch('../api/slide_api_uploadfile.php', {
                        method: 'POST',
                        credentials: 'include',
                        body: formData,
                    });
                    const uploadResult = await uploadResponse.json();
                    if (!uploadResult.result) {
                        throw new Error('Upload failed: ' + uploadResult.message);
                    }
                    // console.log('Upload successful:', uploadResult.message);
                    uploadedFileName = uploadResult.data.filename;

                    displayItemData({
                        filename: uploadedFileName,
                        filepath: `../dnm_file/slide/${uploadedFileName}`,
                        link: linkValue,
                        dateAdd: new Date().toISOString()
                    });
                    // fetchItemData(itemId);

                }

                // TODO #2: ลบไฟล์เดิม (ถ้ามีการลบ)
                if (isFileDeleted || fileInput.files.length > 0) {
                    const deleteFormData = new FormData();
                    deleteFormData.append('id', itemId);
                    deleteFormData.append('deleteFile', true);
                    deleteFormData.append('category', 'slide');

                    const deleteResponse = await fetch('../api/slide_api_removefile.php', {
                        method: 'POST',
                        credentials: 'include',
                        body: deleteFormData,
                    });
                    const deleteResult = await deleteResponse.json();
                    if (!deleteResult.result) {
                        throw new Error('Delete failed: ' + deleteResult.message);
                    }
                    // console.log('Delete successful:', deleteResult.message);
                }

                // TODO #3: อัพเดตข้อมูลหลังจากอัพโหลดและลบแล้ว
                const updateFormData = new FormData();
                updateFormData.append('id', itemId);
                updateFormData.append('category', 'slide');
                updateFormData.append('action', 'updateItem');
                updateFormData.append('link', linkValue);

                if (uploadedFileName) {
                    updateFormData.append('filename', uploadedFileName);
                }

                const updateResponse = await fetch('../api/slide_api_updateitem.php', {
                    method: 'POST',
                    credentials: 'include',
                    body: updateFormData,
                });
                const updateResult = await updateResponse.json();
                console.log(uploadedFileName)
                if (!updateResult.result) {
                    throw new Error('Update failed: ' + updateResult.message);
                }
                // console.log('Update successful:', updateResult.message);

                // เรียก fetchItemData เพื่อรีเฟรชข้อมูลใหม่
                // fetchItemData(itemId);

                displayItemData({
                        filename: uploadedFileName,
                        filepath: `../dnm_file/slide/${uploadedFileName}`,
                        link: linkValue,
                        dateAdd: new Date().toISOString()
                    });

            } catch (error) {
                console.error('Error during the process:', error);
            }
        });
    });

    function fetchItemData(itemId) {
        const formData = new FormData();
        formData.append('id', itemId);
        formData.append('type', 'slide');
        formData.append('action', 'getItem');

        fetch('../api/slide_api_item.php', {
                method: 'POST',
                credentials: 'include',
                body: formData,
            })
            .then(response => response.json())
            .then(result => {
                if (result.result) {
                    const item = result.data.info[0];
                    displayItemData(item);
                } else {
                    console.error('Error fetching item data:', result.message);
                }
            })
            .catch(error => {
                console.error('Error fetching item data:', error);
            });
    }

    function displayItemData(item) {
        const imageSlideDiv = document.querySelector('[data-image-slide]');
        const dateTimeDiv = document.querySelector('[data-date-time]');
        const linkSlide = document.querySelector('[data-link]');

        if (imageSlideDiv && item.filename) {
            const imageUrl = `../${item.filepath}`;
            imageSlideDiv.innerHTML = `<img src="${imageUrl}" alt="Slide Image" />`;
        }
        if (dateTimeDiv && item.dateAdd) {
            dateTimeDiv.textContent = `Date Added: ${item.dateAdd}`;
        }
        if (linkSlide && item.link) {
            linkSlide.value = item.link;
        }
    }
    // TODO ยิง API 3 ครั้ง ระบุ category slide ด้วย ครั้งที่ 1 สำหรับ upload ไฟล์ใหม่ ระบุ formData -มี filenameใหม่ -มี linkใหม่ // slide_api_uploadfile

    // TODO ครั้งที่ 2 หากมีไฟล์เดิม ให้ลบไฟล์เดิม (ทำ API ไปลบไฟล์เดิม) API deletefile // slide_api_removefile

    // TODO ครั้งที่ 3 ส่งข้อมูล update ไปยัง API updateitem ละทำ fetch เรียกข้อมูลใหม่ไปแสดง หลังอัพเดตแล้ว slide_api_updatefile
</script>

</html>