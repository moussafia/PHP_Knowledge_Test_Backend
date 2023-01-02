let play=document.querySelector("main .btn");
let main=document.querySelector("main");
let footer=document.querySelector("footer");
footer.style.display='none';
play.onclick= (e)=>{console.log(e)
    main.style.display='none';
    footer.style.display='block';
}