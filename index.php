
<!DOCTYPE html>
<html>

<head>
  <title>Coronavirus over the World - Live Map</title>
  <meta charset="utf-8">
  <link href="dist/svgMap.min.css" rel="stylesheet">
  <script src="dist/svgMap.min.js"></script>
</head>

<body>
  <div class="demo-wrapper">

    <!-- Demo GPD -->

    <div class="demo-container">
      <h2>Coronavirus over the World - Live Map</h2>
      <h3> Total confirmed cases: 2,798 </h3>
      <a href = "https://contar.io/p/stefanut999"> <p align="right">Contact for updates</p> </a>
      <div id="svgMapGPD"></div>
      <script src="data/gdp.js"></script>
      <script>
        new svgMap({
          targetElementID: 'svgMapGPD',
          data: svgMapDataGPD
        });
      </script>
    </div>

  </div>

</body>
</html>
