<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="fonts/icomoon/style.css" />

    <link rel="stylesheet" href="css/owl.carousel.min.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body>
    
    <?php
    
    $ns1 = ['id'=>1,'nim'=>'01101','matkul'=>'DDP','uts'=>80,'uas'=>84,'tugas'=>78];
    $ns2 = ['id'=>2,'nim'=>'01121','matkul'=>'PW','uts'=>70,'uas'=>50,'tugas'=>68];
    $ns3 = ['id'=>3,'nim'=>'01130','matkul'=>'DDP','uts'=>60,'uas'=>86,'tugas'=>70];
    $ns4 = ['id'=>4,'nim'=>'01134','matkul'=>'BSI','uts'=>90,'uas'=>91,'tugas'=>82];
    
    $nama_siswa = $_POST['nama'];
    $nim_siswa = $_POST['nim'];
    $mata_kuliah = $_POST['matkul'];
    $nilai_uts = $_POST['uts'];
    $nilai_uas = $_POST['uas'];
    $nilai_tugas = $_POST['tugas'];
    $ns5 = ['id'=>5,'nim'=>$nim_siswa,'matkul'=>$mata_kuliah,'uts'=>$nilai_uts,'uas'=>$nilai_uas,'tugas'=>$nilai_tugas];
    
    $ar_nilai = [$ns1, $ns2 , $ns3, $ns4, $ns5];
    ?>
    <br />
    <br />
    <br />
    <div class="animate__animated animate__backInDown" style="color:blue;text-align:center">

        <h3 >Daftar Nilai Siswa</h3>
    </div>
    <table border="1" width="100%" >
    <thead>
    <tr>
    <th>No</th><th>NIM</th><th>Mata Kuliah</th><th>UTS</th>
    <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
    </tr>
    </thead>
    <tbody>
    
    <?php
    
    $nomor = 1;
    foreach($ar_nilai as $ns){
    echo '<tr><td>'.$nomor.'</td>';
    echo '<td>'.$ns['nim'].'</td>';
    echo '<td>'.$ns['matkul'].'</td>';
    echo '<td>'.$ns['uts'].'</td>';
    echo '<td>'.$ns['uas'].'</td>';
    echo '<td>'.$ns['tugas'].'</td>';
    $nilai_akhir = (30 * $ns['uts'] / 100) + (35 * $ns['uas'] / 100) + (35 * $ns['tugas'] / 100);
    echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
    echo '<tr/>';
    $nomor++;
    }
    ?>
    </tbody>
    </table>
</body>
</html>
