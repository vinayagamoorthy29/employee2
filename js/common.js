$(document).ready(function(){
    $(".delalert").hide();
   $('#example').DataTable( {
        "order": [[ 1, "desc" ]]
    });
  $("#phone").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
   $(".edelete").on('click',function(e)
  {	
	 $(".mdelemp").val($(this).attr('id'));
    $('#deleteModal').modal('show');
   

    

    
});
$(".edelbtn").on('click',function(e){
	var employeeid= $(".mdelemp").val();
	
	$.ajax({
        type: "POST",
        url: "employeecontrol/delete_employee",
       data: {employeeid: employeeid}, // <--- THIS IS THE CHANGE
       // dataType: "html",
        success: function(data){
            $(".delalert").show();
			$('#deleteModal').modal('hide');
			$(".mdelemp").val('');
			location.reload();
        },
        error: function() { alert("Error posting feed."); }
   });
});
 });

