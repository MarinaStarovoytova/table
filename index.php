<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
    <title>Практика PHP</title> 
                                
</head>

<body class="bg-success p-2 text-dark bg-opacity-10">

<header class="bg-success p-1 text-dark bg-opacity-50 text-center fs-3">
  
  <div class="card">
  <div class="card-body bg-success bg-opacity-10">
  Практика по PHP
  </div>
  </div> 

</header>
  
<main>
  
  <div class="d-flex justify-content-center">
    <?php
      include 'truthTablePHP.php';
    ?> 
  </div>

  <div class="d-flex justify-content-center">
    <?php
      include 'flexibleComparisonPHP.php';
    ?>
  </div>

  <div class="d-flex justify-content-center">
    <?php
      include 'toughСomparisonPHP.php';
    ?>
  </div>

</main>
  
<footer class="bg-success p-2 text-dark bg-opacity-50 text-center fs-4">

  <div class="card">
    <div class="card-footer bg-success bg-opacity-10">
      <p>Вывод о сравнении в PHP</p> 
    </div>
    <div class="card-body bg-success bg-opacity-10">
      <p>Оператор == (равенства) принимает операнды любого типа, если два операнда равны, возвращается значение true, в противном случае - false.
        Если операнды имеют разные типы данных, PHP попытается преобразовать их перед сравнением к одному типу.</p>
      <p>Оператор === (идентичности) принимает операнды любого типа и возвращает true, если их значения совпадают (равны), и false, 
        если они различны.
        Оператор идентичности проверяет два операнда на «идентичность», это означает, что помимо равенства самих значений операндов, 
        они также должны относиться к одному и тому же типу данных.</p>
    </div>
  </div>

</footer>

</body>
</html>
