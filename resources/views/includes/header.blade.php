<div class="container">
    <div class="row">
        <div class="col">
            <img src="../assets/img/dc-logo.png" alt="">
        </div>
        <div class="col">
            <ul class="navbar">
                <li v-for="(link, index) in links" :key=index><a :href="link.url" :class="{active: link.current}">{{link.text}}</a></li>
            </ul>
        </div>
    </div>
</div>