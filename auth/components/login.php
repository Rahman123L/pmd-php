<main class="flex justify-center items-center h-[90%] md:h-screen">
    <section class="absolute flex justify-center items-center gap-3">
        <img class="w-[10%] md:w-[20%] h-[10%] md:h-[20%]" src="/svgs/loginLeft.svg">
        <div class="bg-white bg-opacity-40 backdrop-blur-sm p-8 rounded-2xl space-y-8">
            <div class="space-y-4">
                <img class="w-11 h-11 mx-auto" src="/svgs/logo.svg">
                <h1 class="mx-4 text-center text-lg md:text-xl text-white font-semibold">PMD LABUHANBATU</h1>
            </div>
            <div class="space-y-6">
                <label class="w-full flex items-center border border-[#ABABAB] py-1 px-3 rounded">
                    <svg class="w-6 fill-[#ABABAB]" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2C9.37665 2 7.25 4.12665 7.25 6.75C7.25 9.37335 9.37665 11.5 12 11.5C14.6234 11.5 16.75 9.37335 16.75 6.75C16.75 4.12665 14.6234 2 12 2Z"/>
                        <path d="M9 13C6.37665 13 4.25 15.1266 4.25 17.75C4.25 20.3734 6.37665 22.5 9 22.5H15C17.6234 22.5 19.75 20.3734 19.75 17.75C19.75 15.1266 17.6234 13 15 13H9Z"/>
                    </svg>
                    <input type="text" placeholder="Username" autocomplete="off" autofocus class="w-full bg-transparent border-none text-xs md:text-sm text-[#ABABAB] font-normal focus:outline-none focus:ring-0 placeholder:text-xs md:placeholder:text-sm placeholder:text-[#ABABAB] placeholder:font-normal">
                </label>
                <label x-data="{ isOpen : false }" class="w-full flex items-center border border-[#ABABAB] py-1 px-3 rounded">
                    <svg class="w-6 fill-[#ABABAB]" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.75 12C7.75 11.3096 8.30964 10.75 9 10.75C9.69036 10.75 10.25 11.3096 10.25 12C10.25 12.6904 9.69036 13.25 9 13.25C8.30964 13.25 7.75 12.6904 7.75 12Z"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.95491 5.06107C3 6.3754 3 8.25027 3 12C3 15.7497 3 17.6246 3.95491 18.9389C4.26331 19.3634 4.6366 19.7367 5.06107 20.0451C6.3754 21 8.25027 21 12 21C15.7497 21 17.6246 21 18.9389 20.0451C19.3634 19.7367 19.7367 19.3634 20.0451 18.9389C21 17.6246 21 15.7497 21 12C21 8.25027 21 6.3754 20.0451 5.06107C19.7367 4.6366 19.3634 4.26331 18.9389 3.95491C17.6246 3 15.7497 3 12 3C8.25027 3 6.3754 3 5.06107 3.95491C4.6366 4.26331 4.26331 4.6366 3.95491 5.06107ZM9 9.25C7.48122 9.25 6.25 10.4812 6.25 12C6.25 13.5188 7.48122 14.75 9 14.75C10.2588 14.75 11.32 13.9043 11.6465 12.75H13.4887C13.544 13.021 13.5084 13.3061 13.382 13.559L13.3292 13.6646C13.1439 14.0351 13.2941 14.4856 13.6646 14.6708C14.0351 14.8561 14.4856 14.7059 14.6708 14.3354L14.7236 14.2298C14.9555 13.7661 15.0485 13.2532 15.0026 12.75H16.4887C16.544 13.021 16.5084 13.3061 16.382 13.559L16.3292 13.6646C16.1439 14.0351 16.2941 14.4856 16.6646 14.6708C17.0351 14.8561 17.4856 14.7059 17.6708 14.3354L17.7236 14.2298C18.1107 13.4556 18.1107 12.5444 17.7236 11.7702C17.5642 11.4514 17.2384 11.25 16.882 11.25H14.0151C14.0047 11.2498 13.9942 11.2498 13.9838 11.25H11.6465C11.32 10.0957 10.2588 9.25 9 9.25Z"/>
                    </svg>
                    <input :type="isOpen ? 'text' : 'password'" placeholder="Password" autocomplete="off" class="w-full bg-transparent border-none text-xs md:text-sm text-[#ABABAB] font-normal focus:outline-none focus:ring-0 placeholder:text-xs md:placeholder:text-sm placeholder:text-[#ABABAB] placeholder:font-normal">
                    <button @click="isOpen = !isOpen">
                        <svg x-show="!isOpen" class="w-6 fill-[#2D264B] cursor-pointer" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.75 9C8.75 7.75736 9.75736 6.75 11 6.75C12.2426 6.75 13.25 7.75736 13.25 9C13.25 10.2426 12.2426 11.25 11 11.25C9.75736 11.25 8.75 10.2426 8.75 9Z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.35173 2.59572C6.92325 1.30899 8.85905 0.25 11 0.25C13.141 0.25 15.0768 1.30899 16.6483 2.59572C18.2284 3.88946 19.5204 5.47865 20.3886 6.68801L20.4602 6.78759C20.9829 7.51384 21.4131 8.11166 21.4131 9C21.4131 9.88835 20.9829 10.4862 20.4602 11.2124L20.3886 11.312C19.5204 12.5214 18.2284 14.1105 16.6483 15.4043C15.0768 16.691 13.141 17.75 11 17.75C8.85905 17.75 6.92325 16.691 5.35173 15.4043C3.77164 14.1105 2.47962 12.5214 1.61142 11.312L1.53981 11.2124C1.01715 10.4862 0.586914 9.88834 0.586914 9C0.586914 8.11166 1.01715 7.51384 1.53981 6.78759L1.61142 6.68801C2.47962 5.47865 3.77164 3.88946 5.35173 2.59572ZM11 5.25C8.92893 5.25 7.25 6.92893 7.25 9C7.25 11.0711 8.92893 12.75 11 12.75C13.0711 12.75 14.75 11.0711 14.75 9C14.75 6.92893 13.0711 5.25 11 5.25Z"/>
                        </svg>
                        <svg x-show="isOpen" class="w-6 fill-[#2D264B] cursor-pointer" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M22.4685 4.58565C22.7919 4.32689 22.8444 3.85492 22.5856 3.53148C22.3269 3.20803 21.8549 3.15559 21.5314 3.41435L18.2061 6.0746C18.0245 5.91148 17.8385 5.75145 17.6482 5.59571C16.0767 4.30899 14.1409 3.25 12 3.25C9.85902 3.25 7.92322 4.30899 6.3517 5.59571C4.7716 6.88946 3.47959 8.47865 2.61138 9.68801L2.53978 9.78759C2.01712 10.5138 1.58688 11.1117 1.58688 12C1.58688 12.8883 2.01712 13.4862 2.53978 14.2124L2.61138 14.312C3.15604 15.0707 3.86748 15.9788 4.71221 16.8697L1.53145 19.4143C1.208 19.6731 1.15556 20.1451 1.41431 20.4685C1.67307 20.792 2.14504 20.8444 2.46849 20.5856L22.4685 4.58565ZM8.66172 13.7101L9.87446 12.7399C9.7938 12.5082 9.74997 12.2592 9.74997 12C9.74997 10.7574 10.7573 9.75 12 9.75C12.4362 9.75 12.8434 9.87412 13.1882 10.089L14.4006 9.11901C13.7502 8.57644 12.9132 8.25 12 8.25C9.9289 8.25 8.24997 9.92893 8.24997 12C8.24997 12.616 8.39851 13.1974 8.66172 13.7101Z"/>
                            <path d="M20.6951 8.76481L15.6672 12.7871C15.3056 14.4803 13.801 15.75 12 15.75L11.9639 15.7498L7.54799 19.2825C8.8673 20.1396 10.3745 20.75 12 20.75C14.1409 20.75 16.0767 19.691 17.6482 18.4043C19.2283 17.1105 20.5204 15.5213 21.3886 14.312L21.4602 14.2124C21.9828 13.4862 22.4131 12.8883 22.4131 12C22.4131 11.1117 21.9828 10.5138 21.4602 9.78759L21.3886 9.68801C21.181 9.39891 20.9492 9.0881 20.6951 8.76481Z"/>
                        </svg>
                    </button>
                </label>
                <button class="w-full bg-[#979696] py-1.5 px-3 rounded shadow-lg shadow-black/20">
                    <h1 class="text-xs md:text-sm text-[#6A6A6A] font-semibold uppercase">Masuk</h1>
                </button>
            </div>
        </div>
        <img class="w-[10%] md:w-[20%] h-[10%] md:h-[20%]" src="/svgs/loginRight.svg">
    </section>
    <img class="w-full h-full object-fill md:object-cover" src="/images/backgroundLogin.png">

    <section x-data="{ isOpen : false }">
        <form action="" method="" x-show="isOpen" x-transition.duration.300ms.opacity.50 @click.outside="isOpen = false" class="absolute bottom-16 right-4 flex flex-col justify-between items-center w-72 h-80 bg-[#E9E9FF] rounded-xl shadow-lg shadow-black/20">
            <div class="w-full flex justify-center items-center gap-3 bg-[#615EFC] py-3 px-12 rounded-t-xl">
                <img class="w-7 h-7" src="/svgs/logo.svg">
                <h1 class="text-[10px] md:text-xs text-white font-medium">Admin PMD LabuhanBatu</h1>
            </div>
            <div class="w-full px-3.5">
                <h1 class="text-center text-[10px] md:text-xs text-[#9C9C9C] font-normal">Pesan akan terkirim secara anonym</h1>
            </div>
            <div class="w-full p-3.5 flex justify-center items-center">
                <input type="text" placeholder="Kirim Pesan ke Admin PMD" autocomplete="off" class="w-full bg-white border-none text-[10px] md:text-xs text-[#ABABAB] font-normal rounded-l-md focus:outline-none focus:ring-0 placeholder:text-[10px] md:placeholder:text-xs placeholder:text-[#ABABAB] placeholder:font-normal">
                <button class="bg-[#615EFC] py-2 px-4 rounded-r-md">
                    <h1 class="text-[10px] md:text-xs text-white font-medium">Kirim</h1>
                </button>
            </div>
        </form>

        <button @click="isOpen = !isOpen" class="absolute bottom-4 right-4 flex items-center gap-3">
            <h1 class="text-xs text-black font-semibold">Chat Admin PMD</h1>
            <div class="bg-[#615EFC] p-1.5 rounded-lg">
                <svg class="w-5 fill-[#D3E0FF]" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.4689 7.36431C23.08 4.17771 20.2824 1.38009 17.0958 1.99123L7.94673 3.74587C5.95789 4.1273 4.36735 5.63275 3.86202 7.58892C2.85311 11.4945 6.47515 15.0639 10.3642 13.9203C10.4716 13.8887 10.5714 13.9885 10.5398 14.0959C9.39617 17.985 12.9656 21.607 16.8712 20.5981C18.8274 20.0928 20.3328 18.5022 20.7142 16.5134L22.4689 7.36431Z"/>
                    <path d="M4.94454 16.3336C5.23744 16.0407 5.23744 15.5658 4.94454 15.2729C4.65165 14.98 4.17678 14.98 3.88388 15.2729L2.46967 16.6872C2.17678 16.98 2.17678 17.4549 2.46967 17.7478C2.76256 18.0407 3.23744 18.0407 3.53033 17.7478L4.94454 16.3336Z"/>
                    <path d="M8.48008 15.98C8.77297 16.2729 8.77297 16.7478 8.48008 17.0407L7.06586 18.4549C6.77297 18.7478 6.2981 18.7478 6.0052 18.4549C5.71231 18.162 5.71231 17.6872 6.0052 17.3943L7.41942 15.98C7.71231 15.6872 8.18718 15.6872 8.48008 15.98Z"/>
                    <path d="M9.18718 20.5762C9.48008 20.2833 9.48008 19.8085 9.18718 19.5156C8.89429 19.2227 8.41942 19.2227 8.12652 19.5156L6.71231 20.9298C6.41942 21.2227 6.41942 21.6976 6.71231 21.9905C7.0052 22.2833 7.48008 22.2833 7.77297 21.9905L9.18718 20.5762Z"/>
                </svg>
            </div>
        </button>
    </section>
</main>