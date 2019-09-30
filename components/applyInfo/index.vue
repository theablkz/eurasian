<template>
  <div class="apply-info">
    <div v-for="(item, index) in items" :key="index" class="apply-info-item">
      <img class="apply-info-item__icon" :src="item.image" alt />
      <p class="apply-info-item__text">{{item.text}}</p>
    </div>
  </div>
</template>

<script>
export default {
  data: () => ({
    items: [
      {
        image: require("~/assets/images/analytics.svg"),
        text: "Чем меньше срок, тем меньше ставка вознаграждения"
      },
      {
        image: require("~/assets/images/calendar.svg"),
        text: "Максимальный срок займа: до 4 лет"
      },
      {
        image: require("~/assets/images/checklist.svg"),
        text: "Минимальный пакет документов"
      },
      {
        image: require("~/assets/images/employees.svg"),
        text: "Возраст от 21 до 65 лет "
      },
      {
        image: require("~/assets/images/percentage.svg"),
        text: "Сумма займа до 5 000 000 тенге"
      },
      {
        image: require("~/assets/images/comission.svg"),
        text: "Комиссия 0%"
      }
    ]
  })
};
</script>

<style lang="scss" scoped>
.apply-info {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 1.6rem;
  margin: 2.4rem 0;
  @media (max-width: 768px){
    grid-template-columns: repeat(2, 1fr);
  }
}
.apply-info-item {
  display: flex;
  align-items: center;
  flex-direction: column;

  .apply-info-item__icon {
    width: 6.4rem;
    height: 6.4rem;
    @media (max-width: 768px){
      width: 4rem;
      height: 4rem;
    }
  }
  .apply-info-item__text {
    font-weight: 500;
    font-size: 14px;
    line-height: 18px;
    margin-top: 1.6rem;
    text-align: center;
  }
}
</style>
