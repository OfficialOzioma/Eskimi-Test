<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <router-link class="navbar-brand" to="/">Eskimi Task </router-link>
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarsExample07"
                aria-controls="navbarsExample07"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div
                class="collapse navbar-collapse ml-5 pl-5"
                id="navbarsExample07"
            >
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <router-link class="nav-link" to="/home">
                            Home
                        </router-link>
                    </li>
                    <li class="nav-item active ml-4">
                        <router-link class="nav-link" to="campaign/create">
                            Create new Campaign
                        </router-link>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <li class="nav-item dropdown">
                        <router-link
                            class="dropdown-item active ml-5 bg-dark"
                            to="/log"
                        >
                            Logout
                        </router-link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: "Navbar"
};
</script>
