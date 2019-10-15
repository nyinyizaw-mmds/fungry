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
         const secondDiv = document.querySelector("#three");
            isElementInViewport(secondDiv) ?
                secondDiv.classList.add('animated') :
                secondDiv.classList.remove('animated');
            /*Paralexing an item*/
             const scrolled1= window.pageYOffset;
         

            const parallaxEle2 = document.querySelector(".btn2");
            parallaxEle2.style.top =  -scrolled1 * .09 + "px";

            const parall = document.querySelector(".first");
            parall.style.top =  -scrolled1 * .09 + "px";

            const parallaxEle3 = document.querySelector(".btn3");
            parallaxEle3.style.top =  -scrolled1 * .09 + "px";

            const parallaxEle4 = document.querySelector(".btn4");
            parallaxEle4.style.top =  -scrolled1 * .09 + "px";

            const parallaxEle5 = document.querySelector(".btn5");
            parallaxEle5.style.top =  -scrolled1 * .09 + "px";

            const parallaxEle6 = document.querySelector(".btn6");
            parallaxEle6.style.top =  -scrolled1 * .09 + "px";

            const parallaxEle7 = document.querySelector(".btn7");
            parallaxEle7.style.top =  -scrolled1 * .09 + "px";

            const parallaxEle8 = document.querySelector(".btn8");
            parallaxEle8.style.top =  -scrolled1 * .09 + "px";

            const phimg = document.querySelector(".phimg");
            phimg.style.top =  -scrolled1 * .2 + "px";
           // phimg.style.top =  -scrolled * .3 + "px";

           const fruit = document.querySelector(".fruit");
            fruit.style.top =  -scrolled1 * .009 + "px";

           const figimg = document.querySelector(".fig-img");
            figimg.style.top =  -scrolled1 * 0.04 + "px";
            
            const corner1 = document.querySelector(".corner1");
            corner1.style.top =  -scrolled1 * .025 + "px";


            const corner = document.querySelector(".corner-img");
            corner.style.right =  -scrolled1 * .06 + "px";

            const rightcorner = document.querySelector(".right-corner");
            rightcorner.style.top =  -scrolled1 * 0.01 + "px";

            var theta = scrolled / 900 * 0.3;
            const rotateimg = document.querySelector(".right-rotation");
           rotateimg.style.transform = 'rotate(' + theta + 'rad)';

        //    const nextbtn = document.querySelector(".next-btn");
        //     nextbtn.style.top =  -scrolled1 * 0.0025 + "px";


        //for four slide
        const fourthDiv = document.querySelector(".four");
        isElementInViewport(fourthDiv) ?
            fourthDiv.classList.add('animated') :
            fourthDiv.classList.remove('animated');
        /*Paralexing an item*/

        // const scrolled4 = window.pageYOffset;

        // const four = document.querySelector(".four");
        // four.style.top = -scrolled4 * 0.002 + "px";

        //const wrap = document.querySelector(".wrapper");
       // wrap.style.top = -scrolled4 * 0.2 + "px";
        // wrap.style.transform = 'scale('+1.1+')';
        //wrap.classList.add('playing');

        // const corner = document.querySelector(".right-corner");
        // corner.style.marginTop = -scrolled * 0.025 + "px";
        
        // wrap.style.marginRight =  scrolled * .1 + "px";

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



$('.num').counterUp({delay:10,time:1000});