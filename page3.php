<?php include 'Include/header.php' ?>
<style>
p.text {
    margin-left: 20px;
    width: 500px;
}

ul.list-group {
    max-width: 200px;
    max-height: 200px;
    overflow: auto;
}

a.title {
    background-color: blue;
    margin-left: 10px;

}
</style>



<div class="container">
    <h2>Where are you from ?</h2>
    <h5> Hint : if you find your Country on the list, just stop your mouse on it to see the capital</h5>

    <div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">America</button>
        <div class="dropdown-menu dropdown-menu-right">



            <ul class="list-group">
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="assumption"
                    data-content="assumption">Paraguay</a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="Brasilia"
                    data-content="assumption">Brazil</a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="Washingtom D.C"
                    data-content="assumption">U.S.A</a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="Buenos Aires"
                    data-content="assumption">Argentina</a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="Montevideu"
                    data-content="assumption">Uruguay</a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="Otawa"
                    data-content="assumption">Canada</a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="Santiago"
                    data-content="assumption">Chile</a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="Mexico City"
                    data-content="assumption">Mexico</a>

            </ul>


        </div>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Asia</button>
        <div class="dropdown-menu">
            <ul class="list-group">
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="Tokio"
                    data-content="assumption">Japan</a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="Pequin"
                    data-content="assumption">China</a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="BANGKOK"
                    data-content="assumption">Thailand</a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="SEUL"
                    data-content="assumption">South Korea</a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="JAKARTA"
                    data-content="assumption">Indonesia</a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="SIEM REAP"
                    data-content="assumption">Cambodia</a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="HANOI"
                    data-content="assumption">Vietnam</a>
            </ul>


        </div>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Africa</button>
        <div class="dropdown-menu">
            <ul class="list-group">
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="PRETORIA"
                    data-content="assumption">South Africa</a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="MARAKESH"
                    data-content="assumption">Marocco</a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="CAIRO"
                    data-content="assumption">Egypt</a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="ALGER"
                    data-content="assumption">Algeria</a>
            </ul>


        </div>
    </div>
    <div class="btn-group">

        <!-- <div class="dropdown dropright"> -->
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Europe </button>
        <div class="dropdown-menu">
            <ul class="list-group">
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="ROME"
                    data-content="assumption">Italy</a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="LUXEMBOURGH"
                    data-content="assumption">Luxembourg</a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="BRUSSELS"
                    data-content="assumption">Belgium</a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="COPEMHAGEM"
                    data-content="assumption">Denmark</a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="HELSINK"
                    data-content="assumption">Finland</a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="PARIS"
                    data-content="assumption">France</a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="Bratislava"
                    data-content="assumption">Slovakia</a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="Ljubljana"
                    data-content="assumption">Slovenia</a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="Berlin"
                    data-content="assumption">Germany</a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="Athens"
                    data-content="assumption">Greece</a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="Dublin"
                    data-content="assumption">Ireland </a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="Amsterdam"
                    data-content="assumption">The Netherlands</a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="Lisbon "
                    data-content="assumption">Portugal</a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="Madrid"
                    data-content="assumption">Spain</a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="Stockholm"
                    data-content="assumption"> Sweden</a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="London"
                    data-content="assumption">U.K</a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="Nicosia"
                    data-content="assumption">Cyprus</a>
                <a href="#" class="list-group-item list-group-item-action" data-toggle="popover" title="Vilnius"
                    data-content="assumption">Lithuania</a>
            </ul>



        </div>

    </div>
</div>

<div class="containersearch">
    <h2> Couldn`t find your country ? </h2>

    <form action="page2.php" method="get">
        country : <input type="text" class="form-control" id="text" placeholder="type your country`s name here"
            name="country">
        <input type="submit" name="send">
    </form>
</div>

</div>


<?php include 'Include/footer.php';?>