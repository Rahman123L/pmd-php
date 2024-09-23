<div class="md:flex md:justify-between items-center space-y-3 md:space-y-0">
    <div class="flex items-center gap-3">
        <h1 class="text-sm md:text-base text-black font-normal">Evaluasi Rencana Kerja Pemerintah Desa</h1>
        <button class="flex items-center gap-2 bg-[#5869EA] py-1.5 px-2 rounded-md">
            <svg class="w-3.5 stroke-white" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.60005 15.2007H3.10004C2.10593 15.2007 1.30004 14.3948 1.30005 13.4007L1.30012 2.60077C1.30012 1.60666 2.10601 0.800781 3.10012 0.800781H11.2003C12.1944 0.800781 13.0003 1.60667 13.0003 2.60078V6.20078M12.55 12.0125V11.9651M4.45033 4.40078H9.85033M4.45033 7.10078H9.85033M4.45033 9.80078H7.15033M15.7 12.0508C15.7 12.0508 14.9529 14.2555 12.55 14.217C10.1472 14.1785 9.40005 12.0508 9.40005 12.0508C9.40005 12.0508 10.1169 9.80752 12.55 9.80752C14.9832 9.80752 15.7 12.0508 15.7 12.0508Z" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <h1 class="text-xs md:text-sm text-[#E8EDF2] font-normal">LihatPDF</h1>
        </button>
    </div>
    <label class="w-fit flex items-center gap-2 md:gap-3">
        <h1 class="text-[10px] md:text-xs text-black font-medium capitalize">Tanggal</h1>
        <input type="text" value="04-September-2024" required autocomplete="off" class="w-full text-[10px] md:text-xs text-black focus:text-black font-normal placeholder:text-[10px] md:placeholder:text-xs focus:placeholder:text-black placeholder:font-normal bg-white px-5 py-1.5 md:py-2 border-none rounded-md focus:outline-none focus:ring-0 shadow-md shadow-[#00000014]"/>
        <svg class="w-6 md:w-7 cursor-pointer" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4.8308 6.67697H14.9496M4.37467 1.0626V2.8942M4.37467 2.8942L14.9994 2.894M4.37467 2.8942C2.61425 2.8942 1.18732 4.34583 1.18741 6.13669L1.1879 16.9451C1.18798 18.7359 2.61501 20.1875 4.37531 20.1875H15C16.7604 20.1875 18.1875 18.7357 18.1874 16.9448L18.1869 6.13639C18.1868 4.34564 16.7597 2.894 14.9994 2.894M14.9994 1.0625V2.894M7.56286 16.4045V9.91944L5.43792 11.5407M13.4064 16.4045V9.91944L11.2815 11.5407" stroke="#778294" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </label>
</div>
<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 md:gap-4">
    <label class="grid gap-1">
        <h1 class="text-[10px] md:text-xs text-black font-medium capitalize">Desa</h1>
        <input type="text" value="Janji" required autocomplete="off" class="w-full text-[10px] md:text-xs text-[#778294] focus:text-[#778294] font-normal placeholder:text-[10px] md:placeholder:text-xs focus:placeholder:text-[#778294] placeholder:font-normal bg-white px-5 py-1.5 md:py-2 border-none rounded-md focus:outline-none focus:ring-0 shadow-md shadow-[#00000014]"/>
    </label>
    <label class="grid gap-1">
        <h1 class="text-[10px] md:text-xs text-black font-medium capitalize">Provinsi</h1>
        <input type="text" value="Sumatera Utara" required autocomplete="off" class="w-full text-[10px] md:text-xs text-[#778294] focus:text-[#778294] font-normal placeholder:text-[10px] md:placeholder:text-xs focus:placeholder:text-[#778294] placeholder:font-normal bg-white px-5 py-1.5 md:py-2 border-none rounded-md focus:outline-none focus:ring-0 shadow-md shadow-[#00000014]"/>
    </label>
    <label class="grid gap-1">
        <h1 class="text-[10px] md:text-xs text-black font-medium capitalize">Kecamatan</h1>
        <input type="text" value="Bilah Barat" required autocomplete="off" class="w-full text-[10px] md:text-xs text-[#778294] focus:text-[#778294] font-normal placeholder:text-[10px] md:placeholder:text-xs focus:placeholder:text-[#778294] placeholder:font-normal bg-white px-5 py-1.5 md:py-2 border-none rounded-md focus:outline-none focus:ring-0 shadow-md shadow-[#00000014]"/>
    </label>
    <label class="grid gap-1">
        <h1 class="text-[10px] md:text-xs text-black font-medium capitalize">Kabupaten / Kota</h1>
        <input type="text" value="Labuhanbatu" required autocomplete="off" class="w-full text-[10px] md:text-xs text-[#778294] focus:text-[#778294] font-normal placeholder:text-[10px] md:placeholder:text-xs focus:placeholder:text-[#778294] placeholder:font-normal bg-white px-5 py-1.5 md:py-2 border-none rounded-md focus:outline-none focus:ring-0 shadow-md shadow-[#00000014]"/>
    </label>
</div>
<div class="w-full bg-white p-3 md:p-4 rounded-md md:rounded-lg">
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
                            <input type="checkbox" :checked="selected === 1" @click="selected = selected === 1 ? null : 1" class="peer/checkbox appearance-none checked:bg-[#615EFC] rounded-md bg-transparent border-gray-500 checked:border-[#615EFC] ring-[#615EFC] checked:ring-[#615EFC]">
                            <h1 class="text-[10px] md:text-xs text-gray-500 peer-checked/checkbox:text-[#615EFC] font-medium">Dilaksanakan (ada dokumen)</h1>
                        </label>
                        <label class="flex justify-normal items-center gap-2">
                            <input type="checkbox" :checked="selected === 2" @click="selected = selected === 2 ? null : 2" class="peer/checkbox appearance-none checked:bg-[#615EFC] rounded-md bg-transparent border-gray-500 checked:border-[#615EFC] ring-[#615EFC] checked:ring-[#615EFC]">
                            <h1 class="text-[10px] md:text-xs text-gray-500 peer-checked/checkbox:text-[#615EFC] font-medium">Tidak dilaksanakan / tidak ada dokumen</h1>
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
                                <input type="checkbox" :checked="selected === 1" @click="selected = selected === 1 ? null : 1" class="peer/checkbox appearance-none checked:bg-[#615EFC] rounded-md bg-transparent border-gray-500 checked:border-[#615EFC] ring-[#615EFC] checked:ring-[#615EFC]">
                                <h1 class="text-[10px] md:text-xs text-gray-500 peer-checked/checkbox:text-[#615EFC] font-medium">Dilaksanakan (ada dokumen)</h1>
                            </label>
                            <label class="flex justify-normal items-center gap-2">
                                <input type="checkbox" :checked="selected === 2" @click="selected = selected === 2 ? null : 2" class="peer/checkbox appearance-none checked:bg-[#615EFC] rounded-md bg-transparent border-gray-500 checked:border-[#615EFC] ring-[#615EFC] checked:ring-[#615EFC]">
                                <h1 class="text-[10px] md:text-xs text-gray-500 peer-checked/checkbox:text-[#615EFC] font-medium">Tidak dilaksanakan / tidak ada dokumen</h1>
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
                                            <input type="checkbox" :checked="selected === 1" @click="selected = selected === 1 ? null : 1" class="peer/checkbox appearance-none checked:bg-[#615EFC] rounded-md bg-transparent border-gray-500 checked:border-[#615EFC] ring-[#615EFC] checked:ring-[#615EFC]">
                                            <h1 class="text-[10px] md:text-xs text-gray-500 peer-checked/checkbox:text-[#615EFC] font-medium">Dilaksanakan (ada dokumen)</h1>
                                        </label>
                                        <label class="flex justify-normal items-center gap-2">
                                            <input type="checkbox" :checked="selected === 2" @click="selected = selected === 2 ? null : 2" class="peer/checkbox appearance-none checked:bg-[#615EFC] rounded-md bg-transparent border-gray-500 checked:border-[#615EFC] ring-[#615EFC] checked:ring-[#615EFC]">
                                            <h1 class="text-[10px] md:text-xs text-gray-500 peer-checked/checkbox:text-[#615EFC] font-medium">Tidak dilaksanakan / tidak ada dokumen</h1>
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
                                            <input type="checkbox" :checked="selected === 1" @click="selected = selected === 1 ? null : 1" class="peer/checkbox appearance-none checked:bg-[#615EFC] rounded-md bg-transparent border-gray-500 checked:border-[#615EFC] ring-[#615EFC] checked:ring-[#615EFC]">
                                            <h1 class="text-[10px] md:text-xs text-gray-500 peer-checked/checkbox:text-[#615EFC] font-medium">Dilaksanakan (ada dokumen)</h1>
                                        </label>
                                        <label class="flex justify-normal items-center gap-2">
                                            <input type="checkbox" :checked="selected === 2" @click="selected = selected === 2 ? null : 2" class="peer/checkbox appearance-none checked:bg-[#615EFC] rounded-md bg-transparent border-gray-500 checked:border-[#615EFC] ring-[#615EFC] checked:ring-[#615EFC]">
                                            <h1 class="text-[10px] md:text-xs text-gray-500 peer-checked/checkbox:text-[#615EFC] font-medium">Tidak dilaksanakan / tidak ada dokumen</h1>
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
                            <input type="checkbox" :checked="selected === 1" @click="selected = selected === 1 ? null : 1" class="peer/checkbox appearance-none checked:bg-[#615EFC] rounded-md bg-transparent border-gray-500 checked:border-[#615EFC] ring-[#615EFC] checked:ring-[#615EFC]">
                            <h1 class="text-[10px] md:text-xs text-gray-500 peer-checked/checkbox:text-[#615EFC] font-medium">Dilaksanakan (ada dokumen)</h1>
                        </label>
                        <label class="flex justify-normal items-center gap-2">
                            <input type="checkbox" :checked="selected === 2" @click="selected = selected === 2 ? null : 2" class="peer/checkbox appearance-none checked:bg-[#615EFC] rounded-md bg-transparent border-gray-500 checked:border-[#615EFC] ring-[#615EFC] checked:ring-[#615EFC]">
                            <h1 class="text-[10px] md:text-xs text-gray-500 peer-checked/checkbox:text-[#615EFC] font-medium">Tidak dilaksanakan / tidak ada dokumen</h1>
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
                                <input type="checkbox" :checked="selected === 1" @click="selected = selected === 1 ? null : 1" class="peer/checkbox appearance-none checked:bg-[#615EFC] rounded-md bg-transparent border-gray-500 checked:border-[#615EFC] ring-[#615EFC] checked:ring-[#615EFC]">
                                <h1 class="text-[10px] md:text-xs text-gray-500 peer-checked/checkbox:text-[#615EFC] font-medium">Dilaksanakan (ada dokumen)</h1>
                            </label>
                            <label class="flex justify-normal items-center gap-2">
                                <input type="checkbox" :checked="selected === 2" @click="selected = selected === 2 ? null : 2" class="peer/checkbox appearance-none checked:bg-[#615EFC] rounded-md bg-transparent border-gray-500 checked:border-[#615EFC] ring-[#615EFC] checked:ring-[#615EFC]">
                                <h1 class="text-[10px] md:text-xs text-gray-500 peer-checked/checkbox:text-[#615EFC] font-medium">Tidak dilaksanakan / tidak ada dokumen</h1>
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
                                            <input type="checkbox" :checked="selected === 1" @click="selected = selected === 1 ? null : 1" class="peer/checkbox appearance-none checked:bg-[#615EFC] rounded-md bg-transparent border-gray-500 checked:border-[#615EFC] ring-[#615EFC] checked:ring-[#615EFC]">
                                            <h1 class="text-[10px] md:text-xs text-gray-500 peer-checked/checkbox:text-[#615EFC] font-medium">Dilaksanakan (ada dokumen)</h1>
                                        </label>
                                        <label class="flex justify-normal items-center gap-2">
                                            <input type="checkbox" :checked="selected === 2" @click="selected = selected === 2 ? null : 2" class="peer/checkbox appearance-none checked:bg-[#615EFC] rounded-md bg-transparent border-gray-500 checked:border-[#615EFC] ring-[#615EFC] checked:ring-[#615EFC]">
                                            <h1 class="text-[10px] md:text-xs text-gray-500 peer-checked/checkbox:text-[#615EFC] font-medium">Tidak dilaksanakan / tidak ada dokumen</h1>
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
                                            <input type="checkbox" :checked="selected === 1" @click="selected = selected === 1 ? null : 1" class="peer/checkbox appearance-none checked:bg-[#615EFC] rounded-md bg-transparent border-gray-500 checked:border-[#615EFC] ring-[#615EFC] checked:ring-[#615EFC]">
                                            <h1 class="text-[10px] md:text-xs text-gray-500 peer-checked/checkbox:text-[#615EFC] font-medium">Dilaksanakan (ada dokumen)</h1>
                                        </label>
                                        <label class="flex justify-normal items-center gap-2">
                                            <input type="checkbox" :checked="selected === 2" @click="selected = selected === 2 ? null : 2" class="peer/checkbox appearance-none checked:bg-[#615EFC] rounded-md bg-transparent border-gray-500 checked:border-[#615EFC] ring-[#615EFC] checked:ring-[#615EFC]">
                                            <h1 class="text-[10px] md:text-xs text-gray-500 peer-checked/checkbox:text-[#615EFC] font-medium">Tidak dilaksanakan / tidak ada dokumen</h1>
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
                                            <h1 class="text-sm md:text-base text-black font-semibold">Ubah Tim Evaluasi</h1>
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
                                                            <h1 class="mx-1 text-xs md:text-sm text-black font-medium capitalize">Tanda tangan supervisor</h1>
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
                                                    <button class="bg-[#615EFC] py-1.5 px-4 md:px-5 rounded">
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
                                            <h1 class="text-center text-sm md:text-base text-black font-normal">Konfirmasi hapus tim evaluasi</h1>
                                            <div class="flex justify-center items-center gap-2 md:gap-3">
                                                <button type="button" @click="modal = false" class="bg-[#FF4E4E] py-1.5 px-4 md:px-5 rounded">
                                                    <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Batal</h1>
                                                </button>
                                                <button class="bg-[#615EFC] py-1.5 px-4 md:px-5 rounded">
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
                <h1 class="text-[10px] md:text-xs text-black font-normal">Tambah tim evaluasi</h1>
                <div x-show="modal" x-transition.duration.300ms.opacity.50 :class="{ 'visible': modal, 'invisible': !modal }" class="invisible fixed inset-0 z-50 bg-[#0000006E] flex items-center justify-center h-screen">
                    <div class="w-[80%] sm:w-[50%] md:w-[35%] lg:w-[30%] bg-white rounded-lg md:rounded-xl">
                        <div class="flex justify-between items-center border-b border-[#D1D1D1] py-2.5 px-3">
                            <div class=""></div>
                            <h1 class="text-sm md:text-base text-black font-semibold">Tambah Tim Evaluasi</h1>
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
                                            <h1 class="mx-1 text-xs md:text-sm text-black font-medium capitalize">Tanda tangan supervisor</h1>
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
                                    <button class="bg-[#615EFC] py-2 px-4 md:px-5 rounded">
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

<div class="w-full flex justify-end items-center gap-2 md:gap-3">
    <button class="flex items-center gap-2 bg-[#FA6D09] py-1.5 px-4 rounded-md">
        <h1 class="text-[10px] md:text-xs text-[#E8EDF2] font-normal">Revisi</h1>
        <svg class="w-2.5 fill-white" viewBox="0 0 12 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.825 12.0375C0.55 11.5625 0.34375 11.075 0.20625 10.575C0.06875 10.075 0 9.5625 0 9.0375C0 7.3625 0.58125 5.9375 1.74375 4.7625C2.90625 3.5875 4.325 3 6 3H6.13125L4.93125 1.8L5.98125 0.75L8.98125 3.75L5.98125 6.75L4.93125 5.7L6.13125 4.5H6C4.75 4.5 3.6875 4.94063 2.8125 5.82188C1.9375 6.70313 1.5 7.775 1.5 9.0375C1.5 9.3625 1.5375 9.68125 1.6125 9.99375C1.6875 10.3062 1.8 10.6125 1.95 10.9125L0.825 12.0375ZM6.01875 17.25L3.01875 14.25L6.01875 11.25L7.06875 12.3L5.86875 13.5H6C7.25 13.5 8.3125 13.0594 9.1875 12.1781C10.0625 11.2969 10.5 10.225 10.5 8.9625C10.5 8.6375 10.4625 8.31875 10.3875 8.00625C10.3125 7.69375 10.2 7.3875 10.05 7.0875L11.175 5.9625C11.45 6.4375 11.6562 6.925 11.7938 7.425C11.9313 7.925 12 8.4375 12 8.9625C12 10.6375 11.4187 12.0625 10.2563 13.2375C9.09375 14.4125 7.675 15 6 15H5.86875L7.06875 16.2L6.01875 17.25Z"/>
        </svg>
    </button>
    <button class="flex items-center gap-2 bg-[#615EFC] py-1.5 px-4 rounded-md">
        <h1 class="text-[10px] md:text-xs text-[#E8EDF2] font-normal">Konfirmasi</h1>
        <svg class="w-4" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.45 11.0125L11.7375 5.725L10.6875 4.675L6.45 8.9125L4.3125 6.775L3.2625 7.825L6.45 11.0125ZM7.5 15.0625C6.4625 15.0625 5.4875 14.8656 4.575 14.4719C3.6625 14.0781 2.86875 13.5438 2.19375 12.8688C1.51875 12.1938 0.984375 11.4 0.590625 10.4875C0.196875 9.575 0 8.6 0 7.5625C0 6.525 0.196875 5.55 0.590625 4.6375C0.984375 3.725 1.51875 2.93125 2.19375 2.25625C2.86875 1.58125 3.6625 1.04688 4.575 0.653125C5.4875 0.259375 6.4625 0.0625 7.5 0.0625C8.5375 0.0625 9.5125 0.259375 10.425 0.653125C11.3375 1.04688 12.1313 1.58125 12.8063 2.25625C13.4813 2.93125 14.0156 3.725 14.4094 4.6375C14.8031 5.55 15 6.525 15 7.5625C15 8.6 14.8031 9.575 14.4094 10.4875C14.0156 11.4 13.4813 12.1938 12.8063 12.8688C12.1313 13.5438 11.3375 14.0781 10.425 14.4719C9.5125 14.8656 8.5375 15.0625 7.5 15.0625Z" fill="white"/>
        </svg>
    </button>
</div>