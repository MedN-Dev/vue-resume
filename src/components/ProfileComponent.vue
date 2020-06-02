<template>
  <div class="profile">
    <div class="w3-display-container">
      <div
        class="profile-card-bg"
        :style="{ 'background-image': 'url(' + profile.bg + ')' }"
      >
        <div class="avatar">
          <img class="avatar" :src="profile.image" alt="Avatar" />
        </div>
      </div>
      <div class="w3-container w3-text-black">
        <a :href="profile.linkedinUrl" target="_blank">
          <div class="profile-card-title">
            {{ profile.firstName }} {{ profile.lastName }}
          </div>
        </a>
      </div>
    </div>
    <div class="w3-container">
      <p>
        <i
          class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"
        ></i
        >{{ profile.headline }}
      </p>
      <p>
        <i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i
        >{{ profile.location }}
      </p>
      <p>
        <i
          class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"
        ></i
        ><a :href="`mailto:${profile.email}`">{{ profile.email }}</a>
      </p>
      <p>
        <i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i
        ><a :href="`tel:${profile.phone}`">{{ profile.phone }}</a>
      </p>
      <hr />
    </div>
  </div>
</template>

<script>
export default {
  name: "ProfileView",
  computed: {
    profile() {
      return this.$store.getters.getCV;
    }
  }
};
</script>

<style scoped>
.avatar {
  height: 100px;
  width: 100px;
  margin: auto;
  background-size: cover;
  background-position: center;
  background-color: #f1f1f1;
  border-radius: 100%;
}
.avatar-circle {
  width: 172px;
  height: 172px;
  box-sizing: border-box;
  background-clip: content-box;
  border: 1px solid transparent;
  border-radius: 50%;
}

.profile-card-bg {
  height: 100px;
  width: 100%;
  padding-top: 45px;
  background-color: #fafafa;
  background-size: cover;
  background-position: center;
}
.profile-card-title {
  font-size: 1.6rem;
  line-height: 1.5;
  font-weight: 600;
  cursor: pointer;
  text-decoration: none;
  text-align: center;
  margin-top: 60px;
  margin-bottom: 5px;
}
</style>
