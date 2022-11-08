<template>
  <div>
    <button @click="getPumps">Pobierz pompy</button>
    <div v-if="pumps.length">
        <div class="card" v-for="pump in pumps" :key="pump.id">
          <strong>ID: {{ pump.id }}</strong><br />
          <small>producent: {{ pump.producer.name }}</small><br />
          <small>line: {{ pump.line }}</small><br />
          <small>model: {{ pump.model }}</small><br />
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
        pumps: [],
        error: null
      };
    },
    methods: {
      getPumps: function() {
        fetch('http://localhost:8000/admin/pumps')
          .then(response => response.json())
          .then(json => {
            this.pumps = json.data;
          })
          .catch(error => {
            this.error = error;
          });
      }
    }
  };
</script>


