<template>
<div class="mr-4 -mt-2">
  <button @click="login" class="px-4 mr-1 py-2 bg-blue-dark font-semibold border border-blue-dark hover:bg-white hover:text-blue-darker text-white rounded-lg">Login</button>
  <button @click="register" class="px-4 py-2 bg-red-darker font-semibold border border-red-darker hover:bg-white hover:text-red-darker text-white rounded-lg">Register</button>
</div>
</template>

<script>
export default {
  data() {
    return {
      loginOpen: false,
      registerOpen: false
    };
  },

  methods: {
    login() {
      if (this.loginOpen) {
        this.closeLogin();
      } else {
        this.openLogin();
      }
    },

    register() {
      if (this.registerOpen) {
        this.closeRegister();
      } else {
        this.openRegister();
      }
    },

    openLogin() {
      this.loginOpen = true;
      this.closeRegister();
      document.querySelector("#login-modal").style.display = "flex";
    },

    closeLogin() {
      this.loginOpen = false;
      document.querySelector("#login-modal").style.display = "none";
    },

    openRegister() {
      this.registerOpen = true;
      this.closeLogin();
      document.querySelector("#register-modal").style.display = "flex";
    },

    closeRegister() {
      this.registerOpen = false;
      document.querySelector("#register-modal").style.display = "none";
    }
  }
};
</script>

