<template>
    <v-data-table
        :headers="headers"
        :items="companies"
        sort-by="companies"
        class="elevation-1"
        :footer-props="{ itemsPerPageText: 'Wyników na stronie' }"
    >
        <template v-slot:top>
            <v-toolbar flat>
                <v-toolbar-title>Firmy</v-toolbar-title>
                <v-divider class="mx-4" inset vertical></v-divider>
                <v-spacer></v-spacer>
                <v-dialog v-model="dialog" max-width="800px">
                    <!-- <template v-slot:activator="{ on, attrs }">
                        <v-btn
                            color="primary"
                            dark
                            class="mb-2"
                            v-bind="attrs"
                            v-on="on"
                        >
                            Dodaj firmę
                        </v-btn>
                    </template> -->
                    <v-card>
                        <v-card-title>
                            <span class="text-h5">{{ formTitle }}</span>
                        </v-card-title>

                        <v-card-text>
                            <v-container>
                                <v-row>
                                    <v-col cols="12" sm="6" md="4">
                                        <v-text-field
                                            v-model="editedItem.name"
                                            label="Firma"
                                        ></v-text-field>
                                    </v-col>
                                </v-row>

                                <v-row>
                                    <v-col cols="12" sm="8" md="6">
                                        <v-text-field
                                            v-model="editedItem.email"
                                            label="Email"
                                        ></v-text-field>
                                    </v-col>
                                </v-row>
                                <v-row>
                                    <v-col cols="12" sm="6" md="4">
                                        <v-text-field
                                            v-model="editedItem.password"
                                            label="Password"
                                        ></v-text-field>
                                    </v-col>
                                </v-row>
                                <!-- <v-row>
                  <v-col
                    cols="12"
                    sm="6"
                    md="4"
                  >
                    <v-text-field
                      v-model="editedItem.city"
                      label="Miasto"
                    ></v-text-field>
                  </v-col>
                </v-row> -->
                            </v-container>
                        </v-card-text>

                        <v-card-actions>
                            <v-spacer></v-spacer>
                            <v-btn color="blue darken-1" text @click="close">
                                Cancel
                            </v-btn>
                            <v-btn color="blue darken-1" text @click="save">
                                Save
                            </v-btn>
                        </v-card-actions>
                    </v-card>
                </v-dialog>
                <v-dialog v-model="dialogDelete" max-width="500px">
                    <v-card>
                        <v-card-title class="text-h5"
                            >Czy chcesz usunąć producenta?</v-card-title
                        >
                        <v-card-actions>
                            <v-spacer></v-spacer>
                            <v-btn
                                color="blue darken-1"
                                text
                                @click="closeDelete"
                                >Cancel</v-btn
                            >
                            <v-btn
                                color="blue darken-1"
                                text
                                @click="deleteItemConfirm"
                                >OK</v-btn
                            >
                            <v-spacer></v-spacer>
                        </v-card-actions>
                    </v-card>
                </v-dialog>
            </v-toolbar>
        </template>
        <!-- ############## -->
        <template v-slot:[`item.actions`]="{ item }">
            <!-- <template v-slot:item.actions="{ item }"> -->
            <v-icon small class="mr-2" @click="editItem(item)">
                mdi-pencil
            </v-icon>
            <v-icon small @click="deleteItem(item)"> mdi-delete </v-icon>
        </template>
        <template v-slot:no-data>
            <v-btn color="primary" @click="initialize"> Reset </v-btn>
        </template>
    </v-data-table>
</template>

<script>
import authAxios from "../auth-axios.js";
export default {
    data: () => ({
        token: null,
        dialog: false,
        dialogDelete: false,
        headers: [
            {
                text: "Firma",
                align: "start",
                sortable: false,
                value: "name",
            },
            { text: "Email", value: "email" },
            { text: "Password", value: "password" },
            // { text: 'miasto', editable: false, value: 'city' },
            { text: "Actions", value: "actions", sortable: false },
        ],
        companies: [],
        editedIndex: -1,
        editedItem: {
            id: "",
            name: "",
            email: "",
            password: "",
        },
        defaultItem: {
            name: "",
            email: "",
            password: "",
        },
    }),

    computed: {
        formTitle() {
            return this.editedIndex === -1
                ? "Nowe konto firmy"
                : "Edytuj konto firmy";
        },
    },

    watch: {
        dialog(val) {
            val || this.close();
        },
        dialogDelete(val) {
            val || this.closeDelete();
        },
    },

    created() {
        this.initialize();
    },

    methods: {
        async initialize() {
            try {
                this.token = localStorage.getItem("token");
                let { data } = await authAxios.get("/admin/companies", {
                    headers: {
                        Authorization: "Bearer " + this.token,
                    },
                });
                // console.log(data);
                this.companies = data.data;
            } catch (e) {
                console.log(e);
            }
        },
        async addCompany() {
            try {
                await authAxios.post(
                    "/admin/companies",
                    {
                        name: this.editedItem.name,
                        email: this.editedItem.email,
                        password: this.editedItem.password,
                    },
                    {
                        headers: {
                            Authorization: "Bearer " + this.token,
                        },
                    }
                );
                this.companies.push(this.editedItem);
                this.initialize();
                this.close();
            } catch (e) {
                console.log(e);
            }
        },
        async editCompany() {
            try {
                console.log("test"+this.editedItem.id);
                await authAxios.put(
                    "/admin/companies/" + this.editedItem.id,
                    {
                        name: this.editedItem.name,
                        email: this.editedItem.email,
                        password: this.editedItem.password,
                    },
                    {
                        headers: {
                            Authorization: "Bearer " + this.token,
                        },
                    }
                );
                Object.assign(
                    this.companies[this.editedIndex],
                    this.editedItem
                );
                this.close();
            } catch (e) {
                console.log(e);
            }
        },
        editItem(item) {
            this.editedIndex = this.companies.indexOf(item);
            this.editedItem = Object.assign({}, item);
            this.editedItem.id = item.id;
            this.dialog = true;
        },

        deleteItem(item) {
            this.editedIndex = this.companies.indexOf(item);
            this.editedItem = Object.assign({}, item);
            this.editedItem.id = item.id;
            this.dialogDelete = true;
        },

        async deleteItemConfirm() {
            await authAxios.delete("/admin/companies/" + this.editedItem.id, {
                headers: {
                    Authorization: "Bearer " + this.token,
                },
            });
            this.companies.splice(this.editedIndex, 1);
            this.closeDelete();
        },

        close() {
            this.dialog = false;
            this.$nextTick(() => {
                this.editedItem = Object.assign({}, this.defaultItem);
                this.editedIndex = -1;
            });
        },

        closeDelete() {
            this.dialogDelete = false;
            this.$nextTick(() => {
                this.editedItem = Object.assign({}, this.defaultItem);
                this.editedIndex = -1;
            });
        },

        save() {
            if (this.editedIndex > -1) {
                this.editCompany();
            } else {
                this.addCompany();
            }
        },
    },
};
</script>
