//AJAX FOR LOGIN AND LOGOUT
(function(global){
	global.obj = {};
	obj.check = function(){
		if(document.getElementById('barcode').value.length==document.getElementById('barcode').getAttribute("maxlength")){
			obj.fetch();
		}
	}

	$(document).ready(function() {
		$("#barcode").keydown(function (e) {
			// Allow: backspace, delete, tab, escape, enter and .
			if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
				 // Allow: Ctrl/cmd+A
				(e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
				 // Allow: Ctrl/cmd+C
				(e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
				 // Allow: Ctrl/cmd+X
				(e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
				 // Allow: home, end, left, right
				(e.keyCode >= 35 && e.keyCode <= 39)) {
					 // let it happen, don't do anything
					 return;
			}
			// Ensure that it is a number and stop the keypress
			if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
				e.preventDefault();
			}
		});
	});

	
	obj.clearlogout = function(){
		var xhttp = new XMLHttpRequest();
		xhttp.open("GET", "clearlogs.php");
		xhttp.send();
	}
	obj.fetch = function(){
		var xhttp = new XMLHttpRequest();
		var employee_id = document.getElementById('barcode').value;
		document.getElementById("success-message").innerHTML="";
		xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		    	// console.log("result:" + this.responseText);
		      document.getElementById("result").innerHTML = this.responseText;
		      document.getElementById("nota").style.display = "block";
		    }
		  };
		xhttp.open("GET", "fetch.php?employee_id="+employee_id);
		xhttp.send();
		// console.log("MODIFIED")
		//d
		
		setTimeout(obj.log, 200);
	}
	obj.clear = function(){
		document.getElementById('barcode').value = '';
	}
	obj.notfound = function(){
		document.getElementById("logresult").innerHTML="<p class='notfound'>You're fired.<br><span class='scanagain'>Just kidding. Scan again.</span></p>"
		obj.clear();
		obj.clearNote();
	}
	obj.clearNote = function(){
		document.getElementById("textnote").innerHTML="";
		// document.getElementById("nota").innerHTML="<img style='width: 140px;cursor: pointer;' class='togme addme' id='note' src='http://58.69.9.6/ezetimebarcode/assets/img/NOTE.png' ?><div id='textnote' class='container'></div>";
    
    	
	}
	obj.sendnote =function(){
		var xhttp = new XMLHttpRequest();
		var curtime = document.getElementById('curtime').value;
		var mynote = document.getElementById("mynote").value;
		xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		      document.getElementById("nota").style.display="none";
		      document.getElementById("note").setAttribute('src','http://58.69.9.6/ezetimebarcode/assets/img/NOTE.png');
	            $(".togme").toggleClass("addnot addme");
	            document.getElementById("textnote").innerHTML="";
	            document.getElementById("sendbutton").innerHTML="";
		      document.getElementById("success-message").innerHTML +="<p> Note sent!</p>";
		      
		    }
		  };
		xhttp.open("GET", "sendnote.php?curtime="+curtime+"&mynote="+mynote);
		xhttp.send();
	}
	obj.log = function(){
		var xhttp = new XMLHttpRequest();
		try{
			var employee_id = document.getElementById("out_id").value;
			var mynote = " ";
			xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		      document.getElementById("logresult").innerHTML = this.responseText;
		      	
		    }else{
		    	console.log("Error", xhttp.statusText);  
		    }
		    document.getElementById('barcode').value = '';
		  };
		xhttp.open("GET","log.php?employee_id="+employee_id+"&mynote="+mynote);
		xhttp.send();
		obj.clearNote();
		}
		catch
		{
			obj.notfound();
		}
			
	}
	obj.announcement = function(){

	}
		

	
}(window))