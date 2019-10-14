<template>
  <div class="ask">
    <div class="ask-container">
      <h2 class="title">
        Вопросы и ответы
      </h2>
      <div class="ask-content">
        <div class="ask-item">
          <div class="ask-text-line-container">
            <img :src="questionIcon" alt="" />
            <p class="ask-title">Какая процентная ставка?</p>
          </div>
          <div class="ask-text-line-container">
            <img :src="descriptionIcon" alt="">
            <p class="ask-desk">Ставка вознаграждения зависит от срока кредитования</p>
          </div>
        </div>
        <div class="ask-item">
          <div class="ask-text-line-container">
            <img :src="questionIcon" alt="" />
            <p class="ask-title">Как можно быстро получить кредит?</p>
          </div>
          <div class="ask-text-line-container">
            <img :src="descriptionIcon" alt="">
            <p class="ask-desk">Кредитные средства возможно получить в течении одного дня (в зависимости от времени подачи заявки)</p>
          </div>
        </div>
        <div class="ask-item">
          <div class="ask-text-line-container">
            <img :src="questionIcon" alt="" />
            <p class="ask-title">Какой перечень документов?</p>
          </div>
          <div class="ask-text-line-container">
            <img :src="descriptionIcon" alt="">
            <div>
              <p class="ask-desk">Удостоверение личности или паспорт*</p>
              <p class="ask-warning">*при необходимости Банк имеет право затребовать иные дополнительные документы</p>
            </div>
          </div>
        </div>
        <div class="ask-item">
          <div class="ask-text-line-container">
            <img :src="questionIcon" alt="" />
            <p class="ask-title">Какая процентная ставка?</p>
          </div>
          <div class="ask-text-line-container">
            <img :src="descriptionIcon" alt="">
            <p class="ask-desk">Ставка вознаграждения зависит от срока кредитования</p>
          </div>
        </div>
        <div class="ask-item">
          <div class="ask-text-line-container">
            <img :src="questionIcon" alt="" />
            <p class="ask-title">Какая процентная ставка?</p>
          </div>
          <div class="ask-text-line-container">
            <img :src="descriptionIcon" alt="">
            <p class="ask-desk">Ставка вознаграждения зависит от срока кредитования</p>
          </div>
        </div>
        <div class="ask-item">
          <div class="ask-text-line-container">
            <img :src="questionIcon" alt="" />
            <p class="ask-title">Какая процентная ставка?</p>
          </div>
          <div class="ask-text-line-container">
            <img :src="descriptionIcon" alt="">
            <p class="ask-desk">Ставка вознаграждения зависит от срока кредитования</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "index",
  data: () => ({
    questionIcon: require("~/assets/images/question-icon.svg"),
    descriptionIcon: require("~/assets/images/description-icon.svg")
  })
};
</script>

<style lang="scss" scoped>
.ask {
  padding: 7.2rem 0 8rem 0;
  width: 100%;
  background-image: url("~assets/images/askBg.svg");
  background-size: cover;
  border-radius: 4px;
  .ask-container {
    max-width: 120rem;
    margin: auto;
    padding: 0 1.6rem;
    .title {
      font-size: 30px;
      line-height: 42px;
    }
    .ask-content {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      grid-gap: 3.2rem;
      border-radius: .8rem;
      margin-top: 2.4rem;
      @media (max-width:768px) {
        grid-template-columns: repeat(1, 1fr);
      }
    }
    .ask-item {
      background: white;
      padding: 1.6rem;
      .ask-text-line-container {
        display: grid;
        grid-template-columns: 2.6rem auto;
        grid-column-gap: 0.8rem;
        .ask-title {
          font-weight: 600;
          font-size: 2rem;
          line-height: 3.2rem;
          margin-bottom: 1.6rem
        }
        .ask-desk{
          font-size: 1.6rem;
          line-height: 2.2rem
        }
        .ask-warning{
          font-size: 1.2rem;
          line-height: 1.6rem;
        }
      }
    }
  }
}
</style>
