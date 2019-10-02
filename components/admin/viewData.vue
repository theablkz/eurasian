<template>
<div class="admin-container">
  <button @click="getAll">загрузить базу данных</button>
  <div>
      <p>показать данные с <span><input v-model="pagination" type="text"></span> по {{ parseInt(pagination) +49}}</p>
    <button @click="paginate">получить</button>
  </div>
  <div class="base-content">
    <div class="content-column">
      <p>id</p>
      <p>name</p>
      <p>email</p>
      <p>phone</p>
      <p>iin</p>
      <p>city</p>
      <p>date</p>
    </div>
    <div v-for="(item, index) in items" :key="index" class="content-column">
      <p>{{item.id}}</p>
      <p>{{item.name}}</p>
      <p>{{item.email}}</p>
      <p>{{item.phone}}</p>
      <p>{{item.iin}}</p>
      <p>{{item.city}}</p>
      <p>{{item.date}}</p>

    </div>
  </div>
</div>
</template>

<script>
    export default {
        name: "viewData",
      data: () => ({
        pagination: 1
      }),
      props: {
        items: {
          type: Array
        }
      },
      methods: {
        getAll(){
          this.$emit('getAll')
        },
        paginate(){
          if(this.pagination > 0){
            this.$emit("paginate", this.pagination)
          }

        }
      }
    }
</script>

<style lang="scss" scoped>

  .admin-container{
    width: 120rem;
    margin: auto;
    padding: 0 1.6rem;
  }
  .base-content{



    .content-column{
      display: grid;
      grid-template-columns: 1fr 2fr 3fr 2fr 2fr 1.5fr 2fr;
      grid-gap: 1.6rem;
      align-items: center;
      padding: .8rem 0;
      &:nth-child(2n) {
        background: #a7a7a7; /* Цвет фона */
      }
    }
  }

</style>
