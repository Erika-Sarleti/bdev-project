const { default: Axios } = require('axios');
const { contains } = require('jquery');
const { map, includes } = require('lodash');

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
        mediarating: '',
        name: '',
        surname: '',
        email: '',
        password: '',
        cv: '',
        image: '',
        locality: '',
        github: '',
        phone: '',
        role: '',
        password_confirm: '',
        guest_mail: '',
        message: '',
        messagereview: '',
        picsum: 'https://picsum.photos/500/500?random=',
    },
    methods: {
        // function isCharacterALetter(char) {
        //     return (/[a-zA-Z]/).test(char)
        // }
        checkedForms: function() {
            let btnRegister = document.getElementById('btn-register');
            if (this.name != '' &&
                isNaN(this.name) == true &&
                // this.name.test(/[a-zA-Z]/) &&
                // this.name == /^[A-Za-z]+$/ &&
                // this.name.match(letters) == false &&
                this.surname != '' &&
                isNaN(this.surname) == true &&
                this.email.match(/^([\w.%+-]+)@([\w-]+\.)+([\w]{2,})$/i) &&
                this.password != '' &&
                this.password_confirm === this.password &&
                this.role != '' &&
                this.cv != '' &&
                this.locality != '' &&
                this.phone != '') {
                btnRegister.disabled = false;
                console.log('if')
            }
            else {
                btnRegister.disabled = true;
                console.log('elese');
            }
        },
        checkedMessage: function() {
            let btnMessage = document.getElementById('btn-message');
            if  (   this.guest_mail.match(/^([\w.%+-]+)@([\w-]+\.)+([\w]{2,})$/i) &&
                    this.message != ''
                )
                {
                    btnMessage.disabled = false;
                }
                else{
                    btnMessage.disabled = true;
                }
        },
        checkedReview: function() {
            let btnReview = document.getElementById('btn-review');
            if  (this.messagereview != ''
                )
                {
                    btnReview.disabled = false;
                }
                else{
                    btnReview.disabled = true;
                }
        },
        search: function() {
            this.devs = [];
           Axios.get("/api-dev?role=" + this.role)
           .then((response) => {
            // console.log(response);
            this.devs = response.data.response.data;
            this.devs.forEach(element =>{
                element['media'] = response.data.sql[element.user_id].media;
                element['nreview'] = response.data.sql[element.user_id].n_recensioni;
            })
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
            this.devs.forEach(element =>{
                element['media'] = response.data.sql[element.user_id].media;
                element['nreview'] = response.data.sql[element.user_id].n_recensioni;
            })
        })
        }
    }
});



if (document.getElementById('carousel-js')) {
    const item = document.getElementById('carousel-js');

    item.firstChild.classList.add('active');

}

// funzione pagamento formula

let amountShow = document.getElementById('js-amount');
let amount = document.getElementById('amount');
let promo24 = document.getElementById('js-button-24');
let promo72 = document.getElementById('js-button-72');
let promo144 = document.getElementById('js-button-144');

promo24.addEventListener('click', function(){
    amount.setAttribute('value', '2.99')
    amountShow.innerHTML = '2.99€';
})

promo72.addEventListener('click', function(){
    amount.setAttribute('value', '5.99')
    amountShow.innerHTML = '5.99€';
})

promo144.addEventListener('click', function(){
    amount.setAttribute('value', '9.99')
    amountShow.innerHTML = '9.99€';
})

// Register-page




