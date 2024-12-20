<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fitness &Musculation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <style>
    :root {
      --primary-color: #4A90E2; /* Bleu ciel */
      --secondary-color: #FF6B3D; /* Orange */
      --accent-color: #9B59B6; /* Violet */
    }


    .hero {
background-color: blueviolet;
      color: white;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      margin-top:none;
    }

    .hero h1 {
      font-size: 4rem;
      font-weight: bold;
      line-height: 1.2;
      animation: fadeInDown 2s ease;
    }

    .hero p {
      font-size: 1.5rem;
      margin: 1rem 0 2rem;
      animation: fadeInUp 2s ease;
    }

    .btn-cta {
      background-color: var(--secondary-color);
      color: white;
      font-weight: bold;
      border-radius: 50px;
      padding: 15px 30px;
      transition: all 0.3s ease;
      animation: fadeIn 2s ease;
    }

    .btn-cta:hover {
      background-color: var(--accent-color);
      color: white;
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }

    .service-icon {
      font-size: 3rem;
      color: var(--primary-color);
      transition: all 0.3s ease;
    }

    .testimonials {
      background-color: #f8f9fa;
      padding: 3rem 0;
    }

    .features {
      background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
      color: white;
      padding: 3rem 0;
    }


    .social-icons a {
      color: white;
      font-size: 1.5rem;
      margin: 0 15px;
      transition: color 0.3s ease;
    }

    .social-icons a:hover {
      color: var(--secondary-color);
    }

   

    #services .card {
      border: none;
      border-radius: 15px;
      transition: all 0.3s ease;
      background: white;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    #services .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0,0,0,0.2);
    }

    #services .card:hover .service-icon {
      color: var(--secondary-color);
      transform: scale(1.1);
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translateY(-50px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(50px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>

<body>
  <?php
 include'header.php';
 ?>

  
  <header class="hero">
    <div class="container">
      <h1>Transformez Votre Corps en 2024</h1>
      <p>Inscrivez-vous pour découvrir les dernières méthodes de musculation et fitness pour atteindre vos objectifs.</p>
      <a href="connexionx.php" class="btn btn-cta btn-lg" style=" transform: translateY(-2px); /* Déplacement vers le haut */
    background-color: #0c4499; /* Couleur de fond au survol */
    color: white; /* Couleur du texte au survol */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Ombre au survol */  text-decoration: none; 
    color: white; /* Couleur du texte */
    padding: 10px 15px; /* Espacement interne */
    border-radius: 25px; /* Coins arrondis */
    transition: transform 0.3s ease, background-color 0.3s ease; /* Animation fluide */
    display: inline-block; /* Pour permettre l'animation */
    font-size: 20px;">Inscription</a>
    </div>
  </header>


  <!-- Footer -->
  <?php
 include'footer.php';
 ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
