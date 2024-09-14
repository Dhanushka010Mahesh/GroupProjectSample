<div class="flex justify-between bg-gray-900 p-4 text-white">

    <div>
        <ul class="flex gap-5">
            <li><a href="#" onclick="loadContent('Pages', 'Home','main-content')">Home</a></li>
            <li><a href="#" onclick="loadContent('Pages', 'AddProduct','main-content')">Add Product</a></li>
            <li><a href="#" onclick="loadContent('Pages', 'ListProduct','main-content')">Product List</a></li>
            <li><a href="#" onclick="loadContent('Pages', 'Cart','main-content')">Cart List</a></li>
        </ul>
    </div>

<!-- onclick="loadContent('Components', 'SignIn','left-content')" -->
    <div>
        <a id="onclickLog" href="#" onclick="loadContent('Components', 'SignIn','left-content')" >Profile</a>
    </div>
    <div class="popupLog" id="left-content" >
        
    </div>

    <script src="../js/index.js"></script>
</div>