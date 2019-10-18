<div class="header"  id="home">
    <div class="logo1">
            <img src="{{asset('/images/logo1.png') }}" alt="logo"><p>Fungry.AI</p>
           
    </div>
    
        <nav>
             <ul>
                 <li  class="home"><a href="#home">Home</a></li>
                 <li><a href="#about">About</a></li>
                 <li><a href="#three">Features</a></li>
                 <li><a href="#special">How It Works</a></li>
                 <li><button class="btn1"><a href="#slide-six">Get the App</a></button></li>
             </ul>
         </nav>

        
 </div>
 @foreach ($image as $image)
 @if($image->is_active == 1)
    <img src="{{ asset ('images/'.$image->image)}}" alt="image" style="width:1348px;height:200px;"/>
 @endif
@endforeach