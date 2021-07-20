<template>
  <!-- Banner Starts -->
  <section class="home-2-banner">
    <div class="home-2-slider">
      <div
        class="single-slide"
        :style="{
          'background-image': 'url(' + imageUrl + data.image_en + ')',
        }"
        v-for="(data, index) in this.banners"
        :key="index"
      >
        <div :class="['container', locale == 'en' ? '' : 'custom-rtl']">
          <div class="row">
            <div class="col-lg-5">
              <div class="slider-left" style="margin-top: 10%">
                <h1 style="color: #005677">
                  {{ locale == "en" ? data.title_en : data.title_ar }}
                </h1>
                <h4 style="color: #005677">
                  {{
                    locale == "en" ? data.description_en : data.description_ar
                  }}
                </h4>
              </div>
            </div>
            <div class="col-lg-7">
              <div
                class="slider-right d-md-flex"
                :style="[
                  locale == 'en' ? { float: 'right' } : { float: 'left' },
                ]"
              >
                <div
                  class="banner-icon"
                  :style="[
                    locale == 'en' ? { right: 0 } : { left: 0, right: '1px' },
                  ]"
                >
                  <ul>
                    <li>
                      <a
                        href="https://www.facebook.com/Marche-cinq-111875543920741"
                        target="_blank"
                        ><i class="fa fa-facebook-official"></i
                      ></a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/" target="_blank"
                        ><i class="fa fa-instagram"></i
                      ></a>
                    </li>
                    <!-- <li><a href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a></li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Banner End -->
</template>

<style scoped>
.custom-rtl {
  text-align: right;
}
</style>


<script>
export default {
  components: {},
  data: () => ({
    imageUrl: "",
    translations: Object,
    locale: "",
  }),

  props: {
    banners: Array,
  },

  computed: {},
  watch: {},
  created() {
    this.imageUrl = window.baseURL;
    this.locale = this.$store.state.locale;

    if (this.locale == "ar") {
      this.translations = this.$store.state.translations.ar.php.translations;
    } else {
      this.translations = this.$store.state.translations.en.php.translations;
    }
  },

  methods: {},
};
</script>