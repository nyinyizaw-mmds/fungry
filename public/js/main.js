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
    console.log('scrolling');
    const description = document.querySelector(".border");
    isElementInViewport(description) ?
    description.classList.add('animated') :
    description.classList.remove('animated');


    /*Animating div on entering viewport*/
    //text two animation
    const hungry = document.querySelector(".font-align");
    isElementInViewport(hungry) ?
    hungry.classList.add('animated') :
    hungry.classList.remove('animated');

    //Image animation
    const wrapper = document.querySelector(".wrapper");
    isElementInViewport(wrapper) ?
    wrapper.classList.add('animated') :
    wrapper.classList.remove('animated');

    /*Paralexing an item*/
    /* pizza paralexing*/
    const scrolled = window.pageYOffset;
    const parallaxEle = document.querySelector(".piz");
    parallaxEle.style.top =  -scrolled * .2 + "px";

    /* noodle bowl rotaion*/
    var theta = -scrolled / 1200 % Math.PI;
    const rotate = document.querySelector(".noodle");
    rotate.style.transform = 'rotate(' + theta + 'rad)';

    // for third slide
    const three = document.querySelector(".three");
    isElementInViewport(three) ?
    three.classList.add('animated') :
    three.classList.remove('animated');

        if(three){
            console.log('right');   
            const trans = document.querySelector('#trans');
            trans.classList.add('largescale');

            const tr1 = document.querySelector('#tr1');
            tr1.classList.add('largescale');

            const tr2 = document.querySelector('#tr2');
            tr2.classList.add('largescale');

            const tr3 = document.querySelector('#tr3');
            tr3.classList.add('largescale');

            const tr4 = document.querySelector('#tr4');
            tr4.classList.add('largescale');

            const tr5 = document.querySelector('#tr5');
            tr5.classList.add('largescale');

            const tr6 = document.querySelector('#tr6');
            tr6.classList.add('largescale');

            const tr7 = document.querySelector('#tr7');
            tr7.classList.add('largescale');

        }
         
            /*Paralexing an item*/
             const scrolled1= window.pageYOffset;
             const scrollamount =  -scrolled1 * .07 + "px";

            const parallaxEle2 = document.querySelector(".btn2");
            parallaxEle2.style.top = scrollamount;

            const parall = document.querySelector(".first");
            parall.style.top =  scrollamount;

            const parallaxEle3 = document.querySelector(".btn3");
            parallaxEle3.style.top =  scrollamount;

            const parallaxEle4 = document.querySelector(".btn4");
            parallaxEle4.style.top =  scrollamount;

            const parallaxEle5 = document.querySelector(".btn5");
            parallaxEle5.style.top =  scrollamount;

            const parallaxEle6 = document.querySelector(".btn6");
            parallaxEle6.style.top =  scrollamount;

            const parallaxEle7 = document.querySelector(".btn7");
            parallaxEle7.style.top = scrollamount;

            const parallaxEle8 = document.querySelector(".btn8");
            parallaxEle8.style.top = scrollamount;

            const phimg = document.querySelector(".phimg");
            phimg.style.top =  -scrolled1 * .2 + "px";
          
           const fruit = document.querySelector(".fruit");
            fruit.style.top =  -scrolled1 * .009 + "px";

           const figimg = document.querySelector(".fig-img");
            figimg.style.top =  -scrolled1 * 0.07 + "px";
            
            const corner1 = document.querySelector(".corner1");
            corner1.style.top =  -scrolled1 * .025 + "px";


            const corner = document.querySelector(".corner-img");
            corner.style.right =  -scrolled1 * .05 + "px";

            const rightcorner = document.querySelector(".right-corner");
            rightcorner.style.top =  -scrolled1 * 0.01 + "px";

            var theta = scrolled / 900 * 0.3;
            const rotateimg = document.querySelector(".right-rotation");
           rotateimg.style.transform = 'rotate(' + theta + 'rad)';


           //four slide animation
           const four = document.querySelector(".four");
            isElementInViewport(four) ?
            four.classList.add('animated') :
            four.classList.remove('animated');
       
           const add = document.querySelector('.add_ani');

           add.style.marginTop = -scrolled1 * 0.02 + "px";
     
            //for six slide
            const sixslide = document.querySelector("#slide-six");
            isElementInViewport(sixslide) ?
                sixslide.classList.add('animated') :
                sixslide.classList.remove('animated');
                const rotatescroll = window.pageYOffset;

            /*Paralexing an item*/
            var theta = rotatescroll / 1200 + 5 * 0.7;
            const circle = document.querySelector(".circle");
            circle.style.transform = 'rotate(' + theta + 'rad)';

        // css({ transform: 'rotate(' + theta + 'rad)' });


});

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



$('.num').counterUp({delay:15,time:1000});