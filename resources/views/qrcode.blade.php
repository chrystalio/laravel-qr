<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel Generate QR Code Examples</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>


<div class="container my-5 py-4">

<h3 class="text-center my-lg-5 pt-lg-5 my-4 pt-4">Simple QR code generator</h3>
<div class="container-fluid text-center d-flex justify-content-center my-lg-5 py-lg-3">
    <div class="py-5" style="width: 18rem;">
        <span id="qrCode"></span>
        <textarea class="form-control" name="text" id="text" rows="3"></textarea>
        <button type="button" onclick="submitQr()" class="btn btn-primary my-3">Generate</button>

    </div>
</div>
</div>
<footer>
    <div class="container-fluid text-center d-flex justify-content-center my-lg-5 py-lg-3 my-3 pt-4">
        <div class="pt-lg-5 mt-lg-5" style="width: 18rem;">
            <p>©
                <script>document.write(new Date().getFullYear())</script>
                - Made with Laravel By <a href="https://kristoff.my.id">Kristoff</a></p>
        </div>
    </div>
</footer>

<script>
    function submitQr() {
        const text = document.getElementById('text').value;
        const qr = document.querySelector('span');
        qr.innerHTML = "{!! QrCode::generate('hello world') !!}";

        console.log(qr);
    }
</script>

</body>
</html>
