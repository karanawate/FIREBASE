<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!-- Oxgen google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Oxygen+Mono&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body{
            font-family: 'Oxygen Mono', monospace;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
    <div id="showdata"></div>
    <h1 class="text-center mb-1">Json data</h1>
    <div class="table-responsive" >
        <table  class="table table-bordered table-hover table-striped">
                <thead class="bg-dark text-white">
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">UserName</th>
                    </tr>
                </thead>
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
                    // data show in screen display
                    var getjson = JSON.stringify(data);
                    document.getElementById('showdata').innerHTML = getjson;
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
        </div>
    </div>
</body>
</html>
