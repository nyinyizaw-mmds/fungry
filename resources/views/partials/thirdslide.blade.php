<div class="three" id="three">
    <p><button class="btn">Exclusive Feature for You</button></p>
    <button class="btn1"><p>အသီးအရြက္</p></button>
    <button class="btn2"><p>အခ်ိဳ</p></button>
    <button class="btn3"><p>ခ်ဥ္ခ်ဥ္စပ္စပ္</p></button>
    <button class="btn4"><p>အသား/ငါး</p></button>
    <button class="btn5"><p>ပင္လယ္စာ</p></button>
    <button class="btn6"><p>Drink</p></button>
    <button class="btn7"><p>ထူးထူးဆန္းဆန္း</p></button>
    <button class="btn8"><p>အကင္</p></button>
    <div class="rotate-img">
        <img src="{{asset('/images/phones.png')}}" alt="phone" class="phimg">

        <img src="{{asset('/images/foot-upper-corner.png')}}" alt="phone" class="back-img">

        <img src="{{asset('/images/icons8-kawaii_egg.png')}}" alt="phone" class="fruit">        

       
        <figure class="fig-img">
            <img src="{{asset('/images/search.png')}}" alt="phone" class="search">    
            <figcaption>Best Meal Search Filter Ever</figcaption>
        </figure>  
        
         {{-- <div class="right-corner">

        </div> --}}
    </div>
   
    <div class="corner1">
        <img src="{{asset('/images/corner-plate.png')}}" alt="phone" class="corner-img">
    </div>
    <div class="right-corner">
        <img src="{{asset('/images/corner-right.png')}}" alt="phone" class="right-rotation">
    </div>
    <p>
        <button class="btn next-btn">Special Meals Around You</button>
        
    </p>
</div>

<script>
        function isElementInViewport(el) {
            var rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }
        document.addEventListener("scroll", function () {
            /*Animating div on entering viewport*/
            const secondDiv = document.querySelector("#three");
            isElementInViewport(secondDiv) ?
                secondDiv.classList.add('animated') :
                secondDiv.classList.remove('animated');
            /*Paralexing an item*/
            const scrolled = window.pageYOffset;
            const parallaxEle = document.querySelector(".btn1");
            parallaxEle.style.top =  -scrolled * .3 + "px";

            const parallaxEle2 = document.querySelector(".btn2");
            parallaxEle2.style.top =  -scrolled * .3 + "px";

            const parallaxEle3 = document.querySelector(".btn3");
            parallaxEle3.style.top =  -scrolled * .3 + "px";

            const parallaxEle4 = document.querySelector(".btn4");
            parallaxEle4.style.top =  -scrolled * .3 + "px";

            const parallaxEle5 = document.querySelector(".btn5");
            parallaxEle5.style.top =  -scrolled * .3 + "px";

            const parallaxEle6 = document.querySelector(".btn6");
            parallaxEle6.style.top =  -scrolled * .3 + "px";

            const parallaxEle7 = document.querySelector(".btn7");
            parallaxEle7.style.top =  -scrolled * .3 + "px";

            const parallaxEle8 = document.querySelector(".btn8");
            parallaxEle8.style.top =  -scrolled * .3 + "px";

            const phimg = document.querySelector(".phimg");
            phimg.style.top =  -scrolled * .4 + "px";
           // phimg.style.top =  -scrolled * .3 + "px";

           const fruit = document.querySelector(".fruit");
            fruit.style.top =  -scrolled * .3 + "px";

           const figimg = document.querySelector(".fig-img");
            figimg.style.top =  -scrolled * 0.3 + "px";
            
            const corner1 = document.querySelector(".corner1");
            corner1.style.top =  -scrolled * .2 + "px";


            const corner = document.querySelector(".corner-img");
            corner.style.right =  -scrolled * .1 + "px";

            const rightcorner = document.querySelector(".right-corner");
            rightcorner.style.top =  -scrolled * 0.3 + "px";

            var theta = scrolled / 1000 + 0.05;
            const rotateimg = document.querySelector(".right-rotation");
           rotateimg.style.transform = 'rotate(' + theta + 'rad)';

        //    const nextbtn = document.querySelector(".next-btn");
        //     nextbtn.style.top =  scrolled * 0.05 + "px";
        });
    </script>