<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="css/globals.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="desaign-dashboard">
        <div class="div">
            <?php include 'navbar.php'; ?>
            <div class="atas">
                <div class="text-nav">Detail Boking</div>
            </div>
            <div class="form">
             <div class="contact">
                    <div class="rectangle-2"></div>
            
            <div class="form-group kode-group">
    <label for="kode" class="full-kode">Kode <span class="text-message-1">*</span></label>
    <input type="text" id="kode" name="kode" class="form-control" placeholder="Masukkan kode lengkap" required>
</div>

<div class="form-group rooms-group">
    <label for="rooms" class="full-rooms">
        Rooms <span class="text-message-1">*</span>
    </label>
    <input type="text" id="rooms" name="rooms" class="form-control" placeholder="Masukkan nama kamar" required>
</div>

<div class="form-group checkin-group">
    <label for="checkin" class="full-checkin">
        Check-in <span class="text-message-1">*</span>
    </label>
    <input type="date" id="checkin" name="checkin" class="form-control" required>
</div>

<div class="form-group checkout-group">
    <label for="checkout" class="full-checkout">
        Check-out <span class="text-message-1">*</span>
    </label>
    <input type="date" id="checkout" name="checkout" class="form-control" required>
</div>

<div class="form-group durasi-group">
    <label for="durasi" class="full-durasi">
        Durasi (malam) <span class="text-message-1">*</span>
    </label>
    <input type="number" id="durasi" name="durasi" class="form-control" placeholder="Jumlah malam" min="1" required>
</div>

<div class="form-group total-biaya-group">
    <label for="total-biaya" class="full-total-biaya">
        Total Biaya <span class="text-message-1">*</span>
    </label>
    <input type="number" id="total-biaya" name="total_biaya" class="form-control" placeholder="Masukkan total biaya" min="0" required>
</div>

<button type="submit" class="tombol-kirim" id="btnKirim">Kirim</button>
            <?php include 'footer.php'; ?>
        </div>
    </div>
<script>
    const btnKirim = document.getElementById("btnKirim");

    const inputs = [
        document.getElementById("kode"),
        document.getElementById("rooms"),
        document.getElementById("checkin"),
        document.getElementById("checkout"),
        document.getElementById("durasi"),
        document.getElementById("total-biaya")
    ];

    function checkInputs() {
        const allFilled = inputs.every(input => input.value.trim() !== "");
        btnKirim.disabled = !allFilled;
    }

    // Pasang event listener untuk semua input
    inputs.forEach(input => {
        input.addEventListener("input", checkInputs);
    });

    // Reset form saat tombol diklik
    btnKirim.addEventListener("click", () => {
        alert("Pesan berhasil dikirim!");
        inputs.forEach(input => input.value = "");
        btnKirim.disabled = true;
    });
</script>
            <?php include 'footer.php'; ?>
        </div>
    </div>
</body>
</html>
