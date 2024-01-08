import './bootstrap'

import { createApp } from 'vue'

// import Counter from './components/Counter.vue'
import Departments from './components/Departments.vue'

const app = createApp({})

app.component('departments', Departments)

window.url = '/'
app.mount('#app')
