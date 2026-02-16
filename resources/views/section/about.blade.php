<section id="about"
class="relative min-h-screen flex flex-col justify-center items-center text-center px-5 overflow-hidden">

<!-- BACKGROUND -->
<div class="absolute inset-0 bg-cover bg-center bg-no-repeat z-0"
style="background-image:url('/backgroundabout.png'); background-attachment:fixed;"></div>

<!-- DARK OVERLAY -->
<div class="absolute inset-0 bg-black/50 z-10"></div>

<!-- CONTENT -->
<div class="relative z-20">
<h2 class="text-3xl font-bold mb-6 bg-gradient-to-r from-emerald-400 to-blue-400 bg-clip-text text-transparent">
Tentang Saya
</h2>

<p class="text-indigo-200 max-w-2xl leading-relaxed mb-10">
Saya adalah pelajar yang fokus pada web development modern menggunakan
HTML, CSS, JavaScript, dan Laravel.
</p>
</div>

<!-- FLOATING ICONS -->
<div class="absolute inset-0 pointer-events-none z-20">

<a href="#tk" class="float-icon star">TK</a>
<a href="#sd" class="float-icon star">SD</a>
<a href="#smp" class="float-icon star">SMP</a>

<a href="#smk" class="float-icon star">SMK</a>
<a href="#smp2" class="float-icon star">SMP2</a>
<a href="#sd2" class="float-icon star">SD2</a>

<a href="#tk2" class="float-icon star">TK2</a>

<a href="https://wa.me/628xxxxxxxxxx" target="_blank" class="float-icon star">
<i class="fa-brands fa-whatsapp"></i>
</a>

<a href="https://instagram.com/username" target="_blank" class="float-icon star">
<i class="fa-brands fa-instagram"></i>
</a>

<a href="mailto:emailkamu@gmail.com" class="float-icon star">
<i class="fa-solid fa-envelope"></i>
</a>

</div>
</section>

<style>

.float-icon{
position:absolute;
width:50px;
height:50px;
border-radius:9999px;
display:flex;
align-items:center;
justify-content:center;
font-weight:bold;
color:white;
background:linear-gradient(45deg,#F9A8D4,#C084FC);
box-shadow:0 0 20px rgba(255,255,255,.4);
pointer-events:auto;
}

.star{
opacity:.9;
background:
radial-gradient(circle at 30% 30%,rgba(255,255,255,.8) 20%,transparent 80%),
linear-gradient(45deg,#F9A8D4,#C084FC);
}

</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>

<script>

const stars=document.querySelectorAll(".star");
const about=document.querySelector("#about");
let positions=[];

function calculateFormation(){

const w=about.offsetWidth;
const h=about.offsetHeight;
const rx=w*.35;
const ry=h*.35;
const cx=w/2;
const cy=h/2;

stars.forEach((el,i)=>{

const a=i/stars.length*Math.PI*2;
const l=cx+rx*Math.cos(a)-25;
const t=cy+ry*Math.sin(a)-25;

positions[i]={angle:a,left:l,top:t};

el.style.left=l+"px";
el.style.top=t+"px";

});

}

function rotateStars(){

const w=about.offsetWidth;
const h=about.offsetHeight;
const rx=w*.35;
const ry=h*.35;
const cx=w/2;
const cy=h/2;

stars.forEach((el,i)=>{

positions[i].angle+=0.0002;

const l=cx+rx*Math.cos(positions[i].angle)-25;
const t=cy+ry*Math.sin(positions[i].angle)-25;

gsap.to(el,{
x:l-positions[i].left,
y:t-positions[i].top,
duration:.3,
ease:"none"
});

});

requestAnimationFrame(rotateStars);
}

calculateFormation();
rotateStars();
window.addEventListener("resize",calculateFormation);

</script>
