<div x-data="{ invisible : false }" x-show="invisible" :class="{ 'hidden': !invisible, 'block': invisible }" class="w-full md:w-[60%] flex justify-between items-start bg-primary bg-opacity-20 py-3 px-4 border border-primary border-opacity-30 rounded-lg">
    <div class="">
        <div class="flex items-center gap-2">
            <img src="/svgs/alert/info.svg" class="w-6 md:w-7 h-6 md:h-7">
            <h1 class="text-white text-xs md:text-sm font-medium">Menunggu Dievaluasi</h1>
        </div>
        <div class="ml-9 space-y-2">
            <h1 class="text-white text-xs md:text-sm font-normal">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur, quia.</h1>
        </div>
    </div>
    <img @click="invisible = false" src="/svgs/close.svg" class="w-5 h-5 cursor-pointer">
</div>

<div x-data="{ invisible : false }" x-show="invisible" :class="{ 'hidden': !invisible, 'block': invisible }" class="w-full md:w-[60%] flex justify-between items-start bg-green-500 bg-opacity-20 py-3 px-4 border border-green-500 border-opacity-30 rounded-lg">
    <div class="blue">
        <div class="flex items-center gap-2">
            <img src="/svgs/alert/check.svg" class="w-6 md:w-7 h-6 md:h-7">
            <h1 class="text-white text-xs md:text-sm font-medium">Menunggu Dievaluasi</h1>
        </div>
        <div class="ml-9 space-y-2">
            <h1 class="text-white text-xs md:text-sm font-normal">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur, quia.</h1>
        </div>
    </div>
    <img @click="invisible = false" src="/svgs/close.svg" class="w-5 h-5 cursor-pointer">
</div>

<div x-data="{ invisible : false }" x-show="invisible" :class="{ 'hidden': !invisible, 'block': invisible }" class="w-full md:w-[60%] flex justify-between items-start bg-orange-500 bg-opacity-20 py-3 px-4 border border-orabg-orange-500 border-opacity-30 rounded-lg">
    <div class="">
        <div class="flex items-center gap-2">
            <img src="/svgs/alert/warning.svg" class="w-6 md:w-7 h-6 md:h-7">
            <h1 class="text-white text-xs md:text-sm font-medium">Menunggu Dievaluasi</h1>
        </div>
        <div class="ml-9 space-y-2">
            <h1 class="text-white text-xs md:text-sm font-normal">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur, quia.</h1>
        </div>
    </div>
    <img @click="invisible = false" src="/svgs/close.svg" class="w-5 h-5 cursor-pointer">
</div>

<div x-data="{ invisible : false }" x-show="invisible" :class="{ 'hidden': !invisible, 'block': invisible }" class="w-full md:w-[60%] flex justify-between items-start bg-red-500 bg-opacity-20 py-3 px-4 border border-red-500 border-opacity-30 rounded-lg">
    <div class="">
        <div class="flex items-center gap-2">
            <img src="/svgs/alert/danger.svg" class="w-6 md:w-7 h-6 md:h-7">
            <h1 class="text-white text-xs md:text-sm font-medium">Menunggu Dievaluasi</h1>
        </div>
        <div class="ml-9 space-y-2">
            <h1 class="text-white text-xs md:text-sm font-normal">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur, quia.</h1>
        </div>
    </div>
    <img @click="invisible = false" src="/svgs/close.svg" class="w-5 h-5 cursor-pointer">
</div>

