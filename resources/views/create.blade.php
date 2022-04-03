@extends('master')
@section('title')
    Create Post
@endsection
@section('content')
<h1>Create new Post</h1>
<div class="container mx-auto m-6 p-6">
   <div class="w-full max-w-xs">
         <form class="bg-white rounded px-8 pt-6 pb-8 mb-4" action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-600 text-sm font-semibold mb-2" for="title">
                 Title
               </label>
                <input
                  class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                  id="title"
                 name="title"
                  type="text"
                  placeholder="Title"
                  />
             </div>
            <div class="mb-4">
                <label
                  class="block text-gray-600 text-sm font-semibold mb-2"
                  for="body"
                  >
                  Body
                </label>
               <textarea
                  rows="4"
                  cols="50"
                  class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                  name="body"
                  type="text"
               >
               </textarea>
            </div>
   
   
           <div>
               <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                   Edit post
               </button>
           </div>
         </form>
   </div>
</div>

@endsection
