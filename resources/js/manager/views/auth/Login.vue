<template>
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div
                                class="col-lg-6 d-none d-lg-block bg-login-image"
                            ></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">
                                            Witamy ponownie!
                                        </h1>
                                    </div>
                                    <form v-on:submit.prevent="login" class="user">
                                        <div class="form-group">
                                            <input
                                                type="email"
                                                v-model="user.email"
                                                class="form-control form-control-user"
                                                id="email"
                                                aria-describedby="emailHelp"
                                                placeholder="Wpisz adres email..."
                                            />
                                        </div>
                                        <div class="form-group">
                                            <input
                                                type="password"
                                                v-model="user.password"
                                                class="form-control form-control-user"
                                                id="password"
                                                placeholder="Hasło"
                                            />
                                        </div>
                                        <!-- <div class="form-group">
                                            <div
                                                class="custom-control custom-checkbox small"
                                            >
                                                <input
                                                    type="checkbox"
                                                    class="custom-control-input"
                                                    id="customCheck"
                                                />
                                                <label
                                                    class="custom-control-label"
                                                    for="customCheck"
                                                    >Zapamiętaj mnie</label
                                                >
                                            </div>
                                        </div> -->
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Zaloguj się</button>
                                        <!-- <hr />
                                        <a
                                            href="index.html"
                                            class="btn btn-google btn-user btn-block"
                                        >
                                            <i class="fab fa-google fa-fw"></i>
                                            Zaloguj się jako Google
                                        </a>
                                        <a
                                            href="index.html"
                                            class="btn btn-facebook btn-user btn-block"
                                        >
                                            <i
                                                class="fab fa-facebook-f fa-fw"
                                            ></i>
                                            Zaloguj się za pomocą konta Facebook
                                        </a> -->
                                    </form>
                                    <hr />
                                    <div class="text-center">
                                        <router-link
                                            to="/reset-password"
                                            class="small"
                                            >Zapomniałeś hasła</router-link
                                        >
                                    </div>
                                    <div class="text-center">
                                        <router-link
                                            to="/register"
                                            class="small"
                                            >Utwórz konto</router-link
                                        >
                                    </div>
                                </div>
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
    name: 'Login',
    data() {
        return {
            user: {
                email: '',
                password: '',
            },
            errors: {}
        }
    },
    methods: {
        login: async function(){
            try{
                const response = await auth.login(this.user);
                console.log(response);
                this.error = {};
                this.$router.push('/home');
            } catch (error) {
                switch(error.response.status) {
                    case 422:
                        this.errors = error.response.data.errors;
                        console.log(this.errors);
                        break;
                    case 401:
                        console.log("401 Błąd");
                        // this.errors = error.response.data.errors;
                        console.log(error.response.data.message);
                        break;
                    default:
                        // this.flashMessage.error({
                        //     message: 'Some error occurred, Please try again!',
                        //     time: 5000
                        
                        // });
                        break;
                }
            }
        }
    }
};
</script>
