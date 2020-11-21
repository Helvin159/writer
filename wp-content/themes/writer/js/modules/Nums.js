class workNums{
    constructor(){
        this.events()
    }

    events(){

        if(window.location.pathname === '/' || window.location.pathname === '/pages/writer/'){
            let hasRun = false;
            window.addEventListener('scroll', ()=>{
                let windowPos = window.scrollY;
                // console.log(windowPos)
                if(windowPos >= 1250 && hasRun != true){
                    this.consultations();
                    this.editorial();
                    this.webCont();
                    this.copyright();
                    return hasRun = true;
                }
            });
        }  
        
        if(window.location.pathname === '/about/' || window.location.pathname === '/pages/writer/about/'){
            let isOpen = false;
            window.addEventListener('scroll', ()=>{
                let windowPos = window.scrollY;

                console.log(windowPos)
                if(windowPos >= 1300 && isOpen != true){
                    this.expandAboutSkills();
                    return isOpen = true;
                }
            });
        }   
    }

    // Methods
    editorial(){
        const interval = setInterval(()=>{
            const editorialNum = document.querySelector('#editorialNum');
            const editNum = document.querySelector('#editNum');
            const target = editNum.value;
            console.log(target)
            let num = editorialNum.innerText;
            // console.log(num)
            if(num >= parseInt(target) -1){ clearInterval(interval) }
                editorialNum.innerText++
        }, 20)
    }

    consultations(){
        const interval = setInterval(()=>{
            const consultationsNum = document.querySelector('#consultationsNum');
            const consultNum = document.querySelector('#consultNum');
            const target = consultNum.value;
            let num = consultationsNum.innerText;
            // console.log(num)
            if(num >= parseInt(target) -1){ 
                clearInterval(interval) 
            }
                consultationsNum.innerText++
        }, 20)
    }

    webCont(){
        const interval = setInterval(()=>{
            const webContent = document.querySelector('#webContent');
            const webContentNum = document.querySelector('#webContNum');
            const target = webContentNum.value;
            let num = webContent.innerText;
            // console.log(num)
            if(num >= parseInt(target) -1){ clearInterval(interval) }
                webContent.innerText++
        }, 20)
    }

    copyright(){
        const interval = setInterval(()=>{
            const copyrightProjects = document.querySelector('#copyrightProjects');
            const copyrightNum = document.querySelector('#copyrightnum');
            const target = copyrightNum.value;
            let num = copyrightProjects.innerText;
            // console.log(num)
            if(num >= parseInt(target) -1){ clearInterval(interval) }
            copyrightProjects.innerText++
        }, 20)
        
    }

    expandAboutSkills(){
        const bars = document.querySelectorAll('.ratingBar');
        bars[0].style.animation = 'gradient 2.5s ease-in';
        bars[0].style.transformOrigin = 'left';
        bars[0].style.opacity = '1';

        bars[1].style.animation = 'gradient 2.5s ease-in';
        bars[1].style.transformOrigin = 'left';
        bars[1].style.opacity = '1';

        bars[2].style.animation = 'gradient 2.5s ease-in';
        bars[2].style.transformOrigin = 'left';
        bars[2].style.opacity = '1';

        bars[3].style.animation = 'gradient 2.5s ease-in';
        bars[3].style.transformOrigin = 'left';
        bars[3].style.opacity = '1';
    }


}
export default workNums;
