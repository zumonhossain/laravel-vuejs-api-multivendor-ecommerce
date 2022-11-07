<template>
    <div>
        <section class="user-form-part">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-10 col-md-12 col-lg-12 col-xl-6">
                        <div class="user-form-card">
                            <div class="user-form-title">
                                <h2>Customer Login</h2>
                                <p>Use your credentials to access</p>
                            </div>
                            <div class="user-form-group" id="axiosForm">
                                <form class="user-form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="phone no"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="password"/>
                                        <span class="view-password">
                                            <i class="fas text-success fa-eye"></i>
                                        </span>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="check" value=""/>
                                        <label class="form-check-label" for="check">Remember Me</label>
                                    </div>
                                    <div class="form-button">
                                        <button type="submit">login</button>
                                        <p>
                                            Forgot your password?
                                            <a href="reset-password.html">reset here</a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="user-form-remind">
                            <p>
                                Don't have any account?
                                <router-link :to=" { name: 'user.register' } ">register here</router-link>
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