@extends('layouts.main')

@section('container')
<div class="container">
    <p id="title"> <b>Feedback_</b></p>
    <div class="left2">
        <form id="form" onsubmit="return false;">
            <input class="form-control mt-2 mb-2" type="text" id="userInput" name="userInput" placeholder="Please Input Your Real Name"/>
            <button id="confirm" name="confirm" onclick="otherName()"> Confirm</button>
        </form>
    </div>
</div>
@endsection

