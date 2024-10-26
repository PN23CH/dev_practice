<?php
$action = (isset($_GET['action'])) ? $_GET['action'] : NULL;
$currentId = (isset($_GET['id'])) ? $_GET['id'] : NULL;

?>
<!DOCTYPE html>
<html lang="en">
<?php
require_once __DIR__ . "/../lib/util_var.php";
require_once __DIR__ . "/../config/config_hd.php";
require_once __DIR__ . "/../config/config_dns.php";
require_once __DIR__ . "/../config/configuration.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <title>News - slide - manage</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../style/modal.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.0/Sortable.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/heic2any/0.0.4/heic2any.min.js"></script>
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
                <form data-form="main" name="slide">
                    <div class="flex flex-col w-full bg-sky-100 rounded-2xl drop-shadow-lg p-5 gap-y-4">
                        <div class="text-xl">ข้อมูลภาพสไลด์</div>
                        <hr class="h-2 border-gray-300 my-1">
                        <div class="text-sm">รูปปัจจุบัน</div>
                        <div class="flex flex-col items-center justify-center">
                            <div class="min-w-fit max-w-md mx-auto">
                                <div data-image-slide class="w-fit bg-rose-200 rounded-xl overflow-hidden">
                                    <img data-main-preview src="../dnm_file/slide/default-image.jpg" alt="Image Preview" class="w-auto" />
                                </div>
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
                        <div class="flex">
                            <div class="pb-5">
                                <div class="relative inline-block">
                                    <!-- TODO ใช้เป็น <label> ในการ config css -->

                                    <input data-main-input type="file" id="fileMainInput" multiple class="block text-sm text-slate-500 file:mr-4 file:py-2 file:px-10 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-sky-300 file:text-sky-900 hover:file:bg-sky-200" />
                                    <svg class="absolute left-2 top-1/2 transform -translate-y-1/2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.61516 4.39062V15.6092M4.00586 9.99992H15.2245" stroke="white" stroke-width="1.60586" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div data-size-file-show class="hidden absolute text-sm">ขนาดไฟล์ไม่เกิน 16MB</div>
                            </div>
                            <div class="flex items-start gap-x-4">
                                <input type="checkbox" data-check-delete class="mt-3">
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
                        </div>
                        <div>
                            <button open-gal-modal class="bg-slate-300 hover:bg-slate-600 rounded-xl text-black hover:text-white px-3 py-2">Add Gallery</button>
                        </div>
                        <div class="flex justify-between">
                            <div class="flex flex-col">
                                <div class="mr-2">LINK</div>
                                <div class="flex items-center gap-x-2">
                                    <input class="rounded-lg px-2 py-1" type="text" data-link placeholder="Enter link here" maxlength="100" value="" name="link" />
                                    <p data-text-length></p>
                                </div>
                            </div>
                            <button type="button" data-button-submit class="w-10 h-10 bg-red-700 ring-4 ring-red-200 rounded-full text-white hover:bg-red-600">OK</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="bg-rose-200">FOOTER</div>

        <!-- MODAL -->
        <div data-modal="addGal" class="modal hidden fixed top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-50">
            <div class="modal-content flex flex-col items-center justify-center bg-white p-6 rounded-xl shadow-lg gap-y-5">
                <div class="relative inline-block">
                    <input data-gal-input type="file" id="addGallery" multiple class="block text-sm text-slate-500 file:mr-4 file:py-2 file:px-10 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-sky-300 file:text-sky-900 hover:file:bg-sky-200">
                    <svg class="absolute left-2 top-1/2 transform -translate-y-1/2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.61516 4.39062V15.6092M4.00586 9.99992H15.2245" stroke="white" stroke-width="1.60586" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <!-- Add Gallery -->
                <div data-add-gallery="container" class="w-full min-w-min sm:w-1/2 md:w-1/3 lg:w-1/5 gap-3 mb-3"></div>

                <div class="flex justify-end">
                    <button gallery-submit class="bg-sky-500 text-white px-4 py-2 mr-2 rounded">ตกลง</button>
                    <button gallery-cancle class="bg-slate-100 text-black px-4 py-2 mr-2 rounded">ยกเลิก</button>
                </div>
            </div>
        </div>

        <!-- DEMO ADD GALLERY  -->
        <div data-add-gallery="item" class="flex flex-col jus bg-rose-200 min-w-fit h-full justify-start items-center justify-self-center rounded-2xl gap-y-2 m-2 p-2">
            <input type="text" name="sequent">
            <div class="flex justify-center items-center relative w-[160px] h-[120px]">
                <img data-gal-preview src="../dnm_file/slide/default-image.jpg" alt="Image Preview" class="max-w-[160px] max-h-[120px] rounded-xl bg-cover" />
            </div>
            <div class="flex flex-col w-full gap-3">
                <input type="text" placeholder="รายละเอียดรูป" class="rounded-lg p-2">
            </div>
        </div>
    </div>
