<template>
  <div class="container">
    <header-component />
    <main-component />
  </div>
</template>

<script>
import HeaderComponent from '~/components/headerComponent'
import MainComponent from '~/components/mainComponent'
export default {
  components: {
      HeaderComponent,
    MainComponent
  }
}
</script>

<style lang="scss">

</style>
