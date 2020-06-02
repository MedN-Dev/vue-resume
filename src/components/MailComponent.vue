<template>
  <div class="w3-container">
    <p class="w3-large">
      <b>{{ $t("message.contact") }}</b>
    </p>
    <div>
      <transition name="fade" mode="out-in">
        <div v-if="sent">
          <p>{{ formMessage }}</p>
        </div>
      </transition>
    </div>
    <div v-if="!sent">
      <form @submit="onSubmit">
        <div class="row">
          <input
            type="text"
            v-model="form.name"
            id="input-name"
            name="firstname"
            placeholder="Your name.."
            required
          />
        </div>
        <div class="row">
          <input
            type="text"
            v-model="form.email"
            id="input-email"
            name="lastname"
            placeholder="Your last email.."
            required
          />
        </div>
        <div class="row">
          <textarea
            id="input-message"
            v-model="form.message"
            name="subject"
            placeholder="Write something.."
            style="height:200px"
            required
          ></textarea>
        </div>
        <div class="row">
          <input type="submit" value="Submit" />
        </div>
      </form>
    </div>
  </div>
</template>

<script>
const querystring = require("querystring");

export default {
  data() {
    return {
      sent: false,
      formMessage: "",
      form: {
        name: "",
        email: "",
        message: ""
      }
    };
  },
  methods: {
    onSubmit(e) {
      e.preventDefault();
      this.$axios
        .post("./mail.php", querystring.stringify(this.form))
        // eslint-disable-next-line
        .then(res => {
          console.log(res);
          this.sent = true;
          this.formMessage = "Successfull send";
        })
        .catch(e => {
          this.formMessage = "Failed send";
          console.log(e);
        });
    }
  }
};
</script>
<style>
input[type="text"],
select,
textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

input[type="submit"] {
  background-color: #4caf50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 100%;
  margin-bottom: 20px;
}

input[type="submit"]:hover {
  background-color: #45a049;
}
</style>
