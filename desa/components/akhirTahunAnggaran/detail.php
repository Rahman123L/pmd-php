<div x-show="window.innerWidth < 640 && isOpen" x-transition.opacity :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden fixed inset-0 bg-zinc-800 bg-opacity-80 z-40"></div>
<div x-data="{ isOpenn : true }">
    <?php include_once("../desa/layout/sidebar.php"); ?>

    <main :class="isOpenn ? 'md:ml-60' : 'md:ml-20 ' + 'transition-all duration-500'" class="relative md:ml-60 pt-16 p-5 space-y-4">
        <div class="flex justify-between items-center">
            <h1 class="text-base md:text-lg lg:text-xl text-black font-medium">Akhir Tahun Anggaran</h1>
            <h1 class="text-xs md:text-sm text-black font-medium"><span class="text-primary font-medium">Home</span> / Akhir Tahun Anggaran</h1>
        </div>

        <section class="scrollbar-x bg-transparent rounded md:rounded-md">
            <table class="w-max lg:w-full mx-auto bg-white text-center table-auto">
                <tr class="text-[10px] md:text-xs text-black capitalize">
                    <th class="w-[5%] bg-white font-normal py-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">No</th>
                    <th class="w-[30%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Nama file</th>
                    <th class="w-[30%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Status</th>
                    <th class="w-[15%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Tindakan</th>
                </tr>
                <tr class="odd:bg-white even:bg-[#F5F5F5] text-xs text-black/70 capitalize overflow-visible">
                    <td class="font-normal my-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">1</td>
                    <td class="py-3.5 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                        <h1 class="line-clamp-1 font-normal">laporan berkas</h1>
                    </td>
                    <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                        <div class="select-none flex items-center gap-2 w-fit bg-[#CEFFE8] py-1.5 px-2 rounded-xl mx-auto">
                            <svg class="w-4" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.0501 11.45L12.3376 6.1625L11.2876 5.1125L7.0501 9.35L4.9126 7.2125L3.8626 8.2625L7.0501 11.45ZM8.1001 15.5C7.0626 15.5 6.0876 15.3031 5.1751 14.9094C4.2626 14.5156 3.46885 13.9813 2.79385 13.3063C2.11885 12.6313 1.58447 11.8375 1.19072 10.925C0.796973 10.0125 0.600098 9.0375 0.600098 8C0.600098 6.9625 0.796973 5.9875 1.19072 5.075C1.58447 4.1625 2.11885 3.36875 2.79385 2.69375C3.46885 2.01875 4.2626 1.48438 5.1751 1.09063C6.0876 0.696875 7.0626 0.5 8.1001 0.5C9.1376 0.5 10.1126 0.696875 11.0251 1.09063C11.9376 1.48438 12.7313 2.01875 13.4063 2.69375C14.0813 3.36875 14.6157 4.1625 15.0095 5.075C15.4032 5.9875 15.6001 6.9625 15.6001 8C15.6001 9.0375 15.4032 10.0125 15.0095 10.925C14.6157 11.8375 14.0813 12.6313 13.4063 13.3063C12.7313 13.9813 11.9376 14.5156 11.0251 14.9094C10.1126 15.3031 9.1376 15.5 8.1001 15.5Z" fill="#059669"/>
                            </svg>
                            <h1 class="text-[#059669] font-normal">Sukses</h1>
                        </div>
                    </td>
                    <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                        <div class="flex justify-center items-center gap-1.5 md:gap-2">
                            <button class="flex items-center gap-2 w-fit bg-primary py-1.5 px-2 rounded-md">
                                <svg class="w-4 fill-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.25C9.92893 8.25 8.25 9.92893 8.25 12C8.25 14.0711 9.92893 15.75 12 15.75C14.0711 15.75 15.75 14.0711 15.75 12C15.75 9.92893 14.0711 8.25 12 8.25ZM9.75 12C9.75 10.7574 10.7574 9.75 12 9.75C13.2426 9.75 14.25 10.7574 14.25 12C14.25 13.2426 13.2426 14.25 12 14.25C10.7574 14.25 9.75 13.2426 9.75 12Z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C7.48587 3.25 4.44529 5.9542 2.68057 8.24686L2.64874 8.2882C2.24964 8.80653 1.88206 9.28392 1.63269 9.8484C1.36564 10.4529 1.25 11.1117 1.25 12C1.25 12.8883 1.36564 13.5471 1.63269 14.1516C1.88206 14.7161 2.24964 15.1935 2.64875 15.7118L2.68057 15.7531C4.44529 18.0458 7.48587 20.75 12 20.75C16.5141 20.75 19.5547 18.0458 21.3194 15.7531L21.3512 15.7118C21.7504 15.1935 22.1179 14.7161 22.3673 14.1516C22.6344 13.5471 22.75 12.8883 22.75 12C22.75 11.1117 22.6344 10.4529 22.3673 9.8484C22.1179 9.28391 21.7504 8.80652 21.3512 8.28818L21.3194 8.24686C19.5547 5.9542 16.5141 3.25 12 3.25ZM3.86922 9.1618C5.49864 7.04492 8.15036 4.75 12 4.75C15.8496 4.75 18.5014 7.04492 20.1308 9.1618C20.5694 9.73159 20.8263 10.0721 20.9952 10.4545C21.1532 10.812 21.25 11.2489 21.25 12C21.25 12.7511 21.1532 13.188 20.9952 13.5455C20.8263 13.9279 20.5694 14.2684 20.1308 14.8382C18.5014 16.9551 15.8496 19.25 12 19.25C8.15036 19.25 5.49864 16.9551 3.86922 14.8382C3.43064 14.2684 3.17374 13.9279 3.00476 13.5455C2.84684 13.188 2.75 12.7511 2.75 12C2.75 11.2489 2.84684 10.812 3.00476 10.4545C3.17374 10.0721 3.43063 9.73159 3.86922 9.1618Z"/>
                                </svg>
                                <h1 class="text-white font-normal">LihatPDF</h1>
                            </button>
                            <div x-data="{ modal: false }">
                                <button type="button" @click="modal = !modal" disabled class="cursor-not-allowed flex items-center gap-2 w-fit bg-[#BBC0C9] py-1.5 px-2 rounded-md mx-auto">
                                    <svg class="w-4 fill-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.25C9.92893 8.25 8.25 9.92893 8.25 12C8.25 14.0711 9.92893 15.75 12 15.75C14.0711 15.75 15.75 14.0711 15.75 12C15.75 9.92893 14.0711 8.25 12 8.25ZM9.75 12C9.75 10.7574 10.7574 9.75 12 9.75C13.2426 9.75 14.25 10.7574 14.25 12C14.25 13.2426 13.2426 14.25 12 14.25C10.7574 14.25 9.75 13.2426 9.75 12Z"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C7.48587 3.25 4.44529 5.9542 2.68057 8.24686L2.64874 8.2882C2.24964 8.80653 1.88206 9.28392 1.63269 9.8484C1.36564 10.4529 1.25 11.1117 1.25 12C1.25 12.8883 1.36564 13.5471 1.63269 14.1516C1.88206 14.7161 2.24964 15.1935 2.64875 15.7118L2.68057 15.7531C4.44529 18.0458 7.48587 20.75 12 20.75C16.5141 20.75 19.5547 18.0458 21.3194 15.7531L21.3512 15.7118C21.7504 15.1935 22.1179 14.7161 22.3673 14.1516C22.6344 13.5471 22.75 12.8883 22.75 12C22.75 11.1117 22.6344 10.4529 22.3673 9.8484C22.1179 9.28391 21.7504 8.80652 21.3512 8.28818L21.3194 8.24686C19.5547 5.9542 16.5141 3.25 12 3.25ZM3.86922 9.1618C5.49864 7.04492 8.15036 4.75 12 4.75C15.8496 4.75 18.5014 7.04492 20.1308 9.1618C20.5694 9.73159 20.8263 10.0721 20.9952 10.4545C21.1532 10.812 21.25 11.2489 21.25 12C21.25 12.7511 21.1532 13.188 20.9952 13.5455C20.8263 13.9279 20.5694 14.2684 20.1308 14.8382C18.5014 16.9551 15.8496 19.25 12 19.25C8.15036 19.25 5.49864 16.9551 3.86922 14.8382C3.43064 14.2684 3.17374 13.9279 3.00476 13.5455C2.84684 13.188 2.75 12.7511 2.75 12C2.75 11.2489 2.84684 10.812 3.00476 10.4545C3.17374 10.0721 3.43063 9.73159 3.86922 9.1618Z"/>
                                    </svg>
                                    <h1 class="text-white font-normal">Catatan</h1>
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
                            <a href="/desa/upload.php">
                                <button disabled class="cursor-not-allowed flex items-center gap-2 w-fit bg-[#BBC0C9] py-1.5 px-2 rounded-md">
                                    <svg class="w-3 fill-white" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.53125 9.20898C5.53125 9.46787 5.74112 9.67773 6 9.67773C6.25888 9.67773 6.46875 9.46787 6.46875 9.20898L6.46875 4.20898H7.875C8.45563 4.20898 8.74594 4.20898 8.98886 4.24746C10.326 4.45924 11.3747 5.50796 11.5865 6.84513C11.625 7.08804 11.625 7.37836 11.625 7.95898C11.625 8.53961 11.625 8.82993 11.5865 9.07284C11.3747 10.41 10.326 11.4587 8.98886 11.6705C8.74594 11.709 8.45563 11.709 7.875 11.709H4.125C3.54437 11.709 3.25406 11.709 3.01114 11.6705C1.67398 11.4587 0.62526 10.41 0.413474 9.07284C0.375 8.82993 0.375 8.53961 0.375 7.95898C0.375 7.37836 0.375 7.08804 0.413474 6.84513C0.62526 5.50796 1.67398 4.45924 3.01114 4.24746C3.25406 4.20898 3.54437 4.20898 4.125 4.20898H5.53125L5.53125 9.20898ZM5.53125 4.20898L5.53125 1.20243C5.32959 1.40709 5.08984 1.70834 4.74096 2.14836L3.8673 3.25022C3.70646 3.45307 3.41162 3.48713 3.20877 3.32629C3.00591 3.16544 2.97186 2.87061 3.1327 2.66775L4.0241 1.54351C4.35734 1.12321 4.63232 0.776383 4.87845 0.529309C5.13102 0.275763 5.41135 0.0655805 5.76958 0.00850436C5.8459 -0.00365498 5.92288 -0.00976563 6 -0.00976562C6.07712 -0.00976562 6.1541 -0.00365554 6.23042 0.00850381C6.58865 0.0655795 6.86898 0.275763 7.12155 0.529308C7.36768 0.776382 7.64266 1.1232 7.97589 1.5435L8.8673 2.66775C9.02814 2.87061 8.99409 3.16544 8.79123 3.32629C8.58838 3.48713 8.29354 3.45307 8.1327 3.25022L7.25904 2.14836C6.91016 1.70834 6.67041 1.40709 6.46875 1.20243L6.46875 4.20898H5.53125Z"/>
                                    </svg>
                                    <h1 class="text-white font-normal">UploadRevisi</h1>
                                </button>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr class="odd:bg-white even:bg-[#F5F5F5] text-xs text-black/70 capitalize overflow-visible">
                    <td class="font-normal my-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">2</td>
                    <td class="py-3.5 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                        <h1 class="line-clamp-1 font-normal">laporan berkas</h1>
                    </td>
                    <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                        <div class="select-none flex items-center gap-2 w-fit bg-[#FFCCCC] py-1.5 px-2 rounded-xl mx-auto">
                            <svg class="w-4" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.4001 11.75L8.1001 9.05L10.8001 11.75L11.8501 10.7L9.1501 8L11.8501 5.3L10.8001 4.25L8.1001 6.95L5.4001 4.25L4.3501 5.3L7.0501 8L4.3501 10.7L5.4001 11.75ZM8.1001 15.5C7.0626 15.5 6.0876 15.3031 5.1751 14.9094C4.2626 14.5156 3.46885 13.9813 2.79385 13.3063C2.11885 12.6313 1.58447 11.8375 1.19072 10.925C0.796973 10.0125 0.600098 9.0375 0.600098 8C0.600098 6.9625 0.796973 5.9875 1.19072 5.075C1.58447 4.1625 2.11885 3.36875 2.79385 2.69375C3.46885 2.01875 4.2626 1.48438 5.1751 1.09063C6.0876 0.696875 7.0626 0.5 8.1001 0.5C9.1376 0.5 10.1126 0.696875 11.0251 1.09063C11.9376 1.48438 12.7313 2.01875 13.4063 2.69375C14.0813 3.36875 14.6157 4.1625 15.0095 5.075C15.4032 5.9875 15.6001 6.9625 15.6001 8C15.6001 9.0375 15.4032 10.0125 15.0095 10.925C14.6157 11.8375 14.0813 12.6313 13.4063 13.3063C12.7313 13.9813 11.9376 14.5156 11.0251 14.9094C10.1126 15.3031 9.1376 15.5 8.1001 15.5Z" fill="#DC2626"/>
                            </svg>
                            <h1 class="text-[#DC2626] font-normal">Revisi</h1>
                        </div>
                    </td>
                    <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                        <div class="flex justify-center items-center gap-1.5 md:gap-2">
                            <button class="flex items-center gap-2 w-fit bg-primary py-1.5 px-2 rounded-md">
                                <svg class="w-4 fill-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.25C9.92893 8.25 8.25 9.92893 8.25 12C8.25 14.0711 9.92893 15.75 12 15.75C14.0711 15.75 15.75 14.0711 15.75 12C15.75 9.92893 14.0711 8.25 12 8.25ZM9.75 12C9.75 10.7574 10.7574 9.75 12 9.75C13.2426 9.75 14.25 10.7574 14.25 12C14.25 13.2426 13.2426 14.25 12 14.25C10.7574 14.25 9.75 13.2426 9.75 12Z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C7.48587 3.25 4.44529 5.9542 2.68057 8.24686L2.64874 8.2882C2.24964 8.80653 1.88206 9.28392 1.63269 9.8484C1.36564 10.4529 1.25 11.1117 1.25 12C1.25 12.8883 1.36564 13.5471 1.63269 14.1516C1.88206 14.7161 2.24964 15.1935 2.64875 15.7118L2.68057 15.7531C4.44529 18.0458 7.48587 20.75 12 20.75C16.5141 20.75 19.5547 18.0458 21.3194 15.7531L21.3512 15.7118C21.7504 15.1935 22.1179 14.7161 22.3673 14.1516C22.6344 13.5471 22.75 12.8883 22.75 12C22.75 11.1117 22.6344 10.4529 22.3673 9.8484C22.1179 9.28391 21.7504 8.80652 21.3512 8.28818L21.3194 8.24686C19.5547 5.9542 16.5141 3.25 12 3.25ZM3.86922 9.1618C5.49864 7.04492 8.15036 4.75 12 4.75C15.8496 4.75 18.5014 7.04492 20.1308 9.1618C20.5694 9.73159 20.8263 10.0721 20.9952 10.4545C21.1532 10.812 21.25 11.2489 21.25 12C21.25 12.7511 21.1532 13.188 20.9952 13.5455C20.8263 13.9279 20.5694 14.2684 20.1308 14.8382C18.5014 16.9551 15.8496 19.25 12 19.25C8.15036 19.25 5.49864 16.9551 3.86922 14.8382C3.43064 14.2684 3.17374 13.9279 3.00476 13.5455C2.84684 13.188 2.75 12.7511 2.75 12C2.75 11.2489 2.84684 10.812 3.00476 10.4545C3.17374 10.0721 3.43063 9.73159 3.86922 9.1618Z"/>
                                </svg>
                                <h1 class="text-white font-normal">LihatPDF</h1>
                            </button>
                            <div x-data="{ modal: false }">
                                <button type="button" @click="modal = !modal" class="flex items-center gap-2 w-fit bg-[#FA6D09] py-1.5 px-2 rounded-md mx-auto">
                                    <svg class="w-4 fill-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.25C9.92893 8.25 8.25 9.92893 8.25 12C8.25 14.0711 9.92893 15.75 12 15.75C14.0711 15.75 15.75 14.0711 15.75 12C15.75 9.92893 14.0711 8.25 12 8.25ZM9.75 12C9.75 10.7574 10.7574 9.75 12 9.75C13.2426 9.75 14.25 10.7574 14.25 12C14.25 13.2426 13.2426 14.25 12 14.25C10.7574 14.25 9.75 13.2426 9.75 12Z"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C7.48587 3.25 4.44529 5.9542 2.68057 8.24686L2.64874 8.2882C2.24964 8.80653 1.88206 9.28392 1.63269 9.8484C1.36564 10.4529 1.25 11.1117 1.25 12C1.25 12.8883 1.36564 13.5471 1.63269 14.1516C1.88206 14.7161 2.24964 15.1935 2.64875 15.7118L2.68057 15.7531C4.44529 18.0458 7.48587 20.75 12 20.75C16.5141 20.75 19.5547 18.0458 21.3194 15.7531L21.3512 15.7118C21.7504 15.1935 22.1179 14.7161 22.3673 14.1516C22.6344 13.5471 22.75 12.8883 22.75 12C22.75 11.1117 22.6344 10.4529 22.3673 9.8484C22.1179 9.28391 21.7504 8.80652 21.3512 8.28818L21.3194 8.24686C19.5547 5.9542 16.5141 3.25 12 3.25ZM3.86922 9.1618C5.49864 7.04492 8.15036 4.75 12 4.75C15.8496 4.75 18.5014 7.04492 20.1308 9.1618C20.5694 9.73159 20.8263 10.0721 20.9952 10.4545C21.1532 10.812 21.25 11.2489 21.25 12C21.25 12.7511 21.1532 13.188 20.9952 13.5455C20.8263 13.9279 20.5694 14.2684 20.1308 14.8382C18.5014 16.9551 15.8496 19.25 12 19.25C8.15036 19.25 5.49864 16.9551 3.86922 14.8382C3.43064 14.2684 3.17374 13.9279 3.00476 13.5455C2.84684 13.188 2.75 12.7511 2.75 12C2.75 11.2489 2.84684 10.812 3.00476 10.4545C3.17374 10.0721 3.43063 9.73159 3.86922 9.1618Z"/>
                                    </svg>
                                    <h1 class="text-white font-normal">Catatan</h1>
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
                            <a href="/desa/upload.php">
                                <button class="flex items-center gap-2 w-fit bg-[#25D366] py-1.5 px-2 rounded-md">
                                    <svg class="w-3 fill-[#DCF8C6]" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.53125 9.20898C5.53125 9.46787 5.74112 9.67773 6 9.67773C6.25888 9.67773 6.46875 9.46787 6.46875 9.20898L6.46875 4.20898H7.875C8.45563 4.20898 8.74594 4.20898 8.98886 4.24746C10.326 4.45924 11.3747 5.50796 11.5865 6.84513C11.625 7.08804 11.625 7.37836 11.625 7.95898C11.625 8.53961 11.625 8.82993 11.5865 9.07284C11.3747 10.41 10.326 11.4587 8.98886 11.6705C8.74594 11.709 8.45563 11.709 7.875 11.709H4.125C3.54437 11.709 3.25406 11.709 3.01114 11.6705C1.67398 11.4587 0.62526 10.41 0.413474 9.07284C0.375 8.82993 0.375 8.53961 0.375 7.95898C0.375 7.37836 0.375 7.08804 0.413474 6.84513C0.62526 5.50796 1.67398 4.45924 3.01114 4.24746C3.25406 4.20898 3.54437 4.20898 4.125 4.20898H5.53125L5.53125 9.20898ZM5.53125 4.20898L5.53125 1.20243C5.32959 1.40709 5.08984 1.70834 4.74096 2.14836L3.8673 3.25022C3.70646 3.45307 3.41162 3.48713 3.20877 3.32629C3.00591 3.16544 2.97186 2.87061 3.1327 2.66775L4.0241 1.54351C4.35734 1.12321 4.63232 0.776383 4.87845 0.529309C5.13102 0.275763 5.41135 0.0655805 5.76958 0.00850436C5.8459 -0.00365498 5.92288 -0.00976563 6 -0.00976562C6.07712 -0.00976562 6.1541 -0.00365554 6.23042 0.00850381C6.58865 0.0655795 6.86898 0.275763 7.12155 0.529308C7.36768 0.776382 7.64266 1.1232 7.97589 1.5435L8.8673 2.66775C9.02814 2.87061 8.99409 3.16544 8.79123 3.32629C8.58838 3.48713 8.29354 3.45307 8.1327 3.25022L7.25904 2.14836C6.91016 1.70834 6.67041 1.40709 6.46875 1.20243L6.46875 4.20898H5.53125Z"/>
                                    </svg>
                                    <h1 class="text-[#DCF8C6] font-normal">UploadRevisi</h1>
                                </button>
                            </a>
                        </div>
                    </td>
                </tr>
            </table>
        </section>
    </main>
</div>