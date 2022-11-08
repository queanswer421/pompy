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
                    <tr v-for="item in employers" :key="item.id">
                        <td>{{ item.id }}</td>
                        <td>{{ item.name }}</td>
                        <td>{{ item.surname }}</td>
                        <td>{{ item.email }}</td>
                        <td>{{ item.company }}</td>
                    </tr>
                </tbody>
            </template>
        </v-simple-table>
    </div>
</template>

<script>
import authAxios from "../auth-axios.js";
export default {
    data: () => ({
        token: null,
        employers: [],
    }),
    created() {
        this.initialize();
    },
    methods: {
        async initialize() {
            try {
                this.token = localStorage.getItem("token");
                let { data } = await authAxios.get("/admin/employers", {
                    headers: {
                        Authorization: "Bearer " + this.token,
                    },
                });
                // console.log(data);
                this.employers = data.data;
            } catch (e) {
                console.log(e);
            }
        },
    },
};
</script>

<style></style>
