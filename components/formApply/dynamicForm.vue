<template>
    <div class="dynamic-form">
        <first-step />
    </div>
</template>

<script>
  import FirstStep from './firstStep'
    export default {
        name: "dynamicForm",
      components: {
          FirstStep
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
}
</style>
