<template>
  <div>
    <div class="w3-content w3-margin-top" style="max-width:1400px;">
      <div class="w3-row-padding">
        <div class="w3-third">
          <div class="w3-white w3-text-grey w3-card-4">
            <ProfileView />
            <LanguagesComponent v-if="displaySection('languages')" />
            <SkillsComponent v-if="displaySection('skills')" />
            <MailComponent />
          </div>
        </div>
        <div class="w3-twothird">
          <BiographyComponent
            v-if="displaySection('summary')"
            class="cv-section"
          />
          <EmploymentComponent
            v-if="displaySection('positions')"
            class="cv-section"
          />
          <EducationComponent
            v-if="displaySection('education')"
            class="cv-section"
          />
          <PortfolioComponent
            v-if="displaySection('portfolio')"
            class="cv-section"
          />
          <HonorsComponent v-if="displaySection('honors')" class="cv-section" />
        </div>
      </div>
    </div>
    <FooterComponent />
  </div>
</template>

<script>
import ProfileView from "@/components/ProfileComponent.vue";
import BiographyComponent from "@/components/BiographyComponent.vue";
import EducationComponent from "@/components/EducationComponent.vue";
import EmploymentComponent from "@/components/EmploymentComponent.vue";
import HonorsComponent from "@/components/HonorsComponent.vue";
import PortfolioComponent from "@/components/PortfolioComponent.vue";
import FooterComponent from "@/components/FooterComponent.vue";
import LanguagesComponent from "@/components/LanguagesComponent.vue";
import SkillsComponent from "@/components/SkillsComponent.vue";
import MailComponent from "@/components/MailComponent.vue";

export default {
  name: "top-page",
  components: {
    ProfileView,
    BiographyComponent,
    EducationComponent,
    EmploymentComponent,
    HonorsComponent,
    SkillsComponent,
    PortfolioComponent,
    LanguagesComponent,
    MailComponent,
    FooterComponent
  },
  created() {
    this.$store.dispatch("loadCV");
  },
  data() {
    return {
      menuVisible: false
    };
  },
  methods: {
    displaySection(title) {
      return this.$store.getters.displaySection(title);
    }
  }
};
</script>
<style></style>
