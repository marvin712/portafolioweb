const btn = document.querySelector(".btn_menu")
const nav = document.querySelector(".navegacion")

btn.addEventListener("click",()=>{
    nav.classList.toggle("activo")
})