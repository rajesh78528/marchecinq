<template>
  <div>
    <!-- Banner Starts -->
    <section class="template-breadcrumb">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="banner-title">
              <h1 style="color: #005677">{{ translations.store }}</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Banner End -->

    <!-- Blog Section Starts -->
    <section class="blog-section section-padding-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <article
              class="blog-item"
              v-for="(data, index) in this.dataList"
              :key="index"
            >
              <div class="row">
                <div class="col-md-6">
                  <div class="blog-img" v-if="index % 2 == 0">
                    <a :href="'/list/' + data.slug">
                      <img
                        :src="url + data.logo"
                        alt=""
                        style="
                          width: 100%;
                          max-height: 400px;
                          object-fit: cover;
                          padding-bottom: 2px;
                          padding-top: 2px;
                        "
                      />
                    </a>
                  </div>
                  <div v-else>
                    <h4 style="color: #005677">
                      {{ locale == "en" ? data.name_en : data.name_ar }}
                    </h4>
                    <p style="color: #005677">
                      {{ locale == "en" ? data.overview_en : data.overview_ar }}
                    </p>
                    <ul class="blog-meta-bottom">
                      <a :href="'/list/' + data.slug">
                        <li>
                          <span style="color: #005677">{{
                            translations.shopnow
                          }}</span>
                        </li>
                      </a>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="blog-img" v-if="index % 2 != 0">
                    <a :href="'/list/' + data.slug">
                      <img
                        :src="url + data.logo"
                        alt=""
                        style="
                          width: 100%;
                          max-height: 400px;
                          object-fit: cover;
                          padding-bottom: 2px;
                          padding-top: 2px;
                        "
                      />
                    </a>
                  </div>
                  <div v-else>
                    <h4 style="color: #005677">
                      {{ locale == "en" ? data.name_en : data.name_ar }}
                    </h4>
                    <p style="color: #005677">
                      {{ locale == "en" ? data.overview_en : data.overview_ar }}
                    </p>
                    <ul class="blog-meta-bottom">
                      <a :href="'/list/' + data.slug">
                        <li>
                          <span style="color: #005677">
                            {{ translations.shopnow }}</span
                          >
                        </li>
                      </a>
                    </ul>
                  </div>
                </div>
              </div>
            </article>
            <div class="pagination-area">
              <ul style="color: #005677">
                <paginate
                  v-if="filters.last_page"
                  :page-count="filters.last_page"
                  :click-handler="getStore"
                  :prev-text="'Prev'"
                  :next-text="'Next'"
                  :container-class="'pagination-area'"
                >
                </paginate>
              </ul>
            </div>
          </div>

          <div class="col-lg-4">
            <aside class="widget-area sidebar">
              <div class="widget-popular-post widget-style margin-bottom-30">
                <div class="widget-title">
                  <h4 style="color: #005677">{{ translations.newarrival }}</h4>
                  <span class="widget-title-style"></span>
                </div>
                <div
                  class="single-post each-item"
                  v-for="(data, index) in this.dataProduct"
                  :key="index"
                >
                  <div class="single-post-left">
                    <a :href="'/detail/' + data.slug" style="color: #005677">
                      <span class="left-top">
                        {{ locale == "en" ? data.name_en : data.name_ar }}</span
                      ></a
                    >
                    <a :href="'/detail/' + data.slug" style="color: #005677"
                      ><span>{{
                        locale == "en"
                          ? data.description_en
                          : data.description_ar
                      }}</span></a
                    >

                    <div v-if="data.sale_price > 0">
                      <span class="current-price"
                        >QR {{ data.sale_price }}</span
                      >
                      <span class="old-price">QR {{ data.price }}</span>
                    </div>
                    <div v-else>
                      <span class="current-price">QR {{ data.price }}</span>
                    </div>
                  </div>
                  <div class="single-post-right">
                    <img
                      :href="'/detail/' + data.slug"
                      :src="url + data.preview_image"
                      alt=""
                      style="
                        max-width: 100px;
                        max-height: 100px;
                        padding-bottom: 2px;
                        padding-top: 2px;
                      "
                    />
                  </div>
                </div>
              </div>

              <div class="widget-categories widget-style margin-bottom-30">
                <div class="widget-title">
                  <h4 style="color: rgb(0, 86, 119)">
                    {{ translations.sortby }}
                  </h4>
                  <span class="widget-title-style"></span>
                </div>
                <ul style="color: #005677">
                  <li
                    @click="
                      getbySort((sort_value = 'id'), (sort_type = 'DESC'))
                    "
                  >
                    <a>{{ translations.newstore }}</a>
                  </li>
                  <li
                    @click="
                      getbySort((sort_value = 'name_en'), (sort_type = 'ASC'))
                    "
                  >
                    <a>{{ translations.byname }} </a>
                  </li>
                  <li @click="getBySale(1)">
                    <a>{{ translations.sale }} </a>
                  </li>
                </ul>
              </div>

              <!-- <div class="widget-add">
                <img :src="this.url + dataOffer.image" alt="" />
              </div> -->
            </aside>
          </div>
        </div>
      </div>
    </section>
    <!-- Blog Section End -->
  </div>
</template>

<style lang="scss">
.each-item {
  box-shadow: 0 0 10px #eee;
  padding: 10px;
  .current-price {
    color: rgb(0, 86, 119);
    font-size: 14px;
    font-weight: bold;
    display: block;
  }
  .old-price {
    color: #da5f15;
    text-decoration: line-through;
    display: block;
  }
}
</style>


<script>
export default {
  components: {},
  data: () => ({
    locale: "",
    url: "",
    translations: Object,
    dataList: [],
    dataProduct: [],
    dataOffer: {},
    filters: {
      name: "",
      page: 1,
      last_page: null,
      sort_value: "id",
      sort_type: "DESC",
      bysale: "",
    },
  }),

  props: {
    props: Array,
  },

  computed: {},
  watch: {},
  mounted() {
    this.url = window.baseURL;
    this.locale = this.$store.state.locale;

    if (this.locale == "ar") {
      this.translations = this.$store.state.translations.ar.php.translations;
    } else {
      this.translations = this.$store.state.translations.en.php.translations;
    }
  },
  created() {
    this.initialize();
  },

  methods: {
    initialize() {
      this.getStore();
      this.getProduct();
      this.getOffer();
    },

    getbySort(sort_value, sort_type) {
      this.filters.sort_value = sort_value;
      this.filters.sort_type = sort_type;
      this.filters.page = 1;
      this.filters.bysale = "";
      this.getStore();
    },

    getBySale(bysale) {
      this.filters.sort_value = "id";
      this.filters.sort_type = "DESC";
      this.filters.bysale = bysale;
      this.filters.page = 1;
      this.getStore();
    },

    async getStore(page) {
      this.filters.page = page;
      this.$Progress.start();
      try {
        let { data } = await axios({
          method: "get",
          url: "/app/store",
          params: this.filters,
        });

        this.dataList = data.data;
        this.filters.last_page = data.last_page;
        this.$Progress.finish();
      } catch (e) {
        console.log("error");
        this.$Progress.fail();
      }
    },

    async getProduct() {
      try {
        let { data } = await axios({
          method: "get",
          url: "/app/newproduct",
        });

        this.dataProduct = data;
      } catch (e) {
        console.log("error");
      }
    },

    async getOffer() {
      try {
        let { data } = await axios({
          method: "get",
          url: "/app/offers",
        });

        this.dataOffer = data;
      } catch (e) {
        console.log("error");
      }
    },
  },
};
</script>