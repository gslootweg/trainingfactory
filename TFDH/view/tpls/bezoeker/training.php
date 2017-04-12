<!DOCTYPE html>
<html>
    <head>
        <title>Training factory</title>

        <!-- CSS -->
        <link href="TFDH/css/main.css" rel="stylesheet">

        <!-- JS -->
    </head>
    <body>

        <div id="body-wrapper">

            <header>
                <div id="title">
                    <img src="TFDH/img/logo.png">
                    <h1>Training centrum Den Haag</h1>
                </div>
                <div id="login-wrapper">
                    <form method="post" action="?control=bezoeker&action=login">
                        <input type="text" name="username" placeholder="username">
                        <input type="password" name="password" placeholder="wachtwoord">
                        <button>reset ww</button>
                        <input type="submit" value="inloggen">
                    </form>
                </div>
                <div class="clear"></div>
            </header>

            <nav>
                <ul>
                    <li><a href="?control=bezoeker&action=default">Home</a></li>
                    <li><a class="active" href="?control=bezoeker&action=training">Trainings Aanbod</a></li>
                    <li><a href="?control=bezoeker&action=register">Lid worden</a></li>
                    <li><a href="?control=bezoeker&action=rule">Gedragsregels</a></li>
                    <li><a href="?control=bezoeker&action=location">Lokatie & contact</a></li>
                </ul>
            </nav>

            <div id="content-wrapper">
                <section id="photo-col">
                    <figure>
                        <img src="TFDH/img/boksen_1.jpg">
                    </figure>
                    <figure>
                        <img src="TFDH/img/boksen_2.jpg">
                    </figure>
                    <figure>
                        <img src="TFDH/img/boksen_3.png">
                    </figure>
                    <div class="clear"></div>
                </section>

                <section id="main-content">
                    <h1>Trainings aanbod</h1>
                    <table class="lesaanbod">
                        <b>Er zijn <?= count($training);?> soorten trainingen.</b><br/><br/>
                        <tr>
                        <td class="lesaanbod"><b>Omschrijving</b></td><td class="lesaanbod"><b>Tijdsduur</b></td><td class="lesaanbod"><b>Extra Kosten</b></td>
                        </tr>
                         <?php foreach($training as $t):?>
                            <tr>
                                <td class="lesaanbod">
                                    <?= $t->getDescription();?>
                                </td>
                                <td class="lesaanbod">
                                    <?= $t->getDuration();?>
                                </td>
                                <td class="lesaanbod">
                                    <?= $t->getExtraCosts();?>
                                </td>
                             </tr>
                            <?php  endforeach;?>
                    </table>
                    <p>Let op, voor het sporten zijn dichte schoenen verplicht.  </p>
                </section>
            </div>
        </div>
    </body>
</html>