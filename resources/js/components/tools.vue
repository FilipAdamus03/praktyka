<template>
    <div>
      <h1>Welcome to my app!</h1>
      <user-details @userDisplayed="onUserDisplayed"></user-details>
    </div>
  </template>
  
  <script>
  import UserDetails from '../components/UserCard.vue'
  
  export default {
    name: 'Home',
    components: {
      UserDetails
    },
    methods: {
      onUserDisplayed() {
        console.log('User displayed!');
      }
    }
  }
  </script>
  