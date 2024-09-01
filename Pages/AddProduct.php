<h1 class="px-5 py-6" >Add Product page</h1>

<form action="">
    
    <div class="grid grid-cols-2 gap-10 p-10" >
            <div>
                Id <input type="text" name="id" class="border border-black border-[1px]" ><br>
                Name <input type="text" name="name" class="border border-black border-[1px]"><br>
                Description <input type="text" name="description" class="border border-black border-[1px]"><br>
                Price <input type="text" name="price" class="border border-black border-[1px]"><br><br>
            </div>
            <div>
                Sizes <br><input type="checkbox" name="sizes" value="S" >S
               <input type="checkbox" name="sizes" value="M" >M
               <input type="checkbox" name="sizes" value="L" >L
               <input type="checkbox" name="sizes" value="XL" >XL
               <input type="checkbox" name="sizes" value="XXL" >XXL<br><br>
           </div>
            <div>
                Images <br><input type="file" name="image1" accept="image/*" required><br>
                <input type="file" name="image2" accept="image/*" required><br>
                <input type="file" name="image3" accept="image/*" required><br>
                <input type="file" name="image4" accept="image/*" required><br>
            </div>

            <div>
                Category <select name="category" id="" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <option value="Men">Men</option>
                    <option value="Women">Women</option>
                    <option value="Kids">Kids</option>
                </select><br><br><br><br><br>
                <input type="submit" value="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 " name="submit">
            </div>
    </div>
    
</form>