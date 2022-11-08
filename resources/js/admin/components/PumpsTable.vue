<template>
    <v-data-table
        :headers="headers"
        :items="pumps"
        sort-by="line"
        class="elevation-1"
        :footer-props="{ itemsPerPageText: 'Wyników na stronie' }"
    >
        <template v-slot:top>
            <v-toolbar flat>
                <v-toolbar-title>Pompy ciepła</v-toolbar-title>
                <v-divider class="mx-4" inset vertical></v-divider>
                <v-spacer></v-spacer>
                <v-dialog v-model="dialog" max-width="700px">
                    <template v-slot:activator="{ on, attrs }">
                        <v-btn
                            color="primary"
                            dark
                            class="mb-2"
                            v-bind="attrs"
                            v-on="on"
                        >
                            Dodaj pompę
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
                                        <v-select
                                            item-text="name"
                                            item-value="id"
                                            v-model="editedItem.producer"
                                            :items="producers"
                                            :rules="[
                                                (v) =>
                                                    !!v ||
                                                    'Producent - pole wymagane',
                                            ]"
                                            label="Producent"
                                            required
                                        ></v-select>
                                    </v-col>
                                    <v-col cols="12" sm="6" md="4">
                                        <v-text-field
                                            v-model="editedItem.line"
                                            :rules="[
                                                (v) =>
                                                    !!v ||
                                                    'Linia pompy - pole wymagane',
                                            ]"
                                            label="Linia"
                                            required
                                        ></v-text-field>
                                    </v-col>
                                    <v-row>
                                        <v-col cols="12" sm="6" md="4">
                                            <v-text-field
                                                v-model="editedItem.model"
                                                :rules="[
                                                    (v) =>
                                                        !!v ||
                                                        'Model - pole wymagane',
                                                ]"
                                                label="Model"
                                                required
                                            ></v-text-field>
                                        </v-col>
                                        <v-col cols="12" sm="6" md="4">
                                            <v-text-field
                                                v-model="editedItem.power"
                                                :rules="[
                                                    (v) =>
                                                        !!v ||
                                                        'Moc pompy - pole wymagane',
                                                ]"
                                                label="Moc pompy"
                                                required
                                            ></v-text-field>
                                        </v-col>
                                    </v-row>
                                </v-row>
                                <v-row>
                                    <v-col cols="12" sm="6" md="4">
                                        <v-select
                                            item-text="name"
                                            item-value="id"
                                            v-model="editedItem.category"
                                            :items="categories"
                                            :rules="[
                                                (v) =>
                                                    !!v ||
                                                    'Kategoria - pole wymagane',
                                            ]"
                                            label="Kategoria pompy"
                                            required
                                        ></v-select>
                                    </v-col>
                                    <v-col cols="12" sm="6" md="4">
                                        <v-select
                                            item-text="name"
                                            item-value="id"
                                            v-model="editedItem.type"
                                            :items="types"
                                            :rules="[
                                                (v) =>
                                                    !!v ||
                                                    'Typ - pole wymagane',
                                            ]"
                                            label="Typ pompy"
                                            required
                                        ></v-select>
                                    </v-col>
                                </v-row>

                                <v-row
                                    >ogrzewanie podłogowe [35]
                                    <v-divider></v-divider
                                ></v-row>
                                <v-row>
                                    <v-col>
                                        <v-text-field
                                            type="number"
                                            step="0.1"
                                            v-model="editedItem.t"
                                            label="temp -20"
                                        ></v-text-field>
                                    </v-col>
                                    <v-col>
                                        <v-text-field
                                            type="number"
                                            v-model="editedItem.t"
                                            label="temp -15"
                                        ></v-text-field>
                                    </v-col>
                                    <v-col>
                                        <v-text-field
                                            type="number"
                                            v-model="editedItem.t"
                                            label="temp -7"
                                        ></v-text-field>
                                    </v-col>
                                    <v-col>
                                        <v-text-field
                                            type="number"
                                            v-model="editedItem.t"
                                            label="temp 2"
                                        ></v-text-field>
                                    </v-col>
                                </v-row>
                                <v-row>
                                    <v-col>
                                        <v-text-field
                                            type="number"
                                            v-model="editedItem.t"
                                            label="temp 7"
                                        ></v-text-field>
                                    </v-col>
                                    <v-col>
                                        <v-text-field
                                            type="number"
                                            v-model="editedItem.t"
                                            label="temp 10"
                                        ></v-text-field>
                                    </v-col>
                                    <v-col>
                                        <v-text-field
                                            type="number"
                                            v-model="editedItem.t"
                                            label="temp 12"
                                        ></v-text-field>
                                    </v-col>
                                    <v-col>
                                        <v-text-field
                                            type="number"
                                            v-model="editedItem.t"
                                            label="temp 20"
                                        ></v-text-field>
                                    </v-col>
                                </v-row>
                                <v-row
                                    >ogrzewanie mieszane [45]
                                    <v-divider></v-divider
                                ></v-row>
                                <v-row>
                                    <v-col>
                                        <v-text-field
                                            type="number"
                                            step="0.1"
                                            v-model="editedItem.t"
                                            label="temp -20"
                                        ></v-text-field>
                                    </v-col>
                                    <v-col>
                                        <v-text-field
                                            type="number"
                                            v-model="editedItem.t"
                                            label="temp -15"
                                        ></v-text-field>
                                    </v-col>
                                    <v-col>
                                        <v-text-field
                                            type="number"
                                            v-model="editedItem.t"
                                            label="temp -7"
                                        ></v-text-field>
                                    </v-col>
                                    <v-col>
                                        <v-text-field
                                            type="number"
                                            v-model="editedItem.t"
                                            label="temp 2"
                                        ></v-text-field>
                                    </v-col>
                                </v-row>
                                <v-row>
                                    <v-col>
                                        <v-text-field
                                            type="number"
                                            v-model="editedItem.t"
                                            label="temp 7"
                                        ></v-text-field>
                                    </v-col>
                                    <v-col>
                                        <v-text-field
                                            type="number"
                                            v-model="editedItem.t"
                                            label="temp 10"
                                        ></v-text-field>
                                    </v-col>
                                    <v-col>
                                        <v-text-field
                                            type="number"
                                            v-model="editedItem.t"
                                            label="temp 12"
                                        ></v-text-field>
                                    </v-col>
                                    <v-col>
                                        <v-text-field
                                            type="number"
                                            v-model="editedItem.t"
                                            label="temp 20"
                                        ></v-text-field>
                                    </v-col>
                                </v-row>
                                <v-row
                                    >ogrzewanie grzejnikowe [55]
                                    <v-divider></v-divider
                                ></v-row>
                                <v-row>
                                    <v-col>
                                        <v-text-field
                                            type="number"
                                            step="0.1"
                                            v-model="editedItem.t"
                                            label="temp -20"
                                        ></v-text-field>
                                    </v-col>
                                    <v-col>
                                        <v-text-field
                                            type="number"
                                            v-model="editedItem.t"
                                            label="temp -15"
                                        ></v-text-field>
                                    </v-col>
                                    <v-col>
                                        <v-text-field
                                            type="number"
                                            v-model="editedItem.t"
                                            label="temp -7"
                                        ></v-text-field>
                                    </v-col>
                                    <v-col>
                                        <v-text-field
                                            type="number"
                                            v-model="editedItem.t"
                                            label="temp 2"
                                        ></v-text-field>
                                    </v-col>
                                </v-row>
                                <v-row>
                                    <v-col>
                                        <v-text-field
                                            type="number"
                                            v-model="editedItem.t"
                                            label="temp 7"
                                        ></v-text-field>
                                    </v-col>
                                    <v-col>
                                        <v-text-field
                                            type="number"
                                            v-model="editedItem.t"
                                            label="temp 10"
                                        ></v-text-field>
                                    </v-col>
                                    <v-col>
                                        <v-text-field
                                            type="number"
                                            v-model="editedItem.t"
                                            label="temp 12"
                                        ></v-text-field>
                                    </v-col>
                                    <v-col>
                                        <v-text-field
                                            type="number"
                                            v-model="editedItem.t"
                                            label="temp 20"
                                        ></v-text-field>
                                    </v-col>
                                </v-row>
                                <v-divider></v-divider>
                                <v-row>
                                    <v-col cols="12" sm="6" md="4">
                                        <v-text-field
                                            v-model="editedItem.volume"
                                            label="Głosność"
                                        ></v-text-field>
                                    </v-col>
                                    <v-col cols="12" sm="6" md="4">
                                        <v-text-field
                                            v-model="editedItem.price"
                                            label="Cena"
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
                                >Usuń</v-btn
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
        producer: null,
        producers: [],
        type: null,
        types: [],
        category: null,
        categories: [],
        dialog: false,
        dialogDelete: false,
        headers: [
            {
                text: "Producent",
                align: "start",
                sortable: false,
                value: "producer.name",
            },
            { text: "Linia", value: "line" },
            { text: "Model", value: "model" },
            { text: "Moc [kW]", editable: false, value: "power" },
            {
                text: "Typ [Split/Monoblok]",
                value: "type.name",
                sortable: false,
            },
            { text: "Kategoria", value: "category.name", sortable: false },
            { text: "Operacje", value: "actions", sortable: false },
        ],
        pumps: [],
        editedIndex: -1,
        editedItem: {
            id: "",
            producer: "",
            line: "",
            model: "",
            power: "",
            type: "",
            category: "",
            volume: "",
            price: "",
        },
        defaultItem: {
            producer: 1,
            line: "",
            model: "",
            power: "",
            type: 1,
            category: 1,
            volume: "",
            price: "",
        },
    }),

    computed: {
        formTitle() {
            return this.editedIndex === -1 ? "Nowa pompa" : "Edytuj pompę";
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
        this.init();
    },

    methods: {
        async init() {
            try {
                this.producersui();
                this.categoriesui();
                this.typesui();
            } catch (e) {
                console.log(e);
            }
        },
        async producersui() {
            try {
                let { data } = await authAxios.get("/admin/producers", {
                    headers: {
                        Authorization: "Bearer " + this.token,
                    },
                });
                this.producers = data.data;
            } catch (e) {
                console.log(e);
            }
        },
        async categoriesui() {
            try {
                let { data } = await authAxios.get("/admin/categories", {
                    headers: {
                        Authorization: "Bearer " + this.token,
                    },
                });
                this.categories = data.data;
            } catch (e) {
                console.log(e);
            }
        },
        async typesui() {
            try {
                let { data } = await authAxios.get("/admin/types", {
                    headers: {
                        Authorization: "Bearer " + this.token,
                    },
                });
                this.types = data.data;
            } catch (e) {
                console.log(e);
            }
        },
        async initialize() {
            try {
                this.token = localStorage.getItem("token");
                let { data } = await authAxios.get("/admin/pumps", {
                    headers: {
                        Authorization: "Bearer " + this.token,
                    },
                });
                // console.log(data.data);
                this.pumps = data.data;
            } catch (e) {
                console.log(e);
            }
        },
        async addPump() {
            try {
                await authAxios.post(
                    "/admin/pumps",
                    {
                        line: this.editedItem.line,
                        model: this.editedItem.model,
                        power: this.editedItem.power,
                        volume: this.editedItem.volume,
                        price: this.editedItem.price,
                        producer_id: this.editedItem.producer,
                        category_id: this.editedItem.category,
                        type_id: this.editedItem.type,
                        m20: 1,
                        m15: 2,
                        m7: 3,
                        p2: 4,
                        p7: 5,
                        p10: 5,
                        p12: 6,
                        p20: 7,
                    },
                    {
                        headers: {
                            Authorization: "Bearer " + this.token,
                        },
                    }
                );
                this.pumps.push(this.editedItem);
                this.initialize();
                this.close();
            } catch (e) {
                console.log(e);
            }
        },
        async editPump() {
            try {
                await authAxios.put(
                    "/admin/pumps/" + this.editedItem.id,
                    {
                        line: this.editedItem.line,
                        model: this.editedItem.model,
                        power: this.editedItem.power,
                        volume: this.editedItem.volume,
                        price: this.editedItem.price,
                        producer_id: this.editedItem.producer.id,
                        category_id: this.editedItem.category.id,
                        type_id: this.editedItem.type.id,
                    },
                    {
                        headers: {
                            Authorization: "Bearer " + this.token,
                        },
                    }
                );
                Object.assign(this.pumps[this.editedIndex], this.editedItem);
                this.initialize();
                this.close();
            } catch (e) {
                console.log(e);
            }
        },
        editItem(item) {
            this.editedIndex = this.pumps.indexOf(item);
            this.editedItem = Object.assign({}, item);
            this.editedItem.id = item.id;
            this.editedItem.id = item.id;
            this.dialog = true;
        },

        deleteItem(item) {
            this.editedIndex = this.pumps.indexOf(item);
            this.editedItem = Object.assign({}, item);
            this.editedItem.id = item.id;
            this.dialogDelete = true;
        },

        async deleteItemConfirm() {
            await authAxios.delete("/admin/pumps/" + this.editedItem.id);
            this.pumps.splice(this.editedIndex, 1);
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
                console.log(this.editedItem.id);
                this.editPump();
            } else {
                this.addPump();
            }
        },
    },
};
</script>
