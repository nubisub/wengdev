window.onload=function(){for(var e=document.getElementsByClassName("detaillangkah"),n=0;n<e.length;n++){var a=e[n].innerHTML.match(/\d+/g);if(null!=a)for(var r=0;r<a.length;r++){var t=document.createElement("b");t.innerHTML=a[r],e[n].innerHTML=e[n].innerHTML.replace(a[r],t.outerHTML)}}};