<template>
    <div>
      <button @click="getCompanies">Pobierz firmy</button>
      <div v-if="companies.length">
          <div class="card" v-for="company in companies" :key="company.id">
            <strong>ID: {{ company.id }}</strong><br />
            <small>name: {{ company.name }}</small><br />
            <!-- <small>Phantom value: {{ product.pantone_value }}</small> -->
          </div>
      </div>
      <p v-if="error">{{ error }}</p>
    </div>
  </template>

<script>
export default {
    data() {
      return {
        companies: [],
        error: null
      };
    },
    methods: {
      getCompanies: function() {
        fetch('http://127.0.0.1:8000/admin/companies')
          .then(response => response.json())
          .then(json => {
            this.companies = json.data;
          })
          .catch(error => {
            this.error = error;
          });
      }
    }
  };
</script>


