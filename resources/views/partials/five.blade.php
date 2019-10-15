<div class="five">
    <div class="meal">
            <img src="{{asset('/images/burger.png')}}" alt="phone" class="meals">
            <div class="up-to-date">
                <div class="text-opacity">
                    <h1>Up to Date Promotions <br/>
                        and Meal Update</h1>
                    
                    
                    <span>
                        Read and Get more Food Related <br/>information by free
                    </span>
                </div>
                <div class="slide_group">
                    <div class="card">
                        <img src="{{asset('/images/burger-chips-dinner-70497.jpg')}}" alt="phone" class="phimg2">
                        <i class="far fa-heart" ><span>12</span></i>
                        <div class="container">
                            <span>New Opening</span><br/>
                            <span>Yummy Hot Pot & BBQ ဆိုင္ဠခဲအသစ္ soft openingပါေနာ္</span>
                         
                        </div>
                    </div>
        
                    <div class="card_1">
                        <img src="{{asset('/images/asian-food-bowl-cuisine-699953.jpg')}}" alt="phone" class="phimg2">
                        <i class="far fa-heart" ><span>12</span></i> 
                        <div class="container">
                            <span>New Opening</span><br/>
                            <span>Yummy Hot Pot & BBQ ဆိုင္ဠခဲအသစ္ soft openingပါေနာ္</span>
                        </div>
                    </div>
                    
                    <div class="card_2">
                        <img src="{{asset('/images/appetizer-avocado-bread-566566.jpg')}}" alt="phone" class="phimg2">
                        <i class="far fa-heart" ><span>12</span></i> 
                        <div class="container">
                            <span>New Opening</span><br/>
                         <span>Yummy Hot Pot & BBQ ဆိုင္ဠခဲအသစ္ soft openingပါေနာ္</span>
                        </div>
                    </div> 
                    
            </div>
        </div>
     
    </div>
</div>
{{-- 
<script>
const slider =document.querySelector('.slide_group');

        let isDown = false;
        let startX;
        let scrollLeft;
    
        slider.addEventListener('mousedown',(e) => {
            isDown = true;
            slider.classList.add('active');
            startX = e.pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
            
            console.log(startX);
            step2();
        });

        function step2(){
            var opacity = document.querySelector('.text-opacity');
            opacity.style.opacity = 0.4;
        }
    
        slider.addEventListener('mouseleave',() => {
            isDown = false;
            slider.classList.remove('active');

           
        });
    
        slider.addEventListener('mouseup',() => {
            isDown = false;
            slider.classList.remove('active');

            step3();
        });
    
        slider.addEventListener('mousemove',(e) => {
           if(!isDown) return;
           e.preventDefault();
           const x=e.pageX - slider.offsetLeft;
           const walk = (x - startX) * 0.5;
           slider.scrollLeft = scrollLeft - walk;
        
           
        });

        function step3(){
            var opacity = document.querySelector('.text-opacity');
            opacity.style.opacity = '';
        }

</script> --}}
