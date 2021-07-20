<template>
  <div>
    <!-- Banner Starts -->
    <section class="cart-banner section-padding-both">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 order-1" style="padding-top: 100px; width: 100%">
            <div class="row gallery_enlarge">
              <div class="col-md-6 mt-3">
                <a href="#"
                  ><img
                    :src="url + dataList.preview_image"
                    style="width:100%  max-height:100px"
                    v-img
                /></a>
              </div>
              <div
                :class="index < 3 ? 'col-md-6 mt-3' : 'col-md-12 mt-3'"
                v-for="(item, index) in dataList.preview_images"
                :key="index"
              >
                <a href="#"
                  ><img
                    :src="url + item.image"
                    v-img
                    style="width: 100%"
                    alt=""
                /></a>
              </div>
            </div>
          </div>
          <!-- <div class="col-lg-7 align-self-end order-2 order-lg-1">
                <div class="cart-banner-left">
                    <div class="left-title mb-5">
                        <h3  style="color:#005677;">QR {{total_price}}</h3>
                    </div>
                    <div class="optionlist  mb-5"  v-for="(data,index) in dataList.options" :key="index">
                        <div><OptionFilter :dataOption="data" @send="getChildOption" ></OptionFilter></div>
                    </div>
                    <div class="quantity mb-5">
                        <h4  style="color:#005677;">{{translations.quantity}}</h4>
                        <ul  style="color:#005677;">
                            <li><span><i class="ti-minus" @click="decrement"></i></span></li>
                            <li><span>{{ total_quantity }}</span></li>
                            <li><span><i class="ti-plus"  @click="increment"></i></span></li>
                        </ul>
                    </div>
                    <div class="right-button mt-40" >
                        <a @click="addToCart" class="template-btn2 on2"  style="color:#005677;">{{translations.addtocart}} <span>&rharu;</span></a>
                    </div>
                </div>
            </div> -->
          <div class="col-lg-5 order-3">
            <div class="banner-right mb-5">
              <div class="right-top">
                <h1 style="color: #005677; font-size: 38px; margin-top: 40%">
                  {{ locale == "en" ? dataList.name_en : dataList.name_ar }}
                </h1>
                <p class="mt-4" style="color: #005677">
                  {{
                    locale == "en"
                      ? dataList.description_en
                      : dataList.description_ar
                  }}
                </p>
              </div>
              <div class="left-title mb-5">
                <h3 style="color: #005677">QR {{ total_price }}</h3>
              </div>
              <div
                class="optionlist mb-3"
                v-for="(data, index) in dataList.options"
                :key="index"
              >
                <div>
                  <OptionFilter
                    :dataOption="data"
                    @send="getChildOption"
                  ></OptionFilter>
                </div>
              </div>
              <div class="quantity mb-5">
                <h4 style="color: #005677">{{ translations.quantity }}</h4>
                <ul style="color: #005677">
                  <li>
                    <span><i class="ti-minus" @click="decrement"></i></span>
                  </li>
                  <li>
                    <span>{{ total_quantity }}</span>
                  </li>
                  <li>
                    <span><i class="ti-plus" @click="increment"></i></span>
                  </li>
                </ul>
              </div>
              <div class="right-button mt-40">
                <a
                  @click="addToCart"
                  class="template-btn2 on2"
                  style="color: #005677"
                  >{{ translations.addtocart }} <span>&rharu;</span></a
                >
              </div>
              <div class="tab-accordion picks-tab mt-70">
                <div class="tab">
                  <ul style="color: #005677">
                    <li
                      class="tab-one active"
                      @click="sizeGuide"
                      v-if="dataList.size_guides > 0"
                    >
                      {{ translations.sizeguide }}
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Related Section Starts -->
    <section class="related-section">
      <div class="container">
        <div class="row mt-5">
          <div class="col-lg-12">
            <div class="related-slider owl-carousel">
              <!-- <div class="single-slide col-lg-3" :key="123">
                        <div class="single-cart-item active">
                            <div class="single-cart-image" style="height: 460px;">
                                <img :src="'https://m5.tas-taz.com'+dataList.preview_image" alt="" class="image-item-01 item-active">
                            </div>
                        </div>
                    </div> -->

              <!-- <div class="single-slide col-lg-3"  v-for="(data,index) in dataList.preview_images" :key="index">
                        <div class="single-cart-item active" >
                                <div class="single-cart-image" style="height:460px">
                                        <img class="image-item-01 item-active" :src="'https://m5.tas-taz.com'+data.image" alt="">
                                      
                                    </div>
                        </div>
                    </div> -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Related Section End -->
    <!-- Banner End -->
    <!-- Modal -->
    <transition name="fade">
      <div class="modal" v-show="showConfirmation" style="height: 50%">
        <div class="modal-message">
          <h5 class="modal-header" style="color: #005677">
            {{ translations.changestore }}
          </h5>
          <div class="modal-body"></div>
          <div class="col-md-12" style="text-align: center; margin-top: 15px">
            <button
              class="vincent_button"
              @click="close"
              style="
                background-color: #white;
                color: #black;
                font-size: 23px;
                padding: 1px 10px 1px 10px;
                text-align: center;
                border-radius: 10px;
              "
            >
              {{ translations.cancel }}
            </button>
            <button
              class="vincent_button"
              @click="changeStore"
              style="
                background-color: #white;
                color: #black;
                font-size: 23px;
                padding: 1px 10px 1px 10px;
                text-align: center;
                border-radius: 10px;
              "
            >
              {{ translations.yes }}
            </button>
          </div>
        </div>
      </div>
    </transition>
    <transition name="fade">
      <div
        class="modal"
        v-show="showSizeGuide"
        style="height: 60%; overflow-x: hidden; overflow-y: auto"
      >
        <div style="width: 98%; padding-top: 0%">
          <h5
            class="modal-header"
            style="padding-top: 5%; padding-left: 45%; color: #005677"
          >
            {{ translations.sizeguide }}
          </h5>
          <div class="modal-body">
            <div
              style="
                padding: 4px;
                width: 100%;
                height: auto;
                text-align: justify;
              "
            >
              <div class="col-sm-12 col-md-12 col-lg-12">
                <div
                  class="row mt-5"
                  v-for="(data, index) in dataList.size_guides"
                  :key="index"
                >
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <img
                        :src="url + data.image"
                        style="
                          width: 100%;
                          max-height: 300px;
                          object-fit: contain;
                          padding-bottom: 2px;
                          padding-top: 2px;
                        "
                      />
                    </div>
                    <div
                      class="col-sm-6 col-md-6 col-lg-6"
                      style="width: 100%; height: 10%"
                    >
                      <h6 style="color: #005677">
                        {{ locale == "en" ? data.name_en : data.name_en }}
                      </h6>
                      <p style="color: #005677">
                        {{
                          locale == "en"
                            ? data.description_en
                            : data.description_ar
                        }}
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12" style="text-align: center; margin-top: 5%">
            <button
              @click="close"
              style="background-color:#white;color:color:#005677; #black;font-size: 23px;padding: 1px 10px 1px 10px; text-align: center; border-radius:10px"
            >
              {{ translations.close }}
            </button>
          </div>
        </div>
      </div>
    </transition>
  </div>
