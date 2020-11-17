class search{

    constructor(){
        
        this.events()
    }

    events(){
        const thumbnail = document.querySelectorAll('.prevWorkThumbnails');
        const pdfThumbnail = document.querySelectorAll('.pdfThumbnails');
        const exitBtn = document.querySelector('#closeOverlayBtn');
        // console.dir(thumbnail)

            [...thumbnail].forEach((thumbnail)=>{
            thumbnail.addEventListener('click', (e)=>{
            const imgSrc = e.target.getAttribute('src');
            const imgContainer = document.querySelector('.overlayContent');
            const overlay = document.querySelector('.overlay');
            imgContainer.innerHTML = `<img src="${imgSrc}" class="img-fluid">`;

            overlay.classList.add('openOverlay');
            document.body.style.overflowY = 'hidden';
            });
            });
            
            // PDF Thumbnails
            [...pdfThumbnail].forEach((pdfThumbnail)=>{
            pdfThumbnail.addEventListener('click', (e)=>{
            const imgSrc = e.target.getAttribute('src');
            // console.log(imgSrc);
            const imgContainer = document.querySelector('.overlayContent');
            const overlay = document.querySelector('.overlay');
            imgContainer.innerHTML = `<embed src="${imgSrc}" class="container-fluid" height="630px">`;
            
            overlay.classList.add('openOverlay');
            document.body.style.overflowY = 'hidden';
            overlay.style.overflowY = 'hidden';
            });
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
            };
    }

export default search;