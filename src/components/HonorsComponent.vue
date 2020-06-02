<template>
  <div class="content">
    <h1 class="headline">
      <span>
        <span class="icon"> <i class="fa fa-trophy"></i> </span
        >{{ $t("message.honors") }}
      </span>
    </h1>
    <div class="cvitem" v-for="(honor, h) in honors.items" :key="h">
      <article class="media">
        <div class="media-left">
          <TimelineComponent
            :start="honor.start"
            :end="honor.end"
          ></TimelineComponent>
        </div>
        <div class="media-content">
          <div class="content">
            <p class="title is-4">{{ honor.name }}</p>
            <p class="subtitle">{{ honor.auspices }}</p>
            <p class="has-text-justified">{{ honor.description }}</p>
          </div>
        </div>
      </article>
    </div>
  </div>
</template>

<script>
import TimelineComponent from "./TimelineComponent";
export default {
  computed: {
    honors() {
      return this.$store.getters.getSection("honors");
    }
  },
  components: { TimelineComponent: TimelineComponent }
};
</script>

<style scoped>
.media {
  border: none;
}
</style>
