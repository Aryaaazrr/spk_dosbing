<aside
    class="fixed top-0 left-0 z-40 w-72 h-screen pt-0 transition-transform -translate-x-full md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidenav" id="drawer-navigation">
    <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">
        <form action="#" method="GET" class="md:hidden mb-2">
            <label for="sidebar-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z">
                        </path>
                    </svg>
                </div>
                <input type="text" name="search" id="sidebar-search"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Search" />
            </div>
        </form>
        <ul class="space-y-2 p-2">
            <a href="/" class="flex items-center justify-between mr-4 mb-10">
                <img src="{{ asset('assets/img/logo.png') }}" class="mr-3 h-12" alt="Flowbite Logo" />
                <div>
                    <span class="self-center text-base -mb-2 font-bold whitespace-nowrap text-navy dark:text-white">SPK
                        PROFILE
                        MATCHING</span>
                    <span class="text-sm font-medium whitespace-nowrap text-navy dark:text-white">D4-TEKNIK
                        INFORMATIKA</span>
                </div>
            </a>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-base font-medium text-third rounded-lg dark:text-white hover:bg-primary  dark:hover:bg-gray-700 group">
                    <svg aria-hidden="true"
                        class="w-6 h-6 text-third transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M3 12C3 12.5523 3.44772 13 4 13H10C10.5523 13 11 12.5523 11 12V4C11 3.44772 10.5523 3 10 3H4C3.44772 3 3 3.44772 3 4V12ZM3 20C3 20.5523 3.44772 21 4 21H10C10.5523 21 11 20.5523 11 20V16C11 15.4477 10.5523 15 10 15H4C3.44772 15 3 15.4477 3 16V20ZM13 20C13 20.5523 13.4477 21 14 21H20C20.5523 21 21 20.5523 21 20V12C21 11.4477 20.5523 11 20 11H14C13.4477 11 13 11.4477 13 12V20ZM14 3C13.4477 3 13 3.44772 13 4V8C13 8.55228 13.4477 9 14 9H20C20.5523 9 21 8.55228 21 8V4C21 3.44772 20.5523 3 20 3H14Z">
                        </path>
                    </svg>

                    <span class="ml-3 group-hover:text-white">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-base font-medium text-third rounded-lg dark:text-white hover:bg-primary  dark:hover:bg-gray-700 group">
                    <svg aria-hidden="true"
                        class="w-6 h-6 text-third transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M10.313 11.5656L18.253 3.62561L20.3744 5.74693L18.9602 7.16114L21.0815 9.28246L17.5459 12.818L15.4246 10.6967L12.4343 13.687C13.4182 15.5719 13.1186 17.9524 11.5355 19.5355C9.58291 21.4881 6.41709 21.4881 4.46447 19.5355C2.51184 17.5829 2.51184 14.4171 4.46447 12.4644C6.04755 10.8814 8.42809 10.5818 10.313 11.5656ZM9.41421 17.4142C10.1953 16.6331 10.1953 15.3668 9.41421 14.5858C8.63316 13.8047 7.36684 13.8047 6.58579 14.5858C5.80474 15.3668 5.80474 16.6331 6.58579 17.4142C7.36684 18.1952 8.63316 18.1952 9.41421 17.4142Z">
                        </path>
                    </svg>
                    <span class="ml-3 group-hover:text-white">Aspek</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-base font-medium text-third rounded-lg dark:text-white hover:bg-primary  dark:hover:bg-gray-700 group">
                    <svg aria-hidden="true"
                        class="w-6 h-6 text-third transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M14 14.252V22H4C4 17.5817 7.58172 14 12 14C12.6906 14 13.3608 14.0875 14 14.252ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM20 17H23V19H20V22.5L15 18L20 13.5V17Z">
                        </path>
                    </svg>
                    <span class="ml-3 group-hover:text-white">Kriteria</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-base font-medium text-third rounded-lg dark:text-white hover:bg-primary  dark:hover:bg-gray-700 group">
                    <svg aria-hidden="true"
                        class="w-6 h-6 text-third transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M2 22C2 17.5817 5.58172 14 10 14C14.4183 14 18 17.5817 18 22H2ZM10 13C6.685 13 4 10.315 4 7C4 3.685 6.685 1 10 1C13.315 1 16 3.685 16 7C16 10.315 13.315 13 10 13ZM20 17H24V19H20V17ZM17 12H24V14H17V12ZM19 7H24V9H19V7Z">
                        </path>
                    </svg>
                    <span class="ml-3 group-hover:text-white">Alternatif</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-base font-medium text-third rounded-lg dark:text-white hover:bg-primary  dark:hover:bg-gray-700 group">
                    <svg aria-hidden="true"
                        class="w-6 h-6 text-third transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M13 14.0619V22H4C4 17.5817 7.58172 14 12 14C12.3387 14 12.6724 14.021 13 14.0619ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM17.7929 19.9142L21.3284 16.3787L22.7426 17.7929L17.7929 22.7426L14.2574 19.2071L15.6716 17.7929L17.7929 19.9142Z">
                        </path>
                    </svg>
                    <span class="ml-3 group-hover:text-white">Profile</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-base font-medium text-third rounded-lg dark:text-white hover:bg-primary  dark:hover:bg-gray-700 group">
                    <svg aria-hidden="true"
                        class="w-6 h-6 text-third transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M12 10C14.2091 10 16 8.20914 16 6 16 3.79086 14.2091 2 12 2 9.79086 2 8 3.79086 8 6 8 8.20914 9.79086 10 12 10ZM5.5 13C6.88071 13 8 11.8807 8 10.5 8 9.11929 6.88071 8 5.5 8 4.11929 8 3 9.11929 3 10.5 3 11.8807 4.11929 13 5.5 13ZM21 10.5C21 11.8807 19.8807 13 18.5 13 17.1193 13 16 11.8807 16 10.5 16 9.11929 17.1193 8 18.5 8 19.8807 8 21 9.11929 21 10.5ZM12 11C14.7614 11 17 13.2386 17 16V22H7V16C7 13.2386 9.23858 11 12 11ZM5 15.9999C5 15.307 5.10067 14.6376 5.28818 14.0056L5.11864 14.0204C3.36503 14.2104 2 15.6958 2 17.4999V21.9999H5V15.9999ZM22 21.9999V17.4999C22 15.6378 20.5459 14.1153 18.7118 14.0056 18.8993 14.6376 19 15.307 19 15.9999V21.9999H22Z">
                        </path>
                    </svg>
                    <span class="ml-3 group-hover:text-white">Mahasiswa</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-base font-medium text-third rounded-lg dark:text-white hover:bg-primary  dark:hover:bg-gray-700 group">
                    <svg aria-hidden="true"
                        class="w-6 h-6 text-third transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19 22H5C3.34315 22 2 20.6569 2 19V3C2 2.44772 2.44772 2 3 2H17C17.5523 2 18 2.44772 18 3V15H22V19C22 20.6569 20.6569 22 19 22ZM18 17V19C18 19.5523 18.4477 20 19 20C19.5523 20 20 19.5523 20 19V17H18ZM6 7V9H14V7H6ZM6 11V13H14V11H6ZM6 15V17H11V15H6Z">
                        </path>
                    </svg>
                    <span class="ml-3 group-hover:text-white">Pengajuan</span>
                </a>
            </li>
        </ul>
        <ul class="space-y-2 p-2 border-t border-gray-200 dark:border-gray-700">
            <li>
                <a href="#"
                    class="flex items-center p-2 text-base font-medium text-third rounded-lg dark:text-white hover:bg-primary  dark:hover:bg-gray-700 group">
                    <svg aria-hidden="true"
                        class="w-6 h-6 text-third transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M9.95401 2.2106C11.2876 1.93144 12.6807 1.92263 14.0449 2.20785C14.2219 3.3674 14.9048 4.43892 15.9997 5.07103C17.0945 5.70313 18.364 5.75884 19.4566 5.3323C20.3858 6.37118 21.0747 7.58203 21.4997 8.87652C20.5852 9.60958 19.9997 10.736 19.9997 11.9992C19.9997 13.2632 20.5859 14.3902 21.5013 15.1232C21.29 15.7636 21.0104 16.3922 20.6599 16.9992C20.3094 17.6063 19.9049 18.1627 19.4559 18.6659C18.3634 18.2396 17.0943 18.2955 15.9997 18.9274C14.9057 19.559 14.223 20.6294 14.0453 21.7879C12.7118 22.067 11.3187 22.0758 9.95443 21.7906C9.77748 20.6311 9.09451 19.5595 7.99967 18.9274C6.90484 18.2953 5.63539 18.2396 4.54272 18.6662C3.61357 17.6273 2.92466 16.4164 2.49964 15.1219C3.41412 14.3889 3.99968 13.2624 3.99968 11.9992C3.99968 10.7353 3.41344 9.60827 2.49805 8.87524C2.70933 8.23482 2.98894 7.60629 3.33942 6.99923C3.68991 6.39217 4.09443 5.83576 4.54341 5.33257C5.63593 5.75881 6.90507 5.703 7.99967 5.07103C9.09364 4.43942 9.7764 3.3691 9.95401 2.2106ZM11.9997 14.9992C13.6565 14.9992 14.9997 13.6561 14.9997 11.9992C14.9997 10.3424 13.6565 8.99923 11.9997 8.99923C10.3428 8.99923 8.99967 10.3424 8.99967 11.9992C8.99967 13.6561 10.3428 14.9992 11.9997 14.9992Z">
                        </path>
                    </svg>
                    <span class="ml-3 group-hover:text-white">Pengaturan</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-base font-medium text-third rounded-lg dark:text-white hover:bg-primary  dark:hover:bg-gray-700 group">
                    <svg aria-hidden="true"
                        class="w-6 h-6 text-third transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M5 11H13V13H5V16L0 12L5 8V11ZM3.99927 18H6.70835C8.11862 19.2447 9.97111 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C9.97111 4 8.11862 4.75527 6.70835 6H3.99927C5.82368 3.57111 8.72836 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C8.72836 22 5.82368 20.4289 3.99927 18Z">
                        </path>
                    </svg>
                    <span class="ml-3 group-hover:text-white">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
