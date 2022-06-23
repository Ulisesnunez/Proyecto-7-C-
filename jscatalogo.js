const datos_car=[
    {
      img:"LJf-7p3B_400x400-300x300.png",
      title:"Stormtrooper (Star Wars)",
      fecha:" Fecha Salidad:01/3/2021",
      price_before:"S/35.00",
      price_now:"S/35.00",
    },
    {
      img:"https://pngimg.com/uploads/ironman/ironman_PNG49.png",
      title:"Stormtrooper (Star Wars)",
      fecha:" Fecha Salidad:01/3/2021",
      price_before:"S/35.00",
      price_now:"S/35.00",
    },
    {
      img:"https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/c566b360-dcc0-4f8d-8154-05e8123d0d36/d8aj70d-50bc3b4b-0433-412d-9a7b-bf9bee94cd20.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3sicGF0aCI6IlwvZlwvYzU2NmIzNjAtZGNjMC00ZjhkLTgxNTQtMDVlODEyM2QwZDM2XC9kOGFqNzBkLTUwYmMzYjRiLTA0MzMtNDEyZC05YTdiLWJmOWJlZTk0Y2QyMC5wbmcifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ.e0ROxoVOx-I1gA_hpaHGbQD1n3tmw0e97Q7SX3oVZyI",
      title:"Stormtrooper (Star Wars)",
      fecha:" Fecha Salidad:01/3/2021",
      price_before:"S/35.00",
      price_now:"S/35.00",
    },
    
  ]
  
  const cont_parent = document.getElementById("cont_parent");
  
  for(let index of datos_car){
    cont_parent.innerHTML+=`
     <div class="conte ">
           <div class="card stromtroper">
               <img src=${index.img} alt="">
           </div>
           <div class="informacion">
               <h1>${index.title}</h1>
              <p class="fecha">
                  ${index.fecha}
              </p>
           </div>
           <div class="precio">
               <div class="box-precio">
                   <span class="precio1"><strike>${index.price_before}</strike> </span>
               <span class="precio2"><b>${index.price_now}</b></span>
               </div>
               <span class="shoping"><i class="fas fa-cart-plus"></i></span>
           </div>
       </div>
    `
  }