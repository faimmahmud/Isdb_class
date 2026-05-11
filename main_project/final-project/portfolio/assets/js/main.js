$(function(){
$('a[href^="#"]').on('click',function(e){const t=$($(this).attr('href'));if(t.length){e.preventDefault();$('html,body').animate({scrollTop:t.offset().top-82},650);$('.navbar-collapse').collapse('hide');}});
const o=new IntersectionObserver(es=>es.forEach(e=>{if(e.isIntersecting)e.target.classList.add('is-visible')}),{threshold:.12});
document.querySelectorAll('.reveal').forEach(el=>o.observe(el));
});