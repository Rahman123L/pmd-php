<section x-show="step === 1" class="hidden" :class="{ 'block': step === 1, 'hidden': !step === 1 }">
    <div class="overflow-scroll w-[80%] h-52 bg-transparent p-2 mx-5">
        <table class="bg-white table-auto">
            <tr class="text-[10px] md:text-xs text-black capitalize">
                <th class="w-[5%] bg-white border border-black text-center font-bold py-1.5 px-4">No</th>
                <th class="w-[25%] bg-white border border-black text-start font-bold py-1.5 px-4">Kode Bidang</th>
                <th class="w-[70%] bg-white border border-black text-start font-bold py-1.5 px-4">Nama Bidang</th>
            </tr>
            <tr class="odd:bg-white even:bg-[#EAE9E9] text-xs text-black capitalize overflow-visible">
                <td class="border border-black text-center font-normal py-1.5 px-4">1</td>
                <td class="border border-black text-start font-normal py-1.5 px-4">01.2024.01</td>
                <td class="border border-black text-start font-normal py-1.5 px-4">
                    <h1 class="line-clamp-1">Bidang Penyelenggaraan Pemerintahan Desa</h1>
                </td>
            </tr>
            <tr class="odd:bg-white even:bg-[#EAE9E9] text-xs text-black capitalize overflow-visible">
                <td class="border border-black text-center font-normal py-1.5 px-4">2</td>
                <td class="border border-black text-start font-normal py-1.5 px-4">01.2024.02</td>
                <td class="border border-black text-start font-normal py-1.5 px-4">
                    <h1 class="line-clamp-1">Bidang Penyelenggaraan Pemerintahan Desa</h1>
                </td>
            </tr>
            <tr class="odd:bg-white even:bg-[#EAE9E9] text-xs text-black capitalize overflow-visible">
                <td class="border border-black text-center font-normal py-1.5 px-4">3</td>
                <td class="border border-black text-start font-normal py-1.5 px-4">01.2024.03</td>
                <td class="border border-black text-start font-normal py-1.5 px-4">
                    <h1 class="line-clamp-1">Bidang Pelaksanaan Pembangunan Desa</h1>
                </td>
            </tr>
        </table>
    </div>
    <div class="py-2 px-5 grid gap-2">
        <label class="grid md:flex items-center gap-1 md:gap-6">
            <h1 class="text-[10px] md:text-xs text-black font-normal capitalize">Kode Bidang</h1>
            <input type="text" value="01.2024.01" class="w-full md:w-fit bg-white py-1.5 px-3 border border-[#DCDBDB] rounded-lg shadow-md text-[10px] md:text-xs text-black font-normal capitalize placeholder:text-black focus:ring-0 focus:border-[#DCDBDB]">
        </label>
        <label class="grid md:flex items-center gap-1 md:gap-5">
            <h1 class="text-[10px] md:text-xs text-black font-normal capitalize">Nama Bidang</h1>
            <input type="text" value="Bidang Penyelenggaraan Pemerintahan Desa" class="w-full md:w-[50%] bg-white py-1.5 px-3 border border-[#DCDBDB] rounded-lg shadow-md text-[10px] md:text-xs text-black font-normal capitalize placeholder:text-black focus:ring-0 focus:border-[#DCDBDB]">
        </label>
    </div>
</section>