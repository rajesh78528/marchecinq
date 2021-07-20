<template>
  <div>
    <!-- Banner Starts -->
    <section class="cart-banner section-padding-both">
      <div class="row">
        <div class="col-md-6 col-sm-11 order-1" style="width: 100%">
          <img
            :src="'http://18.196.41.77' + dataList.preview_image"
            style="width: 100%; height: 100%; object-fit: cover"
          />
        </div>
        <div class="col-md-5 order-3 ml-2" style="text-align: left">
          <div class="banner-right">
            <div class="right-top">
              <h1 style="color: #005677; font-size: 38px" class="mt-5">
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
            <div class="left-title">
              <h3 style="color: #005677">QR {{ total_price }}</h3>
            </div>
            <div
              class="optionlist"
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
            <div class="quantity mt-4">
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
            <div class="right-button my-5">
              <a
                @click="addToCart"
                class="template-btn2 on2"
                style="color: #005677"
                >{{ translations.addtocart }} <span>&rharu;</span></a
              >
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Banner End -->
  </div>
</template>


<script>
import OptionFilter from "../product/OptionFilter";
export default {
  components: {
    OptionFilter,
  },
  data: () => ({
    locale: "",
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

  props: ["id"],

  computed: {},
  watch: {},
  mounted() {
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
      this.getDetail();
    },

    closeModal() {
      this.$emit("close", true);
    },

    async getDetail() {
      try {
        let { data } = await axios({
          method: "get",
          url: "/app/product/" + this.id,
        });

        this.dataList = data;
        this.priceHelper();
        this.cartHelper2();
      } catch (e) {
        console.log("error");
      }
    },

    getChildOption() {
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
          (obj) => obj.unique_combination_id === p
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
          this.total_price =
            this.dataList.sale_price + parseInt(this.combination.price);
        } else {
          this.total_price = this.dataList.price;
        }
      }
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
      this.closeModal();
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

.price {
  padding-left: 100px;
  margin-bottom: -20px;
}
.quantity ul li {
  display: inline;
  margin-right: 40px;
}
</style>