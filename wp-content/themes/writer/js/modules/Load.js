class windowLoad{
    constructor(){
        this.load()
    }

    load(){
        window.addEventListener("load", ()=>{
            const heroText = document.querySelector('.fadeIn');
            heroText.style.transition = '1s ease-in';
            heroText.classList.remove('beforeLoad');
        })
    }


}
export default windowLoad;
