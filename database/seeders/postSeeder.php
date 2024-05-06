<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Str;

class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $articles = [
            [
                'title' => '5G et IoT : Comment votre vie quotidienne va changer',
                'category' => 'Hight-tech',
                'content' => '
                Alors que la 5G devient une réalité, son impact sur l\'Internet des Objets (IoT) promet de transformer notre vie quotidienne de manière spectaculaire. Cette technologie ultra-rapide permettra une communication plus efficace entre les appareils connectés.
                Dans les maisons intelligentes, les appareils IoT pourront communiquer entre eux à des vitesses inégalées, rendant les maisons plus intelligentes et plus écoénergétiques. Dans les villes, la 5G facilitera des réseaux de transport plus synchronisés, améliorant la sécurité et réduisant les temps de trajet. Les industries bénéficieront également d\'une automatisation accrue et d\'une meilleure collecte de données en temps réel.
                En conclusion, l\'avènement de la 5G transformera l\'IoT et, par extension, notre vie quotidienne, en apportant des améliorations significatives en matière de confort, sécurité et efficacité.
                ',
                'image' => 'https://cdn.pixabay.com/photo/2020/02/03/20/49/technology-4816658_960_720.jpg'
            ],
            [
                'title' => 'Les réalités augmentée et virtuelle : une révolution dans l\'éducation',
                'category' => 'Hight-tech',
                'content' => '
                La réalité augmentée (RA) et la réalité virtuelle (RV) sont sur le point de révolutionner le secteur éducatif. Ces technologies offrent des méthodes d\'apprentissage immersives qui peuvent transformer les salles de classe traditionnelles en environnements dynamiques et interactifs.
                Les élèves peuvent explorer des mondes virtuels pour apprendre l\'histoire ou la science, améliorant ainsi la rétention d\'information et l\'engagement. Les enseignants peuvent utiliser la RA pour illustrer des concepts complexes en 3D, rendant l\'apprentissage plus accessible et plus compréhensible pour tous les types d\'apprenants.
                La conclusion est claire : la RA et la RV ont le potentiel de transformer radicalement les méthodes d\'enseignement, en les rendant plus adaptées aux défis du 21e siècle.
                ',
                'image' => 'https://cdn.pixabay.com/photo/2024/04/18/10/08/ai-generated-8703959_960_720.jpg'
            ],
            [
                'title' => 'Blockchain et au-delà : quel avenir pour les transactions numériques ?',
                'category' => 'Hight-tech',
                'content' => '
                La blockchain est souvent associée aux cryptomonnaies, mais son potentiel s\'étend bien au-delà. Cette technologie offre une sécurité et une transparence sans précédent pour toutes sortes de transactions numériques.
                Dans le futur, nous pourrions voir des applications de blockchain dans divers domaines tels que les registres fonciers, les droits d\'auteur ou même les votes électroniques. Chaque transaction sur la blockchain est enregistrée de manière indélébile, offrant une fiabilité et une sécurité accrues par rapport aux méthodes traditionnelles.
                En conclusion, alors que la blockchain continue de mûrir, son potentiel pour révolutionner les transactions numériques dans de nombreux secteurs est immense.
                ',
                'image' => 'https://cdn.pixabay.com/photo/2018/01/18/07/31/bitcoin-3089728_960_720.jpg'
            ],
            [
                'title' => 'Startups à suivre : les 10 entreprises technologiques qui promettent pour 2024',
                'category' => 'Hight-tech',
                'content' => '
                Chaque année, de nouvelles startups émergent, promettant d\'apporter des innovations révolutionnaires. Pour 2024, plusieurs startups technologiques se distinguent déjà par leur potentiel disruptif.
                Des entreprises spécialisées dans l\'intelligence artificielle, la biotechnologie, et les solutions de développement durable sont parmi les plus prometteuses. Elles proposent des solutions innovantes pour les défis globaux, allant de la santé à l\'environnement, en passant par l\'automatisation industrielle.
                La conclusion est évidente : ces startups ne sont pas seulement en train de façonner l\'avenir de la technologie; elles sont en train de remodeler le monde dans lequel nous vivons.
                ',
                'image' => 'https://cdn.pixabay.com/photo/2016/12/02/02/10/idea-1876659_960_720.jpg'
            ],
            [
                'title' => 'Les tendances du marketing numérique pour booster votre stratégie en 2024',
                'category' => 'Marketing numérique',
                'content' => '
                Le marketing numérique évolue constamment, et 2024 ne fera pas exception. De nouvelles tendances émergent, prêtes à transformer la façon dont les marques interagissent avec leurs clients.
                L\'utilisation accrue de l\'intelligence artificielle pour personnaliser les expériences utilisateur, l\'importance croissante du marketing vidéo et des influenceurs, ainsi que l\'avènement des réalités augmentée et virtuelle dans les campagnes publicitaires, sont toutes des tendances à surveiller.
                En conclusion, les entreprises qui adaptent rapidement leurs stratégies pour incorporer ces nouvelles tendances auront un avantage compétitif significatif dans le paysage numérique de 2024.
                ',
                'image' => 'https://cdn.pixabay.com/photo/2016/07/04/19/23/digital-marketing-1497211_960_720.jpg'
            ],
            [
                'title' => 'L\'intégration de l\'IA dans le service client : avantages et défis',
                'category' => 'Outils numériques',
                'content' => '
                L\'intégration de l\'intelligence artificielle (IA) dans le service client offre d\'énormes avantages en termes d\'efficacité et de personnalisation de l\'expérience utilisateur. Elle permet de répondre rapidement aux requêtes des clients et de réduire les délais d\'attente.
                Cependant, cette technologie pose aussi des défis, notamment en matière de confidentialité des données et de perte potentielle d\'emplois. L\'équilibre entre les avantages et les préoccupations éthiques est crucial pour une intégration réussie de l\'IA dans le service client.
                En conclusion, bien que l\'IA transforme le service client en offrant des solutions innovantes, elle nécessite une gestion attentive pour minimiser les impacts négatifs sur la société.
                ',
                'image' => 'https://cdn.pixabay.com/photo/2018/05/08/08/44/artificial-intelligence-3382507_960_720.jpg'
            ],
            [
                'title' => 'Comment l\'intelligence artificielle transforme-t-elle les petites entreprises ?',
                'category' => 'Outils numériques',
                'content' => '
                L\'intelligence artificielle (IA) est devenue un catalyseur de changement pour les petites entreprises, offrant des outils qui étaient autrefois accessibles uniquement aux grandes corporations.
                Grâce à l\'IA, les petites entreprises peuvent optimiser leurs opérations, personnaliser leurs offres de services et mieux comprendre les comportements de leurs clients. Cela ouvre de nouvelles opportunités pour la croissance et la compétitivité sur le marché.
                En conclusion, l\'IA n\'est plus un outil de luxe mais une nécessité pour les petites entreprises souhaitant rester pertinentes et compétitives dans une économie de plus en plus numérisée.
                ',
                'image' => 'https://cdn.pixabay.com/photo/2019/08/06/22/48/artificial-intelligence-4389372_960_720.jpg'
            ],
            [
                'title' => 'Les nouvelles tendances en développement web pour 2024',
                'category' => 'Développement web',
                'content' => '
                Le monde du développement web évolue rapidement, et 2024 verra l\'émergence de nouvelles tendances qui redéfiniront les standards de l\'industrie.
                Les technologies comme les Progressive Web Apps (PWA), le WebAssembly et les nouvelles CSS Grid Layouts prendront de l\'importance, offrant aux développeurs des outils plus puissants pour créer des expériences utilisateur plus fluides et interactives.
                En conclusion, se tenir au courant de ces tendances est essentiel pour tout développeur web souhaitant rester à la pointe de la technologie.
                ',
                'image' => 'https://cdn.pixabay.com/photo/2023/01/10/03/59/programming-7708867_960_720.jpg'
            ],
            [
                'title' => 'Comment optimiser la performance de votre site web avec les dernières technologies',
                'category' => 'Développement web',
                'content' => '
                Optimiser la performance d\'un site web est crucial pour améliorer l\'expérience utilisateur et augmenter la visibilité sur les moteurs de recherche.
                Les technologies actuelles offrent diverses méthodes pour améliorer la vitesse de chargement des pages, la réactivité et l\'accessibilité. L\'utilisation de formats d\'images modernes, l\'implémentation de la mise en cache et l\'optimisation des réponses du serveur sont des pratiques clés.
                En conclusion, l\'adoption de ces technologies peut significativement augmenter la performance de votre site web, le rendant plus attrayant pour les utilisateurs et les moteurs de recherche.
                ',
                'image' => 'https://cdn.pixabay.com/photo/2018/05/08/08/44/artificial-intelligence-3382507_960_720.jpg'
            ],
            [
                'title' => 'Introduction aux frameworks de développement web émergents',
                'category' => 'Développement web',
                'content' => '
                Les frameworks de développement web jouent un rôle crucial dans la construction d\'applications efficaces et évolutives.
                Des frameworks émergents comme Vue.js, Svelte et Flutter pour le Web sont en train de gagner du terrain grâce à leur facilité d\'utilisation et à leur performance. Ils offrent aux développeurs des options robustes pour créer des interfaces utilisateur dynamiques et réactives.
                En conclusion, explorer ces frameworks peut offrir des avantages significatifs pour les développeurs cherchant à améliorer leur productivité et la qualité de leurs applications web.
                ',
                'image' => 'https://cdn.pixabay.com/photo/2015/09/17/17/25/code-944499_960_720.jpg'
            ],
            [
                'title' => 'E-commerce : stratégies pour optimiser vos ventes en ligne',
                'category' => 'E-commerce',
                'content' => '
                L\'e-commerce est un secteur en constante évolution, et l\'optimisation des ventes en ligne est cruciale pour le succès d\'une entreprise.
                Les stratégies efficaces incluent l\'amélioration de l\'expérience utilisateur sur les plateformes mobiles, l\'utilisation de l\'intelligence artificielle pour recommander des produits et la personnalisation des parcours clients basée sur les données comportementales.
                En conclusion, ces stratégies peuvent aider les entreprises à augmenter leurs conversions et à fidéliser leurs clients dans un marché en ligne compétitif.
                ',
                'image' => 'https://cdn.pixabay.com/photo/2024/03/26/11/57/e-commerce-8656646_960_720.jpg'
            ],
            [
                'title' => 'Guide des meilleurs outils de travail collaboratif en ligne',
                'category' => 'Outils numériques',
                'content' => '
                Avec la montée du travail à distance, disposer des bons outils collaboratifs est plus important que jamais.
                Des plateformes comme Slack, Microsoft Teams et Asana facilitent la communication et la collaboration entre équipes, peu importe leur emplacement géographique. Ces outils permettent de gérer les projets efficacement et de maintenir une productivité élevée.
                En conclusion, choisir les outils adaptés peut transformer la manière dont les équipes interagissent et travaillent ensemble, améliorant ainsi l\'efficacité et la satisfaction au travail.
                ',
                'image' => ''
            ],
            [
                'title' => 'Les 10 technologies émergentes à suivre en 2024',
                'category' => 'High-tech',
                'content' => '
                À l\'aube de 2024, certaines technologies émergentes promettent de révolutionner divers secteurs industriels et la vie quotidienne.
                Des avancées telles que l\'IA conversationnelle, la robotique avancée, les nouvelles générations de drones, la bio-impression et les batteries ultra-efficaces sont à surveiller. Ces technologies ont le potentiel de transformer de manière significative les soins de santé, la logistique, l\'énergie et bien plus encore.
                En conclusion, rester informé sur ces technologies peut offrir des opportunités d\'investissement et d\'innovation importantes pour les professionnels et les entreprises.
                ',
                'image' => 'https://cdn.pixabay.com/photo/2024/04/26/09/34/ai-generated-8721505_960_720.jpg'
            ],
            [
                'title' => 'Le guide ultime des meilleures pratiques de cybersécurité pour 2024',
                'category' => 'High-tech',
                'content' => '
                La cybersécurité reste une préoccupation majeure pour les entreprises de toutes tailles en 2024.
                Adopter des pratiques telles que le zero trust, le renforcement de la sécurité des endpoints, et des audits réguliers de sécurité sont essentiels. De plus, la formation continue des employés sur les menaces comme le phishing aide à renforcer les défenses d\'une entreprise contre les attaques cybernétiques.
                En conclusion, mettre en œuvre ces pratiques est crucial pour protéger les actifs numériques et maintenir la confiance des clients et des partenaires commerciaux.
                ',
                'image' => 'https://cdn.pixabay.com/photo/2021/07/31/15/02/hacker-6512174_960_720.jpg'
            ],
            [
                'title' => 'Analyse de données : Comment les entreprises transforment les informations en action',
                'category' => 'Outils numériques',
                'content' => '
                L\'analyse de données joue un rôle clé dans la transformation numérique des entreprises.
                En exploitant les données, les entreprises peuvent découvrir des insights précieux sur le comportement des consommateurs, l\'efficacité des processus, et plus encore. Utiliser ces informations pour guider les décisions stratégiques peut mener à une amélioration significative de la performance globale.
                En conclusion, l\'analyse de données n\'est pas seulement un outil de reporting, mais un moteur essentiel pour l\'innovation et la compétitivité.
                ',
                'image' => 'https://cdn.pixabay.com/photo/2017/05/14/03/45/data-2311261_960_720.png'
            ],
            [
                'title' => 'Développement durable et technologie : innovations vertes à l\'horizon',
                'category' => 'High-tech',
                'content' => '
                Le développement durable est au cœur des préoccupations mondiales, et la technologie joue un rôle crucial dans la création de solutions innovantes.
                Les technologies vertes comme l\'énergie solaire avancée, les matériaux biodégradables, et les innovations dans le recyclage des eaux usées sont en train de redéfinir ce que signifie être une entreprise écologique.
                En conclusion, adopter ces technologies peut aider les entreprises à non seulement réduire leur impact environnemental mais aussi à améliorer leur image de marque et leur rentabilité à long terme.
                ',
                'image' => 'https://cdn.pixabay.com/photo/2017/11/28/10/41/blackboard-2983295_960_720.png'
            ],
            [
                'title' => 'L\'impact des réseaux sociaux sur la politique moderne',
                'category' => 'Réseaux sociaux',
                'content' => '
                Les réseaux sociaux ont transformé la manière dont la politique est menée et comprise dans le monde moderne.
                Ils offrent une plateforme pour la communication rapide et la mobilisation, mais posent également des défis en termes de désinformation et de manipulation de l\'opinion publique. Comprendre cet impact est essentiel pour les acteurs politiques et les citoyens.
                En conclusion, les réseaux sociaux continuent de jouer un rôle ambivalent dans la politique moderne, à la fois comme outils de démocratisation et comme vecteurs de fausses informations.
                ',
                'image' => 'https://cdn.pixabay.com/photo/2018/11/29/21/51/social-media-3846597_960_720.png'
            ],
            [
                'title' => 'Comment construire une carrière réussie dans le secteur technologique ?',
                'category' => 'Développement web',
                'content' => '
                Le secteur technologique offre de vastes opportunités pour ceux qui sont prêts à apprendre et à s\'adapter rapidement.
                Construire une carrière dans ce domaine exige une formation continue, une spécialisation dans des compétences en demande, et le réseautage actif. L\'adoption de ces stratégies peut ouvrir des portes et garantir une progression de carrière rapide et réussie.
                En conclusion, une carrière dans le secteur technologique est dynamique et exigeante, mais offre également d\'importantes récompenses et opportunités de développement.
                ',
                'image' => 'https://cdn.pixabay.com/photo/2023/07/04/19/43/man-8106958_960_720.png'
            ],
            [
                'title' => 'Les enjeux de la confidentialité en ligne à l\'ère du numérique',
                'category' => 'Outils numériques',
                'content' => '
                La confidentialité en ligne est devenue une préoccupation majeure dans l\'ère numérique actuelle.
                Avec les risques croissants de violations de données et d\'intrusions dans la vie privée, il est vital pour les utilisateurs et les entreprises de comprendre et de mettre en œuvre des pratiques de protection des données robustes.
                En conclusion, tout en profitant des avantages du numérique, il est crucial de prendre les mesures nécessaires pour protéger la confidentialité des informations personnelles et commerciales.
                ',
                'image' => 'https://cdn.pixabay.com/photo/2018/10/05/05/53/web-3725158_960_720.png'
            ],
            [
                'title' => 'Futur de l\'éducation : comment la technologie réinvente l\'apprentissage',
                'category' => 'High-tech',
                'content' => '
                La technologie continue de révolutionner le secteur de l\'éducation, offrant de nouvelles méthodes d\'apprentissage et d\'enseignement.
                Des plateformes d\'apprentissage en ligne aux salles de classe virtuelles, la technologie permet un accès plus large à l\'éducation et améliore la personnalisation de l\'enseignement, s\'adaptant aux besoins de chaque élève.
                En conclusion, l\'intégration de la technologie dans l\'éducation est essentielle pour préparer les étudiants aux défis du futur et rendre l\'apprentissage plus efficace et accessible.
                ',
                'image' => 'https://cdn.pixabay.com/photo/2024/04/03/05/49/created-by-ai-8672131_960_720.png'
            ]
        ];

        $i=0;

        while ($i < count($articles)) {
            Post::insert([
                'title' => $articles[$i]['title'],
                'content' => $articles[$i]['content'],
                'category' => $articles[$i]['category'],
                'image' => $articles[$i]['image'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            $i++;
        }
    }
}
