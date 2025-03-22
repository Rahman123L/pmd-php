<div class="flex items-center gap-3">
    <div x-data="{ modal : false }">
        <button @click="modal = !modal" class="flex items-center gap-2 bg-white py-2 px-4 rounded-md shadow-md shadow-black/20">
            <img src="/svgs/file1.svg" class="w-4 md:w-5">
            <h1 class="text-black text-xs md:text-sm font-normal">Buka Laporan</h1>
        </button>

        <div x-show="modal" x-transition.duration.300ms.opacity.50 :class="{ 'visible': modal, 'invisible': !modal }" class="invisible fixed inset-0 z-50 bg-[#0000006E] flex items-center justify-center h-screen">
            <div class="w-[80%] sm:w-[70%] md:w-[60%] lg:w-[80%] lg:h-[80vh] bg-white rounded-lg md:rounded-xl">
                <div class="flex justify-end items-center border-b border-[#D1D1D1] py-2.5 px-3">
                    <button type="button" @click="modal = false" type="button" class="bg-[#E8E8E8] p-2 rounded-full">
                        <svg class="w-3 fill-[#8B8B8B]" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.0204 1.68705C11.2157 1.49179 11.2157 1.1752 11.0204 0.979943C10.8251 0.784681 10.5086 0.784681 10.3133 0.979943L6.00017 5.29307L1.68705 0.979945C1.49179 0.784683 1.1752 0.784683 0.979943 0.979945C0.784681 1.17521 0.784681 1.49179 0.979943 1.68705L5.29306 6.00017L0.979961 10.3133C0.784699 10.5085 0.784699 10.8251 0.979961 11.0204C1.17522 11.2156 1.49181 11.2156 1.68707 11.0204L6.00017 6.70728L10.3133 11.0204C10.5085 11.2156 10.8251 11.2156 11.0204 11.0204C11.2156 10.8251 11.2156 10.5085 11.0204 10.3133L6.70728 6.00017L11.0204 1.68705Z"/>
                        </svg>
                    </button>
                </div>
                <div class="pt-2.5 pb-3.5 px-5 space-y-4">
                    <div class="">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div x-data="{ modal : false }">
        <button @click="modal = !modal" class="flex items-center gap-2 bg-white py-2 px-4 rounded-md shadow-md shadow-black/20">
            <img src="/svgs/file1.svg" class="w-4 md:w-5">
            <h1 class="text-black text-xs md:text-sm font-normal">Evaluasi Laporan</h1>
        </button>

        <div x-show="modal" x-transition.duration.300ms.opacity.50 :class="{ 'visible': modal, 'invisible': !modal }" class="invisible fixed inset-0 z-50 bg-[#0000006E] flex items-center justify-center h-screen">
            <div class="w-full h-[100vh] bg-white rounded-lg md:rounded-xl">
                <div class="flex justify-end items-center border-b border-[#D1D1D1] py-2.5 px-3">
                    <button type="button" @click="modal = false" type="button" class="bg-[#E8E8E8] p-2 rounded-full">
                        <svg class="w-3 fill-[#8B8B8B]" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.0204 1.68705C11.2157 1.49179 11.2157 1.1752 11.0204 0.979943C10.8251 0.784681 10.5086 0.784681 10.3133 0.979943L6.00017 5.29307L1.68705 0.979945C1.49179 0.784683 1.1752 0.784683 0.979943 0.979945C0.784681 1.17521 0.784681 1.49179 0.979943 1.68705L5.29306 6.00017L0.979961 10.3133C0.784699 10.5085 0.784699 10.8251 0.979961 11.0204C1.17522 11.2156 1.49181 11.2156 1.68707 11.0204L6.00017 6.70728L10.3133 11.0204C10.5085 11.2156 10.8251 11.2156 11.0204 11.0204C11.2156 10.8251 11.2156 10.5085 11.0204 10.3133L6.70728 6.00017L11.0204 1.68705Z"/>
                        </svg>
                    </button>
                </div>
                <div class="pt-2.5 pb-3.5 px-5 space-y-4">
                    <div class="">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section x-transition.duration.300ms.opacity.50 class="scrollbar-x bg-transparent rounded md:rounded-md shadow-md shadow-black/5 pt-3">
    <table class="w-max lg:w-full bg-white text-center table-auto">
        <tr class="text-[10px] md:text-xs text-black capitalize">
            <th class="w-[5%] bg-white font-normal py-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">No</th>
            <th class="w-[60%] bg-white text-start font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Nama</th>
            <th class="w-[20%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Aksi</th>
        </tr>
        <tr class="odd:bg-white even:bg-[#E8EDF2] text-xs text-black/70 capitalize overflow-visible">
            <td class="font-normal my-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">1</td>
            <td class="py-3.5 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                <h1 class="line-clamp-1 text-start px-4 font-normal">Undangan Sosialisasi</h1>
            </td>
            <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                <div class="flex justify-center items-center gap-1.5 md:gap-2">
                    <button class="flex items-center gap-2 w-fit bg-primary py-1.5 px-2 rounded-md">
                        <svg class="w-3.5 stroke-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 4.45962C9.91153 4.16968 10.9104 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C3.75612 8.07914 4.32973 7.43025 5 6.82137"
                                stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round" />
                            <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                stroke="#FFFFFF" stroke-width="1.5" />
                        </svg>
                        <h1 class="text-[#E8EDF2] font-normal">Lihat</h1>
                    </button>
                </div>
            </td>
        </tr>
    </table>
</section>