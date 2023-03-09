import Vue from 'vue'
import VueRouter from 'vue-router'
import axios from 'axios';

Vue.use(VueRouter)

const router = new VueRouter({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/about',
      name: 'about',
      component: About
    },
    {
      path: '/contact',
      name: 'contact',
      component: Contact
    }
  ]
})

new Vue({
  router,
  data: {
    users: []
  },
  created() {
    axios.get('/api/users')
      .then(response => {
        this.users = response.data;
      })
      .catch(error => {
        console.log(error);
      });
  },
  render: h => h(App),
}).$mount('#app')

