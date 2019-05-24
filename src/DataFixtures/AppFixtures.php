<?php

namespace App\DataFixtures;

use App\Entity\Producteur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $total_production = 8920.8;

        $producteurs = array(
            array(
                'name' => "Brésil",
                'desc' => "Le Brésil est le plus grand État d’Amérique latine. Le Brésil est le cinquième plus grand pays de la planète, derrière la Russie, le Canada, les États-Unis et la Chine. Ancienne colonie portugaise, le Brésil a pour langue officielle le portugais alors que la plupart des pays d'Amérique latine ont pour langue officielle l'espagnol.",
                'flag' => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/220px-Flag_of_Brazil.svg.png",
                'capital' => "Brasilia",
                'popu' => 208846892,
                'area' => 8514876,
                'quantity' => 2964.5,
                'arabica' => 73,
                'lat' => -8.867705,
                'long' => -50.439175,
            ),
            array(
                'name' => "Viêt Nam",
                'desc' => "Le Viêt Nam est un pays d'Asie du Sud-Est situé à l'est de la péninsule indochinoise. Le Viêt Nam est un État communiste à parti unique, dirigé par le Parti communiste vietnamien.",
                'flag' => "https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Flag_of_Vietnam.svg/220px-Flag_of_Vietnam.svg.png",
                'capital' => "Hanoï",
                'popu' => 92699227,
                'area' => 330967,
                'quantity' => 1461.0,
                'arabica' => 4,
                'lat' => 11.807272,
                'long' => 108.115953,
            ),
            array(
                'name' => "Indonésie",
                'desc' => "L’Indonésie, en forme longue la république d'Indonésie, est un pays transcontinental principalement situé en Asie du Sud-Est. Avec, comptabilisées à ce jour, 13 466 îles, dont 922 habitées1, il s'agit du plus grand archipel au monde. ",
                'flag' => "https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/220px-Flag_of_Indonesia.svg.png",
                'capital' => "Jakarta",
                'popu' => 262787403,
                'area' => 1904569,
                'quantity' => 698.9,
                'arabica' => 17,
                'lat' => -2.929785,
                'long' => 103.096314,
            ),
            array(
                'name' => "Colombie",
                'desc' => "La Colombie, en forme longue la république de Colombie, est une république constitutionnelle unitaire comprenant 32 départements. La Colombie est une moyenne puissance, la 4e plus grande économie d'Amérique latine, et la 3e en Amérique du Sud5. La production de café, de fleurs, d'émeraudes, de charbon et de pétrole forme le principal secteur de l'économie colombienne.",
                'flag' => "https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Flag_of_Colombia.svg/220px-Flag_of_Colombia.svg.png",
                'capital' => "Bogota",
                'popu' => 49100000,
                'area' => 1141748,
                'quantity' => 653.2,
                'arabica' => 100,
                'lat' => 4.519955,
                'long' => -73.524935,
            ),
            array(
                'name' => "Inde",
                'desc' => "L'Inde est un pays d'Asie du Sud qui occupe la majeure partie du sous-continent indien. L'Inde est un foyer de civilisations parmi les plus anciennes du monde, la civilisation de la vallée de l'Indus s'y est développée dès 3000 av. J.-C. Le sous-continent indien a abrité de vastes empires et est présent sur les routes commerciales dès l'Antiquité.",
                'flag' => "https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/Flag_of_India.svg/220px-Flag_of_India.svg.png",
                'capital' => "New Delhi",
                'popu' => 1296834042,
                'area' => 3287263,
                'quantity' => 318.2,
                'arabica' => 30,
                'lat' => 19.588741,
                'long' => 78.858609,
            ),
            array(
                'name' => "Honduras",
                'desc' => "Le Honduras est un pays situé en Amérique centrale, limité au nord par la mer des Caraïbes, qui compte de nombreuses îles, cayes et îlots dont les plus importants sont les Islas de la Bahía et les îles du Cygne.",
                'flag' => "https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Flag_of_Honduras.svg/220px-Flag_of_Honduras.svg.png",
                'capital' => "Tegucigalpa",
                'popu' => 9182766,
                'area' => 112090,
                'quantity' => 273.5,
                'arabica' => 100,
                'lat' => 15.057374,
                'long' => -87.015333,
            ),
            array(
                'name' => "Éthiopie",
                'desc' => "L'Éthiopie est un État de la Corne de l'Afrique. Depuis l'indépendance de l'Érythrée en 1993, l'Éthiopie n'a plus d'accès à la mer. Considérée comme l'un des berceaux de l'humanité2, l'Éthiopie est avec le Tchad, le Maroc et le Kenya, l'un des pays où l'on retrouve les plus anciens hominidés.",
                'flag' => "https://upload.wikimedia.org/wikipedia/commons/thumb/7/71/Flag_of_Ethiopia.svg/220px-Flag_of_Ethiopia.svg.png",
                'capital' => "Addis-Abeba",
                'popu' => 108386391,
                'area' => 1127127,
                'quantity' => 270.0,
                'arabica' => 100,
                'lat' => 9.234665,
                'long' => 39.545926,
            ),
            array(
                'name' => "Pérou",
                'desc' => "Le Pérou est un pays situé dans l'Ouest de l'Amérique du Sud. Sa capitale historique est Cuzco6, ancienne capitale de l'empire inca. Le système politique actuel repose sur la Constitution de 1993. Depuis 2002, le Pérou a été divisé en 24 départements et un important processus de décentralisation a été mis en place. Parmi ses trois langues officielles, la plus parlée est l'espagnol, suivie du quechua et de l'aymara.",
                'flag' => "https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Flag_of_Peru.svg/220px-Flag_of_Peru.svg.png",
                'capital' => "Lima",
                'popu' => 32280640,
                'area' => 1285315,
                'quantity' => 256.2,
                'arabica' => 100,
                'lat' => -9.430854,
                'long' => -75.871875,
            ),
            array(
                'name' => "Guatemala",
                'desc' => "Le Guatemala est un pays d'Amérique centrale. Il fait partie de l'Amérique latine. Son nom vient du nahuatl Cuauhtēmallān, qui peut se traduire par « lieu rempli d'arbres5» et signifie peut-être « pays des Quichés ». Sa monnaie nationale est le quetzal, faisant référence à l’oiseau sacré dont les Mayas utilisaient les longues plumes de la queue comme objets de luxe.",
                'flag' => "https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Flag_of_Guatemala.svg/220px-Flag_of_Guatemala.svg.png",
                'capital' => "Guatemala",
                'popu' => 16581273,
                'area' => 108890,
                'quantity' => 253.2,
                'arabica' => 100,
                'lat' => 14.547527,
                'long' => -90.476882,
            ),
            array(
                'name' => "Mexique",
                'desc' => "Le Mexique, en forme longue les États-Unis mexicains6,7,8, en espagnol México et Estados Unidos Mexicanos9, est un pays situé dans la partie méridionale de l'Amérique du Nord. ",
                'flag' => "https://upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Flag_of_Mexico.svg/220px-Flag_of_Mexico.svg.png",
                'capital' => "Mexico",
                'popu' => 125959205,
                'area' => 1964375,
                'quantity' => 231.6,
                'arabica' => 100,
                'lat' => 24.724752,
                'long' => -103.050174,
            ),
            array(
                'name' => "Ouganda",
                'desc' => "L'Ouganda est un pays d'Afrique de l'Est. Il est aussi considéré comme faisant partie de l'Afrique des Grands Lacs. L'Ouganda tire son nom de l'ancien royaume de Buganda, qui couvrait autrefois les régions les plus au sud, dont la capitale et plus grande ville est Kampala.",
                'flag' => "https://upload.wikimedia.org/wikipedia/commons/thumb/4/4e/Flag_of_Uganda.svg/220px-Flag_of_Uganda.svg.png",
                'capital' => "Kampala",
                'popu' => 41487965,
                'area' => 241550,
                'quantity' => 190.0,
                'arabica' => 20,
                'lat' => 1.222304,
                'long' => 32.444537,
            ),
            array(
                'name' => "Chine",
                'desc' => "La Chine, parfois appelée Chine populaire, est un pays d'Asie de l'Est. Avec près d'1,4 milliard d'habitants, soit environ un sixième de la population mondiale, elle est le pays le plus peuplé du monde. En 2014, la république populaire de Chine est la première puissance économique mondiale. La Chine est l'une des plus anciennes civilisations au monde, et est parfois citée comme la plus ancienne civilisation continue.",
                'flag' => "https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/220px-Flag_of_the_People%27s_Republic_of_China.svg.png",
                'capital' => "Pékin",
                'popu' => 1417913092,
                'area' => 9596961,
                'quantity' => 116.8,
                'arabica' => 0,
                'lat' => 35.670513,
                'long' => 105.629085,
            ),
            array(
                'name' => "Côte d'Ivoire",
                'desc' => "La Côte d’Ivoire est un pays membre de l’Union africaine. Bien qu'elle ait pour langue officielle le français, plus de 60 autres dialectes sont parlés au quotidien. L’économie, essentiellement axée sur la production de café et de cacao, connaît au cours des deux premières décennies un essor exceptionnel, faisant de la Côte d’Ivoire un pays phare en Afrique de l'Ouest.",
                'flag' => "https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_C%C3%B4te_d%27Ivoire.svg/220px-Flag_of_C%C3%B4te_d%27Ivoire.svg.png",
                'capital' => "Yamoussoukro",
                'popu' => 26260582,
                'area' => 322462,
                'quantity' => 103.7,
                'arabica' => 0,
                'lat' => 6.607750,
                'long' => -5.155837,
            ),
            array(
                'name' => "Laos",
                'desc' => "Le Laos est un pays sans accès à la mer d'Asie du Sud-est. La devise du Laos est « Paix, Indépendance, Démocratie, Unité et Prospérité », et son drapeau est constitué de trois bandes horizontales, les bandes supérieure et inférieure de couleur rouge et celle du milieu de couleur bleue, avec en son centre un disque blanc. L'hymne national est Pheng Xat Lao.",
                'flag' => "https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Flag_of_Laos.svg/220px-Flag_of_Laos.svg.png",
                'capital' => "Vientiane",
                'popu' => 7234171,
                'area' => 236800,
                'quantity' => 89.0,
                'arabica' => 0,
                'lat' => 19.857718,
                'long' => 102.611149,
            ),
            array(
                'name' => "Nicaragua",
                'desc' => "Le Nicaragua est un pays d'Amérique centrale. La population multiethnique de six millions d'habitants comprend des personnes d'ascendance autochtone, européenne et africaine. La langue principale est l'espagnol, mais certains autochtones parlent miskito, rama, sumo, ainsi que le créole limonese.",
                'flag' => "https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Flag_of_Nicaragua.svg/220px-Flag_of_Nicaragua.svg.png",
                'capital' => "Managua",
                'popu' => 6085213,
                'area' => 129494,
                'quantity' => 83.9,
                'arabica' => 100,
                'lat' => 12.656536,
                'long' => -84.997550,
            ),
            array(
                'name' => "Philippines",
                'desc' => "Les Philippines est un pays d'Asie du Sud-Est constitué d'un archipel de 7 641 îles dont onze totalisent plus de 90 % des terres et dont un peu plus de 2 000 seulement sont habitées, alors qu'environ 2 400 îles n'ont même pas reçu de nom. On distingue trois zones géographiques : Luçon, Visayas et Mindanao.",
                'flag' => "https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/220px-Flag_of_the_Philippines.svg.png",
                'capital' => "Manille",
                'popu' => 104256076,
                'area' => 300400,
                'quantity' => 78.4,
                'arabica' => 10,
                'lat' => 15.957832,
                'long' => 120.946844,
            ),
            array(
                'name' => "Venezuela",
                'desc' => "Le Venezuela est une république fédérale située dans la partie la plus septentrionale de l’Amérique du Sud. La langue nationale du Venezuela est l'espagnol et sa capitale et principale métropole est Caracas. Sa population est composée essentiellement de métis. Le Venezuela est une puissance énergétique majeure avec des réserves prouvées de 302 milliards de barils11, ce qui en fait le premier pays du monde dans le classement par réserves de pétrole prouvées, devant l'Arabie Saoudite.",
                'flag' => "https://upload.wikimedia.org/wikipedia/commons/thumb/7/7b/Flag_of_Venezuela_%28state%29.svg/220px-Flag_of_Venezuela_%28state%29.svg.png",
                'capital' => "Caracas",
                'popu' => 31689176,
                'area' => 916445,
                'quantity' => 77,2,
                'arabica' => 100,
                'lat' => 8.471492,
                'long' => -66.332757,
            ),
            array(
                'name' => "Costa Rica",
                'desc' => "Le Costa Rica est une république constitutionnelle unitaire d'Amérique centrale ayant un régime présidentiel. Le Costa Rica est souvent surnommé « la Suisse de l’Amérique centrale ». Le territoire costaricien est occupé par les Amérindiens dès la Préhistoire avant d'être découvert par Christophe Colomb en 1502. Depuis le 1er décembre 1948, le Costa Rica est un pays neutre et est devenu la première nation du monde à avoir constitutionnellement supprimé son armée.",
                'flag' => "https://upload.wikimedia.org/wikipedia/commons/thumb/f/f2/Flag_of_Costa_Rica.svg/220px-Flag_of_Costa_Rica.svg.png",
                'capital' => "San José",
                'popu' => 5003402,
                'area' => 51100,
                'quantity' => 76.8,
                'arabica' => 100,
                'lat' => 9.943153,
                'long' => -83.906748,
            ),
            array(
                'name' => "Tanzanie",
                'desc' => "La Tanzanie est un pays d'Afrique de l'Est situé en bordure de l'océan Indien, dans la partie tropicale de l'hémisphère sud. Sa capitale est Dodoma, située dans l'intérieur des terres, mais le principal pôle économique est l'ancienne capitale Dar es Salam, située sur la côte. La Tanzanie actuelle est née de l'union du Tanganyika et de Zanzibar le 26 avril 1964, peu de temps après leur indépendance respective vis-à-vis du Royaume-Uni. Elle est membre du Commonwealth depuis fin 1961 et des Nations unies depuis le 14 décembre 1961.",
                'flag' => "https://upload.wikimedia.org/wikipedia/commons/thumb/3/38/Flag_of_Tanzania.svg/220px-Flag_of_Tanzania.svg.png",
                'capital' => "Dodoma",
                'popu' => 57310019,
                'area' => 945087,
                'quantity' => 71.2,
                'arabica' => 30,
                'lat' => -5.874541,
                'long' => 35.131414,
            ),
            array(
                'name' => "Madagascar",
                'desc' => "Madagascar est un État insulaire d'Afrique constitué d'une grande île de l'océan Indien que le canal de Mozambique sépare du reste du continent. C’est la cinquième plus grande île du monde après l'Australie, le Groenland, la Nouvelle-Guinée et Bornéo. Durant vingt siècles, Madagascar a été façonnée par des peuples venant d'horizons divers : Afrique, Sud-Est asiatique (Indonésie), Proche-Orient, Europe… pour créer la société pluriculturelle malgache actuelle.",
                'flag' => "https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Flag_of_Madagascar.svg/220px-Flag_of_Madagascar.svg.png",
                'capital' => "Antananarivo",
                'popu' => 24430325,
                'area' => 587041,
                'quantity' => 64.0,
                'arabica' => 0,
                'lat' => -19.781236,
                'long' => 46.760122,
            ),
        );
        foreach ($producteurs as $country) {
		$producteur = new Producteur();
		$producteur
			->setNom($country['name'])
            ->setDescription($country['desc'])
            ->setCapitale($country['capital'])
            ->setSurface($country['area'])
            ->setDrapeau($country['flag'])
            ->setHabitant($country['popu'])
            ->setPourcent(round(($country['quantity'] / $total_production)*100))
            ->setTonne($country['quantity'])
            ->setArabica($country['arabica'])
            ->setRobusta(100 - $country['arabica'])
            ->setLat($country['lat'])
            ->setLon($country['long'])
		;
		$manager->persist($producteur);
	}

        $manager->flush();
    }
}
