<template>
  <div class="content">
    <h1 class="headline">
      <span>
        <span class="icon"> <i class="fa fa-briefcase"></i> </span
        >{{ $t("message.portfolio") }}
      </span>
    </h1>
    <div class="cvitem" v-for="(folio, f) in portfolio.items" :key="f">
      <article class="media">
        <div class="media-left">
          <TimelineComponent
            :start="folio.start"
            :end="folio.end"
          ></TimelineComponent>
        </div>
        <div class="media-content">
          <div class="content">
            <p class="title is-4 ">
              {{ folio.name }}
              <a class="icon fa fa-link" :href="folio.website"></a>
            </p>
            <p class="subtitle">{{ folio.tagline }}</p>
            <p class="has-text-justified">{{ folio.description }}</p>
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
    portfolio() {
      return this.$store.getters.getSection("portfolio");
    },
    template() {
      return this.$store.getters.getTemplate("portfolio.html");
    }
  },
  components: { TimelineComponent: TimelineComponent }
};
</script>

<style scoped></style>
