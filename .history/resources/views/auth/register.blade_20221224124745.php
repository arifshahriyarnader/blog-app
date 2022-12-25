@extends('layouts.app')

@section('content')
   <div class='flex justify-center'>
        <div class="w-6/12 bg-white p-6 rounded-lg">
           <form action="{{ route('register') }}" method="post">
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your Name"
                    class="bg-gray-100 " />
                </div>
           </form>
        </div>
   </div>
@endsection