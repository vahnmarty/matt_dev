<div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
    <!--
      This example requires Tailwind CSS v2.0+ 
      
      This example requires some changes to your config:
      
      ```
      // tailwind.config.js
      module.exports = {
        // ...
        plugins: [
          // ...
          require('@tailwindcss/forms'),
        ]
      }
      ```
    -->
    <form wire:submit.prevent="save"
          class="space-y-8 divide-y divide-gray-200">
        <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
            <div class="space-y-6 sm:space-y-5">
                <div class="mb-8">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Create Contact
                    </h3>
                </div>
                <div class="grid grid-cols-3">
                    <div class="col-span-2">
                        @include('includes.partials.errors')
                        <div class="space-y-6 sm:space-y-5">
                            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start">
                                <label for="first_name"
                                       class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                    Full Name
                                </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <input type="text"
                                           wire:model.defer="name"
                                           autocomplete="given-name"
                                           class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>

                            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start">
                                <label class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                    Email
                                </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <input type="email"
                                           wire:model.defer="email"
                                           autocomplete="email"
                                           class="block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>

                            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start">
                                <label class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                    Address
                                </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <input wire:model.defer="address"
                                           type="text"
                                           autocomplete="street-address"
                                           class="block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="self-center">
                        <div class="border-2 border-dashed w-32 h-32 mx-auto my-auto block"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-5">
            <div class="flex justify-end">
                <button x-on:click="createModal = false"
                        type="button"
                        class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Cancel
                </button>
                <button type="submit"
                        class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Save Changes
                </button>
            </div>
        </div>
    </form>
</div>