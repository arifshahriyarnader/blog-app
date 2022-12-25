@extends('layouts.app')

@section('content')
   <div class='flex justify-center'>
        <div class="w-6/12 bg-white p-6 rounded-lg">
           <form action="{{ route('register') }}" method="post">
                <div class="mb-4">
                    
                </div>
           </form>
        </div>
   </div>
@endsection