<div x-data="{ isOpen : false }" class="space-y-3">
    <div class="md:flex items-center gap-3 space-y-1 md:space-y-0">
        <h1 class="text-sm md:text-base text-black font-normal">Evaluasi Rencana Kerja Pemerintah Desa</h1>
        <button @click="isOpen = !isOpen" class="flex items-center gap-2 bg-primary py-1.5 px-2 rounded-md">
            <svg class="w-3.5 stroke-white" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.60005 15.2007H3.10004C2.10593 15.2007 1.30004 14.3948 1.30005 13.4007L1.30012 2.60077C1.30012 1.60666 2.10601 0.800781 3.10012 0.800781H11.2003C12.1944 0.800781 13.0003 1.60667 13.0003 2.60078V6.20078M12.55 12.0125V11.9651M4.45033 4.40078H9.85033M4.45033 7.10078H9.85033M4.45033 9.80078H7.15033M15.7 12.0508C15.7 12.0508 14.9529 14.2555 12.55 14.217C10.1472 14.1785 9.40005 12.0508 9.40005 12.0508C9.40005 12.0508 10.1169 9.80752 12.55 9.80752C14.9832 9.80752 15.7 12.0508 15.7 12.0508Z" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <h1 class="text-xs md:text-sm text-[#E8EDF2] font-normal">LihatPDF</h1>
            <svg class="w-[6px]" viewBox="0 0 6 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.99999 4L0 0H6L2.99999 4Z" fill="white"/>
            </svg>
        </button>
    </div>
    <div x-show="isOpen" @click.outside="isOpen = false" x-transition.duration.300ms.opacity.50 :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden">
        <section class="scrollbar-x bg-transparent rounded md:rounded-md">
            <table class="w-full sm:w-[70%] bg-white text-center table-auto">
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
                            <button class="flex items-center gap-2 w-fit bg-secondary py-1.5 px-2 rounded-md">
                                <svg class="w-4 fill-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.25C9.92893 8.25 8.25 9.92893 8.25 12C8.25 14.0711 9.92893 15.75 12 15.75C14.0711 15.75 15.75 14.0711 15.75 12C15.75 9.92893 14.0711 8.25 12 8.25ZM9.75 12C9.75 10.7574 10.7574 9.75 12 9.75C13.2426 9.75 14.25 10.7574 14.25 12C14.25 13.2426 13.2426 14.25 12 14.25C10.7574 14.25 9.75 13.2426 9.75 12Z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C7.48587 3.25 4.44529 5.9542 2.68057 8.24686L2.64874 8.2882C2.24964 8.80653 1.88206 9.28392 1.63269 9.8484C1.36564 10.4529 1.25 11.1117 1.25 12C1.25 12.8883 1.36564 13.5471 1.63269 14.1516C1.88206 14.7161 2.24964 15.1935 2.64875 15.7118L2.68057 15.7531C4.44529 18.0458 7.48587 20.75 12 20.75C16.5141 20.75 19.5547 18.0458 21.3194 15.7531L21.3512 15.7118C21.7504 15.1935 22.1179 14.7161 22.3673 14.1516C22.6344 13.5471 22.75 12.8883 22.75 12C22.75 11.1117 22.6344 10.4529 22.3673 9.8484C22.1179 9.28391 21.7504 8.80652 21.3512 8.28818L21.3194 8.24686C19.5547 5.9542 16.5141 3.25 12 3.25ZM3.86922 9.1618C5.49864 7.04492 8.15036 4.75 12 4.75C15.8496 4.75 18.5014 7.04492 20.1308 9.1618C20.5694 9.73159 20.8263 10.0721 20.9952 10.4545C21.1532 10.812 21.25 11.2489 21.25 12C21.25 12.7511 21.1532 13.188 20.9952 13.5455C20.8263 13.9279 20.5694 14.2684 20.1308 14.8382C18.5014 16.9551 15.8496 19.25 12 19.25C8.15036 19.25 5.49864 16.9551 3.86922 14.8382C3.43064 14.2684 3.17374 13.9279 3.00476 13.5455C2.84684 13.188 2.75 12.7511 2.75 12C2.75 11.2489 2.84684 10.812 3.00476 10.4545C3.17374 10.0721 3.43063 9.73159 3.86922 9.1618Z"/>
                                </svg>
                                <h1 class="text-white font-normal">Lihat</h1>
                            </button>
                            <button class="flex items-center gap-2 w-fit bg-primary py-1.5 px-2 rounded-md">
                                <svg class="w-3" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.96875 0.708496C6.96875 0.449613 6.75888 0.239746 6.5 0.239746C6.24112 0.239746 6.03125 0.449613 6.03125 0.708496V4.4585H4.625C4.04437 4.4585 3.75406 4.4585 3.51114 4.49697C2.17398 4.70876 1.12526 5.75747 0.913474 7.09464C0.875 7.33755 0.875 7.62787 0.875 8.2085C0.875 8.78912 0.875 9.07944 0.913474 9.32235C1.12526 10.6595 2.17398 11.7082 3.51114 11.92C3.75406 11.9585 4.04437 11.9585 4.625 11.9585H8.375C8.95563 11.9585 9.24594 11.9585 9.48886 11.92C10.826 11.7082 11.8747 10.6595 12.0865 9.32235C12.125 9.07944 12.125 8.78912 12.125 8.2085C12.125 7.62787 12.125 7.33755 12.0865 7.09464C11.8747 5.75747 10.826 4.70876 9.48886 4.49697C9.24594 4.4585 8.95563 4.4585 8.375 4.4585H6.96875V0.708496ZM6.96875 4.4585H6.03125V8.71505C5.82959 8.51039 5.58984 8.20914 5.24096 7.76912L4.3673 6.66726C4.20646 6.46441 3.91162 6.43035 3.70877 6.59119C3.50591 6.75204 3.47186 7.04687 3.6327 7.24973L4.52411 8.37398C4.85735 8.79428 5.13232 9.1411 5.37845 9.38817C5.63102 9.64172 5.91135 9.8519 6.26958 9.90898C6.3459 9.92113 6.42288 9.92725 6.5 9.92725C6.57712 9.92725 6.6541 9.92114 6.73042 9.90898C7.08865 9.8519 7.36899 9.64172 7.62155 9.38817C7.86768 9.1411 8.14266 8.79428 8.4759 8.37397L9.3673 7.24973C9.52814 7.04687 9.49409 6.75204 9.29123 6.59119C9.08838 6.43035 8.79354 6.46441 8.6327 6.66726L7.75904 7.76912C7.41016 8.20914 7.17041 8.51039 6.96875 8.71505V4.4585Z" fill="white"/>
                                </svg>
                                <h1 class="text-white font-normal">Download</h1>
                            </button>
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
                    <td class="font-normal my-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">1</td>
                    <td class="py-3.5 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                        <h1 class="line-clamp-1 font-normal">laporan berkas</h1>
                    </td>
                    <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">
                        <div class="select-none flex items-center gap-2 w-fit bg-[#483EA8] py-1.5 px-2 rounded-xl mx-auto">
                            <svg class="w-4" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.35641 0.589812C7.13538 0.303396 5.86463 0.303396 4.64359 0.589812C2.88026 1.00343 1.50343 2.38026 1.08981 4.14359C0.803396 5.36463 0.803396 6.63538 1.08981 7.85642C1.50344 9.61975 2.88026 10.9966 4.64359 11.4102C5.86463 11.6966 7.13538 11.6966 8.35641 11.4102C10.1197 10.9966 11.4966 9.61975 11.9102 7.85641C12.1966 6.63538 12.1966 5.36463 11.9102 4.1436C11.4966 2.38026 10.1197 1.00343 8.35641 0.589812ZM6.5 3.10678C6.77614 3.10678 6.99999 3.33064 6.99999 3.60678L6.99999 4.49584C6.99999 4.77198 6.77614 4.99584 6.49999 4.99584C6.22385 4.99584 5.99999 4.77198 5.99999 4.49584L5.99999 3.60678C5.99999 3.33064 6.22385 3.10678 6.5 3.10678ZM9.00559 4.55339C9.14367 4.79254 9.06173 5.09833 8.82258 5.2364L8.0527 5.6809C7.81355 5.81897 7.50775 5.73703 7.36968 5.49788C7.23161 5.25874 7.31355 4.95294 7.5527 4.81487L8.32258 4.37038C8.56173 4.23231 8.86752 4.31425 9.00559 4.55339ZM3.9944 4.55339C4.13247 4.31425 4.43826 4.23231 4.67741 4.37038L5.44735 4.81491C5.6865 4.95298 5.76844 5.25877 5.63037 5.49792C5.4923 5.73707 5.1865 5.81901 4.94735 5.68093L4.17741 5.23641C3.93826 5.09833 3.85632 4.79254 3.9944 4.55339ZM5.63037 6.50208C5.76844 6.74123 5.6865 7.04702 5.44735 7.18509L4.67741 7.62962C4.43826 7.76769 4.13247 7.68575 3.9944 7.44661C3.85632 7.20746 3.93826 6.90167 4.17741 6.7636L4.94735 6.31907C5.1865 6.181 5.4923 6.26293 5.63037 6.50208ZM7.36968 6.50212C7.50775 6.26297 7.81355 6.18103 8.0527 6.3191L8.82258 6.7636C9.06173 6.90167 9.14367 7.20746 9.00559 7.44661C8.86752 7.68575 8.56173 7.76769 8.32258 7.62962L7.5527 7.18513C7.31355 7.04706 7.23161 6.74126 7.36968 6.50212ZM6.49999 7.00423C6.77614 7.00423 6.99999 7.22809 6.99999 7.50423V8.39322C6.99999 8.66936 6.77614 8.89322 6.49999 8.89322C6.22385 8.89322 5.99999 8.66936 5.99999 8.39322V7.50423C5.99999 7.22809 6.22385 7.00423 6.49999 7.00423Z" fill="#CBC6FF"/>
                            </svg>
                            <h1 class="text-[#CBC6FF] font-normal">Menunggu</h1>
                        </div>
                    </td>
                    <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                        <div class="flex justify-center items-center gap-1.5 md:gap-2">
                            <button class="flex items-center gap-2 w-fit bg-secondary py-1.5 px-2 rounded-md">
                                <svg class="w-4 fill-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.25C9.92893 8.25 8.25 9.92893 8.25 12C8.25 14.0711 9.92893 15.75 12 15.75C14.0711 15.75 15.75 14.0711 15.75 12C15.75 9.92893 14.0711 8.25 12 8.25ZM9.75 12C9.75 10.7574 10.7574 9.75 12 9.75C13.2426 9.75 14.25 10.7574 14.25 12C14.25 13.2426 13.2426 14.25 12 14.25C10.7574 14.25 9.75 13.2426 9.75 12Z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C7.48587 3.25 4.44529 5.9542 2.68057 8.24686L2.64874 8.2882C2.24964 8.80653 1.88206 9.28392 1.63269 9.8484C1.36564 10.4529 1.25 11.1117 1.25 12C1.25 12.8883 1.36564 13.5471 1.63269 14.1516C1.88206 14.7161 2.24964 15.1935 2.64875 15.7118L2.68057 15.7531C4.44529 18.0458 7.48587 20.75 12 20.75C16.5141 20.75 19.5547 18.0458 21.3194 15.7531L21.3512 15.7118C21.7504 15.1935 22.1179 14.7161 22.3673 14.1516C22.6344 13.5471 22.75 12.8883 22.75 12C22.75 11.1117 22.6344 10.4529 22.3673 9.8484C22.1179 9.28391 21.7504 8.80652 21.3512 8.28818L21.3194 8.24686C19.5547 5.9542 16.5141 3.25 12 3.25ZM3.86922 9.1618C5.49864 7.04492 8.15036 4.75 12 4.75C15.8496 4.75 18.5014 7.04492 20.1308 9.1618C20.5694 9.73159 20.8263 10.0721 20.9952 10.4545C21.1532 10.812 21.25 11.2489 21.25 12C21.25 12.7511 21.1532 13.188 20.9952 13.5455C20.8263 13.9279 20.5694 14.2684 20.1308 14.8382C18.5014 16.9551 15.8496 19.25 12 19.25C8.15036 19.25 5.49864 16.9551 3.86922 14.8382C3.43064 14.2684 3.17374 13.9279 3.00476 13.5455C2.84684 13.188 2.75 12.7511 2.75 12C2.75 11.2489 2.84684 10.812 3.00476 10.4545C3.17374 10.0721 3.43063 9.73159 3.86922 9.1618Z"/>
                                </svg>
                                <h1 class="text-white font-normal">Lihat</h1>
                            </button>
                            <button class="flex items-center gap-2 w-fit bg-primary py-1.5 px-2 rounded-md">
                                <svg class="w-3" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.96875 0.708496C6.96875 0.449613 6.75888 0.239746 6.5 0.239746C6.24112 0.239746 6.03125 0.449613 6.03125 0.708496V4.4585H4.625C4.04437 4.4585 3.75406 4.4585 3.51114 4.49697C2.17398 4.70876 1.12526 5.75747 0.913474 7.09464C0.875 7.33755 0.875 7.62787 0.875 8.2085C0.875 8.78912 0.875 9.07944 0.913474 9.32235C1.12526 10.6595 2.17398 11.7082 3.51114 11.92C3.75406 11.9585 4.04437 11.9585 4.625 11.9585H8.375C8.95563 11.9585 9.24594 11.9585 9.48886 11.92C10.826 11.7082 11.8747 10.6595 12.0865 9.32235C12.125 9.07944 12.125 8.78912 12.125 8.2085C12.125 7.62787 12.125 7.33755 12.0865 7.09464C11.8747 5.75747 10.826 4.70876 9.48886 4.49697C9.24594 4.4585 8.95563 4.4585 8.375 4.4585H6.96875V0.708496ZM6.96875 4.4585H6.03125V8.71505C5.82959 8.51039 5.58984 8.20914 5.24096 7.76912L4.3673 6.66726C4.20646 6.46441 3.91162 6.43035 3.70877 6.59119C3.50591 6.75204 3.47186 7.04687 3.6327 7.24973L4.52411 8.37398C4.85735 8.79428 5.13232 9.1411 5.37845 9.38817C5.63102 9.64172 5.91135 9.8519 6.26958 9.90898C6.3459 9.92113 6.42288 9.92725 6.5 9.92725C6.57712 9.92725 6.6541 9.92114 6.73042 9.90898C7.08865 9.8519 7.36899 9.64172 7.62155 9.38817C7.86768 9.1411 8.14266 8.79428 8.4759 8.37397L9.3673 7.24973C9.52814 7.04687 9.49409 6.75204 9.29123 6.59119C9.08838 6.43035 8.79354 6.46441 8.6327 6.66726L7.75904 7.76912C7.41016 8.20914 7.17041 8.51039 6.96875 8.71505V4.4585Z" fill="white"/>
                                </svg>
                                <h1 class="text-white font-normal">Download</h1>
                            </button>
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
                            <button class="flex items-center gap-2 w-fit bg-secondary py-1.5 px-2 rounded-md">
                                <svg class="w-4 fill-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.25C9.92893 8.25 8.25 9.92893 8.25 12C8.25 14.0711 9.92893 15.75 12 15.75C14.0711 15.75 15.75 14.0711 15.75 12C15.75 9.92893 14.0711 8.25 12 8.25ZM9.75 12C9.75 10.7574 10.7574 9.75 12 9.75C13.2426 9.75 14.25 10.7574 14.25 12C14.25 13.2426 13.2426 14.25 12 14.25C10.7574 14.25 9.75 13.2426 9.75 12Z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C7.48587 3.25 4.44529 5.9542 2.68057 8.24686L2.64874 8.2882C2.24964 8.80653 1.88206 9.28392 1.63269 9.8484C1.36564 10.4529 1.25 11.1117 1.25 12C1.25 12.8883 1.36564 13.5471 1.63269 14.1516C1.88206 14.7161 2.24964 15.1935 2.64875 15.7118L2.68057 15.7531C4.44529 18.0458 7.48587 20.75 12 20.75C16.5141 20.75 19.5547 18.0458 21.3194 15.7531L21.3512 15.7118C21.7504 15.1935 22.1179 14.7161 22.3673 14.1516C22.6344 13.5471 22.75 12.8883 22.75 12C22.75 11.1117 22.6344 10.4529 22.3673 9.8484C22.1179 9.28391 21.7504 8.80652 21.3512 8.28818L21.3194 8.24686C19.5547 5.9542 16.5141 3.25 12 3.25ZM3.86922 9.1618C5.49864 7.04492 8.15036 4.75 12 4.75C15.8496 4.75 18.5014 7.04492 20.1308 9.1618C20.5694 9.73159 20.8263 10.0721 20.9952 10.4545C21.1532 10.812 21.25 11.2489 21.25 12C21.25 12.7511 21.1532 13.188 20.9952 13.5455C20.8263 13.9279 20.5694 14.2684 20.1308 14.8382C18.5014 16.9551 15.8496 19.25 12 19.25C8.15036 19.25 5.49864 16.9551 3.86922 14.8382C3.43064 14.2684 3.17374 13.9279 3.00476 13.5455C2.84684 13.188 2.75 12.7511 2.75 12C2.75 11.2489 2.84684 10.812 3.00476 10.4545C3.17374 10.0721 3.43063 9.73159 3.86922 9.1618Z"/>
                                </svg>
                                <h1 class="text-white font-normal">Lihat</h1>
                            </button>
                            <button class="flex items-center gap-2 w-fit bg-primary py-1.5 px-2 rounded-md">
                                <svg class="w-3" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.96875 0.708496C6.96875 0.449613 6.75888 0.239746 6.5 0.239746C6.24112 0.239746 6.03125 0.449613 6.03125 0.708496V4.4585H4.625C4.04437 4.4585 3.75406 4.4585 3.51114 4.49697C2.17398 4.70876 1.12526 5.75747 0.913474 7.09464C0.875 7.33755 0.875 7.62787 0.875 8.2085C0.875 8.78912 0.875 9.07944 0.913474 9.32235C1.12526 10.6595 2.17398 11.7082 3.51114 11.92C3.75406 11.9585 4.04437 11.9585 4.625 11.9585H8.375C8.95563 11.9585 9.24594 11.9585 9.48886 11.92C10.826 11.7082 11.8747 10.6595 12.0865 9.32235C12.125 9.07944 12.125 8.78912 12.125 8.2085C12.125 7.62787 12.125 7.33755 12.0865 7.09464C11.8747 5.75747 10.826 4.70876 9.48886 4.49697C9.24594 4.4585 8.95563 4.4585 8.375 4.4585H6.96875V0.708496ZM6.96875 4.4585H6.03125V8.71505C5.82959 8.51039 5.58984 8.20914 5.24096 7.76912L4.3673 6.66726C4.20646 6.46441 3.91162 6.43035 3.70877 6.59119C3.50591 6.75204 3.47186 7.04687 3.6327 7.24973L4.52411 8.37398C4.85735 8.79428 5.13232 9.1411 5.37845 9.38817C5.63102 9.64172 5.91135 9.8519 6.26958 9.90898C6.3459 9.92113 6.42288 9.92725 6.5 9.92725C6.57712 9.92725 6.6541 9.92114 6.73042 9.90898C7.08865 9.8519 7.36899 9.64172 7.62155 9.38817C7.86768 9.1411 8.14266 8.79428 8.4759 8.37397L9.3673 7.24973C9.52814 7.04687 9.49409 6.75204 9.29123 6.59119C9.08838 6.43035 8.79354 6.46441 8.6327 6.66726L7.75904 7.76912C7.41016 8.20914 7.17041 8.51039 6.96875 8.71505V4.4585Z" fill="white"/>
                                </svg>
                                <h1 class="text-white font-normal">Download</h1>
                            </button>
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
    </div>
</div>

<div x-data="{ tab : 1 }">
    <div class="hidden md:block">
        <div class="flex gap-1 mx-3">
            <button @click="tab = 0" :class="tab == 0 ? 'bg-white' : 'bg-[#EBEBEB]'" class="py-2 px-3 rounded-t-md transition-colors">
                <h1 class="text-[10px] md:text-xs text-black font-normal">Semua</h1>
            </button>
            <button @click="tab = 1" :class="tab == 1 ? 'bg-white' : 'bg-[#EBEBEB]'" class="w-14 py-2 px-3 rounded-t-md transition-colors">
                <h1 class="text-[10px] md:text-xs text-black font-normal">A</h1>
            </button>
            <button @click="tab = 2" :class="tab == 2 ? 'bg-white' : 'bg-[#EBEBEB]'" class="w-14 py-2 px-3 rounded-t-md transition-colors">
                <h1 class="text-[10px] md:text-xs text-black font-normal">B</h1>
            </button>
            <button @click="tab = 3" :class="tab == 3 ? 'bg-white' : 'bg-[#EBEBEB]'" class="w-14 py-2 px-3 rounded-t-md transition-colors">
                <svg class="w-1 mx-auto" viewBox="0 0 4 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.14098 0.27276C0.969369 0.102669 0.692362 0.103905 0.522271 0.27552C0.352181 0.447135 0.353417 0.724142 0.525032 0.894233L1.55343 1.9135C1.9708 2.32716 2.2571 2.61185 2.45083 2.85307C2.63901 3.0874 2.70357 3.23791 2.72075 3.3727C2.73154 3.45734 2.73154 3.54298 2.72075 3.62762C2.70357 3.76242 2.63901 3.91293 2.45083 4.14725C2.2571 4.38848 1.9708 4.67317 1.55343 5.08683L0.525032 6.10609C0.353417 6.27618 0.352181 6.55319 0.522271 6.72481C0.692362 6.89642 0.969369 6.89766 1.14098 6.72757L2.18791 5.68994C2.58223 5.29914 2.90451 4.97974 3.13306 4.69515C3.37072 4.39921 3.54277 4.09882 3.58873 3.73826C3.60888 3.58016 3.60888 3.42017 3.58873 3.26207C3.54277 2.9015 3.37072 2.60112 3.13306 2.30518C2.9045 2.02059 2.58223 1.70119 2.18791 1.31038L1.14098 0.27276Z" fill="black"/>
                </svg>
            </button>
        </div>
    </div>
    <div x-data="{ select : false }" class="md:hidden mb-2">
        <button @click="select = !select" class="flex items-center gap-2 md:gap-3 bg-primary py-1.5 px-3 rounded md:rounded-md cursor-pointer">
            <h1 class="text-[10px] md:text-xs text-white font-normal">Pilih point evaluasi</h1>
            <svg class="w-[6px]" viewBox="0 0 6 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.99999 4L0 0H6L2.99999 4Z" fill="white"/>
            </svg> 
        </button>
        <div x-show="select" @click.outside="select = false" x-transition.duration.300ms.opacity.50 :class="{ 'block': select, 'hidden': !select }" class="hidden absolute w-max md:w-52 mt-2 bg-white rounded shadow-md shadow-black/20">
            <div class="bg-transparent py-2 px-4 hover:bg-[#EAEAEA] cursor-pointer">
                <h1 class="text-[10px] md:text-xs text-[#778294] font-normal">A. Rancangan Peraturan Desa</h1>
            </div>
            <div class="bg-transparent py-2 px-4 hover:bg-[#EAEAEA] cursor-pointer">
                <h1 class="text-[10px] md:text-xs text-[#778294] font-normal">B. Rancangan Peraturan Desa</h1>
            </div>
            <div class="bg-transparent py-2 px-4 hover:bg-[#EAEAEA] cursor-pointer">
                <h1 class="text-[10px] md:text-xs text-[#778294] font-normal">C. Rancangan Peraturan Desa</h1>
            </div>
        </div>
    </div>
    <div x-show="tab == 1" x-transition.duration.300ms.opacity.50 :class="{ 'block': tab, 'hidden': !tab }" class="hidden w-full bg-white p-3 md:p-4 rounded-md md:rounded-lg">
        <div x-data="{ accordion : false }" class="space-y-3">
            <div @click="accordion = !accordion" class="flex items-center gap-2 md:gap-3 cursor-pointer">
                <svg class="w-3 md:w-4 fill-[#2D264B]" viewBox="0 0 13 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.0327 1.59046C12.3243 1.29626 12.3222 0.821393 12.028 0.529809C11.7338 0.238226 11.2589 0.240344 10.9673 0.534541L9.22 2.29751C8.51086 3.013 8.02282 3.50381 7.6093 3.83591C7.2076 4.1585 6.94958 4.26918 6.7185 4.29863C6.57341 4.31712 6.42659 4.31712 6.2815 4.29863C6.05042 4.26918 5.7924 4.15851 5.39071 3.83591C4.97718 3.50381 4.48914 3.01301 3.78 2.29751L2.03269 0.534542C1.74111 0.240345 1.26624 0.238226 0.972041 0.52981C0.677844 0.821394 0.675726 1.29626 0.967309 1.59046L2.74609 3.38519C3.41604 4.06116 3.96359 4.61364 4.45146 5.00544C4.95879 5.41287 5.47373 5.70781 6.09184 5.78659C6.36287 5.82114 6.63714 5.82114 6.90816 5.78659C7.52628 5.70781 8.04122 5.41287 8.54854 5.00544C9.03641 4.61364 9.58396 4.06117 10.2539 3.38519L12.0327 1.59046Z"/>
                </svg>
                <h1 class="text-xs md:text-sm text-black font-semibold">A. RANCANGAN PERATURAN DESA</h1>
            </div>

            <div x-show="accordion" @click.outside="accordion = false" x-transition.duration.300ms.opacity.50 :class="{ 'block': accordion, 'hidden': !accordion }" class="hidden space-y-3">
                <div class="border border-[#E9E9E9] p-3 rounded-md md:rounded-lg space-y-3">
                    <div class="flex items-start gap-2 md:gap-3">
                        <span class="text-[10px] md:text-xs text-black font-medium">1.</span>
                        <div x-data="{ selected: null }" class="space-y-3">
                            <h1 class="text-[10px] md:text-xs text-black font-medium">Rumusan Prioritas Program Pembangunan</h1>
                            <label class="flex justify-normal items-center gap-2">
                                <input type="checkbox" :checked="selected === 1" @click="selected = selected === 1 ? null : 1" class="peer/checkbox appearance-none checked:bg-primary rounded-md bg-transparent border-gray-500 checked:border-primary ring-primary checked:ring-primary">
                                <h1 class="text-[10px] md:text-xs text-gray-500 peer-checked/checkbox:text-primary font-medium">Dilaksanakan (ada dokumen)</h1>
                            </label>
                            <label class="flex justify-normal items-center gap-2">
                                <input type="checkbox" :checked="selected === 2" @click="selected = selected === 2 ? null : 2" class="peer/checkbox appearance-none checked:bg-primary rounded-md bg-transparent border-gray-500 checked:border-primary ring-primary checked:ring-primary">
                                <h1 class="text-[10px] md:text-xs text-gray-500 peer-checked/checkbox:text-primary font-medium">Tidak dilaksanakan / tidak ada dokumen</h1>
                            </label>
                            <div class="md:flex items-start gap-2">
                                <span class="text-xs md:text-sm text-black font-medium">Keterangan :</span>
                                <h1 class="w-full md:w-[80%] text-[10px] md:text-xs text-gray-500 font-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ducimus quam perspiciatis, repellat odio nihil possimus in esse tempora non quibusdam consequuntur nemo. Odio distinctio possimus porro voluptatum ab aliquam.</h1>
                            </div>
                            <h1 class="text-[10px] md:text-xs text-[#BABABA] font-normal">Tingkat Daftar No Rancangan Perdes RKP Desa</h1>
                        </div>
                    </div>
                    <div x-data="{ accordion : false }" class="border border-[#E9E9E9] p-3 rounded-md md:rounded-lg">
                        <div class="space-y-3">
                            <div @click="accordion = !accordion" class="flex items-center gap-2 md:gap-3 cursor-pointer">
                                <svg class="w-3 md:w-4 fill-[#2D264B]" viewBox="0 0 13 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.0327 1.59046C12.3243 1.29626 12.3222 0.821393 12.028 0.529809C11.7338 0.238226 11.2589 0.240344 10.9673 0.534541L9.22 2.29751C8.51086 3.013 8.02282 3.50381 7.6093 3.83591C7.2076 4.1585 6.94958 4.26918 6.7185 4.29863C6.57341 4.31712 6.42659 4.31712 6.2815 4.29863C6.05042 4.26918 5.7924 4.15851 5.39071 3.83591C4.97718 3.50381 4.48914 3.01301 3.78 2.29751L2.03269 0.534542C1.74111 0.240345 1.26624 0.238226 0.972041 0.52981C0.677844 0.821394 0.675726 1.29626 0.967309 1.59046L2.74609 3.38519C3.41604 4.06116 3.96359 4.61364 4.45146 5.00544C4.95879 5.41287 5.47373 5.70781 6.09184 5.78659C6.36287 5.82114 6.63714 5.82114 6.90816 5.78659C7.52628 5.70781 8.04122 5.41287 8.54854 5.00544C9.03641 4.61364 9.58396 4.06117 10.2539 3.38519L12.0327 1.59046Z"/>
                                </svg>
                                <div class="flex items-start gap-1.5">
                                    <span class="text-[10px] md:text-xs text-black font-medium">•</span>
                                    <h1 class="text-[10px] md:text-xs text-black font-medium">Prioritas Program dan Kegiatan Desa berdasarkan kewenangan Pusat</h1>
                                </div>
                            </div>
                            
                            <div x-data="{ selected: null }" x-show="accordion" @click.outside="accordion = false" x-transition.duration.300ms.opacity.50 :class="{ 'block': accordion, 'hidden': !accordion }" class="hidden ml-5 space-y-3">
                                <label class="flex justify-normal items-center gap-2">
                                    <input type="checkbox" :checked="selected === 1" @click="selected = selected === 1 ? null : 1" class="peer/checkbox appearance-none checked:bg-primary rounded-md bg-transparent border-gray-500 checked:border-primary ring-primary checked:ring-primary">
                                    <h1 class="text-[10px] md:text-xs text-gray-500 peer-checked/checkbox:text-primary font-medium">Dilaksanakan (ada dokumen)</h1>
                                </label>
                                <label class="flex justify-normal items-center gap-2">
                                    <input type="checkbox" :checked="selected === 2" @click="selected = selected === 2 ? null : 2" class="peer/checkbox appearance-none checked:bg-primary rounded-md bg-transparent border-gray-500 checked:border-primary ring-primary checked:ring-primary">
                                    <h1 class="text-[10px] md:text-xs text-gray-500 peer-checked/checkbox:text-primary font-medium">Tidak dilaksanakan / tidak ada dokumen</h1>
                                </label>
                                <div class="md:flex items-start gap-2">
                                    <span class="text-xs md:text-sm text-black font-medium">Keterangan :</span>
                                    <h1 class="w-full md:w-[80%] text-[10px] md:text-xs text-gray-500 font-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ducimus quam perspiciatis, repellat odio nihil possimus in esse tempora non quibusdam consequuntur nemo. Odio distinctio possimus porro voluptatum ab aliquam.</h1>
                                </div>
                                <h1 class="text-[10px] md:text-xs text-[#BABABA] font-normal">Tingkat Daftar Prioritas Program dan Kegiatan Desa berdasarkan kewenangan Pusat</h1>

                                <div x-data="{ accordion : false }" class="bg-[#F7F6FF] border border-[#E9E9E9] p-3 rounded-md md:rounded-lg">
                                    <div class="space-y-3">
                                        <div @click="accordion = !accordion" class="flex items-center gap-2 md:gap-3 cursor-pointer">
                                            <svg class="w-3 md:w-4 fill-[#2D264B]" viewBox="0 0 13 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.0327 1.59046C12.3243 1.29626 12.3222 0.821393 12.028 0.529809C11.7338 0.238226 11.2589 0.240344 10.9673 0.534541L9.22 2.29751C8.51086 3.013 8.02282 3.50381 7.6093 3.83591C7.2076 4.1585 6.94958 4.26918 6.7185 4.29863C6.57341 4.31712 6.42659 4.31712 6.2815 4.29863C6.05042 4.26918 5.7924 4.15851 5.39071 3.83591C4.97718 3.50381 4.48914 3.01301 3.78 2.29751L2.03269 0.534542C1.74111 0.240345 1.26624 0.238226 0.972041 0.52981C0.677844 0.821394 0.675726 1.29626 0.967309 1.59046L2.74609 3.38519C3.41604 4.06116 3.96359 4.61364 4.45146 5.00544C4.95879 5.41287 5.47373 5.70781 6.09184 5.78659C6.36287 5.82114 6.63714 5.82114 6.90816 5.78659C7.52628 5.70781 8.04122 5.41287 8.54854 5.00544C9.03641 4.61364 9.58396 4.06117 10.2539 3.38519L12.0327 1.59046Z"/>
                                            </svg>
                                            <div class="flex items-start gap-1.5">
                                                <span class="text-[10px] md:text-xs text-black font-medium">•</span>
                                                <h1 class="text-[10px] md:text-xs text-black font-medium">Biaya Bantuan Operasional Pemdes ( 3% )</h1>
                                            </div>
                                        </div>
                                        <div x-data="{ selected: null }" x-show="accordion" @click.outside="accordion = false" x-transition.duration.300ms.opacity.50 :class="{ 'block': accordion, 'hidden': !accordion }" class="hidden ml-5 space-y-3">
                                            <label class="flex justify-normal items-center gap-2">
                                                <input type="checkbox" :checked="selected === 1" @click="selected = selected === 1 ? null : 1" class="peer/checkbox appearance-none checked:bg-primary rounded-md bg-transparent border-gray-500 checked:border-primary ring-primary checked:ring-primary">
                                                <h1 class="text-[10px] md:text-xs text-gray-500 peer-checked/checkbox:text-primary font-medium">Dilaksanakan (ada dokumen)</h1>
                                            </label>
                                            <label class="flex justify-normal items-center gap-2">
                                                <input type="checkbox" :checked="selected === 2" @click="selected = selected === 2 ? null : 2" class="peer/checkbox appearance-none checked:bg-primary rounded-md bg-transparent border-gray-500 checked:border-primary ring-primary checked:ring-primary">
                                                <h1 class="text-[10px] md:text-xs text-gray-500 peer-checked/checkbox:text-primary font-medium">Tidak dilaksanakan / tidak ada dokumen</h1>
                                            </label>
                                            <div class="md:flex items-start gap-2">
                                                <span class="text-xs md:text-sm text-black font-medium">Keterangan :</span>
                                                <h1 class="w-full md:w-[80%] text-[10px] md:text-xs text-gray-500 font-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ducimus quam perspiciatis, repellat odio nihil possimus in esse tempora non quibusdam consequuntur nemo. Odio distinctio possimus porro voluptatum ab aliquam.</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div x-data="{ accordion : false }" class="bg-[#F7F6FF] border border-[#E9E9E9] p-3 rounded-md md:rounded-lg">
                                    <div class="space-y-3">
                                        <div @click="accordion = !accordion" class="flex items-center gap-2 md:gap-3 cursor-pointer">
                                            <svg class="w-3 md:w-4 fill-[#2D264B]" viewBox="0 0 13 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.0327 1.59046C12.3243 1.29626 12.3222 0.821393 12.028 0.529809C11.7338 0.238226 11.2589 0.240344 10.9673 0.534541L9.22 2.29751C8.51086 3.013 8.02282 3.50381 7.6093 3.83591C7.2076 4.1585 6.94958 4.26918 6.7185 4.29863C6.57341 4.31712 6.42659 4.31712 6.2815 4.29863C6.05042 4.26918 5.7924 4.15851 5.39071 3.83591C4.97718 3.50381 4.48914 3.01301 3.78 2.29751L2.03269 0.534542C1.74111 0.240345 1.26624 0.238226 0.972041 0.52981C0.677844 0.821394 0.675726 1.29626 0.967309 1.59046L2.74609 3.38519C3.41604 4.06116 3.96359 4.61364 4.45146 5.00544C4.95879 5.41287 5.47373 5.70781 6.09184 5.78659C6.36287 5.82114 6.63714 5.82114 6.90816 5.78659C7.52628 5.70781 8.04122 5.41287 8.54854 5.00544C9.03641 4.61364 9.58396 4.06117 10.2539 3.38519L12.0327 1.59046Z"/>
                                            </svg>
                                            <div class="flex items-start gap-1.5">
                                                <span class="text-[10px] md:text-xs text-black font-medium">•</span>
                                                <h1 class="text-[10px] md:text-xs text-black font-medium">BLT Miskin Ekstreme ( s/d 25% )</h1>
                                            </div>
                                        </div>
                                        <div x-data="{ selected: null }" x-show="accordion" @click.outside="accordion = false" x-transition.duration.300ms.opacity.50 :class="{ 'block': accordion, 'hidden': !accordion }" class="hidden ml-5 space-y-3">
                                            <label class="flex justify-normal items-center gap-2">
                                                <input type="checkbox" :checked="selected === 1" @click="selected = selected === 1 ? null : 1" class="peer/checkbox appearance-none checked:bg-primary rounded-md bg-transparent border-gray-500 checked:border-primary ring-primary checked:ring-primary">
                                                <h1 class="text-[10px] md:text-xs text-gray-500 peer-checked/checkbox:text-primary font-medium">Dilaksanakan (ada dokumen)</h1>
                                            </label>
                                            <label class="flex justify-normal items-center gap-2">
                                                <input type="checkbox" :checked="selected === 2" @click="selected = selected === 2 ? null : 2" class="peer/checkbox appearance-none checked:bg-primary rounded-md bg-transparent border-gray-500 checked:border-primary ring-primary checked:ring-primary">
                                                <h1 class="text-[10px] md:text-xs text-gray-500 peer-checked/checkbox:text-primary font-medium">Tidak dilaksanakan / tidak ada dokumen</h1>
                                            </label>
                                            <div class="md:flex items-start gap-2">
                                                <span class="text-xs md:text-sm text-black font-medium">Keterangan :</span>
                                                <h1 class="w-full md:w-[80%] text-[10px] md:text-xs text-gray-500 font-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ducimus quam perspiciatis, repellat odio nihil possimus in esse tempora non quibusdam consequuntur nemo. Odio distinctio possimus porro voluptatum ab aliquam.</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border border-[#E9E9E9] p-3 rounded-md md:rounded-lg space-y-3">
                    <div class="flex items-start gap-2 md:gap-3">
                        <span class="text-[10px] md:text-xs text-black font-medium">2.</span>
                        <div x-data="{ selected: null }" class="space-y-3">
                            <h1 class="text-[10px] md:text-xs text-black font-medium">Rumusan Prioritas Program Pembangunan</h1>
                            <label class="flex justify-normal items-center gap-2">
                                <input type="checkbox" :checked="selected === 1" @click="selected = selected === 1 ? null : 1" class="peer/checkbox appearance-none checked:bg-primary rounded-md bg-transparent border-gray-500 checked:border-primary ring-primary checked:ring-primary">
                                <h1 class="text-[10px] md:text-xs text-gray-500 peer-checked/checkbox:text-primary font-medium">Dilaksanakan (ada dokumen)</h1>
                            </label>
                            <label class="flex justify-normal items-center gap-2">
                                <input type="checkbox" :checked="selected === 2" @click="selected = selected === 2 ? null : 2" class="peer/checkbox appearance-none checked:bg-primary rounded-md bg-transparent border-gray-500 checked:border-primary ring-primary checked:ring-primary">
                                <h1 class="text-[10px] md:text-xs text-gray-500 peer-checked/checkbox:text-primary font-medium">Tidak dilaksanakan / tidak ada dokumen</h1>
                            </label>
                            <div class="md:flex items-start gap-2">
                                <span class="text-xs md:text-sm text-black font-medium">Keterangan :</span>
                                <h1 class="w-full md:w-[80%] text-[10px] md:text-xs text-gray-500 font-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ducimus quam perspiciatis, repellat odio nihil possimus in esse tempora non quibusdam consequuntur nemo. Odio distinctio possimus porro voluptatum ab aliquam.</h1>
                            </div>
                            <h1 class="text-[10px] md:text-xs text-[#BABABA] font-normal">Tingkat Daftar No Rancangan Perdes RKP Desa</h1>
                        </div>
                    </div>
                    <div x-data="{ accordion : false }" class="border border-[#E9E9E9] p-3 rounded-md md:rounded-lg">
                        <div class="space-y-3">
                            <div @click="accordion = !accordion" class="flex items-center gap-2 md:gap-3 cursor-pointer">
                                <svg class="w-3 md:w-4 fill-[#2D264B]" viewBox="0 0 13 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.0327 1.59046C12.3243 1.29626 12.3222 0.821393 12.028 0.529809C11.7338 0.238226 11.2589 0.240344 10.9673 0.534541L9.22 2.29751C8.51086 3.013 8.02282 3.50381 7.6093 3.83591C7.2076 4.1585 6.94958 4.26918 6.7185 4.29863C6.57341 4.31712 6.42659 4.31712 6.2815 4.29863C6.05042 4.26918 5.7924 4.15851 5.39071 3.83591C4.97718 3.50381 4.48914 3.01301 3.78 2.29751L2.03269 0.534542C1.74111 0.240345 1.26624 0.238226 0.972041 0.52981C0.677844 0.821394 0.675726 1.29626 0.967309 1.59046L2.74609 3.38519C3.41604 4.06116 3.96359 4.61364 4.45146 5.00544C4.95879 5.41287 5.47373 5.70781 6.09184 5.78659C6.36287 5.82114 6.63714 5.82114 6.90816 5.78659C7.52628 5.70781 8.04122 5.41287 8.54854 5.00544C9.03641 4.61364 9.58396 4.06117 10.2539 3.38519L12.0327 1.59046Z"/>
                                </svg>
                                <div class="flex items-start gap-1.5">
                                    <span class="text-[10px] md:text-xs text-black font-medium">•</span>
                                    <h1 class="text-[10px] md:text-xs text-black font-medium">Prioritas Program dan Kegiatan Desa berdasarkan kewenangan Pusat</h1>
                                </div>
                            </div>
                            
                            <div x-data="{ selected: null }" x-show="accordion" @click.outside="accordion = false" x-transition.duration.300ms.opacity.50 :class="{ 'block': accordion, 'hidden': !accordion }" class="hidden ml-5 space-y-3">
                                <label class="flex justify-normal items-center gap-2">
                                    <input type="checkbox" :checked="selected === 1" @click="selected = selected === 1 ? null : 1" class="peer/checkbox appearance-none checked:bg-primary rounded-md bg-transparent border-gray-500 checked:border-primary ring-primary checked:ring-primary">
                                    <h1 class="text-[10px] md:text-xs text-gray-500 peer-checked/checkbox:text-primary font-medium">Dilaksanakan (ada dokumen)</h1>
                                </label>
                                <label class="flex justify-normal items-center gap-2">
                                    <input type="checkbox" :checked="selected === 2" @click="selected = selected === 2 ? null : 2" class="peer/checkbox appearance-none checked:bg-primary rounded-md bg-transparent border-gray-500 checked:border-primary ring-primary checked:ring-primary">
                                    <h1 class="text-[10px] md:text-xs text-gray-500 peer-checked/checkbox:text-primary font-medium">Tidak dilaksanakan / tidak ada dokumen</h1>
                                </label>
                                <div class="md:flex items-start gap-2">
                                    <span class="text-xs md:text-sm text-black font-medium">Keterangan :</span>
                                    <h1 class="w-full md:w-[80%] text-[10px] md:text-xs text-gray-500 font-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ducimus quam perspiciatis, repellat odio nihil possimus in esse tempora non quibusdam consequuntur nemo. Odio distinctio possimus porro voluptatum ab aliquam.</h1>
                                </div>
                                <h1 class="text-[10px] md:text-xs text-[#BABABA] font-normal">Tingkat Daftar Prioritas Program dan Kegiatan Desa berdasarkan kewenangan Pusat</h1>

                                <div x-data="{ accordion : false }" class="bg-[#F7F6FF] border border-[#E9E9E9] p-3 rounded-md md:rounded-lg">
                                    <div class="space-y-3">
                                        <div @click="accordion = !accordion" class="flex items-center gap-2 md:gap-3 cursor-pointer">
                                            <svg class="w-3 md:w-4 fill-[#2D264B]" viewBox="0 0 13 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.0327 1.59046C12.3243 1.29626 12.3222 0.821393 12.028 0.529809C11.7338 0.238226 11.2589 0.240344 10.9673 0.534541L9.22 2.29751C8.51086 3.013 8.02282 3.50381 7.6093 3.83591C7.2076 4.1585 6.94958 4.26918 6.7185 4.29863C6.57341 4.31712 6.42659 4.31712 6.2815 4.29863C6.05042 4.26918 5.7924 4.15851 5.39071 3.83591C4.97718 3.50381 4.48914 3.01301 3.78 2.29751L2.03269 0.534542C1.74111 0.240345 1.26624 0.238226 0.972041 0.52981C0.677844 0.821394 0.675726 1.29626 0.967309 1.59046L2.74609 3.38519C3.41604 4.06116 3.96359 4.61364 4.45146 5.00544C4.95879 5.41287 5.47373 5.70781 6.09184 5.78659C6.36287 5.82114 6.63714 5.82114 6.90816 5.78659C7.52628 5.70781 8.04122 5.41287 8.54854 5.00544C9.03641 4.61364 9.58396 4.06117 10.2539 3.38519L12.0327 1.59046Z"/>
                                            </svg>
                                            <div class="flex items-start gap-1.5">
                                                <span class="text-[10px] md:text-xs text-black font-medium">•</span>
                                                <h1 class="text-[10px] md:text-xs text-black font-medium">Biaya Bantuan Operasional Pemdes ( 3% )</h1>
                                            </div>
                                        </div>
                                        <div x-data="{ selected: null }" x-show="accordion" @click.outside="accordion = false" x-transition.duration.300ms.opacity.50 :class="{ 'block': accordion, 'hidden': !accordion }" class="hidden ml-5 space-y-3">
                                            <label class="flex justify-normal items-center gap-2">
                                                <input type="checkbox" :checked="selected === 1" @click="selected = selected === 1 ? null : 1" class="peer/checkbox appearance-none checked:bg-primary rounded-md bg-transparent border-gray-500 checked:border-primary ring-primary checked:ring-primary">
                                                <h1 class="text-[10px] md:text-xs text-gray-500 peer-checked/checkbox:text-primary font-medium">Dilaksanakan (ada dokumen)</h1>
                                            </label>
                                            <label class="flex justify-normal items-center gap-2">
                                                <input type="checkbox" :checked="selected === 2" @click="selected = selected === 2 ? null : 2" class="peer/checkbox appearance-none checked:bg-primary rounded-md bg-transparent border-gray-500 checked:border-primary ring-primary checked:ring-primary">
                                                <h1 class="text-[10px] md:text-xs text-gray-500 peer-checked/checkbox:text-primary font-medium">Tidak dilaksanakan / tidak ada dokumen</h1>
                                            </label>
                                            <div class="md:flex items-start gap-2">
                                                <span class="text-xs md:text-sm text-black font-medium">Keterangan :</span>
                                                <h1 class="w-full md:w-[80%] text-[10px] md:text-xs text-gray-500 font-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ducimus quam perspiciatis, repellat odio nihil possimus in esse tempora non quibusdam consequuntur nemo. Odio distinctio possimus porro voluptatum ab aliquam.</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div x-data="{ accordion : false }" class="bg-[#F7F6FF] border border-[#E9E9E9] p-3 rounded-md md:rounded-lg">
                                    <div class="space-y-3">
                                        <div @click="accordion = !accordion" class="flex items-center gap-2 md:gap-3 cursor-pointer">
                                            <svg class="w-3 md:w-4 fill-[#2D264B]" viewBox="0 0 13 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.0327 1.59046C12.3243 1.29626 12.3222 0.821393 12.028 0.529809C11.7338 0.238226 11.2589 0.240344 10.9673 0.534541L9.22 2.29751C8.51086 3.013 8.02282 3.50381 7.6093 3.83591C7.2076 4.1585 6.94958 4.26918 6.7185 4.29863C6.57341 4.31712 6.42659 4.31712 6.2815 4.29863C6.05042 4.26918 5.7924 4.15851 5.39071 3.83591C4.97718 3.50381 4.48914 3.01301 3.78 2.29751L2.03269 0.534542C1.74111 0.240345 1.26624 0.238226 0.972041 0.52981C0.677844 0.821394 0.675726 1.29626 0.967309 1.59046L2.74609 3.38519C3.41604 4.06116 3.96359 4.61364 4.45146 5.00544C4.95879 5.41287 5.47373 5.70781 6.09184 5.78659C6.36287 5.82114 6.63714 5.82114 6.90816 5.78659C7.52628 5.70781 8.04122 5.41287 8.54854 5.00544C9.03641 4.61364 9.58396 4.06117 10.2539 3.38519L12.0327 1.59046Z"/>
                                            </svg>
                                            <div class="flex items-start gap-1.5">
                                                <span class="text-[10px] md:text-xs text-black font-medium">•</span>
                                                <h1 class="text-[10px] md:text-xs text-black font-medium">BLT Miskin Ekstreme ( s/d 25% )</h1>
                                            </div>
                                        </div>
                                        <div x-data="{ selected: null }" x-show="accordion" @click.outside="accordion = false" x-transition.duration.300ms.opacity.50 :class="{ 'block': accordion, 'hidden': !accordion }" class="hidden ml-5 space-y-3">
                                            <label class="flex justify-normal items-center gap-2">
                                                <input type="checkbox" :checked="selected === 1" @click="selected = selected === 1 ? null : 1" class="peer/checkbox appearance-none checked:bg-primary rounded-md bg-transparent border-gray-500 checked:border-primary ring-primary checked:ring-primary">
                                                <h1 class="text-[10px] md:text-xs text-gray-500 peer-checked/checkbox:text-primary font-medium">Dilaksanakan (ada dokumen)</h1>
                                            </label>
                                            <label class="flex justify-normal items-center gap-2">
                                                <input type="checkbox" :checked="selected === 2" @click="selected = selected === 2 ? null : 2" class="peer/checkbox appearance-none checked:bg-primary rounded-md bg-transparent border-gray-500 checked:border-primary ring-primary checked:ring-primary">
                                                <h1 class="text-[10px] md:text-xs text-gray-500 peer-checked/checkbox:text-primary font-medium">Tidak dilaksanakan / tidak ada dokumen</h1>
                                            </label>
                                            <div class="md:flex items-start gap-2">
                                                <span class="text-xs md:text-sm text-black font-medium">Keterangan :</span>
                                                <h1 class="w-full md:w-[80%] text-[10px] md:text-xs text-gray-500 font-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ducimus quam perspiciatis, repellat odio nihil possimus in esse tempora non quibusdam consequuntur nemo. Odio distinctio possimus porro voluptatum ab aliquam.</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="w-full bg-white p-3 md:p-4 rounded-md md:rounded-lg">
    <div class="md:flex items-start gap-2">
        <span class="text-xs md:text-sm text-black font-medium">Catatan</span>
        <h1 class="w-full md:w-[80%] text-[10px] md:text-xs text-gray-500 font-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ducimus quam perspiciatis, repellat odio nihil possimus in esse tempora non quibusdam consequuntur nemo. Odio distinctio possimus porro voluptatum ab aliquam.</h1>
    </div>
</div>

<div class="flex justify-end">
    <h1 class="text-xs md:text-sm text-black font-normal">Tanggal : 04-September-2024</h1>
</div>

<div class="w-full bg-white p-3 md:p-4 rounded-md md:rounded-lg">
    <div x-data="{ accordion : false }" class="space-y-3">
        <div @click="accordion = !accordion" class="flex items-center gap-2 md:gap-3 cursor-pointer">
            <svg class="w-3 md:w-4 fill-[#2D264B]" viewBox="0 0 13 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.0327 1.59046C12.3243 1.29626 12.3222 0.821393 12.028 0.529809C11.7338 0.238226 11.2589 0.240344 10.9673 0.534541L9.22 2.29751C8.51086 3.013 8.02282 3.50381 7.6093 3.83591C7.2076 4.1585 6.94958 4.26918 6.7185 4.29863C6.57341 4.31712 6.42659 4.31712 6.2815 4.29863C6.05042 4.26918 5.7924 4.15851 5.39071 3.83591C4.97718 3.50381 4.48914 3.01301 3.78 2.29751L2.03269 0.534542C1.74111 0.240345 1.26624 0.238226 0.972041 0.52981C0.677844 0.821394 0.675726 1.29626 0.967309 1.59046L2.74609 3.38519C3.41604 4.06116 3.96359 4.61364 4.45146 5.00544C4.95879 5.41287 5.47373 5.70781 6.09184 5.78659C6.36287 5.82114 6.63714 5.82114 6.90816 5.78659C7.52628 5.70781 8.04122 5.41287 8.54854 5.00544C9.03641 4.61364 9.58396 4.06117 10.2539 3.38519L12.0327 1.59046Z"/>
            </svg>
            <h1 class="text-xs md:text-sm text-black font-semibold">Desa Janji</h1>
        </div>

        <div x-show="accordion" @click.outside="accordion = false" x-transition.duration.300ms.opacity.50 :class="{ 'block': accordion, 'hidden': !accordion }" class="hidden space-y-3">
            <hr class="border-[0.5px] border-[#f1f1f1]">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 md:gap-4">
                <div class="border border-[#E9E9E9] p-3 rounded-md md:rounded-lg space-y-3">
                    <div class="space-y-2">
                        <h1 class="text-[10px] md:text-xs text-black font-normal">Nama : Rizky Rahman Rambe</h1>
                        <div class="flex items-start gap-2">
                            <span class="text-[10px] md:text-xs text-black font-normal">Tanda Tangan :</span>
                            <img class="w-14 h-14 bg-transparent object-cover" src="/svgs/barcode.svg">
                        </div>
                        <hr class="border-[0.5px] border-[#f1f1f1]">
                        <div class="flex items-center gap-3 md:gap-4">
                            <div x-data="{ modal : false }" class="relative group">
                                <div class="space-y-2">
                                    <button type="button" @click="modal = !modal" class="bg-[#E3E2FF] p-2 md:p-2.5 rounded-full">
                                        <svg class="w-3.5 md:w-4" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.6519 0.895996C10.2225 0.895996 9.86778 1.07566 9.53205 1.33182C9.21397 1.5745 8.86079 1.9277 8.43726 2.35126L4.78331 6.00516C4.50273 6.28528 4.28086 6.50678 4.1448 6.78988C4.00873 7.07298 3.97437 7.38459 3.93091 7.77869L3.91911 7.88519C3.83782 8.61664 3.77081 9.21956 3.78615 9.69448C3.80219 10.1912 3.90953 10.6461 4.26512 11.0017C4.62072 11.3573 5.07569 11.4647 5.57238 11.4807C6.0473 11.4961 6.6502 11.429 7.38164 11.3478L7.4882 11.336C7.88228 11.2925 8.19389 11.2581 8.47699 11.1221C8.76008 10.986 8.98158 10.7641 9.2617 10.4836L12.9156 6.82961C13.3392 6.40608 13.6924 6.0529 13.935 5.73482C14.1912 5.39909 14.3709 5.04437 14.3709 4.61495C14.3709 4.18553 14.1912 3.83081 13.935 3.49507C13.6924 3.177 13.3392 2.82382 12.9156 2.40029L12.8666 2.35128C12.4431 1.92771 12.0899 1.57451 11.7718 1.33182C11.4361 1.07566 11.0813 0.895996 10.6519 0.895996ZM12.5367 5.7926L9.47426 2.73018C9.74469 2.46374 9.95386 2.26781 10.1386 2.12684C10.3854 1.93855 10.5291 1.896 10.6519 1.896C10.7748 1.896 10.9184 1.93855 11.1652 2.12684C11.4235 2.32393 11.7295 2.62844 12.184 3.08288C12.6384 3.53732 12.9429 3.84334 13.14 4.10165C13.3283 4.34844 13.3709 4.49208 13.3709 4.61495C13.3709 4.73781 13.3283 4.88146 13.14 5.12824C12.9991 5.31301 12.8031 5.52217 12.5367 5.7926ZM8.7663 3.43644L11.8304 6.50056L8.60278 9.72821C8.25115 10.0798 8.15398 10.1678 8.0438 10.2208C7.93361 10.2737 7.80423 10.2946 7.30999 10.3496C6.53 10.4362 5.99912 10.494 5.60466 10.4812C5.22361 10.4689 5.06977 10.3922 4.97223 10.2946C4.87469 10.1971 4.79793 10.0433 4.78563 9.66221C4.77289 9.26775 4.83064 8.73687 4.9173 7.95688C4.97222 7.46264 4.99314 7.33325 5.0461 7.22307C5.09906 7.11288 5.18702 7.01571 5.53865 6.66408L8.7663 3.43644Z" fill="#615EFC"/>
                                            <path d="M5.50616 2.68164C5.78228 2.67833 6.00344 2.4518 6.00013 2.17568C5.99682 1.89956 5.77029 1.6784 5.49417 1.68171C3.87649 1.7011 2.76612 1.78962 1.91365 2.40897C1.58822 2.64541 1.30204 2.9316 1.0656 3.25703C0.675045 3.79458 0.500167 4.42416 0.415982 5.20119C0.333486 5.96261 0.333491 6.92235 0.333496 8.1467V8.20704C0.333491 9.43139 0.333486 10.3911 0.415982 11.1526C0.500167 11.9296 0.675045 12.5592 1.0656 13.0967C1.30204 13.4221 1.58822 13.7083 1.91365 13.9448C2.4512 14.3353 3.08079 14.5102 3.85781 14.5944C4.61922 14.6769 5.57894 14.6769 6.80326 14.6769H6.86368C8.088 14.6769 9.04777 14.6769 9.80918 14.5944C10.5862 14.5102 11.2158 14.3353 11.7533 13.9448C12.0788 13.7083 12.365 13.4221 12.6014 13.0967C13.2208 12.2442 13.3093 11.1339 13.3287 9.5162C13.332 9.24007 13.1108 9.01355 12.8347 9.01024C12.5586 9.00693 12.332 9.22809 12.3287 9.50421C12.3087 11.1714 12.1965 11.9527 11.7924 12.5089C11.6176 12.7495 11.4061 12.961 11.1656 13.1358C10.8269 13.3818 10.3934 13.5252 9.70147 13.6002C9.00017 13.6762 8.09454 13.6769 6.8335 13.6769C5.57245 13.6769 4.66683 13.6762 3.96553 13.6002C3.27359 13.5252 2.84011 13.3818 2.50144 13.1358C2.2609 12.961 2.04937 12.7495 1.87461 12.5089C1.62856 12.1703 1.48513 11.7368 1.41016 11.0448C1.33418 10.3435 1.3335 9.43792 1.3335 8.17687C1.3335 6.91582 1.33418 6.0102 1.41016 5.3089C1.48513 4.61696 1.62856 4.18348 1.87461 3.84481C2.04937 3.60428 2.2609 3.39275 2.50144 3.21799C3.05767 2.81386 3.83895 2.70162 5.50616 2.68164Z" fill="#615EFC"/>
                                        </svg>
                                    </button>
                                    <div class="absolute left-0 hidden group-hover:block bg-[#E3E2FF] py-1.5 px-5 shadow-md shadow-[#00000014] rounded">
                                        <h1 class="text-[10px] md:text-xs text-[#615EFC] font-medium">Ubah</h1>
                                    </div>
                                </div>
                                <div x-show="modal" x-transition.duration.300ms.opacity.50 :class="{ 'visible': modal, 'invisible': !modal }" class="invisible fixed inset-0 z-50 bg-[#0000006E] flex items-center justify-center h-screen">
                                    <div class="w-[80%] sm:w-[50%] md:w-[35%] lg:w-[30%] bg-white rounded-lg md:rounded-xl">
                                        <div class="flex justify-between items-center border-b border-[#D1D1D1] py-2.5 px-3">
                                            <div class=""></div>
                                            <h1 class="text-sm md:text-base text-black font-semibold">Ubah admin desa</h1>
                                            <button type="button" @click="modal = false" type="button" class="bg-[#E8E8E8] p-2 rounded-full">
                                                <svg class="w-3 fill-[#8B8B8B]" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.0204 1.68705C11.2157 1.49179 11.2157 1.1752 11.0204 0.979943C10.8251 0.784681 10.5086 0.784681 10.3133 0.979943L6.00017 5.29307L1.68705 0.979945C1.49179 0.784683 1.1752 0.784683 0.979943 0.979945C0.784681 1.17521 0.784681 1.49179 0.979943 1.68705L5.29306 6.00017L0.979961 10.3133C0.784699 10.5085 0.784699 10.8251 0.979961 11.0204C1.17522 11.2156 1.49181 11.2156 1.68707 11.0204L6.00017 6.70728L10.3133 11.0204C10.5085 11.2156 10.8251 11.2156 11.0204 11.0204C11.2156 10.8251 11.2156 10.5085 11.0204 10.3133L6.70728 6.00017L11.0204 1.68705Z"/>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="pt-2.5 pb-3.5 px-5 space-y-8">
                                            <form class="w-full bg-transparent space-y-5 md:space-y-6 rounded md:rounded-md">
                                                <div class="grid gap-y-3 text-start">
                                                    <label class="grid gap-1">
                                                        <h1 class="mx-1 text-xs md:text-sm text-black font-medium capitalize">Nama</h1>
                                                        <input placeholder="Masukan nama tim evaluasi" required autocomplete="off" class="transition-colors duration-500 w-full text-[10px] md:text-xs text-[#C4C4C5] focus:text-black font-normal placeholder:text-[10px] md:placeholder:text-xs focus:placeholder:text-black placeholder:font-normal bg-transparent px-5 py-1.5 md:py-2 border border-[#C4C4C5] focus:border-black rounded-md focus:outline-none focus:ring-0"/>
                                                    </label>
                                                    <div x-data="imageUploadHandler()">
                                                        <label for="image" class="grid gap-1">
                                                            <h1 class="mx-1 text-xs md:text-sm text-black font-medium capitalize">Tanda tangan admin desa</h1>
                                                            <div class="flex justify-center items-center gap-2 md:gap-3 border-[1px] border-[#C4C4C5] p-3 rounded-md cursor-pointer">
                                                                <template x-if="imageUrl">
                                                                    <img :src="imageUrl" class="w-14 h-14 object-cover"/>
                                                                </template>
                                                                <div x-show="!imageUrl" class="flex items-center gap-2 md:gap-3">
                                                                    <h1 class="text-[10px] md:text-xs text-[#778294] font-normal">Upload File</h1>
                                                                    <svg class="w-3" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M5.30368 0.575012C5.57309 0.304564 5.87211 0.0803688 6.25422 0.0194877C6.33563 0.00651769 6.41775 0 6.50001 0C6.58226 0 6.66438 0.00651749 6.74579 0.0194876C7.1279 0.0803688 7.42692 0.304564 7.69633 0.575013C7.95886 0.838559 8.25217 1.2085 8.60763 1.65682L9.55846 2.85602C9.73003 3.0724 9.6937 3.38689 9.47732 3.55846C9.26094 3.73002 8.94645 3.69369 8.77488 3.47731L7.84299 2.302C7.47084 1.83265 7.21511 1.51131 7.00001 1.29301V9.83333C7.00001 10.1095 6.77615 10.3333 6.50001 10.3333C6.22387 10.3333 6.00001 10.1095 6.00001 9.83333V1.29301C5.7849 1.51131 5.52917 1.83265 5.15703 2.302L4.22513 3.47731C4.05356 3.69369 3.73907 3.73002 3.52269 3.55846C3.30631 3.38689 3.26999 3.0724 3.44155 2.85602L4.39238 1.65683C4.74783 1.20852 5.04116 0.838554 5.30368 0.575012Z" fill="#8B8B8B"/>
                                                                        <path d="M12.2334 5.53304C12.0675 5.31225 11.7541 5.2677 11.5333 5.43355C11.3125 5.59939 11.268 5.91283 11.4338 6.13362C11.7895 6.60711 12 7.19491 12 7.83333V8.5C12 9.13844 11.9985 9.39945 11.9651 9.6099C11.7731 10.8223 10.8223 11.7731 9.6099 11.9651C9.39946 11.9984 9.13845 12 8.50001 12H4.50001C3.86156 12 3.60055 11.9984 3.39011 11.9651C2.17775 11.7731 1.22691 10.8223 1.03489 9.6099C1.00156 9.39945 1.00001 9.13844 1.00001 8.5V7.83333C1.00001 7.19491 1.21056 6.60711 1.56621 6.13362C1.73206 5.91283 1.68751 5.59939 1.46672 5.43355C1.24592 5.2677 0.93249 5.31225 0.766645 5.53304C0.285381 6.17376 5.55369e-06 6.97094 5.55369e-06 7.83333L2.7324e-06 8.55388C-4.23287e-05 9.12189 -6.97474e-05 9.46788 0.0472003 9.76633C0.306991 11.4066 1.59342 12.693 3.23367 12.9528C3.53213 13.0001 3.87812 13 4.44614 13H8.55387C9.12189 13 9.46789 13.0001 9.76634 12.9528C11.4066 12.693 12.693 11.4066 12.9528 9.76633C13.0001 9.46788 13.0001 9.12189 13 8.55387L13 7.83333C13 6.97094 12.7146 6.17376 12.2334 5.53304Z" fill="#8B8B8B"/>                                                                                    
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <input id="image" type="file" class="hidden" @change="previewImage">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="flex justify-center items-center gap-2 md:gap-3">
                                                    <button type="button" @click="modal = false" class="bg-[#FF4E4E] py-1.5 px-4 md:px-5 rounded">
                                                        <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Batal</h1>
                                                    </button>
                                                    <button class="bg-primary py-1.5 px-4 md:px-5 rounded">
                                                        <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Simpan</h1>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div x-data="{ modal : false }" class="relative group">
                                <div class="space-y-2">
                                    <button type="button" @click="modal = !modal" class="bg-[#FFCCCC] p-1.5 md:p-[8px] rounded-full">
                                        <svg class="w-[18px] md:w-5" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.5 4.2509C2.22386 4.2509 2 4.47475 2 4.7509C2 5.02704 2.22386 5.2509 2.5 5.2509V4.2509ZM14.5 5.2509C14.7761 5.2509 15 5.02704 15 4.7509C15 4.47475 14.7761 4.2509 14.5 4.2509V5.2509ZM3.83333 4.7509V4.2509H3.33333V4.7509H3.83333ZM13.1667 4.7509H13.6667V4.2509H13.1667V4.7509ZM12.7279 11.2827L13.2083 11.4214L12.7279 11.2827ZM9.6493 13.9661L9.73262 14.4591H9.73262L9.6493 13.9661ZM7.35067 13.9661L7.43399 13.4731L7.43398 13.4731L7.35067 13.9661ZM7.24551 13.9483L7.1622 14.4413H7.1622L7.24551 13.9483ZM4.2721 11.2827L3.79171 11.4214L4.2721 11.2827ZM9.75448 13.9483L9.67117 13.4553L9.75448 13.9483ZM5.72836 3.72209L6.18222 3.93188L5.72836 3.72209ZM6.37868 2.84991L6.04499 2.47755L6.04499 2.47755L6.37868 2.84991ZM7.35195 2.26714L7.52595 2.73589V2.73589L7.35195 2.26714ZM9.64805 2.26714L9.82205 1.79839V1.79839L9.64805 2.26714ZM11.2716 3.72209L11.7255 3.51231L11.2716 3.72209ZM2.5 5.2509H14.5V4.2509H2.5V5.2509ZM9.67117 13.4553L9.56599 13.4731L9.73262 14.4591L9.83779 14.4413L9.67117 13.4553ZM7.43398 13.4731L7.32882 13.4553L7.1622 14.4413L7.26736 14.4591L7.43398 13.4731ZM12.6667 4.7509V8.17972H13.6667V4.7509H12.6667ZM4.33333 8.17974V4.7509H3.33333V8.17974H4.33333ZM12.6667 8.17972C12.6667 9.18287 12.5255 10.1809 12.2475 11.144L13.2083 11.4214C13.5123 10.3681 13.6667 9.27664 13.6667 8.17972H12.6667ZM9.56599 13.4731C8.86024 13.5923 8.13974 13.5923 7.43399 13.4731L7.26736 14.4591C8.08341 14.597 8.91656 14.597 9.73262 14.4591L9.56599 13.4731ZM7.32882 13.4553C6.10349 13.2482 5.10105 12.3515 4.75248 11.144L3.79171 11.4214C4.24585 12.9945 5.55444 14.1696 7.1622 14.4413L7.32882 13.4553ZM4.75248 11.144C4.47446 10.1809 4.33333 9.18288 4.33333 8.17974H3.33333C3.33333 9.27665 3.48765 10.3681 3.79171 11.4214L4.75248 11.144ZM9.83779 14.4413C11.4455 14.1696 12.7541 12.9946 13.2083 11.4214L12.2475 11.144C11.8989 12.3515 10.8965 13.2482 9.67117 13.4553L9.83779 14.4413ZM6 4.7509C6 4.47161 6.0613 4.19349 6.18222 3.93188L5.2745 3.51231C5.0939 3.90303 5 4.32409 5 4.7509H6ZM6.18222 3.93188C6.30324 3.67005 6.48238 3.42838 6.71237 3.22228L6.04499 2.47755C5.71783 2.77073 5.45501 3.12179 5.2745 3.51231L6.18222 3.93188ZM6.71237 3.22228C6.94246 3.01608 7.21851 2.85001 7.52595 2.73589L7.17796 1.79839C6.75744 1.95448 6.37205 2.18446 6.04499 2.47755L6.71237 3.22228ZM7.52595 2.73589C7.83341 2.62176 8.16454 2.5625 8.5 2.5625V1.5625C8.04753 1.5625 7.59844 1.64231 7.17796 1.79839L7.52595 2.73589ZM8.5 2.5625C8.83546 2.5625 9.16659 2.62176 9.47406 2.73589L9.82205 1.79839C9.40156 1.64231 8.95247 1.5625 8.5 1.5625V2.5625ZM9.47406 2.73589C9.78149 2.85001 10.0575 3.01608 10.2876 3.22228L10.955 2.47755C10.6279 2.18447 10.2426 1.95448 9.82205 1.79839L9.47406 2.73589ZM10.2876 3.22228C10.5176 3.42838 10.6968 3.67005 10.8178 3.93188L11.7255 3.51231C11.545 3.12179 11.2822 2.77073 10.955 2.47755L10.2876 3.22228ZM10.8178 3.93188C10.9387 4.1935 11 4.47161 11 4.7509H12C12 4.32409 11.9061 3.90303 11.7255 3.51231L10.8178 3.93188ZM3.83333 5.2509H13.1667V4.2509H3.83333V5.2509Z" fill="#FF4E4E"/>
                                            <path d="M7.1665 8.0625V10.7292M9.83317 8.0625V10.7292" stroke="#FF4E4E" stroke-linecap="round"/>
                                        </svg>
                                    </button>
                                    <div class="absolute left-0 hidden group-hover:block bg-[#FFCCCC] py-1.5 px-5 shadow-md shadow-[#00000014] rounded">
                                        <h1 class="text-[10px] md:text-xs text-[#FF4E4E] font-medium">Hapus</h1>
                                    </div>
                                </div>
                                <div x-show="modal" x-transition.duration.300ms.opacity.50 :class="{ 'visible': modal, 'invisible': !modal }" class="invisible fixed inset-0 z-50 bg-[#0000006E] flex items-center justify-center h-screen">
                                    <div class="w-[80%] sm:w-[50%] md:w-[40%] lg:w-[25%] bg-white rounded-lg md:rounded-xl">
                                        <div class="flex justify-between items-center border-b border-[#D1D1D1] py-2.5 px-3">
                                            <div class=""></div>
                                            <h1 class="text-sm md:text-base text-black font-semibold">Notifikasi</h1>
                                            <button type="button" @click="modal = false" type="button" class="bg-[#E8E8E8] p-2 rounded-full">
                                                <svg class="w-3 fill-[#8B8B8B]" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.0204 1.68705C11.2157 1.49179 11.2157 1.1752 11.0204 0.979943C10.8251 0.784681 10.5086 0.784681 10.3133 0.979943L6.00017 5.29307L1.68705 0.979945C1.49179 0.784683 1.1752 0.784683 0.979943 0.979945C0.784681 1.17521 0.784681 1.49179 0.979943 1.68705L5.29306 6.00017L0.979961 10.3133C0.784699 10.5085 0.784699 10.8251 0.979961 11.0204C1.17522 11.2156 1.49181 11.2156 1.68707 11.0204L6.00017 6.70728L10.3133 11.0204C10.5085 11.2156 10.8251 11.2156 11.0204 11.0204C11.2156 10.8251 11.2156 10.5085 11.0204 10.3133L6.70728 6.00017L11.0204 1.68705Z"/>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="pt-2.5 pb-3.5 px-5 space-y-8">
                                            <h1 class="text-center text-sm md:text-base text-black font-normal">Konfirmasi hapus admin desa</h1>
                                            <div class="flex justify-center items-center gap-2 md:gap-3">
                                                <button type="button" @click="modal = false" class="bg-[#FF4E4E] py-1.5 px-4 md:px-5 rounded">
                                                    <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Batal</h1>
                                                </button>
                                                <button class="bg-primary py-1.5 px-4 md:px-5 rounded">
                                                    <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Konfirmasi</h1>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="border-[0.5px] border-[#f1f1f1]">
            <div x-data="{ modal : false }" class="flex items-center gap-2 md:gap-3">
                <button @click="modal = !modal" class="bg-[#F4F4F4] p-2 rounded md:rounded-md">
                    <svg class="w-4 md:w-5" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1" y="0.562988" width="25" height="25" rx="12.5" stroke="#A0A0A0"/>
                        <path d="M13.9377 8.39648C13.9377 8.15486 13.7418 7.95898 13.5002 7.95898C13.2585 7.95898 13.0627 8.15486 13.0627 8.39648L13.0627 12.6257H8.8335C8.59187 12.6257 8.396 12.8215 8.396 13.0632C8.396 13.3048 8.59187 13.5007 8.8335 13.5007H13.0627V17.7298C13.0627 17.9714 13.2585 18.1673 13.5002 18.1673C13.7418 18.1673 13.9377 17.9714 13.9377 17.7298V13.5007H18.1668C18.4085 13.5007 18.6043 13.3048 18.6043 13.0632C18.6043 12.8215 18.4085 12.6257 18.1668 12.6257H13.9377L13.9377 8.39648Z" fill="#A0A0A0"/>
                    </svg>
                </button>
                <h1 class="text-[10px] md:text-xs text-black font-normal">Tambah admin desa</h1>
                <div x-show="modal" x-transition.duration.300ms.opacity.50 :class="{ 'visible': modal, 'invisible': !modal }" class="invisible fixed inset-0 z-50 bg-[#0000006E] flex items-center justify-center h-screen">
                    <div class="w-[80%] sm:w-[50%] md:w-[35%] lg:w-[30%] bg-white rounded-lg md:rounded-xl">
                        <div class="flex justify-between items-center border-b border-[#D1D1D1] py-2.5 px-3">
                            <div class=""></div>
                            <h1 class="text-sm md:text-base text-black font-semibold">Tambah admin desa</h1>
                            <button type="button" @click="modal = false" type="button" class="bg-[#E8E8E8] p-2 rounded-full">
                                <svg class="w-3 fill-[#8B8B8B]" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.0204 1.68705C11.2157 1.49179 11.2157 1.1752 11.0204 0.979943C10.8251 0.784681 10.5086 0.784681 10.3133 0.979943L6.00017 5.29307L1.68705 0.979945C1.49179 0.784683 1.1752 0.784683 0.979943 0.979945C0.784681 1.17521 0.784681 1.49179 0.979943 1.68705L5.29306 6.00017L0.979961 10.3133C0.784699 10.5085 0.784699 10.8251 0.979961 11.0204C1.17522 11.2156 1.49181 11.2156 1.68707 11.0204L6.00017 6.70728L10.3133 11.0204C10.5085 11.2156 10.8251 11.2156 11.0204 11.0204C11.2156 10.8251 11.2156 10.5085 11.0204 10.3133L6.70728 6.00017L11.0204 1.68705Z"/>
                                </svg>
                            </button>
                        </div>
                        <div class="pt-2.5 pb-3.5 px-5 space-y-8">
                            <form class="w-full bg-transparent space-y-5 md:space-y-6 rounded md:rounded-md">
                                <div class="grid gap-y-3 text-start">
                                    <label class="grid gap-1">
                                        <h1 class="mx-1 text-xs md:text-sm text-black font-medium capitalize">Nama</h1>
                                        <input placeholder="Masukan nama tim evaluasi" required autocomplete="off" class="transition-colors duration-500 w-full text-[10px] md:text-xs text-[#C4C4C5] focus:text-black font-normal placeholder:text-[10px] md:placeholder:text-xs focus:placeholder:text-black placeholder:font-normal bg-transparent px-5 py-1.5 md:py-2 border border-[#C4C4C5] focus:border-black rounded-md focus:outline-none focus:ring-0"/>
                                    </label>
                                    <div x-data="imageUploadHandler()">
                                        <label for="image" class="grid gap-1">
                                            <h1 class="mx-1 text-xs md:text-sm text-black font-medium capitalize">Tanda tangan admin desa</h1>
                                            <div class="flex justify-center items-center gap-2 md:gap-3 border-[1px] border-[#C4C4C5] p-3 rounded-md cursor-pointer">
                                                <template x-if="imageUrl">
                                                    <img :src="imageUrl" class="w-14 h-14 object-cover"/>
                                                </template>
                                                <div x-show="!imageUrl" class="flex items-center gap-2 md:gap-3">
                                                    <h1 class="text-[10px] md:text-xs text-[#778294] font-normal">Upload File</h1>
                                                    <svg class="w-3" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5.30368 0.575012C5.57309 0.304564 5.87211 0.0803688 6.25422 0.0194877C6.33563 0.00651769 6.41775 0 6.50001 0C6.58226 0 6.66438 0.00651749 6.74579 0.0194876C7.1279 0.0803688 7.42692 0.304564 7.69633 0.575013C7.95886 0.838559 8.25217 1.2085 8.60763 1.65682L9.55846 2.85602C9.73003 3.0724 9.6937 3.38689 9.47732 3.55846C9.26094 3.73002 8.94645 3.69369 8.77488 3.47731L7.84299 2.302C7.47084 1.83265 7.21511 1.51131 7.00001 1.29301V9.83333C7.00001 10.1095 6.77615 10.3333 6.50001 10.3333C6.22387 10.3333 6.00001 10.1095 6.00001 9.83333V1.29301C5.7849 1.51131 5.52917 1.83265 5.15703 2.302L4.22513 3.47731C4.05356 3.69369 3.73907 3.73002 3.52269 3.55846C3.30631 3.38689 3.26999 3.0724 3.44155 2.85602L4.39238 1.65683C4.74783 1.20852 5.04116 0.838554 5.30368 0.575012Z" fill="#8B8B8B"/>
                                                        <path d="M12.2334 5.53304C12.0675 5.31225 11.7541 5.2677 11.5333 5.43355C11.3125 5.59939 11.268 5.91283 11.4338 6.13362C11.7895 6.60711 12 7.19491 12 7.83333V8.5C12 9.13844 11.9985 9.39945 11.9651 9.6099C11.7731 10.8223 10.8223 11.7731 9.6099 11.9651C9.39946 11.9984 9.13845 12 8.50001 12H4.50001C3.86156 12 3.60055 11.9984 3.39011 11.9651C2.17775 11.7731 1.22691 10.8223 1.03489 9.6099C1.00156 9.39945 1.00001 9.13844 1.00001 8.5V7.83333C1.00001 7.19491 1.21056 6.60711 1.56621 6.13362C1.73206 5.91283 1.68751 5.59939 1.46672 5.43355C1.24592 5.2677 0.93249 5.31225 0.766645 5.53304C0.285381 6.17376 5.55369e-06 6.97094 5.55369e-06 7.83333L2.7324e-06 8.55388C-4.23287e-05 9.12189 -6.97474e-05 9.46788 0.0472003 9.76633C0.306991 11.4066 1.59342 12.693 3.23367 12.9528C3.53213 13.0001 3.87812 13 4.44614 13H8.55387C9.12189 13 9.46789 13.0001 9.76634 12.9528C11.4066 12.693 12.693 11.4066 12.9528 9.76633C13.0001 9.46788 13.0001 9.12189 13 8.55387L13 7.83333C13 6.97094 12.7146 6.17376 12.2334 5.53304Z" fill="#8B8B8B"/>                                                                                    
                                                    </svg>
                                                </div>
                                            </div>
                                            <input id="image" type="file" class="hidden" @change="previewImage">
                                        </label>
                                    </div>
                                </div>
                                <div class="flex justify-center items-center gap-2 md:gap-3">
                                    <button type="button" @click="modal = false" class="bg-[#FF4E4E] py-2 px-4 md:px-5 rounded">
                                        <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Batal</h1>
                                    </button>
                                    <button class="bg-primary py-2 px-4 md:px-5 rounded">
                                        <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Simpan</h1>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="w-full bg-white p-3 md:p-4 rounded-md md:rounded-lg">
    <div x-data="{ accordion : false }" class="space-y-3">
        <div @click="accordion = !accordion" class="flex items-center gap-2 md:gap-3 cursor-pointer">
            <svg class="w-3 md:w-4 fill-[#2D264B]" viewBox="0 0 13 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.0327 1.59046C12.3243 1.29626 12.3222 0.821393 12.028 0.529809C11.7338 0.238226 11.2589 0.240344 10.9673 0.534541L9.22 2.29751C8.51086 3.013 8.02282 3.50381 7.6093 3.83591C7.2076 4.1585 6.94958 4.26918 6.7185 4.29863C6.57341 4.31712 6.42659 4.31712 6.2815 4.29863C6.05042 4.26918 5.7924 4.15851 5.39071 3.83591C4.97718 3.50381 4.48914 3.01301 3.78 2.29751L2.03269 0.534542C1.74111 0.240345 1.26624 0.238226 0.972041 0.52981C0.677844 0.821394 0.675726 1.29626 0.967309 1.59046L2.74609 3.38519C3.41604 4.06116 3.96359 4.61364 4.45146 5.00544C4.95879 5.41287 5.47373 5.70781 6.09184 5.78659C6.36287 5.82114 6.63714 5.82114 6.90816 5.78659C7.52628 5.70781 8.04122 5.41287 8.54854 5.00544C9.03641 4.61364 9.58396 4.06117 10.2539 3.38519L12.0327 1.59046Z"/>
            </svg>
            <h1 class="text-xs md:text-sm text-black font-semibold">Tim Evaluasi</h1>
        </div>

        <div x-show="accordion" @click.outside="accordion = false" x-transition.duration.300ms.opacity.50 :class="{ 'block': accordion, 'hidden': !accordion }" class="hidden space-y-3">
            <hr class="border-[0.5px] border-[#f1f1f1]">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 md:gap-4">
                <div class="border border-[#E9E9E9] p-3 rounded-md md:rounded-lg space-y-3">
                    <div class="space-y-2">
                        <h1 class="text-[10px] md:text-xs text-black font-normal">Nama : Rizky Rahman Rambe</h1>
                        <div class="flex items-start gap-2">
                            <span class="text-[10px] md:text-xs text-black font-normal">Tanda Tangan :</span>
                            <img class="w-14 h-14 bg-transparent object-cover" src="/svgs/barcode.svg">
                        </div>
                    </div>
                </div>
                <div class="border border-[#E9E9E9] p-3 rounded-md md:rounded-lg space-y-3">
                    <div class="space-y-2">
                        <h1 class="text-[10px] md:text-xs text-black font-normal">Nama : Rizky Rahman Rambe</h1>
                        <div class="flex items-start gap-2">
                            <span class="text-[10px] md:text-xs text-black font-normal">Tanda Tangan :</span>
                            <img class="w-14 h-14 bg-transparent object-cover" src="/svgs/barcode.svg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>