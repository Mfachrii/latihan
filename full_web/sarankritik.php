<!-- halaman saran & kritik digunakan untuk konsumen memberi nilai atau feedback untuk restaurant -->

<?php require('header.php'); ?>
    <main>
        <div class="sarankritik">
            <div class="sarankritik-box">
                <form method="POST" class="form">
                    <div class="form-group">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="name" class="form-control" placeholder="Your Name..." tabindex="1" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Email..." tabindex="2" required>
                    </div>
                    <div class="form-group">
                        <label for="Subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" placeholder="Subject..." tabindex="2" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Message</label>
                        <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
                    </div>
                    <div class="btn-box">
                        <button type="submit" class="btn" onclick="myFunction()">Kirim Pesan</button>
                    </div>
                    <script> function myFunction() {
                        alert("Terima Kasih Atas Saran & Kritiknya");}</script>
                </form>
            </div>
        </div>
    </main>
<?php require('footer.php'); ?>