<template>
  <div>
    <form @submit.prevent="submit">
      <label for="iin">
        <p>Ваш ИИН</p>
        <the-mask id="iin" type="number" pattern="\d*" :mask="['############']" />
        <p></p>
      </label>
    </form>
  </div>
</template>

<script>
export default {
  name: "firstStep",
  data: () => (
    {
      iin: ""
    }
  ),
  methods: {
    submit() {}
  }
};
</script>

<style scoped></style>
