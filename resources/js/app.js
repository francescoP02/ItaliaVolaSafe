require('./bootstrap');

// $(".jumbotron").css({
//   height: $(window).height() + "px"
// });
// $(window).on("resize", function () {
//   $(".jumbotron").css({
//     height: $(window).height() + "px"
//   });
// });

// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
  
        form.classList.add('was-validated')
      }, false)
    })
  })()


  // $('.carousel').carousel({
  //   interval: 2000
  // })

// import axios from "axios";

// const options = {
//   method: 'GET',
//   url: 'https://airport-info.p.rapidapi.com/airport',
//   headers: {
//     'X-RapidAPI-Key': 'SIGN-UP-FOR-KEY',
//     'X-RapidAPI-Host': 'airport-info.p.rapidapi.com'
//   }
// };

// axios.request(options).then(function (response) {
// 	console.log(response.data);
// }).catch(function (error) {
// 	console.error(error);
// });
