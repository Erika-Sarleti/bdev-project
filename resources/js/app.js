const { default: Axios } = require('axios');
const { defaultsDeep } = require('lodash');

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data: {
        devs: [],
        role: '',
        linkShow: '/guest/',
        sqlData: [],
        results: [],
        nreview: '',
        mediarating: ''
    },
    methods: {
        search: function() {
            this.devs = [];
           Axios.get("/api-dev?role=" + this.role)
           .then((response) => {
               this.devs = response.data.response.data;          
               console.log(this.devs); 
        })
        },
        filter: function() {
            this.devs = [];
            this.sqlData = [];
            this.results = [];
           Axios.get("/api-dev?role=" + this.role + '&nreview=' + this.nreview + '&mediarating=' + this.mediarating)
           .then((response) => {
            console.log(response);
            this.sqlData = Object.keys(response.data.response);

            this.results = this.sqlData.map(function(x){
                return parseInt(x, 10);
            })

            if (this.nreview != 0 || this.mediarating != 0) {
                response.data.sql.data.forEach((element, index) => {
                    if (this.results.includes(element.user_id))
                    {
                        this.devs.push(element);
                    }
    
                });
            } else {
                this.devs = response.data.response.data; 
                
            }
        })
        }
    },
    mounted: function mounted(){
        if(window.location.search){
            let rol = window.location.search.replace('?role=', '');
            if(rol.includes('+')){
                for(i = 0; i < 5; i++){
                    rol =  rol.replace('+', ' ');
                    rol =  rol.replace('+', ' ');
                    rol =  rol.replace('+', ' ');
                } 
            };
                this.role = rol;    
            
            
            Axios.get("/api-dev?role=" + this.role)
           .then((response) => {
            console.log(response); 
            this.devs = response.data.response.data;          
        })
        }
    }
});


// carosello

const item = document.getElementById('carousel-js');

item.firstChild.classList.add('active');

//fine carosello





