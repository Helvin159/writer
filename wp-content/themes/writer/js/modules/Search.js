class search{

    constructor(){
        
        this.events()
    }

    events(){
        const searchBtn = document.querySelector('.searchIcon');
        const exitBtn = document.querySelector('#closeOverlayBtn');
        
            searchBtn.addEventListener('click', ()=>{
            const overlay = document.querySelector('.overlay');
            overlay.classList.add('openOverlay');
            document.body.style.overflowY = 'hidden';
            });
                    
            exitBtn.addEventListener('click', ()=>{
            const overlayWhileOn = document.querySelector('.overlay');
            overlayWhileOn.classList.remove('openOverlay')
            document.body.style.overflowY = 'scroll';
            });
             
            document.addEventListener('keyup', (e) => {
                if (e.key == "Escape") {
                    const overlayWhileOn = document.querySelector('.overlay');
                    overlayWhileOn.classList.remove('openOverlay')
                    document.body.style.overflowY = 'scroll';
                }
            })
            


    }

}
export default search;