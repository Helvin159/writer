import axios from "axios";

// Create new message
class newMessage {
  constructor() {
    axios.defaults.headers.common["X-WP-Nonce"] = writerData.nonce;
    this.events();
  }
 
  events() {

      const form = document.querySelector("#universalForm")
      // console.log(form)

      form.addEventListener('submit', this.messageDispatcher)
  }

  // methods
  async messageDispatcher(e) {
      
      // Prevent Default Form Behaviour
      e.preventDefault();

      // Variables
      const fName = document.querySelector('[name="fName"]')
      const email = document.querySelector('[name="email"]')
      const date = document.querySelector('[name="date"]')
      const time = document.querySelector('[name="time"]')
      const message = document.querySelector('[name="messageOrComment"]')
      const submitBtn = document.querySelector('[name="submit]');
      const plug =  axios.defaults.headers.common["X-WP-Nonce"] = writerData.nonce;

      
      // Prevent submit on empty form
      if(fName.value != '' && email.value != '' && message.value != '' && date.value != null  ){
          var newMessage = {
              // message: {
              title: fName.value,
              date: date.value,
              email: email.value,
              time: time.value,
              comment: message.value,
              status: "private",
            // }
          }

          // console.log(newMessage);
            
          try{
              
            const response = await axios.post(writerData.root_url + '/wp-json/drymer/v1/new-message', newMessage)
            console.log('response:', response)
            if(response.status === 200){
              setTimeout(()=>{
                  document.querySelector('.formContainer').classList.add('d-none')
                  document.querySelector('.thankyouMessage').classList.remove('d-none')
              }, 300)
            }

          }

          catch(e){
            console.log('didnt work')
            // console.log(e)
          }

      }
      else if(fName.value === '' || email.value === '' || date.value === '' || message.value === ''){
          
        setTimeout(function(){
          if(fName.value === ''){
            document.querySelector('#noNameMsg').classList.remove('d-none')
            document.querySelector('#noNameMsg').style.animation = 'opacityChange 0.4s ease-in ';
            fName.addEventListener('keydown', function(){
              setTimeout(function(){
                if(fName.value != ''){
                  document.querySelector('#noNameMsg').classList.add('d-none')
              }
              }, 1)
            })
          }
        },5)
        setTimeout(function(){
          if(email.value === ''){
            document.querySelector('#noEmailMsg').classList.remove('d-none')
            document.querySelector('#noEmailMsg').style.animation = 'opacityChange 0.4s ease-in ';
            email.addEventListener('keydown', function(){
              setTimeout(function(){
                if(email.value != ''){
                  document.querySelector('#noEmailMsg').classList.add('d-none')
              }
              }, 1)
            })
          }
        },5)
        setTimeout(function(){
          if(date.value === ''){
            document.querySelector('#noDateMsg').classList.remove('d-none')
            document.querySelector('#noDateMsg').style.animation = 'opacityChange 0.4s ease-in ';
            date.addEventListener('keydown', function(){
              setTimeout(function(){
                if(date.value != ''){
                  document.querySelector('#noDateMsg').classList.add('d-none')
              }
              }, 1)
            })
          }
        },5)
        setTimeout(function(){
          if(message.value === ''){
            document.querySelector('#noMessageMsg').classList.remove('d-none')
            document.querySelector('#noMessageMsg').style.animation = 'opacityChange 0.4s ease-in ';
            date.addEventListener('keydown', function(){
              setTimeout(function(){
                if(message.value != ''){
                  document.querySelector('#noMessageMsg').classList.add('d-none')
              }
              }, 1)
            })
          }
        },5)
      }
    }
}

export default newMessage;
