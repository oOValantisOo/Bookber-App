document.addEventListener("DOMContentLoaded",function(){const t=document.getElementById("js-preloader"),e=2e3;t.style.animation=`fadeOut ${e/1e3}s ease`,setTimeout(()=>{t.classList.add("loaded")},e)});setTimeout(()=>{const t=document.getElementById("notification");t&&(t.style.transition="opacity 0.5s ease",t.style.opacity="0",setTimeout(()=>t.remove(),500))},3e3);