<div x-data="{ isOpen : false , modal : false }" class="grid gap-4">
    <div x-data="{ isOpenn: true }">
        <button @click="isOpenn = !isOpenn" :class="isOpenn ? 'hidden' : 'block'" class="flex items-center gap-2 bg-white py-2 px-4 rounded-md shadow-md shadow-black/20 mb-3">
            <img src="/svgs/library.svg" class="w-4 md:w-5">
            <h1 class="text-black text-xs md:text-sm font-normal">Buka Rancangan</h1>
        </button>
        <div x-show="isOpenn" :class="{ 'hidden': !isOpenn, 'block': isOpenn }">
            <div class="flex flex-wrap items-center gap-3">
                <div class="flex items-center gap-2 bg-white pl-3 shadow-md shadow-black/20 rounded-md">
                    <input type="number" inputmode="numeric" value="2025" class="w-20 bg-transparent text-gray-700 text-xs md:text-sm font-normal border-none outline-none focus:ring-0">
                </div>
                <button class="flex items-center gap-2 bg-white py-2 px-4 rounded-md shadow-md shadow-black/20">
                    <img src="/svgs/add1.svg" class="w-4 md:w-5">
                    <h1 class="text-black text-xs md:text-sm font-normal">Buat Rancangan</h1>
                </button>
                <button @click="modal = !modal" class="flex items-center gap-2 bg-white py-2 px-4 rounded-md shadow-md shadow-black/20">
                    <img src="/svgs/file1.svg" class="w-4 md:w-5">
                    <h1 class="text-black text-xs md:text-sm font-normal">Upload Lampiran</h1>
                </button>
                <button @click="isOpen = !isOpen" class="bg-white py-2 px-4 rounded-md shadow-md shadow-black/20">
                    <img src="/svgs/folder1.svg" class="w-4 md:w-5">
                </button>
            </div>

            <div x-show="modal" x-transition.duration.300ms.opacity.50 :class="{ 'visible': modal, 'invisible': !modal }" class="invisible fixed inset-0 z-50 bg-[#0000006E] flex items-center justify-center h-screen">
                <div class="w-[80%] sm:w-[70%] md:w-[60%] lg:w-[50%] bg-white rounded-lg md:rounded-xl">
                    <div class="flex justify-between items-center border-b border-[#D1D1D1] py-2.5 px-3">
                        <div class="flex items-center gap-2">
                            <h1 class="text-sm md:text-base text-black font-semibold">Upload Lampiran</h1>
                            <input type="number" inputmode="numeric" value="2025" class="w-20 py-1 pl-3 rounded-md text-black text-xs md:text-sm font-bold outline-none focus:ring-0">
                        </div>
                        <button type="button" @click="modal = false" type="button" class="bg-[#E8E8E8] p-2 rounded-full">
                            <svg class="w-3 fill-[#8B8B8B]" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.0204 1.68705C11.2157 1.49179 11.2157 1.1752 11.0204 0.979943C10.8251 0.784681 10.5086 0.784681 10.3133 0.979943L6.00017 5.29307L1.68705 0.979945C1.49179 0.784683 1.1752 0.784683 0.979943 0.979945C0.784681 1.17521 0.784681 1.49179 0.979943 1.68705L5.29306 6.00017L0.979961 10.3133C0.784699 10.5085 0.784699 10.8251 0.979961 11.0204C1.17522 11.2156 1.49181 11.2156 1.68707 11.0204L6.00017 6.70728L10.3133 11.0204C10.5085 11.2156 10.8251 11.2156 11.0204 11.0204C11.2156 10.8251 11.2156 10.5085 11.0204 10.3133L6.70728 6.00017L11.0204 1.68705Z"/>
                            </svg>
                        </button>
                    </div>
                    <div x-data="fileUploader()" class="pt-2.5 pb-3.5 px-5 space-y-4">
                        <div class="space-y-2">
                            <label for="upload">
                                <div class="border-[1.5px] border-dashed border-[#384EB74D] p-5 mx-5 space-y-2 rounded md:rounded-md cursor-pointer">
                                    <img class="w-16 md:w-20 h-16 md:h-20 mx-auto" src="/svgs/folder1.svg">
                                    <div class="text-center space-y-1">
                                        <p class="text-[10px] md:text-xs text-[#676767] font-normal">Format harus .pdf</p>
                                    </div>
                                </div>
                                <input @change="handleFileUpload($event)" class="hidden" type="file" id="upload" multiple>
                            </label>
                    
                            <template x-if="files.length > 0">
                                <div class="space-y-2">
                                    <h1 class="text-xs md:text-sm text-[#676767] font-semibold">Mengunggah <span x-text="files.length" class="text-xs md:text-sm text-[#676767] font-semibold"></span> file</h1>
                    
                                    <template x-for="(file, index) in files" :key="index">
                                        <div x-show="!file.isValid" class="space-y-1">
                                            <div class="flex justify-between items-center gap-2 md:gap-3 border-[0.5px] border-[#E41D1D] py-1.5 px-3 rounded">
                                                <div class="break-words overflow-hidden">
                                                    <h1 class="line-clamp-1 text-[10px] md:text-xs text-black font-normal" x-text="file.name"></h1>
                                                </div>
                                                <div class="cursor-pointer" @click="removeFile(index)">
                                                    <svg class="w-3 md:w-4" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.5 16.6182C6.37833 16.6182 4.34331 15.7753 2.84315 14.275C1.3429 12.7746 0.5 10.7398 0.5 8.61817C0.5 6.4965 1.3429 4.46148 2.84315 2.96132C4.34353 1.46107 6.37833 0.618164 8.5 0.618164C10.6217 0.618164 12.6567 1.46107 14.1568 2.96132C15.6571 4.4617 16.5 6.4965 16.5 8.61817C16.4974 10.7391 15.6538 12.7727 14.154 14.2722C12.6543 15.772 10.6207 16.6156 8.5 16.6182ZM11.5851 6.56058V6.56046C11.7254 6.42495 11.8053 6.2388 11.8071 6.04374C11.8088 5.84869 11.7321 5.66108 11.5941 5.52313C11.4562 5.38517 11.2685 5.30848 11.0735 5.31018C10.8784 5.31188 10.6923 5.39188 10.5568 5.53214L8.5 7.58966L6.44323 5.53214C6.25853 5.35377 5.99346 5.28595 5.7457 5.35389C5.49805 5.42183 5.3046 5.61529 5.23665 5.86294C5.16871 6.11071 5.23653 6.37576 5.4149 6.56047L7.47167 8.61799L5.4149 10.6755C5.27464 10.811 5.19465 10.9972 5.19294 11.1922C5.19124 11.3873 5.26794 11.5749 5.40589 11.7128C5.54383 11.8508 5.73145 11.9275 5.9265 11.9258C6.12155 11.9241 6.3077 11.8441 6.44322 11.7038L8.49999 9.64631L10.5568 11.7038C10.6923 11.8441 10.8784 11.9241 11.0735 11.9258C11.2685 11.9275 11.4561 11.8508 11.5941 11.7128C11.7321 11.5749 11.8088 11.3873 11.807 11.1922C11.8053 10.9972 11.7253 10.811 11.5851 10.6755L9.52832 8.61799L11.5851 6.56058Z" fill="#E41D1D"/>
                                                    </svg>                                                                
                                                </div>
                                            </div>
                                            <h1 class="text-[8px] md:text-[10px] text-[#E41D1D] font-normal">File tidak didukung. Tolong upload format .pdf</h1>
                                        </div>
                                    </template>
                    
                                    <template x-if="files.some(file => file.isValid)">
                                        <h1 class="text-xs md:text-sm text-[#676767] font-semibold">Berhasil diunggah</h1>
                                    </template>
                                    <template x-for="(file, index) in files" :key="index">
                                        <div x-show="file.isValid" class="space-y-1">
                                            <div class="flex justify-between items-center gap-2 md:gap-3 border-[0.5px] border-[#11AF22] py-0.5 px-3 rounded">
                                                <div class="break-words overflow-hidden">
                                                    <h1 class="line-clamp-1 text-[10px] md:text-xs text-black font-normal" x-text="file.name + '.pdf'"></h1>
                                                </div>
                                                <div class="flex items-center gap-2 md:gap-3">
                                                    <div x-data="{ modal : false }" class="mb-1">
                                                        <button @click="modal = !modal" class="w-max bg-[#615EFC] py-0.5 px-2 rounded cursor-pointer">
                                                            <h1 class="text-[8px] md:text-[10px] text-white font-normal">Ganti Nama</h1>
                                                        </button>
                                                        <div x-show="modal" x-transition.duration.300ms.opacity.50 :class="{ 'visible': modal, 'invisible': !modal }" class="invisible fixed inset-0 z-50 bg-[#0000006E] flex items-center justify-center h-screen">
                                                            <div class="w-[60%] sm:w-[50%] md:w-[40%] lg:w-[40%] bg-white rounded-lg md:rounded-xl">
                                                                <div class="flex justify-between items-center border-b border-[#D1D1D1] py-2.5 px-3">
                                                                    <h1 class="text-sm md:text-base text-black font-semibold">Ganti Nama File</h1>
                                                                    <button type="button" @click="modal = false" type="button" class="bg-[#E8E8E8] p-2 rounded-full">
                                                                        <svg class="w-3 fill-[#8B8B8B]" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M11.0204 1.68705C11.2157 1.49179 11.2157 1.1752 11.0204 0.979943C10.8251 0.784681 10.5086 0.784681 10.3133 0.979943L6.00017 5.29307L1.68705 0.979945C1.49179 0.784683 1.1752 0.784683 0.979943 0.979945C0.784681 1.17521 0.784681 1.49179 0.979943 1.68705L5.29306 6.00017L0.979961 10.3133C0.784699 10.5085 0.784699 10.8251 0.979961 11.0204C1.17522 11.2156 1.49181 11.2156 1.68707 11.0204L6.00017 6.70728L10.3133 11.0204C10.5085 11.2156 10.8251 11.2156 11.0204 11.0204C11.2156 10.8251 11.2156 10.5085 11.0204 10.3133L6.70728 6.00017L11.0204 1.68705Z"/>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <div class="pt-2.5 pb-3.5 px-5 space-y-8">
                                                                    <label class="grid gap-1">
                                                                        <h1 class="mx-1 text-xs md:text-sm text-black font-medium capitalize">Nama File</h1>
                                                                        <div class="flex items-center">
                                                                            <input x-ref="inputField" type="text" :id="'file-' + index" :value="file.name" required autocomplete="off" class="peer transition-colors duration-500 w-full text-[10px] md:text-xs text-black focus:text-black font-normal placeholder:text-[10px] md:placeholder:text-xs focus:placeholder:text-black placeholder:font-normal bg-transparent px-2.5 md:px-5 py-0.5 md:py-2 border rounded-l-md border-[#ABABAB] focus:border-black focus:outline-none focus:ring-0"/>
                                                                            <div class="bg-gray-300 px-5 py-2 border border-gray-300 rounded-r-md">
                                                                                <h1 class="text-[8px] md:text-xs text-gray-600">.pdf</h1>
                                                                            </div>
                                                                        </div>
                                                                    </label>
                                                                    <div class="flex justify-center items-center gap-2 md:gap-3">
                                                                        <button type="button" @click="modal = false; $refs.inputField.value = file.name" class="bg-[#FF4E4E] py-1.5 px-4 md:px-5 rounded">
                                                                            <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Batal</h1>
                                                                        </button>
                                                                        <button @click="() => { renameFile(index); modal = false; }"  class="bg-[#615EFC] py-1.5 px-4 md:px-5 rounded">
                                                                            <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Simpan</h1>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="bg-[#FFF3F3] p-1 rounded-full cursor-pointer" @click="removeFile(index)">
                                                        <svg class="w-2 md:w-2.5" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.97692 1.76334H6.97736C6.96399 1.7587 6.95009 1.75569 6.936 1.75431H5.87174V0.871641C5.8718 0.805308 5.8458 0.741624 5.79945 0.694248C5.75304 0.646876 5.68995 0.619548 5.62369 0.618164H3.10672C3.03948 0.618164 2.97501 0.64483 2.92752 0.692382C2.87997 0.739934 2.85324 0.804401 2.85324 0.871639V1.75431H1.79439C1.7803 1.75569 1.7664 1.7587 1.75303 1.76333H0.753471C0.662881 1.76333 0.579206 1.81161 0.533949 1.89004C0.488684 1.96847 0.488684 2.06508 0.533949 2.14351C0.579214 2.22194 0.662882 2.27028 0.753471 2.27028H1.56783L2.22585 8.39166C2.2329 8.45396 2.26263 8.51145 2.3094 8.55328C2.35611 8.59505 2.41661 8.6181 2.47932 8.61816H6.25462C6.31668 8.61726 6.37627 8.59373 6.42233 8.55207C6.46831 8.51036 6.49751 8.45336 6.50449 8.39166L7.16245 2.27921H7.97687C8.06746 2.27921 8.15114 2.23094 8.19639 2.15251C8.24165 2.07407 8.24166 1.97741 8.19639 1.89904C8.15113 1.82061 8.06746 1.77227 7.97687 1.77227L7.97692 1.76334ZM3.36566 1.12511H5.36472V1.75431H3.36566V1.12511ZM6.02455 8.10757H2.70582L2.07663 2.27927H6.65368L6.02455 8.10757Z" fill="#E41D1D"/>
                                                            <path d="M4.36529 7.51435C4.43252 7.51435 4.49699 7.48763 4.54454 7.44014C4.59209 7.39258 4.61876 7.32812 4.61876 7.26088V3.12607C4.61876 3.03548 4.57049 2.95181 4.49205 2.90655C4.41362 2.86123 4.31696 2.86123 4.23852 2.90655C4.16009 2.95182 4.11182 3.03549 4.11182 3.12607V7.26088C4.11182 7.32811 4.13848 7.39258 4.18603 7.44014C4.23359 7.48763 4.29805 7.51435 4.36529 7.51435H4.36529Z" fill="#E41D1D"/>
                                                            <path d="M3.3674 7.5126H3.37817C3.44511 7.50983 3.50819 7.48064 3.5537 7.43146C3.59915 7.38229 3.62334 7.3171 3.62088 7.25016L3.46805 3.11535L3.46811 3.11529C3.46672 3.04758 3.43777 2.98329 3.38787 2.93742C3.33791 2.89161 3.27146 2.8682 3.2038 2.87259C3.13687 2.87542 3.07379 2.90462 3.02834 2.95379C2.98283 3.00297 2.95869 3.06816 2.9611 3.1351L3.11393 7.26991C3.11712 7.33509 3.14517 7.39661 3.19236 7.44175C3.23949 7.48684 3.30215 7.51224 3.3674 7.5126L3.3674 7.5126Z" fill="#E41D1D"/>
                                                            <path d="M5.35372 7.51249H5.36269C5.4295 7.514 5.49421 7.4892 5.54296 7.44351C5.59166 7.39776 5.62055 7.33474 5.62338 7.26798L5.77621 3.13318H5.77615C5.77862 3.06624 5.75442 3.00105 5.70898 2.95187C5.66347 2.90269 5.60039 2.8735 5.53345 2.87067C5.46501 2.86363 5.39675 2.88572 5.34541 2.93159C5.29406 2.97739 5.26445 3.04276 5.26378 3.11163L5.10915 7.24643H5.10921C5.10578 7.31427 5.12974 7.38066 5.17572 7.43068C5.22165 7.4807 5.28582 7.5102 5.35372 7.51249L5.35372 7.51249Z" fill="#E41D1D"/>
                                                        </svg>                                                                    
                                                    </div>
                                                </div>
                                            </div>
                                            <h1 class="text-[8px] md:text-[10px] text-[#E41D1D] font-normal" x-show="file.renameRequired">Ganti nama file untuk melanjutkan upload file</h1>
                                        </div>
                                    </template>
                                </div>
                            </template>
                        </div>
                        <div class="flex justify-center items-center gap-2 md:gap-3">
                            <button type="button" @click="modal = false" class="bg-[#FF4E4E] py-1.5 px-4 md:px-5 rounded">
                                <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Batal</h1>
                            </button>
                            <button x-data="{ status() { return this.files.length === 0 ? false : this.files.every(file => file.isValid); } }"
                                x-init="$watch('files', () => { $el.disabled = !status(); })"
                                :disabled="!status()"
                                :class="{ 'bg-[#615EFC] cursor-pointer': status(), 'bg-gray-500 cursor-not-allowed': !status() }"
                                class="py-1.5 px-4 md:px-5 rounded">
                                <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Upload</h1>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section x-show="isOpen" x-transition.duration.300ms.opacity.50 :class="{ 'hidden': !isOpen, 'block': isOpen }" class="scrollbar-x bg-transparent rounded md:rounded-md shadow-md shadow-black/5 pt-3">
        <table class="w-max lg:w-full bg-white text-center table-auto">
            <tr class="text-[10px] md:text-xs text-black capitalize">
                <th class="w-[5%] bg-white font-normal py-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">No</th>
                <th class="w-[20%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Tahun</th>
                <th class="w-[60%] bg-white text-start font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Nama</th>
                <th class="w-[20%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Aksi</th>
            </tr>
            <tr class="odd:bg-white even:bg-[#E8EDF2] text-xs text-black/70 capitalize overflow-visible">
                <td class="font-normal my-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">1</td>
                <td class="py-3.5 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                    <h1 class="line-clamp-1 font-normal">2024</h1>
                </td>
                <td class="py-3.5 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                    <h1 class="line-clamp-1 text-start font-normal">Kebaikan Alam</h1>
                </td>
                <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                    <div class="flex justify-center items-center gap-1.5 md:gap-2">
                        <button class="flex items-center gap-2 w-fit bg-primary py-1.5 px-2 rounded-md mx-auto">
                            <svg class="w-3.5 stroke-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 4.45962C9.91153 4.16968 10.9104 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C3.75612 8.07914 4.32973 7.43025 5 6.82137"
                                    stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round" />
                                <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                    stroke="#FFFFFF" stroke-width="1.5" />
                            </svg>
                            <h1 class="text-[#E8EDF2] font-normal">Lihat</h1>
                        </button>
                        <button class="flex items-center gap-2 w-fit bg-red-500 py-1.5 px-2 rounded-md mx-auto">
                            <svg class="w-3.5 stroke-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 2.5V5C13 7.35702 13 8.53553 13.7322 9.26777C14.4645 10 15.643 10 18 10H22"
                                    stroke="#FFFFFF" stroke-width="1.5"></path>
                                <path d="M6 18L9 15M9 18L6 15" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round"></path>
                                <path
                                    d="M2.75 10C2.75 9.58579 2.41421 9.25 2 9.25C1.58579 9.25 1.25 9.58579 1.25 10H2.75ZM21.25 14C21.25 14.4142 21.5858 14.75 22 14.75C22.4142 14.75 22.75 14.4142 22.75 14H21.25ZM15.3929 4.05365L14.8912 4.61112L15.3929 4.05365ZM19.3517 7.61654L18.85 8.17402L19.3517 7.61654ZM21.654 10.1541L20.9689 10.4592V10.4592L21.654 10.1541ZM3.17157 20.8284L3.7019 20.2981H3.7019L3.17157 20.8284ZM20.8284 20.8284L20.2981 20.2981L20.2981 20.2981L20.8284 20.8284ZM1.35509 5.92658C1.31455 6.33881 1.61585 6.70585 2.02807 6.7464C2.4403 6.78695 2.80734 6.48564 2.84789 6.07342L1.35509 5.92658ZM22.6449 18.0734C22.6855 17.6612 22.3841 17.2941 21.9719 17.2536C21.5597 17.2131 21.1927 17.5144 21.1521 17.9266L22.6449 18.0734ZM14 21.25H10V22.75H14V21.25ZM2.75 14V10H1.25V14H2.75ZM21.25 13.5629V14H22.75V13.5629H21.25ZM14.8912 4.61112L18.85 8.17402L19.8534 7.05907L15.8947 3.49618L14.8912 4.61112ZM22.75 13.5629C22.75 11.8745 22.7651 10.8055 22.3391 9.84897L20.9689 10.4592C21.2349 11.0565 21.25 11.742 21.25 13.5629H22.75ZM18.85 8.17402C20.2034 9.3921 20.7029 9.86199 20.9689 10.4592L22.3391 9.84897C21.9131 8.89241 21.1084 8.18853 19.8534 7.05907L18.85 8.17402ZM10.0298 2.75C11.6116 2.75 12.2085 2.76158 12.7405 2.96573L13.2779 1.5653C12.4261 1.23842 11.498 1.25 10.0298 1.25V2.75ZM15.8947 3.49618C14.8087 2.51878 14.1297 1.89214 13.2779 1.5653L12.7405 2.96573C13.2727 3.16993 13.7215 3.55836 14.8912 4.61112L15.8947 3.49618ZM10 21.25C8.09318 21.25 6.73851 21.2484 5.71085 21.1102C4.70476 20.975 4.12511 20.7213 3.7019 20.2981L2.64124 21.3588C3.38961 22.1071 4.33855 22.4392 5.51098 22.5969C6.66182 22.7516 8.13558 22.75 10 22.75V21.25ZM1.25 14C1.25 15.8644 1.24841 17.3382 1.40313 18.489C1.56076 19.6614 1.89288 20.6104 2.64124 21.3588L3.7019 20.2981C3.27869 19.8749 3.02502 19.2952 2.88976 18.2892C2.75159 17.2615 2.75 15.9068 2.75 14H1.25ZM14 22.75C15.8644 22.75 17.3382 22.7516 18.489 22.5969C19.6614 22.4392 20.6104 22.1071 21.3588 21.3588L20.2981 20.2981C19.8749 20.7213 19.2952 20.975 18.2892 21.1102C17.2615 21.2484 15.9068 21.25 14 21.25V22.75ZM10.0298 1.25C8.15538 1.25 6.67442 1.24842 5.51887 1.40307C4.34232 1.56054 3.39019 1.8923 2.64124 2.64124L3.7019 3.7019C4.12453 3.27928 4.70596 3.02525 5.71785 2.88982C6.75075 2.75158 8.11311 2.75 10.0298 2.75V1.25ZM2.84789 6.07342C2.96931 4.83905 3.23045 4.17335 3.7019 3.7019L2.64124 2.64124C1.80633 3.47616 1.48944 4.56072 1.35509 5.92658L2.84789 6.07342ZM21.1521 17.9266C21.0307 19.1609 20.7695 19.8266 20.2981 20.2981L21.3588 21.3588C22.1937 20.5238 22.5106 19.4393 22.6449 18.0734L21.1521 17.9266Z"
                                    fill="#FFFFFF" stroke-width="0"></path>
                            </svg>
                            <h1 class="text-[#E8EDF2] font-normal">Hapus</h1>
                        </button>
                    </div>
                </td>
            </tr>
        </table>
    </section>

    <section x-show="isOpen" x-transition.duration.300ms.opacity.50 :class="{ 'hidden': !isOpen, 'block': isOpen }" class="flex justify-center items-center gap-3">
        <button class="bg-primary py-1.5 px-4 rounded-md md:rounded-lg">
            <h1 class="text-[10px] md:text-sm text-white font-semibold">Sebelumnya</h1>
        </button>
        <button class="hidden sm:block group transition-all py-1 px-3.5 focus:px-5 md:focus:px-5 focus:border-b focus:border-primary">
            <h1 class="text-[10px] md:text-sm text-[#9B9B9B] transition-colors group-focus:text-primary font-semibold">1</h1>
        </button>
        <button class="py-1 px-5 md:px-5 border-b border-primary">
            <h1 class="text-[10px] md:text-sm text-primary font-semibold">2</h1>
        </button>
        <button class="hidden sm:block group transition-all py-1 px-3.5 focus:px-5 md:focus:px-5 focus:border-b focus:border-primary">
            <h1 class="text-[10px] md:text-sm text-[#9B9B9B] transition-colors group-focus:text-primary font-semibold">3</h1>
        </button>
        <button class="bg-primary py-1.5 px-4 rounded-md md:rounded-lg">
            <h1 class="text-[10px] md:text-sm text-white font-semibold">Selanjutnya</h1>
        </button>
    </section>

    <div x-data="{ checked: false }" class="space-y-2">
        <label class="w-fit flex items-center gap-3">
            <input type="checkbox" x-model="checked" class="appearance-none rounded-md checked:bg-primary checked:ring-primary">
            <h1 class="text-black text-xs md:text-sm font-normal">
                Laporan sudah sesuai dan telah disimpan
            </h1>
        </label>
        <button 
            :disabled="!checked"
            :class="{ 'bg-opacity-60 cursor-not-allowed': !checked, 'bg-opacity-100': checked }"
            class="w-32 bg-primary py-2 px-4 rounded-md shadow-md shadow-black/20 transition-all duration-300"
        >
            <h1 class="text-white text-xs md:text-sm font-normal">Konfirmasi</h1>
        </button>
    </div>
