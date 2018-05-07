  <!-- ***********************************************************************************
  Page Name  : Contact Us 
  Author     : Jorge Sirias 
  Your URL   : ocelot-aul.fiu/~jsiri004
  Course     : CGS 4854 WEB 3, T & TH, 7:50 - 9:05 PM
  Program #  : Assignment 4
  Purpose    : This takes the user from our front-end to the conatact us page where the user
               can send in any questions or concerns via email. 

  Due Date   : 4/5/2018 

  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Jorge Sirias }..........
 ******************************************************************************* -->

<html>

<head>

  <title>Sirias Jorge</title>

</head>

<body bgcolor="deepskyblue">

  <div align="center">

    <?php include 'mainMenuPGM4.php'; ?>

  </div>  

    <br><br> 

  <div align="center">  

    <table border="6" bordercolor="gold" width="75%" cellpadding="20" bgcolor="lemonchiffon">

      <tr> 

        <td> 

          <div align="center">
 
            <h2 style='color:black;'>Contact Us</h2>

            <hr>

            <p> Please fill out this form</p>

            <br><br>

            <form method="POST" action="mailer.php">

              <table border="0">

                <tr><td>Name      </td> <td><input type="text" size="50" name="Name">      </td></tr>
                <tr><td>E-Mail    </td> <td><input type="text" size="50" name="EMail">    </td></tr>
                <tr><td>Telephone </td> <td><input type="text" size="50" name="Telephone"> </td></tr>
              
              </table>

              <br><br>

              <p>Please tell us of any questions, comments or concerns below</p>

              <textarea name="Comment" rows="6" cols="50"></textarea>

              <br><br>

              <input type="submit" value="Submit" name="Submit">
              <input type="reset"  value="Clear">         

            </form>

          </div>

        </td> 

      </tr>

    </table>

  </div>

</body>

</html>
