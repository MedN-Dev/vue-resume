<template>
  <div class="w3-container">
    <p class="w3-large w3-text-theme">
      <b
        ><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i
        >{{ $t("message.languages") }}</b
      >
    </p>

    <div v-for="(language, l) in languages" :key="l">
      <p>{{ language.language }} | {{ language.proficiency }}</p>
      <div class="w3-light-grey w3-round-xlarge">
        <div
          class="w3-round-xlarge w3-teal"
          style="height:24px;width:100%"
        ></div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  computed: {
    languages() {
      return this.$store.getters.getSection("languages");
    }
  }
};
</script>

<style scoped></style>
