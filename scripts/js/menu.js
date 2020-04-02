function townListToMenu(countryName) {
  $.ajax({
  type: "POST",
  url: appAbsolutePath+"ville/getVilleOfAPays/"+countryName,
  data:'',
  success: function(data){
  	$("#menu-ville").empty();
    $("#menu-ville").append("<option>Sélectionnez la ville</option>").
    			append(data);
  }
  });
}
