<section x-show="step === 3" class="hidden" :class="{ 'block': step === 3, 'hidden': !step === 3 }">
    <div class="overflow-scroll w-[80%] h-52 bg-transparent p-2 mx-5">
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
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 py-2 px-5">
        <div class="grid gap-2">
            <label class="grid md:flex items-center gap-1 md:gap-6">
                <h1 class="text-[10px] md:text-xs text-black font-normal capitalize">Kode Kegiatan</h1>
                <input type="text" value="01.2024.01" class="w-[60%] md:w-fit bg-white py-1.5 px-3 border border-[#DCDBDB] rounded-lg shadow-md text-[10px] md:text-xs text-black font-normal capitalize placeholder:text-black focus:ring-0 focus:border-[#DCDBDB]">
            </label>
            <label class="grid md:flex items-center gap-1 md:gap-5">
                <h1 class="text-[10px] md:text-xs text-black font-normal capitalize">Nama Kegiatan</h1>
                <input type="text" value="Bidang Penyelenggaraan Pemerintahan Desa" class="w-full md:w-[70%] bg-white py-1.5 px-3 border border-[#DCDBDB] rounded-lg shadow-md text-[10px] md:text-xs text-black font-normal capitalize placeholder:text-black focus:ring-0 focus:border-[#DCDBDB]">
            </label>
            <label class="grid md:flex items-center gap-1 md:gap-[68px]">
                <h1 class="text-[10px] md:text-xs text-black font-normal capitalize">Lokasi</h1>
                <input type="text" value="Desa Kampung Padang" class="w-full md:w-[70%] bg-white py-1.5 px-3 border border-[#DCDBDB] rounded-lg shadow-md text-[10px] md:text-xs text-black font-normal capitalize placeholder:text-black focus:ring-0 focus:border-[#DCDBDB]">
            </label>
            <label class="grid md:flex items-center gap-1 md:gap-3">
                <h1 class="text-[10px] md:text-xs text-black font-normal capitalize">Nama Pelaksana</h1>
                <input type="text" value="Aminnullah" class="w-full md:w-[70%] bg-white py-1.5 px-3 border border-[#DCDBDB] rounded-lg shadow-md text-[10px] md:text-xs text-black font-normal capitalize placeholder:text-black focus:ring-0 focus:border-[#DCDBDB]">
            </label>
            <label class="grid md:flex items-center gap-1 md:gap-[26px]">
                <h1 class="text-[10px] md:text-xs text-black font-normal capitalize">Jabatan PPKD</h1>
                <input type="text" value="Sekretaris Desa" class="w-full md:w-[70%] bg-white py-1.5 px-3 border border-[#DCDBDB] rounded-lg shadow-md text-[10px] md:text-xs text-black font-normal capitalize placeholder:text-black focus:ring-0 focus:border-[#DCDBDB]">
            </label>
            <label class="grid md:flex items-center gap-1 md:gap-[54px]">
                <h1 class="text-[10px] md:text-xs text-black font-normal capitalize">Keluaran</h1>
                <input type="text" value="Dibayarkan Penghasilan dan Tunjangan Kepala Desa" class="w-full md:w-[70%] bg-white py-1.5 px-3 border border-[#DCDBDB] rounded-lg shadow-md text-[10px] md:text-xs text-black font-normal capitalize placeholder:text-black focus:ring-0 focus:border-[#DCDBDB]">
            </label>
            <label class="grid md:flex items-center gap-1 md:gap-[66px]">
                <h1 class="text-[10px] md:text-xs text-black font-normal capitalize">Waktu</h1>
                <input type="text" value="12 Bulan" class="w-full md:w-[70%] bg-white py-1.5 px-3 border border-[#DCDBDB] rounded-lg shadow-md text-[10px] md:text-xs text-black font-normal capitalize placeholder:text-black focus:ring-0 focus:border-[#DCDBDB]">
            </label>
        </div>
        <div class="space-y-2">
            <label class="grid md:flex items-center gap-1 md:gap-3">
                <h1 class="text-[10px] md:text-xs text-black font-normal capitalize">Volume Keluaran</h1>
                <div class="relative flex justify-center items-center">
                    <input type="text" value="98,5" class="w-full md:w-fit bg-white py-1.5 px-3 border border-[#DCDBDB] rounded-lg shadow-md text-[10px] md:text-xs text-black font-normal capitalize placeholder:text-black focus:ring-0 focus:border-[#DCDBDB]">
                    <h1 class="absolute left-11 text-[10px] md:text-xs font-normal">%</h1>
                </div>
            </label>
            <label class="grid md:flex items-center gap-1 md:gap-[77px]">
                <h1 class="text-[10px] md:text-xs text-black font-normal capitalize">Pagu</h1>
                <input type="text" value="Rp. 36.000.000" class="w-full md:w-fit bg-white py-1.5 px-3 border border-[#DCDBDB] rounded-lg shadow-md text-[10px] md:text-xs text-black font-normal capitalize placeholder:text-black focus:ring-0 focus:border-[#DCDBDB]">
            </label>
        </div>
    </div>
</section>