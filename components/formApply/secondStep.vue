<template>
  <div class="second-step">
    <div class="second-form">
      <img class="success-image" :src="successImage" alt="" />
      <div class="success-info">
        <h1 class="success-title">
          Отлично!
        </h1>
        <h2 class="success-description">
          Вам может быть одобрен кредит на сумму до
          <span>1 000 000</span> тенге. Пожалуйста, оставьте ваши данные -
          менеджер свяжется с вами для уточнения деталей и расчета платежей
        </h2>
      </div>
      <div class="success-form">
        <form @submit.prevent="sendForm">
          <div class="input-container">
            <label for="name">
              <p :class="{error: name.err}">Ваше имя</p>
              <input id="name" type="text" :class="{error: name.err}" v-model="name.val" placeholder="Абылай"/>
              <p v-if="name.err" class="warning">{{name.errText}}</p>
            </label>
          </div>
<!--          //-->
          <div class="input-container">
            <label for="phone">
              <p :class="{error: phone.err}">Ваш мобильный телефон</p>
              <input
                id="phone"
                type="tel"
                v-mask="'+7(###)-###-##-##'"
                v-model="phone.val"
                :class="{error: phone.err}"
                placeholder="+7(###)-###-##-##"
              />
              <p v-if="phone.err" class="warning">{{phone.errText}}</p>
            </label>
          </div>
<!--          //-->
          <div class="input-container">
            <label for="city">
              <p :class="{warning: city.err}">Ваш город</p>
              <select v-model="city.val" name="city" id="city" :class="{error: city.err}">
                <option disabled value="">Выберите город</option>
                <option v-for="(item, index) in city.items" :key="index">{{item}}</option>

              </select>
              <p v-if="city.err" class="warning">{{city.errText}}</p>
            </label>
          </div>
<!--          //-->
          <div class="input-contaier">
            <label for="email">
              <p :class="{error: email.err}">Ваш емейл</p>
              <input type="email" id="email" v-model="email.val" :class="{error: email.err}" />
              <p v-if="!email.err" class="warning">
                Вспомните точный адрес емейла или заведите новый на gmail.com.
                На него будет отправлено решение по кредиту
              </p>
              <p v-else class="warning">{{email.errText}}</p>
            </label>
          </div>
          <div>
            <label for="personal" class="personal-data">
              <input v-model="personalData" type="checkbox" id="personal" />
              <p class="personal-data__text">
                Ваши данные надежно защищены и не будут переданы сторонним компаниям
              </p>
            </label>
          </div>

          <button class="submit-form">Отправить заявку!</button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "secondStep",
  data: () => ({
    successImage: require("~/assets/images/success.svg"),
    personalData: true,
    city: {
      val: "",
      err: false,
      errText: "Пожалуйста, выберите город",
      items: ['Нур-Султан', 'Алматы', 'Аксай', 'Аксу', 'Актау', 'Актобе', 'Аркалык', 'Атырау', 'Аягоз', 'Балхаш', 'Булаево', 'Жанаозен', 'Жаркент', 'Жезказган', 'Жетысай', 'Житикара', 'Зайсан', 'Зыряновск', 'Капшагай', 'Караганда', 'Каскелен', 'Кокшетау', 'Костанай', 'Кульсары', 'Кызылорда', 'Лисаковск', 'Отеген батыр', 'Павлодар', 'Петропавловск', 'Риддер', 'Рудный', 'с.Уил', 'Сарыагаш', 'Семей', 'Сетпногорск', 'Тайныша', 'Талгар', 'Талдыкорган', 'Тараз', 'Темиртау', 'Туркестан', 'Узынагаш', 'Уральск', 'Усть-Каменогорск', 'Хромтау', 'Шахтинск', 'Шу', 'Шымкент', 'Экибастуз'],

    },
    name: {
      val: "",
      err: false,
      errText: "Пожалуйста, заполните поле"
    },
    phone: {
      val: "",
      err: false,
      errText: "Пожалуйста, заполните поле"
    },
    email: {
      val: "",
      err: false,
      errText: "Пожалуйста, заполните поле"
    },
  }),
  watch: {
    "name.val": function () {
      this.name.err = false
      this.name.errText = "Пожалуйста, заполните поле"
    },
    "phone.val": function () {
      this.phone.err = false
      this.phone.errText = "Пожалуйста, заполните поле"
    },
    "email.val": function () {
      this.email.err = false
      this.email.errText = "Пожалуйста, заполните поле"
    },
    "city.val": function () {
      this.city.err = false
      this.city.errText = "Пожалуйста, выберите город"
    }
  },
  methods: {
    sendForm() {
      let err = []
      let form = ["name", "city", "phone", "email"]
      form.map(item => {
        if(!this[item].val){
          this[item].err = true
          err = [item, ...err]
        }
      })
      if(this.phone.val.length != 17){
          this.phone.errText = "номер не валиден"
          this.phone.err = true
        err = ["phone", ...err]
      }
      let regEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
      if(!regEmail.test(this.email.val)){
        this.email.errText = "email не валиден"
        this.email.err = true
      }
      if(err.length == 0){
        this.$emit("allForm", {name: this.name.val, phone: this.phone.val, email: this.email.val, city: this.city.val})
      }

    }
  }
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
    padding: 1.6rem 1.6rem 4rem 1.6rem;
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
