<template>
  <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M15 8C15 7.44772 15.4477 7 16 7C16.5523 7 17 7.44772 17 8L17 24C17 24.5523 16.5523 25 16 25C15.4477 25 15 24.5523 15 24L15 8Z" fill="white"/>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M16 22.5858L21.2929 17.2929C21.6834 16.9024 22.3166 16.9024 22.7071 17.2929C23.0976 17.6834 23.0976 18.3166 22.7071 18.7071L16.7071 24.7071C16.3166 25.0976 15.6834 25.0976 15.2929 24.7071L9.29289 18.7071C8.90237 18.3166 8.90237 17.6834 9.29289 17.2929C9.68342 16.9024 10.3166 16.9024 10.7071 17.2929L16 22.5858Z" fill="white"/>
  </svg>

</template>

<script>
    export default {
        name: "arrow-down"
    }
</script>

<style lang="scss" scoped>
svg{
  animation: mymove .5s infinite alternate ease-in;

}

@keyframes mymove {
  from {
    transform: translateY(-4px);
  }
  to {
    transform: translateY(4px);
  }
}
</style>
