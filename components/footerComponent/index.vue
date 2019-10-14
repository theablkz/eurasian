<template>
  <div class="footer-component">
    <div class="wrap">
      <div class="footer-content">
        <div class="footer-info">
          <div>
            <logo-eu-bank />
            <p class="company">© 2017-2019 Интернет-портал idengi.kz</p>
          </div>
          <div class="contacts">
            <p>Задайте вопрос по телефону:</p>

            <a href="tel:+7 (702) 008-17-17">
              <p class="number">+7 (702) 008-17-17</p>
            </a>
          </div>
        </div>
        <p class="address"> 050006, г. Алматы, мкр Калкаман, ул. Абилова, д. 15</p>
        <a href="https://eubank.kz/file/license.pdf" target="_blank"><p class="footer-license-link-text">Лицензия №237 от 28 декабря 2007 г., выданная Агентством РК по регулированию и надзору финансового рынка и финансовых организаций Eurasian Bank JSC.</p></a>


      </div>
    </div>
  </div>
</template>

<script>
  import LogoEuBank from '~/components/icons/logoEuBank'
  export default {
    data: () => ({
      logo: require("~/assets/images/prodengi-logo-regular.svg")
    }),
    components: {
      LogoEuBank
    }
  };
</script>


<style lang="scss" scoped>
  @import "~/assets/style/_values.scss";

  .footer-component {
    background-color: #fafafa;

  }

  .wrap {
    max-width: 120rem;
    margin: auto;
    padding: 0 1.6rem;
    .footer-content {
      padding: 2rem 0;

      .load-conditions {
        display: block;

        h2 {
          font-size: 1.6rem;
          margin: 0 0 0.4rem 0;
        }

        &-item {
          h3 {
            font-size: 1.6rem;
            margin: 0 0 0.3rem 0;
          }
          margin: 0 0 1.6rem 0;

        }
      }

      div {
        .company {
          font-style: normal;
          font-weight: normal;
          font-size: 1.2rem;
          line-height: 1rem;
        }

        .number {
          font-style: normal;
          font-weight: bold;
          font-size: 2rem;
          line-height: 2.2rem;
          /* identical to box height */

          text-align: right;

          /* Primary/Green */

          color: $green-color;
        }
      }


      .footer-info{
        margin: 1.6rem 0 0 0;
        padding-top: 1.6rem;
        border-top: 1px solid #f2f2f2;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .address{
        font-size: 1.2rem;
        line-height: 1.6rem;
        margin-top: .8rem;
      }
    }
  }

  @media only screen and (max-width: 768px) {
    .wrap {
      .footer-content{
        .footer-info {
          flex-direction: column-reverse;
          justify-content: flex-start;
          align-items: flex-start;

          div {
            .number {
              text-align: left;
            }
          }

          .contacts {
            margin-bottom: 3.2rem;
          }
        }
      }

    }
  }

  .footer-license-link-text{
    color: blue;
    font-size: 12px;
  }
</style>
