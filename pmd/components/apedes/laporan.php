<div x-show="window.innerWidth < 640 && isOpen" x-transition.opacity :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden fixed inset-0 bg-zinc-800 bg-opacity-80 z-40"></div>
<div x-data="{ isOpenn : true }">
    <?php include_once("../pmd/layout/sidebar.php"); ?>

    <main :class="isOpenn ? 'md:ml-60' : 'md:ml-20 ' + 'transition-all duration-500'" class="relative md:ml-60 pt-16 p-5 space-y-4 md:space-y-5">
        <div class="md:flex md:justify-between items-center">
            <h1 class="text-base md:text-lg lg:text-xl text-black font-medium">Laporan APEDES</h1>
            <h1 class="text-xs md:text-sm text-black font-medium"><span class="text-[#615EFC] font-medium">Home</span> / Detail Laporan</h1>
        </div>
        
        <?php include_once("../pmd/components/laporan/content.php") ?>
    </main>
</div>