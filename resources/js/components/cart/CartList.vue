<template>
<div class="container">
  <div class="minicart-drop-close">CLOSE</div>
  <div class="minicart-drop-content">
      <h3>Recently added items:</h3>


      <div class="minicart-prd" v-for="(product, index) in cartData"
        :key="index">
          <div class="minicart-prd-image"><a href="#">
          <img src="http://18.196.41.77"+ product.image
          data-srcset="http://18.196.41.77"+ product.image class="lazyload" alt=""></a></div>
          <div class="minicart-prd-name">
              <h5><a href="#">{{ product.name }}</a></h5>
              <h2><a href="#">Checkered shirt</a></h2>
          </div>
          <div class="minicart-prd-qty"><span>qty:</span> <b>1</b></div>
          <div class="minicart-prd-price"><span>price:</span> <b>{{ product.quantity }} * {{ product.product_price }}</b></div>
          <div class="minicart-prd-action"><a href="#" class="icon-heart js-label-wishlist"></a> <a href="product.html" class="icon-pencil"></a> <a href="#" class="icon-cross js-product-remove"></a></div>
      </div>
      <!--<div class="minicart-prd">
          <div class="minicart-prd-image"><a href="#"><img src="images/products/product-placeholder.png" data-srcset="images/products/xsmall/product-02.jpg" class="lazyload" alt=""></a></div>
          <div class="minicart-prd-name">
              <h5><a href="#">canverse</a></h5>
              <h2><a href="#">Long top with print</a></h2>
          </div>
          <div class="minicart-prd-qty"><span>qty:</span> <b>1</b></div>
          <div class="minicart-prd-price"><span>price:</span> <b>$ 20.00</b></div>
          <div class="minicart-prd-action"><a href="#" class="icon-heart js-label-wishlist"></a> <a href="product.html" class="icon-pencil"></a> <a href="#" class="icon-cross js-product-remove"></a></div>
      </div>
      <div class="minicart-prd">
          <div class="minicart-prd-image"><a href="#"><img src="images/products/product-placeholder.png" data-srcset="images/products/xsmall/product-14.jpg" class="lazyload" alt=""></a></div>
          <div class="minicart-prd-name">
              <h5><a href="#">saucany</a></h5>
              <h2><a href="#">Knitted sweater</a></h2>
          </div>
          <div class="minicart-prd-qty"><span>qty:</span> <b>1</b></div>
          <div class="minicart-prd-price"><span>price:</span> <b>$ 199.00</b></div>
          <div class="minicart-prd-action"><a href="#" class="icon-heart js-label-wishlist"></a> <a href="product.html" class="icon-pencil"></a> <a href="#" class="icon-cross js-product-remove"></a></div>
      </div>-->

      <div class="minicart-drop-total">
          <div class="float-right"><span class="minicart-drop-summa"><span>
          {{ translations.total }}:</span> <b>QR {{ total() }}</b></span>
              <div class="minicart-drop-btns-wrap">
              <button
                  @click="checkOutCart"
                 class="btn">
                 <i class="icon-check-box"></i><span>{{ translations.checkout }}</span>
              </button>
              
              <a href="#" class="btn btn--alt">
                <i class="icon-handbag"></i><span>view cart</span></a>
              </div>
          </div>
          <!--<div class="float-left">
            <a href="cart.html" class="btn btn--alt">
            <i class="icon-handbag"></i><span>view cart</span>
            </a>
          </div>-->
      </div>
  </div>
</div>  
</template>

