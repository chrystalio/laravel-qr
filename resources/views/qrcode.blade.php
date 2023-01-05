<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel Generate QR Code Examples</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
<h3 class="text-center my-5 pt-5">Simple QR code generator</h3>
<div class="container-fluid text-center d-flex justify-content-center my-5 py-3">
    <div class="py-5" style="width: 18rem;">
        <span>{!! QrCode::size(180)->generate('https://kristoff.my.id') !!}</span>
            <div class="form-group my-5">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Generate</button>
        </form>
    </div>
</div>
</body>
</html>
