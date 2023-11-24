<template>
    <v-container>
      <v-row justify="center">
        <v-col cols="12" sm="8" md="6">
          <v-card class="elevation-12">
            <v-toolbar color="primary" dark>
              <v-toolbar-title>Login</v-toolbar-title>
            </v-toolbar>
  
            <v-card-text class="pa-5">
              <v-form @submit.prevent="login">
                <v-text-field v-model="username" label="Username" required></v-text-field>
                <v-text-field v-model="password" label="Password" type="password" required></v-text-field>
  
                <v-btn type="submit" color="primary" block class="mt-4">Login</v-btn>
              </v-form>
            </v-card-text>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
  </template>
  
  <script>
  export default {
    data() {
      return {
        username: '',
        password: '',
      };
    },
    methods: {
      login() {
        // Perform login logic here
        console.log('Username:', this.username);
        console.log('Password:', this.password);
        // Add your authentication logic here (e.g., send request to server)
      }
    }
  };
  </script>
  
  <style scoped>
  /* Add custom styles here if needed */
  </style>
  