<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm rounded-sm border-2 border-gray-600">
            <div class="pt-6 bg-white">
                <header x-data="{ createModal: false, editModal : @entangle('edit_id') }"
                        x-on:closemodal.window="createModal = false; editModal = false"
                        class="px-6 pb-6 flex justify-between">

                    <h1 class="font-bold text-3xl self-center">Contacts <span x-text="editModal"></span></h1>


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
                                 @click.away="createModal = false"
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

                    @if($edit_id)
                    <div id="editModal"
                         x-cloak
                         x-show="editModal"
                         class="fixed z-10 inset-0 overflow-y-auto">
                        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                            <div x-show="editModal"
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

                            <div x-show="editModal"
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
                                @livewire('contacts.edit-contact', ['id' => $edit_id])
                            </div>
                        </div>
                        @endif
                    </div>

                </header>
                <div class="align-middle inline-block min-w-full border border-gray-200">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    <input type="checkbox">
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    <span class="sr-only">Image</span>
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
                                <td class="px-0 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    <div class="h-10 w-10">
                                        <img class="h-10 w-10 rounded-full object-cover"
                                             src="{{ $contact->profile_picture }}"
                                             alt="">
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-indigo-600">
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
                                <td x-data="{ isOpen : false, viewModal: false }"
                                    class="px-6 py-4 text-center text-sm font-medium">

                                    <div id="viewModal"
                                         x-cloak
                                         x-show="viewModal"
                                         class="fixed z-10 inset-0 overflow-y-auto">
                                        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                            <div x-show="viewModal"
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

                                            <div x-show="viewModal"
                                                 x-transition:enter="ease-out duration-300"
                                                 x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                 x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                                 x-transition:leave="ease-in duration-200"
                                                 x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                                 x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                 class=" px-4 pt-5 pb-4 inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-xl sm:w-full"
                                                 role="dialog"
                                                 aria-modal="true"
                                                 aria-labelledby="modal-headline">
                                                <div class="sm:flex sm:items-start">
                                                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-32 w-32 rounded-full bg-red-100 sm:mx-0">
                                                        <img class="h-32 w-32 rounded-full object-cover"
                                                             src="{{ $contact->profile_picture }}"
                                                             alt="">
                                                    </div>
                                                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                        <dl class="grid grid-cols-1 gap-x-4 gap-y-4 sm:grid-cols-1">
                                                            <div class="sm:col-span-1">
                                                                <dt class="text-sm font-medium text-gray-400">
                                                                    Full name
                                                                </dt>
                                                                <dd class="mt-1 text-base font-bold text-gray-900">
                                                                    {{ $contact->name }}
                                                                </dd>
                                                            </div>
                                                            <div class="sm:col-span-1">
                                                                <dt class="text-sm font-medium text-gray-400">
                                                                    Email
                                                                </dt>
                                                                <dd class="mt-1 text-base font-bold text-gray-900">
                                                                    {{ $contact->email }}
                                                                </dd>
                                                            </div>

                                                            <div class="sm:col-span-1">
                                                                <dt class="text-sm font-medium text-gray-400">
                                                                    Address
                                                                </dt>
                                                                <dd class="mt-1 text-base font-bold text-gray-900">
                                                                    {{ $contact->address }}
                                                                </dd>
                                                            </div>
                                                            <div class="sm:col-span-1">
                                                                <dt class="text-sm font-medium text-gray-400">
                                                                    Date Created
                                                                </dt>
                                                                <dd class="mt-1 text-base font-bold text-gray-900">
                                                                    {{ $contact->created_at->format('F d Y h:i a') }}
                                                                </dd>
                                                            </div>
                                                        </dl>
                                                    </div>
                                                </div>
                                                <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                                                    <button x-on:click="viewModal = false"
                                                            type="button"
                                                            class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm">
                                                        Close
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="relative flex justify-center items-center z-20">
                                        <button @click="isOpen = !isOpen"
                                                type="button"
                                                aria-has-popup="true"
                                                type="button"
                                                class="w-8 h-8 inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:text-gray-500 focus:bg-gray-100 transition ease-in-out duration-150">

                                            <svg class="w-5 h-5"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 fill="none"
                                                 viewBox="0 0 24 24"
                                                 stroke="currentColor">
                                                <path stroke-linecap="round"
                                                      stroke-linejoin="round"
                                                      stroke-width="2"
                                                      d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                                            </svg>
                                        </button>
                                        <div x-show="isOpen"
                                             x-on:click.away="isOpen = false"
                                             x-cloak
                                             x-transition:enter="transition ease-out duration-100"
                                             x-transition:enter-start="opacity-0 scale-95"
                                             x-transition:enter-end="opacity-100 scale-100"
                                             x-transition:leave="transition ease-in duration-75"
                                             x-transition:leave-start="opacity-100 scale-100"
                                             x-transition:leave-end="opacity-0 scale-95"
                                             class="mx-3 origin-top-right absolute right-7 top-0 w-48 mt-1 rounded-md shadow-lg">
                                            <div class="z-10 rounded-md bg-white shadow-xs"
                                                 role="menu"
                                                 aria-orientation="vertical"
                                                 aria-labelledby="project-options-menu-0">
                                                <div class="py-1">
                                                    <a href="#"
                                                       x-on:click="viewModal = true; isOpen = false"
                                                       class="group flex items-center px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
                                                       role="menuitem">

                                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500"
                                                             xmlns="http://www.w3.org/2000/svg"
                                                             fill="none"
                                                             viewBox="0 0 24 24"
                                                             stroke="currentColor">
                                                            <path stroke-linecap="round"
                                                                  stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                                        </svg>

                                                        View
                                                    </a>
                                                </div>

                                                <div class="py-1">
                                                    <a href="#"
                                                       x-on:click="isOpen = false"
                                                       wire:click="editContact('{{ $contact->id }}')"
                                                       class="group flex items-center px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
                                                       role="menuitem">
                                                        <!-- Heroicon name: pencil-alt -->
                                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500"
                                                             xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 0 20 20"
                                                             fill="currentColor">
                                                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                            <path fill-rule="evenodd"
                                                                  d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                                  clip-rule="evenodd" />
                                                        </svg>
                                                        Edit
                                                    </a>
                                                </div>
                                                <div class="border-t border-gray-100"></div>
                                                <div class="py-1">
                                                    <a onclick="deleteContact('{{ $contact->id }}')"
                                                       href="#"
                                                       class="group flex items-center px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
                                                       role="menuitem">
                                                        <!-- Heroicon name: trash -->
                                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500"
                                                             xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 0 20 20"
                                                             fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                  d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                                  clip-rule="evenodd" />
                                                        </svg>
                                                        Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="py-6 px-6">
                    {{ $contacts->links() }}
                </div>

            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    function deleteContact($id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                @this.deleteContact($id);
            }
        })
    }
</script>
@endpush