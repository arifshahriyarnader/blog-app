@extends('layouts.app')

@section('content')
   <div class='flex justify-center'>
        <div class="w-6/12 bg-white p-6 rounded-lg">
            @if(session())

           <form action="{{ route('login') }}" method="post">
            @csrf
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label><br/>
                    <input type="email" name="email" id="email" placeholder="Your Email"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ old('email') }}" />

                    @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label><br/>
                    <input type="password" name="password" id="password" placeholder="Password"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ old('password') }}" />
                    @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
               
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded 
                    font-medium w-full">Login</button>
                </div>
           </form>
        </div>
   </div>
@endsection