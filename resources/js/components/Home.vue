<template>
    <div>
      <h1>Strona domowa</h1>
      <UserCard :user="user" />
    </div>
  </template>
  
  <script>
  import UserCard from '../components/UserCard.vue'
  
  export default {
  name: 'Home',
  components: {
    UserDetails
  },
  data() {
    return {
      users: []
    }
  },
  methods: {
    onUserDisplayed() {
      console.log('Użytkownik wyświetlony i pobrany z serwera');
    }
  },
  mounted() {
    axios.get('/api/users')
      .then(response => {
        this.users = response.data;
      })
      .catch(error => {
        console.log(error);
      });
  }
}

  