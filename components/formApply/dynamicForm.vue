<template>
  <div class="dynamic-form">
    <loading v-if="loading" />
    <first-step @verifyIIN="verifyIIN" />
    <second-step v-if="second"  @allForm="sendFormToBackEnd" />
    <thx-page v-if="thxPage" />
  </div>
</template>

<script>
import FirstStep from "./firstStep";
import Loading from "~/components/loading";
import SecondStep from "./secondStep";
import ThxPage from './thxPage'
export default {
  name: "dynamicForm",
  data: () => ({
    iin: "",
    current: "",
    loading: false,
    second: false,
    thxPage: false
  }),
  components: {
    FirstStep,
    Loading,
    SecondStep,
    ThxPage
  },
  methods: {
    verifyIIN(data) {
      this.iin = data.iin;
      this.current = data.current
      this.loading = true;
      setTimeout( () => {this.loading = false; this.second = true},2000)
    },
    async sendFormToBackEnd(data){
      data.iin = this.iin
      data.summ = this.current
      console.log(data)
      this.thxPage = true
      let score = await this.$axios({
        method: "post",
        url: "https://score-admin.prodengi.kz/api/v1/public/online",
        data: {iin: data.iin},
        config: { headers: { "Content-Type": "multipart/form-data" } }
      });
      console.log('score', score.data.success)
      data.score = score.data.success ? 'yes' : 'no'
      let form = await this.$axios.post(`${window.location.origin}/api/v1/form.php`, data)
      console.log('form', form)
    }
  }
};
</script>

<style lang="scss" scoped>
.dynamic-form {
  background: #ffffff;
  box-shadow: 0px 2px 4px rgba(67, 96, 126, 0.04),
    0px 3px 20px rgba(67, 96, 126, 0.04);
  border-radius: 4px;
  width: 100%;
  max-width: 34rem;
  padding: 1.6rem;
  @media (max-width: 768px) {
    box-shadow: none;
    padding: 1.6rem 0;
  }
}
</style>
