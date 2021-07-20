<template>
  <div class="cart-content">
    <span class="cross-icon" v-if="!isCheckout"
      ><i class="lnr lnr-cross"></i
    ></span>
    <div class="cart-title text-center">
      <h2 style="color: #005677">{{ translations.cart }}</h2>
      <h6 class="text-right" style="color: #005677">
        {{ cartData ? cartData.length : 0 }} {{ translations.item }}
      </h6>
    </div>

    <div class="cart-items">
      <div
        class="single-item-function-1"
        v-for="(product, index) in cartData"
        :key="index"
      >
        <div class="single-item d-flex justify-content-between mb-4">
          <div class="item-left d-flex">
            <div
              class="item-image image-1"
              :class="{ isCheckout }"
              :style="{
                'background-image':
                  'url( http://18.196.41.77' + product.image + ')',
              }"
            ></div>
            <div class="item-name align-self-center">
              <h6 style="color: #005677">{{ product.name }}</h6>
            </div>
          </div>
          <div class="item-name align-self-center">
            <p style="color: #005677">
              {{ product.quantity }} * {{ product.product_price }}
            </p>
          </div>
          <div class="item-right d-flex align-items-center">
            <div class="item-price">
              <h6 style="color: #005677">QR {{ subTotal(product) }}</h6>
            </div>
            <div class="item-icon">
              <i
                style="color: #005677"
                class="fa fa-trash-o"
                @click="deleteItem(index)"
              ></i>
            </div>
          </div>
        </div>
      </div>

      <div class="total-price text-right mb-5" v-if="shipping_rate">
        <h5>Shipping Cost</h5>
        <h3>QR {{ shipping_rate }}</h3>
      </div>
    </div>

    <div class="total-price text-right">
      <h4 style="color: #005677">{{ translations.total }}</h4>
      <h3 style="color: #005677" :class="{ strike: reward }">
        QR {{ total() }}
      </h3>

      <h4 style="color: #005677" v-if="reward">Reward</h4>
      <h3 style="color: #005677" v-if="reward">
        QR {{ total() - reward.amount }}
      </h3>
    </div>

    <div class="cart-buttons mt-4 mt-xl-5" v-if="!isCheckout">
      <button
        style="color: #005677"
        @click="checkOutCart"
        class="template-btn2 on2"
      >
        {{ translations.checkout }} <span>&rharu;</span>
      </button>
    </div>

    <div class="coupon" v-if="reward == null">
      <input
        type="text"
        placeholder="Enter Coupon Code"
        class="form-control mb-2"
        v-model="coupon"
      />
      <button class="btn" @click="checkCoupon">Apply Coupon</button>
    </div>
    <div class="coupon d-flex justify-content-between" v-else>
      <p>Coupon Applied</p>
      <p>{{ reward.code }}</p>
      <p style="cursor: pointer" @click="removeCoupon">
        <i class="fa fa-trash-o"></i>
      </p>
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