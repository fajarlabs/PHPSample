<html>
<head>
<link rel="stylesheet" href="main.css" type="text/css" />
<script language = "javascript">
var XMLHttpRequestObject = false;
if (window.XMLHttpRequest) {
    XMLHttpRequestObject = new XMLHttpRequest();
} else if (window.ActiveXObject) {
    XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
}

function getusername(sumberdata){
  if(XMLHttpRequestObject) {
      var obj = document.getElementById("pesan");
      XMLHttpRequestObject.open("GET", sumberdata);
      XMLHttpRequestObject.onreadystatechange = function() {
          if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200) {
              obj.innerHTML = XMLHttpRequestObject.responseText; 
          } 
      }
      XMLHttpRequestObject.send(null);
    } 
}

function cekusername(keyEvent) {
    keyEvent = (keyEvent) ? keyEvent: window.event;
    input    = (keyEvent.target) ? keyEvent.target : keyEvent.srcElement;
    if (keyEvent.type == "keyup") {
        if (input.value) {
          getusername("proses.php?kata=" + input.value);
        }    
    }
}
</script>
</head>
<body>
<div class="demo" style="width: 250px;">
<form>
Username : <input type="text" name="username" onkeyup="cekusername(event)" />
<div id="pesan"></div>
</form>
</div>
</body>
</html>
