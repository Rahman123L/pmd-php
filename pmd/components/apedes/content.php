<div x-show="window.innerWidth < 640 && isOpen" x-transition.opacity :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden fixed inset-0 bg-zinc-800 bg-opacity-80 z-40"></div>
<div x-data="{ isOpenn : true }">
    <?php include_once("../pmd/layout/sidebar.php"); ?>

    <main :class="isOpenn ? 'md:ml-60' : 'md:ml-20 ' + 'transition-all duration-500'" class="relative md:ml-60 pt-16 p-5 space-y-4">
        <div x-data="{ isOpen : false }" class="space-y-5">
            <div class="flex justify-between items-center">
                <h1 class="text-base md:text-lg lg:text-xl text-black font-medium">Laporan APEDES</h1>
                <h1 class="text-xs md:text-sm text-black font-medium"><span class="text-primary font-medium">Home</span> / Laporan APEDES</h1>
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
                    <h1 class="text-xs md:text-sm text-primary font-semibold">Laporan APEDES Desa Janji</h1>
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
                        <th class="w-[5%] bg-white font-normal py-4 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">No</th>
                        <th class="w-[30%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">Nama</th>
                        <th class="w-[15%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">Status</th>
                        <th class="w-[20%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">Tanggal dikirim</th>
                        <th class="w-[20%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">Tanggal direvisi</th>
                        <th class="w-[15%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">Aksi</th>
                    </tr>
                    <tr class="odd:bg-white even:bg-[#E8EDF2] text-xs text-black/70 capitalize overflow-visible">
                        <td class="font-normal my-4 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">1</td>
                        <td class="py-3.5 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">
                            <h1 class="line-clamp-1 font-normal">Undangan Sosialisasi</h1>
                        </td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">
                            <div class="select-none flex items-center gap-2 w-fit bg-[#CEFFE8] py-1.5 px-2 rounded-xl mx-auto">
                                <svg class="w-4" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.0501 11.45L12.3376 6.1625L11.2876 5.1125L7.0501 9.35L4.9126 7.2125L3.8626 8.2625L7.0501 11.45ZM8.1001 15.5C7.0626 15.5 6.0876 15.3031 5.1751 14.9094C4.2626 14.5156 3.46885 13.9813 2.79385 13.3063C2.11885 12.6313 1.58447 11.8375 1.19072 10.925C0.796973 10.0125 0.600098 9.0375 0.600098 8C0.600098 6.9625 0.796973 5.9875 1.19072 5.075C1.58447 4.1625 2.11885 3.36875 2.79385 2.69375C3.46885 2.01875 4.2626 1.48438 5.1751 1.09063C6.0876 0.696875 7.0626 0.5 8.1001 0.5C9.1376 0.5 10.1126 0.696875 11.0251 1.09063C11.9376 1.48438 12.7313 2.01875 13.4063 2.69375C14.0813 3.36875 14.6157 4.1625 15.0095 5.075C15.4032 5.9875 15.6001 6.9625 15.6001 8C15.6001 9.0375 15.4032 10.0125 15.0095 10.925C14.6157 11.8375 14.0813 12.6313 13.4063 13.3063C12.7313 13.9813 11.9376 14.5156 11.0251 14.9094C10.1126 15.3031 9.1376 15.5 8.1001 15.5Z" fill="#059669"/>
                                </svg>
                                <h1 class="text-[#059669] font-normal">Sukses</h1>
                            </div>
                        </td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">04-09-2024</td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">07-09-2024</td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">
                            <a href="laporanApedes.php" class="flex items-center gap-2 w-fit bg-primary py-1.5 px-2 rounded-md mx-auto">
                                <svg class="w-4 fill-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.25C9.92893 8.25 8.25 9.92893 8.25 12C8.25 14.0711 9.92893 15.75 12 15.75C14.0711 15.75 15.75 14.0711 15.75 12C15.75 9.92893 14.0711 8.25 12 8.25ZM9.75 12C9.75 10.7574 10.7574 9.75 12 9.75C13.2426 9.75 14.25 10.7574 14.25 12C14.25 13.2426 13.2426 14.25 12 14.25C10.7574 14.25 9.75 13.2426 9.75 12Z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C7.48587 3.25 4.44529 5.9542 2.68057 8.24686L2.64874 8.2882C2.24964 8.80653 1.88206 9.28392 1.63269 9.8484C1.36564 10.4529 1.25 11.1117 1.25 12C1.25 12.8883 1.36564 13.5471 1.63269 14.1516C1.88206 14.7161 2.24964 15.1935 2.64875 15.7118L2.68057 15.7531C4.44529 18.0458 7.48587 20.75 12 20.75C16.5141 20.75 19.5547 18.0458 21.3194 15.7531L21.3512 15.7118C21.7504 15.1935 22.1179 14.7161 22.3673 14.1516C22.6344 13.5471 22.75 12.8883 22.75 12C22.75 11.1117 22.6344 10.4529 22.3673 9.8484C22.1179 9.28391 21.7504 8.80652 21.3512 8.28818L21.3194 8.24686C19.5547 5.9542 16.5141 3.25 12 3.25ZM3.86922 9.1618C5.49864 7.04492 8.15036 4.75 12 4.75C15.8496 4.75 18.5014 7.04492 20.1308 9.1618C20.5694 9.73159 20.8263 10.0721 20.9952 10.4545C21.1532 10.812 21.25 11.2489 21.25 12C21.25 12.7511 21.1532 13.188 20.9952 13.5455C20.8263 13.9279 20.5694 14.2684 20.1308 14.8382C18.5014 16.9551 15.8496 19.25 12 19.25C8.15036 19.25 5.49864 16.9551 3.86922 14.8382C3.43064 14.2684 3.17374 13.9279 3.00476 13.5455C2.84684 13.188 2.75 12.7511 2.75 12C2.75 11.2489 2.84684 10.812 3.00476 10.4545C3.17374 10.0721 3.43063 9.73159 3.86922 9.1618Z"/>
                                </svg>
                                <h1 class="text-white font-normal">Detail</h1>
                            </a>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-[#E8EDF2] text-xs text-black/70 capitalize overflow-visible">
                        <td class="font-normal my-4 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">2</td>
                        <td class="py-3.5 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">
                            <h1 class="line-clamp-1 font-normal">Undangan Sosialisasi</h1>
                        </td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">
                            <div class="select-none flex items-center gap-2 w-fit bg-[#FFEEA9] py-1.5 px-2 rounded-xl mx-auto">
                                <svg class="w-4" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.6001 10.75C7.8126 10.75 7.99072 10.6781 8.13447 10.5344C8.27822 10.3906 8.3501 10.2125 8.3501 10C8.3501 9.7875 8.27822 9.60938 8.13447 9.46563C7.99072 9.32188 7.8126 9.25 7.6001 9.25C7.3876 9.25 7.20947 9.32188 7.06572 9.46563C6.92197 9.60938 6.8501 9.7875 6.8501 10C6.8501 10.2125 6.92197 10.3906 7.06572 10.5344C7.20947 10.6781 7.3876 10.75 7.6001 10.75ZM6.8501 7.75H8.3501V3.25H6.8501V7.75ZM4.7876 13.75L0.850098 9.8125V4.1875L4.7876 0.25H10.4126L14.3501 4.1875V9.8125L10.4126 13.75H4.7876Z" fill="#D97706"/>
                                </svg>
                                <h1 class="text-[#D97706] font-normal">Proses</h1>
                            </div>
                        </td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">04-09-2024</td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">07-09-2024</td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">
                            <a href="laporanApedes.php" class="flex items-center gap-2 w-fit bg-primary py-1.5 px-2 rounded-md mx-auto">
                                <svg class="w-4 fill-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.25C9.92893 8.25 8.25 9.92893 8.25 12C8.25 14.0711 9.92893 15.75 12 15.75C14.0711 15.75 15.75 14.0711 15.75 12C15.75 9.92893 14.0711 8.25 12 8.25ZM9.75 12C9.75 10.7574 10.7574 9.75 12 9.75C13.2426 9.75 14.25 10.7574 14.25 12C14.25 13.2426 13.2426 14.25 12 14.25C10.7574 14.25 9.75 13.2426 9.75 12Z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C7.48587 3.25 4.44529 5.9542 2.68057 8.24686L2.64874 8.2882C2.24964 8.80653 1.88206 9.28392 1.63269 9.8484C1.36564 10.4529 1.25 11.1117 1.25 12C1.25 12.8883 1.36564 13.5471 1.63269 14.1516C1.88206 14.7161 2.24964 15.1935 2.64875 15.7118L2.68057 15.7531C4.44529 18.0458 7.48587 20.75 12 20.75C16.5141 20.75 19.5547 18.0458 21.3194 15.7531L21.3512 15.7118C21.7504 15.1935 22.1179 14.7161 22.3673 14.1516C22.6344 13.5471 22.75 12.8883 22.75 12C22.75 11.1117 22.6344 10.4529 22.3673 9.8484C22.1179 9.28391 21.7504 8.80652 21.3512 8.28818L21.3194 8.24686C19.5547 5.9542 16.5141 3.25 12 3.25ZM3.86922 9.1618C5.49864 7.04492 8.15036 4.75 12 4.75C15.8496 4.75 18.5014 7.04492 20.1308 9.1618C20.5694 9.73159 20.8263 10.0721 20.9952 10.4545C21.1532 10.812 21.25 11.2489 21.25 12C21.25 12.7511 21.1532 13.188 20.9952 13.5455C20.8263 13.9279 20.5694 14.2684 20.1308 14.8382C18.5014 16.9551 15.8496 19.25 12 19.25C8.15036 19.25 5.49864 16.9551 3.86922 14.8382C3.43064 14.2684 3.17374 13.9279 3.00476 13.5455C2.84684 13.188 2.75 12.7511 2.75 12C2.75 11.2489 2.84684 10.812 3.00476 10.4545C3.17374 10.0721 3.43063 9.73159 3.86922 9.1618Z"/>
                                </svg>
                                <h1 class="text-white font-normal">Detail</h1>
                            </a>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-[#E8EDF2] text-xs text-black/70 capitalize overflow-visible">
                        <td class="font-normal my-4 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">3</td>
                        <td class="py-3.5 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">
                            <h1 class="line-clamp-1 font-normal">Undangan Sosialisasi</h1>
                        </td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">
                            <div class="select-none flex items-center gap-2 w-fit bg-[#FFCCCC] py-1.5 px-2 rounded-xl mx-auto">
                                <svg class="w-4" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.4001 11.75L8.1001 9.05L10.8001 11.75L11.8501 10.7L9.1501 8L11.8501 5.3L10.8001 4.25L8.1001 6.95L5.4001 4.25L4.3501 5.3L7.0501 8L4.3501 10.7L5.4001 11.75ZM8.1001 15.5C7.0626 15.5 6.0876 15.3031 5.1751 14.9094C4.2626 14.5156 3.46885 13.9813 2.79385 13.3063C2.11885 12.6313 1.58447 11.8375 1.19072 10.925C0.796973 10.0125 0.600098 9.0375 0.600098 8C0.600098 6.9625 0.796973 5.9875 1.19072 5.075C1.58447 4.1625 2.11885 3.36875 2.79385 2.69375C3.46885 2.01875 4.2626 1.48438 5.1751 1.09063C6.0876 0.696875 7.0626 0.5 8.1001 0.5C9.1376 0.5 10.1126 0.696875 11.0251 1.09063C11.9376 1.48438 12.7313 2.01875 13.4063 2.69375C14.0813 3.36875 14.6157 4.1625 15.0095 5.075C15.4032 5.9875 15.6001 6.9625 15.6001 8C15.6001 9.0375 15.4032 10.0125 15.0095 10.925C14.6157 11.8375 14.0813 12.6313 13.4063 13.3063C12.7313 13.9813 11.9376 14.5156 11.0251 14.9094C10.1126 15.3031 9.1376 15.5 8.1001 15.5Z" fill="#DC2626"/>
                                </svg>
                                <h1 class="text-[#DC2626] font-normal">Revisi</h1>
                            </div>
                        </td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">04-09-2024</td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">07-09-2024</td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:sticky last:right-0">
                            <a href="laporanApedes.php" class="flex items-center gap-2 w-fit bg-primary py-1.5 px-2 rounded-md mx-auto">
                                <svg class="w-4 fill-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.25C9.92893 8.25 8.25 9.92893 8.25 12C8.25 14.0711 9.92893 15.75 12 15.75C14.0711 15.75 15.75 14.0711 15.75 12C15.75 9.92893 14.0711 8.25 12 8.25ZM9.75 12C9.75 10.7574 10.7574 9.75 12 9.75C13.2426 9.75 14.25 10.7574 14.25 12C14.25 13.2426 13.2426 14.25 12 14.25C10.7574 14.25 9.75 13.2426 9.75 12Z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C7.48587 3.25 4.44529 5.9542 2.68057 8.24686L2.64874 8.2882C2.24964 8.80653 1.88206 9.28392 1.63269 9.8484C1.36564 10.4529 1.25 11.1117 1.25 12C1.25 12.8883 1.36564 13.5471 1.63269 14.1516C1.88206 14.7161 2.24964 15.1935 2.64875 15.7118L2.68057 15.7531C4.44529 18.0458 7.48587 20.75 12 20.75C16.5141 20.75 19.5547 18.0458 21.3194 15.7531L21.3512 15.7118C21.7504 15.1935 22.1179 14.7161 22.3673 14.1516C22.6344 13.5471 22.75 12.8883 22.75 12C22.75 11.1117 22.6344 10.4529 22.3673 9.8484C22.1179 9.28391 21.7504 8.80652 21.3512 8.28818L21.3194 8.24686C19.5547 5.9542 16.5141 3.25 12 3.25ZM3.86922 9.1618C5.49864 7.04492 8.15036 4.75 12 4.75C15.8496 4.75 18.5014 7.04492 20.1308 9.1618C20.5694 9.73159 20.8263 10.0721 20.9952 10.4545C21.1532 10.812 21.25 11.2489 21.25 12C21.25 12.7511 21.1532 13.188 20.9952 13.5455C20.8263 13.9279 20.5694 14.2684 20.1308 14.8382C18.5014 16.9551 15.8496 19.25 12 19.25C8.15036 19.25 5.49864 16.9551 3.86922 14.8382C3.43064 14.2684 3.17374 13.9279 3.00476 13.5455C2.84684 13.188 2.75 12.7511 2.75 12C2.75 11.2489 2.84684 10.812 3.00476 10.4545C3.17374 10.0721 3.43063 9.73159 3.86922 9.1618Z"/>
                                </svg>
                                <h1 class="text-white font-normal">Detail</h1>
                            </a>
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