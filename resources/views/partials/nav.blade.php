<div class="header"  id="home">
    <div class="logo1">
           <a href="#home">
                <img src="{{asset('/images/logo1.png') }}" alt="logo">
                <p>Fungry.AI</p>
           </a>
           
    </div>
    
        <nav class="nav">
            <a href="#" class="toggleNav menu">☰</a>

            <ul>
                <div class="close">
                    <a href="#" class="toggleNav cross"><img src="{{asset('/images/delete.png') }}" alt="logo" class="close"></a>
                </div>
                <li class="toggleNav"><a href="#main">Home</a></li>
                <li class="toggleNav"><a href="#about">About</a></li>
                <li class="toggleNav"><a href="#three">Features</a></li>
                <li class="toggleNav"><a href="#special">How It Works</a></li>
                <li class="toggleNav"><button class="btn1"><a href="#slide-six">Get the App</a></button></li>
            </ul>
        </nav>    
 </div>
<div class="campaign">
        @foreach ($image as $image)
        @if($image->is_active == 1)
           <img src="{{ asset ('images/'.$image->image)}}" alt="image" />
        @endif
       @endforeach
</div>