</div>

<section class="scrollbar-x bg-transparent rounded md:rounded-md shadow-md shadow-black/5 pt-5">
    <table class="w-max lg:w-full mx-auto bg-white text-center table-auto">
        <tr class="text-[10px] md:text-xs text-black capitalize">
            <th class="w-[5%] bg-white font-normal py-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">No</th>
            <th class="w-[15%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Uraian</th>
            <th class="w-[15%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Tahun</th>
            <th class="w-[15%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Tanggal Dibuat</th>
            <th class="w-[15%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Tanggal Dievaluasi</th>
            <th class="w-[15%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Tanggal Direvisi</th>
            <th class="w-[15%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Status</th>
            <th class="w-[15%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Aksi</th>
        </tr>
        <tr class="odd:bg-white even:bg-[#E8EDF2] text-xs text-black/70 capitalize overflow-visible">
            <td class="font-normal my-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">1</td>
            <td class="py-3.5 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                <h1 class="line-clamp-1 font-normal">RKPDes</h1>
            </td>
            <td class="py-3.5 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                <h1 class="line-clamp-1 font-normal">2024</h1>
            </td>
            <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">04-09-2024</td>
            <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">07-09-2024</td>
            <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">07-01-2025</td>
            <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                <div class="select-none flex items-center gap-2 w-fit bg-primary bg-opacity-30 py-1.5 px-2 rounded-lg mx-auto">
                    <img src="/svgs/alert/info.svg" class="w-5 h-5">
                    <h1 class="text-primary font-medium">Dikerjakan</h1>
                </div>
            </td>
            <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                <div class="flex items-center gap-1.5 md:gap-2">
                    <button class="flex items-center gap-2 w-fit bg-primary py-1.5 px-2 rounded-md mx-auto">
                        <svg class="w-3.5 stroke-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 4.45962C9.91153 4.16968 10.9104 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C3.75612 8.07914 4.32973 7.43025 5 6.82137"
                                stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round" />
                            <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                stroke="#FFFFFF" stroke-width="1.5" />
                        </svg>
                        <h1 class="text-[#E8EDF2] font-normal">Lihat</h1>
                    </button>
                    <button class="flex items-center gap-2 w-fit bg-primary py-1.5 px-2 rounded-md mx-auto">
                        <svg class="w-3.5 stroke-white" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.60005 15.2007H3.10004C2.10593 15.2007 1.30004 14.3948 1.30005 13.4007L1.30012 2.60077C1.30012 1.60666 2.10601 0.800781 3.10012 0.800781H11.2003C12.1944 0.800781 13.0003 1.60667 13.0003 2.60078V6.20078M12.55 12.0125V11.9651M4.45033 4.40078H9.85033M4.45033 7.10078H9.85033M4.45033 9.80078H7.15033M15.7 12.0508C15.7 12.0508 14.9529 14.2555 12.55 14.217C10.1472 14.1785 9.40005 12.0508 9.40005 12.0508C9.40005 12.0508 10.1169 9.80752 12.55 9.80752C14.9832 9.80752 15.7 12.0508 15.7 12.0508Z" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <h1 class="text-[#E8EDF2] font-normal">Rancangan</h1>
                    </button>
                </div>
            </td>
        </tr>
        <tr class="odd:bg-white even:bg-[#E8EDF2] text-xs text-black/70 capitalize overflow-visible">
            <td class="font-normal my-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">2</td>
            <td class="py-3.5 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                <h1 class="line-clamp-1 font-normal">RKPDes</h1>
            </td>
            <td class="py-3.5 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                <h1 class="line-clamp-1 font-normal">2024</h1>
            </td>
            <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">04-09-2024</td>
            <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">07-09-2024</td>
            <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">07-01-2025</td>
            <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                <div class="select-none flex items-center gap-2 w-fit bg-orange-500 bg-opacity-30 py-1.5 px-2 rounded-lg mx-auto">
                    <img src="/svgs/alert/warning.svg" class="w-5 h-5">
                    <h1 class="text-orange-500 font-medium">Dievaluasi</h1>
                </div>
            </td>
            <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                <div class="flex items-center gap-1.5 md:gap-2">
                    <button class="flex items-center gap-2 w-fit bg-primary py-1.5 px-2 rounded-md mx-auto">
                        <svg class="w-3.5 stroke-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 4.45962C9.91153 4.16968 10.9104 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C3.75612 8.07914 4.32973 7.43025 5 6.82137"
                                stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round" />
                            <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                stroke="#FFFFFF" stroke-width="1.5" />
                        </svg>
                        <h1 class="text-[#E8EDF2] font-normal">Lihat</h1>
                    </button>
                    <button class="flex items-center gap-2 w-fit bg-primary py-1.5 px-2 rounded-md mx-auto">
                        <svg class="w-3.5 stroke-white" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.60005 15.2007H3.10004C2.10593 15.2007 1.30004 14.3948 1.30005 13.4007L1.30012 2.60077C1.30012 1.60666 2.10601 0.800781 3.10012 0.800781H11.2003C12.1944 0.800781 13.0003 1.60667 13.0003 2.60078V6.20078M12.55 12.0125V11.9651M4.45033 4.40078H9.85033M4.45033 7.10078H9.85033M4.45033 9.80078H7.15033M15.7 12.0508C15.7 12.0508 14.9529 14.2555 12.55 14.217C10.1472 14.1785 9.40005 12.0508 9.40005 12.0508C9.40005 12.0508 10.1169 9.80752 12.55 9.80752C14.9832 9.80752 15.7 12.0508 15.7 12.0508Z" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <h1 class="text-[#E8EDF2] font-normal">Rancangan</h1>
                    </button>
                </div>
            </td>
        </tr>
        <tr class="odd:bg-white even:bg-[#E8EDF2] text-xs text-black/70 capitalize overflow-visible">
            <td class="font-normal my-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">2</td>
            <td class="py-3.5 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                <h1 class="line-clamp-1 font-normal">RKPDes</h1>
            </td>
            <td class="py-3.5 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                <h1 class="line-clamp-1 font-normal">2024</h1>
            </td>
            <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">04-09-2024</td>
            <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">07-09-2024</td>
            <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">07-01-2025</td>
            <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                <div class="select-none flex items-center gap-2 w-fit bg-red-500 bg-opacity-30 py-1.5 px-2 rounded-lg mx-auto">
                    <img src="/svgs/alert/danger.svg" class="w-5 h-5">
                    <h1 class="text-red-500 font-medium">Revisi</h1>
                </div>
            </td>
            <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                <div class="flex items-center gap-1.5 md:gap-2">
                    <button class="flex items-center gap-2 w-fit bg-primary py-1.5 px-2 rounded-md mx-auto">
                        <svg class="w-3.5 stroke-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 4.45962C9.91153 4.16968 10.9104 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C3.75612 8.07914 4.32973 7.43025 5 6.82137"
                                stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round" />
                            <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                stroke="#FFFFFF" stroke-width="1.5" />
                        </svg>
                        <h1 class="text-[#E8EDF2] font-normal">Lihat</h1>
                    </button>
                    <button class="flex items-center gap-2 w-fit bg-primary py-1.5 px-2 rounded-md mx-auto">
                        <svg class="w-3.5 stroke-white" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.60005 15.2007H3.10004C2.10593 15.2007 1.30004 14.3948 1.30005 13.4007L1.30012 2.60077C1.30012 1.60666 2.10601 0.800781 3.10012 0.800781H11.2003C12.1944 0.800781 13.0003 1.60667 13.0003 2.60078V6.20078M12.55 12.0125V11.9651M4.45033 4.40078H9.85033M4.45033 7.10078H9.85033M4.45033 9.80078H7.15033M15.7 12.0508C15.7 12.0508 14.9529 14.2555 12.55 14.217C10.1472 14.1785 9.40005 12.0508 9.40005 12.0508C9.40005 12.0508 10.1169 9.80752 12.55 9.80752C14.9832 9.80752 15.7 12.0508 15.7 12.0508Z" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <h1 class="text-[#E8EDF2] font-normal">Rancangan</h1>
                    </button>
                </div>
            </td>
        </tr>
        <tr class="odd:bg-white even:bg-[#E8EDF2] text-xs text-black/70 capitalize overflow-visible">
            <td class="font-normal my-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">2</td>
            <td class="py-3.5 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                <h1 class="line-clamp-1 font-normal">RKPDes</h1>
            </td>
            <td class="py-3.5 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                <h1 class="line-clamp-1 font-normal">2024</h1>
            </td>
            <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">04-09-2024</td>
            <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">07-09-2024</td>
            <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">07-01-2025</td>
            <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                <div class="select-none flex items-center gap-2 w-fit bg-green-500 bg-opacity-30 py-1.5 px-2 rounded-lg mx-auto">
                    <img src="/svgs/alert/check.svg" class="w-5 h-5">
                    <h1 class="text-green-500 font-medium">Final</h1>
                </div>
            </td>
            <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                <div class="flex items-center gap-1.5 md:gap-2">
                    <button class="flex items-center gap-2 w-fit bg-primary py-1.5 px-2 rounded-md mx-auto">
                        <svg class="w-3.5 stroke-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 4.45962C9.91153 4.16968 10.9104 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C3.75612 8.07914 4.32973 7.43025 5 6.82137"
                                stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round" />
                            <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                stroke="#FFFFFF" stroke-width="1.5" />
                        </svg>
                        <h1 class="text-[#E8EDF2] font-normal">Lihat</h1>
                    </button>
                    <button class="flex items-center gap-2 w-fit bg-primary py-1.5 px-2 rounded-md mx-auto">
                        <svg class="w-3.5 stroke-white" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.60005 15.2007H3.10004C2.10593 15.2007 1.30004 14.3948 1.30005 13.4007L1.30012 2.60077C1.30012 1.60666 2.10601 0.800781 3.10012 0.800781H11.2003C12.1944 0.800781 13.0003 1.60667 13.0003 2.60078V6.20078M12.55 12.0125V11.9651M4.45033 4.40078H9.85033M4.45033 7.10078H9.85033M4.45033 9.80078H7.15033M15.7 12.0508C15.7 12.0508 14.9529 14.2555 12.55 14.217C10.1472 14.1785 9.40005 12.0508 9.40005 12.0508C9.40005 12.0508 10.1169 9.80752 12.55 9.80752C14.9832 9.80752 15.7 12.0508 15.7 12.0508Z" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <h1 class="text-[#E8EDF2] font-normal">Rancangan</h1>
                    </button>
                </div>
            </td>
        </tr>
    </table>
</section>

<section class="flex justify-center items-center gap-3">
    <button class="bg-primary py-1.5 px-4 rounded-md md:rounded-lg">
        <h1 class="text-[10px] md:text-sm text-white font-semibold">Sebelumnya</h1>
    </button>
    <button class="hidden sm:block group transition-all py-1 px-3.5 focus:px-5 md:focus:px-5 focus:border-b focus:border-primary">
        <h1 class="text-[10px] md:text-sm text-[#9B9B9B] transition-colors group-focus:text-primary font-semibold">1</h1>
    </button>
    <button class="py-1 px-5 md:px-5 border-b border-primary">
        <h1 class="text-[10px] md:text-sm text-primary font-semibold">2</h1>
    </button>
    <button class="hidden sm:block group transition-all py-1 px-3.5 focus:px-5 md:focus:px-5 focus:border-b focus:border-primary">
        <h1 class="text-[10px] md:text-sm text-[#9B9B9B] transition-colors group-focus:text-primary font-semibold">3</h1>
    </button>
    <button class="bg-primary py-1.5 px-4 rounded-md md:rounded-lg">
        <h1 class="text-[10px] md:text-sm text-white font-semibold">Selanjutnya</h1>
    </button>
</section>