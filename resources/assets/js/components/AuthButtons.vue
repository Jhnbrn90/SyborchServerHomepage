<template>
<div class="mr-4 -mt-2">
  <a @click="register" class="cursor-pointer hover:text-red-light text-red-dark">Register</a> 
  or
  <button @click="login" class="cursor-pointer hover:text-blue-light text-blue-dark">Login</button>
  
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

