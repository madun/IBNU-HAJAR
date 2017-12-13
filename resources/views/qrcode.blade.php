<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    {{-- <meta http-equiv="refresh" content="5"> --}}
    <title>QRCODE</title>
  </head>
  <body>
  <center>
    ini {{ Hash::check('0102121706000001',$generateQR) }}
    <br>
    <img id="qrcode" src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->margin(0)->size(250)->errorCorrection('H')->merge('image/slide-b1.png', .3, true)->generate($generateQR)) !!} ">
  </center>
  </body>
</html>
