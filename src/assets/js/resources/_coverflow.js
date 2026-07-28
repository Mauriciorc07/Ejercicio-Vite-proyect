const slides=[...document.querySelectorAll(".slide")];

const title=document.querySelector(".title");

let active=0;

let autoplay=true;

let direction=1;

function update(){

slides.forEach((slide,index)=>{

let offset=index-active;

// Bucle
function render() {

    slides.forEach(slide => {

        slide.x += (slide.targetX - slide.x) * 0.08;
        slide.z += (slide.targetZ - slide.z) * 0.08;
        slide.r += (slide.targetR - slide.r) * 0.08;
        slide.s += (slide.targetS - slide.s) * 0.08;

        slide.style.transform = `
            translate3d(${slide.x}px,0,${slide.z}px)
            rotateY(${slide.r}deg)
            scale(${slide.s})
        `;

    });

    requestAnimationFrame(render);
}

requestAnimationFrame(render);

if(offset<-slides.length/2)
offset+=slides.length;

if(offset>slides.length/2)
offset-=slides.length;

const abs=Math.abs(offset);

slide.style.opacity=abs>2 ? 0 : 1;

slide.style.pointerEvents=abs>2 ? "none":"auto";

slide.style.zIndex=100-abs;

if(offset===0){

slide.classList.add("active");

slide.style.transform=`
translateX(0px)
translateZ(140px)
rotateY(0deg)
scale(1)
`;

}else{

slide.classList.remove("active");

slide.style.transform=`

translateX(${offset*230}px)

translateZ(${-abs*120}px)

rotateY(${offset<0?45:-45}deg)

scale(${1-(abs*.15)})

`;

}

});

title.textContent=slides[active].dataset.title;

}

//=========================

slides.forEach((slide,index)=>{

slide.onclick=()=>{

active=index;

update();

}

});

//=========================

document.addEventListener("keydown",(e)=>{

if(e.key==="ArrowRight"){

next();

}

if(e.key==="ArrowLeft"){

prev();

}

});

//=========================

function next(){

active++;

if(active>=slides.length)
active=0;

update();

}

function prev(){

active--;

if(active<0)
active=slides.length-1;

update();

}

//=========================

if(autoplay){

setInterval(()=>{

active+=direction;

if(active>=slides.length){

active=0;

}

if(active<0){

active=slides.length-1;

}

update();

},3000);

}

update();



function easeInOut(t) {
    return t < 0.5
        ? 2 * t * t
        : 1 - Math.pow(-2 * t + 2, 2) / 2;
}

