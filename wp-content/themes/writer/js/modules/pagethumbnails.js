class search{

    constructor(){
        // console.log(window.location)
        // console.log(window.location.pathname.includes('/prevwork/'))
        this.events()
    }

    events(){
        if(document.querySelector('.prevWorkThumbnails') || document.querySelector('.pdfThumbnails')){
            // console.log('running pageThumbnails')
            const thumbnail = document.querySelectorAll('.prevWorkThumbnails');
            const pdfThumbnail = document.querySelectorAll('.pdfThumbnails');
            const exitBtn = document.querySelector('#closeOverlayBtn');
        // console.dir(thumbnail)

            // Image Thumbnails
            [...thumbnail].forEach((thumbnail)=>{
                thumbnail.addEventListener('click', (e)=>{
                    const imgSrc = e.target.getAttribute('src');
                    const imgContainer = document.querySelector('.overlayContent');
                    const overlay = document.querySelector('#thumbOverlay');
                    imgContainer.innerHTML = `<img src="${imgSrc}" class="img-fluid">`;

                    overlay.style.display = 'block';
                    overlay.style.overflow = 'scroll';
                    document.body.style.overflow = 'hidden';
                });
            });
            
            // PDF Thumbnails
            [...pdfThumbnail].forEach((pdfThumbnail)=>{
            pdfThumbnail.addEventListener('click', (e)=>{
                const imgSrc = e.target.getAttribute('src');
                // console.log(imgSrc);
                const imgContainer = document.querySelector('.overlayContent');
                const overlay = document.querySelector('#thumbOverlay');
                imgContainer.innerHTML = `<embed src="${imgSrc}" class="container-fluid" height="630px">`;
                
                overlay.style.display = 'block';
                overlay.style.overflow = 'hidden';
                document.body.style.overflow = 'hidden';
            });
            });


            // Exit OVerlay With X Button on Top Right
            exitBtn.addEventListener('click', ()=>{
                const overlayWhileOn = document.querySelector('#thumbOverlay');
                overlayWhileOn.style.display = "none"
                overlayWhileOn.style.overflow = "hidden"
                document.body.style.overflow = '';
            });
             

            // Exit Overlay wIth ESC Key 
            document.addEventListener('keyup', (e) => {
                if (e.key == "Escape") {
                    const overlayWhileOn = document.querySelector('#thumbOverlay');
                    overlayWhileOn.style.display = 'none'
                    overlayWhileOn.style.overflow = 'hidden'
                    document.body.style.overflowY = 'scroll';
                }
            })
        }
        
            };
    }

export default search;