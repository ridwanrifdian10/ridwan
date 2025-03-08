<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>REGISTER</title>
  </head>
  <body>
    <div class="flex h-screen">
        <div class="w-2/3 bg-cover bg-center" style="background-image: url('path/to/your/image.jpg');">
            
        </div>
        <div class="w-1/3 flex flex-col justify-center items-center mr-5">
            <h1 class="text-4xl font-bold text-center mb-6">
              REGISTER FORM
            </h1>

            <form action="{{ route('register') }}" method="POST" class="bg-white p-8 rounded shadow-md w-full">
                @csrf

                <div class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500">
                            @error('name')
                                <div class="error text-red-500">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                            <input type="text" id="email" name="email" value="{{ old('email') }}" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500">
                            @error('email')
                                <div class="error text-red-500">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
                            <input type="password" name="password" id="password" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500">
                            @error('password')
                                <div class="error text-red-500">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password:</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500">
                        </div>

                    <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">REGISTER</button>
                </div>
                
                <div class="register-link mt-4">
                  Already have an account? <a href="{{ route('login') }}" class="text-blue-500 hover:underline">LogIn Here</a>
                </div>
            </div>
        </form>

    </div>
  </body>
</html> 