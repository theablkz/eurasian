<template>
  <div class="main-component">
    <img class="main-component-background" :src="bg" alt="" />
    <div class="main-content">
      <div>
        <h2 class="main-title">
          Лёгкий кредит за <span>1</span> день до <span>5 000 000 ₸</span>
        </h2>
        <p class="main-description">
          Без залога и справок. По всему Казахстану
        </p>
      </div>
      <button class="to-form">Подать заявку <arrow-down /></button>
    </div>
    <div class="main-blocks-container">
      <div class="main-blocks">
        <img :src="money" alt="">
        <p>Кредит без залога на любые цели</p>
      </div>
      <div class="main-blocks">
        <img :src="search" alt="">
        <p>Минимальные требования по доходам</p>
      </div>
      <div class="main-blocks">
        <img :src="giveMoney" alt="">
        <p>Получите деньги в день оформления</p>
      </div>
    </div>
  </div>
</template>

<script>
import ArrowDown from "~/components/icons/arrow-down";
export default {
  name: "index",
  components: {
    ArrowDown
  },
  data: () => ({
    bg: require("~/assets/images/mainBG.png"),
    money: require("~/assets/images/money.svg"),
    giveMoney: require("~/assets/images/giveMoney.svg"),
    search: require("~/assets/images/search.svg"),
  })
};
</script>

<style lang="scss" scoped>
.main-component {
  position: relative;
  margin-bottom: 16rem;
  .main-content {
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    max-width: 120rem;
    margin: auto;
    padding: 0 1.6rem;
    display: flex;
    flex-direction: column;
    justify-content: center;

    .main-title {
      font-style: normal;
      font-weight: 800;
      font-size: 38px;
      line-height: 48px;
      /* or 126% */
      max-width: 52.5rem;
      letter-spacing: -0.01em;
      span {
        color: #ff006e;
        white-space: nowrap;
      }
    }
    .main-description {
      font-size: 2rem;
      font-weight: 500;
      margin: 2.4rem 0 4rem 0;
    }

    .to-form {
      background: #ff006e;
      border-radius: 5.4rem;
      border: none;
      padding: 1.6rem 4rem;
      width: max-content;

      font-family: "Montserrat", sans-serif;
      font-style: normal;
      font-weight: 600;
      font-size: 1.6rem;
      line-height: 1.6rem;

      color: #ffffff;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    @media (max-width: 768px) {
      position: static;
      margin-bottom: 4.8rem;
      margin-top: 2.4rem;
      .main-title{
        font-size: 2.8rem;
        line-height: 4rem;
        max-width: initial;
      }
      .main-description {
        font-size: 1.8rem;
        margin: 1.6rem 0;
      }
      .to-form{
        width: 100%;
        max-width: 50rem;
        padding: 1rem 4rem;
      }
    }
  }

  .main-component-background {
    width: 100%;
    height: 74.4rem;
    object-fit: cover;
    object-position: 66%;
    @media (max-width: 768px) {
      height: 40rem;
    }
  }

  .main-blocks-container {
    position: absolute;
    right: 0;
    left: 0;
    max-width: 120rem;
    margin: auto;
    padding: 0 1.6rem;
    bottom: -10.8rem;
    display: grid;
    grid-template-columns: repeat(3, 21.6rem);
    grid-template-rows: repeat(1, 21.6rem);
    grid-column-gap: 2.4rem;
    grid-row-gap: 1.6rem;

    .main-blocks {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: space-evenly;
      text-align: center;
      width: 100%;
      height:  100%;
      padding: 1.6rem;
      background: #ffffff;
      box-shadow: 0px 2px 4px rgba(67, 96, 126, 0.04),
        0px 3px 20px rgba(67, 96, 126, 0.04);
      border-radius: 8px;
      img{
        width: 8rem;
        height: 8rem;
      }
      p{
        font-size: 1.4rem;
        font-weight: 500;
      }
    }
    @media (max-width: 768px) {
      position: static;
      grid-template-columns: repeat(1, 1fr);
      grid-template-rows: repeat(3, auto);
      .main-blocks {
        flex-direction: row;
        justify-content: left;
        p{
          padding: 0 1.6rem;
        }
      }
    }
  }
}

</style>
