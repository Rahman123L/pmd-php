<aside x-show="isOpen" 
    @click.outside="if (window.innerWidth < 786) isOpen = false"
    x-transition:enter="transform transition-transform duration-300"
    x-transition:enter-start="-translate-x-full" 
    x-transition:enter-end="translate-x-0"
    x-transition:leave="transform transition-transform duration-300"
    x-transition:leave-start="translate-x-0" 
    x-transition:leave-end="-translate-x-full"
    class="hidden fixed top-0 left-0 z-50 w-60 bg-primary h-screen scrollbar-y overflow-hidden"
    :class="{ 'block': isOpen, 'hidden': !isOpen, 'w-60': isOpenn, 'w-20 transition-all duration-500': !isOpenn,}"
    >
    <div :class="isOpenn ? 'justify-between' : 'justify-evenly'" class="flex justify-between items-center bg-[#ECE5DD] px-4 py-3 md:py-2.5 lg:py-3">
        <div :class="isOpenn ? 'block' : 'hidden'" class="flex items-center gap-2 md:gap-3">
            <img loading="lazy" class="w-8 md:w-10 object-contain" src="/svgs/logo.svg">
            <h1 class="text-sm md:text-base text-secondary font-bold inter">Si-Pelopor</h1>
        </div>
        <button @click="isOpenn = !isOpenn" class="hidden md:block">
            <svg class="w-[22px] md:w-6 fill-black" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.75 7C20.75 7.41421 20.4142 7.75 20 7.75L4 7.75C3.58579 7.75 3.25 7.41421 3.25 7C3.25 6.58579 3.58579 6.25 4 6.25L20 6.25C20.4142 6.25 20.75 6.58579 20.75 7Z"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.75 12C20.75 12.4142 20.4142 12.75 20 12.75L4 12.75C3.58579 12.75 3.25 12.4142 3.25 12C3.25 11.5858 3.58579 11.25 4 11.25L20 11.25C20.4142 11.25 20.75 11.5858 20.75 12Z"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.75 17C20.75 17.4142 20.4142 17.75 20 17.75L4 17.75C3.58579 17.75 3.25 17.4142 3.25 17C3.25 16.5858 3.58579 16.25 4 16.25L20 16.25C20.4142 16.25 20.75 16.5858 20.75 17Z"/>
            </svg>
        </button>
    </div>
    <div class="grid gap-3 mt-3">
        <a href="/pmd/dashboard.php">
            <button class="w-full relative group flex items-center gap-2 md:gap-3 pr-5">
                <div class="invisible transition-all group-hover:visible group-focus:visible bg-white py-3.5 md:py-4 px-1 rounded-r-md"></div>
                <div :class="isOpenn ? 'py-1.5' : 'justify-center py-2'" class="flex items-center gap-2 md:gap-3 w-full py-1.5 px-3 bg-transparent transition-colors duration-300 group-hover:bg-white group-focus:bg-white rounded-md group-hover:shadow-lg group-hover:shadow-black/20 group-focus:shadow-lg group-focus:shadow-black/20">
                    <svg class="w-[14px] fill-white transition-colors duration-300 group-hover:fill-primary group-focus:fill-primary" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.19578 2.31035C1.4179 3.60206 0.528962 4.24791 0.179825 5.20192C0.151817 5.27845 0.126626 5.35598 0.104301 5.43436C-0.173996 6.41139 0.165548 7.4564 0.844637 9.54642C1.52373 11.6364 1.86327 12.6814 2.6627 13.3083C2.72683 13.3586 2.79278 13.4065 2.86043 13.452C3.70364 14.0186 4.80243 14.0186 7 14.0186C9.19758 14.0186 10.2964 14.0186 11.1396 13.452C11.2072 13.4065 11.2732 13.3586 11.3373 13.3083C12.1367 12.6814 12.4763 11.6364 13.1554 9.54642C13.8345 7.4564 14.174 6.41139 13.8957 5.43436C13.8734 5.35598 13.8482 5.27845 13.8202 5.20192C13.471 4.24791 12.5821 3.60206 10.8042 2.31036C9.02636 1.01865 8.13741 0.372796 7.1222 0.335554C7.04077 0.332566 6.95924 0.332566 6.8778 0.335554C5.86259 0.372796 4.97365 1.01865 3.19578 2.31035ZM5.66667 10.3798C5.39052 10.3798 5.16667 10.6036 5.16667 10.8798C5.16667 11.1559 5.39052 11.3798 5.66667 11.3798H8.33333C8.60948 11.3798 8.83333 11.1559 8.83333 10.8798C8.83333 10.6036 8.60948 10.3798 8.33333 10.3798H5.66667Z"/>
                    </svg>
                    <h1 :class="isOpenn ? 'block' : 'hidden'" class="text-xs md:text-sm text-white font-semibold transition-colors duration-300 group-hover:text-primary group-focus:text-primary">Dashboard</h1>
                </div>
            </button>
        </a>
        <div class="border-t border-[#54155E]"></div>
        <h1 class="text-xs md:text-sm text-white font-semibold ml-5">Menu</h1>
        <div x-data="{ isOpen : false }" @click.outside="isOpen = false" class="grid gap-2">
            <button @click="isOpen = !isOpen" class="w-full group flex items-center gap-2 md:gap-3 pr-5">
                <div class="invisible transition-all group-hover:visible group-focus:visible bg-white py-3.5 md:py-4 px-1 rounded-r-md"></div>
                <div :class="isOpenn ? 'py-1.5' : 'justify-center py-2'" class="flex justify-between items-center w-full py-1.5 px-3 bg-transparent transition-colors duration-300 group-hover:bg-white group-focus:bg-white rounded-md group-hover:shadow-lg group-hover:shadow-black/20 group-focus:shadow-lg group-focus:shadow-black/20">
                    <div class="flex items-center gap-2 md:gap-3">
                        <svg class="w-[14px] fill-white transition-colors duration-300 group-hover:fill-primary group-focus:fill-primary" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.63661 1.7073C0 2.58352 0 3.83343 0 6.33325V7.66659C0 10.1664 0 11.4163 0.63661 12.2925C0.842209 12.5755 1.09107 12.8244 1.37405 13.03C2.25027 13.6666 3.50018 13.6666 6 13.6666C8.49982 13.6666 9.74973 13.6666 10.626 13.03C10.9089 12.8244 11.1578 12.5755 11.3634 12.2925C12 11.4163 12 10.1664 12 7.66659V6.33325C12 3.83343 12 2.58352 11.3634 1.7073C11.1578 1.42432 10.9089 1.17546 10.626 0.969862C9.74973 0.333252 8.49982 0.333252 6 0.333252C3.50018 0.333252 2.25027 0.333252 1.37405 0.969862C1.09107 1.17546 0.842209 1.42432 0.63661 1.7073ZM3.33333 3.83325C3.05719 3.83325 2.83333 4.05711 2.83333 4.33325C2.83333 4.60939 3.05719 4.83325 3.33333 4.83325H8.66667C8.94281 4.83325 9.16667 4.60939 9.16667 4.33325C9.16667 4.05711 8.94281 3.83325 8.66667 3.83325H3.33333ZM3.33333 6.49992C3.05719 6.49992 2.83333 6.72378 2.83333 6.99992C2.83333 7.27606 3.05719 7.49992 3.33333 7.49992H8.66667C8.94281 7.49992 9.16667 7.27606 9.16667 6.99992C9.16667 6.72378 8.94281 6.49992 8.66667 6.49992H3.33333ZM3.33333 9.16659C3.05719 9.16659 2.83333 9.39044 2.83333 9.66659C2.83333 9.94273 3.05719 10.1666 3.33333 10.1666H8.66667C8.94281 10.1666 9.16667 9.94273 9.16667 9.66659C9.16667 9.39044 8.94281 9.16659 8.66667 9.16659H3.33333Z"/>
                        </svg>
                        <h1 :class="isOpenn ? 'block' : 'hidden'" class="text-xs md:text-sm text-white font-semibold transition-colors duration-300 group-hover:text-primary group-focus:text-primary">Dokumen</h1>
                    </div>
                    <svg :class="{ 'block' : isOpenn, 'hidden' : !isOpenn, 'rotate-90' : isOpen }" class="w-[5px] fill-white transition-colors duration-300 group-hover:fill-primary group-focus:fill-primary" viewBox="0 0 4 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.14131 0.772516C0.969697 0.602425 0.69269 0.603661 0.5226 0.775276C0.352509 0.946891 0.353745 1.2239 0.52536 1.39399L1.55376 2.41325C1.97113 2.82691 2.25743 3.11161 2.45116 3.35283C2.63934 3.58715 2.7039 3.73766 2.72108 3.87246C2.73187 3.9571 2.73187 4.04274 2.72108 4.12738C2.7039 4.26218 2.63934 4.41269 2.45116 4.64701C2.25743 4.88823 1.97113 5.17292 1.55376 5.58659L0.52536 6.60585C0.353745 6.77594 0.352509 7.05295 0.5226 7.22456C0.69269 7.39618 0.969697 7.39741 1.14131 7.22732L2.18824 6.1897C2.58255 5.7989 2.90483 5.47949 3.13339 5.1949C3.37105 4.89896 3.5431 4.59858 3.58906 4.23801C3.60921 4.07991 3.60921 3.91992 3.58906 3.76182C3.5431 3.40126 3.37105 3.10088 3.13339 2.80494C2.90483 2.52034 2.58256 2.20094 2.18824 1.81014L1.14131 0.772516Z"/>
                    </svg>
                </div>
            </button>
            <div x-show="isOpen" x-transition.duration.300ms.opacity.50 class="grid gap-2">
                <a href="#">
                    <button class="w-full group gap-2 md:gap-3 px-4 md:px-5">
                        <div class="flex items-center gap-2 md:gap-3 w-full py-1.5 px-3 bg-transparent">
                            <svg class="w-[14px] fill-white" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.63661 1.7073C0 2.58352 0 3.83343 0 6.33325V7.66659C0 10.1664 0 11.4163 0.63661 12.2925C0.842209 12.5755 1.09107 12.8244 1.37405 13.03C2.25027 13.6666 3.50018 13.6666 6 13.6666C8.49982 13.6666 9.74973 13.6666 10.626 13.03C10.9089 12.8244 11.1578 12.5755 11.3634 12.2925C12 11.4163 12 10.1664 12 7.66659V6.33325C12 3.83343 12 2.58352 11.3634 1.7073C11.1578 1.42432 10.9089 1.17546 10.626 0.969862C9.74973 0.333252 8.49982 0.333252 6 0.333252C3.50018 0.333252 2.25027 0.333252 1.37405 0.969862C1.09107 1.17546 0.842209 1.42432 0.63661 1.7073ZM3.33333 3.83325C3.05719 3.83325 2.83333 4.05711 2.83333 4.33325C2.83333 4.60939 3.05719 4.83325 3.33333 4.83325H8.66667C8.94281 4.83325 9.16667 4.60939 9.16667 4.33325C9.16667 4.05711 8.94281 3.83325 8.66667 3.83325H3.33333ZM3.33333 6.49992C3.05719 6.49992 2.83333 6.72378 2.83333 6.99992C2.83333 7.27606 3.05719 7.49992 3.33333 7.49992H8.66667C8.94281 7.49992 9.16667 7.27606 9.16667 6.99992C9.16667 6.72378 8.94281 6.49992 8.66667 6.49992H3.33333ZM3.33333 9.16659C3.05719 9.16659 2.83333 9.39044 2.83333 9.66659C2.83333 9.94273 3.05719 10.1666 3.33333 10.1666H8.66667C8.94281 10.1666 9.16667 9.94273 9.16667 9.66659C9.16667 9.39044 8.94281 9.16659 8.66667 9.16659H3.33333Z"/>
                            </svg>
                            <h1 :class="isOpenn ? 'block' : 'hidden'" class="text-xs md:text-sm text-white font-semibold">Verifikasi RPJMdes</h1>
                        </div>
                        <div class="mx-1.5 group-hover:border-b-[0.5px] group-hover:border-white group-focus:border-b-[0.5px] group-focus:border-white"></div>
                    </button>
                </a>
                <div x-data="{ isOpen : false }" @click.outside="isOpen = false" class="grid gap-3">
                    <button @click="isOpen = !isOpen" class="w-full group flex items-center gap-2 md:gap-3 pr-5">
                        <div class="invisible transition-all group-hover:visible group-focus:visible bg-white py-3.5 md:py-4 px-1 rounded-r-md"></div>
                        <div :class="isOpenn ? 'py-1.5' : 'justify-center py-2'" class="flex justify-between items-center w-full py-1.5 px-3 bg-transparent transition-colors duration-300 group-hover:bg-white group-focus:bg-white rounded-md group-hover:shadow-lg group-hover:shadow-black/20 group-focus:shadow-lg group-focus:shadow-black/20">
                            <div class="flex items-center gap-2 md:gap-3">
                                <svg class="w-[14px] fill-white transition-colors duration-300 group-hover:fill-primary group-focus:fill-primary" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.63661 1.70736C0 2.58358 0 3.83349 0 6.33331V7.66665C0 10.1665 0 11.4164 0.63661 12.2926C0.842209 12.5756 1.09107 12.8244 1.37405 13.03C2.25027 13.6666 3.50018 13.6666 6 13.6666C8.49982 13.6666 9.74973 13.6666 10.626 13.03C10.9089 12.8244 11.1578 12.5756 11.3634 12.2926C12 11.4164 12 10.1665 12 7.66665V6.33331C12 3.83349 12 2.58358 11.3634 1.70736C11.1578 1.42438 10.9089 1.17552 10.626 0.969923C9.74973 0.333313 8.49982 0.333313 6 0.333313C3.50018 0.333313 2.25027 0.333313 1.37405 0.969923C1.09107 1.17552 0.842209 1.42438 0.63661 1.70736ZM3.33333 3.83331C3.05719 3.83331 2.83333 4.05717 2.83333 4.33331C2.83333 4.60946 3.05719 4.83331 3.33333 4.83331H5.33333C5.60948 4.83331 5.83333 4.60946 5.83333 4.33331C5.83333 4.05717 5.60948 3.83331 5.33333 3.83331H3.33333ZM3.33333 6.49998C3.05719 6.49998 2.83333 6.72384 2.83333 6.99998C2.83333 7.27612 3.05719 7.49998 3.33333 7.49998H8.66667C8.94281 7.49998 9.16667 7.27612 9.16667 6.99998C9.16667 6.72384 8.94281 6.49998 8.66667 6.49998H3.33333ZM3.33333 9.16665C3.05719 9.16665 2.83333 9.3905 2.83333 9.66665C2.83333 9.94279 3.05719 10.1666 3.33333 10.1666H5.33333C5.60948 10.1666 5.83333 9.94279 5.83333 9.66665C5.83333 9.3905 5.60948 9.16665 5.33333 9.16665H3.33333Z"/>
                                </svg>
                                <h1 :class="isOpenn ? 'block' : 'hidden'" class="text-xs md:text-sm text-white font-semibold transition-colors duration-300 group-hover:text-primary group-focus:text-primary">RKPDes</h1>
                            </div>
                            <svg :class="{ 'block' : isOpenn, 'hidden' : !isOpenn, 'rotate-90' : isOpen }" class="w-[5px] fill-white transition-colors duration-300 group-hover:fill-primary group-focus:fill-primary" viewBox="0 0 4 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.14131 0.772516C0.969697 0.602425 0.69269 0.603661 0.5226 0.775276C0.352509 0.946891 0.353745 1.2239 0.52536 1.39399L1.55376 2.41325C1.97113 2.82691 2.25743 3.11161 2.45116 3.35283C2.63934 3.58715 2.7039 3.73766 2.72108 3.87246C2.73187 3.9571 2.73187 4.04274 2.72108 4.12738C2.7039 4.26218 2.63934 4.41269 2.45116 4.64701C2.25743 4.88823 1.97113 5.17292 1.55376 5.58659L0.52536 6.60585C0.353745 6.77594 0.352509 7.05295 0.5226 7.22456C0.69269 7.39618 0.969697 7.39741 1.14131 7.22732L2.18824 6.1897C2.58255 5.7989 2.90483 5.47949 3.13339 5.1949C3.37105 4.89896 3.5431 4.59858 3.58906 4.23801C3.60921 4.07991 3.60921 3.91992 3.58906 3.76182C3.5431 3.40126 3.37105 3.10088 3.13339 2.80494C2.90483 2.52034 2.58256 2.20094 2.18824 1.81014L1.14131 0.772516Z"/>
                            </svg>
                        </div>
                    </button>
                    <div x-show="isOpen" x-transition.duration.300ms.opacity.50 class="grid gap-3">
                        <a href="/pmd/rkpdes.php">
                            <button class="w-full group gap-2 md:gap-3 px-4 md:px-5">
                                <div class="flex items-center gap-2 md:gap-3 w-full py-1.5 px-3 bg-transparent">
                                    <svg class="w-[14px] fill-white" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.63661 1.7073C0 2.58352 0 3.83343 0 6.33325V7.66659C0 10.1664 0 11.4163 0.63661 12.2925C0.842209 12.5755 1.09107 12.8244 1.37405 13.03C2.25027 13.6666 3.50018 13.6666 6 13.6666C8.49982 13.6666 9.74973 13.6666 10.626 13.03C10.9089 12.8244 11.1578 12.5755 11.3634 12.2925C12 11.4163 12 10.1664 12 7.66659V6.33325C12 3.83343 12 2.58352 11.3634 1.7073C11.1578 1.42432 10.9089 1.17546 10.626 0.969862C9.74973 0.333252 8.49982 0.333252 6 0.333252C3.50018 0.333252 2.25027 0.333252 1.37405 0.969862C1.09107 1.17546 0.842209 1.42432 0.63661 1.7073ZM3.33333 3.83325C3.05719 3.83325 2.83333 4.05711 2.83333 4.33325C2.83333 4.60939 3.05719 4.83325 3.33333 4.83325H8.66667C8.94281 4.83325 9.16667 4.60939 9.16667 4.33325C9.16667 4.05711 8.94281 3.83325 8.66667 3.83325H3.33333ZM3.33333 6.49992C3.05719 6.49992 2.83333 6.72378 2.83333 6.99992C2.83333 7.27606 3.05719 7.49992 3.33333 7.49992H8.66667C8.94281 7.49992 9.16667 7.27606 9.16667 6.99992C9.16667 6.72378 8.94281 6.49992 8.66667 6.49992H3.33333ZM3.33333 9.16659C3.05719 9.16659 2.83333 9.39044 2.83333 9.66659C2.83333 9.94273 3.05719 10.1666 3.33333 10.1666H8.66667C8.94281 10.1666 9.16667 9.94273 9.16667 9.66659C9.16667 9.39044 8.94281 9.16659 8.66667 9.16659H3.33333Z"/>
                                    </svg>
                                    <h1 :class="isOpenn ? 'block' : 'hidden'" class="text-xs md:text-sm text-white font-semibold">RKPDes</h1>
                                </div>
                                <div class="mx-1.5 group-hover:border-b-[0.5px] group-hover:border-white group-focus:border-b-[0.5px] group-focus:border-white">
                            </button>
                        </a>
                        <a href="/pmd/p-rkpdes.php">
                            <button class="w-full group gap-2 md:gap-3 px-4 md:px-5">
                                <div class="flex items-center gap-2 md:gap-3 w-full py-1.5 px-3 bg-transparent">
                                    <svg class="w-[14px] fill-white" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.63661 1.7073C0 2.58352 0 3.83343 0 6.33325V7.66659C0 10.1664 0 11.4163 0.63661 12.2925C0.842209 12.5755 1.09107 12.8244 1.37405 13.03C2.25027 13.6666 3.50018 13.6666 6 13.6666C8.49982 13.6666 9.74973 13.6666 10.626 13.03C10.9089 12.8244 11.1578 12.5755 11.3634 12.2925C12 11.4163 12 10.1664 12 7.66659V6.33325C12 3.83343 12 2.58352 11.3634 1.7073C11.1578 1.42432 10.9089 1.17546 10.626 0.969862C9.74973 0.333252 8.49982 0.333252 6 0.333252C3.50018 0.333252 2.25027 0.333252 1.37405 0.969862C1.09107 1.17546 0.842209 1.42432 0.63661 1.7073ZM3.33333 3.83325C3.05719 3.83325 2.83333 4.05711 2.83333 4.33325C2.83333 4.60939 3.05719 4.83325 3.33333 4.83325H8.66667C8.94281 4.83325 9.16667 4.60939 9.16667 4.33325C9.16667 4.05711 8.94281 3.83325 8.66667 3.83325H3.33333ZM3.33333 6.49992C3.05719 6.49992 2.83333 6.72378 2.83333 6.99992C2.83333 7.27606 3.05719 7.49992 3.33333 7.49992H8.66667C8.94281 7.49992 9.16667 7.27606 9.16667 6.99992C9.16667 6.72378 8.94281 6.49992 8.66667 6.49992H3.33333ZM3.33333 9.16659C3.05719 9.16659 2.83333 9.39044 2.83333 9.66659C2.83333 9.94273 3.05719 10.1666 3.33333 10.1666H8.66667C8.94281 10.1666 9.16667 9.94273 9.16667 9.66659C9.16667 9.39044 8.94281 9.16659 8.66667 9.16659H3.33333Z"/>
                                    </svg>
                                    <h1 :class="isOpenn ? 'block' : 'hidden'" class="text-xs md:text-sm text-white font-semibold">P-RKPDes</h1>
                                </div>
                                <div class="mx-1.5 group-hover:border-b-[0.5px] group-hover:border-white group-focus:border-b-[0.5px] group-focus:border-white">
                            </button>
                        </a>
                        <a href="/pmd/rkpdes-final.php">
                            <button class="w-full group gap-2 md:gap-3 px-4 md:px-5">
                                <div class="flex items-center gap-2 md:gap-3 w-full py-1.5 px-3 bg-transparent">
                                    <svg class="w-[14px] fill-white" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.63661 1.7073C0 2.58352 0 3.83343 0 6.33325V7.66659C0 10.1664 0 11.4163 0.63661 12.2925C0.842209 12.5755 1.09107 12.8244 1.37405 13.03C2.25027 13.6666 3.50018 13.6666 6 13.6666C8.49982 13.6666 9.74973 13.6666 10.626 13.03C10.9089 12.8244 11.1578 12.5755 11.3634 12.2925C12 11.4163 12 10.1664 12 7.66659V6.33325C12 3.83343 12 2.58352 11.3634 1.7073C11.1578 1.42432 10.9089 1.17546 10.626 0.969862C9.74973 0.333252 8.49982 0.333252 6 0.333252C3.50018 0.333252 2.25027 0.333252 1.37405 0.969862C1.09107 1.17546 0.842209 1.42432 0.63661 1.7073ZM3.33333 3.83325C3.05719 3.83325 2.83333 4.05711 2.83333 4.33325C2.83333 4.60939 3.05719 4.83325 3.33333 4.83325H8.66667C8.94281 4.83325 9.16667 4.60939 9.16667 4.33325C9.16667 4.05711 8.94281 3.83325 8.66667 3.83325H3.33333ZM3.33333 6.49992C3.05719 6.49992 2.83333 6.72378 2.83333 6.99992C2.83333 7.27606 3.05719 7.49992 3.33333 7.49992H8.66667C8.94281 7.49992 9.16667 7.27606 9.16667 6.99992C9.16667 6.72378 8.94281 6.49992 8.66667 6.49992H3.33333ZM3.33333 9.16659C3.05719 9.16659 2.83333 9.39044 2.83333 9.66659C2.83333 9.94273 3.05719 10.1666 3.33333 10.1666H8.66667C8.94281 10.1666 9.16667 9.94273 9.16667 9.66659C9.16667 9.39044 8.94281 9.16659 8.66667 9.16659H3.33333Z"/>
                                    </svg>
                                    <h1 :class="isOpenn ? 'block' : 'hidden'" class="text-xs md:text-sm text-white font-semibold">RKPDes Final</h1>
                                </div>
                                <div class="mx-1.5 group-hover:border-b-[0.5px] group-hover:border-white group-focus:border-b-[0.5px] group-focus:border-white">
                            </button>
                        </a>
                        <a href="/pmd/p-rkpdes-final.php">
                            <button class="w-full group gap-2 md:gap-3 px-4 md:px-5">
                                <div class="flex items-center gap-2 md:gap-3 w-full py-1.5 px-3 bg-transparent">
                                    <svg class="w-[14px] fill-white" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.63661 1.7073C0 2.58352 0 3.83343 0 6.33325V7.66659C0 10.1664 0 11.4163 0.63661 12.2925C0.842209 12.5755 1.09107 12.8244 1.37405 13.03C2.25027 13.6666 3.50018 13.6666 6 13.6666C8.49982 13.6666 9.74973 13.6666 10.626 13.03C10.9089 12.8244 11.1578 12.5755 11.3634 12.2925C12 11.4163 12 10.1664 12 7.66659V6.33325C12 3.83343 12 2.58352 11.3634 1.7073C11.1578 1.42432 10.9089 1.17546 10.626 0.969862C9.74973 0.333252 8.49982 0.333252 6 0.333252C3.50018 0.333252 2.25027 0.333252 1.37405 0.969862C1.09107 1.17546 0.842209 1.42432 0.63661 1.7073ZM3.33333 3.83325C3.05719 3.83325 2.83333 4.05711 2.83333 4.33325C2.83333 4.60939 3.05719 4.83325 3.33333 4.83325H8.66667C8.94281 4.83325 9.16667 4.60939 9.16667 4.33325C9.16667 4.05711 8.94281 3.83325 8.66667 3.83325H3.33333ZM3.33333 6.49992C3.05719 6.49992 2.83333 6.72378 2.83333 6.99992C2.83333 7.27606 3.05719 7.49992 3.33333 7.49992H8.66667C8.94281 7.49992 9.16667 7.27606 9.16667 6.99992C9.16667 6.72378 8.94281 6.49992 8.66667 6.49992H3.33333ZM3.33333 9.16659C3.05719 9.16659 2.83333 9.39044 2.83333 9.66659C2.83333 9.94273 3.05719 10.1666 3.33333 10.1666H8.66667C8.94281 10.1666 9.16667 9.94273 9.16667 9.66659C9.16667 9.39044 8.94281 9.16659 8.66667 9.16659H3.33333Z"/>
                                    </svg>
                                    <h1 :class="isOpenn ? 'block' : 'hidden'" class="text-xs md:text-sm text-white font-semibold">P-RKPDes Final</h1>
                                </div>
                                <div class="mx-1.5 group-hover:border-b-[0.5px] group-hover:border-white group-focus:border-b-[0.5px] group-focus:border-white">
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div x-data="{ isOpen : false }" @click.outside="isOpen = false" class="grid gap-3">
            <button @click="isOpen = !isOpen" class="w-full group flex items-center gap-2 md:gap-3 pr-5">
                <div class="invisible transition-all group-hover:visible group-focus:visible bg-white py-3.5 md:py-4 px-1 rounded-r-md"></div>
                <div :class="isOpenn ? 'py-1.5' : 'justify-center py-2'" class="flex justify-between items-center w-full py-1.5 px-3 bg-transparent transition-colors duration-300 group-hover:bg-white group-focus:bg-white rounded-md group-hover:shadow-lg group-hover:shadow-black/20 group-focus:shadow-lg group-focus:shadow-black/20">
                    <div class="flex items-center gap-2 md:gap-3">
                        <svg class="w-[14px] fill-white transition-colors duration-300 group-hover:fill-primary group-focus:fill-primary" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.63661 1.70736C0 2.58358 0 3.83349 0 6.33331V7.66665C0 10.1665 0 11.4164 0.63661 12.2926C0.842209 12.5756 1.09107 12.8244 1.37405 13.03C2.25027 13.6666 3.50018 13.6666 6 13.6666C8.49982 13.6666 9.74973 13.6666 10.626 13.03C10.9089 12.8244 11.1578 12.5756 11.3634 12.2926C12 11.4164 12 10.1665 12 7.66665V6.33331C12 3.83349 12 2.58358 11.3634 1.70736C11.1578 1.42438 10.9089 1.17552 10.626 0.969923C9.74973 0.333313 8.49982 0.333313 6 0.333313C3.50018 0.333313 2.25027 0.333313 1.37405 0.969923C1.09107 1.17552 0.842209 1.42438 0.63661 1.70736ZM3.33333 3.83331C3.05719 3.83331 2.83333 4.05717 2.83333 4.33331C2.83333 4.60946 3.05719 4.83331 3.33333 4.83331H5.33333C5.60948 4.83331 5.83333 4.60946 5.83333 4.33331C5.83333 4.05717 5.60948 3.83331 5.33333 3.83331H3.33333ZM3.33333 6.49998C3.05719 6.49998 2.83333 6.72384 2.83333 6.99998C2.83333 7.27612 3.05719 7.49998 3.33333 7.49998H8.66667C8.94281 7.49998 9.16667 7.27612 9.16667 6.99998C9.16667 6.72384 8.94281 6.49998 8.66667 6.49998H3.33333ZM3.33333 9.16665C3.05719 9.16665 2.83333 9.3905 2.83333 9.66665C2.83333 9.94279 3.05719 10.1666 3.33333 10.1666H5.33333C5.60948 10.1666 5.83333 9.94279 5.83333 9.66665C5.83333 9.3905 5.60948 9.16665 5.33333 9.16665H3.33333Z"/>
                        </svg>
                        <h1 :class="isOpenn ? 'block' : 'hidden'" class="text-xs md:text-sm text-white font-semibold transition-colors duration-300 group-hover:text-primary group-focus:text-primary">APBDes</h1>
                    </div>
                    <svg :class="{ 'block' : isOpenn, 'hidden' : !isOpenn, 'rotate-90' : isOpen }" class="w-[5px] fill-white transition-colors duration-300 group-hover:fill-primary group-focus:fill-primary" viewBox="0 0 4 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.14131 0.772516C0.969697 0.602425 0.69269 0.603661 0.5226 0.775276C0.352509 0.946891 0.353745 1.2239 0.52536 1.39399L1.55376 2.41325C1.97113 2.82691 2.25743 3.11161 2.45116 3.35283C2.63934 3.58715 2.7039 3.73766 2.72108 3.87246C2.73187 3.9571 2.73187 4.04274 2.72108 4.12738C2.7039 4.26218 2.63934 4.41269 2.45116 4.64701C2.25743 4.88823 1.97113 5.17292 1.55376 5.58659L0.52536 6.60585C0.353745 6.77594 0.352509 7.05295 0.5226 7.22456C0.69269 7.39618 0.969697 7.39741 1.14131 7.22732L2.18824 6.1897C2.58255 5.7989 2.90483 5.47949 3.13339 5.1949C3.37105 4.89896 3.5431 4.59858 3.58906 4.23801C3.60921 4.07991 3.60921 3.91992 3.58906 3.76182C3.5431 3.40126 3.37105 3.10088 3.13339 2.80494C2.90483 2.52034 2.58256 2.20094 2.18824 1.81014L1.14131 0.772516Z"/>
                    </svg>
                </div>
            </button>
            <div x-show="isOpen" x-transition.duration.300ms.opacity.50 class="grid gap-3">
                <a href="/pmd/pendapatan.php">
                    <button class="w-full group gap-2 md:gap-3 px-4 md:px-5">
                        <div class="flex items-center gap-2 md:gap-3 w-full py-1.5 px-3 bg-transparent">
                            <svg class="w-[14px] fill-white" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.63661 1.7073C0 2.58352 0 3.83343 0 6.33325V7.66659C0 10.1664 0 11.4163 0.63661 12.2925C0.842209 12.5755 1.09107 12.8244 1.37405 13.03C2.25027 13.6666 3.50018 13.6666 6 13.6666C8.49982 13.6666 9.74973 13.6666 10.626 13.03C10.9089 12.8244 11.1578 12.5755 11.3634 12.2925C12 11.4163 12 10.1664 12 7.66659V6.33325C12 3.83343 12 2.58352 11.3634 1.7073C11.1578 1.42432 10.9089 1.17546 10.626 0.969862C9.74973 0.333252 8.49982 0.333252 6 0.333252C3.50018 0.333252 2.25027 0.333252 1.37405 0.969862C1.09107 1.17546 0.842209 1.42432 0.63661 1.7073ZM3.33333 3.83325C3.05719 3.83325 2.83333 4.05711 2.83333 4.33325C2.83333 4.60939 3.05719 4.83325 3.33333 4.83325H8.66667C8.94281 4.83325 9.16667 4.60939 9.16667 4.33325C9.16667 4.05711 8.94281 3.83325 8.66667 3.83325H3.33333ZM3.33333 6.49992C3.05719 6.49992 2.83333 6.72378 2.83333 6.99992C2.83333 7.27606 3.05719 7.49992 3.33333 7.49992H8.66667C8.94281 7.49992 9.16667 7.27606 9.16667 6.99992C9.16667 6.72378 8.94281 6.49992 8.66667 6.49992H3.33333ZM3.33333 9.16659C3.05719 9.16659 2.83333 9.39044 2.83333 9.66659C2.83333 9.94273 3.05719 10.1666 3.33333 10.1666H8.66667C8.94281 10.1666 9.16667 9.94273 9.16667 9.66659C9.16667 9.39044 8.94281 9.16659 8.66667 9.16659H3.33333Z"/>
                            </svg>
                            <h1 :class="isOpenn ? 'block' : 'hidden'" class="text-xs md:text-sm text-white font-semibold">Pendapatan</h1>
                        </div>
                        <div class="mx-1.5 group-hover:border-b-[0.5px] group-hover:border-white group-focus:border-b-[0.5px] group-focus:border-white">
                    </button>
                </a>
                <a href="/pmd/belanja.php">
                    <button class="w-full group gap-2 md:gap-3 px-4 md:px-5">
                        <div class="flex items-center gap-2 md:gap-3 w-full py-1.5 px-3 bg-transparent">
                            <svg class="w-[14px] fill-white" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.63661 1.7073C0 2.58352 0 3.83343 0 6.33325V7.66659C0 10.1664 0 11.4163 0.63661 12.2925C0.842209 12.5755 1.09107 12.8244 1.37405 13.03C2.25027 13.6666 3.50018 13.6666 6 13.6666C8.49982 13.6666 9.74973 13.6666 10.626 13.03C10.9089 12.8244 11.1578 12.5755 11.3634 12.2925C12 11.4163 12 10.1664 12 7.66659V6.33325C12 3.83343 12 2.58352 11.3634 1.7073C11.1578 1.42432 10.9089 1.17546 10.626 0.969862C9.74973 0.333252 8.49982 0.333252 6 0.333252C3.50018 0.333252 2.25027 0.333252 1.37405 0.969862C1.09107 1.17546 0.842209 1.42432 0.63661 1.7073ZM3.33333 3.83325C3.05719 3.83325 2.83333 4.05711 2.83333 4.33325C2.83333 4.60939 3.05719 4.83325 3.33333 4.83325H8.66667C8.94281 4.83325 9.16667 4.60939 9.16667 4.33325C9.16667 4.05711 8.94281 3.83325 8.66667 3.83325H3.33333ZM3.33333 6.49992C3.05719 6.49992 2.83333 6.72378 2.83333 6.99992C2.83333 7.27606 3.05719 7.49992 3.33333 7.49992H8.66667C8.94281 7.49992 9.16667 7.27606 9.16667 6.99992C9.16667 6.72378 8.94281 6.49992 8.66667 6.49992H3.33333ZM3.33333 9.16659C3.05719 9.16659 2.83333 9.39044 2.83333 9.66659C2.83333 9.94273 3.05719 10.1666 3.33333 10.1666H8.66667C8.94281 10.1666 9.16667 9.94273 9.16667 9.66659C9.16667 9.39044 8.94281 9.16659 8.66667 9.16659H3.33333Z"/>
                            </svg>
                            <h1 :class="isOpenn ? 'block' : 'hidden'" class="text-xs md:text-sm text-white font-semibold">Belanja</h1>
                        </div>
                        <div class="mx-1.5 group-hover:border-b-[0.5px] group-hover:border-white group-focus:border-b-[0.5px] group-focus:border-white">
                    </button>
                </a>
                <a href="/pmd/penerimaan.php">
                    <button class="w-full group gap-2 md:gap-3 px-4 md:px-5">
                        <div class="flex items-center gap-2 md:gap-3 w-full py-1.5 px-3 bg-transparent">
                            <svg class="w-[14px] fill-white" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.63661 1.7073C0 2.58352 0 3.83343 0 6.33325V7.66659C0 10.1664 0 11.4163 0.63661 12.2925C0.842209 12.5755 1.09107 12.8244 1.37405 13.03C2.25027 13.6666 3.50018 13.6666 6 13.6666C8.49982 13.6666 9.74973 13.6666 10.626 13.03C10.9089 12.8244 11.1578 12.5755 11.3634 12.2925C12 11.4163 12 10.1664 12 7.66659V6.33325C12 3.83343 12 2.58352 11.3634 1.7073C11.1578 1.42432 10.9089 1.17546 10.626 0.969862C9.74973 0.333252 8.49982 0.333252 6 0.333252C3.50018 0.333252 2.25027 0.333252 1.37405 0.969862C1.09107 1.17546 0.842209 1.42432 0.63661 1.7073ZM3.33333 3.83325C3.05719 3.83325 2.83333 4.05711 2.83333 4.33325C2.83333 4.60939 3.05719 4.83325 3.33333 4.83325H8.66667C8.94281 4.83325 9.16667 4.60939 9.16667 4.33325C9.16667 4.05711 8.94281 3.83325 8.66667 3.83325H3.33333ZM3.33333 6.49992C3.05719 6.49992 2.83333 6.72378 2.83333 6.99992C2.83333 7.27606 3.05719 7.49992 3.33333 7.49992H8.66667C8.94281 7.49992 9.16667 7.27606 9.16667 6.99992C9.16667 6.72378 8.94281 6.49992 8.66667 6.49992H3.33333ZM3.33333 9.16659C3.05719 9.16659 2.83333 9.39044 2.83333 9.66659C2.83333 9.94273 3.05719 10.1666 3.33333 10.1666H8.66667C8.94281 10.1666 9.16667 9.94273 9.16667 9.66659C9.16667 9.39044 8.94281 9.16659 8.66667 9.16659H3.33333Z"/>
                            </svg>
                            <h1 :class="isOpenn ? 'block' : 'hidden'" class="text-xs md:text-sm text-white font-semibold">Pembiayaan</h1>
                        </div>
                        <div class="mx-1.5 group-hover:border-b-[0.5px] group-hover:border-white group-focus:border-b-[0.5px] group-focus:border-white">
                    </button>
                </a>
            </div>
        </div>
        <div x-data="{ isOpen : false }" @click.outside="isOpen = false" class="grid gap-3">
            <button @click="isOpen = !isOpen" class="w-full group flex items-center gap-2 md:gap-3 pr-5">
                <div class="invisible transition-all group-hover:visible group-focus:visible bg-white py-3.5 md:py-4 px-1 rounded-r-md"></div>
                <div :class="isOpenn ? 'py-1.5' : 'justify-center py-2'" class="flex justify-between items-center w-full py-1.5 px-3 bg-transparent transition-colors duration-300 group-hover:bg-white group-focus:bg-white rounded-md group-hover:shadow-lg group-hover:shadow-black/20 group-focus:shadow-lg group-focus:shadow-black/20">
                    <div class="flex items-center gap-2 md:gap-3">
                        <svg class="w-[14px] fill-white transition-colors duration-300 group-hover:fill-primary group-focus:fill-primary" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.63661 1.7073C0 2.58352 0 3.83343 0 6.33325V7.66659C0 10.1664 0 11.4163 0.63661 12.2925C0.842209 12.5755 1.09107 12.8244 1.37405 13.03C2.25027 13.6666 3.50018 13.6666 6 13.6666C8.49982 13.6666 9.74973 13.6666 10.626 13.03C10.9089 12.8244 11.1578 12.5755 11.3634 12.2925C12 11.4163 12 10.1664 12 7.66659V6.33325C12 3.83343 12 2.58352 11.3634 1.7073C11.1578 1.42432 10.9089 1.17546 10.626 0.969862C9.74973 0.333252 8.49982 0.333252 6 0.333252C3.50018 0.333252 2.25027 0.333252 1.37405 0.969862C1.09107 1.17546 0.842209 1.42432 0.63661 1.7073ZM3.33333 3.83325C3.05719 3.83325 2.83333 4.05711 2.83333 4.33325C2.83333 4.60939 3.05719 4.83325 3.33333 4.83325H8.66667C8.94281 4.83325 9.16667 4.60939 9.16667 4.33325C9.16667 4.05711 8.94281 3.83325 8.66667 3.83325H3.33333ZM3.33333 6.49992C3.05719 6.49992 2.83333 6.72378 2.83333 6.99992C2.83333 7.27606 3.05719 7.49992 3.33333 7.49992H8.66667C8.94281 7.49992 9.16667 7.27606 9.16667 6.99992C9.16667 6.72378 8.94281 6.49992 8.66667 6.49992H3.33333ZM3.33333 9.16659C3.05719 9.16659 2.83333 9.39044 2.83333 9.66659C2.83333 9.94273 3.05719 10.1666 3.33333 10.1666H8.66667C8.94281 10.1666 9.16667 9.94273 9.16667 9.66659C9.16667 9.39044 8.94281 9.16659 8.66667 9.16659H3.33333Z"/>
                        </svg>
                        <h1 :class="isOpenn ? 'block' : 'hidden'" class="text-xs md:text-sm text-white font-semibold transition-colors duration-300 group-hover:text-primary group-focus:text-primary">Laporan Desa</h1>
                    </div>
                    <svg :class="{ 'block' : isOpenn, 'hidden' : !isOpenn, 'rotate-90' : isOpen }" class="w-[5px] fill-white transition-colors duration-300 group-hover:fill-primary group-focus:fill-primary" viewBox="0 0 4 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.14131 0.772516C0.969697 0.602425 0.69269 0.603661 0.5226 0.775276C0.352509 0.946891 0.353745 1.2239 0.52536 1.39399L1.55376 2.41325C1.97113 2.82691 2.25743 3.11161 2.45116 3.35283C2.63934 3.58715 2.7039 3.73766 2.72108 3.87246C2.73187 3.9571 2.73187 4.04274 2.72108 4.12738C2.7039 4.26218 2.63934 4.41269 2.45116 4.64701C2.25743 4.88823 1.97113 5.17292 1.55376 5.58659L0.52536 6.60585C0.353745 6.77594 0.352509 7.05295 0.5226 7.22456C0.69269 7.39618 0.969697 7.39741 1.14131 7.22732L2.18824 6.1897C2.58255 5.7989 2.90483 5.47949 3.13339 5.1949C3.37105 4.89896 3.5431 4.59858 3.58906 4.23801C3.60921 4.07991 3.60921 3.91992 3.58906 3.76182C3.5431 3.40126 3.37105 3.10088 3.13339 2.80494C2.90483 2.52034 2.58256 2.20094 2.18824 1.81014L1.14131 0.772516Z"/>
                    </svg>
                </div>
            </button>
            <div x-show="isOpen" x-transition.duration.300ms.opacity.50 class="grid gap-3">
                <div x-data="{ isOpen : false }" @click.outside="isOpen = false" class="grid gap-3">
                    <button @click="isOpen = !isOpen" class="w-full group flex items-center gap-2 md:gap-3 pr-5">
                        <div class="invisible transition-all group-hover:visible group-focus:visible bg-white py-3.5 md:py-4 px-1 rounded-r-md"></div>
                        <div :class="isOpenn ? 'py-1.5' : 'justify-center py-2'" class="flex justify-between items-center w-full py-1.5 px-3 bg-transparent transition-colors duration-300 group-hover:bg-white group-focus:bg-white rounded-md group-hover:shadow-lg group-hover:shadow-black/20 group-focus:shadow-lg group-focus:shadow-black/20">
                            <div class="flex items-center gap-2 md:gap-3">
                                <svg class="w-[14px] fill-white transition-colors duration-300 group-hover:fill-primary group-focus:fill-primary" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.63661 1.70736C0 2.58358 0 3.83349 0 6.33331V7.66665C0 10.1665 0 11.4164 0.63661 12.2926C0.842209 12.5756 1.09107 12.8244 1.37405 13.03C2.25027 13.6666 3.50018 13.6666 6 13.6666C8.49982 13.6666 9.74973 13.6666 10.626 13.03C10.9089 12.8244 11.1578 12.5756 11.3634 12.2926C12 11.4164 12 10.1665 12 7.66665V6.33331C12 3.83349 12 2.58358 11.3634 1.70736C11.1578 1.42438 10.9089 1.17552 10.626 0.969923C9.74973 0.333313 8.49982 0.333313 6 0.333313C3.50018 0.333313 2.25027 0.333313 1.37405 0.969923C1.09107 1.17552 0.842209 1.42438 0.63661 1.70736ZM3.33333 3.83331C3.05719 3.83331 2.83333 4.05717 2.83333 4.33331C2.83333 4.60946 3.05719 4.83331 3.33333 4.83331H5.33333C5.60948 4.83331 5.83333 4.60946 5.83333 4.33331C5.83333 4.05717 5.60948 3.83331 5.33333 3.83331H3.33333ZM3.33333 6.49998C3.05719 6.49998 2.83333 6.72384 2.83333 6.99998C2.83333 7.27612 3.05719 7.49998 3.33333 7.49998H8.66667C8.94281 7.49998 9.16667 7.27612 9.16667 6.99998C9.16667 6.72384 8.94281 6.49998 8.66667 6.49998H3.33333ZM3.33333 9.16665C3.05719 9.16665 2.83333 9.3905 2.83333 9.66665C2.83333 9.94279 3.05719 10.1666 3.33333 10.1666H5.33333C5.60948 10.1666 5.83333 9.94279 5.83333 9.66665C5.83333 9.3905 5.60948 9.16665 5.33333 9.16665H3.33333Z"/>
                                </svg>
                                <h1 :class="isOpenn ? 'block' : 'hidden'" class="text-xs md:text-sm text-white font-semibold transition-colors duration-300 group-hover:text-primary group-focus:text-primary">LPPD</h1>
                            </div>
                            <svg :class="{ 'block' : isOpenn, 'hidden' : !isOpenn, 'rotate-90' : isOpen }" class="w-[5px] fill-white transition-colors duration-300 group-hover:fill-primary group-focus:fill-primary" viewBox="0 0 4 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.14131 0.772516C0.969697 0.602425 0.69269 0.603661 0.5226 0.775276C0.352509 0.946891 0.353745 1.2239 0.52536 1.39399L1.55376 2.41325C1.97113 2.82691 2.25743 3.11161 2.45116 3.35283C2.63934 3.58715 2.7039 3.73766 2.72108 3.87246C2.73187 3.9571 2.73187 4.04274 2.72108 4.12738C2.7039 4.26218 2.63934 4.41269 2.45116 4.64701C2.25743 4.88823 1.97113 5.17292 1.55376 5.58659L0.52536 6.60585C0.353745 6.77594 0.352509 7.05295 0.5226 7.22456C0.69269 7.39618 0.969697 7.39741 1.14131 7.22732L2.18824 6.1897C2.58255 5.7989 2.90483 5.47949 3.13339 5.1949C3.37105 4.89896 3.5431 4.59858 3.58906 4.23801C3.60921 4.07991 3.60921 3.91992 3.58906 3.76182C3.5431 3.40126 3.37105 3.10088 3.13339 2.80494C2.90483 2.52034 2.58256 2.20094 2.18824 1.81014L1.14131 0.772516Z"/>
                            </svg>
                        </div>
                    </button>
                    <div x-show="isOpen" x-transition.duration.300ms.opacity.50 class="grid gap-3">
                        <a href="#">
                            <button class="w-full group gap-2 md:gap-3 px-4 md:px-5">
                                <div class="flex items-center gap-2 md:gap-3 w-full py-1.5 px-3 bg-transparent">
                                    <svg class="w-[14px] fill-white" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.63661 1.7073C0 2.58352 0 3.83343 0 6.33325V7.66659C0 10.1664 0 11.4163 0.63661 12.2925C0.842209 12.5755 1.09107 12.8244 1.37405 13.03C2.25027 13.6666 3.50018 13.6666 6 13.6666C8.49982 13.6666 9.74973 13.6666 10.626 13.03C10.9089 12.8244 11.1578 12.5755 11.3634 12.2925C12 11.4163 12 10.1664 12 7.66659V6.33325C12 3.83343 12 2.58352 11.3634 1.7073C11.1578 1.42432 10.9089 1.17546 10.626 0.969862C9.74973 0.333252 8.49982 0.333252 6 0.333252C3.50018 0.333252 2.25027 0.333252 1.37405 0.969862C1.09107 1.17546 0.842209 1.42432 0.63661 1.7073ZM3.33333 3.83325C3.05719 3.83325 2.83333 4.05711 2.83333 4.33325C2.83333 4.60939 3.05719 4.83325 3.33333 4.83325H8.66667C8.94281 4.83325 9.16667 4.60939 9.16667 4.33325C9.16667 4.05711 8.94281 3.83325 8.66667 3.83325H3.33333ZM3.33333 6.49992C3.05719 6.49992 2.83333 6.72378 2.83333 6.99992C2.83333 7.27606 3.05719 7.49992 3.33333 7.49992H8.66667C8.94281 7.49992 9.16667 7.27606 9.16667 6.99992C9.16667 6.72378 8.94281 6.49992 8.66667 6.49992H3.33333ZM3.33333 9.16659C3.05719 9.16659 2.83333 9.39044 2.83333 9.66659C2.83333 9.94273 3.05719 10.1666 3.33333 10.1666H8.66667C8.94281 10.1666 9.16667 9.94273 9.16667 9.66659C9.16667 9.39044 8.94281 9.16659 8.66667 9.16659H3.33333Z"/>
                                    </svg>
                                    <h1 :class="isOpenn ? 'block' : 'hidden'" class="text-xs md:text-sm text-white font-semibold">Akhir Tahun Anggaran</h1>
                                </div>
                                <div class="mx-1.5 group-hover:border-b-[0.5px] group-hover:border-white group-focus:border-b-[0.5px] group-focus:border-white"></div>
                            </button>
                        </a>
                        <a href="#">
                            <button class="w-full group gap-2 md:gap-3 px-4 md:px-5">
                                <div class="flex items-center gap-2 md:gap-3 w-full py-1.5 px-3 bg-transparent">
                                    <svg class="w-[14px] fill-white" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.63661 1.7073C0 2.58352 0 3.83343 0 6.33325V7.66659C0 10.1664 0 11.4163 0.63661 12.2925C0.842209 12.5755 1.09107 12.8244 1.37405 13.03C2.25027 13.6666 3.50018 13.6666 6 13.6666C8.49982 13.6666 9.74973 13.6666 10.626 13.03C10.9089 12.8244 11.1578 12.5755 11.3634 12.2925C12 11.4163 12 10.1664 12 7.66659V6.33325C12 3.83343 12 2.58352 11.3634 1.7073C11.1578 1.42432 10.9089 1.17546 10.626 0.969862C9.74973 0.333252 8.49982 0.333252 6 0.333252C3.50018 0.333252 2.25027 0.333252 1.37405 0.969862C1.09107 1.17546 0.842209 1.42432 0.63661 1.7073ZM3.33333 3.83325C3.05719 3.83325 2.83333 4.05711 2.83333 4.33325C2.83333 4.60939 3.05719 4.83325 3.33333 4.83325H8.66667C8.94281 4.83325 9.16667 4.60939 9.16667 4.33325C9.16667 4.05711 8.94281 3.83325 8.66667 3.83325H3.33333ZM3.33333 6.49992C3.05719 6.49992 2.83333 6.72378 2.83333 6.99992C2.83333 7.27606 3.05719 7.49992 3.33333 7.49992H8.66667C8.94281 7.49992 9.16667 7.27606 9.16667 6.99992C9.16667 6.72378 8.94281 6.49992 8.66667 6.49992H3.33333ZM3.33333 9.16659C3.05719 9.16659 2.83333 9.39044 2.83333 9.66659C2.83333 9.94273 3.05719 10.1666 3.33333 10.1666H8.66667C8.94281 10.1666 9.16667 9.94273 9.16667 9.66659C9.16667 9.39044 8.94281 9.16659 8.66667 9.16659H3.33333Z"/>
                                    </svg>
                                    <h1 :class="isOpenn ? 'block' : 'hidden'" class="text-xs md:text-sm text-white font-semibold">Akhir Masa Jabatan</h1>
                                </div>
                                <div class="mx-1.5 group-hover:border-b-[0.5px] group-hover:border-white group-focus:border-b-[0.5px] group-focus:border-white"></div>
                            </button>
                        </a>
                        <a href="#" class="grid gap-3">
                            <button class="w-full group gap-2 md:gap-3 px-4 md:px-5">
                                <div class="flex items-center gap-2 md:gap-3 w-full py-1.5 px-3 bg-transparent">
                                    <svg class="w-[14px] fill-white" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.63661 1.7073C0 2.58352 0 3.83343 0 6.33325V7.66659C0 10.1664 0 11.4163 0.63661 12.2925C0.842209 12.5755 1.09107 12.8244 1.37405 13.03C2.25027 13.6666 3.50018 13.6666 6 13.6666C8.49982 13.6666 9.74973 13.6666 10.626 13.03C10.9089 12.8244 11.1578 12.5755 11.3634 12.2925C12 11.4163 12 10.1664 12 7.66659V6.33325C12 3.83343 12 2.58352 11.3634 1.7073C11.1578 1.42432 10.9089 1.17546 10.626 0.969862C9.74973 0.333252 8.49982 0.333252 6 0.333252C3.50018 0.333252 2.25027 0.333252 1.37405 0.969862C1.09107 1.17546 0.842209 1.42432 0.63661 1.7073ZM3.33333 3.83325C3.05719 3.83325 2.83333 4.05711 2.83333 4.33325C2.83333 4.60939 3.05719 4.83325 3.33333 4.83325H8.66667C8.94281 4.83325 9.16667 4.60939 9.16667 4.33325C9.16667 4.05711 8.94281 3.83325 8.66667 3.83325H3.33333ZM3.33333 6.49992C3.05719 6.49992 2.83333 6.72378 2.83333 6.99992C2.83333 7.27606 3.05719 7.49992 3.33333 7.49992H8.66667C8.94281 7.49992 9.16667 7.27606 9.16667 6.99992C9.16667 6.72378 8.94281 6.49992 8.66667 6.49992H3.33333ZM3.33333 9.16659C3.05719 9.16659 2.83333 9.39044 2.83333 9.66659C2.83333 9.94273 3.05719 10.1666 3.33333 10.1666H8.66667C8.94281 10.1666 9.16667 9.94273 9.16667 9.66659C9.16667 9.39044 8.94281 9.16659 8.66667 9.16659H3.33333Z"/>
                                    </svg>
                                    <h1 :class="isOpenn ? 'block' : 'hidden'" class="text-xs md:text-sm text-white font-semibold">LKPPD</h1>
                                </div>
                                <div class="mx-1.5 group-hover:border-b-[0.5px] group-hover:border-white group-focus:border-b-[0.5px] group-focus:border-white"></div>
                            </button>
                        </a>
                    </div>
                </div>
                <div x-data="{ isOpen : false }" @click.outside="isOpen = false" class="grid gap-3">
                    <button @click="isOpen = !isOpen" class="w-full group flex items-center gap-2 md:gap-3 pr-5">
                        <div class="invisible transition-all group-hover:visible group-focus:visible bg-white py-3.5 md:py-4 px-1 rounded-r-md"></div>
                        <div :class="isOpenn ? 'py-1.5' : 'justify-center py-2'" class="flex justify-between items-center w-full py-1.5 px-3 bg-transparent transition-colors duration-300 group-hover:bg-white group-focus:bg-white rounded-md group-hover:shadow-lg group-hover:shadow-black/20 group-focus:shadow-lg group-focus:shadow-black/20">
                            <div class="flex items-center gap-2 md:gap-3">
                                <svg class="w-[14px] fill-white transition-colors duration-300 group-hover:fill-primary group-focus:fill-primary" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.663 2.09499C11.2542 1.96613 10.7948 1.90356 10.264 1.87081C9.65734 1.83337 8.92007 1.83337 8.01554 1.83337H5.97386C4.90494 1.83337 4.06696 1.83337 3.39751 1.89702C2.71514 1.9619 2.15641 2.09642 1.66386 2.39825C1.14806 2.71433 0.714396 3.148 0.398316 3.6638C0.387118 3.68207 0.37615 3.70043 0.365408 3.71889C0.416937 2.7568 0.551528 2.11959 0.90307 1.61515C1.08704 1.35117 1.30971 1.11903 1.56292 0.927234C2.34695 0.333374 3.46535 0.333374 5.70215 0.333374H9.2813C10.4061 0.333374 10.9685 0.333374 11.318 0.697674C11.5863 0.977465 11.6486 1.38823 11.663 2.09499Z"/>
                                    <path d="M0.824574 3.92505C0.333374 4.72661 0.333374 5.81775 0.333374 8.00004C0.333374 10.1823 0.333374 11.2735 0.824574 12.075C1.09943 12.5236 1.47653 12.9007 1.92505 13.1755C2.72661 13.6667 3.81775 13.6667 6.00004 13.6667H8.00004C10.1823 13.6667 11.2735 13.6667 12.075 13.1755C12.5236 12.9007 12.9007 12.5236 13.1755 12.075C13.4981 11.5486 13.6088 10.8973 13.6468 9.89399H9.42434C8.14404 9.89399 7.10616 8.85611 7.10616 7.57581C7.10616 6.29552 8.14404 5.25763 9.42434 5.25763H13.5852C13.5183 4.70586 13.3967 4.28608 13.1755 3.92505C12.9007 3.47653 12.5236 3.09943 12.075 2.82457C11.9474 2.74633 11.8123 2.68055 11.6667 2.62525C10.8982 2.33337 9.83471 2.33337 8.00004 2.33337H6.00004C3.81775 2.33337 2.72661 2.33337 1.92505 2.82457C1.47653 3.09943 1.09943 3.47653 0.824574 3.92505Z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.652 6.25763H9.42434C8.69633 6.25763 8.10616 6.8478 8.10616 7.57581C8.10616 8.30382 8.69633 8.89399 9.42434 8.89399H13.6651C13.6667 8.61788 13.6667 8.32074 13.6667 8.00004C13.6667 7.32189 13.6667 6.7491 13.652 6.25763ZM9.42434 7.07581C9.1482 7.07581 8.92434 7.29967 8.92434 7.57581C8.92434 7.85195 9.1482 8.07581 9.42434 8.07581H11.2425C11.5187 8.07581 11.7425 7.85195 11.7425 7.57581C11.7425 7.29967 11.5187 7.07581 11.2425 7.07581H9.42434Z"/>
                                </svg>
                                <h1 :class="isOpenn ? 'block' : 'hidden'" class="text-xs md:text-sm text-white font-semibold transition-colors duration-300 group-hover:text-primary group-focus:text-primary">LPJ APBDes</h1>
                            </div>
                            <svg :class="{ 'block' : isOpenn, 'hidden' : !isOpenn, 'rotate-90' : isOpen }" class="w-[5px] fill-white transition-colors duration-300 group-hover:fill-primary group-focus:fill-primary" viewBox="0 0 4 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.14131 0.772516C0.969697 0.602425 0.69269 0.603661 0.5226 0.775276C0.352509 0.946891 0.353745 1.2239 0.52536 1.39399L1.55376 2.41325C1.97113 2.82691 2.25743 3.11161 2.45116 3.35283C2.63934 3.58715 2.7039 3.73766 2.72108 3.87246C2.73187 3.9571 2.73187 4.04274 2.72108 4.12738C2.7039 4.26218 2.63934 4.41269 2.45116 4.64701C2.25743 4.88823 1.97113 5.17292 1.55376 5.58659L0.52536 6.60585C0.353745 6.77594 0.352509 7.05295 0.5226 7.22456C0.69269 7.39618 0.969697 7.39741 1.14131 7.22732L2.18824 6.1897C2.58255 5.7989 2.90483 5.47949 3.13339 5.1949C3.37105 4.89896 3.5431 4.59858 3.58906 4.23801C3.60921 4.07991 3.60921 3.91992 3.58906 3.76182C3.5431 3.40126 3.37105 3.10088 3.13339 2.80494C2.90483 2.52034 2.58256 2.20094 2.18824 1.81014L1.14131 0.772516Z"/>
                            </svg>
                        </div>
                    </button>
                    <div x-show="isOpen" x-transition.duration.300ms.opacity.50 class="grid gap-3">
                        <a href="#">
                            <button class="w-full group gap-2 md:gap-3 px-4 md:px-5">
                                <div class="flex items-center gap-2 md:gap-3 w-full py-1.5 px-3 bg-transparent">
                                    <svg class="w-[14px] fill-white" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.63661 1.7073C0 2.58352 0 3.83343 0 6.33325V7.66659C0 10.1664 0 11.4163 0.63661 12.2925C0.842209 12.5755 1.09107 12.8244 1.37405 13.03C2.25027 13.6666 3.50018 13.6666 6 13.6666C8.49982 13.6666 9.74973 13.6666 10.626 13.03C10.9089 12.8244 11.1578 12.5755 11.3634 12.2925C12 11.4163 12 10.1664 12 7.66659V6.33325C12 3.83343 12 2.58352 11.3634 1.7073C11.1578 1.42432 10.9089 1.17546 10.626 0.969862C9.74973 0.333252 8.49982 0.333252 6 0.333252C3.50018 0.333252 2.25027 0.333252 1.37405 0.969862C1.09107 1.17546 0.842209 1.42432 0.63661 1.7073ZM3.33333 3.83325C3.05719 3.83325 2.83333 4.05711 2.83333 4.33325C2.83333 4.60939 3.05719 4.83325 3.33333 4.83325H8.66667C8.94281 4.83325 9.16667 4.60939 9.16667 4.33325C9.16667 4.05711 8.94281 3.83325 8.66667 3.83325H3.33333ZM3.33333 6.49992C3.05719 6.49992 2.83333 6.72378 2.83333 6.99992C2.83333 7.27606 3.05719 7.49992 3.33333 7.49992H8.66667C8.94281 7.49992 9.16667 7.27606 9.16667 6.99992C9.16667 6.72378 8.94281 6.49992 8.66667 6.49992H3.33333ZM3.33333 9.16659C3.05719 9.16659 2.83333 9.39044 2.83333 9.66659C2.83333 9.94273 3.05719 10.1666 3.33333 10.1666H8.66667C8.94281 10.1666 9.16667 9.94273 9.16667 9.66659C9.16667 9.39044 8.94281 9.16659 8.66667 9.16659H3.33333Z"/>
                                    </svg>
                                    <h1 :class="isOpenn ? 'block' : 'hidden'" class="text-xs md:text-sm text-white font-semibold">Semester Pertama</h1>
                                </div>
                                <div class="mx-1.5 group-hover:border-b-[0.5px] group-hover:border-white group-focus:border-b-[0.5px] group-focus:border-white"></div>
                            </button>
                        </a>
                        <a href="#">
                            <button class="w-full group gap-2 md:gap-3 px-4 md:px-5">
                                <div class="flex items-center gap-2 md:gap-3 w-full py-1.5 px-3 bg-transparent">
                                    <svg class="w-[14px] fill-white" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.63661 1.7073C0 2.58352 0 3.83343 0 6.33325V7.66659C0 10.1664 0 11.4163 0.63661 12.2925C0.842209 12.5755 1.09107 12.8244 1.37405 13.03C2.25027 13.6666 3.50018 13.6666 6 13.6666C8.49982 13.6666 9.74973 13.6666 10.626 13.03C10.9089 12.8244 11.1578 12.5755 11.3634 12.2925C12 11.4163 12 10.1664 12 7.66659V6.33325C12 3.83343 12 2.58352 11.3634 1.7073C11.1578 1.42432 10.9089 1.17546 10.626 0.969862C9.74973 0.333252 8.49982 0.333252 6 0.333252C3.50018 0.333252 2.25027 0.333252 1.37405 0.969862C1.09107 1.17546 0.842209 1.42432 0.63661 1.7073ZM3.33333 3.83325C3.05719 3.83325 2.83333 4.05711 2.83333 4.33325C2.83333 4.60939 3.05719 4.83325 3.33333 4.83325H8.66667C8.94281 4.83325 9.16667 4.60939 9.16667 4.33325C9.16667 4.05711 8.94281 3.83325 8.66667 3.83325H3.33333ZM3.33333 6.49992C3.05719 6.49992 2.83333 6.72378 2.83333 6.99992C2.83333 7.27606 3.05719 7.49992 3.33333 7.49992H8.66667C8.94281 7.49992 9.16667 7.27606 9.16667 6.99992C9.16667 6.72378 8.94281 6.49992 8.66667 6.49992H3.33333ZM3.33333 9.16659C3.05719 9.16659 2.83333 9.39044 2.83333 9.66659C2.83333 9.94273 3.05719 10.1666 3.33333 10.1666H8.66667C8.94281 10.1666 9.16667 9.94273 9.16667 9.66659C9.16667 9.39044 8.94281 9.16659 8.66667 9.16659H3.33333Z"/>
                                    </svg>
                                    <h1 :class="isOpenn ? 'block' : 'hidden'" class="text-xs md:text-sm text-white font-semibold">Semester Kedua</h1>
                                </div>
                                <div class="mx-1.5 group-hover:border-b-[0.5px] group-hover:border-white group-focus:border-b-[0.5px] group-focus:border-white"></div>
                            </button>
                        </a>
                        <a href="#">
                            <button class="w-full group gap-2 md:gap-3 px-4 md:px-5">
                                <div class="flex items-center gap-2 md:gap-3 w-full py-1.5 px-3 bg-transparent">
                                    <svg class="w-[14px] fill-white" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.63661 1.7073C0 2.58352 0 3.83343 0 6.33325V7.66659C0 10.1664 0 11.4163 0.63661 12.2925C0.842209 12.5755 1.09107 12.8244 1.37405 13.03C2.25027 13.6666 3.50018 13.6666 6 13.6666C8.49982 13.6666 9.74973 13.6666 10.626 13.03C10.9089 12.8244 11.1578 12.5755 11.3634 12.2925C12 11.4163 12 10.1664 12 7.66659V6.33325C12 3.83343 12 2.58352 11.3634 1.7073C11.1578 1.42432 10.9089 1.17546 10.626 0.969862C9.74973 0.333252 8.49982 0.333252 6 0.333252C3.50018 0.333252 2.25027 0.333252 1.37405 0.969862C1.09107 1.17546 0.842209 1.42432 0.63661 1.7073ZM3.33333 3.83325C3.05719 3.83325 2.83333 4.05711 2.83333 4.33325C2.83333 4.60939 3.05719 4.83325 3.33333 4.83325H8.66667C8.94281 4.83325 9.16667 4.60939 9.16667 4.33325C9.16667 4.05711 8.94281 3.83325 8.66667 3.83325H3.33333ZM3.33333 6.49992C3.05719 6.49992 2.83333 6.72378 2.83333 6.99992C2.83333 7.27606 3.05719 7.49992 3.33333 7.49992H8.66667C8.94281 7.49992 9.16667 7.27606 9.16667 6.99992C9.16667 6.72378 8.94281 6.49992 8.66667 6.49992H3.33333ZM3.33333 9.16659C3.05719 9.16659 2.83333 9.39044 2.83333 9.66659C2.83333 9.94273 3.05719 10.1666 3.33333 10.1666H8.66667C8.94281 10.1666 9.16667 9.94273 9.16667 9.66659C9.16667 9.39044 8.94281 9.16659 8.66667 9.16659H3.33333Z"/>
                                    </svg>
                                    <h1 :class="isOpenn ? 'block' : 'hidden'" class="text-xs md:text-sm text-white font-semibold">Akhir Tahun</h1>
                                </div>
                                <div class="mx-1.5 group-hover:border-b-[0.5px] group-hover:border-white group-focus:border-b-[0.5px] group-focus:border-white"></div>
                            </button>
                        </a>
                    </div>
                </div>
                <a href="#" class="grid gap-3">
                    <button class="w-full group flex items-center gap-2 md:gap-3 pr-5">
                        <div class="invisible transition-all group-hover:visible group-focus:visible bg-white py-3.5 md:py-4 px-1 rounded-r-md"></div>
                        <div :class="isOpenn ? 'py-1.5' : 'justify-center py-2'" class="flex justify-between items-center w-full py-1.5 px-3 bg-transparent transition-colors duration-300 group-hover:bg-white group-focus:bg-white rounded-md group-hover:shadow-lg group-hover:shadow-black/20 group-focus:shadow-lg group-focus:shadow-black/20">
                            <div class="flex items-center gap-2 md:gap-3">
                                <svg class="w-[14px] fill-white transition-colors duration-300 group-hover:fill-primary group-focus:fill-primary" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.76709 4.9121C5.19036 4.33856 4.83334 3.54432 4.83334 2.66669C4.83334 1.78906 5.19036 0.994813 5.76709 0.421273C5.43505 0.258238 5.06155 0.166687 4.66667 0.166687C3.28596 0.166687 2.16667 1.28598 2.16667 2.66669C2.16667 4.0474 3.28596 5.16669 4.66667 5.16669C5.06155 5.16669 5.43505 5.07514 5.76709 4.9121Z"/>
                                    <path d="M5.5 2.66669C5.5 1.28598 6.61929 0.166687 8 0.166687C9.38072 0.166687 10.5 1.28598 10.5 2.66669C10.5 4.0474 9.38072 5.16669 8 5.16669C6.61929 5.16669 5.5 4.0474 5.5 2.66669Z"/>
                                    <path d="M10.2329 0.421273C10.8096 0.994813 11.1667 1.78906 11.1667 2.66669C11.1667 3.54432 10.8096 4.33856 10.2329 4.9121C10.565 5.07514 10.9385 5.16669 11.3333 5.16669C12.714 5.16669 13.8333 4.0474 13.8333 2.66669C13.8333 1.28598 12.714 0.166687 11.3333 0.166687C10.9385 0.166687 10.565 0.258238 10.2329 0.421273Z"/>
                                    <path d="M3.5 8.66669C3.5 7.28598 4.61929 6.16669 6 6.16669H10C11.3807 6.16669 12.5 7.28598 12.5 8.66669C12.5 10.0474 11.3807 11.1667 10 11.1667H6C4.61929 11.1667 3.5 10.0474 3.5 8.66669Z"/>
                                    <path d="M0.166672 8.00002C0.166672 6.61931 1.28596 5.50002 2.66667 5.50002H6C4.2511 5.50002 2.83334 6.91779 2.83334 8.66669C2.83334 9.34994 3.04973 9.98264 3.41771 10.5H2.66667C1.28596 10.5 0.166672 9.38073 0.166672 8.00002Z"/>
                                    <path d="M13.1667 8.66669C13.1667 9.34994 12.9503 9.98264 12.5823 10.5H13.3333C14.714 10.5 15.8333 9.38073 15.8333 8.00002C15.8333 6.61931 14.714 5.50002 13.3333 5.50002H10C11.7489 5.50002 13.1667 6.91779 13.1667 8.66669Z"/>
                                </svg>
                                <h1 :class="isOpenn ? 'block' : 'hidden'" class="text-xs md:text-sm text-white font-semibold transition-colors duration-300 group-hover:text-primary group-focus:text-primary">LKBPD</h1>
                            </div>
                        </div>
                    </button>
                </a>
            </div>
        </div>
        <a href="#" class="grid gap-3">
            <button class="w-full group flex items-center gap-2 md:gap-3 pr-5">
                <div class="invisible transition-all group-hover:visible group-focus:visible bg-white py-3.5 md:py-4 px-1 rounded-r-md"></div>
                <div :class="isOpenn ? 'py-1.5' : 'justify-center py-2'" class="flex justify-between items-center w-full py-1.5 px-3 bg-transparent transition-colors duration-300 group-hover:bg-white group-focus:bg-white rounded-md group-hover:shadow-lg group-hover:shadow-black/20 group-focus:shadow-lg group-focus:shadow-black/20">
                    <div class="flex items-center gap-2 md:gap-3">
                        <svg class="w-[14px] fill-white transition-colors duration-300 group-hover:fill-primary group-focus:fill-primary" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.03017 0.5C8.25453 0.499995 9.21426 0.499991 9.97568 0.582486C10.7527 0.666671 11.3823 0.84155 11.9198 1.2321C12.2453 1.46854 12.5315 1.75473 12.7679 2.08016C13.1585 2.61771 13.3333 3.24729 13.4175 4.02432C13.5 4.78573 13.5 5.74549 13.5 6.96982V7.03023C13.5 8.25456 13.5 9.21427 13.4175 9.97568C13.3333 10.7527 13.1585 11.3823 12.7679 11.9198C12.5315 12.2453 12.2453 12.5315 11.9198 12.7679C11.3823 13.1585 10.7527 13.3333 9.97568 13.4175C9.21427 13.5 8.25451 13.5 7.03018 13.5H6.96977C5.74544 13.5 4.78573 13.5 4.02432 13.4175C3.24729 13.3333 2.61771 13.1585 2.08016 12.7679C1.75473 12.5315 1.46854 12.2453 1.2321 11.9198C0.84155 11.3823 0.666671 10.7527 0.582486 9.97568C0.499991 9.21426 0.499995 8.25453 0.5 7.03017V6.96983C0.499995 5.74548 0.499991 4.78574 0.582486 4.02432C0.666671 3.24729 0.84155 2.61771 1.2321 2.08016C1.46854 1.75473 1.75473 1.46854 2.08016 1.2321C2.61771 0.84155 3.24729 0.666671 4.02432 0.582486C4.78574 0.499991 5.74547 0.499995 6.96983 0.5H7.03017ZM7.5 3.66667C7.5 3.39052 7.27614 3.16667 7 3.16667C6.72386 3.16667 6.5 3.39052 6.5 3.66667V10.3333C6.5 10.6095 6.72386 10.8333 7 10.8333C7.27614 10.8333 7.5 10.6095 7.5 10.3333V3.66667ZM10.1667 6.33333C10.1667 6.05719 9.94281 5.83333 9.66667 5.83333C9.39052 5.83333 9.16667 6.05719 9.16667 6.33333V10.3333C9.16667 10.6095 9.39052 10.8333 9.66667 10.8333C9.94281 10.8333 10.1667 10.6095 10.1667 10.3333V6.33333ZM4.83333 7.66667C4.83333 7.39052 4.60948 7.16667 4.33333 7.16667C4.05719 7.16667 3.83333 7.39052 3.83333 7.66667V10.3333C3.83333 10.6095 4.05719 10.8333 4.33333 10.8333C4.60948 10.8333 4.83333 10.6095 4.83333 10.3333V7.66667Z"/>
                        </svg>
                        <h1 :class="isOpenn ? 'block' : 'hidden'" class="text-xs md:text-sm text-white font-semibold transition-colors duration-300 group-hover:text-primary group-focus:text-primary">Kependudukan</h1>
                    </div>
                </div>
            </button>
        </a>
        <a href="#" class="grid gap-3">
            <button class="w-full group flex items-center gap-2 md:gap-3 pr-5">
                <div class="invisible transition-all group-hover:visible group-focus:visible bg-white py-3.5 md:py-4 px-1 rounded-r-md"></div>
                <div :class="isOpenn ? 'py-1.5' : 'justify-center py-2'" class="flex justify-between items-center w-full py-1.5 px-3 bg-transparent transition-colors duration-300 group-hover:bg-white group-focus:bg-white rounded-md group-hover:shadow-lg group-hover:shadow-black/20 group-focus:shadow-lg group-focus:shadow-black/20">
                    <div class="flex items-center gap-2 md:gap-3">
                        <svg class="w-[14px] fill-white transition-colors duration-300 group-hover:fill-primary group-focus:fill-primary" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.16667 8.66536C5.16667 8.20513 5.53976 7.83203 6 7.83203C6.46024 7.83203 6.83333 8.20513 6.83333 8.66536C6.83333 9.1256 6.46024 9.4987 6 9.4987C5.53976 9.4987 5.16667 9.1256 5.16667 8.66536Z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6 0.832031C3.88291 0.832031 2.16667 2.54827 2.16667 4.66536V5.40784C2.16667 5.45238 2.17249 5.49556 2.18342 5.53665C1.22602 5.88845 0.479776 6.66082 0.163145 7.63531C0 8.13742 0 8.75784 0 9.9987C0 11.2396 0 11.86 0.163145 12.3621C0.492871 13.3769 1.28848 14.1725 2.30328 14.5022C2.80538 14.6654 3.42581 14.6654 4.66665 14.6654H7.33333C8.57418 14.6654 9.19462 14.6654 9.69672 14.5022C10.7115 14.1725 11.5071 13.3769 11.8369 12.3621C12 11.86 12 11.2396 12 9.9987C12 8.75784 12 8.13742 11.8369 7.63531C11.5071 6.62051 10.7115 5.8249 9.69672 5.49518C9.58352 5.4584 9.46431 5.42991 9.33333 5.40784C8.88334 5.33203 8.29444 5.33203 7.33333 5.33203H4.66667C4.02314 5.33203 3.54649 5.33203 3.16667 5.35479V4.66536C3.16667 3.10056 4.43519 1.83203 6 1.83203C6.63854 1.83203 7.22645 2.04266 7.69999 2.39844C7.92076 2.56432 8.2342 2.51981 8.40007 2.29904C8.56594 2.07826 8.52144 1.76482 8.30066 1.59895C7.65988 1.11752 6.86256 0.832031 6 0.832031ZM4.16667 8.66536C4.16667 7.65284 4.98748 6.83203 6 6.83203C7.01252 6.83203 7.83333 7.65284 7.83333 8.66536C7.83333 9.50455 7.2695 10.212 6.5 10.4297V12.6654C6.5 12.9415 6.27614 13.1654 6 13.1654C5.72386 13.1654 5.5 12.9415 5.5 12.6654V10.4297C4.7305 10.212 4.16667 9.50455 4.16667 8.66536Z"/>
                        </svg>                                    
                        <h1 :class="isOpenn ? 'block' : 'hidden'" class="text-xs md:text-sm text-white font-semibold transition-colors duration-300 group-hover:text-primary group-focus:text-primary">Recovery</h1>
                    </div>
                </div>
            </button>
        </a>
        <a href="#" class="grid gap-3">
            <button class="w-full group flex items-center gap-2 md:gap-3 pr-5">
                <div class="invisible transition-all group-hover:visible group-focus:visible bg-white py-3.5 md:py-4 px-1 rounded-r-md"></div>
                <div :class="isOpenn ? 'py-1.5' : 'justify-center py-2'" class="flex justify-between items-center w-full py-1.5 px-3 bg-transparent transition-colors duration-300 group-hover:bg-white group-focus:bg-white rounded-md group-hover:shadow-lg group-hover:shadow-black/20 group-focus:shadow-lg group-focus:shadow-black/20">
                    <div class="flex items-center gap-2 md:gap-3">
                        <svg class="w-[14px] fill-white transition-colors duration-300 group-hover:fill-primary group-focus:fill-primary" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.63661 1.7073C0 2.58352 0 3.83343 0 6.33325V7.66659C0 10.1664 0 11.4163 0.63661 12.2925C0.842209 12.5755 1.09107 12.8244 1.37405 13.03C2.25027 13.6666 3.50018 13.6666 6 13.6666C8.49982 13.6666 9.74973 13.6666 10.626 13.03C10.9089 12.8244 11.1578 12.5755 11.3634 12.2925C12 11.4163 12 10.1664 12 7.66659V6.33325C12 3.83343 12 2.58352 11.3634 1.7073C11.1578 1.42432 10.9089 1.17546 10.626 0.969862C9.74973 0.333252 8.49982 0.333252 6 0.333252C3.50018 0.333252 2.25027 0.333252 1.37405 0.969862C1.09107 1.17546 0.842209 1.42432 0.63661 1.7073ZM3.33333 3.83325C3.05719 3.83325 2.83333 4.05711 2.83333 4.33325C2.83333 4.60939 3.05719 4.83325 3.33333 4.83325H8.66667C8.94281 4.83325 9.16667 4.60939 9.16667 4.33325C9.16667 4.05711 8.94281 3.83325 8.66667 3.83325H3.33333ZM3.33333 6.49992C3.05719 6.49992 2.83333 6.72378 2.83333 6.99992C2.83333 7.27606 3.05719 7.49992 3.33333 7.49992H8.66667C8.94281 7.49992 9.16667 7.27606 9.16667 6.99992C9.16667 6.72378 8.94281 6.49992 8.66667 6.49992H3.33333ZM3.33333 9.16659C3.05719 9.16659 2.83333 9.39044 2.83333 9.66659C2.83333 9.94273 3.05719 10.1666 3.33333 10.1666H8.66667C8.94281 10.1666 9.16667 9.94273 9.16667 9.66659C9.16667 9.39044 8.94281 9.16659 8.66667 9.16659H3.33333Z"/>
                        </svg>
                        <h1 :class="isOpenn ? 'block' : 'hidden'" class="text-xs md:text-sm text-white font-semibold transition-colors duration-300 group-hover:text-primary group-focus:text-primary">Management Evaluasi</h1>
                    </div>
                </div>
            </button>
        </a>
        <button class="md:absolute md:bottom-0 w-full bg-primary py-4">
            <div :class="isOpenn ? 'bg-white py-2 px-6 rounded md:rounded-md shadow-lg shadow-black/20' : 'bg-transparent py-2 px-3 hover:bg-white rounded md:rounded-md hover:shadow-lg hover:shadow-black/20'" class="flex justify-center items-center gap-2 md:gap-3 ml-4 mr-5 md:mx-5">
                <svg class="w-[14px]" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.5 8.25C4.08579 8.25 3.75 8.58578 3.75 9C3.75 9.41421 4.08579 9.75 4.5 9.75L12.5 9.75L12.5 12C12.5 12.929 12.5 13.3935 12.4384 13.7822C12.0996 15.9216 10.4216 17.5996 8.28217 17.9384C7.89351 18 7.429 18 6.5 18C5.57099 18 5.10649 18 4.71783 17.9384C2.57836 17.5996 0.900415 15.9216 0.561557 13.7822C0.499999 13.3935 0.499999 12.929 0.499999 12L0.5 6C0.5 5.07099 0.5 4.60649 0.561558 4.21783C0.900415 2.07836 2.57837 0.400415 4.71783 0.0615577C5.10649 -6.18232e-07 5.57099 -5.97928e-07 6.5 -5.5732e-07C7.42901 -5.16712e-07 7.89351 -4.96408e-07 8.28217 0.0615578C10.4216 0.400416 12.0996 2.07836 12.4384 4.21783C12.5 4.60649 12.5 5.07099 12.5 6L12.5 8.25L4.5 8.25ZM12.5 8.25L17.3105 8.25C16.983 7.92734 16.501 7.54375 15.797 6.98553L14.034 5.58768C13.7095 5.33034 13.655 4.8586 13.9123 4.53403C14.1697 4.20946 14.6414 4.15497 14.966 4.41232L16.7648 5.83857C17.4372 6.37175 17.9922 6.81172 18.3875 7.20551C18.7932 7.60962 19.1294 8.05816 19.2208 8.63133C19.2402 8.75344 19.25 8.87661 19.25 9C19.25 9.12339 19.2402 9.24656 19.2208 9.36867C19.1294 9.94184 18.7932 10.3904 18.3875 10.7945C17.9922 11.1883 17.4373 11.6282 16.7648 12.1614L14.966 13.5877C14.6414 13.845 14.1697 13.7905 13.9123 13.466C13.655 13.1414 13.7095 12.6697 14.034 12.4123L15.797 11.0145C16.501 10.4563 16.983 10.0727 17.3105 9.75L12.5 9.75L12.5 8.25Z" fill="#FF4E4E"/>
                </svg>
                <h1 :class="isOpenn ? 'block' : 'hidden'" class="text-xs md:text-sm text-[#FF4E4E] font-semibold">Logout</h1>
            </div>
        </button>
    </div>
</aside>