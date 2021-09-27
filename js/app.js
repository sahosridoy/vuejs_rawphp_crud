// Vue.component("card", {
//   props: ["headerTitle", "users"],

//   template: `<div class="card">
//                <div class="card_header">{{ headerTitle }}</div>
//                <div class="card_body">
//                   <table id="user">
//                      <tr>
//                         <th>id</th>
//                         <th>name</th>
//                         <th>email</th>
//                         <th>action</th>
//                      </tr>
//                      <tr v-for="user in users">
//                         <td>{{user}}</td>
//                         <td>sahos</td>
//                         <td>sahos@email.com</td>
//                         <td>
//                            <ul>
//                               <li><button class="danger">delete</button></li>
//                               <li><button class="update">update</button></li>
//                            </ul>
//                         </td>
//                      </tr>
//                   </table>
//                </div>
//               </div>`,
// });

var box = new Vue({
  el: ".box",
  data: {
    headerTitle: "Users",
    allusers: {},
  },

  methods: {
    getData: function () {
      axios
        .get("http://127.0.0.1/vuejs_rawphp_crud/include/function.php")
        .then(function (response) {
          box.allusers = response.data.users;
        });
    },
  },
  mounted: function () {
    this.getData();
  },
});
