const iconEye=document.querySelector(".icon-eye");
console.log(iconEye);

iconEye.addEventListener("click", function (){
   const icon= this.querySelector("i");
if (this.previousElementSibling.type === "password"){
    this.previousElementSibling.type = "text";
    icon.classList.remove("fa-eye-slash");
    icon.classList.add("fa-eye");
}else{
    this.previousElementSibling.type ="password";
    icon.classList.remove("fa-eye");
    icon.classList.add("fa-eye-slash");
    
}
});
