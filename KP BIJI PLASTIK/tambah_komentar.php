<?php
session_start();
include 'koneksi.php';
include 'csrf.php';
 
function anti($text){
	return $id = stripslashes(strip_tags(htmlspecialchars($text, ENT_QUOTES)));
}
$nama_pengirim = anti($_POST["nama_pengirim"]);
$email_pengirim = anti($_POST["email_pengirim"]);
$komen = anti($_POST["komen"]);
$komen_id = anti($_POST["komentar_id"]);

function sensorKomentar($komentar) {
    // Daftar kata-kata yang ingin disensor
    $kataSensitif = array('jelek', 'botak', 'beban', 'anjing','memek','bangsat','babi','tai');

    // Ganti kata-kata sensitif dengan bintang sesuai panjang kata
    foreach ($kataSensitif as $kata) {
        $panjangKata = strlen($kata);
        $gantiDengan = str_repeat('*', $panjangKata);
        $komentar = str_ireplace($kata, $gantiDengan, $komentar);
    }

    return $komentar;
}

$newKomen = sensorKomentar($komen);

 
$query = "INSERT INTO tbl_komentar (parent_komentar_id, komentar, nama_pengirim, email_pengirim) VALUES (?, ?, ?, '$email_pengirim')";
$dewan1 = $db1->prepare($query);
$dewan1->bind_param("sss", $komen_id, $newKomen, $nama_pengirim);
$dewan1->execute();
 
echo json_encode(['success' => 'Sukses']);
?>
