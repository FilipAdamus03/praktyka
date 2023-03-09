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
      UserCard
    },
    data() {
      return {
        user: {
          name: 'filip adamus',
          email: 'filip.adamus@onte.eu',
          phone: '123456789',
          address: 'Krakow'
        }
      }
    }
  }
  </script>
  