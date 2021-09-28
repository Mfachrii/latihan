<!-- halaman galeri yang berisi foto-foto yang ada di menu makanan -->
<link href="../css/layout.css" rel="stylesheet">
<script src="galeri.js"></script>
            

<?php require('header.php'); ?>
		<main>
			
            <div class="gallery">
            <?php
            // mencari list file image yang ada di folder galeri
            $dir = __DIR__ . DIRECTORY_SEPARATOR . "galeri" . DIRECTORY_SEPARATOR; // mengambil folder dengan nama folder galeri 
            $images = glob($dir . "*.{jpg,png}", GLOB_BRACE); // mengambil file image dengan extension
            
            // menampilkan gambar
            foreach ($images as $i) {// perulangan dengan jumlah maksimal sesuai dengan banyak data
            printf("<img src='galeri/%s'/>", basename($i));// menampilkan gambar pada website 
            }
            ?></div>
		</main>
<?php require('footer.php'); ?>