<!DOCTYPE html>
<html class="no-js" lang=" fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Exercice PHP" content=" Formulaire sur base d'une demande">
    <meta name="AJZENMAN Simon" content="travail de Simon ajzenman pour le cours de PHP">
    <title>EXERCICE PHP - DWM - Ajzenman Simon</title>
<!--    <link href="css/bootstrap.min.css" rel="stylesheet">-->
    <link href="https://bootswatch.com/paper/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
<main>

    <div class="container">

        <div class="page-header">
            <h1 class="h1">PHP-- remise de <a href="http://simon-ajzenman.be" target="_blank">Simon</a></h1>
            <h2 class="h2"> #EX01 <i>"Papa? je pourrais emprunter ta voiture?"</i></h2>
        </div>

    
        <?php

        function comparateur() {
              $balance = 0;
                    //On initialise une variable qui va nous servir à déterminer si on penche vers le oui ou le non
                    
                    for($i=1;$i<=6;$i++){
                        //initalisaion d'une boucle pour qui va parcourir les input
                        
                        $answer= $_GET["question".$i];
                        if($answer == "oui") {
                            //si la réponse du input est "oui", on incrémente la variable
                            $balance++;
                        }
                    
                        
                    }
                      //une fois que l'on a le résultat on regarde dans quelle condition se trouve la variable

                    //tous les input ont répondu "oui"
                    if ($balance === 6) {
                        echo "<p class='h5'>Aucun soucis, passe une bonne soirée</p>
                        <img src='img/aston-martin.jpg' alt='image représentant la voiture que l on va empruntée'>";
                    }

                     //assez d'input ont répondu "oui"
                    if ($balance > 3 && $balance< 6) {
                        echo "<p class='h5'>Ok, à condition que tu fasses très attention, je ne suis pas d'accord avec tout</p>
                        <img src='img/aston-martin.jpg' alt='image représentant la voiture que l on va empruntée'>";
                    }

                     //pas assez d'input ont répondu "oui"
                    if ( $balance < 3) {
                        echo "<p class='h5'>Dégage punk, vas faire tes codes pour l'internet </p>";
                    }

        }
            
            if ( $_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET) ) {
            //Regarde si les données ne sont pas vides
                    
                    //lance ma fonction 
                    comparateur();
               
            }

    
        ?>
     


        <form action="#" method="GET">

            <ul class="list list-unstyled row">
                <li class=" form-group col-xs-6">
                    <label class="h5 " for="question1">Bon, tu me promets que tu vas rouler prudemment?</label>
                    <ul class="choice">
                        <li><input required name="question1" type="radio" value="non">Oui, j' ai appris sur GTA.</li>
                        <li><input required name="question1" type="radio" value="oui">Oui, je roule bien et je n'ai encore jamais eu d'accident.</li>
                        <li><input required name="question1" type="radio" value="oui">Ben, comme d'hab.</li>
                        <li><input required name="question1" type="radio" value="non">Oui ne t'inquiète pas, je ne dépasse jamais 120, en agglomération.</li>
                    </ul>
                </li>

                <li class=" form-group col-xs-6">
                    <label class="h5 " for="question2">Et j'y gagne quoi moi?</label>
                    <ul class="choice">
                        <li><input required name="question2" type="radio" value="non">Ben rien, j'ai le droit d'emprunter la voiture...</li>
                        <li><input required name="question2" type="radio" value="non">Je te file 20 euros.</li>
                        <li><input required name="question2" type="radio" value="oui">Je dis rien à maman pour les sites porno</li>
                        <li><input required name="question2" type="radio" value="oui">Je te fais le plein au retour</li>
                    </ul>

                </li>
                <li class=" form-group col-xs-6">
                    <label class="h5 " for="question3">D'accord, et tu vas avec qui?</label>
                    <ul class="choice">
                        
                    
                        <li><input required name="question3" type="radio" value="non">Environ une petite dizaine d'amis, mais on va se serrer</li>
                        <li><input required name="question3" type="radio" value="oui">Deux-trois amis, en plus ceux que tu aimais bien.</li>
                        <li><input required name="question3" type="radio" value="oui">Que des filles, je t'en présente à mon retour</li>
                        <li><input required name="question3" type="radio" value="non">J'en connais aucun, mais ils ont l'air sympa, je crois</li>
                    </ul>

                </li>
                <li class=" form-group col-xs-6">
                    <label class="h5 " for="question4">Et c'est pour aller où?</label>

                    <ul class="choice">        
                        <li><input required name="question4" type="radio" value="oui">Ben on va tranquillement sur une terrasse</li>
                        <li><input required name="question4" type="radio" value="non">On roule jusqu'à Amsterdam acheter de la weed</li>
                        <li><input required name="question4" type="radio" value="non">On va en boîte, bien se saouler et puis on reviens</li>
                        <li><input required name="question4" type="radio" value="oui">Dîner dans un petit resto pas très loin</li>
                                            
                    </ul>

                </li>
                <li class=" form-group col-xs-6">
                    <label class="h5 " for="question5">Tu rentres à quelle heure?</label>
                    <ul class="choice">
                    
                       <li><input required name="question5" type="radio"  value="non">4h00 voir 5h00 du matin, histoire de profiter de la nuit</li>
                       <li><input required name="question5" type="radio"  value="oui">Minuit environ, on rentre pas trop tard</li>
                        <li><input required name="question5" type="radio"  value="oui">Vers 22h00, je la fais pas tard ce soir</li>
                        <li><input required name="question5" type="radio"  value="non">Je dors surement chez des potes, tu as besoin de la voiture demain?</li>
                    </ul>

                </li>
                    <li class=" form-group col-xs-6">
                    <label class="h5 " for="question6">T'as assez d'argent pour ce soir?</label>
                    <ul class="choice">
                        <li><input required name="question6" type="radio"  value="oui">Oui ne t'inquiète pas j' ai bien économiser pour la soirée</li>
                        <li><input required name="question6" type="radio"  value="oui">Non, d'ailleurs tu saurais me prêter 30 euros</li>
                        <li><input required name="question6" type="radio"  value="non">Ben je demanderai aux autres</li>
                        <li><input required name="question6" type="radio"  value="non">Oui, j'ai braqué une banque hier</li>
                    </ul>

                </li>
                <li>
                    <p class="h5">Bon...je vais réfléchir</p>
                    <input required type="submit" class="btn btn-primary" value="vérifier tes réponses">
                </li>
            </ul>
        </form>

        <a href="https://github.com/simajzenman/php--remise-01/tree/master">Télécharger le code source sur Github</a>
        
         
    </div>
</main>
</body>
</html>
