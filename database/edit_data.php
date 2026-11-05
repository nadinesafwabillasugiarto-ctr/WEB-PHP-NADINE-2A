<?php
// koneksi
include('koneksi.php');
 
// Cek apakah parameter id ada pada URL (untuk menampilkan data ke form)
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM pengurus WHERE id = '$id'";
    $data = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($data);
}

// Cek apakah form telah disubmit (untuk memproses perubahan data)
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $gender = $_POST['gender'];
    $gaji = $_POST['gaji'];
     
    // Perbaikan sintaks SQL UPDATE (tanpa tanda kurung nama kolom)
    $query_update = "UPDATE pengurus SET nama = '$nama', alamat = '$alamat', gender = '$gender', gaji = '$gaji' WHERE id = '$id'";
    $ubah = mysqli_query($conn, $query_update);
    
    if ($ubah) {
        echo "<p>Data berhasil diubah!</p>";
    } else {
        echo "<p>Gagal mengubah data: " . mysqli_error($conn) . "</p>";
    }
}
?>
<h1>Ubah Data</h1>
 
<form method="post" action="">
    <p>ID <input type="text" name="id" required="required" value="<?php echo isset($row['id']) ? $row['id'] : ''; ?>"> </p>
    <p>Nama <input type="text" name="nama" value="<?php echo isset($row['nama']) ? $row['nama'] : ''; ?>"> </p>
    <p>Alamat <textarea name="alamat"><?php echo isset($row['alamat']) ? $row['alamat'] : ''; ?></textarea> </p>
    <p>Gender 
        <input type="radio" name="gender" value="L" <?php if(isset($row['gender']) && !strcmp($row['gender'], "L")){ echo "CHECKED";} ?> > Laki-laki 
        <input type="radio" name="gender" value="P" <?php if(isset($row['gender']) && !strcmp($row['gender'], "P")){ echo "CHECKED";} ?> > Perempuan
    </p>
    <p>Gaji <input type="number" name="gaji" value="<?php echo isset($row['gaji']) ? $row['gaji'] : ''; ?>"></p>
    <p>
        <button type="submit">Ubah</button>
        <button type="reset">Batal</button>
    </p>
</form>

<br>
<a href="tampil_data.php">Kembali Untuk lihat Data</a>