</body>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const currentId = "<?php echo $currentId ?>";
        const webName = "<?php echo $webName ?>";
        const dnmLocal = "<?php echo $dnmLocal; ?>";
        const localFile = "<?php echo $localFile; ?>";

        const linkInput = document.querySelector('[data-link]');
        const textLengthDisplay = document.querySelector('p[data-text-length]');
        const maxLength = linkInput.maxLength || 100;

        const fileMainInput = document.querySelector('[data-main-input]');
        const mainContainer = document.querySelector('[data-main-preview]');
        const mainSubmit = document.querySelector('[data-button-submit]');
        const placeholderImage = '../dnm_file/slide/default-image.jpg';
        const category = "slide";
        const slideForm = document.forms['slide'];

        let currentFile = dnmLocal == 1 ? "dnmLocal" : localFile == 1 ? "localFile" : "";

        const imageSlideDiv = document.querySelector('[data-image-slide] img');
        imageSlideDiv.src = '../dnm_file/slide/default-image.jpg';
        const deleteButton = document.querySelector('[data-delete-item]');
        const checkDelete = document.querySelector('[data-check-delete]');
        const currentSizeFile = document.querySelector('[data-size-file-show]');
        const maxSizeMB = 4; // ขนาดสูงสุดที่อนุญาตใน MB
        const maxFiles = 20;

        const modalAddGal = document.querySelector('div[data-modal="addGal"]');
        const openGalModal = document.querySelector('[open-gal-modal]');
        const cancleAddGalButt = document.querySelector('[gallery-cancle]');

        const addGalleryInput = document.querySelector('[data-gal-input]');
        const addGallerySubmit = document.querySelector('[gallery-submit]');

        const itemGalDemo = document.querySelector('div[data-add-gallery]');
        const galleryContainer = document.querySelector('[data-gal-preview]')

        const toggleModal = (isOpen) => {
            modalAddGal.classList.toggle('hidden', !isOpen);
            modalAddGal.classList.toggle('flex', isOpen);
        };

        // เปิด modal เมื่อคลิกปุ่ม 'Add Gallery'
        openGalModal.addEventListener('click', (event) => {
            event.preventDefault();
            toggleModal(true);
        });

        // ปิด modal เมื่อคลิกปุ่มยกเลิก
        cancleAddGalButt.addEventListener('click', () => toggleModal(false));

        // ปิด modal เมื่อกดนอก modal-content
        modalAddGal.addEventListener('click', (event) => {
            if (event.target === modalAddGal) toggleModal(false);
        });

        // ปิด modal เมื่อกดปุ่ม ESC
        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') toggleModal(false);
        });

        // Gallery
        async function addGalForm() {
            const inputGalleryFiles = addGalleryInput.files;

            const isFileTypeValid = await checkFileTypeValid(file, 'image');
            if (!isFileTypeValid) return;

            const isMaxSizeValid = await checkMaxSizeValid([file]); // เช็คแต่ละไฟล์แยก
            if (!isMaxSizeValid) return;



            // for (const file of inputGalleryFiles) {

            //     // ใน clone มี preview
            //     // // แสดงผล preview
            //     // const previewImageElement = document.createElement('img');
            //     // await handleFilePreview(file, galleryContainer);

            //     // // เพิ่ม preview ลงใน Gallery Container
            //     // galleryContainer.appendChild(previewImageElement);
            // }
        }

        // TODO ทำฟังก์ชั่น clone (loop ในฟังก์ชั่น) และ เอาไปใส่ addGalForm 

        // Input ของ Gallery
        addGalleryInput.addEventListener('change', addGalForm);


        // นับตัวอักษรใน Input
        function updateCharacterCount() {
            const characterCount = linkInput.value.length;
            textLengthDisplay.textContent = `${characterCount}/${maxLength} ตัวอักษร`;
        }

        if (linkInput && textLengthDisplay) {
            updateCharacterCount();
        }

        // Fetch refresh load
        function fetchItemData(currentId) {
            const formData = new FormData();
            formData.append('id', currentId);
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
        fetchItemData(currentId);

        // Display dataSet
        function displayItemData(item) {
            if (item.filename) {
                // dataset old file
                fileMainInput.dataset.oldfile = item.filename;
                pathUrlFile = genUrlPath(item.filename, category);
                mainContainer.src = pathUrlFile;
            }

            const linkInput = document.querySelector('[data-link]');
            if (item.link && linkInput) {
                linkInput.value = item.link || '';
                updateCharacterCount();
            }
        }

        // ตรวจสอบจำนวนไฟล์ว่ามีมากกว่า 20 ไฟล์หรือไม่
        function maxFileValid(files) {

            if (files.length > maxFiles) {
                return false;
            }

            // console.log('maxfile' , fileInfo)
            return true;
        }

        // ตรวจขนาดของไฟล์
        function maxSizeValid(files) {
            // console.log('maxSizeFunc');
            const fileInfo = {
                isvalid: true,
                totalsize: 0,
                info: []
            };

            // Loop แต่ละไฟล์เพื่อตรวจสอบขนาด
            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                const sizeIn = file.size; // หน่วยเป็น ไบต์
                const sizeInMB = file.size / (1024 * 1024); // หน่วยเป็น MB
                const isValidFile = sizeIn <= maxSizeMB * 1024 * 1024;
                // console.log('isValidFile', isValidFile)

                fileInfo.info.push({
                    size: sizeInMB.toFixed(2), // เก็บขนาดไฟล์ในรูปแบบทศนิยม 2 ตำแหน่ง
                    isvalid: isValidFile
                });

                fileInfo.totalsize += sizeIn;

                // ถ้าพบไฟล์ที่ไม่ valid ให้ isvalid เป็น false
                if (!isValidFile) {
                    fileInfo.isvalid = false;
                }
            }
            fileInfo.totalsize = (fileInfo.totalsize / (1024 * 1024)).toFixed(2);

            // console.log('maxsize', fileInfo)

            return fileInfo;
        }

        // ฟังก์ชันตรวจสอบนามสกุลไฟล์
        const allowedExtensions = {
            image: ['jpg', 'jpeg', 'png', 'gif', 'heic'],
            document: ['doc', 'docx'],
            pdf: ['pdf'],
            archeiv: ['zip', 'rar']
        };

        // อนุญาตไฟล์ตั้งแต่การ input
        function setInputAcceptType(elementId, allowedTypes) {
            const acceptTypes = allowedTypes.map(type => `.${type}`).join(', ');

            const inputElement = document.getElementById(elementId);

            if (inputElement) {
                inputElement.setAttribute('accept', acceptTypes);
            } else {
                console.error(`Element with id "${elementId}" not found`);
            }
        }

        setInputAcceptType('fileMainInput', allowedExtensions.image); // กำหนด type ให้ input

        // ฟังก์ชั่น check ประเภทของไฟล์
        function isValidFileType(file, type) {
            const fileExtension = file.name.split('.').pop().toLowerCase();
            let category = null;
            console.log(file);

            // วนลูปเช็คทุกประเภทใน allowedExtensions
            for (const type in allowedExtensions) {
                const targetType = allowedExtensions[type];

                console.log('targetType1', targetType.includes(fileExtension));

                if (targetType.includes(fileExtension)) {
                    console.log('targetType2', targetType.includes(fileExtension));
                    category = type; // เก็บประเภทที่ตรงกับไฟล์นี้
                    return {
                        isValid: true,
                        category: category
                    };
                }
            }

            // หากไม่เจอประเภทที่ตรงกัน
            return {
                isValid: false,
                category: null
            };
        }

        // ฟังก์ชันแปลงไฟล์ .heic เป็น .jpg
        async function convertHeicToJpg(file) {
            try {
                // console.log('convertFunc');
                const convertedFile = await heic2any({
                    blob: file,
                    toType: 'image/jpeg',
                });
                // console.log('convertedFileFucn', convertedFile)
                return convertedFile;
            } catch (error) {
                console.error('การแปลงไฟล์ .heic เป็น .jpg ล้มเหลว:', error);
                return null;
            }
        }

        // ฟังก์ชันสำหรับตรวจสอบจำนวนไฟล์
        async function checkMaxFileValid(inputFile) {
            let resultMaxFile = null;
            try {
                resultMaxFile = await maxFileValid(inputFile);
                if (!resultMaxFile) {
                    currentSizeFile.innerHTML = `คุณใส่ไฟล์เกิน ${maxFiles} ไฟล์`;
                    currentSizeFile.classList.add('text-rose-700');
                    return false;
                }
                return true;
            } catch (error) {
                console.error('เกิดข้อผิดพลาดในการตรวจสอบ maxFile:', error);
                return false;
            }
        }

        // ฟังก์ชันสำหรับตรวจสอบขนาดไฟล์
        async function checkMaxSizeValid(inputFile) {
            let resultMaxSize = null;
            try {
                resultMaxSize = await maxSizeValid(inputFile);
                if (!resultMaxSize.isvalid) {
                    currentSizeFile.classList.remove('hidden');
                    currentSizeFile.innerHTML = `ขนาดไฟล์ของคุณใหญ่กว่า ${maxSizeMB} MB`;
                    currentSizeFile.classList.add('text-rose-700');
                    fileMainInput.value = '';
                    return false;
                } else {
                    currentSizeFile.classList.remove('text-rose-700');
                    currentSizeFile.innerHTML = `ขนาดไฟล์ ${resultMaxSize.totalsize} MB`;
                    return true;
                }
            } catch (error) {
                console.error('เกิดข้อผิดพลาดในการตรวจสอบ maxSize:', error);
                return false;
            }
        }

        // ฟังก์ชันสำหรับตรวจสอบนามสกุลไฟล์ การ DISPLAY ใส่ที่ฟังก์ชั่นนี้
        async function checkFileTypeValid(file, type) {
            const {
                isValid,
                category
            } = isValidFileType(file);

            console.log(isValid);

            // หากไฟล์ไม่ผ่านการตรวจสอบ
            if (!isValid) {
                // แสดงข้อความให้ผู้ใช้ทราบ
                // await showModal(`ไฟล์ "${file.name}" ไม่ได้รับการอนุญาต\nกรุณาอัปโหลดไฟล์ประเภท: ${allowedExtensions[type].join(', ')}`);
                return false;
            }

            return true;

            // if (!isValidFileType(file)) {
            //     console.warn(`ไฟล์ ${file.name} มีนามสกุลไม่ถูกต้อง`);
            //     return false;
            // }
            // return true;
        }

        // Preview Image
        async function handleFilePreview(file, mainContainer, galleryContainer) {
            let imgPreview = '';
            if (file.name.toLowerCase().endsWith('.heic')) {
                const convertedFile = await convertHeicToJpg(file);
                if (convertedFile) {
                    imgPreview = URL.createObjectURL(convertedFile);
                }
            } else {
                imgPreview = URL.createObjectURL(file);
            }
            // แสดงผลใน Main Preview
            if (mainContainer) {
                mainContainer.src = imgPreview;
            }

            // แสดงผลใน Gallery Preview
            if (galleryContainer) {
                const galleryItem = document.createElement('img');
                galleryItem.src = imgPreview;
                galleryContainer.appendChild(galleryItem);
            }
        }

        // Main Image
        async function mainImageForm() {
            const inputFile = fileMainInput.files;
            // console.log('inputFile', inputFile)

            // ตรวจสอบประเภทไฟล์ (ใช้ไฟล์แรกเป็นตัวอย่าง)
            const file = inputFile[0];
            const isFileTypeValid = await checkFileTypeValid(file, 'image');
            if (!isFileTypeValid) return;

            // ตรวจสอบจำนวนไฟล์
            const isMaxFileValid = await checkMaxFileValid(inputFile);
            if (!isMaxFileValid) return;

            // ตรวจสอบขนาดไฟล์
            const isMaxSizeValid = await checkMaxSizeValid(inputFile);
            if (!isMaxSizeValid) return;


            // ทำการแสดงผล Preview ภาพ
            await handleFilePreview(file, mainContainer);
        }

        // Input ของไฟล์หลัก
        fileMainInput.addEventListener('change', async function() {
            mainImageForm();
        })

        // Gen Path URL
        function genUrlPath(filename, category) {
            const hostname = `../dnm_file`;
            const UrlPath = `${hostname}/${category}/${filename}`;
            return UrlPath;
        }

        linkInput.addEventListener('input', updateCharacterCount);

        let isCheck = false;
        checkDelete.addEventListener('change', (event) => {
            isCheck = event.target.checked;
        });

        deleteButton.addEventListener('click', () => {
            checkDelete.checked ||= true; // การใช้ ||= จะตรวจสอบว่า checkDelete.checked เป็น false หรือ undefined และถ้าใช่ จะกำหนดค่าให้เป็น true
            isCheck = checkDelete.checked; // อัพเดทค่า isCheck หลังจากเปลี่ยนสถานะ checkbox
        });

        // Main Submit
        async function handleMainSubimt() {
            const linkValue = linkInput.value.trim();
            const formData = new FormData();

            let uploadedFileName = '';
            let isFileDeleted = false;
            const setOldFile = fileMainInput.dataset.oldfile;
            const newFile = fileMainInput.files[0];

            if (isCheck || newFile) {
                isFileDeleted = true;
                mainContainer.src = placeholderImage;
            }

            formData.append('id', currentId);
            formData.append('category', 'slide');
            formData.append('action', 'updateItem');
            formData.append('webName', webName);
            formData.append('currentFile', currentFile);

            try {
                //  #1: อัพโหลดไฟล์ใหม่ (ถ้ามี)
                if (newFile) {
                    const fileExtension = newFile.name.split('.').pop().toLowerCase();

                    // อนุญาตเฉพาะไฟล์นามสกุลที่กำหนด
                    const allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'heic'];
                    if (!allowedExtensions.includes(fileExtension)) {
                        throw new Error(`นามสกุลไฟล์ ${fileExtension} ไม่ได้รับอนุญาต`);
                    }

                    // ถ้าเป็น .heic แปลงเป็น .jpg ก่อน
                    if (fileExtension === 'heic') {
                        const convertedFile = await convertHeicToJpg(newFile);
                        if (convertedFile) {
                            uploadedFileName = await uploadNewFile(convertedFile, currentId);
                        } else {
                            throw new Error('การแปลงไฟล์ .heic เป็น .jpg ล้มเหลว');
                        }
                    } else {
                        // อัปโหลดไฟล์ใหม่ที่ไม่ใช่ .heic
                        uploadedFileName = await uploadNewFile(newFile, currentId);
                    }

                    displayItemData({
                        filename: uploadedFileName,
                        filepath: `dnm_file/slide/${uploadedFileName}`,
                        link: linkValue,
                        dateAdd: new Date().toISOString()
                    });
                }

                //  #2: ลบไฟล์เดิม (ถ้ามีการลบ)
                if (isFileDeleted && setOldFile) {
                    await deleteOldFile(currentFile, setOldFile);
                }

                //  #3: อัพเดตข้อมูลหลังจากอัพโหลดและลบแล้ว
                await updateItemData(currentId, linkValue, uploadedFileName);
            } catch (error) {
                console.error('Error during the process:', error);
            }
        }

        mainSubmit.addEventListener('click', handleMainSubimt);


        // Upload Main Fetch API
        async function uploadNewFile(newFile, currentId) {
            const formData = new FormData();
            formData.append('id', currentId);
            formData.append('category', 'slide');
            formData.append('action', 'updateItem');
            formData.append('webName', webName);
            formData.append('currentFile', currentFile);
            formData.append('file', newFile);

            const response = await fetch('../api/slide_api_uploadfile.php', {
                method: 'POST',
                credentials: 'include',
                body: formData,
            });

            const result = await response.json();

            if (!result.result) {
                throw new Error('Upload failed: ' + result.message);
            }

            return result.data.filename;
        }

        // Delete Main Fetch API
        async function deleteOldFile(currentFile, setOldFile) {
            const formData = new FormData();
            formData.append('webName', webName);
            formData.append('currentFile', currentFile);
            formData.append('oldFile', setOldFile);
            formData.append('category', 'slide');
            formData.append('action', 'remove');

            const response = await fetch('../api/slide_api_removefile.php', {
                method: 'POST',
                credentials: 'include',
                body: formData,
            });
            const result = await response.json();

            if (!result.result) {
                throw new Error('Delete failed: ' + result.message);
            }
        }

        // Update Main Fetch API
        async function updateItemData(currentId, linkValue, uploadedFileName) {
            const formData = new FormData(slideForm);
            formData.append('id', currentId);
            formData.append('category', 'slide');
            formData.append('action', 'updateItem');
            // formData.append('link', linkValue);

            if (uploadedFileName) {
                formData.append('filename', uploadedFileName);
            }

            const response = await fetch('../api/slide_api_updateitem.php', {
                method: 'POST',
                credentials: 'include',
                body: formData,
            });
            const result = await response.json();

            if (!result.result) {
                throw new Error('Update failed: ' + result.message);
            }

            if (result.filename) {
                pathUrlFile = genUrlPath(result.filename, category);
                mainContainer.src = pathUrlFile;
            }
        }

    });

</script>

</html>