<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Engagis EzeTime</title>
    
    <link rel ='shortcut icon' type='image/png' href="<?php echo base_url().'assets/img/clock.ico'?>">
    
    <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/Footer-Basic.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/land.css' ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href='https://fonts.googleapis.com/css?family=Work+Sans' rel='stylesheet'>
    
    <script>
      function resizeIframe(obj) {
        obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
      }
    </script>
    <style>
    #mynote {
    color: white;
}
</style>
    
</head>

<body id="greeting"  onload="startTime()">
<header class="container-fluid" id="tooheady" onclick="focusbarcode();">
    <img src="<?php echo base_url().'assets/img/EzeTime White.png' ?>" class="img-responsive" id='ezetimelogo'onclick="focusbarcode();">

    <div class="time">
            <div id="clock" onclick="focusbarcode();"></div>
            <div id="date" onclick="focusbarcode();"></div>
            </div>
        </header>

    <header class="container-fluid text-center log-content" id="head" onclick="focusbarcode();"> 
        <input type="text" id="barcode" class="transparent-input" oninput="obj.check();" maxlength="5" placeholder="Scan ID" autofocus onblur="focusnote();">
        <input type="text" id="decoy" value="" hidden onblur="focusbarcode();">
        <div id="result" onclick="focusbarcode();" ><!--b style='font-size:30px;' id='scan'>Scan ID</b-->
            <br><br><br><h1 id="idle"><span class="greet"></span> Mate!</h1>
        </div>
        <center><div id="logresult" onclick="focusbarcode();" ></div><br></center>
    </header>
    <center class="container-fluid" onclick="focusbarcode();">
        <span id='success-message' onclick="focusbarcode();"></span>
        <div id="nota" >
            <span id="sendbutton"></span>
                <img style="width: 140px;cursor: pointer;" class="togme addme" id='note' src="<?php echo base_url().'assets/img/NOTE.png' ?>" onclick="focusbarcode();">
        </div>
        </center>
        <div id="textnote" class="container">
                </div>
        
    <div id="mydiv">
  <!--Include a header DIV with the same name as the draggable DIV, followed by "header":-->
  <div id="mydivheader"><b class='pull-left' id='close' onclick='closeiframe();'>&nbsp;X</b><b id='mover'>Work Hours</b> </div>
  <div id="inframe">
  <iframe src="http://58.69.9.6/EzeTimeBootstrap/punches.php" scrolling='no' frameborder='no'>
    
    </iframe></div>
    </div>
    <div class="footer-basic container-fluid" id="footstool" onclick="focusbarcode();">
        <footer>
            <ul class="list-inline">
                <li class="list-inline-item pull-right">
                    <a><img src="<?php echo base_url().'assets/img/icon report.png' ?>" id="datasheet"  ><strong  >REPORTS</strong></a>
                    <a href="https://sites.google.com/engagis.com/ph-resources/home"><img src="<?php echo base_url().'assets/img/icon resource.png' ?>" id="datasheet" ><strong >RESOURCES</strong></a>
                    <a href="http://58.69.9.6/EzeTimeBootstrap/punches.php"><img src="<?php echo base_url().'assets/img/icon time.png' ?>" id="datasheet" ><strong >PUNCHES</strong></a>
                    <a href="http://58.69.9.6/EzeTime/login.php" class=""><img src="<?php echo base_url().'assets/img/icon admin.png' ?>" id="datasheet" ><strong >ADMIN</strong></a>
                </li>
                <li class="list-inline-item pull-left"><img src="<?php echo base_url().'assets/img/heyy.png' ?>" id='engagislogo' onclick="focusbarcode();"></li>
            </ul>
            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid"><a class="navbar-brand" href="#"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    
                </div>
            </nav>
        </footer>
        
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url().'assets/js/time.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/logss.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/flys.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/backend.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/idle/jquery.idle.js'?>"></script>
    <script type="text/javascript" src="assets/announcement.php"></script>
    <script>
// change background depending on user's time


datetoday = new Date();
timenow = datetoday.getTime();
datetoday.setTime(timenow);
thehour = datetoday.getHours();

if (thehour >= 0 && thehour <4 ){
$('body').addClass('night');
$('.greet').html('Good Night');
}
else if (thehour >= 5 && thehour <12 ){
$('body').addClass('morning');
$('.greet').html('Good Morning');
}
else if (thehour >= 12 && thehour <13){
$('body').addClass('noon');
$('.greet').html('Good Noon');
}
else if (thehour >= 13 && thehour <17){
$('body').addClass('afternoon');
$('.greet').html('Good Afternoon');
}
else if (thehour >= 17 && thehour <20){
$('body').addClass('evening');
$('.greet').html('Good Evening');
}
else if (thehour >= 20 ){
$('body').addClass('night');
$('.greet').html('Good Night');
}

