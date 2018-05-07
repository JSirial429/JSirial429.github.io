<!-- ***********************************************************************************
Page Name  : Help.php 
Author     : Jorge Sirias 
Your URL   : ocelot-aul.fiu/~jsiri004
Course     : CGS 4854 WEB 3, T & TH, 7:50-9:05 PM
Program #  : Assignment #4
Purpose    : This page details what all the submit buttons do and displays it to the user
             in the front-end via a resizable java script pop up window 

Due Date   : 4/5/2018 

Certification: 
I hereby certify that this work is my own and none of it is the work of any other person. 

..........{ Jorge Sirias }..........
******************************************************************************* -->

<html>
 
<head>

  <title>Sirias Jorge help.php</title>

</head>

  <!-----<?php include('mainMenuPGM4') ?>--------->

  <body onload="help()">

 <script>

  function help()
  {

  //Open a new window at a specific location
    var myWindow = window.open("", "Help","width=400, height=400, scrollbars=yes,resizable=yes, left=80, top=80");    	
    // Display the purpose of each button on the form in the newly opened window 
    myWindow.document.write("<head>");
    myWindow.document.write("<title>Help</title>");
    myWindow.document.write("</head>");
    myWindow.document.write("<div>");
    myWindow.document.write("<div><h1 style='color:Red'>** HELP ** </h1></div>");
    myWindow.document.write("<hr>");
    myWindow.document.write("<div> <h2><span style='color:purple'>Buttons Purpose</span></h2></div>");
    myWindow.document.write("<div>");
    myWindow.document.write("<ul style='list-style-type:circle'>");
    myWindow.document.write("<li>\n <h3 style='color:gold'>FIND</h3>");
    myWindow.document.write("<div>The <b>FIND</b> button is used to locate a record in the Customers database using the Telephone as the primary key.</div><br></li>");
    myWindow.document.write("<div>If no telephone is given then you will encounter a message <span style='color:red'>RECORD NOT FOUND</span> at the bottom of the website. If a given record is found the you will encounter a message <span style='color:blue'>RECORD FOUND</span>. Otherwise a record not in the database will produce a <span style='color:red'>RECORD NOT FOUND</span> message.</div>");
    myWindow.document.write("<li>\n <h3 style='color:gold'>SAVE</h3>");
    myWindow.document.write("<div>The <b>SAVE</b> button allows a user to save customer information into our database. If done succesfully you will encounter a <span style='color:blue'>RECORD ADDED</span> message. If your attempt was unsuccessful this due to either a bad connection in the process of saving or the record already existing. The later scenario will produce a <span style='color:red'>RECORD ALREADY EXIST</span> message.</div><br></li>");
    //myWindow.document.write("<br>");
    myWindow.document.write("<li>\n <h3 style='color:gold'>MODIFY</h3>");
    myWindow.document.write("<div>The <b>MODIFY</b> button allows you to make any modification to an existing record in the database. Be aware that any modification requires to look up the telephone number first.</div><br></li>");
    myWindow.document.write("<div>To modify a user info, follow these steps:</div>");
    myWindow.document.write("<ol class='popup-list' type='1'>");
    myWindow.document.write("<li>Enter the user Telephone number that you want update.</li>");
    myWindow.document.write("<li>Then, press the <b>FIND</b> button to search for the record .</li>");
    myWindow.document.write("<li>Next, change the data you want update</li>");
    myWindow.document.write("<li>Finally, press the <b>MODIFY</b> button to store the modified information.</li>");
    myWindow.document.write("</ol>");
    // myWindow.document.write("<br>");
    myWindow.document.write("<li><h3 style='color:gold'>DELETE</h3>");
    myWindow.document.write("<div>The <b>DELETE</b> buttton is used to delete a record from the database but requires that the associated telephone number be found first. Therefore type the telephone number associated with the record and use the FIND button to locate it. Once located then proceed with the delete button.</div><br></li>");
    myWindow.document.write("<li><h3 style='color:gold'>CLEAR</h3>");
    myWindow.document.write("<div>Use the <b>CLEAR</b> button to clear the data from the fields on the Comix Shoppe Webpage.</div><br></li>");
    myWindow.document.write("<li><h3 style='color:gold'>HELP</h3>");
    myWindow.document.write("<div>The <b>HELP</b> button is used to discover the purpose and functionality of the buttons on the bottom of our webpage</div><br></li>");
    myWindow.document.write("<li><h3 style='color:gold'>ABOUT</h3>");
    myWindow.document.write("<div>To learn more about who we are as a company use the <b>ABOUT</b> button.</div><br></li>");
    myWindow.document.write("<li><h3 style='color:gold'>CONTACT US</h3>");
    myWindow.document.write("<div>If you have any questions and or any concerns please use the <b>CONTACT US</b> button to get in contact with us. We will respond to you in rapid and timely manner.</div><br></li>");
    myWindow.document.write("</ul>");
    myWindow.document.write("</div>");
   
  }

 </script>

</body>
</html>






