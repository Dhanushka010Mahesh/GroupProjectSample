<div class="popup-contentLog  bg-white rounded-xl shadow-lg ">
    <div class="p-10 space-y-4">
        <h1 class="text-2xl font-bold leading-tight tracking-tight text-gray-900">
            Sign In to your Account
        </h1>
        <form class="space-y-4 md:space-y-6" action="#">
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="name@company.com" required="">
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300" required="">
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="remember" class="text-gray-500">Remember me</label>
                    </div>
                </div>
                <a href="#" class="text-sm font-medium text-primary-600 hover:underline">Forgot password?</a>
            </div>
            <button type="submit" class="w-full text-white bg-gray-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign In</button>
            <p class="text-sm font-light text-gray-500">
                Don’t have an account yet? <a href="#" class="font-medium text-primary-600 hover:underline" onclick="loadContent('Components', 'SignUp','left-content')">Sign up</a>
            </p>
        </form>
    </div>
</div>
<script src="../js/index.js"></script>