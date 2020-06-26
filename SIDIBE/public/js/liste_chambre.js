$(document).ready(function(){
  let type;
  let coul;

    const getDonnee=()=>{

        let offset=0;

        $.ajax({

          method:"POST",
          url:`listeChambrePagination`,
          data:{nbr_elt_par_page:5,offset:offset},
          dataType:"JSON",
        }).done(data=>{
          $("#liste_chambre").html('');
            console.log(data);
           var u= ObjetUser(data);
           ajouteLigne(data);
           offset +=5;
        
      });

      $("#suivant").on('click',function(){

        $.ajax({
          method:"post",
          url:`listeChambrePagination`,
          data:{nbr_elt_par_page:5,offset:offset},
          dataType:'json'
        }).done(data=>{
          $("#liste_chambre").html('');
          console.log(data);
         var u= ObjetUser(data);
         ajouteLigne(data);
         offset +=5;
        
      });
        
      $("#precedent").on('click',function(){
          getDonnee();
        offset -=5;
      })
      })
    }

    const upDonneesBd = (data) =>{
    

      $.ajax({
          method:"POST",
          url: "updateChambre",
          data:data
      })
      .done(data =>{
        
        console.log(data);
  
        
          
      })
  }

    const ObjetUser=(datas)=>{

      let usrs=[];
      for(data of datas){
  
       const {id,numero,id_batiment ,id_type_chambre }=data;
      const user={
        id,
        numero,
        id_batiment,
        id_type_chambre ,
      };
      usrs=[...usrs,user];
      console.log("____________________");
      console.log(usrs);
      console.log("______________________");
      }
      return usrs;
    }
    $("#liste_chambre").on('click',"tr",function(){


      // var coul=$('body').css('background-color');
      $(this).css('background-color','rgba(32, 32, 39, 0.2');
      $("#liste_chambre tr").not(this).css("background",'none');
    
    })
    .on('dblclick',"td",function(){
      $(this).parents().css("background-color",'white');
      const id =$(this).attr("id");
      const tab = id.split("-");
      objEnCours=$(this);
      //console.log($(this).children().clone());
      type=tab[0];
      clone=type==="i"?$(this).children().clone():$(this).text();
     // alert(clone)
      if((type==='t') || (type ==='i')){
          const input=getInput(tab,clone);
          $(this).html(input);
          $(this).children().focus();
      }
     
  })
  .on("focusout","td",function(e){
  
    const {id,value} = e.target;
    const tab=id.split("-");
  
          if(type==='t') {
  
              $(this).html(value); 
              const newdata={'table':'chambre','champ':tab[0],id:tab[1],'val':value}
              alert(tab[0]+" "+tab[1]+" "+value);
              console.log("donnees"+newdata);
              upDonneesBd(newdata);
  
          }
        })
  .on('keyup','td',function(e){
    if(e.keyCode ==13){// Touche Entré
     $(this).html(e.target.value);
    }else if(e.keyCode ==27){// Touche Echap
     $(this).html(clone);
    }
  });
  
  $("#liste_chambre").on("click",".btn",function(){
    const tab = $(this).parents().attr("id").split("-");
    const id=tab[2];
    const type=tab[0];
    if(type =='s'){
        if(confirm("Voulez vous supprimer !!")){
            const data={
                "table":"chambre",
                "champ":"statut",
                "id":id,
                "val":0
            }
            $(this).parents("tr").hide()
           upDonneesBd(data);
        }
    }
  })

    const ajouteLigne=(data)=>{

      let line;
    
      for(v of data){
  
        line=`
              <tr id="tr_${v.id}">
              <td scope="row" id="t-numero-${v.id}">${v.numero}</td>
              <td id="t-id_batiment-${v.id}">${v.id_batiment}</td>
              <td id="t-id_type_chambre-${v.id}">${v.id_type_chambre}</td>
              <td id="s-supp-${v.id}"><button class="btn btn-danger"><span class="fa fa-archive"></span></button></td>
             
              
              
              </tr>
        `;
        $("#liste_chambre").append(line);
      }
  
    }
    function getInput(tab,txt){
      const tp={
          "t":"text",
          "i":"file"
      };
      type=tab[0];
      const v= type=="i"?' accept="image/png, image/jpeg"':` value="${txt}"`;
      const input = `<input type ="${tp[type]}" id="${tab[1]}-${tab[2]}" ${v} />`;
      return input;
  }
    getDonnee();
})