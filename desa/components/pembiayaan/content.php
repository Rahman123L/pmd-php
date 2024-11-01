<div x-show="window.innerWidth < 640 && isOpen" x-transition.opacity :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden fixed inset-0 bg-zinc-800 bg-opacity-80 z-40"></div>
<div x-data="{ isOpenn : true }">
    <?php include_once("../pmd/layout/sidebar.php"); ?>
    
    <main :class="isOpenn ? 'md:ml-60' : 'md:ml-20 ' + 'transition-all duration-500'" class="relative md:ml-60 pt-16 p-5 space-y-5">
        <div class="md:flex justify-between items-center">
            <h1 class="text-base md:text-lg lg:text-xl text-black font-medium">Pembiayaan</h1>
            <h1 class="text-xs md:text-sm text-black font-medium"><span class="text-primary font-medium">Home</span> / Penyusunan APBDES / Pembiayaan</h1>
        </div>

        <div class="bg-white rounded-lg">
            <div x-data="{ step: 1 }" class="space-y-3">
                <div class="flex justify-between items-center p-6 md:px-10 lg:px-16">
                    <div class="relative flex justify-center items-center">
                        <button @click="step = 1" class="text-[10px] md:text-xs px-2.5 py-1.5 font-bold rounded-full text-white" :class="step >= 1 ? 'bg-primary' : 'bg-gray-300'">1</button>
                        <h1 class="absolute -bottom-6 w-max text-[10px] md:text-xs text-black font-semibold">RAP</h1>
                    </div>
                    <hr class="border-2 w-full" :class="step >= 2 ? 'border-primary' : 'bg-gray-300'">
                    <div class="relative flex justify-center items-center">
                        <button @click="step = 2" class="text-[10px] md:text-xs px-2.5 py-1.5 font-bold rounded-full text-white" :class="step >= 2 ? 'bg-primary' : 'bg-gray-300'">2</button>
                        <h1 class="absolute -bottom-6 w-max text-[10px] md:text-xs text-black font-semibold">RAP Rinci</h1>
                    </div>
                </div>
                <hr class="border border-gray-300"></hr>
            
                <?php include_once("../desa/components/pembiayaan/progres/rap.php"); ?>
                <?php include_once("../desa/components/pembiayaan/progres/rapRincian.php"); ?>
            
                <div class="flex justify-end items-end gap-2 md:gap-3 p-5">
                    <button type="button" @click="if(step > 1) step--" :disabled="step === 1" :class="step === 1 ? 'cursor-not-allowed bg-opacity-50' : ''" class="bg-tertiary py-1.5 px-4 rounded md:rounded-md shadow-md">
                        <h1 class="text-[10px] md:text-xs text-white font-medium capitalize">kembali</h1>
                    </button>
                    <button type="button" @click="if(step < 4) step++" :disabled="step === 2" :class="step === 2 ? 'cursor-not-allowed bg-opacity-50' : ''" class="bg-primary py-1.5 px-4 rounded md:rounded-md shadow-md">
                        <h1 class="text-[10px] md:text-xs text-white font-medium capitalize">Simpan</h1>
                    </button>
                </div>
            </div>
        </div>
    </main>
</div>