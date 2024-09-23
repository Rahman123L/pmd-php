<div x-show="window.innerWidth < 640 && isOpen" x-transition.opacity :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden fixed inset-0 bg-zinc-800 bg-opacity-80 z-40"></div>
<div x-data="{ isOpenn : true }">
    <?php include_once("../pmd/layout/sidebar.php"); ?>

    <main :class="isOpenn ? 'md:ml-60' : 'md:ml-20 ' + 'transition-all duration-500'" class="relative md:ml-60 pt-16 p-5 space-y-5">
        <div class="flex justify-between items-center">
            <h1 class="text-base md:text-lg lg:text-xl text-black font-medium">Dashboard</h1>
            <h1 class="text-xs md:text-sm text-black font-medium"><span class="text-primary font-medium">Home</span> / Dashboard</h1>
        </div>

        <section class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 md:gap-4 lg:gap-5">
            <div class="relative bg-primary py-3 md:py-5 text-center rounded-xl md:rounded-2xl md:space-y-1">
                <div class="absolute top-0 right-0">
                    <svg class="w-[57px] md:w-[77px] h-[28px] md:h-[48px]" viewBox="0 0 87 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M119.374 8.64602C119.374 18.2826 114.288 27.7388 104.623 35.1241C94.9491 42.5167 81.127 47.3905 65.4298 47.3905C49.7326 47.3905 35.9105 42.5167 26.2362 35.1241C16.5713 27.7388 11.4857 18.2826 11.4857 8.64602C11.4857 -0.990551 16.5713 -10.4468 26.2362 -17.8321C35.9105 -25.2247 49.7326 -30.0985 65.4298 -30.0985C81.127 -30.0985 94.9491 -25.2247 104.623 -17.8321C114.288 -10.4468 119.374 -0.990551 119.374 8.64602Z" stroke="url(#paint0_linear_26_450)" stroke-width="21"/>
                        <defs>
                        <linearGradient id="paint0_linear_26_450" x1="43.7845" y1="-33.4562" x2="56.5927" y2="59.1133" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#0C9D8D"/>
                        <stop offset="1" stop-color="#0C9D8D" stop-opacity="0"/>
                        </linearGradient>
                        </defs>
                    </svg> 
                </div>
                <div class="relative z-10 flex justify-start items-center gap-2 md:gap-3 px-3 md:px-5">
                    <div class="bg-[#7673AA] p-2.5 rounded-full">
                        <img class="w-5 md:w-8 h-5 md:h-8 object-contain" src="/svgs/kecamatan.svg">
                    </div>
                    <div class="text-start -space-y-1 md:space-y-0">
                        <h1 class="text-lg md:text-xl lg:text-2xl text-white font-black">9</span>
                        <h1 class="text-[10px] md:text-xs text-white font-medium">Jumlah Kecematan</h1>
                    </div>
                </div>
                <div class="absolute bottom-0 left-0">
                    <svg class="w-[53] md:w-[73px] h-[26] md:h-[46px]" viewBox="0 0 83 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M72.1459 49.8942C72.1459 59.5308 67.0602 68.987 57.3953 76.3723C47.721 83.7649 33.8989 88.6387 18.2017 88.6387C2.50453 88.6387 -11.3176 83.7649 -20.9919 76.3723C-30.6568 68.987 -35.7424 59.5308 -35.7424 49.8942C-35.7424 40.2576 -30.6568 30.8014 -20.9919 23.4161C-11.3176 16.0235 2.50453 11.1497 18.2017 11.1497C33.8989 11.1497 47.721 16.0235 57.3953 23.4161C67.0602 30.8014 72.1459 40.2576 72.1459 49.8942Z" stroke="url(#paint0_linear_26_451)" stroke-width="21"/>
                        <defs>
                        <linearGradient id="paint0_linear_26_451" x1="70.3474" y1="95.0037" x2="58.1681" y2="-9.73449" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#0C9D8D"/>
                        <stop offset="1" stop-color="#0C9D8D" stop-opacity="0"/>
                        </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>
            <div class="relative bg-primary py-3 md:py-5 text-center rounded-xl md:rounded-2xl md:space-y-1">
                <div class="absolute top-0 right-0">
                    <svg class="w-[57px] md:w-[77px] h-[28px] md:h-[48px]" viewBox="0 0 87 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M119.374 8.64602C119.374 18.2826 114.288 27.7388 104.623 35.1241C94.9491 42.5167 81.127 47.3905 65.4298 47.3905C49.7326 47.3905 35.9105 42.5167 26.2362 35.1241C16.5713 27.7388 11.4857 18.2826 11.4857 8.64602C11.4857 -0.990551 16.5713 -10.4468 26.2362 -17.8321C35.9105 -25.2247 49.7326 -30.0985 65.4298 -30.0985C81.127 -30.0985 94.9491 -25.2247 104.623 -17.8321C114.288 -10.4468 119.374 -0.990551 119.374 8.64602Z" stroke="url(#paint0_linear_26_450)" stroke-width="21"/>
                        <defs>
                        <linearGradient id="paint0_linear_26_450" x1="43.7845" y1="-33.4562" x2="56.5927" y2="59.1133" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#0C9D8D"/>
                        <stop offset="1" stop-color="#0C9D8D" stop-opacity="0"/>
                        </linearGradient>
                        </defs>
                    </svg> 
                </div>
                <div class="relative z-10 flex justify-start items-center gap-2 md:gap-3 px-3 md:px-5">
                    <div class="bg-[#E36A6F] p-2.5 rounded-full">
                        <img class="w-5 md:w-8 h-5 md:h-8 object-contain" src="/svgs/kelurahan.svg">
                    </div>
                    <div class="text-start -space-y-1 md:space-y-0">
                        <h1 class="text-lg md:text-xl lg:text-2xl text-white font-black">23</span>
                        <h1 class="text-[10px] md:text-xs text-white font-medium">Jumlah Kelurahan</h1>
                    </div>
                </div>
                <div class="absolute bottom-0 left-0">
                    <svg class="w-[53] md:w-[73px] h-[26] md:h-[46px]" viewBox="0 0 83 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M72.1459 49.8942C72.1459 59.5308 67.0602 68.987 57.3953 76.3723C47.721 83.7649 33.8989 88.6387 18.2017 88.6387C2.50453 88.6387 -11.3176 83.7649 -20.9919 76.3723C-30.6568 68.987 -35.7424 59.5308 -35.7424 49.8942C-35.7424 40.2576 -30.6568 30.8014 -20.9919 23.4161C-11.3176 16.0235 2.50453 11.1497 18.2017 11.1497C33.8989 11.1497 47.721 16.0235 57.3953 23.4161C67.0602 30.8014 72.1459 40.2576 72.1459 49.8942Z" stroke="url(#paint0_linear_26_451)" stroke-width="21"/>
                        <defs>
                        <linearGradient id="paint0_linear_26_451" x1="70.3474" y1="95.0037" x2="58.1681" y2="-9.73449" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#0C9D8D"/>
                        <stop offset="1" stop-color="#0C9D8D" stop-opacity="0"/>
                        </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>
            <div class="relative bg-primary py-3 md:py-5 text-center rounded-xl md:rounded-2xl md:space-y-1">
                <div class="absolute top-0 right-0">
                    <svg class="w-[57px] md:w-[77px] h-[28px] md:h-[48px]" viewBox="0 0 87 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M119.374 8.64602C119.374 18.2826 114.288 27.7388 104.623 35.1241C94.9491 42.5167 81.127 47.3905 65.4298 47.3905C49.7326 47.3905 35.9105 42.5167 26.2362 35.1241C16.5713 27.7388 11.4857 18.2826 11.4857 8.64602C11.4857 -0.990551 16.5713 -10.4468 26.2362 -17.8321C35.9105 -25.2247 49.7326 -30.0985 65.4298 -30.0985C81.127 -30.0985 94.9491 -25.2247 104.623 -17.8321C114.288 -10.4468 119.374 -0.990551 119.374 8.64602Z" stroke="url(#paint0_linear_26_450)" stroke-width="21"/>
                        <defs>
                        <linearGradient id="paint0_linear_26_450" x1="43.7845" y1="-33.4562" x2="56.5927" y2="59.1133" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#0C9D8D"/>
                        <stop offset="1" stop-color="#0C9D8D" stop-opacity="0"/>
                        </linearGradient>
                        </defs>
                    </svg> 
                </div>
                <div class="relative z-10 flex justify-start items-center gap-2 md:gap-3 px-3 md:px-5">
                    <div class="bg-[#4CB180] p-2.5 rounded-full">
                        <img class="w-5 md:w-8 h-5 md:h-8 object-contain" src="/svgs/desa.svg">
                    </div>
                    <div class="text-start -space-y-1 md:space-y-0">
                        <h1 class="text-lg md:text-xl lg:text-2xl text-white font-black">77</span>
                        <h1 class="text-[10px] md:text-xs text-white font-medium">Jumlah Desa</h1>
                    </div>
                </div>
                <div class="absolute bottom-0 left-0">
                    <svg class="w-[53] md:w-[73px] h-[26] md:h-[46px]" viewBox="0 0 83 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M72.1459 49.8942C72.1459 59.5308 67.0602 68.987 57.3953 76.3723C47.721 83.7649 33.8989 88.6387 18.2017 88.6387C2.50453 88.6387 -11.3176 83.7649 -20.9919 76.3723C-30.6568 68.987 -35.7424 59.5308 -35.7424 49.8942C-35.7424 40.2576 -30.6568 30.8014 -20.9919 23.4161C-11.3176 16.0235 2.50453 11.1497 18.2017 11.1497C33.8989 11.1497 47.721 16.0235 57.3953 23.4161C67.0602 30.8014 72.1459 40.2576 72.1459 49.8942Z" stroke="url(#paint0_linear_26_451)" stroke-width="21"/>
                        <defs>
                        <linearGradient id="paint0_linear_26_451" x1="70.3474" y1="95.0037" x2="58.1681" y2="-9.73449" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#0C9D8D"/>
                        <stop offset="1" stop-color="#0C9D8D" stop-opacity="0"/>
                        </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>
            <div class="relative bg-primary py-3 md:py-5 text-center rounded-xl md:rounded-2xl md:space-y-1">
                <div class="absolute top-0 right-0">
                    <svg class="w-[57px] md:w-[77px] h-[28px] md:h-[48px]" viewBox="0 0 87 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M119.374 8.64602C119.374 18.2826 114.288 27.7388 104.623 35.1241C94.9491 42.5167 81.127 47.3905 65.4298 47.3905C49.7326 47.3905 35.9105 42.5167 26.2362 35.1241C16.5713 27.7388 11.4857 18.2826 11.4857 8.64602C11.4857 -0.990551 16.5713 -10.4468 26.2362 -17.8321C35.9105 -25.2247 49.7326 -30.0985 65.4298 -30.0985C81.127 -30.0985 94.9491 -25.2247 104.623 -17.8321C114.288 -10.4468 119.374 -0.990551 119.374 8.64602Z" stroke="url(#paint0_linear_26_450)" stroke-width="21"/>
                        <defs>
                        <linearGradient id="paint0_linear_26_450" x1="43.7845" y1="-33.4562" x2="56.5927" y2="59.1133" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#0C9D8D"/>
                        <stop offset="1" stop-color="#0C9D8D" stop-opacity="0"/>
                        </linearGradient>
                        </defs>
                    </svg> 
                </div>
                <div class="relative z-10 flex justify-start items-center gap-2 md:gap-3 px-3 md:px-5">
                    <div class="bg-[#6AB4D5] p-2.5 rounded-full">
                        <img class="w-5 md:w-8 h-5 md:h-8 object-contain" src="/svgs/dusun.svg">
                    </div>
                    <div class="text-start -space-y-1 md:space-y-0">
                        <h1 class="text-lg md:text-xl lg:text-2xl text-white font-black">212</span>
                        <h1 class="text-[10px] md:text-xs text-white font-medium">Jumlah Dusun</h1>
                    </div>
                </div>
                <div class="absolute bottom-0 left-0">
                    <svg class="w-[53] md:w-[73px] h-[26] md:h-[46px]" viewBox="0 0 83 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M72.1459 49.8942C72.1459 59.5308 67.0602 68.987 57.3953 76.3723C47.721 83.7649 33.8989 88.6387 18.2017 88.6387C2.50453 88.6387 -11.3176 83.7649 -20.9919 76.3723C-30.6568 68.987 -35.7424 59.5308 -35.7424 49.8942C-35.7424 40.2576 -30.6568 30.8014 -20.9919 23.4161C-11.3176 16.0235 2.50453 11.1497 18.2017 11.1497C33.8989 11.1497 47.721 16.0235 57.3953 23.4161C67.0602 30.8014 72.1459 40.2576 72.1459 49.8942Z" stroke="url(#paint0_linear_26_451)" stroke-width="21"/>
                        <defs>
                        <linearGradient id="paint0_linear_26_451" x1="70.3474" y1="95.0037" x2="58.1681" y2="-9.73449" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#0C9D8D"/>
                        <stop offset="1" stop-color="#0C9D8D" stop-opacity="0"/>
                        </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>
        </section>

        <section class="flex items-center gap-2 md:gap-3">
            <div x-data="{ isOpen : false }" class="space-y-2">
                <button @click="isOpen = !isOpen" class="flex justify-center items-center gap-2 md:gap-3 w-fit bg-white py-2 px-4 rounded md:rounded-md">
                    <h1 class="text-xs md:text-sm text-black font-normal">Pilih Desa</h1>
                    <svg class="w-2 md:w-3 stroke-black stroke-[1.5]" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 1.53284L9.25269 3.29581C7.85925 4.70174 7.16253 5.40471 6.31333 5.51295C6.10527 5.53947 5.89473 5.53947 5.68667 5.51295C4.83748 5.40471 4.14075 4.70174 2.74731 3.29581L1 1.53284" stroke-linecap="round"/>
                    </svg>
                </button>
                <div x-show="isOpen" @click.outside="isOpen = false" class="absolute w-[70%]">
                    <?php include_once("../pmd/components/desa/content.php") ?>
                </div>
            </div>
            <div class="">
                <div class="flex justify-center items-center gap-2 md:gap-3 w-fit bg-white py-2 px-4 rounded md:rounded-md">
                    <h1 class="text-xs md:text-sm text-black font-normal">Pilih Tahun</h1>
                    <svg class="w-2 md:w-3 stroke-black stroke-[1.5]" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 1.53284L9.25269 3.29581C7.85925 4.70174 7.16253 5.40471 6.31333 5.51295C6.10527 5.53947 5.89473 5.53947 5.68667 5.51295C4.83748 5.40471 4.14075 4.70174 2.74731 3.29581L1 1.53284" stroke-linecap="round"/>
                    </svg>
                </div>
            </div>
            <div class="flex justify-center items-center gap-2 md:gap-3 w-fit bg-white py-2 px-4 rounded md:rounded-md">
                <h1 class="text-xs md:text-sm text-black font-normal">Pilih Bulan</h1>
                <svg class="w-2 md:w-3 stroke-black stroke-[1.5]" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11 1.53284L9.25269 3.29581C7.85925 4.70174 7.16253 5.40471 6.31333 5.51295C6.10527 5.53947 5.89473 5.53947 5.68667 5.51295C4.83748 5.40471 4.14075 4.70174 2.74731 3.29581L1 1.53284" stroke-linecap="round"/>
                </svg>
            </div>
        </section>

        <section class="grid grid-cols-1 lg:grid-cols-5 gap-4">
            <div class="row-span-2 col-span-1 lg:col-span-3 h-fit">
                <div class="h-[300px] lg:h-[400px] bg-white p-3 pb-14 md:p-4 md:pb-[70px] space-y-2 md:space-y-3 rounded md:rounded-md">
                    <h1 class="text-xs md:text-sm text-primary font-normal">Grafik Kependudukan Desa Janji Tahun 2024</h1>
                    <canvas id="chartLine"></canvas>
                    <div class="flex items-center gap-5 md:gap-10">
                        <div class="flex items-center gap-3">
                            <div class="bg-primary p-2 md:p-2.5"></div>
                            <h1 class="text-[10px] md:text-xs text-black font-normal">Laki - laki</h1>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="bg-secondary p-2 md:p-2.5"></div>
                            <h1 class="text-[10px] md:text-xs text-black font-normal">Perempuan</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid row-span-1 col-span-1 lg:col-span-2 h-fit gap-4">
                <div class="bg-white p-3 md:p-4 space-y-5 rounded md:rounded-md">
                    <h1 class="text-xs md:text-sm text-black font-normal">Data Kependudukan</h1>
                    <div class="space-y-4">
                        <div class="space-y-2">
                            <h1 class="text-[10px] md:text-xs text-[#8B8B8B] font-normal">Usia 1-10</h1>
                            <div class="w-full flex justify-center items-center bg-slate-100 rounded-full h-2">
                                <div class="w-[60%] bg-primary py-0.5 text-center rounded-l-full">
                                    <h1 class="text-[8px] md:text-[10px] text-white font-normal">1.400 jiwa</h1>
                                </div>
                                <div class="w-[40%] bg-secondary py-0.5 text-center rounded-r-full">
                                    <h1 class="text-[8px] md:text-[10px] text-white font-normal">1.400 jiwa</h1>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <h1 class="text-[10px] md:text-xs text-[#8B8B8B] font-normal">Usia 11-20</h1>
                            <div class="w-full flex justify-center items-center bg-slate-100 rounded-full h-2">
                                <div class="w-[70%] bg-primary py-0.5 text-center rounded-l-full">
                                    <h1 class="text-[8px] md:text-[10px] text-white font-normal">1.400 jiwa</h1>
                                </div>
                                <div class="w-[30%] bg-secondary py-0.5 text-center rounded-r-full">
                                    <h1 class="text-[8px] md:text-[10px] text-white font-normal">1.400 jiwa</h1>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <h1 class="text-[10px] md:text-xs text-[#8B8B8B] font-normal">Usia 21-30</h1>
                            <div class="w-full flex justify-center items-center bg-slate-100 rounded-full h-2">
                                <div class="w-[40%] bg-primary py-0.5 text-center rounded-l-full">
                                    <h1 class="text-[8px] md:text-[10px] text-white font-normal">1.400 jiwa</h1>
                                </div>
                                <div class="w-[60%] bg-secondary py-0.5 text-center rounded-r-full">
                                    <h1 class="text-[8px] md:text-[10px] text-white font-normal">1.400 jiwa</h1>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <h1 class="text-[10px] md:text-xs text-[#8B8B8B] font-normal">Usia 30-55</h1>
                            <div class="w-full flex justify-center items-center bg-slate-100 rounded-full h-2">
                                <div class="w-[50%] bg-primary py-0.5 text-center rounded-l-full">
                                    <h1 class="text-[8px] md:text-[10px] text-white font-normal">1.400 jiwa</h1>
                                </div>
                                <div class="w-[50%] bg-secondary py-0.5 text-center rounded-r-full">
                                    <h1 class="text-[8px] md:text-[10px] text-white font-normal">1.400 jiwa</h1>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <h1 class="text-[10px] md:text-xs text-[#8B8B8B] font-normal">Lansia</h1>
                            <div class="w-full flex justify-center items-center bg-slate-100 rounded-full h-2">
                                <div class="w-[50%] bg-primary py-0.5 text-center rounded-l-full">
                                    <h1 class="text-[8px] md:text-[10px] text-white font-normal">1.400 jiwa</h1>
                                </div>
                                <div class="w-[50%] bg-secondary py-0.5 text-center rounded-r-full">
                                    <h1 class="text-[8px] md:text-[10px] text-white font-normal">1.400 jiwa</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-5 md:gap-10 pt-2">
                        <div class="flex items-center gap-3">
                            <div class="bg-primary p-2 md:p-2.5"></div>
                            <h1 class="text-[10px] md:text-xs text-black font-normal">Laki - laki</h1>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="bg-secondary p-2 md:p-2.5"></div>
                            <h1 class="text-[10px] md:text-xs text-black font-normal">Perempuan</h1>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center gap-2 md:gap-3 bg-white py-2 md:py-2.5 rounded md:rounded-md">
                    <h1 class="text-xs md:text-sm text-primary font-normal">Lihat Data Lengkap</h1>
                    <svg class="w-1 md:w-1.5 stroke-primary stroke-[1.5]" viewBox="0 0 6 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1.5L2.76297 3.24731C4.1689 4.64075 4.87187 5.33747 4.98011 6.18667C5.00663 6.39473 5.00663 6.60527 4.98011 6.81333C4.87187 7.66252 4.1689 8.35925 2.76297 9.75269L1 11.5" stroke-linecap="round"/>
                    </svg>
                </div>
            </div>
        </section>

        <section class="grid grid-cols-1 lg:grid-cols-5 gap-4">
            <div class="row-span-2 col-span-1 lg:col-span-3 h-fit">
                <div class="flex justify-between items-center bg-white py-2.5 md:py-3 px-5 md:px-6 rounded-t md:rounded-t-md">
                    <h1 class="text-xs md:text-sm text-primary font-normal">Manajemen Surat</h1>
                    <div class="flex justify-center items-center gap-2 md:gap-3">
                        <h1 class="text-xs md:text-sm text-primary font-normal">Lihat Data Lengkap</h1>
                        <svg class="w-1 md:w-1.5 stroke-primary stroke-[1.5]" viewBox="0 0 6 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1.5L2.76297 3.24731C4.1689 4.64075 4.87187 5.33747 4.98011 6.18667C5.00663 6.39473 5.00663 6.60527 4.98011 6.81333C4.87187 7.66252 4.1689 8.35925 2.76297 9.75269L1 11.5" stroke-linecap="round"/>
                        </svg>
                    </div>
                </div>
                <div class="scrollbar-x bg-transparent rounded-b md:rounded-b-md">
                    <table class="w-max lg:w-full mx-auto bg-white text-center table-auto">
                        <tr class="text-[10px] md:text-xs text-black capitalize">
                            <th class="w-[20%] bg-[#F2F8FF] font-normal p-3 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">Kode Desa</th>
                            <th class="w-[20%] bg-[#F2F8FF] font-normal p-3 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">Nama Desa</th>
                            <th class="w-[20%] bg-[#F2F8FF] font-normal p-3 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">Judul Surat</th>
                            <th class="w-[30%] bg-[#F2F8FF] font-normal p-3 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">Status</th>
                            <th class="w-[20%] bg-[#F2F8FF] font-normal p-3 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">Tindakan</th>
                        </tr>
                        <tr class="text-xs text-black/70 capitalize overflow-visible">
                            <td class="bg-white font-normal py-3.5 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">0012</td>
                            <td class="bg-white py-3.5 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">
                                <h1 class="line-clamp-1 font-normal capitalize">Desa Lingga Tiga</h1>
                            </td>
                            <td class="bg-white py-3.5 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">
                                <h1 class="line-clamp-1 font-normal">Undangan Sosialisasi</h1>
                            </td>
                            <td class="bg-white font-normal py-3.5 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">
                                <div class="select-none flex items-center gap-2 w-fit bg-[#CEFFE8] py-1.5 px-2 rounded-xl mx-auto">
                                    <svg class="w-4" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.0501 11.45L12.3376 6.1625L11.2876 5.1125L7.0501 9.35L4.9126 7.2125L3.8626 8.2625L7.0501 11.45ZM8.1001 15.5C7.0626 15.5 6.0876 15.3031 5.1751 14.9094C4.2626 14.5156 3.46885 13.9813 2.79385 13.3063C2.11885 12.6313 1.58447 11.8375 1.19072 10.925C0.796973 10.0125 0.600098 9.0375 0.600098 8C0.600098 6.9625 0.796973 5.9875 1.19072 5.075C1.58447 4.1625 2.11885 3.36875 2.79385 2.69375C3.46885 2.01875 4.2626 1.48438 5.1751 1.09063C6.0876 0.696875 7.0626 0.5 8.1001 0.5C9.1376 0.5 10.1126 0.696875 11.0251 1.09063C11.9376 1.48438 12.7313 2.01875 13.4063 2.69375C14.0813 3.36875 14.6157 4.1625 15.0095 5.075C15.4032 5.9875 15.6001 6.9625 15.6001 8C15.6001 9.0375 15.4032 10.0125 15.0095 10.925C14.6157 11.8375 14.0813 12.6313 13.4063 13.3063C12.7313 13.9813 11.9376 14.5156 11.0251 14.9094C10.1126 15.3031 9.1376 15.5 8.1001 15.5Z" fill="#059669"/>
                                    </svg>
                                    <h1 class="text-[#059669] font-normal">Terkirim</h1>
                                </div>
                            </td>
                            <td class="bg-white font-normal py-3.5 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">
                                <button class="flex items-center gap-2 w-fit bg-primary py-1.5 px-2 rounded-md mx-auto">
                                    <svg class="w-4 fill-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.25C9.92893 8.25 8.25 9.92893 8.25 12C8.25 14.0711 9.92893 15.75 12 15.75C14.0711 15.75 15.75 14.0711 15.75 12C15.75 9.92893 14.0711 8.25 12 8.25ZM9.75 12C9.75 10.7574 10.7574 9.75 12 9.75C13.2426 9.75 14.25 10.7574 14.25 12C14.25 13.2426 13.2426 14.25 12 14.25C10.7574 14.25 9.75 13.2426 9.75 12Z"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C7.48587 3.25 4.44529 5.9542 2.68057 8.24686L2.64874 8.2882C2.24964 8.80653 1.88206 9.28392 1.63269 9.8484C1.36564 10.4529 1.25 11.1117 1.25 12C1.25 12.8883 1.36564 13.5471 1.63269 14.1516C1.88206 14.7161 2.24964 15.1935 2.64875 15.7118L2.68057 15.7531C4.44529 18.0458 7.48587 20.75 12 20.75C16.5141 20.75 19.5547 18.0458 21.3194 15.7531L21.3512 15.7118C21.7504 15.1935 22.1179 14.7161 22.3673 14.1516C22.6344 13.5471 22.75 12.8883 22.75 12C22.75 11.1117 22.6344 10.4529 22.3673 9.8484C22.1179 9.28391 21.7504 8.80652 21.3512 8.28818L21.3194 8.24686C19.5547 5.9542 16.5141 3.25 12 3.25ZM3.86922 9.1618C5.49864 7.04492 8.15036 4.75 12 4.75C15.8496 4.75 18.5014 7.04492 20.1308 9.1618C20.5694 9.73159 20.8263 10.0721 20.9952 10.4545C21.1532 10.812 21.25 11.2489 21.25 12C21.25 12.7511 21.1532 13.188 20.9952 13.5455C20.8263 13.9279 20.5694 14.2684 20.1308 14.8382C18.5014 16.9551 15.8496 19.25 12 19.25C8.15036 19.25 5.49864 16.9551 3.86922 14.8382C3.43064 14.2684 3.17374 13.9279 3.00476 13.5455C2.84684 13.188 2.75 12.7511 2.75 12C2.75 11.2489 2.84684 10.812 3.00476 10.4545C3.17374 10.0721 3.43063 9.73159 3.86922 9.1618Z"/>
                                    </svg>
                                    <h1 class="text-white font-normal">Detail</h1>
                                </button>
                            </td>
                        </tr>
                        <tr class="text-xs text-black/70 capitalize overflow-visible">
                            <td class="bg-white font-normal py-3.5 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">0013</td>
                            <td class="bg-white py-3.5 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">
                                <h1 class="line-clamp-1 font-normal">Desa Tanjung Siram</h1>
                            </td>
                            <td class="bg-white py-3.5 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">
                                <h1 class="line-clamp-1 font-normal">Undangan Sosialisasi</h1>
                            </td>
                            <td class="bg-white font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">
                                <div class="select-none flex items-center gap-2 w-fit bg-[#FFEEA9] py-1.5 px-2 rounded-xl mx-auto">
                                    <svg class="w-4" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.6001 10.75C7.8126 10.75 7.99072 10.6781 8.13447 10.5344C8.27822 10.3906 8.3501 10.2125 8.3501 10C8.3501 9.7875 8.27822 9.60938 8.13447 9.46563C7.99072 9.32188 7.8126 9.25 7.6001 9.25C7.3876 9.25 7.20947 9.32188 7.06572 9.46563C6.92197 9.60938 6.8501 9.7875 6.8501 10C6.8501 10.2125 6.92197 10.3906 7.06572 10.5344C7.20947 10.6781 7.3876 10.75 7.6001 10.75ZM6.8501 7.75H8.3501V3.25H6.8501V7.75ZM4.7876 13.75L0.850098 9.8125V4.1875L4.7876 0.25H10.4126L14.3501 4.1875V9.8125L10.4126 13.75H4.7876Z" fill="#D97706"/>
                                    </svg>
                                    <h1 class="text-[#D97706] font-normal">BelumDilihat</h1>
                                </div>
                            </td>
                            <td class="bg-white font-normal py-3.5 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">
                                <button class="flex items-center gap-2 w-fit bg-primary py-1.5 px-2 rounded-md mx-auto">
                                    <svg class="w-4 fill-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.25C9.92893 8.25 8.25 9.92893 8.25 12C8.25 14.0711 9.92893 15.75 12 15.75C14.0711 15.75 15.75 14.0711 15.75 12C15.75 9.92893 14.0711 8.25 12 8.25ZM9.75 12C9.75 10.7574 10.7574 9.75 12 9.75C13.2426 9.75 14.25 10.7574 14.25 12C14.25 13.2426 13.2426 14.25 12 14.25C10.7574 14.25 9.75 13.2426 9.75 12Z"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C7.48587 3.25 4.44529 5.9542 2.68057 8.24686L2.64874 8.2882C2.24964 8.80653 1.88206 9.28392 1.63269 9.8484C1.36564 10.4529 1.25 11.1117 1.25 12C1.25 12.8883 1.36564 13.5471 1.63269 14.1516C1.88206 14.7161 2.24964 15.1935 2.64875 15.7118L2.68057 15.7531C4.44529 18.0458 7.48587 20.75 12 20.75C16.5141 20.75 19.5547 18.0458 21.3194 15.7531L21.3512 15.7118C21.7504 15.1935 22.1179 14.7161 22.3673 14.1516C22.6344 13.5471 22.75 12.8883 22.75 12C22.75 11.1117 22.6344 10.4529 22.3673 9.8484C22.1179 9.28391 21.7504 8.80652 21.3512 8.28818L21.3194 8.24686C19.5547 5.9542 16.5141 3.25 12 3.25ZM3.86922 9.1618C5.49864 7.04492 8.15036 4.75 12 4.75C15.8496 4.75 18.5014 7.04492 20.1308 9.1618C20.5694 9.73159 20.8263 10.0721 20.9952 10.4545C21.1532 10.812 21.25 11.2489 21.25 12C21.25 12.7511 21.1532 13.188 20.9952 13.5455C20.8263 13.9279 20.5694 14.2684 20.1308 14.8382C18.5014 16.9551 15.8496 19.25 12 19.25C8.15036 19.25 5.49864 16.9551 3.86922 14.8382C3.43064 14.2684 3.17374 13.9279 3.00476 13.5455C2.84684 13.188 2.75 12.7511 2.75 12C2.75 11.2489 2.84684 10.812 3.00476 10.4545C3.17374 10.0721 3.43063 9.73159 3.86922 9.1618Z"/>
                                    </svg>
                                    <h1 class="text-white font-normal">Detail</h1>
                                </button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
    </main>
</div>