<div x-show="window.innerWidth < 640 && isOpen" x-transition.opacity :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden fixed inset-0 bg-zinc-800 bg-opacity-80 z-40"></div>
<div x-data="{ isOpenn : true }">
    <?php include_once("../pmd/layout/sidebar.php"); ?>

    <main :class="isOpenn ? 'md:ml-60' : 'md:ml-20 ' + 'transition-all duration-500'" class="relative md:ml-60 pt-16 p-5 space-y-5">
        <div class="flex justify-between items-center">
            <h1 class="text-base md:text-lg lg:text-xl text-black font-medium">Recovery</h1>
            <h1 class="text-xs md:text-sm text-black font-medium"><span class="text-[#615EFC] font-medium">Home</span> / Recovery</h1>
        </div>

        <section class="space-y-3">
            <section class="w-fit">
                <div class="flex items-center bg-white rounded md:rounded-md shadow-md shadow-black/5">
                    <label for="search" class="flex items-center ml-5 cursor-pointer">
                        <svg class="w-[18px] md:w-5 stroke-[1.5] stroke-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 6C13.7614 6 16 8.23858 16 11M16.6588 16.6549L21 21M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" stroke-linecap="round"/>
                        </svg>
                    </label>
                    <input type="search" id="search" placeholder="Searching" autocomplete="off" class="w-full bg-transparent border-none text-xs md:text-sm text-gray-500 font-normal focus:outline-none focus:ring-0 placeholder:text-xs md:placeholder:text-sm placeholder:text-gray-500 placeholder:font-medium">
                </div>
            </section>

            <section class="scrollbar-x bg-transparent rounded md:rounded-md shadow-md shadow-black/5">
                <table class="w-max lg:w-full mx-auto bg-white text-center table-auto">
                    <tr class="text-[10px] md:text-xs text-black capitalize">
                        <th class="w-[5%] bg-white font-normal py-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">No</th>
                        <th class="w-[30%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Avatar</th>
                        <th class="w-[15%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Username</th>
                        <th class="w-[20%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Jabatan</th>
                        <th class="w-[20%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">No. Hp</th>
                        <th class="w-[15%] bg-white font-normal p-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">Tindakan</th>
                    </tr>
                    <tr class="odd:bg-white even:bg-[#E8EDF2] text-xs text-black/70 capitalize overflow-visible">
                        <td class="font-normal my-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">1</td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                            <img class="w-6 lg:w-7 h-6 lg:h-7 bg-transparent object-cover rounded-full mx-auto" src="/images/avatar.jpg">
                        </td>
                        <td class="py-3.5 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                            <h1 class="line-clamp-1 font-normal">Rizky Rahman Rambe</h1>
                        </td>
                        <td class="py-3.5 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                            <h1 class="line-clamp-1 font-normal">Kepala Staff</h1>
                        </td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">082363838328</td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                            <div x-data="{ modal: false }">
                                <button type="button" @click="modal = !modal" class="flex items-center gap-2 w-fit bg-[#FA6D09] py-1.5 px-2 rounded-md mx-auto">
                                    <h1 class="text-[#E8EDF2] font-normal">PulihkanAkun</h1>
                                    <svg class="w-2.5 fill-white" viewBox="0 0 12 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.825 12.0375C0.55 11.5625 0.34375 11.075 0.20625 10.575C0.06875 10.075 0 9.5625 0 9.0375C0 7.3625 0.58125 5.9375 1.74375 4.7625C2.90625 3.5875 4.325 3 6 3H6.13125L4.93125 1.8L5.98125 0.75L8.98125 3.75L5.98125 6.75L4.93125 5.7L6.13125 4.5H6C4.75 4.5 3.6875 4.94063 2.8125 5.82188C1.9375 6.70313 1.5 7.775 1.5 9.0375C1.5 9.3625 1.5375 9.68125 1.6125 9.99375C1.6875 10.3062 1.8 10.6125 1.95 10.9125L0.825 12.0375ZM6.01875 17.25L3.01875 14.25L6.01875 11.25L7.06875 12.3L5.86875 13.5H6C7.25 13.5 8.3125 13.0594 9.1875 12.1781C10.0625 11.2969 10.5 10.225 10.5 8.9625C10.5 8.6375 10.4625 8.31875 10.3875 8.00625C10.3125 7.69375 10.2 7.3875 10.05 7.0875L11.175 5.9625C11.45 6.4375 11.6562 6.925 11.7938 7.425C11.9313 7.925 12 8.4375 12 8.9625C12 10.6375 11.4187 12.0625 10.2563 13.2375C9.09375 14.4125 7.675 15 6 15H5.86875L7.06875 16.2L6.01875 17.25Z"/>
                                    </svg>
                                </button>
                                <div x-show="modal" x-transition.duration.300ms.opacity.50 :class="{ 'visible': modal, 'invisible': !modal }" class="invisible fixed inset-0 z-50 bg-[#0000006E] flex items-center justify-center h-screen">
                                    <div class="w-[80%] sm:w-[60%] md:w-[40%] lg:w-[30%] bg-white rounded-lg md:rounded-xl">
                                        <div class="flex justify-between items-center border-b border-[#D1D1D1] py-2.5 px-3">
                                            <div class=""></div>
                                            <h1 class="text-sm md:text-base text-black font-semibold">Pulihkan Akun</h1>
                                            <button type="button" @click="modal = false" type="button" class="bg-[#E8E8E8] p-2 rounded-full">
                                                <svg class="w-3 fill-[#8B8B8B]" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.0204 1.68705C11.2157 1.49179 11.2157 1.1752 11.0204 0.979943C10.8251 0.784681 10.5086 0.784681 10.3133 0.979943L6.00017 5.29307L1.68705 0.979945C1.49179 0.784683 1.1752 0.784683 0.979943 0.979945C0.784681 1.17521 0.784681 1.49179 0.979943 1.68705L5.29306 6.00017L0.979961 10.3133C0.784699 10.5085 0.784699 10.8251 0.979961 11.0204C1.17522 11.2156 1.49181 11.2156 1.68707 11.0204L6.00017 6.70728L10.3133 11.0204C10.5085 11.2156 10.8251 11.2156 11.0204 11.0204C11.2156 10.8251 11.2156 10.5085 11.0204 10.3133L6.70728 6.00017L11.0204 1.68705Z"/>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="pt-2.5 pb-3.5 px-5 space-y-8">
                                            
                                            <form x-data="{ username: '', password: '', konfirmasi: '', cekPassword: false, }" class="w-full bg-transparent space-y-5 md:space-y-6 rounded md:rounded-md">
                                                <div class="grid gap-y-2 text-start">
                                                    <label x-data="{ preview : false }" class="grid gap-1">
                                                        <div class="relative peer order-2 flex justify-between items-center">
                                                            <input x-model="username" placeholder="" required autocomplete="off" class="transition-colors duration-500 w-full text-[10px] md:text-xs text-[#ABABAB] focus:text-black font-normal placeholder:text-[10px] md:placeholder:text-xs focus:placeholder:text-black placeholder:font-normal bg-transparent px-5 py-1.5 md:py-2 border border-[#ABABAB] focus:border-black rounded-md focus:outline-none focus:ring-0"/>
                                                        </div>
                                                        <h1 class="order-1 mx-1 text-xs md:text-sm text-black font-medium capitalize">Username</h1>
                                                    </label>
                                                    <label x-data="{ preview : false, chars : 0 }" class="grid gap-1">
                                                        <div class="relative peer order-2 flex justify-between items-center">
                                                            <input x-model="password" :type="preview ? 'text' : 'password'" @keyup="chars = 0 + $refs.username.value.length" x-ref="username" maxlength="8" placeholder="Password minimal 8 karakter" required autocomplete="off" class="peer order-2 transition-colors duration-500 w-full text-[10px] md:text-xs text-[#ABABAB] focus:text-black font-normal placeholder:text-[10px] md:placeholder:text-xs focus:placeholder:text-black placeholder:font-normal bg-transparent px-5 py-1.5 md:py-2 border border-[#ABABAB] focus:border-black rounded-md focus:outline-none focus:ring-0"/>
                                                            <div @click="preview = !preview" class="absolute right-5">
                                                                <svg x-show="!preview" class="w-5 fill-[#2D264B] cursor-pointer" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M8.75 9C8.75 7.75736 9.75736 6.75 11 6.75C12.2426 6.75 13.25 7.75736 13.25 9C13.25 10.2426 12.2426 11.25 11 11.25C9.75736 11.25 8.75 10.2426 8.75 9Z"/>
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.35173 2.59572C6.92325 1.30899 8.85905 0.25 11 0.25C13.141 0.25 15.0768 1.30899 16.6483 2.59572C18.2284 3.88946 19.5204 5.47865 20.3886 6.68801L20.4602 6.78759C20.9829 7.51384 21.4131 8.11166 21.4131 9C21.4131 9.88835 20.9829 10.4862 20.4602 11.2124L20.3886 11.312C19.5204 12.5214 18.2284 14.1105 16.6483 15.4043C15.0768 16.691 13.141 17.75 11 17.75C8.85905 17.75 6.92325 16.691 5.35173 15.4043C3.77164 14.1105 2.47962 12.5214 1.61142 11.312L1.53981 11.2124C1.01715 10.4862 0.586914 9.88834 0.586914 9C0.586914 8.11166 1.01715 7.51384 1.53981 6.78759L1.61142 6.68801C2.47962 5.47865 3.77164 3.88946 5.35173 2.59572ZM11 5.25C8.92893 5.25 7.25 6.92893 7.25 9C7.25 11.0711 8.92893 12.75 11 12.75C13.0711 12.75 14.75 11.0711 14.75 9C14.75 6.92893 13.0711 5.25 11 5.25Z"/>
                                                                </svg>
                                                                <svg x-show="preview" class="w-5 fill-[#2D264B] cursor-pointer" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22.4685 4.58565C22.7919 4.32689 22.8444 3.85492 22.5856 3.53148C22.3269 3.20803 21.8549 3.15559 21.5314 3.41435L18.2061 6.0746C18.0245 5.91148 17.8385 5.75145 17.6482 5.59571C16.0767 4.30899 14.1409 3.25 12 3.25C9.85902 3.25 7.92322 4.30899 6.3517 5.59571C4.7716 6.88946 3.47959 8.47865 2.61138 9.68801L2.53978 9.78759C2.01712 10.5138 1.58688 11.1117 1.58688 12C1.58688 12.8883 2.01712 13.4862 2.53978 14.2124L2.61138 14.312C3.15604 15.0707 3.86748 15.9788 4.71221 16.8697L1.53145 19.4143C1.208 19.6731 1.15556 20.1451 1.41431 20.4685C1.67307 20.792 2.14504 20.8444 2.46849 20.5856L22.4685 4.58565ZM8.66172 13.7101L9.87446 12.7399C9.7938 12.5082 9.74997 12.2592 9.74997 12C9.74997 10.7574 10.7573 9.75 12 9.75C12.4362 9.75 12.8434 9.87412 13.1882 10.089L14.4006 9.11901C13.7502 8.57644 12.9132 8.25 12 8.25C9.9289 8.25 8.24997 9.92893 8.24997 12C8.24997 12.616 8.39851 13.1974 8.66172 13.7101Z"/>
                                                                    <path d="M20.6951 8.76481L15.6672 12.7871C15.3056 14.4803 13.801 15.75 12 15.75L11.9639 15.7498L7.54799 19.2825C8.8673 20.1396 10.3745 20.75 12 20.75C14.1409 20.75 16.0767 19.691 17.6482 18.4043C19.2283 17.1105 20.5204 15.5213 21.3886 14.312L21.4602 14.2124C21.9828 13.4862 22.4131 12.8883 22.4131 12C22.4131 11.1117 21.9828 10.5138 21.4602 9.78759L21.3886 9.68801C21.181 9.39891 20.9492 9.0881 20.6951 8.76481Z"/>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <h1 class="order-1 mx-1 text-xs md:text-sm text-black font-medium capitalize">Password</h1>
                                                        <h1 x-text="chars + ' Karakter'" class="order-3 mx-1 text-[10px] md:text-xs text-gray-500 font-medium capitalize"></h1>
                                                    </label>
                                                    <label x-data="{ preview : false, chars : 0 }" class="grid gap-1">
                                                        <div class="relative peer order-2 flex justify-between items-center">
                                                            <input x-model="konfirmasi" :class="cekPassword ? 'border-red-500' : 'border-[#ABABAB]'" :type="preview ? 'text' : 'password'" @keyup="chars = 0 + $refs.username.value.length" x-ref="username" maxlength="8" placeholder="Password minimal 8 karakter" required autocomplete="off" class="peer order-2 transition-colors duration-500 w-full text-[10px] md:text-xs text-[#ABABAB] focus:text-black font-normal placeholder:text-[10px] md:placeholder:text-xs focus:placeholder:text-black placeholder:font-normal bg-transparent px-5 py-1.5 md:py-2 border border-[#ABABAB] focus:border-black rounded-md focus:outline-none focus:ring-0"/>
                                                            <div @click="preview = !preview" class="absolute right-5">
                                                                <svg x-show="!preview" class="w-5 fill-[#2D264B] cursor-pointer" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M8.75 9C8.75 7.75736 9.75736 6.75 11 6.75C12.2426 6.75 13.25 7.75736 13.25 9C13.25 10.2426 12.2426 11.25 11 11.25C9.75736 11.25 8.75 10.2426 8.75 9Z"/>
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.35173 2.59572C6.92325 1.30899 8.85905 0.25 11 0.25C13.141 0.25 15.0768 1.30899 16.6483 2.59572C18.2284 3.88946 19.5204 5.47865 20.3886 6.68801L20.4602 6.78759C20.9829 7.51384 21.4131 8.11166 21.4131 9C21.4131 9.88835 20.9829 10.4862 20.4602 11.2124L20.3886 11.312C19.5204 12.5214 18.2284 14.1105 16.6483 15.4043C15.0768 16.691 13.141 17.75 11 17.75C8.85905 17.75 6.92325 16.691 5.35173 15.4043C3.77164 14.1105 2.47962 12.5214 1.61142 11.312L1.53981 11.2124C1.01715 10.4862 0.586914 9.88834 0.586914 9C0.586914 8.11166 1.01715 7.51384 1.53981 6.78759L1.61142 6.68801C2.47962 5.47865 3.77164 3.88946 5.35173 2.59572ZM11 5.25C8.92893 5.25 7.25 6.92893 7.25 9C7.25 11.0711 8.92893 12.75 11 12.75C13.0711 12.75 14.75 11.0711 14.75 9C14.75 6.92893 13.0711 5.25 11 5.25Z"/>
                                                                </svg>
                                                                <svg x-show="preview" class="w-5 fill-[#2D264B] cursor-pointer" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22.4685 4.58565C22.7919 4.32689 22.8444 3.85492 22.5856 3.53148C22.3269 3.20803 21.8549 3.15559 21.5314 3.41435L18.2061 6.0746C18.0245 5.91148 17.8385 5.75145 17.6482 5.59571C16.0767 4.30899 14.1409 3.25 12 3.25C9.85902 3.25 7.92322 4.30899 6.3517 5.59571C4.7716 6.88946 3.47959 8.47865 2.61138 9.68801L2.53978 9.78759C2.01712 10.5138 1.58688 11.1117 1.58688 12C1.58688 12.8883 2.01712 13.4862 2.53978 14.2124L2.61138 14.312C3.15604 15.0707 3.86748 15.9788 4.71221 16.8697L1.53145 19.4143C1.208 19.6731 1.15556 20.1451 1.41431 20.4685C1.67307 20.792 2.14504 20.8444 2.46849 20.5856L22.4685 4.58565ZM8.66172 13.7101L9.87446 12.7399C9.7938 12.5082 9.74997 12.2592 9.74997 12C9.74997 10.7574 10.7573 9.75 12 9.75C12.4362 9.75 12.8434 9.87412 13.1882 10.089L14.4006 9.11901C13.7502 8.57644 12.9132 8.25 12 8.25C9.9289 8.25 8.24997 9.92893 8.24997 12C8.24997 12.616 8.39851 13.1974 8.66172 13.7101Z"/>
                                                                    <path d="M20.6951 8.76481L15.6672 12.7871C15.3056 14.4803 13.801 15.75 12 15.75L11.9639 15.7498L7.54799 19.2825C8.8673 20.1396 10.3745 20.75 12 20.75C14.1409 20.75 16.0767 19.691 17.6482 18.4043C19.2283 17.1105 20.5204 15.5213 21.3886 14.312L21.4602 14.2124C21.9828 13.4862 22.4131 12.8883 22.4131 12C22.4131 11.1117 21.9828 10.5138 21.4602 9.78759L21.3886 9.68801C21.181 9.39891 20.9492 9.0881 20.6951 8.76481Z"/>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <h1 class="order-1 mx-1 text-xs md:text-sm text-black font-medium capitalize">Konfirmasi Password</h1>
                                                        <h1 x-text="chars + ' Karakter'" class="order-3 mx-1 text-[10px] md:text-xs text-gray-500 font-medium capitalize"></h1>
                                                        <h1 x-show="cekPassword" class="order-3 mx-1 text-[10px] md:text-xs text-red-500 font-medium">Password tidak sesuai. Mohon sesuaikan konfirmasi password dengan password baru</h1>
                                                    </label>
                                                </div>

                                                <div class="flex justify-center items-center gap-2 md:gap-3">
                                                    <button type="button" @click="modal = false" class="bg-[#FF4E4E] py-1.5 px-4 md:px-5 rounded">
                                                        <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Batal</h1>
                                                    </button>
                                                    <div x-data="{ modal : false }">
                                                        <button type="button" @click="if (password === konfirmasi) { modal = !modal; cekPassword = false; } else { cekPassword = true; }" :class="{ 'bg-[#615EFC] text-white cursor-pointer' : username && password && konfirmasi, 'bg-[#979696] text-[#6A6A6A] cursor-not-allowed' : !(username && password && konfirmasi) }" :disabled="!(passwordLama && password && konfirmasi)" class="py-1.5 px-4 md:px-5 rounded transition-colors duration-500">
                                                            <h1 class="text-[10px] md:text-xs font-medium uppercase">Simpan</h1>
                                                        </button>
                                                        <div x-show="modal" x-transition.duration.300ms.opacity.50 class="fixed inset-0 z-50 bg-[#0000006E] flex items-center justify-center h-screen">
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
                                                                    <h1 class="text-center text-sm md:text-base text-black font-normal">Apakah password sudah benar ?</h1>
                                                                    <div class="flex justify-center items-center gap-2 md:gap-3">
                                                                        <button type="button" @click="modal = false" class="bg-[#FF4E4E] py-1.5 px-4 md:px-5 rounded">
                                                                            <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Periksa</h1>
                                                                        </button>
                                                                        <button class="bg-[#615EFC] py-1.5 px-4 md:px-5 rounded">
                                                                            <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Simpan</h1>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-[#E8EDF2] text-xs text-black/70 capitalize overflow-visible">
                        <td class="font-normal my-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">2</td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                            <img class="w-6 lg:w-7 h-6 lg:h-7 bg-transparent object-cover rounded-full mx-auto" src="/images/avatar.jpg">
                        </td>
                        <td class="py-3.5 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                            <h1 class="line-clamp-1 font-normal">Rizky Rahman Rambe</h1>
                        </td>
                        <td class="py-3.5 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                            <h1 class="line-clamp-1 font-normal">Kepala Staff</h1>
                        </td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">082363838328</td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                            <div x-data="{ modal: false }">
                                <button type="button" @click="modal = !modal" class="flex items-center gap-2 w-fit bg-[#FA6D09] py-1.5 px-2 rounded-md mx-auto">
                                    <h1 class="text-[#E8EDF2] font-normal">PulihkanAkun</h1>
                                    <svg class="w-2.5 fill-white" viewBox="0 0 12 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.825 12.0375C0.55 11.5625 0.34375 11.075 0.20625 10.575C0.06875 10.075 0 9.5625 0 9.0375C0 7.3625 0.58125 5.9375 1.74375 4.7625C2.90625 3.5875 4.325 3 6 3H6.13125L4.93125 1.8L5.98125 0.75L8.98125 3.75L5.98125 6.75L4.93125 5.7L6.13125 4.5H6C4.75 4.5 3.6875 4.94063 2.8125 5.82188C1.9375 6.70313 1.5 7.775 1.5 9.0375C1.5 9.3625 1.5375 9.68125 1.6125 9.99375C1.6875 10.3062 1.8 10.6125 1.95 10.9125L0.825 12.0375ZM6.01875 17.25L3.01875 14.25L6.01875 11.25L7.06875 12.3L5.86875 13.5H6C7.25 13.5 8.3125 13.0594 9.1875 12.1781C10.0625 11.2969 10.5 10.225 10.5 8.9625C10.5 8.6375 10.4625 8.31875 10.3875 8.00625C10.3125 7.69375 10.2 7.3875 10.05 7.0875L11.175 5.9625C11.45 6.4375 11.6562 6.925 11.7938 7.425C11.9313 7.925 12 8.4375 12 8.9625C12 10.6375 11.4187 12.0625 10.2563 13.2375C9.09375 14.4125 7.675 15 6 15H5.86875L7.06875 16.2L6.01875 17.25Z"/>
                                    </svg>
                                </button>
                                <div x-show="modal" x-transition.duration.300ms.opacity.50 :class="{ 'visible': modal, 'invisible': !modal }" class="invisible fixed inset-0 z-50 bg-[#0000006E] flex items-center justify-center h-screen">
                                    <div class="w-[80%] sm:w-[60%] md:w-[40%] lg:w-[30%] bg-white rounded-lg md:rounded-xl">
                                        <div class="flex justify-between items-center border-b border-[#D1D1D1] py-2.5 px-3">
                                            <div class=""></div>
                                            <h1 class="text-sm md:text-base text-black font-semibold">Pulihkan Akun</h1>
                                            <button type="button" @click="modal = false" type="button" class="bg-[#E8E8E8] p-2 rounded-full">
                                                <svg class="w-3 fill-[#8B8B8B]" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.0204 1.68705C11.2157 1.49179 11.2157 1.1752 11.0204 0.979943C10.8251 0.784681 10.5086 0.784681 10.3133 0.979943L6.00017 5.29307L1.68705 0.979945C1.49179 0.784683 1.1752 0.784683 0.979943 0.979945C0.784681 1.17521 0.784681 1.49179 0.979943 1.68705L5.29306 6.00017L0.979961 10.3133C0.784699 10.5085 0.784699 10.8251 0.979961 11.0204C1.17522 11.2156 1.49181 11.2156 1.68707 11.0204L6.00017 6.70728L10.3133 11.0204C10.5085 11.2156 10.8251 11.2156 11.0204 11.0204C11.2156 10.8251 11.2156 10.5085 11.0204 10.3133L6.70728 6.00017L11.0204 1.68705Z"/>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="pt-2.5 pb-3.5 px-5 space-y-8">
                                            
                                            <form x-data="{ username: '', password: '', konfirmasi: '', cekPassword: false, }" class="w-full bg-transparent space-y-5 md:space-y-6 rounded md:rounded-md">
                                                <div class="grid gap-y-2 text-start">
                                                    <label x-data="{ preview : false }" class="grid gap-1">
                                                        <div class="relative peer order-2 flex justify-between items-center">
                                                            <input x-model="username" placeholder="" required autocomplete="off" class="transition-colors duration-500 w-full text-[10px] md:text-xs text-[#ABABAB] focus:text-black font-normal placeholder:text-[10px] md:placeholder:text-xs focus:placeholder:text-black placeholder:font-normal bg-transparent px-5 py-1.5 md:py-2 border border-[#ABABAB] focus:border-black rounded-md focus:outline-none focus:ring-0"/>
                                                        </div>
                                                        <h1 class="order-1 mx-1 text-xs md:text-sm text-black font-medium capitalize">Username</h1>
                                                    </label>
                                                    <label x-data="{ preview : false, chars : 0 }" class="grid gap-1">
                                                        <div class="relative peer order-2 flex justify-between items-center">
                                                            <input x-model="password" :type="preview ? 'text' : 'password'" @keyup="chars = 0 + $refs.username.value.length" x-ref="username" maxlength="8" placeholder="Password minimal 8 karakter" required autocomplete="off" class="peer order-2 transition-colors duration-500 w-full text-[10px] md:text-xs text-[#ABABAB] focus:text-black font-normal placeholder:text-[10px] md:placeholder:text-xs focus:placeholder:text-black placeholder:font-normal bg-transparent px-5 py-1.5 md:py-2 border border-[#ABABAB] focus:border-black rounded-md focus:outline-none focus:ring-0"/>
                                                            <div @click="preview = !preview" class="absolute right-5">
                                                                <svg x-show="!preview" class="w-5 fill-[#2D264B] cursor-pointer" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M8.75 9C8.75 7.75736 9.75736 6.75 11 6.75C12.2426 6.75 13.25 7.75736 13.25 9C13.25 10.2426 12.2426 11.25 11 11.25C9.75736 11.25 8.75 10.2426 8.75 9Z"/>
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.35173 2.59572C6.92325 1.30899 8.85905 0.25 11 0.25C13.141 0.25 15.0768 1.30899 16.6483 2.59572C18.2284 3.88946 19.5204 5.47865 20.3886 6.68801L20.4602 6.78759C20.9829 7.51384 21.4131 8.11166 21.4131 9C21.4131 9.88835 20.9829 10.4862 20.4602 11.2124L20.3886 11.312C19.5204 12.5214 18.2284 14.1105 16.6483 15.4043C15.0768 16.691 13.141 17.75 11 17.75C8.85905 17.75 6.92325 16.691 5.35173 15.4043C3.77164 14.1105 2.47962 12.5214 1.61142 11.312L1.53981 11.2124C1.01715 10.4862 0.586914 9.88834 0.586914 9C0.586914 8.11166 1.01715 7.51384 1.53981 6.78759L1.61142 6.68801C2.47962 5.47865 3.77164 3.88946 5.35173 2.59572ZM11 5.25C8.92893 5.25 7.25 6.92893 7.25 9C7.25 11.0711 8.92893 12.75 11 12.75C13.0711 12.75 14.75 11.0711 14.75 9C14.75 6.92893 13.0711 5.25 11 5.25Z"/>
                                                                </svg>
                                                                <svg x-show="preview" class="w-5 fill-[#2D264B] cursor-pointer" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22.4685 4.58565C22.7919 4.32689 22.8444 3.85492 22.5856 3.53148C22.3269 3.20803 21.8549 3.15559 21.5314 3.41435L18.2061 6.0746C18.0245 5.91148 17.8385 5.75145 17.6482 5.59571C16.0767 4.30899 14.1409 3.25 12 3.25C9.85902 3.25 7.92322 4.30899 6.3517 5.59571C4.7716 6.88946 3.47959 8.47865 2.61138 9.68801L2.53978 9.78759C2.01712 10.5138 1.58688 11.1117 1.58688 12C1.58688 12.8883 2.01712 13.4862 2.53978 14.2124L2.61138 14.312C3.15604 15.0707 3.86748 15.9788 4.71221 16.8697L1.53145 19.4143C1.208 19.6731 1.15556 20.1451 1.41431 20.4685C1.67307 20.792 2.14504 20.8444 2.46849 20.5856L22.4685 4.58565ZM8.66172 13.7101L9.87446 12.7399C9.7938 12.5082 9.74997 12.2592 9.74997 12C9.74997 10.7574 10.7573 9.75 12 9.75C12.4362 9.75 12.8434 9.87412 13.1882 10.089L14.4006 9.11901C13.7502 8.57644 12.9132 8.25 12 8.25C9.9289 8.25 8.24997 9.92893 8.24997 12C8.24997 12.616 8.39851 13.1974 8.66172 13.7101Z"/>
                                                                    <path d="M20.6951 8.76481L15.6672 12.7871C15.3056 14.4803 13.801 15.75 12 15.75L11.9639 15.7498L7.54799 19.2825C8.8673 20.1396 10.3745 20.75 12 20.75C14.1409 20.75 16.0767 19.691 17.6482 18.4043C19.2283 17.1105 20.5204 15.5213 21.3886 14.312L21.4602 14.2124C21.9828 13.4862 22.4131 12.8883 22.4131 12C22.4131 11.1117 21.9828 10.5138 21.4602 9.78759L21.3886 9.68801C21.181 9.39891 20.9492 9.0881 20.6951 8.76481Z"/>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <h1 class="order-1 mx-1 text-xs md:text-sm text-black font-medium capitalize">Password</h1>
                                                        <h1 x-text="chars + ' Karakter'" class="order-3 mx-1 text-[10px] md:text-xs text-gray-500 font-medium capitalize"></h1>
                                                    </label>
                                                    <label x-data="{ preview : false, chars : 0 }" class="grid gap-1">
                                                        <div class="relative peer order-2 flex justify-between items-center">
                                                            <input x-model="konfirmasi" :class="cekPassword ? 'border-red-500' : 'border-[#ABABAB]'" :type="preview ? 'text' : 'password'" @keyup="chars = 0 + $refs.username.value.length" x-ref="username" maxlength="8" placeholder="Password minimal 8 karakter" required autocomplete="off" class="peer order-2 transition-colors duration-500 w-full text-[10px] md:text-xs text-[#ABABAB] focus:text-black font-normal placeholder:text-[10px] md:placeholder:text-xs focus:placeholder:text-black placeholder:font-normal bg-transparent px-5 py-1.5 md:py-2 border border-[#ABABAB] focus:border-black rounded-md focus:outline-none focus:ring-0"/>
                                                            <div @click="preview = !preview" class="absolute right-5">
                                                                <svg x-show="!preview" class="w-5 fill-[#2D264B] cursor-pointer" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M8.75 9C8.75 7.75736 9.75736 6.75 11 6.75C12.2426 6.75 13.25 7.75736 13.25 9C13.25 10.2426 12.2426 11.25 11 11.25C9.75736 11.25 8.75 10.2426 8.75 9Z"/>
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.35173 2.59572C6.92325 1.30899 8.85905 0.25 11 0.25C13.141 0.25 15.0768 1.30899 16.6483 2.59572C18.2284 3.88946 19.5204 5.47865 20.3886 6.68801L20.4602 6.78759C20.9829 7.51384 21.4131 8.11166 21.4131 9C21.4131 9.88835 20.9829 10.4862 20.4602 11.2124L20.3886 11.312C19.5204 12.5214 18.2284 14.1105 16.6483 15.4043C15.0768 16.691 13.141 17.75 11 17.75C8.85905 17.75 6.92325 16.691 5.35173 15.4043C3.77164 14.1105 2.47962 12.5214 1.61142 11.312L1.53981 11.2124C1.01715 10.4862 0.586914 9.88834 0.586914 9C0.586914 8.11166 1.01715 7.51384 1.53981 6.78759L1.61142 6.68801C2.47962 5.47865 3.77164 3.88946 5.35173 2.59572ZM11 5.25C8.92893 5.25 7.25 6.92893 7.25 9C7.25 11.0711 8.92893 12.75 11 12.75C13.0711 12.75 14.75 11.0711 14.75 9C14.75 6.92893 13.0711 5.25 11 5.25Z"/>
                                                                </svg>
                                                                <svg x-show="preview" class="w-5 fill-[#2D264B] cursor-pointer" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22.4685 4.58565C22.7919 4.32689 22.8444 3.85492 22.5856 3.53148C22.3269 3.20803 21.8549 3.15559 21.5314 3.41435L18.2061 6.0746C18.0245 5.91148 17.8385 5.75145 17.6482 5.59571C16.0767 4.30899 14.1409 3.25 12 3.25C9.85902 3.25 7.92322 4.30899 6.3517 5.59571C4.7716 6.88946 3.47959 8.47865 2.61138 9.68801L2.53978 9.78759C2.01712 10.5138 1.58688 11.1117 1.58688 12C1.58688 12.8883 2.01712 13.4862 2.53978 14.2124L2.61138 14.312C3.15604 15.0707 3.86748 15.9788 4.71221 16.8697L1.53145 19.4143C1.208 19.6731 1.15556 20.1451 1.41431 20.4685C1.67307 20.792 2.14504 20.8444 2.46849 20.5856L22.4685 4.58565ZM8.66172 13.7101L9.87446 12.7399C9.7938 12.5082 9.74997 12.2592 9.74997 12C9.74997 10.7574 10.7573 9.75 12 9.75C12.4362 9.75 12.8434 9.87412 13.1882 10.089L14.4006 9.11901C13.7502 8.57644 12.9132 8.25 12 8.25C9.9289 8.25 8.24997 9.92893 8.24997 12C8.24997 12.616 8.39851 13.1974 8.66172 13.7101Z"/>
                                                                    <path d="M20.6951 8.76481L15.6672 12.7871C15.3056 14.4803 13.801 15.75 12 15.75L11.9639 15.7498L7.54799 19.2825C8.8673 20.1396 10.3745 20.75 12 20.75C14.1409 20.75 16.0767 19.691 17.6482 18.4043C19.2283 17.1105 20.5204 15.5213 21.3886 14.312L21.4602 14.2124C21.9828 13.4862 22.4131 12.8883 22.4131 12C22.4131 11.1117 21.9828 10.5138 21.4602 9.78759L21.3886 9.68801C21.181 9.39891 20.9492 9.0881 20.6951 8.76481Z"/>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <h1 class="order-1 mx-1 text-xs md:text-sm text-black font-medium capitalize">Konfirmasi Password</h1>
                                                        <h1 x-text="chars + ' Karakter'" class="order-3 mx-1 text-[10px] md:text-xs text-gray-500 font-medium capitalize"></h1>
                                                        <h1 x-show="cekPassword" class="order-3 mx-1 text-[10px] md:text-xs text-red-500 font-medium">Password tidak sesuai. Mohon sesuaikan konfirmasi password dengan password baru</h1>
                                                    </label>
                                                </div>

                                                <div class="flex justify-center items-center gap-2 md:gap-3">
                                                    <button type="button" @click="modal = false" class="bg-[#FF4E4E] py-1.5 px-4 md:px-5 rounded">
                                                        <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Batal</h1>
                                                    </button>
                                                    <div x-data="{ modal : false }">
                                                        <button type="button" @click="if (password === konfirmasi) { modal = !modal; cekPassword = false; } else { cekPassword = true; }" :class="{ 'bg-[#615EFC] text-white cursor-pointer' : username && password && konfirmasi, 'bg-[#979696] text-[#6A6A6A] cursor-not-allowed' : !(username && password && konfirmasi) }" :disabled="!(passwordLama && password && konfirmasi)" class="py-1.5 px-4 md:px-5 rounded transition-colors duration-500">
                                                            <h1 class="text-[10px] md:text-xs font-medium uppercase">Simpan</h1>
                                                        </button>
                                                        <div x-show="modal" x-transition.duration.300ms.opacity.50 class="fixed inset-0 z-50 bg-[#0000006E] flex items-center justify-center h-screen">
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
                                                                    <h1 class="text-center text-sm md:text-base text-black font-normal">Apakah password sudah benar ?</h1>
                                                                    <div class="flex justify-center items-center gap-2 md:gap-3">
                                                                        <button type="button" @click="modal = false" class="bg-[#FF4E4E] py-1.5 px-4 md:px-5 rounded">
                                                                            <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Periksa</h1>
                                                                        </button>
                                                                        <button class="bg-[#615EFC] py-1.5 px-4 md:px-5 rounded">
                                                                            <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Simpan</h1>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-[#E8EDF2] text-xs text-black/70 capitalize overflow-visible">
                        <td class="font-normal my-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">3</td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                            <img class="w-6 lg:w-7 h-6 lg:h-7 bg-transparent object-cover rounded-full mx-auto" src="/images/avatar.jpg">
                        </td>
                        <td class="py-3.5 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                            <h1 class="line-clamp-1 font-normal">Rizky Rahman Rambe</h1>
                        </td>
                        <td class="py-3.5 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                            <h1 class="line-clamp-1 font-normal">Kepala Staff</h1>
                        </td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">082363838328</td>
                        <td class="font-normal m-4 first:pl-4 last:pr-4 last:pl-4 last:relative last:right-0">
                            <div x-data="{ modal: false }">
                                <button type="button" @click="modal = !modal" class="flex items-center gap-2 w-fit bg-[#FA6D09] py-1.5 px-2 rounded-md mx-auto">
                                    <h1 class="text-[#E8EDF2] font-normal">PulihkanAkun</h1>
                                    <svg class="w-2.5 fill-white" viewBox="0 0 12 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.825 12.0375C0.55 11.5625 0.34375 11.075 0.20625 10.575C0.06875 10.075 0 9.5625 0 9.0375C0 7.3625 0.58125 5.9375 1.74375 4.7625C2.90625 3.5875 4.325 3 6 3H6.13125L4.93125 1.8L5.98125 0.75L8.98125 3.75L5.98125 6.75L4.93125 5.7L6.13125 4.5H6C4.75 4.5 3.6875 4.94063 2.8125 5.82188C1.9375 6.70313 1.5 7.775 1.5 9.0375C1.5 9.3625 1.5375 9.68125 1.6125 9.99375C1.6875 10.3062 1.8 10.6125 1.95 10.9125L0.825 12.0375ZM6.01875 17.25L3.01875 14.25L6.01875 11.25L7.06875 12.3L5.86875 13.5H6C7.25 13.5 8.3125 13.0594 9.1875 12.1781C10.0625 11.2969 10.5 10.225 10.5 8.9625C10.5 8.6375 10.4625 8.31875 10.3875 8.00625C10.3125 7.69375 10.2 7.3875 10.05 7.0875L11.175 5.9625C11.45 6.4375 11.6562 6.925 11.7938 7.425C11.9313 7.925 12 8.4375 12 8.9625C12 10.6375 11.4187 12.0625 10.2563 13.2375C9.09375 14.4125 7.675 15 6 15H5.86875L7.06875 16.2L6.01875 17.25Z"/>
                                    </svg>
                                </button>
                                <div x-show="modal" x-transition.duration.300ms.opacity.50 :class="{ 'visible': modal, 'invisible': !modal }" class="invisible fixed inset-0 z-50 bg-[#0000006E] flex items-center justify-center h-screen">
                                    <div class="w-[80%] sm:w-[60%] md:w-[40%] lg:w-[30%] bg-white rounded-lg md:rounded-xl">
                                        <div class="flex justify-between items-center border-b border-[#D1D1D1] py-2.5 px-3">
                                            <div class=""></div>
                                            <h1 class="text-sm md:text-base text-black font-semibold">Pulihkan Akun</h1>
                                            <button type="button" @click="modal = false" type="button" class="bg-[#E8E8E8] p-2 rounded-full">
                                                <svg class="w-3 fill-[#8B8B8B]" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.0204 1.68705C11.2157 1.49179 11.2157 1.1752 11.0204 0.979943C10.8251 0.784681 10.5086 0.784681 10.3133 0.979943L6.00017 5.29307L1.68705 0.979945C1.49179 0.784683 1.1752 0.784683 0.979943 0.979945C0.784681 1.17521 0.784681 1.49179 0.979943 1.68705L5.29306 6.00017L0.979961 10.3133C0.784699 10.5085 0.784699 10.8251 0.979961 11.0204C1.17522 11.2156 1.49181 11.2156 1.68707 11.0204L6.00017 6.70728L10.3133 11.0204C10.5085 11.2156 10.8251 11.2156 11.0204 11.0204C11.2156 10.8251 11.2156 10.5085 11.0204 10.3133L6.70728 6.00017L11.0204 1.68705Z"/>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="pt-2.5 pb-3.5 px-5 space-y-8">
                                            
                                            <form x-data="{ username: '', password: '', konfirmasi: '', cekPassword: false, }" class="w-full bg-transparent space-y-5 md:space-y-6 rounded md:rounded-md">
                                                <div class="grid gap-y-2 text-start">
                                                    <label x-data="{ preview : false }" class="grid gap-1">
                                                        <div class="relative peer order-2 flex justify-between items-center">
                                                            <input x-model="username" placeholder="" required autocomplete="off" class="transition-colors duration-500 w-full text-[10px] md:text-xs text-[#ABABAB] focus:text-black font-normal placeholder:text-[10px] md:placeholder:text-xs focus:placeholder:text-black placeholder:font-normal bg-transparent px-5 py-1.5 md:py-2 border border-[#ABABAB] focus:border-black rounded-md focus:outline-none focus:ring-0"/>
                                                        </div>
                                                        <h1 class="order-1 mx-1 text-xs md:text-sm text-black font-medium capitalize">Username</h1>
                                                    </label>
                                                    <label x-data="{ preview : false, chars : 0 }" class="grid gap-1">
                                                        <div class="relative peer order-2 flex justify-between items-center">
                                                            <input x-model="password" :type="preview ? 'text' : 'password'" @keyup="chars = 0 + $refs.username.value.length" x-ref="username" maxlength="8" placeholder="Password minimal 8 karakter" required autocomplete="off" class="peer order-2 transition-colors duration-500 w-full text-[10px] md:text-xs text-[#ABABAB] focus:text-black font-normal placeholder:text-[10px] md:placeholder:text-xs focus:placeholder:text-black placeholder:font-normal bg-transparent px-5 py-1.5 md:py-2 border border-[#ABABAB] focus:border-black rounded-md focus:outline-none focus:ring-0"/>
                                                            <div @click="preview = !preview" class="absolute right-5">
                                                                <svg x-show="!preview" class="w-5 fill-[#2D264B] cursor-pointer" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M8.75 9C8.75 7.75736 9.75736 6.75 11 6.75C12.2426 6.75 13.25 7.75736 13.25 9C13.25 10.2426 12.2426 11.25 11 11.25C9.75736 11.25 8.75 10.2426 8.75 9Z"/>
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.35173 2.59572C6.92325 1.30899 8.85905 0.25 11 0.25C13.141 0.25 15.0768 1.30899 16.6483 2.59572C18.2284 3.88946 19.5204 5.47865 20.3886 6.68801L20.4602 6.78759C20.9829 7.51384 21.4131 8.11166 21.4131 9C21.4131 9.88835 20.9829 10.4862 20.4602 11.2124L20.3886 11.312C19.5204 12.5214 18.2284 14.1105 16.6483 15.4043C15.0768 16.691 13.141 17.75 11 17.75C8.85905 17.75 6.92325 16.691 5.35173 15.4043C3.77164 14.1105 2.47962 12.5214 1.61142 11.312L1.53981 11.2124C1.01715 10.4862 0.586914 9.88834 0.586914 9C0.586914 8.11166 1.01715 7.51384 1.53981 6.78759L1.61142 6.68801C2.47962 5.47865 3.77164 3.88946 5.35173 2.59572ZM11 5.25C8.92893 5.25 7.25 6.92893 7.25 9C7.25 11.0711 8.92893 12.75 11 12.75C13.0711 12.75 14.75 11.0711 14.75 9C14.75 6.92893 13.0711 5.25 11 5.25Z"/>
                                                                </svg>
                                                                <svg x-show="preview" class="w-5 fill-[#2D264B] cursor-pointer" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22.4685 4.58565C22.7919 4.32689 22.8444 3.85492 22.5856 3.53148C22.3269 3.20803 21.8549 3.15559 21.5314 3.41435L18.2061 6.0746C18.0245 5.91148 17.8385 5.75145 17.6482 5.59571C16.0767 4.30899 14.1409 3.25 12 3.25C9.85902 3.25 7.92322 4.30899 6.3517 5.59571C4.7716 6.88946 3.47959 8.47865 2.61138 9.68801L2.53978 9.78759C2.01712 10.5138 1.58688 11.1117 1.58688 12C1.58688 12.8883 2.01712 13.4862 2.53978 14.2124L2.61138 14.312C3.15604 15.0707 3.86748 15.9788 4.71221 16.8697L1.53145 19.4143C1.208 19.6731 1.15556 20.1451 1.41431 20.4685C1.67307 20.792 2.14504 20.8444 2.46849 20.5856L22.4685 4.58565ZM8.66172 13.7101L9.87446 12.7399C9.7938 12.5082 9.74997 12.2592 9.74997 12C9.74997 10.7574 10.7573 9.75 12 9.75C12.4362 9.75 12.8434 9.87412 13.1882 10.089L14.4006 9.11901C13.7502 8.57644 12.9132 8.25 12 8.25C9.9289 8.25 8.24997 9.92893 8.24997 12C8.24997 12.616 8.39851 13.1974 8.66172 13.7101Z"/>
                                                                    <path d="M20.6951 8.76481L15.6672 12.7871C15.3056 14.4803 13.801 15.75 12 15.75L11.9639 15.7498L7.54799 19.2825C8.8673 20.1396 10.3745 20.75 12 20.75C14.1409 20.75 16.0767 19.691 17.6482 18.4043C19.2283 17.1105 20.5204 15.5213 21.3886 14.312L21.4602 14.2124C21.9828 13.4862 22.4131 12.8883 22.4131 12C22.4131 11.1117 21.9828 10.5138 21.4602 9.78759L21.3886 9.68801C21.181 9.39891 20.9492 9.0881 20.6951 8.76481Z"/>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <h1 class="order-1 mx-1 text-xs md:text-sm text-black font-medium capitalize">Password</h1>
                                                        <h1 x-text="chars + ' Karakter'" class="order-3 mx-1 text-[10px] md:text-xs text-gray-500 font-medium capitalize"></h1>
                                                    </label>
                                                    <label x-data="{ preview : false, chars : 0 }" class="grid gap-1">
                                                        <div class="relative peer order-2 flex justify-between items-center">
                                                            <input x-model="konfirmasi" :class="cekPassword ? 'border-red-500' : 'border-[#ABABAB]'" :type="preview ? 'text' : 'password'" @keyup="chars = 0 + $refs.username.value.length" x-ref="username" maxlength="8" placeholder="Password minimal 8 karakter" required autocomplete="off" class="peer order-2 transition-colors duration-500 w-full text-[10px] md:text-xs text-[#ABABAB] focus:text-black font-normal placeholder:text-[10px] md:placeholder:text-xs focus:placeholder:text-black placeholder:font-normal bg-transparent px-5 py-1.5 md:py-2 border border-[#ABABAB] focus:border-black rounded-md focus:outline-none focus:ring-0"/>
                                                            <div @click="preview = !preview" class="absolute right-5">
                                                                <svg x-show="!preview" class="w-5 fill-[#2D264B] cursor-pointer" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M8.75 9C8.75 7.75736 9.75736 6.75 11 6.75C12.2426 6.75 13.25 7.75736 13.25 9C13.25 10.2426 12.2426 11.25 11 11.25C9.75736 11.25 8.75 10.2426 8.75 9Z"/>
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.35173 2.59572C6.92325 1.30899 8.85905 0.25 11 0.25C13.141 0.25 15.0768 1.30899 16.6483 2.59572C18.2284 3.88946 19.5204 5.47865 20.3886 6.68801L20.4602 6.78759C20.9829 7.51384 21.4131 8.11166 21.4131 9C21.4131 9.88835 20.9829 10.4862 20.4602 11.2124L20.3886 11.312C19.5204 12.5214 18.2284 14.1105 16.6483 15.4043C15.0768 16.691 13.141 17.75 11 17.75C8.85905 17.75 6.92325 16.691 5.35173 15.4043C3.77164 14.1105 2.47962 12.5214 1.61142 11.312L1.53981 11.2124C1.01715 10.4862 0.586914 9.88834 0.586914 9C0.586914 8.11166 1.01715 7.51384 1.53981 6.78759L1.61142 6.68801C2.47962 5.47865 3.77164 3.88946 5.35173 2.59572ZM11 5.25C8.92893 5.25 7.25 6.92893 7.25 9C7.25 11.0711 8.92893 12.75 11 12.75C13.0711 12.75 14.75 11.0711 14.75 9C14.75 6.92893 13.0711 5.25 11 5.25Z"/>
                                                                </svg>
                                                                <svg x-show="preview" class="w-5 fill-[#2D264B] cursor-pointer" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22.4685 4.58565C22.7919 4.32689 22.8444 3.85492 22.5856 3.53148C22.3269 3.20803 21.8549 3.15559 21.5314 3.41435L18.2061 6.0746C18.0245 5.91148 17.8385 5.75145 17.6482 5.59571C16.0767 4.30899 14.1409 3.25 12 3.25C9.85902 3.25 7.92322 4.30899 6.3517 5.59571C4.7716 6.88946 3.47959 8.47865 2.61138 9.68801L2.53978 9.78759C2.01712 10.5138 1.58688 11.1117 1.58688 12C1.58688 12.8883 2.01712 13.4862 2.53978 14.2124L2.61138 14.312C3.15604 15.0707 3.86748 15.9788 4.71221 16.8697L1.53145 19.4143C1.208 19.6731 1.15556 20.1451 1.41431 20.4685C1.67307 20.792 2.14504 20.8444 2.46849 20.5856L22.4685 4.58565ZM8.66172 13.7101L9.87446 12.7399C9.7938 12.5082 9.74997 12.2592 9.74997 12C9.74997 10.7574 10.7573 9.75 12 9.75C12.4362 9.75 12.8434 9.87412 13.1882 10.089L14.4006 9.11901C13.7502 8.57644 12.9132 8.25 12 8.25C9.9289 8.25 8.24997 9.92893 8.24997 12C8.24997 12.616 8.39851 13.1974 8.66172 13.7101Z"/>
                                                                    <path d="M20.6951 8.76481L15.6672 12.7871C15.3056 14.4803 13.801 15.75 12 15.75L11.9639 15.7498L7.54799 19.2825C8.8673 20.1396 10.3745 20.75 12 20.75C14.1409 20.75 16.0767 19.691 17.6482 18.4043C19.2283 17.1105 20.5204 15.5213 21.3886 14.312L21.4602 14.2124C21.9828 13.4862 22.4131 12.8883 22.4131 12C22.4131 11.1117 21.9828 10.5138 21.4602 9.78759L21.3886 9.68801C21.181 9.39891 20.9492 9.0881 20.6951 8.76481Z"/>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <h1 class="order-1 mx-1 text-xs md:text-sm text-black font-medium capitalize">Konfirmasi Password</h1>
                                                        <h1 x-text="chars + ' Karakter'" class="order-3 mx-1 text-[10px] md:text-xs text-gray-500 font-medium capitalize"></h1>
                                                        <h1 x-show="cekPassword" class="order-3 mx-1 text-[10px] md:text-xs text-red-500 font-medium">Password tidak sesuai. Mohon sesuaikan konfirmasi password dengan password baru</h1>
                                                    </label>
                                                </div>

                                                <div class="flex justify-center items-center gap-2 md:gap-3">
                                                    <button type="button" @click="modal = false" class="bg-[#FF4E4E] py-1.5 px-4 md:px-5 rounded">
                                                        <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Batal</h1>
                                                    </button>
                                                    <div x-data="{ modal : false }">
                                                        <button type="button" @click="if (password === konfirmasi) { modal = !modal; cekPassword = false; } else { cekPassword = true; }" :class="{ 'bg-[#615EFC] text-white cursor-pointer' : username && password && konfirmasi, 'bg-[#979696] text-[#6A6A6A] cursor-not-allowed' : !(username && password && konfirmasi) }" :disabled="!(passwordLama && password && konfirmasi)" class="py-1.5 px-4 md:px-5 rounded transition-colors duration-500">
                                                            <h1 class="text-[10px] md:text-xs font-medium uppercase">Simpan</h1>
                                                        </button>
                                                        <div x-show="modal" x-transition.duration.300ms.opacity.50 class="fixed inset-0 z-50 bg-[#0000006E] flex items-center justify-center h-screen">
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
                                                                    <h1 class="text-center text-sm md:text-base text-black font-normal">Apakah password sudah benar ?</h1>
                                                                    <div class="flex justify-center items-center gap-2 md:gap-3">
                                                                        <button type="button" @click="modal = false" class="bg-[#FF4E4E] py-1.5 px-4 md:px-5 rounded">
                                                                            <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Periksa</h1>
                                                                        </button>
                                                                        <button class="bg-[#615EFC] py-1.5 px-4 md:px-5 rounded">
                                                                            <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Simpan</h1>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </section>

            <section class="flex justify-center items-center gap-3">
                <button class="bg-[#5869EA] py-1.5 px-4 rounded-md md:rounded-lg">
                    <h1 class="text-[10px] md:text-sm text-white font-semibold">Sebelumnya</h1>
                </button>
                <button class="hidden sm:block group transition-all py-1 px-3.5 focus:px-6 md:focus:px-8 focus:border-b focus:border-[#615EFC]">
                    <h1 class="text-[10px] md:text-sm text-[#9B9B9B] transition-colors group-focus:text-[#615EFC] font-semibold">1</h1>
                </button>
                <button class="py-1 px-6 md:px-8 border-b border-[#615EFC]">
                    <h1 class="text-[10px] md:text-sm text-[#615EFC] font-semibold">2</h1>
                </button>
                <button class="hidden sm:block group transition-all py-1 px-3.5 focus:px-6 md:focus:px-8 focus:border-b focus:border-[#615EFC]">
                    <h1 class="text-[10px] md:text-sm text-[#9B9B9B] transition-colors group-focus:text-[#615EFC] font-semibold">3</h1>
                </button>
                <button class="bg-[#5869EA] py-1.5 px-4 rounded-md md:rounded-lg">
                    <h1 class="text-[10px] md:text-sm text-white font-semibold">Selanjutnya</h1>
                </button>
            </section>
        </section>               
    </main>
</div>