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
                    <!-- <div>
                        <button open-gal-modal class="bg-slate-300 hover:bg-slate-600 rounded-xl text-black hover:text-white px-3 py-2">Add Gallery</button>
                    </div> -->
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
                    <input type="text">
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
                        <!-- <button type="button" class="flex items-center bg-sky-400 hover:bg-sky-500 rounded-xl text-white py-1 px-4 gap-1">
                            <svg class="size-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path fill-rule="evenodd" d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
                            </svg>Add Image
                        </button> -->
                        <button type="button" data-button-submit="gallery" class="w-10 h-10 bg-red-700 ring-4 ring-red-200 rounded-full text-white hover:bg-red-600">OK</button>
                    </div>
                </div>
            </form>

            <!-- item from gallery -->
            <div data-image="item-gallery" class="hidden min-w-[220px] sm:w-1/3 md:w-1/4 lg:w-1/6">
                <div class="flex flex-col bg-sky-200 min-w-fit h-full justify-start items-center justify-self-center rounded-2xl gap-y-2 m-2 p-2">
                    <div class="flex justify-between items-center w-full px-3">
                        <input type="checkbox" data-check-gallery>
                        <label>ลำดับ</label>
                    </div>
                    <div class="flex justify-center items-center relative w-[160px] h-[120px]">
                        <img data-image-gallery src="../dnm_file/slide/default-image.jpg" class="absolute image-cover max-w-[160px] max-h-[120px] rounded-xl z-10">
                    </div>
                    <div class="flex flex-col gap-y-2">
                        <input type="text" data-item-caption maxlength="50" class="w-full border border-gray-400 rounded-lg p-1">
                        <div class="flex justify-between items-center">
                            <p>0/50 ตัวอักษร</p>
                            <button type="button" data-delete-item="gallery" class="hidden flex items-center gap-x-3">
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

            <div class="flex justify-end">
                <button data-submit-gallery class="bg-sky-500 text-white px-4 py-2 mr-2 rounded">ตกลง</button>
                <button gallery-cancle class="bg-slate-100 text-black px-4 py-2 mr-2 rounded">ยกเลิก</button>
            </div>
        </div>
    </div>

    <!-- DEMO ADD GALLERY  -->
    <div data-image="add-gallery" class="hidden flex flex-col jus bg-rose-200 min-w-fit h-full justify-start items-center justify-self-center rounded-2xl gap-y-2 m-2 p-2">
        <input type="text" name="sequent">
        <div class="flex justify-center items-center relative w-[160px] h-[120px]">
            <img data-pre-image="gallery" src="../dnm_file/slide/default-image.jpg" alt="Image Preview" class="max-w-[160px] max-h-[120px] rounded-xl bg-cover" />
        </div>
        <div class="flex flex-col w-full gap-3">
            <input data-link-gallery type="text" placeholder="รายละเอียดรูป" class="rounded-lg p-2">
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
        const galleryStorage = document.querySelector('[data-storage-gallery]');
        const galleryItem = document.querySelector('[data-image="item-gallery"]');

        const selectAllGalleryCheckbox = formGallery.querySelector('[select-all-gal]');
        const buttonDeleteGallery = document.querySelector('[data-delete-item="gallery"]');

        const toggleModal = (isOpen) => {
            modalAddGal.classList.toggle('hidden', !isOpen);
            modalAddGal.classList.toggle('flex', isOpen);
        };

        async function test1() {            
            const resultUploadFile = await fileupload('test.jpg', '/../api/upload_file_gallery.json');
            if (resultUploadFile.result) {
                console.log('-----', resultUploadFile.data);
            }
        }
        test1();



        async function fileupload(file, enpointApi) {
            return new Promise((resolve, reject) => {
                const formData = new FormData();
                formData.append('id', currentId);
                formData.append('category', 'slide');
                formData.append('action', 'uploadFile');
                formData.append('webName', webName);
                formData.append('currentFile', currentFile);
                formData.append('file', file);

                let info = {};

                fetch(enpointApi, {
                        method: 'POST',
                        credentials: 'include',
                        body: formData,
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    }).then(result => {
                        console.log(result.data);
                        info = result;
                        
                    })
                    .catch(error => {
                        console.error('error:', error);
                        info = {result: false, message: 'error'}
                    });

                    resolve(info);

            })
        }
    });
</script>

</html>