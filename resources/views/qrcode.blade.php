<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel Generate QR Code Examples</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>

<div class="container mt-5 pt-3">
    <h3 class="text-center my-lg-4 pt-lg-5 mt-4 mb-2 pt-2">Simple QR code generator</h3>
    <div class="container-fluid text-center d-flex justify-content-center my-lg-2 py-lg-3">
        <div class="py-5" style="width: 18rem;">
            <span id="qrCode" class="pb-2"></span>
            <textarea class="form-control mt-4" name="text" id="text" rows="3"></textarea>
            <div class="my-3">
                <button type="button" onclick="submitQr()" class="btn btn-primary btn-sm my-3 mr-1">Generate</button>
                <button type="button" onclick="downloadQr()" id="export" class="btn btn-warning btn-sm my-3 d-none">
                    Export
                </button>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container-fluid text-center d-flex justify-content-center my-lg-5 py-lg-3 my-3 pt-4">
        <div class="pt-lg-5 mt-lg-5" style="width: 18rem;">
            <p>©
                <script>document.write(new Date().getFullYear())</script>
                - Made By <a href="https://kristoff.my.id" class="text-decoration-none">Kristoff</a></p>
        </div>
    </div>
</footer>

<script>

    function submitQr() {
        let text = document.getElementById('text').value;
        const qrCode = document.getElementById('qrCode');
        // qrCode.innerHTML = `<img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=${text}">`;

        qrCode.innerHTML = `<img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=${text}">`;

        document.querySelector('#export').classList.remove('d-none');
    }

    function downloadQr() {
        const qrCodeBaseUri = 'https://api.qrserver.com/v1/create-qr-code/?',
            params = {
                data: document.getElementById('text').value,
                size: '160x160',
                margin: 0,
                download: 1
            };
        window.location.href = qrCodeBaseUri + Object.keys(params).map(function (key) {
            return key + '=' + params[key];
        }).join('&');
    }
</script>

</body>
</html>
