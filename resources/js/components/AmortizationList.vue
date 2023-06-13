<template>
    <div>
      <h1>Amortizations</h1>
      <ul v-if="amortizations.length > 0">
        <li v-for="amortization in amortizations" :key="amortization.id">
          <div>
            <h3>Amortization ID: {{ amortization.id }}</h3>
            <p>Schedule Date: {{ amortization.schedule_date }}</p>
            <p>Paid At: {{ amortization.paid_at ? amortization.paid_at : 'Not paid' }}</p>
            <p>State: {{ amortization.state }}</p>
            <p>Amount: {{ amortization.amount }}</p>
            <div>
              <h4>Project Details</h4>
              <p>Project Name: {{ amortization.project.name }}</p>
              <p>Project Description: {{ amortization.project.description }}</p>
              <div>
                <h5>Promoter Details</h5>
                <p>Promoter Name: {{ amortization.project.promoter.name }}</p>
                <p>Promoter Email: {{ amortization.project.promoter.email }}</p>
              </div>
            </div>
          </div>
        </li>
      </ul>
      <div v-else>
        No amortizations found.
      </div>
      <div v-if="pagination">
        <button @click="fetchAmortizations(pagination.prev)" :disabled="!pagination.prev">Previous</button>
        <button @click="fetchAmortizations(pagination.next)" :disabled="!pagination.next">Next</button>
      </div>
    </div>
  </template>

  <script>
  export default {
    data() {
      return {
        amortizations: [],
        pagination: null,
      };
    },
    mounted() {
      this.fetchAmortizations();
    },
    methods: {
      fetchAmortizations(url = '/api/v1/amortizations') {
        fetch(url)
          .then((response) => response.json())
          .then((data) => {
            this.amortizations = data.data || [];
            this.pagination = data.links;
          })
          .catch((error) => {
            console.error('Error fetching amortizations:', error);
          });
      },
    },
  };
  </script>
