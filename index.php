<html>
  <head>
    <title>Menghitung Gaji Pokok</title>
  </head>
  <body>
    <form action="hitung_nilai.php" method="post">
      <table>
        <tr>
          <td colspan="2" align="center">
            <h1>Menghitung Nilai Akhir Mahasiswa</h1>
          </td>
        </tr>
        <tr>
          <td>NIM</td>
          <td><input name="nim" type="text" size="30" maxlength="50" placeholder="Masukan nim anda"/></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td><input name="nama" type="text" size="30" maxlength="50" placeholder="Masukan nama anda"/></td>
        </tr>
        <tr>
          <td>Nilai Absen</td>
          <td><input name="absen" type="text" size="30" maxlength="50" placeholder="Masukan nilai absen anda"/></td>
        </tr>
        <tr>
          <td>Nilai Tugas</td>
          <td><input name="tugas" type="text" size="30" maxlength="50" placeholder="Masukan nilai tugas anda"/></td>
        </tr>
        <tr>
          <td>UTS</td>
          <td><input name="uts" type="text" size="30" maxlength="50" placeholder="Masukan nilai uts anda"/></td>
        </tr>
        <tr>
          <td>UAS</td>
          <td><input name="uas" type="text" size="30" maxlength="50" placeholder="Masukan nilai uas anda"/></td>
        </tr>
        <tr>
          <td>
            <input type="submit" value="Hitung Nilai Akhir">
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
