<div class="header"  id="home">
    <div class="logo1">
            <img src="{{asset('/images/logo1.png') }}" alt="logo"><p>Fungry.AI</p>
           
    </div>
    
        <nav class="nav">
            <a href="#" class="toggleNav">☰</a>
            
             <ul>
                <li >
                    <a href="#" class="toggleNav"><img src="{{asset('/images/delete.png') }}" alt="logo" class="close"></a>
                </li>
                 <li  class="home"><a href="#home">Home</a></li>
                 <li><a href="#about">About</a></li>
                 <li><a href="#three">Features</a></li>
                 <li><a href="#special">How It Works</a></li>
                 <li><button class="btn1"><a href="#slide-six">Get the App</a></button></li>
             </ul>
         </nav>

        
 </div>
{{-- <div class="campaign">
        @foreach ($image as $image)
        @if($image->is_active == 1)
           <img src="{{ asset ('images/'.$image->image)}}" alt="image" />
        @endif
       @endforeach
</div> --}}