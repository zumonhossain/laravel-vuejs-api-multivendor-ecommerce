import { defineStore } from 'pinia';
import axios from "axios";

export const useAuth = defineStore('auth', {

    state: () => ({ errors: {}  }),

    actions: {
        async login(formData){
            
            
            try {
                let res = await axios.post(import.meta.env.VITE_API_URL + "/api/v1/user/login", formData );

                if(res.status == 200){
                    console.log(res.data);
                }

            } catch (error) {
                if(error.response.data){
                    this.errors = error.response.data.errors;
                }
            }
        },
    },
});



