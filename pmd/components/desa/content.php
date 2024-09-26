<section x-data="dataDesa" x-show="isOpen" x-transition.duration.300ms.opacity.50 :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden space-y-3">    
    <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-y-3 bg-white py-3 md:px-3 rounded md:rounded-md shadow-md shadow-black/5">
        <template x-data="{ isOpen : false }" x-for="(data, index) in bilahBarat" :key="index">
            <div class="col-span-1">
                <h1 @click="isOpen = !isOpen" x-text="data.kecamatan" class="text-xs md:text-sm text-black font-medium uppercase py-0.5 px-4 cursor-pointer"></h1>
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
                <h1 @click="isOpen = !isOpen" x-text="data.kecamatan" class="text-xs md:text-sm text-black font-medium uppercase py-0.5 px-4 cursor-pointer"></h1>
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
                <h1 @click="isOpen = !isOpen" x-text="data.kecamatan" class="text-xs md:text-sm text-black font-medium uppercase py-0.5 px-4 cursor-pointer"></h1>
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
                <h1 @click="isOpen = !isOpen" x-text="data.kecamatan" class="text-xs md:text-sm text-black font-medium uppercase py-0.5 px-4 cursor-pointer"></h1>
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
                <h1 @click="isOpen = !isOpen" x-text="data.kecamatan" class="text-xs md:text-sm text-black font-medium uppercase py-0.5 px-4 cursor-pointer"></h1>
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
                <h1 @click="isOpen = !isOpen" x-text="data.kecamatan" class="text-xs md:text-sm text-black font-medium uppercase py-0.5 px-4 cursor-pointer"></h1>
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
                <h1 @click="isOpen = !isOpen" x-text="data.kecamatan" class="text-xs md:text-sm text-black font-medium uppercase py-0.5 px-4 cursor-pointer"></h1>
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