<template>
    <div class="padding">
        <div class="white-card">
            <h1>Administrator</h1>
            <b-row>
                <b-col sm="6" offset-sm="3">
                    <b-form @submit="onSubmit" @reset="onReset">
                        <p v-if="error" style="color: red">{{ error }}</p>
                        <b-form-group label="Email:" label-for="email">
                            <b-form-input
                                id="email"
                                type="email"
                                v-model="email"
                                @input="$v.email.$model = $event.trim()"
                                :state="
                                    !$v.email.$dirty ? null : !$v.email.$error
                                "
                                required
                                placeholder="Podaj adres email"
                            />
                            <b-form-invalid-feedback>
                                <span v-if="!$v.email.required"
                                    >To pole jest wymagane.
                                </span>
                                <span v-if="!$v.email.email"
                                    >Błędny adres email.
                                </span>
                            </b-form-invalid-feedback>
                            <b-form-valid-feedback>
                                <span>Wszystko jest okej. </span>
                            </b-form-valid-feedback>
                        </b-form-group>
                        <b-form-group label="Hasło:" label-for="password">
                            <b-form-input
                                id="password"
                                type="password"
                                v-model="password"
                                @input="$v.password.$model = $event.trim()"
                                :state="
                                    !$v.password.$dirty
                                        ? null
                                        : !$v.password.$error
                                "
                                required
                                placeholder="Podaj hasło"
                            />

                            <b-form-invalid-feedback>
                                <span v-if="!$v.password.required"
                                    >To pole jest wymagane.
                                </span>
                                <span v-if="!$v.password.minLength"
                                    >Hasło musi posiadać conajmniej 8 znaków.
                                </span>
                            </b-form-invalid-feedback>
                            <b-form-valid-feedback>
                                <span>Wszystko jest okej. </span>
                            </b-form-valid-feedback>
                        </b-form-group>

                        <b-button
                            type="submit"
                            variant="primary"
                            :disabled="$v.$invalid"
                            >Zaloguj</b-button
                        >
                        &nbsp;
                        <b-button type="reset" variant="danger">Reset</b-button>
                    </b-form>
                </b-col>
            </b-row>
        </div>
    </div>
</template>

<script>
import { required, minLength, email } from "vuelidate/lib/validators";
import BFormInvalidFeedback from "bootstrap-vue/src/components/form/form-invalid-feedback";
import authAxios from "../auth-axios.js";

export default {
    components: { BFormInvalidFeedback },
    data() {
        return {
            email: "",
            password: "",
            error: false,
        };
    },
    validations: {
        email: {
            required,
            email,
        },
        password: {
            required,
            minLength: minLength(8),
        },
    },
    methods: {
        //       async onSubmit(event){
        //         event.preventDefault();
        // try {
        //   let response = await authAxios.post('api/login', {
        //             email: this.email,
        //             password: this.password
        //           });
        //           console.log(response)
        // } catch (error) {
        //   this.error = error.response.data.message
        //   console.log(error.response)
        // }
        //       },
        async onSubmit(event) {
            event.preventDefault();
            let response = await this.$store.dispatch("login", {
                email: this.email,
                password: this.password,
            });
            this.error = true;
            // console.log(response.data);
            // await this.$router.push({name: 'administrator'})
        },
        onReset(event) {
            event.preventDefault();
            this.email = "";
            this.password = "";
            this.error = null;
            this.$v.$reset();
        },
    },
};
</script>
