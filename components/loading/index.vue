<template>
  <div class="loading">
    <div class="loading-info">
      <img class="loading-icon" :src="loadingIcon" alt="" />
      <h3 class="loading-info__text">идет загрузка. пожалуйста подождите</h3>
    </div>

  </div>
</template>
<script>
export default {
  data: () => ({
    loadingIcon: require("~/assets/images/loading.svg"),
    secondStep: false
  })
};
</script>
<style lang="scss" scoped>
.loading {
  position: fixed;
  background: rgba($color: #000000, $alpha: 0.7);
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  margin: auto;
  display: flex;
  justify-content: center;
  align-items: center;
  .loading-info {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }
}
.loading-icon {
  width: 80px;
  height: 80px;
  animation: round 2s ease infinite;
}
.loading-info__text {
  color: white;
}

@keyframes round {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
</style>
