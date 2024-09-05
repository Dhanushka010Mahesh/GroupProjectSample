    <div class="container mx-auto mt-10">
        <div class="w-full max-w-4xl mx-auto bg-white p-8 shadow-lg rounded-lg">
            <h1 class="text-2xl font-bold mb-6 text-center">Add Product</h1>
            <form action="add_product.php" method="POST" enctype="multipart/form-data">
                <div class="flex">
                    <!-- Left Side -->
                    <div class="w-1/2 pr-4">
                        <!-- Product ID -->
                        <div class="mb-4">
                            <label for="id" class="block text-sm font-medium text-gray-700">Product ID</label>
                            <input type="text" id="id" name="id" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>

                        <!-- Name -->
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Product Name</label>
                            <input type="text" id="name" name="name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>

                        <!-- Description -->
                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea id="description" name="description" rows="4" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required></textarea>
                        </div>

                        <!-- Price -->
                        <div class="mb-4">
                            <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                            <input type="number" step="1" id="price" name="price" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>
                    </div>

                    <!-- Right Side -->
                    <div class="w-1/2 pl-4">
                        <!-- Images -->
                        <div class="mb-4">
                            <label for="images" class="block text-sm font-medium text-gray-700">Images</label>
                            <input type="file" id="images" name="images[]" multiple class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <input type="file" id="images" name="images[]" multiple class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <input type="file" id="images" name="images[]" multiple class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>

                        <!-- Sizes -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Sizes</label>
                            <div class="mt-2 space-y-2">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="sizes[]" value="S" class="form-checkbox text-indigo-600">
                                    <span class="ml-2">S</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="sizes[]" value="M" class="form-checkbox text-indigo-600">
                                    <span class="ml-2">M</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="sizes[]" value="L" class="form-checkbox text-indigo-600">
                                    <span class="ml-2">L</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="sizes[]" value="XL" class="form-checkbox text-indigo-600">
                                    <span class="ml-2">XL</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="sizes[]" value="XXL" class="form-checkbox text-indigo-600">
                                    <span class="ml-2">XXL</span>
                                </label>
                            </div>
                        </div>

                        <!-- Category -->
                        <div class="mb-6">
                            <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                            <select id="category" name="category" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="Men">Men</option>
                                <option value="Women">Women</option>
                                <option value="Kids">Kids</option>
                                <!-- Add more categories as needed -->
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="bg-indigo-500 text-white py-2 px-4 rounded-md hover:bg-indigo-600">Add Product</button>
                </div>
            </form>
        </div>
    </div>