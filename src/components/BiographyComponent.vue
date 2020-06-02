<template>
  <div class="w3-container w3-card w3-white w3-margin-bottom">
    <h2 class="w3-text-grey w3-padding-16">
      <i
        class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"
      ></i
      >{{ $t("message.about") }}
    </h2>
    <div class="w3-container">
      <p class="has-text-justified" v-html="biography"></p>
    </div>
  </div>
</template>

<script>
export default {
  computed: {
    biography() {
      return this.$store.getters.getSection("summary");
    }
  }
};
</script>

<style scoped></style>
