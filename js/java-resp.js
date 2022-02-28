burger=document.querySelector('.burger')
navbar=document.querySelector('.navbar')
rightNav = document.querySelector('.right-nav')
navList = document.querySelector('.nav-list')


burger.addEventListener('click',()=>{
    rightNav.classList.toggle('v-class-resp')
    navList.classList.toggle('v-class-resp')
   navbar.classList.toggle('h-nav-resp')
})