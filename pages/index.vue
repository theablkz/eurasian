<template>
  <div class="container">
    <header-component/>
    <main-component/>
    <form-apply />
  </div>
</template>

<script>
  import HeaderComponent from '~/components/headerComponent'
  import MainComponent from '~/components/mainComponent'
  import FormApply from '~/components/formApply'

  export default {
    components: {
      HeaderComponent,
      MainComponent,
      FormApply
    }
  }
</script>

<style lang="scss">

</style>
