<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>logitude: <span id="txtlongitude"></span></p>
    <p>altitude : <span id="txtaltitude"></span></p>
    <script>
       const fetch_api = 'https://api.wheretheiss.at/v1/satellites/25544';
       apifetch()
     async function apifetch()
       {
            const response = await fetch(fetch_api);
            const data = await response.json();
            const {longitude, altitude} = data
            console.log(longitude);
            console.log(altitude);
            document.getElementById('txtlongitude').textContent = longitude;
            document.getElementById('txtaltitude').textContent = altitude;
       }

    </script>
</body>
</html>
