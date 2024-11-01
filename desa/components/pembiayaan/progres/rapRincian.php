<section x-show="step === 2" class="hidden" :class="{ 'block': step === 2, 'hidden': !step === 2 }">
    <div class="overflow-scroll w-[95%] h-52 bg-transparent p-2 mx-5">
        <table class="bg-white table-auto">
            <tr class="text-[10px] md:text-xs text-black capitalize">
                <th class="w-[5%] bg-white border border-black text-center font-bold py-1.5 px-4">No</th>
                <th class="w-[45%] bg-white border border-black text-start font-bold py-1.5 px-4">Uraian</th>
                <th class="w-[25%] bg-white border border-black text-start font-bold py-1.5 px-4">Anggaran</th>
                <th class="w-[25%] bg-white border border-black text-start font-bold py-1.5 px-4">Anggaran PAK</th>
            </tr>
            <tr class="odd:bg-white even:bg-[#EAE9E9] text-xs text-black capitalize overflow-visible">
                <td class="border border-black text-center font-normal py-1.5 px-4">1</td>
                <td class="border border-black text-start font-normal py-1.5 px-4">
                    <h1 class="line-clamp-1">SILPA ADD</h1>
                </td>
                <td class="border border-black text-start font-normal py-1.5 px-4">
                    <h1 class="line-clamp-1">Rp. 65.000.000</h1>
                </td>
                <td class="border border-black text-start font-normal py-1.5 px-4">
                    <h1 class="line-clamp-1">Rp. 0</h1>
                </td>
            </tr>
            <tr class="odd:bg-white even:bg-[#EAE9E9] text-xs text-black capitalize overflow-visible">
                <td class="border border-black text-center font-normal py-1.5 px-4">1</td>
                <td class="border border-black text-start font-normal py-1.5 px-4">
                    <h1 class="line-clamp-1">SILPA Dana Desa</h1>
                </td>
                <td class="border border-black text-start font-normal py-1.5 px-4">
                    <h1 class="line-clamp-1">Rp. 400.000.000</h1>
                </td>
                <td class="border border-black text-start font-normal py-1.5 px-4">
                    <h1 class="line-clamp-1">Rp. 0</h1>
                </td>
            </tr>
        </table>
    </div>

    <div class="grid gap-3 py-2 px-5">
        <div class="grid md:flex justify-between items-center gap-2">
            <label class="grid md:flex items-center gap-1 md:gap-7">
                <h1 class="text-[10px] md:text-xs text-black font-normal capitalize">No. Urut</h1>
                <input type="text" value="01" class="w-fit bg-white py-1.5 px-3 border border-[#DCDBDB] rounded-lg shadow-md text-[10px] md:text-xs text-black font-normal capitalize placeholder:text-black focus:ring-0 focus:border-[#DCDBDB]">
            </label>
            <label class="grid md:flex justify-end items-center gap-1 md:gap-6">
                <input type="text" value="Rp. 133.000.000" class="w-fit bg-white py-1.5 px-3 border border-[#DCDBDB] rounded-lg shadow-md text-[10px] md:text-xs text-black font-normal capitalize placeholder:text-black focus:ring-0 focus:border-[#DCDBDB]">
            </label>
        </div>
        <label class="w-full grid md:flex items-center gap-1 md:gap-9">
            <h1 class="text-[10px] md:text-xs text-black font-normal capitalize">Uraian</h1>
            <div class="w-full grid md:flex items-center gap-1 md:gap-3">
                <input type="text" value="SILPA ADD" class="w-full md:w-[70%] bg-white py-1.5 px-3 border border-[#DCDBDB] rounded-lg shadow-md text-[10px] md:text-xs text-black font-normal capitalize placeholder:text-black focus:ring-0 focus:border-[#DCDBDB]">
                <p class="text-[10px] md:text-xs text-gray-400 font-normal">Maksimal 50 char</p>
            </div>
        </label>
        <div class="w-full md:w-[80%] grid grid-cols-1 md:grid-cols-2 gap-1">
            <div class="space-y-2">
                <label class="grid md:flex items-center gap-1 md:gap-5">
                    <h1 class="text-[10px] md:text-xs text-black font-normal capitalize">Anggaran</h1>
                    <input type="text" value="Rp. 65.000.000" class="w-full md:w-[70%] bg-white py-1.5 px-3 border border-[#DCDBDB] rounded-lg shadow-md text-[10px] md:text-xs text-black font-normal capitalize placeholder:text-black focus:ring-0 focus:border-[#DCDBDB]">
                </label>
                <label class="grid md:flex items-center gap-1 md:gap-4">
                    <h1 class="text-[10px] md:text-xs text-black font-normal capitalize">Perubahan</h1>
                    <input type="text" value="Rp. 0" class="w-full md:w-[70%] bg-white py-1.5 px-3 border border-[#DCDBDB] rounded-lg shadow-md text-[10px] md:text-xs text-black font-normal capitalize placeholder:text-black focus:ring-0 focus:border-[#DCDBDB]">
                </label>
                <label class="grid md:flex items-center gap-1 md:gap-9">
                    <h1 class="text-[10px] md:text-xs text-black font-normal capitalize">Jumlah</h1>
                    <input type="text" value="Rp. 65.000.000" class="w-full md:w-[70%] bg-white py-1.5 px-3 border border-[#DCDBDB] rounded-lg shadow-md text-[10px] md:text-xs text-black font-normal capitalize placeholder:text-black focus:ring-0 focus:border-[#DCDBDB]">
                </label>
            </div>
            <div class="space-y-2">
                <label class="grid md:flex items-center gap-1 md:gap-5">
                    <h1 class="text-[10px] md:text-xs text-black font-normal capitalize">JumlahSatuan</h1>
                    <div class="grid md:flex items-center gap-2">
                        <input type="text" value="1" class="w-full md:w-[30%] bg-white py-1.5 px-3 border border-[#DCDBDB] rounded-lg shadow-md text-[10px] md:text-xs text-black font-normal capitalize placeholder:text-black focus:ring-0 focus:border-[#DCDBDB]">
                        <input type="text" value="LS" class="w-full md:w-[30%] bg-white py-1.5 px-3 border border-[#DCDBDB] rounded-lg shadow-md text-[10px] md:text-xs text-black font-normal capitalize placeholder:text-black focus:ring-0 focus:border-[#DCDBDB]">
                    </div>
                </label>
                <label class="grid md:flex items-center gap-1 md:gap-6">
                    <h1 class="text-[10px] md:text-xs text-black font-normal capitalize">Harga Satuan</h1>
                    <input type="text" value="Rp. 65.000.000" class="w-full md:w-[70%] bg-white py-1.5 px-3 border border-[#DCDBDB] rounded-lg shadow-md text-[10px] md:text-xs text-black font-normal capitalize placeholder:text-black focus:ring-0 focus:border-[#DCDBDB]">
                </label>
                <label class="grid md:flex items-center gap-1 md:gap-6">
                    <h1 class="text-[10px] md:text-xs text-black font-normal capitalize">Sumber Dana</h1>
                    <input type="text" value="Alokasi Dana Desa" class="w-full md:w-[70%] bg-white py-1.5 px-3 border border-[#DCDBDB] rounded-lg shadow-md text-[10px] md:text-xs text-black font-normal capitalize placeholder:text-black focus:ring-0 focus:border-[#DCDBDB]">
                </label>
            </div>
        </div>
    </div>
</section>