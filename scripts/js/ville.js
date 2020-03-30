
function refreshTownList(countryName) {
  $.ajax({
  type: "POST",
  url: appAbsolutePath+"ville/getVilleOfAPays/"+countryName,
  data:'',
  success: function(data){
  	$("#nouvelleVille").css("display", "none");
  	$("#ville").empty();
    $("#ville").append("<option>Sélectionnez la ville</option>").
    			append(data).
    			append("<option>Ajouter votre ville</option>");
  }
  });
}

//Thanks GlennG from stackoverflow
//Pure javascript
function showHideEle(selectSrc, targetEleId, triggerValue) {	
	if(selectSrc.value==triggerValue) {
		document.getElementById(targetEleId).style.display = "inline-block";
	} else {
		document.getElementById(targetEleId).style.display = "none";
	}
}

