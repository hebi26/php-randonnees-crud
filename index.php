
<?php

include('header.php');

?>

<section class="main">

</section>
<script>

function traitement(){

	$.ajax({
		 url : './SQL/list.php',
		 type : 'get',
		success: function(data){

			$(".main").html('<h3>Liste des randonnées</h3>' + data);

	// -----------------SUPPRESSION---------------------

			$(".delete").click(function(){
				var idrando = $(this).attr("id");

				$.post('./SQL/delete.php', {id:idrando}, function(response){
					traitement();
				});
			});

		// --------------------UPDATE---------------------------------

			$(".update").click(function(){

				var idrando = $(this).attr("id");
						$.get("./form/updateform.php", {id:idrando}, function(response){
							$(".main").html(response);

						});
			});

		},
		error : function() {
			$('.main').html('<h3>ERROR !!!!!!!!!!!!!!!!!!!!!</h3>');
		}
	});
}

// -------------------affichage du formulaire----------------------------

	$("#create").click(function(){

		$(".main").load('../form/createform.php');

});
// ------------------appel requete sql ecriture---------------------------


$('#my_form').on('submit', function (e) {
  // On empêche le navigateur de soumettre le formulaire
        e.preventDefault();

        var $form = $(this).serialize();

        $.ajax({
            url: $form.attr('action'),
            type: $form.attr('method'),
            data: form,
        });
    });

// ----------------------appel requete sql affichage-----------------------

$("#list").click(function(){

traitement();

});

</script>

</body>
</html>
