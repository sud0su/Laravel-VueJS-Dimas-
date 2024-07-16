<template>
  <div class="container mt-5">
    <h1 class="mb-4">Edit Sample</h1>
    <form @submit.prevent="submit">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" v-model="form.name" class="form-control" id="name" />
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea
          v-model="form.description"
          class="form-control"
          id="description"
        ></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
</template>

<script>
import { router } from "@inertiajs/vue3";
import LayoutApp from "../../Layouts/App.vue";

export default {
  layout: LayoutApp,

  props: {
    sample: Object,
  },
  data() {
    return {
      form: {
        name: this.sample.name,
        description: this.sample.description,
      },
    };
  },
  methods: {
    submit() {
      router.put(`/admin/samples/${this.sample.id}`, this.form);
    },
  },
};
</script>
