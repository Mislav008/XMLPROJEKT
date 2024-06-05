<?php
$xml = simplexml_load_file('mobiteli.xml');
$slike = ['mob1.jpg', 'mob2.jpg', 'mob3.jpg', 'mob4.jpg'];
?>

<div class="container">
  <h1>U ponudi</h1>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Naziv</th>
        <th>Proizvođač</th>
        <th>Cijena (EUR)</th>
        <th>Karakteristike</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($xml->mobitel as $mobitel): ?>
        <tr>
          <td><?php echo $mobitel->naziv; ?></td>
          <td><?php echo $mobitel->proizvodac; ?></td>
          <td><?php echo $mobitel->cijena; ?></td>
          <td>
            <ul>
              <?php foreach ($mobitel->karakteristike->karakteristika as $karakteristika): ?>
                <li><?php echo $karakteristika; ?></li>
              <?php endforeach; ?>
            </ul>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  
  <div class="row mt-4">
    <?php 
    $i = 0;
    foreach ($xml->mobitel as $mobitel): 
      $stara_cijena = $mobitel->cijena;
      $nova_cijena = $stara_cijena - 100;
    ?>
      <div class="col-md-3">
        <div class="card">
          <img src="<?php echo $slike[$i]; ?>" class="card-img-top" alt="<?php echo $mobitel->naziv; ?>">
          <div class="card-body text-center">
            <h5 class="card-title"><?php echo $mobitel->naziv; ?></h5>
            <p class="card-text">
              <span class="text-muted text-decoration-line-through"><?php echo $stara_cijena; ?> EUR</span><br>
              <span class="text-danger"><?php echo $nova_cijena; ?> EUR</span>
            </p>
          </div>
        </div>
      </div>
    <?php 
    $i++;
    endforeach; 
    ?>
  </div>
</div>
