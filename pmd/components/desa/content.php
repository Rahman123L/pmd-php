<div class="w-full md:w-[60%] lg:w-[40%] bg-white py-5 md:py-6 px-5 space-y-2 rounded md:rounded-md shadow-md shadow-black/5">
    <h1 class="text-xs md:text-sm text-black font-normal">Silahkan Pilih <span class="text-[#EA5858] font-medium">Desa</span></h1>
    <button @click="isOpen = !isOpen" class="flex items-center gap-1 md:gap-2 bg-[#6777EF] py-1.5 px-4 rounded">
        <h1 class="text-xs md:text-sm text-white font-medium">Pilih Desa</h1>
        <svg :class="{ 'rotate-90 ' : isOpen }"  class="w-4 stroke-white stroke-[2]" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 5L15 12L9 19" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </button>
</div>

<section x-data="dataDesa" x-show="isOpen" x-transition.duration.300ms.opacity.50 :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden space-y-3">    
    <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-y-3 bg-white py-3 md:px-3 rounded md:rounded-md shadow-md shadow-black/5">
        <template x-data="{ isOpen : false }" x-for="(data, index) in bilahBarat" :key="index">
            <div class="col-span-1">
                <h1 @click="isOpen = !isOpen" x-text="data.kecamatan" class="text-xs md:text-sm text-gray-400 font-medium uppercase py-0.5 px-4 cursor-pointer"></h1>
                <div x-show="isOpen" @click.outside="isOpen = false" class="h-44 overflow-hidden overflow-y-scroll">
                    <template x-for="(desa, i) in data.desa" :key="i">
                        <div class="py-1.5 px-5 hover:bg-gray-100 cursor-pointer">
                            <h1 x-text="desa.nama" class="text-[10px] md:text-xs text-black font-normal uppercase"></h1>
                        </div>
                    </template>
                </div>
            </div>
        </template>
        <template x-data="{ isOpen : false }" x-for="(data, index) in bilahHulu" :key="index">
            <div class="col-span-1">
                <h1 @click="isOpen = !isOpen" x-text="data.kecamatan" class="text-xs md:text-sm text-gray-400 font-medium uppercase py-0.5 px-4 cursor-pointer"></h1>
                <div x-show="isOpen" @click.outside="isOpen = false" class="h-44 overflow-hidden overflow-y-scroll">
                    <template x-for="(desa, i) in data.desa" :key="i">
                        <div class="py-1.5 px-5 hover:bg-gray-100 cursor-pointer">
                            <h1 x-text="desa.nama" class="text-[10px] md:text-xs text-black font-normal uppercase"></h1>
                        </div>
                    </template>
                </div>
            </div>
        </template>
        <template x-data="{ isOpen : false }" x-for="(data, index) in pangkatan" :key="index">
            <div class="col-span-1">
                <h1 @click="isOpen = !isOpen" x-text="data.kecamatan" class="text-xs md:text-sm text-gray-400 font-medium uppercase py-0.5 px-4 cursor-pointer"></h1>
                <div x-show="isOpen" @click.outside="isOpen = false" class="h-44 overflow-hidden overflow-y-scroll">
                    <template x-for="(desa, i) in data.desa" :key="i">
                        <div class="py-1.5 px-5 hover:bg-gray-100 cursor-pointer">
                            <h1 x-text="desa.nama" class="text-[10px] md:text-xs text-black font-normal uppercase"></h1>
                        </div>
                    </template>
                </div>
            </div>
        </template>
        <template x-data="{ isOpen : false }" x-for="(data, index) in panaiHilir" :key="index">
            <div class="col-span-1">
                <h1 @click="isOpen = !isOpen" x-text="data.kecamatan" class="text-xs md:text-sm text-gray-400 font-medium uppercase py-0.5 px-4 cursor-pointer"></h1>
                <div x-show="isOpen" @click.outside="isOpen = false" class="h-44 overflow-hidden overflow-y-scroll">
                    <template x-for="(desa, i) in data.desa" :key="i">
                        <div class="py-1.5 px-5 hover:bg-gray-100 cursor-pointer">
                            <h1 x-text="desa.nama" class="text-[10px] md:text-xs text-black font-normal uppercase"></h1>
                        </div>
                    </template>
                </div>
            </div>
        </template>
        <template x-data="{ isOpen : false }" x-for="(data, index) in bilahHilir" :key="index">
            <div class="col-span-1">
                <h1 @click="isOpen = !isOpen" x-text="data.kecamatan" class="text-xs md:text-sm text-gray-400 font-medium uppercase py-0.5 px-4 cursor-pointer"></h1>
                <div x-show="isOpen" @click.outside="isOpen = false" class="h-44 overflow-hidden overflow-y-scroll">
                    <template x-for="(desa, i) in data.desa" :key="i">
                        <div class="py-1.5 px-5 hover:bg-gray-100 cursor-pointer">
                            <h1 x-text="desa.nama" class="text-[10px] md:text-xs text-black font-normal uppercase"></h1>
                        </div>
                    </template>
                </div>
            </div>
        </template>
        <template x-data="{ isOpen : false }" x-for="(data, index) in panaiTengah" :key="index">
            <div class="col-span-1">
                <h1 @click="isOpen = !isOpen" x-text="data.kecamatan" class="text-xs md:text-sm text-gray-400 font-medium uppercase py-0.5 px-4 cursor-pointer"></h1>
                <div x-show="isOpen" @click.outside="isOpen = false" class="h-44 overflow-hidden overflow-y-scroll">
                    <template x-for="(desa, i) in data.desa" :key="i">
                        <div class="py-1.5 px-5 hover:bg-gray-100 cursor-pointer">
                            <h1 x-text="desa.nama" class="text-[10px] md:text-xs text-black font-normal uppercase"></h1>
                        </div>
                    </template>
                </div>
            </div>
        </template>
        <template x-data="{ isOpen : false }" x-for="(data, index) in panaiHulu" :key="index">
            <div class="col-span-1">
                <h1 @click="isOpen = !isOpen" x-text="data.kecamatan" class="text-xs md:text-sm text-gray-400 font-medium uppercase py-0.5 px-4 cursor-pointer"></h1>
                <div x-show="isOpen" @click.outside="isOpen = false" class="h-44 overflow-hidden overflow-y-scroll">
                    <template x-for="(desa, i) in data.desa" :key="i">
                        <div class="py-1.5 px-5 hover:bg-gray-100 cursor-pointer">
                            <h1 x-text="desa.nama" class="text-[10px] md:text-xs text-black font-normal uppercase"></h1>
                        </div>
                    </template>
                </div>
            </div>
        </template>
    </div>
</section>

<div :class="isOpen ? 'hidden' : 'block'" class="flex justify-center items-center pt-10">
    <div class="space-y-2">
        <img class="w-28 md:w-32 h-28 md:h-32 mx-auto" src="/svgs/search.svg">
        <div class="text-center">
            <h1 class="text-lg md:text-xl text-black font-medium">Desa Tidak Ditemukan</h1>
            <h1 class="text-[10px] md:text-xs text-[#7A7A7A] font-normal">Pilih Desa untuk memunculkan data</h1>
        </div>
    </div>
</div>