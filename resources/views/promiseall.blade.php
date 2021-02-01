<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>promise return value</title>
</head>
<body>
      <!-- <script>
         const fetch_users = fetch('users.json');
         const fetch_colors = fetch('colors.json');
         Promise.all([fetch_users, fetch_colors]).then(function (response){

         });
      </script> -->
         <script>
            const getarrow = () => {
               let a = 4;
               let b = 5;
               return a+b;
            }
            console.log(getarrow());
         </script>
</body>
</html>
