@extends('layouts.main')

@section('container')
<div class="container">
    
        <p class="block">a</p>
        <p id="title"> <b>Feedback_</b></p>
        <div class="left2">
            <form action="{{ route('feedback.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input class="form-control mt-2 mb-2" type="text" id="email" name="email" placeholder="Please Input Your Email"/>
                <input class="form-control mt-2 mb-2" type="text" id="name" name="name" placeholder="Please Input Your Name"/>
                <textarea class="form-control mt-2 mb-2" name="content" id="content" rows="10" cols="70" placeholder="Comment or anything about my website"></textarea>
                <button id="confirm" name="confirm" onclick="otherName()"> Confirm</button>
            </form>
        </div>
    </div>
</div>
@endsection

