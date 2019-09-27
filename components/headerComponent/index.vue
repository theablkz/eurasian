<template>
  <div class="header">
    <div class="header-grid">
      <div class="header-content">
        <div class="header-block">
          <logo-prodengi />
          <logo-eu-bank />
        </div>
        <div class="header-block">
          <phone />
          <div class="phone-content">
            <p class="tel-description">Задайте вопрос по телефону:</p>
            <a href="tel:+7 (702) 008-17-17">
              <p class="tel-number">+7 (702) 008-17-17</p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import LogoProdengi from "~/components/icons/logoProdengi";
import LogoEuBank from "~/components/icons/logoEuBank";
import Phone from "~/components/icons/phone";
export default {
  name: "header-index",
  components: {
    LogoProdengi,
    LogoEuBank,
    Phone
  }
};
</script>

<style lang="scss" scoped>
.header {
  background-color: white;
  padding: 0.8rem 1.6rem;
  .header-grid {
    max-width: 120rem;
    margin: auto;
  }
}

.header-content {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.header-block {
  display: grid;
  grid-template-columns: repeat(2, auto);
  grid-gap: 1.6rem;
  align-items: center;
  justify-content: center;
  @media (max-width: 768px){
    grid-template-columns: repeat(1, auto);
  }
}

.phone-content{
  .tel-number{
    font-weight: bold;
    font-size: 20px;
    line-height: 24px;
    text-decoration-line: underline;
    color: #43607E;
  }
  .tel-description{
    font-size: 1.4rem;
  }
  @media (max-width: 768px) {
    display: none;
  }
}


</style>
