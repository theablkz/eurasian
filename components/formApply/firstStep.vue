<template>
  <div>
    <form @submit.prevent="submit">
      <div class="input-container">
        <label for="iin">
          <p :class="{error: error}">Ваш ИИН</p>
          <input
            type="tel"
            id="iin"
            pattern="\d*"
            v-mask="'############'"
            v-model="iin"
            :class="{error: error}"
          />
          <p class="warning">{{warning}}</p>
        </label>
      </div>
      <div class="input-container">
        <label for="summ">
          <p :class="{error: currentError}">Сумма</p>
          <the-mask
            mask="FFFFFFFFFFFFF"
            :tokens="hexTokens"
            id="summ"
            inputmode="numeric"
            v-model="current"
            :class="{error: currentError}"

          />
          <p class="warning">{{currentWarning}}</p>
        </label>
      </div>
      <button class="submit-form">Получить решение</button>
    </form>

    <div class="flexable">
      <svg
        width="27"
        height="25"
        viewBox="0 0 27 25"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M26.8762 12.3352L26.4233 11.7963C26.3332 11.6891 26.2043 11.6221 26.0647 11.61C25.9259 11.5982 25.7867 11.6417 25.6794 11.7317L24.2224 12.9562C24.3849 10.6191 23.8668 8.27534 22.7069 6.20214C20.5664 2.37652 16.5047 0 12.1066 0C10.0489 0 8.00832 0.533082 6.20578 1.54167C3.38395 3.12064 1.34447 5.70855 0.463229 8.82855C-0.417873 11.9486 -0.0338121 15.221 1.54523 18.0429C3.68756 21.8717 7.73935 24.2502 12.1195 24.2502C12.5658 24.2502 13.0176 24.2253 13.4623 24.1762C13.7521 24.1441 13.9611 23.8832 13.9291 23.5934L13.8518 22.8938C13.8198 22.604 13.56 22.395 13.2692 22.427C12.8885 22.4691 12.502 22.4903 12.1205 22.4903C8.37626 22.4903 4.9126 20.457 3.08098 17.1837C0.290415 12.1962 2.07775 5.8682 7.0652 3.07756C8.60602 2.21546 10.3497 1.75981 12.108 1.75981C15.8687 1.75981 19.3416 3.79134 21.1714 7.06156C22.1698 8.84608 22.6118 10.8651 22.4638 12.8765L21.1735 11.3411C20.9859 11.1179 20.6529 11.0889 20.4298 11.2765L19.8908 11.7294C19.7836 11.8195 19.7166 11.9485 19.7045 12.088C19.6924 12.2275 19.7361 12.3661 19.8263 12.4733L22.6765 15.8647C22.7809 15.989 22.9303 16.053 23.0808 16.053C23.2007 16.053 23.3213 16.0124 23.4203 15.9293L26.8118 13.0791C26.9188 12.989 26.986 12.86 26.998 12.7205C27.0101 12.581 26.9663 12.4424 26.8762 12.3352Z"
          fill="#229B26"
        />
        <path
          d="M18.4554 22.1222H16.7893L17.7808 20.8875C19.0644 19.3753 19.0105 18.3422 18.739 17.7416C18.4541 17.1114 17.7924 16.7117 17.0118 16.6985C16.1142 16.684 15.2836 17.1778 14.9031 17.9494C14.8661 18.0245 14.8604 18.1113 14.8872 18.1906C14.9141 18.2699 14.9714 18.3353 15.0466 18.3723L15.6129 18.6517C15.7693 18.7288 15.9586 18.6645 16.0358 18.5081C16.235 18.1044 16.664 17.961 16.971 17.961L16.9907 17.9613C17.282 17.9662 17.5054 18.0785 17.5881 18.2618C17.717 18.5469 17.5809 19.1731 16.8128 20.0761C16.8109 20.0783 16.8089 20.0806 16.8071 20.0829L14.5674 22.8715C14.4913 22.9662 14.4764 23.0962 14.5287 23.2057C14.5813 23.3152 14.6921 23.3849 14.8136 23.3849H18.4553C18.6297 23.3849 18.771 23.2436 18.771 23.0692V22.4377C18.7711 22.2635 18.6298 22.1222 18.4554 22.1222Z"
          fill="#229B26"
        />
        <path
          d="M23.7906 20.8125H23.4947V17.1999C23.4947 17.0256 23.3535 16.8842 23.179 16.8842H22.5438C22.4411 16.8842 22.3449 16.9341 22.2857 17.0178L19.0673 21.5776C18.9993 21.674 18.9907 21.8003 19.045 21.905C19.0992 22.0097 19.2073 22.0754 19.3253 22.0754H22.2318V23.0127C22.2318 23.1871 22.3732 23.3285 22.5475 23.3285H23.179C23.3535 23.3285 23.4947 23.1871 23.4947 23.0127V22.0754H23.7906C23.965 22.0754 24.1064 21.9341 24.1064 21.7597V21.1282C24.1065 20.9539 23.9651 20.8125 23.7906 20.8125ZM22.2318 20.8125H21.1533L22.2318 19.2845V20.8125Z"
          fill="#229B26"
        />
        <path
          d="M13.0161 4.67879L12.3122 4.67874C12.2188 4.67879 12.1292 4.71587 12.0632 4.78188C11.9972 4.84788 11.9601 4.93742 11.9601 5.0307L11.9601 12.5453L7.2882 12.5453C7.19482 12.5453 7.10537 12.5824 7.03937 12.6484C6.97337 12.7144 6.93629 12.8039 6.93634 12.8972L6.93639 13.6011C6.93639 13.7955 7.09392 13.9531 7.28834 13.9531L13.0161 13.9532C13.1094 13.9532 13.1989 13.9161 13.2649 13.8501C13.3309 13.7841 13.368 13.6945 13.368 13.6013L13.368 5.0308C13.3679 4.83643 13.2104 4.67889 13.0161 4.67879Z"
          fill="#229B26"
        />
      </svg>
      <p>Принимаем заявки 24/7</p>
    </div>
    <div class="flexable">
      <svg
        width="20"
        height="24"
        viewBox="0 0 20 24"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M10.0001 0C10.0001 0 7.2413 3.31034 0.896606 3.31034V11.2076C0.896606 15.3314 2.6875 19.3084 5.92999 21.8566C7.07743 22.7586 8.43095 23.5345 10.0001 24C11.5692 23.5345 12.9223 22.7586 14.0701 21.8566C17.3126 19.3084 19.1035 15.3314 19.1035 11.2076V3.31034C12.7588 3.31034 10.0001 0 10.0001 0Z"
          fill="#556080"
        />
        <path
          d="M9.99996 21.377C9.12148 21.0323 8.27113 20.539 7.46424 19.9047C4.90617 17.8945 3.37927 14.6433 3.37927 11.2076V5.63916C6.43762 5.24896 8.6092 4.18509 9.99996 3.23999C11.3907 4.18509 13.5623 5.24896 16.6207 5.63916V11.2076C16.6207 14.6433 15.0938 17.8945 12.5361 19.9047C11.7288 20.539 10.8784 21.0323 9.99996 21.377Z"
          fill="#4FBA6F"
        />
        <path
          d="M6.47058 13.0588L8.94117 15.5294L14.5882 9.88232"
          stroke="white"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
      </svg>
      <p>Ваши данные надежно защищены</p>
    </div>
  </div>
