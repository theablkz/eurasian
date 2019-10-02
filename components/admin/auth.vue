<template>
<div class="auto-form">
  <form @submit.prevent="adminCheck">
    <input type="text" v-model="login" placeholder="login">
    <input type="password" v-model="password" placeholder="password">
    <button>войти</button>
  </form>
</div>
</template>

<script>
    export default {
        name: "auth",
      data: () => ({
        login: "",
        password : "",
        err: false
      }),
      methods: {
        adminCheck(){
          if(this.login == "root" && this.password == 'lfqljcneg'){
            this.$emit('checkAdmin')
          }else{
            this.err = true
          }
        }
      }
    }
</script>

<style lang="scss" scoped>
  .auto-form{

    max-width: 40rem;
    width: 100%;
    margin: 4rem auto 7rem auto;
  }
</style>
