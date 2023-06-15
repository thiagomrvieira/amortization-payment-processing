<template>
    <div>
      <h1 class="text-3xl font-bold text-black mb-4">Amortization List</h1>
      <ul v-if="amortizations.length > 0">
        <li v-for="amortization in amortizations" :key="amortization.id" class="bg-gray-200 rounded-lg p-4 mb-4">
    <div>
      <p class="text-gray-600">Schedule Date: {{ amortization.schedule_date }}</p>
      <p class="text-gray-600">Paid At: {{ amortization.paid_at ? amortization.paid_at : 'Not paid' }}</p>
      <p class="text-gray-600">State: {{ amortization.state }}</p>
      <p class="text-gray-600">Amount: {{ amortization.amount }}</p>
      <div class="mt-4">
        <h4 @click="toggleProjectDetails(amortization)" class="text-lg font-bold text-black cursor-pointer">
          Project Details
          <svg :class="{'rotate-180': amortization.showProjectDetails}" class="inline h-4 w-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </h4>
        <div v-show="amortization.showProjectDetails" class="text-gray-600">
          <p>Project Name: {{ amortization.project.name }}</p>
          <p>Project Description: {{ amortization.project.description }}</p>
          <div class="mt-2">
            <h5 @click="togglePromoterDetails(amortization)" class="text-md font-bold text-black cursor-pointer">
              Promoter Details
              <svg :class="{'rotate-180': amortization.showPromoterDetails}" class="inline h-4 w-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </h5>
            <div v-show="amortization.showPromoterDetails" class="text-gray-600">
              <p>Promoter Name: {{ amortization.project.promoter.name }}</p>
              <p>Promoter Email: {{ amortization.project.promoter.email }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </li>

      </ul>
      <div v-else class="text-gray-600">No amortizations found.</div>
      <div v-if="pagination" class="mt-4">
        <button
          @click="fetchAmortizations(pagination.prev)"
          :disabled="!pagination.prev"
          class="bg-gray-400 text-white py-2 px-4 rounded mr-2"
        >
          Previous
        </button>
        <button
          @click="fetchAmortizations(pagination.next)"
          :disabled="!pagination.next"
          class="bg-gray-400 text-white py-2 px-4 rounded"
        >
          Next
        </button>
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
        toggleProjectDetails(amortization) {
            amortization.showProjectDetails = !amortization.showProjectDetails;
        },
        togglePromoterDetails(amortization) {
            amortization.showPromoterDetails = !amortization.showPromoterDetails;
        },
    },
  };
  </script>