</template>

<script>
  import {TheMask} from 'vue-the-mask'
export default {
  name: "firstStep",
  components: {TheMask},
  data: () => ({
    hexTokens: {
      F: {
        pattern: /[0-9]|| ' ' */,
        transform: v => v.toLocaleUpperCase()
      }
    },
    iin: "",
    warning: "укажите точный - это влияет на скоринг",
    error: false,
    current: "",
    currentWarning: "укажите сумму которую хотите получить",
    currentError: false
  }),
  watch: {
    iin: function() {
      this.error = false;
      this.warning = "Точность ИИНа влияет на решение";
    },
    current: function () {
      this.currentError = false;
      this.currentWarning = "Укажите сумму которую хотите получить"
    }

  },
  methods: {
    numberFormat(){
      this.current = this.current.toString().replace(/\s/g, '').replace(/\B(?=(\d{3})+(?!\d))/g, " ");
    },
    submit() {
      if (!this.is_valid_inn(this.iin)) {
        this.warning = "иин который вы указали не существует";
        this.error = true;
      }
      if(this.current.length == 0){
        this.currentWarning = "поле не должно быть пустым"
        this.currentError = true
      }


      if(!this.error && !this.currentError){
        this.$emit("verifyIIN", {iin: this.iin, current: this.current})
      }
    },
    is_valid_inn(i) {
      if (i.match(/\D/)) {
        return false;
      }
      let iin = i;

      if (iin.length !== 12) {
        return false;
      }

      let razryad = {
        1: { gen: "man", century: 1800 },
        2: { gen: "baba", century: 1800 },
        3: { gen: "man", century: 1900 },
        4: { gen: "baba", century: 1900 },
        5: { gen: "man", century: 2000 },
        6: { gen: "baba", century: 2000 }
      };
      let century = Object.keys(razryad);
      century = century.find(i => iin[6] == i);
      if (!century) return false;
      century = razryad[century].century;

      let year = century + parseInt(iin.slice(0, 2));
      let month = iin.slice(2, 4);
      let day = iin.slice(4, 6);
      if (day == 0 || day > 31) {
        return false;
      }
      if (month == 0 || month > 31) {
        return false;
      }
      if (new Date().getFullYear() < year) {
        return false;
      }

      let b1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];
      let b2 = [3, 4, 5, 6, 7, 8, 9, 10, 11, 1, 2];
      let a = [];
      let controll = 0;

      for (let i = 0; i < 12; i++) {
        a[i] = parseInt(iin.substring(i, i + 1));
        if (i < 11) controll += a[i] * b1[i];
      }

      controll = controll % 11;

      if (controll === 10) {
        controll = 0;
        for (let i = 0; i < 11; i++) controll += a[i] * b2[i];
        controll = controll % 11;
      }

      if (controll !== a[11]) {
        return false;
      }

      // this.setiin(i);

      return true;
    }
  }
};
</script>

<style lang="scss" scoped>

.input-container{
  margin-bottom: 1.6rem;
}


.flexable {
  display: flex;
  align-items: center;
  margin-top: 16px;
  font-weight: 500;
  p {
    font-size: 12px;
    line-height: 16px;
  }
  svg {
    margin-right: 8px;
  }
}
</style>
