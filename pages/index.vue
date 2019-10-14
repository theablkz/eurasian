<template>
  <div class="container">
    <header-component />
    <main-component @toForm="scrollToForm" />
    <form-apply ref="form" />
    <ask />
    <conditions />
    <footer-component />
  </div>
</template>

<script>
import HeaderComponent from "~/components/headerComponent";
import MainComponent from "~/components/mainComponent";
import FormApply from "~/components/formApply";
import Ask from "~/components/ask";
import Conditions from "~/components/conditions";
import FooterComponent from "~/components/footerComponent"

export default {
  components: {
    HeaderComponent,
    MainComponent,
    FormApply,
    Ask,
    Conditions,
    FooterComponent
  },
  methods: {
    scrollToForm() {
      window.scrollTo({
        top: this.$refs.form.$el.offsetTop,
        left: 0,
        behavior: "smooth"
      });
    }
  }
};
</script>

<style lang="scss"></style>
