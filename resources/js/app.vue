<template>
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-12">
                <div class="links text-right">
                    <!-- <Navbar /> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <router-view></router-view>
            </div>
            <div class="col-md-3 mb-4"></div>
        </div>
        <footer class="fixed-bottom mt-3">
            <div class="row">
                <div class="col text-left" style="margin-left: 15px">
                    All rights reserved by Eskimi Task by Ozioma Dike
                </div>
            </div>
        </footer>
        <FlashMessage></FlashMessage>
    </div>
</template>

<script>
// import Navbar from "./components/Navbar";

export default {
    name: "app"
};
</script>

<style scoped></style>
