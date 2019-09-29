<template>
  <div class="container">
    <header-component/>
    <main-component @toForm="scrollToForm"/>
    <form-apply ref="form" />
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
    },
    methods: {
      scrollToForm(){
         window.scrollTo({
            top: this.$refs.form.$el.offsetTop,
            left: 0,
            behavior: 'smooth'
        });
      }
    }
  }
</script>

<style lang="scss">

</style>
