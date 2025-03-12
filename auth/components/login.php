<main class="md:flex md:justify-center md:items-center md:h-screen">
    <section class="absolute flex justify-center items-center gap-3 mt-[5rem] md:mt-0">
        <img class="w-[10%] md:w-[20%] h-[10%] md:h-[20%]" src="/svgs/loginLeft.svg">
        <div class="bg-white bg-opacity-40 backdrop-blur-sm p-8 rounded-2xl space-y-8">
            <div class="space-y-4">
                <img class="w-20 h-20 mx-auto" src="/svgs/logo.svg">
                <h1 class="mx-4 text-center text-lg md:text-2xl text-black md:text-white font-bold">Si-Pelopor Desa</h1>
            </div>
            <form class="space-y-6">
                <label class="w-full flex items-center border border-[#ABABAB] py-1 px-3 rounded">
                    <svg class="w-6 fill-[#ABABAB]" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2C9.37665 2 7.25 4.12665 7.25 6.75C7.25 9.37335 9.37665 11.5 12 11.5C14.6234 11.5 16.75 9.37335 16.75 6.75C16.75 4.12665 14.6234 2 12 2Z"/>
                        <path d="M9 13C6.37665 13 4.25 15.1266 4.25 17.75C4.25 20.3734 6.37665 22.5 9 22.5H15C17.6234 22.5 19.75 20.3734 19.75 17.75C19.75 15.1266 17.6234 13 15 13H9Z"/>
                    </svg>
                    <input type="text" name="username" placeholder="Username" autocomplete="off" autofocus class="w-full bg-transparent border-none text-xs md:text-sm text-[#ABABAB] font-normal focus:outline-none focus:ring-0 placeholder:text-xs md:placeholder:text-sm placeholder:text-[#ABABAB] placeholder:font-normal">
                </label>
                <label x-data="{ isOpen : false }" class="w-full flex items-center border border-[#ABABAB] py-1 px-3 rounded">
                    <svg class="w-6 fill-[#ABABAB]" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.75 12C7.75 11.3096 8.30964 10.75 9 10.75C9.69036 10.75 10.25 11.3096 10.25 12C10.25 12.6904 9.69036 13.25 9 13.25C8.30964 13.25 7.75 12.6904 7.75 12Z"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.95491 5.06107C3 6.3754 3 8.25027 3 12C3 15.7497 3 17.6246 3.95491 18.9389C4.26331 19.3634 4.6366 19.7367 5.06107 20.0451C6.3754 21 8.25027 21 12 21C15.7497 21 17.6246 21 18.9389 20.0451C19.3634 19.7367 19.7367 19.3634 20.0451 18.9389C21 17.6246 21 15.7497 21 12C21 8.25027 21 6.3754 20.0451 5.06107C19.7367 4.6366 19.3634 4.26331 18.9389 3.95491C17.6246 3 15.7497 3 12 3C8.25027 3 6.3754 3 5.06107 3.95491C4.6366 4.26331 4.26331 4.6366 3.95491 5.06107ZM9 9.25C7.48122 9.25 6.25 10.4812 6.25 12C6.25 13.5188 7.48122 14.75 9 14.75C10.2588 14.75 11.32 13.9043 11.6465 12.75H13.4887C13.544 13.021 13.5084 13.3061 13.382 13.559L13.3292 13.6646C13.1439 14.0351 13.2941 14.4856 13.6646 14.6708C14.0351 14.8561 14.4856 14.7059 14.6708 14.3354L14.7236 14.2298C14.9555 13.7661 15.0485 13.2532 15.0026 12.75H16.4887C16.544 13.021 16.5084 13.3061 16.382 13.559L16.3292 13.6646C16.1439 14.0351 16.2941 14.4856 16.6646 14.6708C17.0351 14.8561 17.4856 14.7059 17.6708 14.3354L17.7236 14.2298C18.1107 13.4556 18.1107 12.5444 17.7236 11.7702C17.5642 11.4514 17.2384 11.25 16.882 11.25H14.0151C14.0047 11.2498 13.9942 11.2498 13.9838 11.25H11.6465C11.32 10.0957 10.2588 9.25 9 9.25Z"/>
                    </svg>
                    <input :type="isOpen ? 'text' : 'password'" name="password" placeholder="Password" autocomplete="off" class="w-full bg-transparent border-none text-xs md:text-sm text-[#ABABAB] font-normal focus:outline-none focus:ring-0 placeholder:text-xs md:placeholder:text-sm placeholder:text-[#ABABAB] placeholder:font-normal">
                    <button type="button" @click="isOpen = !isOpen">
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
                <button type="submit" class="w-full bg-primary md:bg-white py-2 md:py-1.5 px-3 rounded shadow-lg shadow-black/20">
                    <h1 class="text-xs md:text-sm text-white md:text-primary font-semibold uppercase">Masuk</h1>
                </button>
            </form>
        </div>
        <img class="w-[10%] md:w-[20%] h-[10%] md:h-[20%]" src="/svgs/loginRight.svg">
    </section>
    <img class="w-full h-full object-fill md:object-cover" src="/images/backgroundLogin.png">

    <div x-data="{ modal : false }" x-show="modal" x-transition.duration.300ms.opacity.50 :class="{ 'visible': modal, 'invisible': !modal }" class="invisible fixed inset-0 z-50 bg-[#0000006E] flex items-center justify-center h-screen">
        <div class="w-[80%] sm:w-[50%] md:w-[35%] bg-white py-10 px-5 rounded-lg md:rounded-xl space-y-4">
            <svg class="w-10 mx-auto" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M59.7615 29.873C59.7615 25.9646 58.9917 22.0945 57.4961 18.4837C56.0004 14.8728 53.8082 11.5919 51.0445 8.82831C48.2809 6.06468 45 3.87246 41.3892 2.3768C37.7783 0.881135 33.9083 0.111328 29.9999 0.111328C26.0916 0.111328 22.2215 0.881135 18.6106 2.3768C14.9998 3.87246 11.7189 6.06468 8.95526 8.82831C6.19164 11.5919 3.99941 14.8728 2.50375 18.4837C1.00809 22.0945 0.238281 25.9646 0.238281 29.873C0.238281 37.7662 3.37387 45.3362 8.95526 50.9176C14.5366 56.499 22.1066 59.6346 29.9999 59.6346C37.8932 59.6346 45.4632 56.499 51.0445 50.9176C56.6259 45.3362 59.7615 37.7662 59.7615 29.873ZM5.19855 29.873C5.19855 23.2952 7.81154 16.9869 12.4627 12.3357C17.1139 7.68459 23.4222 5.0716 29.9999 5.0716C36.5776 5.0716 42.886 7.68459 47.5371 12.3357C52.1883 16.9869 54.8013 23.2952 54.8013 29.873C54.8013 36.4507 52.1883 42.759 47.5371 47.4102C42.886 52.0613 36.5776 54.6743 29.9999 54.6743C23.4222 54.6743 17.1139 52.0613 12.4627 47.4102C7.81154 42.759 5.19855 36.4507 5.19855 29.873ZM25.0396 23.6726C25.0396 24.1612 24.9434 24.6449 24.7565 25.0963C24.5695 25.5476 24.2955 25.9577 23.95 26.3032C23.6046 26.6486 23.1944 26.9227 22.7431 27.1096C22.2917 27.2966 21.808 27.3928 21.3194 27.3928C20.8309 27.3928 20.3471 27.2966 19.8958 27.1096C19.4444 26.9227 19.0343 26.6486 18.6888 26.3032C18.3434 25.9577 18.0694 25.5476 17.8824 25.0963C17.6955 24.6449 17.5992 24.1612 17.5992 23.6726C17.5992 22.686 17.9912 21.7397 18.6888 21.042C19.3865 20.3444 20.3328 19.9524 21.3194 19.9524C22.3061 19.9524 23.2523 20.3444 23.95 21.042C24.6477 21.7397 25.0396 22.686 25.0396 23.6726ZM42.4006 23.6726C42.4006 24.6593 42.0086 25.6055 41.311 26.3032C40.6133 27.0009 39.667 27.3928 38.6804 27.3928C37.6937 27.3928 36.7475 27.0009 36.0498 26.3032C35.3521 25.6055 34.9602 24.6593 34.9602 23.6726C34.9602 22.686 35.3521 21.7397 36.0498 21.042C36.7475 20.3444 37.6937 19.9524 38.6804 19.9524C39.667 19.9524 40.6133 20.3444 41.311 21.042C42.0086 21.7397 42.4006 22.686 42.4006 23.6726ZM20.7341 43.8708C25.3224 38.4344 34.6725 38.4344 39.2657 43.8708C39.4706 44.1345 39.7268 44.3541 40.0186 44.5163C40.3105 44.6786 40.6322 44.7803 40.9643 44.8152C41.2964 44.8502 41.6322 44.8177 41.9515 44.7197C42.2707 44.6217 42.5669 44.4603 42.8223 44.245C43.0776 44.0298 43.2869 43.7652 43.4375 43.4671C43.5881 43.169 43.6769 42.8436 43.6987 42.5103C43.7204 42.1771 43.6747 41.8429 43.5641 41.5277C43.4536 41.2126 43.2805 40.923 43.0553 40.6764C36.483 32.8888 23.5119 32.8888 16.9445 40.6764C16.7193 40.923 16.5462 41.2126 16.4357 41.5277C16.3251 41.8429 16.2794 42.1771 16.3011 42.5103C16.3229 42.8436 16.4117 43.169 16.5623 43.4671C16.7129 43.7652 16.9222 44.0298 17.1775 44.245C17.4329 44.4603 17.7291 44.6217 18.0483 44.7197C18.3676 44.8177 18.7034 44.8502 19.0355 44.8152C19.3676 44.7803 19.6893 44.6786 19.9812 44.5163C20.2731 44.3541 20.5292 44.1345 20.7341 43.8708Z" fill="#F21E1E" fill-opacity="0.93"/>
            </svg>
            <div class="text-center mx-10">
                <h1 class="text-base md:text-lg text-[#4A4A4A] font-semibold">
                    Password anda salah
                </h1>
            </div>
            <div @click="modal = false" class="w-fit bg-[#F21E1EED] py-1.5 px-6 rounded mx-auto cursor-pointer">
                <h1 class="text-xs md:text-sm text-white font-medium capitalize">Mengerti</h1>
            </div>
        </div>
    </div>

    <section x-data="{ isOpen : false }">
        <form x-show="isOpen" x-transition.duration.300ms.opacity.50 :class="{ 'visible': isOpen, 'invisible': !isOpen }" @click.outside="isOpen = false" class="invisible absolute bottom-16 right-4 flex flex-col justify-between items-center w-72 h-80 bg-[#E9E9FF] rounded-xl shadow-lg shadow-black/20">
            <div class="w-full flex justify-center items-center gap-3 bg-primary py-3 px-12 rounded-t-xl">
                <img class="w-7 h-7" src="/svgs/logo.svg">
                <h1 class="text-[10px] md:text-xs text-white font-medium">Admin PMD LabuhanBatu</h1>
            </div>
            <div class="w-full px-3.5">
                <h1 class="text-center text-[10px] md:text-xs text-[#9C9C9C] font-normal">Pesan akan terkirim secara anonym</h1>
            </div>
            <div class="w-full p-3.5 flex justify-center items-center">
                <input name="message" type="text" placeholder="Kirim Pesan ke Admin PMD" autocomplete="off" class="w-full bg-white border-none text-[10px] md:text-xs text-[#ABABAB] font-normal rounded-l-md focus:outline-none focus:ring-0 placeholder:text-[10px] md:placeholder:text-xs placeholder:text-[#ABABAB] placeholder:font-normal">
                <button class="bg-primary py-2 px-4 rounded-r-md">
                    <h1 class="text-[10px] md:text-xs text-white font-medium">Kirim</h1>
                </button>
            </div>
        </form>

        <button @click="isOpen = !isOpen" class="absolute bottom-4 right-4 flex items-center gap-3">
            <h1 class="text-xs text-black font-semibold">Chat Admin PMD</h1>
            <div class="bg-primary p-1.5 rounded-lg">
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