<template>
  <div>
    <v-toolbar color="rgba(0,0,0,0)" flat class="pt-2">
      <v-toolbar-title class=""> Firmy </v-toolbar-title>
    </v-toolbar>
    <v-simple-table class="transparent mt-n2">
      <template v-slot:default>
        <thead>
          <tr>
            <th class="text-left">#</th>
            <th class="text-left">Firma</th>
            <th class="text-left">Email</th>
            <th class="text-left">Telefon</th>
            <th class="text-left">Miasto</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="item in companies" :key="item.id">
            <td>{{ item.id }}</td>
            <td>{{ item.name }}</td>
            <td>{{ item.email }}</td>
            <td>{{ item.phone }}</td>
            <td>{{ item.city }}</td>
          </tr>
        </tbody>
      </template>
    </v-simple-table>
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
      async getCompanies(){
        try {
          let {data} = await this.axios.get('http://127.0.0.1:8000/admin/companies');
          this.companies = data.data;
        } catch (e) {
          console.log(e)
        }
      }
      // getCompanies: function() {
      //   fetch('http://127.0.0.1:8000/admin/companies')
      //     .then(response => response.json())
      //     .then(json => {
      //       this.companies = json.data;
      //     })
      //     .catch(error => {
      //       this.error = error;
      //     });
      // }
    },
    created () {
      this.getCompanies();
    }
}
</script>

<style>

</style>