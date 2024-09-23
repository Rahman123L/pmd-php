<div x-show="window.innerWidth < 640 && isOpen" x-transition.opacity :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden fixed inset-0 bg-zinc-800 bg-opacity-80 z-40"></div>
<div x-data="{ isOpenn : true }">
    <?php include_once("../pmd/layout/sidebar.php"); ?>

    <main :class="isOpenn ? 'md:ml-60' : 'md:ml-20 ' + 'transition-all duration-500'" class="relative md:ml-60 pt-16 p-5 space-y-5">
        <div class="flex justify-between items-center">
            <h1 class="text-base md:text-lg lg:text-xl text-black font-medium">Notifikasi</h1>
            <h1 class="text-xs md:text-sm text-black font-medium"><span class="text-[#615EFC] font-medium">Home</span> / Notifikasi</h1>
        </div>

        <div class="grid w-full divide-y-[1.5px] bg-white rounded md:rounded-md shadow-md shadow-black/20">
            <div class="w-full flex justify-between items-center gap-2 md:gap-3 py-2.5 px-6">
                <div class="flex items-center sm:gap-1 md:gap-4">
                    <div class="flex items-center gap-1 md:gap-2">
                        <input type="checkbox" name="" id="" class="appearance-none checked:bg-gray-500 rounded bg-transparent border-gray-500 checked:border-gray-500 ring-gray-500 checked:ring-gray-500">
                        <div x-data="{ fitur : false }" class="group relative">
                            <button @click="fitur = !fitur" :class="fitur ? 'bg-[#E9E9E9] p-1.5 rounded-full cursor-pointer' : ''" class="relative hover:bg-[#E9E9E9] p-1.5 rounded-full cursor-pointer">
                                <svg class="w-2" viewBox="0 0 7 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.29491 4.23242L0.294922 0.232422H6.29492L3.29491 4.23242Z" fill="#778294"/>
                                </svg>
                            </button>
                            <div class="absolute hidden group-hover:block bg-[#353535] py-1.5 px-4 rounded md:rounded-md">
                                <h1 class="text-[10px] md:text-xs text-white font-normal">Pilih</h1>
                            </div>
                            <div x-show="fitur" @click.outside="fitur = false" x-transition.duration.300ms.opacity.50 :class="{ 'block': fitur, 'hidden': !fitur }" class="hidden absolute w-max md:w-36 bg-white rounded shadow-md shadow-black/20">
                                <div class="bg-transparent py-2 px-4 hover:bg-[#EAEAEA] cursor-pointer">
                                    <h1 class="text-[10px] md:text-xs text-[#778294] font-normal">Semua</h1>
                                </div>
                                <div class="bg-transparent py-2 px-4 hover:bg-[#EAEAEA] cursor-pointer">
                                    <h1 class="text-[10px] md:text-xs text-[#778294] font-normal">Sudah dibaca</h1>
                                </div>
                                <div class="bg-transparent py-2 px-4 hover:bg-[#EAEAEA] cursor-pointer">
                                    <h1 class="text-[10px] md:text-xs text-[#778294] font-normal">Belum dibaca</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="group relative">
                        <div class="hover:bg-[#E9E9E9] py-1.5 px-2 rounded-full cursor-pointer">
                            <svg class="w-3 md:w-4" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.1333 1.06264C17.1318 0.717467 16.8507 0.438896 16.5055 0.440436C16.1604 0.441976 15.8818 0.723044 15.8833 1.06822L15.8907 2.72298C15.8936 3.36339 15.8947 3.80419 15.8627 4.1405C15.4985 3.7479 15.0994 3.38802 14.6705 3.06575C13.1731 1.9407 11.3107 1.27376 9.29427 1.27376C4.34672 1.27376 0.335938 5.28454 0.335938 10.2321C0.335938 15.1796 4.34672 19.1904 9.29427 19.1904C14.2418 19.1904 18.2526 15.1796 18.2526 10.2321C18.2526 9.88692 17.9728 9.6071 17.6276 9.6071C17.2824 9.6071 17.0026 9.88692 17.0026 10.2321C17.0026 14.4893 13.5515 17.9404 9.29427 17.9404C5.03708 17.9404 1.58594 14.4893 1.58594 10.2321C1.58594 5.9749 5.03708 2.52376 9.29427 2.52376C11.0306 2.52376 12.6313 3.09713 13.9197 4.06511C14.3324 4.37521 14.713 4.72578 15.0556 5.11091C15.0148 5.11736 14.9704 5.12325 14.9222 5.12851C14.5794 5.16595 14.1263 5.16487 13.4518 5.16186L11.7971 5.15448C11.4519 5.15294 11.1708 5.43151 11.1693 5.77669C11.1677 6.12186 11.4463 6.40293 11.7915 6.40447L13.4824 6.41201C14.1114 6.41484 14.6361 6.41719 15.0579 6.37113C15.5003 6.32281 15.9081 6.21482 16.2624 5.94067C16.3386 5.8817 16.4109 5.81801 16.4789 5.75002C16.5469 5.68202 16.6105 5.60971 16.6695 5.5335C16.9437 5.17927 17.0517 4.77149 17.1 4.32905C17.146 3.90723 17.1437 3.38259 17.1409 2.75354L17.1333 1.06264Z" fill="#778294"/>
                            </svg>
                        </div>
                        <div class="absolute hidden group-hover:block bg-[#353535] py-1.5 px-4 rounded md:rounded-md">
                            <h1 class="text-[10px] md:text-xs text-white font-normal">Refresh</h1>
                        </div>
                    </div>
                    <div x-data="{ fitur : false }" class="group relative">
                        <button @click="fitur = !fitur" :class="fitur ? 'bg-[#E9E9E9] py-1.5 px-3.5 rounded-full cursor-pointer' : ''" class="relative hover:bg-[#E9E9E9] py-1.5 px-3.5 rounded-full cursor-pointer">
                            <svg class="w-[3px] md:w-[3.5px]" viewBox="0 0 4 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.96224 9.23275C3.96224 10.1532 3.21605 10.8994 2.29557 10.8994C1.3751 10.8994 0.628907 10.1532 0.628907 9.23275C0.628907 8.31227 1.3751 7.56608 2.29557 7.56608C3.21605 7.56608 3.96224 8.31227 3.96224 9.23275Z" fill="#778294"/>
                                <path d="M3.96224 2.56608C3.96224 3.48656 3.21605 4.23275 2.29557 4.23275C1.3751 4.23275 0.628907 3.48656 0.628907 2.56608C0.628907 1.64561 1.3751 0.899414 2.29557 0.899414C3.21605 0.899414 3.96224 1.64561 3.96224 2.56608Z" fill="#778294"/>
                                <path d="M3.96224 15.8994C3.96224 16.8199 3.21605 17.5661 2.29557 17.5661C1.3751 17.5661 0.628906 16.8199 0.628906 15.8994C0.628906 14.9789 1.3751 14.2327 2.29557 14.2327C3.21605 14.2327 3.96224 14.9789 3.96224 15.8994Z" fill="#778294"/>
                            </svg>
                        </button>
                        <div class="absolute hidden group-hover:block bg-[#353535] py-1.5 px-4 rounded md:rounded-md">
                            <h1 class="text-[10px] md:text-xs text-white font-normal">Lainnya</h1>
                        </div>
                        <div x-show="fitur" @click.outside="fitur = false" x-transition.duration.300ms.opacity.50 :class="{ 'block': fitur, 'hidden': !fitur }" class="hidden absolute w-max md:w-52 bg-white rounded shadow-md shadow-black/20">
                            <div class="bg-transparent py-2 px-4 hover:bg-[#EAEAEA] cursor-pointer">
                                <h1 class="text-[10px] md:text-xs text-[#778294] font-normal">Semua</h1>
                            </div>
                            <div class="bg-transparent py-2 px-4 hover:bg-[#EAEAEA] cursor-pointer">
                                <h1 class="text-[10px] md:text-xs text-[#778294] font-normal">Sudah dibaca</h1>
                            </div>
                            <div class="bg-transparent py-2 px-4 hover:bg-[#EAEAEA] cursor-pointer">
                                <h1 class="text-[10px] md:text-xs text-[#778294] font-normal">Tandai semua sudah dibaca</h1>
                            </div>
                            <div class="bg-transparent py-2 px-4 hover:bg-[#EAEAEA] cursor-pointer">
                                <h1 class="text-[10px] md:text-xs text-[#778294] font-normal">Belum dibaca</h1>
                            </div>
                        </div>
                    </div>
                    <div x-data="{ modal : false }" class="group relative">
                        <button @click="modal = !modal" :class="modal ? 'bg-[#E9E9E9] p-1.5 rounded-full cursor-pointer' : ''" class="relative hover:bg-[#E9E9E9] p-1.5 rounded-full cursor-pointer">
                            <svg class="w-4 md:w-5" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.79492 5.34292C2.38071 5.34292 2.04492 5.6787 2.04492 6.09292C2.04492 6.50713 2.38071 6.84292 2.79492 6.84292V5.34292ZM17.7949 6.84292C18.2091 6.84292 18.5449 6.50713 18.5449 6.09292C18.5449 5.6787 18.2091 5.34292 17.7949 5.34292V6.84292ZM4.46159 6.09292V5.34292H3.71159V6.09292H4.46159ZM16.1282 6.09292H16.8782V5.34292H16.1282V6.09292ZM15.5798 14.2577L16.3004 14.4657L15.5798 14.2577ZM11.7316 17.6119L11.8565 18.3514L11.7316 17.6119ZM8.85826 17.6119L8.98323 16.8724L8.98323 16.8724L8.85826 17.6119ZM8.72681 17.5897L8.60184 18.3292L8.60185 18.3292L8.72681 17.5897ZM5.01005 14.2576L4.28947 14.4657L5.01005 14.2576ZM11.863 17.5897L11.7381 16.8501L11.863 17.5897ZM6.83037 4.80691L7.51117 5.12159L6.83037 4.80691ZM7.64327 3.71669L7.14274 3.15814L7.14274 3.15814L7.64327 3.71669ZM8.85986 2.98822L9.12085 3.69135L8.85986 2.98822ZM11.73 2.98822L11.991 2.2851V2.2851L11.73 2.98822ZM13.7595 4.80691L14.4403 4.49223L14.4403 4.49223L13.7595 4.80691ZM2.79492 6.84292H17.7949V5.34292H2.79492V6.84292ZM11.7381 16.8501L11.6066 16.8724L11.8565 18.3514L11.988 18.3292L11.7381 16.8501ZM8.98323 16.8724L8.85178 16.8501L8.60185 18.3292L8.7333 18.3514L8.98323 16.8724ZM15.3782 6.09292V10.3789H16.8782V6.09292H15.3782ZM5.21159 10.379V6.09292H3.71159V10.379H5.21159ZM15.3782 10.3789C15.3782 11.6212 15.2035 12.8571 14.8592 14.0497L16.3004 14.4657C16.6837 13.1378 16.8782 11.7618 16.8782 10.3789H15.3782ZM11.6066 16.8724C10.7382 17.0191 9.85163 17.0191 8.98323 16.8724L8.73329 18.3514C9.76715 18.5261 10.8227 18.5261 11.8565 18.3514L11.6066 16.8724ZM8.85178 16.8501C7.36791 16.5994 6.15313 15.5133 5.73062 14.0496L4.28947 14.4657C4.87034 16.4779 6.54434 17.9815 8.60184 18.3292L8.85178 16.8501ZM5.73062 14.0496C5.38635 12.857 5.21159 11.6212 5.21159 10.379H3.71159C3.71159 11.7618 3.90614 13.1378 4.28947 14.4657L5.73062 14.0496ZM11.988 18.3292C14.0455 17.9815 15.7195 16.4779 16.3004 14.4657L14.8592 14.0497C14.4367 15.5133 13.2219 16.5994 11.7381 16.8501L11.988 18.3292ZM7.29492 6.09292C7.29492 5.76226 7.36747 5.43247 7.51117 5.12159L6.14958 4.49223C5.91637 4.99678 5.79492 5.54096 5.79492 6.09292H7.29492ZM7.51117 5.12159C7.65501 4.8104 7.86846 4.52197 8.1438 4.27523L7.14274 3.15814C6.72164 3.53551 6.38265 3.988 6.14958 4.49223L7.51117 5.12159ZM8.1438 4.27523C8.4193 4.02835 8.75069 3.82875 9.12085 3.69135L8.59887 2.2851C8.05909 2.48546 7.56368 2.78093 7.14274 3.15814L8.1438 4.27523ZM9.12085 3.69135C9.49105 3.55393 9.89022 3.48242 10.2949 3.48242V1.98242C9.71471 1.98242 9.13861 2.08475 8.59887 2.2851L9.12085 3.69135ZM10.2949 3.48242C10.6996 3.48242 11.0988 3.55393 11.469 3.69135L11.991 2.2851C11.4512 2.08475 10.8751 1.98242 10.2949 1.98242V3.48242ZM11.469 3.69135C11.8392 3.82875 12.1705 4.02835 12.446 4.27523L13.4471 3.15815C13.0262 2.78093 12.5308 2.48546 11.991 2.2851L11.469 3.69135ZM12.446 4.27523C12.7214 4.52197 12.9348 4.8104 13.0787 5.12159L14.4403 4.49223C14.2072 3.988 13.8682 3.53551 13.4471 3.15815L12.446 4.27523ZM13.0787 5.12159C13.2224 5.43247 13.2949 5.76226 13.2949 6.09292H14.7949C14.7949 5.54097 14.6735 4.99678 14.4403 4.49223L13.0787 5.12159ZM4.46159 6.84292H16.1282V5.34292H4.46159V6.84292Z" fill="#363853"/>
                                <path d="M8.62891 10.2324V13.5658M11.9622 10.2324V13.5658" stroke="#363853" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                        </button>
                        <div class="absolute hidden group-hover:block bg-[#353535] py-1.5 px-4 rounded md:rounded-md">
                            <h1 class="text-[10px] md:text-xs text-white font-normal">Hapus</h1>
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
                                    <h1 class="text-center text-sm md:text-base text-black font-normal">Apakah anda yakin ingin menghapus notifikasi ?</h1>
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
                <div class="flex items-center gap-4 md:gap-6">
                    <div class="flex items-center gap-1 md:gap-2">
                        <svg class="w-1 cursor-pointer" viewBox="0 0 5 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.52097 9.84332C3.76614 10.0863 4.16186 10.0845 4.40485 9.83938C4.64783 9.59422 4.64607 9.19849 4.4009 8.9555L2.93176 7.49942C2.33552 6.90847 1.92652 6.50177 1.64977 6.15716C1.38093 5.82241 1.28871 5.6074 1.26416 5.41483C1.24875 5.29392 1.24875 5.17157 1.26416 5.05066C1.28871 4.85809 1.38093 4.64308 1.64977 4.30834C1.92652 3.96373 2.33552 3.55703 2.93176 2.96608L4.4009 1.50999C4.64607 1.267 4.64783 0.871279 4.40485 0.626115C4.16186 0.38095 3.76614 0.379186 3.52097 0.622171L2.02536 2.10449C1.46205 2.66278 1.00166 3.11907 0.675152 3.52563C0.335628 3.9484 0.0898509 4.37752 0.0241956 4.89261C-0.00459151 5.11847 -0.00459153 5.34703 0.0241956 5.57288C0.0898508 6.08798 0.335628 6.51709 0.675152 6.93986C1.00166 7.34643 1.46205 7.80271 2.02536 8.361L3.52097 9.84332Z" fill="black"/>
                        </svg>
                        <div class="px-1.5 border-b border-white cursor-pointer">
                            <h1 class="text-[10px] md:text-xs text-black font-normal">1</h1>
                        </div>
                        <div class="px-1.5 border-b border-[#615EFC] cursor-pointer">
                            <h1 class="text-[10px] md:text-xs text-[#615EFC] font-normal">2</h1>
                        </div>
                        <div class="px-1.5 border-b border-white cursor-pointer">
                            <h1 class="text-[10px] md:text-xs text-black font-normal">3</h1>
                        </div>
                        <svg class="w-1 cursor-pointer" viewBox="0 0 5 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.06887 0.621521C0.823708 0.378534 0.427984 0.3803 0.184997 0.625464C-0.0579891 0.870628 -0.0562235 1.26635 0.188941 1.50934L1.65808 2.96543C2.25433 3.55638 2.66333 3.96308 2.94008 4.30768C3.20891 4.64243 3.30114 4.85744 3.32568 5.05001C3.34109 5.17092 3.34109 5.29327 3.32568 5.41418C3.30114 5.60675 3.20891 5.82176 2.94008 6.15651C2.66333 6.50112 2.25433 6.90782 1.65808 7.49876L0.188941 8.95485C-0.0562235 9.19784 -0.0579891 9.59356 0.184997 9.83873C0.427984 10.0839 0.823708 10.0857 1.06887 9.84267L2.56448 8.36035C3.12779 7.80206 3.58819 7.34577 3.91469 6.93921C4.25422 6.51644 4.49999 6.08733 4.56565 5.57223C4.59444 5.34638 4.59444 5.11782 4.56565 4.89196C4.49999 4.37687 4.25422 3.94775 3.91469 3.52498C3.58819 3.11842 3.12779 2.66213 2.56448 2.10384L1.06887 0.621521Z" fill="black"/>
                        </svg>
                    </div>
                    <h1 class="hidden md:block text-[10px] md:text-xs text-black font-normal">1800 Notifikasi</h1>
                </div>
            </div>
            <a href="" class="w-full bg-[#F4F3FF] lg:flex lg:justify-between items-center gap-2 md:gap-3 py-4 px-6 hover:border-[1px] hover:border-[#0000006E] hover:shadow-md hover:shadow-black/20">
                <div class="space-y-2">
                    <div class="flex items-center gap-2 md:gap-3">
                        <input type="checkbox" name="" id="" class="appearance-none checked:bg-gray-500 rounded bg-transparent border-gray-500 checked:border-gray-500 ring-gray-500 checked:ring-gray-500">
                        <h1 class="text-[10px] md:text-xs text-[#778294] font-semibold">Tandai</h1>
                    </div>
                    <div class="flex items-center gap-2 md:gap-3">
                        <svg class="w-4" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.56641 0C6.98416 0 5.43744 0.469192 4.12185 1.34824C2.80625 2.22729 1.78087 3.47672 1.17537 4.93853C0.569873 6.40034 0.411446 8.00887 0.720128 9.56072C1.02881 11.1126 1.79074 12.538 2.90955 13.6569C4.02837 14.7757 5.45384 15.5376 7.00569 15.8463C8.55753 16.155 10.1661 15.9965 11.6279 15.391C13.0897 14.7855 14.3391 13.7602 15.2182 12.4446C16.0972 11.129 16.5664 9.58225 16.5664 8C16.5623 5.87952 15.7182 3.84705 14.2188 2.34764C12.7194 0.848226 10.6869 0.00406613 8.56641 0ZM7.95102 4.30769C7.95102 4.14448 8.01586 3.98796 8.13127 3.87255C8.24667 3.75714 8.4032 3.69231 8.56641 3.69231C8.72962 3.69231 8.88614 3.75714 9.00155 3.87255C9.11696 3.98796 9.18179 4.14448 9.18179 4.30769V8.61538C9.18179 8.77859 9.11696 8.93512 9.00155 9.05053C8.88614 9.16593 8.72962 9.23077 8.56641 9.23077C8.4032 9.23077 8.24667 9.16593 8.13127 9.05053C8.01586 8.93512 7.95102 8.77859 7.95102 8.61538V4.30769ZM8.56641 12.3077C8.38384 12.3077 8.20537 12.2536 8.05357 12.1521C7.90177 12.0507 7.78346 11.9065 7.7136 11.7379C7.64373 11.5692 7.62545 11.3836 7.66107 11.2045C7.69668 11.0255 7.7846 10.861 7.91369 10.7319C8.04279 10.6028 8.20726 10.5149 8.38632 10.4793C8.56538 10.4437 8.75098 10.4619 8.91965 10.5318C9.08832 10.6017 9.23249 10.72 9.33392 10.8718C9.43535 11.0236 9.48948 11.202 9.48948 11.3846C9.48948 11.6294 9.39223 11.8642 9.21912 12.0373C9.04601 12.2104 8.81122 12.3077 8.56641 12.3077Z" fill="#C27605"/>
                        </svg>
                        <h1 class="text-[10px] md:text-xs text-black font-semibold">Laporan sudah dilihat</h1>
                    </div>
                    <h1 class="ml-6 md:ml-7 text-[10px] md:text-xs text-black font-medium">file laporan anda sedang dicek oleh admin PMD</h1>
                </div>
                <h1 class="ml-6 md:ml-7 text-[10px] md:text-xs text-black font-normal">Baru saja</h1>
            </a>
            <a href="" class="w-full bg-[#F4F3FF] lg:flex lg:justify-between items-center gap-2 md:gap-3 py-4 px-6 hover:border-[1px] hover:border-[#0000006E] hover:shadow-md hover:shadow-black/20">
                <div class="space-y-2">
                    <div class="flex items-center gap-2 md:gap-3">
                        <input type="checkbox" name="" id="" class="appearance-none checked:bg-gray-500 rounded bg-transparent border-gray-500 checked:border-gray-500 ring-gray-500 checked:ring-gray-500">
                        <h1 class="text-[10px] md:text-xs text-[#778294] font-semibold">Tandai</h1>
                    </div>
                    <div class="flex items-center gap-2 md:gap-3">
                        <svg class="w-4" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.56641 0C6.98416 0 5.43744 0.469192 4.12185 1.34824C2.80625 2.22729 1.78087 3.47672 1.17537 4.93853C0.569873 6.40034 0.411446 8.00887 0.720128 9.56072C1.02881 11.1126 1.79074 12.538 2.90955 13.6569C4.02837 14.7757 5.45384 15.5376 7.00569 15.8463C8.55753 16.155 10.1661 15.9965 11.6279 15.391C13.0897 14.7855 14.3391 13.7602 15.2182 12.4446C16.0972 11.129 16.5664 9.58225 16.5664 8C16.5623 5.87952 15.7182 3.84705 14.2188 2.34764C12.7194 0.848226 10.6869 0.00406613 8.56641 0ZM8.41256 3.69231C8.59513 3.69231 8.7736 3.74644 8.9254 3.84787C9.07719 3.9493 9.19551 4.09347 9.26537 4.26214C9.33524 4.43081 9.35352 4.61641 9.3179 4.79547C9.28228 4.97453 9.19437 5.139 9.06528 5.2681C8.93618 5.39719 8.7717 5.48511 8.59264 5.52072C8.41359 5.55634 8.22799 5.53806 8.05932 5.46819C7.89065 5.39833 7.74648 5.28002 7.64505 5.12822C7.54362 4.97642 7.48948 4.79795 7.48948 4.61538C7.48948 4.37057 7.58674 4.13578 7.75985 3.96267C7.93296 3.78956 8.16775 3.69231 8.41256 3.69231ZM9.18179 12.3077H8.56641C8.4032 12.3077 8.24667 12.2429 8.13127 12.1274C8.01586 12.012 7.95102 11.8555 7.95102 11.6923V8C7.78781 8 7.63129 7.93516 7.51588 7.81976C7.40047 7.70435 7.33564 7.54782 7.33564 7.38461C7.33564 7.2214 7.40047 7.06488 7.51588 6.94947C7.63129 6.83406 7.78781 6.76923 7.95102 6.76923H8.56641C8.72962 6.76923 8.88614 6.83406 9.00155 6.94947C9.11696 7.06488 9.18179 7.2214 9.18179 7.38461V11.0769C9.345 11.0769 9.50153 11.1418 9.61693 11.2572C9.73234 11.3726 9.79718 11.5291 9.79718 11.6923C9.79718 11.8555 9.73234 12.012 9.61693 12.1274C9.50153 12.2429 9.345 12.3077 9.18179 12.3077Z" fill="#01648E"/>
                        </svg>
                        <h1 class="text-[10px] md:text-xs text-black font-semibold">Laporan belum dilihat</h1>
                    </div>
                    <h1 class="ml-6 md:ml-7 text-[10px] md:text-xs text-black font-medium">file laporan anda sedang dalam antrian</h1>
                </div>
                <h1 class="ml-6 md:ml-7 text-[10px] md:text-xs text-black font-normal">Baru saja</h1>
            </a>
            <a href="" class="w-full bg-transparent lg:flex lg:justify-between items-center gap-2 md:gap-3 py-4 px-6 hover:border-[1px] hover:border-[#0000006E] hover:shadow-md hover:shadow-black/20">
                <div class="space-y-2">
                    <div class="flex items-center gap-2 md:gap-3">
                        <input type="checkbox" name="" id="" class="appearance-none checked:bg-gray-500 rounded bg-transparent border-gray-500 checked:border-gray-500 ring-gray-500 checked:ring-gray-500">
                        <h1 class="text-[10px] md:text-xs text-[#778294] font-semibold">Tandai</h1>
                    </div>
                    <div class="flex items-center gap-2 md:gap-3">
                        <svg class="w-4" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.56641 0C6.98416 0 5.43744 0.469192 4.12185 1.34824C2.80625 2.22729 1.78087 3.47672 1.17537 4.93853C0.569873 6.40034 0.411446 8.00887 0.720128 9.56072C1.02881 11.1126 1.79074 12.538 2.90955 13.6569C4.02837 14.7757 5.45384 15.5376 7.00569 15.8463C8.55753 16.155 10.1661 15.9965 11.6279 15.391C13.0897 14.7855 14.3391 13.7602 15.2182 12.4446C16.0972 11.129 16.5664 9.58225 16.5664 8C16.5623 5.87952 15.7182 3.84705 14.2188 2.34764C12.7194 0.848226 10.6869 0.00406613 8.56641 0ZM12.3741 6.6L7.86641 10.9077C7.74987 11.0173 7.59563 11.0779 7.43564 11.0769C7.35744 11.078 7.27979 11.0637 7.20718 11.0346C7.13456 11.0056 7.06842 10.9624 7.01256 10.9077L4.75872 8.75384C4.6962 8.6993 4.64536 8.63269 4.60925 8.558C4.57314 8.48331 4.5525 8.40209 4.54858 8.31922C4.54466 8.23635 4.55754 8.15354 4.58644 8.07578C4.61533 7.99801 4.65966 7.92689 4.71674 7.86669C4.77383 7.8065 4.8425 7.75846 4.91862 7.72548C4.99474 7.69249 5.07675 7.67524 5.15971 7.67476C5.24267 7.67428 5.32487 7.69058 5.40137 7.72267C5.47787 7.75477 5.54709 7.802 5.60487 7.86154L7.43564 9.60769L11.5279 5.70769C11.6476 5.6033 11.803 5.5492 11.9616 5.5567C12.1202 5.56421 12.2698 5.63273 12.379 5.74796C12.4883 5.86318 12.5488 6.01618 12.5479 6.17497C12.547 6.33376 12.4847 6.48605 12.3741 6.6Z" fill="#289900"/>
                        </svg>
                        <h1 class="text-[10px] md:text-xs text-black font-semibold">Laporan sudah dilihat</h1>
                    </div>
                    <h1 class="ml-6 md:ml-7 text-[10px] md:text-xs text-black font-medium">file laporan anda sudah dikonfirmasi oleh admin PMD</h1>
                </div>
                <h1 class="ml-6 md:ml-7 text-[10px] md:text-xs text-black font-normal">14 menit yang lalu</h1>
            </a>
            <a href="" class="w-full bg-transparent lg:flex lg:justify-between items-center gap-2 md:gap-3 py-4 px-6 hover:border-[1px] hover:border-[#0000006E] hover:shadow-md hover:shadow-black/20">
                <div class="space-y-2">
                    <div class="flex items-center gap-2 md:gap-3">
                        <input type="checkbox" name="" id="" class="appearance-none checked:bg-gray-500 rounded bg-transparent border-gray-500 checked:border-gray-500 ring-gray-500 checked:ring-gray-500">
                        <h1 class="text-[10px] md:text-xs text-[#778294] font-semibold">Tandai</h1>
                    </div>
                    <div class="flex items-center gap-2 md:gap-3">
                        <svg class="w-4" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.56641 0C6.98416 0 5.43744 0.469192 4.12185 1.34824C2.80625 2.22729 1.78087 3.47672 1.17537 4.93853C0.569873 6.40034 0.411446 8.00887 0.720128 9.56072C1.02881 11.1126 1.79074 12.538 2.90955 13.6569C4.02837 14.7757 5.45384 15.5376 7.00569 15.8463C8.55753 16.155 10.1661 15.9965 11.6279 15.391C13.0897 14.7855 14.3391 13.7602 15.2182 12.4446C16.0972 11.129 16.5664 9.58225 16.5664 8C16.5623 5.87952 15.7182 3.84705 14.2188 2.34764C12.7194 0.848226 10.6869 0.00406613 8.56641 0ZM11.4664 10.0231C11.582 10.1397 11.6468 10.2973 11.6468 10.4615C11.6468 10.6257 11.582 10.7833 11.4664 10.9C11.3488 11.0137 11.1916 11.0773 11.0279 11.0773C10.8643 11.0773 10.7071 11.0137 10.5895 10.9L8.56641 8.86923L6.54333 10.9C6.42571 11.0137 6.26849 11.0773 6.10487 11.0773C5.94125 11.0773 5.78403 11.0137 5.66641 10.9C5.55085 10.7833 5.48602 10.6257 5.48602 10.4615C5.48602 10.2973 5.55085 10.1397 5.66641 10.0231L7.69718 8L5.66641 5.97692C5.56828 5.85735 5.51813 5.70556 5.52572 5.55107C5.5333 5.39657 5.59809 5.25043 5.70746 5.14105C5.81684 5.03168 5.96298 4.96689 6.11748 4.95931C6.27197 4.95172 6.42376 5.00187 6.54333 5.1L8.56641 7.13077L10.5895 5.1C10.7091 5.00187 10.8608 4.95172 11.0153 4.95931C11.1698 4.96689 11.316 5.03168 11.4254 5.14105C11.5347 5.25043 11.5995 5.39657 11.6071 5.55107C11.6147 5.70556 11.5645 5.85735 11.4664 5.97692L9.43564 8L11.4664 10.0231Z" fill="#F30C0C"/>
                        </svg>
                        <h1 class="text-[10px] md:text-xs text-black font-semibold">Laporan sudah dilihat</h1>
                    </div>
                    <h1 class="ml-6 md:ml-7 text-[10px] md:text-xs text-black font-medium">file laporan anda harus direvisi</h1>
                </div>
                <h1 class="ml-6 md:ml-7 text-[10px] md:text-xs text-black font-normal">14 menit yang lalu</h1>
            </a>
        </div>
        <div class="flex justify-center items-center pt-10">
            <div class="space-y-3">
                <img class="w-32 h-32 object-contain mx-auto" src="/svgs/search3.svg">
                <h1 class="text-sm md:text-base text-[#778294] font-medium">Pesan Keluar Kosong</h1>
            </div>
        </div>
    </main>
</div>