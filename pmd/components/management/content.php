<div x-show="window.innerWidth < 640 && isOpen" x-transition.opacity :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden fixed inset-0 bg-zinc-800 bg-opacity-80 z-40"></div>
<div x-data="{ isOpenn : true }">
    <?php include_once("../pmd/layout/sidebar.php"); ?>

    <main :class="isOpenn ? 'md:ml-60' : 'md:ml-20 ' + 'transition-all duration-500'" class="relative md:ml-60 pt-16 p-5 space-y-5">
        <div class="flex justify-between items-center">
            <h1 class="text-base md:text-lg lg:text-xl text-black font-medium">Management Evaluasi</h1>
            <h1 class="text-xs md:text-sm text-black font-medium"><span class="text-primary font-medium">Home</span> / Management Evaluasi</h1>
        </div>

        <div x-data="{ selected : null, isOpen : false }" class="space-y-1">
            <h1 class="text-[10px] md:text-xs text-black font-normal capitalize">Pilih Evaluasi</h1>
            <div class="w-full md:w-52 relative space-y-2">
                <button @click="isOpen = !isOpen" class="w-full flex justify-between items-center gap-2 bg-white py-1.5 px-4 rounded md:rounded-md shadow-md shadow-[#00000014] focus:outline-none focus:ring-0">
                    <h1 x-text="selected ? selected : 'Evaluasi'" class="text-xs md:text-sm text-[#313131] font-normal"></h1>
                    <svg class="w-3 fill-primary" viewBox="0 0 12 6" fill="currentColor" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.5327 1.52796C11.8243 1.23376 11.8222 0.758893 11.528 0.467309C11.2338 0.175726 10.7589 0.177844 10.4673 0.472041L8.72 2.23501C8.01086 2.9505 7.52282 3.44131 7.1093 3.77341C6.7076 4.096 6.44958 4.20668 6.2185 4.23613C6.07341 4.25462 5.92659 4.25462 5.7815 4.23613C5.55042 4.20668 5.2924 4.09601 4.89071 3.77341C4.47718 3.44131 3.98914 2.95051 3.28 2.23501L1.53269 0.472042C1.24111 0.177845 0.766238 0.175726 0.472041 0.46731C0.177844 0.758894 0.175726 1.23376 0.467309 1.52796L2.24609 3.32269C2.91604 3.99866 3.46359 4.55114 3.95146 4.94294C4.45879 5.35037 4.97373 5.64531 5.59184 5.72409C5.86287 5.75864 6.13714 5.75864 6.40816 5.72409C7.02628 5.64531 7.54122 5.35037 8.04854 4.94294C8.53641 4.55114 9.08396 3.99867 9.7539 3.32269L11.5327 1.52796Z"/>
                    </svg>  
                </button>
                <div x-show="isOpen" @click.outside="isOpen = false" x-transition.duration.300ms.opacity.50 :class="{ 'visible': isOpen, 'invisible': !isOpen }" class="invisible absolute z-10 w-full bg-white rounded md:rounded-md shadow-md shadow-[#00000014]">
                    <template x-for="(option, index) in ['Evaluasi RPJMDES', 'Evaluasi RKPDES', 'Evaluasi APEDES']" :key="index">
                        <div @click="selected = option; isOpen = false" class="flex justify-between items-center gap-2 py-1.5 px-4 cursor-pointer rounded md:rounded-md">
                            <h1 x-text="option" class="text-xs md:text-sm text-[#313131] font-normal"></h1>
                            <svg x-show="selected === option" class="w-5 stroke-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                    </template>
                </div>
            </div>
        </div>
        
        <div x-data="app()" class="w-full md:w-[70%] space-y-3">
            <button @click="addmenu()" x-show="hiddenButtons" :class="{ 'block': hiddenButtons, 'hidden': !hiddenButtons }" class="flex items-center gap-2 md:gap-3 bg-white py-2 px-4 rounded md:rounded-md shadow-md shadow-[#00000014]">
                <svg class="w-[18px] md:w-5" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" y="0.5" width="25" height="25" rx="12.5" stroke="#A0A0A0" />
                    <path d="M13.4375 8.33325C13.4375 8.09163 13.2417 7.89575 13 7.89575C12.7584 7.89575 12.5625 8.09163 12.5625 8.33325L12.5625 12.5624H8.33337C8.09175 12.5624 7.89587 12.7583 7.89587 12.9999C7.89587 13.2415 8.09175 13.4374 8.33337 13.4374H12.5625V17.6666C12.5625 17.9082 12.7584 18.1041 13 18.1041C13.2417 18.1041 13.4375 17.9082 13.4375 17.6666V13.4374H17.6667C17.9083 13.4374 18.1042 13.2415 18.1042 12.9999C18.1042 12.7583 17.9083 12.5624 17.6667 12.5624H13.4375L13.4375 8.33325Z" fill="#A0A0A0" />
                </svg>
                <h1 class="text-xs md:text-sm text-gray-500 font-normal">Tambah Evaluasi</h1>
            </button>
            <form action="" method="" class="space-y-3">
                <template x-for="(menu, menuIndex) in menus" :key="menuIndex">
                    <div class="w-full space-y-3">
                        <div class="bg-white p-3 pb-5 space-y-3 rounded-md md:rounded-lg">
                            <div class="flex items-start gap-2 md:gap-3">
                                <span class="bg-[#F3F3F3] py-2 px-2.5 rounded md:rounded-md">
                                    <h1 x-text="String.fromCharCode(65 + menuIndex)" class="text-[10px] md:text-xs text-[#778294] font-normal"></h1>
                                </span>
                                <div class="w-full space-y-2">
                                    <div class="flex items-center gap-3">
                                        <input type="text" x-model="submenu.title" placeholder="Isi evaluasi" required autocomplete="off" class="transition-colors duration-500 w-full text-[10px] md:text-xs text-[#778294] focus:text-black font-normal placeholder:text-[10px] md:placeholder:text-xs focus:placeholder:text-[#778294] placeholder:font-normal bg-[#F3F3F3] py-1 md:py-2 border-none rounded md:rounded-md focus:outline-none focus:ring-0" />
                                        <button @click="addSubmenu(menu)" class="relative group flex items-center">
                                            <svg class="w-6 md:w-[26px]" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="0.5" y="0.5" width="25" height="25" rx="12.5" stroke="#A0A0A0" />
                                                <path d="M13.4375 8.33325C13.4375 8.09163 13.2417 7.89575 13 7.89575C12.7584 7.89575 12.5625 8.09163 12.5625 8.33325L12.5625 12.5624H8.33337C8.09175 12.5624 7.89587 12.7583 7.89587 12.9999C7.89587 13.2415 8.09175 13.4374 8.33337 13.4374H12.5625V17.6666C12.5625 17.9082 12.7584 18.1041 13 18.1041C13.2417 18.1041 13.4375 17.9082 13.4375 17.6666V13.4374H17.6667C17.9083 13.4374 18.1042 13.2415 18.1042 12.9999C18.1042 12.7583 17.9083 12.5624 17.6667 12.5624H13.4375L13.4375 8.33325Z" fill="#A0A0A0" />
                                            </svg>
                                            <div class="absolute left-14 w-max hidden md:group-hover:block">
                                                <div class="flex bg-white py-1.5 px-4 rounded md:rounded-md drop-shadow-md shadow-[#00000014]">
                                                    <h1 class="text-xs md:text-sm text-[#A0A0A0] font-normal">Tambah Point</h1>
                                                    <div class="absolute -z-10 inset-y-2.5 -left-2">
                                                        <svg class="w-3 fill-white" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M9.32914 0.757568L9.32914 11.034L0.42948 5.89579L9.32914 0.757568Z"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </button>
                                    </div>
            
                                    <template x-for="(submenu, submenuIndex) in menu.submenus" :key="submenuIndex">
                                        <div class="space-y-2">
                                            <label class="flex items-start gap-3 md:gap-4">
                                                <span x-text="submenuIndex + 1" class="text-[10px] md:text-xs text-[#778294] font-medium py-2.5 md:py-2"></span>
                                                <div class="w-full space-y-3">
                                                    <div class="flex items-center gap-3 md:gap-4">
                                                        <input type="text" x-model="submenu.title" placeholder="Tambahkan subpoint" required autocomplete="off" class="transition-colors duration-500 w-full text-[10px] md:text-xs text-[#778294] focus:text-black font-normal placeholder:text-[10px] md:placeholder:text-xs focus:placeholder:text-[#778294] placeholder:font-normal bg-transparent py-1.5 md:py-2 border-t-0 border-x-0 border-b border-b-black focus:border-black focus:outline-none focus:ring-0" />
                                                        <button type="button" @click="hapusSubmenu(menu, submenuIndex)" class="relative group flex items-center">
                                                            <svg class="w-3.5 cursor-pointer" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.00016 0.728516C4.46987 0.728516 3.22933 1.96906 3.22933 3.49935V3.64518H1.3335C1.09187 3.64518 0.895996 3.84106 0.895996 4.08268C0.895996 4.32431 1.09187 4.52018 1.3335 4.52018H10.6668C10.9085 4.52018 11.1043 4.32431 11.1043 4.08268C11.1043 3.84106 10.9085 3.64518 10.6668 3.64518H8.771V3.49935C8.771 1.96906 7.53045 0.728516 6.00016 0.728516ZM6.00016 1.60352C7.0472 1.60352 7.896 2.45231 7.896 3.49935V3.64518H4.10433V3.49935C4.10433 2.45231 4.95312 1.60352 6.00016 1.60352Z" fill="#FF4E4E"/>
                                                                <path d="M2.35237 5.20797C2.32951 4.96743 2.11599 4.79096 1.87545 4.81381C1.63491 4.83667 1.45844 5.05019 1.48129 5.29073C1.5364 5.87073 1.63585 6.58536 1.76369 7.50397L1.92793 8.6841C2.08494 9.8127 2.17399 10.4528 2.36663 10.9771C2.72516 11.9529 3.36469 12.7352 4.1872 13.0822C4.63384 13.2707 5.14472 13.2705 5.90527 13.2702H6.09505C6.85561 13.2705 7.36649 13.2707 7.81313 13.0822C8.63563 12.7352 9.27517 11.9529 9.63369 10.9771C9.82634 10.4527 9.91538 9.81269 10.0724 8.68407L10.2366 7.50398C10.3645 6.58537 10.4639 5.87073 10.519 5.29073C10.5419 5.05019 10.3654 4.83667 10.1249 4.81381C9.88434 4.79096 9.67081 4.96743 9.64796 5.20797C9.59486 5.76678 9.49811 6.4627 9.36854 7.39375L9.21551 8.49335C9.04603 9.71112 8.96842 10.2506 8.81237 10.6753C8.51144 11.4944 8.01103 12.049 7.47294 12.2761C7.21032 12.3869 6.89218 12.3952 6.00016 12.3952C5.10815 12.3952 4.79 12.3869 4.52738 12.2761C3.98929 12.049 3.48889 11.4944 3.18795 10.6753C3.0319 10.2506 2.95429 9.71112 2.78482 8.49335L2.63179 7.39375C2.50221 6.4627 2.40546 5.76678 2.35237 5.20797Z" fill="#FF4E4E"/>
                                                                <path d="M5.271 5.83268C5.271 5.59106 5.07512 5.39518 4.8335 5.39518C4.59187 5.39518 4.396 5.59106 4.396 5.83268V10.4993C4.396 10.741 4.59187 10.9368 4.8335 10.9368C5.07512 10.9368 5.271 10.741 5.271 10.4993V5.83268Z" fill="#FF4E4E"/>
                                                                <path d="M7.60433 5.83268C7.60433 5.59106 7.40845 5.39518 7.16683 5.39518C6.9252 5.39518 6.72933 5.59106 6.72933 5.83268V10.4993C6.72933 10.741 6.9252 10.9368 7.16683 10.9368C7.40845 10.9368 7.60433 10.741 7.60433 10.4993V5.83268Z" fill="#FF4E4E"/>
                                                            </svg>
                                                            <div class="absolute left-[5.5rem] w-max hidden md:group-hover:block">
                                                                <div class="flex bg-white py-1.5 px-4 rounded md:rounded-md drop-shadow-md shadow-[#00000014]">
                                                                    <h1 class="text-xs md:text-sm text-red-500 font-normal">Hapus Point</h1>
                                                                    <div class="absolute -z-10 inset-y-2.5 -left-2">
                                                                        <svg class="w-3 fill-white" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M9.32914 0.757568L9.32914 11.034L0.42948 5.89579L9.32914 0.757568Z"/>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                        <button @click="addSubmenu(submenu)" class="relative group flex items-center">
                                                            <svg class="w-6 md:w-[26px]" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="0.5" y="0.5" width="25" height="25" rx="12.5" stroke="#A0A0A0" />
                                                                <path d="M13.4375 8.33325C13.4375 8.09163 13.2417 7.89575 13 7.89575C12.7584 7.89575 12.5625 8.09163 12.5625 8.33325L12.5625 12.5624H8.33337C8.09175 12.5624 7.89587 12.7583 7.89587 12.9999C7.89587 13.2415 8.09175 13.4374 8.33337 13.4374H12.5625V17.6666C12.5625 17.9082 12.7584 18.1041 13 18.1041C13.2417 18.1041 13.4375 17.9082 13.4375 17.6666V13.4374H17.6667C17.9083 13.4374 18.1042 13.2415 18.1042 12.9999C18.1042 12.7583 17.9083 12.5624 17.6667 12.5624H13.4375L13.4375 8.33325Z" fill="#A0A0A0" />
                                                            </svg>
                                                            <div class="absolute left-14 w-max hidden md:group-hover:block">
                                                                <div class="flex bg-white py-1.5 px-4 rounded md:rounded-md drop-shadow-md shadow-[#00000014]">
                                                                    <h1 class="text-xs md:text-sm text-[#A0A0A0] font-normal">Tambah Point</h1>
                                                                    <div class="absolute -z-10 inset-y-2.5 -left-2">
                                                                        <svg class="w-3 fill-white" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M9.32914 0.757568L9.32914 11.034L0.42948 5.89579L9.32914 0.757568Z"/>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
            
                                                    <template x-if="submenu.submenus.length">
                                                        <template x-for="(subSubmenu, subSubmenuIndex) in submenu.submenus" :key="subSubmenuIndex">
                                                            <div class="flex items-start gap-3 md:gap-4">
                                                                <span class="text-[10px] md:text-xs text-[#778294] font-medium py-2.5 md:py-2">•</span>
                                                                <div class="w-full space-y-3">
                                                                    <div class="flex items-center gap-3 md:gap-4">
                                                                        <input type="text" x-model="subSubmenu.title" placeholder="Tambahkan subpoint" required autocomplete="off" class="transition-colors duration-500 w-full text-[10px] md:text-xs text-[#778294] focus:text-black font-normal placeholder:text-[10px] md:placeholder:text-xs focus:placeholder:text-[#778294] placeholder:font-normal bg-transparent py-1.5 md:py-2 border-t-0 border-x-0 border-b border-b-black focus:border-black focus:outline-none focus:ring-0" />
                                                                        <button type="button" @click="hapusSubmenu(submenu, subSubmenuIndex)" class="relative group flex items-center">
                                                                            <svg class="w-3.5 cursor-pointer" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.00016 0.728516C4.46987 0.728516 3.22933 1.96906 3.22933 3.49935V3.64518H1.3335C1.09187 3.64518 0.895996 3.84106 0.895996 4.08268C0.895996 4.32431 1.09187 4.52018 1.3335 4.52018H10.6668C10.9085 4.52018 11.1043 4.32431 11.1043 4.08268C11.1043 3.84106 10.9085 3.64518 10.6668 3.64518H8.771V3.49935C8.771 1.96906 7.53045 0.728516 6.00016 0.728516ZM6.00016 1.60352C7.0472 1.60352 7.896 2.45231 7.896 3.49935V3.64518H4.10433V3.49935C4.10433 2.45231 4.95312 1.60352 6.00016 1.60352Z" fill="#FF4E4E"/>
                                                                                <path d="M2.35237 5.20797C2.32951 4.96743 2.11599 4.79096 1.87545 4.81381C1.63491 4.83667 1.45844 5.05019 1.48129 5.29073C1.5364 5.87073 1.63585 6.58536 1.76369 7.50397L1.92793 8.6841C2.08494 9.8127 2.17399 10.4528 2.36663 10.9771C2.72516 11.9529 3.36469 12.7352 4.1872 13.0822C4.63384 13.2707 5.14472 13.2705 5.90527 13.2702H6.09505C6.85561 13.2705 7.36649 13.2707 7.81313 13.0822C8.63563 12.7352 9.27517 11.9529 9.63369 10.9771C9.82634 10.4527 9.91538 9.81269 10.0724 8.68407L10.2366 7.50398C10.3645 6.58537 10.4639 5.87073 10.519 5.29073C10.5419 5.05019 10.3654 4.83667 10.1249 4.81381C9.88434 4.79096 9.67081 4.96743 9.64796 5.20797C9.59486 5.76678 9.49811 6.4627 9.36854 7.39375L9.21551 8.49335C9.04603 9.71112 8.96842 10.2506 8.81237 10.6753C8.51144 11.4944 8.01103 12.049 7.47294 12.2761C7.21032 12.3869 6.89218 12.3952 6.00016 12.3952C5.10815 12.3952 4.79 12.3869 4.52738 12.2761C3.98929 12.049 3.48889 11.4944 3.18795 10.6753C3.0319 10.2506 2.95429 9.71112 2.78482 8.49335L2.63179 7.39375C2.50221 6.4627 2.40546 5.76678 2.35237 5.20797Z" fill="#FF4E4E"/>
                                                                                <path d="M5.271 5.83268C5.271 5.59106 5.07512 5.39518 4.8335 5.39518C4.59187 5.39518 4.396 5.59106 4.396 5.83268V10.4993C4.396 10.741 4.59187 10.9368 4.8335 10.9368C5.07512 10.9368 5.271 10.741 5.271 10.4993V5.83268Z" fill="#FF4E4E"/>
                                                                                <path d="M7.60433 5.83268C7.60433 5.59106 7.40845 5.39518 7.16683 5.39518C6.9252 5.39518 6.72933 5.59106 6.72933 5.83268V10.4993C6.72933 10.741 6.9252 10.9368 7.16683 10.9368C7.40845 10.9368 7.60433 10.741 7.60433 10.4993V5.83268Z" fill="#FF4E4E"/>
                                                                            </svg>
                                                                            <div class="absolute left-[5.5rem] w-max hidden md:group-hover:block">
                                                                                <div class="flex bg-white py-1.5 px-4 rounded md:rounded-md drop-shadow-md shadow-[#00000014]">
                                                                                    <h1 class="text-xs md:text-sm text-red-500 font-normal">Hapus Point</h1>
                                                                                    <div class="absolute -z-10 inset-y-2.5 -left-2">
                                                                                        <svg class="w-3 fill-white" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                            <path d="M9.32914 0.757568L9.32914 11.034L0.42948 5.89579L9.32914 0.757568Z"/>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </button>
                                                                        <button @click="addSubmenu(subSubmenu)" class="relative group flex items-center">
                                                                            <svg class="w-6 md:w-[26px]" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <rect x="0.5" y="0.5" width="25" height="25" rx="12.5" stroke="#A0A0A0" />
                                                                                <path d="M13.4375 8.33325C13.4375 8.09163 13.2417 7.89575 13 7.89575C12.7584 7.89575 12.5625 8.09163 12.5625 8.33325L12.5625 12.5624H8.33337C8.09175 12.5624 7.89587 12.7583 7.89587 12.9999C7.89587 13.2415 8.09175 13.4374 8.33337 13.4374H12.5625V17.6666C12.5625 17.9082 12.7584 18.1041 13 18.1041C13.2417 18.1041 13.4375 17.9082 13.4375 17.6666V13.4374H17.6667C17.9083 13.4374 18.1042 13.2415 18.1042 12.9999C18.1042 12.7583 17.9083 12.5624 17.6667 12.5624H13.4375L13.4375 8.33325Z" fill="#A0A0A0" />
                                                                            </svg>
                                                                            <div class="absolute left-14 w-max hidden md:group-hover:block">
                                                                                <div class="flex bg-white py-1.5 px-4 rounded md:rounded-md drop-shadow-md shadow-[#00000014]">
                                                                                    <h1 class="text-xs md:text-sm text-[#A0A0A0] font-normal">Tambah Point</h1>
                                                                                    <div class="absolute -z-10 inset-y-2.5 -left-2">
                                                                                        <svg class="w-3 fill-white" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                            <path d="M9.32914 0.757568L9.32914 11.034L0.42948 5.89579L9.32914 0.757568Z"/>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </button>
                                                                    </div>
                
                                                                    <template x-if="subSubmenu.submenus.length">
                                                                        <template x-for="(subSubSubmenu, subSubSubmenuIndex) in subSubmenu.submenus" :key="subSubSubmenuIndex">
                                                                            <div class="flex items-start gap-3 md:gap-4">
                                                                                <span class="text-[10px] md:text-xs text-[#778294] font-bold py-2.5 md:py-2">-</span>
                                                                                <div class="w-full space-y-3">
                                                                                    <div class="flex items-center gap-3 md:gap-4">
                                                                                        <input type="text" x-model="subSubSubmenu.title" placeholder="Tambahkan subpoint" required autocomplete="off" class="transition-colors duration-500 w-full text-[10px] md:text-xs text-[#778294] focus:text-black font-normal placeholder:text-[10px] md:placeholder:text-xs focus:placeholder:text-[#778294] placeholder:font-normal bg-transparent py-1.5 md:py-2 border-t-0 border-x-0 border-b border-b-black focus:border-black focus:outline-none focus:ring-0" />
                                                                                        <button type="button" @click="hapusSubmenu(subSubmenu, subSubSubmenuIndex)" class="relative group flex items-center">
                                                                                            <svg class="w-3.5 cursor-pointer" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.00016 0.728516C4.46987 0.728516 3.22933 1.96906 3.22933 3.49935V3.64518H1.3335C1.09187 3.64518 0.895996 3.84106 0.895996 4.08268C0.895996 4.32431 1.09187 4.52018 1.3335 4.52018H10.6668C10.9085 4.52018 11.1043 4.32431 11.1043 4.08268C11.1043 3.84106 10.9085 3.64518 10.6668 3.64518H8.771V3.49935C8.771 1.96906 7.53045 0.728516 6.00016 0.728516ZM6.00016 1.60352C7.0472 1.60352 7.896 2.45231 7.896 3.49935V3.64518H4.10433V3.49935C4.10433 2.45231 4.95312 1.60352 6.00016 1.60352Z" fill="#FF4E4E"/>
                                                                                                <path d="M2.35237 5.20797C2.32951 4.96743 2.11599 4.79096 1.87545 4.81381C1.63491 4.83667 1.45844 5.05019 1.48129 5.29073C1.5364 5.87073 1.63585 6.58536 1.76369 7.50397L1.92793 8.6841C2.08494 9.8127 2.17399 10.4528 2.36663 10.9771C2.72516 11.9529 3.36469 12.7352 4.1872 13.0822C4.63384 13.2707 5.14472 13.2705 5.90527 13.2702H6.09505C6.85561 13.2705 7.36649 13.2707 7.81313 13.0822C8.63563 12.7352 9.27517 11.9529 9.63369 10.9771C9.82634 10.4527 9.91538 9.81269 10.0724 8.68407L10.2366 7.50398C10.3645 6.58537 10.4639 5.87073 10.519 5.29073C10.5419 5.05019 10.3654 4.83667 10.1249 4.81381C9.88434 4.79096 9.67081 4.96743 9.64796 5.20797C9.59486 5.76678 9.49811 6.4627 9.36854 7.39375L9.21551 8.49335C9.04603 9.71112 8.96842 10.2506 8.81237 10.6753C8.51144 11.4944 8.01103 12.049 7.47294 12.2761C7.21032 12.3869 6.89218 12.3952 6.00016 12.3952C5.10815 12.3952 4.79 12.3869 4.52738 12.2761C3.98929 12.049 3.48889 11.4944 3.18795 10.6753C3.0319 10.2506 2.95429 9.71112 2.78482 8.49335L2.63179 7.39375C2.50221 6.4627 2.40546 5.76678 2.35237 5.20797Z" fill="#FF4E4E"/>
                                                                                                <path d="M5.271 5.83268C5.271 5.59106 5.07512 5.39518 4.8335 5.39518C4.59187 5.39518 4.396 5.59106 4.396 5.83268V10.4993C4.396 10.741 4.59187 10.9368 4.8335 10.9368C5.07512 10.9368 5.271 10.741 5.271 10.4993V5.83268Z" fill="#FF4E4E"/>
                                                                                                <path d="M7.60433 5.83268C7.60433 5.59106 7.40845 5.39518 7.16683 5.39518C6.9252 5.39518 6.72933 5.59106 6.72933 5.83268V10.4993C6.72933 10.741 6.9252 10.9368 7.16683 10.9368C7.40845 10.9368 7.60433 10.741 7.60433 10.4993V5.83268Z" fill="#FF4E4E"/>
                                                                                            </svg>
                                                                                            <div class="absolute left-[5.5rem] w-max hidden md:group-hover:block">
                                                                                                <div class="flex bg-white py-1.5 px-4 rounded md:rounded-md drop-shadow-md shadow-[#00000014]">
                                                                                                    <h1 class="text-xs md:text-sm text-red-500 font-normal">Hapus Point</h1>
                                                                                                    <div class="absolute -z-10 inset-y-2.5 -left-2">
                                                                                                        <svg class="w-3 fill-white" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                            <path d="M9.32914 0.757568L9.32914 11.034L0.42948 5.89579L9.32914 0.757568Z"/>
                                                                                                        </svg>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </button>
                                                                                        <button class="invisible">
                                                                                            <svg class="w-6 md:w-[26px]" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                <rect x="0.5" y="0.5" width="25" height="25" rx="12.5" stroke="#A0A0A0" />
                                                                                                <path d="M13.4375 8.33325C13.4375 8.09163 13.2417 7.89575 13 7.89575C12.7584 7.89575 12.5625 8.09163 12.5625 8.33325L12.5625 12.5624H8.33337C8.09175 12.5624 7.89587 12.7583 7.89587 12.9999C7.89587 13.2415 8.09175 13.4374 8.33337 13.4374H12.5625V17.6666C12.5625 17.9082 12.7584 18.1041 13 18.1041C13.2417 18.1041 13.4375 17.9082 13.4375 17.6666V13.4374H17.6667C17.9083 13.4374 18.1042 13.2415 18.1042 12.9999C18.1042 12.7583 17.9083 12.5624 17.6667 12.5624H13.4375L13.4375 8.33325Z" fill="#A0A0A0" />
                                                                                            </svg>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </template>
                                                                    </template>
                                                                </div>
                                                            </div>
                                                        </template>
                                                    </template>
                                                </div>
                                            </label>
                                        </div>
                                    </template>
                                </div>
                            </div>
                            <hr class="h-px border-b border-b-[#C0C0C0]">
                            <div class="flex justify-end items-center mx-1.5 gap-2 md:gap-3">
                                <button @click="hapus(menuIndex)" class="relative group flex items-center">
                                    <svg class="w-3.5 cursor-pointer" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.00016 0.728516C4.46987 0.728516 3.22933 1.96906 3.22933 3.49935V3.64518H1.3335C1.09187 3.64518 0.895996 3.84106 0.895996 4.08268C0.895996 4.32431 1.09187 4.52018 1.3335 4.52018H10.6668C10.9085 4.52018 11.1043 4.32431 11.1043 4.08268C11.1043 3.84106 10.9085 3.64518 10.6668 3.64518H8.771V3.49935C8.771 1.96906 7.53045 0.728516 6.00016 0.728516ZM6.00016 1.60352C7.0472 1.60352 7.896 2.45231 7.896 3.49935V3.64518H4.10433V3.49935C4.10433 2.45231 4.95312 1.60352 6.00016 1.60352Z" fill="#FF4E4E"/>
                                        <path d="M2.35237 5.20797C2.32951 4.96743 2.11599 4.79096 1.87545 4.81381C1.63491 4.83667 1.45844 5.05019 1.48129 5.29073C1.5364 5.87073 1.63585 6.58536 1.76369 7.50397L1.92793 8.6841C2.08494 9.8127 2.17399 10.4528 2.36663 10.9771C2.72516 11.9529 3.36469 12.7352 4.1872 13.0822C4.63384 13.2707 5.14472 13.2705 5.90527 13.2702H6.09505C6.85561 13.2705 7.36649 13.2707 7.81313 13.0822C8.63563 12.7352 9.27517 11.9529 9.63369 10.9771C9.82634 10.4527 9.91538 9.81269 10.0724 8.68407L10.2366 7.50398C10.3645 6.58537 10.4639 5.87073 10.519 5.29073C10.5419 5.05019 10.3654 4.83667 10.1249 4.81381C9.88434 4.79096 9.67081 4.96743 9.64796 5.20797C9.59486 5.76678 9.49811 6.4627 9.36854 7.39375L9.21551 8.49335C9.04603 9.71112 8.96842 10.2506 8.81237 10.6753C8.51144 11.4944 8.01103 12.049 7.47294 12.2761C7.21032 12.3869 6.89218 12.3952 6.00016 12.3952C5.10815 12.3952 4.79 12.3869 4.52738 12.2761C3.98929 12.049 3.48889 11.4944 3.18795 10.6753C3.0319 10.2506 2.95429 9.71112 2.78482 8.49335L2.63179 7.39375C2.50221 6.4627 2.40546 5.76678 2.35237 5.20797Z" fill="#FF4E4E"/>
                                        <path d="M5.271 5.83268C5.271 5.59106 5.07512 5.39518 4.8335 5.39518C4.59187 5.39518 4.396 5.59106 4.396 5.83268V10.4993C4.396 10.741 4.59187 10.9368 4.8335 10.9368C5.07512 10.9368 5.271 10.741 5.271 10.4993V5.83268Z" fill="#FF4E4E"/>
                                        <path d="M7.60433 5.83268C7.60433 5.59106 7.40845 5.39518 7.16683 5.39518C6.9252 5.39518 6.72933 5.59106 6.72933 5.83268V10.4993C6.72933 10.741 6.9252 10.9368 7.16683 10.9368C7.40845 10.9368 7.60433 10.741 7.60433 10.4993V5.83268Z" fill="#FF4E4E"/>
                                    </svg>
                                    <div class="absolute left-14 w-max hidden md:group-hover:block">
                                        <div class="flex bg-white py-1.5 px-4 rounded md:rounded-md drop-shadow-md shadow-[#00000014]">
                                            <h1 class="text-xs md:text-sm text-red-500 font-normal">Hapus Evaluasi</h1>
                                            <div class="absolute -z-10 inset-y-2.5 -left-2">
                                                <svg class="w-3 fill-white" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.32914 0.757568L9.32914 11.034L0.42948 5.89579L9.32914 0.757568Z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </template>
                <div x-show="showButtons" :class="{ 'visible': showButtons, 'invisible': !showButtons }" class="invisible flex justify-end items-center gap-2 md:gap-3">
                    <div x-data="{ modal : false }">
                        <button type="button" @click="modal = !modal" class="bg-[#FF4E4E] py-1.5 px-4 rounded md:rounded-md">
                            <h1 class="text-[10px] md:text-xs text-white font-medium">Batal</h1>
                        </button>
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
                                    <h1 class="text-center text-sm md:text-base text-black font-normal">Anda belum menyimpan Form Evaluasi. Yakin ingin membatalkan ?</h1>
                                    <div class="flex justify-center items-center gap-2 md:gap-3">
                                        <button type="button" @click="modal = false" class="bg-[#FF4E4E] py-1.5 px-4 md:px-5 rounded">
                                            <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Batal</h1>
                                        </button>
                                        <button type="button" @click="() => { hapusAll(); modal = false; }" @click="modal = false" class="bg-primary py-1.5 px-4 md:px-5 rounded">
                                            <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Yakin</h1>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div x-data="{ modal : false }">
                        <button type="button" @click="modal = !modal" class="bg-primary py-1.5 px-4 rounded md:rounded-md">
                            <h1 class="text-[10px] md:text-xs text-white font-medium">Simpan</h1>
                        </button>
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
                                    <h1 class="text-center text-sm md:text-base text-black font-normal">Apakah Form Evaluasi sudah benar ?</h1>
                                    <div class="flex justify-center items-center gap-2 md:gap-3">
                                        <button type="button" @click="modal = false" class="bg-[#FF4E4E] py-1.5 px-4 md:px-5 rounded">
                                            <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Periksa</h1>
                                        </button>
                                        <button type="submit" @click="modal = false" class="bg-primary py-1.5 px-4 md:px-5 rounded">
                                            <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Simpan</h1>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button @click="addmenu()" class="bg-white py-1.5 px-4 rounded md:rounded-md">
                        <h1 class="text-[10px] md:text-xs text-gray-500 font-normal">Tambah Evaluasi</h1>
                    </button>
                </div>
            </form>
        </div>
    </main>
</div>