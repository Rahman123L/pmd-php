<section x-show="step === 2" class="hidden overflow-scroll w-[80%] h-72 bg-transparent p-2 mx-5" :class="{ 'block': step === 2, 'hidden': !step === 2 }">
    <table class="bg-white table-auto">
        <tr class="text-[10px] md:text-xs text-black capitalize">
            <th class="w-[5%] bg-white border border-black text-center font-bold py-1.5 px-4">No</th>
            <th class="w-[25%] bg-white border border-black text-start font-bold py-1.5 px-4">Kode Kegiatan</th>
            <th class="w-[70%] bg-white border border-black text-start font-bold py-1.5 px-4">Nama Kegiatan</th>
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
</section>