<div class="four" id="four">
       
        <div class="wrapper">
            <div class="three_one">
                <h3>
                    Thai Fried<br>
                    Chicken
                </h3><br/>
                <p>Bost Noodle</p>
                
                <span>ေျမနီကုန္း၊ဂမုန္းပြင့္အနီး</span>
                <img src="{{asset('/images/chicken.jpg')}}" alt="phone" class="phimg">
            </div>
            <div class="three_two">
                <h3>
                        Thai Fried<br>
                        Chicken
                    </h3><br/>
                    <p>Bost Noodle</p>
                    
                    <span>ေျမနီကုန္း၊ဂမုန္းပြင့္အနီး</span>
                <img src="{{asset('/images/chicken.jpg')}}" alt="phone" class="phimg1">
            </div>
            <div class="three_three">
                <h3>
                    Thai Fried<br>
                    Chicken
                </h3><br/>
                <p>Bost Noodle</p>
                
                <span>ေျမနီကုန္း၊ဂမုန္းပြင့္အနီး</span>
                <img src="{{asset('/images/chicken.jpg')}}" alt="phone" class="phimg2">
            </div>
    
           
        </div>
      
        <p><button class="see_all">SEE ALL <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button></p>
        
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
            const secondDiv = document.querySelector("#four");
            isElementInViewport(secondDiv) ?
                secondDiv.classList.add('animated') :
                secondDiv.classList.remove('animated');
            /*Paralexing an item*/

            const scrolled = window.pageYOffset;

            const four = document.querySelector(".four");
            four.style.marginTop = -scrolled * 0.09 + "px";

            const wrap = document.querySelector(".wrapper");
            wrap.style.marginTop = -scrolled * 0.05 + "px";
           // wrap.style.transform = 'scale('+1.1+')';

            // const corner = document.querySelector(".right-corner");
            // corner.style.marginTop = -scrolled * 0.025 + "px";
           
            // wrap.style.marginRight =  scrolled * .1 + "px";

        });
    </script>


