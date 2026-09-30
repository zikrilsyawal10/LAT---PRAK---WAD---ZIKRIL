<?php
  $nama = "Muhammad Zikril Syawal";
  $nim = "102022500288";
  $fakultas = "Fakultas Rekayasa Industri";
  $prodi = "S1 Sistem Informasi";
  $kampus = "Telkom University";
  $semester = "Mahasiswa Semester 3";
?>

<!DOCTYPE html>
<html>
<head>
  <title>Personal Web PHP - <?php echo $nama; ?></title>
  <link rel="icon" href="favicon.png">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="kartu">

    <img src="foto.jpeg" class="foto" alt="Foto">

    <h1><?php echo $nama; ?></h1>
    <h2>NIM: <?php echo $nim; ?></h2>
    <h3><?php echo $fakultas; ?></h3>
    <h4>Program Studi <?php echo $prodi; ?></h4>
    <h5><?php echo $kampus; ?></h5>
    <h6><?php echo $semester; ?></h6>

    <p>Diperbarui: <?php echo date("d-m-Y"); ?></p>

    <div class="sosmed">
      <a href="https://www.tiktok.com/@zikrilsy?_r=1&_t=ZS-9A9rDmbdusy" target="_blank">TT</a>
      <a href="https://github.com/zikrilsyawal10" target="_blank">GH</a>
      <a href="https://www.instagram.com/zikrillsyawal?stkn=cG9sMGNzcnppNXds" target="_blank">IG</a>
    </div>

    <table border="1">
      <tr>
        <th>Hobi</th>
        <th>Skill</th>
      </tr>
      <tr>
        <td>coding</td>
        <td>java</td>
      </tr>
    </table>

  </div>

</body>
</html>