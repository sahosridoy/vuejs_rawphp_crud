<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <title>vue js </title>
   <link rel="stylesheet" href="css/style.css">
</head>

<body>
   <div class="box">
      <div class="container">

         <div class="card">
            <div class="card_header">{{ headerTitle }}</div>
            <div class="card_body">
               <table id="user">
                  <tr>
                     <th>id</th>
                     <th>name</th>
                     <th>email</th>
                     <th>action</th>
                  </tr>
                  <tr v-for="alluser in allusers">
                     <td>{{ alluser.id }}</td>
                     <td>{{ alluser.name }}</td>
                     <td>{{ alluser.email }}</td>
                     <td>
                        <ul>
                           <li><button class="danger">delete</button></li>
                           <li><button class="update">update</button></li>
                        </ul>
                     </td>
                  </tr>
               </table>
            </div>
         </div>




         <!-- <ul>
         <li v-for='post in posts'>
            <h4>{{ post.title }}</h4>
            <span>{{ post.id }}</span>
         </li>
      </ul> -->
      </div>
   </div>

   <script src="js/axios.min.js"></script>
   <script type="text/javascript" src="js/vue.js"></script>
   <script type="text/javascript" src="js/app.js"></script>
</body>

</html>