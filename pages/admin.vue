<template>
    <div>
      <auth v-if="!admin" @checkAdmin="checkAdmin" />
      <view-data v-if="admin" :items="users" @getAll="getAll" @paginate="getPaginate" />
    </div>
</template>

<script>
  import Auth from '~/components/admin/auth'
  import ViewData from '~/components/admin/viewData'
  import {json2excel, excel2json} from 'js2excel';

  export default {
        name: "admin",
      components: {
          Auth,
        ViewData
      },
      data: () => ({
        admin: false,
        users: [],
        pagination: 0
      }),
      methods: {
        async checkAdmin(){
          this.admin = true
          this.getData()
        },
        getPaginate(pg){
          this.pagination = pg - 1
          this.getData()
        },
        async getData(){
          console.log(window.location.origin)
          let form = await this.$axios.get(`${window.location.origin}/api/v1/getInfo.php?rows=${this.pagination}`)
          console.log('data', form.data.result)
          this.users = form.data.result
        },
        async getAll(){
          let form = await this.$axios.get(`${window.location.origin}/api/v1/getAll.php`)

          let { json2excel, excel2json } = require('js2excel');
          let data = form.data.result
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

<style scoped>

</style>
