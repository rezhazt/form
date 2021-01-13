<!DOCTYPE html>
<html>
<head>
<title>Form Pendaftaran Anggota</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2>FORMULIR BAGI TAMU DAN PELAMAR</h2>
<p>Sesuai Keputusan Menteri Kesehatan Nomor HK.01.07/MENKES/328/2020 tentang pengendalian COVID-19 di tempat kerja. Serta demi kesehatan dan keselamatan bersama di area PT Globalindo Intimates, kejujuran anda kami harapkan dalam menjawab pertanyaan dibawah ini, isi dengan pilihan yang sesuai pada kolom jawaban bila sesuai dengan pernyataan yang ada.</p>
    <form action="menyimpan-daftar.php" method="post">
        <div class="form-group">
            <label>Nomor KTP/KITAS/Password</label>
            <input type="interger" name="idCard" class="form-control" placeholder="Masukan Nomor KTP/KITAS/Password" />
        </div>
		<div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="fullname" class="form-control" placeholder="Masukan Nama Lengkap" />
        </div>
		<div class="form-group">
            <label>No HP Whatapps</label>
            <input type="text" name="wa" class="form-control" placeholder="Masukan No HP Whatapps" />
        </div>
		<div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Masukan Email" />
        </div>	
		<div class="form-group">
            <label>Tanggal Berkunjung</label>
            <input type="date" name="visitDate" class="form-control" placeholder="Masukan Tanggal Berkunjung" />
        </div>
      <div class="form-group">
            <label>Tujuan Berkunjung</label><br>      
            <tr class="form-control">
            <input type="radio" name="tujuan" value="pelamar" > Pelamar<br>
    		<input type="radio" name="tujuan" value="tamu"> Tamu<br>
            </tr>
      </div>
      <h4>PENILAIAN RESIKO COVID 19</h4>
      <div class="form-group">
            <label>Apakah anda sedang / pernah mengalami demam/batuk/pilek/sakit tenggorokan/sesak nafas dalam 14 hari terakhir?</label><br>      
            <tr class="form-control">
            <input type="radio" name="test1" value="1" > Iya<br>
    		<input type="radio" name="test1" value="0"> Tidak<br>
            </tr></div>
      
      <div class="form-group">
            <label>Dalam 14 hari terakhir, apakah anda pernah menggunakan transportasi umum? (Bus, Pesawat, Kereta, Kapal dan Moda Transportasi lainnya)</label><br>      
            <tr class="form-control">
            <input type="radio" name="test2" value="1" > Iya<br>
    		<input type="radio" name="test2" value="0"> Tidak<br>
            </tr></div>
      <div class="form-group">
            <label>Dalam 14 hari terakhir, apakah anda pernah memiliki riwayat kontak langsung dengan kasus konfirmasi, probable atau suspek COVID-19?</label><br>      
            <tr class="form-control">
            <input type="radio" name="test3" value="1" > Iya<br>
    		<input type="radio" name="test3" value="0"> Tidak<br>
            </tr></div>
      <div class="form-group">
            <label>Dalam 14 hari terakhir, apakah anda pernah mengikuti kegiatan yang dihadiri oleh orang banyak?</label><br>      
            <tr class="form-control">
            <input type="radio" name="test4" value="1" > Iya<br>
    		<input type="radio" name="test4" value="0"> Tidak<br>
            </tr></div>
      <div class="form-group">
            <label>Dalam 14 hari terakhir, apakah anda pernah melakukan perjalanan keluar kota/negara lain?	</label><br>      
            <tr class="form-control">
            <input type="radio" name="test5" value="1" > Iya<br>
    		<input type="radio" name="test5" value="0"> Tidak<br>
            </tr></div>
      <div class="form-group">
            <label>Dalam 14 hari terakhir, apakah anda pernah keluar rumah / tempat umum ? (pasar, fasilitas kesehatan, kerumunan dan kegiatan lainnya)</label><br>      
            <tr class="form-control">
            <input type="radio" name="test6" value="1" > Iya<br>
    		<input type="radio" name="test6" value="0"> Tidak<br>
            </tr></div>
      <div class="form-group">
            <label>Apakah anda sedang / pernah mengalami sakit kepala/nyeri otot/gatal-gatal/infeksi mata/hilang penciuman/sakit perut dalam 14 hari terakhir?</label><br>      
            <tr class="form-control">
            <input type="radio" name="test7" value="1" > Iya<br>
    		<input type="radio" name="test7" value="0"> Tidak<br>
            </tr></div>
      <div class="form-group">
            <label>Menyatakan bahwa saya memberikan pernyataan dengan sejujur-jujurnya. Apabila dikemudian hari pernyataan saya tdak benar/jujur, saya bersedia untuk bertanggung jawab atas apa yang saya nyatakan. Pastikan data yang anda masukkan sudah benar sebelum menyelesaikan form penilaian online ini.</label><br>      
            <tr class="form-control">
            <input type="radio" name="test8" value="1" > Iya<br>
    		<input type="radio" name="test8" value="0"> Tidak<br>
            </tr></div>
      
    
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
</body>
</html>