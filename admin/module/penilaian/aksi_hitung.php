<?php
    if ($jabatan=='pelatih silat') {
      $queryHapus = mysqli_query($koneksi,"DELETE n FROM tbl_temp_normalisasi n JOIN tbl_penilaian p ON n.kd_penilaian=p.kd_penilaian JOIN tbl_atlit a ON p.kd_atlit=a.kd_atlit JOIN tbl_cabor c ON a.kd_cabor=c.kd_cabor WHERE c.nama_cabor='Pencak Silat'");
      $query = mysqli_query($koneksi,"SELECT * FROM tbl_penilaian p JOIN tbl_atlit a ON p.kd_atlit=a.kd_atlit JOIN tbl_cabor c ON a.kd_cabor=c.kd_cabor WHERE c.nama_cabor='Pencak Silat'");
    }else{
      $queryHapus = mysqli_query($koneksi,"DELETE n FROM tbl_temp_normalisasi n JOIN tbl_penilaian p ON n.kd_penilaian=p.kd_penilaian JOIN tbl_atlit a ON p.kd_atlit=a.kd_atlit JOIN tbl_cabor c ON a.kd_cabor=c.kd_cabor WHERE c.nama_cabor='Sepak Takraw'");
      $query = mysqli_query($koneksi,"SELECT * FROM tbl_penilaian p JOIN tbl_atlit a ON p.kd_atlit=a.kd_atlit JOIN tbl_cabor c ON a.kd_cabor=c.kd_cabor WHERE c.nama_cabor='Sepak Takraw'");
    }
    //mengambil nilai
    $i=1;
    while ($nilai=mysqli_fetch_array($query)) {
      $kode[$i] = $nilai['kd_penilaian'];
      $c1[$i] = $nilai['C1'];
      $c2[$i] = $nilai['C2'];
      $c3[$i] = $nilai['C3'];
      $c4[$i] = $nilai['C4'];
      $c5[$i] = $nilai['C5'];
      $i=$i+1;
    }

    //mengambil nilai bobot kriteria
    $queryBobot = mysqli_query($koneksi,"SELECT * FROM tbl_kriteria");
    $index=1;
    while ($pecahK = mysqli_fetch_array($queryBobot)){
      $b[$index] = $pecahK['bobot_kt']/100;
      $index= $index+1;
    }
    $minc1=$c1[1];
    $maxc2=$c2[1];
    $maxc3=$c3[1];
    $maxc4=$c4[1];
    $maxc5=$c5[1];

    //mencari nilai maksimum
    for ($a=1; $a <$i ; $a++) {
      if($c1[$a]<$minc1){
        $minc1=$c1[$a];
      }
      if($c2[$a]>$maxc2){
        $maxc2=$c2[$a];
      }
      if($c3[$a]>$maxc3){
        $maxc3=$c3[$a];
      }
      if($c4[$a]>$maxc4){
        $maxc4=$c4[$a];
      }
      if($c5[$a]>$maxc5){
        $maxc5=$c5[$a];
      }
    }

    //perhitungan
    for ($a=1; $a <$i ; $a++) {
      //membuat kd_normalisasi
      $querykd = "SELECT max(kd_normalisasi) as maxkd FROM tbl_temp_normalisasi";
      $hasilkd = mysqli_query($koneksi,$querykd);
      $data = mysqli_fetch_array($hasilkd);
      $kodeN = $data['maxkd'];
      $noUrut = (int) substr($kodeN, 3);
      $noUrut++;
      $char = "NS";
      $kodeBaru = $char . sprintf("%03s", $noUrut);

      //perhitungan normalisasi
      $N1[$a] = $minc1/$c1[$a];
      $N2[$a] = $c2[$a]/$maxc2;
      $N3[$a] = $c3[$a]/$maxc3;
      $N4[$a] = $c4[$a]/$maxc4;
      $N5[$a] = $c5[$a]/$maxc5;
      $totalN =$N1[$a]+$N2[$a]+$N3[$a]+$N4[$a]+$N5[$a];
      $kodepenilaian=$kode[$a];
      $ns1=$N1[$a];
      $ns2=$N2[$a];
      $ns3=$N3[$a];
      $ns4=$N4[$a];
      $ns5=$N5[$a];

      $queryNormalisasi = mysqli_query($koneksi,"INSERT INTO tbl_temp_normalisasi (kd_normalisasi,kd_penilaian,N1,N2,N3,N4,N5,total) VALUES ('$kodeBaru','$kodepenilaian',$ns1,$ns2,$ns3,$ns4,$ns5,$totalN)");
      //pehitungan bobot
      $A1[$a] =$N1[$a]*$b[1];
      $A2[$a] =$N2[$a]*$b[2];
      $A3[$a] =$N3[$a]*$b[3];
      $A4[$a] =$N4[$a]*$b[4];
      $A5[$a] =$N5[$a]*$b[5];
      //nilai akhir atlit
      $nilaiAkhir = $A1[$a]+$A2[$a]+$A3[$a]+$A4[$a]+$A5[$a];

      $queryUpdatePenilaian = mysqli_query($koneksi,"UPDATE tbl_penilaian SET nilai_akhir='$nilaiAkhir' WHERE kd_penilaian='$kode[$a]' ");
    }
    if($queryUpdatePenilaian){
      echo "<script type='text/javascript'>
            setTimeout(function () { swal({
            title: 'Info!',
            text: 'Perhitungan berhasil!',
            type: 'success',
            confirmButtonText: 'OK',
            closeOnConfirm: false,
          },
          function(isConfirm) {
            if (isConfirm) {
              window.location='$admin_url'+'adminweb.php?module=penilaian';
            }
          });}, 100);</script>";

    }else{
      echo "<script type='text/javascript'>
            setTimeout(function () { swal({
            title: 'Info!',
            text: 'Gagal melakukan perhitungan!',
            type: 'error',
            confirmButtonText: 'Coba Lagi',
            closeOnConfirm: false,
          },
          function(isConfirm) {
            if (isConfirm) {
              window.location='$admin_url'+'adminweb.php?module=penilaian';
            }
          });}, 100);</script>";
    }
 ?>
