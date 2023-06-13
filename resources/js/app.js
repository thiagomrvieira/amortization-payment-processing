import './bootstrap';

import { createApp } from 'vue';
import AmortizationList from './components/AmortizationList.vue';

const app = createApp();

app.component('amortization-list', AmortizationList);

app.mount('#app');
