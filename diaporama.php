<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stage de Développeur Web - Mai-Juin 2024</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #333;
            overflow: hidden;
        }

        .slideshow-container {
            position: relative;
            max-width: 100%;
            height: 100vh;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .slide {
            display: none;
            padding: 40px;
            text-align: center;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            max-width: 900px;
            width: 90%;
            min-height: 600px;
            animation: fadeIn 0.5s ease-in-out;
        }

        .slide.active {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h1 {
            color: #2c3e50;
            font-size: 2.5em;
            margin-bottom: 20px;
            border-bottom: 3px solid #3498db;
            padding-bottom: 10px;
        }

        h2 {
            color: #34495e;
            font-size: 2em;
            margin-bottom: 20px;
            border-bottom: 2px solid #e74c3c;
            padding-bottom: 10px;
        }

        h3 {
            color: #2980b9;
            font-size: 1.5em;
            margin: 15px 0;
        }

        p, li {
            font-size: 1.2em;
            line-height: 1.6;
            margin: 10px 0;
            text-align: left;
        }

        .slide p {
            text-align: center;
        }

        ul {
            text-align: left;
            max-width: 600px;
            margin: 0 auto;
        }

        li {
            margin: 8px 0;
            padding-left: 10px;
            border-left: 3px solid #3498db;
            list-style: none;
        }

        .navigation {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 20px;
        }

        .nav-btn {
            background: #3498db;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 25px;
            cursor: pointer;
            font-size: 1em;
            transition: all 0.3s ease;
        }

        .nav-btn:hover {
            background: #2980b9;
            transform: translateY(-2px);
        }

        .nav-btn:disabled {
            background: #bdc3c7;
            cursor: not-allowed;
            transform: none;
        }

        .slide-counter {
            position: absolute;
            top: 30px;
            right: 30px;
            background: rgba(52, 152, 219, 0.8);
            color: white;
            padding: 10px 15px;
            border-radius: 20px;
            font-weight: bold;
        }

        .date-badge {
            background: #e74c3c;
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 1em;
            margin: 10px;
            display: inline-block;
        }

        .tech-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 15px;
            margin: 20px 0;
        }

        .tech-item {
            background: #f8f9fa;
            border: 2px solid #3498db;
            border-radius: 10px;
            padding: 15px;
            font-weight: bold;
            color: #2c3e50;
        }

        .highlight {
            background: #f39c12;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="slideshow-container">
        <div class="slide-counter">
            <span id="currentSlide">1</span> / <span id="totalSlides">10</span>
        </div>

        <!-- Slide 1: Title -->
        <div class="slide active">
            <h1>Mon Stage de Développeur Web</h1>
            <div class="date-badge">13 Mai - 27 Juin 2024</div>
            <p style="font-size: 1.5em; margin: 30px 0;">Présentation de mon expérience professionnelle</p>
            <p style="font-size: 1.2em; color: #7f8c8d;">Durée : 7 semaines</p>
        </div>

        <!-- Slide 2: Introduction -->
        <div class="slide">
            <h2>Introduction</h2>
            <p>Ce stage de 7 semaines m'a permis de découvrir le monde professionnel du développement web et d'appliquer mes connaissances théoriques dans un environnement réel.</p>
            <h3>Objectifs du stage :</h3>
            <ul>
                <li>Découvrir les métiers du développement web</li>
                <li>Acquérir de l'expérience pratique</li>
                <li>Développer mes compétences techniques</li>
                <li>Comprendre le fonctionnement d'une équipe de développement</li>
                <li>Contribuer à des projets réels</li>
            </ul>
        </div>

        <!-- Slide 3: Entreprise -->
        <div class="slide">
            <h2>L'Entreprise d'Accueil</h2>
            <h3>Contexte professionnel :</h3>
            <ul>
                <li>Équipe de développement dynamique</li>
                <li>Projets variés en développement web</li>
                <li>Environnement d'apprentissage stimulant</li>
                <li>Encadrement professionnel de qualité</li>
                <li>Utilisation de technologies modernes</li>
            </ul>
            <p style="margin-top: 30px;">Une opportunité exceptionnelle de mettre en pratique mes connaissances en développement web dans un cadre professionnel.</p>
        </div>

        <!-- Slide 4: Technologies -->
        <div class="slide">
            <h2>Technologies Utilisées</h2>
            <div class="tech-grid">
                <div class="tech-item">HTML5</div>
                <div class="tech-item">CSS3</div>
                <div class="tech-item">JavaScript</div>
                <div class="tech-item">PHP</div>
                <div class="tech-item">MySQL</div>
                <div class="tech-item">Git</div>
                <div class="tech-item">Bootstrap</div>
                <div class="tech-item">jQuery</div>
            </div>
            <p>Utilisation de <span class="highlight">technologies modernes</span> pour le développement d'applications web complètes.</p>
        </div>

        <!-- Slide 5: Missions -->
        <div class="slide">
            <h2>Missions Réalisées</h2>
            <h3>Développement Front-End :</h3>
            <ul>
                <li>Création d'interfaces utilisateur responsive</li>
                <li>Intégration de maquettes graphiques</li>
                <li>Optimisation de l'expérience utilisateur</li>
            </ul>
            <h3>Développement Back-End :</h3>
            <ul>
                <li>Développement de fonctionnalités en PHP</li>
                <li>Gestion de bases de données MySQL</li>
                <li>Création d'APIs et de services web</li>
            </ul>
        </div>

        <!-- Slide 6: Projets -->
        <div class="slide">
            <h2>Projets Principaux</h2>
            <h3>Projet 1 : Application Web de Gestion</h3>
            <ul>
                <li>Développement d'une interface d'administration</li>
                <li>Système de gestion des utilisateurs</li>
                <li>Intégration de fonctionnalités CRUD</li>
            </ul>
            <h3>Projet 2 : Site Web Responsive</h3>
            <ul>
                <li>Création d'un site vitrine moderne</li>
                <li>Optimisation pour tous les appareils</li>
                <li>Intégration de formulaires de contact</li>
            </ul>
        </div>

        <!-- Slide 7: Compétences -->
        <div class="slide">
            <h2>Compétences Acquises</h2>
            <h3>Compétences Techniques :</h3>
            <ul>
                <li>Maîtrise approfondie de PHP et MySQL</li>
                <li>Développement d'interfaces responsive</li>
                <li>Utilisation avancée de Git pour le versioning</li>
                <li>Débogage et optimisation de code</li>
            </ul>
            <h3>Compétences Professionnelles :</h3>
            <ul>
                <li>Travail en équipe et communication</li>
                <li>Gestion de projet et respect des délais</li>
                <li>Résolution de problèmes complexes</li>
                <li>Adaptabilité et apprentissage continu</li>
            </ul>
        </div>

        <!-- Slide 8: Défis -->
        <div class="slide">
            <h2>Défis Rencontrés</h2>
            <h3>Défis Techniques :</h3>
            <ul>
                <li>Adaptation à de nouveaux frameworks</li>
                <li>Optimisation des performances de l'application</li>
                <li>Résolution de bugs complexes</li>
                <li>Intégration de fonctionnalités avancées</li>
            </ul>
            <h3>Solutions Apportées :</h3>
            <ul>
                <li>Recherche documentaire approfondie</li>
                <li>Collaboration avec l'équipe expérimentée</li>
                <li>Tests itératifs et amélioration continue</li>
                <li>Formation auto-dirigée sur de nouveaux outils</li>
            </ul>
        </div>

        <!-- Slide 9: Résultats -->
        <div class="slide">
            <h2>Résultats et Accomplissements</h2>
            <h3>Réalisations Concrètes :</h3>
            <ul>
                <li>✅ Livraison de 2 projets complets dans les délais</li>
                <li>✅ Amélioration de 30% des performances de l'application</li>
                <li>✅ Intégration réussie dans l'équipe de développement</li>
                <li>✅ Contribution significative au code base de l'entreprise</li>
            </ul>
            <p style="margin-top: 30px;">Une expérience <span class="highlight">enrichissante</span> qui m'a permis de confirmer mon orientation professionnelle.</p>
        </div>

        <!-- Slide 10: Conclusion -->
        <div class="slide">
            <h2>Conclusion</h2>
            <p style="font-size: 1.3em; margin: 20px 0;">Ce stage a été une expérience <span class="highlight">formatrice exceptionnelle</span> qui m'a permis de :</p>
            <ul>
                <li>Confirmer ma passion pour le développement web</li>
                <li>Acquérir une expérience professionnelle précieuse</li>
                <li>Développer mes compétences techniques et relationnelles</li>
                <li>Comprendre les enjeux du développement en entreprise</li>
            </ul>
            <h3 style="margin-top: 30px; color: #e74c3c;">Merci pour votre attention !</h3>
            <div class="date-badge">13 Mai - 27 Juin 2024</div>
        </div>

        <div class="navigation">
            <button class="nav-btn" id="prevBtn" onclick="changeSlide(-1)">← Précédent</button>
            <button class="nav-btn" id="nextBtn" onclick="changeSlide(1)">Suivant →</button>
        </div>
    </div>

    <script>
        let currentSlideIndex = 0;
        const slides = document.querySelectorAll('.slide');
        const totalSlides = slides.length;

        // Update slide counter
        document.getElementById('totalSlides').textContent = totalSlides;

        function showSlide(index) {
            // Hide all slides
            slides.forEach(slide => slide.classList.remove('active'));
            
            // Show current slide
            slides[index].classList.add('active');
            
            // Update counter
            document.getElementById('currentSlide').textContent = index + 1;
            
            // Update navigation buttons
            document.getElementById('prevBtn').disabled = index === 0;
            document.getElementById('nextBtn').disabled = index === totalSlides - 1;
        }

        function changeSlide(direction) {
            currentSlideIndex += direction;
            
            // Ensure we stay within bounds
            if (currentSlideIndex < 0) currentSlideIndex = 0;
            if (currentSlideIndex >= totalSlides) currentSlideIndex = totalSlides - 1;
            
            showSlide(currentSlideIndex);
        }

        // Keyboard navigation
        document.addEventListener('keydown', function(event) {
            if (event.key === 'ArrowLeft') {
                changeSlide(-1);
            } else if (event.key === 'ArrowRight') {
                changeSlide(1);
            }
        });

        // Initialize
        showSlide(0);
    </script>
</body>
</html>