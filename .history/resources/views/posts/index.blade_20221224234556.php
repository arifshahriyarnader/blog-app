@extends('layouts.app')

@section('content')
   <div class='flex justify-center'>
        <div class="w-8/12 bg-white p-6 rounded-lg">
           <form action="{{ route('posts') }}" method='post'>
             <div class='mb-4'>
                <label for='body' class='sr-only'>Body</label>
                <textarea name='body' id='body' cols='30' rows='4' class='bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') '></textarea>
             </div>
           </form>
        </div>
   </div>
@endsection