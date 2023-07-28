
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">


  <title></title>

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css'>

<style>
header,
main,
footer {
  padding-left: 240px;
}

body {
  backgroud: white;
}

@media only screen and (max-width: 992px) {
  header,
  main,
  footer {
    padding-left: 0;
  }
}

#credits li,
#credits li a {
  color: white;
}

#credits li a {
  font-weight: bold;
}

.footer-copyright .container,
.footer-copyright .container a {
  color: #BCC2E2;
}

.fab-tip {
  position: fixed;
  right: 85px;
  padding: 0px 0.5rem;
  text-align: right;
  background-color: #323232;
  border-radius: 2px;
  color: #FFF;
  width: auto;
}
</style>
</head>
<body translate="no">
  <head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
@include('layouts.sidebar')
@include('layouts.header')



</body>

</html>


  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js'></script>
      <script id="rendered-js" >
$('.button-collapse').sideNav();

$('.collapsible').collapsible();

$('select').material_select();
//# sourceURL=pen.js
    </script>

  
</body>

</html>