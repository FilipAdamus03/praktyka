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
  export default {
    name: 'UserCard',
    props: {
      user: {
        type: Object,
        required: true
      }
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