<template>
  <div class="second-step">
    <div class="second-form">
      <img class="success-image" :src="successImage" alt="" />
      <div class="success-info">
        <h1 class="success-title">
          Спасибо!
        </h1>
        <h2 class="success-description">
          Ждите от нас звонка! Или приходите сразу в наши отделения, адреса  - <a href="https://eubank.kz/maps/">здесь</a>
        </h2>
      </div>

    </div>
  </div>
</template>

<script>
  export default {
    name: "thx-page",

    data: () => ({
      successImage: require("~/assets/images/success.svg")
    })

  };
</script>

<style lang="scss" scoped>
  .second-step {
    position: fixed;
    background: rgba($color: white, $alpha: 1);
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    margin: auto;
    .second-form {
      max-width: 80rem;
      margin: auto;
      padding: 0 16px;
      overflow-x: hidden;
      overflow-y: auto;
      display: flex;
      flex-direction: column;
      align-items: center;
      height: 100%;
      .success-image {
        width: 100%;
        max-width: 45rem;
      }
      .success-info {
        margin-bottom: 2.4rem;
        .success-title {
          color: #46ac4a;
          text-align: center;
          margin: 1.6rem 0;
        }
        .success-description {
          text-align: center;
          span {
            color: #46ac4a;
            white-space: nowrap;
          }
        }
      }
      .success-form {
        max-width: 40rem;
        .input-container {
          margin-bottom: 1.6rem;
        }
      }
    }
  }

  .personal-data {
    display: flex;
    margin: 1.6rem 0;

    .personal-data__text{
      font-size: 1.2rem;
      line-height: 1.4rem;
    }
    input {
      width: 3.4rem;
      height: auto;

      background: #ffffff;
      border: none;
      box-sizing: border-box;
      border-radius: 0;
      padding: 0;
      font-family: "Montserrat", sans-serif;
      font-style: normal;
      font-weight: normal;
      font-size: 1.4rem;
      line-height: 1.6rem;

      &:focus {
        border: none;
        box-shadow: none;
      }
    }
  }
</style>
