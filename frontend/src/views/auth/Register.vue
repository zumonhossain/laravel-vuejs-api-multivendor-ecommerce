<template>
    <div>
        <section class="user-form-part">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-10 col-md-12 col-lg-12 col-xl-10">
                        <div class="user-form-logo">
                            <router-link :to=" { name:'index.page' } "><img src="@/assets/images/logo.png" alt="logo" /></router-link>
                        </div>
                        <div class="user-form-card">
                            <div class="user-form-title">
                                <h2>Join Now!</h2>
                                <p>Setup A New Account In A Minute</p>
                            </div>
                            <div class="user-form-group">
                                <ul class="user-form-social">
                                    <li>
                                        <a href="#" class="facebook">
                                            <i class="fab fa-facebook-f"></i>
                                            Join with facebook
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="twitter">
                                            <i class="fab fa-twitter"></i>
                                            Join with twitter
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="google">
                                            <i class="fab fa-google"></i>
                                            Join with google
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="instagram">
                                            <i class="fab fa-instagram"></i>
                                            Join with instagram
                                        </a>
                                    </li>
                                </ul>

                                <div class="user-form-divider">
                                    <p>or</p>
                                </div>

                                <form class="user-form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter your name"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Enter your email"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Enter your password"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Enter repeat password"/>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="check"/>
                                        <label class="form-check-label" for="check">
                                            Accept all the 
                                            <a href="#">Terms & Conditions</a>
                                        </label>
                                    </div>
                                    <div class="form-button">
                                        <button type="submit">register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="user-form-remind">
                            <p>Already Have An Account?<router-link :to="{ name: 'user.login' }">login here</router-link></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>