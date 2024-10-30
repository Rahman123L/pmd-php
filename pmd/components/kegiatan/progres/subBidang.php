<section x-show="step === 2" class="hidden overflow-scroll w-[80%] h-72 bg-transparent p-2 mx-5" :class="{ 'block': step === 2, 'hidden': !step === 2 }">
    <table class="bg-white table-auto">
        <tr class="text-[10px] md:text-xs text-black capitalize">
            <th class="w-[5%] bg-white border border-black text-center font-bold py-1.5 px-4">No</th>
            <th class="w-[25%] bg-white border border-black text-start font-bold py-1.5 px-4">Kode Sub</th>
            <th class="w-[65%] bg-white border border-black text-start font-bold py-1.5 px-4">Nama Sub Bidang</th>
            <th class="w-[5%] bg-white border border-black text-start font-bold py-1.5 px-4">Aksi</th>
        </tr>
        <tr class="odd:bg-white even:bg-[#EAE9E9] text-xs text-black capitalize overflow-visible">
            <td class="border border-black text-center font-normal py-1.5 px-4">1</td>
            <td class="border border-black text-start font-normal py-1.5 px-4">01.2024.01</td>
            <td class="border border-black text-start font-normal py-1.5 px-4">
                <h1 class="line-clamp-1">Bidang Penyelenggaraan Pemerintahan Desa</h1>
            </td>
            <td class="border border-black text-start font-normal py-1.5 px-4">
                <div class="flex justify-start items-center gap-1.5 md:gap-2">
                    <button type="button" class="flex items-center gap-2 w-fit bg-primary py-1.5 px-3 rounded-md">
                        <svg class="w-2.5 fill-white" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.68607 1.71341C9.38152 1.40876 8.88783 1.40811 8.58248 1.71196L7.86466 2.42627L9.88628 4.44858L10.6008 3.73063C10.9046 3.42535 10.904 2.93179 10.5995 2.6272L9.68607 1.71341ZM9.22496 5.11308L7.20012 3.08755L2.92217 7.34452C2.75016 7.5157 2.62537 7.72847 2.55994 7.96215L1.8636 10.4489L4.35059 9.7526C4.58426 9.68718 4.79702 9.5624 4.9682 9.3904L9.22496 5.11308ZM7.9212 1.04743C8.59297 0.378945 9.67908 0.380371 10.3491 1.05061L11.2626 1.9644C11.9324 2.6345 11.9337 3.72034 11.2653 4.39194L5.6327 10.0517C5.34742 10.3384 4.99281 10.5463 4.60335 10.6554L1.31389 11.5764C1.15082 11.622 0.975795 11.5762 0.856051 11.4564C0.736306 11.3367 0.69046 11.1617 0.736123 10.9986L1.65716 7.70936C1.76622 7.31989 1.9742 6.96527 2.26089 6.67999L7.9212 1.04743Z"/>
                        </svg>
                        <h1 class="text-white font-normal">Edit</h1>
                    </button>
                    <button type="button" class="flex items-center gap-2 w-fit bg-tertiary py-1.5 px-3 rounded-md">
                        <svg class="w-2.5 fill-white" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.46875 2.06248C3.46875 1.45842 3.95844 0.968735 4.5625 0.968735H6.4375C7.04156 0.968735 7.53125 1.45842 7.53125 2.06248C7.53125 2.32137 7.32138 2.53123 7.0625 2.53123C6.80362 2.53123 6.59375 2.32137 6.59375 2.06248C6.59375 1.97619 6.52379 1.90623 6.4375 1.90623H4.5625C4.47621 1.90623 4.40625 1.97619 4.40625 2.06248C4.40625 2.32137 4.19638 2.53123 3.9375 2.53123C3.67862 2.53123 3.46875 2.32137 3.46875 2.06248ZM0.34375 3.06125C0.34375 2.80237 0.553617 2.5925 0.8125 2.5925H10.1875C10.4464 2.5925 10.6562 2.80237 10.6562 3.06125C10.6562 3.32013 10.4464 3.53 10.1875 3.53H9.77454L9.27738 9.44627C9.17536 10.6603 8.16019 11.5938 6.94186 11.5938H4.05878C2.84045 11.5938 1.82529 10.6603 1.72326 9.44627L1.2261 3.53H0.8125C0.553617 3.53 0.34375 3.32013 0.34375 3.06125ZM2.1669 3.53L2.65747 9.36776C2.71868 10.0962 3.32778 10.6563 4.05878 10.6563H6.94186C7.67286 10.6563 8.28196 10.0962 8.34317 9.36776L8.83374 3.53H2.1669ZM4.22134 5.34375C4.48022 5.34375 4.69009 5.55362 4.69009 5.8125V8.46875C4.69009 8.72764 4.48022 8.9375 4.22134 8.9375C3.96246 8.9375 3.75259 8.72764 3.75259 8.46875V5.8125C3.75259 5.55362 3.96246 5.34375 4.22134 5.34375ZM6.77869 5.34375C7.03757 5.34375 7.24744 5.55362 7.24744 5.8125V8.46875C7.24744 8.72764 7.03757 8.9375 6.77869 8.9375C6.5198 8.9375 6.30994 8.72764 6.30994 8.46875V5.8125C6.30994 5.55362 6.5198 5.34375 6.77869 5.34375Z"/>
                        </svg>
                        <h1 class="text-white font-normal">Hapus</h1>
                    </button>
                </div>
            </td>
        </tr>
        <tr class="odd:bg-white even:bg-[#EAE9E9] text-xs text-black capitalize overflow-visible">
            <td class="border border-black text-center font-normal py-1.5 px-4">2</td>
            <td class="border border-black text-start font-normal py-1.5 px-4">01.2024.02</td>
            <td class="border border-black text-start font-normal py-1.5 px-4">
                <h1 class="line-clamp-1">Bidang Penyelenggaraan Pemerintahan Desa</h1>
            </td>
            <td class="border border-black text-start font-normal py-1.5 px-4">
                <div class="flex justify-start items-center gap-1.5 md:gap-2">
                    <button type="button" class="flex items-center gap-2 w-fit bg-primary py-1.5 px-3 rounded-md">
                        <svg class="w-2.5 fill-white" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.68607 1.71341C9.38152 1.40876 8.88783 1.40811 8.58248 1.71196L7.86466 2.42627L9.88628 4.44858L10.6008 3.73063C10.9046 3.42535 10.904 2.93179 10.5995 2.6272L9.68607 1.71341ZM9.22496 5.11308L7.20012 3.08755L2.92217 7.34452C2.75016 7.5157 2.62537 7.72847 2.55994 7.96215L1.8636 10.4489L4.35059 9.7526C4.58426 9.68718 4.79702 9.5624 4.9682 9.3904L9.22496 5.11308ZM7.9212 1.04743C8.59297 0.378945 9.67908 0.380371 10.3491 1.05061L11.2626 1.9644C11.9324 2.6345 11.9337 3.72034 11.2653 4.39194L5.6327 10.0517C5.34742 10.3384 4.99281 10.5463 4.60335 10.6554L1.31389 11.5764C1.15082 11.622 0.975795 11.5762 0.856051 11.4564C0.736306 11.3367 0.69046 11.1617 0.736123 10.9986L1.65716 7.70936C1.76622 7.31989 1.9742 6.96527 2.26089 6.67999L7.9212 1.04743Z"/>
                        </svg>
                        <h1 class="text-white font-normal">Edit</h1>
                    </button>
                    <button type="button" class="flex items-center gap-2 w-fit bg-tertiary py-1.5 px-3 rounded-md">
                        <svg class="w-2.5 fill-white" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.46875 2.06248C3.46875 1.45842 3.95844 0.968735 4.5625 0.968735H6.4375C7.04156 0.968735 7.53125 1.45842 7.53125 2.06248C7.53125 2.32137 7.32138 2.53123 7.0625 2.53123C6.80362 2.53123 6.59375 2.32137 6.59375 2.06248C6.59375 1.97619 6.52379 1.90623 6.4375 1.90623H4.5625C4.47621 1.90623 4.40625 1.97619 4.40625 2.06248C4.40625 2.32137 4.19638 2.53123 3.9375 2.53123C3.67862 2.53123 3.46875 2.32137 3.46875 2.06248ZM0.34375 3.06125C0.34375 2.80237 0.553617 2.5925 0.8125 2.5925H10.1875C10.4464 2.5925 10.6562 2.80237 10.6562 3.06125C10.6562 3.32013 10.4464 3.53 10.1875 3.53H9.77454L9.27738 9.44627C9.17536 10.6603 8.16019 11.5938 6.94186 11.5938H4.05878C2.84045 11.5938 1.82529 10.6603 1.72326 9.44627L1.2261 3.53H0.8125C0.553617 3.53 0.34375 3.32013 0.34375 3.06125ZM2.1669 3.53L2.65747 9.36776C2.71868 10.0962 3.32778 10.6563 4.05878 10.6563H6.94186C7.67286 10.6563 8.28196 10.0962 8.34317 9.36776L8.83374 3.53H2.1669ZM4.22134 5.34375C4.48022 5.34375 4.69009 5.55362 4.69009 5.8125V8.46875C4.69009 8.72764 4.48022 8.9375 4.22134 8.9375C3.96246 8.9375 3.75259 8.72764 3.75259 8.46875V5.8125C3.75259 5.55362 3.96246 5.34375 4.22134 5.34375ZM6.77869 5.34375C7.03757 5.34375 7.24744 5.55362 7.24744 5.8125V8.46875C7.24744 8.72764 7.03757 8.9375 6.77869 8.9375C6.5198 8.9375 6.30994 8.72764 6.30994 8.46875V5.8125C6.30994 5.55362 6.5198 5.34375 6.77869 5.34375Z"/>
                        </svg>
                        <h1 class="text-white font-normal">Hapus</h1>
                    </button>
                </div>
            </td>
        </tr>
        <tr class="odd:bg-white even:bg-[#EAE9E9] text-xs text-black capitalize overflow-visible">
            <td class="border border-black text-center font-normal py-1.5 px-4">3</td>
            <td class="border border-black text-start font-normal py-1.5 px-4">01.2024.03</td>
            <td class="border border-black text-start font-normal py-1.5 px-4">
                <h1 class="line-clamp-1">Bidang Pelaksanaan Pembangunan Desa</h1>
            </td>
            <td class="border border-black text-start font-normal py-1.5 px-4">
                <div class="flex justify-start items-center gap-1.5 md:gap-2">
                    <button type="button" class="flex items-center gap-2 w-fit bg-primary py-1.5 px-3 rounded-md">
                        <svg class="w-2.5 fill-white" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.68607 1.71341C9.38152 1.40876 8.88783 1.40811 8.58248 1.71196L7.86466 2.42627L9.88628 4.44858L10.6008 3.73063C10.9046 3.42535 10.904 2.93179 10.5995 2.6272L9.68607 1.71341ZM9.22496 5.11308L7.20012 3.08755L2.92217 7.34452C2.75016 7.5157 2.62537 7.72847 2.55994 7.96215L1.8636 10.4489L4.35059 9.7526C4.58426 9.68718 4.79702 9.5624 4.9682 9.3904L9.22496 5.11308ZM7.9212 1.04743C8.59297 0.378945 9.67908 0.380371 10.3491 1.05061L11.2626 1.9644C11.9324 2.6345 11.9337 3.72034 11.2653 4.39194L5.6327 10.0517C5.34742 10.3384 4.99281 10.5463 4.60335 10.6554L1.31389 11.5764C1.15082 11.622 0.975795 11.5762 0.856051 11.4564C0.736306 11.3367 0.69046 11.1617 0.736123 10.9986L1.65716 7.70936C1.76622 7.31989 1.9742 6.96527 2.26089 6.67999L7.9212 1.04743Z"/>
                        </svg>
                        <h1 class="text-white font-normal">Edit</h1>
                    </button>
                    <button type="button" class="flex items-center gap-2 w-fit bg-tertiary py-1.5 px-3 rounded-md">
                        <svg class="w-2.5 fill-white" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.46875 2.06248C3.46875 1.45842 3.95844 0.968735 4.5625 0.968735H6.4375C7.04156 0.968735 7.53125 1.45842 7.53125 2.06248C7.53125 2.32137 7.32138 2.53123 7.0625 2.53123C6.80362 2.53123 6.59375 2.32137 6.59375 2.06248C6.59375 1.97619 6.52379 1.90623 6.4375 1.90623H4.5625C4.47621 1.90623 4.40625 1.97619 4.40625 2.06248C4.40625 2.32137 4.19638 2.53123 3.9375 2.53123C3.67862 2.53123 3.46875 2.32137 3.46875 2.06248ZM0.34375 3.06125C0.34375 2.80237 0.553617 2.5925 0.8125 2.5925H10.1875C10.4464 2.5925 10.6562 2.80237 10.6562 3.06125C10.6562 3.32013 10.4464 3.53 10.1875 3.53H9.77454L9.27738 9.44627C9.17536 10.6603 8.16019 11.5938 6.94186 11.5938H4.05878C2.84045 11.5938 1.82529 10.6603 1.72326 9.44627L1.2261 3.53H0.8125C0.553617 3.53 0.34375 3.32013 0.34375 3.06125ZM2.1669 3.53L2.65747 9.36776C2.71868 10.0962 3.32778 10.6563 4.05878 10.6563H6.94186C7.67286 10.6563 8.28196 10.0962 8.34317 9.36776L8.83374 3.53H2.1669ZM4.22134 5.34375C4.48022 5.34375 4.69009 5.55362 4.69009 5.8125V8.46875C4.69009 8.72764 4.48022 8.9375 4.22134 8.9375C3.96246 8.9375 3.75259 8.72764 3.75259 8.46875V5.8125C3.75259 5.55362 3.96246 5.34375 4.22134 5.34375ZM6.77869 5.34375C7.03757 5.34375 7.24744 5.55362 7.24744 5.8125V8.46875C7.24744 8.72764 7.03757 8.9375 6.77869 8.9375C6.5198 8.9375 6.30994 8.72764 6.30994 8.46875V5.8125C6.30994 5.55362 6.5198 5.34375 6.77869 5.34375Z"/>
                        </svg>
                        <h1 class="text-white font-normal">Hapus</h1>
                    </button>
                </div>
            </td>
        </tr>
    </table>
</section>