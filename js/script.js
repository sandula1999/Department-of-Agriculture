let navbar = document.querySelector('.header .nav');
let header = document.querySelector('.header');


window.onscroll = () =>{
   navbar.classList.remove('active');

  if(window.scrollY > 0){
     header.classList.add('active');
  }else{
     header.classList.remove('active');
  }

}

var swiper = new Swiper(".event-slider",{
   loop:true,
   grabCursor:true,
   spaceBetween:20,
   navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
  },
   breakpoints: {
      0: {
         slidesPerview: 1,
      },
      
     
   },
});

const rmBtn = document.querySelectorAll('.rm-btn');
const rmContent = document.querySelectorAll('.rm-content');
const closeBtn = document.querySelectorAll('.close-btn');
const itemImg = document.querySelectorAll('.item-img');
const rmImg = document.querySelectorAll('.rm-image');
const itemTitle = document.querySelectorAll('.title');
const rmTitle = document.querySelectorAll('.rm-title');

for (let i = 0; i < rmBtn.length; i++) {
   rmBtn[i].addEventListener('click', (e) =>{
      rmContent[i].classList.add('open');
      rmImg[i].src = itemImg[i].src;
      rmTitle[i].innerHTML = itemTitle[i].textContent; 


   })
   closeBtn[i].addEventListener('click', ()=>{
      rmContent[i].classList.remove('open');

   })
}

const search =() =>{
   const searchbox = document.getElementById("search-item").value.toUpperCase();
   const storeitems = document.getElementById("services")
   const service = document.querySelectorAll(".item")
   const sname = storeitems.getElementsByTagName("h2")
   const ssname = storeitems.getElementsByTagName("p")




   for (var i=0; i < sname.length; i++){
      let match = service[i].getElementsByTagName('h2')[0];

      if(match){
         let textvalue = match.textContent || match.innerHTML

         if(textvalue.toUpperCase().indexOf(searchbox) > -1){
            service[i].style.display="";
      }else{
         service[i].style.display="none";
      }
   }

  for (var i=0; i < ssname.length; i++){
      let match = service[i].getElementsByTagName('p')[0];

      if(match){
         let textvalue = match.textContent || match.innerHTML

         if(textvalue.toUpperCase().indexOf(searchbox) > -1){
            service[i].style.display="";
      }else{
         service[i].style.display="none";
      }
   }

   }
}
}