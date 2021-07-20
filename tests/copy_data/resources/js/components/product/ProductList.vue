<template>
  <div>
    <div class="row">
      <div class="col-lg-12">
        <FilterProduct
          :categories="dataCategory"
          :variants="fixedVariants"
          :price="price_range"
          :sort="sortOption"
          @sortChange="sortBy"
          @variantChange="variantChange"
          @categoryChange="getByCat"
          @priceChange="priceRange"
          @reset="resetFilters"
        />
      </div>
    </div>
    <!-- Shop Content Starts -->
    <section class="shop-content" style="padding-top: 50px">
      <div class="container">
        <div class="row">
          <!-- <div class="col-lg-3">
            <div class="shop-sidebar">
              <div
                class="size"
                v-if="filters.slug != 'category_id' && dataCategory.length > 0"
              >
                <div class="title">
                  <h4 style="color: #005677">
                    {{ translations.category }}
                  </h4>
                </div>

                // have to comment out this url
                <ul >
                            <li  v-for="(data,index) in this.dataCategory" :key="index">
                              
                                <select  v-model="cat_value" @change="getByCat"  >
                                <option disabled selected value="">{{data.name_en}}</option>
                                <option  :value="subdata"     v-for="(subdata,i) in data.sub_categories" :key="i" >{{subdata.name_en}}</option>
                              
                                </select> 
                            </li>
                        
                           
                        </ul>
                <ul>
                  <li v-for="(data, index) in this.dataCategory" :key="index">
                    <CategoryFilter
                      :dataCategory="data"
                      @send="getByCat"
                    ></CategoryFilter>
                  </li>
                </ul>
                <button class="btn on2 mt-3" @click="reset()">Reset</button>
              </div>
              <div class="price">
                <div class="title">
                  <div class="row mt-2">
                    <div
                      class="col-md-6"
                      v-for="(item, index) in fixedVariants"
                      :key="index"
                    >
                      <div class="form-group">
                        <h4 style="color: #005677">
                          {{ item.name_en }}
                        </h4>
                        <select
                          class="form-control"
                          v-model="item.val"
                          @change="variantChange(item)"
                        >
                          <option
                            :val="val.name_en"
                            v-for="(val, i) in item.values"
                            :key="i"
                          >
                            {{ val.name_en }}
                          </option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="price">
                <div class="title">
                  <h4 style="color: #005677">
                    {{ translations.price }}
                  </h4>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <input
                      type="number"
                      min="0"
                      class="form-control"
                      placeholder="Min"
                      @blur="getProduct"
                      @keyup.enter="getProduct"
                      v-model="filters.price_start"
                      style="width: 100%"
                    />
                  </div>
                  <div class="col-md-6">
                    <input
                      type="number"
                      min="0"
                      class="form-control"
                      placeholder="Max"
                      @blur="getProduct"
                      @keyup.enter="getProduct"
                      v-model="filters.price_end"
                      style="width: 100%"
                    />
                  </div>
                  // have to comment out this button
                  <button class="btn on2 mt-3" @click="getProduct">Filter</button>
                </div>
              </div>
            </div>
          </div> -->

          <div class="col-lg-12">
            <!-- <div class="shop-items-top d-flex justify-content-between">
              <div class="left" style="color: #005677">
                <span>{{ total }} {{ translations.item }}</span>
              </div>
              <div class="dropdown">
                <select
                  v-model="sort_flag"
                  @change="sortBy"
                  style="color: #005677"
                >
                  <option disabled value="">{{ translations.sortby }}</option>
                  <option
                    v-for="(data, index) in sortOption"
                    :key="index"
                    :value="data.value"
                  >
                    {{ data.text }}
                  </option>
                </select>
              </div>
            </div> -->
            <div class="shop-items">
              <div class="row">
                <div
                  class="col-lg-3 col-md-6"
                  v-for="(data, index) in this.dataList"
                  :Key="index"
                >
                  <a
                    class="single-cart-item active"
                    :href="'/detail/' + data.slug"
                  >
                    <div
                      class="single-cart-image product-img"
                      v-if="data.preview_images.length > 0"
                    >
                      <img
                        class="image-item-01 item-active"
                        :src="
                          url +
                          data.preview_images[data.currentImageIndex].image
                        "
                        style="object-fit: cover; height: 100%"
                        @mouseover="handleImageHover(data)"
                        @mouseleave="handleImageLeave()"
                      />
                      <!-- <div class="quick-view" @click="openQuickView(data)">
                      Quick View
                    </div> -->
                    </div>
                    <div class="single-cart-image product-img" v-else>
                      <img
                        :src="url + data.preview_image"
                        style="object-fit: cover; height: 100%"
                        class="image-item-01 item-active"
                      />
                      <!-- <div class="quick-view" @click="openQuickView(data)">
                      Quick View
                    </div> -->
                    </div>
                  </a>
                  <a class="compare-button single-cart-item active">
                    <div
                      class="single-cart-content"
                      style="display: block; padding-top: 0"
                    >
                      <div class="cart-content-left">
                        <span
                          :class="['love-icon', data.fav ? 'heart-active' : '']"
                          style="
                            position: relative;
                            float: right;
                            top: 0;
                            right: 0;
                          "
                          @click="
                            data.fav
                              ? removeFavourite(data.fav.id, data.id)
                              : addToFavourite(data.id)
                          "
                          ><i class="fa fa-heart"></i
                        ></span>
                        <a :href="'/detail/' + data.slug">
                          <h5 style="color: #005677; font-size: 16px">
                            {{ locale == "en" ? data.name_en : data.name_ar }}
                          </h5>
                        </a>
                      </div>
                      <a :href="'/detail/' + data.slug">
                        <div class="cart-content-left">
                          <p class="desc">
                            {{
                              locale == "en"
                                ? data.description_en
                                : data.description_ar
                            }}
                          </p>
                        </div>
                        <div
                          class="cart-content-right"
                          v-if="data.sale_price > 0"
                          style="text-align: left"
                        >
                          <p style="font-size: 14px">
                            <span
                              class="current-price"
                              style="
                                color: #005677;
                                font-size: 14px;
                                display: inline-block;
                              "
                              >QR {{ data.sale_price }}</span
                            >
                            <span
                              class="old-price"
                              style="font-size: 14px; float: right"
                              >QR {{ data.price }}</span
                            >
                          </p>
                        </div>
                        <div
                          class="cart-content-right"
                          v-else
                          style="text-align: left"
                        >
                          <p>
                            <span
                              class="current-price"
                              style="color: #005677; font-size: 14px"
                              >QR {{ data.price }}</span
                            >
                          </p>
                        </div>
                      </a>
                    </div>
                  </a>
                </div>
              </div>
              <sweet-modal ref="modal" width="75vw" @close="handleModalClose">
                <ProductDetailComponent
                  :id="modalId"
                  v-if="showModal"
                  @close="handleModalClose"
                />
              </sweet-modal>
              <div class="row">
                <ul class="navigation" style="color: #005677">
                  <paginate
                    v-if="filters.last_page"
                    :page-count="filters.last_page"
                    :click-handler="getProduct"
                    :prev-text="'Prev'"
                    :next-text="'Next'"
                    :container-class="'navigation'"
                  >
                  </paginate>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="wpp-btn"></div>
    </section>
    <!-- Shop Content End -->
  </div>
