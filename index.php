
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="assg1.css">

</head>
<body>

<div id="head">
 
 <p><h1><img id="img1" src="picture.jpg" onmouseover="whyHover()" alt="Connor Makhlouta" style="height:40px;width:40px;align=left"> Assg. 1: CSS, Javascript, and forms </h1>
 <h2 style="text-align:center"> Welcome to my assignment! </h2> Brought to you by Connor Makhlouta! </p>
 <a id="link" href="#" onclick="randomLink()"> Click me!</a><br>

<button class="myButton" onclick="goRed()"> Red </button>
<button class="myButton" onclick="goYellow()"> yellow </button>
<button class="myButton" onclick="goGreen()"> green </button>
<button class="myButton" onclick="goBlack()"> black </button>
<button class="myButton" onclick="goSilver()"> silver </button>

</div>

<div id="bar">
<button class="myButton" onclick="myFunction2()"> Home </button>
<button class="myButton" onclick="myFunction()"> About me </button>
<button class="myButton" onclick="toggleForm()"  > Guest book </button> 
                                  
 <select value="courses">
  <option selected="selected">Courses</option>
  <option value="CP1">CP1</option>
  <option value="CP2">CP2</option>

</select> 
</div>

<div id="section" align="center">
<p id="demo"> My name is Connor Makhlouta and this is my assignment for Web Programming </p>



</div>

<div id="right">
  <img src="ad.jpg" alt="Advertisement" style="height=600px;width=120px;align=right">
  </div>
<script type="text/javascript" src="action_page.php"> </script>  
<script>
function myFunction(){
  var myform=document.getElementById("form1");
  if(myform.style.display="block"){
    myform.style.display="none";
  }
document.getElementById("demo").innerHTML = " I am a second-year Computer Science student at Lebanese American University. Born on May 24th, 1996, in Carlton, VIC. Hobbies include: Video gaming,Football,Basketball. "
}
function myFunction2(){
  var myform=document.getElementById("form1");
  if(myform.style.display="block"){
    myform.style.display="none";
  }
document.getElementById("demo").innerHTML ="Welcome to my assignment! Please click on one of the tabs on the left in order to view desired information."
}
function toggleForm(){
  document.getElementById("demo").innerHTML = null

var myform=document.getElementById("form1");
var displaysetting=myform.style.display;
if(displaysetting=="none"){
  myform.style.display="block";
}
else {
  myform.style.display="none";
}

}
function goRed(){
    document.body.style.backgroundColor="red";
  }
function goYellow(){
    document.body.style.backgroundColor='yellow';
  }
  function goGreen(){
    document.body.style.backgroundColor='green';
  }
  function goBlack(){
    document.body.style.backgroundColor='black';
  }
  function goSilver(){
    document.body.style.backgroundColor='silver';
  }
  function whyHover(){
    alert("Why are you hovering?");
  }
  
  function randomLink(){
  var links=["http://slashdot.org/","http://www.thinkgeek.com/","http://despair.com/","http://www.redbubble.com/","http://googleresearch.blogspot.com/","https://developers.google.com/speed/libraries"];
  var num=Math.random()*5;
  var num2=parseInt(num, 10);
  var goto= links[num2];
  
  link.setAttribute("href", links[num2]);
 
}
</script>

<form id="form1" action="action.php" method="$_POST" >
  First name:<br>
  <input type="text" name="firstname" >
  <br>
  Last name:<br>
  <input type="text" name="lastname" ">
  <br>
  E-mail: <br>
  <input type= "text" name="E-mail" > <br><br>
  
  <textarea name="comment" form="form1">Leave a comment</textarea>
  <input type="submit" name="formSubmit" value="Submit">
</form>



<div id="footer">
<p> CSC 443, Assg1, Fall 2015 </p>
</div>
</body>
</html>