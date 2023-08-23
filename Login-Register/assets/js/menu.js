const Moon = document.querySelector('.Moon');
    const Menu = document.querySelector('.menu-navegacion');
    //console.log(Menu)
    //console.log(Moon)
    
    Moon.addEventListener ('click' , ()=>{
        Menu.classList.toggle ("spread")
    })
    /*window.addEventListener ('click' , e=>{
        if(Menu.classList.contains("spread")
            && e.target != Menu && e.target != Moon ){
                Menu.classList.toggle ("spread")

            }
    })*/