  <!-- ***********************************************************************************
  Page Name  : Main Menu CSS
  Author       : Jorge Sirias 
  Your URL  : ocelot-aul.fiu/~jsiri004
  Course       : CGS 4854 Web 3, Tuesdays & Thursdays,  7:50-9:05 PM
  Program #  : Assignment 2
  Purpose      : This page includes the dropdown menu using CSS 

  Due Date    : 02/22/2018 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{Jorge Sirias}..........
 ******************************************************************************* -->

<html>

  <head>

    <title> Sirias J mainMenu </title>

      <style type="text/css">

        nav ul ul 
        {
            display: none;
        }
        
        
        nav ul li:hover > ul 
        {
            display: block;
        }
        
          
        nav ul 
        {
            background: #efefef; 
            background: linear-gradient(top, #efefef 0%, #bbbbbb 100%);  
            background: -moz-linear-gradient(top, #efefef 0%, #bbbbbb 100%); 
            background: -webkit-linear-gradient(top, #efefef 0%,#bbbbbb 100%); 
            box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
            padding: 0 20px;
            border-radius: 10px;  
            list-style: none;
            position: relative;
            display: inline-table;
        }
        
            
        nav ul:after 
        {
                content: ""; clear: both; display: block;
	}
                
                
        nav ul li 
        {
                float: left;
        }
        
        
	nav ul li:hover 
        {
                background: #4b545f; 
                background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
                background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
                background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
        }
                
                
        nav ul li:hover a 
        {
                color: #ffffff; /*=white#ff00ff; /*#fff; */ /*menu name color */
        }
                
                
        nav ul li a 
        {
                display: block; padding: 25px 40px;
                color: red; /* main menu name #757575;*/ text-decoration: none;
	}
                
                
        nav ul ul 
        {
                background: lightslategray; /*#5f6975;*/ border-radius: 0px; padding: 0; /*sub menues */
                position: absolute; top: 100%;
        }
        
        
	nav ul ul li 
        {
		float: none; 
		border-top: 1px solid white; /*#6b727c; */ /*border top */
		border-bottom: 1px solid #575f6a; /*border down */
		position: relative;
	}
	
	
        nav ul ul li a 
        {
                padding: 10px 40px;
                color: #fff;
        }	
                
                
        nav ul ul li a:hover 
        {
                background: blue; /* #4b545f; */ /*submenu background color*/
        }
                
                
        nav ul ul ul 
        {
                position: absolute; left: 100%; top:0;
        }

      </style>

    </head>

    <body>

      <nav align="center">

        <ul> <!--outer -->

          <li><a href="#">Program 1</a>
          
            <ul> <!--inner -->

              <li><a href="pgm1.html">Program 1</a></li>
              <li><a href="page1.html">Page 1</a></li>
              <li><a href="page2.html">Page 2</a></li>
              <li><a href="page3.html">Page 3</a></li>
              <li><a href="page4.html">Page 4</a></li>
              <li><a href="../index.html">Home</a></li>

            </ul> <!--inner -->
   
          </li>    
 
          <li><a href="pgm2.php">Program 2</a></li>
          <li><a href="pgm3.php">Program 3</a></li>
          <li><a href="pgm4.php">Program 4</a></li>
          <li><a href="pgm5.php">Program 5</a></li>
          <li><a href="../index.html">Home</a></li>

        </ul> <!-- outer -->

       </nav>

    </body>

  </html>
