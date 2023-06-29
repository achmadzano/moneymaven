const forms = document.querySelector(".forms"),
      pwShowHide = document.querySelectorAll(".eye-icon"),
      links = document.querySelectorAll(".link");

pwShowHide.forEach(eyeIcon => {
    eyeIcon.addEventListener("click", () => {
        let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");
        
        pwFields.forEach(password => {
            if(password.type === "password"){
                password.type = "text";
                eyeIcon.classList.replace("bx-hide", "bx-show");
                return;
            }
            password.type = "password";
            eyeIcon.classList.replace("bx-show", "bx-hide");
        })
        
    })
})      

links.forEach(link => {
    link.addEventListener("click", e => {
       e.preventDefault(); //preventing form submit
       forms.classList.toggle("show-signup");
    })
})

function handleSubmit(event) {
    event.preventDefault(); // Prevent form submission

    // Retrieve form input values
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    // Perform any necessary data validation or processing here

    // Redirect to the next page with query parameters
    var redirectURL = 'dashboard.html' + '?first=' + encodeURIComponent(firstName) + '&last=' + encodeURIComponent(lastName);
    window.location.href = redirectURL;
  }