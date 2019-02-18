<template>
    <form @submit.prevent="onSubmit" method="POST" action="/messages" class="sm:w-1/2 w-4/5 text-center inline-flex mt-2">
        <input v-model="message" type="text" class="h-10 shadow-md appearance-none text-center border border-grey rounded w-full py-2 px-3 text-grey-darkest mr-2" placeholder="Have something to say?">
        <button type="submit"
        :class="classes">
            Submit
        </button>
    </form>
</template>

<script>
export default {
  data() {
    return {
      submitted: false,
      message: "",
      classes:
        "bg-transparent hover:bg-blue text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded shadow"
    };
  },

  methods: {
    onSubmit() {
      this.disableForm();

      axios.post("/messages", { message: this.message }).then(({ data }) => {
        this.$emit("new-message", data);
      });

      this.message = "";
      this.enableForm();
    },

    disableForm() {
      this.submitted = true;
      this.classes =
        "opacity-50 cursor-not-allowed bg-transparent text-blue font-semibold py-2 px-4 border border-blue-lightest rounded shadow";
    },

    enableForm() {
      this.submitted = false;
      this.classes =
        "bg-transparent hover:bg-blue text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded shadow";

      this.message = "";
    }
  }
};
</script>

