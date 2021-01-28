<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
       const fetch_api = 'https://jsonplaceholder.typicode.com/users';
       apifetch()
     async function apifetch()
       {
            const response = await fetch(fetch_api);
            const data = await response.json();
            console.log(data);
       }


    </script>
</body>
</html>
