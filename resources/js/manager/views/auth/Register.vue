<template>
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div
                        class="col-lg-5 d-none d-lg-block bg-register-image"
                    ></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">
                                    Tworzenie konta!
                                </h1>
                            </div>
                            <form v-on:submit.prevent="register" class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input
                                            type="text"
                                            v-model="user.name"
                                            class="form-control form-control-user"
                                            id="name"
                                            placeholder="Imię"
                                        />
                                    </div>
                                    <!-- <div class="col-sm-6">
                                        <input
                                            type="text"
                                            class="form-control form-control-user"
                                            id="exampleLastName"
                                            placeholder="Nazwisko"
                                        />
                                    </div> -->
                                </div>
                                <div class="form-group">
                                    <input
                                        type="email"
                                        v-model="user.email"
                                        class="form-control form-control-user"
                                        id="email"
                                        placeholder="Adres email"
                                    />
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input
                                            type="password"
                                            v-model="user.password"
                                            class="form-control form-control-user"
                                            id="password"
                                            placeholder="Haslo"
                                        />
                                    </div>
                                    <div class="col-sm-6">
                                        <input
                                            type="password"
                                            v-model="user.password_confirm"
                                            class="form-control form-control-user"
                                            id="password_confirm"
                                            placeholder="Powtórz hasło"
                                        />
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Zarejestruj</button>

                                <!-- <hr />
                                <a
                                    href="index.html"
                                    class="btn btn-google btn-user btn-block"
                                >
                                    <i class="fab fa-google fa-fw"></i> Zaloguj
                                    się jako Google
                                </a>
                                <a
                                    href="index.html"
                                    class="btn btn-facebook btn-user btn-block"
                                >
                                    <i class="fab fa-facebook-f fa-fw"></i>
                                    Zaloguj się za pomocą konta Facebook
                                </a> -->
                            </form>
                            <hr />
                            <div class="text-center">
                                <router-link to="/reset-password" class="small"
                                    >Zapomniałeś hasła</router-link
                                >
                            </div>
                            <div class="text-center">
                                <router-link to="/login" class="small"
                                    >Masz już konto? Zaloguj się!
                                </router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import * as auth from '../../services/auth_service';
export default {
    name: 'Register',
    data() {
        return {
            user: {
                name: '',
                email: '',
                password: '',
                password_confirm: ''
            },
            errors: {}
        }
    },
    methods: {
        register: async function(){
            try{
                await auth.register(this.user);
                this.error = {};
                this.$router.push('/login');
            } catch (error) {
                // switch(error.response.status) {
                //     case 422:
                //         this.errors = error.response.data.errors;
                //         break;
                //     default:
                //         this.flashMessage.error({
                //             message: 'Some error occurred, Please try again!',
                //             time: 5000
                        
                //         });
                //         break;
                // }
            }
        }
    }
};
</script>
