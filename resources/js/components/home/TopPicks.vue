<template>
  <!-- Picks Starts -->
  <section class="picks-area section-padding-both">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title text-center">
            <h2 style="color: #005677">gvghhgvh</h2>
          </div>
        </div>
      </div>

      <div class="tab-content">
        <div class="tab-one-content lost active">
          <div class="row">
            <div
              class="col-lg-3 col-md-6"
              v-for="(item, index) in picks"
              :key="index"
            >
              <div class="single-cart-item">
                <div class="single-cart-image">
                  <img
                    class="image-item-01 item-active"
                    :src="imageUrl + item.preview_image"
                    alt=""
                    style="object-fit: cover"
                  />
                </div>

                <div class="single-cart-content" style="padding-bottom: 0">
                  <div class="cart-content-left">
                    <h5 style="color: #005677">
                      {{ locale == "en" ? item.name_en : item.name_ar }}
                    </h5>
                  </div>

                  <div class="cart-content-right">
                    <div v-if="item.sale_price > 0">
                      <span class="current-price"
                        >QR {{ item.sale_price }}</span
                      >
                      <span class="old-price">QR {{ item.price }}</span>
                    </div>
                    <div v-else>
                      <span class="current-price">{{ item.price }}</span>
                    </div>
                    <!-- <span class="current-price">$45.99</span>
                    <span class="old-price">$99.10</span> -->
                  </div>
                </div>

                <div class="single-cart-button">
                  <a :href="'/detail/' + item.slug" class="template-btn2"
                    >{{ translations.details }} <span>&rharu;</span></a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="text-center pb-5">
        <a href="/store" class="template-btn2"
          >view items <span>&rharu;</span></a
        >
      </div>
    </div>
  </section>
  <!-- Picks End -->
</template>

<script>
export default {
  props: ["picks"],
  data() {
    return {
      imageUrl: "",
      locale: "",
      translations: Object,
    };
  },
  mounted() {
    this.locale = this.$store.state.locale;

    if (this.locale == "ar") {
      this.translations = this.$store.state.translations.ar.php.translations;
    } else {
      this.translations = this.$store.state.translations.en.php.translations;
    }
    this.imageUrl = window.baseURL;
  },
  methods: {},
};
</script>