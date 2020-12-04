
// Create new message
class newMessage {
  constructor() {
    this.events();
  }
 
  events() {

      const form = document.querySelector("#universalForm")
      
      // console.log(form)



    form.addEventListener('submit', this.messageDispatcher)
  }

  // methods
  messageDispatcher(e) {
      
    // Prevent Default Form Behaviour
      e.preventDefault();

      // Variables
      const fName = document.querySelector('[name="fName"]')
      const email = document.querySelector('[name="email"]')
      const date = document.querySelector('[name="date"]')
      const time = document.querySelector('[name="time"]')
      const message = document.querySelector('[name="messageOrComment"]')
      const submitBtn = document.querySelector('[name="submit]');
      
      // Prevent submit on empty form
      if(fName.value != '' && email.value != '' && message.value != '' && date.value != '' ){
          const newMessage = {
              message: {
              title: fName.value,
              date: date.value,
              email: email.value,
              time: time.value,
              message: message.value,
              status: "private",
            }
          };

          console.log(newMessage)

        }else{
          alert("Please fill all required fields")
        }

    
        
    // console.log(document.querySelector('[name="firstName"]').value);

    // $.ajax({
    //   beforeSend: (xhr) => {
    //     xhr.setRequestHeader("X-WP-Nonce", writerData.nonce);
    //   },
    //   url: writerData.root_url + "/wp-json/drymer/v1/new-message",
    //   type: "POST",
    //   data: newMessage,
    //   dataType: "json",
    //   success: (response) => {
    //     console.log(response);
    //     console.log("good");
    //     setTimeout(function () {
    //     //   $("#contactForm").addClass("d-none");
    //     //   $("#thankYou").removeClass("d-none");
    //     }, 850);
    //   },
    //   error: (response) => {
    //     console.log("sorry");
    //     console.log(response);
    //     setTimeout(function () {
    //     //   $("#contactForm").addClass("d-none");
    //     //   $("#thankYou").removeClass("d-none");
    //     }, 850);
    //   },
    // });
  }
}

export default newMessage;