</template>

<style lang="scss">
.heart-active {
  i {
    color: #da5f15;
  }
}
.sweet-content {
  padding-top: 0 !important;
  padding-left: 0 !important;
  padding-bottom: 0 !important;
  .content {
    text-align: left;
    padding-top: 2rem;
  }
}
.cart-content-left {
  .desc {
    color: #005677;
    text-align: justify;
    display: block;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
  }
}
.product-img img:hover {
  transform: scale(1.1);
}
</style>

<script>
import CategoryFilter from "./CategoryFilter";
import { SweetModal } from "sweet-modal-vue";
import ProductDetailComponent from "../misc/ProductDetailComponent";
import FilterProduct from "./FilterProduct";
export default {
  components: {
    CategoryFilter,
    SweetModal,
    ProductDetailComponent,
    FilterProduct,
  },
  data: () => ({
    locale: "",
    url: "",
    translations: Object,
    show: false,
    dataCategory: [],
    dataList: [],
    total: "",
    sort_flag: "",
    price_range: "",
    cat_value: "",
    rangeOptions: {},
    fixedVariants: [],
    mouseInterval: null,
    currentItem: {},
    showModal: false,
    modalId: 0,
    filters: {
      name: "",
      page: 1,
      last_page: null,
      slug: "",
      category_id: "",
      sort_value: "id",
      sort_type: "DESC",
      byprice: "",
      price_start: "",
      price_end: "",
    },
    defaultFilter: {
      name: "",
      page: 1,
      last_page: null,
      slug: "",
      category_id: "",
      sort_value: "id",
      sort_type: "DESC",
      byprice: "",
      price_start: "",
      price_end: "",
    },
    sortOption: [
      { text: "Low Price", value: "Low Price" },
      { text: "High Price", value: "High Price" },
      { text: "New Arrival", value: "New Arrival" },
      { text: "Old Arrival", value: "Old Arrival" },
    ],
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
    modalClose() {
      this.$refs.modal.close();
    },
    handleModalClose(data) {
      this.modalId = 0;
      if (data) {
        this.modalClose();
      } else {
        this.showModal = !this.showModal;
      }
    },
    variantChange(item) {
      this.filters[item.name_en.toLowerCase()] = item.val;
      this.getProduct();
    },

    async addToFavourite(id) {
      if (this.$store.state.authUser) {
        try {
          const { data } = await axios({
            method: "POST",
            url: "/app/favourite",
            data: {
              product_id: id,
            },
          });
          if (data.status) {
            Vue.$toast.open({
              message: "Item added to favourites",
              type: "success",
            });
            const editedIndex = this.dataList.findIndex(
              (item) => item.id == id
            );
            this.dataList[editedIndex]["fav"] = data.data;
          } else {
            Vue.$toast.open({
              message: data.message,
              type: "error",
            });
          }
        } catch (error) {
          Vue.$toast.open({
            message: "An error occurred",
            type: "error",
          });
        }
      } else {
        Vue.$toast.open({
          message: "Login First",
          type: "error",
        });
      }
    },

    async removeFavourite(favId, productId) {
      if (this.$store.state.authUser) {
        try {
          const { data } = await axios({
            method: "DELETE",
            url: "/app/favourite/" + favId,
          });
          if (data.status) {
            Vue.$toast.open({
              message: "Removed From Favourite",
              type: "success",
            });
            if (this.filters.slug == "fav") {
              this.dataList = this.dataList.filter(
                (item) => item.id != productId
              );
            } else {
              const editedIndex = this.dataList.findIndex(
                (item) => item.id == productId
              );
              this.dataList[editedIndex]["fav"] = false;
            }
          } else {
            Vue.$toast.open({
              message: data.message,
              type: "error",
            });
          }
        } catch (error) {
          console.log(error);
          Vue.$toast.open({
            message: "An error occurred",
            type: "error",
          });
        }
      } else {
        Vue.$toast.open({
          message: "Login First",
          type: "error",
        });
      }
    },

    reset() {
      this.filters.category_id = "";
      this.getProduct();
    },
    resetFilters() {
      this.filters = Object.assign({}, this.defaultFilter);
      this.getProduct();
    },

    initialize() {
      this.getFixedVariants();
      this.getCategory();
      this.getProduct();
    },

    getByCat(data) {
      console.log("hi");
      this.filters.category_id = data.id;
      this.getProduct();
    },
    sortBy(val) {
      this.sort_flag = val;
      if (this.sort_flag == "Low Price") {
        this.filters.sort_value = "price";
        this.filters.sort_type = "ASC";
      } else if (this.sort_flag == "High Price") {
        this.filters.sort_value = "price";
        this.filters.sort_type = "DESC";
      } else if (this.sort_flag == "New Arrival") {
        this.filters.sort_value = "id";
        this.filters.sort_type = "DESC";
      } else if (this.sort_flag == "Old Arrival") {
        this.filters.sort_value = "id";
        this.filters.sort_type = "ASC";
      }

      this.getProduct();
    },

    priceRange(price) {
      this.price_range = price;
      if (this.price_range == "All") {
        this.filters.price_start = "";
        this.filters.price_end = "";
      } else if (this.price_range == "0-50") {
        this.filters.price_start = 0;
        this.filters.price_end = 50;
      } else if (this.price_range == "51-100") {
        this.filters.price_start = 51;
        this.filters.price_end = 100;
      } else if (this.price_range == "101-200") {
        this.filters.price_start = 101;
        this.filters.price_end = 200;
      } else if (this.price_range == "201-300") {
        this.filters.price_start = 201;
        this.filters.price_end = 300;
      } else if (this.price_range == "301-400") {
        this.filters.price_start = 301;
        this.filters.price_end = 400;
      } else {
        this.filters.price_start = 401;
        this.filters.price_end = 10000;
      }

      this.getProduct();
    },

    async getFixedVariants() {
      try {
        let { data } = await axios({
          method: "GET",
          url: "/fixed-variants",
        });
        this.fixedVariants = data;
        this.fixedVariants.forEach((item) => {
          this.filters[item.name_en.toLowerCase()] = "";
        });
        console.log(this.filters);
        console.log(this.fixedVariants);
      } catch (e) {
        console.log("error");
      }
    },

    async getCategory() {
      this.filters.slug = this.$route.params.slug;

      try {
        let { data } = await axios({
          method: "get",
          url: "/app/category",
          params: this.filters,
        });

        this.dataCategory = data;
      } catch (e) {
        console.log("error");
      }
    },

    openQuickView(data) {
      this.modalId = data.slug;
      this.showModal = !this.showModal;
      this.$refs.modal.open();
    },

    handleImageLeave() {
      // clearInterval(this.mouseInterval);
    },

    handleImageHover(data) {
      if (data.currentImageIndex >= data.preview_images.length - 1) {
        data.currentImageIndex = 0;
      } else {
        data.currentImageIndex++;
      }
    },

    async getProduct(page) {
      this.filters.slug = this.$route.params.slug;
      if (this.filters.slug == "category_id") {
        this.filters.cat_id = this.$route.query.cat_id;
      }
      this.filters.page = page;
      this.$Progress.start();
      try {
        let { data } = await axios({
          method: "get",
          url: "/app/product",
          params: this.filters,
        });

        this.dataList = data.data;
        this.dataList.forEach((item) => {
          this.$set(item, "currentImageIndex", 0);
          //   item.currentImageIndex = 0;
        });
        this.filters.last_page = data.last_page;
        this.total = data.total;
        this.$Progress.finish();
      } catch (e) {
        console.log("error");
        this.$Progress.fail();
      }
    },
  },
};
</script>
