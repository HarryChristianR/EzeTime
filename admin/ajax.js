(function(global){

	global.obj = {};
	obj.changeContent = function(){
		var barcode = document.getElementById("barcode").value;
		var empfullname = document.getElementById("empfullname").value;
		var displayname = document.getElementById("displayname").value;
		var email = document.getElementById("email").value;
		var groups = document.getElementById("groups").value;
		var office = document.getElementById("office").value;

		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		      window.location.reload();
		      
		    }
		  };
		xhttp.open("GET", "addme.php?barcode="+barcode+"&empfullname="+empfullname+"&displayname="+displayname+"&email="+email+"&groups="+groups+"&office="+office);
		xhttp.send();

	}
	obj.delete  = function(deleteme){
		
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		      location.reload();
		      
		    }
		  };
		xhttp.open("GET", "delete.php?delete="+deleteme);

		xhttp.send();
	}
	obj.fetch = function(){
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		      document.getElementById("taskList").innerHTML =
		      this.responseText;
		    }
		  };
		xhttp.open("GET", "fetch.php");
		xhttp.send();
	}
	obj.editEmployee = function(id){
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		      document.getElementById("edithere").innerHTML =
		      this.responseText;
		      
		    }
		  };
		xhttp.open("GET", "edit.php?fetchme="+id);
		xhttp.send();
		
	}
	obj.update = function(){
		var xhttp = new XMLHttpRequest();
		var barcode = document.getElementById("editbarcode").value;
		var empfullname = document.getElementById("editempfullname").value;
		var displayname = document.getElementById("editdisplayname").value;
		var email = document.getElementById("editemail").value;
		var groups = document.getElementById("editgroups").value;
		var office = document.getElementById("editoffice").value;
		xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		      window.location.reload();
		      
		    }
		  };
		xhttp.open("GET", "update.php?barcode="+barcode+"&empfullname="+empfullname+"&displayname="+displayname+"&email="+email+"&groups="+groups+"&office="+office);
		xhttp.send();
	}
	



	
	

}(window))