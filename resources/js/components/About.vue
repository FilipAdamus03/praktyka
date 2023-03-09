<template>
    <div>
      <h1>About Page</h1>
      <user-card :user-data="userData"></user-card>
    </div>
  </template>
  
  <script>
  import UserCard from '../components/UserCard.vue'
  
  export default {
    components: {
      UserCard
    },
    data() {
      return {
        userData: {
          name: 'John Smith',
          age: 30,
          email: 'john.smith@example.com'
        }
      }
    }
  }
  </script>
  