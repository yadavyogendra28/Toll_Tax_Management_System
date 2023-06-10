// JavaScript Document


function PrintT()
{
	var rd1= document.getElementById("rd1");
	var rd2= document.getElementById("rd2");
	var rd3= document.getElementById("rd3");
	var rd4= document.getElementById("rd4");
	var rd5= document.getElementById("rd5");
	var rd6= document.getElementById("rd6");
	
	  if(rd1.checked==true)
		 {
			myimage();
			var originalName = car;
      document.getElementById("veTXT123").innerHTML ;
			 
		 }

	      if(rd2.checked==true)
			{
				myimage2();
			}
	
	     if(rd3.checked==true)
			{
				myimage3();
			}
	     
	    if(rd4.checked==true)
			{
				myimage4();
			}
	     
	    if(rd5.checked==true)
			{
				myimage5();
			}
	     
	     if(rd6.checked==true)
			{
				myimage6();
			}
	     
	
}


var image =["photos/car11.png" , "photos/LCV33.png" , "photos/BUS TRUCK11.PNG" , "photos/3axle11.png" , "photos/4 to 6 axle.png" , "photos/osv.jpg"]



function myimage1()
{
	document.getElementById("image").src=image[0];
	
	
    
}

function myimage2()
{
	document.getElementById("image").src=image[1];
}

function myimage3()
{
	document.getElementById("image").src=image[2];
}

function myimage4()
{
	document.getElementById("image").src=image[3];
}

function myimage5()
{
	document.getElementById("image").src=image[4];
}


function myimage6()
{
	document.getElementById("image").src=image[5];
}






