<!doctype html>

<?php include("DBConnection.php"); ?>

<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	
	<style>
	body{
    margin: 0;
    padding: 0;
	background-image:url("photos/toll-road.jpg");
	background-size: cover;
	font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
	visibility: 0.2px;
	
}
		
	/* The container must be positioned relative: */
.custom-select {
  position: relative;
  font-family: Arial;
	left: 35%;
	top:50px;
}

.custom-select select {
  display: none; /*hide original SELECT element: */
}

.select-selected {
  background-color: DodgerBlue;
}

/* Style the arrow inside the select element: */
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/* Point the arrow upwards when the select box is open (active): */
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/* style the items (options), including the selected item: */
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
}

/* Style items (options): */
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/* Hide the items when the select box is closed: */
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}	

.Extbt{  left: 44%;
			 top:400px;
		position: absolute;
		width: 150px;
	 height: 40px;
	}
		
		.ExtNum{
			left: 51%;
			 top:130px;
		position: absolute;
		width: 170px;
	 height: 30px;
		}		

	</style>
	
</head>

<body>
	
	
	<h1 align="center"> Select Exempt Vehicle </h1>
	
	<form method="post" > 
	<div class="custom-select" style="width:200px;">
		
  <select name="ExtSEL">
	 
    <option>Select Vehicle:</option>
    <option value="Ambulance">Ambulance</option>
    <option value="Police">Police</option>
    <option value="Army">Army</option>
    <option value="Fire Van">Fire Van</option>
    <option value="V.I.P.">V.I.P. </option>
    <option value="Other">Other</option>
   
  </select>
</div>
		<input class="ExtNum" type="text" name="EXVnumber12">
		<input class="Extbt" type="submit" name="EXTsubmit" value="Exempt Vehicle">
			   
			   
</form>
		
		
		
	<?php 
	
		
 if(isset($_POST['EXTsubmit']))
 {
	 $EXV5type=$_POST['ExtSEL'];
	 $EXVN5=$_POST['EXVnumber12'];
	 
	 
	 
	  
	 $sql = "INSERT INTO exemptv (EXTvType, EXTvNumber)
VALUES ('$EXV5type', '$EXVN5')";

if ($Con->query($sql) === TRUE) 
{
  
	
	echo '<script>alert("Exempt Vehicle Sussedfully ")</script>';
	
}
	 
else {
  echo "Error: " . $sql . "<br>" . $Con->error;
}


	 
	$Con->close(); 
	 
	 
	 

 }
	
	
	
	?>
	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	
	<script>
	
	var x, i, j, l, ll, selElmnt, a, b, c;
/* Look for any elements with the class "custom-select": */
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /* For each element, create a new DIV that will act as the selected item: */
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /* For each element, create a new DIV that will contain the option list: */
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /* For each option in the original select element,
    create a new DIV that will act as an option item: */
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /* When an item is clicked, update the original select box,
        and the selected item: */
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
    /* When the select box is clicked, close any other select boxes,
    and open/close the current select box: */
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle("select-hide");
    this.classList.toggle("select-arrow-active");
  });
}

function closeAllSelect(elmnt) {
  /* A function that will close all select boxes in the document,
  except the current select box: */
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}

/* If the user clicks anywhere outside the select box,
then close all select boxes: */
document.addEventListener("click", closeAllSelect);

	
	
	</script>
	
	
	
</body>
</html>