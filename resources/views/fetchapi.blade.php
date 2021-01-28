<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <table class ="table table-stripped">
        <tbody id="data">

        </tbody>
   </table>
    <script>
       const fetch_api = 'https://jsonplaceholder.typicode.com/users';
       apifetch()
     async function apifetch()
       {
            const response = await fetch(fetch_api);
            const data = await response.json();
            //console.log(data)
             if(data.length > 0)
             {
                  var temp = '';

                  data.forEach( function(u){
                      temp +="<tr>";
                      temp +="<td>"+u.id+"</td>";
                      temp += "<td>"+u.name+"</td>";
                      temp += "<td>"+u.username+"</td></tr>";
                  })
                  document.getElementById('data').innerHTML = temp;
             }
       }

    </script>
</body>
</html>
