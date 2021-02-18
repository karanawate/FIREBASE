<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <script>
      const body = document.body
      const div = document.createElement("div")
      div.innerHTML = "<h1>Hello Karan</h1>"
      body.append(div)
   </script>
   <!-- <div id ="normaldate_id"></div>
   <div id="getdate_id"></div>
   <div id="getmonth_id"></div>
   <div id="getfullyear_id"></div>
   <div id="gethours"></div>
   <div id="getminite_id"></div>
   <div id="demo"></div>
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

// get hours & getminitus & getseconds
   gethour = new Date();
   gethourr = gethour.getHours();
   document.getElementById('gethours').innerHTML = gethourr;

   //get minite
   getminite = new Date();
   getminitee = getminite.getMinutes();
   document.getElementById('getminite_id').innerHTML = getminitee;

   //good code practise for one line code
         const foo = {name: 'karan', age:25, education:'Bsc.IT' }
         const second = {name: 'tome', age:28, education:'graduate' }
         const third = {name: 'tome', age:28, education:'graduate' }

         console.log()

      //document.getElementById('demo').innerHTML = "my name is " + foo.name + " and  age is " + foo.age + " i m complited my " +foo.education;

      // template stirng

      document.getElementById('demo').innerHTML = `my name is ${foo.name} and age is ${foo.age} i m complited ${foo.education}`;
      // cheque true or false ya logical operator

      var a = 50;
      var b = 40;
      console.log(a >= b);








 </script>
      <!-- <script> -->
         <!-- function ajit()
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

      </script> -->

<!-- debug at javascript technique -->


</body>
</html>
