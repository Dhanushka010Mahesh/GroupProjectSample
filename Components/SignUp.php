<div class="popup-contentLog  bg-white rounded-xl shadow-lg ">
    <div class="p-10 space-y-4">
        <h1 class="text-2xl font-bold leading-tight tracking-tight text-gray-900">
            Create a New Account
        </h1>
        <form class="space-y-4 md:space-y-6" method="POST" action="Components/AccountDataSend.php">
            
            <div class="otpVerifyDisplay1">
            <div>
                <label for="fname" class="block mb-2 text-sm font-medium text-gray-900">First Name</label>
                <input type="text" name="fname" id="fname" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="first name" required="">
            </div>
            <div>
                <label for="lname" class="block mb-2 text-sm font-medium text-gray-900">Last Name</label>
                <input type="text" name="lname" id="lname" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="last name" required="">
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="name@company.com" required="">
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
            </div>

            <button type="submit" name="submitACC" class="w-full text-white bg-gray-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Verify</button>
            </div>
            </form>
            <div class="otpVerifyDisplay2" >
                <form class="space-y-4 md:space-y-6" method="POST" action="Components/AccountDataSend.php">

                <label for="otpCode">OTP Verify</label><br>
                <input type="text" name="otpCode" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="OTP Code" required><br>
                <button id="otp-btnSignup" type="submit" name="SubmitOTP" class="w-full text-white bg-gray-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" >Create Account</button>
                
                </form>
                </div>

            <p class="text-sm font-light text-gray-500">
                Already have an account? <a href="#" class="font-medium text-primary-600 hover:underline" onclick="loadContent('Components', 'SignIn','left-content')">Sign In</a>
            </p>
        
    </div>
</div>