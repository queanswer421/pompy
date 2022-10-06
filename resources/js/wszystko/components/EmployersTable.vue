<template>
  <div>
       <v-toolbar color="rgba(0,0,0,0)" flat class="pt-2">
                <v-toolbar-title class=""> Pracownicy </v-toolbar-title>
              </v-toolbar>
              <v-simple-table class="transparent mt-n2">
                <template v-slot:default>
                  <thead>
                    <tr>
                      <th class="text-left">#</th>
                      <th class="text-left">Imię</th>
                      <th class="text-left">Nazwisko</th>
                      <th class="text-left">Email</th>
                      <th class="text-left">Firma</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="item in doctors" :key="item.id">
                      <td>{{ item.id }}</td>
                      <td>{{ item.first }}</td>
                      <td>{{ item.last }}</td>
                      <td>{{ item.email }}</td>
                      <td>{{ item.company }}</td>
                    </tr>
                  </tbody>
                </template>
              </v-simple-table>
  </div>
</template>

<script>
export default {
data : () => ({
     doctors: [
      {
        id: 1,
        first: "Dipto",
        last: "Rey",
        email: "dr@ifi1.pl",
        company: "IFI1",
      },
      {
        id: 2,
        first: "Łukasz",
        last: "Hussain",
        email: "lh@ifi1.pl",
        company: "IFI1",
      },
      {
        id: 3,
        first: "Maria",
        last: "Nowacka",
        email: "mn@.pl",
        company: "greenenergy",
      },
    ],
})
}
</script>

<style>

</style>