@extends('layouts.app')

@section('content')
   <div class='flex justify-center'>
        <div class="w-8/12 bg-white p-6 rounded-lg">
           <form action="{{ route('posts') }}" method='post'>
             <div class='mb-4'>
                <label for='body' class='sr-only'>Body</label>
                <textarea></textarea>
             </div>
           </form>
        </div>
   </div>
@endsection