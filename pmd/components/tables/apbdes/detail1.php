<div class="flex items-center gap-2">
    <img src="/svgs/folder1.svg" class="w-4 md:w-5">
    <h1 class="text-black text-xs md:text-sm font-medium">File Laporan</h1>
</div>

<section class="scrollbar-x bg-transparent rounded md:rounded-md shadow-md shadow-black/5">
    <table class="w-max lg:w-full bg-white text-center table-auto">
        <tr class="text-[10px] md:text-xs text-black capitalize">
            <th class="w-[5%] bg-white font-normal py-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">No</th>
            <th class="w-[60%] bg-white text-start font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Nama</th>
            <th class="w-[20%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Aksi</th>
        </tr>
        <tr class="odd:bg-white even:bg-[#E8EDF2] text-xs text-black/70 capitalize overflow-visible">
            <td class="font-normal my-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">1</td>
            <td class="py-3.5 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                <h1 class="line-clamp-1 text-start px-4 font-normal">Kebaikan Alam</h1>
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

<div class="flex items-center gap-2">
    <img src="/svgs/file1.svg" class="w-4 md:w-5">
    <h1 class="text-black text-xs md:text-sm font-medium">Catatan</h1>
</div>

<textarea placeholder=". . . . ." rows="3" class="w-full resize-none bg-white px-4 py-2.5 text-black text-xs md:text-sm font-normal rounded-lg shadow-sm shadow-black/20 focus:outline-none focus:ring-0"></textarea>
<div class="flex justify-end items-center gap-2">
    <button class="bg-orange-500 py-2 px-5 rounded-md">
        <h1 class="text-white text-xs md:text-sm font-medium">Revisi</h1>
    </button>
    <button class="bg-primary py-2 px-5 rounded-md">
        <h1 class="text-white text-xs md:text-sm font-medium">Konfirmasi</h1>
    </button>
</div>