<template>
  <v-container>
    <v-row justify="center">
      <v-col cols="12" sm="8" md="6">
        <v-card class="elevation-12">
          <v-toolbar color="primary" dark>
            <v-toolbar-title>Applicant Registration</v-toolbar-title>
          </v-toolbar>

          <v-card-text class="pa-5">
            <v-form ref="registrationForm" @submit.prevent="save">
              <v-text-field v-model="full_name" label="Full Name" required></v-text-field>
              
              <v-select
                v-model="status"
                :items="['Single', 'Married']"
                label="Marital Status"
                required
              ></v-select>
              
              <v-select
                v-model="category"
                :items="['Employed', 'Unemployed']"
                label="Category"
                required
              ></v-select>
              
              <v-text-field
              v-model="contact_number"
              label="Contact Number"
              type="text"
              required
              :rules="[
                value => !!value || 'Contact number is required',
                value => /^\d+$/.test(value) || 'Contact number must contain only digits',
                value => (value && value.length === 11) || 'Contact number must be 11 digits'
              ]"
            ></v-text-field>
              
              <v-text-field v-model="address" label="Address" required></v-text-field>
              
              <v-text-field
                v-model="email"
                label="Email"
                type="email"
                required
                :rules="[
                  value => !!value || 'Email is required',
                  value => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value) || 'Invalid email format'
                ]"
              ></v-text-field>
              
              <v-text-field
  v-model="password"
  label="Password"
  type="password"
  required
  :rules="[
    value => !!value || 'Password is required',
    value => (value && value.length >= 15) || 'Password must be at least 15 characters',
  ]"
></v-text-field>

              
              <v-btn type="submit" color="primary" block class="mt-4">Submit</v-btn>
            </v-form>
          </v-card-text>

          <v-dialog v-model="showDialog" max-width="400">
            <v-card>
              <v-card-title class="headline">Successful Registration!</v-card-title>
              <v-card-actions>
                <v-btn color="success" @click="closeDialog">OK</v-btn>
              </v-card-actions>
            </v-card>
          </v-dialog>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      full_name: '',
      status: '',
      category: '',
      contact_number: '',
      address: '',
      email: '',
      password: '',
      showDialog: false,
    };
  },
  methods: {
    async save() {
  // Access the form validation status
  const isFormValid = await this.$refs.registrationForm.validate();

  if (isFormValid) {
    try {
      await axios.post('save', {
        full_name: this.full_name,
        status: this.status,
        category: this.category,
        contact_number: this.contact_number,
        address: this.address,
        email: this.email,
        password: this.password,
      });
      this.showDialog = true;
    } catch (error) {
      console.error(error);
    }
  } else {
    // Handle invalid form data
    console.log('Form is not valid. Please correct the errors.');
  }
},


    closeDialog() {
      this.showDialog = false;
      // Clear text fields
      this.full_name = '';
      this.status = '';
      this.category = '';
      this.contact_number = '';
      this.address = '';
      this.email = '';
      this.password = '';
    },
  },
};
</script>
