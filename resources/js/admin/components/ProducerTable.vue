<template>
    <v-data-table
        :headers="headers"
        :items="producers"
        sort-by="producers"
        class="elevation-1"
        :footer-props="{ itemsPerPageText: 'Wyników na stronie' }"
    >
        <template v-slot:top>
            <v-toolbar flat>
                <v-toolbar-title>Producenci pomp ciepła</v-toolbar-title>
                <v-divider class="mx-4" inset vertical></v-divider>
                <v-spacer></v-spacer>
                <v-dialog v-model="dialog" max-width="500px">
                    <template v-slot:activator="{ on, attrs }">
                        <v-btn
                            color="primary"
                            dark
                            class="mb-2"
                            v-bind="attrs"
                            v-on="on"
                        >
                            Dodaj producenta
                        </v-btn>
                    </template>
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
                                            label="Producent"
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
                                            v-model="editedItem.description"
                                            label="Opis"
                                        ></v-text-field>
                                    </v-col>
                                </v-row>
                            </v-container>
                        </v-card-text>

                        <v-card-actions>
                            <v-spacer></v-spacer>
                            <v-btn color="blue darken-1" text @click="close">
                                Anuluj
                            </v-btn>
                            <v-btn color="blue darken-1" text @click="save">
                                Zapisz
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
                                >Anuluj</v-btn
                            >
                            <v-btn
                                color="blue darken-1"
                                text
                                @click="deleteItemConfirm"
                                >Zapisz</v-btn
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
            <v-btn color="primary" @click="initialize"> Odśwież </v-btn>
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
                text: "Producent",
                align: "start",
                sortable: false,
                value: "name",
            },
            { text: "Email", value: "email" },
            { text: "Opis", value: "description" },
            // { text: "Liczba pomp", editable: false, value: "count" },
            { text: "Operacje", value: "actions", sortable: false },
        ],
        producers: [],
        editedIndex: -1,
        editedItem: {
            id: "",
            name: "",
            email: "",
            description: "",
        },
        defaultItem: {
            name: "",
            email: "",
            description: "",
        },
    }),

    computed: {
        formTitle() {
            return this.editedIndex === -1
                ? "Nowy producent"
                : "Edytuj producenta";
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
                let { data } = await authAxios.get("/admin/producers", {
                    headers: {
                        Authorization: "Bearer " + this.token,
                    },
                });
                // console.log(data);
                this.producers = data.data;
            } catch (e) {
                console.log(e);
            }
        },
        async addCategory() {
            try {
                await authAxios.post(
                    "/admin/producers",
                    {
                        name: this.editedItem.name,
                        email: this.editedItem.email,
                        description: this.editedItem.description,
                    },
                    {
                        headers: {
                            Authorization: "Bearer " + this.token,
                        },
                    }
                );
                this.producers.push(this.editedItem);
                this.initialize();
                this.close();
            } catch (e) {
                console.log(e);
            }
        },
        async editCategory() {
            try {
                await authAxios.put(
                    "/admin/producers/" + this.editedItem.id,
                    {
                        name: this.editedItem.name,
                        email: this.editedItem.email,
                        description: this.editedItem.description,
                    },
                    {
                        headers: {
                            Authorization: "Bearer " + this.token,
                        },
                    }
                );
                Object.assign(
                    this.producers[this.editedIndex],
                    this.editedItem
                );
                this.close();
            } catch (e) {
                console.log(e);
            }
        },
        editItem(item) {
            this.editedIndex = this.producers.indexOf(item);
            this.editedItem = Object.assign({}, item);
            this.dialog = true;
        },

        deleteItem(item) {
            this.editedIndex = this.producers.indexOf(item);
            this.editedItem = Object.assign({}, item);
            this.dialogDelete = true;
        },

        deleteItemConfirm() {
            this.producers.splice(this.editedIndex, 1);
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
                this.editCategory();
            } else {
                this.addCategory();
            }
        },
    },
};
</script>
