document.addEventListener('DOMContentLoaded', ()=>{
     
    let target = document.querySelector('h1')
    let userData = localStorage.getItem("User")
    target.innerText+=` ${userData}`
    let SignInBtn = document.getElementById('connexion')

    SignInBtn.addEventListener("click", (e)=>{
        e.preventDefault()
        User.userDataControll();
        localStorage.clear();
    })
  
    //create virtual element warning 
    let element = document.getElementById('warning');

    const User = ({
      email: document.getElementsByTagName("input")[0],
      password: document.getElementsByTagName("input")[1],

          userDataControll(){
            if(!this.email.value || !this.password.value){
              element.innerText="Veuillez entrer votre e-mail et votre mot de passe !"
              element.classList.add("warning");
              element.style.marginLeft = "10rem";
              element.style.textAlign = "center";
            }
            else{
              document.location.assign("index.php");
              localStorage.setItem('User', this.mail.value);
              sessionStorage.setItem('key', 'user');
            }
          }
    })	  
})