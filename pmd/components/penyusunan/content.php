<div x-show="window.innerWidth < 640 && isOpen" x-transition.opacity :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden fixed inset-0 bg-zinc-800 bg-opacity-80 z-40"></div>
<div x-data="{ isOpenn : true }">
    <?php include_once("../pmd/layout/sidebar.php"); ?>
    
    <main x-data="{ isOpen : false }" :class="isOpenn ? 'md:ml-60' : 'md:ml-20 ' + 'transition-all duration-500'" class="relative md:ml-60 pt-16 p-5 space-y-5">
        <div class="md:flex justify-between items-center">
            <h1 class="text-base md:text-lg lg:text-xl text-black font-medium">Penyusunan APBDES</h1>
            <h1 class="text-xs md:text-sm text-black font-medium"><span class="text-primary font-medium">Home</span> / Penyusunan APBDES</h1>
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

        <div x-show="isOpen" class="grid grid-cols-1 md:grid-cols-3 gap-5">
            <a href="../pmd/kegiatan.php" class="bg-white p-5 rounded-md shadow-lg space-y-3">
                <svg class="w-9 md:w-10 stroke-primary mx-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12V14C22 17.7712 22 19.6569 20.8284 20.8284C20.1752 21.4816 19.3001 21.7706 18 21.8985" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M7 4V2.5" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M17 4V2.5" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M21.5 9H16.625H10.75M2 9H5.875" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M18 17C18 17.5523 17.5523 18 17 18C16.4477 18 16 17.5523 16 17C16 16.4477 16.4477 16 17 16C17.5523 16 18 16.4477 18 17Z"/>
                    <path d="M18 13C18 13.5523 17.5523 14 17 14C16.4477 14 16 13.5523 16 13C16 12.4477 16.4477 12 17 12C17.5523 12 18 12.4477 18 13Z"/>
                    <path d="M13 17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17C11 16.4477 11.4477 16 12 16C12.5523 16 13 16.4477 13 17Z"/>
                    <path d="M13 13C13 13.5523 12.5523 14 12 14C11.4477 14 11 13.5523 11 13C11 12.4477 11.4477 12 12 12C12.5523 12 13 12.4477 13 13Z"/>
                    <path d="M8 17C8 17.5523 7.55228 18 7 18C6.44772 18 6 17.5523 6 17C6 16.4477 6.44772 16 7 16C7.55228 16 8 16.4477 8 17Z"/>
                    <path d="M8 13C8 13.5523 7.55228 14 7 14C6.44772 14 6 13.5523 6 13C6 12.4477 6.44772 12 7 12C7.55228 12 8 12.4477 8 13Z"/>
                </svg>
                <h1 class="text-center text-sm md:text-base text-black font-medium">Kegiatan</h1>
            </a>
            <a href="../pmd/pendapatan.php" class="bg-white p-5 rounded-md shadow-lg space-y-3">
                <svg class="w-9 md:w-10 stroke-green-600 mx-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.4142 10.4142C18 9.82843 18 8.88562 18 7C18 5.11438 18 4.17157 17.4142 3.58579M17.4142 10.4142C16.8284 11 15.8856 11 14 11H10C8.11438 11 7.17157 11 6.58579 10.4142M17.4142 10.4142C17.4142 10.4142 17.4142 10.4142 17.4142 10.4142ZM17.4142 3.58579C16.8284 3 15.8856 3 14 3L10 3C8.11438 3 7.17157 3 6.58579 3.58579M17.4142 3.58579C17.4142 3.58579 17.4142 3.58579 17.4142 3.58579ZM6.58579 3.58579C6 4.17157 6 5.11438 6 7C6 8.88562 6 9.82843 6.58579 10.4142M6.58579 3.58579C6.58579 3.58579 6.58579 3.58579 6.58579 3.58579ZM6.58579 10.4142C6.58579 10.4142 6.58579 10.4142 6.58579 10.4142Z" stroke-width="1.5"/>
                    <path d="M13 7C13 7.55228 12.5523 8 12 8C11.4477 8 11 7.55228 11 7C11 6.44772 11.4477 6 12 6C12.5523 6 13 6.44772 13 7Z" stroke-width="1.5"/>
                    <path d="M18 6C16.3431 6 15 4.65685 15 3" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M18 8C16.3431 8 15 9.34315 15 11" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M6 6C7.65685 6 9 4.65685 9 3" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M6 8C7.65685 8 9 9.34315 9 11" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M4 21.3884H6.25993C7.27079 21.3884 8.29253 21.4937 9.27633 21.6964C11.0166 22.0549 12.8488 22.0983 14.6069 21.8138M13.6764 18.5172C13.7962 18.5033 13.911 18.4874 14.0206 18.4699C14.932 18.3245 15.697 17.8375 16.3974 17.3084L18.2046 15.9433C18.8417 15.462 19.7873 15.4619 20.4245 15.943C20.9982 16.3762 21.1736 17.0894 20.8109 17.6707C20.388 18.3487 19.7921 19.216 19.2199 19.7459M13.6764 18.5172C13.6403 18.5214 13.6038 18.5254 13.5668 18.5292M13.6764 18.5172C13.8222 18.486 13.9669 18.396 14.1028 18.2775C14.746 17.7161 14.7866 16.77 14.2285 16.1431C14.0991 15.9977 13.9475 15.8764 13.7791 15.7759C10.9817 14.1074 6.62942 15.3782 4 17.2429M13.6764 18.5172C13.6399 18.525 13.6033 18.5292 13.5668 18.5292M13.5668 18.5292C13.0434 18.5829 12.4312 18.5968 11.7518 18.5326" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
                <h1 class="text-center text-sm md:text-base text-black font-medium">Pendapatan</h1>
            </a>
            <a href="../pmd/belanja.php" class="bg-white p-5 rounded-md shadow-lg space-y-3">
                <svg class="w-9 md:w-10 stroke-red-500 mx-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z" stroke-width="1.5"/>
                    <path d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z" stroke-width="1.5"/>
                    <path d="M9.5 9L10.0282 12.1179" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M15.5283 9L15.0001 12.1179" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M2 3L2.26121 3.09184C3.5628 3.54945 4.2136 3.77826 4.58584 4.32298C4.95808 4.86771 4.95808 5.59126 4.95808 7.03836V9.76C4.95808 12.7016 5.02132 13.6723 5.88772 14.5862C6.75412 15.5 8.14857 15.5 10.9375 15.5H12M16.2404 15.5C17.8014 15.5 18.5819 15.5 19.1336 15.0504C19.6853 14.6008 19.8429 13.8364 20.158 12.3075L20.6578 9.88275C21.0049 8.14369 21.1784 7.27417 20.7345 6.69708C20.2906 6.12 18.7738 6.12 17.0888 6.12H11.0235M4.95808 6.12H7" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
                <h1 class="text-center text-sm md:text-base text-black font-medium">Belanja</h1>
            </a>
            <a href="../pmd/pembiayaan.php" class="bg-white p-5 rounded-md shadow-lg space-y-3">
                <svg class="w-9 md:w-10 stroke-orange-500 mx-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 22H21" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M3 17C3 17.9428 3 18.4142 3.29289 18.7071C3.58579 19 4.05719 19 5 19C5.94281 19 6.41421 19 6.70711 18.7071C7 18.4142 7 17.9428 7 17V11C7 10.0572 7 9.58579 6.70711 9.29289C6.41421 9 5.94281 9 5 9C4.05719 9 3.58579 9 3.29289 9.29289C3 9.58579 3 10.0572 3 11V13" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M10 7C10 6.05719 10 5.58579 10.2929 5.29289C10.5858 5 11.0572 5 12 5C12.9428 5 13.4142 5 13.7071 5.29289C14 5.58579 14 6.05719 14 7V17C14 17.9428 14 18.4142 13.7071 18.7071C13.4142 19 12.9428 19 12 19C11.0572 19 10.5858 19 10.2929 18.7071C10 18.4142 10 17.9428 10 17V7Z" stroke-width="1.5"/>
                    <path d="M21 11V17C21 17.9428 21 18.4142 20.7071 18.7071C20.4142 19 19.9428 19 19 19C18.0572 19 17.5858 19 17.2929 18.7071C17 18.4142 17 17.9428 17 17V4C17 3.05719 17 2.58579 17.2929 2.29289C17.5858 2 18.0572 2 19 2C19.9428 2 20.4142 2 20.7071 2.29289C21 2.58579 21 3.05719 21 4V7" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
                <h1 class="text-center text-sm md:text-base text-black font-medium">Pembiayaan</h1>
            </a>
            <a href="../pmd/pembiayaan2.php" class="bg-white p-5 rounded-md shadow-lg space-y-3">
                <svg class="w-9 md:w-10 stroke-yellow-300 mx-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22 22H2" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M21 22V14.5C21 13.6716 20.3284 13 19.5 13H16.5C15.6716 13 15 13.6716 15 14.5V22" stroke-width="1.5"/>
                    <path d="M15 22V9M9 22V5C9 3.58579 9 2.87868 9.43934 2.43934C9.87868 2 10.5858 2 12 2C13.4142 2 14.1213 2 14.5607 2.43934C15 2.87868 15 3.58579 15 5V5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M9 22V9.5C9 8.67157 8.32843 8 7.5 8H4.5C3.67157 8 3 8.67157 3 9.5V16M3 22V19.75" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
                <h1 class="text-center text-sm md:text-base text-black font-medium">Pembiayaan 2</h1>
            </a>
        </div>
    </main>
</div>