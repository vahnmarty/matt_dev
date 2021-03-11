<!-- Search header -->
<div class="relative z-10 flex-shrink-0 flex h-16 bg-white border-b border-gray-200 lg:hidden">
    <!-- Sidebar toggle, controls the 'sidebarOpen' sidebar state. -->
    <button @click="mSidebar = !mSidebar"
            class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:bg-gray-100 focus:text-gray-600 lg:hidden"
            aria-label="Open sidebar">
        <svg class="h-6 w-6"
             fill="none"
             stroke-linecap="round"
             stroke-linejoin="round"
             stroke-width="2"
             viewBox="0 0 24 24"
             stroke="currentColor">
            <path d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
    </button>
    <div class="flex-1 flex justify-between px-4 sm:px-6 lg:px-8">
        <div class="flex-1 flex">
            <form class="w-full md:ml-0 hidden"
                  action="#"
                  method="GET">
                <label for="search_field"
                       class="sr-only">Search</label>
                <div class="relative w-full text-gray-400 focus-within:text-gray-600">
                    <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                        <svg class="h-5 w-5"
                             fill="currentColor"
                             viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
                        </svg>
                    </div>
                    <input id="search_field"
                           class="block w-full h-full pl-8 pr-3 py-2 rounded-md text-gray-900 placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 sm:text-sm"
                           placeholder="Search"
                           type="search">
                </div>
            </form>
        </div>
        <div class="flex items-center"
             x-data="{ isOpen: false}">
            <!-- Profile dropdown -->
            <div class="ml-3 relative">
                <div>
                    <button @click="isOpen = !isOpen"
                            class="max-w-xs flex items-center text-sm rounded-full focus:outline-none focus:shadow-outline"
                            id="user-menu"
                            aria-label="User menu"
                            aria-haspopup="true">
                        <img id="m-img-avatar"
                             class="h-8 w-8 rounded-full"
                             src="{{ $auth_user->profile_photo_url }}"
                             alt="">
                    </button>
                </div>
                <div x-show="isOpen"
                     x-cloak
                     x-transition:enter="transition ease-out duration-100 transform"
                     x-transition:enter-start="transform opacity-0 scale-95"
                     x-transition:enter-end="transform opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-75"
                     x-transition:leave-start="transform opacity-100 scale-100"
                     x-transition:leave-end="transform opacity-0 scale-95"
                     class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg">
                    <div class="rounded-md bg-white shadow-xs"
                         role="menu"
                         aria-orientation="vertical"
                         aria-labelledby="user-menu">
                        <div class="py-1">
                            <a href="{{ url('profile') }}"
                               class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
                               role="menuitem">View profile</a>
                        </div>
                        <div class="border-t border-gray-100"></div>
                        <div class="py-1">
                            <a href="{{ url('logout') }}"
                               class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
                               role="menuitem">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>