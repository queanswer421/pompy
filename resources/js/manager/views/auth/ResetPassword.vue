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
                                class="col-lg-6 d-none d-lg-block bg-password-image"
                            ></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">
                                            Zapomniałeś hasła?
                                        </h1>
                                        <p class="mb-4">
                                            Rozumiemy, rzeczy się zdarzają.
                                            Wpisz poniżej swój adres e-mail, a
                                            wyślemy Ci link do zresetowania
                                            hasła!
                                        </p>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input
                                                type="email"
                                                class="form-control form-control-user"
                                                id="exampleInputEmail"
                                                aria-describedby="emailHelp"
                                                placeholder="Wpisz adres email..."
                                            />
                                        </div>
                                        <a
                                            href="login.html"
                                            class="btn btn-primary btn-user btn-block"
                                        >
                                            Zresetuj hasło
                                        </a>
                                    </form>
                                    <hr />
                                    <div class="text-center">
                                        <router-link
                                            to="/register"
                                            class="small"
                                            >Utwórz konto</router-link
                                        >
                                    </div>
                                    <div class="text-center">
                                        <router-link
                                            to="/register"
                                            class="small"
                                            >Masz już konto? Zaloguj się!
                                        </router-link>
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
