<script setup>

    import { ref } from "vue";
    import { useAuth } from "@/stores/auth";

    import { ElNotification } from 'element-plus'

    import { useRouter } from 'vue-router'

    import { Field, Form } from 'vee-validate';
    import * as yup from 'yup';

    const schema = yup.object({
        name: yup.string().required(),
        email: yup.string().required().email(),
        phone: yup.string().required(),
        password: yup.string().required().min(8),
        password_confirmation: yup
            .string()
            .required("password confirmation is a required field")
            .min(8)
            .oneOf([yup.ref("password"), null],"password and confirm password must be match"),
    });

    const auth = useAuth();


    // const form = reactive({
    //     phone: "",
    //     password: "",
    // });


    // Toggle Show Start
    const showPassword = ref(false);

    const toggleShow = () => {
        showPassword.value = !showPassword.value;
    };
    // Toggle Show End


    const router = useRouter();


    const onSubmit = async (values, { setErrors } ) => {
        const res = await auth.register(values);

        if(res.data){
            router.push({ 
                name: "index.page"
            });

            ElNotification({
                title: 'Success',
                message: 'Register Success',
                type: 'success',
                position: 'top-left',
            });

        }else{
            setErrors(res);
        }
        

    };
    
    
</script>


<template>
    <div>
        <section class="user-form-part">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-10 col-md-12 col-lg-12 col-xl-6">
                        <div class="user-form-card">
                            <div class="user-form-title">
                                <h2>Customer Registration</h2>
                                <p>Use your credentials to access</p>
                            </div>
                            <div class="user-form-group" id="axiosForm">
                                <Form class="user-form" @submit="onSubmit" :validation-schema="schema" v-slot=" { errors, isSubmitting } ">
                                    
                                    <div class="form-group">
                                        <Field name="name" type="text" class="form-control" placeholder="name" :class=" { 'is-invalid' : errors.name } " />
                                        
                                        <span class="text-danger">{{ errors.name }}</span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <Field name="email" type="text" class="form-control" placeholder="email" :class=" { 'is-invalid' : errors.email } " />
                                        
                                        <span class="text-danger">{{ errors.email }}</span>
                                    </div>

                                    <div class="form-group">
                                        <Field name="phone" type="text" class="form-control" placeholder="phone" :class=" { 'is-invalid' : errors.phone } " />
                                        
                                        <span class="text-danger">{{ errors.phone }}</span>
                                    </div>

                                    <div class="form-group">
                                        <Field name="password" :type="showPassword ? 'text' : 'password' " class="form-control" placeholder="password" :class=" { 'is-invalid' : errors.password } " />
                                        
                                        <span class="view-password" @click="toggleShow">
                                            <i class="fas text-success" :class=" { 'fa-eye-slash' : showPassword, 'fa-eye' : !showPassword } "></i>
                                        </span>
                                        
                                        <span class="text-danger">{{ errors.password }}</span>
                                    </div>

                                    <div class="form-group">
                                        <Field name="password_confirmation" :type="showPassword ? 'text' : 'password' " class="form-control" placeholder="retype password" :class=" { 'is-invalid' : errors.password_confirmation } " />
                                        
                                        <span class="view-password" @click="toggleShow">
                                            <i class="fas text-success" :class=" { 'fa-eye-slash' : showPassword, 'fa-eye' : !showPassword } "></i>
                                        </span>
                                        
                                        <span class="text-danger">{{ errors.password_confirmation }}</span>
                                    </div>

                                    <div class="form-button">
                                        <button type="submit" :disabled="isSubmitting">
                                            register
                                            <span v-show="isSubmitting" class="spinner-border spinner-border-sm mr-1"></span>
                                        </button>
                                        
                                        <p>
                                            Forgot your password?
                                            <a href="reset-password.html">reset here</a>
                                        </p>
                                    </div>
                                </Form>
                            </div>
                        </div>
                        <div class="user-form-remind">
                            <p>
                                have any account?
                                <router-link :to=" { name: 'user.login' } ">login here</router-link>
                            </p>
                        </div>
                        <div class="user-form-footer"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<style>
    @import "@/assets/css/user-auth.css";
</style>