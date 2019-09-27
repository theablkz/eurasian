<template>
  <div class="form-apply">
    <h3 class="title">Укажите ваш ИИН и получите моментальное решение</h3>
    <div class="form-apply-content">
      <dynamic-form />
    </div>
  </div>
</template>

<script>
import DynamicForm from "~/components/formApply/dynamicForm";
export default {
  name: "index",
  components: {
    DynamicForm
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
  margin: auto;
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
    display: flex;
    justify-content: space-between;
  }
}
</style>
