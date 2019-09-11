<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <div class="Logo">
   <div class="main">
      <form method="post" action="login.php">
         <div>
            <h1>LOGIN PAGE</h1>
         </div>

         <fieldset>
            <table >
               <tr>
                  <td  style="padding-left:35px;"> Username:</td> 
               </tr>

               <tr>
                  <td><input type="text" name="Username" required></td>
               </tr>
            
               <tr>
                  <td  style="padding-left:35px";>Password:<br>    </tr>
               </tr> 

               <tr>
                  <td><input type="password" name="password" required ></td>  
               </tr>
               
            </table>
            <button>submit</button>

         </fieldset>

      </form>
   </div>
</div>
</body>
</html>