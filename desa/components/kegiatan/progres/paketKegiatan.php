<section x-show="step === 4" class="hidden" :class="{ 'block': step === 4, 'hidden': !step === 4 }">
    <div class="overflow-scroll w-[80%] h-52 bg-transparent p-2 mx-5">
        <table class="bg-white table-auto">
            <tr class="text-[10px] md:text-xs text-black capitalize">
                <th class="w-[5%] bg-white border border-black text-center font-bold py-1.5 px-4">No</th>
                <th class="w-[15%] bg-white border border-black text-start font-bold py-1.5 px-4">Id</th>
                <th class="w-[40%] bg-white border border-black text-start font-bold py-1.5 px-4">Nama Paket</th>
                <th class="w-[40%] bg-white border border-black text-start font-bold py-1.5 px-4">Uraian Output</th>
            </tr>
            <tr class="odd:bg-white even:bg-[#EAE9E9] text-xs text-black capitalize overflow-visible">
                <td class="border border-black text-center font-normal py-2 px-4">1</td>
                <td class="border border-black text-start font-normal py-2 px-4">01.2024.01</td>
                <td class="border border-black text-start font-normal py-2 px-4">
                    <h1 class="line-clamp-1">Bidang Penyelenggaraan Pemerintahan Desa</h1>
                </td>
                <td class="border border-black text-start font-normal py-2 px-4">
                    <h1 class="line-clamp-1">Bidang Penyelenggaraan Pemerintahan Desa</h1>
                </td>
            </tr>
            <tr class="odd:bg-white even:bg-[#EAE9E9] text-xs text-black capitalize overflow-visible">
                <td class="border border-black text-center font-normal py-2 px-4">2</td>
                <td class="border border-black text-start font-normal py-2 px-4">01.2024.02</td>
                <td class="border border-black text-start font-normal py-2 px-4">
                    <h1 class="line-clamp-1">Bidang Penyelenggaraan Pemerintahan Desa</h1>
                </td>
                <td class="border border-black text-start font-normal py-2 px-4">
                    <h1 class="line-clamp-1">Bidang Penyelenggaraan Pemerintahan Desa</h1>
                </td>
            </tr>
            <tr class="odd:bg-white even:bg-[#EAE9E9] text-xs text-black capitalize overflow-visible">
                <td class="border border-black text-center font-normal py-2 px-4">3</td>
                <td class="border border-black text-start font-normal py-2 px-4">01.2024.03</td>
                <td class="border border-black text-start font-normal py-2 px-4">
                    <h1 class="line-clamp-1">Bidang Penyelenggaraan Pemerintahan Desa</h1>
                </td>
                <td class="border border-black text-start font-normal py-2 px-4">
                    <h1 class="line-clamp-1">Bidang Penyelenggaraan Pemerintahan Desa</h1>
                </td>
            </tr>
        </table>
    </div>
    <div class="grid gap-2 py-2 px-5">
        <label class="grid md:flex items-center gap-1 md:gap-[81px]">
            <h1 class="text-[10px] md:text-xs text-black font-normal capitalize">Id</h1>
            <input type="text" value="01.2024.01" class="w-[60%] md:w-fit bg-white py-1.5 px-3 border border-[#DCDBDB] rounded-lg shadow-md text-[10px] md:text-xs text-black font-normal capitalize placeholder:text-black focus:ring-0 focus:border-[#DCDBDB]">
        </label>
        <label class="grid md:flex items-center gap-1 md:gap-[26px]">
            <h1 class="text-[10px] md:text-xs text-black font-normal capitalize">Nama Paket</h1>
            <input type="text" value="Bidang Penyelenggaraan Pemerintahan Desa" class="w-full md:w-[40%] bg-white py-1.5 px-3 border border-[#DCDBDB] rounded-lg shadow-md text-[10px] md:text-xs text-black font-normal capitalize placeholder:text-black focus:ring-0 focus:border-[#DCDBDB]">
        </label>
        <div class="grid md:flex items-center gap-2 md:gap-4">
            <label class="grid md:flex items-center gap-1 md:gap-[67px]">
                <h1 class="text-[10px] md:text-xs text-black font-normal capitalize">Nilai</h1>
                <input type="text" value="Rp. 0" class="w-full bg-white py-1.5 px-3 border border-[#DCDBDB] rounded-lg shadow-md text-[10px] md:text-xs text-black font-normal capitalize placeholder:text-black focus:ring-0 focus:border-[#DCDBDB]">
            </label>
            <label class="grid md:flex items-center gap-1 md:gap-12">
                <h1 class="text-[10px] md:text-xs text-black font-normal capitalize">Satuan</h1>
                <input type="text" value="" class="w-full bg-white py-1.5 px-3 border border-[#DCDBDB] rounded-lg shadow-md text-[10px] md:text-xs text-black font-normal capitalize placeholder:text-black focus:ring-0 focus:border-[#DCDBDB]">
            </label>
            <label class="grid md:flex items-center gap-1 md:gap-4">
                <h1 class="text-[10px] md:text-xs text-black font-normal capitalize">LokasiKegiatan</h1>
                <input type="text" value="" class="w-full bg-white py-1.5 px-3 border border-[#DCDBDB] rounded-lg shadow-md text-[10px] md:text-xs text-black font-normal capitalize placeholder:text-black focus:ring-0 focus:border-[#DCDBDB]">
            </label>
        </div>
        <div class="grid md:flex items-center gap-2 md:gap-4">
            <label class="grid md:flex items-center gap-1 md:gap-5">
                <h1 class="text-[10px] md:text-xs text-black font-normal capitalize">PolaKegiatan</h1>
                <input type="text" value="" class="w-full bg-white py-1.5 px-3 border border-[#DCDBDB] rounded-lg shadow-md text-[10px] md:text-xs text-black font-normal capitalize placeholder:text-black focus:border-[#DCDBDB] focus:ring-0">
            </label>
            <label class="grid md:flex items-center gap-1 md:gap-4">
                <h1 class="text-[10px] md:text-xs text-black font-normal capitalize">SumberDana</h1>
                <input type="text" value="" class="w-full bg-white py-1.5 px-3 border border-[#DCDBDB] rounded-lg shadow-md text-[10px] md:text-xs text-black font-normal capitalize placeholder:text-black focus:border-[#DCDBDB] focus:ring-0">
            </label>
        </div>
        <div class="grid md:flex items-center gap-2 md:gap-4">
            <label class="grid md:flex items-center gap-1 md:gap-5">
                <h1 class="text-[10px] md:text-xs text-black font-normal capitalize">TargetOutput</h1>
                <input type="text" value="" class="w-full bg-white py-1.5 px-3 border border-[#DCDBDB] rounded-lg shadow-md text-[10px] md:text-xs text-black font-normal capitalize placeholder:text-black focus:border-[#DCDBDB] focus:ring-0">
            </label>
            <label class="grid md:flex items-center gap-1 md:gap-4">
                <h1 class="text-[10px] md:text-xs text-black font-normal capitalize">SifatKegiatan</h1>
                <input type="text" value="" class="w-full bg-white py-1.5 px-3 border border-[#DCDBDB] rounded-lg shadow-md text-[10px] md:text-xs text-black font-normal capitalize placeholder:text-black focus:ring-0 focus:border-[#DCDBDB]">
            </label>
        </div>
        <label class="grid md:flex items-center gap-1 md:gap-4">
            <h1 class="text-[10px] md:text-xs text-black font-normal capitalize">Uraian Output</h1>
            <input type="text" value="" class="w-full md:w-[40%] bg-white py-1.5 px-3 border border-[#DCDBDB] rounded-lg shadow-md text-[10px] md:text-xs text-black font-normal capitalize placeholder:text-black focus:ring-0 focus:border-[#DCDBDB]">
        </label>
    </div>
</section>