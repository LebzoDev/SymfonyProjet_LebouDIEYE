$(function(){
    console.log('eee')
    var erreur
    $('#creerEtudiant').click(function(e){
     console.log('dddd')
      var prenom = $('#prenom').val();
      var nom = $('#nom').val();
      var email = $('#email').val();
      var tel = $('#tel').val();
      var dateNaiss = $('#dateNaiss').val();
     
      var erreur;
      if (prenom==null  | prenom=='') {
        $('#error-1').html('*Ce champ est obligatoire...');
        erreur = true;
      }
      if (nom==null  | nom=='') {
        $('#error-2').html('*Ce champ est obligatoire...');
        erreur = true;
      }
      if (tel==null  | tel=='') {
        $('#error-3').html('*Ce champ est obligatoire...');
        erreur = true;
      }
      if (email==null  | email=='') {
        $('#error-4').html('*Ce champ est obligatoire...');
        erreur = true;
      }
      if (dateNaiss==null  | dateNaiss=='') {
        $('#error-5').html('*Ce champ est obligatoire...');
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