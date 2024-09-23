<nav class="fixed top-0 z-40 w-full bg-[#ECE5DD] py-4 px-5 md:px-8">
    <div class="flex justify-between items-center">
        <button @click="if (window.innerWidth < 786) isOpen = !isOpen" class="visible md:invisible">
            <svg class="w-[22px] md:w-6 fill-black" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.75 7C20.75 7.41421 20.4142 7.75 20 7.75L4 7.75C3.58579 7.75 3.25 7.41421 3.25 7C3.25 6.58579 3.58579 6.25 4 6.25L20 6.25C20.4142 6.25 20.75 6.58579 20.75 7Z"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.75 12C20.75 12.4142 20.4142 12.75 20 12.75L4 12.75C3.58579 12.75 3.25 12.4142 3.25 12C3.25 11.5858 3.58579 11.25 4 11.25L20 11.25C20.4142 11.25 20.75 11.5858 20.75 12Z"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.75 17C20.75 17.4142 20.4142 17.75 20 17.75L4 17.75C3.58579 17.75 3.25 17.4142 3.25 17C3.25 16.5858 3.58579 16.25 4 16.25L20 16.25C20.4142 16.25 20.75 16.5858 20.75 17Z"/>
            </svg>
        </button>
        <div class="flex items-center gap-5 md:gap-6">
            <div class="flex items-center gap-4 md:gap-6">
                <div x-data="{ isOpen : false }" class="relative space-y-3">
                    <div @click="isOpen = !isOpen" class="relative cursor-pointer">
                        <svg class="w-3.5 md:w-4 fill-[#637381]" viewBox="0 0 18 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.09992 0.25C4.70436 0.25 2.07718 3.22603 2.49834 6.59536L2.5777 7.23021C2.69382 8.15916 2.35449 9.08706 1.66648 9.72195C0.240802 11.0375 -0.155293 13.1315 0.691357 14.8769L0.794708 15.09C1.58388 16.7169 3.23318 17.75 5.04141 17.75H13.2622C14.8219 17.75 16.2736 16.9532 17.111 15.6373C18.2931 13.7799 17.98 11.3432 16.3667 9.84496L16.3229 9.8042C15.5843 9.11833 15.2207 8.11912 15.3457 7.11901L15.4103 6.60208C15.832 3.22918 13.202 0.25 9.80283 0.25H8.09992Z"/>
                            <path d="M6.78333 19.55C6.5348 19.2186 6.0647 19.1515 5.73333 19.4C5.40196 19.6485 5.3348 20.1186 5.58333 20.45L5.88333 20.85C7.53333 23.05 10.8333 23.05 12.4833 20.85L12.7833 20.45C13.0319 20.1186 12.9647 19.6485 12.6333 19.4C12.302 19.1515 11.8319 19.2186 11.5833 19.55L11.2833 19.95C10.2333 21.35 8.13333 21.35 7.08333 19.95L6.78333 19.55Z"/>
                        </svg>
                        <div class="absolute -top-1 -right-1 bg-red-500 px-1 rounded-full">
                            <h1 class="text-[8px] md:text-[9px] text-white font-medium">2</h1>
                        </div>
                    </div>
                    <div x-show="isOpen" @click.outside="isOpen = false" x-transition.duration.300ms.opacity.50 :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden w-max absolute right-0">
                        <div x-data="{ tab : 1 }" class="grid w-60 sm:w-72 md:w-80 lg:w-96 bg-white rounded md:rounded-md shadow-lg shadow-black/20">
                            <div class="p-4 border-b border-[#eaeaea]">
                                <h1 class="text-start text-xs md:text-sm text-black font-normal">Notifikasi</h1>
                            </div>
                            <div class="px-3 pb-3 space-y-2">
                                <div class="flex items-center gap-3 md:gap-4">
                                    <button @click="tab = 1" :class="tab == 1 ? 'border-[#615EFC] text-[#615EFC]' : 'border-white text-[#B4B4B4]'" class="p-2 transition-colors border-b-[1.5px]">
                                        <h1 class="text-[10px] md:text-xs  font-normal">Semua</h1>
                                    </button>
                                    <button @click="tab = 2" :class="tab == 2 ? 'border-[#615EFC] text-[#615EFC]' : 'border-white text-[#B4B4B4]'" class="flex items-center gap-2 md:gap-3 p-2 transition-colors border-b-[1.5px]">
                                        <h1 class="text-[10px] md:text-xs font-normal">Belum dilihat</h1>
                                        <div class="bg-[#FF4E4E] py-0.5 px-[7px] rounded-full">
                                            <h1 class="text-[8px] md:text-[10px] text-white font-normal">4</h1>
                                        </div>
                                    </button>
                                    <button @click="tab = 3" :class="tab == 3 ? 'border-[#615EFC] text-[#615EFC]' : 'border-white text-[#B4B4B4]'" class="p-2 transition-colors border-b-[1.5px]">
                                        <h1 class="text-[10px] md:text-xs font-normal">Sudah dilihat</h1>
                                    </button>
                                </div>
                                <div class="flex justify-end items-center">
                                    <button class="bg-[#6777EF] py-1.5 px-3 rounded md:rounded-md">
                                        <h1 class="text-[10px] md:text-xs text-white font-normal">Tandai sudah dilihat</h1>
                                    </button>
                                </div>
                            </div>
                            <div x-show="tab == 1" class="space-y-3">
                                <div class="grid">
                                    <a href="" class="flex justify-between items-center bg-[#F4F3FF] py-3 px-4">
                                        <div class="flex items-center gap-2 md:gap-3">
                                            <img class="w-7 lg:w-8 h-7 lg:h-8 bg-transparent object-cover rounded-full" src="/images/avatar.jpg">
                                            <div class="text-start space-y-1">
                                                <div class="">
                                                    <h1 class="text-xs md:text-sm text-black font-semibold">Desa Janji</h1>
                                                    <p class="text-[10px] md:text-xs text-black font-normal">Mengirim laporan RPJMDES</p>
                                                </div>
                                                <h1 class="text-[8px] md:text-[10px] text-[#B4B4B4] font-normal">Baru saja</h1>
                                            </div>
                                        </div>
                                        <div class="bg-[#5C64FC] py-1 px-3.5 rounded">
                                            <h1 class="text-[10px] md:text-xs text-white font-normal">Cek</h1>
                                        </div>
                                    </a>
                                    <a href="" class="flex justify-between items-center bg-[#F4F3FF] py-3 px-4">
                                        <div class="flex items-center gap-2 md:gap-3">
                                            <img class="w-7 lg:w-8 h-7 lg:h-8 bg-transparent object-cover rounded-full" src="/images/avatar.jpg">
                                            <div class="text-start space-y-1">
                                                <div class="">
                                                    <h1 class="text-xs md:text-sm text-black font-semibold">Desa Janji</h1>
                                                    <p class="text-[10px] md:text-xs text-black font-normal">Mengirim laporan RPJMDES</p>
                                                </div>
                                                <h1 class="text-[8px] md:text-[10px] text-[#B4B4B4] font-normal">Baru saja</h1>
                                            </div>
                                        </div>
                                        <div class="bg-[#5C64FC] py-1 px-3.5 rounded">
                                            <h1 class="text-[10px] md:text-xs text-white font-normal">Cek</h1>
                                        </div>
                                    </a>
                                </div>
                                <!-- <div class="flex justify-center items-center">
                                    <div class="space-y-2">
                                        <img class="w-32 h-32" src="/svgs/search2.svg">
                                        <h1 class="text-sm md:text-base text-[#778294] font-normal">Tidak ada notifikasi</h1>
                                    </div>
                                </div> -->
                            </div>
                            <div x-show="tab == 2">
                                <div class="grid">
                                    <a href="" class="flex justify-between items-center bg-[#F4F3FF] py-3 px-4">
                                        <div class="flex items-center gap-2 md:gap-3">
                                            <img class="w-7 lg:w-8 h-7 lg:h-8 bg-transparent object-cover rounded-full" src="/images/avatar.jpg">
                                            <div class="text-start space-y-1">
                                                <div class="">
                                                    <h1 class="text-xs md:text-sm text-black font-semibold">Desa Janji</h1>
                                                    <p class="text-[10px] md:text-xs text-black font-normal">Mengirim laporan RPJMDES</p>
                                                </div>
                                                <h1 class="text-[8px] md:text-[10px] text-[#B4B4B4] font-normal">Baru saja</h1>
                                            </div>
                                        </div>
                                        <div class="bg-[#5C64FC] py-1 px-3.5 rounded">
                                            <h1 class="text-[10px] md:text-xs text-white font-normal">Cek</h1>
                                        </div>
                                    </a>
                                    <a href="" class="flex justify-between items-center bg-[#F4F3FF] py-3 px-4">
                                        <div class="flex items-center gap-2 md:gap-3">
                                            <img class="w-7 lg:w-8 h-7 lg:h-8 bg-transparent object-cover rounded-full" src="/images/avatar.jpg">
                                            <div class="text-start space-y-1">
                                                <div class="">
                                                    <h1 class="text-xs md:text-sm text-black font-semibold">Desa Janji</h1>
                                                    <p class="text-[10px] md:text-xs text-black font-normal">Mengirim laporan RPJMDES</p>
                                                </div>
                                                <h1 class="text-[8px] md:text-[10px] text-[#B4B4B4] font-normal">Baru saja</h1>
                                            </div>
                                        </div>
                                        <div class="bg-[#5C64FC] py-1 px-3.5 rounded">
                                            <h1 class="text-[10px] md:text-xs text-white font-normal">Cek</h1>
                                        </div>
                                    </a>
                                </div>
                                <!-- <div class="flex justify-center items-center">
                                    <div class="space-y-2">
                                        <img class="w-32 h-32" src="/svgs/search2.svg">
                                        <h1 class="text-sm md:text-base text-[#778294] font-normal">Tidak ada notifikasi</h1>
                                    </div>
                                </div> -->
                            </div>
                            <div x-show="tab == 3">
                                <!-- <div class="grid">
                                    <a href="" class="flex justify-between items-center bg-transparent py-3 px-4">
                                        <div class="flex items-center gap-2 md:gap-3">
                                            <img class="w-7 lg:w-8 h-7 lg:h-8 bg-transparent object-cover rounded-full" src="/images/avatar.jpg">
                                            <div class="text-start space-y-1">
                                                <div class="">
                                                    <h1 class="text-xs md:text-sm text-black font-semibold">Desa Janji</h1>
                                                    <p class="text-[10px] md:text-xs text-black font-normal">Mengirim laporan RPJMDES</p>
                                                </div>
                                                <h1 class="text-[8px] md:text-[10px] text-[#B4B4B4] font-normal">Baru saja</h1>
                                            </div>
                                        </div>
                                        <div class="bg-[#5C64FC] py-1 px-3.5 rounded">
                                            <h1 class="text-[10px] md:text-xs text-white font-normal">Cek</h1>
                                        </div>
                                    </a>
                                    <a href="" class="flex justify-between items-center bg-transparent py-3 px-4">
                                        <div class="flex items-center gap-2 md:gap-3">
                                            <img class="w-7 lg:w-8 h-7 lg:h-8 bg-transparent object-cover rounded-full" src="/images/avatar.jpg">
                                            <div class="text-start space-y-1">
                                                <div class="">
                                                    <h1 class="text-xs md:text-sm text-black font-semibold">Desa Janji</h1>
                                                    <p class="text-[10px] md:text-xs text-black font-normal">Mengirim laporan RPJMDES</p>
                                                </div>
                                                <h1 class="text-[8px] md:text-[10px] text-[#B4B4B4] font-normal">Baru saja</h1>
                                            </div>
                                        </div>
                                        <div class="bg-[#5C64FC] py-1 px-3.5 rounded">
                                            <h1 class="text-[10px] md:text-xs text-white font-normal">Cek</h1>
                                        </div>
                                    </a>
                                </div> -->
                                <div class="flex justify-center items-center">
                                    <div class="space-y-2">
                                        <img class="w-32 h-32" src="/svgs/search2.svg">
                                        <h1 class="text-sm md:text-base text-[#778294] font-normal">Tidak ada notifikasi</h1>
                                    </div>
                                </div>
                            </div>
                            <a href="/pmd/notifikasi.php" class="flex justify-center items-center gap-2 md:gap-3 py-2.5 px-4">
                                <h1 class="text-xs md:text-sm text-[#615EFC] font-normal">Selengkapnya</h1>
                                <svg class="w-1 md:w-1.5" viewBox="0 0 5 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.941406 1.13574L2.19018 2.37342C3.18605 3.36044 3.68398 3.85395 3.76065 4.45546C3.77944 4.60284 3.77944 4.75198 3.76065 4.89935C3.68398 5.50086 3.18605 5.99438 2.19018 6.9814L0.941406 8.21908" stroke="#615EFC" stroke-width="1.5" stroke-linecap="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div x-data="{ isOpen : false }" class="relative space-y-3">
                    <div @click="isOpen = !isOpen" class="relative cursor-pointer">
                        <svg class="w-5 fill-[#637381]" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.962557 3.77004C0.774567 4.53557 0.637263 5.52416 0.44625 6.89945C0.010076 10.0399 -0.208011 11.6101 0.271518 12.8297C0.692494 13.9003 1.46979 14.793 2.47232 15.3573C3.61429 16 5.19958 16 8.37016 16H9.99438C13.165 16 14.7503 16 15.8922 15.3573C16.8948 14.793 17.6721 13.9003 18.0931 12.8297C18.5726 11.6101 18.3545 10.0399 17.9183 6.89945C17.7109 5.40583 17.5668 4.36829 17.3523 3.57727L16.6219 4.30771C14.9896 5.93999 13.7104 7.21918 12.5782 8.08306C11.4192 8.96729 10.3265 9.48679 9.06104 9.48679C7.79559 9.48679 6.70285 8.96729 5.54392 8.08306C4.41166 7.21918 3.13249 5.93999 1.50023 4.30771L0.962557 3.77004Z"/>
                            <path d="M1.57494 2.2611L2.5203 3.20646C4.20196 4.88812 5.41098 6.09489 6.45379 6.89053C7.4793 7.67296 8.25543 7.98679 9.06104 7.98679C9.86666 7.98679 10.6428 7.67296 11.6683 6.89053C12.7111 6.09489 13.9201 4.88812 15.6018 3.20646L16.6915 2.11676C16.1835 1.39704 15.4934 0.823089 14.6901 0.454832C13.698 0 12.4634 0 9.99437 0H8.37019C5.90113 0 4.66661 0 3.67444 0.454832C2.81813 0.847386 2.09051 1.47367 1.57494 2.2611Z"/>
                        </svg>
                        <div class="absolute -top-1 -right-1 bg-orange-500 px-1 rounded-full">
                            <h1 class="text-[8px] md:text-[9px] text-white font-medium">3</h1>
                        </div>
                    </div>
                    <div x-show="isOpen" @click.outside="isOpen = false" x-transition.duration.300ms.opacity.50 :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden w-max absolute right-0">
                        <div x-data="{ tab : 1, tabb : 1 }" class="grid w-60 sm:w-72 md:w-80 lg:w-96 bg-white rounded md:rounded-md shadow-lg shadow-black/20">
                            <div class="flex items-center gap-3 md:gap-4 py-3 px-4 border-b border-[#eaeaea]">
                                <button @click="tab = 1" :class="tab == 1 ? 'border-[#615EFC] text-[#615EFC]' : 'border-white text-[#B4B4B4]'" class="p-1 transition-colors border-b-[1.5px]">
                                    <h1 class="text-xs md:text-sm font-normal">Inbox</h1>
                                </button>
                                <button @click="tab = 2" :class="tab == 2 ? 'border-[#615EFC] text-[#615EFC]' : 'border-white text-[#B4B4B4]'" class="p-1 transition-colors border-b-[1.5px]">
                                    <h1 class="text-xs md:text-sm font-normal">Outbox</h1>
                                </button>
                            </div>
                            <div x-show="tab == 1">
                                <div class="px-3 pb-3 space-y-2">
                                    <div class="flex items-center gap-3 md:gap-4">
                                        <button @click="tabb = 1" :class="tabb == 1 ? 'border-[#615EFC] text-[#615EFC]' : 'border-white text-[#B4B4B4]'" class="p-2 transition-colors border-b-[1.5px]">
                                            <h1 class="text-[10px] md:text-xs  font-normal">Semua</h1>
                                        </button>
                                        <button @click="tabb = 2" :class="tabb == 2 ? 'border-[#615EFC] text-[#615EFC]' : 'border-white text-[#B4B4B4]'" class="flex items-center gap-2 md:gap-3 p-2 transition-colors border-b-[1.5px]">
                                            <h1 class="text-[10px] md:text-xs font-normal">Belum dilihat</h1>
                                            <div class="bg-[#FF4E4E] py-0.5 px-[7px] rounded-full">
                                                <h1 class="text-[8px] md:text-[10px] text-white font-normal">4</h1>
                                            </div>
                                        </button>
                                        <button @click="tabb = 3" :class="tabb == 3 ? 'border-[#615EFC] text-[#615EFC]' : 'border-white text-[#B4B4B4]'" class="p-2 transition-colors border-b-[1.5px]">
                                            <h1 class="text-[10px] md:text-xs font-normal">Sudah dilihat</h1>
                                        </button>
                                    </div>
                                    <div class="flex justify-end items-center">
                                        <button class="bg-[#6777EF] py-1.5 px-3 rounded md:rounded-md">
                                            <h1 class="text-[10px] md:text-xs text-white font-normal">Tandai sudah dilihat</h1>
                                        </button>
                                    </div>
                                </div>
                                <div x-show="tabb == 1" class="space-y-3">
                                    <div class="grid">
                                        <a href="" class="flex justify-between items-center bg-[#F4F3FF] py-3 px-4">
                                            <div class="flex items-center gap-2 md:gap-3">
                                                <img class="w-7 lg:w-8 h-7 lg:h-8 bg-transparent object-cover rounded-full" src="/images/avatar.jpg">
                                                <div class="text-start space-y-1">
                                                    <div class="">
                                                        <h1 class="text-xs md:text-sm text-black font-semibold">Rizky Rahman</h1>
                                                        <p class="text-[10px] md:text-xs text-black font-normal">Hallo admin tolong acc akun saya</p>
                                                    </div>
                                                    <h1 class="text-[8px] md:text-[10px] text-[#B4B4B4] font-normal">Baru saja</h1>
                                                </div>
                                            </div>
                                            <div class="bg-[#5C64FC] py-1 px-3.5 rounded">
                                                <h1 class="text-[10px] md:text-xs text-white font-normal">Cek</h1>
                                            </div>
                                        </a>
                                        <a href="" class="flex justify-between items-center bg-[#F4F3FF] py-3 px-4">
                                            <div class="flex items-center gap-2 md:gap-3">
                                                <img class="w-7 lg:w-8 h-7 lg:h-8 bg-transparent object-cover rounded-full" src="/images/avatar.jpg">
                                                <div class="text-start space-y-1">
                                                    <div class="">
                                                        <h1 class="text-xs md:text-sm text-black font-semibold">Rizky Rahman</h1>
                                                        <p class="text-[10px] md:text-xs text-black font-normal">Hallo admin tolong acc akun saya</p>
                                                    </div>
                                                    <h1 class="text-[8px] md:text-[10px] text-[#B4B4B4] font-normal">Baru saja</h1>
                                                </div>
                                            </div>
                                            <div class="bg-[#5C64FC] py-1 px-3.5 rounded">
                                                <h1 class="text-[10px] md:text-xs text-white font-normal">Cek</h1>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- <div class="flex justify-center items-center">
                                        <div class="space-y-2">
                                            <img class="w-32 h-32" src="/svgs/search2.svg">
                                            <h1 class="text-sm md:text-base text-[#778294] font-normal">Tidak ada notifikasi</h1>
                                        </div>
                                    </div> -->
                                </div>
                                <div x-show="tabb == 2">
                                    <div class="grid">
                                        <a href="" class="flex justify-between items-center bg-[#F4F3FF] py-3 px-4">
                                            <div class="flex items-center gap-2 md:gap-3">
                                                <img class="w-7 lg:w-8 h-7 lg:h-8 bg-transparent object-cover rounded-full" src="/images/avatar.jpg">
                                                <div class="text-start space-y-1">
                                                    <div class="">
                                                        <h1 class="text-xs md:text-sm text-black font-semibold">Rizky Rahman</h1>
                                                        <p class="text-[10px] md:text-xs text-black font-normal">Hallo admin tolong acc akun saya</p>
                                                    </div>
                                                    <h1 class="text-[8px] md:text-[10px] text-[#B4B4B4] font-normal">Baru saja</h1>
                                                </div>
                                            </div>
                                            <div class="bg-[#5C64FC] py-1 px-3.5 rounded">
                                                <h1 class="text-[10px] md:text-xs text-white font-normal">Cek</h1>
                                            </div>
                                        </a>
                                        <a href="" class="flex justify-between items-center bg-[#F4F3FF] py-3 px-4">
                                            <div class="flex items-center gap-2 md:gap-3">
                                                <img class="w-7 lg:w-8 h-7 lg:h-8 bg-transparent object-cover rounded-full" src="/images/avatar.jpg">
                                                <div class="text-start space-y-1">
                                                    <div class="">
                                                        <h1 class="text-xs md:text-sm text-black font-semibold">Rizky Rahman</h1>
                                                        <p class="text-[10px] md:text-xs text-black font-normal">Hallo admin tolong acc akun saya</p>
                                                    </div>
                                                    <h1 class="text-[8px] md:text-[10px] text-[#B4B4B4] font-normal">Baru saja</h1>
                                                </div>
                                            </div>
                                            <div class="bg-[#5C64FC] py-1 px-3.5 rounded">
                                                <h1 class="text-[10px] md:text-xs text-white font-normal">Cek</h1>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- <div class="flex justify-center items-center">
                                        <div class="space-y-2">
                                            <img class="w-32 h-32" src="/svgs/search2.svg">
                                            <h1 class="text-sm md:text-base text-[#778294] font-normal">Tidak ada notifikasi</h1>
                                        </div>
                                    </div> -->
                                </div>
                                <div x-show="tabb == 3">
                                    <!-- <div class="grid">
                                        <a href="" class="flex justify-between items-center bg-transparent py-3 px-4">
                                            <div class="flex items-center gap-2 md:gap-3">
                                                <img class="w-7 lg:w-8 h-7 lg:h-8 bg-transparent object-cover rounded-full" src="/images/avatar.jpg">
                                                <div class="text-start space-y-1">
                                                    <div class="">
                                                        <h1 class="text-xs md:text-sm text-black font-semibold">Rizky Rahman</h1>
                                                        <p class="text-[10px] md:text-xs text-black font-normal">Hallo admin tolong acc akun saya</p>
                                                    </div>
                                                    <h1 class="text-[8px] md:text-[10px] text-[#B4B4B4] font-normal">Baru saja</h1>
                                                </div>
                                            </div>
                                            <div class="bg-[#5C64FC] py-1 px-3.5 rounded">
                                                <h1 class="text-[10px] md:text-xs text-white font-normal">Cek</h1>
                                            </div>
                                        </a>
                                        <a href="" class="flex justify-between items-center bg-transparent py-3 px-4">
                                            <div class="flex items-center gap-2 md:gap-3">
                                                <img class="w-7 lg:w-8 h-7 lg:h-8 bg-transparent object-cover rounded-full" src="/images/avatar.jpg">
                                                <div class="text-start space-y-1">
                                                    <div class="">
                                                        <h1 class="text-xs md:text-sm text-black font-semibold">Rizky Rahman</h1>
                                                        <p class="text-[10px] md:text-xs text-black font-normal">Hallo admin tolong acc akun saya</p>
                                                    </div>
                                                    <h1 class="text-[8px] md:text-[10px] text-[#B4B4B4] font-normal">Baru saja</h1>
                                                </div>
                                            </div>
                                            <div class="bg-[#5C64FC] py-1 px-3.5 rounded">
                                                <h1 class="text-[10px] md:text-xs text-white font-normal">Cek</h1>
                                            </div>
                                        </a>
                                    </div> -->
                                    <div class="flex justify-center items-center">
                                        <div class="space-y-2">
                                            <img class="w-32 h-32" src="/svgs/search2.svg">
                                            <h1 class="text-sm md:text-base text-[#778294] font-normal">Tidak ada notifikasi</h1>
                                        </div>
                                    </div>
                                </div>
                                <a href="/pmd/inbox.php" class="flex justify-center items-center gap-2 md:gap-3 py-2.5 px-4">
                                    <h1 class="text-xs md:text-sm text-[#615EFC] font-normal">Selengkapnya</h1>
                                    <svg class="w-1 md:w-1.5" viewBox="0 0 5 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.941406 1.13574L2.19018 2.37342C3.18605 3.36044 3.68398 3.85395 3.76065 4.45546C3.77944 4.60284 3.77944 4.75198 3.76065 4.89935C3.68398 5.50086 3.18605 5.99438 2.19018 6.9814L0.941406 8.21908" stroke="#615EFC" stroke-width="1.5" stroke-linecap="round"/>
                                    </svg>
                                </a>
                            </div>
                            <div x-show="tab == 2">
                                <div class="px-3 pb-3 space-y-2">
                                    <div class="flex items-center gap-3 md:gap-4">
                                        <button @click="tabb = 1" :class="tabb == 1 ? 'border-[#615EFC] text-[#615EFC]' : 'border-white text-[#B4B4B4]'" class="p-2 transition-colors border-b-[1.5px]">
                                            <h1 class="text-[10px] md:text-xs  font-normal">Semua</h1>
                                        </button>
                                        <button @click="tabb = 2" :class="tabb == 2 ? 'border-[#615EFC] text-[#615EFC]' : 'border-white text-[#B4B4B4]'" class="flex items-center gap-2 md:gap-3 p-2 transition-colors border-b-[1.5px]">
                                            <h1 class="text-[10px] md:text-xs font-normal">Belum dilihat</h1>
                                            <div class="bg-[#FF4E4E] py-0.5 px-[7px] rounded-full">
                                                <h1 class="text-[8px] md:text-[10px] text-white font-normal">4</h1>
                                            </div>
                                        </button>
                                        <button @click="tabb = 3" :class="tabb == 3 ? 'border-[#615EFC] text-[#615EFC]' : 'border-white text-[#B4B4B4]'" class="p-2 transition-colors border-b-[1.5px]">
                                            <h1 class="text-[10px] md:text-xs font-normal">Sudah dilihat</h1>
                                        </button>
                                    </div>
                                    <div class="flex justify-end items-center">
                                        <button class="bg-[#6777EF] py-1.5 px-3 rounded md:rounded-md">
                                            <h1 class="text-[10px] md:text-xs text-white font-normal">Tandai sudah dilihat</h1>
                                        </button>
                                    </div>
                                </div>
                                <div x-show="tabb == 1" class="space-y-3">
                                    <div class="grid">
                                        <a href="" class="flex justify-between items-center bg-[#F4F3FF] py-3 px-4">
                                            <div class="flex items-center gap-2 md:gap-3">
                                                <img class="w-7 lg:w-8 h-7 lg:h-8 bg-transparent object-cover rounded-full" src="/images/avatar.jpg">
                                                <div class="text-start space-y-1">
                                                    <div class="">
                                                        <h1 class="text-xs md:text-sm text-black font-semibold">Rizky Rahman</h1>
                                                        <p class="text-[10px] md:text-xs text-black font-normal">Hallo admin tolong acc akun saya</p>
                                                    </div>
                                                    <h1 class="text-[8px] md:text-[10px] text-[#B4B4B4] font-normal">Baru saja</h1>
                                                </div>
                                            </div>
                                            <div class="bg-[#5C64FC] py-1 px-3.5 rounded">
                                                <h1 class="text-[10px] md:text-xs text-white font-normal">Cek</h1>
                                            </div>
                                        </a>
                                        <a href="" class="flex justify-between items-center bg-[#F4F3FF] py-3 px-4">
                                            <div class="flex items-center gap-2 md:gap-3">
                                                <img class="w-7 lg:w-8 h-7 lg:h-8 bg-transparent object-cover rounded-full" src="/images/avatar.jpg">
                                                <div class="text-start space-y-1">
                                                    <div class="">
                                                        <h1 class="text-xs md:text-sm text-black font-semibold">Rizky Rahman</h1>
                                                        <p class="text-[10px] md:text-xs text-black font-normal">Hallo admin tolong acc akun saya</p>
                                                    </div>
                                                    <h1 class="text-[8px] md:text-[10px] text-[#B4B4B4] font-normal">Baru saja</h1>
                                                </div>
                                            </div>
                                            <div class="bg-[#5C64FC] py-1 px-3.5 rounded">
                                                <h1 class="text-[10px] md:text-xs text-white font-normal">Cek</h1>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- <div class="flex justify-center items-center">
                                        <div class="space-y-2">
                                            <img class="w-32 h-32" src="/svgs/search2.svg">
                                            <h1 class="text-sm md:text-base text-[#778294] font-normal">Tidak ada notifikasi</h1>
                                        </div>
                                    </div> -->
                                </div>
                                <div x-show="tabb == 2">
                                    <div class="grid">
                                        <a href="" class="flex justify-between items-center bg-[#F4F3FF] py-3 px-4">
                                            <div class="flex items-center gap-2 md:gap-3">
                                                <img class="w-7 lg:w-8 h-7 lg:h-8 bg-transparent object-cover rounded-full" src="/images/avatar.jpg">
                                                <div class="text-start space-y-1">
                                                    <div class="">
                                                        <h1 class="text-xs md:text-sm text-black font-semibold">Rizky Rahman</h1>
                                                        <p class="text-[10px] md:text-xs text-black font-normal">Hallo admin tolong acc akun saya</p>
                                                    </div>
                                                    <h1 class="text-[8px] md:text-[10px] text-[#B4B4B4] font-normal">Baru saja</h1>
                                                </div>
                                            </div>
                                            <div class="bg-[#5C64FC] py-1 px-3.5 rounded">
                                                <h1 class="text-[10px] md:text-xs text-white font-normal">Cek</h1>
                                            </div>
                                        </a>
                                        <a href="" class="flex justify-between items-center bg-[#F4F3FF] py-3 px-4">
                                            <div class="flex items-center gap-2 md:gap-3">
                                                <img class="w-7 lg:w-8 h-7 lg:h-8 bg-transparent object-cover rounded-full" src="/images/avatar.jpg">
                                                <div class="text-start space-y-1">
                                                    <div class="">
                                                        <h1 class="text-xs md:text-sm text-black font-semibold">Rizky Rahman</h1>
                                                        <p class="text-[10px] md:text-xs text-black font-normal">Hallo admin tolong acc akun saya</p>
                                                    </div>
                                                    <h1 class="text-[8px] md:text-[10px] text-[#B4B4B4] font-normal">Baru saja</h1>
                                                </div>
                                            </div>
                                            <div class="bg-[#5C64FC] py-1 px-3.5 rounded">
                                                <h1 class="text-[10px] md:text-xs text-white font-normal">Cek</h1>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- <div class="flex justify-center items-center">
                                        <div class="space-y-2">
                                            <img class="w-32 h-32" src="/svgs/search2.svg">
                                            <h1 class="text-sm md:text-base text-[#778294] font-normal">Tidak ada notifikasi</h1>
                                        </div>
                                    </div> -->
                                </div>
                                <div x-show="tabb == 3">
                                    <!-- <div class="grid">
                                        <a href="" class="flex justify-between items-center bg-transparent py-3 px-4">
                                            <div class="flex items-center gap-2 md:gap-3">
                                                <img class="w-7 lg:w-8 h-7 lg:h-8 bg-transparent object-cover rounded-full" src="/images/avatar.jpg">
                                                <div class="text-start space-y-1">
                                                    <div class="">
                                                        <h1 class="text-xs md:text-sm text-black font-semibold">Rizky Rahman</h1>
                                                        <p class="text-[10px] md:text-xs text-black font-normal">Hallo admin tolong acc akun saya</p>
                                                    </div>
                                                    <h1 class="text-[8px] md:text-[10px] text-[#B4B4B4] font-normal">Baru saja</h1>
                                                </div>
                                            </div>
                                            <div class="bg-[#5C64FC] py-1 px-3.5 rounded">
                                                <h1 class="text-[10px] md:text-xs text-white font-normal">Cek</h1>
                                            </div>
                                        </a>
                                        <a href="" class="flex justify-between items-center bg-transparent py-3 px-4">
                                            <div class="flex items-center gap-2 md:gap-3">
                                                <img class="w-7 lg:w-8 h-7 lg:h-8 bg-transparent object-cover rounded-full" src="/images/avatar.jpg">
                                                <div class="text-start space-y-1">
                                                    <div class="">
                                                        <h1 class="text-xs md:text-sm text-black font-semibold">Rizky Rahman</h1>
                                                        <p class="text-[10px] md:text-xs text-black font-normal">Hallo admin tolong acc akun saya</p>
                                                    </div>
                                                    <h1 class="text-[8px] md:text-[10px] text-[#B4B4B4] font-normal">Baru saja</h1>
                                                </div>
                                            </div>
                                            <div class="bg-[#5C64FC] py-1 px-3.5 rounded">
                                                <h1 class="text-[10px] md:text-xs text-white font-normal">Cek</h1>
                                            </div>
                                        </a>
                                    </div> -->
                                    <div class="flex justify-center items-center">
                                        <div class="space-y-2">
                                            <img class="w-32 h-32" src="/svgs/search2.svg">
                                            <h1 class="text-sm md:text-base text-[#778294] font-normal">Tidak ada notifikasi</h1>
                                        </div>
                                    </div>
                                </div>
                                <a href="/pmd/outbox.php" class="flex justify-center items-center gap-2 md:gap-3 py-2.5 px-4">
                                    <h1 class="text-xs md:text-sm text-[#615EFC] font-normal">Selengkapnya</h1>
                                    <svg class="w-1 md:w-1.5" viewBox="0 0 5 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.941406 1.13574L2.19018 2.37342C3.18605 3.36044 3.68398 3.85395 3.76065 4.45546C3.77944 4.60284 3.77944 4.75198 3.76065 4.89935C3.68398 5.50086 3.18605 5.99438 2.19018 6.9814L0.941406 8.21908" stroke="#615EFC" stroke-width="1.5" stroke-linecap="round"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div x-data="{ isOpen : false }" class="relative space-y-3">
                <button @click="isOpen = !isOpen" class="flex items-center gap-2 md:gap-3 md:border-l md:border-gray-300 md:pl-5">
                    <img class="w-7 lg:w-8 h-7 lg:h-8 bg-transparent object-cover rounded-full" src="/images/avatar.jpg">
                    <div class="hidden md:block text-xs md:text-sm text-black font-semibold capitalize">Admin PMD</div>
                    <svg class="hidden md:block w-2 fill-black" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.246 7.08721C3.20733 7.04954 3.042 6.90731 2.906 6.77482C2.05067 5.99807 0.650667 3.97177 0.223333 2.91121C0.154667 2.75014 0.00933333 2.34293 0 2.12537C0 1.91689 0.048 1.71816 0.145333 1.52852C0.281333 1.29211 0.495333 1.10247 0.748 0.998559C0.923333 0.931665 1.448 0.827752 1.45733 0.827752C2.03133 0.723839 2.964 0.666687 3.99467 0.666687C4.97667 0.666687 5.87133 0.723839 6.454 0.808918C6.46333 0.81866 7.11533 0.922573 7.33867 1.03623C7.74667 1.2447 8 1.65191 8 2.0877V2.12537C7.99 2.40918 7.73667 3.00603 7.72733 3.00603C7.29933 4.00944 5.968 5.98898 5.08333 6.78456C5.08333 6.78456 4.856 7.00863 4.714 7.10604C4.51 7.25802 4.25733 7.33335 4.00467 7.33335C3.72267 7.33335 3.46 7.24827 3.246 7.08721Z"/>
                    </svg>
                </button>
                <div x-show="isOpen" @click.outside="isOpen = false" x-transition.duration.300ms.opacity.50 :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden w-max absolute right-0">
                    <div class="grid gap-0.5 bg-white p-4 space-y-2 rounded md:rounded-md shadow-lg shadow-black/20">
                        <a href="editProfile.php">
                            <button class="flex items-center gap-2 md:gap-3">
                                <svg class="w-2 md:w-2.5 fill-black" viewBox="0 0 9 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.49998 0.177246C3.079 0.177246 1.92706 1.32918 1.92706 2.75016C1.92706 4.17115 3.079 5.32308 4.49998 5.32308C5.92096 5.32308 7.0729 4.17115 7.0729 2.75016C7.0729 1.32918 5.92096 0.177246 4.49998 0.177246ZM2.73956 2.75016C2.73956 1.77791 3.52773 0.989746 4.49998 0.989746C5.47223 0.989746 6.2604 1.77791 6.2604 2.75016C6.2604 3.72241 5.47223 4.51058 4.49998 4.51058C3.52773 4.51058 2.73956 3.72241 2.73956 2.75016Z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.87498 6.13558C1.454 6.13558 0.302063 7.28751 0.302063 8.7085C0.302063 10.1295 1.454 11.2814 2.87498 11.2814H6.12498C7.54596 11.2814 8.6979 10.1295 8.6979 8.7085C8.6979 7.28751 7.54596 6.13558 6.12498 6.13558H2.87498ZM1.11456 8.7085C1.11456 7.73625 1.90273 6.94808 2.87498 6.94808H6.12498C7.09723 6.94808 7.8854 7.73625 7.8854 8.7085C7.8854 9.68075 7.09723 10.4689 6.12498 10.4689H2.87498C1.90273 10.4689 1.11456 9.68075 1.11456 8.7085Z"/>
                                </svg>
                                <h1 class="text-[10px] md:text-xs text-black font-medium">Profile</h1>
                            </button>
                        </a>
                        <a href="editPassword.php">
                            <button class="flex items-center gap-2 md:gap-3">
                                <svg class="w-2 md:w-2.5 fill-black" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.50003 3.42725C4.67736 3.42725 4.01045 4.09416 4.01045 4.91683C4.01045 5.59867 4.46856 6.17351 5.09378 6.35034V8.16683C5.09378 8.3912 5.27566 8.57308 5.50003 8.57308C5.7244 8.57308 5.90628 8.3912 5.90628 8.16683V6.35034C6.5315 6.17351 6.98961 5.59867 6.98961 4.91683C6.98961 4.09416 6.3227 3.42725 5.50003 3.42725ZM4.82295 4.91683C4.82295 4.54289 5.12609 4.23975 5.50003 4.23975C5.87397 4.23975 6.17711 4.54289 6.17711 4.91683C6.17711 5.29077 5.87397 5.59391 5.50003 5.59391C5.12609 5.59391 4.82295 5.29077 4.82295 4.91683Z"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.17997 0.177246C3.34483 0.177246 2.66782 0.85426 2.66782 1.6894C2.66782 2.07581 2.35457 2.38905 1.96817 2.38905H1.80087C0.947168 2.38905 0.186713 3.04956 0.23303 3.96701C0.288021 5.05631 0.529958 6.75406 1.41242 8.36226C1.65957 8.81268 1.98966 9.25515 2.34649 9.66741L2.37336 9.69845C2.88668 10.2916 3.31468 10.7861 3.77481 11.1232C4.26972 11.4858 4.79795 11.6664 5.50011 11.6664C6.20227 11.6664 6.73049 11.4858 7.2254 11.1232C7.68553 10.7861 8.11353 10.2916 8.62685 9.69845L8.65372 9.66741C9.01055 9.25515 9.34064 8.81268 9.5878 8.36226C10.4996 6.70059 10.727 4.82294 10.7718 3.65237C10.8068 2.73932 10.0517 2.07308 9.19329 2.07308H8.87406C8.57491 2.07308 8.33239 1.83057 8.33239 1.53141C8.33239 0.783527 7.72611 0.177246 6.97823 0.177246H4.17997ZM3.48032 1.6894C3.48032 1.30299 3.79356 0.989746 4.17997 0.989746H6.97823C7.27738 0.989746 7.51989 1.23226 7.51989 1.53141C7.51989 2.2793 8.12617 2.88558 8.87406 2.88558H9.19329C9.64702 2.88558 9.97515 3.22309 9.9599 3.62126C9.91705 4.73967 9.69897 6.47068 8.87549 7.9714C8.66481 8.35534 8.37309 8.75012 8.03938 9.13568C7.49223 9.76783 7.12277 10.1912 6.74523 10.4678C6.39448 10.7247 6.03571 10.8539 5.50011 10.8539C4.9645 10.8539 4.60573 10.7247 4.25498 10.4678C3.87744 10.1912 3.50798 9.76783 2.96083 9.13568C2.62712 8.75012 2.3354 8.35534 2.12472 7.9714C1.32388 6.51193 1.0962 4.95019 1.0445 3.92604C1.02482 3.53639 1.34579 3.20155 1.80087 3.20155H1.96817C2.80331 3.20155 3.48032 2.52454 3.48032 1.6894Z"/>
                                    </svg>
                                <h1 class="text-[10px] md:text-xs text-black font-medium">Ganti Password</h1>
                            </button>
                        </a>
                        <div class="border-b-[0.5px] border-[#E6E6E6]"></div>
                        <button class="flex items-center gap-2 md:gap-3">
                            <svg class="w-2 md:w-2.5 fill-[#FF4E4E]" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.16877 0.718752C7.63028 0.718716 7.9114 0.718693 8.15389 0.7571C9.4866 0.96818 10.5318 2.0134 10.7429 3.34611C10.7813 3.5886 10.7813 3.86972 10.7812 4.33123L10.7812 7.66878C10.7813 8.13029 10.7813 8.41141 10.7429 8.6539C10.5318 9.98661 9.4866 11.0318 8.15389 11.2429C7.9114 11.2813 7.63028 11.2813 7.16876 11.2813L6.58333 11.2813C5.88264 11.2813 5.23493 11.0494 4.71434 10.6584C4.53495 10.5236 4.49876 10.2689 4.6335 10.0896C4.76825 9.91016 5.02292 9.87396 5.20231 10.0087C5.58703 10.2977 6.06461 10.4688 6.58333 10.4688H7.125C7.64373 10.4688 7.8558 10.4675 8.02679 10.4404C9.01183 10.2844 9.78439 9.51184 9.9404 8.5268C9.96748 8.35581 9.96875 8.14374 9.96875 7.625L9.96875 4.375C9.96875 3.85627 9.96748 3.6442 9.9404 3.47321C9.78439 2.48817 9.01183 1.71561 8.02679 1.5596C7.8558 1.53252 7.64373 1.53125 7.125 1.53125H6.58333C6.06461 1.53125 5.58703 1.70233 5.20231 1.9913C5.02292 2.12605 4.76825 2.08985 4.6335 1.91046C4.49876 1.73106 4.53495 1.4764 4.71434 1.34165C5.23493 0.950623 5.88264 0.718755 6.58333 0.718755L7.16877 0.718752Z"/>
                                <path d="M2.53926 3.51501C2.71507 3.37561 2.97059 3.40513 3.10999 3.58094C3.24939 3.75675 3.21987 4.01227 3.04406 4.15167L2.08912 4.90883C1.70777 5.2112 1.44669 5.41898 1.26932 5.59376L8.20833 5.59375C8.43269 5.59375 8.61458 5.77564 8.61458 6C8.61458 6.22437 8.43269 6.40625 8.20833 6.40625L1.26932 6.40626C1.44669 6.58103 1.70778 6.78881 2.08912 7.09118L3.04406 7.84834C3.21987 7.98774 3.24939 8.24326 3.10999 8.41907C2.9706 8.59488 2.71507 8.6244 2.53926 8.485L1.56493 7.71246C1.20066 7.42365 0.900078 7.18533 0.685946 6.97202C0.466205 6.75313 0.284047 6.51017 0.234581 6.1997C0.224043 6.13356 0.218746 6.06684 0.218746 6.00001C0.218746 5.93317 0.224043 5.86645 0.234581 5.80031C0.284047 5.48984 0.466205 5.24688 0.685944 5.02799C0.900075 4.81468 1.20065 4.57637 1.56492 4.28756L2.53926 3.51501Z"/>
                            </svg>       
                            <h1 class="text-[10px] md:text-xs text-[#FF5555] font-medium">Keluar</h1>
                        </button>
                    </div>
                </div>
                <div x-data="{ notif : false }" x-show="notif" :class="{ 'block': notif, 'hidden': !notif }" class="hidden w-max absolute right-0">
                    <div class="w-56 md:w-72 flex justify-between items-center bg-[#CEFFE8] py-2 md:py-2.5 px-3 md:px-4 rounded md:rounded-md shadow-md shadow-black/20">
                        <div class="flex items-center gap-2 md:gap-3">
                            <svg class="w-4 md:w-5 fill-[#059669]" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.6 14.6L15.65 7.55L14.25 6.15L8.6 11.8L5.75 8.95L4.35 10.35L8.6 14.6ZM10 20C8.61667 20 7.31667 19.7375 6.1 19.2125C4.88333 18.6875 3.825 17.975 2.925 17.075C2.025 16.175 1.3125 15.1167 0.7875 13.9C0.2625 12.6833 0 11.3833 0 10C0 8.61667 0.2625 7.31667 0.7875 6.1C1.3125 4.88333 2.025 3.825 2.925 2.925C3.825 2.025 4.88333 1.3125 6.1 0.7875C7.31667 0.2625 8.61667 0 10 0C11.3833 0 12.6833 0.2625 13.9 0.7875C15.1167 1.3125 16.175 2.025 17.075 2.925C17.975 3.825 18.6875 4.88333 19.2125 6.1C19.7375 7.31667 20 8.61667 20 10C20 11.3833 19.7375 12.6833 19.2125 13.9C18.6875 15.1167 17.975 16.175 17.075 17.075C16.175 17.975 15.1167 18.6875 13.9 19.2125C12.6833 19.7375 11.3833 20 10 20Z"/>
                            </svg>
                            <h1 class="text-[10px] md:text-xs text-[#059669] font-medium">
                                <!-- Berhasil mengubah profile -->
                                <!-- Berhasil mengubah password -->
                                Berhasil mengunggah laporan
                            </h1>
                        </div>
                        <svg @click="notif = false" class="w-2.5 md:w-3 fill-[#8B8B8B] cursor-pointer" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.0204 1.68705C11.2157 1.49179 11.2157 1.1752 11.0204 0.979943C10.8251 0.784681 10.5086 0.784681 10.3133 0.979943L6.00017 5.29307L1.68705 0.979945C1.49179 0.784683 1.1752 0.784683 0.979943 0.979945C0.784681 1.17521 0.784681 1.49179 0.979943 1.68705L5.29306 6.00017L0.979961 10.3133C0.784699 10.5085 0.784699 10.8251 0.979961 11.0204C1.17522 11.2156 1.49181 11.2156 1.68707 11.0204L6.00017 6.70728L10.3133 11.0204C10.5085 11.2156 10.8251 11.2156 11.0204 11.0204C11.2156 10.8251 11.2156 10.5085 11.0204 10.3133L6.70728 6.00017L11.0204 1.68705Z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>