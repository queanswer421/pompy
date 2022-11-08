<template>
  <v-data-table
    :headers="headers"
    :items="producers"
    sort-by="producers"
    class="elevation-1"
    :footer-props="{itemsPerPageText: 'Wyników na stronie'}"
  >
    <template v-slot:top>
      <v-toolbar
        flat
      >
        <v-toolbar-title>Producenci pomp ciepła</v-toolbar-title>
        <v-divider
          class="mx-4"
          inset
          vertical
        ></v-divider>
        <v-spacer></v-spacer>
        <v-dialog
          v-model="dialog"
          max-width="500px"
        >
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
                  <v-col
                    cols="12"
                    sm="6"
                    md="4"
                  >
                    <v-text-field
                      v-model="editedItem.producer"
                      label="Producent"
                    ></v-text-field>
                  </v-col>
                </v-row>

                <v-row>
                  <v-col
                    cols="12"
                    sm="8"
                    md="6"
                  >
                    <v-text-field
                      v-model="editedItem.email"
                      label="Email"
                    ></v-text-field>
                  </v-col>
                </v-row>
                <v-row>
                  <v-col
                    cols="12"
                    sm="6"
                    md="4"
                  >
                    <v-text-field
                      v-model="editedItem.date_add"
                      label="Data dodania"
                    ></v-text-field>
                  </v-col>
                </v-row>
              </v-container>
            </v-card-text>

            <v-card-actions>
              <v-spacer></v-spacer>
              <v-btn
                color="blue darken-1"
                text
                @click="close"
              >
                Cancel
              </v-btn>
              <v-btn
                color="blue darken-1"
                text
                @click="save"
              >
                Save
              </v-btn>
            </v-card-actions>
          </v-card>
        </v-dialog>
        <v-dialog v-model="dialogDelete" max-width="500px">
          <v-card>
            <v-card-title class="text-h5">Czy chcesz usunąć producenta?</v-card-title>
            <v-card-actions>
              <v-spacer></v-spacer>
              <v-btn color="blue darken-1" text @click="closeDelete">Cancel</v-btn>
              <v-btn color="blue darken-1" text @click="deleteItemConfirm">OK</v-btn>
              <v-spacer></v-spacer>
            </v-card-actions>
          </v-card>
        </v-dialog>
      </v-toolbar>
    </template>
    <!-- ############## -->
    <template v-slot:[`item.actions`]="{ item }">
    <!-- <template v-slot:item.actions="{ item }"> -->
      <v-icon
        small
        class="mr-2"
        @click="editItem(item)"
      >
        mdi-pencil
      </v-icon>
      <v-icon
        small
        @click="deleteItem(item)"
      >
        mdi-delete
      </v-icon>
    </template>
    <template v-slot:no-data>
      <v-btn
        color="primary"
        @click="initialize"
      >
        Reset
      </v-btn>
    </template>
  </v-data-table>
</template>

<script>
    export default {
      data: () => ({
        dialog: false,
        dialogDelete: false,
        headers: [
          {
            text: 'Producent',
            align: 'start',
            sortable: false,
            value: 'producer',
          },
          { text: 'Email', value: 'email' },
          { text: 'Dodany', value: 'date_add' },
          { text: 'Liczba pomp', editable: false, value: 'count' },
          { text: 'Actions', value: 'actions', sortable: false },
        ],
        producers: [],
        editedIndex: -1,
        editedItem: {
          producer: '',
          email: '',
          date_add: '',

        },
        defaultItem: {
          producer: '',
          email: '',
          date_add: '',
        },
      }),
  
      computed: {
        formTitle () {
          return this.editedIndex === -1 ? 'Nowy producent' : 'Edytuj producenta'
        },
      },
  
      watch: {
        dialog (val) {
          val || this.close()
        },
        dialogDelete (val) {
          val || this.closeDelete()
        },
      },
  
      created () {
        this.initialize()
      },
  
      methods: {
        initialize () {
          this.producers = [
          {
        id: 1,
        producer: "Dimplex",
        email: "dimplex@pumps.pl",
        date_add: "2022.10.09",
        count: 20,
      },
      {
        id: 2,
        producer: "Hyunday",
        email: "hyunday@pumps.pl",
        date_add: "2022.10.09",
        count: 10,
      },
      {
        id: 3,
        producer: "Buderus",
        email: "buderus@pumps.pl",
        date_add: "2022.10.09",
        count: 16,
      },
          ]
        },
  
        editItem (item) {
          this.editedIndex = this.producers.indexOf(item)
          this.editedItem = Object.assign({}, item)
          this.dialog = true
        },
  
        deleteItem (item) {
          this.editedIndex = this.producers.indexOf(item)
          this.editedItem = Object.assign({}, item)
          this.dialogDelete = true
        },
  
        deleteItemConfirm () {
          this.desserts.splice(this.editedIndex, 1)
          this.closeDelete()
        },
  
        close () {
          this.dialog = false
          this.$nextTick(() => {
            this.editedItem = Object.assign({}, this.defaultItem)
            this.editedIndex = -1
          })
        },
  
        closeDelete () {
          this.dialogDelete = false
          this.$nextTick(() => {
            this.editedItem = Object.assign({}, this.defaultItem)
            this.editedIndex = -1
          })
        },
  
        save () {
          if (this.editedIndex > -1) {
            Object.assign(this.desserts[this.editedIndex], this.editedItem)
          } else {
            this.desserts.push(this.editedItem)
          }
          this.close()
        },
      },
    }
  </script>