</script>
    <script>

        $("#note").click(function() {
            if($(this).hasClass("addme")){
                document.getElementById("note").setAttribute('src','<?php echo base_url().'assets/img/NOTE.png' ?>');

                $(".togme").toggleClass("addme addnot"); 

                document.getElementById("textnote").innerHTML="<input type='text' class='form-control transparent-note' maxlength='250' id='mynote'  placeholder='Write Your Note Here' onclick='focusnote();' onblur='focusbarcode();'>";

                document.getElementById("note").src="<?php echo base_url().'assets/img/cancel-01.png' ?>";
                document.getElementById("note").innerHTML="onclick='focusbarcode();";

                document.getElementById("sendbutton").innerHTML="<img style='width: 140px;cursor: pointer;' onclick='obj.sendnote(); focusbarcode(); setTimeout(function(){window.location.reload(1);}, 5000);' src='<?php echo base_url().'assets/img/SEND-01.png' ?>'>";
            }
            else{
                document.getElementById("note").setAttribute('src','<?php echo base_url().'assets/img/NOTE.png' ?>');
                $(".togme").toggleClass("addnot addme");
                document.getElementById("textnote").innerHTML="";
                document.getElementById("sendbutton").innerHTML="";
            }
        });
        function shuffle(array) {
          var currentIndex = array.length, temporaryValue, randomIndex;
          while (0 !== currentIndex) {
            randomIndex = Math.floor(Math.random() * currentIndex);
            currentIndex -= 1;
            temporaryValue = array[currentIndex];
            array[currentIndex] = array[randomIndex];
            array[randomIndex] = temporaryValue;
          }

          return array;
        }
        
        function timer(ms) {
            return new Promise(resolve => setTimeout(resolve, ms));
        }
        var counter = true;
        $(document).idle({
          onIdle: function(){
            counter = true;
            (async function idleme() {
                array = shuffle(array);
                greets = array[1][0];
                fontsize=array[1][2];
                description = array[1][1]
                descriptionfont = parseFloat(fontsize)*0.40;
               // document.getElementById("result").innerHTML="<b style='font-size:30px;opacity:0.4;'>Scan ID</b><br><br><br><h1 id='idle' style='font-size:"+fontsize+"px;'>"+greets+"</h1><br><div id='description' style='font-size:"+descriptionfont+"px'>"+description+"</div>";
                document.getElementById("result").innerHTML="<br><br><br><h1 id='idle' style='font-size:"+fontsize+"px;'>"+greets+"</h1><br><div id='description' style='font-size:"+descriptionfont+"px'>"+description+"</div>";
                document.getElementById("logresult").innerHTML="";
                document.getElementById("nota").style.display = "none";
                document.getElementById("mynote").style.display = "none";
                document.getElementById("success-message").innerHTML = "";
                await timer(5000);
                if(!counter){
                    return
                }
                else{
                    idleme();
                }
                
            }());
          },
          onActive: function() {
            counter = false;
          //  document.getElementById("result").innerHTML="<b style='font-size:30px;'>Scan ID</b><br><br><br><h1 id='idle'>G'day mate!</h1>";
            document.getElementById("result").innerHTML="<br><br><br><h1 id='idle'>"+ greet +"Ugh G'day mate!</h1>";
            document.getElementById("logresult").innerHTML="";
            document.getElementById("nota").style.display = "none";
          },
          idle: 15000
        })
    </script>
    <script>
        function closeiframe() {
            document.getElementById("mydiv").style.display = "none";
        }
        function showiframe() {
            document.getElementById("mydiv").style.display = "block";
        }
    </script>
    <script>
        function minsToMidnight() {
              var now = new Date();
              var then = new Date(now);
              then.setHours(24, 0, 0, 0);
              return (then - now) / 6e4;
            }
        window.setInterval(function(){
              
              if(minsToMidnight()<=0.05 && minsToMidnight()>=0.04){
                obj.clearlogout();
                console.log("ALl LOGGED OUT")
              }
            }, 500);
    </script>
  
    <script>
$('.iframe-full-height').on('load', function(){
    this.style.height=this.contentDocument.body.scrollHeight +'px';
});
    </script>
 
<script>
function getfocus() 
{
    setTimeout(function(){
$(mynote).focus();
},100);
}

function focusbarcode() {
    document.getElementById("barcode").focus();
}
function focusnote() {
    document.getElementById("mynote").focus();
}
function unfocusbarcode(){
    document.getElementById("barcode").blur();
}
function focusdecoy(){
    document.getElementById("decoy").focus();
}

</script>

    
</body>
</html>