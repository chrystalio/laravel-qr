<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel Generate QR Code Examples</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
<h3 class="text-center my-lg-5 pt-lg-5 my-4 pt-4">Simple QR code generator</h3>
<div class="container-fluid text-center d-flex justify-content-center my-lg-5 py-lg-3">
    <div class="py-5" style="width: 18rem;">
        <form>
            <span>{!! QrCode::size(180)->generate('hello world') !!}</span>
            <div class="form-group my-5">
                <textarea class="form-control" name="text" id="text" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Generate</button>
        </form>
    </div>
</div>
<footer>
    <div class="container-fluid text-center d-flex justify-content-center my-lg-5 py-lg-3 my-3 pt-4">
        <div class="pt-lg-5 mt-lg-5" style="width: 18rem;">
            <p>©<script>document.write(new Date().getFullYear())</script> - Made with Laravel By <a href="https://kristoff.my.id">Kristoff</a></p>
        </div>
    </div>
</footer>
</body>
</html>
