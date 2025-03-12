<div x-show="window.innerWidth < 640 && isOpen" x-transition.opacity :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden fixed inset-0 bg-zinc-800 bg-opacity-80 z-40"></div>
<div x-data="{ isOpenn : true }">
    <?php include_once("../pmd/layout/sidebar.php"); ?>
    
    <main :class="isOpenn ? 'md:ml-60' : 'md:ml-20 ' + 'transition-all duration-500'" class="relative md:ml-60 pt-16 p-5 space-y-5">
        <div class="flex justify-between items-center">
            <h1 class="text-base md:text-lg lg:text-xl text-black font-medium">Bidang Penyelenggaraan Pemerintahan Desa</h1>
            <h1 class="text-xs md:text-sm text-black font-medium"><span class="text-primary font-medium">Home</span>
                / APBDes</h1>
        </div>
        <div x-data="{ isOpen : false }" class="space-y-5">
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

        <?php include_once("../pmd/components/tables/apbdes/table1.php"); ?>
    </main>
</div>