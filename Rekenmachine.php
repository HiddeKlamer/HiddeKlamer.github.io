<!DOCTYPE html>

<html>
<head>
<title>Rekenmachine</title>
</head>
  <link rel="stylesheet" type="text/css" href="style.css">
<body>
  <a id="Top"></a>
  <div class="boxmodel">
  <p class="balk">
    <a href="index.html">Home</a>
    <a class="active" href="Rekenmachine.php">Rekenmachine</a>
    <a href="Weer.html">Weer</a>
    <a href="Interactief.html">Interactief</a>
  </p>
    <h1><mark>Rekenmachine</mark></h1>
    <br><hr>
    <form method="GET" action="">
    <pre>
      nummer 1 : <input type="text" name="one">
      nummer 2 : <input type="text" name="two">
      operations :
      <input type="radio" name="operation" value="1">plus
      <input type="radio" name="operation" value="2">min
      <input type="radio" name="operation" value="3">keer
      <input type="radio" name="operation" value="4">gedeeld door
      
      <input type="submit" name="press" value="totaal">
      <input type="reset" name="delete" value="verwijder">
     </pre>
     </form>
     <hr><br>
     resultaat : 
  </div>
</body>
</html>

<?php
if (isset($_GET['press']==1)) {
    $n1 = $_GET['one'];
    $n1 = $_GET['two'];

    if (isset($_GET['operation']==1)) {
        echo "resultaat van plus = ". ($n1+$n2) ;
    }
    elseiF (isset($_GET['operation']==2))
        echo "resultaat van min = ". ($n1-$n2) ;
    }
    elseiF (isset($_GET['operation']==3))
        echo "resultaat van keer = ". ($n1*$n2) ;
    }
    elseiF (isset($_GET['operation']==4))
        echo "resultaat van delen door = ". ($n1/$n2)
    }
}
?>

