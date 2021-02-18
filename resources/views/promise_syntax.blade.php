<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>promise_syntaxes</title>
</head>
<body>
   <script>

      let p = new Promise((resolve, reject) => {
         let b = 1+1
         if(b ==2)
         {
            resolve("success");
         }
         else{
            reject('reject');
         }
      })
      p.then((message) => {
         console.log('this is successfully'+ message)

      }).catch((message) => {
         console.log('this is faild'+ message)

      })
   </script>

</body>
</html>
