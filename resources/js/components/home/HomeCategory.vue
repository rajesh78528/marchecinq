<template>
  <!-- <Slide v-for="(item, index) in categories" :key="index">
                <a :href="'/list/category_id?cat_id=' + item.id">
                  <div class="image-container">
                    <img :src="url + item.image" alt="" />
                    <div class="content">
                      <h4>
                        {{ locale == "en" ? item.name_en : item.name_ar }}
                      </h4>
                    </div>
                  </div>
                </a>
              </Slide> -->
  <section
    :class="['categories-area', locale == 'en' ? '' : 'custom-rtl']"
    style="margin: 10% auto"
  >
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 pr-0">
          <div class="section-title text-center">
            <h2 style="color: #005677">{{ translations.category }}</h2>
          </div>
          <div class="categories-item">
            <carousel
              :nav="true"
              :navText="[
                `<i class='fa fa-arrow-left'></i>`,
                `<i class='fa fa-arrow-right'></i>`,
              ]"
              :rewind="true"
              :loop="false"
              :dots="false"
              :items="4"
            >
              <div
                class="single-item fadeIn mb-5 mb-lg-0"
                data-wow-duration=".8s"
                data-wow-delay=".2s"
                v-for="(item, index) in categories"
                :key="index"
              >
                <a :href="'/list/category_id?cat_id=' + item.id">
                  <div
                    class="item-image cat-1"
                    v-bind:style="{
                      'background-image': 'url(' + imageUrl + item.image + ')',
                    }"
                  ></div>
                  <div class="item-content">
                    <h5>
                      {{ locale == "en" ? item.name_en : item.name_ar }}
                    </h5>
                    <!-- <a href="shop-page.html">Explore Collection </a> -->
                  </div>
                </a>
              </div>
            </carousel>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<style lang="scss">
.owl-theme .owl-nav [class*="owl-"]:hover {
  background: #da5f15;
}
.owl-carousel,
.bx-wrapper {
  direction: ltr;
}
.owl-carousel .owl-item {
  direction: rtl;
}
.carousel {
  .image-container {
    margin: 0 10px;
    position: relative;
    img {
      width: 100%;
      height: 20rem;
      object-fit: cover;
      filter: brightness(0.5);
    }
    .content {
      position: absolute;
      top: 40%;
      left: 40%;
      * {
        color: white;
      }
    }
  }
}
</style>

<script>
import carousel from "vue-owl-carousel";
export default {
  components: { carousel },
  props: ["categories"],
  data() {
    return {
      locale: "",
      translations: Object,
      imageUrl: "",
    };
  },
  mounted() {
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