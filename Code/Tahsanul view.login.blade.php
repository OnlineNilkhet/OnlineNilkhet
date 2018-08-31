<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>
       <center>
           <form action="/loginme" method="post">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               USERNAME : <input type="text" name="username"><br/>
               PASSWORD : <input type="password" name="password"><br/>
               <input type="submit" name="login" value="Login">
           </form>
       </center>
    </body>
</html>