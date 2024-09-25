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
                    <div class="flex flex-col w-full bg-sky-100 rounded-2xl drop-shadow-lg p-5 gap-y-4">
                        <div class="text-xl">ข้อมูลภาพสไลด์</div>
                        <hr class="h-2 border-gray-300 my-1">
                        <div class="text-sm">รูปปัจจุบัน</div>
                        <div class="flex flex-col items-center justify-center">
                            <div class="max-w-md mx-auto">
                                <div data-image-slide class="w-fit bg-rose-200 rounded-xl overflow-hidden">IMAGE</div>
                                <!-- <div
                                    class="mt-5 bg-gray-50 text-gray-600 text-base rounded w-full h-48 flex flex-col items-center justify-center border-2 border-gray-300 border-dashed">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 mb-2 fill-gray-400" viewBox="0 0 32 32">
                                        <path
                                            d="M23.75 11.044a7.99 7.99 0 0 0-15.5-.009A8 8 0 0 0 9 27h3a1 1 0 0 0 0-2H9a6 6 0 0 1-.035-12 1.038 1.038 0 0 0 1.1-.854 5.991 5.991 0 0 1 11.862 0A1.08 1.08 0 0 0 23 13a6 6 0 0 1 0 12h-3a1 1 0 0 0 0 2h3a8 8 0 0 0 .75-15.956z"
                                            data-original="#000000" />
                                        <path
                                            d="M20.293 19.707a1 1 0 0 0 1.414-1.414l-5-5a1 1 0 0 0-1.414 0l-5 5a1 1 0 0 0 1.414 1.414L15 16.414V29a1 1 0 0 0 2 0V16.414z"
                                            data-original="#000000" />
                                    </svg>
                                    <p class="text-base font-semibold text-gray-600">Drag & Drop files here</p>
                                </div> -->
                            </div>
                        </div>
                        <!-- <div data-date-time></div> -->
                        <div class="flex items-center">
                            <div class="relative inline-block">
                                <input type="file" data-file-choose class="block text-sm text-slate-500 file:mr-4 file:py-2 file:px-10 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-sky-300 file:text-sky-900 hover:file:bg-sky-200" />
                                <svg class="absolute left-2 top-1/2 transform -translate-y-1/2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.61516 4.39062V15.6092M4.00586 9.99992H15.2245" stroke="white" stroke-width="1.60586" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <button type="button" data-delete-item class="flex items-center gap-x-3">
                                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_d_1016_6844)">
                                        <rect x="2" y="1" width="30" height="30" rx="10" fill="#FF0000" />
                                        <rect x="2.4808" y="1.4808" width="29.0384" height="29.0384" rx="9.5192" stroke="#FF0000" stroke-width="0.961594" />
                                        <path d="M20.2063 11.1936V10.5525C20.2063 9.65496 20.2063 9.20617 20.0317 8.86335C19.878 8.56179 19.6328 8.31661 19.3313 8.16296C18.9884 7.98828 18.5397 7.98828 17.6421 7.98828H16.36C15.4624 7.98828 15.0136 7.98828 14.6708 8.16296C14.3692 8.31661 14.124 8.56179 13.9704 8.86335C13.7957 9.20617 13.7957 9.65496 13.7957 10.5525V11.1936M15.3984 15.6009V19.6075M18.6037 15.6009V19.6075M9.78906 11.1936H24.213M22.6103 11.1936V20.1685C22.6103 21.5148 22.6103 22.188 22.3483 22.7023C22.1178 23.1546 21.7501 23.5224 21.2977 23.7528C20.7835 24.0149 20.1103 24.0149 18.7639 24.0149H15.2381C13.8917 24.0149 13.2186 24.0149 12.7043 23.7528C12.252 23.5224 11.8842 23.1546 11.6537 22.7023C11.3917 22.188 11.3917 21.5148 11.3917 20.1685V11.1936" stroke="white" stroke-width="1.60266" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <filter id="filter0_d_1016_6844" x="0.0768117" y="0.0384058" width="33.8464" height="33.8464" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                            <feOffset dy="0.961594" />
                                            <feGaussianBlur stdDeviation="0.961594" />
                                            <feColorMatrix type="matrix" values="0 0 0 0 0.0627451 0 0 0 0 0.0941176 0 0 0 0 0.156863 0 0 0 0.05 0" />
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1016_6844" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1016_6844" result="shape" />
                                        </filter>
                                    </defs>
                                </svg>
                                ลบรูป / ไฟล์ปัจจุบัน
                            </button>
                        </div>

                        <div class="flex justify-between">
                            <div class="flex flex-col">
                                <div class="mr-2">LINK</div>
                                <input class="rounded-lg px-2 py-1" type="text" data-link placeholder="Enter link here" />
                            </div>
                            <button type="button" data-button-submit class="w-10 h-10 bg-red-700 ring-4 ring-red-200 rounded-full text-white hover:bg-red-600">OK</button>
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
            imageSlideDiv.innerHTML = `<img class="bg-cover bg-center max-w-[640px]" src="${imageUrl}" alt="Slide Image" />`;
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