class scrollEvents{
    constructor(){
        this.events()
    }

    events(){

        if(window.location.pathname === '/'){
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

        if(window.location.pathname === '/'){
            let isAnimated = false;
            window.addEventListener('scroll', ()=>{
                let windowPos = window.scrollY;

                if(windowPos >= 2046 && isAnimated != true){
                    // console.log(windowPos)
                    this.animateLaptopSvg();
                    return isAnimated = true;
                }
            });
        }

        if(window.location.pathname === '/'){
            let animated = false;
            window.addEventListener('scroll', ()=>{
                let windowPos = window.scrollY;
                    // console.log(windowPos)
                if(windowPos >= 3232 && animated != true){
                    // console.log(windowPos)
                    this.animateBlackboard();
                    return animated = true;
                }
            });
        }
        
        if(window.location.pathname === '/about/'){
            let isOpen = false;
            window.addEventListener('scroll', ()=>{
                let windowPos = window.scrollY;

                // console.log(windowPos)
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
            // console.log(target)
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
        bars[0].style.animation = 'gradient 1.8s ease-in-out';
        bars[0].style.transformOrigin = 'left';
        bars[0].style.opacity = '1';

        bars[1].style.animation = 'gradient 1.8s ease-in-out';
        bars[1].style.transformOrigin = 'left';
        bars[1].style.opacity = '1';

        bars[2].style.animation = 'gradient 1.8s ease-in-out';
        bars[2].style.transformOrigin = 'left';
        bars[2].style.opacity = '1';

        bars[3].style.animation = 'gradient 1.8s ease-in-out';
        bars[3].style.transformOrigin = 'left';
        bars[3].style.opacity = '1';
    }

    animateLaptopSvg(){
        const laptopSvg = document.querySelector('#card');
        laptopSvg.style.animation = 'cardLaptop 2s ease-in-out';
        laptopSvg.style.transformOrigin = 'center';

        setTimeout(()=>{
            laptopSvg.style.transform = 'translateY(0px) translateX(20px) rotateZ(2.5deg)'; 
        }, 1999)
    }

    animateBlackboard(){
        const barOne = document.querySelector('#blackboardGraphBar1');
        const barTwo = document.querySelector('#blackboardGraphBar2');
        const barThree = document.querySelector('#blackboardGraphBar3');
        const barFour = document.querySelector('#blackboardGraphBar4');
        // Animations
        barOne.style.animation = 'barHeight 2s ease-in-out alternate';
        barTwo.style.animation = 'barHeight 2s ease-in-out';
        barThree.style.animation = 'barHeight 2s ease-in-out';
        barFour.style.animation = 'barHeight 2s ease-in-out';
        // Transform Origin
        barOne.style.transformOrigin = 'bottom';
        barTwo.style.transformOrigin = 'bottom';
        barThree.style.transformOrigin = 'bottom';
        barFour.style.transformOrigin = 'bottom';
        // transform Box
        barOne.style.transformBox = 'fill-box';
        barTwo.style.transformBox = 'fill-box';
        barThree.style.transformBox = 'fill-box';
        barFour.style.transformBox = 'fill-box';
        // Transform ScaleY to 1
        setTimeout(()=>{
            barOne.style.transform = 'scaleY(1)';
        barTwo.style.transform = 'scaleY(1)';
        barThree.style.transform = 'scaleY(1)';
        barFour.style.transform = 'scaleY(1)';
        }, 1999)
    }

}
export default scrollEvents;
