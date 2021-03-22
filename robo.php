<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">


        <style>
* {
  box-sizing: border-box;
}
main,
div {
  display: flex;
  padding: 1rem;
}

.desktop {
  flex-direction: column;
  flex-wrap: wrap;
  height: 400px;
  width: 100%;
}

div {
  flex: 1;
}

div.orange {
  background-color: #FFAD77;
  width: 30%;
  flex: 0 0 50%;
}

/* div.purple {
  flex: 0 0 100%;
  width: 40%;
  background-color: #FFE377;
} */

div.green {
    flex: 0 0 50%;

  width: 30%;
  background-color: #FF77C8;
}
/* div.yellow{
  background-color: green;
  width:30%;
} */

@media(max-width: 480px) {
  .desktop div {
    flex: 1;
    width: 100%;
  }
  div[orange] {
    order: -1;
    flex: 2;
  }
  div[yellow] {
    flex: 5;
  }
  div[purple] {
    flex: 1;
  }
  div[purple] {
    flex: 6;
  }
}

        </style>
    </head>
    <body>
    <div class="desktop" id="robo">
  <!-- <div class="yellow">lorem</div> -->
  <div class="orange">lorem</div>
  <!-- <div class="purple">lorem</div> -->
  <div class="green">lorem</div>

</div>
        <script src="" async defer></script>
    </body>
</html>