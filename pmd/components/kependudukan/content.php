<div x-show="window.innerWidth < 640 && isOpen" x-transition.opacity :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden fixed inset-0 bg-zinc-800 bg-opacity-80 z-40"></div>
<div x-data="{ isOpenn : true }">
    <?php include_once("../pmd/layout/sidebar.php"); ?>

    <main :class="isOpenn ? 'md:ml-60' : 'md:ml-20 ' + 'transition-all duration-500'" class="relative md:ml-60 pt-16 p-5 space-y-5">
        <div class="flex justify-between items-center">
            <h1 class="text-base md:text-lg lg:text-xl text-black font-medium">Kependudukan</h1>
            <h1 class="text-xs md:text-sm text-black font-medium"><span class="text-[#615EFC] font-medium">Home</span> / Kependudukan</h1>
        </div>

        <section class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 md:gap-4 lg:gap-5">
            <div class="relative bg-[#615EFC] py-3 md:py-5 text-center rounded-xl md:rounded-2xl md:space-y-1">
                <div class="absolute top-0 right-0">
                    <svg class="w-[57px] md:w-[77px] h-[28px] md:h-[48px]" viewBox="0 0 87 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M119.374 8.64602C119.374 18.2826 114.288 27.7388 104.623 35.1241C94.9491 42.5167 81.127 47.3905 65.4298 47.3905C49.7326 47.3905 35.9105 42.5167 26.2362 35.1241C16.5713 27.7388 11.4857 18.2826 11.4857 8.64602C11.4857 -0.990551 16.5713 -10.4468 26.2362 -17.8321C35.9105 -25.2247 49.7326 -30.0985 65.4298 -30.0985C81.127 -30.0985 94.9491 -25.2247 104.623 -17.8321C114.288 -10.4468 119.374 -0.990551 119.374 8.64602Z" stroke="url(#paint0_linear_26_450)" stroke-width="21"/>
                        <defs>
                        <linearGradient id="paint0_linear_26_450" x1="43.7845" y1="-33.4562" x2="56.5927" y2="59.1133" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4081FF"/>
                        <stop offset="1" stop-color="#4081FF" stop-opacity="0"/>
                        </linearGradient>
                        </defs>
                    </svg> 
                </div>
                <h1 class="text-[10px] md:text-xs text-white font-medium">Jumlah Desa</h1>
                <h1 class="text-lg md:text-xl lg:text-2xl text-white font-medium">77</span>
                <div class="absolute bottom-0 left-0">
                    <svg class="w-[53] md:w-[73px] h-[26] md:h-[46px]" viewBox="0 0 83 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M72.1459 49.8942C72.1459 59.5308 67.0602 68.987 57.3953 76.3723C47.721 83.7649 33.8989 88.6387 18.2017 88.6387C2.50453 88.6387 -11.3176 83.7649 -20.9919 76.3723C-30.6568 68.987 -35.7424 59.5308 -35.7424 49.8942C-35.7424 40.2576 -30.6568 30.8014 -20.9919 23.4161C-11.3176 16.0235 2.50453 11.1497 18.2017 11.1497C33.8989 11.1497 47.721 16.0235 57.3953 23.4161C67.0602 30.8014 72.1459 40.2576 72.1459 49.8942Z" stroke="url(#paint0_linear_26_451)" stroke-width="21"/>
                        <defs>
                        <linearGradient id="paint0_linear_26_451" x1="70.3474" y1="95.0037" x2="58.1681" y2="-9.73449" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4081FF"/>
                        <stop offset="1" stop-color="#4081FF" stop-opacity="0"/>
                        </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>
            <div class="relative bg-[#615EFC] py-3 md:py-5 text-center rounded-xl md:rounded-2xl md:space-y-1">
                <div class="absolute top-0 right-0">
                    <svg class="w-[57px] md:w-[77px] h-[28px] md:h-[48px]" viewBox="0 0 87 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M119.374 8.64602C119.374 18.2826 114.288 27.7388 104.623 35.1241C94.9491 42.5167 81.127 47.3905 65.4298 47.3905C49.7326 47.3905 35.9105 42.5167 26.2362 35.1241C16.5713 27.7388 11.4857 18.2826 11.4857 8.64602C11.4857 -0.990551 16.5713 -10.4468 26.2362 -17.8321C35.9105 -25.2247 49.7326 -30.0985 65.4298 -30.0985C81.127 -30.0985 94.9491 -25.2247 104.623 -17.8321C114.288 -10.4468 119.374 -0.990551 119.374 8.64602Z" stroke="url(#paint0_linear_26_450)" stroke-width="21"/>
                        <defs>
                        <linearGradient id="paint0_linear_26_450" x1="43.7845" y1="-33.4562" x2="56.5927" y2="59.1133" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4081FF"/>
                        <stop offset="1" stop-color="#4081FF" stop-opacity="0"/>
                        </linearGradient>
                        </defs>
                    </svg> 
                </div>
                <h1 class="text-[10px] md:text-xs text-white font-medium">Jumlah Kelurahan</h1>
                <h1 class="text-lg md:text-xl lg:text-2xl text-white font-medium">23</span>
                <div class="absolute bottom-0 left-0">
                    <svg class="w-[53] md:w-[73px] h-[26] md:h-[46px]" viewBox="0 0 83 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M72.1459 49.8942C72.1459 59.5308 67.0602 68.987 57.3953 76.3723C47.721 83.7649 33.8989 88.6387 18.2017 88.6387C2.50453 88.6387 -11.3176 83.7649 -20.9919 76.3723C-30.6568 68.987 -35.7424 59.5308 -35.7424 49.8942C-35.7424 40.2576 -30.6568 30.8014 -20.9919 23.4161C-11.3176 16.0235 2.50453 11.1497 18.2017 11.1497C33.8989 11.1497 47.721 16.0235 57.3953 23.4161C67.0602 30.8014 72.1459 40.2576 72.1459 49.8942Z" stroke="url(#paint0_linear_26_451)" stroke-width="21"/>
                        <defs>
                        <linearGradient id="paint0_linear_26_451" x1="70.3474" y1="95.0037" x2="58.1681" y2="-9.73449" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4081FF"/>
                        <stop offset="1" stop-color="#4081FF" stop-opacity="0"/>
                        </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>
            <div class="relative bg-[#615EFC] py-3 md:py-5 text-center rounded-xl md:rounded-2xl md:space-y-1">
                <div class="absolute top-0 right-0">
                    <svg class="w-[57px] md:w-[77px] h-[28px] md:h-[48px]" viewBox="0 0 87 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M119.374 8.64602C119.374 18.2826 114.288 27.7388 104.623 35.1241C94.9491 42.5167 81.127 47.3905 65.4298 47.3905C49.7326 47.3905 35.9105 42.5167 26.2362 35.1241C16.5713 27.7388 11.4857 18.2826 11.4857 8.64602C11.4857 -0.990551 16.5713 -10.4468 26.2362 -17.8321C35.9105 -25.2247 49.7326 -30.0985 65.4298 -30.0985C81.127 -30.0985 94.9491 -25.2247 104.623 -17.8321C114.288 -10.4468 119.374 -0.990551 119.374 8.64602Z" stroke="url(#paint0_linear_26_450)" stroke-width="21"/>
                        <defs>
                        <linearGradient id="paint0_linear_26_450" x1="43.7845" y1="-33.4562" x2="56.5927" y2="59.1133" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4081FF"/>
                        <stop offset="1" stop-color="#4081FF" stop-opacity="0"/>
                        </linearGradient>
                        </defs>
                    </svg> 
                </div>
                <h1 class="text-[10px] md:text-xs text-white font-medium">Jumlah Kecamatan</h1>
                <h1 class="text-lg md:text-xl lg:text-2xl text-white font-medium">9</span>
                <div class="absolute bottom-0 left-0">
                    <svg class="w-[53] md:w-[73px] h-[26] md:h-[46px]" viewBox="0 0 83 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M72.1459 49.8942C72.1459 59.5308 67.0602 68.987 57.3953 76.3723C47.721 83.7649 33.8989 88.6387 18.2017 88.6387C2.50453 88.6387 -11.3176 83.7649 -20.9919 76.3723C-30.6568 68.987 -35.7424 59.5308 -35.7424 49.8942C-35.7424 40.2576 -30.6568 30.8014 -20.9919 23.4161C-11.3176 16.0235 2.50453 11.1497 18.2017 11.1497C33.8989 11.1497 47.721 16.0235 57.3953 23.4161C67.0602 30.8014 72.1459 40.2576 72.1459 49.8942Z" stroke="url(#paint0_linear_26_451)" stroke-width="21"/>
                        <defs>
                        <linearGradient id="paint0_linear_26_451" x1="70.3474" y1="95.0037" x2="58.1681" y2="-9.73449" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4081FF"/>
                        <stop offset="1" stop-color="#4081FF" stop-opacity="0"/>
                        </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>
            <div class="relative bg-[#615EFC] py-3 md:py-5 text-center rounded-xl md:rounded-2xl md:space-y-1">
                <div class="absolute top-0 right-0">
                    <svg class="w-[57px] md:w-[77px] h-[28px] md:h-[48px]" viewBox="0 0 87 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M119.374 8.64602C119.374 18.2826 114.288 27.7388 104.623 35.1241C94.9491 42.5167 81.127 47.3905 65.4298 47.3905C49.7326 47.3905 35.9105 42.5167 26.2362 35.1241C16.5713 27.7388 11.4857 18.2826 11.4857 8.64602C11.4857 -0.990551 16.5713 -10.4468 26.2362 -17.8321C35.9105 -25.2247 49.7326 -30.0985 65.4298 -30.0985C81.127 -30.0985 94.9491 -25.2247 104.623 -17.8321C114.288 -10.4468 119.374 -0.990551 119.374 8.64602Z" stroke="url(#paint0_linear_26_450)" stroke-width="21"/>
                        <defs>
                        <linearGradient id="paint0_linear_26_450" x1="43.7845" y1="-33.4562" x2="56.5927" y2="59.1133" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4081FF"/>
                        <stop offset="1" stop-color="#4081FF" stop-opacity="0"/>
                        </linearGradient>
                        </defs>
                    </svg> 
                </div>
                <h1 class="text-[10px] md:text-xs text-white font-medium">Jumlah Dusun</h1>
                <h1 class="text-lg md:text-xl lg:text-2xl text-white font-medium">212</span>
                <div class="absolute bottom-0 left-0">
                    <svg class="w-[53] md:w-[73px] h-[26] md:h-[46px]" viewBox="0 0 83 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M72.1459 49.8942C72.1459 59.5308 67.0602 68.987 57.3953 76.3723C47.721 83.7649 33.8989 88.6387 18.2017 88.6387C2.50453 88.6387 -11.3176 83.7649 -20.9919 76.3723C-30.6568 68.987 -35.7424 59.5308 -35.7424 49.8942C-35.7424 40.2576 -30.6568 30.8014 -20.9919 23.4161C-11.3176 16.0235 2.50453 11.1497 18.2017 11.1497C33.8989 11.1497 47.721 16.0235 57.3953 23.4161C67.0602 30.8014 72.1459 40.2576 72.1459 49.8942Z" stroke="url(#paint0_linear_26_451)" stroke-width="21"/>
                        <defs>
                        <linearGradient id="paint0_linear_26_451" x1="70.3474" y1="95.0037" x2="58.1681" y2="-9.73449" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4081FF"/>
                        <stop offset="1" stop-color="#4081FF" stop-opacity="0"/>
                        </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>
            </section>

            <section class="flex items-center gap-2 md:gap-3">
                <button class="flex justify-center items-center gap-2 md:gap-3 bg-white py-2 px-4 rounded md:rounded-md">
                    <h1 class="text-xs md:text-sm text-black font-normal">Pilih Desa</h1>
                    <svg class="w-2 md:w-3 stroke-black stroke-[1.5]" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 1.53284L9.25269 3.29581C7.85925 4.70174 7.16253 5.40471 6.31333 5.51295C6.10527 5.53947 5.89473 5.53947 5.68667 5.51295C4.83748 5.40471 4.14075 4.70174 2.74731 3.29581L1 1.53284" stroke-linecap="round"/>
                    </svg>
                </button>
                <button class="flex justify-center items-center gap-2 md:gap-3 bg-white py-2 px-4 rounded md:rounded-md">
                    <h1 class="text-xs md:text-sm text-black font-normal">Pilih Tahun</h1>
                    <svg class="w-2 md:w-3 stroke-black stroke-[1.5]" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 1.53284L9.25269 3.29581C7.85925 4.70174 7.16253 5.40471 6.31333 5.51295C6.10527 5.53947 5.89473 5.53947 5.68667 5.51295C4.83748 5.40471 4.14075 4.70174 2.74731 3.29581L1 1.53284" stroke-linecap="round"/>
                    </svg>
                </button>
                <button class="flex justify-center items-center gap-2 md:gap-3 bg-white py-2 px-4 rounded md:rounded-md">
                    <h1 class="text-xs md:text-sm text-black font-normal">Pilih Bulan</h1>
                    <svg class="w-2 md:w-3 stroke-black stroke-[1.5]" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 1.53284L9.25269 3.29581C7.85925 4.70174 7.16253 5.40471 6.31333 5.51295C6.10527 5.53947 5.89473 5.53947 5.68667 5.51295C4.83748 5.40471 4.14075 4.70174 2.74731 3.29581L1 1.53284" stroke-linecap="round"/>
                    </svg>
                </button>
            </section>

            <section class="grid grid-cols-1 lg:grid-cols-5 gap-4">
                <div class="row-span-2 col-span-1 lg:col-span-3 h-fit">
                    <div class="h-[300px] lg:h-[400px] bg-white p-3 pb-14 md:p-4 md:pb-[70px] space-y-2 md:space-y-3 rounded md:rounded-md">
                        <h1 class="text-xs md:text-sm text-[#8B8B8B] font-normal">Grafik Kependudukan Desa Janji Tahun 2024</h1>
                        <canvas id="chartLine"></canvas>
                        <div class="flex items-center gap-5 md:gap-10">
                            <div class="flex items-center gap-3">
                                <div class="bg-[#5D87FF] p-2 md:p-2.5"></div>
                                <h1 class="text-[10px] md:text-xs text-black font-normal">Laki - laki</h1>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="bg-[#FF5DDC] p-2 md:p-2.5"></div>
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
                                    <div class="w-[0%] bg-[#5D87FF] py-0.5 text-center rounded-l-full">
                                        <h1 class="text-[8px] md:text-[10px] text-white font-normal">1.400 jiwa</h1>
                                    </div>
                                    <div class="w-[100%] bg-[#D9D9D9] py-0.5 text-center rounded-full">
                                        <h1 class="text-[8px] md:text-[10px] text-white font-normal">0 jiwa</h1>
                                    </div>
                                    <div class="w-[0%] bg-[#FF5DDC] py-0.5 text-center rounded-r-full">
                                        <h1 class="text-[8px] md:text-[10px] text-white font-normal">1.400 jiwa</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <h1 class="text-[10px] md:text-xs text-[#8B8B8B] font-normal">Usia 11-20</h1>
                                <div class="w-full flex justify-center items-center bg-slate-100 rounded-full h-2">
                                    <div class="w-[0%] bg-[#5D87FF] py-0.5 text-center rounded-l-full">
                                        <h1 class="text-[8px] md:text-[10px] text-white font-normal">1.400 jiwa</h1>
                                    </div>
                                    <div class="w-[100%] bg-[#D9D9D9] py-0.5 text-center rounded-full">
                                        <h1 class="text-[8px] md:text-[10px] text-white font-normal">0 jiwa</h1>
                                    </div>
                                    <div class="w-[0%] bg-[#FF5DDC] py-0.5 text-center rounded-r-full">
                                        <h1 class="text-[8px] md:text-[10px] text-white font-normal">1.400 jiwa</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <h1 class="text-[10px] md:text-xs text-[#8B8B8B] font-normal">Usia 21-30</h1>
                                <div class="w-full flex justify-center items-center bg-slate-100 rounded-full h-2">
                                    <div class="w-[0%] bg-[#5D87FF] py-0.5 text-center rounded-l-full">
                                        <h1 class="text-[8px] md:text-[10px] text-white font-normal">1.400 jiwa</h1>
                                    </div>
                                    <div class="w-[100%] bg-[#D9D9D9] py-0.5 text-center rounded-full">
                                        <h1 class="text-[8px] md:text-[10px] text-white font-normal">0 jiwa</h1>
                                    </div>
                                    <div class="w-[0%] bg-[#FF5DDC] py-0.5 text-center rounded-r-full">
                                        <h1 class="text-[8px] md:text-[10px] text-white font-normal">1.400 jiwa</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <h1 class="text-[10px] md:text-xs text-[#8B8B8B] font-normal">Usia 30-55</h1>
                                <div class="w-full flex justify-center items-center bg-slate-100 rounded-full h-2">
                                    <div class="w-[0%] bg-[#5D87FF] py-0.5 text-center rounded-l-full">
                                        <h1 class="text-[8px] md:text-[10px] text-white font-normal">1.400 jiwa</h1>
                                    </div>
                                    <div class="w-[100%] bg-[#D9D9D9] py-0.5 text-center rounded-full">
                                        <h1 class="text-[8px] md:text-[10px] text-white font-normal">0 jiwa</h1>
                                    </div>
                                    <div class="w-[0%] bg-[#FF5DDC] py-0.5 text-center rounded-r-full">
                                        <h1 class="text-[8px] md:text-[10px] text-white font-normal">1.400 jiwa</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <h1 class="text-[10px] md:text-xs text-[#8B8B8B] font-normal">Lansia</h1>
                                <div class="w-full flex justify-center items-center bg-slate-100 rounded-full h-2">
                                    <div class="w-[0%] bg-[#5D87FF] py-0.5 text-center rounded-l-full">
                                        <h1 class="text-[8px] md:text-[10px] text-white font-normal">1.400 jiwa</h1>
                                    </div>
                                    <div class="w-[100%] bg-[#D9D9D9] py-0.5 text-center rounded-full">
                                        <h1 class="text-[8px] md:text-[10px] text-white font-normal">0 jiwa</h1>
                                    </div>
                                    <div class="w-[0%] bg-[#FF5DDC] py-0.5 text-center rounded-r-full">
                                        <h1 class="text-[8px] md:text-[10px] text-white font-normal">1.400 jiwa</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-5 md:gap-10 pt-2">
                            <div class="flex items-center gap-3">
                                <div class="bg-[#5D87FF] p-2 md:p-2.5"></div>
                                <h1 class="text-[10px] md:text-xs text-black font-normal">Laki - laki</h1>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="bg-[#FF5DDC] p-2 md:p-2.5"></div>
                                <h1 class="text-[10px] md:text-xs text-black font-normal">Perempuan</h1>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center gap-2 md:gap-3 bg-white py-2 md:py-2.5 rounded md:rounded-md">
                        <h1 class="text-xs md:text-sm text-[#615EFC] font-normal">Lihat Data Lengkap</h1>
                        <svg class="w-1 md:w-1.5 stroke-[#615EFC] stroke-[1.5]" viewBox="0 0 6 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1.5L2.76297 3.24731C4.1689 4.64075 4.87187 5.33747 4.98011 6.18667C5.00663 6.39473 5.00663 6.60527 4.98011 6.81333C4.87187 7.66252 4.1689 8.35925 2.76297 9.75269L1 11.5" stroke-linecap="round"/>
                        </svg>
                    </div>
                </div>
            </section>
        </main>
</div>