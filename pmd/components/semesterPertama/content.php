<div x-show="window.innerWidth < 640 && isOpen" x-transition.opacity :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden fixed inset-0 bg-zinc-800 bg-opacity-80 z-40"></div>
<div x-data="{ isOpenn : true }">
    <?php include_once("../pmd/layout/sidebar.php"); ?>

    <main :class="isOpenn ? 'md:ml-60' : 'md:ml-20 ' + 'transition-all duration-500'" class="relative md:ml-60 pt-16 p-5 space-y-4">
        <div x-data="{ isOpen : false }" class="space-y-5">
            <div class="flex justify-between items-center">
                <h1 class="text-base md:text-lg lg:text-xl text-black font-medium">Semeter Pertama</h1>
                <h1 class="text-xs md:text-sm text-black font-medium"><span class="text-primary font-medium">Home</span> / Semeter Pertama</h1>
            </div>
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

        <section class="space-y-3">
            <section class="w-full lg:flex justify-between items-center gap-3 space-y-3 lg:space-y-0">
                <div class="w-full md:w-[60%] lg:w-[40%] bg-white py-3 md:py-4 px-5 space-y-2 rounded md:rounded-md shadow-md shadow-black/5">
                    <h1 class="text-xs md:text-sm text-primary font-semibold">Laporan Semeter Pertama Desa Janji</h1>
                </div>
                <div class="md:flex items-center gap-3 space-y-3 md:space-y-0">
                    <div x-data="{ selected : null, isOpen : false }" class="flex items-center gap-2 md:gap-3">
                        <h1 class="text-xs md:text-sm text-[#778294] font-medium capitalize">Filter</h1>
                        <div class="w-full md:w-40 relative space-y-2">
                            <button @click="isOpen = !isOpen" class="w-full flex justify-between items-center gap-2 bg-white py-1.5 px-4 rounded md:rounded-md shadow-md shadow-black/5 focus:outline-none focus:ring-0">
                                <h1 x-text="selected ? selected : 'Pilih Filter'" class="text-xs md:text-sm text-[#313131] font-normal"></h1>
                                <svg class="w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 011.414 0L10 11.414l3.293-3.707a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <div x-show="isOpen" @click.outside="isOpen = false" x-transition.duration.300ms.opacity.50 :class="{ 'visible': isOpen, 'invisible': !isOpen }" class="invisible absolute z-10 w-full bg-white rounded md:rounded-md shadow-md shadow-black/5">
                                <template x-for="(option, index) in ['Terbaru', 'Terlama']" :key="index">
                                    <div @click="selected = option; isOpen = false" class="flex justify-between items-center gap-2 py-1.5 px-4 cursor-pointer rounded md:rounded-md">
                                        <h1 x-text="option" class="text-xs md:text-sm text-[#313131] font-normal"></h1>
                                        <svg x-show="selected === option" class="w-5 stroke-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center bg-white rounded md:rounded-md shadow-md shadow-black/5">
                        <label for="search" class="flex items-center ml-5 cursor-pointer">
                            <svg class="w-[18px] md:w-5 stroke-[1.5] stroke-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 6C13.7614 6 16 8.23858 16 11M16.6588 16.6549L21 21M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" stroke-linecap="round"/>
                            </svg>
                        </label>
                        <input type="search" id="search" placeholder="Searching" autocomplete="off" class="w-full bg-transparent border-none text-xs md:text-sm text-gray-500 font-normal focus:outline-none focus:ring-0 placeholder:text-xs md:placeholder:text-sm placeholder:text-gray-500 placeholder:font-medium">
                    </div>
                </div>
            </section>

            <section class="scrollbar-x bg-transparent rounded md:rounded-md shadow-md shadow-black/5">
                <table class="w-max lg:w-full mx-auto bg-white text-center table-auto">
                    <tr class="text-[10px] md:text-xs text-black capitalize">
                        <th class="w-[5%] bg-white font-normal py-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">No</th>
                        <th class="w-[30%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Judul Surat</th>
                        <th class="w-[15%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Status</th>
                        <th class="w-[20%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Tanggal dikirim</th>
                        <th class="w-[20%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Tanggal direvisi</th>
                        <th class="w-[15%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Tindakan</th>
                    </tr>
                    <tr class="odd:bg-white even:bg-[#E8EDF2] text-xs text-black/70 capitalize overflow-visible">
                        <td class="font-normal my-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">1</td>
                        <td class="py-3.5 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                            <h1 class="line-clamp-1 font-normal">Undangan Sosialisasi</h1>
                        </td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                            <div class="select-none flex items-center gap-2 w-fit bg-[#CEFFE8] py-1.5 px-2 rounded-xl mx-auto">
                                <svg class="w-4" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.0501 11.45L12.3376 6.1625L11.2876 5.1125L7.0501 9.35L4.9126 7.2125L3.8626 8.2625L7.0501 11.45ZM8.1001 15.5C7.0626 15.5 6.0876 15.3031 5.1751 14.9094C4.2626 14.5156 3.46885 13.9813 2.79385 13.3063C2.11885 12.6313 1.58447 11.8375 1.19072 10.925C0.796973 10.0125 0.600098 9.0375 0.600098 8C0.600098 6.9625 0.796973 5.9875 1.19072 5.075C1.58447 4.1625 2.11885 3.36875 2.79385 2.69375C3.46885 2.01875 4.2626 1.48438 5.1751 1.09063C6.0876 0.696875 7.0626 0.5 8.1001 0.5C9.1376 0.5 10.1126 0.696875 11.0251 1.09063C11.9376 1.48438 12.7313 2.01875 13.4063 2.69375C14.0813 3.36875 14.6157 4.1625 15.0095 5.075C15.4032 5.9875 15.6001 6.9625 15.6001 8C15.6001 9.0375 15.4032 10.0125 15.0095 10.925C14.6157 11.8375 14.0813 12.6313 13.4063 13.3063C12.7313 13.9813 11.9376 14.5156 11.0251 14.9094C10.1126 15.3031 9.1376 15.5 8.1001 15.5Z" fill="#059669"/>
                                </svg>
                                <h1 class="text-[#059669] font-normal">Sukses</h1>
                            </div>
                        </td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">04-09-2024</td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">07-09-2024</td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                            <div class="flex items-center gap-1.5 md:gap-2">
                                <div x-data="{ modal: false }">
                                    <button type="button" @click="modal = !modal" class="flex items-center gap-2 w-fit bg-[#FA6D09] py-1.5 px-2 rounded-md mx-auto">
                                        <h1 class="text-[#E8EDF2] font-normal">Revisi</h1>
                                        <svg class="w-2.5 fill-white" viewBox="0 0 12 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.825 12.0375C0.55 11.5625 0.34375 11.075 0.20625 10.575C0.06875 10.075 0 9.5625 0 9.0375C0 7.3625 0.58125 5.9375 1.74375 4.7625C2.90625 3.5875 4.325 3 6 3H6.13125L4.93125 1.8L5.98125 0.75L8.98125 3.75L5.98125 6.75L4.93125 5.7L6.13125 4.5H6C4.75 4.5 3.6875 4.94063 2.8125 5.82188C1.9375 6.70313 1.5 7.775 1.5 9.0375C1.5 9.3625 1.5375 9.68125 1.6125 9.99375C1.6875 10.3062 1.8 10.6125 1.95 10.9125L0.825 12.0375ZM6.01875 17.25L3.01875 14.25L6.01875 11.25L7.06875 12.3L5.86875 13.5H6C7.25 13.5 8.3125 13.0594 9.1875 12.1781C10.0625 11.2969 10.5 10.225 10.5 8.9625C10.5 8.6375 10.4625 8.31875 10.3875 8.00625C10.3125 7.69375 10.2 7.3875 10.05 7.0875L11.175 5.9625C11.45 6.4375 11.6562 6.925 11.7938 7.425C11.9313 7.925 12 8.4375 12 8.9625C12 10.6375 11.4187 12.0625 10.2563 13.2375C9.09375 14.4125 7.675 15 6 15H5.86875L7.06875 16.2L6.01875 17.25Z"/>
                                        </svg>
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
                                                    <h1 class="text-start text-xs md:text-sm text-black font-normal">Tambahkan Catatan</h1>
                                                    <textarea rows="3" class="inputText w-full resize-none bg-white px-3.5 py-2.5 md:px-4 md:py-3 border-[0.5px] border-[#D6D6D6] focus:border-[#D6D6D6] rounded-lg overflow-hidden focus:outline-none focus:ring-0 text-[#8B8B8B] text-[10px] md:text-xs font-normal"></textarea>
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
                                <button class="flex items-center gap-2 w-fit bg-primary py-1.5 px-2 rounded-md mx-auto">
                                    <svg class="w-3.5 stroke-white" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.60005 15.2007H3.10004C2.10593 15.2007 1.30004 14.3948 1.30005 13.4007L1.30012 2.60077C1.30012 1.60666 2.10601 0.800781 3.10012 0.800781H11.2003C12.1944 0.800781 13.0003 1.60667 13.0003 2.60078V6.20078M12.55 12.0125V11.9651M4.45033 4.40078H9.85033M4.45033 7.10078H9.85033M4.45033 9.80078H7.15033M15.7 12.0508C15.7 12.0508 14.9529 14.2555 12.55 14.217C10.1472 14.1785 9.40005 12.0508 9.40005 12.0508C9.40005 12.0508 10.1169 9.80752 12.55 9.80752C14.9832 9.80752 15.7 12.0508 15.7 12.0508Z" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <h1 class="text-[#E8EDF2] font-normal">LihatPDF</h1>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-[#E8EDF2] text-xs text-black/70 capitalize overflow-visible">
                        <td class="font-normal my-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">2</td>
                        <td class="py-3.5 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                            <h1 class="line-clamp-1 font-normal">Undangan Sosialisasi</h1>
                        </td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                            <div class="select-none flex items-center gap-2 w-fit bg-[#FFEEA9] py-1.5 px-2 rounded-xl mx-auto">
                                <svg class="w-4" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.6001 10.75C7.8126 10.75 7.99072 10.6781 8.13447 10.5344C8.27822 10.3906 8.3501 10.2125 8.3501 10C8.3501 9.7875 8.27822 9.60938 8.13447 9.46563C7.99072 9.32188 7.8126 9.25 7.6001 9.25C7.3876 9.25 7.20947 9.32188 7.06572 9.46563C6.92197 9.60938 6.8501 9.7875 6.8501 10C6.8501 10.2125 6.92197 10.3906 7.06572 10.5344C7.20947 10.6781 7.3876 10.75 7.6001 10.75ZM6.8501 7.75H8.3501V3.25H6.8501V7.75ZM4.7876 13.75L0.850098 9.8125V4.1875L4.7876 0.25H10.4126L14.3501 4.1875V9.8125L10.4126 13.75H4.7876Z" fill="#D97706"/>
                                </svg>
                                <h1 class="text-[#D97706] font-normal">BelumDilihat</h1>
                            </div>
                        </td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">04-09-2024</td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">07-09-2024</td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                            <div class="flex items-center gap-1.5 md:gap-2">
                                <div x-data="{ modal: false }">
                                    <button type="button" @click="modal = !modal" class="flex items-center gap-2 w-fit bg-[#FA6D09] py-1.5 px-2 rounded-md mx-auto">
                                        <h1 class="text-[#E8EDF2] font-normal">Revisi</h1>
                                        <svg class="w-2.5 fill-white" viewBox="0 0 12 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.825 12.0375C0.55 11.5625 0.34375 11.075 0.20625 10.575C0.06875 10.075 0 9.5625 0 9.0375C0 7.3625 0.58125 5.9375 1.74375 4.7625C2.90625 3.5875 4.325 3 6 3H6.13125L4.93125 1.8L5.98125 0.75L8.98125 3.75L5.98125 6.75L4.93125 5.7L6.13125 4.5H6C4.75 4.5 3.6875 4.94063 2.8125 5.82188C1.9375 6.70313 1.5 7.775 1.5 9.0375C1.5 9.3625 1.5375 9.68125 1.6125 9.99375C1.6875 10.3062 1.8 10.6125 1.95 10.9125L0.825 12.0375ZM6.01875 17.25L3.01875 14.25L6.01875 11.25L7.06875 12.3L5.86875 13.5H6C7.25 13.5 8.3125 13.0594 9.1875 12.1781C10.0625 11.2969 10.5 10.225 10.5 8.9625C10.5 8.6375 10.4625 8.31875 10.3875 8.00625C10.3125 7.69375 10.2 7.3875 10.05 7.0875L11.175 5.9625C11.45 6.4375 11.6562 6.925 11.7938 7.425C11.9313 7.925 12 8.4375 12 8.9625C12 10.6375 11.4187 12.0625 10.2563 13.2375C9.09375 14.4125 7.675 15 6 15H5.86875L7.06875 16.2L6.01875 17.25Z"/>
                                        </svg>
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
                                                    <h1 class="text-start text-xs md:text-sm text-black font-normal">Tambahkan Catatan</h1>
                                                    <textarea rows="3" class="inputText w-full resize-none bg-white px-3.5 py-2.5 md:px-4 md:py-3 border-[0.5px] border-[#D6D6D6] focus:border-[#D6D6D6] rounded-lg overflow-hidden focus:outline-none focus:ring-0 text-[#8B8B8B] text-[10px] md:text-xs font-normal"></textarea>
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
                                <button class="flex items-center gap-2 w-fit bg-primary py-1.5 px-2 rounded-md mx-auto">
                                    <svg class="w-3.5 stroke-white" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.60005 15.2007H3.10004C2.10593 15.2007 1.30004 14.3948 1.30005 13.4007L1.30012 2.60077C1.30012 1.60666 2.10601 0.800781 3.10012 0.800781H11.2003C12.1944 0.800781 13.0003 1.60667 13.0003 2.60078V6.20078M12.55 12.0125V11.9651M4.45033 4.40078H9.85033M4.45033 7.10078H9.85033M4.45033 9.80078H7.15033M15.7 12.0508C15.7 12.0508 14.9529 14.2555 12.55 14.217C10.1472 14.1785 9.40005 12.0508 9.40005 12.0508C9.40005 12.0508 10.1169 9.80752 12.55 9.80752C14.9832 9.80752 15.7 12.0508 15.7 12.0508Z" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <h1 class="text-[#E8EDF2] font-normal">LihatPDF</h1>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-[#E8EDF2] text-xs text-black/70 capitalize overflow-visible">
                        <td class="font-normal my-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">3</td>
                        <td class="py-3.5 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                            <h1 class="line-clamp-1 font-normal">Undangan Sosialisasi</h1>
                        </td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                            <div class="select-none flex items-center gap-2 w-fit bg-[#FFCCCC] py-1.5 px-2 rounded-xl mx-auto">
                                <svg class="w-4" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.4001 11.75L8.1001 9.05L10.8001 11.75L11.8501 10.7L9.1501 8L11.8501 5.3L10.8001 4.25L8.1001 6.95L5.4001 4.25L4.3501 5.3L7.0501 8L4.3501 10.7L5.4001 11.75ZM8.1001 15.5C7.0626 15.5 6.0876 15.3031 5.1751 14.9094C4.2626 14.5156 3.46885 13.9813 2.79385 13.3063C2.11885 12.6313 1.58447 11.8375 1.19072 10.925C0.796973 10.0125 0.600098 9.0375 0.600098 8C0.600098 6.9625 0.796973 5.9875 1.19072 5.075C1.58447 4.1625 2.11885 3.36875 2.79385 2.69375C3.46885 2.01875 4.2626 1.48438 5.1751 1.09063C6.0876 0.696875 7.0626 0.5 8.1001 0.5C9.1376 0.5 10.1126 0.696875 11.0251 1.09063C11.9376 1.48438 12.7313 2.01875 13.4063 2.69375C14.0813 3.36875 14.6157 4.1625 15.0095 5.075C15.4032 5.9875 15.6001 6.9625 15.6001 8C15.6001 9.0375 15.4032 10.0125 15.0095 10.925C14.6157 11.8375 14.0813 12.6313 13.4063 13.3063C12.7313 13.9813 11.9376 14.5156 11.0251 14.9094C10.1126 15.3031 9.1376 15.5 8.1001 15.5Z" fill="#DC2626"/>
                                </svg>
                                <h1 class="text-[#DC2626] font-normal">Revisi</h1>
                            </div>
                        </td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">04-09-2024</td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">07-09-2024</td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                            <div class="flex items-center gap-1.5 md:gap-2">
                                <div x-data="{ modal: false }">
                                    <button type="button" @click="modal = !modal" class="flex items-center gap-2 w-fit bg-[#FA6D09] py-1.5 px-2 rounded-md mx-auto">
                                        <h1 class="text-[#E8EDF2] font-normal">Revisi</h1>
                                        <svg class="w-2.5 fill-white" viewBox="0 0 12 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.825 12.0375C0.55 11.5625 0.34375 11.075 0.20625 10.575C0.06875 10.075 0 9.5625 0 9.0375C0 7.3625 0.58125 5.9375 1.74375 4.7625C2.90625 3.5875 4.325 3 6 3H6.13125L4.93125 1.8L5.98125 0.75L8.98125 3.75L5.98125 6.75L4.93125 5.7L6.13125 4.5H6C4.75 4.5 3.6875 4.94063 2.8125 5.82188C1.9375 6.70313 1.5 7.775 1.5 9.0375C1.5 9.3625 1.5375 9.68125 1.6125 9.99375C1.6875 10.3062 1.8 10.6125 1.95 10.9125L0.825 12.0375ZM6.01875 17.25L3.01875 14.25L6.01875 11.25L7.06875 12.3L5.86875 13.5H6C7.25 13.5 8.3125 13.0594 9.1875 12.1781C10.0625 11.2969 10.5 10.225 10.5 8.9625C10.5 8.6375 10.4625 8.31875 10.3875 8.00625C10.3125 7.69375 10.2 7.3875 10.05 7.0875L11.175 5.9625C11.45 6.4375 11.6562 6.925 11.7938 7.425C11.9313 7.925 12 8.4375 12 8.9625C12 10.6375 11.4187 12.0625 10.2563 13.2375C9.09375 14.4125 7.675 15 6 15H5.86875L7.06875 16.2L6.01875 17.25Z"/>
                                        </svg>
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
                                                    <h1 class="text-start text-xs md:text-sm text-black font-normal">Tambahkan Catatan</h1>
                                                    <textarea rows="3" class="inputText w-full resize-none bg-white px-3.5 py-2.5 md:px-4 md:py-3 border-[0.5px] border-[#D6D6D6] focus:border-[#D6D6D6] rounded-lg overflow-hidden focus:outline-none focus:ring-0 text-[#8B8B8B] text-[10px] md:text-xs font-normal"></textarea>
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
                                <button class="flex items-center gap-2 w-fit bg-primary py-1.5 px-2 rounded-md mx-auto">
                                    <svg class="w-3.5 stroke-white" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.60005 15.2007H3.10004C2.10593 15.2007 1.30004 14.3948 1.30005 13.4007L1.30012 2.60077C1.30012 1.60666 2.10601 0.800781 3.10012 0.800781H11.2003C12.1944 0.800781 13.0003 1.60667 13.0003 2.60078V6.20078M12.55 12.0125V11.9651M4.45033 4.40078H9.85033M4.45033 7.10078H9.85033M4.45033 9.80078H7.15033M15.7 12.0508C15.7 12.0508 14.9529 14.2555 12.55 14.217C10.1472 14.1785 9.40005 12.0508 9.40005 12.0508C9.40005 12.0508 10.1169 9.80752 12.55 9.80752C14.9832 9.80752 15.7 12.0508 15.7 12.0508Z" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <h1 class="text-[#E8EDF2] font-normal">LihatPDF</h1>
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
                <button class="hidden sm:block group transition-all py-1 px-3.5 focus:px-6 md:focus:px-8 focus:border-b focus:border-primary">
                    <h1 class="text-[10px] md:text-sm text-[#9B9B9B] transition-colors group-focus:text-primary font-semibold">1</h1>
                </button>
                <button class="py-1 px-6 md:px-8 border-b border-primary">
                    <h1 class="text-[10px] md:text-sm text-primary font-semibold">2</h1>
                </button>
                <button class="hidden sm:block group transition-all py-1 px-3.5 focus:px-6 md:focus:px-8 focus:border-b focus:border-primary">
                    <h1 class="text-[10px] md:text-sm text-[#9B9B9B] transition-colors group-focus:text-primary font-semibold">3</h1>
                </button>
                <button class="bg-primary py-1.5 px-4 rounded-md md:rounded-lg">
                    <h1 class="text-[10px] md:text-sm text-white font-semibold">Selanjutnya</h1>
                </button>
            </section>
        </section>
    </main>
</div>