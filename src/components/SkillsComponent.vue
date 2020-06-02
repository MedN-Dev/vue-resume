<template>
  <div class="w3-container">
    <p class="w3-large">
      <b
        ><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i
        >{{ $t("message.skills") }}</b
      >
    </p>
    <div v-for="(skill, s) in skills" :key="s">
      <p class="w3-tag w3-teal w3-round">{{ skill }}</p>
      <div class="w3-light-grey w3-round-xlarge w3-small">
        <div
          class="w3-container w3-center w3-round-xlarge w3-teal"
          style="width:100%"
        ></div>
      </div>
    </div>
    <br /><br /><br />
  </div>
</template>

<script>
export default {
  computed: {
    skills() {
      return this.$store.getters.getSection("skills");
    }
  }
};
</script>

<style scoped></style>
