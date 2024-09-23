<div x-show="window.innerWidth < 640 && isOpen" x-transition.opacity :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden fixed inset-0 bg-zinc-800 bg-opacity-80 z-40"></div>
<div x-data="{ isOpenn : true }">
    <?php include_once("../desa/layout/sidebar.php"); ?>

    <main :class="isOpenn ? 'md:ml-60' : 'md:ml-20 ' + 'transition-all duration-500'" class="relative md:ml-60 pt-16 p-5 space-y-5">
        <div class="flex justify-between items-center">
            <h1 class="text-base md:text-lg lg:text-xl text-black font-medium">Dashboard</h1>
            <h1 class="text-xs md:text-sm text-black font-medium"><span class="text-[#615EFC] font-medium">Home</span> / Dashboard</h1>
        </div>

        <section class="flex items-center gap-2 md:gap-3">
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
                                <div class="w-[60%] bg-[#5D87FF] py-0.5 text-center rounded-l-full">
                                    <h1 class="text-[8px] md:text-[10px] text-white font-normal">1.400 jiwa</h1>
                                </div>
                                <div class="w-[40%] bg-[#FF5DDC] py-0.5 text-center rounded-r-full">
                                    <h1 class="text-[8px] md:text-[10px] text-white font-normal">1.400 jiwa</h1>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <h1 class="text-[10px] md:text-xs text-[#8B8B8B] font-normal">Usia 11-20</h1>
                            <div class="w-full flex justify-center items-center bg-slate-100 rounded-full h-2">
                                <div class="w-[70%] bg-[#5D87FF] py-0.5 text-center rounded-l-full">
                                    <h1 class="text-[8px] md:text-[10px] text-white font-normal">1.400 jiwa</h1>
                                </div>
                                <div class="w-[30%] bg-[#FF5DDC] py-0.5 text-center rounded-r-full">
                                    <h1 class="text-[8px] md:text-[10px] text-white font-normal">1.400 jiwa</h1>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <h1 class="text-[10px] md:text-xs text-[#8B8B8B] font-normal">Usia 21-30</h1>
                            <div class="w-full flex justify-center items-center bg-slate-100 rounded-full h-2">
                                <div class="w-[40%] bg-[#5D87FF] py-0.5 text-center rounded-l-full">
                                    <h1 class="text-[8px] md:text-[10px] text-white font-normal">1.400 jiwa</h1>
                                </div>
                                <div class="w-[60%] bg-[#FF5DDC] py-0.5 text-center rounded-r-full">
                                    <h1 class="text-[8px] md:text-[10px] text-white font-normal">1.400 jiwa</h1>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <h1 class="text-[10px] md:text-xs text-[#8B8B8B] font-normal">Usia 30-55</h1>
                            <div class="w-full flex justify-center items-center bg-slate-100 rounded-full h-2">
                                <div class="w-[50%] bg-[#5D87FF] py-0.5 text-center rounded-l-full">
                                    <h1 class="text-[8px] md:text-[10px] text-white font-normal">1.400 jiwa</h1>
                                </div>
                                <div class="w-[50%] bg-[#FF5DDC] py-0.5 text-center rounded-r-full">
                                    <h1 class="text-[8px] md:text-[10px] text-white font-normal">1.400 jiwa</h1>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <h1 class="text-[10px] md:text-xs text-[#8B8B8B] font-normal">Lansia</h1>
                            <div class="w-full flex justify-center items-center bg-slate-100 rounded-full h-2">
                                <div class="w-[50%] bg-[#5D87FF] py-0.5 text-center rounded-l-full">
                                    <h1 class="text-[8px] md:text-[10px] text-white font-normal">1.400 jiwa</h1>
                                </div>
                                <div class="w-[50%] bg-[#FF5DDC] py-0.5 text-center rounded-r-full">
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