@extends('layouts/master') 

@section('content')
    <div id="app" style="position:absolute; top:0; left:0; right: 0; z-index:9;">
        @include('layouts/nav')

        @include('layouts/login')

        @include('layouts/register')

        @include('layouts.message')
        
        <status-list :data="{{ $machines }}" auth="{{ Auth::check() }}"></status-list>  
        
        @include('layouts/tools')

        <message-list :data="{{ $messages }}" auth="{{ Auth::check() }}"></message-list>
    
        <div class="mt-4 -mb-6 flex justify-center text-xs py-6">by John Braun</div>
    
    </div>
@endsection
