
require('./bootstrap.js');

import Vue from 'vue';
import axios from 'axios';
import list from './List.vue';



const app = new Vue({
    el: '#listpage',
    components:{
        list
    }
});

