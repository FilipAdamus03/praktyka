<template>
    <div class="card">
      <div class="card-header">
        <h2>{{ user.name }}</h2>
      </div>
      <div class="card-body">
        <p>{{ user.email }}</p>
        <p>{{ user.phone }}</p>
        <p>{{ user.address }}</p>
      </div>
    </div>
  </template>
  
  <script>
  import { EventEmitter } from 'events';
  
  export default {
    name: 'UserCard',
    props: {
      user: {
        type: Object,
        required: true
      }
    },
    methods: {
      notifyParent() {
        this.$emit('user-loaded');
      }
    },
    created() {
      axios.get('/api/users')
        .then(response => {
          console.log(response.data);
          this.notifyParent();
        })
        .catch(error => {
          console.log(error);
        });
    }
  }
  </script>
  
  <style>
  .card {
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 10px;
  }
  
  .card-header {
    font-size: 18px;
    font-weight: bold;
  }
  
  .card-body {
    font-size: 14px;
  }
  </style>