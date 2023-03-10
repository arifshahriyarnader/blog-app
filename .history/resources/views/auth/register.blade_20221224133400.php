@extends('layouts.app')

@section('content')
   <div class='flex justify-center'>
        <div class="w-6/12 bg-white p-6 rounded-lg">
           <form action="{{ route('register') }}" method="post">
            @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label><br/>
                    <input type="text" name="name" id="name" placeholder="Your Name"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="" />

                    @error('name')
                    <div class=""></div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="username" class="sr-only">Username</label><br/>
                    <input type="text" name="username" id="username" placeholder="Username"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="" />
                </div>
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label><br/>
                    <input type="email" name="email" id="email" placeholder="Your Email"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="" />
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label><br/>
                    <input type="password" name="password" id="password" placeholder="Password"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="" />
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Password Again</label><br/>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Retype Password"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="" />
                </div>
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded 
                    font-medium w-full">Register</button>
                </div>
           </form>
        </div>
   </div>
@endsection