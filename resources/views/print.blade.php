<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Barcode Label</title>
  <style>
    @media print {
      body * {
        visibility: hidden;
      }
      #label, #label * {
        visibility: visible;
      }
      #label {
        position: absolute;
        left: 0;
        top: 0;
      }
    }

    body {
      font-family: Arial, sans-serif;
      padding: 20px;

    }

    #label {
      width: 3.6cm;
      height: 2.28cm;
      border: 1px solid black;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 2mm;
    }

    svg {
      width: 90%;
      height: auto;
    }

    .text {
      font-size: 10px;
      text-align: center;
      margin-top: 2mm;
    }
    .text2 {
      font-size: 10px;
    }

    button {
      margin-top: 20px;
      padding: 5px 10px;
    }
  </style>
</head>
<body>

<center>
  <div id="label">
    <div class="text2">{{$product_name}}</div>
    <svg id="barcode"></svg>
    <div class="text">{{$price_code}}</div>
  </div>

  <button onclick="window.print()">Print Label</button>
</center>

  <!-- JsBarcode Library -->
  <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.5/dist/JsBarcode.all.min.js"></script>
  <script>
    JsBarcode("#barcode", "{{ $price_code }}", {
      format: "CODE128",
      displayValue: false,
      height: 40
    });
    window.onload = function() {
        window.print();
    };
  </script>
</body>
</html>
