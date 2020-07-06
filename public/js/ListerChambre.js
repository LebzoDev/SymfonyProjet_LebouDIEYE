
    var rowperpage = 5;
    $(function()
    {

       
       // getData();

       /* $("#but_prev").click(function()
        {
            console.log('precedent')
            var rowid = Number($("#txt_rowid").val());
            rowid -= rowperpage;
            if(rowid < 0)
            {
                rowid = 0;
            }
            $("#txt_rowid").val(rowid);
            getData();
        });

        count();

        $("#but_next").click(function()
        {
            console.log('suivant')
            var rowid = Number($("#txt_rowid").val());    
            var allcount = Number($("#txt_allcount").val());
            rowid += rowperpage;
            if(rowid <= allcount)
            {
                $("#txt_rowid").val(rowid);
                getData();
            }
            else
            {
              rowid -= rowperpage;
            }

        });

        */
      
 })

function count()
{
    var count=true;
    $.ajax({
            url:'ajax.html.twig',
            type:'post',
            data:{count:count},
            datatype : 'text',
            success : function(data)
            {
                var allcount = data;
                $("#txt_allcount").attr('value',allcount)
            }
        })
}

function delete1(id)
{
    console.log('ffff')
  var identifiant = id;
  $.ajax({
          url:'ajax.html.twig',
          type:'post',
          data:{identifiant:identifiant},
          datatype : 'text',
          success : function(data){
           console.log(data)
           $('#tab').html();
           getData();
          }

 })
}

 function getData()
 {
    var rowid = $("#txt_rowid").val();
    var allcount = $("#txt_allcount").val();
    $.ajax({
        url:'ajax.html.twig',
        type:'post',
        data:{rowid:rowid,rowperpage:rowperpage},
        datatype : 'json',
        success : function(data)
        {
            $('#tab').html('');
            console.log(data)
            /*msg = JSON.parse(data);
            msg.forEach(function(items)
            {
                var numero = items['numero'];
                var numeroBatiment = items['numeroBatiment'];
                var type = items['type'];
                $('#tab').append(`<div class="row mb-1 col-10 float-left" style="font-size:1.2vw">
                    <div contentEditable="true" class="col border">${numero}</div>
                    <div class="col border">${numeroBatiment}</div>
                    <div class="col border">${type}</div>
                    </div>
                    <button type="button" id="${numero}" onclick="delete1('${numero}')" class="bg-danger col-2 float-right p-0 supprimer" style="font-size:1.2vw">Supprimer</button>`)
            });*/
        }
    })
}