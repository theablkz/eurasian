<template>
  <div class="form-apply">
    <h3 class="title">Укажите сумму и ваш ИИН и получите решение сразу</h3>
    <div class="form-apply-content">
      <dynamic-form />
      <apply-info />
    </div>
  </div>
</template>

<script>
import DynamicForm from "~/components/formApply/dynamicForm";
import ApplyInfo from '~/components/applyInfo'
export default {
  name: "index",
  components: {
    DynamicForm,
    ApplyInfo
  },
  data: () => ({
    userData: {
      iin: "",
      phone: "",
      email:"",
      name: ""
    }
  }),
  methods: {
    send(){

    }
  }
};
</script>

<style lang="scss" scoped>
.form-apply {
  max-width: 120rem;
  padding: 0 1.6rem;
  margin: auto auto 4rem auto;
  .title {
    font-weight: bold;
    font-size: 30px;
    line-height: 42px;
    @media (max-width: 768px) {
      font-size: 26px;
      line-height: 34px;
    }
  }
  .form-apply-content {
    display: grid;
    grid-template-columns: minmax(320px, 1fr) auto;
    grid-gap: 2.4rem;
    @media (max-width: 768px) {
      grid-template-columns: 1fr;
      justify-items: center;
    }
  }
}
</style>
