<template>
  <div class="container">
    <header-component/>
    <main-component @toForm="scrollToForm"/>
    <form-apply ref="form" />
    <ask />
  </div>
</template>

<script>
  import HeaderComponent from '~/components/headerComponent'
  import MainComponent from '~/components/mainComponent'
  import FormApply from '~/components/formApply'
  import Ask from '~/components/ask'

  export default {
    components: {
      HeaderComponent,
      MainComponent,
      FormApply,
      Ask
    },
    methods: {
      scrollToForm(){
         window.scrollTo({
            top: this.$refs.form.$el.offsetTop,
            left: 0,
            behavior: 'smooth'
        });

      },
        exel(){


        }
    }
  }
</script>

<style lang="scss">

</style>
