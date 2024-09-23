<div x-show="window.innerWidth < 640 && isOpen" x-transition.opacity :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden fixed inset-0 bg-zinc-800 bg-opacity-80 z-40"></div>
<div x-data="{ isOpenn : true }">
    <?php include_once("../desa/layout/sidebar.php"); ?>

    <main :class="isOpenn ? 'md:ml-60' : 'md:ml-20 ' + 'transition-all duration-500'" class="relative md:ml-60 pt-16 p-5 space-y-5">
        <div class="flex justify-between items-center">
            <h1 class="text-base md:text-lg lg:text-xl text-black font-medium">Ganti Password</h1>
            <h1 class="text-xs md:text-sm text-black font-medium"><span class="text-primary font-medium">Home</span> / Ganti Password</h1>
        </div>

        <form x-data="{ passwordLama: '', passwordBaru: '', konfirmasi: '', passwordLamaBenar: 'Minimal8', alert: false, cekPassword: false, }" class="w-full sm:w-[50%] lg:w-[40%] bg-transparent space-y-5 md:space-y-6 rounded md:rounded-md">
            <div class="grid gap-y-2">
                <label x-data="{ preview : false }" class="grid gap-1">
                    <div class="relative peer order-2 flex justify-between items-center">
                        <input x-model="passwordLama" :class="alert ? 'border-red-500' : 'border-[#ABABAB]'" :type="preview ? 'text' : 'password'" maxlength="8" placeholder="Masukkan password lama" required autocomplete="off" class="transition-colors duration-500 w-full text-[10px] md:text-xs text-[#ABABAB] focus:text-black font-normal placeholder:text-[10px] md:placeholder:text-xs focus:placeholder:text-black placeholder:font-normal bg-transparent px-5 py-1.5 md:py-2 border border-[#ABABAB] focus:border-black rounded-md focus:outline-none focus:ring-0"/>
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
                    <h1 class="order-1 mx-1 text-xs md:text-sm text-black font-medium capitalize">Password lama <span class="text-[#FF4E4E] font-medium">*</span></h1>
                    <h1 x-show="alert" class="order-3 mx-1 text-[10px] md:text-xs text-red-500 font-medium capitalize">Password salah</h1>
                </label>
                <label x-data="{ preview : false, chars : 0 }" class="grid gap-1">
                    <div class="relative peer order-2 flex justify-between items-center">
                        <input x-model="passwordBaru" :type="preview ? 'text' : 'password'" @keyup="chars = 0 + $refs.username.value.length" x-ref="username" maxlength="8" placeholder="Password minimal 8 karakter" required autocomplete="off" class="peer order-2 transition-colors duration-500 w-full text-[10px] md:text-xs text-[#ABABAB] focus:text-black font-normal placeholder:text-[10px] md:placeholder:text-xs focus:placeholder:text-black placeholder:font-normal bg-transparent px-5 py-1.5 md:py-2 border border-[#ABABAB] focus:border-black rounded-md focus:outline-none focus:ring-0"/>
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
                    <h1 class="order-1 mx-1 text-xs md:text-sm text-black font-medium capitalize">Password baru <span class="text-[#FF4E4E] font-medium">*</span></h1>
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
                    <h1 class="order-1 mx-1 text-xs md:text-sm text-black font-medium capitalize">Konfirmasi Password Baru <span class="text-[#FF4E4E] font-medium">*</span></h1>
                    <h1 x-text="chars + ' Karakter'" class="order-3 mx-1 text-[10px] md:text-xs text-gray-500 font-medium capitalize"></h1>
                    <h1 x-show="cekPassword" class="order-3 mx-1 text-[10px] md:text-xs text-red-500 font-medium">Password tidak sesuai. Mohon sesuaikan konfirmasi password dengan password baru</h1>
                </label>
            </div>
        
            <div class="flex items-center gap-2 md:gap-3">
                <button type="button" class="bg-[#FF4E4E] py-1.5 md:py-2 px-6 md:px-8 rounded shadow-md shadow-[#0000004D]">
                    <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Batal</h1>
                </button>
                <div x-data="{ modal: false }">
                    <button type="button" @click="(passwordLama === passwordLamaBenar) ? (passwordBaru === konfirmasi ? (modal = !modal, alert = false, cekPassword = false) : (alert = false, cekPassword = true)) : (alert = true, cekPassword = false)" :class="{ 'bg-primary text-white cursor-pointer' : passwordLama && passwordBaru && konfirmasi, 'bg-[#979696] text-[#6A6A6A] cursor-not-allowed' : !(passwordLama && passwordBaru && konfirmasi) }" :disabled="!(passwordLama && passwordBaru && konfirmasi)" class="py-1.5 md:py-2 px-6 md:px-8 transition-colors duration-500 rounded shadow-md shadow-[#0000004D]">
                        <h1 class="text-[10px] md:text-xs font-medium uppercase">Simpan</h1>
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
                                <h1 class="text-center text-sm md:text-base text-black font-normal">Apakah password anda sudah benar ?</h1>
                                <div class="flex justify-center items-center gap-2 md:gap-3">
                                    <button type="button" @click="modal = false" class="bg-[#FF4E4E] py-1.5 px-4 md:px-5 rounded">
                                        <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Periksa</h1>
                                    </button>
                                    <button class="bg-primary py-1.5 px-4 md:px-5 rounded">
                                        <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Simpan</h1>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>                       
    </main>
</div>