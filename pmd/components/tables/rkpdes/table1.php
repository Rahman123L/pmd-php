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

<div x-data="{ isOpen : false }" class="space-y-5">
    <div class="w-full md:w-[60%] lg:w-[40%] bg-white py-5 md:py-6 px-5 space-y-2 rounded md:rounded-md shadow-md shadow-black/5">
        <h1 class="text-xs md:text-sm text-black font-normal">Silahkan Pilih <span class="text-[#EA5858] font-medium">Desa</span></h1>
        <button @click="isOpen = !isOpen" class="flex items-center gap-1 md:gap-2 bg-primary py-1.5 px-4 rounded">
            <h1 class="text-xs md:text-sm text-white font-medium">Pilih Desa</h1>
            <svg :class="{ 'rotate-90 ' : isOpen }"  class="w-4 stroke-white stroke-[2]" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 5L15 12L9 19" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
    </div>
    <?php include_once("../pmd/components/desa/content.php") ?>
    <div :class="isOpen ? 'hidden' : 'block'" class="flex justify-center items-center pt-10">
        <div class="space-y-2">
            <img class="w-28 md:w-32 h-28 md:h-32 mx-auto" src="/svgs/search.svg">
            <div class="text-center">
                <h1 class="text-lg md:text-xl text-black font-medium">Desa Tidak Ditemukan</h1>
                <h1 class="text-[10px] md:text-xs text-[#7A7A7A] font-normal">Pilih Desa untuk memunculkan data</h1>
            </div>
        </div>
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
                <div class="flex justify-center items-center gap-1.5 md:gap-2">
                    <button class="flex items-center gap-2 w-fit bg-primary py-1.5 px-2 rounded-md">
                        <svg class="w-3.5 stroke-white" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.60005 15.2007H3.10004C2.10593 15.2007 1.30004 14.3948 1.30005 13.4007L1.30012 2.60077C1.30012 1.60666 2.10601 0.800781 3.10012 0.800781H11.2003C12.1944 0.800781 13.0003 1.60667 13.0003 2.60078V6.20078M12.55 12.0125V11.9651M4.45033 4.40078H9.85033M4.45033 7.10078H9.85033M4.45033 9.80078H7.15033M15.7 12.0508C15.7 12.0508 14.9529 14.2555 12.55 14.217C10.1472 14.1785 9.40005 12.0508 9.40005 12.0508C9.40005 12.0508 10.1169 9.80752 12.55 9.80752C14.9832 9.80752 15.7 12.0508 15.7 12.0508Z" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <h1 class="text-[#E8EDF2] font-normal">Detail</h1>
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
                <div class="flex justify-center items-center gap-1.5 md:gap-2">
                    <button class="flex items-center gap-2 w-fit bg-primary py-1.5 px-2 rounded-md">
                        <svg class="w-3.5 stroke-white" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.60005 15.2007H3.10004C2.10593 15.2007 1.30004 14.3948 1.30005 13.4007L1.30012 2.60077C1.30012 1.60666 2.10601 0.800781 3.10012 0.800781H11.2003C12.1944 0.800781 13.0003 1.60667 13.0003 2.60078V6.20078M12.55 12.0125V11.9651M4.45033 4.40078H9.85033M4.45033 7.10078H9.85033M4.45033 9.80078H7.15033M15.7 12.0508C15.7 12.0508 14.9529 14.2555 12.55 14.217C10.1472 14.1785 9.40005 12.0508 9.40005 12.0508C9.40005 12.0508 10.1169 9.80752 12.55 9.80752C14.9832 9.80752 15.7 12.0508 15.7 12.0508Z" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <h1 class="text-[#E8EDF2] font-normal">Detail</h1>
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
                <div class="flex justify-center items-center gap-1.5 md:gap-2">
                    <button class="flex items-center gap-2 w-fit bg-primary py-1.5 px-2 rounded-md">
                        <svg class="w-3.5 stroke-white" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.60005 15.2007H3.10004C2.10593 15.2007 1.30004 14.3948 1.30005 13.4007L1.30012 2.60077C1.30012 1.60666 2.10601 0.800781 3.10012 0.800781H11.2003C12.1944 0.800781 13.0003 1.60667 13.0003 2.60078V6.20078M12.55 12.0125V11.9651M4.45033 4.40078H9.85033M4.45033 7.10078H9.85033M4.45033 9.80078H7.15033M15.7 12.0508C15.7 12.0508 14.9529 14.2555 12.55 14.217C10.1472 14.1785 9.40005 12.0508 9.40005 12.0508C9.40005 12.0508 10.1169 9.80752 12.55 9.80752C14.9832 9.80752 15.7 12.0508 15.7 12.0508Z" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <h1 class="text-[#E8EDF2] font-normal">Detail</h1>
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
                <div class="flex justify-center items-center gap-1.5 md:gap-2">
                    <button class="flex items-center gap-2 w-fit bg-primary py-1.5 px-2 rounded-md">
                        <svg class="w-3.5 stroke-white" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.60005 15.2007H3.10004C2.10593 15.2007 1.30004 14.3948 1.30005 13.4007L1.30012 2.60077C1.30012 1.60666 2.10601 0.800781 3.10012 0.800781H11.2003C12.1944 0.800781 13.0003 1.60667 13.0003 2.60078V6.20078M12.55 12.0125V11.9651M4.45033 4.40078H9.85033M4.45033 7.10078H9.85033M4.45033 9.80078H7.15033M15.7 12.0508C15.7 12.0508 14.9529 14.2555 12.55 14.217C10.1472 14.1785 9.40005 12.0508 9.40005 12.0508C9.40005 12.0508 10.1169 9.80752 12.55 9.80752C14.9832 9.80752 15.7 12.0508 15.7 12.0508Z" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <h1 class="text-[#E8EDF2] font-normal">Detail</h1>
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