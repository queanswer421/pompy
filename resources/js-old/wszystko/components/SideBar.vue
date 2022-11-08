<template>
       <div class="text-center mt-5">
           <h1 class="teal--text text-lg-h5 font-weight-bold ">Pumps</h1>
           <v-divider color="white" class="mt-4"></v-divider>
            <v-avatar class="my-5" size="60">
            <v-img src="https://cdn.vuetifyjs.com/images/lists/2.jpg" class="image"></v-img>
            </v-avatar>
            <h1 class="teal--text darken-3">Administrator</h1>
            <h6 class="grey--text ">administrator@pumps.pl</h6>
            <v-btn class="my-5" rounded color="#2EBFAF" outlined>###</v-btn>
              


            <v-divider class="mx-10 mt-3" ></v-divider>
        <v-list   dense class="mt-5" >
            <v-list-item-group v-model="selectedItem" color="white" >
                <v-list-item v-for="(item, i) in items" :key="i" v-slot="{ active }" router :to="item.route">
                    <v-list-item-icon class="ml-6">
                        <v-icon v-text="item.icon"  :color="active ? 'white' : 'grey'" ></v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title v-text="item.text" :class="active ? 'white--text' : 'grey--text'" ></v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
                  <v-list-item class="mt-16" v-slot="{ active }" router to="/welcome/end">
                    <v-list-item-icon class="ml-6">
                        <v-icon :color="active ? 'white' : 'grey'" >mdi-exit-to-app</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title  :class="active ? 'white--text' : 'grey--text'">Koniec</v-list-item-title>
                    </v-list-item-content>
                </v-list-item> 



            </v-list-item-group>
        </v-list>
        </div>

        


</template>

<script>
export default {
    data: () =>({
        selectedItem: 0,
        items: [
            {icon: 'mdi-home', text: 'Home', route: '/welcome'},
            {icon: 'mdi-sun-thermometer', text: 'Pompy', route: '/welcome/pumps'},
            {icon: 'mdi-home-city', text: 'Firmy', route: '/welcome/company'},
            {icon: 'mdi-account-outline', text: 'Pracownicy', route: '/welcome/employers'},
            {icon: 'mdi-cog', text: 'Konfigurator', route: '/welcome/settings'},
            // {icon: 'mdi-content-paste', text: '###', route: '/home'},
            // {icon: 'mdi-map-marker-outline', text: '###', route: '/home'},
            // {icon: 'mdi-logout', text: 'Wyloguj', route: '/end'},
        ],
    })
}
</script>

<style>
.image {
    border: 2px solid #2EBFAF;
}

</style>