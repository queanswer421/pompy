<template>
  <div>
       <v-toolbar color="rgba(0,0,0,0)" flat class="pt-2">
                <v-toolbar-title class=""> Pompy ciepła </v-toolbar-title>
              </v-toolbar>
              <v-simple-table class="transparent mt-n2">
                <template v-slot:default>
                  <thead>
                    <tr>
                      <th class="text-left">#</th>
                      <th class="text-left">PRODUCENT</th>
                      <th class="text-left">LINIA</th>
                      <th class="text-left">MODEL</th>
                      <th class="text-left">MOC [KW]</th>
                      <th class="text-left">TYP [SPLIT/MONOBLOK]</th>
                      <th class="text-left">KATEGORIA</th>
                      <th class="text-left">A-20W35</th>
                      <th class="text-left">A-20W45</th>
                      <th class="text-left">A-20W55</th>
                      <th class="text-left">MOC AKUSTYCZNA [DBA]</th>
                      <th class="text-left">CENA</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="item in pumps" :key="item.id">
                      <td>{{ item.id }}</td>
                      <td>{{ item.producer.name }}</td>
                      <td>{{ item.line }}</td>
                      <td>{{ item.model }}</td>
                      <td>{{ item.power }}</td>
                      <td>{{ item.type }}</td>
                      <td>{{ item.category }}</td>
                      <td>{{ item.a1 }}</td>
                      <td>{{ item.a2 }}</td>
                      <td>{{ item.a3 }}</td>
                      <td>{{ item.power2 }}</td>
                      <td>{{ item.price }}</td>
                    </tr>
                  </tbody>
                </template>
              </v-simple-table>
  </div>
</template>

<script>
export default {
data : () => ({
  // PRODUCENT	LINIA	MODEL	MOC [KW]	TYP [SPLIT/MONOBLOK]	
  //KATEGORIA	A-20W35	A-20W45	A-20W55	MOC AKUSTYCZNA [DBA]	CENA
     pumps: [
      {
        id: 1,
        producer: "Dimplex",
        line: "LK",
        model: "23",
        power: "###",
        type: "###",
        category: "###",
        a1: "###",
        a2: "###",
        a3: "###",
        power2: "###",
        price: "###"
      },
      {
        id: 2,
        producer: "Buderus",
        line: "zz",
        model: "qwe",
        power: "###",
        type: "###",
        category: "###",
        a1: "###",
        a2: "###",
        a3: "###",
        power2: "###",
        price: "###"
      },
    ],
})
}
</script>

<style>

</style>