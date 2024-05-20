<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Product Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <section>
            <div class="mx-auto max-w-screen-xl px-4 lg:px-12">

                <div class="relative overflow-hidden bg-warning shadow-md dark:bg-gray-800 sm:rounded-lg">


                            <button type="button" class="flex items-center justify-center px-4 py-2 text-sm font-medium text-black bg-primary-700 rounded-lg hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                <svg class="w-3.5 h-3.5 mr-2" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd"></path>
                                </svg>
                                Add product
                            </button>




                    </div>
                    <div class="overflow-x-auto">

                    <nav class="flex items-center justify-between p-4">
                        <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <table>
                                <thead>
                                    <tr>
                                        <th class="px-4 py-3" scope="col">Product ID</th>
                                        <th class="px-4 py-3" scope="col">Item</th>
                                        <th class="px-4 py-3" scope="col">Price</th>
                                        <th class="px-4 py-3" scope="col">Status</th>
                                        <th class="px-4 py-3" scope="col">Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="px-4 py-3">
                                            <input type="text" name="id" id="id" class="form-input" required>
                                        </td>
                                        <td class="px-4 py-3">
                                            <input type="text" name="name" id="name" class="form-input" required>
                                        </td>
                                        <td class="px-4 py-3">
                                            <input type="number" name="price" id="price" class="form-input" required>
                                        </td>
                                        <td class="px-4 py-3">
                                            <select name="status" id="status" class="form-select" required>
                                                <option value="active">Available</option>
                                                <option value="inactive">Not Available</option>
                                            </select>
                                        </td>
                                        <td class="px-4 py-3">
                                            <input type="file" name="image" id="image" class="form-input" accept="image/*" required>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        <ul class="inline-flex items-center -space-x-px">
                            <li>
                                <a href="#" class="block px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="sr-only">Previous</span>
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M12.293 4.293a1 1 0 010 1.414L8.414 10l3.879 3.879a1 1 0 01-1.414 1.414l-4.5-4.5a1 1 0 010-1.414l4.5-4.5a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                            </li>
                            <li>
                                <a href="#" class="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                            </li>
                            <li>
                                <a href="#" class="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">3</a>
                            </li>
                            <li>
                                <a href="#" class="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</a>
                            </li>
                            <li>
                                <a href="#" class="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">100</a>
                            </li>
                            <li>
                                <a href="#" class="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="sr-only">Next</span>
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M7.707 15.707a1 1 0 010-1.414L11.586 10 7.707 6.121a1 1 0 011.414-1.414l4.5 4.5a1 1 0 010 1.414l-4.5 4.5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
