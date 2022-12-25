@extends('layouts.app')

@section('content')
   <div class='flex justify-center'>
        <div class="w-6/12 bg-white p-6 rounded-lg">
           <form action="{{ route('register') }}" method="post">
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label><br/>
                    <input type="text" name="name" id="name" placeholder="Your Name"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="" />
                </div>
                <div class="mb-4">
                    <label for="username" class="sr-only">Username</label><br/>
                    <input type="text" name="name" id="name" placeholder="Username"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="" />
                </div>
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label><br/>
                    <input type="email" name="email" id="name" placeholder="Your Email"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="" />
                </div>
           </form>
        </div>
   </div>
@endsection