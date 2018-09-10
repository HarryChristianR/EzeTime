(function(global){

	global.obj = {};
	obj.changeContent = function(){
		var announcement = document.getElementById("announcement").value;
		var description = document.getElementById("description").value;
		var fontsize = document.getElementById("fontsize").value;
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		      location.reload();
		      
		    }
		  };
		xhttp.open("GET", "addme.php?announcement="+announcement+"&description="+description+"&fontsize="+fontsize);
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
	obj.editAnnouncement = function(id){
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
		var announcement = document.getElementById("editAnnouncement").value;
		var description = document.getElementById("editDescription").value;
		var fontsize = document.getElementById("editFontsize").value;
		var announcementID = document.getElementById("editID").value;
		xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		      location.reload();
		      
		    }
		  };
		xhttp.open("GET", "update.php?announcementID="+announcementID+"&announcement="+announcement+"&description="+description+"&fontsize="+fontsize);
		xhttp.send();
	}
	



	
	

}(window))