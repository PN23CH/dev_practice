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
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
</head>
<style>
    body {
        font-family: "Sarabun", sans-serif;
    }

    .sortable-ghost {
        opacity: 0.5;
        border: 2px dashed #000;
    }

    .loader {
        width: 50px;
        aspect-ratio: 1;
        border-radius: 50%;
        border: 4px solid #0000;
        border-right-color: #ffa50097;
        position: relative;
        animation: l24 1s infinite linear;
    }

    .loader:before,
    .loader:after {
        content: "";
        position: absolute;
        inset: -10px;
        border-radius: 50%;
        border: inherit;
        animation: inherit;
        animation-duration: 2s;
    }

    .loader:after {
        animation-duration: 4s;
    }

    @keyframes l24 {
        100% {
            transform: rotate(1turn)
        }
    }
</style>

<body class="bg-white w-full h-full flex flex-col">
    <div class="bg-sky-200 h-16">NAVBAR</div>
    <!-- CONTENT -->
    <div class="flex w-full max-w-8xl mx-auto">
        <div class="flex min-w-[200px] w-[350px] max-w-[400px] h-screen bg-pink-200 hidden">SIDEMENU</div>
        <div class="flex flex-col w-full px-10 py-8 gap-y-5">
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
                        </div>
                    </div>
                    <div class="flex">
                        <div class="pb-5">
                            <div class="relative inline-block">

                                <input data-main-input type="file" id="fileMainInput" multiple class="block text-sm text-slate-500 file:mr-4 file:py-2 file:px-10 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-sky-300 file:text-sky-900 hover:file:bg-sky-200" />
                                <svg class="absolute left-2 top-1/2 transform -translate-y-1/2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.61516 4.39062V15.6092M4.00586 9.99992H15.2245" stroke="white" stroke-width="1.60586" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div data-size-file-show class="hidden absolute text-sm">ขนาดไฟล์ไม่เกิน 16MB</div>
                        </div>
                        <div class="flex items-start gap-x-4">
                            <input type="checkbox" data-check-slide class="mt-3">
                            <button type="button" data-delete-item="slide" class="flex items-center gap-x-3">
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
                    <div class="flex justify-between">
                        <div class="flex flex-col">
                            <div class="mr-2">LINK</div>
                            <div class="flex items-center gap-x-2">
                                <input class="rounded-lg px-2 py-1" type="text" data-link placeholder="Enter link here" maxlength="100" value="" name="link" />
                                <p data-text-length></p>
                            </div>
                        </div>
                        <button type="button" data-button-submit="main" class="w-10 h-10 bg-red-700 ring-4 ring-red-200 rounded-full text-white hover:bg-red-600">OK</button>
                    </div>
                </div>
            </form>

            <!-- gallery zone -->
            <form data-form="gallery">
                <div class="flex flex-col bg-teal-100 rounded-2xl mt-3 p-5 gap-2">
                    <input type="text" name="last-sequent">
                    <label class="text-xl">Gallery</label>
                    <hr class="border-zinc-400">
                    <div class="flex justify-end gap-2 my-4">
                        <input type="checkbox" select-all-gal>
                        <label>Delete All</label>
                    </div>
                    <!-- Gallery Container Show -->
                    <div data-storage-gallery class="flex flex-wrap justify-center w-full mt-3 gap-3"></div>

                    <div class="flex justify-between items-center mt-5">
                        <button open-gal-modal class="bg-slate-300 hover:bg-slate-600 rounded-xl text-black hover:text-white px-3 py-2">Add Gallery</button>
                        <button type="button" data-button-submit="gallery" class="w-10 h-10 bg-red-700 ring-4 ring-red-200 rounded-full text-white hover:bg-red-600">OK</button>
                    </div>
                </div>

                <!-- item from gallery -->
                <div data-image="item-gallery" class="hidden min-w-[220px] sm:w-1/3 md:w-1/4 lg:w-1/6">
                    <div class="flex flex-col bg-sky-200 min-w-fit h-full justify-start items-center justify-self-center rounded-2xl gap-y-2 m-2 p-2">
                        <div class="flex justify-between items-center w-full px-3">
                            <input type="checkbox" data-check-gallery>
                            <label>ลำดับ</label>
                        </div>
                        <input data-sequent type="text" value="0" readonly>
                        <div class="flex justify-center items-center relative w-[160px] h-[120px]">
                            <img data-image-gallery src="../dnm_file/slide/default-image.jpg" class="absolute image-cover max-w-[160px] max-h-[120px] rounded-xl z-10">
                        </div>
                        <div class="flex flex-col gap-y-2">
                            <input type="text" data-item-caption maxlength="50" value="" name="caption" class="w-full border border-gray-400 rounded-lg p-1">
                            <div class="flex justify-between items-center">
                                <p>0/50 ตัวอักษร</p>
                                <button type="button" data-delete-item="gallery" class="flex items-center gap-x-3 hover:bg-sky-800">
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
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>


        </div>
    </div>

    <footer class="w-full md:flex md:items-center md:justify-center bg-rose-200 border-t-2 border-t-teal-50 mx-auto mt-1">
        <div class="mx-auto py-4 px-6 text-center">
            <p class="text-gray-600">COPYRIGHT</p>
        </div>
    </footer>

    <!-- MODAL -->
    <div data-modal="addGal" class="modal hidden fixed top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-50">
        <div class="modal-content flex flex-col min-w-fit justify-start items-center justify-self-center bg-white p-6 rounded-xl shadow-lg gap-y-5">
            <div class="relative inline-block">
                <input data-input-gallery type="file" id="addGallery" multiple class="block text-sm text-slate-500 file:mr-4 file:py-2 file:px-10 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-sky-300 file:text-sky-900 hover:file:bg-sky-200">
                <svg class="absolute left-2 top-1/2 transform -translate-y-1/2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.61516 4.39062V15.6092M4.00586 9.99992H15.2245" stroke="white" stroke-width="1.60586" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <!-- Add Gallery -->
            <div data-container="gallery" class="flex flex-wrap justify-center w-full gap-3 mb-3"></div>

            <div loader-gallery class="hidden loader"></div>

            <div class="flex justify-end">
                <button data-submit-gallery class="bg-sky-500 text-white px-4 py-2 mr-2 rounded">ตกลง</button>
                <button gallery-cancle class="bg-slate-100 text-black px-4 py-2 mr-2 rounded">ยกเลิก</button>
            </div>
        </div>
    </div>

    <!-- DEMO ADD GALLERY  -->
    <div data-image="add-gallery" class="hidden flex flex-col jus bg-rose-200 min-w-fit h-full justify-start items-center justify-self-center rounded-2xl gap-y-2 m-2 p-2">
        <input data-add-sequent type="text" value="0" name="add-sequent" readonly>
        <div class="flex justify-center items-center relative w-[160px] h-[120px]">
            <img data-pre-image="gallery" src="../dnm_file/slide/default-image.jpg" alt="Image Preview" class="max-w-[160px] max-h-[120px] rounded-xl bg-cover" />
        </div>
        <div class="flex flex-col w-full gap-3">
            <input data-addgal-caption type="text" value="" name="addCaption" placeholder="รายละเอียดรูป" class="rounded-lg p-2">
        </div>
        <div data-size-file-gal-show class="hidden absolute text-sm">ขนาดไฟล์ไม่เกิน 16MB</div>
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
        const mainSubmit = document.querySelector('[data-button-submit="main"]');
        const placeholderImage = '../dnm_file/slide/default-image.jpg';
        const category = "slide";
        const slideForm = document.forms['slide'];
        const galleryForm = document.forms['gallery'];

        let currentFile = dnmLocal == 1 ? "dnmLocal" : localFile == 1 ? "localFile" : "";

        const imageSlideDiv = document.querySelector('[data-image-slide] img');
        imageSlideDiv.src = '../dnm_file/slide/default-image.jpg';
        const deleteSlideButton = document.querySelector('[data-delete-item="slide"]');
        const checkDelete = document.querySelector('[data-check-slide]');
        const currentMainSizeFile = document.querySelector('[data-size-file-show]');
        const currentGalSizeFile = document.querySelector('[data-size-file-gal-show]');
        const maxSizeMB = 4; // ขนาดสูงสุดที่อนุญาตใน MB
        const maxFiles = 20;
        const allowedExtensions = {
            image: ['jpg', 'jpeg', 'png', 'gif', 'heic'],
            document: ['doc', 'docx'],
            pdf: ['pdf'],
            archeiv: ['zip', 'rar']
        };

        const modalAddGal = document.querySelector('div[data-modal="addGal"]');
        const openGalModal = document.querySelector('[open-gal-modal]');
        const cancleAddGalButt = document.querySelector('[gallery-cancle]');

        const formGallery = document.querySelector(`form[data-form="gallery"]`)

        const addGalleryInput = document.querySelector('[data-input-gallery]');
        const addGallerySubmit = document.querySelector('[data-submit-gallery]');

        const galleryContainer = document.querySelector('[data-container="gallery"]');
        const galleryAdd = document.querySelector('[data-image="add-gallery"]');
        const galleryImagePreview = document.querySelector('[data-pre-image="gallery"]')
        const galleryStorage = formGallery.querySelector('[data-storage-gallery]');
        const galleryItem = document.querySelector('[data-image="item-gallery"]');

        const gallerySubmit = document.querySelector('[data-button-submit="gallery"]');

        const selectAllGalleryCheckbox = formGallery.querySelector('[select-all-gal]');
        const buttonDeleteGallery = document.querySelectorAll('button[data-delete-item="gallery"]');

        const toggleModal = (isOpen) => {
            modalAddGal.classList.toggle('hidden', !isOpen);
            modalAddGal.classList.toggle('flex', isOpen);
        };

        // Fetch refresh load
        fetchItemData(currentId);

        // ตรวจสอบนามสกุลไฟล์ และ อนุญาตไฟล์ตั้งแต่การ input
        setInputAcceptType('fileMainInput', allowedExtensions.image); // กำหนด type ให้ input
        // นับตัวอักษรใน Input
        if (linkInput && textLengthDisplay) {
            updateCharacterCount();
        }
        linkInput.addEventListener('input', updateCharacterCount);

        //Start Default Gallery
        // displayDefaultImages(galleryStorage, galleryItem, placeholderImage);

        let galleryFiles = [];
        // Input ของ Gallery
        addGalleryInput.addEventListener('change', () => inputGallery(addGalleryInput));

        // Input ของไฟล์หลัก
        fileMainInput.addEventListener('change', inputMain);

        let isCheck = false;
        checkDelete.addEventListener('change', (event) => {
            isCheck = event.target.checked;
        });

        deleteSlideButton.addEventListener('click', () => {
            checkDelete.checked ||= true;
            isCheck = checkDelete.checked;
        });

        // Main Submit
        mainSubmit.addEventListener('click', handleMainSubimt);

        // Gallery Add Submit
        addGallerySubmit.addEventListener('click', async function() {

            const loaderGallery = modalAddGal.querySelector('[loader-gallery]')
            const resultSubmit = await handleGallerySubmit();

            if (addGalleryInput.files && addGalleryInput.files.length > 0) {

                loaderGallery.classList.remove('hidden');
                galleryContainer.classList.add('hidden');

                await new Promise((resolve) => setTimeout(resolve, 2000));

                if (resultSubmit) {
                    loaderGallery.classList.add('hidden');
                } else {
                    console.error('Failed to load image preview.');
                    loaderGallery.classList.add('hidden');
                }
            }

            if (resultSubmit.info) {
                toggleModal(false);
            } else {
                alert('ไฟล์ไม่ถูกอัพโหลด');
            }
        })

        // Gallery Edit Submit
        gallerySubmit.addEventListener('click', editGallerySubmit);

        // เปิด modal เมื่อคลิกปุ่ม 'Add Gallery'
        openGalModal.addEventListener('click', (event) => {
            addGalleryInput.value = '';
            galleryContainer.innerHTML = ''
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

        manageCheckedDelete('data-check-gallery', selectAllGalleryCheckbox);

        // Fetch First/Refresh Load
        function fetchItemData(currentId) {
            const formData = new FormData();
            formData.append('id', currentId);
            formData.append('type', 'slide');
            formData.append('action', 'getItem');
            fetch('../api/fetch_api.json', {
                    method: 'POST',
                    credentials: 'include',
                    body: formData,
                })
                .then(response => response.json())
                .then(result => {
                    if (result.result) {
                        const data = result.data;
                        // Main
                        displayItemData(data.info, 'main');

                        // Gallery
                        const dataGal = data.gallery;

                        const lastSequent = document.querySelector('[name="last-sequent"]')
                        lastSequent.value = dataGal.length;
                        if (dataGal && dataGal.length > 0) {
                            genGallery(dataGal);
                        } else {
                            // ถ้าไม่มีภาพใน gallery ให้แสดงภาพ placeholder
                            displayDefaultImages(galleryStorage, galleryItem, placeholderImage);
                        }
                    } else {
                        console.error('Error fetching item data:', result.message);
                    }
                })
                .catch(error => {
                    console.error('Error fetching item data:', error);
                });
        }

        // Input Main
        async function inputMain() {
            const inputFile = fileMainInput.files[0];
            const type = 'main';

            if (!inputFile) return null;

            const isFileTypeValid = await checkFileTypeValid(inputFile, 'image');
            if (!isFileTypeValid) return;

            const isMaxFileValid = await checkMaxFileValid([inputFile], currentMainSizeFile, 'main');
            if (!isMaxFileValid) return;

            const isMaxSizeValid = await checkMaxSizeValid([inputFile], currentMainSizeFile, 'main');
            if (!isMaxSizeValid) return;

            // อัปโหลดไฟล์
            try {
                const uploadedFileData = await fileUpload(inputFile, 'upload_main');
                console.log('Main file uploaded successfully:', uploadedFileData.filename);

                // แสดง Preview
                await handleFilePreview(inputFile, mainContainer);

                return uploadedFileData.filename;
            } catch (error) {
                console.error('Error uploading main file:', error);
            }
        }

        // Submit Main
        async function handleMainSubimt() {
            const linkValue = linkInput.value.trim();
            const newFile = fileMainInput.files[0];
            const formData = new FormData();

            let uploadedFileName = '';
            let isFileDeleted = false;
            const setOldFile = fileMainInput.dataset.oldfile;

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
                        uploadedFileName = await inputMain(convertedFile);

                    } else {
                        // อัปโหลดไฟล์ใหม่ที่ไม่ใช่ .heic
                        uploadedFileName = await inputMain(newFile);
                    }

                    if (!uploadedFileName) {
                        throw new Error('อัปโหลดไฟล์ล้มเหลว');
                    }

                    displayItemData({
                        filename: uploadedFileName,
                        filepath: `dnm_file/slide/${uploadedFileName}`,
                        link: linkValue,
                        dateAdd: new Date().toISOString()
                    }, 'main');
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

        // Update Main Fetch API
        async function updateItemData(currentId, linkValue, uploadedFileName) {
            const formData = new FormData(slideForm);
            formData.append('id', currentId);
            formData.append('category', 'slide');
            formData.append('action', 'update_data');
            formData.append('uploadedFileName', uploadedFileName);
            if (formData.has('link')) {
                formData.delete('link');
            }
            if (linkValue) {
                formData.append('link', linkValue);
            }
            if (uploadedFileName instanceof File) {
                try {
                    const uploadedFileData = await fileUpload(uploadedFileName, 'upload_main');
                    const newUploadedFileName = uploadedFileData.filename;
                    console.log('Uploaded file name:', newUploadedFileName);
                    if (newUploadedFileName) {
                        formData.append('filename', newUploadedFileName);
                    }
                } catch (error) {
                    console.error('File upload failed:', error);
                    return;
                }
            } else {
                console.warn('uploadedFileName is not a File object:', uploadedFileName);
            }
            try {
                const response = await fetch('../api/update_main_api.json', {
                    method: 'POST',
                    credentials: 'include',
                    body: formData,
                });
                if (!response.ok) {
                    throw new Error(`Failed to update item data: ${response.statusText}`);
                }
                const result = await response.json();
                if (!result.result) {
                    throw new Error('Update failed: ' + result.message);
                }
                // อัปเดต UI ถ้ามีไฟล์ใหม่
                if (result.data) {
                    const {
                        filename
                    } = result.data.info;
                    if (filename) {
                        const pathUrlFile = genUrlPath(filename, 'slide');
                        mainContainer.src = pathUrlFile;
                    }
                }
            } catch (error) {
                console.error('Error updating item data:', error);
                throw error;
            }
        }

        // การ Upload ของ File
        async function fileUpload(file, endpointApi) {
            if (!file || !(file instanceof File)) {
                throw new Error('Invalid file provided');
            }

            if (!endpointApi || (endpointApi !== 'upload_main' && endpointApi !== 'upload_gallery')) {
                throw new Error('Invalid endpointApi specified');
            }

            const formData = new FormData();
            formData.append('id', currentId);
            formData.append('category', 'slide');
            formData.append('action', 'uploadFile');
            formData.append('webName', webName);
            formData.append('currentFile', currentFile);
            formData.append('file', file);

            const whichApi = endpointApi === 'upload_main' ? '../api/upload_file_main.json' : '../api/upload_file_gallery.json';

            try {
                const response = await fetch(whichApi, {
                    method: 'POST',
                    credentials: 'include',
                    body: formData,
                });

                if (!response.ok) {
                    throw new Error(`Failed to upload file: ${response.statusText}`);
                }

                const result = await response.json();

                // ตรวจสอบผลลัพธ์จาก API
                if (!result.result) {
                    throw new Error('Upload failed: ' + result.message);
                }
                if (!result.data || !result.data.filename) {
                    throw new Error('Response missing file data');
                }

                return result.data;
            } catch (error) {
                console.error('Error uploading file:', error);
                throw error;
            }
        }

        // Input Gallery
        async function inputGallery(addGalleryInput) {
            const inputGalleryFiles = Array.from(addGalleryInput.files);
            const existingFiles = Array.from(galleryStorage.querySelectorAll('[data-image="item-gallery"]'));

            try {
                const isMaxFileValid = await checkMaxFileValid(inputGalleryFiles, currentGalSizeFile, 'gallery');
                if (!isMaxFileValid) {
                    alert('ไฟล์ทั้งหมดเกินจำนวนที่กำหนด');
                    return;
                }

                removeDefaultImages(galleryStorage);

                // ตรวจสอบจำนวนไฟล์รวม (เดิม + ใหม่)
                const totalFiles = inputGalleryFiles.length + existingFiles.length;
                if (totalFiles > 20) { // สมมติ max 20 ไฟล์
                    alert('ไฟล์ทั้งหมดเกินจำนวนที่กำหนด');
                    return;
                }

                let i = 1;
                for (const file of inputGalleryFiles) {
                    const isFileTypeValid = await checkFileTypeValid(file, 'gallery');
                    if (!isFileTypeValid) {
                        console.warn(`ไฟล์ ${file.name} มีประเภทไฟล์ไม่ถูกต้อง`);
                        continue;
                    }

                    const isMaxSizeValid = await checkMaxSizeValid([file], currentGalSizeFile, 'gallery');
                    if (!isMaxSizeValid) {
                        console.warn(`ไฟล์ ${file.name} มีขนาดใหญ่เกินไป`);
                        continue;
                    }
                    try {
                        galleryFiles.push(file);

                        // Clone และแสดงผลใน Gallery
                        const clonedItem = await cloneChildElement(galleryContainer, galleryAdd)
                            .then((clonedItem) => {
                                const imagePreview = clonedItem.querySelector('[data-pre-image="gallery"]');

                                const inputSequent = clonedItem.querySelector('[data-add-sequent]');
                                if (inputSequent) {
                                    inputSequent.value = i;
                                    i++;
                                }

                                return handleFilePreview(file, null, imagePreview).then(() => clonedItem);

                            })
                            .catch((error) => {
                                console.error('Error during cloning or previewing:', error);
                                return null;
                            });

                    } catch (error) {
                        console.error(`Error uploading file ${file.name}:`, error);
                    }

                }

            } catch (error) {
                console.error('Error during gallery input process:', error);
            }
        }

        // Gallery Add Submit
        async function handleGallerySubmit() {
            let resultInfo = '';

            if (galleryFiles.length === 0) {
                console.warn("ไม่มีไฟล์ที่พร้อมสำหรับการอัปโหลด");
                alert("กรุณาเพิ่มไฟล์ก่อนทำการส่ง");
                return;
            }

            // 1. สร้าง store เก็บ data
            const jsonData = [];

            // 2. upload file
            const inputGalleryFiles = addGalleryInput.files;

            let i = 0;
            if (inputGalleryFiles.length > 0) {
                const nodeGalleryAdd = galleryContainer.querySelectorAll('[data-image="add-gallery"]');

                for (const file of inputGalleryFiles) {

                    try {
                        const resultUploadFile = await fileUpload(file, 'upload_gallery');
                        jsonData.push({
                            filename: resultUploadFile.filename,
                            sequent: nodeGalleryAdd[i].querySelector('[name="add-sequent"]').value || '',
                            text: nodeGalleryAdd[i].querySelector('[name="addCaption"]').value || '',
                        });
                        i++;
                    } catch (error) {
                        console.error('Error File gallery submit:', error);
                    }

                }
            }

            // 3. update data  จากของที่เก็บจาก 1.
            const updateGalleryData = await updateGalleryItemData(currentId, jsonData);
            const genGalleryData = genGallery(updateGalleryData.gallery);

            if (updateGalleryData) {
                resultInfo = updateGalleryData;
            }
            return resultInfo;
        }

        // Update Gallery Fetch API
        async function updateGalleryItemData(currentId, jsonData) {

            const formData = new FormData();
            formData.append('id', currentId);
            formData.append('dataType', 'gallery');
            formData.append('action', 'update_data_gallery');
            formData.append('jsonData', JSON.stringify(jsonData));
            formData.append('lastSequent', document.querySelector('[name="last-sequent"]').value);

            try {
                const response = await fetch('../api/update_gallery_api.json', {
                    method: 'POST',
                    credentials: 'include',
                    body: formData,
                });
                if (!response.ok) {
                    throw new Error(`Failed to update gallery item: ${response.statusText}`);
                }
                const result = await response.json();
                if (!result.result) {
                    throw new Error('Update failed: ' + result.message);
                }

                return result.data || '';

                console.log(`Gallery item ${currentId} updated successfully`);

            } catch (error) {
                console.error('Error updating gallery item:', error);
            }
        }

        // Gallery Edit Submit
        function editGallerySubmit() {
            const galleryItems = galleryStorage.querySelectorAll('[data-image="item-gallery"]');

            const editSqText = []; // เก็บข้อมูลลำดับและข้อความ            
            const removedItems = []; // เก็บรายการที่ต้องการลบ

            galleryItems.forEach((item, index) => {
                const imgElement = item.querySelector('[data-image-gallery]');
                const captionElement = item.querySelector('[data-item-caption]');
                const checkboxElement = item.querySelector('input[type="checkbox"][data-check-gallery]');

                // หากมีการ check เพื่อส่งลบ item
                if (checkboxElement && checkboxElement.checked) {
                    if (imgElement) {
                        removedItems.push({
                            filename: imgElement.src.split('/').pop(),
                            sequent: index + 1,
                        });
                    }
                    item.remove();
                    // หากไม่ได้มีการ check ก็จะส่งเพียง sequent และ text caption
                } else {
                    if (imgElement) {
                        editSqText.push({
                            filename: imgElement.src.split('/').pop(),
                            sequent: index + 1,
                            text: captionElement ? captionElement.value : '',
                        });
                    }
                }
            });

            const fetchRequests = [];

            // กรณีลบรายการ
            if (removedItems.length > 0) {

                const formData = new FormData();
                formData.append('id', currentId);
                formData.append('action', 'editGallery')
                formData.append('dataType', 'gallery')
                formData.append('removedData', JSON.stringify(removedItems));

                fetchRequests.push(fetch('../api/remove_gallery_api.json', {
                    method: 'POST',
                    credentials: 'include',
                    body: formData,
                }));
            }

            // กรณีแก้ไขรายการ
            if (editSqText.length > 0) {
                const formData = new FormData();
                formData.append('id', currentId);
                formData.append('action', 'editGallery')
                formData.append('dataType', 'gallery')
                formData.append('editSqText', JSON.stringify(editSqText));

                fetchRequests.push(fetch('../api/edit_gallery_api.json', {
                    method: 'POST',
                    credentials: 'include',
                    body: formData,
                }));
            }

            // รอให้ fetch ทุกคำร้องเสร็จสิ้น
            Promise.all(fetchRequests)
                .then(responses => Promise.all(responses.map(response => response.json())))
                .then(results => {
                    results.forEach((result, index) => {
                        if (result.result) {
                            const data = result.data;

                            if (data.gallery) {
                                genGallery(data.gallery);
                                resetChecked();
                            }

                        } else {
                            console.error(`Error API ${index + 1}:`, result.message);
                        }
                    });
                })
                .catch(error => {
                    console.error('Error Edit item data:', error);
                });
        }

        // Sortable
        function initSortableGallery(containerSelector) {

            if (!galleryStorage) {
                console.warn("Gallery storage element not found.");
                return;
            }
            // Sortable ของเก่า
            new Sortable(galleryStorage, {
                animation: 150,
                ghostClass: 'sortable-gallery',
                filter: 'input, button, textarea, select, [contenteditable]',
                preventOnFilter: false, // อนุญาตให้โต้ตอบ input ได้
                onEnd: function(evt) {
                    const items = galleryStorage.querySelectorAll('div[data-image="item-gallery"]');
                    items.forEach((item, index) => {
                        const sequentInput = item.querySelector('input[data-sequent]');
                        if (sequentInput) {
                            sequentInput.value = index + 1;
                        }
                    });
                    console.log("Items reordered successfully!");
                }
            });

            // Sortable ของ add
            new Sortable(galleryContainer, {
                animation: 150,
                ghostClass: 'sortable-gallery',
                filter: 'input, button, textarea, select, [contenteditable]',
                preventOnFilter: false, // อนุญาตให้โต้ตอบ input ได้
                onEnd: function(evt) {
                    const itemsAdd = galleryContainer.querySelectorAll('div[data-image="add-gallery"]');
                    itemsAdd.forEach((item, index) => {
                        const sequentAddInput = item.querySelector('input[data-add-sequent]');
                        if (sequentAddInput) {
                            sequentAddInput.value = index + 1;
                        }
                    });
                    console.log("Items reordered successfully!");
                }
            });
        }

        // Display dataSet
        function displayItemData(item, type) {
            // Main Image
            if (type === "main") {
                if (item.filename) {
                    fileMainInput.dataset.oldfile = item.filename;
                    const pathUrlMainFile = genUrlPath(item.filename, 'slide');
                    mainContainer.src = pathUrlMainFile;
                }

                const linkInput = document.querySelector('[data-link]');
                if (item.link && linkInput) {
                    linkInput.value = item.link || '';
                    updateCharacterCount();
                }

                // Gallery Image
            } else if (type === "gallery") {
                if (item.filename) {
                    // แปลงผลลัพธ์เป็น Array เพื่อให้ใช้กับ .some ได้
                    const existingItems = Array.from(galleryStorage.querySelectorAll('[data-image="item-gallery"]'));

                    // ตรวจสอบว่ามีรายการซ้ำหรือไม่
                    const isDuplicate = existingItems.some((existingItems) => {
                        const imgElement = existingItems.querySelector('[data-image-gallery]');
                        return imgElement && imgElement.src.includes(item.filename);
                    });

                    if (isDuplicate) {
                        console.warn(`Item ${item.filename} already exists in gallery.`);
                        return;
                    }

                    // Clone gallery item from template
                    const cloneItemGallery = galleryItem.cloneNode(true);
                    cloneItemGallery.classList.remove('hidden');

                    const deleteGalItem = cloneItemGallery.querySelector('button[data-delete-item="gallery"]');
                    if (deleteGalItem) {

                        deleteGalItem.dataset.itemDeleteGal = item.id || '';
                        deleteGalItem.addEventListener('click', () => {
                            console.log(`Delete button clicked for item: ${item.id}`);
                            const galleryCheckbox = cloneItemGallery.querySelector('input[type="checkbox"][data-check-gallery]');

                            if (galleryCheckbox) {
                                galleryCheckbox.checked = true;

                                const selectAllCheckbox = document.querySelector('[select-all-gal]');
                                if (selectAllCheckbox) {
                                    selectAllCheckbox.checked = true;
                                }
                            } else {
                                console.error('Checkbox for this gallery item not found.');
                            }
                        });
                    }

                    // Update clone data
                    const imgElement = cloneItemGallery.querySelector('[data-image-gallery]');
                    if (imgElement) {
                        imgElement.src = genUrlPath(item.filename, 'slide');
                        imgElement.alt = `Image of ${item.filename}`;
                    }

                    // จุดแสดง Text Caption
                    const inputTextCaption = cloneItemGallery.querySelector('[data-item-caption]');
                    if (inputTextCaption) {
                        inputTextCaption.value = item.text || '';
                    }
                    // Append clone to galleryStorage
                    galleryStorage.appendChild(cloneItemGallery);
                }

                // อัปเดตลำดับ
                updateSequentValues();

                // Sortable-gallery-items
                if (galleryItem) {
                    initSortableGallery(galleryStorage);
                }
                initSortableGallery(galleryContainer);
            }
        }

        // Gen Gallery
        function genGallery(info) {

            //UPDATE LAST SEQUENT
            const lastSequent = document.querySelector('[name="last-sequent"]')
            lastSequent.value = info.length;

            info.forEach(item => {
                displayItemData(item, 'gallery');
            });
        }

        // loop Values ของ เลข Sequent
        function sequentValues(inputs) {
            inputs.forEach((input, index) => {
                input.value = index + 1;
            });
        }

        // Sequent Loop ทั้ง Item เดิม และ Add
        function updateSequentValues() {
            const inputLastSequent = galleryStorage.querySelectorAll('input[data-sequent]');
            const inputAddGalSequent = galleryContainer.querySelectorAll('input[data-add-sequent]');

            if (galleryItem) {
                // Sequent lopp for old gallery
                sequentValues(inputLastSequent);

            }
            // Sequent lopp for add gallery
            sequentValues(inputAddGalSequent);
        }

        // Delete Main Fetch API
        async function deleteOldFile(currentFile, setOldFile) {
            const formData = new FormData();
            formData.append('webName', webName);
            formData.append('currentFile', currentFile);
            formData.append('oldFile', setOldFile);
            formData.append('category', 'slide');
            formData.append('action', 'remove');
            const response = await fetch('../api/remove_file_main.json', {
                method: 'POST',
                credentials: 'include',
                body: formData,
            });
            const result = await response.json();
            if (!result.result) {
                throw new Error('Delete failed: ' + result.message);
            }
        }

        // ฟังก์ชั่น check for Delete ของ Gallery
        function manageCheckedDelete(datatype, checkAllElement) {
            document.addEventListener("change", function(event) {
                if (!checkAllElement) return;

                if (
                    event.target.matches(`input[type="checkbox"][${datatype}]`) ||
                    event.target === checkAllElement
                ) {
                    const checkboxes = document.querySelectorAll(
                        `input[type="checkbox"][${datatype}]`
                    );

                    if (checkboxes.length === 0) return;

                    if (event.target === checkAllElement) {
                        checkboxes.forEach(
                            (checkbox) => (checkbox.checked = checkAllElement.checked)
                        );
                    } else {
                        const allChecked = Array.from(checkboxes).every(
                            (checkbox) => checkbox.checked
                        );

                        const checkedCount = Array.from(checkboxes).filter(checkbox => checkbox.checked).length;
                        checkAllElement.checked = (checkedCount === checkboxes.length - 1) ? true : false;
                    }

                }
            });

        }

        // reset All Check
        function resetChecked(checkAllElement = null) {
            if (!checkAllElement) {
                checkAllElement = document.querySelector('[select-all-gal]');
            }

            if (checkAllElement) {
                checkAllElement.checked = false;
            }

            const galleryCheckboxes = galleryStorage.querySelectorAll('input[type="checkbox"][data-check-gallery]');
            galleryCheckboxes.forEach(checkbox => {
                checkbox.checked = false;
            });

        }

        // แสดง Default Images ใน Gallery Storage
        async function displayDefaultImages(galleryStorage, galleryItem, placeholderImage) {
            for (let i = 0; i < 3; i++) {
                const clone = galleryItem.cloneNode(true);
                clone.classList.remove('hidden');

                const imgElement = clone.querySelector('[data-pre-image="gallery"]');
                if (imgElement) {
                    imgElement.src = placeholderImage;
                    imgElement.alt = 'Default Image';
                }

                galleryStorage.appendChild(clone);
            }
        }

        // Preview Image
        async function handleFilePreview(file, mainContainer, galleryImagePreview) {

            if (!file) {
                console.error('Invalid file: File is null or undefined');
                return;
            }

            let imgGalleryPreview = '';

            try {
                if (file.name.toLowerCase().endsWith('.heic')) {
                    const convertedFile = await convertHeicToJpg(file);
                    if (convertedFile) {
                        imgGalleryPreview = URL.createObjectURL(convertedFile);
                    }
                } else {
                    imgGalleryPreview = URL.createObjectURL(file);
                }
                // แสดงผลใน Main Preview
                if (mainContainer) {
                    mainContainer.src = imgGalleryPreview;
                }
                // แสดงผลใน Gallery Preview Input
                if (galleryImagePreview) {
                    galleryImagePreview.src = imgGalleryPreview;
                }

            } catch (error) {
                console.error('Error in handleFilePreview:', error);
            }
        }

        // ฟังก์ชันเพื่อลบหรือซ่อนภาพ default
        function removeDefaultImages(galleryStorage) {
            const defaultImages = galleryStorage.querySelectorAll('[data-image-gallery-default="demo"]');

            defaultImages.forEach((img) => {
                const parentElement = img.closest('[data-image="item-gallery"]');
                if (parentElement) parentElement.remove();
            });

        }

        // clone Element สำหรับ Gallery
        function cloneChildElement(parentContainer, galleryAdd) {
            return new Promise(async (resolve, reject) => {
                if (!galleryAdd) {
                    reject("Demo item not found");
                    return;
                }
                if (!parentContainer) {
                    reject("ParentContainer element not found");
                    return;
                }

                const clonedItem = galleryAdd.cloneNode(true);
                clonedItem.classList.remove("hidden");

                parentContainer.appendChild(clonedItem);
                resolve(clonedItem);
            });
        }

        // นับตัวอักษรใน Input
        function updateCharacterCount() {
            const characterCount = linkInput.value.length;
            textLengthDisplay.textContent = `${characterCount}/${maxLength} ตัวอักษร`;
        }

        // ตรวจสอบจำนวนไฟล์ว่ามีมากกว่า 20 ไฟล์หรือไม่
        function maxFileValid(files) {

            if (files.length > maxFiles) {
                return false;
            }
            return true;
        }

        // ตรวจขนาดของไฟล์
        function maxSizeValid(files) {
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

            return fileInfo;
        }

        // ตรวจสอบนามสกุลไฟล์ และ อนุญาตไฟล์ตั้งแต่การ input
        function setInputAcceptType(elementId, allowedTypes) {
            const acceptTypes = allowedTypes.map(type => `.${type}`).join(', ');

            const inputElement = document.getElementById(elementId);

            if (inputElement) {
                inputElement.setAttribute('accept', acceptTypes);
            } else {
                console.error(`Element with id "${elementId}" not found`);
            }
        }

        // ฟังก์ชั่น check ประเภทของไฟล์
        function isValidFileType(file, type) {
            const fileExtension = file.name.split('.').pop().toLowerCase();
            let category = null;

            // วนลูปเช็คทุกประเภทใน allowedExtensions
            for (const type in allowedExtensions) {
                const targetType = allowedExtensions[type];

                if (targetType.includes(fileExtension)) {
                    category = type;
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
                const convertedFile = await heic2any({
                    blob: file,
                    toType: 'image/jpeg',
                });
                return convertedFile;
            } catch (error) {
                console.error('การแปลงไฟล์ .heic เป็น .jpg ล้มเหลว:', error);
                return null;
            }
        }

        // ฟังก์ชันสำหรับตรวจสอบจำนวนไฟล์
        async function checkMaxFileValid(inputFile, sizeElement, type) {
            let resultMaxFile = null;

            try {
                resultMaxFile = await maxFileValid(inputFile);
                if (!resultMaxFile) {
                    sizeElement.innerHTML = `คุณใส่ไฟล์เกิน ${maxFiles} ไฟล์`;
                    sizeElement.classList.add('text-rose-700');
                    sizeElement.classList.remove('hidden');
                    return false;
                } else {
                    sizeElement.classList.add('hidden');
                }
                return true;
            } catch (error) {
                console.error('เกิดข้อผิดพลาดในการตรวจสอบ maxFile:', error);
                return false;
            }
        }

        // ฟังก์ชันสำหรับตรวจสอบขนาดไฟล์
        async function checkMaxSizeValid(inputFile, sizeFile, type) {
            let resultMaxSize = null;
            try {
                resultMaxSize = await maxSizeValid(inputFile);
                if (!resultMaxSize.isvalid) {
                    sizeFile.classList.remove('hidden');
                    sizeFile.innerHTML = `ขนาดไฟล์ของคุณใหญ่กว่า ${maxSizeMB} MB`;
                    sizeFile.classList.add('text-rose-700');
                    fileMainInput.value = '';
                    return false;
                } else {
                    sizeFile.classList.remove('text-rose-700');
                    sizeFile.innerHTML = `ขนาดไฟล์ ${resultMaxSize.totalsize} MB`;
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

            // หากไฟล์ไม่ผ่านการตรวจสอบ
            if (!isValid) {
                return false;
            }

            return true;
        }

        // Gen Path URL
        function genUrlPath(filename, category) {
            const hostname = `../dnm_file`;
            const UrlPath = `${hostname}/${category}/${filename}`;
            return UrlPath;
        }
    });
</script>