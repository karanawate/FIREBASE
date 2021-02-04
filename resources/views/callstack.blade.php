<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <div id ="normaldate_id"></div>
   <div id="getdate_id"></div>
   <div id="getmonth_id"></div>
   <div id="getfullyear_id"></div>

      <script>
         // it show the redable format date
            var  normal_date = new Date();
            var normal_datee = normal_date.toDateString();
            document.getElementById('normaldate_id').innerHTML = normal_datee;

//using getdate method
            getdate = new Date();
            getdatee = getdate.getDate();
            document.getElementById('getdate_id').innerHTML = getdatee;

// using getmont
         getmonth = new Date();
         getmonthh = getmonth.getMonth();
         document.getElementById('getmonth_id').innerHTML = getmonthh;

// using get full year
   getyear = new Date();
   getyearr = getyear.getFullYear();
   document.getElementById('getfullyear_id').innerHTML = getyearr;

         </script>
      <!-- <script>
         function ajit()
         {
            console.log('He is boss');
            ranjeet();
         }
         function ranjeet()
         {
            console.log('He is his under boss');
            akshay()
         }
         function akshay()
         {
            console.log('he lead the team')
            karan()
         }
         function karan()
         {
            console.log('his in team akshay');
         }
         ajit();

      </script>
      time function use in javascipt -->

</body>
</html>
