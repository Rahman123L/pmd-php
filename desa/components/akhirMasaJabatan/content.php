<div x-show="window.innerWidth < 640 && isOpen" x-transition.opacity :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden fixed inset-0 bg-zinc-800 bg-opacity-80 z-40"></div>
<div x-data="{ isOpenn : true }">
    <?php include_once("../desa/layout/sidebar.php"); ?>

    <main :class="isOpenn ? 'md:ml-60' : 'md:ml-20 ' + 'transition-all duration-500'" class="relative md:ml-60 pt-16 p-5 space-y-4">
        <div x-data="{ isOpen : false }" class="space-y-5">
            <div class="flex justify-between items-center">
                <h1 class="text-base md:text-lg lg:text-xl text-black font-medium">Laporan Akhir Masa Jabatan</h1>
                <h1 class="text-xs md:text-sm text-black font-medium"><span class="text-primary font-medium">Home</span> / Laporan Akhir Masa Jabatan</h1>
            </div>
            <div x-data="{ modal : false }" class="mx-2">
                <button @click="modal = !modal" class="bg-primary py-2 px-3 flex items-center gap-2 md:gap-3 rounded ring-8 ring-white">
                    <h1 class="text-[10px] md:text-xs text-white font-medium">Upload Laporan</h1>
                    <svg class="w-3 md:w-4" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.99999 10.6L7.99999 8.05441M7.99999 8.05441L7.99999 5.50883M7.99999 8.05441L5.4544 8.05441M7.99999 8.05441L10.5456 8.05441M0.800694 11.1557L0.800762 4.31249C0.800767 3.62705 0.800511 2.65075 0.800293 1.94384C0.80014 1.44665 1.20314 1.04407 1.70033 1.04407H5.98899L8.06276 3.25929H14.3C14.797 3.25929 15.2 3.66226 15.2 4.15932L15.1998 11.1558C15.1997 12.1499 14.3938 12.9558 13.3997 12.9558L2.60069 12.9557C1.60657 12.9557 0.800684 12.1498 0.800694 11.1557Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div x-show="modal" x-transition.duration.300ms.opacity.50 :class="{ 'visible': modal, 'invisible': !modal }" class="invisible fixed inset-0 z-50 bg-[#0000006E] flex items-center justify-center h-screen">
                    <div class="w-[80%] sm:w-[70%] md:w-[60%] lg:w-[50%] bg-white rounded-lg md:rounded-xl">
                        <div class="flex justify-between items-center border-b border-[#D1D1D1] py-2.5 px-3">
                            <h1 class="text-sm md:text-base text-black font-semibold">Upload Laporan</h1>
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
                                        <img class="w-16 md:w-20 h-16 md:h-20 mx-auto" src="/svgs/upload.svg">
                                        <div class="text-center space-y-1">
                                            <h1 class="text-xs md:text-sm text-[#0F0F0F] font-bold">Drag & drop files or 
                                                <span class="text-[#483EA8] font-bold underline">Browse</span>
                                            </h1>
                                            <p class="text-[10px] md:text-xs text-[#676767] font-normal">Format harus .pdf</p>
                                        </div>
                                    </div>
                                    <input @change="handleFileUpload($event)" class="hidden" type="file" id="upload" multiple>
                                </label>
                        
                                <template x-if="files.length > 0">
                                    <div class="space-y-2">
                                        <h1 class="text-xs md:text-sm text-[#676767] font-semibold">Mengunggah file - <span x-text="files.length + ' files'"></span></h1>
                        
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
                                                            <button @click="modal = !modal" class="w-max bg-primary py-0.5 px-2 rounded cursor-pointer">
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
                                                                            <button @click="() => { renameFile(index); modal = false; }"  class="bg-primary py-1.5 px-4 md:px-5 rounded">
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
                                    :class="{ 'bg-primary cursor-pointer': status(), 'bg-gray-500 cursor-not-allowed': !status() }"
                                    class="py-1.5 px-4 md:px-5 rounded">
                                    <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Upload</h1>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center items-center pt-10">
            <div class="space-y-2">
                <img class="w-28 md:w-32 h-28 md:h-32 mx-auto" src="/svgs/search.svg">
                <div class="text-center">
                    <h1 class="text-lg md:text-xl text-black font-medium">Desa Tidak Ditemukan</h1>
                    <h1 class="text-[10px] md:text-xs text-[#7A7A7A] font-normal">Pilih Desa untuk memunculkan data</h1>
                </div>
            </div>
        </div>

        <section class="space-y-3">
            <section class="w-full lg:flex justify-between items-center gap-3 space-y-3 lg:space-y-0">
                <h1 class="text-xs md:text-sm text-black font-medium">History</h1>
                <div class="md:flex items-center gap-3 space-y-3 md:space-y-0">
                    <div x-data="{ selected : null, isOpen : false }" class="flex items-center gap-2 md:gap-3">
                        <h1 class="text-xs md:text-sm text-[#778294] font-medium capitalize">Filter</h1>
                        <div class="w-full md:w-40 relative space-y-2">
                            <button @click="isOpen = !isOpen" class="w-full flex justify-between items-center gap-2 bg-white py-1.5 px-4 rounded md:rounded-md shadow-md shadow-black/5 focus:outline-none focus:ring-0">
                                <h1 x-text="selected ? selected : 'Pilih Filter'" class="text-xs md:text-sm text-[#313131] font-normal"></h1>
                                <svg class="w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 011.414 0L10 11.414l3.293-3.707a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <div x-show="isOpen" @click.outside="isOpen = false" x-transition.duration.300ms.opacity.50 :class="{ 'visible': isOpen, 'invisible': !isOpen }" class="invisible absolute z-10 w-full bg-white rounded md:rounded-md shadow-md shadow-black/5">
                                <template x-for="(option, index) in ['Terbaru', 'Terlama']" :key="index">
                                    <div @click="selected = option; isOpen = false" class="flex justify-between items-center gap-2 py-1.5 px-4 cursor-pointer rounded md:rounded-md">
                                        <h1 x-text="option" class="text-xs md:text-sm text-[#313131] font-normal"></h1>
                                        <svg x-show="selected === option" class="w-5 stroke-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center bg-white rounded md:rounded-md shadow-md shadow-black/5">
                        <label for="search" class="flex items-center ml-5 cursor-pointer">
                            <svg class="w-[18px] md:w-5 stroke-[1.5] stroke-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 6C13.7614 6 16 8.23858 16 11M16.6588 16.6549L21 21M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" stroke-linecap="round"/>
                            </svg>
                        </label>
                        <input type="search" id="search" placeholder="Searching" autocomplete="off" class="w-full bg-transparent border-none text-xs md:text-sm text-gray-500 font-normal focus:outline-none focus:ring-0 placeholder:text-xs md:placeholder:text-sm placeholder:text-gray-500 placeholder:font-medium">
                    </div>
                </div>
            </section>

            <section class="scrollbar-x bg-transparent rounded md:rounded-md shadow-md shadow-black/5">
                <table class="w-max lg:w-full mx-auto bg-white text-center table-auto">
                    <tr class="text-[10px] md:text-xs text-black capitalize">
                        <th class="w-[5%] bg-white font-normal py-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">No</th>
                        <th class="w-[30%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Nama</th>
                        <th class="w-[15%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Status</th>
                        <th class="w-[20%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Tanggal dikirim</th>
                        <th class="w-[20%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Tanggal direvisi</th>
                        <th class="w-[15%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Aksi</th>
                    </tr>
                    <tr class="odd:bg-white even:bg-[#E8EDF2] text-xs text-black/70 capitalize overflow-visible">
                        <td class="font-normal my-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">1</td>
                        <td class="py-3.5 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                            <h1 class="line-clamp-1 font-normal">Undangan Sosialisasi</h1>
                        </td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                            <div class="select-none flex items-center gap-2 w-fit bg-[#CEFFE8] py-1.5 px-2 rounded-xl mx-auto">
                                <svg class="w-4" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.0501 11.45L12.3376 6.1625L11.2876 5.1125L7.0501 9.35L4.9126 7.2125L3.8626 8.2625L7.0501 11.45ZM8.1001 15.5C7.0626 15.5 6.0876 15.3031 5.1751 14.9094C4.2626 14.5156 3.46885 13.9813 2.79385 13.3063C2.11885 12.6313 1.58447 11.8375 1.19072 10.925C0.796973 10.0125 0.600098 9.0375 0.600098 8C0.600098 6.9625 0.796973 5.9875 1.19072 5.075C1.58447 4.1625 2.11885 3.36875 2.79385 2.69375C3.46885 2.01875 4.2626 1.48438 5.1751 1.09063C6.0876 0.696875 7.0626 0.5 8.1001 0.5C9.1376 0.5 10.1126 0.696875 11.0251 1.09063C11.9376 1.48438 12.7313 2.01875 13.4063 2.69375C14.0813 3.36875 14.6157 4.1625 15.0095 5.075C15.4032 5.9875 15.6001 6.9625 15.6001 8C15.6001 9.0375 15.4032 10.0125 15.0095 10.925C14.6157 11.8375 14.0813 12.6313 13.4063 13.3063C12.7313 13.9813 11.9376 14.5156 11.0251 14.9094C10.1126 15.3031 9.1376 15.5 8.1001 15.5Z" fill="#059669"/>
                                </svg>
                                <h1 class="text-[#059669] font-normal">Sukses</h1>
                            </div>
                        </td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">04-09-2024</td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">07-09-2024</td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                            <div class="flex items-center gap-2 md:gap-3">
                                <a href="" class="flex items-center gap-2 w-fit bg-primary py-1.5 px-2 rounded-md mx-auto">
                                    <svg class="w-4 fill-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.25C9.92893 8.25 8.25 9.92893 8.25 12C8.25 14.0711 9.92893 15.75 12 15.75C14.0711 15.75 15.75 14.0711 15.75 12C15.75 9.92893 14.0711 8.25 12 8.25ZM9.75 12C9.75 10.7574 10.7574 9.75 12 9.75C13.2426 9.75 14.25 10.7574 14.25 12C14.25 13.2426 13.2426 14.25 12 14.25C10.7574 14.25 9.75 13.2426 9.75 12Z"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C7.48587 3.25 4.44529 5.9542 2.68057 8.24686L2.64874 8.2882C2.24964 8.80653 1.88206 9.28392 1.63269 9.8484C1.36564 10.4529 1.25 11.1117 1.25 12C1.25 12.8883 1.36564 13.5471 1.63269 14.1516C1.88206 14.7161 2.24964 15.1935 2.64875 15.7118L2.68057 15.7531C4.44529 18.0458 7.48587 20.75 12 20.75C16.5141 20.75 19.5547 18.0458 21.3194 15.7531L21.3512 15.7118C21.7504 15.1935 22.1179 14.7161 22.3673 14.1516C22.6344 13.5471 22.75 12.8883 22.75 12C22.75 11.1117 22.6344 10.4529 22.3673 9.8484C22.1179 9.28391 21.7504 8.80652 21.3512 8.28818L21.3194 8.24686C19.5547 5.9542 16.5141 3.25 12 3.25ZM3.86922 9.1618C5.49864 7.04492 8.15036 4.75 12 4.75C15.8496 4.75 18.5014 7.04492 20.1308 9.1618C20.5694 9.73159 20.8263 10.0721 20.9952 10.4545C21.1532 10.812 21.25 11.2489 21.25 12C21.25 12.7511 21.1532 13.188 20.9952 13.5455C20.8263 13.9279 20.5694 14.2684 20.1308 14.8382C18.5014 16.9551 15.8496 19.25 12 19.25C8.15036 19.25 5.49864 16.9551 3.86922 14.8382C3.43064 14.2684 3.17374 13.9279 3.00476 13.5455C2.84684 13.188 2.75 12.7511 2.75 12C2.75 11.2489 2.84684 10.812 3.00476 10.4545C3.17374 10.0721 3.43063 9.73159 3.86922 9.1618Z"/>
                                    </svg>
                                    <h1 class="text-white font-normal">Detail</h1>
                                </a>
                                <div x-data="{ modal: false }">
                                    <button type="button" @click="modal = !modal" class="flex items-center gap-2 w-fit bg-[#FA6D09] py-1.5 px-2 rounded-md mx-auto">
                                        <h1 class="text-white font-normal">Revisi</h1>
                                        <svg class="w-2.5 fill-white" viewBox="0 0 12 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.825 12.0375C0.55 11.5625 0.34375 11.075 0.20625 10.575C0.06875 10.075 0 9.5625 0 9.0375C0 7.3625 0.58125 5.9375 1.74375 4.7625C2.90625 3.5875 4.325 3 6 3H6.13125L4.93125 1.8L5.98125 0.75L8.98125 3.75L5.98125 6.75L4.93125 5.7L6.13125 4.5H6C4.75 4.5 3.6875 4.94063 2.8125 5.82188C1.9375 6.70313 1.5 7.775 1.5 9.0375C1.5 9.3625 1.5375 9.68125 1.6125 9.99375C1.6875 10.3062 1.8 10.6125 1.95 10.9125L0.825 12.0375ZM6.01875 17.25L3.01875 14.25L6.01875 11.25L7.06875 12.3L5.86875 13.5H6C7.25 13.5 8.3125 13.0594 9.1875 12.1781C10.0625 11.2969 10.5 10.225 10.5 8.9625C10.5 8.6375 10.4625 8.31875 10.3875 8.00625C10.3125 7.69375 10.2 7.3875 10.05 7.0875L11.175 5.9625C11.45 6.4375 11.6562 6.925 11.7938 7.425C11.9313 7.925 12 8.4375 12 8.9625C12 10.6375 11.4187 12.0625 10.2563 13.2375C9.09375 14.4125 7.675 15 6 15H5.86875L7.06875 16.2L6.01875 17.25Z"/>
                                        </svg>
                                    </button>
                                    <div x-show="modal" x-transition.duration.300ms.opacity.50 :class="{ 'visible': modal, 'invisible': !modal }" class="invisible fixed inset-0 z-50 bg-[#0000006E] flex items-center justify-center h-screen">
                                        <div class="w-[80%] sm:w-[60%] md:w-[40%] lg:w-[30%] bg-white rounded-lg md:rounded-xl">
                                            <div class="flex justify-between items-center border-b border-[#D1D1D1] py-2.5 px-3">
                                                <div class=""></div>
                                                <h1 class="text-sm md:text-base text-black font-semibold">Revisi Laporan</h1>
                                                <button type="button" @click="modal = false" type="button" class="bg-[#E8E8E8] p-2 rounded-full">
                                                    <svg class="w-3 fill-[#8B8B8B]" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.0204 1.68705C11.2157 1.49179 11.2157 1.1752 11.0204 0.979943C10.8251 0.784681 10.5086 0.784681 10.3133 0.979943L6.00017 5.29307L1.68705 0.979945C1.49179 0.784683 1.1752 0.784683 0.979943 0.979945C0.784681 1.17521 0.784681 1.49179 0.979943 1.68705L5.29306 6.00017L0.979961 10.3133C0.784699 10.5085 0.784699 10.8251 0.979961 11.0204C1.17522 11.2156 1.49181 11.2156 1.68707 11.0204L6.00017 6.70728L10.3133 11.0204C10.5085 11.2156 10.8251 11.2156 11.0204 11.0204C11.2156 10.8251 11.2156 10.5085 11.0204 10.3133L6.70728 6.00017L11.0204 1.68705Z"/>
                                                    </svg>
                                                </button>
                                            </div>
                                            <form action="" method="" class="pt-2.5 pb-3.5 px-5 space-y-8">
                                                <div class="space-y-3">
                                                    <h1 class="text-start text-xs md:text-sm text-black font-normal">Catatan revisi laporan</h1>
                                                    <textarea rows="3" class="inputText w-full resize-none bg-white px-3.5 py-2.5 md:px-4 md:py-3 border-[0.5px] border-[#D6D6D6] focus:border-[#D6D6D6] rounded-lg overflow-hidden focus:outline-none focus:ring-0 text-[#8B8B8B] text-[10px] md:text-xs font-normal"></textarea>
                                                </div>
                                                <div class="flex justify-center items-center gap-2 md:gap-3">
                                                    <button type="button" @click="modal = false" class="bg-[#FF4E4E] py-1.5 px-4 md:px-5 rounded">
                                                        <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Batal</h1>
                                                    </button>
                                                    <button class="bg-primary py-1.5 px-4 md:px-5 rounded">
                                                        <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Upload</h1>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-[#E8EDF2] text-xs text-black/70 capitalize overflow-visible">
                        <td class="font-normal my-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">2</td>
                        <td class="py-3.5 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                            <h1 class="line-clamp-1 font-normal">Undangan Sosialisasi</h1>
                        </td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                            <div class="select-none flex items-center gap-2 w-fit bg-[#FFEEA9] py-1.5 px-2 rounded-xl mx-auto">
                                <svg class="w-4" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.6001 10.75C7.8126 10.75 7.99072 10.6781 8.13447 10.5344C8.27822 10.3906 8.3501 10.2125 8.3501 10C8.3501 9.7875 8.27822 9.60938 8.13447 9.46563C7.99072 9.32188 7.8126 9.25 7.6001 9.25C7.3876 9.25 7.20947 9.32188 7.06572 9.46563C6.92197 9.60938 6.8501 9.7875 6.8501 10C6.8501 10.2125 6.92197 10.3906 7.06572 10.5344C7.20947 10.6781 7.3876 10.75 7.6001 10.75ZM6.8501 7.75H8.3501V3.25H6.8501V7.75ZM4.7876 13.75L0.850098 9.8125V4.1875L4.7876 0.25H10.4126L14.3501 4.1875V9.8125L10.4126 13.75H4.7876Z" fill="#D97706"/>
                                </svg>
                                <h1 class="text-[#D97706] font-normal">Proses</h1>
                            </div>
                        </td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">04-09-2024</td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">07-09-2024</td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                            <div class="flex items-center gap-2 md:gap-3">
                                <a href="" class="flex items-center gap-2 w-fit bg-primary py-1.5 px-2 rounded-md mx-auto">
                                    <svg class="w-4 fill-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.25C9.92893 8.25 8.25 9.92893 8.25 12C8.25 14.0711 9.92893 15.75 12 15.75C14.0711 15.75 15.75 14.0711 15.75 12C15.75 9.92893 14.0711 8.25 12 8.25ZM9.75 12C9.75 10.7574 10.7574 9.75 12 9.75C13.2426 9.75 14.25 10.7574 14.25 12C14.25 13.2426 13.2426 14.25 12 14.25C10.7574 14.25 9.75 13.2426 9.75 12Z"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C7.48587 3.25 4.44529 5.9542 2.68057 8.24686L2.64874 8.2882C2.24964 8.80653 1.88206 9.28392 1.63269 9.8484C1.36564 10.4529 1.25 11.1117 1.25 12C1.25 12.8883 1.36564 13.5471 1.63269 14.1516C1.88206 14.7161 2.24964 15.1935 2.64875 15.7118L2.68057 15.7531C4.44529 18.0458 7.48587 20.75 12 20.75C16.5141 20.75 19.5547 18.0458 21.3194 15.7531L21.3512 15.7118C21.7504 15.1935 22.1179 14.7161 22.3673 14.1516C22.6344 13.5471 22.75 12.8883 22.75 12C22.75 11.1117 22.6344 10.4529 22.3673 9.8484C22.1179 9.28391 21.7504 8.80652 21.3512 8.28818L21.3194 8.24686C19.5547 5.9542 16.5141 3.25 12 3.25ZM3.86922 9.1618C5.49864 7.04492 8.15036 4.75 12 4.75C15.8496 4.75 18.5014 7.04492 20.1308 9.1618C20.5694 9.73159 20.8263 10.0721 20.9952 10.4545C21.1532 10.812 21.25 11.2489 21.25 12C21.25 12.7511 21.1532 13.188 20.9952 13.5455C20.8263 13.9279 20.5694 14.2684 20.1308 14.8382C18.5014 16.9551 15.8496 19.25 12 19.25C8.15036 19.25 5.49864 16.9551 3.86922 14.8382C3.43064 14.2684 3.17374 13.9279 3.00476 13.5455C2.84684 13.188 2.75 12.7511 2.75 12C2.75 11.2489 2.84684 10.812 3.00476 10.4545C3.17374 10.0721 3.43063 9.73159 3.86922 9.1618Z"/>
                                    </svg>
                                    <h1 class="text-white font-normal">Detail</h1>
                                </a>
                                <div x-data="{ modal: false }">
                                    <button type="button" @click="modal = !modal" class="flex items-center gap-2 w-fit bg-[#FA6D09] py-1.5 px-2 rounded-md mx-auto">
                                        <h1 class="text-white font-normal">Revisi</h1>
                                        <svg class="w-2.5 fill-white" viewBox="0 0 12 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.825 12.0375C0.55 11.5625 0.34375 11.075 0.20625 10.575C0.06875 10.075 0 9.5625 0 9.0375C0 7.3625 0.58125 5.9375 1.74375 4.7625C2.90625 3.5875 4.325 3 6 3H6.13125L4.93125 1.8L5.98125 0.75L8.98125 3.75L5.98125 6.75L4.93125 5.7L6.13125 4.5H6C4.75 4.5 3.6875 4.94063 2.8125 5.82188C1.9375 6.70313 1.5 7.775 1.5 9.0375C1.5 9.3625 1.5375 9.68125 1.6125 9.99375C1.6875 10.3062 1.8 10.6125 1.95 10.9125L0.825 12.0375ZM6.01875 17.25L3.01875 14.25L6.01875 11.25L7.06875 12.3L5.86875 13.5H6C7.25 13.5 8.3125 13.0594 9.1875 12.1781C10.0625 11.2969 10.5 10.225 10.5 8.9625C10.5 8.6375 10.4625 8.31875 10.3875 8.00625C10.3125 7.69375 10.2 7.3875 10.05 7.0875L11.175 5.9625C11.45 6.4375 11.6562 6.925 11.7938 7.425C11.9313 7.925 12 8.4375 12 8.9625C12 10.6375 11.4187 12.0625 10.2563 13.2375C9.09375 14.4125 7.675 15 6 15H5.86875L7.06875 16.2L6.01875 17.25Z"/>
                                        </svg>
                                    </button>
                                    <div x-show="modal" x-transition.duration.300ms.opacity.50 :class="{ 'visible': modal, 'invisible': !modal }" class="invisible fixed inset-0 z-50 bg-[#0000006E] flex items-center justify-center h-screen">
                                        <div class="w-[80%] sm:w-[60%] md:w-[40%] lg:w-[30%] bg-white rounded-lg md:rounded-xl">
                                            <div class="flex justify-between items-center border-b border-[#D1D1D1] py-2.5 px-3">
                                                <div class=""></div>
                                                <h1 class="text-sm md:text-base text-black font-semibold">Revisi Laporan</h1>
                                                <button type="button" @click="modal = false" type="button" class="bg-[#E8E8E8] p-2 rounded-full">
                                                    <svg class="w-3 fill-[#8B8B8B]" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.0204 1.68705C11.2157 1.49179 11.2157 1.1752 11.0204 0.979943C10.8251 0.784681 10.5086 0.784681 10.3133 0.979943L6.00017 5.29307L1.68705 0.979945C1.49179 0.784683 1.1752 0.784683 0.979943 0.979945C0.784681 1.17521 0.784681 1.49179 0.979943 1.68705L5.29306 6.00017L0.979961 10.3133C0.784699 10.5085 0.784699 10.8251 0.979961 11.0204C1.17522 11.2156 1.49181 11.2156 1.68707 11.0204L6.00017 6.70728L10.3133 11.0204C10.5085 11.2156 10.8251 11.2156 11.0204 11.0204C11.2156 10.8251 11.2156 10.5085 11.0204 10.3133L6.70728 6.00017L11.0204 1.68705Z"/>
                                                    </svg>
                                                </button>
                                            </div>
                                            <form action="" method="" class="pt-2.5 pb-3.5 px-5 space-y-8">
                                                <div class="space-y-3">
                                                    <h1 class="text-start text-xs md:text-sm text-black font-normal">Catatan revisi laporan</h1>
                                                    <textarea rows="3" class="inputText w-full resize-none bg-white px-3.5 py-2.5 md:px-4 md:py-3 border-[0.5px] border-[#D6D6D6] focus:border-[#D6D6D6] rounded-lg overflow-hidden focus:outline-none focus:ring-0 text-[#8B8B8B] text-[10px] md:text-xs font-normal"></textarea>
                                                </div>
                                                <div class="flex justify-center items-center gap-2 md:gap-3">
                                                    <button type="button" @click="modal = false" class="bg-[#FF4E4E] py-1.5 px-4 md:px-5 rounded">
                                                        <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Batal</h1>
                                                    </button>
                                                    <button class="bg-primary py-1.5 px-4 md:px-5 rounded">
                                                        <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Upload</h1>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-[#E8EDF2] text-xs text-black/70 capitalize overflow-visible">
                        <td class="font-normal my-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">3</td>
                        <td class="py-3.5 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                            <h1 class="line-clamp-1 font-normal">Undangan Sosialisasi</h1>
                        </td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                            <div class="select-none flex items-center gap-2 w-fit bg-[#FFCCCC] py-1.5 px-2 rounded-xl mx-auto">
                                <svg class="w-4" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.4001 11.75L8.1001 9.05L10.8001 11.75L11.8501 10.7L9.1501 8L11.8501 5.3L10.8001 4.25L8.1001 6.95L5.4001 4.25L4.3501 5.3L7.0501 8L4.3501 10.7L5.4001 11.75ZM8.1001 15.5C7.0626 15.5 6.0876 15.3031 5.1751 14.9094C4.2626 14.5156 3.46885 13.9813 2.79385 13.3063C2.11885 12.6313 1.58447 11.8375 1.19072 10.925C0.796973 10.0125 0.600098 9.0375 0.600098 8C0.600098 6.9625 0.796973 5.9875 1.19072 5.075C1.58447 4.1625 2.11885 3.36875 2.79385 2.69375C3.46885 2.01875 4.2626 1.48438 5.1751 1.09063C6.0876 0.696875 7.0626 0.5 8.1001 0.5C9.1376 0.5 10.1126 0.696875 11.0251 1.09063C11.9376 1.48438 12.7313 2.01875 13.4063 2.69375C14.0813 3.36875 14.6157 4.1625 15.0095 5.075C15.4032 5.9875 15.6001 6.9625 15.6001 8C15.6001 9.0375 15.4032 10.0125 15.0095 10.925C14.6157 11.8375 14.0813 12.6313 13.4063 13.3063C12.7313 13.9813 11.9376 14.5156 11.0251 14.9094C10.1126 15.3031 9.1376 15.5 8.1001 15.5Z" fill="#DC2626"/>
                                </svg>
                                <h1 class="text-[#DC2626] font-normal">Revisi</h1>
                            </div>
                        </td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">04-09-2024</td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">07-09-2024</td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                            <div class="flex items-center gap-2 md:gap-3">
                                <a href="" class="flex items-center gap-2 w-fit bg-primary py-1.5 px-2 rounded-md mx-auto">
                                    <svg class="w-4 fill-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.25C9.92893 8.25 8.25 9.92893 8.25 12C8.25 14.0711 9.92893 15.75 12 15.75C14.0711 15.75 15.75 14.0711 15.75 12C15.75 9.92893 14.0711 8.25 12 8.25ZM9.75 12C9.75 10.7574 10.7574 9.75 12 9.75C13.2426 9.75 14.25 10.7574 14.25 12C14.25 13.2426 13.2426 14.25 12 14.25C10.7574 14.25 9.75 13.2426 9.75 12Z"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C7.48587 3.25 4.44529 5.9542 2.68057 8.24686L2.64874 8.2882C2.24964 8.80653 1.88206 9.28392 1.63269 9.8484C1.36564 10.4529 1.25 11.1117 1.25 12C1.25 12.8883 1.36564 13.5471 1.63269 14.1516C1.88206 14.7161 2.24964 15.1935 2.64875 15.7118L2.68057 15.7531C4.44529 18.0458 7.48587 20.75 12 20.75C16.5141 20.75 19.5547 18.0458 21.3194 15.7531L21.3512 15.7118C21.7504 15.1935 22.1179 14.7161 22.3673 14.1516C22.6344 13.5471 22.75 12.8883 22.75 12C22.75 11.1117 22.6344 10.4529 22.3673 9.8484C22.1179 9.28391 21.7504 8.80652 21.3512 8.28818L21.3194 8.24686C19.5547 5.9542 16.5141 3.25 12 3.25ZM3.86922 9.1618C5.49864 7.04492 8.15036 4.75 12 4.75C15.8496 4.75 18.5014 7.04492 20.1308 9.1618C20.5694 9.73159 20.8263 10.0721 20.9952 10.4545C21.1532 10.812 21.25 11.2489 21.25 12C21.25 12.7511 21.1532 13.188 20.9952 13.5455C20.8263 13.9279 20.5694 14.2684 20.1308 14.8382C18.5014 16.9551 15.8496 19.25 12 19.25C8.15036 19.25 5.49864 16.9551 3.86922 14.8382C3.43064 14.2684 3.17374 13.9279 3.00476 13.5455C2.84684 13.188 2.75 12.7511 2.75 12C2.75 11.2489 2.84684 10.812 3.00476 10.4545C3.17374 10.0721 3.43063 9.73159 3.86922 9.1618Z"/>
                                    </svg>
                                    <h1 class="text-white font-normal">Detail</h1>
                                </a>
                                <div x-data="{ modal: false }">
                                    <button type="button" @click="modal = !modal" class="flex items-center gap-2 w-fit bg-[#FA6D09] py-1.5 px-2 rounded-md mx-auto">
                                        <h1 class="text-white font-normal">Revisi</h1>
                                        <svg class="w-2.5 fill-white" viewBox="0 0 12 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.825 12.0375C0.55 11.5625 0.34375 11.075 0.20625 10.575C0.06875 10.075 0 9.5625 0 9.0375C0 7.3625 0.58125 5.9375 1.74375 4.7625C2.90625 3.5875 4.325 3 6 3H6.13125L4.93125 1.8L5.98125 0.75L8.98125 3.75L5.98125 6.75L4.93125 5.7L6.13125 4.5H6C4.75 4.5 3.6875 4.94063 2.8125 5.82188C1.9375 6.70313 1.5 7.775 1.5 9.0375C1.5 9.3625 1.5375 9.68125 1.6125 9.99375C1.6875 10.3062 1.8 10.6125 1.95 10.9125L0.825 12.0375ZM6.01875 17.25L3.01875 14.25L6.01875 11.25L7.06875 12.3L5.86875 13.5H6C7.25 13.5 8.3125 13.0594 9.1875 12.1781C10.0625 11.2969 10.5 10.225 10.5 8.9625C10.5 8.6375 10.4625 8.31875 10.3875 8.00625C10.3125 7.69375 10.2 7.3875 10.05 7.0875L11.175 5.9625C11.45 6.4375 11.6562 6.925 11.7938 7.425C11.9313 7.925 12 8.4375 12 8.9625C12 10.6375 11.4187 12.0625 10.2563 13.2375C9.09375 14.4125 7.675 15 6 15H5.86875L7.06875 16.2L6.01875 17.25Z"/>
                                        </svg>
                                    </button>
                                    <div x-show="modal" x-transition.duration.300ms.opacity.50 :class="{ 'visible': modal, 'invisible': !modal }" class="invisible fixed inset-0 z-50 bg-[#0000006E] flex items-center justify-center h-screen">
                                        <div class="w-[80%] sm:w-[60%] md:w-[40%] lg:w-[30%] bg-white rounded-lg md:rounded-xl">
                                            <div class="flex justify-between items-center border-b border-[#D1D1D1] py-2.5 px-3">
                                                <div class=""></div>
                                                <h1 class="text-sm md:text-base text-black font-semibold">Revisi Laporan</h1>
                                                <button type="button" @click="modal = false" type="button" class="bg-[#E8E8E8] p-2 rounded-full">
                                                    <svg class="w-3 fill-[#8B8B8B]" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.0204 1.68705C11.2157 1.49179 11.2157 1.1752 11.0204 0.979943C10.8251 0.784681 10.5086 0.784681 10.3133 0.979943L6.00017 5.29307L1.68705 0.979945C1.49179 0.784683 1.1752 0.784683 0.979943 0.979945C0.784681 1.17521 0.784681 1.49179 0.979943 1.68705L5.29306 6.00017L0.979961 10.3133C0.784699 10.5085 0.784699 10.8251 0.979961 11.0204C1.17522 11.2156 1.49181 11.2156 1.68707 11.0204L6.00017 6.70728L10.3133 11.0204C10.5085 11.2156 10.8251 11.2156 11.0204 11.0204C11.2156 10.8251 11.2156 10.5085 11.0204 10.3133L6.70728 6.00017L11.0204 1.68705Z"/>
                                                    </svg>
                                                </button>
                                            </div>
                                            <form action="" method="" class="pt-2.5 pb-3.5 px-5 space-y-8">
                                                <div class="space-y-3">
                                                    <h1 class="text-start text-xs md:text-sm text-black font-normal">Catatan revisi laporan</h1>
                                                    <textarea rows="3" class="inputText w-full resize-none bg-white px-3.5 py-2.5 md:px-4 md:py-3 border-[0.5px] border-[#D6D6D6] focus:border-[#D6D6D6] rounded-lg overflow-hidden focus:outline-none focus:ring-0 text-[#8B8B8B] text-[10px] md:text-xs font-normal"></textarea>
                                                </div>
                                                <div class="flex justify-center items-center gap-2 md:gap-3">
                                                    <button type="button" @click="modal = false" class="bg-[#FF4E4E] py-1.5 px-4 md:px-5 rounded">
                                                        <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Batal</h1>
                                                    </button>
                                                    <button class="bg-primary py-1.5 px-4 md:px-5 rounded">
                                                        <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Upload</h1>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-[#E8EDF2] text-xs text-black/70 capitalize overflow-visible">
                        <td class="font-normal my-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">4</td>
                        <td class="py-3.5 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                            <h1 class="line-clamp-1 font-normal">Undangan Sosialisasi</h1>
                        </td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                            <div class="select-none flex items-center gap-2 w-fit bg-[#483EA8] py-1.5 px-2 rounded-xl mx-auto">
                                <svg class="w-4" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.35641 0.589812C7.13538 0.303396 5.86463 0.303396 4.64359 0.589812C2.88026 1.00343 1.50343 2.38026 1.08981 4.14359C0.803396 5.36463 0.803396 6.63538 1.08981 7.85642C1.50344 9.61975 2.88026 10.9966 4.64359 11.4102C5.86463 11.6966 7.13538 11.6966 8.35641 11.4102C10.1197 10.9966 11.4966 9.61975 11.9102 7.85641C12.1966 6.63538 12.1966 5.36463 11.9102 4.1436C11.4966 2.38026 10.1197 1.00343 8.35641 0.589812ZM6.5 3.10678C6.77614 3.10678 6.99999 3.33064 6.99999 3.60678L6.99999 4.49584C6.99999 4.77198 6.77614 4.99584 6.49999 4.99584C6.22385 4.99584 5.99999 4.77198 5.99999 4.49584L5.99999 3.60678C5.99999 3.33064 6.22385 3.10678 6.5 3.10678ZM9.00559 4.55339C9.14367 4.79254 9.06173 5.09833 8.82258 5.2364L8.0527 5.6809C7.81355 5.81897 7.50775 5.73703 7.36968 5.49788C7.23161 5.25874 7.31355 4.95294 7.5527 4.81487L8.32258 4.37038C8.56173 4.23231 8.86752 4.31425 9.00559 4.55339ZM3.9944 4.55339C4.13247 4.31425 4.43826 4.23231 4.67741 4.37038L5.44735 4.81491C5.6865 4.95298 5.76844 5.25877 5.63037 5.49792C5.4923 5.73707 5.1865 5.81901 4.94735 5.68093L4.17741 5.23641C3.93826 5.09833 3.85632 4.79254 3.9944 4.55339ZM5.63037 6.50208C5.76844 6.74123 5.6865 7.04702 5.44735 7.18509L4.67741 7.62962C4.43826 7.76769 4.13247 7.68575 3.9944 7.44661C3.85632 7.20746 3.93826 6.90167 4.17741 6.7636L4.94735 6.31907C5.1865 6.181 5.4923 6.26293 5.63037 6.50208ZM7.36968 6.50212C7.50775 6.26297 7.81355 6.18103 8.0527 6.3191L8.82258 6.7636C9.06173 6.90167 9.14367 7.20746 9.00559 7.44661C8.86752 7.68575 8.56173 7.76769 8.32258 7.62962L7.5527 7.18513C7.31355 7.04706 7.23161 6.74126 7.36968 6.50212ZM6.49999 7.00423C6.77614 7.00423 6.99999 7.22809 6.99999 7.50423V8.39322C6.99999 8.66936 6.77614 8.89322 6.49999 8.89322C6.22385 8.89322 5.99999 8.66936 5.99999 8.39322V7.50423C5.99999 7.22809 6.22385 7.00423 6.49999 7.00423Z" fill="#CBC6FF"/>
                                </svg>                                        
                                <h1 class="text-[#CBC6FF] font-normal">Menunggu</h1>
                            </div>
                        </td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">04-09-2024</td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">07-09-2024</td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                            <div class="flex items-center gap-2 md:gap-3">
                                <a href="" class="flex items-center gap-2 w-fit bg-primary py-1.5 px-2 rounded-md mx-auto">
                                    <svg class="w-4 fill-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.25C9.92893 8.25 8.25 9.92893 8.25 12C8.25 14.0711 9.92893 15.75 12 15.75C14.0711 15.75 15.75 14.0711 15.75 12C15.75 9.92893 14.0711 8.25 12 8.25ZM9.75 12C9.75 10.7574 10.7574 9.75 12 9.75C13.2426 9.75 14.25 10.7574 14.25 12C14.25 13.2426 13.2426 14.25 12 14.25C10.7574 14.25 9.75 13.2426 9.75 12Z"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C7.48587 3.25 4.44529 5.9542 2.68057 8.24686L2.64874 8.2882C2.24964 8.80653 1.88206 9.28392 1.63269 9.8484C1.36564 10.4529 1.25 11.1117 1.25 12C1.25 12.8883 1.36564 13.5471 1.63269 14.1516C1.88206 14.7161 2.24964 15.1935 2.64875 15.7118L2.68057 15.7531C4.44529 18.0458 7.48587 20.75 12 20.75C16.5141 20.75 19.5547 18.0458 21.3194 15.7531L21.3512 15.7118C21.7504 15.1935 22.1179 14.7161 22.3673 14.1516C22.6344 13.5471 22.75 12.8883 22.75 12C22.75 11.1117 22.6344 10.4529 22.3673 9.8484C22.1179 9.28391 21.7504 8.80652 21.3512 8.28818L21.3194 8.24686C19.5547 5.9542 16.5141 3.25 12 3.25ZM3.86922 9.1618C5.49864 7.04492 8.15036 4.75 12 4.75C15.8496 4.75 18.5014 7.04492 20.1308 9.1618C20.5694 9.73159 20.8263 10.0721 20.9952 10.4545C21.1532 10.812 21.25 11.2489 21.25 12C21.25 12.7511 21.1532 13.188 20.9952 13.5455C20.8263 13.9279 20.5694 14.2684 20.1308 14.8382C18.5014 16.9551 15.8496 19.25 12 19.25C8.15036 19.25 5.49864 16.9551 3.86922 14.8382C3.43064 14.2684 3.17374 13.9279 3.00476 13.5455C2.84684 13.188 2.75 12.7511 2.75 12C2.75 11.2489 2.84684 10.812 3.00476 10.4545C3.17374 10.0721 3.43063 9.73159 3.86922 9.1618Z"/>
                                    </svg>
                                    <h1 class="text-white font-normal">Detail</h1>
                                </a>
                                <div x-data="{ modal: false }">
                                    <button type="button" @click="modal = !modal" class="flex items-center gap-2 w-fit bg-[#FA6D09] py-1.5 px-2 rounded-md mx-auto">
                                        <h1 class="text-white font-normal">Revisi</h1>
                                        <svg class="w-2.5 fill-white" viewBox="0 0 12 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.825 12.0375C0.55 11.5625 0.34375 11.075 0.20625 10.575C0.06875 10.075 0 9.5625 0 9.0375C0 7.3625 0.58125 5.9375 1.74375 4.7625C2.90625 3.5875 4.325 3 6 3H6.13125L4.93125 1.8L5.98125 0.75L8.98125 3.75L5.98125 6.75L4.93125 5.7L6.13125 4.5H6C4.75 4.5 3.6875 4.94063 2.8125 5.82188C1.9375 6.70313 1.5 7.775 1.5 9.0375C1.5 9.3625 1.5375 9.68125 1.6125 9.99375C1.6875 10.3062 1.8 10.6125 1.95 10.9125L0.825 12.0375ZM6.01875 17.25L3.01875 14.25L6.01875 11.25L7.06875 12.3L5.86875 13.5H6C7.25 13.5 8.3125 13.0594 9.1875 12.1781C10.0625 11.2969 10.5 10.225 10.5 8.9625C10.5 8.6375 10.4625 8.31875 10.3875 8.00625C10.3125 7.69375 10.2 7.3875 10.05 7.0875L11.175 5.9625C11.45 6.4375 11.6562 6.925 11.7938 7.425C11.9313 7.925 12 8.4375 12 8.9625C12 10.6375 11.4187 12.0625 10.2563 13.2375C9.09375 14.4125 7.675 15 6 15H5.86875L7.06875 16.2L6.01875 17.25Z"/>
                                        </svg>
                                    </button>
                                    <div x-show="modal" x-transition.duration.300ms.opacity.50 :class="{ 'visible': modal, 'invisible': !modal }" class="invisible fixed inset-0 z-50 bg-[#0000006E] flex items-center justify-center h-screen">
                                        <div class="w-[80%] sm:w-[60%] md:w-[40%] lg:w-[30%] bg-white rounded-lg md:rounded-xl">
                                            <div class="flex justify-between items-center border-b border-[#D1D1D1] py-2.5 px-3">
                                                <div class=""></div>
                                                <h1 class="text-sm md:text-base text-black font-semibold">Revisi Laporan</h1>
                                                <button type="button" @click="modal = false" type="button" class="bg-[#E8E8E8] p-2 rounded-full">
                                                    <svg class="w-3 fill-[#8B8B8B]" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.0204 1.68705C11.2157 1.49179 11.2157 1.1752 11.0204 0.979943C10.8251 0.784681 10.5086 0.784681 10.3133 0.979943L6.00017 5.29307L1.68705 0.979945C1.49179 0.784683 1.1752 0.784683 0.979943 0.979945C0.784681 1.17521 0.784681 1.49179 0.979943 1.68705L5.29306 6.00017L0.979961 10.3133C0.784699 10.5085 0.784699 10.8251 0.979961 11.0204C1.17522 11.2156 1.49181 11.2156 1.68707 11.0204L6.00017 6.70728L10.3133 11.0204C10.5085 11.2156 10.8251 11.2156 11.0204 11.0204C11.2156 10.8251 11.2156 10.5085 11.0204 10.3133L6.70728 6.00017L11.0204 1.68705Z"/>
                                                    </svg>
                                                </button>
                                            </div>
                                            <form action="" method="" class="pt-2.5 pb-3.5 px-5 space-y-8">
                                                <div class="space-y-3">
                                                    <h1 class="text-start text-xs md:text-sm text-black font-normal">Catatan revisi laporan</h1>
                                                    <textarea rows="3" class="inputText w-full resize-none bg-white px-3.5 py-2.5 md:px-4 md:py-3 border-[0.5px] border-[#D6D6D6] focus:border-[#D6D6D6] rounded-lg overflow-hidden focus:outline-none focus:ring-0 text-[#8B8B8B] text-[10px] md:text-xs font-normal"></textarea>
                                                </div>
                                                <div class="flex justify-center items-center gap-2 md:gap-3">
                                                    <button type="button" @click="modal = false" class="bg-[#FF4E4E] py-1.5 px-4 md:px-5 rounded">
                                                        <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Batal</h1>
                                                    </button>
                                                    <button class="bg-primary py-1.5 px-4 md:px-5 rounded">
                                                        <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Upload</h1>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </section>

            <section class="flex justify-center items-center gap-3">
                <button class="bg-primary py-1.5 px-4 rounded-md md:rounded-lg">
                    <h1 class="text-[10px] md:text-sm text-white font-semibold">Sebelumnya</h1>
                </button>
                <button class="hidden sm:block group transition-all py-1 px-3.5 focus:px-6 md:focus:px-8 focus:border-b focus:border-primary">
                    <h1 class="text-[10px] md:text-sm text-[#9B9B9B] transition-colors group-focus:text-primary font-semibold">1</h1>
                </button>
                <button class="py-1 px-6 md:px-8 border-b border-primary">
                    <h1 class="text-[10px] md:text-sm text-primary font-semibold">2</h1>
                </button>
                <button class="hidden sm:block group transition-all py-1 px-3.5 focus:px-6 md:focus:px-8 focus:border-b focus:border-primary">
                    <h1 class="text-[10px] md:text-sm text-[#9B9B9B] transition-colors group-focus:text-primary font-semibold">3</h1>
                </button>
                <button class="bg-primary py-1.5 px-4 rounded-md md:rounded-lg">
                    <h1 class="text-[10px] md:text-sm text-white font-semibold">Selanjutnya</h1>
                </button>
            </section>
        </section>
    </main>
</div>