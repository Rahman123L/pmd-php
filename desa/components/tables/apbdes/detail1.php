<div x-data="{ modal : false }">
    <button @click="modal = !modal" class="flex items-center gap-2 bg-white py-2 px-4 rounded-md shadow-md shadow-black/20">
        <img src="/svgs/file1.svg" class="w-4 md:w-5">
        <h1 class="text-black text-xs md:text-sm font-normal">Upload Laporan</h1>
    </button>

    <div x-show="modal" x-transition.duration.300ms.opacity.50 :class="{ 'visible': modal, 'invisible': !modal }" class="invisible fixed inset-0 z-50 bg-[#0000006E] flex items-center justify-center h-screen">
        <div class="w-[80%] sm:w-[70%] md:w-[60%] lg:w-[50%] bg-white rounded-lg md:rounded-xl">
            <div class="flex justify-between items-center border-b border-[#D1D1D1] py-2.5 px-3">
                <div class="flex items-center gap-2">
                    <h1 class="text-sm md:text-base text-black font-semibold">Upload Laporan</h1>
                </div>
                <button type="button" @click="modal = false" type="button" class="bg-[#E8E8E8] p-2 rounded-full">
                    <svg class="w-3 fill-[#8B8B8B]" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.0204 1.68705C11.2157 1.49179 11.2157 1.1752 11.0204 0.979943C10.8251 0.784681 10.5086 0.784681 10.3133 0.979943L6.00017 5.29307L1.68705 0.979945C1.49179 0.784683 1.1752 0.784683 0.979943 0.979945C0.784681 1.17521 0.784681 1.49179 0.979943 1.68705L5.29306 6.00017L0.979961 10.3133C0.784699 10.5085 0.784699 10.8251 0.979961 11.0204C1.17522 11.2156 1.49181 11.2156 1.68707 11.0204L6.00017 6.70728L10.3133 11.0204C10.5085 11.2156 10.8251 11.2156 11.0204 11.0204C11.2156 10.8251 11.2156 10.5085 11.0204 10.3133L6.70728 6.00017L11.0204 1.68705Z"/>
                    </svg>
                </button>
            </div>
            <div class="pt-2.5 pb-3.5 px-5 space-y-4">
                <div class="space-y-2">
                    <label for="upload">
                        <div class="border-[1.5px] border-dashed border-[#384EB74D] p-5 mx-5 space-y-2 rounded md:rounded-md cursor-pointer">
                            <img class="w-16 md:w-20 h-16 md:h-20 mx-auto" src="/svgs/folder1.svg">
                            <div class="text-center space-y-1">
                                <p class="text-[10px] md:text-xs text-[#676767] font-normal">Format harus .pdf</p>
                            </div>
                        </div>
                        <input class="hidden" type="file" id="upload" multiple>
                    </label>
                </div>
                <div class="flex justify-center items-center gap-2 md:gap-3">
                    <button type="button" @click="modal = false" class="bg-[#FF4E4E] py-1.5 px-4 md:px-5 rounded">
                        <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Batal</h1>
                    </button>
                    <button class="bg-gray-500 cursor-not-allowed py-1.5 px-4 md:px-5 rounded">
                        <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Upload</h1>
                    </button>
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
                    <button class="flex items-center gap-2 w-fit bg-red-500 py-1.5 px-2 rounded-md">
                        <svg class="w-3.5 stroke-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 2.5V5C13 7.35702 13 8.53553 13.7322 9.26777C14.4645 10 15.643 10 18 10H22"
                                stroke="#FFFFFF" stroke-width="1.5"></path>
                            <path d="M6 18L9 15M9 18L6 15" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round"></path>
                            <path
                                d="M2.75 10C2.75 9.58579 2.41421 9.25 2 9.25C1.58579 9.25 1.25 9.58579 1.25 10H2.75ZM21.25 14C21.25 14.4142 21.5858 14.75 22 14.75C22.4142 14.75 22.75 14.4142 22.75 14H21.25ZM15.3929 4.05365L14.8912 4.61112L15.3929 4.05365ZM19.3517 7.61654L18.85 8.17402L19.3517 7.61654ZM21.654 10.1541L20.9689 10.4592V10.4592L21.654 10.1541ZM3.17157 20.8284L3.7019 20.2981H3.7019L3.17157 20.8284ZM20.8284 20.8284L20.2981 20.2981L20.2981 20.2981L20.8284 20.8284ZM1.35509 5.92658C1.31455 6.33881 1.61585 6.70585 2.02807 6.7464C2.4403 6.78695 2.80734 6.48564 2.84789 6.07342L1.35509 5.92658ZM22.6449 18.0734C22.6855 17.6612 22.3841 17.2941 21.9719 17.2536C21.5597 17.2131 21.1927 17.5144 21.1521 17.9266L22.6449 18.0734ZM14 21.25H10V22.75H14V21.25ZM2.75 14V10H1.25V14H2.75ZM21.25 13.5629V14H22.75V13.5629H21.25ZM14.8912 4.61112L18.85 8.17402L19.8534 7.05907L15.8947 3.49618L14.8912 4.61112ZM22.75 13.5629C22.75 11.8745 22.7651 10.8055 22.3391 9.84897L20.9689 10.4592C21.2349 11.0565 21.25 11.742 21.25 13.5629H22.75ZM18.85 8.17402C20.2034 9.3921 20.7029 9.86199 20.9689 10.4592L22.3391 9.84897C21.9131 8.89241 21.1084 8.18853 19.8534 7.05907L18.85 8.17402ZM10.0298 2.75C11.6116 2.75 12.2085 2.76158 12.7405 2.96573L13.2779 1.5653C12.4261 1.23842 11.498 1.25 10.0298 1.25V2.75ZM15.8947 3.49618C14.8087 2.51878 14.1297 1.89214 13.2779 1.5653L12.7405 2.96573C13.2727 3.16993 13.7215 3.55836 14.8912 4.61112L15.8947 3.49618ZM10 21.25C8.09318 21.25 6.73851 21.2484 5.71085 21.1102C4.70476 20.975 4.12511 20.7213 3.7019 20.2981L2.64124 21.3588C3.38961 22.1071 4.33855 22.4392 5.51098 22.5969C6.66182 22.7516 8.13558 22.75 10 22.75V21.25ZM1.25 14C1.25 15.8644 1.24841 17.3382 1.40313 18.489C1.56076 19.6614 1.89288 20.6104 2.64124 21.3588L3.7019 20.2981C3.27869 19.8749 3.02502 19.2952 2.88976 18.2892C2.75159 17.2615 2.75 15.9068 2.75 14H1.25ZM14 22.75C15.8644 22.75 17.3382 22.7516 18.489 22.5969C19.6614 22.4392 20.6104 22.1071 21.3588 21.3588L20.2981 20.2981C19.8749 20.7213 19.2952 20.975 18.2892 21.1102C17.2615 21.2484 15.9068 21.25 14 21.25V22.75ZM10.0298 1.25C8.15538 1.25 6.67442 1.24842 5.51887 1.40307C4.34232 1.56054 3.39019 1.8923 2.64124 2.64124L3.7019 3.7019C4.12453 3.27928 4.70596 3.02525 5.71785 2.88982C6.75075 2.75158 8.11311 2.75 10.0298 2.75V1.25ZM2.84789 6.07342C2.96931 4.83905 3.23045 4.17335 3.7019 3.7019L2.64124 2.64124C1.80633 3.47616 1.48944 4.56072 1.35509 5.92658L2.84789 6.07342ZM21.1521 17.9266C21.0307 19.1609 20.7695 19.8266 20.2981 20.2981L21.3588 21.3588C22.1937 20.5238 22.5106 19.4393 22.6449 18.0734L21.1521 17.9266Z"
                                fill="#FFFFFF" stroke-width="0"></path>
                        </svg>
                        <h1 class="text-[#E8EDF2] font-normal">Hapus</h1>
                    </button>
                </div>
            </td>
        </tr>
    </table>
</section>