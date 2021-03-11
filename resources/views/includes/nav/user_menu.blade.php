<nav class="flex"
     aria-label="User Menu">
    <ol class="flex items-center space-x-6 justify-end">
        <li>
            <div class="flex items-center">
                <a href="{{ url('notifications') }}"
                   class="relative text-md leading-5 font-bold text-gray-700 hover:text-gray-700 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6 text-gray-900 group-hover:text-gray-300"
                         xmlns="http://www.w3.org/2000/svg"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor"
                         aria-hidden="true">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                    <span class="absolute left-2 -top-1 px-1 rounded-lg inline-flex items-center text-xs font-medium leading-4 bg-red-400 text-white ml-2">
                        5
                    </span>
                </a>
            </div>
        </li>

        <li>
            <div class="flex items-center">
                <a href="{{ url('inbox') }}"
                   class="relative text-md leading-5 font-bold text-gray-700 hover:text-gray-700 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6 text-gray-900 group-hover:text-gray-300"
                         xmlns="http://www.w3.org/2000/svg"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor"
                         aria-hidden="true">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                    </svg>
                    <span class="absolute left-5 top-0 px-1 rounded-lg inline-flex items-center text-xs font-medium leading-4 bg-red-400 text-white">
                        7
                    </span>
                </a>
            </div>
        </li>
        <li>
            <div x-data="{ isOpen: false }"
                 class="flex-1 flex justify-end">

                <div class="flex items-center">
                    <!-- Profile dropdown -->
                    <div class="relative">
                        <div>
                            <button @click="isOpen = !isOpen"
                                    class="bg-gray-800 max-w-xs flex items-center text-sm focus:outline-none focus:bg-gray-100 lg:p-2"
                                    id="user-menu"
                                    aria-label="User menu"
                                    aria-haspopup="true">
                                <p class="hidden ml-3 text-white text-sm leading-5 font-medium lg:block">
                                    {{ $auth_user->name }}
                                </p>
                                <!-- Heroicon name: chevron-down -->
                                <svg class="hidden flex-shrink-0 ml-1 h-5 w-5 text-white lg:block"
                                     xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                          clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <div x-cloak
                             class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg"
                             x-show="isOpen"
                             x-transition:enter="transition ease-out duration-100 transform"
                             x-transition:enter-start="opacity-0 scale-95"
                             x-transition:enter-end="opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-75 transform"
                             x-transition:leave-start="opacity-100 scale-100"
                             x-transition:leave-end="opacity-0 scale-95">
                            <div class="py-1 rounded-md bg-white shadow-xs"
                                 role="menu"
                                 aria-orientation="vertical"
                                 aria-labelledby="user-menu">
                                <a href="{{ url('profile') }}"
                                   class="block px-4 py-2 text-sm text-cool-gray-700 hover:bg-cool-gray-100 transition ease-in-out duration-150"
                                   role="menuitem">Your Profile</a>
                                <a href="{{ url('logout') }}"
                                   class="block px-4 py-2 text-sm text-cool-gray-700 hover:bg-cool-gray-100 transition ease-in-out duration-150"
                                   role="menuitem">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ol>
</nav>