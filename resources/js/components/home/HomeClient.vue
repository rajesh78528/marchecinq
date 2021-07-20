<template>
  <!-- Client Starts -->
  <section class="client-area" id="homereward">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title">
            <h2 style="color: #005677">{{ translations.reword }}</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-9 pl-0">
          <div class="client-slider owl-carousel">
            <div
              class="single-slide"
              v-for="(data, index) in coupon"
              :key="index"
            >
              <div class="slide-top d-flex">
                <div class="slide-image">
                  <img
                    :src="data.image ? imageUrl + data.image : '/no_image.png'"
                    alt=""
                  />
                </div>
                <div class="slide-content align-self-center">
                  <h4 style="color: #005677">{{ data.title_en }}</h4>
                  <h6 style="color: #005677" class="diff-h6">
                    {{ data.code }}
                  </h6>
                </div>
              </div>
              <div class="slide-bottom">
                <p style="color: #005677">{{ data.description_en }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Client End -->
</template>


<script>
export default {
  components: {},
  data: () => ({
    locale: "",
    translations: Object,
    imageUrl: "",
  }),

  props: {
    coupon: Array,
  },

  computed: {},
  watch: {},

  mounted() {
    this.imageUrl = window.baseURL;
    this.locale = this.$store.state.locale;
    if (this.locale == "ar") {
      this.translations = this.$store.state.translations.ar.php.translations;
    } else {
      this.translations = this.$store.state.translations.en.php.translations;
    }
  },

  created() {},

  methods: {},
};
</script>