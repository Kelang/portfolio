   //Animation du bouton burger   
   $("#BurgerMenuWrapper").click(function(){

    $(".menu").toggleClass("BurgerMenuAnim");
    $(".navLink").toggleClass("navContentAnim");
    $('input.checkBurger').prop("checked", !$('input.checkBurger').prop("checked"));
    $('html').toggleClass("overflowDisable");
    $('.menuSocial i').toggleClass("navContentAnim");
    //Si le bouton checkbox est coché alors on change le width du side menu
    if ($('input.checkBurger').is(':checked')) {
        $(".MenuContainer").removeClass("MenuAnimSortie");
        $(".MenuContainer").addClass("MenuAnimEntrer");
        //console.log("COCHER");
    }

    //Si le bouton checkbox est décoché alors on change le width du side menu
    else if($('input.checkBurger'). prop("checked") == false){
        $(".MenuContainer").removeClass("MenuAnimEntrer");
    $(".MenuContainer").addClass("MenuAnimSortie");
   // console.log("DECOCHER");
    }


});



//Animation de la presentation des projets 

window.addEventListener("load", function (){

    let container = document.getElementsByClassName("projetsList");
    let projetEnfant = document.getElementsByClassName("projetItem");
   //console.log(projetEnfant);

    for(let i = 0; i <= projetEnfant.length; i++) {

        $("#projet"+i).hover(function(){
            $("#media"+i).toggleClass('imageAnim');
            $("#projetDescription"+i).toggleClass('montreDescription');
        });

    }


});

//Confirmation de suppression de projet
$(".deleteProjet").on("submit", function(){
    return confirm("Êtes-vous certain?");
  });