</template>


<script>
import OptionFilter from "./OptionFilter";

export default {
  components: {
    OptionFilter,
  },
  data: () => ({
    locale: "",
    url: "",
    translations: Object,
    dataCategory: [],
    dataList: {},
    optionValue: [],
    modalFlag: "",
    showConfirmation: false,
    showSizeGuide: false,
    total_quantity: 1,
    total_price: "",
    combination: {},
    filters: {
      name: "",
      page: 1,
      last_page: null,
      slug: "",
    },
  }),

  props: {
    props: Array,
  },

  computed: {},
  watch: {},
  mounted() {
    this.locale = this.$store.state.locale;
    this.url = window.baseURL;
    if (this.locale == "ar") {
      this.translations = this.$store.state.translations.ar.php.translations;
    } else {
      this.translations = this.$store.state.translations.en.php.translations;
    }
    const viewportMeta = document.createElement("meta");
    viewportMeta.name = "viewport";
    viewportMeta.content = "width=device-width, initial-scale=1";
    document.head.appendChild(viewportMeta);
  },
  created() {
    this.initialize();
  },

  methods: {
    initialize() {
      this.getDetail();
    },

    async getDetail() {
      try {
        let { data } = await axios({
          method: "get",
          url: "/app/product/" + this.$route.params.slug,
        });

        this.dataList = data;
        this.priceHelper();
        this.cartHelper2();
      } catch (e) {
        console.log("error");
      }
    },

    getChildOption(data) {
      let findObj = null;
      try {
        findObj = this.optionValue.find(
          (obj) => obj.parent_id === data.parent_id
        );
      } catch (exception) {
        console.log("not found");
      }
      if (findObj) {
        var foundIndex = this.optionValue.findIndex(
          (x) => x.parent_id == data.parent_id
        );
        this.optionValue[foundIndex] = data;
      } else {
        this.optionValue.push(data);
      }

      let sortArray = [];
      for (let p of this.optionValue) {
        sortArray.push(p.name);
      }

      let joinArray = sortArray.join("");
      let p = this.sortAlphabets(joinArray.toLowerCase());

      try {
        this.combination = this.dataList.combinations.find(
          (obj) => obj.unique_combination_id == p
        );
      } catch (exception) {
        console.log("not found");
      }

      this.priceHelper();
      this.cartHelper2();
    },

    sortAlphabets(text) {
      return text.split("").sort().join("");
    },

    priceHelper() {
      if (this.dataList.options.length < 1) {
        if (this.dataList.sale_price > 0) {
          this.total_price = this.dataList.sale_price;
        } else {
          this.total_price = this.dataList.price;
        }
      } else {
        if (this.dataList.sale_price > 0) {
          this.total_price = this.combination.price - this.dataList.sale_price;
        } else {
          this.total_price = this.combination.price;
        }
      }
      console.log(this.total_price);
    },

    increment() {
      // console.log('hi')
      let findObj = null;
      let tempArray = [];
      tempArray = JSON.parse(localStorage.getItem("localCart"));
      try {
        findObj = tempArray.find((obj) => obj.product_id === this.dataList.id);
      } catch (exception) {
        console.log("not found");
      }
      if (findObj) {
        //  findObj.quantity= findObj.quantity+1
        localStorage.setItem("localCart", JSON.stringify(tempArray));
        this.$store.commit(
          "getCartData",
          JSON.parse(localStorage.getItem("localCart"))
        );
        this.dataList.quantity++;
      } else {
        this.dataList.quantity++;
      }
      return this.total_quantity++;
    },

    decrement() {
      if (this.dataList.quantity > 1) {
        let findObj = "";
        let tempArray = [];
        tempArray = JSON.parse(localStorage.getItem("localCart"));
        try {
          findObj = tempArray.find(
            (obj) => obj.product_id === this.dataList.id
          );
        } catch (exception) {
          console.log("not found");
        }
        if (findObj) {
          // findObj.quantity= findObj.quantity-1
          localStorage.setItem("localCart", JSON.stringify(tempArray));
          this.$store.commit(
            "getCartData",
            JSON.parse(localStorage.getItem("localCart"))
          );
        }
        this.dataList.quantity--;
        this.total_quantity--;
      }
    },

    addToCart() {
      if (
        this.$store.state.cartData != null &&
        this.$store.state.cartData[0].store_id != this.dataList.store_id
      ) {
        // checking restaurent..
        console.log("not equal restaurent");
        this.modalFlag = "changeStore";
        this.showConfirmation = true;
      }
      let newCartProduct = {};
      newCartProduct = {
        product_id: this.dataList.id,
        name_en: this.dataList.name_en,
        name_ar: this.dataList.name_ar,
        description_en: this.dataList.description_en,
        description_ar: this.dataList.description_ar,
        combination: this.combination.unique_combination_id,
        image: this.dataList.preview_image,
        store_id: this.dataList.store_id,
        quantity: this.dataList.quantity,
        product_price: this.total_price,
        sub_total: "",
      };
      this.cartHelper(newCartProduct);
      this.cartHelper2();
    },

    cartHelper(newCartProduct) {
      let findObj = "";
      let tempArray = [];
      tempArray = JSON.parse(localStorage.getItem("localCart"));
      try {
        findObj = tempArray.find(
          (obj) =>
            obj.product_id === newCartProduct.product_id &&
            obj.combination === newCartProduct.combination
        );
      } catch (exception) {
        console.log("not found");
      }
      console.log(findObj);
      if (findObj) {
        findObj.quantity = findObj.quantity + 1;
        localStorage.setItem("localCart", JSON.stringify(tempArray));
        this.$store.commit(
          "getCartData",
          JSON.parse(localStorage.getItem("localCart"))
        );
        Vue.$toast.open({
          message: "Product Allready in Cart! Qunatity Increased by One",
          type: "info",
        });
        this.close();
      } else {
        if (tempArray) {
          tempArray.push(newCartProduct);
          localStorage.setItem("localCart", JSON.stringify(tempArray));
          this.$store.commit(
            "getCartData",
            JSON.parse(localStorage.getItem("localCart"))
          );
          Vue.$toast.open({
            message: "Product Added to Cart!",
            type: "success",
          });
          this.close();
        } else {
          if (tempArray == null) {
            tempArray = [];
          }
          tempArray.push(newCartProduct);
          localStorage.setItem("localCart", JSON.stringify(tempArray));
          this.$store.commit(
            "getCartData",
            JSON.parse(localStorage.getItem("localCart"))
          );
          Vue.$toast.open({
            message: "Product Added to Cart!",
            type: "success",
          });
          this.close();
        }
      }
    },

    cartHelper2() {
      console.log("carthelper 2");
      let findObj = null;
      let tempArray = [];
      tempArray = JSON.parse(localStorage.getItem("localCart"));

      try {
        findObj = tempArray.find(
          (obj) =>
            obj.product_id === this.dataList.id &&
            obj.combination === this.combination.unique_combination_id
        );
      } catch (exception) {
        console.log("not found");
      }
      if (findObj) {
        this.dataList.quantity = findObj.quantity;
        this.total_quantity = findObj.quantity;
      } else {
        this.dataList.quantity = 1;
      }
    },

    changeStore() {
      localStorage.clear();
      this.$store.commit("getCartData", null);
      let newCartProduct = {};
      newCartProduct = {
        product_id: this.dataList.id,
        name_en: this.dataList.name_en,
        name_ar: this.dataList.name_ar,
        description_en: this.dataList.description_en,
        description_ar: this.dataList.description_ar,
        combination: this.combination.unique_combination_id,
        image: this.dataList.preview_image,
        store_id: this.dataList.store_id,
        quantity: this.dataList.quantity,
        product_price: this.total_price,
        sub_total: "",
      };
      this.cartHelper(newCartProduct);
      this.close();
    },

    sizeGuide() {
      this.showSizeGuide = true;
    },

    close() {
      this.newCartProduct = Object.assign({}, this.defaultNewCartProduct);
      this.modalFlag = "";
      this.showConfirmation = false;
      this.showSizeGuide = false;
    },
  },
};
</script>


	<style scoped>
