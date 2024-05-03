document.querySelector('a[href^="#]').forEach(anchor=>{
    anchor.addEventListener('click',function(e){
        e.preventDefault();
        const targetId=this.getAttributew('href').substring(1);
        const targetElement=document.getElementById(targetId);
        if(targetElement){
            window.scrollTo({
                behavior:"smooth",
                top:targetElement.offsetTop
            });
        }
    });
});