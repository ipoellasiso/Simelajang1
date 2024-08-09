<?php
// Tambahan
$page = $_GET['id'];
$nomordok = $_GET['id'];
$token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJTSVBEX0FVVEhfU0VSVklDRSIsInN1YiI6IjMyMi4zNDIiLCJleHAiOjE3MjMxNzczNTAsImlhdCI6MTcyMjk2MTM1MCwidGFodW4iOjIwMjQsImlkX3VzZXIiOjMyMiwiaWRfZGFlcmFoIjozNDIsImtvZGVfcHJvdmluc2kiOiI3MiIsImlkX3NrcGQiOjAsImlkX3JvbGUiOjksImlkX3BlZ2F3YWkiOjMyMiwic3ViX2RvbWFpbl9kYWVyYWgiOiJwYWx1In0.LxKtLCpIwjtVjRXks4X68L2qh0vYnCqFUjyfJNblxfM';
$urlls = "https://service.sipd.kemendagri.go.id/pengeluaran/strict/sp2d/pembuatan/index?jenis=LS&status=LS&page=$page&limit=10";
$urlgu = "https://service.sipd.kemendagri.go.id/pengeluaran/strict/sp2d/pembuatan/index?jenis=GU&status=GU&page=$page&limit=10";
$urldok = "https://service.sipd.kemendagri.go.id/pengeluaran/strict/sp2d/pembuatan/cetak/$nomordok";
$pagination = 40 ;

function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,0,',','.');
	return $hasil_rupiah;
}
// batasan tambahan

//koneksi databse
$servername = "localhost";
$username = "root";
$password = "";
$database = "penatausahaan1";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Data Berhasil Ditambahkan";
//batas koneksi database

$curl = curl_init();
$url = "https://service.sipd.kemendagri.go.id/pengeluaran/strict/sp2d/pembuatan/cetak/$nomordok";

curl_setopt_array($curl, array(
  CURLOPT_URL => $urldok,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer $token"
  ),
));

$response = curl_exec($curl);
// $sipd = array($response);
// echo $response;

curl_close($curl);
$dt = json_decode($response, true);
$detail = $dt["gu"]["detail"];
// $pajak_potongan = $dt["gu"]["pajak_potongan"];

  $sp2d = "INSERT INTO sp2d (
    idhalaman,
    jenis,
    tahun,
    nomor_rekening,
    nama_bank,
    nomor_sp2d,
    tanggal_sp2d,
    nama_skpd,
    
    
    keterangan_sp2d,
    nilai_sp2d,
    nomor_spm,
    tanggal_spm,
    nama_ibu_kota,
    nama_bud_kbud,
    jabatan_bud_kbud,
    nip_bud_kbud
      )Values(
        '$nomordok',
        '".$dt["jenis"]."',
        '".$dt["gu"]["tahun"]."',
        '".$dt["gu"]["nomor_rekening"]."',
        '".$dt["gu"]["nama_bank"]."',
        '".$dt["gu"]["nomor_sp_2_d"]."',
        '".$dt["gu"]["tanggal_sp_2_d"]."',
        '".$dt["gu"]["nama_skpd"]."',
        
        
        '".$dt["gu"]["keterangan_sp2d"]."',
        '".$dt["gu"]["nilai_sp2d"]."',
        '".$dt["gu"]["nomor_spm"]."',
        '".$dt["gu"]["tanggal_spm"]."',
        '".$dt["gu"]["nama_ibu_kota"]."',
        '".$dt["gu"]["nama_bud_kbud"]."',
        '".$dt["gu"]["jabatan_bud_kbud"]."',
        '".$dt["gu"]["nip_bud_kbud"]."'
  )";
  $exsp2d= mysqli_query($conn,$sp2d)or die (mysqli_error($conn));

foreach($detail as $row){
  $belanja = "INSERT INTO belanja1 (
    norekening,
    uraian,
    nilai,
    id_sp2d
  )VALUES (
    '".$row["kode_rekening"]."',
    '".$row["uraian"]."',
    '".$row["nilai"]."',
    '$nomordok'
  )";
  $exbelanja= mysqli_query($conn,$belanja)or die (mysqli_error($conn));
}

// if ($pajak_potongan == null){
// echo "<h3>SP2D ini tidak memiliki Potongan</h3>";
// }else{
//   foreach($pajak_potongan as $row1){
//     $potonganpjk = "INSERT INTO potongan2 (
//       jenis_pajak,
//       nilai_pajak,
//       id_potongan,
//       ebilling
//     )VALUES (
//       '".$row1["nama_pajak_potongan"]."',
//       '".$row1["nilai_sp2d_pajak_potongan"]."',
//       '$nomordok',
//       '".$row1["id_billing"]."'
//     )";
//     $expotongan = mysqli_query($conn,$potonganpjk)or die (mysqli_error($conn));
//   }
// }
// }
// $countbelanja = count($detail_belanja);
// for($a=1;$a<$countbelanja;$a++)
// {

?>
