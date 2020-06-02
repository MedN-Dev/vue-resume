<template>
  <div class="w3-container w3-card w3-white">
    <h2 class="w3-text-grey w3-padding-16">
      <i
        class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"
      ></i
      >{{ $t("message.education") }}
    </h2>

    <div v-for="(school, s) in orderedSchools" :key="s">
      <div class="w3-container">
        <h5 class="w3-opacity">
          <b>{{ school.degree }} | {{ school.school }}</b>
        </h5>
        <h6 class="w3-text-teal">
          <i class="fa fa-calendar fa-fw w3-margin-right"></i
          >{{ school.dateRange.start.year }} -
          <span class="w3-tag w3-teal w3-round">
            <div v-if="school.dateRange.end">
              {{ school.dateRange.end.year }}
            </div>
            <div v-else>Current</div>
          </span>
        </h6>
        <p class="subtitle">{{ school.field }}</p>

        <p>{{ school.description }}</p>
        <hr />
      </div>
    </div>
  </div>
</template>

<script>
import _ from "lodash";

export default {
  data() {
    return {
      educations: this.$store.getters.getSection("education")
    };
  },
  computed: {
    orderedSchools() {
      return _.orderBy(this.educations, "dateRange.start.year").reverse();
    }
  }
};
</script>

<style scoped></style>
