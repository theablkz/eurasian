<template>
  <div class="container">
    <header-component/>
    <main-component @toForm="scrollToForm"/>
    <form-apply ref="form" />
    <ask />
  </div>
</template>

<script>
  import HeaderComponent from '~/components/headerComponent'
  import MainComponent from '~/components/mainComponent'
  import FormApply from '~/components/formApply'
  import Ask from '~/components/ask'
  import {json2excel, excel2json} from 'js2excel';

  export default {
    components: {
      HeaderComponent,
      MainComponent,
      FormApply,
      Ask
    },
    methods: {
      scrollToForm(){
         window.scrollTo({
            top: this.$refs.form.$el.offsetTop,
            left: 0,
            behavior: 'smooth'
        });

      },
        exel(){
            let { json2excel, excel2json } = require('js2excel');
            let data = [
                {
                    "userId": 1,
                    "name": "Abylay",
                    "phone": '87475511196',
                    "iin": '961114301109' ,
                    email:"theablkz@gmail.com"// string
                },
                {
                    "userId": 2,
                    "name": "Abylay",
                    "phone": '87475511196',
                    "iin": '961114301109' ,
                    email:"theablkz@gmail.com"// string
                },
                {
                    "userId": 3,
                    "name": "Abylay",
                    "phone": '87475511196',
                    "iin": '961114301109' ,
                    email:"theablkz@gmail.com"// string
                },{
                    "userId": 4,
                    "name": "Abylay",
                    "phone": '87475511196',
                    "iin": '961114301109' ,
                    email:"theablkz@gmail.com"// string
                },
            ];
            try {
                json2excel({
                    data,
                    name: 'user-info-data',
                    formateDate: 'yyyy/mm/dd'
                });
            } catch (e) {
                console.error('export error');
            }

        }
    }
  }
</script>

<style lang="scss">

</style>
