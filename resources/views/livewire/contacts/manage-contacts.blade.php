<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm rounded-sm border-2 border-gray-600">
            <div class="pt-6 bg-white">
                <header x-data="{ createModal: false }"
                        x-on:closemodal.window="createModal = false"
                        class="px-6 pb-6 flex justify-between">

                    <h1 class="font-bold text-3xl self-center">Contacts</h1>


                    <button x-on:click="createModal = !createModal"
                            type="button"
                            class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <svg class="h-5 w-5 text-white mr-4"
                             xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                                  clip-rule="evenodd" />
                        </svg>

                        Add Contact
                    </button>

                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div id="createModal"
                         x-cloak
                         x-show="createModal"
                         class="fixed z-10 inset-0 overflow-y-auto">
                        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                            <div x-show="createModal"
                                 x-transition:enter="ease-out duration-300"
                                 x-transition:enter-start="opacity-0"
                                 x-transition:enter-end="opacity-100"
                                 x-transition:leave="ease-in duration-200"
                                 x-transition:leave-start="opacity-100"
                                 x-transition:leave-end="opacity-0"
                                 class="fixed inset-0 transition-opacity"
                                 aria-hidden="true">
                                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                            </div>

                            <!-- This element is to trick the browser into centering the modal contents. -->
                            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                  aria-hidden="true">&#8203;</span>

                            <div x-show="createModal"
                                 x-transition:enter="ease-out duration-300"
                                 x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                 x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                 x-transition:leave="ease-in duration-200"
                                 x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                 x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                 class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full"
                                 role="dialog"
                                 aria-modal="true"
                                 aria-labelledby="modal-headline">
                                @livewire('contacts.create-contact')
                            </div>
                        </div>
                    </div>

                </header>
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-t border-gray-400">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                <input type="checkbox">
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Name
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Email
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Address
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Created
                                            </th>
                                            <th scope="col"
                                                class="relative px-6 py-3">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach($contacts as $contact)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                <input type="checkbox">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                {{ $contact->name }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $contact->email }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $contact->address }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $contact->created_at->diffForHumans() }}


                                            </td>
                                            <td x-data="{ isOpen : false }"
                                                class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                                <!-- This example requires Tailwind CSS v2.0+ -->
                                                <div class="relative inline-block text-left">
                                                    <div>
                                                        <a href="#"
                                                           @click="isOpen = !isOpen">
                                                            <svg class="w-6 h-6"
                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                 fill="none"
                                                                 viewBox="0 0 24 24"
                                                                 stroke="currentColor">
                                                                <path stroke-linecap="round"
                                                                      stroke-linejoin="round"
                                                                      stroke-width="2"
                                                                      d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                                                            </svg>
                                                        </a>
                                                    </div>

                                                    <div x-show="isOpen"
                                                         x-cloak
                                                         @click.away="isOpen = false"
                                                         x-transition:enter="transition ease-out duration-100"
                                                         x-transition:enter-start="transform opacity-0 scale-95"
                                                         x-transition:enter-end="transform opacity-100 scale-100"
                                                         x-transition:leave="transition ease-in duration-75"
                                                         x-transition:leave-start="transform opacity-100 scale-100"
                                                         x-transition:leave-end="transform opacity-0 scale-95"
                                                         class="origin-top-right absolute right-5 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none"
                                                         role="menu"
                                                         aria-orientation="vertical"
                                                         aria-labelledby="options-menu">
                                                        <div class="py-1"
                                                             role="none">
                                                            <a href="#"
                                                               class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                                               role="menuitem">
                                                                <!-- Heroicon name: solid/pencil-alt -->
                                                                <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                     viewBox="0 0 20 20"
                                                                     fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                                    <path fill-rule="evenodd"
                                                                          d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                                          clip-rule="evenodd" />
                                                                </svg>
                                                                Edit
                                                            </a>
                                                            <a href="#"
                                                               class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                                               role="menuitem">
                                                                <!-- Heroicon name: solid/duplicate -->
                                                                <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                     viewBox="0 0 20 20"
                                                                     fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z" />
                                                                    <path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z" />
                                                                </svg>
                                                                View
                                                            </a>
                                                        </div>

                                                        <div class="py-1"
                                                             role="none">
                                                            <a href="#"
                                                               class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                                               role="menuitem">
                                                                <!-- Heroicon name: solid/trash -->
                                                                <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                     viewBox="0 0 20 20"
                                                                     fill="currentColor"
                                                                     aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                          d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                                          clip-rule="evenodd" />
                                                                </svg>
                                                                Delete
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-6 px-6">
                    {{ $contacts->links() }}
                </div>

            </div>
        </div>
    </div>
</div>