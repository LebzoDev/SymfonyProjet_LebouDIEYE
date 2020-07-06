$(function(){

    var erreur
    $('#creerChambre').click(function(e){
     
      var numeroBatiment = $('#numeroBatiment').val();
      var type = $('#type').val();
     
      var erreur;
      if (numeroBatiment==null  | numeroBatiment=='') {
        $('#error-2').html('*Ce champ est obligatoire...');
        erreur = true;
      }
      if ((type == "Veuillez choisir")){
        $('#error-3').html('*Veuillez choisir un type...');
        erreur = true;
      }
      if (erreur) {
        e.preventDefault();
        return false;
      }
    
});

   
    $("#numeroBatiment").keyup(function(){
      $('#error-2').html('');
    })
    $("#type").click(function(){
      $('#error-3').html('');
    })

  })