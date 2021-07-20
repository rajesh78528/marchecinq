<template>
  <!-- Collection Starts -->
  <section class="collection-area section-padding-both">
    <!--floating-icon-->
    <div class="container">
      <div class="row">
        <div class="col-lg-7 align-self-center">
          <div class="collection-content">
            <div class="section-title">
              <h2 class="collection-h2" style="color: #005677" v-if="store">
                {{ locale == "en" ? store[0].title_en : store[0].title_ar }}
              </h2>
            </div>
            <p v-if="store" style="color: grey">
              {{
                locale == "en"
                  ? store[0].description_en
                  : store[0].description_ar
              }}
            </p>
            <div class="btn-margin-top">
              <a :href="'/store'" class="template-btn2 on2"
                >{{ translations.explorestore }} <span>&rharu;</span></a
              >
            </div>
          </div>
        </div>
        <div class="col-lg-4 offset-lg-1 fadeInRight">
          <div class="collection-image" v-if="store">
            <div
              class="collection-bg"
              :style="{
                'background-image': 'url(' + imageUrl + store[0].image + ')',
              }"
            ></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Collection End -->
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
    homedata: Array,
  },

  computed: {
    store() {
      let result = this.homedata.filter((obj) => {
        return obj.title_en === "Store";
      });
      return result;
    },

    offer() {
      let result = this.homedata.filter((obj) => {
        return obj.title_en === "Store";
      });
      return result;
    },

    mybag() {
      let result = this.homedata.filter((obj) => {
        return obj.title_en === "My Bag";
      });
      return result;
    },
  },
  watch: {},

  mounted() {
    this.locale = this.$store.state.locale;
    this.imageUrl = window.baseURL;

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