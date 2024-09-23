<div x-show="window.innerWidth < 640 && isOpen" x-transition.opacity :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden fixed inset-0 bg-zinc-800 bg-opacity-80 z-40"></div>
<div x-data="{ isOpenn : true }">
    <?php include_once("../desa/layout/sidebar.php"); ?>
    
    <main :class="isOpenn ? 'md:ml-60' : 'md:ml-20 ' + 'transition-all duration-500'" class="relative md:ml-60 pt-16 p-5 space-y-5">
        <div class="flex justify-between items-center">
            <h1 class="text-base md:text-lg lg:text-xl text-black font-medium">Edit Profile</h1>
            <h1 class="text-xs md:text-sm text-black font-medium"><span class="text-[#615EFC] font-medium">Home</span> / Edit Profile</h1>
        </div>

        <div class="space-y-1">
            <div class="relative w-24 md:w-28 h-24 md:h-28">
                <div class="absolute inset-0 bg-[#0000004A] rounded-lg"></div>
                <label for="/images" class="w-full inset-0 absolute flex justify-center items-center">
                    <div class="space-y-0.5 cursor-pointer">
                        <svg class="w-4 md:w-5 fill-white mx-auto" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9 4.25C7.48122 4.25 6.25 5.48122 6.25 7C6.25 8.51878 7.48122 9.75 9 9.75C10.5188 9.75 11.75 8.51878 11.75 7C11.75 5.48122 10.5188 4.25 9 4.25ZM7.75 7C7.75 6.30964 8.30964 5.75 9 5.75C9.69036 5.75 10.25 6.30964 10.25 7C10.25 7.69036 9.69036 8.25 9 8.25C8.30964 8.25 7.75 7.69036 7.75 7Z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4635 0.373728C13.3214 0.249985 11.8818 0.249992 10.0452 0.25H9.95475C8.11821 0.249992 6.67861 0.249985 5.53648 0.373728C4.37094 0.500006 3.42656 0.762324 2.62024 1.34815C2.13209 1.70281 1.70281 2.13209 1.34815 2.62024C0.762324 3.42656 0.500006 4.37094 0.373728 5.53648C0.249985 6.67861 0.249992 8.11821 0.25 9.95475V10.0452C0.249992 11.8818 0.249985 13.3214 0.373728 14.4635C0.500006 15.6291 0.762324 16.5734 1.34815 17.3798C1.36102 17.3975 1.37399 17.4151 1.38706 17.4327C1.73405 17.899 2.14981 18.3101 2.62024 18.6518C3.42656 19.2377 4.37094 19.5 5.53648 19.6263C6.67859 19.75 8.11817 19.75 9.95465 19.75H10.0453C11.8818 19.75 13.3214 19.75 14.4635 19.6263C15.6291 19.5 16.5734 19.2377 17.3798 18.6518C17.8679 18.2972 18.2972 17.8679 18.6518 17.3798C19.5217 16.1825 19.6903 14.6546 19.7348 12.5005C19.75 11.7682 19.75 10.9403 19.75 10.006V9.95473C19.75 8.11824 19.75 6.67859 19.6263 5.53648C19.5 4.37094 19.2377 3.42656 18.6518 2.62024C18.2972 2.13209 17.8679 1.70281 17.3798 1.34815C16.5734 0.762324 15.6291 0.500006 14.4635 0.373728ZM3.50191 2.56168C4.00992 2.19259 4.66013 1.97745 5.69804 1.865C6.74999 1.75103 8.10843 1.75 10 1.75C11.8916 1.75 13.25 1.75103 14.302 1.865C15.3399 1.97745 15.9901 2.19259 16.4981 2.56168C16.8589 2.82382 17.1762 3.14111 17.4383 3.50191C17.8074 4.00992 18.0225 4.66013 18.135 5.69804C18.249 6.74999 18.25 8.10843 18.25 10C18.25 10.255 18.25 10.5006 18.2497 10.7373C18.1438 10.6476 18.0435 10.5687 17.9448 10.4986C15.4737 8.7441 12.0651 9.20873 10.1537 11.5606C9.99513 11.7558 9.8432 11.9843 9.67111 12.2694L9.54618 12.2444C8.44707 12.0244 7.77404 11.8897 7.14216 11.9032C5.45369 11.939 3.86636 12.7154 2.80143 14.0261C2.53101 14.359 2.30278 14.7487 2.02741 15.2781C1.95858 14.9948 1.90522 14.6732 1.865 14.302C1.75103 13.25 1.75 11.8916 1.75 10C1.75 8.10843 1.75103 6.74999 1.865 5.69804C1.97745 4.66013 2.19259 4.00992 2.56168 3.50191C2.82382 3.14111 3.14111 2.82382 3.50191 2.56168ZM17.0764 11.7217C17.3239 11.8974 17.6104 12.1728 18.2273 12.7882C18.1701 14.7589 17.972 15.7636 17.4383 16.4981C17.1762 16.8589 16.8589 17.1762 16.4981 17.4383C15.9901 17.8074 15.3399 18.0225 14.302 18.135C13.25 18.249 11.8916 18.25 10 18.25C9.2582 18.25 8.59839 18.2498 8.0069 18.2428L10.3256 14.1404C10.4556 13.9105 10.5685 13.7108 10.6693 13.5345C10.9887 12.9758 11.1615 12.699 11.3178 12.5066C12.7305 10.7683 15.25 10.4249 17.0764 11.7217ZM6.34708 18.131C6.33655 18.1496 6.3269 18.1685 6.31812 18.1876C6.09986 18.1735 5.89365 18.1562 5.69804 18.135C4.66013 18.0225 4.00992 17.8074 3.50191 17.4383C3.28075 17.2776 3.07593 17.0962 2.89014 16.8968C3.45192 15.7732 3.68417 15.3184 3.96564 14.972C4.75276 14.0031 5.92601 13.4293 7.17401 13.4028C7.55888 13.3947 7.98434 13.4647 8.88421 13.6422L6.34708 18.131Z"/>
                        </svg>
                        <h1 class="text-[10px] md:text-xs text-white font-normal">Ganti Foto</h1>
                        <input id="/images" type="file" class="hidden" onchange="previewImage(event, 'image-preview1')"/>
                    </div>
                </label>
                <img id="image-preview1" class="w-24 md:w-28 h-24 md:h-28 object-cover rounded-lg" src="/images/avatar.jpg">
            </div>
            <h1 class="text-[10px] md:text-xs text-black font-normal">Upload Foto maksimal <span class="text-[#FF4E4E] font-normal">25mb.</span></h1>
        </div>

        <form x-data="{ username: '', firstName: '', lastName: '', phone: '', position: '' }" class="w-full sm:w-[50%] lg:w-[40%] bg-transparent space-y-5 md:space-y-6 rounded md:rounded-md">
            <div class="grid gap-y-2">
                <label x-data="{ chars : 0 }" class="grid gap-1">
                    <input x-model="username" @keyup="chars = 0 + $refs.username.value.length" x-ref="username" maxlength="10" type="text" placeholder="Username maksimal 10 karakter" required autocomplete="off" class="peer order-2 transition-colors duration-500 w-full text-[10px] md:text-xs text-[#ABABAB] focus:text-black font-normal placeholder:text-[10px] md:placeholder:text-xs focus:placeholder:text-black placeholder:font-normal bg-transparent px-5 py-1.5 md:py-2 border border-[#ABABAB] focus:border-black rounded-md focus:outline-none focus:ring-0"/>
                    <h1 class="order-1 mx-1 text-xs md:text-sm text-black font-medium capitalize">Username <span class="text-[#FF4E4E] font-medium">*</span></h1>
                    <h1 x-text="chars + ' Karakter'" class="order-3 mx-1 text-[10px] md:text-xs text-gray-500 font-medium capitalize"></h1>
                </label>
                <label class="grid gap-1">
                    <input x-model="firstName" type="text" placeholder="Masukkan nama depan" required autocomplete="off" class="peer order-2 transition-colors duration-500 w-full text-[10px] md:text-xs text-[#ABABAB] focus:text-black font-normal placeholder:text-[10px] md:placeholder:text-xs focus:placeholder:text-black placeholder:font-normal bg-transparent px-5 py-1.5 md:py-2 border border-[#ABABAB] focus:border-black rounded-md focus:outline-none focus:ring-0"/>
                    <h1 class="order-1 mx-1 text-xs md:text-sm text-black font-medium capitalize">Nama depan <span class="text-[#FF4E4E] font-medium">*</span></h1>
                </label>
                <label class="grid gap-1">
                    <input x-model="lastName" type="text" placeholder="Masukkan nama belakang" required autocomplete="off" class="peer order-2 transition-colors duration-500 w-full text-[10px] md:text-xs text-[#ABABAB] focus:text-black font-normal placeholder:text-[10px] md:placeholder:text-xs focus:placeholder:text-black placeholder:font-normal bg-transparent px-5 py-1.5 md:py-2 border border-[#ABABAB] focus:border-black rounded-md focus:outline-none focus:ring-0"/>
                    <h1 class="order-1 mx-1 text-xs md:text-sm text-black font-medium capitalize">Nama belakang <span class="text-[#FF4E4E] font-medium">*</span></h1>
                </label>
                <label class="grid gap-1">
                    <input x-model="phone" type="text" placeholder="Masukkan no. hp" required autocomplete="off" class="peer order-2 transition-colors duration-500 w-full text-[10px] md:text-xs text-[#ABABAB] focus:text-black font-normal placeholder:text-[10px] md:placeholder:text-xs focus:placeholder:text-black placeholder:font-normal bg-transparent px-5 py-1.5 md:py-2 border border-[#ABABAB] focus:border-black rounded-md focus:outline-none focus:ring-0"/>
                    <h1 class="order-1 mx-1 text-xs md:text-sm text-black font-medium capitalize">No. Hp <span class="text-[#FF4E4E] font-medium">*</span></h1>
                </label>
                <label class="grid gap-1">
                    <input x-model="position" type="text" placeholder="Masukkan jabatan" required autocomplete="off" class="peer order-2 transition-colors duration-500 w-full text-[10px] md:text-xs text-[#ABABAB] focus:text-black font-normal placeholder:text-[10px] md:placeholder:text-xs focus:placeholder:text-black placeholder:font-normal bg-transparent px-5 py-1.5 md:py-2 border border-[#ABABAB] focus:border-black rounded-md focus:outline-none focus:ring-0"/>
                    <h1 class="order-1 mx-1 text-xs md:text-sm text-black font-medium capitalize">Jabatan <span class="text-[#FF4E4E] font-medium">*</span></h1>
                </label>
            </div>
        
            <div class="flex items-center gap-2 md:gap-3">
                <button type="button" class="bg-[#FF4E4E] py-1.5 md:py-2 px-6 md:px-8 rounded shadow-md shadow-[#0000004D]">
                    <h1 class="text-[10px] md:text-xs text-white font-medium uppercase">Batal</h1>
                </button>
                <div x-data="{ modal: false }">
                    <button type="button" @click="modal = !modal" :class="{ 'bg-[#615EFC] text-white cursor-pointer' : username && firstName && lastName && phone && position, 'bg-[#979696] text-[#6A6A6A] cursor-not-allowed' : !(username && firstName && lastName && phone && position) }" :disabled="!(username && firstName && lastName && phone && position)" class="py-1.5 md:py-2 px-6 md:px-8 transition-colors duration-500 rounded shadow-md shadow-[#0000004D]">
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
                                <h1 class="text-center text-sm md:text-base text-black font-normal">Apakah data anda sudah benar ?</h1>
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
    </main>
</div>