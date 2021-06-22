class selfRating{
    constructor(){
        
        this.ratings()
    }

    ratings(){
        if(window.location.pathname === '/pages/writer/about'){
            const ratingBar1 = document.querySelector('#ratingBarOne');
            const ratingBar2 = document.querySelector('#ratingBarTwo');
            const ratingBar3 = document.querySelector('#ratingBarThree');
            const ratingBar4 = document.querySelector('#ratingBarFour');
            let ratingBar = document.querySelectorAll('.ratingBar')
            // console.log(ratingBar[0])
            ratingBar[0].style.width = ratingBar1.value;
            ratingBar[1].style.width = ratingBar2.value;
            ratingBar[2].style.width = ratingBar3.value;
            ratingBar[3].style.width = ratingBar4.value;
                }
        
    }



    // Methods
    
}
export default selfRating;



    // console.log(ratingBar1.value)
    // console.log(ratingBar2.value)
    // console.log(ratingBar3.value)
    // console.log(ratingBar4.value)


