<template>
  <div class="w3-container w3-card w3-white w3-margin-bottom">
    <h2 class="w3-text-grey w3-padding-16">
      <i
        class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"
      ></i
      >{{ $t("message.experience") }}
    </h2>
    <div v-for="(employ, e) in orderedPositions" :key="e">
      <div class="w3-container">
        <i class="fa fa-calendar fa-fw w3-margin-right"></i
        >{{ employ.dateRange.start.year }} -
        <span class="w3-tag w3-teal w3-round">
          <div v-if="employ.dateRange.end">{{ employ.dateRange.end.year }}</div>
          <div v-else>Current</div>
        </span>
        <h5 class="w3-opacity">
          <b>{{ employ.title }} | {{ employ.company }}</b>
        </h5>
        <h6 class="w3-text-teal"></h6>
        <p v-html="textClass(employ.description)"></p>
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
      positions: this.$store.getters.getSection("positions")
    };
  },
  computed: {
    orderedPositions() {
      return _.orderBy(this.positions, "dateRange.start.year").reverse();
    }
  },
  methods: {
    textClass(str) {
      return str.replace(/(?:\r\n|\r|\n)/g, "<br>");
    }
  }
};
</script>

<style scoped></style>