.container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  width: 90%;
  margin: 2% auto;
}

.modal {
  display: flex;
  flex-direction: row;
  justify-content: center;
  margin: auto;
  width: 50%;
  background: rgb(233, 231, 231);
  border-radius: 10px;
  cursor: pointer;
  box-shadow: 0px 0px 0px 3000px rgba(66, 61, 62, 0.5);
}
.modal2 {
  display: flex;
  flex-direction: row;
  justify-content: center;
  margin: auto;
  width: 50%;

  height: 80%;
  background: rgb(233, 231, 231);
  border-radius: 10px;
  cursor: pointer;
  box-shadow: 0px 0px 0px 3000px rgba(66, 61, 62, 0.5);
}
.modal-header {
  color: rgb(0, 0, 0);
}
.modal-message {
  margin: auto;
  color: rgb(0, 0, 0);
}

.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active in <2.1.8 */ {
  opacity: 0;
}

input[type="radio"] {
  width: 15px;
  height: 15px;
  border-radius: 15px;
}

input[type="radio"]:checked {
  background-color: #2a2a2a;
  border: 3px solid #b5b5b5;
}

.price {
  padding-left: 100px;
  margin-bottom: -20px;
}

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.8);
  transition: opacity 500ms;
  visibility: visible;
  opacity: 1;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06d85f;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px) {
  .popup {
    width: 80%;
  }
}
</style>