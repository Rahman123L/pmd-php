<div x-show="window.innerWidth < 640 && isOpen" x-transition.opacity :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden fixed inset-0 bg-zinc-800 bg-opacity-80 z-40"></div>
<div x-data="{ isOpenn : true }">
    <?php include_once("../desa/layout/sidebar.php"); ?>

    <main :class="isOpenn ? 'md:ml-60' : 'md:ml-20 ' + 'transition-all duration-500'" class="relative md:ml-60 pt-16 p-5 space-y-4">
        <div class="flex justify-between items-center">
            <h1 class="text-base md:text-lg lg:text-xl text-black font-medium">Upload Revisi</h1>
            <h1 class="text-xs md:text-sm text-black font-medium"><span class="text-primary font-medium">Home</span> / Upload Revisi</h1>
        </div>
        <div x-data="fileUploader()" class="space-y-4">
            <form action="" method="" class="lg:flex items-start gap-2 md:gap-3">
                <label for="upload">
                    <div class="w-full sm:w-[70%] lg:w-full bg-[#F9F3ED] border-[1.5px] border-dashed border-[#384EB74D] p-10 space-y-2 rounded md:rounded-md cursor-pointer">
                        <img class="w-16 md:w-20 h-16 md:h-20 mx-auto" src="/svgs/upload.svg">
                        <div class="text-center space-y-1">
                            <h1 class="text-xs md:text-sm text-[#0F0F0F] font-bold">Drag & drop files or 
                                <span class="text-[#178E3B] font-bold underline">Browse</span>
                            </h1>
                            <p class="text-[10px] md:text-xs text-[#676767] font-normal">Format harus .pdf</p>
                        </div>
                    </div>
                    <input @change="handleFileUpload($event)" class="hidden" type="file" id="upload" multiple>
                </label>
        
                <div class="space-y-2">
                    <template x-if="files.length > 0">
                        <div class="space-y-2">
                            <h1 class="text-xs md:text-sm text-[#676767] font-semibold">Mengunggah file - <span x-text="files.length + ' files'"></span></h1>
            
                            <template x-for="(file, index) in files" :key="index">
                                <div x-show="!file.isValid" class="space-y-1">
                                    <div class="flex justify-between items-center gap-2 md:gap-3 bg-[#F9F3ED] border-[0.5px] border-[#E41D1D] py-1.5 px-3 rounded">
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
                                    <div class="flex justify-between items-center gap-2 md:gap-3 bg-[#F9F3ED] border-[0.5px] border-[#11AF22] py-0.5 px-3 rounded">
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
                    <button type="submit" x-show="files.length > 0" x-data="{ status() { return this.files.length === 0 ? false : this.files.every(file => file.isValid); } }"
                        x-init="$watch('files', () => { $el.disabled = !status(); })"
                        :disabled="!status()"
                        :class="{ 'bg-primary cursor-pointer': status(), 'bg-gray-500 cursor-not-allowed': !status() }"
                        class="py-1.5 px-4 md:px-5 rounded">
                        <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Upload</h1>
                    </button>
                </div>
            </form>
        </div>
    </main>
</div>