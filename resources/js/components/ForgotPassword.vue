<template>
    <div>
         <!-- Section: Design Block -->
        <section class="">
        <!-- Jumbotron -->
        <div class="text-center text-lg-start login-container">
            <div class="container">
            <div class="row gx-lg-5 align-items-center">
                
                <div class="login-div">
                    <div class="login-card">
                        <div class="login-form pt-5 pb-4">
                            <form>
                                <!-- Email input -->
                                <h6 style="text-align:center;color:#fff;padding-bottom: 20px;">Reset your Password</h6>
                                <div class="form-outline mb-4">

                                    <div class="input-group mb-3">
          
                                        <div class="input-group-append">
                                            <div class="input-icons">
                                            <span class="fas fa-envelope"></span>
                                            </div>
                                        </div>
                                        <input type="email" class="form-control custom-input" placeholder="Email Address" v-model="form.email">
                                    </div>
                                    <!-- <label class="form-label" for="form3Example3">Email address</label>
                                    <input type="email" id="form3Example3" class="form-control" v-model="form.email"/> -->
                                </div>

                                <!-- Submit button -->
                                <div class="form-outline" style="text-align: center;">
                                    <button @click.prevent="loginUser" type="submit" class="btn submit-btn my-3">
                                    SUBMIT
                                    </button>
                                </div>
                                <router-link to="/login" class="nav-item nav-link center-white">Login</router-link>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- Jumbotron -->
        </section>
<!-- Section: Design Block -->
    </div>
</template>
<script>
export default {
    data(){
        return{
            form:{
                email: ''
            },
            errors: []
        }
    },
    methods:{
         loginUser(){
             axios.post('/api/login', this.form).then(() =>{
                 this.$router.push({ name: "dashboard"}); 
             }).catch((error) =>{
         this.errors = error.response.data.errors;
            })
         }
    }
}
</script>