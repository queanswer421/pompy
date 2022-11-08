<template>
  <v-data-table
    :headers="headers"
    :items="types"
    class="elevation-1"
    :footer-props="{itemsPerPageText: 'Wyników na stronie'}"
  >
    <template v-slot:top>
      <v-toolbar
        flat
      >
        <v-toolbar-title>Typy pomp</v-toolbar-title>
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
              Dodaj typ
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
            <v-card-title class="text-h5">Czy chcesz usunąć typ?</v-card-title>
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
          text: 'Typ',
          align: 'start',
          sortable: false,
          value: 'name',
        },
        { text: 'Actions', value: 'actions', sortable: false },
      ],
      types: [],
      editedIndex: -1,
      editedItem: {
        id: '',
        name: '',
      },
      defaultItem: {
        name: '',
      },
    }),

    computed: {
      formTitle () {
        return this.editedIndex === -1 ? 'Nowy typ' : 'Edytuj typ'
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
      async initialize(){
        try {
          let {data} = await this.axios.get('http://127.0.0.1:8000/admin/types');
          // console.log(data);
          this.types = data.data;
        } catch (e) {
          console.log(e)
        }
      },
      async addType(){
      try {
        await this.axios.post('http://127.0.0.1:8000/admin/types', 
          {
            "name": this.editedItem.name,
            "email": this.editedItem.email,
            "password": this.editedItem.password
          }
        )
        this.types.push(this.editedItem)
        this.close()
      } catch (e) {
        console.log(e)
      }
    },
      async editCompany(){
      try {
        await this.axios.put('http://127.0.0.1:8000/admin/types/'+this.editedItem.id, 
          {
            "name": this.editedItem.name,
            "email": this.editedItem.email,
            "password": this.editedItem.password
          }
        )
        Object.assign(this.types[this.editedIndex], this.editedItem)
        this.close()
      } catch (e) {
        console.log(e)
      }
    },
      editItem (item) {
        this.editedIndex = this.typeses.indexOf(item)
        this.editedItem = Object.assign({}, item)
        this.editedItem.id = item.id
        this.dialog = true
      },

      deleteItem (item) {
        this.editedIndex = this.types.indexOf(item)
        this.editedItem = Object.assign({}, item)
        this.editedItem.id = item.id
        this.dialogDelete = true
      },

      async deleteItemConfirm () {
        await this.axios.delete('http://127.0.0.1:8000/admin/types/'+this.editedItem.id)
        this.types.splice(this.editedIndex, 1)
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
          this.editType()
        } else {
          this.addType()  
        }
      },
    },
  }
</script>