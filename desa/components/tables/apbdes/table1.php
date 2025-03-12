<button @click="modal = !modal" class="flex items-center gap-2 bg-white py-2 px-4 rounded-md shadow-md shadow-black/20">
    <img src="/svgs/file1.svg" class="w-4 md:w-5">
    <h1 class="text-black text-xs md:text-sm font-normal">Buat Laporan</h1>
</button>

<div class="flex justify-center items-center pt-10">
    <div class="space-y-2">
        <img class="w-28 md:w-32 h-28 md:h-32 mx-auto" src="/svgs/search.svg">
        <div class="text-center">
            <h1 class="text-lg md:text-xl text-black font-medium">Data Tidak Ditemukan</h1>
            <h1 class="text-[10px] md:text-xs text-[#7A7A7A] font-normal">Buat laporan untuk memunculkan data</h1>
        </div>
    </div>
</div>

<section class="space-y-3">
    <section class="w-full lg:flex justify-between items-center gap-3 space-y-3 lg:space-y-0">
        <h1 class="text-xs md:text-sm text-black font-medium">History</h1>
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
                <th class="w-[20%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Nama</th>
                <th class="w-[12%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Tahun</th>
                <th class="w-[12%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Tanggal dikirim</th>
                <th class="w-[14%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Tanggal dievaluasi</th>
                <th class="w-[12%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Tanggal direvisi</th>
                <th class="w-[15%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Status</th>
                <th class="w-[10%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Aksi</th>
            </tr>
            <tr class="odd:bg-white even:bg-[#E8EDF2] text-xs text-black/70 capitalize overflow-visible">
                <td class="font-normal my-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">1</td>
                <td class="py-3.5 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                    <h1 class="line-clamp-1 font-normal">Undangan Sosialisasi</h1>
                </td>
                <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">2024</td>
                <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">04-09-2024</td>
                <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">04-09-2024</td>
                <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">04-09-2024</td>
                <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                    <div class="select-none flex items-center gap-2 w-fit bg-primary bg-opacity-30 py-1.5 px-2 rounded-lg mx-auto">
                        <img src="/svgs/alert/info.svg" class="w-5 h-5">
                        <h1 class="text-primary font-medium">Dikerjakan</h1>
                    </div>
                </td>
                <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                    <div class="flex items-center gap-2 md:gap-3">
                        <a href="#" class="flex items-center gap-2 w-fit bg-primary py-1.5 px-2 rounded-md mx-auto">
                            <svg class="w-4 fill-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.25C9.92893 8.25 8.25 9.92893 8.25 12C8.25 14.0711 9.92893 15.75 12 15.75C14.0711 15.75 15.75 14.0711 15.75 12C15.75 9.92893 14.0711 8.25 12 8.25ZM9.75 12C9.75 10.7574 10.7574 9.75 12 9.75C13.2426 9.75 14.25 10.7574 14.25 12C14.25 13.2426 13.2426 14.25 12 14.25C10.7574 14.25 9.75 13.2426 9.75 12Z"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C7.48587 3.25 4.44529 5.9542 2.68057 8.24686L2.64874 8.2882C2.24964 8.80653 1.88206 9.28392 1.63269 9.8484C1.36564 10.4529 1.25 11.1117 1.25 12C1.25 12.8883 1.36564 13.5471 1.63269 14.1516C1.88206 14.7161 2.24964 15.1935 2.64875 15.7118L2.68057 15.7531C4.44529 18.0458 7.48587 20.75 12 20.75C16.5141 20.75 19.5547 18.0458 21.3194 15.7531L21.3512 15.7118C21.7504 15.1935 22.1179 14.7161 22.3673 14.1516C22.6344 13.5471 22.75 12.8883 22.75 12C22.75 11.1117 22.6344 10.4529 22.3673 9.8484C22.1179 9.28391 21.7504 8.80652 21.3512 8.28818L21.3194 8.24686C19.5547 5.9542 16.5141 3.25 12 3.25ZM3.86922 9.1618C5.49864 7.04492 8.15036 4.75 12 4.75C15.8496 4.75 18.5014 7.04492 20.1308 9.1618C20.5694 9.73159 20.8263 10.0721 20.9952 10.4545C21.1532 10.812 21.25 11.2489 21.25 12C21.25 12.7511 21.1532 13.188 20.9952 13.5455C20.8263 13.9279 20.5694 14.2684 20.1308 14.8382C18.5014 16.9551 15.8496 19.25 12 19.25C8.15036 19.25 5.49864 16.9551 3.86922 14.8382C3.43064 14.2684 3.17374 13.9279 3.00476 13.5455C2.84684 13.188 2.75 12.7511 2.75 12C2.75 11.2489 2.84684 10.812 3.00476 10.4545C3.17374 10.0721 3.43063 9.73159 3.86922 9.1618Z"/>
                            </svg>
                            <h1 class="text-white font-normal">Detail</h1>
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="odd:bg-white even:bg-[#E8EDF2] text-xs text-black/70 capitalize overflow-visible">
                <td class="font-normal my-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">2</td>
                <td class="py-3.5 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                    <h1 class="line-clamp-1 font-normal">Undangan Sosialisasi</h1>
                </td>
                <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">2024</td>
                <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">04-09-2024</td>
                <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">04-09-2024</td>
                <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">04-09-2024</td>
                <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                    <div class="select-none flex items-center gap-2 w-fit bg-orange-500 bg-opacity-30 py-1.5 px-2 rounded-lg mx-auto">
                        <img src="/svgs/alert/warning.svg" class="w-5 h-5">
                        <h1 class="text-orange-500 font-medium">Dievaluasi</h1>
                    </div>
                </td>
                <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                    <div class="flex items-center gap-2 md:gap-3">
                        <a href="#" class="flex items-center gap-2 w-fit bg-primary py-1.5 px-2 rounded-md mx-auto">
                            <svg class="w-4 fill-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.25C9.92893 8.25 8.25 9.92893 8.25 12C8.25 14.0711 9.92893 15.75 12 15.75C14.0711 15.75 15.75 14.0711 15.75 12C15.75 9.92893 14.0711 8.25 12 8.25ZM9.75 12C9.75 10.7574 10.7574 9.75 12 9.75C13.2426 9.75 14.25 10.7574 14.25 12C14.25 13.2426 13.2426 14.25 12 14.25C10.7574 14.25 9.75 13.2426 9.75 12Z"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C7.48587 3.25 4.44529 5.9542 2.68057 8.24686L2.64874 8.2882C2.24964 8.80653 1.88206 9.28392 1.63269 9.8484C1.36564 10.4529 1.25 11.1117 1.25 12C1.25 12.8883 1.36564 13.5471 1.63269 14.1516C1.88206 14.7161 2.24964 15.1935 2.64875 15.7118L2.68057 15.7531C4.44529 18.0458 7.48587 20.75 12 20.75C16.5141 20.75 19.5547 18.0458 21.3194 15.7531L21.3512 15.7118C21.7504 15.1935 22.1179 14.7161 22.3673 14.1516C22.6344 13.5471 22.75 12.8883 22.75 12C22.75 11.1117 22.6344 10.4529 22.3673 9.8484C22.1179 9.28391 21.7504 8.80652 21.3512 8.28818L21.3194 8.24686C19.5547 5.9542 16.5141 3.25 12 3.25ZM3.86922 9.1618C5.49864 7.04492 8.15036 4.75 12 4.75C15.8496 4.75 18.5014 7.04492 20.1308 9.1618C20.5694 9.73159 20.8263 10.0721 20.9952 10.4545C21.1532 10.812 21.25 11.2489 21.25 12C21.25 12.7511 21.1532 13.188 20.9952 13.5455C20.8263 13.9279 20.5694 14.2684 20.1308 14.8382C18.5014 16.9551 15.8496 19.25 12 19.25C8.15036 19.25 5.49864 16.9551 3.86922 14.8382C3.43064 14.2684 3.17374 13.9279 3.00476 13.5455C2.84684 13.188 2.75 12.7511 2.75 12C2.75 11.2489 2.84684 10.812 3.00476 10.4545C3.17374 10.0721 3.43063 9.73159 3.86922 9.1618Z"/>
                            </svg>
                            <h1 class="text-white font-normal">Detail</h1>
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="odd:bg-white even:bg-[#E8EDF2] text-xs text-black/70 capitalize overflow-visible">
                <td class="font-normal my-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">3</td>
                <td class="py-3.5 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                    <h1 class="line-clamp-1 font-normal">Undangan Sosialisasi</h1>
                </td>
                <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">2024</td>
                <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">04-09-2024</td>
                <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">04-09-2024</td>
                <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">04-09-2024</td>
                <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                    <div class="select-none flex items-center gap-2 w-fit bg-red-500 bg-opacity-30 py-1.5 px-2 rounded-lg mx-auto">
                        <img src="/svgs/alert/danger.svg" class="w-5 h-5">
                        <h1 class="text-red-500 font-medium">Revisi</h1>
                    </div>
                </td>
                <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                    <div class="flex items-center gap-2 md:gap-3">
                        <a href="#" class="flex items-center gap-2 w-fit bg-primary py-1.5 px-2 rounded-md mx-auto">
                            <svg class="w-4 fill-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.25C9.92893 8.25 8.25 9.92893 8.25 12C8.25 14.0711 9.92893 15.75 12 15.75C14.0711 15.75 15.75 14.0711 15.75 12C15.75 9.92893 14.0711 8.25 12 8.25ZM9.75 12C9.75 10.7574 10.7574 9.75 12 9.75C13.2426 9.75 14.25 10.7574 14.25 12C14.25 13.2426 13.2426 14.25 12 14.25C10.7574 14.25 9.75 13.2426 9.75 12Z"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C7.48587 3.25 4.44529 5.9542 2.68057 8.24686L2.64874 8.2882C2.24964 8.80653 1.88206 9.28392 1.63269 9.8484C1.36564 10.4529 1.25 11.1117 1.25 12C1.25 12.8883 1.36564 13.5471 1.63269 14.1516C1.88206 14.7161 2.24964 15.1935 2.64875 15.7118L2.68057 15.7531C4.44529 18.0458 7.48587 20.75 12 20.75C16.5141 20.75 19.5547 18.0458 21.3194 15.7531L21.3512 15.7118C21.7504 15.1935 22.1179 14.7161 22.3673 14.1516C22.6344 13.5471 22.75 12.8883 22.75 12C22.75 11.1117 22.6344 10.4529 22.3673 9.8484C22.1179 9.28391 21.7504 8.80652 21.3512 8.28818L21.3194 8.24686C19.5547 5.9542 16.5141 3.25 12 3.25ZM3.86922 9.1618C5.49864 7.04492 8.15036 4.75 12 4.75C15.8496 4.75 18.5014 7.04492 20.1308 9.1618C20.5694 9.73159 20.8263 10.0721 20.9952 10.4545C21.1532 10.812 21.25 11.2489 21.25 12C21.25 12.7511 21.1532 13.188 20.9952 13.5455C20.8263 13.9279 20.5694 14.2684 20.1308 14.8382C18.5014 16.9551 15.8496 19.25 12 19.25C8.15036 19.25 5.49864 16.9551 3.86922 14.8382C3.43064 14.2684 3.17374 13.9279 3.00476 13.5455C2.84684 13.188 2.75 12.7511 2.75 12C2.75 11.2489 2.84684 10.812 3.00476 10.4545C3.17374 10.0721 3.43063 9.73159 3.86922 9.1618Z"/>
                            </svg>
                            <h1 class="text-white font-normal">Detail</h1>
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="odd:bg-white even:bg-[#E8EDF2] text-xs text-black/70 capitalize overflow-visible">
                <td class="font-normal my-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">4</td>
                <td class="py-3.5 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                    <h1 class="line-clamp-1 font-normal">Undangan Sosialisasi</h1>
                </td>
                <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">2024</td>
                <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">04-09-2024</td>
                <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">04-09-2024</td>
                <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">04-09-2024</td>
                <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                    <div class="select-none flex items-center gap-2 w-fit bg-green-500 bg-opacity-30 py-1.5 px-2 rounded-lg mx-auto">
                        <img src="/svgs/alert/check.svg" class="w-5 h-5">
                        <h1 class="text-green-500 font-medium">Final</h1>
                    </div>
                </td>
                <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                    <div class="flex items-center gap-2 md:gap-3">
                        <a href="#" class="flex items-center gap-2 w-fit bg-primary py-1.5 px-2 rounded-md mx-auto">
                            <svg class="w-4 fill-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.25C9.92893 8.25 8.25 9.92893 8.25 12C8.25 14.0711 9.92893 15.75 12 15.75C14.0711 15.75 15.75 14.0711 15.75 12C15.75 9.92893 14.0711 8.25 12 8.25ZM9.75 12C9.75 10.7574 10.7574 9.75 12 9.75C13.2426 9.75 14.25 10.7574 14.25 12C14.25 13.2426 13.2426 14.25 12 14.25C10.7574 14.25 9.75 13.2426 9.75 12Z"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C7.48587 3.25 4.44529 5.9542 2.68057 8.24686L2.64874 8.2882C2.24964 8.80653 1.88206 9.28392 1.63269 9.8484C1.36564 10.4529 1.25 11.1117 1.25 12C1.25 12.8883 1.36564 13.5471 1.63269 14.1516C1.88206 14.7161 2.24964 15.1935 2.64875 15.7118L2.68057 15.7531C4.44529 18.0458 7.48587 20.75 12 20.75C16.5141 20.75 19.5547 18.0458 21.3194 15.7531L21.3512 15.7118C21.7504 15.1935 22.1179 14.7161 22.3673 14.1516C22.6344 13.5471 22.75 12.8883 22.75 12C22.75 11.1117 22.6344 10.4529 22.3673 9.8484C22.1179 9.28391 21.7504 8.80652 21.3512 8.28818L21.3194 8.24686C19.5547 5.9542 16.5141 3.25 12 3.25ZM3.86922 9.1618C5.49864 7.04492 8.15036 4.75 12 4.75C15.8496 4.75 18.5014 7.04492 20.1308 9.1618C20.5694 9.73159 20.8263 10.0721 20.9952 10.4545C21.1532 10.812 21.25 11.2489 21.25 12C21.25 12.7511 21.1532 13.188 20.9952 13.5455C20.8263 13.9279 20.5694 14.2684 20.1308 14.8382C18.5014 16.9551 15.8496 19.25 12 19.25C8.15036 19.25 5.49864 16.9551 3.86922 14.8382C3.43064 14.2684 3.17374 13.9279 3.00476 13.5455C2.84684 13.188 2.75 12.7511 2.75 12C2.75 11.2489 2.84684 10.812 3.00476 10.4545C3.17374 10.0721 3.43063 9.73159 3.86922 9.1618Z"/>
                            </svg>
                            <h1 class="text-white font-normal">Detail</h1>
                        </a>
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