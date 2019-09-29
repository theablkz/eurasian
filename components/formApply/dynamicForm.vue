<template>
    <div class="dynamic-form">
      <loading />
        <first-step @verifyIIN="verifyIIN"/>
    </div>
</template>

<script>
  import FirstStep from './firstStep'
  import Loading from '~/components/loading'
    export default {
        name: "dynamicForm",
        data: () => ({
          iin: "",
          loading: false
        }),
      components: {
          FirstStep,
          Loading
      },
      methods: {
        verifyIIN(iin){
          this.iin = iin
        }
      }
    }
</script>

<style lang="scss" scoped>
.dynamic-form{
  background: #FFFFFF;
  box-shadow: 0px 2px 4px rgba(67, 96, 126, 0.04), 0px 3px 20px rgba(67, 96, 126, 0.04);
  border-radius: 4px;
  width: 33.6rem;
  padding: 1.6rem;
  @media (max-width: 768px){
    box-shadow: none;
    padding: 1.6rem 0;
  }
}
</style>
