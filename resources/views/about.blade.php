@extends('layouts.main')

@section('container')
    <div class="container">
        <p class="block"></p>
        <p id="title"> <b>My Profile_</b></p>
        <div class="left2">
            <div class="top">
                <p class="first2">full stack and android developer</p>
            </div>
            <div class="bot">
                <p class="third2">In love with new technologies and creating best performing user experience possible because humans are not great because of technology but how to use it.</p>
            </div>
            
        </div>
    </div>

    <div class="left"></div>
    <div class="right2">
        <div class="images">
            <img src="img/panduwindito.png" alt="Pandu Windito" height="670px" >
        </div>
        <p class="block">aaa</p>
    </div>

    <div class="container">
        <p class="block">aaa</p>
        <p id="title"><b>Services_</b></p>
        <p class="firstAbout"><b>WHAT I DO BEST</b></p>
        <div class="container">
            <div class="left3">
                <p class="minor">01_</p>
                <p class="secondAbout"><b>Web Development</b></p>
                <p>Who is currently not looking for information with Google, then the best way now to show the world is through the website because everyone can access it easily to find the information they need starting from a person's profile, product, event, or service.</p>
            </div>
            <div class="middle3">
                <p class="minor">02_</p>
                <p class="secondAbout"><b>Backend</b></p>
                <p>Every pixel is important, but a good UI will have no value without a good backend because the backend is the core for every system to function properly. The best user experience comes from the satisfaction of an effective and efficient system performance to support their needs.</p>
            </div>
            <div class="right3">
                <p class="minor">03_</p>
                <p class="secondAbout"><b>Android</b></p>
                <p>With current technological developments, the wide world can already be accessed through the hands of humans through their mobile phones so that information circulation will be faster and the easiest platform for people to reach is through their mobile phones.</p>
                <p class="block">a</p>
            </div>
        </div>        
    </div>
    
    <div class="container">
        <p class="block">aaa</p>
        <p id="title"><b>Skills_</b></p>
        <div class="container">
            <p class="firstAbout"><b>HOW I DO IT</b></p>
            <div class="container">
                <div class="left3">
                    <p class="thirdAbout"><b>Systems & Tools</b></p>
                    <p class="desc">Laravel</p>
                    <p class="desc">Github</p>
                    <p class="desc">API</p>
                    <p class="desc">MySql Database</p>
                    <p class="desc">Vue.js</p>
                    <p class="desc">Vuetify</p>
                    
                </div>
                <div class="middle3">
                    <p class="thirdAbout"><b>Programming Language</b></p>
                    <p class="desc">C</p>
                    <p class="desc">Python</p>
                    <p class="desc">Java</p>
                    <p class="desc">HTML5</p>
                    <p class="desc">PHP</p>
                    <p class="desc">CSS</p>
                    <p class="desc">Javascript</p>
                    <p class="block">aa</p>
                </div>
                <div class="right3" style="margin-left: 30px">
                    <p class="thirdAbout"><b>Android</b></p>
                    <p class="desc">Kotlin</p>
                    <p class="desc">Fragment</p>
                    <p class="desc">View Binding</p>
                    <p class="desc">Data Binding</p>
                    <p class="desc">MVVM</p>
                    <p class="desc">Room</p>
                    <p class="desc">Notification</p>
                    <p class="desc">Firebase</p>
                    <p class="desc">Geo Location</p>
                    <p class="desc">Volley</p>
                </div>
            </div>
        </div>  
    </div>
    
    <div class="slides">
        <div class="left4">
            <div class="sliding"><img src="/img/raung.png" alt="" width="700px"></div>
            <p class="block">a</p>
            <div class="sliding"><img src="/img/pb.png" alt="" width="700px"></div>
            <p class="block">a</p>
            <div class="sliding"><img src="/img/bandung.png" alt="" width="700px"></div>    
        </div> 
        <div class="right5">
            <p id="title">about me_</p>
            <p class="firstAbout c"><b>WHAT I LIKE</b></p>
            <p class="block">a</p>
            <p class="thirdAbout">Nature</p>
            <p class="desc"><a class="ref" href="https://youtube.com/playlist?list=PLhHZtmr9J-c9V3-EYYS8c-KJxbm-I2ciS"><u>Hiking</u></a> into the forest then spending time sitting and enjoying the atmosphere away from the crowds to find peace with the warmth of the campfire.</p>
            <p class="block">a</p>
            <p class="block">a</p>
            <p class="block">a</p>
            <p class="block">a</p>
            <p class="thirdAbout">Movie</p>
            <p class="desc">Stories, the beginning of human civilization that can be presented in an interesting way. Provide value in an attractive way. I recommend the prison break series if you haven't watched it yet.</p>
            <p class="block">a</p>
            <p class="block">a</p>
            <p class="block">a</p>
            <p class="block">a</p>
            <p class="block">a</p>
            <p class="thirdAbout">Exploring</p>
            <p class="desc">Visit various places to learn culture and other perspectives to develop yourself. Indonesia with 1,340 tribes, 840 languages, and various cultures. There won't be enough time to explore everything</p>
            <p class="block">a</p>
        </div>    
        <div class="right5"></div>
        <div class="right5"></div>
    </div>    

    <div class="contact">
        <p class="cont" style="cursor: pointer;" onclick="work()">My Work>>></p>
    </div>
    
@endsection

