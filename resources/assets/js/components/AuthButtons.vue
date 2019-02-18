<template>
<div class="mr-4 -mt-2">
  <button @click="register" class="bg-red-darker hover:bg-red-dark text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Register</button> or
  <button @click="login" class="bg-blue-dark hover:bg-blue text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Login</button>
  
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

