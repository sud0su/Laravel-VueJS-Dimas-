<template>
  <div class="container mt-5">
    <h1 class="mb-4">Samples</h1>
    <div class="mb-3">
      <Link href="/admin/samples/create" class="btn btn-primary">Create Sample</Link>
    </div>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Description</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="sample in samples" :key="sample.id">
          <td>{{ sample.id }}</td>
          <td>{{ sample.name }}</td>
          <td>{{ sample.description }}</td>
          <td>
            <Link :href="`/admin/samples/${sample.id}/edit`" class="btn btn-warning btn-sm"
              >Edit</Link
            >
            <button @click="deleteSample(sample.id)" class="btn btn-danger btn-sm">
              Delete
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import { router, Link } from "@inertiajs/vue3";
import LayoutApp from "../../Layouts/App.vue";

export default {
  layout: LayoutApp,
  components: {
    Link,
  },
  props: {
    samples: Array,
  },
  methods: {
    deleteSample(id) {
      if (confirm("Are you sure?")) {
        router.delete(`/admin/samples/${id}`);
      }
    },
  },
};
</script>
