class windowLoad{
    constructor(){
        this.load()
    }

    load(){

        if(window.location.pathname === '/'){
            document.querySelector('#beforeLoad').style.display = 'block';
        }



        window.addEventListener("load", ()=>{
            const heroText = document.querySelector('.fadeIn');
            heroText.style.transition = '1s ease-in';
            heroText.classList.remove('beforeLoad');
            if(window.location.pathname === '/'){
                console.log('got it')
                setTimeout(function(){
                document.querySelector('#beforeLoad').style.animation = 'opacityChangeAndDisplayNone 1s ease-out';
                setTimeout(function(){
                    document.querySelector('#beforeLoad').style.display = 'none';
                }, 1000)
            }, 1000)
            }
            
            
        })        
    }


}
export default windowLoad;
