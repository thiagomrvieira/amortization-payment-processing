<template>
    <div v-if="pagination" class="my-4">
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
</template>

<script>
  export default {
    props: {
      pagination: {
        type: Object,
        required: true,
      },
    },
    methods: {
      fetchAmortizations(url) {
        this.$emit('fetch-amortizations', url);
      },
    },
  };
</script>
