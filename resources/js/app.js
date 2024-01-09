import './bootstrap'

import { createApp } from 'vue'

// import Counter from './components/Counter.vue'
import Departments from './components/Departments.vue'
import Form from 'vform'
window.Form = Form

const app = createApp({})

app.component('departments', Departments)

window.url = '/'
app.mount('#app')