<style lang="scss">
.isCheckout {
  width: 80px;
  height: 80px;
  background-size: cover;
}
.strike {
  text-decoration: line-through;
}
.coupon {
  margin-top: 2rem;
  font-weight: bold;
}
</style>
<script>
import $ from "jquery";
export default {
  components: {},
  data: () => ({
    locale: "",
    translations: Object,
    today: "",
    tommrow: "",
    coupon: "",
    reward: null,
    cartCheckOutData: {
      cartData: [],
      name: "",
      mobile: "",
      address: "",
      note: "",
      total_amount: "",
      store_id: "",
      type: "",
      date: new Date(Date.now()),
      time: "",
      lat: "",
      lng: "",
      email: "",
    },

    defaultcartCheckOutData: {
      cartData: [],
      name: "",
      mobile: "",
      address: "",
      note: "",
      total_amount: "",
      store_id: "",
      type: "",
      date: new Date(Date.now()),
      time: "",
      lat: "",
      lng: "",
      email: "",
    },
  }),

  props: {
    source: String,
    isCheckout: Boolean,
    shipping_rate: Number,
  },

  computed: {
    cartData() {
      return this.$store.state.cartData;
    },
  },

  watch: {},

  mounted() {
    this.locale = this.$store.state.locale;

    if (this.locale == "ar") {
      this.translations = this.$store.state.translations.ar.php.translations;
    } else {
      this.translations = this.$store.state.translations.en.php.translations;
    }
    const r = localStorage.getItem("coupon");
    if (r) {
      this.reward = JSON.parse(r);
    }
  },

  created() {
    this.initialize();
  },

  methods: {
    removeCoupon() {
      this.reward = null;
      localStorage.removeItem("coupon");
    },
    async checkCoupon() {
      try {
        const { data } = await axios({
          method: "POST",
          url: "/app/coupon/check",
          data: {
            code: this.coupon,
            amount: 10,
          },
        });
        console.log(data);
        if (data.status) {
          this.reward = data.data;
          localStorage.setItem("coupon", JSON.stringify(this.reward));
        } else {
          Vue.$toast.open({
            message: data.data,
            type: "error",
          });
          $(".cart-popup").removeClass("active");
          $(".body-overlay").removeClass("active");
          $(".floating-icon").removeClass("active");
        }
      } catch (error) {
        Vue.$toast.open({
          message: "Error",
          type: "error",
        });
      }
    },

    async initialize() {},
    subTotal(product) {
      product.sub_total = product.product_price * product.quantity;
      this.total();
      return product.sub_total;
    },

    total() {
      let sum = 0;
      if (this.cartData) {
        let total = (this.cartCheckOutData.total_amount = this.cartData.reduce(
          (sum, item) => sum + item.product_price * item.quantity,
          0
        ));
        if (this.shipping_rate) {
          total += this.shipping_rate;
        }
        return total;
      }
    },

    deleteItem(index) {
      this.cartData.splice(index, 1);
      if (this.cartData.length == 0) {
        localStorage.clear();
        this.$store.commit(
          "getCartData",
          JSON.parse(localStorage.getItem("localCart"))
        );
        Vue.$toast.open({ message: "Cart is empty", type: "info" });
        setTimeout(() => {
          window.location.href = "/";
        }, 3000);
      } else {
        localStorage.setItem("localCart", JSON.stringify(this.cartData));
        this.$store.commit(
          "getCartData",
          JSON.parse(localStorage.getItem("localCart"))
        );
        Vue.$toast.open({
          message: "Product Removed From Cart!",
          type: "info",
        });
        this.total();
      }
    },

    close() {
      localStorage.clear();
      this.$store.commit("getCartData", null);
      this.cartCheckOutData = Object.assign({}, this.defaultcartCheckOutData);
    },

    async checkOutCart() {
      if (this.cartData == null) {
        Vue.$toast.open({ message: "Cart is Empty", type: "info" });
        return;
      }
      console.log(this.$store.state);
      if (this.$store.state.authUser) {
        window.location.href = "/checkout";
      } else {
        Vue.$toast.open({
          message: "Login before checkout",
          type: "error",
        });
        $(".cart-popup").removeClass("active");
        $(".body-overlay").removeClass("active");
        $(".floating-icon").removeClass("active");
        return;
      }
      // window.location.href = 'https://m5web.tas-taz.com/checkout';
      // window.location.href = "/checkout";
    },
  },
};
</script>