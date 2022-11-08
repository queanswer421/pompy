<template>
    <div>
      <button @click="getProducts">Get Products</button>
      <div v-if="products.length">
          <div class="card" v-for="product in products" :key="product.id">
            <strong>ID: {{ product.id.name }}</strong><br />
            <small>name: {{ product.name }}</small><br />
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
        products: [],
        error: null
      };
    },
    methods: {
      getProducts: function() {
        fetch('http://127.0.0.1:8000/admin/producers')
          .then(response => response.json())
          .then(json => {
            this.products = json;
          })
          .catch(error => {
            this.error = error;
          });
      }
    }
  };
</script>


