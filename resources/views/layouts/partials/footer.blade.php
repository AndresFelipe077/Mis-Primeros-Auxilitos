{{-- footer --}}
    <!-- The navigation menu -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <nav class="navbar navbar-default rounded w-100 p-3 fixed-bottom vh-md-100 animate__animated animate__backInUp">
        <div class="navbar1 row">
            <div class="col">
                <img src="{{asset('img/menu/home.png')}}" onclick="location.href='{{route('home.index')}}'">
            </div>
        
            <div class="col">
                <img src="{{asset('img/menu/challengue2.png')}}" onclick="location.href=''">
            </div>
        
            <div class="col">
                <img src="{{asset('img/menu/microphone2.png')}}" onclick="location.href=''">
            </div>
            
            <div class="col">
                <img src="{{asset('img/menu/settings2.png')}}" onclick="location.href='{{route('home.ajustes')}}'">
            </div>
            
        
        </div>
    </nav>