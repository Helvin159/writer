class workNums{
    constructor(){
        this.events()
    }

    events(){

        if(window.location.pathname === '/'){
            let hasRun = false;
            window.addEventListener('scroll', ()=>{
                let windowPos = window.scrollY;
                // console.log(windowPos)
                if(windowPos >= 1050 && hasRun != true){
                    this.consultations();
                    this.editorial();
                    this.webCont();
                    this.copyright();
                    return hasRun = true;
                }
            });
        }   
    }

    // Methods
    editorial(){
        const interval = setInterval(()=>{
            const target = 99;
            const editorialNum = document.querySelector('#editorialNum');
            let num = editorialNum.innerText;
            // console.log(num)
            if(num >= target){ clearInterval(interval) }
                editorialNum.innerText++
        }, 40)
    }

    consultations(){
        const interval = setInterval(()=>{
            const target = 149;
            const consultationsNum = document.querySelector('#consultationsNum');
            let num = consultationsNum.innerText;
            // console.log(num)
            if(num >= target){ 
                clearInterval(interval) 
            }
                consultationsNum.innerText++
        }, 30)
    }

    webCont(){
        const interval = setInterval(()=>{
            const target = 44;
            const webContent = document.querySelector('#webContent');
            let num = webContent.innerText;
            // console.log(num)
            if(num >= target){ clearInterval(interval) }
                webContent.innerText++
        }, 50)
    }

    copyright(){
        const interval = setInterval(()=>{
            const target = 119;
            const copyrightProjects = document.querySelector('#copyrightProjects');
            let num = copyrightProjects.innerText;
            // console.log(num)
            if(num >= target){ clearInterval(interval) }
            copyrightProjects.innerText++
        }, 30)
    }


}
export default workNums;
