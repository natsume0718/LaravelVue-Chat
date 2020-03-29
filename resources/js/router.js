import VueRouter from "vue-router";
import Example from "./components/Example";

Vue.use(VueRouter);

export default new VueRouter({
    routes: [{ path: "", component: Example }],
    mode: "history"
});
